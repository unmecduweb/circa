<?php

/* @MwebAdmin/filemanager/js/jPlayer/skin/pink.flag/mustache/jplayer.pink.flag.audio.single.html */
class __TwigTemplate_aebe8dcf9c9f93b1ef1d9536ea0ee62a17034a0172d145fa4ef3bc18884a9190 extends Twig_Template
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
        $__internal_f6d1d3166ea46cb8be99686789109817a3531ee240a5a00f0787687e2f0600bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d1d3166ea46cb8be99686789109817a3531ee240a5a00f0787687e2f0600bf->enter($__internal_f6d1d3166ea46cb8be99686789109817a3531ee240a5a00f0787687e2f0600bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/skin/pink.flag/mustache/jplayer.pink.flag.audio.single.html"));

        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["JPLAYER"]) ? $context["JPLAYER"] : $this->getContext($context, "JPLAYER")), "html", null, true);
        echo "\" class=\"jp-jplayer\"></div>
<div id=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["WRAPPER"]) ? $context["WRAPPER"] : $this->getContext($context, "WRAPPER")), "html", null, true);
        echo "\" class=\"jp-audio\" role=\"application\" aria-label=\"media player\">
\t<div class=\"jp-type-single\">
\t\t<div class=\"jp-gui jp-interface\">
\t\t\t<div class=\"jp-volume-controls\">
\t\t\t\t<button class=\"jp-mute\" role=\"button\" tabindex=\"0\">mute</button>
\t\t\t\t<button class=\"jp-volume-max\" role=\"button\" tabindex=\"0\">max volume</button>
\t\t\t\t<div class=\"jp-volume-bar\">
\t\t\t\t\t<div class=\"jp-volume-bar-value\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"jp-controls-holder\">
\t\t\t\t<div class=\"jp-controls\">
\t\t\t\t\t<button class=\"jp-play\" role=\"button\" tabindex=\"0\">play</button>
\t\t\t\t\t<button class=\"jp-stop\" role=\"button\" tabindex=\"0\">stop</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"jp-progress\">
\t\t\t\t\t<div class=\"jp-seek-bar\">
\t\t\t\t\t\t<div class=\"jp-play-bar\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">&nbsp;</div>
\t\t\t\t<div class=\"jp-duration\" role=\"timer\" aria-label=\"duration\">&nbsp;</div>
\t\t\t\t<div class=\"jp-toggles\">
\t\t\t\t\t<button class=\"jp-repeat\" role=\"button\" tabindex=\"0\">repeat</button>
\t\t\t\t</div>
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
        
        $__internal_f6d1d3166ea46cb8be99686789109817a3531ee240a5a00f0787687e2f0600bf->leave($__internal_f6d1d3166ea46cb8be99686789109817a3531ee240a5a00f0787687e2f0600bf_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/skin/pink.flag/mustache/jplayer.pink.flag.audio.single.html";
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
<div id=\"{{WRAPPER}}\" class=\"jp-audio\" role=\"application\" aria-label=\"media player\">
\t<div class=\"jp-type-single\">
\t\t<div class=\"jp-gui jp-interface\">
\t\t\t<div class=\"jp-volume-controls\">
\t\t\t\t<button class=\"jp-mute\" role=\"button\" tabindex=\"0\">mute</button>
\t\t\t\t<button class=\"jp-volume-max\" role=\"button\" tabindex=\"0\">max volume</button>
\t\t\t\t<div class=\"jp-volume-bar\">
\t\t\t\t\t<div class=\"jp-volume-bar-value\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"jp-controls-holder\">
\t\t\t\t<div class=\"jp-controls\">
\t\t\t\t\t<button class=\"jp-play\" role=\"button\" tabindex=\"0\">play</button>
\t\t\t\t\t<button class=\"jp-stop\" role=\"button\" tabindex=\"0\">stop</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"jp-progress\">
\t\t\t\t\t<div class=\"jp-seek-bar\">
\t\t\t\t\t\t<div class=\"jp-play-bar\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">&nbsp;</div>
\t\t\t\t<div class=\"jp-duration\" role=\"timer\" aria-label=\"duration\">&nbsp;</div>
\t\t\t\t<div class=\"jp-toggles\">
\t\t\t\t\t<button class=\"jp-repeat\" role=\"button\" tabindex=\"0\">repeat</button>
\t\t\t\t</div>
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
", "@MwebAdmin/filemanager/js/jPlayer/skin/pink.flag/mustache/jplayer.pink.flag.audio.single.html", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/skin/pink.flag/mustache/jplayer.pink.flag.audio.single.html");
    }
}
