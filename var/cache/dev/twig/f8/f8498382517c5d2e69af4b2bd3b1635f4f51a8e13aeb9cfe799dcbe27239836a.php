<?php

/* MwebAdminBundle::menu.html.twig */
class __TwigTemplate_bc11e014bec04d68ef748ca3f55821440619307539a64f48463f73fae3276669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b655bbdd2b93805a5039ef64166020097533142a5ea79e514ae5cf66498d5423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b655bbdd2b93805a5039ef64166020097533142a5ea79e514ae5cf66498d5423->enter($__internal_b655bbdd2b93805a5039ef64166020097533142a5ea79e514ae5cf66498d5423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle::menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse\" style=\"position:fixed;top:0;z-index:99999;width:100%;\">
    <div class=\"container-fluid\">
        <ul class=\"nav navbar-nav\">
            <li ><a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mweb_admin");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.project"), "html", null, true);
        echo " - ADMIN</a></li>


            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adminMenu"]) ? $context["adminMenu"] : $this->getContext($context, "adminMenu")));
        foreach ($context['_seq'] as $context["menuKey"] => $context["menu"]) {
            // line 8
            echo "                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "beautyName", array()), "html", null, true);
            echo "<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["adminEntities"]) ? $context["adminEntities"] : $this->getContext($context, "adminEntities")));
            foreach ($context['_seq'] as $context["key"] => $context["entity"]) {
                // line 12
                echo "                            ";
                if (($this->getAttribute($context["entity"], "menu", array()) == $context["menuKey"])) {
                    // line 14
                    echo "                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mweb_admin_list_entity", array("entityAlias" => $context["key"])), "html", null, true);
                    echo "\">Liste des ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "beautyName", array()), "html", null, true);
                    echo "</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mweb_admin_edit_entity", array("lang" => "fr", "entityAlias" => $context["key"], "id" => "new")), "html", null, true);
                    echo "\">Ajouter un(e) ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "beautyName", array()), "html", null, true);
                    echo "</a></li>
                            ";
                }
                // line 18
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                    </ul>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['menuKey'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            <li ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lexik_translation_overview");
        echo "\">Traductions</a></li>

            <li ><a target=\"_blank\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">My account</a></li>
            <li ><a target=\"_blank\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_homepage", array("_locale" => "fr"));
        echo "\">Voir le site</a></li>

        </ul>
        <div class=\"navbar-collapse\">
            ";
        // line 32
        echo "        </div>
    </div><!-- /.container-fluid -->
</nav>";
        
        $__internal_b655bbdd2b93805a5039ef64166020097533142a5ea79e514ae5cf66498d5423->leave($__internal_b655bbdd2b93805a5039ef64166020097533142a5ea79e514ae5cf66498d5423_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 32,  93 => 25,  89 => 24,  83 => 22,  75 => 19,  69 => 18,  62 => 16,  54 => 14,  51 => 12,  47 => 11,  42 => 9,  39 => 8,  35 => 7,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse\" style=\"position:fixed;top:0;z-index:99999;width:100%;\">    <div class=\"container-fluid\">        <ul class=\"nav navbar-nav\">            <li ><a href=\"{{ path('mweb_admin') }}\">{{ 'admin.project'|trans }} - ADMIN</a></li>            {% for menuKey, menu in adminMenu %}                <li class=\"dropdown\">                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{menu.beautyName}}<span class=\"caret\"></span></a>                    <ul class=\"dropdown-menu\">                        {% for key, entity in adminEntities %}                            {% if entity.menu == menuKey %}{#                                {{ dump(entity) }}#}                                <li><a href=\"{{ path('mweb_admin_list_entity',{'entityAlias': key}) }}\">Liste des {{entity.beautyName}}</a></li>                                <li role=\"separator\" class=\"divider\"></li>                                <li><a href=\"{{ path('mweb_admin_edit_entity',{'lang': 'fr','entityAlias': key, 'id': 'new'}) }}\">Ajouter un(e) {{entity.beautyName}}</a></li>                            {% endif %}                        {% endfor %}                    </ul>                </li>            {% endfor %}            <li ><a href=\"{{ path('lexik_translation_overview')  }}\">Traductions</a></li>            <li ><a target=\"_blank\" href=\"{{ path('fos_user_profile_edit')  }}\">My account</a></li>            <li ><a target=\"_blank\" href=\"{{ path('_homepage', {'_locale': 'fr'})  }}\">Voir le site</a></li>        </ul>        <div class=\"navbar-collapse\">            {#<ul class=\"nav navbar-nav navbar-right\">                <li><a class=\"btn btn-default\" href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a></li>            </ul>#}        </div>    </div><!-- /.container-fluid --></nav>", "MwebAdminBundle::menu.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/menu.html.twig");
    }
}
