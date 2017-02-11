<?php

/* MwebCoreBundle::content.html.twig */
class __TwigTemplate_33fd7afc0be90fa762e7d2731c43e18a9ae6fecf30ae462d57bb6fceaba91eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MwebCoreBundle::layout.html.twig", "MwebCoreBundle::content.html.twig", 1);
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
        $__internal_d0292da421ef7b8e979d596dfc25509145690ed36d9b0ae4364ff1fc173be0c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0292da421ef7b8e979d596dfc25509145690ed36d9b0ae4364ff1fc173be0c1->enter($__internal_d0292da421ef7b8e979d596dfc25509145690ed36d9b0ae4364ff1fc173be0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebCoreBundle::content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0292da421ef7b8e979d596dfc25509145690ed36d9b0ae4364ff1fc173be0c1->leave($__internal_d0292da421ef7b8e979d596dfc25509145690ed36d9b0ae4364ff1fc173be0c1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dde0887f08ca2ee983215c1bfde6267e6731925bb4f41e9e8dfcb4f1c28486c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde0887f08ca2ee983215c1bfde6267e6731925bb4f41e9e8dfcb4f1c28486c3->enter($__internal_dde0887f08ca2ee983215c1bfde6267e6731925bb4f41e9e8dfcb4f1c28486c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        
        $__internal_dde0887f08ca2ee983215c1bfde6267e6731925bb4f41e9e8dfcb4f1c28486c3->leave($__internal_dde0887f08ca2ee983215c1bfde6267e6731925bb4f41e9e8dfcb4f1c28486c3_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_47efb1459622e42032cc4dd8d719d775183a89b0024abc6abf2dc5f62f2a66bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47efb1459622e42032cc4dd8d719d775183a89b0024abc6abf2dc5f62f2a66bc->enter($__internal_47efb1459622e42032cc4dd8d719d775183a89b0024abc6abf2dc5f62f2a66bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    ";
        // line 10
        echo "    <section id=\"section-page-title\" class=\"paralax-wrap\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('Mweb\AdminBundle\Twig\TwigExtension')->liip((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "parallax", "parallaxFile"), "html", null, true);
        echo "')\">
        <div class=\"section-container\">
            <div class=\"container-fluid\" >
            <div class=\"block-title left\">
                <h2>
                    <span class=\"main\"><span class=\"line\"></span>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "</span>
                    <span class=\"back\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "backTitle", array()), "html", null, true);
        echo "</span>
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
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
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content", array());
        echo "
                </div>
                ";
        // line 36
        echo "                <div class=\"col-xs-12 col-sm-4\">
                    ";
        // line 37
        $this->loadTemplate("MwebCoreBundle::sidebar.html.twig", "MwebCoreBundle::content.html.twig", 37)->display($context);
        // line 38
        echo "                </div>
                <div class=\"clear\"></div>
            </div>

        </div>
    </section>




";
        
        $__internal_47efb1459622e42032cc4dd8d719d775183a89b0024abc6abf2dc5f62f2a66bc->leave($__internal_47efb1459622e42032cc4dd8d719d775183a89b0024abc6abf2dc5f62f2a66bc_prof);

    }

    public function getTemplateName()
    {
        return "MwebCoreBundle::content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 38,  104 => 37,  101 => 36,  96 => 33,  81 => 21,  75 => 20,  68 => 16,  64 => 15,  55 => 10,  53 => 9,  47 => 8,  35 => 5,  11 => 1,);
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



{% block title %}{{ page.title }}{% endblock %}


{% block content %}
    {#{{ liip(page, 'paralax', paralax) }}#}
    <section id=\"section-page-title\" class=\"paralax-wrap\" style=\"background-image: url('{{ liip(page, 'parallax','parallaxFile') }}')\">
        <div class=\"section-container\">
            <div class=\"container-fluid\" >
            <div class=\"block-title left\">
                <h2>
                    <span class=\"main\"><span class=\"line\"></span>{{ page.title }}</span>
                    <span class=\"back\">{{ page.backTitle }}</span>
                </h2>

                <div class=\"breadcrumb\">
                    <a href=\"{{ path('_homepage') }}\" >{{ 'homepage'|trans }}</a> //
                    <a href=\"\">{{ page.title }}</a>
                </div>
            </div>

        </div>
    </section>


    <section class=\"content\" >
        <div class=\"container-fluid\">
            <div class=\"content-wrap\">
                <div class=\"col-xs-12 col-sm-8\">
                    {{ page.content|raw }}
                </div>
                {#NEWS#}
                <div class=\"col-xs-12 col-sm-4\">
                    {%  include 'MwebCoreBundle::sidebar.html.twig' %}
                </div>
                <div class=\"clear\"></div>
            </div>

        </div>
    </section>




{% endblock %}", "MwebCoreBundle::content.html.twig", "/home/fab/Documents/Pro/www/circa/src/Mweb/CoreBundle/Resources/views/content.html.twig");
    }
}
