<?php

/* @MwebAdmin/filemanager/js/jPlayer/skin_ol/blue.monday/skin.handlebars */
class __TwigTemplate_ac75e6d9d9c08a331bffc12e15e72a1400eb7655c960f77a3cbf7ff8c66666f9 extends Twig_Template
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
        $__internal_f53aa4440d666f79c87e5aaa3c24669e588502dca4e6a49f781e38b00af501e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53aa4440d666f79c87e5aaa3c24669e588502dca4e6a49f781e38b00af501e7->enter($__internal_f53aa4440d666f79c87e5aaa3c24669e588502dca4e6a49f781e38b00af501e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/skin_ol/blue.monday/skin.handlebars"));

        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["jquery_jplayer_id"]) ? $context["jquery_jplayer_id"] : $this->getContext($context, "jquery_jplayer_id")), "html", null, true);
        echo "\" class=\"jp-jplayer\"></div>
<div id=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["jp_container_id"]) ? $context["jp_container_id"] : $this->getContext($context, "jp_container_id")), "html", null, true);
        echo "\" class=\"jp-audio\">
  <div class=\"jp-type-single\">
    <div class=\"jp-gui jp-interface\">
      <ul class=\"jp-controls\">
        <li><a href=\"javascript:;\" class=\"jp-play\" tabindex=\"1\">play</a></li>
        <li><a href=\"javascript:;\" class=\"jp-pause\" tabindex=\"1\">pause</a></li>
        <li><a href=\"javascript:;\" class=\"jp-stop\" tabindex=\"1\">stop</a></li>
        <li><a href=\"javascript:;\" class=\"jp-mute\" tabindex=\"1\" title=\"mute\">mute</a></li>
        <li><a href=\"javascript:;\" class=\"jp-unmute\" tabindex=\"1\" title=\"unmute\">unmute</a></li>
        <li><a href=\"javascript:;\" class=\"jp-volume-max\" tabindex=\"1\" title=\"max volume\">max volume</a></li>
      </ul>
      <div class=\"jp-progress\">
        <div class=\"jp-seek-bar\">
          <div class=\"jp-play-bar\"></div>
        </div>
      </div>
      <div class=\"jp-volume-bar\">
        <div class=\"jp-volume-bar-value\"></div>
      </div>
      <div class=\"jp-time-holder\">
        <div class=\"jp-current-time\"></div>
        <div class=\"jp-duration\"></div>
        <ul class=\"jp-toggles\">
          <li><a href=\"javascript:;\" class=\"jp-repeat\" tabindex=\"1\" title=\"repeat\">repeat</a></li>
          <li><a href=\"javascript:;\" class=\"jp-repeat-off\" tabindex=\"1\" title=\"repeat off\">repeat off</a></li>
        </ul>
      </div>
    </div>
    <div class=\"jp-title\">
      <ul>
        <li>";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</li>
      </ul>
    </div>
    <div class=\"jp-no-solution\">
      <span>Update Required</span>
      To play the media you will need to either update your browser to a recent version or update your <a href=\"http://get.adobe.com/flashplayer/\" target=\"_blank\">Flash plugin</a>.
    </div>
  </div>
</div>";
        
        $__internal_f53aa4440d666f79c87e5aaa3c24669e588502dca4e6a49f781e38b00af501e7->leave($__internal_f53aa4440d666f79c87e5aaa3c24669e588502dca4e6a49f781e38b00af501e7_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/skin_ol/blue.monday/skin.handlebars";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 32,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"{{jquery_jplayer_id}}\" class=\"jp-jplayer\"></div>
<div id=\"{{jp_container_id}}\" class=\"jp-audio\">
  <div class=\"jp-type-single\">
    <div class=\"jp-gui jp-interface\">
      <ul class=\"jp-controls\">
        <li><a href=\"javascript:;\" class=\"jp-play\" tabindex=\"1\">play</a></li>
        <li><a href=\"javascript:;\" class=\"jp-pause\" tabindex=\"1\">pause</a></li>
        <li><a href=\"javascript:;\" class=\"jp-stop\" tabindex=\"1\">stop</a></li>
        <li><a href=\"javascript:;\" class=\"jp-mute\" tabindex=\"1\" title=\"mute\">mute</a></li>
        <li><a href=\"javascript:;\" class=\"jp-unmute\" tabindex=\"1\" title=\"unmute\">unmute</a></li>
        <li><a href=\"javascript:;\" class=\"jp-volume-max\" tabindex=\"1\" title=\"max volume\">max volume</a></li>
      </ul>
      <div class=\"jp-progress\">
        <div class=\"jp-seek-bar\">
          <div class=\"jp-play-bar\"></div>
        </div>
      </div>
      <div class=\"jp-volume-bar\">
        <div class=\"jp-volume-bar-value\"></div>
      </div>
      <div class=\"jp-time-holder\">
        <div class=\"jp-current-time\"></div>
        <div class=\"jp-duration\"></div>
        <ul class=\"jp-toggles\">
          <li><a href=\"javascript:;\" class=\"jp-repeat\" tabindex=\"1\" title=\"repeat\">repeat</a></li>
          <li><a href=\"javascript:;\" class=\"jp-repeat-off\" tabindex=\"1\" title=\"repeat off\">repeat off</a></li>
        </ul>
      </div>
    </div>
    <div class=\"jp-title\">
      <ul>
        <li>{{title}}</li>
      </ul>
    </div>
    <div class=\"jp-no-solution\">
      <span>Update Required</span>
      To play the media you will need to either update your browser to a recent version or update your <a href=\"http://get.adobe.com/flashplayer/\" target=\"_blank\">Flash plugin</a>.
    </div>
  </div>
</div>", "@MwebAdmin/filemanager/js/jPlayer/skin_ol/blue.monday/skin.handlebars", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/skin_ol/blue.monday/skin.handlebars");
    }
}
