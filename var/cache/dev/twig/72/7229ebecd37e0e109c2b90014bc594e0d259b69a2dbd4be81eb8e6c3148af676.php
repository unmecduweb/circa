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
        $__internal_776426e4c34a8adbda2dc1b98bfef0c9130a53c0bc54025222e1f373f7e36e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776426e4c34a8adbda2dc1b98bfef0c9130a53c0bc54025222e1f373f7e36e6d->enter($__internal_776426e4c34a8adbda2dc1b98bfef0c9130a53c0bc54025222e1f373f7e36e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_776426e4c34a8adbda2dc1b98bfef0c9130a53c0bc54025222e1f373f7e36e6d->leave($__internal_776426e4c34a8adbda2dc1b98bfef0c9130a53c0bc54025222e1f373f7e36e6d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fcb990771fc1337ab5cc5b2ca0b7f4f9858d5f800507627627061f7f34d250c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fcb990771fc1337ab5cc5b2ca0b7f4f9858d5f800507627627061f7f34d250c->enter($__internal_8fcb990771fc1337ab5cc5b2ca0b7f4f9858d5f800507627627061f7f34d250c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8fcb990771fc1337ab5cc5b2ca0b7f4f9858d5f800507627627061f7f34d250c->leave($__internal_8fcb990771fc1337ab5cc5b2ca0b7f4f9858d5f800507627627061f7f34d250c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c19df90b1baff2054f0649f5df23e2b65b6c0d880a36287a2801d733ffeb5e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19df90b1baff2054f0649f5df23e2b65b6c0d880a36287a2801d733ffeb5e80->enter($__internal_c19df90b1baff2054f0649f5df23e2b65b6c0d880a36287a2801d733ffeb5e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c19df90b1baff2054f0649f5df23e2b65b6c0d880a36287a2801d733ffeb5e80->leave($__internal_c19df90b1baff2054f0649f5df23e2b65b6c0d880a36287a2801d733ffeb5e80_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b81935fe1e3732ddbd828d928f0e545367484e3be76197fb5c93e75b0c07be50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81935fe1e3732ddbd828d928f0e545367484e3be76197fb5c93e75b0c07be50->enter($__internal_b81935fe1e3732ddbd828d928f0e545367484e3be76197fb5c93e75b0c07be50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b81935fe1e3732ddbd828d928f0e545367484e3be76197fb5c93e75b0c07be50->leave($__internal_b81935fe1e3732ddbd828d928f0e545367484e3be76197fb5c93e75b0c07be50_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7cc320c849f9eb477b00ab28913d332d904fcd2878ee560b98ad8746f8169112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc320c849f9eb477b00ab28913d332d904fcd2878ee560b98ad8746f8169112->enter($__internal_7cc320c849f9eb477b00ab28913d332d904fcd2878ee560b98ad8746f8169112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7cc320c849f9eb477b00ab28913d332d904fcd2878ee560b98ad8746f8169112->leave($__internal_7cc320c849f9eb477b00ab28913d332d904fcd2878ee560b98ad8746f8169112_prof);

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
