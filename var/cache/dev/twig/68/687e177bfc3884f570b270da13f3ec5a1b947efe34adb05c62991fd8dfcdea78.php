<?php

/* MwebAdminBundle::index.html.twig */
class __TwigTemplate_9acf810749feadec2945f66984ea730cefac1840dab8825f02c40db8f9d64a42 extends Twig_Template
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
        $__internal_99f1a97e3eb3c74cad8c6ee003bce557fa05238c927c5c84f7af74a36decb70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f1a97e3eb3c74cad8c6ee003bce557fa05238c927c5c84f7af74a36decb70e->enter($__internal_99f1a97e3eb3c74cad8c6ee003bce557fa05238c927c5c84f7af74a36decb70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99f1a97e3eb3c74cad8c6ee003bce557fa05238c927c5c84f7af74a36decb70e->leave($__internal_99f1a97e3eb3c74cad8c6ee003bce557fa05238c927c5c84f7af74a36decb70e_prof);

    }

    // line 4
    public function block_js($context, array $blocks = array())
    {
        $__internal_a2e9d586f04de7afd5e6a557c77bac0445f2c5e503d34ffd268e48e18d05803c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e9d586f04de7afd5e6a557c77bac0445f2c5e503d34ffd268e48e18d05803c->enter($__internal_a2e9d586f04de7afd5e6a557c77bac0445f2c5e503d34ffd268e48e18d05803c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 5
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    
";
        
        $__internal_a2e9d586f04de7afd5e6a557c77bac0445f2c5e503d34ffd268e48e18d05803c->leave($__internal_a2e9d586f04de7afd5e6a557c77bac0445f2c5e503d34ffd268e48e18d05803c_prof);

    }

    // line 9
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_b9ac775b4dfeb239dde5b95378374f2cd7d85a4d1f9daf14cab8a72fd5a4991d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ac775b4dfeb239dde5b95378374f2cd7d85a4d1f9daf14cab8a72fd5a4991d->enter($__internal_b9ac775b4dfeb239dde5b95378374f2cd7d85a4d1f9daf14cab8a72fd5a4991d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        echo "Administration du site ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.project"), "html", null, true);
        
        $__internal_b9ac775b4dfeb239dde5b95378374f2cd7d85a4d1f9daf14cab8a72fd5a4991d->leave($__internal_b9ac775b4dfeb239dde5b95378374f2cd7d85a4d1f9daf14cab8a72fd5a4991d_prof);

    }

    // line 11
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_08ecbbb192caba2eab84f608098060d715e5b60b5533733ee5e4c02b38963a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ecbbb192caba2eab84f608098060d715e5b60b5533733ee5e4c02b38963a5a->enter($__internal_08ecbbb192caba2eab84f608098060d715e5b60b5533733ee5e4c02b38963a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        echo "    
    Là ce serai pas mal qu'on ajoute les numéros skinsoft? genre support technique par mail et par téléphone?
    On en parle
";
        
        $__internal_08ecbbb192caba2eab84f608098060d715e5b60b5533733ee5e4c02b38963a5a->leave($__internal_08ecbbb192caba2eab84f608098060d715e5b60b5533733ee5e4c02b38963a5a_prof);

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
