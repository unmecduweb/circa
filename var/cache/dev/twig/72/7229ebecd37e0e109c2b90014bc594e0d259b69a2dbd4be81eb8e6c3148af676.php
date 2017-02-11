<?php

/* base.html.twig */
class __TwigTemplate_33cf900bf8b1282798e0cc502dfce89ddca207cae3c60602c2a6adeefe2cb937 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b23a9481485be944dc3a501309f5d2021fa5b82bcdd7bd8a22cd999dc402b9a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23a9481485be944dc3a501309f5d2021fa5b82bcdd7bd8a22cd999dc402b9a2->enter($__internal_b23a9481485be944dc3a501309f5d2021fa5b82bcdd7bd8a22cd999dc402b9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b23a9481485be944dc3a501309f5d2021fa5b82bcdd7bd8a22cd999dc402b9a2->leave($__internal_b23a9481485be944dc3a501309f5d2021fa5b82bcdd7bd8a22cd999dc402b9a2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8614bb98cdc0714471005fc0f1efa87248ea642afa5102f6ab4df0dcb15ca9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8614bb98cdc0714471005fc0f1efa87248ea642afa5102f6ab4df0dcb15ca9c->enter($__internal_c8614bb98cdc0714471005fc0f1efa87248ea642afa5102f6ab4df0dcb15ca9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c8614bb98cdc0714471005fc0f1efa87248ea642afa5102f6ab4df0dcb15ca9c->leave($__internal_c8614bb98cdc0714471005fc0f1efa87248ea642afa5102f6ab4df0dcb15ca9c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7b2006ce4550af17d6b7d11933027cc61d2b574f5a663a5c74b05187b49a7e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2006ce4550af17d6b7d11933027cc61d2b574f5a663a5c74b05187b49a7e42->enter($__internal_7b2006ce4550af17d6b7d11933027cc61d2b574f5a663a5c74b05187b49a7e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7b2006ce4550af17d6b7d11933027cc61d2b574f5a663a5c74b05187b49a7e42->leave($__internal_7b2006ce4550af17d6b7d11933027cc61d2b574f5a663a5c74b05187b49a7e42_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_20136893d9c4d18263978c0be34d1ead9c6a74356465f3b139590b9626b36d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20136893d9c4d18263978c0be34d1ead9c6a74356465f3b139590b9626b36d04->enter($__internal_20136893d9c4d18263978c0be34d1ead9c6a74356465f3b139590b9626b36d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_20136893d9c4d18263978c0be34d1ead9c6a74356465f3b139590b9626b36d04->leave($__internal_20136893d9c4d18263978c0be34d1ead9c6a74356465f3b139590b9626b36d04_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c88816e4c398a52d51c5f85576743b25ee014dd8b4e520deaf2bcbadc2cce3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88816e4c398a52d51c5f85576743b25ee014dd8b4e520deaf2bcbadc2cce3e0->enter($__internal_c88816e4c398a52d51c5f85576743b25ee014dd8b4e520deaf2bcbadc2cce3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c88816e4c398a52d51c5f85576743b25ee014dd8b4e520deaf2bcbadc2cce3e0->leave($__internal_c88816e4c398a52d51c5f85576743b25ee014dd8b4e520deaf2bcbadc2cce3e0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/fab/Documents/Pro/www/circa/app/Resources/views/base.html.twig");
    }
}
