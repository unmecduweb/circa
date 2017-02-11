<?php

/* MwebAdminBundle:default:edit.html.twig */
class __TwigTemplate_6540db4f344b0980231120af32935381f08285333b202e48dfcce0ece626830f extends Twig_Template
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
        $__internal_8f3cedab79e66f961d8e994924f9ae1dc2f4473f45b59eae17347dce259c12df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3cedab79e66f961d8e994924f9ae1dc2f4473f45b59eae17347dce259c12df->enter($__internal_8f3cedab79e66f961d8e994924f9ae1dc2f4473f45b59eae17347dce259c12df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:default:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f3cedab79e66f961d8e994924f9ae1dc2f4473f45b59eae17347dce259c12df->leave($__internal_8f3cedab79e66f961d8e994924f9ae1dc2f4473f45b59eae17347dce259c12df_prof);

    }

    // line 3
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_b00440eeefd3e59e4880e2d0defe52244b6eddeb9a22bb951cf6d9e94b64a3b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00440eeefd3e59e4880e2d0defe52244b6eddeb9a22bb951cf6d9e94b64a3b5->enter($__internal_b00440eeefd3e59e4880e2d0defe52244b6eddeb9a22bb951cf6d9e94b64a3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        // line 4
        echo "    Edition de ";
        echo twig_escape_filter($this->env, (isset($context["entityAlias"]) ? $context["entityAlias"] : $this->getContext($context, "entityAlias")), "html", null, true);
        echo " en ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang"))), "html", null, true);
        echo "
";
        
        $__internal_b00440eeefd3e59e4880e2d0defe52244b6eddeb9a22bb951cf6d9e94b64a3b5->leave($__internal_b00440eeefd3e59e4880e2d0defe52244b6eddeb9a22bb951cf6d9e94b64a3b5_prof);

    }

    // line 6
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_0324e9e1aa41534fb4d08b89007424cc374ff6f8aa732daeec61afe0f4e43baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0324e9e1aa41534fb4d08b89007424cc374ff6f8aa732daeec61afe0f4e43baf->enter($__internal_0324e9e1aa41534fb4d08b89007424cc374ff6f8aa732daeec61afe0f4e43baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

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
        
        $__internal_0324e9e1aa41534fb4d08b89007424cc374ff6f8aa732daeec61afe0f4e43baf->leave($__internal_0324e9e1aa41534fb4d08b89007424cc374ff6f8aa732daeec61afe0f4e43baf_prof);

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
