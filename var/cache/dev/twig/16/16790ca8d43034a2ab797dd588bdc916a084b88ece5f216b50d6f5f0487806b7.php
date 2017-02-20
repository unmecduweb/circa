<?php

/* MwebCoreBundle::email.html.twig */
class __TwigTemplate_83a72ff3b866a6ca07bfd77c3b7f292b3afe181d19c5ece4c4b7767b37162163 extends Twig_Template
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
        $__internal_e9361405b7702918309cc6dd7f5a3c17a993815ed4fe21efda194f5941a753ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9361405b7702918309cc6dd7f5a3c17a993815ed4fe21efda194f5941a753ff->enter($__internal_e9361405b7702918309cc6dd7f5a3c17a993815ed4fe21efda194f5941a753ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebCoreBundle::email.html.twig"));

        // line 1
        echo "<p>Un nouveau message de contact a été posté sur myexpo, retrouver les informations ci-desosus:</p>
<ul>
    <li>Nom : ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo "</li>
    <li>Institution : ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "html", null, true);
        echo "</li>
    <li>Numéro tel : ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["tel"]) ? $context["tel"] : $this->getContext($context, "tel")), "html", null, true);
        echo "</li>
    <li>Adresse postale : ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["addresse"]) ? $context["addresse"] : $this->getContext($context, "addresse")), "html", null, true);
        echo "</li>
    <li>Objet : ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet"))), "html", null, true);
        echo "</li>
    <li>Message : ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</li>
</ul>
";
        
        $__internal_e9361405b7702918309cc6dd7f5a3c17a993815ed4fe21efda194f5941a753ff->leave($__internal_e9361405b7702918309cc6dd7f5a3c17a993815ed4fe21efda194f5941a753ff_prof);

    }

    public function getTemplateName()
    {
        return "MwebCoreBundle::email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>Un nouveau message de contact a été posté sur myexpo, retrouver les informations ci-desosus:</p>
<ul>
    <li>Nom : {{ nom }}</li>
    <li>Institution : {{ institution }}</li>
    <li>Numéro tel : {{ tel }}</li>
    <li>Adresse postale : {{ addresse }}</li>
    <li>Objet : {{ objet|trans }}</li>
    <li>Message : {{ message }}</li>
</ul>
", "MwebCoreBundle::email.html.twig", "/home/fab/Documents/Pro/www/circa/src/Mweb/CoreBundle/Resources/views/email.html.twig");
    }
}
