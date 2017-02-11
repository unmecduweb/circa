<?php

/* MwebAdminBundle:product:list.html.twig */
class __TwigTemplate_33bfc2d63a7dc7b1c31a30bfeeec9289b17ea541771b24ea43a963bf889aea18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MwebAdminBundle:default:list.html.twig", "MwebAdminBundle:product:list.html.twig", 2);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "MwebAdminBundle:default:list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5bf7e960a9952f4944cc7964dddaab329f2bb6a568abdb92ab4daf8af14259e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5bf7e960a9952f4944cc7964dddaab329f2bb6a568abdb92ab4daf8af14259e->enter($__internal_c5bf7e960a9952f4944cc7964dddaab329f2bb6a568abdb92ab4daf8af14259e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:product:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5bf7e960a9952f4944cc7964dddaab329f2bb6a568abdb92ab4daf8af14259e->leave($__internal_c5bf7e960a9952f4944cc7964dddaab329f2bb6a568abdb92ab4daf8af14259e_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:product:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 2,);
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
{% extends \"MwebAdminBundle:default:list.html.twig\" %}
", "MwebAdminBundle:product:list.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/product/list.html.twig");
    }
}
