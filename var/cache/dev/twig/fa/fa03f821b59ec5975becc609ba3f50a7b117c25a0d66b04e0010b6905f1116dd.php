<?php

/* @MwebAdmin/filemanager/js/jPlayer/skin/blue.monday/css/jplayer.blue.monday.css */
class __TwigTemplate_c6985ed89483cf714c460cc997c4a33e5fcde8445ac368781b65e461ac1c450d extends Twig_Template
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
        $__internal_7ca11c9aedb5a0876d7720c1b7c38278239a72c2fe714904c38e90c1ff31ba8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca11c9aedb5a0876d7720c1b7c38278239a72c2fe714904c38e90c1ff31ba8c->enter($__internal_7ca11c9aedb5a0876d7720c1b7c38278239a72c2fe714904c38e90c1ff31ba8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/skin/blue.monday/css/jplayer.blue.monday.css"));

        // line 1
        echo "/*! Blue Monday Skin for jPlayer 2.9.2 ~ (c) 2009-2014 Happyworm Ltd ~ MIT License */

/*
 * Skin for jPlayer Plugin (jQuery JavaScript Library)
 * http://www.jplayer.org
 *
 * Skin Name: Blue Monday
 *
 * Copyright (c) 2010 - 2014 Happyworm Ltd
 * Licensed under the MIT license.
 *  - http://www.opensource.org/licenses/mit-license.php
 *
 * Author: Silvia Benvenuti
 * Skin Version: 5.1 (jPlayer 2.8.0)
 * Date: 13th November 2014
 */
.jp-audio *:focus,
.jp-audio-stream *:focus,
.jp-video *:focus {
  /* Disable the browser focus highlighting. */
  outline: none; }

.jp-audio button::-moz-focus-inner,
.jp-audio-stream button::-moz-focus-inner,
.jp-video button::-moz-focus-inner {
  /* Disable the browser CSS3 focus highlighting. */
  border: 0; }

.jp-audio,
.jp-audio-stream,
.jp-video {
  font-size: 16px;
  font-family: Verdana, Arial, sans-serif;
  line-height: 1.6;
  color: #666;
  border: 1px solid #009be3;
  background-color: #eee; }

.jp-audio {
  width: 420px; }

.jp-audio-stream {
  width: 182px; }

.jp-video-270p {
  width: 480px; }

.jp-video-360p {
  width: 640px; }

.jp-video-full {
  /* Rules for IE6 (full-screen) */
  width: 480px;
  height: 270px;
  /* Rules for IE7 (full-screen) - Otherwise the relative container causes other page items that are not position:static (default) to appear over the video/gui. */
  position: static !important;
  position: relative; }

/* The z-index rule is defined in this manner to enable Popcorn plugins that add overlays to video area. EG. Subtitles. */
.jp-video-full div div {
  z-index: 1000; }

.jp-video-full .jp-jplayer {
  top: 0;
  left: 0;
  position: fixed !important;
  position: relative;
  /* Rules for IE6 (full-screen) */
  overflow: hidden; }

.jp-video-full .jp-gui {
  position: fixed !important;
  position: static;
  /* Rules for IE6 (full-screen) */
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1001;
  /* 1 layer above the others. */ }

.jp-video-full .jp-interface {
  position: absolute !important;
  position: relative;
  /* Rules for IE6 (full-screen) */
  bottom: 0;
  left: 0; }

.jp-interface {
  position: relative;
  background-color: #eee;
  width: 100%; }

.jp-audio .jp-interface {
  height: 80px; }

.jp-audio-stream .jp-interface {
  height: 80px; }

.jp-video .jp-interface {
  border-top: 1px solid #009be3; }

/* @group CONTROLS */
.jp-controls-holder {
  clear: both;
  width: 440px;
  margin: 0 auto;
  position: relative;
  overflow: hidden;
  top: -8px;
  /* This negative value depends on the size of the text in jp-currentTime and jp-duration */ }

.jp-interface .jp-controls {
  margin: 0;
  padding: 0;
  overflow: hidden; }

.jp-audio .jp-controls {
  width: 380px;
  padding: 20px 20px 0 20px; }

.jp-audio-stream .jp-controls {
  position: absolute;
  top: 20px;
  left: 20px;
  width: 142px; }

.jp-video .jp-type-single .jp-controls {
  width: 78px;
  margin-left: 200px; }

.jp-video .jp-type-playlist .jp-controls {
  width: 134px;
  margin-left: 172px; }

.jp-video .jp-controls {
  float: left; }

.jp-controls button {
  display: block;
  float: left;
  overflow: hidden;
  text-indent: -9999px;
  border: none;
  cursor: pointer; }

.jp-play {
  width: 40px;
  height: 40px; }

.jp-play {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 0 no-repeat; }

.jp-play:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -41px 0 no-repeat; }

.jp-state-playing .jp-play {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -42px no-repeat; }

.jp-state-playing .jp-play:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -41px -42px no-repeat; }

.jp-stop, .jp-previous, .jp-next {
  width: 28px;
  height: 28px;
  margin-top: 6px; }

.jp-stop {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -83px no-repeat;
  margin-left: 10px; }

.jp-stop:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -29px -83px no-repeat; }

