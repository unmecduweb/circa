<?php

/* @MwebAdmin/filemanager/js/jPlayer/skin/pink.flag/mustache/jplayer.pink.flag.video.playlist.html */
class __TwigTemplate_5f6a6c428307e3fff447c00d9d974cfce8d5afc794657304bab3945d8c178b12 extends Twig_Template
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
        $__internal_b86350d3b9b9a46b2a1f21f6142d9a98f68ddac3b441d29dd7e4d90fe4c4d4a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86350d3b9b9a46b2a1f21f6142d9a98f68ddac3b441d29dd7e4d90fe4c4d4a8->enter($__internal_b86350d3b9b9a46b2a1f21f6142d9a98f68ddac3b441d29dd7e4d90fe4c4d4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/skin/pink.flag/mustache/jplayer.pink.flag.video.playlist.html"));

        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["WRAPPER"]) ? $context["WRAPPER"] : $this->getContext($context, "WRAPPER")), "html", null, true);
        echo "\" class=\"jp-video \" role=\"application\" aria-label=\"media player\">
\t<div class=\"jp-type-playlist\">
\t\t<div id=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["JPLAYER"]) ? $context["JPLAYER"] : $this->getContext($context, "JPLAYER")), "html", null, true);
        echo "\" class=\"jp-jplayer\"></div>
\t\t<div class=\"jp-gui\">
\t\t\t<div class=\"jp-video-play\">
\t\t\t\t<button class=\"jp-video-play-icon\" role=\"button\" tabindex=\"0\">play</button>
\t\t\t</div>
\t\t\t<div class=\"jp-interface\">
\t\t\t\t<div class=\"jp-progress\">
\t\t\t\t\t<div class=\"jp-seek-bar\">
\t\t\t\t\t\t<div class=\"jp-play-bar\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">&nbsp;</div>
\t\t\t\t<div class=\"jp-duration\" role=\"timer\" aria-label=\"duration\">&nbsp;</div>
\t\t\t\t<div class=\"jp-details\">
\t\t\t\t\t<div class=\"jp-title\" aria-label=\"title\">&nbsp;</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"jp-controls-holder\">
\t\t\t\t\t<div class=\"jp-volume-controls\">
\t\t\t\t\t\t<button class=\"jp-mute\" role=\"button\" tabindex=\"0\">mute</button>
\t\t\t\t\t\t<button class=\"jp-volume-max\" role=\"button\" tabindex=\"0\">max volume</button>
\t\t\t\t\t\t<div class=\"jp-volume-bar\">
\t\t\t\t\t\t\t<div class=\"jp-volume-bar-value\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"jp-controls\">
\t\t\t\t\t\t<button class=\"jp-previous\" role=\"button\" tabindex=\"0\">previous</button>
\t\t\t\t\t\t<button class=\"jp-play\" role=\"button\" tabindex=\"0\">play</button>
\t\t\t\t\t\t<button class=\"jp-stop\" role=\"button\" tabindex=\"0\">stop</button>
\t\t\t\t\t\t<button class=\"jp-next\" role=\"button\" tabindex=\"0\">next</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"jp-toggles\">
\t\t\t\t\t\t<button class=\"jp-repeat\" role=\"button\" tabindex=\"0\">repeat</button>
\t\t\t\t\t\t<button class=\"jp-shuffle\" role=\"button\" tabindex=\"0\">shuffle</button>
\t\t\t\t\t\t<button class=\"jp-full-screen\" role=\"button\" tabindex=\"0\">full screen</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"jp-playlist\">
\t\t\t<ul>
\t\t\t\t<!-- The method Playlist.displayPlaylist() uses this unordered list -->
\t\t\t\t<li></li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"jp-no-solution\">
\t\t\t<span>Update Required</span>
\t\t\tTo play the media you will need to either update your browser to a recent version or update your <a href=\"http://get.adobe.com/flashplayer/\" target=\"_blank\">Flash plugin</a>.
\t\t</div>
\t</div>
</div>
";
        
        $__internal_b86350d3b9b9a46b2a1f21f6142d9a98f68ddac3b441d29dd7e4d90fe4c4d4a8->leave($__internal_b86350d3b9b9a46b2a1f21f6142d9a98f68ddac3b441d29dd7e4d90fe4c4d4a8_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/skin/pink.flag/mustache/jplayer.pink.flag.video.playlist.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"{{WRAPPER}}\" class=\"jp-video \" role=\"application\" aria-label=\"media player\">
\t<div class=\"jp-type-playlist\">
\t\t<div id=\"{{JPLAYER}}\" class=\"jp-jplayer\"></div>
\t\t<div class=\"jp-gui\">
\t\t\t<div class=\"jp-video-play\">
\t\t\t\t<button class=\"jp-video-play-icon\" role=\"button\" tabindex=\"0\">play</button>
\t\t\t</div>
\t\t\t<div class=\"jp-interface\">
\t\t\t\t<div class=\"jp-progress\">
\t\t\t\t\t<div class=\"jp-seek-bar\">
\t\t\t\t\t\t<div class=\"jp-play-bar\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">&nbsp;</div>
\t\t\t\t<div class=\"jp-duration\" role=\"timer\" aria-label=\"duration\">&nbsp;</div>
\t\t\t\t<div class=\"jp-details\">
\t\t\t\t\t<div class=\"jp-title\" aria-label=\"title\">&nbsp;</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"jp-controls-holder\">
\t\t\t\t\t<div class=\"jp-volume-controls\">
\t\t\t\t\t\t<button class=\"jp-mute\" role=\"button\" tabindex=\"0\">mute</button>
\t\t\t\t\t\t<button class=\"jp-volume-max\" role=\"button\" tabindex=\"0\">max volume</button>
\t\t\t\t\t\t<div class=\"jp-volume-bar\">
\t\t\t\t\t\t\t<div class=\"jp-volume-bar-value\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"jp-controls\">
\t\t\t\t\t\t<button class=\"jp-previous\" role=\"button\" tabindex=\"0\">previous</button>
\t\t\t\t\t\t<button class=\"jp-play\" role=\"button\" tabindex=\"0\">play</button>
\t\t\t\t\t\t<button class=\"jp-stop\" role=\"button\" tabindex=\"0\">stop</button>
\t\t\t\t\t\t<button class=\"jp-next\" role=\"button\" tabindex=\"0\">next</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"jp-toggles\">
\t\t\t\t\t\t<button class=\"jp-repeat\" role=\"button\" tabindex=\"0\">repeat</button>
\t\t\t\t\t\t<button class=\"jp-shuffle\" role=\"button\" tabindex=\"0\">shuffle</button>
\t\t\t\t\t\t<button class=\"jp-full-screen\" role=\"button\" tabindex=\"0\">full screen</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"jp-playlist\">
\t\t\t<ul>
\t\t\t\t<!-- The method Playlist.displayPlaylist() uses this unordered list -->
\t\t\t\t<li></li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"jp-no-solution\">
\t\t\t<span>Update Required</span>
\t\t\tTo play the media you will need to either update your browser to a recent version or update your <a href=\"http://get.adobe.com/flashplayer/\" target=\"_blank\">Flash plugin</a>.
\t\t</div>
\t</div>
</div>
", "@MwebAdmin/filemanager/js/jPlayer/skin/pink.flag/mustache/jplayer.pink.flag.video.playlist.html", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/skin/pink.flag/mustache/jplayer.pink.flag.video.playlist.html");
    }
}
