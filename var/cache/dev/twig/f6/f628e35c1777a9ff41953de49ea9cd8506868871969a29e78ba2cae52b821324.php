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
        $__internal_444b97e043e58def1fcae6eb1f1c463d7ca2414502100d9c7753210052059196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444b97e043e58def1fcae6eb1f1c463d7ca2414502100d9c7753210052059196->enter($__internal_444b97e043e58def1fcae6eb1f1c463d7ca2414502100d9c7753210052059196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_444b97e043e58def1fcae6eb1f1c463d7ca2414502100d9c7753210052059196->leave($__internal_444b97e043e58def1fcae6eb1f1c463d7ca2414502100d9c7753210052059196_prof);

    }

    // line 3
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_45f85e24ff2d3b96523468f68f0feb6707d6361737592526354654592a9894ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f85e24ff2d3b96523468f68f0feb6707d6361737592526354654592a9894ed->enter($__internal_45f85e24ff2d3b96523468f68f0feb6707d6361737592526354654592a9894ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        echo "Modifier votre compte";
        
        $__internal_45f85e24ff2d3b96523468f68f0feb6707d6361737592526354654592a9894ed->leave($__internal_45f85e24ff2d3b96523468f68f0feb6707d6361737592526354654592a9894ed_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47a7cad4609e393b8cf9d929e785aefde7161207136db2c0b60b460d95b6e9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a7cad4609e393b8cf9d929e785aefde7161207136db2c0b60b460d95b6e9f0->enter($__internal_47a7cad4609e393b8cf9d929e785aefde7161207136db2c0b60b460d95b6e9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "MwebAdminBundle:Profile:edit.html.twig", 5)->display($context);
        
        $__internal_47a7cad4609e393b8cf9d929e785aefde7161207136db2c0b60b460d95b6e9f0->leave($__internal_47a7cad4609e393b8cf9d929e785aefde7161207136db2c0b60b460d95b6e9f0_prof);

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
