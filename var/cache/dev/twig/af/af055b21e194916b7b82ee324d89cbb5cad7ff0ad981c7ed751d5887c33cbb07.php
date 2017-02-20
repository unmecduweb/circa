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
        $__internal_d509ee0c7aff2488ea686457945f4718d203f86c4bfcb3257a70dcfb00baaf29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d509ee0c7aff2488ea686457945f4718d203f86c4bfcb3257a70dcfb00baaf29->enter($__internal_d509ee0c7aff2488ea686457945f4718d203f86c4bfcb3257a70dcfb00baaf29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d509ee0c7aff2488ea686457945f4718d203f86c4bfcb3257a70dcfb00baaf29->leave($__internal_d509ee0c7aff2488ea686457945f4718d203f86c4bfcb3257a70dcfb00baaf29_prof);

    }

    // line 4
    public function block_js($context, array $blocks = array())
    {
        $__internal_40f18891f7acab81e6275aa3869e948ef6f500e963f46394559974f4b2776cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f18891f7acab81e6275aa3869e948ef6f500e963f46394559974f4b2776cac->enter($__internal_40f18891f7acab81e6275aa3869e948ef6f500e963f46394559974f4b2776cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 5
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    
";
        
        $__internal_40f18891f7acab81e6275aa3869e948ef6f500e963f46394559974f4b2776cac->leave($__internal_40f18891f7acab81e6275aa3869e948ef6f500e963f46394559974f4b2776cac_prof);

    }

    // line 9
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_ad6ed0822561223357dca3020cc9626c9e0d289d61f85038093a6924f8a8f25e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6ed0822561223357dca3020cc9626c9e0d289d61f85038093a6924f8a8f25e->enter($__internal_ad6ed0822561223357dca3020cc9626c9e0d289d61f85038093a6924f8a8f25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        echo "Administration du site ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.project"), "html", null, true);
        
        $__internal_ad6ed0822561223357dca3020cc9626c9e0d289d61f85038093a6924f8a8f25e->leave($__internal_ad6ed0822561223357dca3020cc9626c9e0d289d61f85038093a6924f8a8f25e_prof);

    }

    // line 11
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_9010a94731991d59849115fcd65d33bf36cdfd412aa48bc39867998272b845e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9010a94731991d59849115fcd65d33bf36cdfd412aa48bc39867998272b845e0->enter($__internal_9010a94731991d59849115fcd65d33bf36cdfd412aa48bc39867998272b845e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        echo "    
    Là ce serai pas mal qu'on ajoute les numéros skinsoft? genre support technique par mail et par téléphone?
    On en parle
";
        
        $__internal_9010a94731991d59849115fcd65d33bf36cdfd412aa48bc39867998272b845e0->leave($__internal_9010a94731991d59849115fcd65d33bf36cdfd412aa48bc39867998272b845e0_prof);

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
