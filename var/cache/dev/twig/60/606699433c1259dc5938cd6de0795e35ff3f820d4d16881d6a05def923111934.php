<?php

/* MwebCoreBundle::layout.html.twig */
class __TwigTemplate_c4a644763e1ca487fa6cb681f766c3f2f7a9a184e4bf619da0713a5cf5b38fd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'xmlnsOg' => array($this, 'block_xmlnsOg'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f9a9100cff528028454559bc80426b661c46c7e9c9d98be93120643109ba46a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9a9100cff528028454559bc80426b661c46c7e9c9d98be93120643109ba46a->enter($__internal_1f9a9100cff528028454559bc80426b661c46c7e9c9d98be93120643109ba46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebCoreBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method"), "html", null, true);
        echo "\" ";
        $this->displayBlock('xmlnsOg', $context, $blocks);
        echo ">
<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("meta.home.title"), "html", null, true);
        echo "</title>


    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "

</head>
<body id=\"default\">

    <header>
        <div class=\"right black\"></div>
        <div class=\"container-fluid\">
            <div class=\"wrap\">
                <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_homepage");
        echo "\" id=\"logo\">
                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/img/logo.png"), "html", null, true);
        echo "\" alt=\"Festival Circasismic\"/>
                </a>

                <button class=\"mobile-menu mobile-only\"><span class=\"glyphicon glyphicon-menu-hamburger\"></span></button>
                <nav id=\"menu-wrap\">
                    <ul id=\"menu\">
                        <li class=\"elm_menu\"><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_homepage");
        echo "\">Accueil</a></li>
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagesMenu"]) ? $context["pagesMenu"] : $this->getContext($context, "pagesMenu")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 33
            echo "                            <li class=\"elm_menu\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("circa_page", array("slug" => $this->getAttribute($context["page"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    </ul>
                </nav>

                <div class=\"clear\"></div>
            </div>
        </div>

    </header>

    ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "
    <section id=\"section-partner\">
        <div class=\"section-container\">
            <div class=\"container-fluid\">
                <ul class=\"partner-list\">
                    <li><a href=\"\" target=\"_blank\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/partner/bfc.jpg"), "partner"), "html", null, true);
        echo "\" /></a></li>
                    <li><a href=\"\" target=\"_blank\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/partner/studioplus.pdf"), "partner"), "html", null, true);
        echo "\" /></a></li>
                    <li><a href=\"\" target=\"_blank\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/partner/rodia.jpg"), "partner"), "html", null, true);
        echo "\" /></a></li>
                    <li> <a href=\"\" target=\"_blank\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/partner/zen.png"), "partner"), "html", null, true);
        echo "\" /></a></li>
                    <li> <a href=\"\" target=\"_blank\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/partner/grd-besac.jpg"), "partner"), "html", null, true);
        echo "\" /></a></li>
                    <li> <a href=\"\" target=\"_blank\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/partner/Sacem_logo_vertical_CMJN.jpg"), "partner"), "html", null, true);
        echo "\" /></a></li>
                </ul>
            </div>
    </section>

    ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-9644162-8', 'auto');
        ga('send', 'pageview');

    </script>
