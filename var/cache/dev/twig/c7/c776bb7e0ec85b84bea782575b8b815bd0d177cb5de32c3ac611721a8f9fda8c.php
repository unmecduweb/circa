<?php

/* MwebCoreBundle::layout.html.twig */
class __TwigTemplate_cb19e50c7f7867aa7c9b00928cda4a295704e299e9360f5773e3c346ba15ab70 extends Twig_Template
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
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc9bfecc75512a11a2305e6a4c68e3107c7240956815cbdd7c46c427463b4f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9bfecc75512a11a2305e6a4c68e3107c7240956815cbdd7c46c427463b4f73->enter($__internal_cc9bfecc75512a11a2305e6a4c68e3107c7240956815cbdd7c46c427463b4f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebCoreBundle::layout.html.twig"));

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
        <div class=\"container-fluid\">
            <div class=\"wrap\">
                <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_homepage");
        echo "\" id=\"logo\">
                    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/img/logo.png"), "html", null, true);
        echo "\" alt=\"Festival Circasismic\"/>
                </a>

                <ul class=\"social-link\">
                    <li>
                        <a href=\"https://www.facebook.com/festivalcircasismic/\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/img/fb.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                        <a href=\"https://www.instagram.com/festivalcircasismic/\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/img/inst.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                    </li>
                </ul>
                <button class=\"mobile-menu mobile-only\"><span class=\"glyphicon glyphicon-menu-hamburger\"></span></button>
                <nav id=\"menu-wrap\">
                    <ul id=\"menu\">
                        ";
        // line 36
        $context["selected"] = "";
        // line 37
        echo "                        ";
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "slug"), "method"))) {
            $context["selected"] = "selected";
        }
        // line 38
        echo "                        <li class=\"elm_menu\">
                            <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_homepage");
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["selected"]) ? $context["selected"] : $this->getContext($context, "selected")), "html", null, true);
        echo "\">Accueil</a>
                        </li>
                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagesMenu"]) ? $context["pagesMenu"] : $this->getContext($context, "pagesMenu")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 42
            echo "                            ";
            $context["selected"] = "";
            // line 43
            echo "                            ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "slug"), "method") == $this->getAttribute($context["page"], "slug", array()))) {
                $context["selected"] = "selected";
            }
            // line 44
            echo "                            <li class=\"elm_menu\">
                                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("circa_page", array("slug" => $this->getAttribute($context["page"], "slug", array()))), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["selected"]) ? $context["selected"] : $this->getContext($context, "selected")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Mweb\AdminBundle\Twig\TwigExtension')->stripAccents($this->getAttribute($context["page"], "title", array())), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    </ul>
                </nav>

                <div class=\"clear\"></div>
            </div>
        </div>

    </header>

    ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "
    <section id=\"section-partner\">
        <div class=\"section-container\">
            <div class=\"container-fluid\">
                <ul class=\"partner-list\">
                    <li><a href=\"\" target=\"_blank\"><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/partner/bfc.jpg"), "partner"), "html", null, true);
        echo "\" /></a></li>
                    <li><a href=\"\" target=\"_blank\"><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/partner/studioplus.pdf"), "partner"), "html", null, true);
        echo "\" /></a></li>
                    <li><a href=\"\" target=\"_blank\"><img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/partner/rodia.jpg"), "partner"), "html", null, true);
        echo "\" /></a></li>
                    <li> <a href=\"\" target=\"_blank\"><img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/partner/zen.png"), "partner"), "html", null, true);
        echo "\" /></a></li>
                    <li> <a href=\"\" target=\"_blank\"><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/partner/grd-besac.jpg"), "partner"), "html", null, true);
        echo "\" /></a></li>
                    <li> <a href=\"\" target=\"_blank\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/partner/Sacem_logo_vertical_CMJN.jpg"), "partner"), "html", null, true);
        echo "\" /></a></li>
                </ul>
            </div>
        </div>
    </section>

    ";
        // line 76
        $this->displayBlock('footer', $context, $blocks);
        // line 102
        echo "
    ";
        // line 103
        $this->displayBlock('javascripts', $context, $blocks);
        // line 111
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
        
        $__internal_cc9bfecc75512a11a2305e6a4c68e3107c7240956815cbdd7c46c427463b4f73->leave($__internal_cc9bfecc75512a11a2305e6a4c68e3107c7240956815cbdd7c46c427463b4f73_prof);

    }

    // line 2
    public function block_xmlnsOg($context, array $blocks = array())
    {
        $__internal_a531611874021ea687d7c64023b1ba61edd313053c2540bc7cc013461155ef47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a531611874021ea687d7c64023b1ba61edd313053c2540bc7cc013461155ef47->enter($__internal_a531611874021ea687d7c64023b1ba61edd313053c2540bc7cc013461155ef47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "xmlnsOg"));

        
        $__internal_a531611874021ea687d7c64023b1ba61edd313053c2540bc7cc013461155ef47->leave($__internal_a531611874021ea687d7c64023b1ba61edd313053c2540bc7cc013461155ef47_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3908c033342d958ec183ab7636f6866c360ad9462d1170507223a6ab8c7a8a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3908c033342d958ec183ab7636f6866c360ad9462d1170507223a6ab8c7a8a3b->enter($__internal_3908c033342d958ec183ab7636f6866c360ad9462d1170507223a6ab8c7a8a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3908c033342d958ec183ab7636f6866c360ad9462d1170507223a6ab8c7a8a3b->leave($__internal_3908c033342d958ec183ab7636f6866c360ad9462d1170507223a6ab8c7a8a3b_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_02e273af6268289e5c2a410da42d7db42cdb472e008ffa26fcd7319501a5fa32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e273af6268289e5c2a410da42d7db42cdb472e008ffa26fcd7319501a5fa32->enter($__internal_02e273af6268289e5c2a410da42d7db42cdb472e008ffa26fcd7319501a5fa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_02e273af6268289e5c2a410da42d7db42cdb472e008ffa26fcd7319501a5fa32->leave($__internal_02e273af6268289e5c2a410da42d7db42cdb472e008ffa26fcd7319501a5fa32_prof);

    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        $__internal_4ed1474979abefc1dd4a9bb0289a176d69af11232930c1c912e785682784a0c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed1474979abefc1dd4a9bb0289a176d69af11232930c1c912e785682784a0c5->enter($__internal_4ed1474979abefc1dd4a9bb0289a176d69af11232930c1c912e785682784a0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 58
        echo "
    ";
        
        $__internal_4ed1474979abefc1dd4a9bb0289a176d69af11232930c1c912e785682784a0c5->leave($__internal_4ed1474979abefc1dd4a9bb0289a176d69af11232930c1c912e785682784a0c5_prof);

    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f8b0ae2f53fb6257f58108f2729080d7d45a0bfba5882f7572e878d5f6dd2a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b0ae2f53fb6257f58108f2729080d7d45a0bfba5882f7572e878d5f6dd2a09->enter($__internal_f8b0ae2f53fb6257f58108f2729080d7d45a0bfba5882f7572e878d5f6dd2a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 77
        echo "        <footer>
            <div class=\"container-fluid\">
                <div class=\"col-xs-12 col-sm-5\">
                    <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/img/footer-logo.png"), "html", null, true);
        echo "\" alt=\"\" />
                </div>
                <div class=\"col-xs-12 col-sm-4\">
                    <ul class=\"list-link\">
                        <li><a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("circa_page", array("slug" => "info-contact"));
        echo "\">Contact</a></li>
                        <li><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("circa_page", array("slug" => "info-contact"));
        echo "\">Contact</a></li>
                    </ul>
                </div>
                <div class=\"col-xs-12 col-sm-3\">
                    <ul class=\"social-link\">
                        <li>
                            <a href=\"https://www.facebook.com/festivalcircasismic/\"><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/img/fb.png"), "html", null, true);
        echo "\" alt=\"\"/> Facebook</a>
                        </li><li>
                            <a href=\"https://www.instagram.com/festivalcircasismic/\"><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/img/inst.png"), "html", null, true);
        echo "\" alt=\"\"/> Intsagram</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-xs-12 fab-link\"><a class=\"\" href=\"http://unmecduweb.com/\">Création de site web : unmecduweb.com</a></div>
            </div>

        </footer>
    ";
        
        $__internal_f8b0ae2f53fb6257f58108f2729080d7d45a0bfba5882f7572e878d5f6dd2a09->leave($__internal_f8b0ae2f53fb6257f58108f2729080d7d45a0bfba5882f7572e878d5f6dd2a09_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_62e5b5d8edd37b5f8384409e9af4fe12287d2d8bcb5e89dbe5399cf33857af2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e5b5d8edd37b5f8384409e9af4fe12287d2d8bcb5e89dbe5399cf33857af2c->enter($__internal_62e5b5d8edd37b5f8384409e9af4fe12287d2d8bcb5e89dbe5399cf33857af2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 104
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/js/plugin/a_jquery.3.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/js/plugin/a_mw-library.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/js/plugin/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/js/plugin/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebcore/js/script/zzz.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_62e5b5d8edd37b5f8384409e9af4fe12287d2d8bcb5e89dbe5399cf33857af2c->leave($__internal_62e5b5d8edd37b5f8384409e9af4fe12287d2d8bcb5e89dbe5399cf33857af2c_prof);

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
        return array (  339 => 108,  335 => 107,  331 => 106,  327 => 105,  322 => 104,  316 => 103,  300 => 93,  295 => 91,  286 => 85,  282 => 84,  275 => 80,  270 => 77,  264 => 76,  256 => 58,  250 => 57,  241 => 13,  237 => 12,  232 => 11,  226 => 10,  215 => 7,  204 => 2,  186 => 111,  184 => 103,  181 => 102,  179 => 76,  170 => 70,  166 => 69,  162 => 68,  158 => 67,  154 => 66,  150 => 65,  143 => 60,  141 => 57,  130 => 48,  117 => 45,  114 => 44,  109 => 43,  106 => 42,  102 => 41,  95 => 39,  92 => 38,  87 => 37,  85 => 36,  76 => 30,  72 => 29,  64 => 24,  60 => 23,  50 => 15,  48 => 10,  41 => 7,  31 => 2,  28 => 1,);
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
        <div class=\"container-fluid\">
            <div class=\"wrap\">
                <a href=\"{{ path('_homepage') }}\" id=\"logo\">
                    <img src=\"{{ asset('bundles/mwebcore/img/logo.png') }}\" alt=\"Festival Circasismic\"/>
                </a>

                <ul class=\"social-link\">
                    <li>
                        <a href=\"https://www.facebook.com/festivalcircasismic/\"><img src=\"{{ asset(\"bundles/mwebcore/img/fb.png\") }}\" alt=\"\"/></a>
                        <a href=\"https://www.instagram.com/festivalcircasismic/\"><img src=\"{{ asset(\"bundles/mwebcore/img/inst.png\") }}\" alt=\"\"/></a>
                    </li>
                </ul>
                <button class=\"mobile-menu mobile-only\"><span class=\"glyphicon glyphicon-menu-hamburger\"></span></button>
                <nav id=\"menu-wrap\">
                    <ul id=\"menu\">
                        {% set selected ='' %}
                        {% if app.request.get('slug') is empty %}{% set selected = 'selected' %}{% endif %}
                        <li class=\"elm_menu\">
                            <a href=\"{{ path('_homepage') }}\" class=\"{{ selected }}\">Accueil</a>
                        </li>
                        {% for page in pagesMenu %}
                            {% set selected ='' %}
                            {% if app.request.get('slug') == page.slug %}{% set selected = 'selected' %}{% endif %}
                            <li class=\"elm_menu\">
                                <a href=\"{{ path('circa_page', {'slug': page.slug}) }}\" class=\"{{ selected }}\">{{ page.title|stripAccents }}</a>
                            </li>
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
        </div>
    </section>

    {%  block footer %}
        <footer>
            <div class=\"container-fluid\">
                <div class=\"col-xs-12 col-sm-5\">
                    <img src=\"{{ asset('bundles/mwebcore/img/footer-logo.png') }}\" alt=\"\" />
                </div>
                <div class=\"col-xs-12 col-sm-4\">
                    <ul class=\"list-link\">
                        <li><a href=\"{{ path('circa_page', {\"slug\": \"info-contact\"}) }}\">Contact</a></li>
                        <li><a href=\"{{ path('circa_page', {\"slug\": \"info-contact\"}) }}\">Contact</a></li>
                    </ul>
                </div>
                <div class=\"col-xs-12 col-sm-3\">
                    <ul class=\"social-link\">
                        <li>
                            <a href=\"https://www.facebook.com/festivalcircasismic/\"><img src=\"{{ asset(\"bundles/mwebcore/img/fb.png\") }}\" alt=\"\"/> Facebook</a>
                        </li><li>
                            <a href=\"https://www.instagram.com/festivalcircasismic/\"><img src=\"{{ asset(\"bundles/mwebcore/img/inst.png\") }}\" alt=\"\"/> Intsagram</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-xs-12 fab-link\"><a class=\"\" href=\"http://unmecduweb.com/\">Création de site web : unmecduweb.com</a></div>
            </div>

        </footer>
    {% endblock %}

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
