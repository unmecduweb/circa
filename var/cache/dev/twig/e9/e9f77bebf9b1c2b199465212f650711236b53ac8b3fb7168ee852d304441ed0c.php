<?php

/* :Form:main-form-layout.html.twig */
class __TwigTemplate_f03f3616c601d4a458a23643b407c05d7be3da62e959dcedbe67888a8c2fad8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", ":Form:main-form-layout.html.twig", 3);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'time_widget' => array($this, 'block_time_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc9ca48f1e1df2ea621076f053e5f6431a0d2fe5893fac96103b2cfd3be18148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9ca48f1e1df2ea621076f053e5f6431a0d2fe5893fac96103b2cfd3be18148->enter($__internal_fc9ca48f1e1df2ea621076f053e5f6431a0d2fe5893fac96103b2cfd3be18148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:main-form-layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc9ca48f1e1df2ea621076f053e5f6431a0d2fe5893fac96103b2cfd3be18148->leave($__internal_fc9ca48f1e1df2ea621076f053e5f6431a0d2fe5893fac96103b2cfd3be18148_prof);

    }

    // line 7
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7fe724eb802cf8000164f6df792499b2a40d51beeb54e9933c48bd97f9cbb3ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe724eb802cf8000164f6df792499b2a40d51beeb54e9933c48bd97f9cbb3ac->enter($__internal_7fe724eb802cf8000164f6df792499b2a40d51beeb54e9933c48bd97f9cbb3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 8
        echo "    ";
        ob_start();
        // line 9
        echo "
        ";
        // line 11
        echo "        ";
        $context["field_class"] = "";
        // line 12
        echo "        ";
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "field_class", array(), "any", true, true)) {
            // line 13
            echo "            ";
            $context["field_class"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "field_class", array());
            // line 14
            echo "        ";
        }
        // line 15
        echo "
        ";
        // line 17
        echo "        ";
        $context["class"] = "";
        // line 18
        echo "        ";
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
            // line 19
            echo "            ";
            $context["class"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array());
            // line 20
            echo "        ";
        }
        // line 21
        echo "
        <div class=\"form-group\">
           ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
           
            ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7fe724eb802cf8000164f6df792499b2a40d51beeb54e9933c48bd97f9cbb3ac->leave($__internal_7fe724eb802cf8000164f6df792499b2a40d51beeb54e9933c48bd97f9cbb3ac_prof);

    }

    // line 32
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_8225685123d3634ce62319fe448d9e17718bfb919ebd7e9912b58c5ba2dba20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8225685123d3634ce62319fe448d9e17718bfb919ebd7e9912b58c5ba2dba20d->enter($__internal_8225685123d3634ce62319fe448d9e17718bfb919ebd7e9912b58c5ba2dba20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 33
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 34
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 36
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1, "class" => "form-cntrol col-xs-5"))) : (array()));
            // line 37
            echo "<div class=\"form-goup\" ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            echo "H
            ";
            // line 39
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
                echo "M";
            }
            // line 40
            echo "            ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
                echo "S";
            }
            // line 41
            echo "        </div>";
        }
        
        $__internal_8225685123d3634ce62319fe448d9e17718bfb919ebd7e9912b58c5ba2dba20d->leave($__internal_8225685123d3634ce62319fe448d9e17718bfb919ebd7e9912b58c5ba2dba20d_prof);

    }

    public function getTemplateName()
    {
        return ":Form:main-form-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 41,  123 => 40,  117 => 39,  113 => 38,  108 => 37,  106 => 36,  103 => 34,  101 => 33,  95 => 32,  83 => 25,  78 => 23,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  62 => 17,  59 => 15,  56 => 14,  53 => 13,  50 => 12,  47 => 11,  44 => 9,  41 => 8,  35 => 7,  11 => 3,);
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

{% extends \"form_div_layout.html.twig\" %} 

    
{# Affichage d'un groupe de champ ou d'un champ de son label et des erreurs#}
{% block form_row %}
    {% spaceless %}

        {# Class du champ #}
        {% set field_class='' %}
        {% if attr.field_class is defined %}
            {% set field_class = attr.field_class %}
        {% endif %}

        {# Class de la div qui entoure le champ #}
        {% set class='' %}
        {% if attr.class is defined %}
            {% set class = attr.class %}
        {% endif %}

        <div class=\"form-group\">
           {{ form_label(form) }}
           
            {{ form_widget(form, {\"attr\":{'class':'form-control'}} ) }}
          
        </div>
    {% endspaceless %}
{% endblock form_row %}


{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 , 'class' : 'form-cntrol col-xs-5'}} : {} -%}
        <div class=\"form-goup\" {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}H
            {% if with_minutes %}:{{ form_widget(form.minute, vars) }}M{% endif %}
            {% if with_seconds %}:{{ form_widget(form.second, vars) }}S{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}


", ":Form:main-form-layout.html.twig", "/home/fab/Documents/Pro/www/circa/app/Resources/views/Form/main-form-layout.html.twig");
    }
}
