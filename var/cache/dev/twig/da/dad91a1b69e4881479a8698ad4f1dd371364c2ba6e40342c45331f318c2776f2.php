<?php

/* MwebCoreBundle::actu.html.twig */
class __TwigTemplate_e5d533fdf7c6060799f64cee1d565a67556582a3a59d707c8a75a279eff69a59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MwebCoreBundle::layout.html.twig", "MwebCoreBundle::actu.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MwebCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcd6920a3c08ce56862445a9469ec1b5d411db6ca520f5b5b5527d1333b8898d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd6920a3c08ce56862445a9469ec1b5d411db6ca520f5b5b5527d1333b8898d->enter($__internal_bcd6920a3c08ce56862445a9469ec1b5d411db6ca520f5b5b5527d1333b8898d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebCoreBundle::actu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcd6920a3c08ce56862445a9469ec1b5d411db6ca520f5b5b5527d1333b8898d->leave($__internal_bcd6920a3c08ce56862445a9469ec1b5d411db6ca520f5b5b5527d1333b8898d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_34fb214ad4f6d30734574ce9c65ca16c8cb99a50de0e41066f4ef2675f193895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34fb214ad4f6d30734574ce9c65ca16c8cb99a50de0e41066f4ef2675f193895->enter($__internal_34fb214ad4f6d30734574ce9c65ca16c8cb99a50de0e41066f4ef2675f193895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actu"]) ? $context["actu"] : $this->getContext($context, "actu")), "title", array()), "html", null, true);
        
        $__internal_34fb214ad4f6d30734574ce9c65ca16c8cb99a50de0e41066f4ef2675f193895->leave($__internal_34fb214ad4f6d30734574ce9c65ca16c8cb99a50de0e41066f4ef2675f193895_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_389fdfc17d861bcc5ab784e4abbd7724140eb6daa48758e9edb7558f2d1a0512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389fdfc17d861bcc5ab784e4abbd7724140eb6daa48758e9edb7558f2d1a0512->enter($__internal_389fdfc17d861bcc5ab784e4abbd7724140eb6daa48758e9edb7558f2d1a0512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    ";
        // line 10
        echo "    <section id=\"section-page-title\" class=\"paralax-wrap\" ";
        echo ">
        <div class=\"section-container\">
            <div class=\"container-fluid\" >
            <div class=\"block-title left\">
                <h2>
                    <span class=\"main\"><span class=\"line\"></span>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actu"]) ? $context["actu"] : $this->getContext($context, "actu")), "title", array()), "html", null, true);
        echo "</span>
                    <span class=\"back\">News</span>
                </h2>

                <div class=\"breadcrumb\">
                    <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_homepage");
        echo "\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage"), "html", null, true);
        echo "</a> //
                    <a href=\"\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actu"]) ? $context["actu"] : $this->getContext($context, "actu")), "title", array()), "html", null, true);
        echo "</a>
                </div>
            </div>

        </div>
    </section>


    <section class=\"content\" >
        <div class=\"container-fluid\">
            <div class=\"content-wrap\">
                <div class=\"col-xs-12 col-sm-8\">
                    ";
        // line 33
        echo $this->getAttribute((isset($context["actu"]) ? $context["actu"] : $this->getContext($context, "actu")), "content", array());
        echo "
                </div>
                ";
        // line 36
        echo "                <div class=\"col-xs-12 col-sm-4\">
                    ";
        // line 37
        $this->loadTemplate("MwebCoreBundle::sidebar.html.twig", "MwebCoreBundle::actu.html.twig", 37)->display($context);
        // line 38
        echo "                </div>
                <div class=\"clear\"></div>
            </div>

        </div>
    </section>




";
        
        $__internal_389fdfc17d861bcc5ab784e4abbd7724140eb6daa48758e9edb7558f2d1a0512->leave($__internal_389fdfc17d861bcc5ab784e4abbd7724140eb6daa48758e9edb7558f2d1a0512_prof);

    }

    public function getTemplateName()
    {
        return "MwebCoreBundle::actu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 38,  100 => 37,  97 => 36,  92 => 33,  77 => 21,  71 => 20,  63 => 15,  55 => 10,  53 => 9,  47 => 8,  35 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MwebCoreBundle::layout.html.twig\" %}



{% block title %}{{ actu.title }}{% endblock %}


{% block content %}
    {#{{ liip(page, 'paralax', paralax) }}#}
    <section id=\"section-page-title\" class=\"paralax-wrap\" {#style=\"background-image: url('{{ liip(actu, 'parallax','parallaxFile') }}')\"#}>
        <div class=\"section-container\">
            <div class=\"container-fluid\" >
            <div class=\"block-title left\">
                <h2>
                    <span class=\"main\"><span class=\"line\"></span>{{ actu.title }}</span>
                    <span class=\"back\">News</span>
                </h2>

                <div class=\"breadcrumb\">
                    <a href=\"{{ path('_homepage') }}\" >{{ 'homepage'|trans }}</a> //
                    <a href=\"\">{{ actu.title }}</a>
                </div>
            </div>

        </div>
    </section>


    <section class=\"content\" >
        <div class=\"container-fluid\">
            <div class=\"content-wrap\">
                <div class=\"col-xs-12 col-sm-8\">
                    {{ actu.content|raw }}
                </div>
                {#NEWS#}
                <div class=\"col-xs-12 col-sm-4\">
                    {%  include 'MwebCoreBundle::sidebar.html.twig' %}
                </div>
                <div class=\"clear\"></div>
            </div>

        </div>
    </section>




{% endblock %}", "MwebCoreBundle::actu.html.twig", "/home/fab/Documents/Pro/www/circa/src/Mweb/CoreBundle/Resources/views/actu.html.twig");
    }
}
