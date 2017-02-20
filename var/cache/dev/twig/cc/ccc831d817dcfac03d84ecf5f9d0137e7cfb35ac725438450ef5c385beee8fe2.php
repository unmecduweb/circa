<?php

/* MwebCoreBundle::content.html.twig */
class __TwigTemplate_1b81b43fc1bbf288269b20d6c3ae21c1fa0681bef6b38e49c0e25d3dd6766acc extends Twig_Template
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
        $__internal_15efd173e8ce5e18eec44a54e1400b54b3071bfbee1ae1e3b2d75ece11c91018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15efd173e8ce5e18eec44a54e1400b54b3071bfbee1ae1e3b2d75ece11c91018->enter($__internal_15efd173e8ce5e18eec44a54e1400b54b3071bfbee1ae1e3b2d75ece11c91018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebCoreBundle::content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15efd173e8ce5e18eec44a54e1400b54b3071bfbee1ae1e3b2d75ece11c91018->leave($__internal_15efd173e8ce5e18eec44a54e1400b54b3071bfbee1ae1e3b2d75ece11c91018_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_be6db66d067ca01914c4658339a981c954fe5f26095d72e5d01d7304c62aed34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6db66d067ca01914c4658339a981c954fe5f26095d72e5d01d7304c62aed34->enter($__internal_be6db66d067ca01914c4658339a981c954fe5f26095d72e5d01d7304c62aed34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        
        $__internal_be6db66d067ca01914c4658339a981c954fe5f26095d72e5d01d7304c62aed34->leave($__internal_be6db66d067ca01914c4658339a981c954fe5f26095d72e5d01d7304c62aed34_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_bc22e173484e84bca181c3a85de737c72fcd318e7ca49e357553121d16e1e473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc22e173484e84bca181c3a85de737c72fcd318e7ca49e357553121d16e1e473->enter($__internal_bc22e173484e84bca181c3a85de737c72fcd318e7ca49e357553121d16e1e473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_bc22e173484e84bca181c3a85de737c72fcd318e7ca49e357553121d16e1e473->leave($__internal_bc22e173484e84bca181c3a85de737c72fcd318e7ca49e357553121d16e1e473_prof);

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
