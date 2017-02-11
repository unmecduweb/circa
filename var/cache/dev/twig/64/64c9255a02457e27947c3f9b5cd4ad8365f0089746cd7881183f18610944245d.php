<?php

/* MwebCoreBundle::sidebar.html.twig */
class __TwigTemplate_4ed8c61a580ab2d9352887aa13654c9cadd10f584c31602288dd135d2baf6a8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36fde1cc7e62acf1b9c08a13b78ffa6ddb418f0572f3f735f4991d86f28afe29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36fde1cc7e62acf1b9c08a13b78ffa6ddb418f0572f3f735f4991d86f28afe29->enter($__internal_36fde1cc7e62acf1b9c08a13b78ffa6ddb418f0572f3f735f4991d86f28afe29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebCoreBundle::sidebar.html.twig"));

        // line 1
        echo "

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["actu"]) {
            // line 4
            echo "    <div class=\"col-xs-12 col-sm-6 news\">
        <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Mweb\AdminBundle\Twig\TwigExtension')->liip((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "news"), "html", null, true);
            echo "\" alt=\"\"/>
        <h3>";
            // line 6
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "startDate", array()), "d/m"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "title", array()), "html", null, true);
            echo "</h3>
        <p>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "summary", array()), "html", null, true);
            echo "</p>
        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("news", array("newsSlug" => $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "slug", array()))), "html", null, true);
            echo "\" class=\"button\">En savoir plus</a>
        <div class=\"clear\"></div>
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_36fde1cc7e62acf1b9c08a13b78ffa6ddb418f0572f3f735f4991d86f28afe29->leave($__internal_36fde1cc7e62acf1b9c08a13b78ffa6ddb418f0572f3f735f4991d86f28afe29_prof);

    }

    public function getTemplateName()
    {
        return "MwebCoreBundle::sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  43 => 7,  37 => 6,  33 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{%  for actu in news %}
    <div class=\"col-xs-12 col-sm-6 news\">
        <img src=\"{{ liip(news, 'news') }}\" alt=\"\"/>
        <h3>{{ news.startDate|date('d/m') }} - {{ news.title }}</h3>
        <p>{{ news.summary }}</p>
        <a href=\"{{ path('news', {'newsSlug': news.slug}) }}\" class=\"button\">En savoir plus</a>
        <div class=\"clear\"></div>
    </div>

{%  endfor %}", "MwebCoreBundle::sidebar.html.twig", "/home/fab/Documents/Pro/www/circa/src/Mweb/CoreBundle/Resources/views/sidebar.html.twig");
    }
}
