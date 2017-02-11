<?php

/* @MwebAdmin/filemanager/js/jPlayer/skin/blue.monday/jplayer.blue.monday.css */
class __TwigTemplate_25c981634e6973ab01748bfa2f908176383e522f3c3ecdb15586541b1255dc00 extends Twig_Template
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
        $__internal_9934292775520c3572310d79634a2162d440ec9c67c20b6cd47c8046dbcaf965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9934292775520c3572310d79634a2162d440ec9c67c20b6cd47c8046dbcaf965->enter($__internal_9934292775520c3572310d79634a2162d440ec9c67c20b6cd47c8046dbcaf965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/skin/blue.monday/jplayer.blue.monday.css"));

        // line 1
        echo "/*
 * Skin for jPlayer Plugin (jQuery JavaScript Library)
 * http://www.jplayer.org
 *
 * Skin Name: Blue Monday
 *
 * Copyright (c) 2010-2012 Happyworm Ltd
 * Dual licensed under the MIT and GPL licenses.
 *  - http://www.opensource.org/licenses/mit-license.php
 *  - http://www.gnu.org/copyleft/gpl.html
 *
 * Author: Silvia Benvenuti
 * Skin Version: 4.3 (jPlayer 2.2.0)
 * Date: 19th November 2012
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
\tcolor: #666;
\tborder:1px solid #009be3;
\tbackground-color:#eee;
}
div.jp-audio {
\twidth:420px;
}
div.jp-audio-stream {
\twidth:182px;
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
\tbackground-color:#eee;
\twidth:100%;
}

div.jp-audio div.jp-type-single div.jp-interface {
\theight:80px;
}
div.jp-audio div.jp-type-playlist div.jp-interface {
\theight:80px;
}

div.jp-audio-stream div.jp-type-single div.jp-interface {
\theight:80px;
}

div.jp-video div.jp-interface {
\tborder-top:1px solid #009be3;
}

/* @group CONTROLS */

div.jp-controls-holder {
\tclear: both;
\twidth:440px;
\tmargin:0 auto;
\tposition: relative;
\toverflow:hidden;
\ttop:-8px; /* This negative value depends on the size of the text in jp-currentTime and jp-duration */
}

div.jp-interface ul.jp-controls {
\tlist-style-type:none;
\tmargin:0;
\tpadding: 0;
\toverflow:hidden;
}

div.jp-audio ul.jp-controls {
\twidth: 380px;
\tpadding:20px 20px 0 20px;
}

div.jp-audio-stream ul.jp-controls {
\twidth: 142px;
\tpadding:20px 20px 0 20px;
}

div.jp-video div.jp-type-single ul.jp-controls {
\twidth: 78px;
\tmargin-left: 200px;
}

div.jp-video div.jp-type-playlist ul.jp-controls {
\twidth: 134px;
\tmargin-left: 172px;
}
div.jp-video ul.jp-controls,
div.jp-interface ul.jp-controls li {
\tdisplay:inline;
\tfloat: left;
}

div.jp-interface ul.jp-controls a {
\tdisplay:block;
\toverflow:hidden;
\ttext-indent:-9999px;
}
a.jp-play,
a.jp-pause {
\twidth:40px;
\theight:40px;
}

a.jp-play {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 0 no-repeat;
}
a.jp-play:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -41px 0 no-repeat;
}
a.jp-pause {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -42px no-repeat;
\tdisplay: none;
}
a.jp-pause:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -41px -42px no-repeat;
}

a.jp-stop, a.jp-previous, a.jp-next {
\twidth:28px;
\theight:28px;
\tmargin-top:6px;
}

a.jp-stop {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -83px no-repeat;
\tmargin-left:10px;
}

a.jp-stop:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -29px -83px no-repeat;
}

a.jp-previous {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -112px no-repeat;
}
a.jp-previous:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -29px -112px no-repeat;
}

a.jp-next {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -141px no-repeat;
}
a.jp-next:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -29px -141px no-repeat;
}

