<?php

/* MwebAdminBundle:menu:menu-list.html.twig */
class __TwigTemplate_335622cbc7bd54dc641a5137b9af60df4eb5e58639048607179ec0d15b935d9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SKCMSAdminBundle:Element/Template:admin-list.html.twig", "MwebAdminBundle:menu:menu-list.html.twig", 1);
        $this->blocks = array(
            'header2' => array($this, 'block_header2'),
            'createLink' => array($this, 'block_createLink'),
            'th' => array($this, 'block_th'),
            'tr' => array($this, 'block_tr'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SKCMSAdminBundle:Element/Template:admin-list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb4fd3babeea3f8a13601b57668b9419ecaac551413f04b18229feeac08866fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4fd3babeea3f8a13601b57668b9419ecaac551413f04b18229feeac08866fa->enter($__internal_fb4fd3babeea3f8a13601b57668b9419ecaac551413f04b18229feeac08866fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:menu:menu-list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb4fd3babeea3f8a13601b57668b9419ecaac551413f04b18229feeac08866fa->leave($__internal_fb4fd3babeea3f8a13601b57668b9419ecaac551413f04b18229feeac08866fa_prof);

    }

    // line 2
    public function block_header2($context, array $blocks = array())
    {
        $__internal_e49a546519990fe7f44a2a69dcc8ee7ce498c53bab3f918db95e6d9891e285d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49a546519990fe7f44a2a69dcc8ee7ce498c53bab3f918db95e6d9891e285d8->enter($__internal_e49a546519990fe7f44a2a69dcc8ee7ce498c53bab3f918db95e6d9891e285d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header2"));

        echo "Menu";
        
        $__internal_e49a546519990fe7f44a2a69dcc8ee7ce498c53bab3f918db95e6d9891e285d8->leave($__internal_e49a546519990fe7f44a2a69dcc8ee7ce498c53bab3f918db95e6d9891e285d8_prof);

    }

    // line 3
    public function block_createLink($context, array $blocks = array())
    {
        $__internal_e137ab2575b4b01d7cbfd85e899d46a3d0ec4c7cc8a881bc6508cc90e9b89ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e137ab2575b4b01d7cbfd85e899d46a3d0ec4c7cc8a881bc6508cc90e9b89ac1->enter($__internal_e137ab2575b4b01d7cbfd85e899d46a3d0ec4c7cc8a881bc6508cc90e9b89ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "createLink"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sk_admin_menuedit");
        
        $__internal_e137ab2575b4b01d7cbfd85e899d46a3d0ec4c7cc8a881bc6508cc90e9b89ac1->leave($__internal_e137ab2575b4b01d7cbfd85e899d46a3d0ec4c7cc8a881bc6508cc90e9b89ac1_prof);

    }

    // line 4
    public function block_th($context, array $blocks = array())
    {
        $__internal_42bb078f3b4328257c9caca4aa0c5f7ee7e44797682d03fcd4b62ce123d9f0e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42bb078f3b4328257c9caca4aa0c5f7ee7e44797682d03fcd4b62ce123d9f0e3->enter($__internal_42bb078f3b4328257c9caca4aa0c5f7ee7e44797682d03fcd4b62ce123d9f0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "th"));

        // line 5
        echo "    <th>Name</th>
    ";
        // line 6
        $this->displayParentBlock("th", $context, $blocks);
        echo "
";
        
        $__internal_42bb078f3b4328257c9caca4aa0c5f7ee7e44797682d03fcd4b62ce123d9f0e3->leave($__internal_42bb078f3b4328257c9caca4aa0c5f7ee7e44797682d03fcd4b62ce123d9f0e3_prof);

    }

    // line 8
    public function block_tr($context, array $blocks = array())
    {
        $__internal_52a9e475de452453eb2e5258755011654078a315f25115fa50a6d4542c295f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a9e475de452453eb2e5258755011654078a315f25115fa50a6d4542c295f9a->enter($__internal_52a9e475de452453eb2e5258755011654078a315f25115fa50a6d4542c295f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tr"));

        // line 9
        echo "    <td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
    <td class=\"center\">
        <a class=\"btn btn-info\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sk_admin_menuedit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                <i class=\"icon-edit icon-white\"></i>  
                Edit                                            
        </a>
        <a class=\"btn btn-danger btn-setting\" data-content=\"Voulez vous vraiment supprimer cette entité ?\" data-title=\"Confirmation de suppression\" data-confirm=\"Oui\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sk_admin_menudelete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                <i class=\"icon-trash icon-white\"></i> 
                Delete
        </a>

    </td>
";
        
        $__internal_52a9e475de452453eb2e5258755011654078a315f25115fa50a6d4542c295f9a->leave($__internal_52a9e475de452453eb2e5258755011654078a315f25115fa50a6d4542c295f9a_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:menu:menu-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 15,  91 => 11,  85 => 9,  79 => 8,  70 => 6,  67 => 5,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends \"SKCMSAdminBundle:Element/Template:admin-list.html.twig\"%}
{%block header2 %}Menu{%endblock%}
{%block createLink %}{{path('sk_admin_menuedit')}}{%endblock%}
{%block th %}
    <th>Name</th>
    {{parent()}}
{%endblock%}
{%block tr %}
    <td>{{entity.name}}</td>
    <td class=\"center\">
        <a class=\"btn btn-info\" href=\"{{path('sk_admin_menuedit',{id:entity.id})}}\">
                <i class=\"icon-edit icon-white\"></i>  
                Edit                                            
        </a>
        <a class=\"btn btn-danger btn-setting\" data-content=\"Voulez vous vraiment supprimer cette entité ?\" data-title=\"Confirmation de suppression\" data-confirm=\"Oui\" href=\"{{path('sk_admin_menudelete',{id:entity.id})}}\">
                <i class=\"icon-trash icon-white\"></i> 
                Delete
        </a>

    </td>
{%endblock%}", "MwebAdminBundle:menu:menu-list.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/menu/menu-list.html.twig");
    }
}
