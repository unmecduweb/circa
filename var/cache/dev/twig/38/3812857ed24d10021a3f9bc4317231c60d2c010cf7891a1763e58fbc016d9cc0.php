<?php

/* @MwebAdmin/filemanager/js/jPlayer/skin_ol/pink.flag/jplayer.pink.flag.css */
class __TwigTemplate_ab7ef2ef94641cebef183b1a9f039addfd4b25db0af5e8d8b5fc4f84ad3daad8 extends Twig_Template
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
        $__internal_90e3e308613c534863a0f7bf9f9d6e68f15332cd9b0ad7b52bb275c5317ac5e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e3e308613c534863a0f7bf9f9d6e68f15332cd9b0ad7b52bb275c5317ac5e3->enter($__internal_90e3e308613c534863a0f7bf9f9d6e68f15332cd9b0ad7b52bb275c5317ac5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/skin_ol/pink.flag/jplayer.pink.flag.css"));

        // line 1
        echo "/*
 * Skin for jPlayer Plugin (jQuery JavaScript Library)
 * http://www.jplayer.org
 *
 * Skin Name: Pink Flag
 *
 * Copyright (c) 2012 Happyworm Ltd
 * Dual licensed under the MIT and GPL licenses.
 *  - http://www.opensource.org/licenses/mit-license.php
 *  - http://www.gnu.org/copyleft/gpl.html
 *
 * Author: Silvia Benvenuti
 * Skin Version: 1.2 (jPlayer 2.2.0)
 * Date: 22nd October 2012
 */

div.jp-audio,
div.jp-audio-stream,
div.jp-video {

\t/* Edit the font-size to counteract inherited font sizing.
\t * Eg. 1.25em = 1 / 0.8em
\t */

\tfont-size:1.25em; /* 1.25em for testing in site pages */ /* No parent CSS that can effect the size in the demos ZIP */

\tfont-family:Verdana, Arial, sans-serif;
\tline-height:1.6;
\tcolor: #fff;
\tborder-top:1px solid #554461;
\tborder-left:1px solid #554461;
\tborder-right:1px solid #180a1f;
\tborder-bottom:1px solid #180a1f;
\tbackground-color:#3a2a45;
}
div.jp-audio {
\twidth:201px;
\tpadding:20px;
}

div.jp-audio-stream {
\twidth:101px;
\tpadding:20px 20px 10px 20px;
}

div.jp-video-270p {
\twidth:480px;
}
div.jp-video-360p {
\twidth:640px;
}
div.jp-video-full {
\t/* Rules for IE6 (full-screen) */
\twidth:480px;
\theight:270px;
\t/* Rules for IE7 (full-screen) - Otherwise the relative container causes other page items that are not position:static (default) to appear over the video/gui. */
\tposition:static !important; position:relative;
}

/* The z-index rule is defined in this manner to enable Popcorn plugins that add overlays to video area. EG. Subtitles. */
div.jp-video-full div div {
\tz-index:1000;
}

div.jp-video-full div.jp-jplayer {
\ttop: 0;
\tleft: 0;
\tposition: fixed !important; position: relative; /* Rules for IE6 (full-screen) */
\toverflow: hidden;
}

div.jp-video-full div.jp-gui {
\tposition: fixed !important; position: static; /* Rules for IE6 (full-screen) */
\ttop: 0;
\tleft: 0;
\twidth:100%;
\theight:100%;
\tz-index:1001; /* 1 layer above the others. */
}
div.jp-video-full div.jp-interface {
\tposition: absolute !important; position: relative; /* Rules for IE6 (full-screen) */
\tbottom: 0;
\tleft: 0;
}

div.jp-interface {
\tposition: relative;
\twidth:100%;
\tbackground-color:#3a2a45; /* Required for the full screen */
}


div.jp-audio .jp-interface {
\theight: 80px;
\tpadding-top:30px;
}

div.jp-audio-stream .jp-interface {
\theight: 50px;
\tpadding-top:30px;
}

/* @group CONTROLS */

div.jp-controls-holder {
\tclear: both;
\twidth:440px;
\tmargin:0 auto 10px auto;
\tposition: relative;
\toverflow:hidden;
}

div.jp-interface ul.jp-controls {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0 0 no-repeat;
\tlist-style-type:none;
\tpadding: 1px 0 2px 1px;
\toverflow:hidden;
\twidth: 201px;
\theight: 34px;
}

div.jp-audio ul.jp-controls,
div.jp-audio-stream ul.jp-controls {
\tmargin:0 auto;
}

div.jp-audio-stream ul.jp-controls {
\twidth: 100px;
}

div.jp-video ul.jp-controls {
\tmargin:0 0 0 115px;
\tfloat:left;
\tdisplay:inline; /* need this to fix IE6 double margin */
}

div.jp-interface ul.jp-controls li {
\tdisplay:inline;
\tfloat: left;
}
div.jp-interface ul.jp-controls a {
\tdisplay:block;
\toverflow:hidden;
\ttext-indent:-9999px;
\theight: 34px;
\tmargin: 0 1px 2px 0;
\tpadding: 0;
}


/* @group single player controls */

div.jp-type-single  .jp-controls li a{
\twidth: 99px;
}

div.jp-type-single  .jp-play {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -40px no-repeat;
}

div.jp-type-single  .jp-play:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -100px -40px no-repeat;
}

