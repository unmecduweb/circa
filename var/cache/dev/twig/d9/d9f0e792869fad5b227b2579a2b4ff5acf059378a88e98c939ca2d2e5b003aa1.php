<?php

/* MwebAdminBundle:production:view.html.twig */
class __TwigTemplate_18c1ea4cbb53790339de096e4190a544a15fd8eeafb005c546e53d31da9994d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MwebAdminBundle::layout.html.twig", "MwebAdminBundle:production:view.html.twig", 1);
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
        $__internal_5ccddd7b03f0d1d784783e91b35c17569cabd133ec20483d3915642f7e716b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ccddd7b03f0d1d784783e91b35c17569cabd133ec20483d3915642f7e716b6b->enter($__internal_5ccddd7b03f0d1d784783e91b35c17569cabd133ec20483d3915642f7e716b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:production:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ccddd7b03f0d1d784783e91b35c17569cabd133ec20483d3915642f7e716b6b->leave($__internal_5ccddd7b03f0d1d784783e91b35c17569cabd133ec20483d3915642f7e716b6b_prof);

    }

    // line 3
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_555c79ca3e81e3f9c153c30ff3b13b9fd5faa0ef860ed2b7afcbaa32c0b2eeef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555c79ca3e81e3f9c153c30ff3b13b9fd5faa0ef860ed2b7afcbaa32c0b2eeef->enter($__internal_555c79ca3e81e3f9c153c30ff3b13b9fd5faa0ef860ed2b7afcbaa32c0b2eeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        // line 4
        echo "    
";
        
        $__internal_555c79ca3e81e3f9c153c30ff3b13b9fd5faa0ef860ed2b7afcbaa32c0b2eeef->leave($__internal_555c79ca3e81e3f9c153c30ff3b13b9fd5faa0ef860ed2b7afcbaa32c0b2eeef_prof);

    }

    // line 6
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_dcdfb6132c4ef34b049cd0ecceeeb639950567f2ad74cbab359405817a5094b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcdfb6132c4ef34b049cd0ecceeeb639950567f2ad74cbab359405817a5094b9->enter($__internal_dcdfb6132c4ef34b049cd0ecceeeb639950567f2ad74cbab359405817a5094b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        // line 7
        echo "    
    <div class=\"container\">
        
        
        <form action=\"\" method=\"post\">

    <table class=\"mw-table border\">
";
        // line 15
        echo "        <tr>
            <td colspan=\"3\">
                <h1>\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "\"</h1>
            </td>
        
        
            <td >
                <h4>Auteur de la fiche</h4>
                <p class=\"value\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category", array()), "html", null, true);
        echo "</p>
            </td>
        
            <td>
                <h4>Type de plat</h4>
                <p class=\"value\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category", array()), "html", null, true);
        echo "</p>
            </td>
        
            <td>
               <label for=\"nb-person\">Nombre de couvert</label>
               <input id=\"nb-person\" data-ref=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbPerson", array()), "html", null, true);
        echo "\" type=\"number\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbPerson", array()), "html", null, true);
        echo "\" />
            </td>
        </tr>
