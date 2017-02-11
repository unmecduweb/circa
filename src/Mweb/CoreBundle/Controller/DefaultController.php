<?php

namespace Mweb\CoreBundle\Controller;

use Mweb\CoreBundle\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SimpleXMLElement;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
        
        public function indexAction(Request $request)
        {
                
                $pagesMenu = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findBy(array('parentContent' => null));
                $news = $this->getDoctrine()->getRepository('MwebCoreBundle:News')->findBy(array(), array('created' => 'DESC'), 2);
                
                
                return $this->render('MwebCoreBundle::index.html.twig', array(
                        'pagesMenu' => $pagesMenu,
                        'news' => $news
                
                ));
                
        }
        
        public function pageAction(Request $request, $slug)
        {
                
                $pagesMenu = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findBy(array('parentContent' => null));
                $page = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findOneBySlug($slug);
                $news = $this->getDoctrine()->getRepository('MwebCoreBundle:News')->findBy(array(), array('created' => 'DESC'), 2);
                
                return $this->render('MwebCoreBundle::content.html.twig', array(
                        'pagesMenu' => $pagesMenu,
                        'page' => $page,
                        'news'=>$news
                
                ));
                
        }
        
        public function newsAction(Request $request, $slugNews)
        {
                
                $pagesMenu = $this->getDoctrine()->getRepository('MwebCoreBundle:Content')->findBy(array('parentContent' => null));
                $news = $this->getDoctrine()->getRepository('MwebCoreBundle:News')->findBy(array(), array('created' => 'DESC'), 2);
                $actu = $this->getDoctrine()->getRepository('MwebCoreBundle:News')->findOneBySlug($slugNews);
                
                return $this->render('MwebCoreBundle::actu.html.twig', array(
                        'pagesMenu' => $pagesMenu,
                        'actu' => $actu,
                        'news'=>$news
                
                ));
                
        }
        
        
}
