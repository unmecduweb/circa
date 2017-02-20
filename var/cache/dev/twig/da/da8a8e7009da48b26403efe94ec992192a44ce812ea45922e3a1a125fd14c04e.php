<?php

/* MwebAdminBundle:Resetting:request_content.html.twig */
class __TwigTemplate_7a2c1390c68813fbf8397b99fd1aaf4bdb743c323d33ab07bfaa3711d018755b extends Twig_Template
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
        $__internal_9229878544458cb54335b429653a50a998660eb0e6ec7ce7092c484d06df66c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9229878544458cb54335b429653a50a998660eb0e6ec7ce7092c484d06df66c8->enter($__internal_9229878544458cb54335b429653a50a998660eb0e6ec7ce7092c484d06df66c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_9229878544458cb54335b429653a50a998660eb0e6ec7ce7092c484d06df66c8->leave($__internal_9229878544458cb54335b429653a50a998660eb0e6ec7ce7092c484d06df66c8_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  30 => 5,  25 => 3,  22 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "MwebAdminBundle:Resetting:request_content.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Resetting/request_content.html.twig");
    }
}