";
        // line 36
        echo "        
        <tr>
            <td colspan=\"4\">
                <h4>Descriptif</h4>
                <div class=\"content value\">
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "
                </div>
            </td>
        
            <td>
                <label for=\"nb-person\">Temps de préparation</label>
    ";
        // line 48
        echo "            </td>
            <td>
                <label for=\"nb-person\">Temps de cuisson</label>
    ";
        // line 52
        echo "             </td>   
        </tr>
    
        <tr>
            <td colspan=\"7\">
                <h4>Liste des ingrédients allergènes</h4>
                <div class=\"content value\">
                    ";
        // line 59
        $context["nbAllergen"] = 0;
        // line 60
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "productQuantity", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["productQ"]) {
            // line 61
            echo "                        ";
            if ($this->getAttribute($this->getAttribute($context["productQ"], "product", array()), "isAllergen", array())) {
                // line 62
                echo "                            ";
                if (((isset($context["nbAllergen"]) ? $context["nbAllergen"] : $this->getContext($context, "nbAllergen")) != 0)) {
                    echo "; ";
                }
                echo " ";
                // line 63
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["productQ"], "product", array()), "name", array()), "html", null, true);
                echo "
                            ";
                // line 64
                $context["nbAllergen"] = ((isset($context["nbAllergen"]) ? $context["nbAllergen"] : $this->getContext($context, "nbAllergen")) + 1);
                // line 65
                echo "                        ";
            }
            // line 66
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productQ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                </div>
            </td>
        </tr>
        <tr>
            <td colspan=\"4\">
                <h4>Etapes</h4>
                <div class=\"content value\">
                    ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "productionStep", array()), "html", null, true);
        echo "
                </div>
            </td>
        
            <td colspan=\"3\">
                
                ";
        // line 80
        $context["totalProducts"] = 0;
        // line 81
        echo "                ";
        $context["nbAllergen"] = 0;
        // line 82
        echo "                <table class=\"mw-table border stripped\">
                    <thead>
                        <tr>
                            <th>Liste des ingrédients</th>
                            <th>Quantité</th>
                            <th>Prix unité</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "productQuantity", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["productQ"]) {
            // line 93
            echo "                    <tr class=\"product-line\">
                        <td>
                            ";
            // line 95
            if ($this->getAttribute($this->getAttribute($context["productQ"], "product", array()), "isAllergen", array())) {
                // line 96
                echo "                                <span class=\"glyphicon glyphicon-triangle-bottom\"></span>
                            ";
            }
            // line 98
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["productQ"], "product", array()), "name", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            <span class=\"quantity\" data-ref=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["productQ"], "quantity", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["productQ"], "quantity", array()), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["productQ"], "product", array()), "unity", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            <span>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["productQ"], "product", array()), "priceHt", array()), "html", null, true);
            echo "</span>
                        </td>
                        <td>
                            <span class=\"price\" data-ref=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["productQ"], "product", array()), "priceHt", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["productQ"], "product", array()), "priceHt", array()) * $this->getAttribute($context["productQ"], "quantity", array())), "html", null, true);
            echo "€</span>
                        </td>
                    </tr>
                    ";
            // line 110
            $context["totalProducts"] = ((isset($context["totalProducts"]) ? $context["totalProducts"] : $this->getContext($context, "totalProducts")) + ($this->getAttribute($this->getAttribute($context["productQ"], "product", array()), "priceHt", array()) * $this->getAttribute($context["productQ"], "quantity", array())));
            // line 111
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productQ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                    <tr>
                        <td colspan=\"3\" align=\"right\">
                            <h4>Total ingrédients</h4>
                        </td>
                        <td align=\"right\">
                            <span class=\"total-product-price\">";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["totalProducts"]) ? $context["totalProducts"] : $this->getContext($context, "totalProducts")), "html", null, true);
        echo "</span> 
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" align=\"right\">
                            <h4>Assaisonements 2%</h4>
                        </td>
                        <td align=\"right\">
                            <span class=\"total-product-spicy\">";
        // line 125
        echo twig_escape_filter($this->env, ((isset($context["totalProducts"]) ? $context["totalProducts"] : $this->getContext($context, "totalProducts")) * 0.02), "html", null, true);
        echo "</span> €
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" align=\"right\">
                            <h4>Coût total</h4>
                        </td>
                        <td align=\"right\">
                            <span class=\"total-product-price\">";
        // line 133
        echo twig_escape_filter($this->env, ((isset($context["totalProducts"]) ? $context["totalProducts"] : $this->getContext($context, "totalProducts")) + ((isset($context["totalProducts"]) ? $context["totalProducts"] : $this->getContext($context, "totalProducts")) * 0.02)), "html", null, true);
        echo "</span> €
                        </td>
                    </tr>
                    
                    </tbody>
                </table>
            
                    
            </td>
            
        ";
        // line 204
        echo "        
        <input type=\"submit\" />
        </form>
    </div>
";
        
        $__internal_dcdfb6132c4ef34b049cd0ecceeeb639950567f2ad74cbab359405817a5094b9->leave($__internal_dcdfb6132c4ef34b049cd0ecceeeb639950567f2ad74cbab359405817a5094b9_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:production:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 204,  280 => 133,  269 => 125,  258 => 117,  251 => 112,  245 => 111,  243 => 110,  235 => 107,  229 => 104,  219 => 101,  212 => 98,  208 => 96,  206 => 95,  202 => 93,  198 => 92,  186 => 82,  183 => 81,  181 => 80,  172 => 74,  163 => 67,  157 => 66,  154 => 65,  152 => 64,  147 => 63,  141 => 62,  138 => 61,  133 => 60,  131 => 59,  122 => 52,  117 => 48,  108 => 41,  101 => 36,  93 => 33,  85 => 28,  77 => 23,  68 => 17,  64 => 15,  55 => 7,  49 => 6,  41 => 4,  35 => 3,  11 => 1,);
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

{%block pageH1 %}
    
