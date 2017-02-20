<?php

/* MwebAdminBundle:production:list.html.twig */
class __TwigTemplate_4493ca5f09b6ec7bf55268921c697657d068d7744ff66f0a1ff39c5e97e2219a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MwebAdminBundle::layout.html.twig", "MwebAdminBundle:production:list.html.twig", 2);
        $this->blocks = array(
            'js' => array($this, 'block_js'),
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
        $__internal_7fa0048ade2e2cea3c4c92a16363b78883ca497b745c5991a8d53b499ebf08a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa0048ade2e2cea3c4c92a16363b78883ca497b745c5991a8d53b499ebf08a2->enter($__internal_7fa0048ade2e2cea3c4c92a16363b78883ca497b745c5991a8d53b499ebf08a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:production:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fa0048ade2e2cea3c4c92a16363b78883ca497b745c5991a8d53b499ebf08a2->leave($__internal_7fa0048ade2e2cea3c4c92a16363b78883ca497b745c5991a8d53b499ebf08a2_prof);

    }

    // line 4
    public function block_js($context, array $blocks = array())
    {
        $__internal_a9cefc3283b3a0b1a4e070922fa28d6742663ff87a940a84e79561c18dcc9fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9cefc3283b3a0b1a4e070922fa28d6742663ff87a940a84e79561c18dcc9fd2->enter($__internal_a9cefc3283b3a0b1a4e070922fa28d6742663ff87a940a84e79561c18dcc9fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 5
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('#table_hotel').dataTable({
                \"language\": {
                    \"url\": \"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebadmin/js/locale/fr_Fr.json"), "html", null, true);
        echo "\"
                },
                \"columnDefs\": [";
        // line 13
        echo "                ]
            });
        });
    </script>
";
        
        $__internal_a9cefc3283b3a0b1a4e070922fa28d6742663ff87a940a84e79561c18dcc9fd2->leave($__internal_a9cefc3283b3a0b1a4e070922fa28d6742663ff87a940a84e79561c18dcc9fd2_prof);

    }

    // line 19
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_b5149f75114f85bb10ac4ccf461e5a13bb9752665b3afc1e61f929cb2d21162f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5149f75114f85bb10ac4ccf461e5a13bb9752665b3afc1e61f929cb2d21162f->enter($__internal_b5149f75114f85bb10ac4ccf461e5a13bb9752665b3afc1e61f929cb2d21162f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        echo "Liste des ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityParams"]) ? $context["entityParams"] : $this->getContext($context, "entityParams")), "beautyName", array()), "html", null, true);
        
        $__internal_b5149f75114f85bb10ac4ccf461e5a13bb9752665b3afc1e61f929cb2d21162f->leave($__internal_b5149f75114f85bb10ac4ccf461e5a13bb9752665b3afc1e61f929cb2d21162f_prof);

    }

    // line 21
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_409604004677012069508a0961b872e7a711dcbbfe47b473a41d03dbf92c2103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409604004677012069508a0961b872e7a711dcbbfe47b473a41d03dbf92c2103->enter($__internal_409604004677012069508a0961b872e7a711dcbbfe47b473a41d03dbf92c2103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        echo "    
    ";
        // line 23
        echo "    
    
    <a class=\"edit-entity btn btn-default\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mweb_admin_edit_entity", array("entityAlias" => (isset($context["entityAlias"]) ? $context["entityAlias"] : $this->getContext($context, "entityAlias")), "id" => "new")), "html", null, true);
        echo "\"  >Créer</a>
    ";
        // line 26
        if ( !twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 27
            echo "        <table id=\"table_hotel\" class=\"table table-bordered tableau_liste display\">
            <thead>
                <tr>
                    <th>Identifiant</th>
                        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entityParams"]) ? $context["entityParams"] : $this->getContext($context, "entityParams")), "listProperties", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["params"]) {
                // line 32
                echo "                        <th>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["params"], "beautyName", array()), "html", null, true);
                echo "</th>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['params'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                    <th>Voir</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                        ";
            // line 37
            if ($this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), 0, array(), "array", false, true), "statusTrans", array(), "any", true, true)) {
                // line 38
                echo "                        <th>Status</th>
                        ";
            }
            // line 40
            echo "                </tr>
            </thead>
            <tbody>
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 44
                echo "                    <tr>
                        <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "</td>
                        ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entityParams"]) ? $context["entityParams"] : $this->getContext($context, "entityParams")), "listProperties", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["params"]) {
                    // line 47
                    echo "                            <td>
                                ";
                    // line 48
                    if (($this->getAttribute($context["params"], "type", array()) == "datetime")) {
                        // line 49
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], $this->getAttribute($context["params"], "dataName", array())), "Y-m-d H:i:s"), "html", null, true);
                        echo "
                                ";
                    } elseif (($this->getAttribute(                    // line 50
$context["params"], "type", array()) == "time")) {
                        // line 51
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], $this->getAttribute($context["params"], "dataName", array())), "H:i"), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 53
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], $this->getAttribute($context["params"], "dataName", array())), "html", null, true);
                        echo "
                                ";
                    }
                    // line 55
                    echo "                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['params'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "                        
                        
                        <td class=\"center\">
                            <a class=\"view-entity btn small\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mweb_admin_view_entity", array("entityAlias" => (isset($context["entityAlias"]) ? $context["entityAlias"] : $this->getContext($context, "entityAlias")), "id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" title=\"Voir\">
                                <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span>
                            </a>
                        </td>
                        
                        <td class=\"center\">
                            <a class=\"edit-entity btn small left\" href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mweb_admin_edit_entity", array("entityAlias" => (isset($context["entityAlias"]) ? $context["entityAlias"] : $this->getContext($context, "entityAlias")), "id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" title=\"Modifier\">
                                <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span>
                            </a>
                        </td>

                        <td class=\"center\">
                            <a href=\"javascript:if(confirm('Êtes vous sur ?')) document.location.href='";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mweb_admin_delete_entity", array("id" => $this->getAttribute($context["entity"], "id", array()), "entityAlias" => (isset($context["entityAlias"]) ? $context["entityAlias"] : $this->getContext($context, "entityAlias")))), "html", null, true);
                echo "'\" title=\"Valider\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a>
                        </td>

                        ";
                // line 75
                if ($this->getAttribute($context["entity"], "statusTrans", array(), "any", true, true)) {
                    // line 76
                    echo "                            <td class=\"center\">
                                ";
                    // line 82
                    echo "                            </td>
                        ";
                }
                // line 84
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_409604004677012069508a0961b872e7a711dcbbfe47b473a41d03dbf92c2103->leave($__internal_409604004677012069508a0961b872e7a711dcbbfe47b473a41d03dbf92c2103_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:production:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 86,  217 => 84,  213 => 82,  210 => 76,  208 => 75,  202 => 72,  193 => 66,  184 => 60,  179 => 57,  172 => 55,  166 => 53,  160 => 51,  158 => 50,  153 => 49,  151 => 48,  148 => 47,  144 => 46,  140 => 45,  137 => 44,  133 => 43,  128 => 40,  124 => 38,  122 => 37,  117 => 34,  108 => 32,  104 => 31,  98 => 27,  96 => 26,  92 => 25,  88 => 23,  80 => 21,  67 => 19,  56 => 13,  51 => 10,  42 => 5,  36 => 4,  11 => 2,);
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
{% extends \"MwebAdminBundle::layout.html.twig\" %}

{% block js %}
    {{ parent() }}
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('#table_hotel').dataTable({
                \"language\": {
                    \"url\": \"{{asset(\"bundles/mwebadmin/js/locale/fr_Fr.json\")}}\"
                },
                \"columnDefs\": [{#                    {\"searchable\": false, \"targets\": [6, 7, 8, 9]}#}
                ]
            });
        });
    </script>
{% endblock %}

