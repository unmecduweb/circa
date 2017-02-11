<?php

/* @MwebAdmin/filemanager/plugin.min.js */
class __TwigTemplate_dd25944b7d7da8fd3a4deed25b9906e148d538dbea2a30d4e677c90180e7f99c extends Twig_Template
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
        $__internal_41ae788f0237091e11afe95b383efef914dc0d9f3bf64cde9cd2ea0c119f5fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ae788f0237091e11afe95b383efef914dc0d9f3bf64cde9cd2ea0c119f5fd2->enter($__internal_41ae788f0237091e11afe95b383efef914dc0d9f3bf64cde9cd2ea0c119f5fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/plugin.min.js"));

        // line 1
        echo "tinymce.PluginManager.add(\"filemanager\",function(e){function n(t){0===e.settings.external_filemanager_path.toLowerCase().indexOf(t.origin.toLowerCase())&&\"responsivefilemanager\"===t.data.sender&&(tinymce.activeEditor.windowManager.getParams().setUrl(t.data.url),tinymce.activeEditor.windowManager.close(),window.removeEventListener?window.removeEventListener(\"message\",n,!1):window.detachEvent(\"onmessage\",n))}function t(t,i,a,s){var r=window.innerWidth-30,g=window.innerHeight-60;if(r>1800&&(r=1800),g>1200&&(g=1200),r>600){var d=(r-20)%138;r=r-d+10}urltype=2,\"image\"==a&&(urltype=1),\"media\"==a&&(urltype=3);var o=\"RESPONSIVE FileManager\";\"undefined\"!=typeof e.settings.filemanager_title&&e.settings.filemanager_title&&(o=e.settings.filemanager_title);var l=\"key\";\"undefined\"!=typeof e.settings.filemanager_access_key&&e.settings.filemanager_access_key&&(l=e.settings.filemanager_access_key);var f=\"\";\"undefined\"!=typeof e.settings.filemanager_sort_by&&e.settings.filemanager_sort_by&&(f=\"&sort_by=\"+e.settings.filemanager_sort_by);var m=\"false\";\"undefined\"!=typeof e.settings.filemanager_descending&&e.settings.filemanager_descending&&(m=e.settings.filemanager_descending);var c=\"\";\"undefined\"!=typeof e.settings.filemanager_subfolder&&e.settings.filemanager_subfolder&&(c=\"&fldr=\"+e.settings.filemanager_subfolder);var v=\"\";\"undefined\"!=typeof e.settings.filemanager_crossdomain&&e.settings.filemanager_crossdomain&&(v=\"&crossdomain=1\",window.addEventListener?window.addEventListener(\"message\",n,!1):window.attachEvent(\"onmessage\",n)),tinymce.activeEditor.windowManager.open({title:o,file:e.settings.external_filemanager_path+\"dialog.php?type=\"+urltype+\"&descending=\"+m+f+c+v+\"&lang=\"+e.settings.language+\"&akey=\"+l,width:r,height:g,resizable:!0,maximizable:!0,inline:1},{setUrl:function(n){var i=s.document.getElementById(t);if(i.value=e.convertURL(n),\"createEvent\"in document){var a=document.createEvent(\"HTMLEvents\");a.initEvent(\"change\",!1,!0),i.dispatchEvent(a)}else i.fireEvent(\"onchange\")}})}return tinymce.activeEditor.settings.file_browser_callback=t,!1});";
        
        $__internal_41ae788f0237091e11afe95b383efef914dc0d9f3bf64cde9cd2ea0c119f5fd2->leave($__internal_41ae788f0237091e11afe95b383efef914dc0d9f3bf64cde9cd2ea0c119f5fd2_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/plugin.min.js";
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
        return new Twig_Source("tinymce.PluginManager.add(\"filemanager\",function(e){function n(t){0===e.settings.external_filemanager_path.toLowerCase().indexOf(t.origin.toLowerCase())&&\"responsivefilemanager\"===t.data.sender&&(tinymce.activeEditor.windowManager.getParams().setUrl(t.data.url),tinymce.activeEditor.windowManager.close(),window.removeEventListener?window.removeEventListener(\"message\",n,!1):window.detachEvent(\"onmessage\",n))}function t(t,i,a,s){var r=window.innerWidth-30,g=window.innerHeight-60;if(r>1800&&(r=1800),g>1200&&(g=1200),r>600){var d=(r-20)%138;r=r-d+10}urltype=2,\"image\"==a&&(urltype=1),\"media\"==a&&(urltype=3);var o=\"RESPONSIVE FileManager\";\"undefined\"!=typeof e.settings.filemanager_title&&e.settings.filemanager_title&&(o=e.settings.filemanager_title);var l=\"key\";\"undefined\"!=typeof e.settings.filemanager_access_key&&e.settings.filemanager_access_key&&(l=e.settings.filemanager_access_key);var f=\"\";\"undefined\"!=typeof e.settings.filemanager_sort_by&&e.settings.filemanager_sort_by&&(f=\"&sort_by=\"+e.settings.filemanager_sort_by);var m=\"false\";\"undefined\"!=typeof e.settings.filemanager_descending&&e.settings.filemanager_descending&&(m=e.settings.filemanager_descending);var c=\"\";\"undefined\"!=typeof e.settings.filemanager_subfolder&&e.settings.filemanager_subfolder&&(c=\"&fldr=\"+e.settings.filemanager_subfolder);var v=\"\";\"undefined\"!=typeof e.settings.filemanager_crossdomain&&e.settings.filemanager_crossdomain&&(v=\"&crossdomain=1\",window.addEventListener?window.addEventListener(\"message\",n,!1):window.attachEvent(\"onmessage\",n)),tinymce.activeEditor.windowManager.open({title:o,file:e.settings.external_filemanager_path+\"dialog.php?type=\"+urltype+\"&descending=\"+m+f+c+v+\"&lang=\"+e.settings.language+\"&akey=\"+l,width:r,height:g,resizable:!0,maximizable:!0,inline:1},{setUrl:function(n){var i=s.document.getElementById(t);if(i.value=e.convertURL(n),\"createEvent\"in document){var a=document.createEvent(\"HTMLEvents\");a.initEvent(\"change\",!1,!0),i.dispatchEvent(a)}else i.fireEvent(\"onchange\")}})}return tinymce.activeEditor.settings.file_browser_callback=t,!1});", "@MwebAdmin/filemanager/plugin.min.js", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/plugin.min.js");
    }
}
