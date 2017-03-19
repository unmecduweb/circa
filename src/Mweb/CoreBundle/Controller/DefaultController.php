<?php

namespace Mweb\CoreBundle\Controller;

use Mweb\CoreBundle\Form\ContactType;
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
                
                if(!$request->cookies->get('intro')) {
                        $cookie = new Cookie('intro', 'viewed');
                        $response->headers->setCookie($cookie);
                }
                return $response;
                
        }
        
        public function pageAction(Request $request, $slug)
        {
        
                $pagesMenu = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findAll();
                $page = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findOneBySlug($slug);
                $newsList = array();
                $artistList = array();
                
                if($page->getDevAlias() == 'news'){
                        $newsList = $this->getDoctrine()->getRepository('MwebCoreBundle:News')->findAll();
                }else if($page->getDevAlias() == 'artist'){
                        $artistList = $this->getDoctrine()->getRepository('MwebCoreBundle:Artist')->findAll();
                }
                $news = $this->getDoctrine()->getRepository('MwebCoreBundle:News')->findBy(array(), array('created' => 'DESC'), 2);
                
                
                return $this->render('MwebCoreBundle::content.html.twig', array(
                        'pagesMenu' => $pagesMenu,
                        'page' => $page,
                        'news'=>$news,
                        'newsList'=>$newsList,
                        'artistList'=>$artistList
                
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
                        'news'=>$news,
                        'parent'=>$parent
                
                ));
                
        }
        
        
        public function artistAction(Request $request, $slugArtist)
        {
                
                $pagesMenu = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findAll();
                $artist = $this->getDoctrine()->getRepository('MwebCoreBundle:Artist')->findOneBySlug($slugArtist);
                $artistList = $this->getDoctrine()->getRepository('MwebCoreBundle:Artist')->findBy(array('type'=>$artist->getType()), array('created' => 'DESC'), 2);
                
                
                $parent = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findOneByDevAlias('artist');
                return $this->render('MwebCoreBundle::artist.html.twig', array(
                        'pagesMenu' => $pagesMenu,
                        'artistList' => $artistList,
                        'artist'=>$artist,
                        'parent'=>$parent
                
                ));
                
        }
        
        
}
