<?php

/* MwebAdminBundle:product:edit.html.twig */
class __TwigTemplate_9b7f070db8bbf17bd86b547dad4cbb87d1a22028cabe2cfea4265f0966413c8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MwebAdminBundle:default:edit.html.twig", "MwebAdminBundle:product:edit.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "MwebAdminBundle:default:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e4263749eec7642625f7a70b97db01a96acef321efc14a478fee85aee54e024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4263749eec7642625f7a70b97db01a96acef321efc14a478fee85aee54e024->enter($__internal_6e4263749eec7642625f7a70b97db01a96acef321efc14a478fee85aee54e024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:product:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e4263749eec7642625f7a70b97db01a96acef321efc14a478fee85aee54e024->leave($__internal_6e4263749eec7642625f7a70b97db01a96acef321efc14a478fee85aee54e024_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:product:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MwebAdminBundle:default:edit.html.twig\" %}", "MwebAdminBundle:product:edit.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/product/edit.html.twig");
    }
}
