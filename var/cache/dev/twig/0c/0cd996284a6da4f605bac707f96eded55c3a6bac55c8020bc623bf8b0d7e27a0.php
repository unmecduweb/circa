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
        $__internal_fee3c64902be9fdfb075ec62a6caa3febbca03348237f2f55870b03e0ade0535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee3c64902be9fdfb075ec62a6caa3febbca03348237f2f55870b03e0ade0535->enter($__internal_fee3c64902be9fdfb075ec62a6caa3febbca03348237f2f55870b03e0ade0535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebCoreBundle::content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fee3c64902be9fdfb075ec62a6caa3febbca03348237f2f55870b03e0ade0535->leave($__internal_fee3c64902be9fdfb075ec62a6caa3febbca03348237f2f55870b03e0ade0535_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_92268cc3d1300d50c48425660866db53c85b4a8b1d9a24dae1535158d52b0510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92268cc3d1300d50c48425660866db53c85b4a8b1d9a24dae1535158d52b0510->enter($__internal_92268cc3d1300d50c48425660866db53c85b4a8b1d9a24dae1535158d52b0510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        
        $__internal_92268cc3d1300d50c48425660866db53c85b4a8b1d9a24dae1535158d52b0510->leave($__internal_92268cc3d1300d50c48425660866db53c85b4a8b1d9a24dae1535158d52b0510_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_409886fabad9157888467cf56afc89370c319113711a1b8f0442c185551c0599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409886fabad9157888467cf56afc89370c319113711a1b8f0442c185551c0599->enter($__internal_409886fabad9157888467cf56afc89370c319113711a1b8f0442c185551c0599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    ";
        // line 10
        echo "    <section id=\"section-page-title\" class=\"paralax-wrap\"
             style=\"background-image: url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Mweb\AdminBundle\Twig\TwigExtension')->liip((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "parallax", "parallaxFile"), "html", null, true);
        echo "')\">
        <div class=\"section-container\">
            <div class=\"container-fluid\">
                <div class=\"block-title left\">
                    <h2>
                        <span class=\"main\"><span class=\"line\"></span>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Mweb\AdminBundle\Twig\TwigExtension')->stripAccents($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array())), "html", null, true);
        echo "</span>
                        <span class=\"back\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "backTitle", array()), "html", null, true);
        echo "</span>
                    </h2>

                    <div class=\"breadcrumb\">
                        <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage"), "html", null, true);
        echo "</a> //
                        <a href=\"\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "</a>
                    </div>
                </div>

            </div>
    </section>


    <section class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"content-wrap\">
                ";
        // line 33
        if ( !twig_test_empty((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")))) {
            // line 34
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["newsList"]) ? $context["newsList"] : $this->getContext($context, "newsList")));
            foreach ($context['_seq'] as $context["_key"] => $context["actu"]) {
                // line 35
                echo "                        <div class=\"col-xs-12 news col-sm-4\">
                            <img src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Mweb\AdminBundle\Twig\TwigExtension')->liip($context["actu"], "news"), "html", null, true);
                echo "\" alt=\"\"/>
                            <h3>";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actu"], "startDate", array()), "d/m"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["actu"], "title", array()), "html", null, true);
                echo "</h3>
                            <p>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["actu"], "summary", array()), "html", null, true);
                echo "</p>
                            <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("circa_news", array("slugNews" => $this->getAttribute($context["actu"], "slug", array()))), "html", null, true);
                echo "\" class=\"button\">En savoir
                                plus</a>
                            <div class=\"clear\"></div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                ";
        } else {
            // line 45
            echo "                    <div class=\"col-xs-12 col-sm-8\">
                        ";
            // line 46
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content", array());
            echo "
                    </div>
                    ";
            // line 49
            echo "                    <div class=\"col-xs-12 col-sm-4\">
                        ";
            // line 50
            $this->loadTemplate("MwebCoreBundle::sidebar.html.twig", "MwebCoreBundle::content.html.twig", 50)->display($context);
            // line 51
            echo "                    </div>
                ";
        }
        // line 53
        echo "                <div class=\"clear\"></div>
            </div>

        </div>
    </section>




";
        
        $__internal_409886fabad9157888467cf56afc89370c319113711a1b8f0442c185551c0599->leave($__internal_409886fabad9157888467cf56afc89370c319113711a1b8f0442c185551c0599_prof);

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
        return array (  152 => 53,  148 => 51,  146 => 50,  143 => 49,  138 => 46,  135 => 45,  132 => 44,  121 => 39,  117 => 38,  111 => 37,  107 => 36,  104 => 35,  99 => 34,  97 => 33,  83 => 22,  77 => 21,  70 => 17,  66 => 16,  58 => 11,  55 => 10,  53 => 9,  47 => 8,  35 => 5,  11 => 1,);
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
    <section id=\"section-page-title\" class=\"paralax-wrap\"
             style=\"background-image: url('{{ liip(page, 'parallax','parallaxFile') }}')\">
        <div class=\"section-container\">
            <div class=\"container-fluid\">
                <div class=\"block-title left\">
                    <h2>
                        <span class=\"main\"><span class=\"line\"></span>{{ page.title|stripAccents }}</span>
                        <span class=\"back\">{{ page.backTitle }}</span>
                    </h2>

                    <div class=\"breadcrumb\">
                        <a href=\"{{ path('_homepage') }}\">{{ 'homepage'|trans }}</a> //
                        <a href=\"\">{{ page.title }}</a>
                    </div>
                </div>

            </div>
    </section>


    <section class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"content-wrap\">
                {% if news is not empty %}
                    {% for actu in newsList %}
                        <div class=\"col-xs-12 news col-sm-4\">
                            <img src=\"{{ liip(actu, 'news') }}\" alt=\"\"/>
                            <h3>{{ actu.startDate|date('d/m') }} - {{ actu.title }}</h3>
                            <p>{{ actu.summary }}</p>
                            <a href=\"{{ path('circa_news', {'slugNews': actu.slug}) }}\" class=\"button\">En savoir
                                plus</a>
                            <div class=\"clear\"></div>
                        </div>
                    {% endfor %}
                {% else %}
                    <div class=\"col-xs-12 col-sm-8\">
                        {{ page.content|raw }}
                    </div>
                    {#NEWS#}
                    <div class=\"col-xs-12 col-sm-4\">
                        {% include 'MwebCoreBundle::sidebar.html.twig' %}
                    </div>
                {% endif %}
                <div class=\"clear\"></div>
            </div>

        </div>
    </section>




{% endblock %}", "MwebCoreBundle::content.html.twig", "/home/fab/Documents/Pro/www/circa/src/Mweb/CoreBundle/Resources/views/content.html.twig");
    }
}
