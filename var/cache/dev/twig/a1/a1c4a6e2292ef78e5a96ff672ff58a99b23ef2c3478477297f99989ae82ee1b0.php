<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_a1ae223d7a60424d9bf056d6888249748363ee1b7a38eb0f6c3edb0c0df82793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c789eef4cb30bacf46463440df6c2f7227235565ee1464e463b61e2eb854027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c789eef4cb30bacf46463440df6c2f7227235565ee1464e463b61e2eb854027->enter($__internal_2c789eef4cb30bacf46463440df6c2f7227235565ee1464e463b61e2eb854027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_2c789eef4cb30bacf46463440df6c2f7227235565ee1464e463b61e2eb854027->leave($__internal_2c789eef4cb30bacf46463440df6c2f7227235565ee1464e463b61e2eb854027_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_39a3d4be14488baf9c00626e069a94bc2c1d6ae4e0489172657328b8667f8460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a3d4be14488baf9c00626e069a94bc2c1d6ae4e0489172657328b8667f8460->enter($__internal_39a3d4be14488baf9c00626e069a94bc2c1d6ae4e0489172657328b8667f8460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_39a3d4be14488baf9c00626e069a94bc2c1d6ae4e0489172657328b8667f8460->leave($__internal_39a3d4be14488baf9c00626e069a94bc2c1d6ae4e0489172657328b8667f8460_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_6ca845eb14a3ccb827e27fd92504bb055c6662eb019c82e7372543647cb7c2be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca845eb14a3ccb827e27fd92504bb055c6662eb019c82e7372543647cb7c2be->enter($__internal_6ca845eb14a3ccb827e27fd92504bb055c6662eb019c82e7372543647cb7c2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6ca845eb14a3ccb827e27fd92504bb055c6662eb019c82e7372543647cb7c2be->leave($__internal_6ca845eb14a3ccb827e27fd92504bb055c6662eb019c82e7372543647cb7c2be_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_b630e667bab20fff89b13480e5b8595cdb735c353a577f6b3e76408338b1b241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b630e667bab20fff89b13480e5b8595cdb735c353a577f6b3e76408338b1b241->enter($__internal_b630e667bab20fff89b13480e5b8595cdb735c353a577f6b3e76408338b1b241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b630e667bab20fff89b13480e5b8595cdb735c353a577f6b3e76408338b1b241->leave($__internal_b630e667bab20fff89b13480e5b8595cdb735c353a577f6b3e76408338b1b241_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_dc896d0d65ffd8423d7c4c1e54f1e5cd8f4b79a4bcc1f8d9f8a020390bc82466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc896d0d65ffd8423d7c4c1e54f1e5cd8f4b79a4bcc1f8d9f8a020390bc82466->enter($__internal_dc896d0d65ffd8423d7c4c1e54f1e5cd8f4b79a4bcc1f8d9f8a020390bc82466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 30
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ((array_key_exists("download_uri", $context) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 35
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 37
        echo "        ";
        if ((((isset($context["show_download_link"]) ? $context["show_download_link"] : $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dc896d0d65ffd8423d7c4c1e54f1e5cd8f4b79a4bcc1f8d9f8a020390bc82466->leave($__internal_dc896d0d65ffd8423d7c4c1e54f1e5cd8f4b79a4bcc1f8d9f8a020390bc82466_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  170 => 40,  162 => 38,  159 => 37,  151 => 35,  149 => 34,  146 => 33,  140 => 31,  138 => 30,  134 => 29,  131 => 28,  129 => 27,  123 => 26,  116 => 23,  114 => 22,  108 => 21,  99 => 17,  91 => 15,  89 => 14,  86 => 13,  80 => 11,  78 => 10,  74 => 9,  71 => 8,  69 => 7,  63 => 6,  56 => 3,  54 => 2,  48 => 1,  41 => 26,  38 => 25,  36 => 21,  33 => 20,  31 => 6,  28 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
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
", "VichUploaderBundle:Form:fields.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/vich/uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