{%endblock%}
{% block admin_container %}
    
    <div class=\"container\">
        
        
        <form action=\"\" method=\"post\">

    <table class=\"mw-table border\">
{#    1ERE LIGNE Titre/Auteur/plat/couvert        #}
        <tr>
            <td colspan=\"3\">
                <h1>\"{{ entity.name }}\"</h1>
            </td>
        
        
            <td >
                <h4>Auteur de la fiche</h4>
                <p class=\"value\">{{ entity.category }}</p>
            </td>
        
            <td>
                <h4>Type de plat</h4>
                <p class=\"value\">{{ entity.category }}</p>
            </td>
        
            <td>
               <label for=\"nb-person\">Nombre de couvert</label>
               <input id=\"nb-person\" data-ref=\"{{ entity.nbPerson }}\" type=\"number\" class=\"form-control\" value=\"{{ entity.nbPerson }}\" />
            </td>
        </tr>
{#    2EME LIGNE Description / Tps de cuisson / Tps de préparation #}        
        <tr>
            <td colspan=\"4\">
                <h4>Descriptif</h4>
                <div class=\"content value\">
                    {{ entity.description }}
                </div>
            </td>
        
            <td>
                <label for=\"nb-person\">Temps de préparation</label>
    {#            <input id=\"nb-person\" type=\"number\" class=\"form-control\" value=\"{{ entity.preparationTime.datetime('H:m') }}\" />#}
            </td>
            <td>
                <label for=\"nb-person\">Temps de cuisson</label>
    {#            <input id=\"nb-person\" type=\"number\" class=\"form-control\" value=\"{{ entity.preparationTime.datetime('H:m') }}\" />#}
             </td>   
        </tr>
    
        <tr>
            <td colspan=\"7\">
                <h4>Liste des ingrédients allergènes</h4>
                <div class=\"content value\">
                    {% set nbAllergen = 0 %}
                    {% for productQ in entity.productQuantity %}
                        {% if productQ.product.isAllergen %}
                            {% if nbAllergen != 0 %}; {%endif%} {# point virgule après le 0#}
                            {{ productQ.product.name }}
                            {% set nbAllergen = nbAllergen + 1 %}
                        {% endif %}
                    {% endfor %}
                </div>
            </td>
        </tr>
        <tr>
            <td colspan=\"4\">
                <h4>Etapes</h4>
                <div class=\"content value\">
                    {{ entity.productionStep }}
                </div>
            </td>
        
            <td colspan=\"3\">
                
                {% set totalProducts = 0  %}
                {% set nbAllergen = 0 %}
                <table class=\"mw-table border stripped\">
                    <thead>
                        <tr>
                            <th>Liste des ingrédients</th>
                            <th>Quantité</th>
                            <th>Prix unité</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                {% for productQ in entity.productQuantity %}
                    <tr class=\"product-line\">
                        <td>
                            {% if productQ.product.isAllergen %}
                                <span class=\"glyphicon glyphicon-triangle-bottom\"></span>
                            {% endif %}
                            {{ productQ.product.name }}
                        </td>
                        <td>
                            <span class=\"quantity\" data-ref=\"{{ productQ.quantity }}\">{{ productQ.quantity }}</span>{{ productQ.product.unity }}
                        </td>
                        <td>
                            <span>{{ productQ.product.priceHt }}</span>
                        </td>
                        <td>
                            <span class=\"price\" data-ref=\"{{ productQ.product.priceHt }}\">{{ productQ.product.priceHt * productQ.quantity  }}€</span>
                        </td>
                    </tr>
                    {% set totalProducts = totalProducts + (productQ.product.priceHt * productQ.quantity)  %}
                {% endfor %}
                    <tr>
                        <td colspan=\"3\" align=\"right\">
                            <h4>Total ingrédients</h4>
                        </td>
                        <td align=\"right\">
                            <span class=\"total-product-price\">{{ totalProducts }}</span> 
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" align=\"right\">
                            <h4>Assaisonements 2%</h4>
                        </td>
                        <td align=\"right\">
                            <span class=\"total-product-spicy\">{{ totalProducts*0.02 }}</span> €
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" align=\"right\">
                            <h4>Coût total</h4>
                        </td>
                        <td align=\"right\">
                            <span class=\"total-product-price\">{{ totalProducts +  totalProducts*0.02 }}</span> €
                        </td>
                    </tr>
                    
                    </tbody>
                </table>
            
                    
            </td>
            
        {#<div class=\"form-group col-xs-3\">
           {{ form_label(form.category) }}
           {{ form_widget(form.category, {\"attr\":{'class':'form-control'}} ) }}
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
            <ul id=\"email-fields-list\" class=\"collection-list\" data-prototype=\"{{ form_widget(form.productQuantity.vars.prototype) | e }}\">
            {% for productQuantity in form.productQuantity %}
                <li>
                    {{ form_errors(productQuantity) }}
                    <div class=\"col-xs-6 form-group \">
                        {{ form_label(productQuantity.product) }}
                        {{ form_widget(productQuantity.product, {\"attr\":{'class':'form-control'}} ) }}
                    </div>
                    <div class=\"col-xs-6 form-group\">
                        {{ form_label(productQuantity.quantity) }}
                        {{ form_widget(productQuantity.quantity, {\"attr\":{'class':'form-control'}} ) }}
                    </div>
                </li>
            {% endfor %}
            </ul>
            <a href=\"#\" class=\"button collection-add\">Ajouter un produit</a>
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
           {{ form_label(form.materiels) }}
           {{ form_widget(form.productionStep, {\"attr\":{'class':'form-control'}} ) }}
        </div>
        
    
        {{ form_rest(form) }}
        
        #}
        
        <input type=\"submit\" />
        </form>
    </div>
{% endblock %}", "MwebAdminBundle:production:view.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/production/view.html.twig");
    }
}
