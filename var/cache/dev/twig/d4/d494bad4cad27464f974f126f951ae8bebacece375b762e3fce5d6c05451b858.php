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
        $__internal_1ddf1d837f10e7d7fcd565a51befd81a412fd43eb5b85edd773b6d61fbe0c480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ddf1d837f10e7d7fcd565a51befd81a412fd43eb5b85edd773b6d61fbe0c480->enter($__internal_1ddf1d837f10e7d7fcd565a51befd81a412fd43eb5b85edd773b6d61fbe0c480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LexikTranslationBundle::layout.html.twig"));

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
        
        $__internal_1ddf1d837f10e7d7fcd565a51befd81a412fd43eb5b85edd773b6d61fbe0c480->leave($__internal_1ddf1d837f10e7d7fcd565a51befd81a412fd43eb5b85edd773b6d61fbe0c480_prof);

    }

    // line 5
    public function block_lexik_title($context, array $blocks = array())
    {
        $__internal_182e6006953067731621c2a39fa6c72c828bb3574af1378c04af6179b169a79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182e6006953067731621c2a39fa6c72c828bb3574af1378c04af6179b169a79d->enter($__internal_182e6006953067731621c2a39fa6c72c828bb3574af1378c04af6179b169a79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_title"));

        
        $__internal_182e6006953067731621c2a39fa6c72c828bb3574af1378c04af6179b169a79d->leave($__internal_182e6006953067731621c2a39fa6c72c828bb3574af1378c04af6179b169a79d_prof);

    }

    // line 6
    public function block_lexik_stylesheets($context, array $blocks = array())
    {
        $__internal_7c2a67bac0c894624ed11b1a68461761b87c8858804b88dfc394534b4f02ba81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2a67bac0c894624ed11b1a68461761b87c8858804b88dfc394534b4f02ba81->enter($__internal_7c2a67bac0c894624ed11b1a68461761b87c8858804b88dfc394534b4f02ba81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lexiktranslation/ng-table/ng-table.min.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_7c2a67bac0c894624ed11b1a68461761b87c8858804b88dfc394534b4f02ba81->leave($__internal_7c2a67bac0c894624ed11b1a68461761b87c8858804b88dfc394534b4f02ba81_prof);

    }

    // line 12
    public function block_lexik_flash_message($context, array $blocks = array())
    {
        $__internal_87ffe3f38a4b35d40d9ee36198bdac7d3e7046f3b62beba68b0f815ce6ee3d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ffe3f38a4b35d40d9ee36198bdac7d3e7046f3b62beba68b0f815ce6ee3d48->enter($__internal_87ffe3f38a4b35d40d9ee36198bdac7d3e7046f3b62beba68b0f815ce6ee3d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_flash_message"));

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
        
        $__internal_87ffe3f38a4b35d40d9ee36198bdac7d3e7046f3b62beba68b0f815ce6ee3d48->leave($__internal_87ffe3f38a4b35d40d9ee36198bdac7d3e7046f3b62beba68b0f815ce6ee3d48_prof);

    }

    // line 29
    public function block_lexik_content($context, array $blocks = array())
    {
        $__internal_8d14cb50431a4aa410aee35870d68032211902c18b9029ee5250a38da70c8b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d14cb50431a4aa410aee35870d68032211902c18b9029ee5250a38da70c8b79->enter($__internal_8d14cb50431a4aa410aee35870d68032211902c18b9029ee5250a38da70c8b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_content"));

        echo "";
        
        $__internal_8d14cb50431a4aa410aee35870d68032211902c18b9029ee5250a38da70c8b79->leave($__internal_8d14cb50431a4aa410aee35870d68032211902c18b9029ee5250a38da70c8b79_prof);

    }

    // line 31
    public function block_lexik_javascript_footer($context, array $blocks = array())
    {
        $__internal_5add7dc5bd1ec23f79d5580250b996f2449580de99cb53769ba9341732e0706b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5add7dc5bd1ec23f79d5580250b996f2449580de99cb53769ba9341732e0706b->enter($__internal_5add7dc5bd1ec23f79d5580250b996f2449580de99cb53769ba9341732e0706b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lexik_javascript_footer"));

        // line 32
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
            <script src=\"//ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular.min.js\"></script>
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lexiktranslation/ng-table/ng-table.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_5add7dc5bd1ec23f79d5580250b996f2449580de99cb53769ba9341732e0706b->leave($__internal_5add7dc5bd1ec23f79d5580250b996f2449580de99cb53769ba9341732e0706b_prof);

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
