<?php

/* MwebAdminBundle:Group:list.html.twig */
class __TwigTemplate_0b61d0b99457f02a17130fadd39d0e1656829ffd2502598bace46a4e84b72211 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MwebAdminBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a0e96ab76453a3bf12e11711ac2b9c133e03e82db1fa30e9a21a97e21bd0aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0e96ab76453a3bf12e11711ac2b9c133e03e82db1fa30e9a21a97e21bd0aaf->enter($__internal_2a0e96ab76453a3bf12e11711ac2b9c133e03e82db1fa30e9a21a97e21bd0aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a0e96ab76453a3bf12e11711ac2b9c133e03e82db1fa30e9a21a97e21bd0aaf->leave($__internal_2a0e96ab76453a3bf12e11711ac2b9c133e03e82db1fa30e9a21a97e21bd0aaf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a09c33d1bba4ada3a2524f5b525a1c1e5e7f4165bf22dbc447c674c33d1b135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a09c33d1bba4ada3a2524f5b525a1c1e5e7f4165bf22dbc447c674c33d1b135->enter($__internal_1a09c33d1bba4ada3a2524f5b525a1c1e5e7f4165bf22dbc447c674c33d1b135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "MwebAdminBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_1a09c33d1bba4ada3a2524f5b525a1c1e5e7f4165bf22dbc447c674c33d1b135->leave($__internal_1a09c33d1bba4ada3a2524f5b525a1c1e5e7f4165bf22dbc447c674c33d1b135_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "MwebAdminBundle:Group:list.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Group/list.html.twig");
    }
}
