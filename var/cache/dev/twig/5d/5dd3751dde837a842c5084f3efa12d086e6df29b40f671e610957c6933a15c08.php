<?php

/* @MwebAdmin/filemanager/js/ViewerJS/local.css */
class __TwigTemplate_980af80775eb5375ca267fdf33c44a061a20726b4ef120ab57c6d50be4ba8bb8 extends Twig_Template
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
        $__internal_67106c6e84ba617eba9089826f3a4dc48a0d22f5c9ff082c5dc18ecf1956dc48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67106c6e84ba617eba9089826f3a4dc48a0d22f5c9ff082c5dc18ecf1956dc48->enter($__internal_67106c6e84ba617eba9089826f3a4dc48a0d22f5c9ff082c5dc18ecf1956dc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/ViewerJS/local.css"));

        // line 1
        echo "
html[dir='ltr'] .outerCenter{
  right: 0 !important;
}
html[dir='ltr'] .innerCenter{
  right: 0 !important;
}

#titlebar,#toolbarContainer{
  background: #333;
  background-image: none;
}
#documentName,.toolbarLabel{
  color:#eee;
}
.toolbarField{
  color:#fff;
}
.toolbarField:hover,.toolbarField:focus{
  color:#aaa;
}

.toolbarField,.toolbarButton,.dropdownToolbarButton{
  border:1px solid #555 !important;
  background: #222;
}
.toolbarButton:hover,.splitToolbarButton:hover > .toolbarButton, .splitToolbarButton:focus > .toolbarButton, .splitToolbarButton.toggled > .toolbarButton, .toolbarButton.textButton{
  background: #000 !important;
}
#toolbarRight .toolbarButton{
  padding-left: 14px;
  padding-right: 14px;
}
.toolbarButton.about{
  background: #333 !important; 
  padding: 4px !important;
  border:none !important;
  box-shadow: none !important;
}
#canvasContainer{
  background: #eee;
}
.toolbarButton{
  cursor: pointer;
}
.toolbarButton:focus{
  box-shadow: none !important;
  outline: none !important;
}
.toolbarButton.presentation::before,.toolbarButton.fullscreen::before,.toolbarButton.download::before
,.toolbarButton.previousPage::before,.toolbarButton.nextPage::before,.toolbarButton.pageDown::before
,.toolbarButton.pageUp::before,.toolbarButton.zoomOut::before,.toolbarButton.zoomIn::before{
  content: '';
}
.dropdownToolbarButton > select{
  padding-left:2px;
}
#scaleSelectContainer{
  padding-left: 4px;
}
#about{
  cursor: help;
  font-weight: normal;
  font-size: 10px;
}";
        
        $__internal_67106c6e84ba617eba9089826f3a4dc48a0d22f5c9ff082c5dc18ecf1956dc48->leave($__internal_67106c6e84ba617eba9089826f3a4dc48a0d22f5c9ff082c5dc18ecf1956dc48_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/ViewerJS/local.css";
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
        return new Twig_Source("
html[dir='ltr'] .outerCenter{
  right: 0 !important;
}
html[dir='ltr'] .innerCenter{
  right: 0 !important;
}

#titlebar,#toolbarContainer{
  background: #333;
  background-image: none;
}
#documentName,.toolbarLabel{
  color:#eee;
}
.toolbarField{
  color:#fff;
}
.toolbarField:hover,.toolbarField:focus{
  color:#aaa;
}

.toolbarField,.toolbarButton,.dropdownToolbarButton{
  border:1px solid #555 !important;
  background: #222;
}
.toolbarButton:hover,.splitToolbarButton:hover > .toolbarButton, .splitToolbarButton:focus > .toolbarButton, .splitToolbarButton.toggled > .toolbarButton, .toolbarButton.textButton{
  background: #000 !important;
}
#toolbarRight .toolbarButton{
  padding-left: 14px;
  padding-right: 14px;
}
.toolbarButton.about{
  background: #333 !important; 
  padding: 4px !important;
  border:none !important;
  box-shadow: none !important;
}
#canvasContainer{
  background: #eee;
}
.toolbarButton{
  cursor: pointer;
}
.toolbarButton:focus{
  box-shadow: none !important;
  outline: none !important;
}
.toolbarButton.presentation::before,.toolbarButton.fullscreen::before,.toolbarButton.download::before
,.toolbarButton.previousPage::before,.toolbarButton.nextPage::before,.toolbarButton.pageDown::before
,.toolbarButton.pageUp::before,.toolbarButton.zoomOut::before,.toolbarButton.zoomIn::before{
  content: '';
}
.dropdownToolbarButton > select{
  padding-left:2px;
}
#scaleSelectContainer{
  padding-left: 4px;
}
#about{
  cursor: help;
  font-weight: normal;
  font-size: 10px;
}", "@MwebAdmin/filemanager/js/ViewerJS/local.css", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/ViewerJS/local.css");
    }
}
