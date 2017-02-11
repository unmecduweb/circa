<?php

/* LexikTranslationBundle:Translation:grid.html.twig */
class __TwigTemplate_80d645a0845c80d5baa5b1fdcd87e8b123d0a25176c8099a5b2d811e73494a28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'lexik_stylesheets' => array($this, 'block_lexik_stylesheets'),
            'lexik_title' => array($this, 'block_lexik_title'),
            'lexik_content' => array($this, 'block_lexik_content'),
            'lexik_toolbar' => array($this, 'block_lexik_toolbar'),
            'lexik_data_grid' => array($this, 'block_lexik_data_grid'),
            'lexik_javascript_footer' => array($this, 'block_lexik_javascript_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["layout"]) ? $context["layout"] : $this->getContext($context, "layout")), "LexikTranslationBundle:Translation:grid.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae06241424fc9d94fda343c0c2211c0e2495da5fcd21e58144ec0b41b1021b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae06241424fc9d94fda343c0c2211c0e2495da5fcd21e58144ec0b41b1021b18->enter($__internal_ae06241424fc9d94fda343c0c2211c0e2495da5fcd21e58144ec0b41b1021b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LexikTranslationBundle:Translation:grid.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae06241424fc9d94fda343c0c2211c0e2495da5fcd21e58144ec0b41b1021b18->leave($__internal_ae06241424fc9d94fda343c0c2211c0e2495da5fcd21e58144ec0b41b1021b18_prof);

    }

    // line 5
    public function block_lexik_stylesheets($context, array $blocks = array())
    {
        $__internal_aae4f91cbf033e6c7b1b5f739e317f1cd5b3318994a3424ec310ac3f68ab481d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae4f91cbf033e6c7b1b5f739e317f1cd5b3318994a3424ec310ac3f68ab481d->enter($__internal_aae4f91cbf033e6c7b1b5f739e317f1cd5b3318994a3424ec310ac3f68ab481d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("lexik_stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lexiktranslation/css/translation.css"), "html", null, true);
        echo "\">
";
        
        $__internal_aae4f91cbf033e6c7b1b5f739e317f1cd5b3318994a3424ec310ac3f68ab481d->leave($__internal_aae4f91cbf033e6c7b1b5f739e317f1cd5b3318994a3424ec310ac3f68ab481d_prof);

    }

    // line 10
    public function block_lexik_title($context, array $blocks = array())
    {
        $__internal_e60c1032db0f927a12ce496a5b5d1401bba7ccbf6b248893c57f9bd1afbcc4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60c1032db0f927a12ce496a5b5d1401bba7ccbf6b248893c57f9bd1afbcc4d2->enter($__internal_e60c1032db0f927a12ce496a5b5d1401bba7ccbf6b248893c57f9bd1afbcc4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.page_title", array(), "LexikTranslationBundle"), "html", null, true);
        
        $__internal_e60c1032db0f927a12ce496a5b5d1401bba7ccbf6b248893c57f9bd1afbcc4d2->leave($__internal_e60c1032db0f927a12ce496a5b5d1401bba7ccbf6b248893c57f9bd1afbcc4d2_prof);

    }

    // line 12
    public function block_lexik_content($context, array $blocks = array())
    {
        $__internal_c484e63a31ecd01b10c0ea3df15e90f1ddc1dc00a6d14493174c1e0edc7ba8e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c484e63a31ecd01b10c0ea3df15e90f1ddc1dc00a6d14493174c1e0edc7ba8e3->enter($__internal_c484e63a31ecd01b10c0ea3df15e90f1ddc1dc00a6d14493174c1e0edc7ba8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_content"));

        // line 13
        echo "    <div class=\"container\">
        ";
        // line 14
        $this->displayBlock('lexik_toolbar', $context, $blocks);
        // line 31
        echo "
        ";
        // line 32
        $this->displayBlock('lexik_data_grid', $context, $blocks);
        // line 35
        echo "    </div>
";
        
        $__internal_c484e63a31ecd01b10c0ea3df15e90f1ddc1dc00a6d14493174c1e0edc7ba8e3->leave($__internal_c484e63a31ecd01b10c0ea3df15e90f1ddc1dc00a6d14493174c1e0edc7ba8e3_prof);

    }

    // line 14
    public function block_lexik_toolbar($context, array $blocks = array())
    {
        $__internal_a4efb1f275625f78edc9162cbcc6b7642c21dbfa9006ea4c1476e877045189bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4efb1f275625f78edc9162cbcc6b7642c21dbfa9006ea4c1476e877045189bf->enter($__internal_a4efb1f275625f78edc9162cbcc6b7642c21dbfa9006ea4c1476e877045189bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_toolbar"));

        // line 15
        echo "            <div class=\"page-header\">
                <h1>
                    ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.page_title", array(), "LexikTranslationBundle"), "html", null, true);
        echo "
                    <div class=\"pull-right\">
                        <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lexik_translation_new");
        echo "\" role=\"button\" class=\"btn btn-success\">
                            <span class=\"glyphicon glyphicon-plus\"></span>
                            ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.new_translation", array(), "LexikTranslationBundle"), "html", null, true);
        echo "
                        </a>
                        <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lexik_translation_overview");
        echo "\" role=\"button\" class=\"btn btn-primary\">
                            <span class=\"glyphicon glyphicon-tasks\"></span>
                            ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("overview.page_title", array(), "LexikTranslationBundle"), "html", null, true);
        echo "
                        </a>
                    </div>
                </h1>
            </div>
        ";
        
        $__internal_a4efb1f275625f78edc9162cbcc6b7642c21dbfa9006ea4c1476e877045189bf->leave($__internal_a4efb1f275625f78edc9162cbcc6b7642c21dbfa9006ea4c1476e877045189bf_prof);

    }

    // line 32
    public function block_lexik_data_grid($context, array $blocks = array())
    {
        $__internal_bacac6b5cb0aa066a710776a1554f9569568cad916d8aa5c87fb8a0cfba809dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bacac6b5cb0aa066a710776a1554f9569568cad916d8aa5c87fb8a0cfba809dc->enter($__internal_bacac6b5cb0aa066a710776a1554f9569568cad916d8aa5c87fb8a0cfba809dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_data_grid"));

        // line 33
        echo "            ";
        $this->loadTemplate("LexikTranslationBundle:Translation:_ngGrid.html.twig", "LexikTranslationBundle:Translation:grid.html.twig", 33)->display($context);
        // line 34
        echo "        ";
        
        $__internal_bacac6b5cb0aa066a710776a1554f9569568cad916d8aa5c87fb8a0cfba809dc->leave($__internal_bacac6b5cb0aa066a710776a1554f9569568cad916d8aa5c87fb8a0cfba809dc_prof);

    }

    // line 38
    public function block_lexik_javascript_footer($context, array $blocks = array())
    {
        $__internal_c05e3c0630ec5347386e705a80dd9415e7043d428acb415856d4e6f8c17f99d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05e3c0630ec5347386e705a80dd9415e7043d428acb415856d4e6f8c17f99d3->enter($__internal_c05e3c0630ec5347386e705a80dd9415e7043d428acb415856d4e6f8c17f99d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_javascript_footer"));

        // line 39
        echo "    ";
        $this->displayParentBlock("lexik_javascript_footer", $context, $blocks);
        echo "
    <script>
        var translationCfg = {
            locales: ";
        // line 42
        echo twig_jsonencode_filter((isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")));
        echo ",
            inputType: '";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["inputType"]) ? $context["inputType"] : $this->getContext($context, "inputType")), "html", null, true);
        echo "',
            autoCacheClean: ";
        // line 44
        echo (((isset($context["autoCacheClean"]) ? $context["autoCacheClean"] : $this->getContext($context, "autoCacheClean"))) ? ("true") : ("false"));
        echo ",
            profilerTokens: ";
        // line 45
        echo (( !(null === (isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")))) ? (twig_jsonencode_filter((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")))) : ("null"));
        echo ",
            toggleSimilar: '";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["toggleSimilar"]) ? $context["toggleSimilar"] : $this->getContext($context, "toggleSimilar")), "html", null, true);
        echo "',
            url: {
                list: '";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lexik_translation_list");
        echo "',
                listByToken: '";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lexik_translation_profiler", array("token" => "-token-"));
        echo "',
                update: '";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lexik_translation_update", array("id" => "-id-"));
        echo "',
                delete: '";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lexik_translation_delete", array("id" => "-id-"));
        echo "',
                deleteLocale: '";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lexik_translation_delete_locale", array("id" => "-id-", "locale" => "-locale-")), "html", null, true);
        echo "',
                invalidateCache: '";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lexik_translation_invalidate_cache");
        echo "'
            },
            label: {
                hideCol: '";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.show_hide_columns", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                toggleAllCol: '";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.toggle_all_columns", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                invalidateCache: '";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.invalidate_cache", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                allTranslations: '";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.all_translations", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                profiler: '";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.profiler", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                dataSource: '";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.data_source", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                latestProfiles: '";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.latest_profiles", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                profile: '";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.profile", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                saveRow: '";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.save_row", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                domain: '";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.domain", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                key: '";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.key", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                save: '";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.save", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                updateSuccess: '";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.successfully_updated", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                updateFail: '";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.update_failed", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                deleteSuccess: '";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.successfully_deleted", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                deleteFail: '";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.delete_failed", array(), "LexikTranslationBundle"), "html", null, true);
        echo "',
                noTranslations: '";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("translations.no_translations", array(), "LexikTranslationBundle"), "html", null, true);
        echo "'
            }
        };
    </script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lexiktranslation/js/translation.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c05e3c0630ec5347386e705a80dd9415e7043d428acb415856d4e6f8c17f99d3->leave($__internal_c05e3c0630ec5347386e705a80dd9415e7043d428acb415856d4e6f8c17f99d3_prof);

    }

    public function getTemplateName()
    {
        return "LexikTranslationBundle:Translation:grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 76,  277 => 72,  273 => 71,  269 => 70,  265 => 69,  261 => 68,  257 => 67,  253 => 66,  249 => 65,  245 => 64,  241 => 63,  237 => 62,  233 => 61,  229 => 60,  225 => 59,  221 => 58,  217 => 57,  213 => 56,  207 => 53,  203 => 52,  199 => 51,  195 => 50,  191 => 49,  187 => 48,  182 => 46,  178 => 45,  174 => 44,  170 => 43,  166 => 42,  159 => 39,  153 => 38,  146 => 34,  143 => 33,  137 => 32,  124 => 25,  119 => 23,  114 => 21,  109 => 19,  104 => 17,  100 => 15,  94 => 14,  86 => 35,  84 => 32,  81 => 31,  79 => 14,  76 => 13,  70 => 12,  58 => 10,  49 => 7,  44 => 6,  38 => 5,  23 => 1,);
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

{% trans_default_domain 'LexikTranslationBundle' %}

{% block lexik_stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/lexiktranslation/css/translation.css') }}\">
{% endblock %}

{% block lexik_title %}{{ 'translations.page_title'|trans({}, 'LexikTranslationBundle') }}{% endblock %}

{% block lexik_content %}
    <div class=\"container\">
        {% block lexik_toolbar %}
            <div class=\"page-header\">
                <h1>
                    {{ 'translations.page_title'|trans({}, 'LexikTranslationBundle') }}
                    <div class=\"pull-right\">
                        <a href=\"{{ path('lexik_translation_new') }}\" role=\"button\" class=\"btn btn-success\">
                            <span class=\"glyphicon glyphicon-plus\"></span>
                            {{ 'translations.new_translation'|trans({}, 'LexikTranslationBundle') }}
                        </a>
                        <a href=\"{{ path('lexik_translation_overview') }}\" role=\"button\" class=\"btn btn-primary\">
                            <span class=\"glyphicon glyphicon-tasks\"></span>
                            {{ 'overview.page_title'|trans({}, 'LexikTranslationBundle') }}
                        </a>
                    </div>
                </h1>
            </div>
        {% endblock lexik_toolbar %}

        {% block lexik_data_grid %}
            {% include 'LexikTranslationBundle:Translation:_ngGrid.html.twig' %}
        {% endblock lexik_data_grid %}
    </div>
{% endblock %}

{% block lexik_javascript_footer %}
    {{ parent() }}
    <script>
        var translationCfg = {
            locales: {{ locales | json_encode | raw }},
            inputType: '{{ inputType }}',
            autoCacheClean: {{ autoCacheClean ? 'true' : 'false' }},
            profilerTokens: {{ tokens is not null ? (tokens | json_encode | raw) : 'null' }},
            toggleSimilar: '{{ toggleSimilar }}',
            url: {
                list: '{{ path('lexik_translation_list') }}',
                listByToken: '{{ path('lexik_translation_profiler', {'token': '-token-'}) }}',
                update: '{{ path('lexik_translation_update', {'id': '-id-'}) }}',
                delete: '{{ path('lexik_translation_delete', {'id': '-id-'}) }}',
                deleteLocale: '{{ path('lexik_translation_delete_locale', {'id': '-id-', 'locale': '-locale-'}) }}',
                invalidateCache: '{{ path('lexik_translation_invalidate_cache') }}'
            },
            label: {
                hideCol: '{{ 'translations.show_hide_columns'|trans }}',
                toggleAllCol: '{{ 'translations.toggle_all_columns'|trans }}',
                invalidateCache: '{{ 'translations.invalidate_cache'|trans }}',
                allTranslations: '{{ 'translations.all_translations'|trans }}',
                profiler: '{{ 'translations.profiler'|trans }}',
                dataSource: '{{ 'translations.data_source'|trans }}',
                latestProfiles: '{{ 'translations.latest_profiles'|trans }}',
                profile: '{{ 'translations.profile'|trans }}',
                saveRow: '{{ 'translations.save_row'|trans }}',
                domain: '{{ 'translations.domain'|trans }}',
                key: '{{ 'translations.key'|trans }}',
                save: '{{ 'translations.save'|trans }}',
                updateSuccess: '{{ 'translations.successfully_updated'|trans }}',
                updateFail: '{{ 'translations.update_failed'|trans }}',
                deleteSuccess: '{{ 'translations.successfully_deleted'|trans }}',
                deleteFail: '{{ 'translations.delete_failed'|trans }}',
                noTranslations: '{{ 'translations.no_translations'|trans }}'
            }
        };
    </script>
    <script src=\"{{ asset('bundles/lexiktranslation/js/translation.js') }}\"></script>
{% endblock %}
", "LexikTranslationBundle:Translation:grid.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/lexik/translation-bundle/Resources/views/Translation/grid.html.twig");
    }
}
