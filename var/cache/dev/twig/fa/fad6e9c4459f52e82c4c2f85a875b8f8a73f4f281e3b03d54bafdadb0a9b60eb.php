<?php

/* MwebCoreBundle::home.html.twig */
class __TwigTemplate_7f68fb2efe6eac78b7024e936c60290a0bc6a28c3c5123b193d56c84f28ecbe1 extends Twig_Template
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
        $__internal_f5e06f752c10a8925b1affc2609ea87e49be6ebb98539a3470ab1242b525139e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e06f752c10a8925b1affc2609ea87e49be6ebb98539a3470ab1242b525139e->enter($__internal_f5e06f752c10a8925b1affc2609ea87e49be6ebb98539a3470ab1242b525139e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebCoreBundle::home.html.twig"));

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
        
        $__internal_f5e06f752c10a8925b1affc2609ea87e49be6ebb98539a3470ab1242b525139e->leave($__internal_f5e06f752c10a8925b1affc2609ea87e49be6ebb98539a3470ab1242b525139e_prof);

    }

    public function getTemplateName()
    {
        return "MwebCoreBundle::home.html.twig";
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
", "MwebCoreBundle::home.html.twig", "/home/fab/Documents/Pro/www/circa/src/Mweb/CoreBundle/Resources/views/home.html.twig");
    }
}
