<?php

/* @MwebAdmin/filemanager/js/jPlayer/skin/pink.flag/mustache/jplayer.pink.flag.audio.stream.html */
class __TwigTemplate_da06004e140fccfed27c8108be6a8744533a338ba02264809ee4c79e11db3a2d extends Twig_Template
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
        $__internal_5e4e2a1e23bdfae29080687fdd87806dc8343ffe173f5e53282d4413e57ccfaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4e2a1e23bdfae29080687fdd87806dc8343ffe173f5e53282d4413e57ccfaa->enter($__internal_5e4e2a1e23bdfae29080687fdd87806dc8343ffe173f5e53282d4413e57ccfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/skin/pink.flag/mustache/jplayer.pink.flag.audio.stream.html"));

        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["JPLAYER"]) ? $context["JPLAYER"] : $this->getContext($context, "JPLAYER")), "html", null, true);
        echo "\" class=\"jp-jplayer\"></div>
<div id=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["WRAPPER"]) ? $context["WRAPPER"] : $this->getContext($context, "WRAPPER")), "html", null, true);
        echo "\" class=\"jp-audio-stream\" role=\"application\" aria-label=\"media player\">
\t<div class=\"jp-type-single\">
\t\t<div class=\"jp-gui jp-interface\">
\t\t\t<div class=\"jp-volume-controls\">
\t\t\t\t<button class=\"jp-mute\" role=\"button\" tabindex=\"0\">mute</button>
\t\t\t\t<button class=\"jp-volume-max\" role=\"button\" tabindex=\"0\">max volume</button>
\t\t\t\t<div class=\"jp-volume-bar\">
\t\t\t\t\t<div class=\"jp-volume-bar-value\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"jp-controls\">
\t\t\t\t<button class=\"jp-play\" role=\"button\" tabindex=\"0\">play</button>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"jp-details\">
\t\t\t<div class=\"jp-title\" aria-label=\"title\">&nbsp;</div>
\t\t</div>
\t\t<div class=\"jp-no-solution\">
\t\t\t<span>Update Required</span>
\t\t\tTo play the media you will need to either update your browser to a recent version or update your <a href=\"http://get.adobe.com/flashplayer/\" target=\"_blank\">Flash plugin</a>.
\t\t</div>
\t</div>
</div>
";
        
        $__internal_5e4e2a1e23bdfae29080687fdd87806dc8343ffe173f5e53282d4413e57ccfaa->leave($__internal_5e4e2a1e23bdfae29080687fdd87806dc8343ffe173f5e53282d4413e57ccfaa_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/skin/pink.flag/mustache/jplayer.pink.flag.audio.stream.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"{{JPLAYER}}\" class=\"jp-jplayer\"></div>
<div id=\"{{WRAPPER}}\" class=\"jp-audio-stream\" role=\"application\" aria-label=\"media player\">
\t<div class=\"jp-type-single\">
\t\t<div class=\"jp-gui jp-interface\">
\t\t\t<div class=\"jp-volume-controls\">
\t\t\t\t<button class=\"jp-mute\" role=\"button\" tabindex=\"0\">mute</button>
\t\t\t\t<button class=\"jp-volume-max\" role=\"button\" tabindex=\"0\">max volume</button>
\t\t\t\t<div class=\"jp-volume-bar\">
\t\t\t\t\t<div class=\"jp-volume-bar-value\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"jp-controls\">
\t\t\t\t<button class=\"jp-play\" role=\"button\" tabindex=\"0\">play</button>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"jp-details\">
\t\t\t<div class=\"jp-title\" aria-label=\"title\">&nbsp;</div>
\t\t</div>
\t\t<div class=\"jp-no-solution\">
\t\t\t<span>Update Required</span>
\t\t\tTo play the media you will need to either update your browser to a recent version or update your <a href=\"http://get.adobe.com/flashplayer/\" target=\"_blank\">Flash plugin</a>.
\t\t</div>
\t</div>
</div>
", "@MwebAdmin/filemanager/js/jPlayer/skin/pink.flag/mustache/jplayer.pink.flag.audio.stream.html", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/skin/pink.flag/mustache/jplayer.pink.flag.audio.stream.html");
    }
}