.jp-previous {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -112px no-repeat; }

.jp-previous:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -29px -112px no-repeat; }

.jp-next {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -141px no-repeat; }

.jp-next:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -29px -141px no-repeat; }

/* @end */
/* @group progress bar */
.jp-progress {
  overflow: hidden;
  background-color: #ddd; }

.jp-audio .jp-progress {
  position: absolute;
  top: 32px;
  height: 15px; }

.jp-audio .jp-type-single .jp-progress {
  left: 110px;
  width: 186px; }

.jp-audio .jp-type-playlist .jp-progress {
  left: 166px;
  width: 130px; }

.jp-video .jp-progress {
  top: 0px;
  left: 0px;
  width: 100%;
  height: 10px; }

.jp-seek-bar {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -202px repeat-x;
  width: 0px;
  height: 100%;
  cursor: pointer; }

.jp-play-bar {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -218px repeat-x;
  width: 0px;
  height: 100%; }

/* The seeking class is added/removed inside jPlayer */
.jp-seeking-bg {
  background: url(\"../image/jplayer.blue.monday.seeking.gif\"); }

/* @end */
/* @group volume controls */
.jp-state-no-volume .jp-volume-controls {
  display: none; }

.jp-volume-controls {
  position: absolute;
  top: 32px;
  left: 308px;
  width: 200px; }

.jp-audio-stream .jp-volume-controls {
  left: 70px; }

.jp-video .jp-volume-controls {
  top: 12px;
  left: 50px; }

.jp-volume-controls button {
  display: block;
  position: absolute;
  overflow: hidden;
  text-indent: -9999px;
  border: none;
  cursor: pointer; }

.jp-mute,
.jp-volume-max {
  width: 18px;
  height: 15px; }

.jp-volume-max {
  left: 74px; }

.jp-mute {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -170px no-repeat; }

.jp-mute:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -19px -170px no-repeat; }

.jp-state-muted .jp-mute {
  background: url(\"../image/jplayer.blue.monday.jpg\") -60px -170px no-repeat; }

.jp-state-muted .jp-mute:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -79px -170px no-repeat; }

.jp-volume-max {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -186px no-repeat; }

.jp-volume-max:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -19px -186px no-repeat; }

.jp-volume-bar {
  position: absolute;
  overflow: hidden;
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -250px repeat-x;
  top: 5px;
  left: 22px;
  width: 46px;
  height: 5px;
  cursor: pointer; }

.jp-volume-bar-value {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -256px repeat-x;
  width: 0px;
  height: 5px; }

/* @end */
/* @group current time and duration */
.jp-audio .jp-time-holder {
  position: absolute;
  top: 50px; }

.jp-audio .jp-type-single .jp-time-holder {
  left: 110px;
  width: 186px; }

.jp-audio .jp-type-playlist .jp-time-holder {
  left: 166px;
  width: 130px; }

.jp-current-time,
.jp-duration {
  width: 60px;
  font-size: .64em;
  font-style: oblique; }

.jp-current-time {
  float: left;
  display: inline;
  cursor: default; }

.jp-duration {
  float: right;
  display: inline;
  text-align: right;
  cursor: pointer; }

.jp-video .jp-current-time {
  margin-left: 20px; }

.jp-video .jp-duration {
  margin-right: 20px; }

/* @end */
/* @group playlist */
.jp-details {
  font-weight: bold;
  text-align: center;
  cursor: default; }

.jp-details,
.jp-playlist {
  width: 100%;
  background-color: #ccc;
  border-top: 1px solid #009be3; }

.jp-type-single .jp-details,
.jp-type-playlist .jp-details {
  border-top: none; }

.jp-details .jp-title {
  margin: 0;
  padding: 5px 20px;
  font-size: .72em;
  font-weight: bold; }

.jp-playlist ul {
  list-style-type: none;
  margin: 0;
  padding: 0 20px;
  font-size: .72em; }

.jp-playlist li {
  padding: 5px 0 4px 20px;
  border-bottom: 1px solid #eee; }

.jp-playlist li div {
  display: inline; }

/* Note that the first-child (IE6) and last-child (IE6/7/8) selectors do not work on IE */
div.jp-type-playlist div.jp-playlist li:last-child {
  padding: 5px 0 5px 20px;
  border-bottom: none; }

div.jp-type-playlist div.jp-playlist li.jp-playlist-current {
  list-style-type: square;
  list-style-position: inside;
  padding-left: 7px; }

div.jp-type-playlist div.jp-playlist a {
  color: #333;
  text-decoration: none; }

div.jp-type-playlist div.jp-playlist a:hover {
  color: #0d88c1; }

div.jp-type-playlist div.jp-playlist a.jp-playlist-current {
  color: #0d88c1; }

div.jp-type-playlist div.jp-playlist a.jp-playlist-item-remove {
  float: right;
  display: inline;
  text-align: right;
  margin-right: 10px;
  font-weight: bold;
  color: #666; }

div.jp-type-playlist div.jp-playlist a.jp-playlist-item-remove:hover {
  color: #0d88c1; }

div.jp-type-playlist div.jp-playlist span.jp-free-media {
  float: right;
  display: inline;
  text-align: right;
  margin-right: 10px; }

div.jp-type-playlist div.jp-playlist span.jp-free-media a {
  color: #666; }

div.jp-type-playlist div.jp-playlist span.jp-free-media a:hover {
  color: #0d88c1; }

span.jp-artist {
  font-size: .8em;
  color: #666; }

/* @end */
.jp-video-play {
  width: 100%;
  overflow: hidden;
  /* Important for nested negative margins to work in modern browsers */
  cursor: pointer;
  background-color: transparent;
  /* Makes IE9 work with the active area over the whole video area. IE6/7/8 only have the button as active area. */ }

.jp-video-270p .jp-video-play {
  margin-top: -270px;
  height: 270px; }

.jp-video-360p .jp-video-play {
  margin-top: -360px;
  height: 360px; }

.jp-video-full .jp-video-play {
  height: 100%; }

.jp-video-play-icon {
  position: relative;
  display: block;
  width: 112px;
  height: 100px;
  margin-left: -56px;
  margin-top: -50px;
  left: 50%;
  top: 50%;
  background: url(\"../image/jplayer.blue.monday.video.play.png\") 0 0 no-repeat;
  text-indent: -9999px;
  border: none;
  cursor: pointer; }

.jp-video-play-icon:focus {
  background: url(\"../image/jplayer.blue.monday.video.play.png\") 0 -100px no-repeat; }

.jp-jplayer audio,
.jp-jplayer {
  width: 0px;
  height: 0px; }

.jp-jplayer {
  background-color: #000000; }

/* @group TOGGLES */
/* The audio toggles are nested inside jp-time-holder */
.jp-toggles {
  padding: 0;
  margin: 0 auto;
  overflow: hidden; }

.jp-audio .jp-type-single .jp-toggles {
  width: 25px; }

.jp-audio .jp-type-playlist .jp-toggles {
  width: 55px;
  margin: 0;
  position: absolute;
  left: 325px;
  top: 50px; }

.jp-video .jp-toggles {
  position: absolute;
  right: 16px;
  margin: 0;
  margin-top: 10px;
  width: 100px; }

.jp-toggles button {
  display: block;
  float: left;
  width: 25px;
  height: 18px;
  text-indent: -9999px;
  line-height: 100%;
  /* need this for IE6 */
  border: none;
  cursor: pointer; }

.jp-full-screen {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -310px no-repeat;
  margin-left: 20px; }

.jp-full-screen:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -30px -310px no-repeat; }

.jp-state-full-screen .jp-full-screen {
  background: url(\"../image/jplayer.blue.monday.jpg\") -60px -310px no-repeat; }

.jp-state-full-screen .jp-full-screen:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -90px -310px no-repeat; }

.jp-repeat {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -290px no-repeat; }

.jp-repeat:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -30px -290px no-repeat; }

.jp-state-looped .jp-repeat {
  background: url(\"../image/jplayer.blue.monday.jpg\") -60px -290px no-repeat; }

.jp-state-looped .jp-repeat:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -90px -290px no-repeat; }

.jp-shuffle {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -270px no-repeat;
  margin-left: 5px; }

.jp-shuffle:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -30px -270px no-repeat; }

.jp-state-shuffled .jp-shuffle {
  background: url(\"../image/jplayer.blue.monday.jpg\") -60px -270px no-repeat; }

.jp-state-shuffled .jp-shuffle:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -90px -270px no-repeat; }

/* @end */
/* @group NO SOLUTION error feedback */
.jp-no-solution {
  padding: 5px;
  font-size: .8em;
  background-color: #eee;
  border: 2px solid #009be3;
  color: #000;
  display: none; }

.jp-no-solution a {
  color: #000; }

.jp-no-solution span {
  font-size: 1em;
  display: block;
  text-align: center;
  font-weight: bold; }

/* @end */
";
        
        $__internal_7ca11c9aedb5a0876d7720c1b7c38278239a72c2fe714904c38e90c1ff31ba8c->leave($__internal_7ca11c9aedb5a0876d7720c1b7c38278239a72c2fe714904c38e90c1ff31ba8c_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/skin/blue.monday/css/jplayer.blue.monday.css";
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
        return new Twig_Source("/*! Blue Monday Skin for jPlayer 2.9.2 ~ (c) 2009-2014 Happyworm Ltd ~ MIT License */

/*
 * Skin for jPlayer Plugin (jQuery JavaScript Library)
 * http://www.jplayer.org
 *
 * Skin Name: Blue Monday
 *
 * Copyright (c) 2010 - 2014 Happyworm Ltd
 * Licensed under the MIT license.
 *  - http://www.opensource.org/licenses/mit-license.php
 *
 * Author: Silvia Benvenuti
 * Skin Version: 5.1 (jPlayer 2.8.0)
 * Date: 13th November 2014
 */
.jp-audio *:focus,
.jp-audio-stream *:focus,
.jp-video *:focus {
  /* Disable the browser focus highlighting. */
  outline: none; }

.jp-audio button::-moz-focus-inner,
.jp-audio-stream button::-moz-focus-inner,
.jp-video button::-moz-focus-inner {
  /* Disable the browser CSS3 focus highlighting. */
  border: 0; }

.jp-audio,
.jp-audio-stream,
.jp-video {
  font-size: 16px;
  font-family: Verdana, Arial, sans-serif;
  line-height: 1.6;
  color: #666;
  border: 1px solid #009be3;
  background-color: #eee; }

.jp-audio {
  width: 420px; }

.jp-audio-stream {
  width: 182px; }

.jp-video-270p {
  width: 480px; }

.jp-video-360p {
  width: 640px; }

.jp-video-full {
  /* Rules for IE6 (full-screen) */
  width: 480px;
  height: 270px;
  /* Rules for IE7 (full-screen) - Otherwise the relative container causes other page items that are not position:static (default) to appear over the video/gui. */
  position: static !important;
  position: relative; }

/* The z-index rule is defined in this manner to enable Popcorn plugins that add overlays to video area. EG. Subtitles. */
.jp-video-full div div {
  z-index: 1000; }

.jp-video-full .jp-jplayer {
  top: 0;
  left: 0;
  position: fixed !important;
  position: relative;
  /* Rules for IE6 (full-screen) */
  overflow: hidden; }

.jp-video-full .jp-gui {
  position: fixed !important;
  position: static;
  /* Rules for IE6 (full-screen) */
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1001;
  /* 1 layer above the others. */ }

.jp-video-full .jp-interface {
  position: absolute !important;
  position: relative;
  /* Rules for IE6 (full-screen) */
  bottom: 0;
  left: 0; }

.jp-interface {
  position: relative;
  background-color: #eee;
  width: 100%; }

.jp-audio .jp-interface {
  height: 80px; }

.jp-audio-stream .jp-interface {
  height: 80px; }

.jp-video .jp-interface {
  border-top: 1px solid #009be3; }

/* @group CONTROLS */
.jp-controls-holder {
  clear: both;
  width: 440px;
  margin: 0 auto;
  position: relative;
  overflow: hidden;
  top: -8px;
  /* This negative value depends on the size of the text in jp-currentTime and jp-duration */ }

.jp-interface .jp-controls {
  margin: 0;
  padding: 0;
  overflow: hidden; }

.jp-audio .jp-controls {
  width: 380px;
  padding: 20px 20px 0 20px; }

.jp-audio-stream .jp-controls {
  position: absolute;
  top: 20px;
  left: 20px;
  width: 142px; }

.jp-video .jp-type-single .jp-controls {
  width: 78px;
  margin-left: 200px; }

.jp-video .jp-type-playlist .jp-controls {
  width: 134px;
  margin-left: 172px; }

.jp-video .jp-controls {
  float: left; }

.jp-controls button {
  display: block;
  float: left;
  overflow: hidden;
  text-indent: -9999px;
  border: none;
  cursor: pointer; }

.jp-play {
  width: 40px;
  height: 40px; }

.jp-play {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 0 no-repeat; }

.jp-play:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -41px 0 no-repeat; }

.jp-state-playing .jp-play {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -42px no-repeat; }

.jp-state-playing .jp-play:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -41px -42px no-repeat; }

.jp-stop, .jp-previous, .jp-next {
  width: 28px;
  height: 28px;
  margin-top: 6px; }

.jp-stop {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -83px no-repeat;
  margin-left: 10px; }

.jp-stop:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -29px -83px no-repeat; }

.jp-previous {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -112px no-repeat; }

.jp-previous:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -29px -112px no-repeat; }

.jp-next {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -141px no-repeat; }

.jp-next:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -29px -141px no-repeat; }

/* @end */
/* @group progress bar */
.jp-progress {
  overflow: hidden;
  background-color: #ddd; }

.jp-audio .jp-progress {
  position: absolute;
  top: 32px;
  height: 15px; }

.jp-audio .jp-type-single .jp-progress {
  left: 110px;
  width: 186px; }

.jp-audio .jp-type-playlist .jp-progress {
  left: 166px;
  width: 130px; }

.jp-video .jp-progress {
  top: 0px;
  left: 0px;
  width: 100%;
  height: 10px; }

.jp-seek-bar {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -202px repeat-x;
  width: 0px;
  height: 100%;
  cursor: pointer; }

.jp-play-bar {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -218px repeat-x;
  width: 0px;
  height: 100%; }

/* The seeking class is added/removed inside jPlayer */
.jp-seeking-bg {
  background: url(\"../image/jplayer.blue.monday.seeking.gif\"); }

/* @end */
/* @group volume controls */
.jp-state-no-volume .jp-volume-controls {
  display: none; }

.jp-volume-controls {
  position: absolute;
  top: 32px;
  left: 308px;
  width: 200px; }

.jp-audio-stream .jp-volume-controls {
  left: 70px; }

.jp-video .jp-volume-controls {
  top: 12px;
  left: 50px; }

.jp-volume-controls button {
  display: block;
  position: absolute;
  overflow: hidden;
  text-indent: -9999px;
  border: none;
  cursor: pointer; }

.jp-mute,
.jp-volume-max {
  width: 18px;
  height: 15px; }

.jp-volume-max {
  left: 74px; }

.jp-mute {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -170px no-repeat; }

.jp-mute:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -19px -170px no-repeat; }

.jp-state-muted .jp-mute {
  background: url(\"../image/jplayer.blue.monday.jpg\") -60px -170px no-repeat; }

.jp-state-muted .jp-mute:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -79px -170px no-repeat; }

.jp-volume-max {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -186px no-repeat; }

.jp-volume-max:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -19px -186px no-repeat; }

.jp-volume-bar {
  position: absolute;
  overflow: hidden;
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -250px repeat-x;
  top: 5px;
  left: 22px;
  width: 46px;
  height: 5px;
  cursor: pointer; }

.jp-volume-bar-value {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -256px repeat-x;
  width: 0px;
  height: 5px; }

/* @end */
/* @group current time and duration */
.jp-audio .jp-time-holder {
  position: absolute;
  top: 50px; }

.jp-audio .jp-type-single .jp-time-holder {
  left: 110px;
  width: 186px; }

.jp-audio .jp-type-playlist .jp-time-holder {
  left: 166px;
  width: 130px; }

.jp-current-time,
.jp-duration {
  width: 60px;
  font-size: .64em;
  font-style: oblique; }

.jp-current-time {
  float: left;
  display: inline;
  cursor: default; }

.jp-duration {
  float: right;
  display: inline;
  text-align: right;
  cursor: pointer; }

.jp-video .jp-current-time {
  margin-left: 20px; }

.jp-video .jp-duration {
  margin-right: 20px; }

/* @end */
/* @group playlist */
.jp-details {
  font-weight: bold;
  text-align: center;
  cursor: default; }

.jp-details,
.jp-playlist {
  width: 100%;
  background-color: #ccc;
  border-top: 1px solid #009be3; }

.jp-type-single .jp-details,
.jp-type-playlist .jp-details {
  border-top: none; }

.jp-details .jp-title {
  margin: 0;
  padding: 5px 20px;
  font-size: .72em;
  font-weight: bold; }

.jp-playlist ul {
  list-style-type: none;
  margin: 0;
  padding: 0 20px;
  font-size: .72em; }

.jp-playlist li {
  padding: 5px 0 4px 20px;
  border-bottom: 1px solid #eee; }

.jp-playlist li div {
  display: inline; }

/* Note that the first-child (IE6) and last-child (IE6/7/8) selectors do not work on IE */
div.jp-type-playlist div.jp-playlist li:last-child {
  padding: 5px 0 5px 20px;
  border-bottom: none; }

div.jp-type-playlist div.jp-playlist li.jp-playlist-current {
  list-style-type: square;
  list-style-position: inside;
  padding-left: 7px; }

div.jp-type-playlist div.jp-playlist a {
  color: #333;
  text-decoration: none; }

div.jp-type-playlist div.jp-playlist a:hover {
  color: #0d88c1; }

div.jp-type-playlist div.jp-playlist a.jp-playlist-current {
  color: #0d88c1; }

div.jp-type-playlist div.jp-playlist a.jp-playlist-item-remove {
  float: right;
  display: inline;
  text-align: right;
  margin-right: 10px;
  font-weight: bold;
  color: #666; }

div.jp-type-playlist div.jp-playlist a.jp-playlist-item-remove:hover {
  color: #0d88c1; }

div.jp-type-playlist div.jp-playlist span.jp-free-media {
  float: right;
  display: inline;
  text-align: right;
  margin-right: 10px; }

div.jp-type-playlist div.jp-playlist span.jp-free-media a {
  color: #666; }

div.jp-type-playlist div.jp-playlist span.jp-free-media a:hover {
  color: #0d88c1; }

span.jp-artist {
  font-size: .8em;
  color: #666; }

/* @end */
.jp-video-play {
  width: 100%;
  overflow: hidden;
  /* Important for nested negative margins to work in modern browsers */
  cursor: pointer;
  background-color: transparent;
  /* Makes IE9 work with the active area over the whole video area. IE6/7/8 only have the button as active area. */ }

.jp-video-270p .jp-video-play {
  margin-top: -270px;
  height: 270px; }

.jp-video-360p .jp-video-play {
  margin-top: -360px;
  height: 360px; }

.jp-video-full .jp-video-play {
  height: 100%; }

.jp-video-play-icon {
  position: relative;
  display: block;
  width: 112px;
  height: 100px;
  margin-left: -56px;
  margin-top: -50px;
  left: 50%;
  top: 50%;
  background: url(\"../image/jplayer.blue.monday.video.play.png\") 0 0 no-repeat;
  text-indent: -9999px;
  border: none;
  cursor: pointer; }

.jp-video-play-icon:focus {
  background: url(\"../image/jplayer.blue.monday.video.play.png\") 0 -100px no-repeat; }

.jp-jplayer audio,
.jp-jplayer {
  width: 0px;
  height: 0px; }

.jp-jplayer {
  background-color: #000000; }

/* @group TOGGLES */
/* The audio toggles are nested inside jp-time-holder */
.jp-toggles {
  padding: 0;
  margin: 0 auto;
  overflow: hidden; }

.jp-audio .jp-type-single .jp-toggles {
  width: 25px; }

.jp-audio .jp-type-playlist .jp-toggles {
  width: 55px;
  margin: 0;
  position: absolute;
  left: 325px;
  top: 50px; }

.jp-video .jp-toggles {
  position: absolute;
  right: 16px;
  margin: 0;
  margin-top: 10px;
  width: 100px; }

.jp-toggles button {
  display: block;
  float: left;
  width: 25px;
  height: 18px;
  text-indent: -9999px;
  line-height: 100%;
  /* need this for IE6 */
  border: none;
  cursor: pointer; }

.jp-full-screen {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -310px no-repeat;
  margin-left: 20px; }

.jp-full-screen:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -30px -310px no-repeat; }

.jp-state-full-screen .jp-full-screen {
  background: url(\"../image/jplayer.blue.monday.jpg\") -60px -310px no-repeat; }

.jp-state-full-screen .jp-full-screen:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -90px -310px no-repeat; }

.jp-repeat {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -290px no-repeat; }

.jp-repeat:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -30px -290px no-repeat; }

.jp-state-looped .jp-repeat {
  background: url(\"../image/jplayer.blue.monday.jpg\") -60px -290px no-repeat; }

.jp-state-looped .jp-repeat:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -90px -290px no-repeat; }

.jp-shuffle {
  background: url(\"../image/jplayer.blue.monday.jpg\") 0 -270px no-repeat;
  margin-left: 5px; }

.jp-shuffle:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -30px -270px no-repeat; }

.jp-state-shuffled .jp-shuffle {
  background: url(\"../image/jplayer.blue.monday.jpg\") -60px -270px no-repeat; }

.jp-state-shuffled .jp-shuffle:focus {
  background: url(\"../image/jplayer.blue.monday.jpg\") -90px -270px no-repeat; }

/* @end */
/* @group NO SOLUTION error feedback */
.jp-no-solution {
  padding: 5px;
  font-size: .8em;
  background-color: #eee;
  border: 2px solid #009be3;
  color: #000;
  display: none; }

.jp-no-solution a {
  color: #000; }

.jp-no-solution span {
  font-size: 1em;
  display: block;
  text-align: center;
  font-weight: bold; }

/* @end */
", "@MwebAdmin/filemanager/js/jPlayer/skin/blue.monday/css/jplayer.blue.monday.css", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/skin/blue.monday/css/jplayer.blue.monday.css");
    }
}
