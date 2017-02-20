<?php

/* LexikTranslationBundle:Translation:new.html.twig */
class __TwigTemplate_6471eada6da36a3b5f3cc811790b20da47d9a1fb54c09bd59e5c8970dc7569d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'lexik_content' => array($this, 'block_lexik_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["layout"]) ? $context["layout"] : $this->getContext($context, "layout")), "LexikTranslationBundle:Translation:new.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_add46cf3d08f277c19b111e5516f8dbcacae5cbd54564b7cef90db9d322beccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add46cf3d08f277c19b111e5516f8dbcacae5cbd54564b7cef90db9d322beccb->enter($__internal_add46cf3d08f277c19b111e5516f8dbcacae5cbd54564b7cef90db9d322beccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LexikTranslationBundle:Translation:new.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_add46cf3d08f277c19b111e5516f8dbcacae5cbd54564b7cef90db9d322beccb->leave($__internal_add46cf3d08f277c19b111e5516f8dbcacae5cbd54564b7cef90db9d322beccb_prof);

    }

    // line 3
    public function block_lexik_content($context, array $blocks = array())
    {
        $__internal_17b53dd6b40d565d5be1e2d9584bd52f163134713fa81aacfe425c72d1431498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b53dd6b40d565d5be1e2d9584bd52f163134713fa81aacfe425c72d1431498->enter($__internal_17b53dd6b40d565d5be1e2d9584bd52f163134713fa81aacfe425c72d1431498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_content"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.add_translation", array(), "LexikTranslationBundle"), "html", null, true);
        echo "</h3>
                <hr />
            </div>

            <div class=\"col-md-6\">

                ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lexik_translation_new"), "method" => "POST", "attr" => array("class" => "form form-vertical")));
        echo "

                <div class=\"form-group\">
                    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "key", array()), 'label');
        echo "
                    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "key", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    <span class=\"text-danger\">";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "key", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"form-group\">
                    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "domain", array()), 'label');
        echo "
                    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "domain", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    <span class=\"text-danger\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "domain", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"form-group\">
                    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "translations", array()), 'label');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "translations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 33
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["translation"], 'label');
            echo "
                        ";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["translation"], "content", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                        <span class=\"text-danger\">";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["translation"], "content", array()), 'errors');
            echo "</span>
                        ";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["translation"], "locale", array()), 'widget');
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </div>

                <div class=\"form-group\">
                    <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lexik_translation_grid");
        echo "\" class=\"btn btn-default\">
                        <span class=\"glyphicon glyphicon-arrow-left\"></span>
                        ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.back_to_list", array(), "LexikTranslationBundle"), "html", null, true);
        echo "
                    </a>

                    <div class=\"btn-group pull-right\">
                        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("id" => "trans-unit-submit", "name" => "trans-unit-submit", "class" => "btn btn-primary")));
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save_add", array()), 'widget', array("attr" => array("id" => "trans-unit-submit-2", "name" => "trans-unit-submit-2", "class" => "btn btn-primary")));
        echo "
                    </div>
                </div>

                ";
        // line 52
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            </div>
        </div>
    </div>
";
        
        $__internal_17b53dd6b40d565d5be1e2d9584bd52f163134713fa81aacfe425c72d1431498->leave($__internal_17b53dd6b40d565d5be1e2d9584bd52f163134713fa81aacfe425c72d1431498_prof);

    }

    public function getTemplateName()
    {
        return "LexikTranslationBundle:Translation:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 52,  142 => 48,  138 => 47,  131 => 43,  126 => 41,  121 => 38,  113 => 36,  109 => 35,  105 => 34,  100 => 33,  96 => 32,  89 => 28,  82 => 24,  78 => 23,  74 => 22,  67 => 18,  63 => 17,  59 => 16,  53 => 13,  44 => 7,  39 => 4,  33 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends layout %}

{% block lexik_content %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3>{{ 'translations.add_translation'|trans({}, 'LexikTranslationBundle') }}</h3>
                <hr />
            </div>

            <div class=\"col-md-6\">

                {{ form_start(form, {'action': path('lexik_translation_new'), 'method': 'POST', 'attr': {'class': 'form form-vertical'}}) }}

                <div class=\"form-group\">
                    {{ form_label(form.key) }}
                    {{ form_widget(form.key, { 'attr': {'class': 'form-control'} }) }}
                    <span class=\"text-danger\">{{ form_errors(form.key) }}</span>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.domain) }}
                    {{ form_widget(form.domain, { 'attr': {'class': 'form-control'} }) }}
                    <span class=\"text-danger\">{{ form_errors(form.domain) }}</span>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.translations) }}
                </div>

                <div class=\"form-group\">
                    {% for translation in form.translations %}
                        {{ form_label(translation) }}
                        {{ form_widget(translation.content, { 'attr': {'class': 'form-control'} }) }}
                        <span class=\"text-danger\">{{ form_errors(translation.content) }}</span>
                        {{ form_widget(translation.locale) }}
                    {% endfor %}
                </div>

                <div class=\"form-group\">
                    <a href=\"{{ path('lexik_translation_grid') }}\" class=\"btn btn-default\">
                        <span class=\"glyphicon glyphicon-arrow-left\"></span>
                        {{ 'translations.back_to_list'|trans({}, 'LexikTranslationBundle') }}
                    </a>

                    <div class=\"btn-group pull-right\">
                        {{ form_widget(form.save, { 'attr': {'id': 'trans-unit-submit', 'name': 'trans-unit-submit', 'class': 'btn btn-primary'} }) }}
                        {{ form_widget(form.save_add, { 'attr': {'id': 'trans-unit-submit-2', 'name': 'trans-unit-submit-2', 'class': 'btn btn-primary'} }) }}
                    </div>
                </div>

                {{ form_end(form) }}

            </div>
        </div>
    </div>
{% endblock %}
", "LexikTranslationBundle:Translation:new.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/lexik/translation-bundle/Resources/views/Translation/new.html.twig");
    }
}