/* @end */

/* @group progress bar */

div.jp-progress {
\toverflow:hidden;
\tbackground-color: #ddd;
}
div.jp-audio div.jp-progress {
\tposition: absolute;
\ttop:32px;
\theight:15px;
}
div.jp-audio div.jp-type-single div.jp-progress {
\tleft:110px;
\twidth:186px;
}
div.jp-audio div.jp-type-playlist div.jp-progress {
\tleft:166px;
\twidth:130px;
}
div.jp-video div.jp-progress {
\ttop:0px;
\tleft:0px;
\twidth:100%;
\theight:10px;
}
div.jp-seek-bar {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -202px repeat-x;
\twidth:0px;
\theight:100%;
\tcursor: pointer;
}
div.jp-play-bar {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -218px repeat-x ;
\twidth:0px;
\theight:100%;
}

/* The seeking class is added/removed inside jPlayer */
div.jp-seeking-bg {
\tbackground: url(\"jplayer.blue.monday.seeking.gif\");
}

/* @end */

/* @group volume controls */


a.jp-mute,
a.jp-unmute,
a.jp-volume-max {
\twidth:18px;
\theight:15px;
\tmargin-top:12px;
}

div.jp-audio div.jp-type-single a.jp-mute,
div.jp-audio div.jp-type-single a.jp-unmute {
\tmargin-left: 210px;\t
}
div.jp-audio div.jp-type-playlist a.jp-mute,
div.jp-audio div.jp-type-playlist a.jp-unmute {
\tmargin-left: 154px;
}

div.jp-audio-stream div.jp-type-single a.jp-mute,
div.jp-audio-stream div.jp-type-single a.jp-unmute {
\tmargin-left:10px;
}

div.jp-audio a.jp-volume-max,
div.jp-audio-stream a.jp-volume-max {
\tmargin-left: 56px;\t
}

div.jp-video a.jp-mute,
div.jp-video a.jp-unmute,
div.jp-video a.jp-volume-max {
\tposition: absolute;
\ttop:12px;
\tmargin-top:0;
}

div.jp-video a.jp-mute,
div.jp-video a.jp-unmute {
\tleft: 50px;
}

div.jp-video a.jp-volume-max {
\tleft: 134px;
}

a.jp-mute {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -170px no-repeat;
}
a.jp-mute:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -19px -170px no-repeat;
}
a.jp-unmute {
\tbackground: url(\"jplayer.blue.monday.jpg\") -60px -170px no-repeat;
\tdisplay: none;
}
a.jp-unmute:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -79px -170px no-repeat;
}
a.jp-volume-max {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -186px no-repeat;
}
a.jp-volume-max:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -19px -186px no-repeat;
}

div.jp-volume-bar {
\tposition: absolute;
\toverflow:hidden;
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -250px repeat-x;
\twidth:46px;
\theight:5px;
\tcursor: pointer;
}
div.jp-audio div.jp-volume-bar {
\ttop:37px;
\tleft:330px;
}
div.jp-audio-stream div.jp-volume-bar {
\ttop:37px;
\tleft:92px;
}
div.jp-video div.jp-volume-bar {
\ttop:17px;
\tleft:72px;
}
div.jp-volume-bar-value {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -256px repeat-x;
\twidth:0px;
\theight:5px;
}

/* @end */

/* @group current time and duration */

div.jp-audio div.jp-time-holder {
\tposition:absolute;
\ttop:50px;
}
div.jp-audio div.jp-type-single div.jp-time-holder {
\tleft:110px;
\twidth:186px;
}
div.jp-audio div.jp-type-playlist div.jp-time-holder {
\tleft:166px;
\twidth:130px;
}

div.jp-current-time,
div.jp-duration {
\twidth:60px;
\tfont-size:.64em;
\tfont-style:oblique;
}
div.jp-current-time {
\tfloat: left;
\tdisplay:inline;
}
div.jp-duration {
\tfloat: right;
\tdisplay:inline;
\ttext-align: right;
}