</body>
</html>";
        
        $__internal_1f9a9100cff528028454559bc80426b661c46c7e9c9d98be93120643109ba46a->leave($__internal_1f9a9100cff528028454559bc80426b661c46c7e9c9d98be93120643109ba46a_prof);

    }

    // line 2
    public function block_xmlnsOg($context, array $blocks = array())
    {
        $__internal_9c143985d7b25496893c46443c42df64a73bc78004a8926e538266e5873ee0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c143985d7b25496893c46443c42df64a73bc78004a8926e538266e5873ee0a5->enter($__internal_9c143985d7b25496893c46443c42df64a73bc78004a8926e538266e5873ee0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "xmlnsOg"));

        
        $__internal_9c143985d7b25496893c46443c42df64a73bc78004a8926e538266e5873ee0a5->leave($__internal_9c143985d7b25496893c46443c42df64a73bc78004a8926e538266e5873ee0a5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_168fe1cbf8c037da2565224d756a4dd094714b63e6e01ae4bf20522b2ea74f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168fe1cbf8c037da2565224d756a4dd094714b63e6e01ae4bf20522b2ea74f73->enter($__internal_168fe1cbf8c037da2565224d756a4dd094714b63e6e01ae4bf20522b2ea74f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_168fe1cbf8c037da2565224d756a4dd094714b63e6e01ae4bf20522b2ea74f73->leave($__internal_168fe1cbf8c037da2565224d756a4dd094714b63e6e01ae4bf20522b2ea74f73_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f6e78d9c32b2279500139c4602b3b91aab98cb7e1094956aabc711f32fc697a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6e78d9c32b2279500139c4602b3b91aab98cb7e1094956aabc711f32fc697a->enter($__internal_5f6e78d9c32b2279500139c4602b3b91aab98cb7e1094956aabc711f32fc697a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/css/style.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" media=\"all and (min-width: 768px)\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/css/responsive/responsiveDesk.css"), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_5f6e78d9c32b2279500139c4602b3b91aab98cb7e1094956aabc711f32fc697a->leave($__internal_5f6e78d9c32b2279500139c4602b3b91aab98cb7e1094956aabc711f32fc697a_prof);

    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        $__internal_d6eb5943b34890119bafd8b3de240e46fbfa5bc636f3a4ee7815507b54a5be82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6eb5943b34890119bafd8b3de240e46fbfa5bc636f3a4ee7815507b54a5be82->enter($__internal_d6eb5943b34890119bafd8b3de240e46fbfa5bc636f3a4ee7815507b54a5be82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 45
        echo "
    ";
        
        $__internal_d6eb5943b34890119bafd8b3de240e46fbfa5bc636f3a4ee7815507b54a5be82->leave($__internal_d6eb5943b34890119bafd8b3de240e46fbfa5bc636f3a4ee7815507b54a5be82_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bec511be97d977920032565fa806451a5b48af7f2cf6dcab28f1ac35bdbd86eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec511be97d977920032565fa806451a5b48af7f2cf6dcab28f1ac35bdbd86eb->enter($__internal_bec511be97d977920032565fa806451a5b48af7f2cf6dcab28f1ac35bdbd86eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/js/plugin/a_jquery.3.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/js/plugin/a_mw-library.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/js/plugin/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/js/plugin/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/js/script/zzz.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_bec511be97d977920032565fa806451a5b48af7f2cf6dcab28f1ac35bdbd86eb->leave($__internal_bec511be97d977920032565fa806451a5b48af7f2cf6dcab28f1ac35bdbd86eb_prof);

    }

    public function getTemplateName()
    {
        return "MwebCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 67,  239 => 66,  235 => 65,  231 => 64,  226 => 63,  220 => 62,  212 => 45,  206 => 44,  197 => 13,  193 => 12,  188 => 11,  182 => 10,  171 => 7,  160 => 2,  142 => 70,  140 => 62,  132 => 57,  128 => 56,  124 => 55,  120 => 54,  116 => 53,  112 => 52,  105 => 47,  103 => 44,  92 => 35,  81 => 33,  77 => 32,  73 => 31,  64 => 25,  60 => 24,  49 => 15,  47 => 10,  40 => 7,  30 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.getLocale() }}\" {% block xmlnsOg %}{% endblock %}>
<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

    <title>{% block title %}{% endblock %}{{ 'meta.home.title'|trans }}</title>


    {%  block stylesheets %}
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('bundles/mwebcore/css/bootstrap.min.css') }}\"/>
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('bundles/mwebcore/css/style.css') }}\"/>
        <link rel=\"stylesheet\" type=\"text/css\" media=\"all and (min-width: 768px)\" href=\"{{ asset('bundles/mwebcore/css/responsive/responsiveDesk.css') }}\"/>
    {% endblock %}


</head>
<body id=\"default\">

    <header>
        <div class=\"right black\"></div>
        <div class=\"container-fluid\">
            <div class=\"wrap\">
                <a href=\"{{ path('_homepage') }}\" id=\"logo\">
                    <img src=\"{{ asset('bundles/mwebcore/img/logo.png') }}\" alt=\"Festival Circasismic\"/>
                </a>

                <button class=\"mobile-menu mobile-only\"><span class=\"glyphicon glyphicon-menu-hamburger\"></span></button>
                <nav id=\"menu-wrap\">
                    <ul id=\"menu\">
                        <li class=\"elm_menu\"><a href=\"{{ path('_homepage') }}\">Accueil</a></li>
                        {% for page in pagesMenu %}
                            <li class=\"elm_menu\"><a href=\"{{ path('circa_page', {'slug': page.slug}) }}\">{{ page.title }}</a></li>
                        {% endfor %}
                    </ul>
                </nav>

                <div class=\"clear\"></div>
            </div>
        </div>

    </header>

    {% block content %}

    {% endblock %}

    <section id=\"section-partner\">
        <div class=\"section-container\">
            <div class=\"container-fluid\">
                <ul class=\"partner-list\">
                    <li><a href=\"\" target=\"_blank\"><img src=\"{{ asset('uploads/partner/bfc.jpg')| imagine_filter('partner') }}\" /></a></li>
                    <li><a href=\"\" target=\"_blank\"><img src=\"{{ asset('uploads/partner/studioplus.pdf')| imagine_filter('partner') }}\" /></a></li>
                    <li><a href=\"\" target=\"_blank\"><img src=\"{{ asset('uploads/partner/rodia.jpg')| imagine_filter('partner') }}\" /></a></li>
                    <li> <a href=\"\" target=\"_blank\"><img src=\"{{ asset('uploads/partner/zen.png')| imagine_filter('partner') }}\" /></a></li>
                    <li> <a href=\"\" target=\"_blank\"><img src=\"{{ asset('uploads/partner/grd-besac.jpg')| imagine_filter('partner') }}\" /></a></li>
                    <li> <a href=\"\" target=\"_blank\"><img src=\"{{ asset('uploads/partner/Sacem_logo_vertical_CMJN.jpg')| imagine_filter('partner') }}\" /></a></li>
                </ul>
            </div>
    </section>

    {% block javascripts %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/mwebcore/js/plugin/a_jquery.3.1.1.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/mwebcore/js/plugin/a_mw-library.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/mwebcore/js/plugin/bootstrap.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/mwebcore/js/plugin/jquery.parallax-1.1.3.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/mwebcore/js/script/zzz.js') }}\"></script>

    {% endblock %}
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-9644162-8', 'auto');
        ga('send', 'pageview');

    </script>
</body>
</html>", "MwebCoreBundle::layout.html.twig", "/home/fab/Documents/Pro/www/circa/src/Mweb/CoreBundle/Resources/views/layout.html.twig");
    }
}
