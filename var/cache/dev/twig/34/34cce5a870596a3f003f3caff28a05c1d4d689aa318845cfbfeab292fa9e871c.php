<?php

/* MwebAdminBundle:default:list.html.twig */
class __TwigTemplate_92adab2d80fa17b0f2f27f343dc7fc7353efb882f6c54b6413eabd48d08a14b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MwebAdminBundle::layout.html.twig", "MwebAdminBundle:default:list.html.twig", 1);
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
        $__internal_6195bc6ac3ca11ccf0fa35e235ef2e47bc468f0406e8decf3b49d66ab9afc978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6195bc6ac3ca11ccf0fa35e235ef2e47bc468f0406e8decf3b49d66ab9afc978->enter($__internal_6195bc6ac3ca11ccf0fa35e235ef2e47bc468f0406e8decf3b49d66ab9afc978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:default:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6195bc6ac3ca11ccf0fa35e235ef2e47bc468f0406e8decf3b49d66ab9afc978->leave($__internal_6195bc6ac3ca11ccf0fa35e235ef2e47bc468f0406e8decf3b49d66ab9afc978_prof);

    }

    // line 3
    public function block_js($context, array $blocks = array())
    {
        $__internal_3681978c4258b557b265d16fa3423aa92e1f54fe846376dfad20a3542e710aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3681978c4258b557b265d16fa3423aa92e1f54fe846376dfad20a3542e710aea->enter($__internal_3681978c4258b557b265d16fa3423aa92e1f54fe846376dfad20a3542e710aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 4
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('#table_list_entity').dataTable({
                \"language\": {
                    \"url\": \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mwebadmin/js/locales/fr_Fr.json"), "html", null, true);
        echo "\"
                },
                \"columnDefs\": [";
        // line 12
        echo "                ]
            });
        });
    </script>