div.jp-video div.jp-current-time {
\tmargin-left:20px;
}
div.jp-video div.jp-duration {
\tmargin-right:20px;
}

/* @end */

/* @group playlist */

div.jp-title {
\tfont-weight:bold;
\ttext-align:center;
}

div.jp-title,
div.jp-playlist {
\twidth:100%;
\tbackground-color:#ccc;
\tborder-top:1px solid #009be3;
}
div.jp-type-single div.jp-title,
div.jp-type-playlist div.jp-title,
div.jp-type-single div.jp-playlist {
\tborder-top:none;
}
div.jp-title ul,
div.jp-playlist ul {
\tlist-style-type:none;
\tmargin:0;
\tpadding:0 20px;
\tfont-size:.72em;
}

div.jp-title li {
\tpadding:5px 0;
\tfont-weight:bold;
}
div.jp-playlist li {
\tpadding:5px 0 4px 20px;
\tborder-bottom:1px solid #eee;
}

div.jp-playlist li div {
\tdisplay:inline;
}

/* Note that the first-child (IE6) and last-child (IE6/7/8) selectors do not work on IE */

div.jp-type-playlist div.jp-playlist li:last-child {
\tpadding:5px 0 5px 20px;
\tborder-bottom:none;
}
div.jp-type-playlist div.jp-playlist li.jp-playlist-current {
\tlist-style-type:square;
\tlist-style-position:inside;
\tpadding-left:7px;
}
div.jp-type-playlist div.jp-playlist a {
\tcolor: #333;
\ttext-decoration: none;
}
div.jp-type-playlist div.jp-playlist a:hover {
\tcolor:#0d88c1;
}
div.jp-type-playlist div.jp-playlist a.jp-playlist-current {
\tcolor:#0d88c1;
}

div.jp-type-playlist div.jp-playlist a.jp-playlist-item-remove {
\tfloat:right;
\tdisplay:inline;
\ttext-align:right;
\tmargin-right:10px;
\tfont-weight:bold;
\tcolor:#666;
}
div.jp-type-playlist div.jp-playlist a.jp-playlist-item-remove:hover {
\tcolor:#0d88c1;
}
div.jp-type-playlist div.jp-playlist span.jp-free-media {
\tfloat:right;
\tdisplay:inline;
\ttext-align:right;
\tmargin-right:10px;
}
div.jp-type-playlist div.jp-playlist span.jp-free-media a{
\tcolor:#666;
}
div.jp-type-playlist div.jp-playlist span.jp-free-media a:hover{
\tcolor:#0d88c1;
}
span.jp-artist {
\tfont-size:.8em;
\tcolor:#666;
}

/* @end */

div.jp-video-play {
\twidth:100%;
\toverflow:hidden; /* Important for nested negative margins to work in modern browsers */
\tcursor:pointer;
\tbackground-color:rgba(0,0,0,0); /* Makes IE9 work with the active area over the whole video area. IE6/7/8 only have the button as active area. */
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

\tbackground: url(\"jplayer.blue.monday.video.play.png\") 0 0 no-repeat;
\ttext-indent:-9999px;
}
div.jp-video-play:hover a.jp-video-play-icon {
\tbackground: url(\"jplayer.blue.monday.video.play.png\") 0 -100px no-repeat;
}





div.jp-jplayer audio,
div.jp-jplayer {
\twidth:0px;
\theight:0px;
}

div.jp-jplayer {
\tbackground-color: #000000;
}





/* @group TOGGLES */

/* The audio toggles are nested inside jp-time-holder */

ul.jp-toggles {
\tlist-style-type:none;
\tpadding:0;
\tmargin:0 auto;
\toverflow:hidden;
}

div.jp-audio .jp-type-single ul.jp-toggles {
\twidth:25px;
}
div.jp-audio .jp-type-playlist ul.jp-toggles {
\twidth:55px;
\tmargin: 0;
\tposition: absolute;
\tleft: 325px;
\ttop: 50px;
}

div.jp-video ul.jp-toggles {
\tmargin-top:10px;
\twidth:100px;
}

ul.jp-toggles li {
\tdisplay:block;
\tfloat:right;
}

ul.jp-toggles li a {
\tdisplay:block;
\twidth:25px;
\theight:18px;
\ttext-indent:-9999px;
\tline-height:100%; /* need this for IE6 */
}

a.jp-full-screen {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -310px no-repeat;
\tmargin-left: 20px;
}

a.jp-full-screen:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -30px -310px no-repeat;
}

a.jp-restore-screen {
\tbackground: url(\"jplayer.blue.monday.jpg\") -60px -310px no-repeat;
\tmargin-left: 20px;
}

a.jp-restore-screen:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -90px -310px no-repeat;
}

a.jp-repeat {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -290px no-repeat;
}

a.jp-repeat:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -30px -290px no-repeat;
}

