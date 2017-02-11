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
        $__internal_c841a3e801cec30274eaf573b80ca7542c98c81fc80f63e53881f3130ad5cd5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c841a3e801cec30274eaf573b80ca7542c98c81fc80f63e53881f3130ad5cd5c->enter($__internal_c841a3e801cec30274eaf573b80ca7542c98c81fc80f63e53881f3130ad5cd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:menu:menu-list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c841a3e801cec30274eaf573b80ca7542c98c81fc80f63e53881f3130ad5cd5c->leave($__internal_c841a3e801cec30274eaf573b80ca7542c98c81fc80f63e53881f3130ad5cd5c_prof);

    }

    // line 2
    public function block_header2($context, array $blocks = array())
    {
        $__internal_15dfa317492c6ce114f81faae7f8884d8e9c46c1f5d02fae48f9cf66071f7dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15dfa317492c6ce114f81faae7f8884d8e9c46c1f5d02fae48f9cf66071f7dc5->enter($__internal_15dfa317492c6ce114f81faae7f8884d8e9c46c1f5d02fae48f9cf66071f7dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header2"));

        echo "Menu";
        
        $__internal_15dfa317492c6ce114f81faae7f8884d8e9c46c1f5d02fae48f9cf66071f7dc5->leave($__internal_15dfa317492c6ce114f81faae7f8884d8e9c46c1f5d02fae48f9cf66071f7dc5_prof);

    }

    // line 3
    public function block_createLink($context, array $blocks = array())
    {
        $__internal_58cf7fbaf1519c0d453801ae8aa23f67d60d6c9b07884589528c9bd0eb060176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58cf7fbaf1519c0d453801ae8aa23f67d60d6c9b07884589528c9bd0eb060176->enter($__internal_58cf7fbaf1519c0d453801ae8aa23f67d60d6c9b07884589528c9bd0eb060176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "createLink"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sk_admin_menuedit");
        
        $__internal_58cf7fbaf1519c0d453801ae8aa23f67d60d6c9b07884589528c9bd0eb060176->leave($__internal_58cf7fbaf1519c0d453801ae8aa23f67d60d6c9b07884589528c9bd0eb060176_prof);

    }

    // line 4
    public function block_th($context, array $blocks = array())
    {
        $__internal_e5e65c46aa6ec59788eca04fcaa0ec538df8457d5e1921567e8b885615d55a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e65c46aa6ec59788eca04fcaa0ec538df8457d5e1921567e8b885615d55a19->enter($__internal_e5e65c46aa6ec59788eca04fcaa0ec538df8457d5e1921567e8b885615d55a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "th"));

        // line 5
        echo "    <th>Name</th>
    ";
        // line 6
        $this->displayParentBlock("th", $context, $blocks);
        echo "
";
        
        $__internal_e5e65c46aa6ec59788eca04fcaa0ec538df8457d5e1921567e8b885615d55a19->leave($__internal_e5e65c46aa6ec59788eca04fcaa0ec538df8457d5e1921567e8b885615d55a19_prof);

    }

    // line 8
    public function block_tr($context, array $blocks = array())
    {
        $__internal_d9104ef0b320c55b627aae8799d8368752b1e8b41935e70ee49025708227679c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9104ef0b320c55b627aae8799d8368752b1e8b41935e70ee49025708227679c->enter($__internal_d9104ef0b320c55b627aae8799d8368752b1e8b41935e70ee49025708227679c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tr"));

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
        
        $__internal_d9104ef0b320c55b627aae8799d8368752b1e8b41935e70ee49025708227679c->leave($__internal_d9104ef0b320c55b627aae8799d8368752b1e8b41935e70ee49025708227679c_prof);

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