";
        
        $__internal_3681978c4258b557b265d16fa3423aa92e1f54fe846376dfad20a3542e710aea->leave($__internal_3681978c4258b557b265d16fa3423aa92e1f54fe846376dfad20a3542e710aea_prof);

    }

    // line 18
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_f0eb7e4046236b0b10ff9a267a2cafb1c8052b5a916d5f76c2a7e1f5dd01e31d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0eb7e4046236b0b10ff9a267a2cafb1c8052b5a916d5f76c2a7e1f5dd01e31d->enter($__internal_f0eb7e4046236b0b10ff9a267a2cafb1c8052b5a916d5f76c2a7e1f5dd01e31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        echo "Liste des ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityParams"]) ? $context["entityParams"] : $this->getContext($context, "entityParams")), "beautyName", array()), "html", null, true);
        
        $__internal_f0eb7e4046236b0b10ff9a267a2cafb1c8052b5a916d5f76c2a7e1f5dd01e31d->leave($__internal_f0eb7e4046236b0b10ff9a267a2cafb1c8052b5a916d5f76c2a7e1f5dd01e31d_prof);

    }

    // line 20
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_0f54e92dd0947dd2d79e2bd8655759832bbe41bf305367ab63e37a50b30bf3c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f54e92dd0947dd2d79e2bd8655759832bbe41bf305367ab63e37a50b30bf3c5->enter($__internal_0f54e92dd0947dd2d79e2bd8655759832bbe41bf305367ab63e37a50b30bf3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        // line 21
        echo "    ";
        // line 22
        echo "
    <a class=\"edit-entity button\"
       href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mweb_admin_edit_entity", array("lang" => "fr", "entityAlias" => (isset($context["entityAlias"]) ? $context["entityAlias"] : $this->getContext($context, "entityAlias")), "id" => "new")), "html", null, true);
        echo "\">Ajouter ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityParams"]) ? $context["entityParams"] : $this->getContext($context, "entityParams")), "beautyName", array()), "html", null, true);
        echo "</a>
    ";
        // line 26
        echo "            ";
        // line 27
        echo "    ";
        // line 28
        echo "    ";
        if ( !twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 29
            echo "        <table id=\"table_list_entity\" class=\"table table-bordered tableau_liste display\">
            <thead>
            <tr>
                <th>Identifiant <span class=\"glyphicon glyphicon-sort\"></span></th>
                ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entityParams"]) ? $context["entityParams"] : $this->getContext($context, "entityParams")), "listProperties", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["params"]) {
                // line 34
                echo "                    <th>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["params"], "beautyName", array()), "html", null, true);
                echo " <span class=\"glyphicon glyphicon-sort\"></span> </th>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['params'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                <th>Modifier</th>
                <th>Supprimer</th>

            </tr>
            </thead>
            <tbody>
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 43
                echo "                <tr>
                    <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "</td>
                    ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entityParams"]) ? $context["entityParams"] : $this->getContext($context, "entityParams")), "listProperties", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["params"]) {
                    // line 46
                    echo "                        <td>
                            ";
                    // line 47
                    if (($this->getAttribute($context["params"], "type", array()) == "datetime")) {
                        // line 48
                        echo "                                ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], $this->getAttribute($context["params"], "dataName", array())), "Y-m-d H:i:s"), "html", null, true);
                        echo "
                            ";
                    } elseif (($this->getAttribute(                    // line 49
$context["params"], "type", array()) == "date")) {
                        // line 50
                        echo "                                ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], $this->getAttribute($context["params"], "dataName", array())), "d/m/Y"), "html", null, true);
                        echo "
                            ";
                    } elseif (($this->getAttribute(                    // line 51
$context["params"], "type", array()) == "time")) {
                        // line 52
                        echo "                                ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], $this->getAttribute($context["params"], "dataName", array())), "H:i"), "html", null, true);
                        echo "
                            ";
                    } elseif (($this->getAttribute(                    // line 53
$context["params"], "type", array()) == "string")) {
                        // line 54
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], $this->getAttribute($context["params"], "dataName", array())), "html", null, true);
                        echo "
                            ";
                    } elseif (($this->getAttribute(                    // line 55
$context["params"], "type", array()) == "money")) {
                        // line 56
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], $this->getAttribute($context["params"], "dataName", array())), "html", null, true);
                        echo "€
                            ";
                    } elseif (($this->getAttribute(                    // line 57
$context["params"], "type", array()) == "boolean")) {
                        // line 58
                        echo "                                ";
                        if (($this->getAttribute($context["entity"], $this->getAttribute($context["params"], "dataName", array())) >= 1)) {
                            // line 59
                            echo "                                    <span class=\"glyphicon glyphicon-ok\"></span>
                                ";
                        } else {
                            // line 61
                            echo "                                    <span class=\"glyphicon glyphicon-remove\"></span>
                                ";
                        }
                        // line 63
                        echo "                            ";
                    }
                    // line 64
                    echo "                        </td>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['params'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                    <td>
                        ";
                // line 68
                echo "                            ";
                // line 69
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["langs"]) ? $context["langs"] : $this->getContext($context, "langs")));
                foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                    // line 70
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mweb_admin_edit_entity", array("lang" => $context["lang"], "entityAlias" => (isset($context["entityAlias"]) ? $context["entityAlias"] : $this->getContext($context, "entityAlias")), "id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                                ";
                    // line 71
                    echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
                    echo "
                                <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span>
                            </a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "
                    </td>

                    <td class=\"center\">
                        <a href=\"javascript:if(confirm('Êtes vous sur ?')) document.location.href='";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mweb_admin_delete_entity", array("id" => $this->getAttribute($context["entity"], "id", array()), "entityAlias" => (isset($context["entityAlias"]) ? $context["entityAlias"] : $this->getContext($context, "entityAlias")))), "html", null, true);
                echo "'\"
                           title=\"Valider\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a>
                    </td>

                   ";
                // line 92
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_0f54e92dd0947dd2d79e2bd8655759832bbe41bf305367ab63e37a50b30bf3c5->leave($__internal_0f54e92dd0947dd2d79e2bd8655759832bbe41bf305367ab63e37a50b30bf3c5_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 94,  246 => 92,  239 => 79,  233 => 75,  223 => 71,  218 => 70,  213 => 69,  211 => 68,  208 => 66,  201 => 64,  198 => 63,  194 => 61,  190 => 59,  187 => 58,  185 => 57,  180 => 56,  178 => 55,  173 => 54,  171 => 53,  166 => 52,  164 => 51,  159 => 50,  157 => 49,  152 => 48,  150 => 47,  147 => 46,  143 => 45,  139 => 44,  136 => 43,  132 => 42,  124 => 36,  115 => 34,  111 => 33,  105 => 29,  102 => 28,  100 => 27,  98 => 26,  92 => 24,  88 => 22,  86 => 21,  80 => 20,  67 => 18,  56 => 12,  51 => 9,  42 => 4,  36 => 3,  11 => 1,);
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

