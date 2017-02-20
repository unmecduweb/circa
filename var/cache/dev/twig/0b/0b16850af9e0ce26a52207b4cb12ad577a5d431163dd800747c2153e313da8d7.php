<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_85febd358e4790f1e51bd8bea6796204333f0baea7f9d5182d0dd074c0df35ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bcae0e6e5cbcaa7a0235d18879d5b8e581666bb6c291f9d46d80e648304851e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bcae0e6e5cbcaa7a0235d18879d5b8e581666bb6c291f9d46d80e648304851e->enter($__internal_7bcae0e6e5cbcaa7a0235d18879d5b8e581666bb6c291f9d46d80e648304851e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7bcae0e6e5cbcaa7a0235d18879d5b8e581666bb6c291f9d46d80e648304851e->leave($__internal_7bcae0e6e5cbcaa7a0235d18879d5b8e581666bb6c291f9d46d80e648304851e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
