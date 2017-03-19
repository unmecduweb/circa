<?php

namespace Mweb\CoreBundle\Controller;

use Mweb\CoreBundle\Entity\Gamer;
use Mweb\CoreBundle\Form\ContactType;
use Mweb\CoreBundle\Form\GameCodeType;
use Mweb\CoreBundle\Form\GamerType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SimpleXMLElement;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
        
        public function indexAction(Request $request)
        {
                
                
                $pagesMenu = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findAll();
                $news = $this->getDoctrine()->getRepository('MwebCoreBundle:News')->findBy(array(), array('created' => 'DESC'), 2);
                
                
                $response = $this->render('MwebCoreBundle::index.html.twig', array(
                        'pagesMenu' => $pagesMenu,
                        'news' => $news
                
                
                ));
                
                if (!$request->cookies->get('intro')) {
                        $cookie = new Cookie('intro', 'viewed');
                        $response->headers->setCookie($cookie);
                }
                return $response;
                
        }
        
        public function pageAction(Request $request, $slug)
        {
                
                $pagesMenu = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findAll();
                $page = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findOneBySlug($slug);
                $game = $this->getDoctrine()->getRepository('MwebCoreBundle:Game')->findOneByStatus(1);
                $newsList = array();
                $artistList = array();
                
                if ($page->getDevAlias() == 'news') {
                        $newsList = $this->getDoctrine()->getRepository('MwebCoreBundle:News')->findAll();
                } else if ($page->getDevAlias() == 'artist') {
                        $artistList = $this->getDoctrine()->getRepository('MwebCoreBundle:Artist')->findAll();
                }
                $news = $this->getDoctrine()->getRepository('MwebCoreBundle:News')->findBy(array(), array('created' => 'DESC'), 2);
                
                
                return $this->render('MwebCoreBundle::content.html.twig', array(
                        'pagesMenu' => $pagesMenu,
                        'page' => $page,
                        'news' => $news,
                        'newsList' => $newsList,
                        'artistList' => $artistList,
                        'game' => $game
                
                ));
                
        }
        
        public function newsAction(Request $request, $slugNews)
        {
                
                $pagesMenu = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findAll();
                $news = $this->getDoctrine()->getRepository('MwebCoreBundle:News')->findBy(array(), array('created' => 'DESC'), 2);
                $actu = $this->getDoctrine()->getRepository('MwebCoreBundle:News')->findOneBySlug($slugNews);
                
                $parent = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findOneByDevAlias('news');
                return $this->render('MwebCoreBundle::actu.html.twig', array(
                        'pagesMenu' => $pagesMenu,
                        'actu' => $actu,
                        'news' => $news,
                        'parent' => $parent
                
                ));
                
        }
        
        
        public function artistAction(Request $request, $slugArtist)
        {
                
                $pagesMenu = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findAll();
                $artist = $this->getDoctrine()->getRepository('MwebCoreBundle:Artist')->findOneBySlug($slugArtist);
                $artistList = $this->getDoctrine()->getRepository('MwebCoreBundle:Artist')->findBy(array('type' => $artist->getType()), array('created' => 'DESC'), 3);
                
                
                $parent = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findOneByDevAlias('artist');
                return $this->render('MwebCoreBundle::artist.html.twig', array(
                        'pagesMenu' => $pagesMenu,
                        'artistList' => $artistList,
                        'artist' => $artist,
                        'parent' => $parent
                
                ));
                
        }
        
        
        public function gameAction(Request $request)
        {
                
                $em = $this->getDoctrine()->getManager();
                
                $pagesMenu = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findAll();
                $page = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findOneByDevAlias('game');
                $news = $this->getDoctrine()->getRepository('MwebCoreBundle:News')->findBy(array(), array('created' => 'DESC'), 2);
                
                $game = $this->getDoctrine()->getRepository('MwebCoreBundle:Game')->findOneByStatus(1);
                
                $gamer = false;
                $cookie = false;
                $cookies = $request->cookies;
        
                
                
                if ($cookies->has($game->getDevAlias())) {
                        
                        $gamer = $this->getDoctrine()->getRepository('MwebCoreBundle:Gamer')->findOneByCookie($cookies->get($game->getDevAlias()));
                
                }else{
        
                        $cookieVal = $game->getId() + time();
                        $cookie = new Cookie($game->getDevAlias(), $cookieVal, time() + 3600 * 24 * 7);
                }
                //ETAPE 2 USER EXISTE
                if ($gamer) {
                        $form = $this->createForm(GameCodeType::class);
                        $win= false;
                        $form->handleRequest($request);
                        
                        if ($form->isValid()) {
                                if ($form->get('code')->getData() == $game->getCode()) {
                                        
                                        //VAINQUEUR DU JEU
                                        if($game->getGameStatus() == 0) {
                                                $game->setGameStatus(1);
                                                $game->setWinner($gamer);
                                                $em->persist($game);
        
                                                $gamer->setWinner(2);
                                                $em->persist($gamer);
                                                $win = 'winGame';
                                        }else{
                                                $gamer->setWinner(1);
                                                $em->persist($gamer);
        
                                                $win = 'winTirage';
                                        }
                                        $em->flush();
                                        
                                } else {
                                        $win = 'lose';
                                }
                        }
                        $response = new Response();
                        return $this->render('MwebCoreBundle::step2game.html.twig', array(
                                'pagesMenu' => $pagesMenu,
                                'page' => $page,
                                'news' => $news,
                                'form' => $form->createView(),
                                'game' => $game,
                                'gamer' => $gamer,
                                'win' => $win
        
        
                        ));
                        
                        
                } else {
                        //ETAPE 1 CREATION USER
                        
                        $gamer = new Gamer();
                        
                        
                        $form = $this->createForm(GamerType::class, $gamer);
                        
                        $form->handleRequest($request);
                        
                        
                        if ($form->isValid()) {
                                
                                $gamer->setIp($request->getClientIp());
                                $gamer->setGame($game);
                                $gamer->setCookie($cookies->get($game->getDevAlias()));
                                
                                
                                $em->persist($gamer);
                                $em->flush();
                                return $this->redirect($this->generateUrl('circa_game'));
                        }
                        
                        $response = new Response();
                        $response = $this->render('MwebCoreBundle::step1game.html.twig', array(
                                'pagesMenu' => $pagesMenu,
                                'page' => $page,
                                'news' => $news,
                                'form' => $form->createView(),
                                'game' => $game,
                        
                        
                        ));
                        if ($cookie) {
                                $response->headers->setCookie($cookie);
                        }
                        $response->send();
                }
        }
        
        
}