{% block js %}
    {{ parent() }}
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('#table_list_entity').dataTable({
                \"language\": {
                    \"url\": \"{{ asset(\"bundles/mwebadmin/js/locales/fr_Fr.json\") }}\"
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

    <a class=\"edit-entity button\"
       href=\"{{ path('mweb_admin_edit_entity', {'lang': 'fr',\"entityAlias\" :entityAlias, 'id':'new'}) }}\">Ajouter {{ entityParams.beautyName}}</a>
    {#<button class=\"edit-entity btn btn-default\" type=\"link\"#}
            {#data-url=\"{{ path('mweb_admin_edit_entity', {'lang': 'fr',\"entityAlias\" :entityAlias, 'id':'new'}) }}\">Créer#}
    {#</button>#}
    {% if entities is not empty %}
        <table id=\"table_list_entity\" class=\"table table-bordered tableau_liste display\">
            <thead>
            <tr>
                <th>Identifiant <span class=\"glyphicon glyphicon-sort\"></span></th>
                {% for params in entityParams.listProperties %}
                    <th>{{ params.beautyName }} <span class=\"glyphicon glyphicon-sort\"></span> </th>
                {% endfor %}
                <th>Modifier</th>
                <th>Supprimer</th>

            </tr>
            </thead>
            <tbody>
            {% for entity in entities %}
                <tr>
                    <td>{{ entity.id }}</td>
                    {% for params in entityParams.listProperties %}
                        <td>
                            {% if params.type == \"datetime\" %}
                                {{ attribute(entity,params.dataName)|date('Y-m-d H:i:s') }}
                            {% elseif params.type == \"date\" %}
                                {{ attribute(entity,params.dataName)|date('d/m/Y') }}
                            {% elseif params.type == \"time\" %}
                                {{ attribute(entity,params.dataName)|date('H:i') }}
                            {% elseif params.type == \"string\" %}
                                {{ attribute(entity,params.dataName) }}
                            {% elseif params.type == \"money\" %}
                                {{ attribute(entity,params.dataName) }}€
                            {% elseif params.type == \"boolean\" %}
                                {% if attribute(entity,params.dataName) >= 1 %}
                                    <span class=\"glyphicon glyphicon-ok\"></span>
                                {% else %}
                                    <span class=\"glyphicon glyphicon-remove\"></span>
                                {% endif %}
                            {% endif %}
                        </td>
                    {% endfor %}
                    <td>
                        {#Edit#}
                            {#no ajax</a>#}
                        {%  for lang in langs %}
                            <a href=\"{{ path('mweb_admin_edit_entity', { \"lang\":lang, \"entityAlias\" : entityAlias, \"id\" : entity.id}) }}\">
                                {{ lang }}
                                <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span>
                            </a>
                        {%  endfor %}

                    </td>

                    <td class=\"center\">
                        <a href=\"javascript:if(confirm('Êtes vous sur ?')) document.location.href='{{ path('mweb_admin_delete_entity', {'id': entity.id,'entityAlias': entityAlias}) }}'\"
                           title=\"Valider\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a>
                    </td>

                   {# {% if entity.statusTrans is defined %}
                        <td class=\"center\">
                            #}{#{% if entity.statusTrans == false %}
                                <a class=\"status-trans\" data-url=\"{{path('le_admin_entity_status_trans')}}\" data-entity=\"{{entityName is defined ? entityName : app.request.get('_route_params').entity}}\" data-id=\"{{entity.id}}\" href=\"#\" ><span class=\"status-circle desactive\"></span></a>
                                {% else %}
                                <a class=\"status-trans\" data-url=\"{{path('le_admin_entity_status_trans')}}\" data-entity=\"{{entityName is defined ? entityName : app.request.get('_route_params').entity}}\" data-id=\"{{entity.id}}\" href=\"#\" ><span class=\"status-circle active\"></span></a>
                                {% endif %}#}{#
                        </td>
                    {% endif %}#}
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}", "MwebAdminBundle:default:list.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/default/list.html.twig");
    }
}
