<?php

/* MwebAdminBundle:Form:main-form-layout.html.twig */
class __TwigTemplate_9c0c65dcf37fe616f9ba66f7025c2e268a114f82894483226eea6b0abf0532b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "MwebAdminBundle:Form:main-form-layout.html.twig", 3);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'time_widget' => array($this, 'block_time_widget'),
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bff5a9c902fa4d167e13d5c97dc4debee06350ff76ab1b31057233fa252b74fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff5a9c902fa4d167e13d5c97dc4debee06350ff76ab1b31057233fa252b74fd->enter($__internal_bff5a9c902fa4d167e13d5c97dc4debee06350ff76ab1b31057233fa252b74fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Form:main-form-layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bff5a9c902fa4d167e13d5c97dc4debee06350ff76ab1b31057233fa252b74fd->leave($__internal_bff5a9c902fa4d167e13d5c97dc4debee06350ff76ab1b31057233fa252b74fd_prof);

    }

    // line 7
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c20adeefd9b1b3afa4507539d26d720887ddae67466182f0ba5c42f699c5c700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20adeefd9b1b3afa4507539d26d720887ddae67466182f0ba5c42f699c5c700->enter($__internal_c20adeefd9b1b3afa4507539d26d720887ddae67466182f0ba5c42f699c5c700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")) . " form-control"))));
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c20adeefd9b1b3afa4507539d26d720887ddae67466182f0ba5c42f699c5c700->leave($__internal_c20adeefd9b1b3afa4507539d26d720887ddae67466182f0ba5c42f699c5c700_prof);

    }

    // line 30
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_25b149141ca7c1b30132a59a5646baae81b988a584f1a292c5208895f36f6406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b149141ca7c1b30132a59a5646baae81b988a584f1a292c5208895f36f6406->enter($__internal_25b149141ca7c1b30132a59a5646baae81b988a584f1a292c5208895f36f6406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 31
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 32
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 34
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1, "class" => "form-cntrol col-xs-5"))) : (array()));
            // line 35
            echo "<div class=\"form-goup\" ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            echo "H
            ";
            // line 37
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
                echo "M";
            }
            // line 38
            echo "            ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
                echo "S";
            }
            // line 39
            echo "        </div>";
        }
        
        $__internal_25b149141ca7c1b30132a59a5646baae81b988a584f1a292c5208895f36f6406->leave($__internal_25b149141ca7c1b30132a59a5646baae81b988a584f1a292c5208895f36f6406_prof);

    }

    // line 43
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_2bc1426a4a7220e338be9b049d21b173ef678ff7b76e1ef3aeda3a48212c3871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc1426a4a7220e338be9b049d21b173ef678ff7b76e1ef3aeda3a48212c3871->enter($__internal_2bc1426a4a7220e338be9b049d21b173ef678ff7b76e1ef3aeda3a48212c3871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 44
        $context["force_error"] = true;
        // line 45
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2bc1426a4a7220e338be9b049d21b173ef678ff7b76e1ef3aeda3a48212c3871->leave($__internal_2bc1426a4a7220e338be9b049d21b173ef678ff7b76e1ef3aeda3a48212c3871_prof);

    }

    // line 48
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_99d1416d198d10c236551e091c64920dde8367f2e32f7ec83e84ea3154419005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d1416d198d10c236551e091c64920dde8367f2e32f7ec83e84ea3154419005->enter($__internal_99d1416d198d10c236551e091c64920dde8367f2e32f7ec83e84ea3154419005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 49
        echo "    ";
        ob_start();
        // line 50
        echo "        <div class=\"vich-file\">
            ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            ";
        // line 52
        if ((array_key_exists("download_uri", $context) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 53
            echo "                <img width=\"200\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\" alt=\"\"  class=\"mweb-vich-illu\" />
            ";
        }
        // line 55
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 56
            echo "                <br />
                ";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'widget');
            echo "
                <label for=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edit.deleteImg", array(), "mweb"), "html", null, true);
            echo "</label>

            ";
        }
        // line 61
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_99d1416d198d10c236551e091c64920dde8367f2e32f7ec83e84ea3154419005->leave($__internal_99d1416d198d10c236551e091c64920dde8367f2e32f7ec83e84ea3154419005_prof);

    }

    // line 65
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_97f2d563cb2cd4a1e6c9663b97039517136919d4879d145573982dbda80d528f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f2d563cb2cd4a1e6c9663b97039517136919d4879d145573982dbda80d528f->enter($__internal_97f2d563cb2cd4a1e6c9663b97039517136919d4879d145573982dbda80d528f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 66
        $context["force_error"] = true;
        // line 67
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_97f2d563cb2cd4a1e6c9663b97039517136919d4879d145573982dbda80d528f->leave($__internal_97f2d563cb2cd4a1e6c9663b97039517136919d4879d145573982dbda80d528f_prof);

    }

    // line 70
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_4ddd9982cc7eec28291ea80a3f7715fc523ff134f7fa97542e6f8761177f5e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ddd9982cc7eec28291ea80a3f7715fc523ff134f7fa97542e6f8761177f5e29->enter($__internal_4ddd9982cc7eec28291ea80a3f7715fc523ff134f7fa97542e6f8761177f5e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 71
        echo "    ";
        ob_start();
        // line 72
        echo "        <div class=\"vich-image\">
            ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            ";
        // line 74
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 75
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
            ";
        }
        // line 77
        echo "
            ";
        // line 78
        if ((array_key_exists("download_uri", $context) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 79
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
            ";
        }
        // line 81
        echo "            ";
        if ((((isset($context["show_download_link"]) ? $context["show_download_link"] : $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 82
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 84
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4ddd9982cc7eec28291ea80a3f7715fc523ff134f7fa97542e6f8761177f5e29->leave($__internal_4ddd9982cc7eec28291ea80a3f7715fc523ff134f7fa97542e6f8761177f5e29_prof);

    }

    // line 89
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_278fd76a49bdcbb7d45cf7efe298406a26d03987a227d22bbbebf3d9da3e5af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278fd76a49bdcbb7d45cf7efe298406a26d03987a227d22bbbebf3d9da3e5af1->enter($__internal_278fd76a49bdcbb7d45cf7efe298406a26d03987a227d22bbbebf3d9da3e5af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 90
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 91
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 92
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 94
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 95
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 97
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 98
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 99
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 100
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 101
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 104
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 107
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>
        ";
            // line 108
            $context["transHelp"] = ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) . "Help");
            // line 109
            echo "
        ";
            // line 110
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["transHelp"]) ? $context["transHelp"] : $this->getContext($context, "transHelp")), array(), "mweb") != (isset($context["transHelp"]) ? $context["transHelp"] : $this->getContext($context, "transHelp")))) {
                // line 111
                echo "            <span class=\"glyphicon glyphicon-info-sign info-tooltip\" data-toggle=\"tooltip\" data-position=\"bottom\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["transHelp"]) ? $context["transHelp"] : $this->getContext($context, "transHelp")), array(), "mweb"), "html", null, true);
                echo "\"></span>
        ";
            }
        }
        
        $__internal_278fd76a49bdcbb7d45cf7efe298406a26d03987a227d22bbbebf3d9da3e5af1->leave($__internal_278fd76a49bdcbb7d45cf7efe298406a26d03987a227d22bbbebf3d9da3e5af1_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Form:main-form-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 111,  333 => 110,  330 => 109,  328 => 108,  310 => 107,  306 => 104,  303 => 101,  302 => 100,  301 => 99,  299 => 98,  297 => 97,  294 => 95,  292 => 94,  289 => 92,  287 => 91,  285 => 90,  279 => 89,  270 => 84,  262 => 82,  259 => 81,  251 => 79,  249 => 78,  246 => 77,  240 => 75,  238 => 74,  234 => 73,  231 => 72,  228 => 71,  222 => 70,  215 => 67,  213 => 66,  207 => 65,  198 => 61,  190 => 58,  186 => 57,  183 => 56,  180 => 55,  174 => 53,  172 => 52,  168 => 51,  165 => 50,  162 => 49,  156 => 48,  149 => 45,  147 => 44,  141 => 43,  133 => 39,  126 => 38,  120 => 37,  116 => 36,  111 => 35,  109 => 34,  106 => 32,  104 => 31,  98 => 30,  87 => 24,  83 => 23,  79 => 21,  76 => 20,  73 => 19,  70 => 18,  67 => 17,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 9,  46 => 8,  40 => 7,  11 => 3,);
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
            {{ form_widget(form, {\"attr\":{'class': class ~ ' form-control'}} ) }}
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

{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
    {% spaceless %}
        <div class=\"vich-file\">
            {{ form_widget(form.file) }}
            {% if download_uri is defined and download_uri %}
                <img width=\"200\" src=\"{{ asset(download_uri) }}\" alt=\"\"  class=\"mweb-vich-illu\" />
            {% endif %}
            {% if form.delete is defined %}
                <br />
                {{ form_widget(form.delete) }}
                <label for=\"{{ form.delete.vars.id }}\">{{ \"admin.edit.deleteImg\"|trans({}, 'mweb') }}</label>

            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
    {% spaceless %}
        <div class=\"vich-image\">
            {{ form_widget(form.file) }}
            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}

            {% if download_uri is defined and download_uri %}
                <a href=\"{{ download_uri }}\"><img src=\"{{ download_uri }}\" alt=\"\" /></a>
            {% endif %}
            {% if show_download_link and download_uri is defined and download_uri%}
                <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}


{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
        {% set transHelp = label~\"Help\" %}

        {%  if transHelp|trans({}, 'mweb') != transHelp %}
            <span class=\"glyphicon glyphicon-info-sign info-tooltip\" data-toggle=\"tooltip\" data-position=\"bottom\" title=\"{{ transHelp|trans({}, 'mweb') }}\"></span>
        {% endif %}


    {%- endif -%}
{%- endblock form_label -%}
", "MwebAdminBundle:Form:main-form-layout.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Form/main-form-layout.html.twig");
    }
}