a.jp-repeat-off {
\tbackground: url(\"jplayer.blue.monday.jpg\") -60px -290px no-repeat;
}

a.jp-repeat-off:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -90px -290px no-repeat;
}

a.jp-shuffle {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -270px no-repeat;
\tmargin-left: 5px;
}

a.jp-shuffle:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -30px -270px no-repeat;
}

a.jp-shuffle-off {
\tbackground: url(\"jplayer.blue.monday.jpg\") -60px -270px no-repeat;
\tmargin-left: 5px;
}

a.jp-shuffle-off:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -90px -270px no-repeat;
}


/* @end */

/* @group NO SOLUTION error feedback */

.jp-no-solution {
\tpadding:5px;
\tfont-size:.8em;
\tbackground-color:#eee;
\tborder:2px solid #009be3;
\tcolor:#000;
\tdisplay:none;
}

.jp-no-solution a {
\tcolor:#000;
}

.jp-no-solution span {
\tfont-size:1em;
\tdisplay:block;
\ttext-align:center;
\tfont-weight:bold;
}

/* @end */
";
        
        $__internal_9934292775520c3572310d79634a2162d440ec9c67c20b6cd47c8046dbcaf965->leave($__internal_9934292775520c3572310d79634a2162d440ec9c67c20b6cd47c8046dbcaf965_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/skin/blue.monday/jplayer.blue.monday.css";
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
 * Skin Name: Blue Monday
 *
 * Copyright (c) 2010-2012 Happyworm Ltd
 * Dual licensed under the MIT and GPL licenses.
 *  - http://www.opensource.org/licenses/mit-license.php
 *  - http://www.gnu.org/copyleft/gpl.html
 *
 * Author: Silvia Benvenuti
 * Skin Version: 4.3 (jPlayer 2.2.0)
 * Date: 19th November 2012
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
\tcolor: #666;
\tborder:1px solid #009be3;
\tbackground-color:#eee;
}
div.jp-audio {
\twidth:420px;
}
div.jp-audio-stream {
\twidth:182px;
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
\tbackground-color:#eee;
\twidth:100%;
}

div.jp-audio div.jp-type-single div.jp-interface {
\theight:80px;
}
div.jp-audio div.jp-type-playlist div.jp-interface {
\theight:80px;
}

div.jp-audio-stream div.jp-type-single div.jp-interface {
\theight:80px;
}

div.jp-video div.jp-interface {
\tborder-top:1px solid #009be3;
}

/* @group CONTROLS */

div.jp-controls-holder {
\tclear: both;
\twidth:440px;
\tmargin:0 auto;
\tposition: relative;
\toverflow:hidden;
\ttop:-8px; /* This negative value depends on the size of the text in jp-currentTime and jp-duration */
}

div.jp-interface ul.jp-controls {
\tlist-style-type:none;
\tmargin:0;
\tpadding: 0;
\toverflow:hidden;
}

