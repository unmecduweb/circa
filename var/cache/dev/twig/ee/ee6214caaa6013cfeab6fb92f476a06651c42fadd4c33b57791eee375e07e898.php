<?php

/* MwebAdminBundle:Group:edit_content.html.twig */
class __TwigTemplate_17db175de2d4b623b3523016a4f44d2ca4b829ad9572a45724f404d066be8355 extends Twig_Template
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
        $__internal_6a6ee25f8f676ae460f7779384f63782e44ead78071a2e95ee2692504bce02a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6ee25f8f676ae460f7779384f63782e44ead78071a2e95ee2692504bce02a6->enter($__internal_6a6ee25f8f676ae460f7779384f63782e44ead78071a2e95ee2692504bce02a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Group:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) ? $context["group_name"] : $this->getContext($context, "group_name")))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6a6ee25f8f676ae460f7779384f63782e44ead78071a2e95ee2692504bce02a6->leave($__internal_6a6ee25f8f676ae460f7779384f63782e44ead78071a2e95ee2692504bce02a6_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Group:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "MwebAdminBundle:Group:edit_content.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Group/edit_content.html.twig");
    }
}
