<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_784706bc728470e346a32cada68cf54cdcd55c4e044be5201cb9fd777fdaa121 extends Twig_Template
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
        $__internal_94b5f5dd5970c8bff88e7d09170b509f77002bf5f3a62d08f31cecf9caae39e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b5f5dd5970c8bff88e7d09170b509f77002bf5f3a62d08f31cecf9caae39e3->enter($__internal_94b5f5dd5970c8bff88e7d09170b509f77002bf5f3a62d08f31cecf9caae39e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_94b5f5dd5970c8bff88e7d09170b509f77002bf5f3a62d08f31cecf9caae39e3->leave($__internal_94b5f5dd5970c8bff88e7d09170b509f77002bf5f3a62d08f31cecf9caae39e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
