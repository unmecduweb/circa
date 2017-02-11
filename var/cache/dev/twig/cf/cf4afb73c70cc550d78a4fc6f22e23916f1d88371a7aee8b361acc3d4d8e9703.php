<?php

/* LexikTranslationBundle:Translation:overview.html.twig */
class __TwigTemplate_8b5fb418de4a44932d2d9182681ab8bcbf76efce06ea85bc35179858a8e2b2d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'lexik_stylesheets' => array($this, 'block_lexik_stylesheets'),
            'lexik_title' => array($this, 'block_lexik_title'),
            'lexik_content' => array($this, 'block_lexik_content'),
            'lexik_toolbar' => array($this, 'block_lexik_toolbar'),
            'lexik_javascript_footer' => array($this, 'block_lexik_javascript_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["layout"]) ? $context["layout"] : $this->getContext($context, "layout")), "LexikTranslationBundle:Translation:overview.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f21221d1184290f6dd393c2d9d1a7602e43c586e1743a93b8fc14aad84f0e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f21221d1184290f6dd393c2d9d1a7602e43c586e1743a93b8fc14aad84f0e91->enter($__internal_4f21221d1184290f6dd393c2d9d1a7602e43c586e1743a93b8fc14aad84f0e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LexikTranslationBundle:Translation:overview.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f21221d1184290f6dd393c2d9d1a7602e43c586e1743a93b8fc14aad84f0e91->leave($__internal_4f21221d1184290f6dd393c2d9d1a7602e43c586e1743a93b8fc14aad84f0e91_prof);

    }

    // line 5
    public function block_lexik_stylesheets($context, array $blocks = array())
    {
        $__internal_95366bcbe904d4e2576f200fe3699ce873f884bce1d451fb85ae7c3f7542032f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95366bcbe904d4e2576f200fe3699ce873f884bce1d451fb85ae7c3f7542032f->enter($__internal_95366bcbe904d4e2576f200fe3699ce873f884bce1d451fb85ae7c3f7542032f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("lexik_stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lexiktranslation/css/translation.css"), "html", null, true);
        echo "\">
";
        
        $__internal_95366bcbe904d4e2576f200fe3699ce873f884bce1d451fb85ae7c3f7542032f->leave($__internal_95366bcbe904d4e2576f200fe3699ce873f884bce1d451fb85ae7c3f7542032f_prof);

    }

    // line 10
    public function block_lexik_title($context, array $blocks = array())
    {
        $__internal_dbafc2b58e5dd1cd80c4a46109368c0b2d73928b6e8188b79bc7d1a8423c8fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbafc2b58e5dd1cd80c4a46109368c0b2d73928b6e8188b79bc7d1a8423c8fd8->enter($__internal_dbafc2b58e5dd1cd80c4a46109368c0b2d73928b6e8188b79bc7d1a8423c8fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("overview.page_title", array(), "LexikTranslationBundle"), "html", null, true);
        
        $__internal_dbafc2b58e5dd1cd80c4a46109368c0b2d73928b6e8188b79bc7d1a8423c8fd8->leave($__internal_dbafc2b58e5dd1cd80c4a46109368c0b2d73928b6e8188b79bc7d1a8423c8fd8_prof);

    }

    // line 12
    public function block_lexik_content($context, array $blocks = array())
    {
        $__internal_7f7c0acde0f63986bb50f78015047a6514f021e9f361493f40f09de09973161c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7c0acde0f63986bb50f78015047a6514f021e9f361493f40f09de09973161c->enter($__internal_7f7c0acde0f63986bb50f78015047a6514f021e9f361493f40f09de09973161c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_content"));

        // line 13
        echo "    <div class=\"container\">
        ";
        // line 14
        $this->displayBlock('lexik_toolbar', $context, $blocks);
        // line 27
        echo "
        <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("overview.msg_latest_translation", array("%date%" => twig_date_format_filter($this->env, (isset($context["latestTrans"]) ? $context["latestTrans"] : $this->getContext($context, "latestTrans")), "Y-m-d H:i")), "LexikTranslationBundle"), "html", null, true);
        echo "</p>

        <div id=\"translation-overview\">
            <div class=\"row margin-row\">
                <div class=\"col-md-12\">
                    ";
        // line 33
        if ( !twig_length_filter($this->env, (isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")))) {
            // line 34
            echo "                        <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("overview.no_stats", array(), "LexikTranslationBundle"), "html", null, true);
            echo "</div>
                    ";
        } else {
            // line 36
            echo "                        <table class=\"table table-bordered table-striped table-overview\">
                            <thead>
                                <tr>
                                    <th class=\"sortable col-0\">
                                        ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("overview.domain", array(), "LexikTranslationBundle"), "html", null, true);
            echo "
                                    </th>
                                    ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 43
                echo "                                        <th class=\"sortable col-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                                            ";
                // line 44
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["locale"]), "html", null, true);
                echo "
                                        </th>
                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                                </tr>
                            </thead>
                            <tbody>
                            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["domains"]) ? $context["domains"] : $this->getContext($context, "domains")));
            foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                // line 51
                echo "                                <tr columns=\"columns\">
                                    <td>";
                // line 52
                echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
                echo "</td>
                                    ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")));
                foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                    // line 54
                    echo "                                        <td class=\"text-center\">
                                            <span class=\"text ";
                    // line 55
                    echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), $context["domain"], array(), "array"), $context["locale"], array(), "array"), "completed", array(), "array") == 100)) ? ("text-success") : ("text-danger"));
                    echo "\">
                                                ";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), $context["domain"], array(), "array"), $context["locale"], array(), "array"), "translated", array(), "array"), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), $context["domain"], array(), "array", false, true), $context["locale"], array(), "array", false, true), "keys", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), $context["domain"], array(), "array", false, true), $context["locale"], array(), "array", false, true), "keys", array(), "array"), 0)) : (0)), "html", null, true);
                    echo "
                                            </span>
                                            <div class=\"progress\">
                                                <div class=\"progress-bar ";
                    // line 59
                    echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), $context["domain"], array(), "array"), $context["locale"], array(), "array"), "completed", array(), "array") == 100)) ? ("progress-bar-success") : ("progress-bar-danger"));
                    echo "\"
                                                     role=\"progressbar\"
                                                     aria-valuenow=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), $context["domain"], array(), "array"), $context["locale"], array(), "array"), "completed", array(), "array"), "html", null, true);
                    echo "\"
                                                     aria-valuemin=\"0\"
                                                     aria-valuemax=\"100\"
                                                     style=\"width: ";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), $context["domain"], array(), "array"), $context["locale"], array(), "array"), "completed", array(), "array"), "html", null, true);
                    echo "%\">
                                                </div>
                                            </div>
                                        </td>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                            </tbody>
                        </table>
                    ";
        }
        // line 74
        echo "                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_7f7c0acde0f63986bb50f78015047a6514f021e9f361493f40f09de09973161c->leave($__internal_7f7c0acde0f63986bb50f78015047a6514f021e9f361493f40f09de09973161c_prof);

    }

    // line 14
    public function block_lexik_toolbar($context, array $blocks = array())
    {
        $__internal_916c50e5ca4d1d525fa9e1afe01756fb92a43fd3853792069c63e26f307813b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916c50e5ca4d1d525fa9e1afe01756fb92a43fd3853792069c63e26f307813b3->enter($__internal_916c50e5ca4d1d525fa9e1afe01756fb92a43fd3853792069c63e26f307813b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_toolbar"));

        // line 15
        echo "            <div class=\"page-header\">
                <h1>
                    ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("overview.page_title", array(), "LexikTranslationBundle"), "html", null, true);
        echo "
                    <div class=\"pull-right\">
                        <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lexik_translation_grid");
        echo "\" role=\"button\" class=\"btn btn-primary\">
                            <span class=\"glyphicon glyphicon-th\"></span>
                            ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("overview.show_grid", array(), "LexikTranslationBundle"), "html", null, true);
        echo "
                        </a>
                    </div>
                </h1>
            </div>
        ";
        
        $__internal_916c50e5ca4d1d525fa9e1afe01756fb92a43fd3853792069c63e26f307813b3->leave($__internal_916c50e5ca4d1d525fa9e1afe01756fb92a43fd3853792069c63e26f307813b3_prof);

    }

    // line 81
    public function block_lexik_javascript_footer($context, array $blocks = array())
    {
        $__internal_853f58b41e4c924567adc71346204b41e93699c1f7f7cd819b8a066dbd4f61fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_853f58b41e4c924567adc71346204b41e93699c1f7f7cd819b8a066dbd4f61fa->enter($__internal_853f58b41e4c924567adc71346204b41e93699c1f7f7cd819b8a066dbd4f61fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_javascript_footer"));

        // line 82
        echo "    ";
        $this->displayParentBlock("lexik_javascript_footer", $context, $blocks);
        echo "
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lexiktranslation/js/translation.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_853f58b41e4c924567adc71346204b41e93699c1f7f7cd819b8a066dbd4f61fa->leave($__internal_853f58b41e4c924567adc71346204b41e93699c1f7f7cd819b8a066dbd4f61fa_prof);

    }

    public function getTemplateName()
    {
        return "LexikTranslationBundle:Translation:overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 83,  269 => 82,  263 => 81,  250 => 21,  245 => 19,  240 => 17,  236 => 15,  230 => 14,  218 => 74,  213 => 71,  206 => 69,  195 => 64,  189 => 61,  184 => 59,  176 => 56,  172 => 55,  169 => 54,  165 => 53,  161 => 52,  158 => 51,  154 => 50,  149 => 47,  132 => 44,  127 => 43,  110 => 42,  105 => 40,  99 => 36,  93 => 34,  91 => 33,  83 => 28,  80 => 27,  78 => 14,  75 => 13,  69 => 12,  57 => 10,  48 => 7,  43 => 6,  37 => 5,  22 => 1,);
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

{% block lexik_title %}{{ 'overview.page_title'|trans }}{% endblock %}

{% block lexik_content %}
    <div class=\"container\">
        {% block lexik_toolbar %}
            <div class=\"page-header\">
                <h1>
                    {{ 'overview.page_title'|trans }}
                    <div class=\"pull-right\">
                        <a href=\"{{ path('lexik_translation_grid') }}\" role=\"button\" class=\"btn btn-primary\">
                            <span class=\"glyphicon glyphicon-th\"></span>
                            {{ 'overview.show_grid'|trans }}
                        </a>
                    </div>
                </h1>
            </div>
        {% endblock lexik_toolbar %}

        <p>{{ 'overview.msg_latest_translation'|trans({'%date%': latestTrans|date('Y-m-d H:i')}) }}</p>

        <div id=\"translation-overview\">
            <div class=\"row margin-row\">
                <div class=\"col-md-12\">
                    {% if  not stats|length %}
                        <div class=\"alert alert-info\">{{ 'overview.no_stats'|trans }}</div>
                    {% else %}
                        <table class=\"table table-bordered table-striped table-overview\">
                            <thead>
                                <tr>
                                    <th class=\"sortable col-0\">
                                        {{ 'overview.domain'|trans }}
                                    </th>
                                    {% for locale in locales %}
                                        <th class=\"sortable col-{{ loop.index }}\">
                                            {{ locale|upper }}
                                        </th>
                                    {% endfor %}
                                </tr>
                            </thead>
                            <tbody>
                            {% for domain in domains %}
                                <tr columns=\"columns\">
                                    <td>{{ domain }}</td>
                                    {% for locale in locales %}
                                        <td class=\"text-center\">
                                            <span class=\"text {{ stats[domain][locale]['completed'] == 100 ? 'text-success' : 'text-danger' }}\">
                                                {{ stats[domain][locale]['translated'] }} / {{ stats[domain][locale]['keys']|default(0) }}
                                            </span>
                                            <div class=\"progress\">
                                                <div class=\"progress-bar {{ stats[domain][locale]['completed'] == 100 ? 'progress-bar-success' : 'progress-bar-danger' }}\"
                                                     role=\"progressbar\"
                                                     aria-valuenow=\"{{ stats[domain][locale]['completed'] }}\"
                                                     aria-valuemin=\"0\"
                                                     aria-valuemax=\"100\"
                                                     style=\"width: {{ stats[domain][locale]['completed'] }}%\">
                                                </div>
                                            </div>
                                        </td>
                                    {% endfor %}
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    {% endif %}
                </div>
            </div>
        </div>

    </div>
{% endblock %}

{% block lexik_javascript_footer %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/lexiktranslation/js/translation.js') }}\"></script>
{% endblock %}
", "LexikTranslationBundle:Translation:overview.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/lexik/translation-bundle/Resources/views/Translation/overview.html.twig");
    }
}
