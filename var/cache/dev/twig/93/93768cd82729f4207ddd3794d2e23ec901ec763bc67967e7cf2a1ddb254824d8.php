<?php

/* MwebAdminBundle:production:edit.html.twig */
class __TwigTemplate_dea1de731d2292e36cafe0334161a6b058c6b002213c70599e8fa26d4f81fa4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MwebAdminBundle::layout.html.twig", "MwebAdminBundle:production:edit.html.twig", 1);
        $this->blocks = array(
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
        $__internal_76bce7df3444721c4f6bdf4867d07495a7b18ee883eb816ad51b6281a9916e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76bce7df3444721c4f6bdf4867d07495a7b18ee883eb816ad51b6281a9916e02->enter($__internal_76bce7df3444721c4f6bdf4867d07495a7b18ee883eb816ad51b6281a9916e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:production:edit.html.twig"));

        // line 3
        $context["forms"] = $this->loadTemplate("Form/forms.html.twig", "MwebAdminBundle:production:edit.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76bce7df3444721c4f6bdf4867d07495a7b18ee883eb816ad51b6281a9916e02->leave($__internal_76bce7df3444721c4f6bdf4867d07495a7b18ee883eb816ad51b6281a9916e02_prof);

    }

    // line 5
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_bdd28ae5ff3e2424eb75870863b82386512d5d0d45527c8d5d097d3b8fd3d2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd28ae5ff3e2424eb75870863b82386512d5d0d45527c8d5d097d3b8fd3d2df->enter($__internal_bdd28ae5ff3e2424eb75870863b82386512d5d0d45527c8d5d097d3b8fd3d2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        // line 6
        echo "    
";
        
        $__internal_bdd28ae5ff3e2424eb75870863b82386512d5d0d45527c8d5d097d3b8fd3d2df->leave($__internal_bdd28ae5ff3e2424eb75870863b82386512d5d0d45527c8d5d097d3b8fd3d2df_prof);

    }

    // line 8
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_4928ea7e9b21757b38e398197678310652299080bf356411cc475c25164565c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4928ea7e9b21757b38e398197678310652299080bf356411cc475c25164565c9->enter($__internal_4928ea7e9b21757b38e398197678310652299080bf356411cc475c25164565c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        // line 9
        echo "    
    <div class=\"container\">
        
        <h1>Fiche de fabrication</h1>
        <form action=\"\" method=\"post\">
            
            
            
        ";
        // line 17
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "Form/main-form-layout.html.twig"));
        // line 18
        echo "
        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        
        <div class=\"form-group col-xs-6\">
           ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
           ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        
        <div class=\"form-group col-xs-3\">
           ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbPerson", array()), 'label');
        echo "
           ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbPerson", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        
        <div class=\"form-group col-xs-3\">
           ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'label');
        echo "
           ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget', array("attr" => array("class" => "select")));
        echo "
        </div>
        
        
        <div class=\"form-group col-xs-4\">
           ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "priceSellingHt", array()), 'label');
        echo "
           ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "priceSellingHt", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        
        <div class=\"form-group col-xs-4\">
           ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preparationTime", array()), 'label');
        echo "
           ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preparationTime", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group col-xs-4\">
           ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cookingTime", array()), 'label');
        echo "
           ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cookingTime", array()), 'widget');
        echo "
        </div>
        
        
        
        
        <div class=\"col-xs-12\">
            ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productQuantity", array()), 'label');
        echo "
            <ul id=\"products-quantity-fields-list\" class=\"collection-list\" data-prototype=\"";
        // line 56
        echo twig_escape_filter($this->env, $context["forms"]->getproduct_prototype($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productQuantity", array()), "vars", array()), "prototype", array())));
        echo "\">
            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productQuantity", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["productQuantity"]) {
            // line 58
            echo "               ";
            echo $context["forms"]->getproduct_prototype($context["productQuantity"]);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productQuantity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </ul>
            <a href=\"#\" class=\"button collection-add\">Ajouter un produit</a>
        </div>
    
        <div class=\"form-group col-xs-12\">
           ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'label');
        echo "
           ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
            
            
        <div class=\"form-group col-xs-12\">
           ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
           ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        
        <div class=\"form-group col-xs-12\">
           ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materiels", array()), 'label');
        echo "
           ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materiels", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group col-xs-12\">
           ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productionStep", array()), 'label');
        echo "
           ";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productionStep", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        
    
        ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        
        
        
        <input type=\"submit\" />
        </form>
    </div>
";
        
        $__internal_4928ea7e9b21757b38e398197678310652299080bf356411cc475c25164565c9->leave($__internal_4928ea7e9b21757b38e398197678310652299080bf356411cc475c25164565c9_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:production:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 86,  214 => 82,  210 => 81,  203 => 77,  199 => 76,  192 => 72,  188 => 71,  180 => 66,  176 => 65,  169 => 60,  160 => 58,  156 => 57,  152 => 56,  148 => 55,  138 => 48,  134 => 47,  128 => 44,  124 => 43,  117 => 39,  113 => 38,  105 => 33,  101 => 32,  94 => 28,  90 => 27,  83 => 23,  79 => 22,  73 => 19,  70 => 18,  68 => 17,  58 => 9,  52 => 8,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MwebAdminBundle::layout.html.twig\" %}

{% import \"Form/forms.html.twig\" as forms %}

{%block pageH1 %}
    
{%endblock%}
{% block admin_container %}
    
    <div class=\"container\">
        
        <h1>Fiche de fabrication</h1>
        <form action=\"\" method=\"post\">
            
            
            
        {% form_theme form 'Form/main-form-layout.html.twig' %}

        {{ form_errors(form) }}
        
        <div class=\"form-group col-xs-6\">
           {{ form_label(form.name) }}
           {{ form_widget(form.name, {\"attr\":{'class':'form-control'}} ) }}
        </div>
        
        <div class=\"form-group col-xs-3\">
           {{ form_label(form.nbPerson) }}
           {{ form_widget(form.nbPerson, {\"attr\":{'class':'form-control'}} ) }}
        </div>
        
        <div class=\"form-group col-xs-3\">
           {{ form_label(form.category) }}
           {{ form_widget(form.category, {\"attr\":{'class':'select'}} ) }}
        </div>
        
        
        <div class=\"form-group col-xs-4\">
           {{ form_label(form.priceSellingHt) }}
           {{ form_widget(form.priceSellingHt, {\"attr\":{'class':'form-control'}} ) }}
        </div>
        
        <div class=\"form-group col-xs-4\">
           {{ form_label(form.preparationTime) }}
           {{ form_widget(form.preparationTime ) }}
        </div>
        <div class=\"form-group col-xs-4\">
           {{ form_label(form.cookingTime) }}
           {{ form_widget(form.cookingTime) }}
        </div>
        
        
        
        
        <div class=\"col-xs-12\">
            {{ form_label(form.productQuantity) }}
            <ul id=\"products-quantity-fields-list\" class=\"collection-list\" data-prototype=\"{{ forms.product_prototype(form.productQuantity.vars.prototype) | e }}\">
            {% for productQuantity in form.productQuantity %}
               {{  forms.product_prototype(productQuantity) }}
            {% endfor %}
            </ul>
            <a href=\"#\" class=\"button collection-add\">Ajouter un produit</a>
        </div>
    
        <div class=\"form-group col-xs-12\">
           {{ form_label(form.author) }}
           {{ form_widget(form.author, {\"attr\":{'class':'form-control'}} ) }}
        </div>
            
            
        <div class=\"form-group col-xs-12\">
           {{ form_label(form.description) }}
           {{ form_widget(form.description, {\"attr\":{'class':'form-control'}} ) }}
        </div>
        
        <div class=\"form-group col-xs-12\">
           {{ form_label(form.materiels) }}
           {{ form_widget(form.materiels, {\"attr\":{'class':'form-control'}} ) }}
        </div>

        <div class=\"form-group col-xs-12\">
           {{ form_label(form.productionStep) }}
           {{ form_widget(form.productionStep, {\"attr\":{'class':'form-control'}} ) }}
        </div>
        
    
        {{ form_rest(form) }}
        
        
        
        <input type=\"submit\" />
        </form>
    </div>
{% endblock %}", "MwebAdminBundle:production:edit.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/production/edit.html.twig");
    }
}
