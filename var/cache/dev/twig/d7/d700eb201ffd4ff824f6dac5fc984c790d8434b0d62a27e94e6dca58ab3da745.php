<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8642f89af6eedd1d5b8b1351aea1f505c95875bcf7106ce51e176b63bc35dff8 extends Twig_Template
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
        $__internal_a802b9968da2f4d6d07d2bd034daf2293cd5860d2c7a33ba8e99cd5faaa1b4bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a802b9968da2f4d6d07d2bd034daf2293cd5860d2c7a33ba8e99cd5faaa1b4bb->enter($__internal_a802b9968da2f4d6d07d2bd034daf2293cd5860d2c7a33ba8e99cd5faaa1b4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a802b9968da2f4d6d07d2bd034daf2293cd5860d2c7a33ba8e99cd5faaa1b4bb->leave($__internal_a802b9968da2f4d6d07d2bd034daf2293cd5860d2c7a33ba8e99cd5faaa1b4bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