div.jp-audio ul.jp-controls {
\twidth: 380px;
\tpadding:20px 20px 0 20px;
}

div.jp-audio-stream ul.jp-controls {
\twidth: 142px;
\tpadding:20px 20px 0 20px;
}

div.jp-video div.jp-type-single ul.jp-controls {
\twidth: 78px;
\tmargin-left: 200px;
}

div.jp-video div.jp-type-playlist ul.jp-controls {
\twidth: 134px;
\tmargin-left: 172px;
}
div.jp-video ul.jp-controls,
div.jp-interface ul.jp-controls li {
\tdisplay:inline;
\tfloat: left;
}

div.jp-interface ul.jp-controls a {
\tdisplay:block;
\toverflow:hidden;
\ttext-indent:-9999px;
}
a.jp-play,
a.jp-pause {
\twidth:40px;
\theight:40px;
}

a.jp-play {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 0 no-repeat;
}
a.jp-play:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -41px 0 no-repeat;
}
a.jp-pause {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -42px no-repeat;
\tdisplay: none;
}
a.jp-pause:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -41px -42px no-repeat;
}

a.jp-stop, a.jp-previous, a.jp-next {
\twidth:28px;
\theight:28px;
\tmargin-top:6px;
}

a.jp-stop {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -83px no-repeat;
\tmargin-left:10px;
}

a.jp-stop:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -29px -83px no-repeat;
}

a.jp-previous {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -112px no-repeat;
}
a.jp-previous:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -29px -112px no-repeat;
}

a.jp-next {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -141px no-repeat;
}
a.jp-next:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -29px -141px no-repeat;
}

/* @end */

/* @group progress bar */

div.jp-progress {
\toverflow:hidden;
\tbackground-color: #ddd;
}
div.jp-audio div.jp-progress {
\tposition: absolute;
\ttop:32px;
\theight:15px;
}
div.jp-audio div.jp-type-single div.jp-progress {
\tleft:110px;
\twidth:186px;
}
div.jp-audio div.jp-type-playlist div.jp-progress {
\tleft:166px;
\twidth:130px;
}
div.jp-video div.jp-progress {
\ttop:0px;
\tleft:0px;
\twidth:100%;
\theight:10px;
}
div.jp-seek-bar {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -202px repeat-x;
\twidth:0px;
\theight:100%;
\tcursor: pointer;
}
div.jp-play-bar {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -218px repeat-x ;
\twidth:0px;
\theight:100%;
}

/* The seeking class is added/removed inside jPlayer */
div.jp-seeking-bg {
\tbackground: url(\"jplayer.blue.monday.seeking.gif\");
}

/* @end */

/* @group volume controls */


a.jp-mute,
a.jp-unmute,
a.jp-volume-max {
\twidth:18px;
\theight:15px;
\tmargin-top:12px;
}

div.jp-audio div.jp-type-single a.jp-mute,
div.jp-audio div.jp-type-single a.jp-unmute {
\tmargin-left: 210px;\t
}
div.jp-audio div.jp-type-playlist a.jp-mute,
div.jp-audio div.jp-type-playlist a.jp-unmute {
\tmargin-left: 154px;
}

div.jp-audio-stream div.jp-type-single a.jp-mute,
div.jp-audio-stream div.jp-type-single a.jp-unmute {
\tmargin-left:10px;
}

div.jp-audio a.jp-volume-max,
div.jp-audio-stream a.jp-volume-max {
\tmargin-left: 56px;\t
}

div.jp-video a.jp-mute,
div.jp-video a.jp-unmute,
div.jp-video a.jp-volume-max {
\tposition: absolute;
\ttop:12px;
\tmargin-top:0;
}

div.jp-video a.jp-mute,
div.jp-video a.jp-unmute {
\tleft: 50px;
}

div.jp-video a.jp-volume-max {
\tleft: 134px;
}

a.jp-mute {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -170px no-repeat;
}
a.jp-mute:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -19px -170px no-repeat;
}
a.jp-unmute {
\tbackground: url(\"jplayer.blue.monday.jpg\") -60px -170px no-repeat;
\tdisplay: none;
}
a.jp-unmute:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -79px -170px no-repeat;
}
a.jp-volume-max {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -186px no-repeat;
}
a.jp-volume-max:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -19px -186px no-repeat;
}

