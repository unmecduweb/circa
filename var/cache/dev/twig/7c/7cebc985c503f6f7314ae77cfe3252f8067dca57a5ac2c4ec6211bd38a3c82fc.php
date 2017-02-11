<?php

/* MwebAdminBundle:Resetting:request.html.twig */
class __TwigTemplate_699473983d570294a25b045a39b9f8584c28b32c28251c75fca75dbfd466c203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MwebAdminBundle:Resetting:request.html.twig", 1);
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
        $__internal_1694e7173c2d91175342f8a9d0ce36bd360462bf12f0a56363e1f0bb21e23d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1694e7173c2d91175342f8a9d0ce36bd360462bf12f0a56363e1f0bb21e23d70->enter($__internal_1694e7173c2d91175342f8a9d0ce36bd360462bf12f0a56363e1f0bb21e23d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1694e7173c2d91175342f8a9d0ce36bd360462bf12f0a56363e1f0bb21e23d70->leave($__internal_1694e7173c2d91175342f8a9d0ce36bd360462bf12f0a56363e1f0bb21e23d70_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_441fbf83bdbcc90f7d54f3b9703ebfe9e42201ba8a504ace0ae3891dcf23ac8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441fbf83bdbcc90f7d54f3b9703ebfe9e42201ba8a504ace0ae3891dcf23ac8e->enter($__internal_441fbf83bdbcc90f7d54f3b9703ebfe9e42201ba8a504ace0ae3891dcf23ac8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "MwebAdminBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_441fbf83bdbcc90f7d54f3b9703ebfe9e42201ba8a504ace0ae3891dcf23ac8e->leave($__internal_441fbf83bdbcc90f7d54f3b9703ebfe9e42201ba8a504ace0ae3891dcf23ac8e_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "MwebAdminBundle:Resetting:request.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Resetting/request.html.twig");
    }
}
