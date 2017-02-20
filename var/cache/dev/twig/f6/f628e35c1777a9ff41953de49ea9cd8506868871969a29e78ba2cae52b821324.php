<?php

/* MwebAdminBundle:Profile:edit.html.twig */
class __TwigTemplate_d0f1d1a284fd998c910e88b3fa7d553eece4c4890eece07cbbf1a48b49629932 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MwebAdminBundle::layout.html.twig", "MwebAdminBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'pageH1' => array($this, 'block_pageH1'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MwebAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de19b9ab9e4bed28d06f980e7a6fc7cd86781c3234a26a9395dd8b8f85547736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de19b9ab9e4bed28d06f980e7a6fc7cd86781c3234a26a9395dd8b8f85547736->enter($__internal_de19b9ab9e4bed28d06f980e7a6fc7cd86781c3234a26a9395dd8b8f85547736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de19b9ab9e4bed28d06f980e7a6fc7cd86781c3234a26a9395dd8b8f85547736->leave($__internal_de19b9ab9e4bed28d06f980e7a6fc7cd86781c3234a26a9395dd8b8f85547736_prof);

    }

    // line 3
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_d28b653809799a311175726302348ec606f15046422e324fbd92c7dc4be2bd15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28b653809799a311175726302348ec606f15046422e324fbd92c7dc4be2bd15->enter($__internal_d28b653809799a311175726302348ec606f15046422e324fbd92c7dc4be2bd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        echo "Modifier votre compte";
        
        $__internal_d28b653809799a311175726302348ec606f15046422e324fbd92c7dc4be2bd15->leave($__internal_d28b653809799a311175726302348ec606f15046422e324fbd92c7dc4be2bd15_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1abe88e183456a5d051411659c4d41fde4512b36103b6bf7a1d91da57709db14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1abe88e183456a5d051411659c4d41fde4512b36103b6bf7a1d91da57709db14->enter($__internal_1abe88e183456a5d051411659c4d41fde4512b36103b6bf7a1d91da57709db14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "MwebAdminBundle:Profile:edit.html.twig", 5)->display($context);
        
        $__internal_1abe88e183456a5d051411659c4d41fde4512b36103b6bf7a1d91da57709db14->leave($__internal_1abe88e183456a5d051411659c4d41fde4512b36103b6bf7a1d91da57709db14_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MwebAdminBundle::layout.html.twig\"  %}

{% block pageH1 %}Modifier votre compte{% endblock %}
{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "MwebAdminBundle:Profile:edit.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Profile/edit.html.twig");
    }
}
