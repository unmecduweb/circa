<?php

/* MwebAdminBundle:default:edit.html.twig */
class __TwigTemplate_2517eb1f7da1a7cb8528cf16ce681be4de650ef89eaf84d7d09816a714ba2020 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MwebAdminBundle::layout.html.twig", "MwebAdminBundle:default:edit.html.twig", 1);
        $this->blocks = array(
            'pageH1' => array($this, 'block_pageH1'),
            'admin_container' => array($this, 'block_admin_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MwebAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a7cd7c0bff6ba19ccdff93cd22fcc5cffed0b5dee99b7ab6905033a92f90e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7cd7c0bff6ba19ccdff93cd22fcc5cffed0b5dee99b7ab6905033a92f90e4b->enter($__internal_2a7cd7c0bff6ba19ccdff93cd22fcc5cffed0b5dee99b7ab6905033a92f90e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:default:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a7cd7c0bff6ba19ccdff93cd22fcc5cffed0b5dee99b7ab6905033a92f90e4b->leave($__internal_2a7cd7c0bff6ba19ccdff93cd22fcc5cffed0b5dee99b7ab6905033a92f90e4b_prof);

    }

    // line 3
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_51430dd0c7d2505769d4182d47bd79a2a7903372e066afeb6f8d9ff2b61908b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51430dd0c7d2505769d4182d47bd79a2a7903372e066afeb6f8d9ff2b61908b2->enter($__internal_51430dd0c7d2505769d4182d47bd79a2a7903372e066afeb6f8d9ff2b61908b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        // line 4
        echo "    Edition de ";
        echo twig_escape_filter($this->env, (isset($context["entityAlias"]) ? $context["entityAlias"] : $this->getContext($context, "entityAlias")), "html", null, true);
        echo " en ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang"))), "html", null, true);
        echo "
";
        
        $__internal_51430dd0c7d2505769d4182d47bd79a2a7903372e066afeb6f8d9ff2b61908b2->leave($__internal_51430dd0c7d2505769d4182d47bd79a2a7903372e066afeb6f8d9ff2b61908b2_prof);

    }

    // line 6
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_b11bcc9fda93f19c5acbad98cc79c3b7d033ffbe1811705218c7a633c6c9ef6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11bcc9fda93f19c5acbad98cc79c3b7d033ffbe1811705218c7a633c6c9ef6a->enter($__internal_b11bcc9fda93f19c5acbad98cc79c3b7d033ffbe1811705218c7a633c6c9ef6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        // line 7
        echo "


    ";
        // line 10
        $context["fieldToExclude"] = array(0 => "status", 1 => "metaDesc", 2 => "goTo");
        // line 11
        echo "

    <form action=\"\" method=\"post\" enctype=\"multipart/form-data\">

        ";
        // line 15
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "MwebAdminBundle:Form:main-form-layout.html.twig"));
        // line 16
        echo "        <fieldset class=\"mweb-fieldset\">
            <legend>
                <span class=\"glyphicon glyphicon-bookmark pink\"></span>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edit.mainLegend", array(), "mweb"), "html", null, true);
        echo "

            </legend>
            <div class=\"content\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 23
            echo "                    ";
            if (!twig_in_filter($context["key"], (isset($context["fieldToExclude"]) ? $context["fieldToExclude"] : $this->getContext($context, "fieldToExclude")))) {
                // line 24
                echo "                        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["field"], 'errors');
                echo "
                        ";
                // line 25
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["field"], 'row');
                echo "
                    ";
            }
            // line 27
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </div>

        </fieldset>

        <fieldset class=\"mweb-fieldset\">
            <legend><span class=\"glyphicon glyphicon-signal pink\"></span>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edit.metaLegend", array(), "mweb"), "html", null, true);
        echo " </legend>

            <div class=\"content\">

            ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'errors');
        echo "
            ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'row');
        echo "
            ";
        // line 39
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metaDesc", array(), "any", true, true)) {
            // line 40
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metaDesc", array()), 'errors');
            echo "
                ";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metaDesc", array()), 'row');
            echo "
            ";
        }
        // line 43
        echo "            </div>

        </fieldset>

        <fieldset class=\"mweb-fieldset\" id=\"mweb-goto-fieldset\">
            <legend><span class=\"glyphicon glyphicon-record pink\"></span>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edit.saveLegend", array(), "mweb"), "html", null, true);
        echo " </legend>

            <div class=\"col-xs-8\">
                ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "goTo", array()), 'widget');
        echo "
            </div>
            <div class=\"col-xs-4\">
                <button type=\"submit\" class=\"button big\"> ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edit.save", array(), "mweb"), "html", null, true);
        echo "</button>
            </div>
            <div class=\"clear\"></div>
        </fieldset>
    </form>
";
        
        $__internal_b11bcc9fda93f19c5acbad98cc79c3b7d033ffbe1811705218c7a633c6c9ef6a->leave($__internal_b11bcc9fda93f19c5acbad98cc79c3b7d033ffbe1811705218c7a633c6c9ef6a_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 54,  155 => 51,  149 => 48,  142 => 43,  137 => 41,  132 => 40,  130 => 39,  126 => 38,  122 => 37,  115 => 33,  108 => 28,  102 => 27,  97 => 25,  92 => 24,  89 => 23,  85 => 22,  78 => 18,  74 => 16,  72 => 15,  66 => 11,  64 => 10,  59 => 7,  53 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MwebAdminBundle::layout.html.twig\" %}

{%block pageH1 %}
    Edition de {{ entityAlias }} en {{ lang|trans }}
{%endblock%}
{% block admin_container %}



    {% set fieldToExclude = ['status', 'metaDesc', 'goTo'] %}


    <form action=\"\" method=\"post\" enctype=\"multipart/form-data\">

        {% form_theme form 'MwebAdminBundle:Form:main-form-layout.html.twig' %}
        <fieldset class=\"mweb-fieldset\">
            <legend>
                <span class=\"glyphicon glyphicon-bookmark pink\"></span>{{ \"admin.edit.mainLegend\"|trans({}, \"mweb\") }}

            </legend>
            <div class=\"content\">
                {% for key,field in form %}
                    {% if  key not in fieldToExclude %}
                        {{ form_errors(field) }}
                        {{ form_row(field) }}
                    {% endif %}
                {% endfor %}
            </div>

        </fieldset>

        <fieldset class=\"mweb-fieldset\">
            <legend><span class=\"glyphicon glyphicon-signal pink\"></span>{{ \"admin.edit.metaLegend\"|trans({}, \"mweb\") }} </legend>

            <div class=\"content\">

            {{ form_errors(form.status) }}
            {{ form_row(form.status) }}
            {% if form.metaDesc is defined %}
                {{ form_errors(form.metaDesc) }}
                {{ form_row(form.metaDesc) }}
            {%  endif %}
            </div>

        </fieldset>

        <fieldset class=\"mweb-fieldset\" id=\"mweb-goto-fieldset\">
            <legend><span class=\"glyphicon glyphicon-record pink\"></span>{{ \"admin.edit.saveLegend\"|trans({}, \"mweb\") }} </legend>

            <div class=\"col-xs-8\">
                {{ form_widget(form.goTo) }}
            </div>
            <div class=\"col-xs-4\">
                <button type=\"submit\" class=\"button big\"> {{ \"admin.edit.save\"|trans({}, \"mweb\") }}</button>
            </div>
            <div class=\"clear\"></div>
        </fieldset>
    </form>
{% endblock %}", "MwebAdminBundle:default:edit.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/default/edit.html.twig");
    }
}
