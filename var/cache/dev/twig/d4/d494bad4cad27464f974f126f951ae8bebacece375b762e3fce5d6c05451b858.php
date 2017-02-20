<?php

/* LexikTranslationBundle::layout.html.twig */
class __TwigTemplate_65663c3d4883ade87677317a74b541dcf997fca84f96e3a2fb6e3e6ce61e545c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'lexik_title' => array($this, 'block_lexik_title'),
            'lexik_stylesheets' => array($this, 'block_lexik_stylesheets'),
            'lexik_flash_message' => array($this, 'block_lexik_flash_message'),
            'lexik_content' => array($this, 'block_lexik_content'),
            'lexik_javascript_footer' => array($this, 'block_lexik_javascript_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7733e22cfc51918a3a8f5badce03a33beb5674cd12cb91300e7a2d672a012f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7733e22cfc51918a3a8f5badce03a33beb5674cd12cb91300e7a2d672a012f8->enter($__internal_a7733e22cfc51918a3a8f5badce03a33beb5674cd12cb91300e7a2d672a012f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LexikTranslationBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('lexik_title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('lexik_stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('lexik_flash_message', $context, $blocks);
        // line 28
        echo "
        ";
        // line 29
        $this->displayBlock('lexik_content', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('lexik_javascript_footer', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
        
        $__internal_a7733e22cfc51918a3a8f5badce03a33beb5674cd12cb91300e7a2d672a012f8->leave($__internal_a7733e22cfc51918a3a8f5badce03a33beb5674cd12cb91300e7a2d672a012f8_prof);

    }

    // line 5
    public function block_lexik_title($context, array $blocks = array())
    {
        $__internal_7c242898450108da71f9b614f4c7a7c22478590beceeb7fd11d2b70d5930b780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c242898450108da71f9b614f4c7a7c22478590beceeb7fd11d2b70d5930b780->enter($__internal_7c242898450108da71f9b614f4c7a7c22478590beceeb7fd11d2b70d5930b780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_title"));

        
        $__internal_7c242898450108da71f9b614f4c7a7c22478590beceeb7fd11d2b70d5930b780->leave($__internal_7c242898450108da71f9b614f4c7a7c22478590beceeb7fd11d2b70d5930b780_prof);

    }

    // line 6
    public function block_lexik_stylesheets($context, array $blocks = array())
    {
        $__internal_5af98629caaab1a71dcc20f24e3e0b1aa8b61fce72a61b3a33a56c5257b5ad39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af98629caaab1a71dcc20f24e3e0b1aa8b61fce72a61b3a33a56c5257b5ad39->enter($__internal_5af98629caaab1a71dcc20f24e3e0b1aa8b61fce72a61b3a33a56c5257b5ad39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lexiktranslation/ng-table/ng-table.min.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_5af98629caaab1a71dcc20f24e3e0b1aa8b61fce72a61b3a33a56c5257b5ad39->leave($__internal_5af98629caaab1a71dcc20f24e3e0b1aa8b61fce72a61b3a33a56c5257b5ad39_prof);

    }

    // line 12
    public function block_lexik_flash_message($context, array $blocks = array())
    {
        $__internal_9f8451291656970902554ed4d6b85186498f8d1f52da392f1ff9dc0e3144338f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8451291656970902554ed4d6b85186498f8d1f52da392f1ff9dc0e3144338f->enter($__internal_9f8451291656970902554ed4d6b85186498f8d1f52da392f1ff9dc0e3144338f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_flash_message"));

        // line 13
        echo "            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 16
        $context["flashes"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method");
        // line 17
        echo "                        ";
        if ((twig_length_filter($this->env, (isset($context["flashes"]) ? $context["flashes"] : $this->getContext($context, "flashes"))) > 0)) {
            // line 18
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashes"]) ? $context["flashes"] : $this->getContext($context, "flashes")));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 19
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 20
                    echo "                                    <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                        ";
        }
        // line 24
        echo "                    </div>
                </div>
            </div>
        ";
        
        $__internal_9f8451291656970902554ed4d6b85186498f8d1f52da392f1ff9dc0e3144338f->leave($__internal_9f8451291656970902554ed4d6b85186498f8d1f52da392f1ff9dc0e3144338f_prof);

    }

    // line 29
    public function block_lexik_content($context, array $blocks = array())
    {
        $__internal_459c28871de7ae3c6185f263853b954262418e4b25e87d2ff1a379d05264bd8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459c28871de7ae3c6185f263853b954262418e4b25e87d2ff1a379d05264bd8b->enter($__internal_459c28871de7ae3c6185f263853b954262418e4b25e87d2ff1a379d05264bd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_content"));

        echo "";
        
        $__internal_459c28871de7ae3c6185f263853b954262418e4b25e87d2ff1a379d05264bd8b->leave($__internal_459c28871de7ae3c6185f263853b954262418e4b25e87d2ff1a379d05264bd8b_prof);

    }

    // line 31
    public function block_lexik_javascript_footer($context, array $blocks = array())
    {
        $__internal_0c6a40438e10087908626440263bdc8621d89b7edb6761aed9e0385dd951c654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6a40438e10087908626440263bdc8621d89b7edb6761aed9e0385dd951c654->enter($__internal_0c6a40438e10087908626440263bdc8621d89b7edb6761aed9e0385dd951c654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_javascript_footer"));

        // line 32
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
            <script src=\"//ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular.min.js\"></script>
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lexiktranslation/ng-table/ng-table.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_0c6a40438e10087908626440263bdc8621d89b7edb6761aed9e0385dd951c654->leave($__internal_0c6a40438e10087908626440263bdc8621d89b7edb6761aed9e0385dd951c654_prof);

    }

    public function getTemplateName()
    {
        return "LexikTranslationBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  171 => 34,  167 => 32,  161 => 31,  149 => 29,  139 => 24,  136 => 23,  130 => 22,  119 => 20,  114 => 19,  109 => 18,  106 => 17,  104 => 16,  99 => 13,  93 => 12,  84 => 8,  81 => 7,  75 => 6,  64 => 5,  55 => 36,  53 => 31,  50 => 30,  48 => 29,  45 => 28,  43 => 12,  39 => 10,  37 => 6,  33 => 5,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>{% block lexik_title %}{% endblock %}</title>
        {% block lexik_stylesheets %}
            <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/lexiktranslation/ng-table/ng-table.min.css') }}\">
        {% endblock %}
    </head>
    <body>
        {% block lexik_flash_message %}
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        {% set flashes = app.session.flashbag.all() %}
                        {% if flashes | length > 0 %}
                            {% for type, messages in flashes %}
                                {% for message in messages %}
                                    <div class=\"alert alert-{{ type }}\">{{ message }}</div>
                                {% endfor %}
                            {% endfor %}
                        {% endif %}
                    </div>
                </div>
            </div>
        {% endblock lexik_flash_message %}

        {% block lexik_content '' %}

        {% block lexik_javascript_footer %}
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
            <script src=\"//ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular.min.js\"></script>
            <script src=\"{{ asset('bundles/lexiktranslation/ng-table/ng-table.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "LexikTranslationBundle::layout.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/lexik/translation-bundle/Resources/views/layout.html.twig");
    }
}