div.jp-volume-bar {
\tposition: absolute;
\toverflow:hidden;
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -250px repeat-x;
\twidth:46px;
\theight:5px;
\tcursor: pointer;
}
div.jp-audio div.jp-volume-bar {
\ttop:37px;
\tleft:330px;
}
div.jp-audio-stream div.jp-volume-bar {
\ttop:37px;
\tleft:92px;
}
div.jp-video div.jp-volume-bar {
\ttop:17px;
\tleft:72px;
}
div.jp-volume-bar-value {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -256px repeat-x;
\twidth:0px;
\theight:5px;
}

/* @end */

/* @group current time and duration */

div.jp-audio div.jp-time-holder {
\tposition:absolute;
\ttop:50px;
}
div.jp-audio div.jp-type-single div.jp-time-holder {
\tleft:110px;
\twidth:186px;
}
div.jp-audio div.jp-type-playlist div.jp-time-holder {
\tleft:166px;
\twidth:130px;
}

div.jp-current-time,
div.jp-duration {
\twidth:60px;
\tfont-size:.64em;
\tfont-style:oblique;
}
div.jp-current-time {
\tfloat: left;
\tdisplay:inline;
}
div.jp-duration {
\tfloat: right;
\tdisplay:inline;
\ttext-align: right;
}

div.jp-video div.jp-current-time {
\tmargin-left:20px;
}
div.jp-video div.jp-duration {
\tmargin-right:20px;
}

/* @end */

/* @group playlist */

div.jp-title {
\tfont-weight:bold;
\ttext-align:center;
}

div.jp-title,
div.jp-playlist {
\twidth:100%;
\tbackground-color:#ccc;
\tborder-top:1px solid #009be3;
}
div.jp-type-single div.jp-title,
div.jp-type-playlist div.jp-title,
div.jp-type-single div.jp-playlist {
\tborder-top:none;
}
div.jp-title ul,
div.jp-playlist ul {
\tlist-style-type:none;
\tmargin:0;
\tpadding:0 20px;
\tfont-size:.72em;
}

div.jp-title li {
\tpadding:5px 0;
\tfont-weight:bold;
}
div.jp-playlist li {
\tpadding:5px 0 4px 20px;
\tborder-bottom:1px solid #eee;
}

div.jp-playlist li div {
\tdisplay:inline;
}

/* Note that the first-child (IE6) and last-child (IE6/7/8) selectors do not work on IE */

div.jp-type-playlist div.jp-playlist li:last-child {
\tpadding:5px 0 5px 20px;
\tborder-bottom:none;
}
div.jp-type-playlist div.jp-playlist li.jp-playlist-current {
\tlist-style-type:square;
\tlist-style-position:inside;
\tpadding-left:7px;
}
div.jp-type-playlist div.jp-playlist a {
\tcolor: #333;
\ttext-decoration: none;
}
div.jp-type-playlist div.jp-playlist a:hover {
\tcolor:#0d88c1;
}
div.jp-type-playlist div.jp-playlist a.jp-playlist-current {
\tcolor:#0d88c1;
}

div.jp-type-playlist div.jp-playlist a.jp-playlist-item-remove {
\tfloat:right;
\tdisplay:inline;
\ttext-align:right;
\tmargin-right:10px;
\tfont-weight:bold;
\tcolor:#666;
}
div.jp-type-playlist div.jp-playlist a.jp-playlist-item-remove:hover {
\tcolor:#0d88c1;
}
div.jp-type-playlist div.jp-playlist span.jp-free-media {
\tfloat:right;
\tdisplay:inline;
\ttext-align:right;
\tmargin-right:10px;
}
div.jp-type-playlist div.jp-playlist span.jp-free-media a{
\tcolor:#666;
}
div.jp-type-playlist div.jp-playlist span.jp-free-media a:hover{
\tcolor:#0d88c1;
}
span.jp-artist {
\tfont-size:.8em;
\tcolor:#666;
}