div.jp-type-single  .jp-pause {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -120px no-repeat;
}

div.jp-type-single  .jp-pause:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -100px -120px no-repeat;
}

/* The right border is normally in the ul background image. */
div.jp-audio-stream .jp-play,
div.jp-audio-stream .jp-pause {
\tborder-right:1px solid #180920;
}

div.jp-type-single  .jp-stop {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -80px no-repeat;
}

div.jp-type-single  .jp-stop:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -100px -80px no-repeat;
}

/* @end */

/* @group playlist player controls */

div.jp-type-playlist .jp-controls li a{
\twidth: 49px;
}

div.jp-type-playlist .jp-play {
\tbackground: url(\"jplayer.pink.flag.jpg\") -24px -40px no-repeat;
}

div.jp-type-playlist .jp-play:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -124px -40px no-repeat;
}

div.jp-type-playlist .jp-pause {
\tbackground: url(\"jplayer.pink.flag.jpg\") -24px -120px no-repeat;
}

div.jp-type-playlist .jp-pause:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -124px -120px no-repeat;
}

div.jp-type-playlist .jp-stop {
\tbackground: url(\"jplayer.pink.flag.jpg\") -24px -80px no-repeat;
}

div.jp-type-playlist .jp-stop:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -124px -80px no-repeat;
}

div.jp-type-playlist .jp-previous {
\tbackground: url(\"jplayer.pink.flag.jpg\") -24px -200px no-repeat;
}

div.jp-type-playlist .jp-previous:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -124px -200px no-repeat;
}

div.jp-type-playlist .jp-next {
\tbackground: url(\"jplayer.pink.flag.jpg\") -24px -160px no-repeat;
}

div.jp-type-playlist .jp-next:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -124px -160px no-repeat;
}

/* @end */

/* @end */




/* @group TOGGLES */

ul.jp-toggles {
\tlist-style-type:none;
\tpadding:0;
\tmargin:0 auto;
\toverflow:hidden;
}

div.jp-audio ul.jp-toggles {
\twidth:55px;
}

div.jp-audio .jp-type-single ul.jp-toggles {
\twidth:25px;
}

div.jp-video ul.jp-toggles {
\twidth:100px;
\tmargin-top: 10px;
}

ul.jp-toggles li{
\tdisplay:block;
\tfloat:right;
}

ul.jp-toggles li a{
\tdisplay:block;
\twidth:25px;
\theight:18px;
\ttext-indent:-9999px;
\tline-height:100%; /* need this for IE6 */
}

.jp-full-screen {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0 -420px no-repeat;
\tmargin-left: 20px;
}

.jp-full-screen:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -30px -420px no-repeat;
}

.jp-restore-screen {
\tbackground: url(\"jplayer.pink.flag.jpg\") -60px -420px no-repeat;
\tmargin-left: 20px;
}

.jp-restore-screen:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -90px -420px no-repeat;
}

.jp-repeat {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0 -440px no-repeat;
}

.jp-repeat:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -30px -440px no-repeat;
}

.jp-repeat-off {
\tbackground: url(\"jplayer.pink.flag.jpg\") -60px -440px no-repeat;
}

.jp-repeat-off:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -90px -440px no-repeat;
}

