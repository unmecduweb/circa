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
        
                $artistRepo = $this->getDoctrine()->getRepository('MwebCoreBundle:Artist');
                
                $pagesMenu = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findAll();
                $news = $this->getDoctrine()->getRepository('MwebCoreBundle:News')->findBy(array(), array('created' => 'DESC'), 2);
                
                $date = new \DateTime('now');
                if($date->format('H')>=00 && $date->format('H')<=16){
                        
                        /*$date = new \DateTime('2017-05-05 00:00');*/
                        $date = new \DateTime('now -1day');
                        
                }else {
        
                        
                        $artists['out']['toCome'] = $artistRepo->getArtistToCome('out', $date, 'ven');
                        if (count($artists['out']['toCome']) == 0) {
                                $artists['out']['toCome'] = $artistRepo->getArtistToComeAfterMid('out', new \DateTime('2017-05-05 00:00'), 'ven');
                        }
                        
                }
                $artists['chapiteau']['toCome'] = $artistRepo->getArtistToCome('chapiteau', $date, 'ven');
                if (count($artists['chapiteau']['toCome']) == 0) {
                
                        $artists['chapiteau']['toCome'] = $artistRepo->getArtistToComeAfterMid('chapiteau', new \DateTime('2017-05-05 00:00'), 'ven');
                }
                $artists['bar']['toCome'] = $artistRepo->getArtistToCome('bar', $date, 'ven');
                if (count($artists['bar']['toCome']) == 0) {
                        $artists['bar']['toCome'] = $artistRepo->getArtistToComeAfterMid('bar', new \DateTime('2017-05-05 00:00'), 'ven');
                }
                
                              
                $artists['out']['now'] = $artistRepo->getArtistNow('out', $date, 'ven');
                $artists['bar']['now'] = $artistRepo->getArtistNow('bar', $date, 'ven');
                $artists['chapiteau']['now'] = $artistRepo->getArtistNow('chapiteau',$date, 'ven');
                
                
                
                
                $response = $this->render('MwebCoreBundle::index.html.twig', array(
                        'pagesMenu' => $pagesMenu,
                        'news' => $news,
                        'artists' => $artists
                
                
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
                        $artistList = $this->getDoctrine()->getRepository('MwebCoreBundle:Artist')->findBy(array(), array('position' => 'ASC'));
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
        
        
        public function progAction(Request $request)
        {
                
                $pagesMenu = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findAll();
                $allArtists = $this->getDoctrine()->getRepository('MwebCoreBundle:Artist')->findBy(array(), array('sessionDate' => 'ASC'));
                $artistsOrder = array();
                foreach ($allArtists as $k => $artist) {
                        if ($artist->getSessionDate()->format('H') < 15) $key = '3' . $artist->getSessionDate()->format('Hi');
                        else $key = $artist->getSessionDate()->format('Hi');
                        //if(isset($artistsOrder[date('d', $artist->getSessionDate()->getTimestamp()).'_'.$artist->getScene().'_'.$key]))echo $artist->getSessionDate()->format('m-d H:i');
                        $artistsOrder[date('d', $artist->getSessionDate()->getTimestamp()) . '_' . $artist->getScene() . '_' . $key] = $k;
                        if ($artist->getId() == 10) {
                                $artist->setTitle('The Serious Road Trip');
                                $artistsOrder['05_out_2030'] = $k;
                                $artistsOrder['06_out_1830'] = $k;
                        }
                        if ($artist->getId() == 8) {
                                $artistsOrder['04_chapiteau_2330'] = $k;
                        }
                        
                }
                
                
                ksort($artistsOrder);
                
                foreach ($artistsOrder as $i => $k) {
                        if ($i == '05_out_2030') {
                                $artistsOrderList['05']['out']["2030"] = $allArtists[$k];
                        } elseif ($i == '06_out_1830') {
                                $artistsOrderList['06']['out']["1830"] = $allArtists[$k];
                        } elseif ($i == '04_chapiteau_2330') {
                                
                                $artistsOrderList['04']['chapiteau']["2330"] = $allArtists[$k];
                                
                        } else {
                                $artistsOrderList[date('d', $allArtists[$k]->getSessionDate()->getTimestamp())][$allArtists[$k]->getScene()][$allArtists[$k]->getSessionDate()->format('Hi')] = $allArtists[$k];
                        }
                }
                
                $parent = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findOneByDevAlias('artist');
                return $this->render('MwebCoreBundle::prog.html.twig', array(
                        'pagesMenu' => $pagesMenu,
                        'artistsList' => $artistsOrderList,
                        'parent' => $parent
                
                ));
                
        }
        
        public function artistAction(Request $request, $slugArtist)
        {
                
                $pagesMenu = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findAll();
                $artist = $this->getDoctrine()->getRepository('MwebCoreBundle:Artist')->findOneBySlug($slugArtist);
                $artistList = $this->getDoctrine()->getRepository('MwebCoreBundle:Artist')->findBy(array('type' => $artist->getType()), array('position' => 'ASC'), 3);
                
                
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
                        
                } else {
                        
                        $cookieVal = $game->getId() + time();
                        $cookie = new Cookie($game->getDevAlias(), $cookieVal, time() + 3600 * 24 * 7);
                }
                //ETAPE 2 USER EXISTE
                if ($gamer) {
                        $form = $this->createForm(GameCodeType::class);
                        $win = false;
                        $form->handleRequest($request);
                        
                        if ($form->isValid()) {
                                if (strtolower(trim($form->get('code')->getData())) == strtolower(trim($game->getCode()))) {
                                        
                                        //VAINQUEUR DU JEU
                                        if ($game->getGameStatus() == 0) {
                                                $game->setGameStatus(1);
                                                $game->setWinner($gamer);
                                                $em->persist($game);
                                                
                                                $gamer->setWinner(2);
                                                $em->persist($gamer);
                                                $win = 'winGame';
                                        } else {
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
                        return $response;
                }
        }
        
        
}
