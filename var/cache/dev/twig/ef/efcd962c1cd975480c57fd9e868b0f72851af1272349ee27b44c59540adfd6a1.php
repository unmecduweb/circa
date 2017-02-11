<?php

/* MwebAdminBundle:Group:show_content.html.twig */
class __TwigTemplate_39f3e8a41549b50c6e10b32a4191432ab5e43fc2c306c5e6c4434feb2cdba3ac extends Twig_Template
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
        $__internal_58d0d5b13a4ea94f6d38603feca6295eeae1f4fb57f9f001cd839152a871be30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d0d5b13a4ea94f6d38603feca6295eeae1f4fb57f9f001cd839152a871be30->enter($__internal_58d0d5b13a4ea94f6d38603feca6295eeae1f4fb57f9f001cd839152a871be30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_58d0d5b13a4ea94f6d38603feca6295eeae1f4fb57f9f001cd839152a871be30->leave($__internal_58d0d5b13a4ea94f6d38603feca6295eeae1f4fb57f9f001cd839152a871be30_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "MwebAdminBundle:Group:show_content.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Group/show_content.html.twig");
    }
}