.jp-shuffle {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0 -460px no-repeat;
\tmargin-left: 5px;
}

.jp-shuffle:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -30px -460px no-repeat;
}

.jp-shuffle-off {
\tbackground: url(\"jplayer.pink.flag.jpg\") -60px -460px no-repeat;
\tmargin-left: 5px;
}

.jp-shuffle-off:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -90px -460px no-repeat;
}


/* @end */

/* @group progress bar */

/* The seeking class is added/removed inside jPlayer */
div.jp-seeking-bg {
\tbackground: url(\"jplayer.pink.flag.seeking.gif\");
}

.jp-progress {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -240px no-repeat;
\twidth: 197px;
\theight: 13px;
\tpadding: 0 2px 2px 2px;
\tmargin-bottom: 4px;
\toverflow:hidden;
}

div.jp-video .jp-progress {
\tborder-top:1px solid #180a1f;
\tborder-bottom: 1px solid #554560;
\twidth:100%;
\tbackground-image: none;
\tpadding: 0;
}

.jp-seek-bar {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -260px repeat-x;
\twidth:0px;
\theight: 100%;
\toverflow:hidden;
\tcursor:pointer;
}

.jp-play-bar {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -280px repeat-x;
\twidth:0px;
\theight: 100%;
\toverflow:hidden;
}


/* @end */

/* @group volume controls */

div.jp-interface ul.jp-controls a.jp-mute,
div.jp-interface ul.jp-controls a.jp-unmute,
div.jp-interface ul.jp-controls a.jp-volume-max {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -330px no-repeat;
\tposition: absolute;
\twidth: 16px;
\theight: 11px;
}

div.jp-audio ul.jp-controls a.jp-mute,
div.jp-audio ul.jp-controls a.jp-unmute,
div.jp-audio-stream ul.jp-controls a.jp-mute,
div.jp-audio-stream ul.jp-controls a.jp-unmute {
\ttop:-6px;
\tleft: 0;
}

div.jp-audio ul.jp-controls a.jp-volume-max,
div.jp-audio-stream ul.jp-controls a.jp-volume-max {
\ttop:-6px;
\tright: 0;
}


div.jp-video ul.jp-controls a.jp-mute,
div.jp-video ul.jp-controls a.jp-unmute {
\tleft: 0;
\ttop:14px;
}

div.jp-video ul.jp-controls a.jp-volume-max {
\tleft: 84px;
\ttop:14px;
}

div.jp-interface ul.jp-controls a.jp-mute:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -25px -330px no-repeat;
}

div.jp-interface ul.jp-controls a.jp-unmute {
\tbackground: url(\"jplayer.pink.flag.jpg\") -60px -330px no-repeat;
}

div.jp-interface ul.jp-controls a.jp-unmute:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -85px -330px no-repeat;
}

div.jp-interface ul.jp-controls a.jp-volume-max {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -350px no-repeat;
}

div.jp-interface ul.jp-controls a.jp-volume-max:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -25px -350px no-repeat;
}

.jp-volume-bar {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -300px repeat-x;
\tposition: absolute;
\twidth: 197px;
\theight: 4px;
\tpadding: 2px 2px 1px 2px;
\toverflow: hidden;
}

.jp-volume-bar:hover {
\tcursor:  pointer;
}


div.jp-audio .jp-interface .jp-volume-bar,
div.jp-audio-stream .jp-interface .jp-volume-bar {
\ttop:10px;
\tleft: 0;
}

div.jp-audio-stream .jp-interface .jp-volume-bar {
\twidth: 97px;
\tborder-right:1px solid #180920;
\tpadding-right:1px;
}

div.jp-video .jp-volume-bar {
\ttop: 0;
\tleft: 0;
\twidth:95px;
\tborder-right:1px solid #180920;
\tpadding-right:1px;
\tmargin-top: 30px;
}

.jp-volume-bar-value {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -320px repeat-x;
\theight: 4px;
}

/* @end */

/* @group current time and duration */

.jp-current-time, .jp-duration {
\twidth:70px;
\tfont-size:.5em;
\tcolor: #8c7a99;
}

.jp-current-time {
\tfloat: left;
}

.jp-duration {
\tfloat: right;
\ttext-align:right;
}

.jp-video .jp-current-time {
\tpadding-left:20px;
}

.jp-video .jp-duration {
\tpadding-right:20px;
}

