<?php

/* MwebAdminBundle:Profile:edit_content.html.twig */
class __TwigTemplate_73fdd78d37293e0b94376a40af9772cf7fd9d59fb83d58bc3624a2603b5b5346 extends Twig_Template
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
        $__internal_e097a57f1c132651461ad6fec97bddb880d5e322b6dcdb8263d0015834f993db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e097a57f1c132651461ad6fec97bddb880d5e322b6dcdb8263d0015834f993db->enter($__internal_e097a57f1c132651461ad6fec97bddb880d5e322b6dcdb8263d0015834f993db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "

    ";
        // line 5
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "MwebAdminBundle:Form:main-form-layout.html.twig"));
        // line 6
        echo "    <fieldset class=\"mweb-fieldset\">
        <legend>
            <span class=\"glyphicon glyphicon-user pink\"></span>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edit.user", array(), "mweb"), "html", null, true);
        echo "

        </legend>
        <div class=\"content\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 13
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["field"], 'errors');
            echo "
                    ";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["field"], 'row');
            echo "

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </div>
        <div class=\"col-xs-8\">

        </div>
        <div class=\"col-xs-4\">
            <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" class=\"button big gray left\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edit.userPass", array(), "mweb"), "html", null, true);
        echo "</a>
            <button type=\"submit\" class=\"button big right\"> ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edit.save", array(), "mweb"), "html", null, true);
        echo "</button>
        </div>

    </fieldset>
";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_e097a57f1c132651461ad6fec97bddb880d5e322b6dcdb8263d0015834f993db->leave($__internal_e097a57f1c132651461ad6fec97bddb880d5e322b6dcdb8263d0015834f993db_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  74 => 23,  68 => 22,  61 => 17,  52 => 14,  47 => 13,  43 => 12,  36 => 8,  32 => 6,  30 => 5,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}

    {% form_theme form 'MwebAdminBundle:Form:main-form-layout.html.twig' %}
    <fieldset class=\"mweb-fieldset\">
        <legend>
            <span class=\"glyphicon glyphicon-user pink\"></span>{{ \"admin.edit.user\"|trans({}, \"mweb\") }}

        </legend>
        <div class=\"content\">
            {% for key,field in form %}
                    {{ form_errors(field) }}
                    {{ form_row(field) }}

            {% endfor %}
        </div>
        <div class=\"col-xs-8\">

        </div>
        <div class=\"col-xs-4\">
            <a href=\"{{ path('fos_user_change_password') }}\" class=\"button big gray left\"> {{ \"admin.edit.userPass\"|trans({}, \"mweb\") }}</a>
            <button type=\"submit\" class=\"button big right\"> {{ \"admin.edit.save\"|trans({}, \"mweb\") }}</button>
        </div>

    </fieldset>
{{ form_end(form) }}
", "MwebAdminBundle:Profile:edit_content.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Profile/edit_content.html.twig");
    }
}
