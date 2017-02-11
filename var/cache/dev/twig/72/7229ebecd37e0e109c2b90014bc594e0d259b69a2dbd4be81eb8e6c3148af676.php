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
        $__internal_49ca523743bd6316f21087944f1028037f5ca0f710cbf4a013b9cebfd7d4c26f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ca523743bd6316f21087944f1028037f5ca0f710cbf4a013b9cebfd7d4c26f->enter($__internal_49ca523743bd6316f21087944f1028037f5ca0f710cbf4a013b9cebfd7d4c26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_49ca523743bd6316f21087944f1028037f5ca0f710cbf4a013b9cebfd7d4c26f->leave($__internal_49ca523743bd6316f21087944f1028037f5ca0f710cbf4a013b9cebfd7d4c26f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_91518cbed020631727955ad87568c2a888dd469ddffb8e74b9fdf8b9d54453d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91518cbed020631727955ad87568c2a888dd469ddffb8e74b9fdf8b9d54453d3->enter($__internal_91518cbed020631727955ad87568c2a888dd469ddffb8e74b9fdf8b9d54453d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_91518cbed020631727955ad87568c2a888dd469ddffb8e74b9fdf8b9d54453d3->leave($__internal_91518cbed020631727955ad87568c2a888dd469ddffb8e74b9fdf8b9d54453d3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29c283db24ed90885aefefa64f9f59cdb3221da4f25207f2b6b3a603cdcdb805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c283db24ed90885aefefa64f9f59cdb3221da4f25207f2b6b3a603cdcdb805->enter($__internal_29c283db24ed90885aefefa64f9f59cdb3221da4f25207f2b6b3a603cdcdb805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_29c283db24ed90885aefefa64f9f59cdb3221da4f25207f2b6b3a603cdcdb805->leave($__internal_29c283db24ed90885aefefa64f9f59cdb3221da4f25207f2b6b3a603cdcdb805_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dfbd3f68fe8da64d518001fe0c750555e8c00a22b05cb38a00493c7d7ecf8d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfbd3f68fe8da64d518001fe0c750555e8c00a22b05cb38a00493c7d7ecf8d7->enter($__internal_4dfbd3f68fe8da64d518001fe0c750555e8c00a22b05cb38a00493c7d7ecf8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4dfbd3f68fe8da64d518001fe0c750555e8c00a22b05cb38a00493c7d7ecf8d7->leave($__internal_4dfbd3f68fe8da64d518001fe0c750555e8c00a22b05cb38a00493c7d7ecf8d7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d19160db6cc6aff9bdb36b55a7bdfb64cafd83ebf0646d06c7b93263a134ac72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19160db6cc6aff9bdb36b55a7bdfb64cafd83ebf0646d06c7b93263a134ac72->enter($__internal_d19160db6cc6aff9bdb36b55a7bdfb64cafd83ebf0646d06c7b93263a134ac72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d19160db6cc6aff9bdb36b55a7bdfb64cafd83ebf0646d06c7b93263a134ac72->leave($__internal_d19160db6cc6aff9bdb36b55a7bdfb64cafd83ebf0646d06c7b93263a134ac72_prof);

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