/* @end */

/* @group playlist */

.jp-title ul,
.jp-playlist ul {
\tlist-style-type:none;\t
\tfont-size:.7em;
\tmargin: 0;
\tpadding: 0;
}

.jp-video .jp-title ul {
\tmargin: 0 20px 10px;
}

.jp-video .jp-playlist ul {
\tmargin: 0 20px;
}

.jp-title li,
.jp-playlist li {
\tposition: relative;
\tpadding: 2px 0;
\tborder-top:1px solid #554461;
\tborder-bottom:1px solid #180a1f;
\toverflow: hidden;
}

.jp-title li{
\tborder-bottom:none;
\tborder-top:none;
\tpadding:0;
\ttext-align:center;
}

/* Note that the first-child (IE6) and last-child (IE6/7/8) selectors do not work on IE */

div.jp-type-playlist div.jp-playlist li:first-child {
\tborder-top:none;
\tpadding-top:3px;
}

div.jp-type-playlist div.jp-playlist li:last-child {
\tborder-bottom:none;
\tpadding-bottom:3px;
}

div.jp-type-playlist div.jp-playlist a {
\tcolor: #fff;
\ttext-decoration:none;
}

div.jp-type-playlist div.jp-playlist a:hover {
\tcolor: #e892e9;
}

div.jp-type-playlist div.jp-playlist li.jp-playlist-current {
\tbackground-color: #26102e;
\tmargin: 0 -20px;
\tpadding: 2px 20px;
\tborder-top: 1px solid #26102e;
\tborder-bottom: 1px solid #26102e;
}

div.jp-type-playlist div.jp-playlist li.jp-playlist-current a{
\tcolor: #e892e9;
}

div.jp-type-playlist div.jp-playlist a.jp-playlist-item-remove {
\tfloat:right;
\tdisplay:inline;
\ttext-align:right;
\tmargin-left:10px;
\tfont-weight:bold;
\tcolor:#8C7A99;
}
div.jp-type-playlist div.jp-playlist a.jp-playlist-item-remove:hover {
\tcolor:#E892E9;
}

div.jp-type-playlist div.jp-playlist span.jp-free-media {
\tfloat: right;
\tdisplay:inline;
\ttext-align:right;
\tcolor:#8C7A99;
}

div.jp-type-playlist div.jp-playlist span.jp-free-media a{
\tcolor:#8C7A99;
}

div.jp-type-playlist div.jp-playlist span.jp-free-media a:hover{
\tcolor:#E892E9;
}
span.jp-artist {
\tfont-size:.8em;
\tcolor:#8C7A99;
}

/* @end */


