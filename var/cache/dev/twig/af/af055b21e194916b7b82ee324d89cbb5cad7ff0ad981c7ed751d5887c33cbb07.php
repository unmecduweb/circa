<?php

/* MwebAdminBundle::index.html.twig */
class __TwigTemplate_1faec6c46f13def15f03844e0056a63ceb7faa2f47a582862738367561ea5793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MwebAdminBundle::layout.html.twig", "MwebAdminBundle::index.html.twig", 2);
        $this->blocks = array(
            'js' => array($this, 'block_js'),
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
        $__internal_463d31f777790a9b14fb52723843c3e5b0a6549348d83f87f8f83354dedc004a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463d31f777790a9b14fb52723843c3e5b0a6549348d83f87f8f83354dedc004a->enter($__internal_463d31f777790a9b14fb52723843c3e5b0a6549348d83f87f8f83354dedc004a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_463d31f777790a9b14fb52723843c3e5b0a6549348d83f87f8f83354dedc004a->leave($__internal_463d31f777790a9b14fb52723843c3e5b0a6549348d83f87f8f83354dedc004a_prof);

    }

    // line 4
    public function block_js($context, array $blocks = array())
    {
        $__internal_467aa20e37cd56569b72ef062c61d53267cc5d40260921d44a742da850153a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467aa20e37cd56569b72ef062c61d53267cc5d40260921d44a742da850153a85->enter($__internal_467aa20e37cd56569b72ef062c61d53267cc5d40260921d44a742da850153a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 5
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    
";
        
        $__internal_467aa20e37cd56569b72ef062c61d53267cc5d40260921d44a742da850153a85->leave($__internal_467aa20e37cd56569b72ef062c61d53267cc5d40260921d44a742da850153a85_prof);

    }

    // line 9
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_8641e0ccc12eb1e4b45942c5c473b33e64c3243525bef01c56f29baf34125d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8641e0ccc12eb1e4b45942c5c473b33e64c3243525bef01c56f29baf34125d41->enter($__internal_8641e0ccc12eb1e4b45942c5c473b33e64c3243525bef01c56f29baf34125d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        echo "Administration du site ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.project"), "html", null, true);
        
        $__internal_8641e0ccc12eb1e4b45942c5c473b33e64c3243525bef01c56f29baf34125d41->leave($__internal_8641e0ccc12eb1e4b45942c5c473b33e64c3243525bef01c56f29baf34125d41_prof);

    }

    // line 11
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_ce18756f023f366ef27f281acc1fe44b6e75da86845631ea85cdf3ca93cc627a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce18756f023f366ef27f281acc1fe44b6e75da86845631ea85cdf3ca93cc627a->enter($__internal_ce18756f023f366ef27f281acc1fe44b6e75da86845631ea85cdf3ca93cc627a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        echo "    
    Là ce serai pas mal qu'on ajoute les numéros skinsoft? genre support technique par mail et par téléphone?
    On en parle
";
        
        $__internal_ce18756f023f366ef27f281acc1fe44b6e75da86845631ea85cdf3ca93cc627a->leave($__internal_ce18756f023f366ef27f281acc1fe44b6e75da86845631ea85cdf3ca93cc627a_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  53 => 9,  42 => 5,  36 => 4,  11 => 2,);
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
{% extends \"MwebAdminBundle::layout.html.twig\" %}

{% block js %}
    {{ parent() }}
    
{% endblock %}

{% block pageH1 %}Administration du site {{ 'admin.project'|trans }}{% endblock %}

{% block admin_container %}    
    Là ce serai pas mal qu'on ajoute les numéros skinsoft? genre support technique par mail et par téléphone?
    On en parle
{% endblock %}", "MwebAdminBundle::index.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/index.html.twig");
    }
}
