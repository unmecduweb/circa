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
        $__internal_76d810cb96c3d0ed72b110c335320791df8858e597e11f4c3e278c4fa2a4ef38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d810cb96c3d0ed72b110c335320791df8858e597e11f4c3e278c4fa2a4ef38->enter($__internal_76d810cb96c3d0ed72b110c335320791df8858e597e11f4c3e278c4fa2a4ef38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76d810cb96c3d0ed72b110c335320791df8858e597e11f4c3e278c4fa2a4ef38->leave($__internal_76d810cb96c3d0ed72b110c335320791df8858e597e11f4c3e278c4fa2a4ef38_prof);

    }

    // line 4
    public function block_js($context, array $blocks = array())
    {
        $__internal_0bb94c3bd2002943ae917d40c010480f8622d81a37fae3f16e127b6a5cb28da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb94c3bd2002943ae917d40c010480f8622d81a37fae3f16e127b6a5cb28da5->enter($__internal_0bb94c3bd2002943ae917d40c010480f8622d81a37fae3f16e127b6a5cb28da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 5
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    
";
        
        $__internal_0bb94c3bd2002943ae917d40c010480f8622d81a37fae3f16e127b6a5cb28da5->leave($__internal_0bb94c3bd2002943ae917d40c010480f8622d81a37fae3f16e127b6a5cb28da5_prof);

    }

    // line 9
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_c991c5c6e589ade4223acaeaf2f2501b3d5c5f093ec7f659cf4b4c2632e8d26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c991c5c6e589ade4223acaeaf2f2501b3d5c5f093ec7f659cf4b4c2632e8d26a->enter($__internal_c991c5c6e589ade4223acaeaf2f2501b3d5c5f093ec7f659cf4b4c2632e8d26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        echo "Administration du site ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.project"), "html", null, true);
        
        $__internal_c991c5c6e589ade4223acaeaf2f2501b3d5c5f093ec7f659cf4b4c2632e8d26a->leave($__internal_c991c5c6e589ade4223acaeaf2f2501b3d5c5f093ec7f659cf4b4c2632e8d26a_prof);

    }

    // line 11
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_e28d77d201ef039e184029be254f04bc598617cd5029dc3ab8fb42ad68b6d2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28d77d201ef039e184029be254f04bc598617cd5029dc3ab8fb42ad68b6d2eb->enter($__internal_e28d77d201ef039e184029be254f04bc598617cd5029dc3ab8fb42ad68b6d2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        echo "    
    Là ce serai pas mal qu'on ajoute les numéros skinsoft? genre support technique par mail et par téléphone?
    On en parle
";
        
        $__internal_e28d77d201ef039e184029be254f04bc598617cd5029dc3ab8fb42ad68b6d2eb->leave($__internal_e28d77d201ef039e184029be254f04bc598617cd5029dc3ab8fb42ad68b6d2eb_prof);

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