div.jp-video div.jp-video-play {
\twidth:100%;
\toverflow:hidden; /* Important for nested negative margins to work in modern browsers */
\tcursor:pointer;
}
div.jp-video-270p div.jp-video-play {
\tmargin-top:-270px;
\theight:270px;
}
div.jp-video-360p div.jp-video-play {
\tmargin-top:-360px;
\theight:360px;
}
div.jp-video-full div.jp-video-play {
\theight:100%;
}
a.jp-video-play-icon {
\tposition:relative;
\tdisplay:block;
\twidth: 112px;
\theight: 100px;

\tmargin-left:-56px;
\tmargin-top:-50px;
\tleft:50%;
\ttop:50%;

\tbackground: url(\"jplayer.pink.flag.video.play.png\") 0 0 no-repeat;
\ttext-indent:-9999px;
}
div.jp-video-play:hover a.jp-video-play-icon {
\tbackground: url(\"jplayer.pink.flag.video.play.png\") 0 -100px no-repeat;
}


div.jp-jplayer audio,
div.jp-jplayer {
\twidth:0px;
\theight:0px;
}

div.jp-jplayer {
\tbackground-color: #000000;
}

/* @group NO SOLUTION error feedback */

.jp-no-solution {
\tpadding:5px;
\tfont-size:.8em;
\tbackground-color:#3a2a45;
\tborder-top:2px solid #554461;
\tborder-left:2px solid #554461;
\tborder-right:2px solid #180a1f;
\tborder-bottom:2px solid #180a1f;
\tcolor:#FFF;
\tdisplay:none;
}

.jp-no-solution a {
\tcolor:#FFF;
}

.jp-no-solution span {
\tfont-size:1em;
\tdisplay:block;
\ttext-align:center;
\tfont-weight:bold;
}
/* @end */
";
        
        $__internal_90e3e308613c534863a0f7bf9f9d6e68f15332cd9b0ad7b52bb275c5317ac5e3->leave($__internal_90e3e308613c534863a0f7bf9f9d6e68f15332cd9b0ad7b52bb275c5317ac5e3_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/skin_ol/pink.flag/jplayer.pink.flag.css";
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
        return new Twig_Source("/*
 * Skin for jPlayer Plugin (jQuery JavaScript Library)
 * http://www.jplayer.org
 *
 * Skin Name: Pink Flag
 *
 * Copyright (c) 2012 Happyworm Ltd
 * Dual licensed under the MIT and GPL licenses.
 *  - http://www.opensource.org/licenses/mit-license.php
 *  - http://www.gnu.org/copyleft/gpl.html
 *
 * Author: Silvia Benvenuti
 * Skin Version: 1.2 (jPlayer 2.2.0)
 * Date: 22nd October 2012
 */

div.jp-audio,
div.jp-audio-stream,
div.jp-video {

\t/* Edit the font-size to counteract inherited font sizing.
\t * Eg. 1.25em = 1 / 0.8em
\t */

\tfont-size:1.25em; /* 1.25em for testing in site pages */ /* No parent CSS that can effect the size in the demos ZIP */

\tfont-family:Verdana, Arial, sans-serif;
\tline-height:1.6;
\tcolor: #fff;
\tborder-top:1px solid #554461;
\tborder-left:1px solid #554461;
\tborder-right:1px solid #180a1f;
\tborder-bottom:1px solid #180a1f;
\tbackground-color:#3a2a45;
}
div.jp-audio {
\twidth:201px;
\tpadding:20px;
}

div.jp-audio-stream {
\twidth:101px;
\tpadding:20px 20px 10px 20px;
}

div.jp-video-270p {
\twidth:480px;
}
div.jp-video-360p {
\twidth:640px;
}
div.jp-video-full {
\t/* Rules for IE6 (full-screen) */
\twidth:480px;
\theight:270px;
\t/* Rules for IE7 (full-screen) - Otherwise the relative container causes other page items that are not position:static (default) to appear over the video/gui. */
\tposition:static !important; position:relative;
}

/* The z-index rule is defined in this manner to enable Popcorn plugins that add overlays to video area. EG. Subtitles. */
div.jp-video-full div div {
\tz-index:1000;
}

div.jp-video-full div.jp-jplayer {
\ttop: 0;
\tleft: 0;
\tposition: fixed !important; position: relative; /* Rules for IE6 (full-screen) */
\toverflow: hidden;
}

div.jp-video-full div.jp-gui {
\tposition: fixed !important; position: static; /* Rules for IE6 (full-screen) */
\ttop: 0;
\tleft: 0;
\twidth:100%;
\theight:100%;
\tz-index:1001; /* 1 layer above the others. */
}
div.jp-video-full div.jp-interface {
\tposition: absolute !important; position: relative; /* Rules for IE6 (full-screen) */
\tbottom: 0;
\tleft: 0;
}

div.jp-interface {
\tposition: relative;
\twidth:100%;
\tbackground-color:#3a2a45; /* Required for the full screen */
}


div.jp-audio .jp-interface {
\theight: 80px;
\tpadding-top:30px;
}

div.jp-audio-stream .jp-interface {
\theight: 50px;
\tpadding-top:30px;
}

/* @group CONTROLS */

div.jp-controls-holder {
\tclear: both;
\twidth:440px;
\tmargin:0 auto 10px auto;
\tposition: relative;
\toverflow:hidden;
}

div.jp-interface ul.jp-controls {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0 0 no-repeat;
\tlist-style-type:none;
\tpadding: 1px 0 2px 1px;
\toverflow:hidden;
\twidth: 201px;
\theight: 34px;
}

div.jp-audio ul.jp-controls,
div.jp-audio-stream ul.jp-controls {
\tmargin:0 auto;
}

div.jp-audio-stream ul.jp-controls {
\twidth: 100px;
}

div.jp-video ul.jp-controls {
\tmargin:0 0 0 115px;
\tfloat:left;
\tdisplay:inline; /* need this to fix IE6 double margin */
}

div.jp-interface ul.jp-controls li {
\tdisplay:inline;
\tfloat: left;
}
div.jp-interface ul.jp-controls a {
\tdisplay:block;
\toverflow:hidden;
\ttext-indent:-9999px;
\theight: 34px;
\tmargin: 0 1px 2px 0;
\tpadding: 0;
}


/* @group single player controls */

div.jp-type-single  .jp-controls li a{
\twidth: 99px;
}

div.jp-type-single  .jp-play {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -40px no-repeat;
}

div.jp-type-single  .jp-play:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -100px -40px no-repeat;
}

div.jp-type-single  .jp-pause {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -120px no-repeat;
}

div.jp-type-single  .jp-pause:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -100px -120px no-repeat;
}

/* The right border is normally in the ul background image. */
div.jp-audio-stream .jp-play,
div.jp-audio-stream .jp-pause {
\tborder-right:1px solid #180920;
}

div.jp-type-single  .jp-stop {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -80px no-repeat;
}

div.jp-type-single  .jp-stop:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -100px -80px no-repeat;
}

/* @end */

/* @group playlist player controls */

div.jp-type-playlist .jp-controls li a{
\twidth: 49px;
}

div.jp-type-playlist .jp-play {
\tbackground: url(\"jplayer.pink.flag.jpg\") -24px -40px no-repeat;
}

div.jp-type-playlist .jp-play:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -124px -40px no-repeat;
}

div.jp-type-playlist .jp-pause {
\tbackground: url(\"jplayer.pink.flag.jpg\") -24px -120px no-repeat;
}

div.jp-type-playlist .jp-pause:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -124px -120px no-repeat;
}

div.jp-type-playlist .jp-stop {
\tbackground: url(\"jplayer.pink.flag.jpg\") -24px -80px no-repeat;
}

div.jp-type-playlist .jp-stop:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -124px -80px no-repeat;
}

div.jp-type-playlist .jp-previous {
\tbackground: url(\"jplayer.pink.flag.jpg\") -24px -200px no-repeat;
}

div.jp-type-playlist .jp-previous:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -124px -200px no-repeat;
}

div.jp-type-playlist .jp-next {
\tbackground: url(\"jplayer.pink.flag.jpg\") -24px -160px no-repeat;
}

div.jp-type-playlist .jp-next:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -124px -160px no-repeat;
}

/* @end */

/* @end */




/* @group TOGGLES */

ul.jp-toggles {
\tlist-style-type:none;
\tpadding:0;
\tmargin:0 auto;
\toverflow:hidden;
}

div.jp-audio ul.jp-toggles {
\twidth:55px;
}

div.jp-audio .jp-type-single ul.jp-toggles {
\twidth:25px;
}

div.jp-video ul.jp-toggles {
\twidth:100px;
\tmargin-top: 10px;
}

ul.jp-toggles li{
\tdisplay:block;
\tfloat:right;
}

ul.jp-toggles li a{
\tdisplay:block;
\twidth:25px;
\theight:18px;
\ttext-indent:-9999px;
\tline-height:100%; /* need this for IE6 */
}

.jp-full-screen {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0 -420px no-repeat;
\tmargin-left: 20px;
}

.jp-full-screen:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -30px -420px no-repeat;
}

