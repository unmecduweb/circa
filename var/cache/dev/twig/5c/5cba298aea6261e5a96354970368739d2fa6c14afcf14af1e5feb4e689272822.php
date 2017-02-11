<?php

/* MwebAdminBundle:ChangePassword:change_password_content.html.twig */
class __TwigTemplate_a50902a799d50c6aa06d8e2d68b08e3403042e700f603da75e301a05a79d0da5 extends Twig_Template
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
        $__internal_52453ca2e6aafffbfdb6846a413ede4c981b0ddf0ebc83b6a3729c55aad5d256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52453ca2e6aafffbfdb6846a413ede4c981b0ddf0ebc83b6a3729c55aad5d256->enter($__internal_52453ca2e6aafffbfdb6846a413ede4c981b0ddf0ebc83b6a3729c55aad5d256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:ChangePassword:change_password_content.html.twig"));

        // line 2
        echo "


";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "


    ";
        // line 8
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "MwebAdminBundle:Form:main-form-layout.html.twig"));
        // line 9
        echo "    <fieldset class=\"mweb-fieldset\">
        <legend>
            <span class=\"glyphicon glyphicon-user pink\"></span>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edit.user", array(), "mweb"), "html", null, true);
        echo "

        </legend>
        <div class=\"content\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 16
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["field"], 'errors');
            echo "
                ";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["field"], 'row');
            echo "

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
        <div class=\"col-xs-8\">

        </div>
        <div class=\"col-xs-4\">
            <button type=\"submit\" class=\"button big right\"> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
        </div>

    </fieldset>
";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_52453ca2e6aafffbfdb6846a413ede4c981b0ddf0ebc83b6a3729c55aad5d256->leave($__internal_52453ca2e6aafffbfdb6846a413ede4c981b0ddf0ebc83b6a3729c55aad5d256_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:ChangePassword:change_password_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 29,  71 => 25,  64 => 20,  55 => 17,  50 => 16,  46 => 15,  39 => 11,  35 => 9,  33 => 8,  27 => 5,  22 => 2,);
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



{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}


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
            <button type=\"submit\" class=\"button big right\"> {{ \"change_password.submit\"|trans }}</button>
        </div>

    </fieldset>
{{ form_end(form) }}

", "MwebAdminBundle:ChangePassword:change_password_content.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/ChangePassword/change_password_content.html.twig");
    }
}