{% block pageH1 %}Liste des {{ entityParams.beautyName }}{% endblock %}

{% block admin_container %}    
    {#    <a href=\"{{path('le_admin_entity_edit',{entity: entityName is defined ? entityName : app.request.get('_route_params').entity}) }}\" class=\"btn btn-default\">Créer</a>#}
    
    
    <a class=\"edit-entity btn btn-default\" href=\"{{ path('mweb_admin_edit_entity', {\"entityAlias\" :entityAlias, 'id':'new'}) }}\"  >Créer</a>
    {% if entities is not empty %}
        <table id=\"table_hotel\" class=\"table table-bordered tableau_liste display\">
            <thead>
                <tr>
                    <th>Identifiant</th>
                        {%for params in entityParams.listProperties%}
                        <th>{{params.beautyName}}</th>
                        {%endfor%}
                    <th>Voir</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                        {% if entities[0].statusTrans is defined %}
                        <th>Status</th>
                        {% endif %}
                </tr>
            </thead>
            <tbody>
                {% for entity in entities %}
                    <tr>
                        <td>{{ entity.id }}</td>
                        {%for params in entityParams.listProperties%}
                            <td>
                                {%if params.type == \"datetime\"%}
                                    {{ attribute(entity,params.dataName)|date('Y-m-d H:i:s') }}
                                {% elseif params.type == \"time\"%}
                                    {{ attribute(entity,params.dataName)|date('H:i') }}
                                {%else%}
                                    {{ attribute(entity,params.dataName) }}
                                {%endif%}
                            </td>
                        {%endfor%}
                        
                        
                        <td class=\"center\">
                            <a class=\"view-entity btn small\" href=\"{{ path('mweb_admin_view_entity', { \"entityAlias\" : entityAlias, \"id\" : entity.id}) }}\" title=\"Voir\">
                                <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span>
                            </a>
                        </td>
                        
                        <td class=\"center\">
                            <a class=\"edit-entity btn small left\" href=\"{{ path('mweb_admin_edit_entity', { \"entityAlias\" : entityAlias, \"id\" : entity.id}) }}\" title=\"Modifier\">
                                <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span>
                            </a>
                        </td>

                        <td class=\"center\">
                            <a href=\"javascript:if(confirm('Êtes vous sur ?')) document.location.href='{{ path('mweb_admin_delete_entity', {'id': entity.id,'entityAlias': entityAlias}) }}'\" title=\"Valider\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a>
                        </td>

                        {% if entity.statusTrans is defined %}
                            <td class=\"center\">
                                {#{% if entity.statusTrans == false %}
                                    <a class=\"status-trans\" data-url=\"{{path('le_admin_entity_status_trans')}}\" data-entity=\"{{entityName is defined ? entityName : app.request.get('_route_params').entity}}\" data-id=\"{{entity.id}}\" href=\"#\" ><span class=\"status-circle desactive\"></span></a>
                                    {% else %}
                                    <a class=\"status-trans\" data-url=\"{{path('le_admin_entity_status_trans')}}\" data-entity=\"{{entityName is defined ? entityName : app.request.get('_route_params').entity}}\" data-id=\"{{entity.id}}\" href=\"#\" ><span class=\"status-circle active\"></span></a>
                                    {% endif %}#}
                            </td>
                        {% endif %}
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}", "MwebAdminBundle:production:list.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/production/list.html.twig");
    }
}