.jp-restore-screen {
\tbackground: url(\"jplayer.pink.flag.jpg\") -60px -420px no-repeat;
\tmargin-left: 20px;
}

.jp-restore-screen:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -90px -420px no-repeat;
}

.jp-repeat {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0 -440px no-repeat;
}

.jp-repeat:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -30px -440px no-repeat;
}

.jp-repeat-off {
\tbackground: url(\"jplayer.pink.flag.jpg\") -60px -440px no-repeat;
}

.jp-repeat-off:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -90px -440px no-repeat;
}

.jp-shuffle {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0 -460px no-repeat;
\tmargin-left: 5px;
}

.jp-shuffle:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -30px -460px no-repeat;
}

.jp-shuffle-off {
\tbackground: url(\"jplayer.pink.flag.jpg\") -60px -460px no-repeat;
\tmargin-left: 5px;
}

.jp-shuffle-off:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -90px -460px no-repeat;
}


/* @end */

/* @group progress bar */

/* The seeking class is added/removed inside jPlayer */
div.jp-seeking-bg {
\tbackground: url(\"jplayer.pink.flag.seeking.gif\");
}

.jp-progress {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -240px no-repeat;
\twidth: 197px;
\theight: 13px;
\tpadding: 0 2px 2px 2px;
\tmargin-bottom: 4px;
\toverflow:hidden;
}

div.jp-video .jp-progress {
\tborder-top:1px solid #180a1f;
\tborder-bottom: 1px solid #554560;
\twidth:100%;
\tbackground-image: none;
\tpadding: 0;
}

.jp-seek-bar {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -260px repeat-x;
\twidth:0px;
\theight: 100%;
\toverflow:hidden;
\tcursor:pointer;
}

.jp-play-bar {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -280px repeat-x;
\twidth:0px;
\theight: 100%;
\toverflow:hidden;
}


/* @end */

/* @group volume controls */

div.jp-interface ul.jp-controls a.jp-mute,
div.jp-interface ul.jp-controls a.jp-unmute,
div.jp-interface ul.jp-controls a.jp-volume-max {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -330px no-repeat;
\tposition: absolute;
\twidth: 16px;
\theight: 11px;
}

div.jp-audio ul.jp-controls a.jp-mute,
div.jp-audio ul.jp-controls a.jp-unmute,
div.jp-audio-stream ul.jp-controls a.jp-mute,
div.jp-audio-stream ul.jp-controls a.jp-unmute {
\ttop:-6px;
\tleft: 0;
}

div.jp-audio ul.jp-controls a.jp-volume-max,
div.jp-audio-stream ul.jp-controls a.jp-volume-max {
\ttop:-6px;
\tright: 0;
}


div.jp-video ul.jp-controls a.jp-mute,
div.jp-video ul.jp-controls a.jp-unmute {
\tleft: 0;
\ttop:14px;
}

div.jp-video ul.jp-controls a.jp-volume-max {
\tleft: 84px;
\ttop:14px;
}

div.jp-interface ul.jp-controls a.jp-mute:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -25px -330px no-repeat;
}