/* @end */

div.jp-video-play {
\twidth:100%;
\toverflow:hidden; /* Important for nested negative margins to work in modern browsers */
\tcursor:pointer;
\tbackground-color:rgba(0,0,0,0); /* Makes IE9 work with the active area over the whole video area. IE6/7/8 only have the button as active area. */
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

\tbackground: url(\"jplayer.blue.monday.video.play.png\") 0 0 no-repeat;
\ttext-indent:-9999px;
}
div.jp-video-play:hover a.jp-video-play-icon {
\tbackground: url(\"jplayer.blue.monday.video.play.png\") 0 -100px no-repeat;
}





div.jp-jplayer audio,
div.jp-jplayer {
\twidth:0px;
\theight:0px;
}

div.jp-jplayer {
\tbackground-color: #000000;
}





/* @group TOGGLES */

/* The audio toggles are nested inside jp-time-holder */

ul.jp-toggles {
\tlist-style-type:none;
\tpadding:0;
\tmargin:0 auto;
\toverflow:hidden;
}

div.jp-audio .jp-type-single ul.jp-toggles {
\twidth:25px;
}
div.jp-audio .jp-type-playlist ul.jp-toggles {
\twidth:55px;
\tmargin: 0;
\tposition: absolute;
\tleft: 325px;
\ttop: 50px;
}

div.jp-video ul.jp-toggles {
\tmargin-top:10px;
\twidth:100px;
}

ul.jp-toggles li {
\tdisplay:block;
\tfloat:right;
}

ul.jp-toggles li a {
\tdisplay:block;
\twidth:25px;
\theight:18px;
\ttext-indent:-9999px;
\tline-height:100%; /* need this for IE6 */
}

a.jp-full-screen {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -310px no-repeat;
\tmargin-left: 20px;
}

a.jp-full-screen:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -30px -310px no-repeat;
}

a.jp-restore-screen {
\tbackground: url(\"jplayer.blue.monday.jpg\") -60px -310px no-repeat;
\tmargin-left: 20px;
}

a.jp-restore-screen:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -90px -310px no-repeat;
}

a.jp-repeat {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -290px no-repeat;
}

a.jp-repeat:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -30px -290px no-repeat;
}

a.jp-repeat-off {
\tbackground: url(\"jplayer.blue.monday.jpg\") -60px -290px no-repeat;
}

a.jp-repeat-off:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -90px -290px no-repeat;
}

a.jp-shuffle {
\tbackground: url(\"jplayer.blue.monday.jpg\") 0 -270px no-repeat;
\tmargin-left: 5px;
}

a.jp-shuffle:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -30px -270px no-repeat;
}

a.jp-shuffle-off {
\tbackground: url(\"jplayer.blue.monday.jpg\") -60px -270px no-repeat;
\tmargin-left: 5px;
}

a.jp-shuffle-off:hover {
\tbackground: url(\"jplayer.blue.monday.jpg\") -90px -270px no-repeat;
}


/* @end */

/* @group NO SOLUTION error feedback */

.jp-no-solution {
\tpadding:5px;
\tfont-size:.8em;
\tbackground-color:#eee;
\tborder:2px solid #009be3;
\tcolor:#000;
\tdisplay:none;
}

.jp-no-solution a {
\tcolor:#000;
}

.jp-no-solution span {
\tfont-size:1em;
\tdisplay:block;
\ttext-align:center;
\tfont-weight:bold;
}

/* @end */
", "@MwebAdmin/filemanager/js/jPlayer/skin/blue.monday/jplayer.blue.monday.css", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/skin/blue.monday/jplayer.blue.monday.css");
    }
}
