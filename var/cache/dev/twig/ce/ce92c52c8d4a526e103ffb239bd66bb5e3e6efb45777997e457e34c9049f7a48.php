<?php

/* :Form:forms.html.twig */
class __TwigTemplate_dee6ba81956b0af617e2609fc34027ff017e90822560711388457353861f7afd extends Twig_Template
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
        $__internal_4a4fa1ae6650e48330e7b8ac0469b9f30fe9b9d17c3a66a9abd3b466ad8f8b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4fa1ae6650e48330e7b8ac0469b9f30fe9b9d17c3a66a9abd3b466ad8f8b80->enter($__internal_4a4fa1ae6650e48330e7b8ac0469b9f30fe9b9d17c3a66a9abd3b466ad8f8b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:forms.html.twig"));

        // line 1
        echo "

";
        
        $__internal_4a4fa1ae6650e48330e7b8ac0469b9f30fe9b9d17c3a66a9abd3b466ad8f8b80->leave($__internal_4a4fa1ae6650e48330e7b8ac0469b9f30fe9b9d17c3a66a9abd3b466ad8f8b80_prof);

    }

    // line 3
    public function getproduct_prototype($__productQuantity__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "productQuantity" => $__productQuantity__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_9ee9c25df36b42581c0eab7a81b85619029ba8dfb3d5eb33f255151fab17ad6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9ee9c25df36b42581c0eab7a81b85619029ba8dfb3d5eb33f255151fab17ad6e->enter($__internal_9ee9c25df36b42581c0eab7a81b85619029ba8dfb3d5eb33f255151fab17ad6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "product_prototype"));

            // line 4
            echo "     <li>
        ";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["productQuantity"]) ? $context["productQuantity"] : $this->getContext($context, "productQuantity")), 'errors');
            echo "
        <div class=\"col-xs-6 form-group \">
            ";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["productQuantity"]) ? $context["productQuantity"] : $this->getContext($context, "productQuantity")), "product", array()), 'label');
            echo "
            ";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["productQuantity"]) ? $context["productQuantity"] : $this->getContext($context, "productQuantity")), "product", array()), 'widget', array("attr" => array("class" => "select")));
            echo "
        </div>
        <div class=\"col-xs-6 form-group\">
            ";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["productQuantity"]) ? $context["productQuantity"] : $this->getContext($context, "productQuantity")), "quantity", array()), 'label');
            echo "
            ";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["productQuantity"]) ? $context["productQuantity"] : $this->getContext($context, "productQuantity")), "quantity", array()), 'widget', array("attr" => array("class" => "form-control field-quantity")));
            echo "
            <span class=\"product-unity\"></span>
        </div>
        <div class=\"clear\"></div>
    </li>
";
            
            $__internal_9ee9c25df36b42581c0eab7a81b85619029ba8dfb3d5eb33f255151fab17ad6e->leave($__internal_9ee9c25df36b42581c0eab7a81b85619029ba8dfb3d5eb33f255151fab17ad6e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return ":Form:forms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  64 => 11,  58 => 8,  54 => 7,  49 => 5,  46 => 4,  31 => 3,  22 => 1,);
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

{% macro product_prototype(productQuantity) %}
     <li>
        {{ form_errors(productQuantity) }}
        <div class=\"col-xs-6 form-group \">
            {{ form_label(productQuantity.product) }}
            {{ form_widget(productQuantity.product, {\"attr\":{'class':'select'}} ) }}
        </div>
        <div class=\"col-xs-6 form-group\">
            {{ form_label(productQuantity.quantity) }}
            {{ form_widget(productQuantity.quantity, {\"attr\":{'class':'form-control field-quantity'}} ) }}
            <span class=\"product-unity\"></span>
        </div>
        <div class=\"clear\"></div>
    </li>
{% endmacro %}", ":Form:forms.html.twig", "/home/fab/Documents/Pro/www/circa/app/Resources/views/Form/forms.html.twig");
    }
}