div.jp-interface ul.jp-controls a.jp-unmute {
\tbackground: url(\"jplayer.pink.flag.jpg\") -60px -330px no-repeat;
}

div.jp-interface ul.jp-controls a.jp-unmute:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -85px -330px no-repeat;
}

div.jp-interface ul.jp-controls a.jp-volume-max {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -350px no-repeat;
}

div.jp-interface ul.jp-controls a.jp-volume-max:hover {
\tbackground: url(\"jplayer.pink.flag.jpg\") -25px -350px no-repeat;
}

.jp-volume-bar {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -300px repeat-x;
\tposition: absolute;
\twidth: 197px;
\theight: 4px;
\tpadding: 2px 2px 1px 2px;
\toverflow: hidden;
}

.jp-volume-bar:hover {
\tcursor:  pointer;
}


div.jp-audio .jp-interface .jp-volume-bar,
div.jp-audio-stream .jp-interface .jp-volume-bar {
\ttop:10px;
\tleft: 0;
}

div.jp-audio-stream .jp-interface .jp-volume-bar {
\twidth: 97px;
\tborder-right:1px solid #180920;
\tpadding-right:1px;
}

div.jp-video .jp-volume-bar {
\ttop: 0;
\tleft: 0;
\twidth:95px;
\tborder-right:1px solid #180920;
\tpadding-right:1px;
\tmargin-top: 30px;
}

.jp-volume-bar-value {
\tbackground: url(\"jplayer.pink.flag.jpg\") 0px -320px repeat-x;
\theight: 4px;
}

/* @end */

/* @group current time and duration */

.jp-current-time, .jp-duration {
\twidth:70px;
\tfont-size:.5em;
\tcolor: #8c7a99;
}

.jp-current-time {
\tfloat: left;
}

.jp-duration {
\tfloat: right;
\ttext-align:right;
}

.jp-video .jp-current-time {
\tpadding-left:20px;
}

.jp-video .jp-duration {
\tpadding-right:20px;
}

/* @end */

/* @group playlist */

.jp-title ul,
.jp-playlist ul {
\tlist-style-type:none;\t
\tfont-size:.7em;
\tmargin: 0;
\tpadding: 0;
}

.jp-video .jp-title ul {
\tmargin: 0 20px 10px;
}

.jp-video .jp-playlist ul {
\tmargin: 0 20px;
}

.jp-title li,
.jp-playlist li {
\tposition: relative;
\tpadding: 2px 0;
\tborder-top:1px solid #554461;
\tborder-bottom:1px solid #180a1f;
\toverflow: hidden;
}

.jp-title li{
\tborder-bottom:none;
\tborder-top:none;
\tpadding:0;
\ttext-align:center;
}

/* Note that the first-child (IE6) and last-child (IE6/7/8) selectors do not work on IE */

div.jp-type-playlist div.jp-playlist li:first-child {
\tborder-top:none;
\tpadding-top:3px;
}

div.jp-type-playlist div.jp-playlist li:last-child {
\tborder-bottom:none;
\tpadding-bottom:3px;
}

div.jp-type-playlist div.jp-playlist a {
\tcolor: #fff;
\ttext-decoration:none;
}

div.jp-type-playlist div.jp-playlist a:hover {
\tcolor: #e892e9;
}

div.jp-type-playlist div.jp-playlist li.jp-playlist-current {
\tbackground-color: #26102e;
\tmargin: 0 -20px;
\tpadding: 2px 20px;
\tborder-top: 1px solid #26102e;
\tborder-bottom: 1px solid #26102e;
}

div.jp-type-playlist div.jp-playlist li.jp-playlist-current a{
\tcolor: #e892e9;
}

div.jp-type-playlist div.jp-playlist a.jp-playlist-item-remove {
\tfloat:right;
\tdisplay:inline;
\ttext-align:right;
\tmargin-left:10px;
\tfont-weight:bold;
\tcolor:#8C7A99;
}
div.jp-type-playlist div.jp-playlist a.jp-playlist-item-remove:hover {
\tcolor:#E892E9;
}

div.jp-type-playlist div.jp-playlist span.jp-free-media {
\tfloat: right;
\tdisplay:inline;
\ttext-align:right;
\tcolor:#8C7A99;
}

div.jp-type-playlist div.jp-playlist span.jp-free-media a{
\tcolor:#8C7A99;
}

div.jp-type-playlist div.jp-playlist span.jp-free-media a:hover{
\tcolor:#E892E9;
}
span.jp-artist {
\tfont-size:.8em;
\tcolor:#8C7A99;
}

/* @end */


div.jp-video div.jp-video-play {
\twidth:100%;
\toverflow:hidden; /* Important for nested negative margins to work in modern browsers */
\tcursor:pointer;
}
div.jp-video-270p div.jp-video-play {
\tmargin-top:-270px;
\theight:270px;
}
div.jp-video-360p div.jp-video-play {
\tmargin-top:-360px;
\theight:360px;
}
div.jp-video-full div.jp-video-play {
\theight:100%;
}
a.jp-video-play-icon {
\tposition:relative;
\tdisplay:block;
\twidth: 112px;
\theight: 100px;

\tmargin-left:-56px;
\tmargin-top:-50px;
\tleft:50%;
\ttop:50%;

\tbackground: url(\"jplayer.pink.flag.video.play.png\") 0 0 no-repeat;
\ttext-indent:-9999px;
}
div.jp-video-play:hover a.jp-video-play-icon {
\tbackground: url(\"jplayer.pink.flag.video.play.png\") 0 -100px no-repeat;
}


div.jp-jplayer audio,
div.jp-jplayer {
\twidth:0px;
\theight:0px;
}

div.jp-jplayer {
\tbackground-color: #000000;
}

/* @group NO SOLUTION error feedback */

.jp-no-solution {
\tpadding:5px;
\tfont-size:.8em;
\tbackground-color:#3a2a45;
\tborder-top:2px solid #554461;
\tborder-left:2px solid #554461;
\tborder-right:2px solid #180a1f;
\tborder-bottom:2px solid #180a1f;
\tcolor:#FFF;
\tdisplay:none;
}

.jp-no-solution a {
\tcolor:#FFF;
}

.jp-no-solution span {
\tfont-size:1em;
\tdisplay:block;
\ttext-align:center;
\tfont-weight:bold;
}
/* @end */
", "@MwebAdmin/filemanager/js/jPlayer/skin_ol/pink.flag/jplayer.pink.flag.css", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/skin_ol/pink.flag/jplayer.pink.flag.css");
    }
}
