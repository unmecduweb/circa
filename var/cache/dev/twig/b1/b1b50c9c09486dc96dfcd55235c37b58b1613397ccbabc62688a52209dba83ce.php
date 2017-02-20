<?php

/* @MwebAdmin/filemanager/js/ViewerJS/pdfjsversion.js */
class __TwigTemplate_78d9e50fc61da5aae51c8f05add909e96b911816ec47aed8f8a991849d1fdcc0 extends Twig_Template
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
        $__internal_7ae9c8d076468bc45258d46d96401f2804d74c8e43e629772e50aafb89b33409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae9c8d076468bc45258d46d96401f2804d74c8e43e629772e50aafb89b33409->enter($__internal_7ae9c8d076468bc45258d46d96401f2804d74c8e43e629772e50aafb89b33409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/ViewerJS/pdfjsversion.js"));

        // line 1
        echo "var /**@const{!string}*/pdfjs_version = \"v1.1.114\";
";
        
        $__internal_7ae9c8d076468bc45258d46d96401f2804d74c8e43e629772e50aafb89b33409->leave($__internal_7ae9c8d076468bc45258d46d96401f2804d74c8e43e629772e50aafb89b33409_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/ViewerJS/pdfjsversion.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("var /**@const{!string}*/pdfjs_version = \"v1.1.114\";
", "@MwebAdmin/filemanager/js/ViewerJS/pdfjsversion.js", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/ViewerJS/pdfjsversion.js");
    }
}
