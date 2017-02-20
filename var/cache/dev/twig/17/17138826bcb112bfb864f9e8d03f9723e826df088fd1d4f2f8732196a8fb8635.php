<?php

/* MwebAdminBundle:Security:login_content.html.twig */
class __TwigTemplate_436e7d203dae8b8fde9e94b5c5f9bf222722f8ca85235775123e332f44394086 extends Twig_Template
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
        $__internal_d9af1fd910819e0fd867f4641447f6259b8e319c29957730ed5137d8b93b7319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9af1fd910819e0fd867f4641447f6259b8e319c29957730ed5137d8b93b7319->enter($__internal_d9af1fd910819e0fd867f4641447f6259b8e319c29957730ed5137d8b93b7319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 8
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 9
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "
    <div class=\"form-group\">
        <label for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input  class=\"form-control\"  type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
    </div>

    <div class=\"form-group\">
        <label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input  class=\"form-control\"  type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>

    <div class=\"checkbox\">
        <label for=\"remember_me\">
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
        </label>
    </div>

    <button class=\"btn btn-primary right\" type=\"submit\" id=\"_submit\" name=\"_submit\" >";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
</form>
";
        
        $__internal_d9af1fd910819e0fd867f4641447f6259b8e319c29957730ed5137d8b93b7319->leave($__internal_d9af1fd910819e0fd867f4641447f6259b8e319c29957730ed5137d8b93b7319_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 29,  73 => 25,  63 => 18,  56 => 14,  52 => 13,  48 => 11,  42 => 9,  40 => 8,  36 => 7,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
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

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <div class=\"form-group\">
        <label for=\"username\">{{ 'security.login.username'|trans }}</label>
        <input  class=\"form-control\"  type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
    </div>

    <div class=\"form-group\">
        <label for=\"password\">{{ 'security.login.password'|trans }}</label>
        <input  class=\"form-control\"  type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>

    <div class=\"checkbox\">
        <label for=\"remember_me\">
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            {{ 'security.login.remember_me'|trans }}
        </label>
    </div>

    <button class=\"btn btn-primary right\" type=\"submit\" id=\"_submit\" name=\"_submit\" >{{ 'security.login.submit'|trans }}</button>
</form>
", "MwebAdminBundle:Security:login_content.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Security/login_content.html.twig");
    }
}
