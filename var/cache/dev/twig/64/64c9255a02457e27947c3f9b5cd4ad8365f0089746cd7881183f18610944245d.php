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
        $__internal_3d61abb65ba50ea6d9d67f613804122df423c95dc7710c320c458ea92b96351c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d61abb65ba50ea6d9d67f613804122df423c95dc7710c320c458ea92b96351c->enter($__internal_3d61abb65ba50ea6d9d67f613804122df423c95dc7710c320c458ea92b96351c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebCoreBundle::sidebar.html.twig"));

        // line 1
        echo "
";
        // line 2
        if ( !array_key_exists("col", $context)) {
            // line 3
            echo "    <div class=\"col-xs-12\">
        <h3>Dernières actualités</h3>

    </div>
    ";
            // line 7
            $context["col"] = 12;
        }
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["actu"]) {
            // line 10
            echo "    <div class=\"col-xs-";
            echo twig_escape_filter($this->env, (isset($context["col"]) ? $context["col"] : $this->getContext($context, "col")), "html", null, true);
            echo " news\">
        <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Mweb\AdminBundle\Twig\TwigExtension')->liip($context["actu"], "news"), "html", null, true);
            echo "\" alt=\"\"/>
        <h3>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actu"], "startDate", array()), "d/m"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actu"], "title", array()), "html", null, true);
            echo "</h3>
        <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["actu"], "summary", array()), "html", null, true);
            echo "</p>
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("circa_news", array("slugNews" => $this->getAttribute($context["actu"], "slug", array()))), "html", null, true);
            echo "\" class=\"button\">En savoir plus</a>
        <div class=\"clear\"></div>
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3d61abb65ba50ea6d9d67f613804122df423c95dc7710c320c458ea92b96351c->leave($__internal_3d61abb65ba50ea6d9d67f613804122df423c95dc7710c320c458ea92b96351c_prof);

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
        return array (  59 => 14,  55 => 13,  49 => 12,  45 => 11,  40 => 10,  36 => 9,  33 => 7,  27 => 3,  25 => 2,  22 => 1,);
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
{% if col is not defined %}
    <div class=\"col-xs-12\">
        <h3>Dernières actualités</h3>

    </div>
    {% set col = 12 %}
{% endif %}
{% for actu in news %}
    <div class=\"col-xs-{{ col }} news\">
        <img src=\"{{ liip(actu, 'news') }}\" alt=\"\"/>
        <h3>{{ actu.startDate|date('d/m') }} - {{ actu.title }}</h3>
        <p>{{ actu.summary }}</p>
        <a href=\"{{ path('circa_news', {'slugNews': actu.slug}) }}\" class=\"button\">En savoir plus</a>
        <div class=\"clear\"></div>
    </div>

{% endfor %}", "MwebCoreBundle::sidebar.html.twig", "/home/fab/Documents/Pro/www/circa/src/Mweb/CoreBundle/Resources/views/sidebar.html.twig");
    }
}
