<?php

/* @MwebAdmin/filemanager/js/jPlayer/skin/pink.flag/css/jplayer.pink.flag.css */
class __TwigTemplate_2ee5c381d4294f5ed85db85f0b92259f53d4bf171336a4f658a2558f55aa84a2 extends Twig_Template
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
        $__internal_962c5a37da41e0cec044c8a705f7f32295ae2e41eda81858148aa38a9e01b0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962c5a37da41e0cec044c8a705f7f32295ae2e41eda81858148aa38a9e01b0d0->enter($__internal_962c5a37da41e0cec044c8a705f7f32295ae2e41eda81858148aa38a9e01b0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/skin/pink.flag/css/jplayer.pink.flag.css"));

        // line 1
        echo "/*! Pink Flag Skin for jPlayer 2.9.2 ~ (c) 2009-2014 Happyworm Ltd ~ MIT License */

/*
 * Skin for jPlayer Plugin (jQuery JavaScript Library)
 * http://www.jplayer.org
 *
 * Skin Name: Pink Flag
 *
 * Copyright (c) 2012 - 2014 Happyworm Ltd
 * Licensed under the MIT license.
 *  - http://www.opensource.org/licenses/mit-license.php
 *
 * Author: Silvia Benvenuti
 * Skin Version: 2.1 (jPlayer 2.8.0)
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
  color: #fff;
  border-top: 1px solid #554461;
  border-left: 1px solid #554461;
  border-right: 1px solid #180a1f;
  border-bottom: 1px solid #180a1f;
  background-color: #3a2a45; }

.jp-audio {
  width: 201px;
  padding: 20px; }

.jp-audio-stream {
  width: 101px;
  padding: 20px 20px 10px 20px; }

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
  width: 100%;
  background-color: #3a2a45;
  /* Required for the full screen */ }

/* @group CONTROLS */
.jp-video .jp-controls-holder {
  clear: both;
  width: 440px;
  margin: 0 auto 10px auto;
  position: relative;
  overflow: hidden; }

.jp-audio .jp-controls-holder {
  height: 80px; }

.jp-audio-stream .jp-controls-holder {
  height: 50px; }

.jp-controls {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0 0 no-repeat;
  padding: 1px 0 2px 1px;
  overflow: hidden;
  width: 201px;
  height: 34px; }

.jp-audio .jp-controls,
.jp-audio-stream .jp-controls {
  margin: 0 auto; }

.jp-audio-stream .jp-controls {
  width: 100px; }

.jp-video .jp-controls {
  margin: 0 0 0 115px;
  float: left;
  display: inline;
  /* need this to fix IE6 double margin */ }

.jp-controls button {
  display: block;
  float: left;
  overflow: hidden;
  text-indent: -9999px;
  height: 34px;
  margin: 0 1px 2px 0;
  padding: 0;
  border: none;
  cursor: pointer; }

/* @group single player controls */
.jp-type-single .jp-controls button {
  width: 99px; }

.jp-type-single .jp-play {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -40px no-repeat; }

.jp-type-single .jp-play:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -100px -40px no-repeat; }

.jp-state-playing .jp-type-single .jp-play {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -120px no-repeat; }

.jp-state-playing .jp-type-single .jp-play:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -100px -120px no-repeat; }

/* The right border is normally in the ul background image. */
.jp-audio-stream .jp-play,
.jp-audio-stream .jp-pause {
  border-right: 1px solid #180920; }

.jp-type-single .jp-stop {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -80px no-repeat; }

.jp-type-single .jp-stop:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -100px -80px no-repeat; }

/* @end */
/* @group playlist player controls */
.jp-type-playlist .jp-controls button {
  width: 49px; }

.jp-type-playlist .jp-play {
  background: url(\"../image/jplayer.pink.flag.jpg\") -24px -40px no-repeat; }

.jp-type-playlist .jp-play:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -124px -40px no-repeat; }

.jp-state-playing div.jp-type-playlist .jp-play {
  background: url(\"../image/jplayer.pink.flag.jpg\") -24px -120px no-repeat; }

.jp-state-playing div.jp-type-playlist .jp-play:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -124px -120px no-repeat; }

.jp-type-playlist .jp-stop {
  background: url(\"../image/jplayer.pink.flag.jpg\") -24px -80px no-repeat; }

.jp-type-playlist .jp-stop:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -124px -80px no-repeat; }

.jp-type-playlist .jp-previous {
  background: url(\"../image/jplayer.pink.flag.jpg\") -24px -200px no-repeat; }

.jp-type-playlist .jp-previous:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -124px -200px no-repeat; }

.jp-type-playlist .jp-next {
  background: url(\"../image/jplayer.pink.flag.jpg\") -24px -160px no-repeat; }

.jp-type-playlist .jp-next:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -124px -160px no-repeat; }

/* @end */
/* @group TOGGLES */
.jp-toggles {
  padding: 0;
  margin: 0 auto;
  overflow: hidden; }

.jp-audio .jp-toggles {
  width: 55px; }

.jp-audio .jp-type-single .jp-toggles {
  width: 25px; }

.jp-video .jp-toggles {
  float: left;
  width: 105px;
  margin: 10px 0 0 15px; }

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
  background: url(\"../image/jplayer.pink.flag.jpg\") 0 -420px no-repeat;
  margin-left: 15px; }

.jp-full-screen:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -30px -420px no-repeat; }

.jp-state-full-screen .jp-full-screen {
  background: url(\"../image/jplayer.pink.flag.jpg\") -60px -420px no-repeat; }

.jp-state-full-screen .jp-full-screen:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -90px -420px no-repeat; }

.jp-repeat {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0 -440px no-repeat;
  margin-left: 0; }

.jp-repeat:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -30px -440px no-repeat; }

.jp-state-looped .jp-repeat {
  background: url(\"../image/jplayer.pink.flag.jpg\") -60px -440px no-repeat; }

.jp-state-looped .jp-repeat:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -90px -440px no-repeat; }

.jp-shuffle {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0 -460px no-repeat;
  margin-left: 15px; }

.jp-shuffle:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -30px -460px no-repeat; }

.jp-state-shuffled .jp-shuffle {
  background: url(\"../image/jplayer.pink.flag.jpg\") -60px -460px no-repeat; }

.jp-state-shuffled .jp-shuffle:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -90px -460px no-repeat; }

.jp-audio .jp-shuffle {
  margin-left: 5px; }

/* @end */
/* @group progress bar */
/* The seeking class is added/removed inside jPlayer */
div.jp-seeking-bg {
  background: url(\"../image/jplayer.pink.flag.seeking.gif\"); }

.jp-progress {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -240px no-repeat;
  width: 197px;
  height: 13px;
  padding: 0 2px 2px 2px;
  margin-bottom: 4px;
  overflow: hidden; }

div.jp-video .jp-progress {
  border-top: 1px solid #180a1f;
  border-bottom: 1px solid #554560;
  width: 100%;
  background-image: none;
  padding: 0; }

.jp-seek-bar {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -260px repeat-x;
  width: 0px;
  height: 100%;
  overflow: hidden;
  cursor: pointer; }

.jp-play-bar {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -280px repeat-x;
  width: 0px;
  height: 100%;
  overflow: hidden; }

/* @end */
/* @group volume controls */
.jp-state-no-volume .jp-volume-controls {
  display: none; }

.jp-audio .jp-volume-controls,
.jp-audio-stream .jp-volume-controls {
  height: 30px; }

.jp-volume-controls button {
  position: absolute;
  display: block;
  overflow: hidden;
  text-indent: -9999px;
  margin: 0;
  padding: 0;
  width: 16px;
  height: 11px;
  border: none;
  cursor: pointer; }

.jp-audio .jp-volume-controls .jp-mute,
.jp-audio-stream .jp-volume-controls .jp-mute {
  top: -6px;
  left: 0; }

.jp-audio .jp-volume-controls .jp-volume-max,
.jp-audio-stream .jp-volume-controls .jp-volume-max {
  top: -6px;
  right: 0; }

.jp-video .jp-volume-controls .jp-mute,
.jp-video .jp-volume-controls .jp-unmute {
  left: 0;
  top: 14px; }

.jp-video .jp-volume-controls .jp-volume-max {
  left: 84px;
  top: 14px; }

.jp-volume-controls .jp-mute {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -330px no-repeat; }

.jp-volume-controls .jp-mute:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -25px -330px no-repeat; }

.jp-state-muted .jp-volume-controls .jp-mute {
  background: url(\"../image/jplayer.pink.flag.jpg\") -60px -330px no-repeat; }

.jp-state-muted .jp-volume-controls .jp-mute:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -85px -330px no-repeat; }

.jp-volume-controls .jp-volume-max {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -350px no-repeat; }

.jp-volume-controls .jp-volume-max:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -25px -350px no-repeat; }

.jp-volume-bar {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -300px repeat-x;
  position: absolute;
  width: 197px;
  height: 4px;
  padding: 2px 2px 1px 2px;
  overflow: hidden;
  cursor: pointer; }

.jp-audio .jp-interface .jp-volume-bar,
.jp-audio-stream .jp-interface .jp-volume-bar {
  top: 10px;
  left: 0; }

.jp-audio-stream .jp-interface .jp-volume-bar {
  width: 97px;
  border-right: 1px solid #180920;
  padding-right: 1px; }

.jp-video .jp-volume-bar {
  top: 0;
  left: 0;
  width: 95px;
  border-right: 1px solid #180920;
  padding-right: 1px;
  margin-top: 30px; }

.jp-volume-bar-value {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -320px repeat-x;
  height: 4px; }

/* @end */
/* @group current time and duration */
.jp-current-time, .jp-duration {
  width: 70px;
  font-size: .5em;
  color: #8c7a99; }

.jp-current-time {
  float: left;
  cursor: default; }

.jp-duration {
  float: right;
  text-align: right;
  cursor: pointer; }

.jp-video .jp-current-time {
  padding-left: 20px; }

.jp-video .jp-duration {
  padding-right: 20px; }

/* @end */
/* @group playlist */
.jp-details {
  font-size: .7em;
  margin: 0;
  padding: 0; }

.jp-details .jp-title {
  padding: 0;
  margin: 0;
  overflow: hidden;
  text-align: center;
  cursor: default; }

.jp-video .jp-details {
  margin: 0 90px 10px; }

.jp-playlist ul {
  list-style-type: none;
  font-size: .7em;
  margin: 0;
  padding: 0; }

.jp-video .jp-playlist ul {
  margin: 0 20px; }

.jp-playlist li {
  position: relative;
  padding: 2px 0;
  border-top: 1px solid #554461;
  border-bottom: 1px solid #180a1f;
  overflow: hidden; }

/* Note that the first-child (IE6) and last-child (IE6/7/8) selectors do not work on IE */
div.jp-type-playlist div.jp-playlist li:first-child {
  border-top: none;
  padding-top: 3px; }

div.jp-type-playlist div.jp-playlist li:last-child {
  border-bottom: none;
  padding-bottom: 3px; }

div.jp-type-playlist div.jp-playlist a {
  color: #fff;
  text-decoration: none; }

div.jp-type-playlist div.jp-playlist a:hover {
  color: #e892e9; }

div.jp-type-playlist div.jp-playlist li.jp-playlist-current {
  background-color: #26102e;
  margin: 0 -20px;
  padding: 2px 20px;
  border-top: 1px solid #26102e;
  border-bottom: 1px solid #26102e; }

div.jp-type-playlist div.jp-playlist li.jp-playlist-current a {
  color: #e892e9; }

div.jp-type-playlist div.jp-playlist a.jp-playlist-item-remove {
  float: right;
  display: inline;
  text-align: right;
  margin-left: 10px;
  font-weight: bold;
  color: #8C7A99; }

div.jp-type-playlist div.jp-playlist a.jp-playlist-item-remove:hover {
  color: #E892E9; }

div.jp-type-playlist div.jp-playlist span.jp-free-media {
  float: right;
  display: inline;
  text-align: right;
  color: #8C7A99; }

div.jp-type-playlist div.jp-playlist span.jp-free-media a {
  color: #8C7A99; }

div.jp-type-playlist div.jp-playlist span.jp-free-media a:hover {
  color: #E892E9; }

span.jp-artist {
  font-size: .8em;
  color: #8C7A99; }

/* @end */
.jp-video .jp-video-play {
  width: 100%;
  overflow: hidden;
  /* Important for nested negative margins to work in modern browsers */ }

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
  border: none;
  cursor: pointer;
  background: url(\"../image/jplayer.pink.flag.video.play.png\") 0 0 no-repeat;
  text-indent: -9999px; }

.jp-video-play-icon:focus {
  background: url(\"../image/jplayer.pink.flag.video.play.png\") 0 -100px no-repeat; }

.jp-jplayer audio,
.jp-jplayer {
  width: 0px;
  height: 0px; }

.jp-jplayer {
  background-color: #000000; }

/* @group NO SOLUTION error feedback */
.jp-no-solution {
  padding: 5px;
  font-size: .8em;
  background-color: #3a2a45;
  border-top: 2px solid #554461;
  border-left: 2px solid #554461;
  border-right: 2px solid #180a1f;
  border-bottom: 2px solid #180a1f;
  color: #FFF;
  display: none; }

.jp-no-solution a {
  color: #FFF; }

.jp-no-solution span {
  font-size: 1em;
  display: block;
  text-align: center;
  font-weight: bold; }

/* @end */
";
        
        $__internal_962c5a37da41e0cec044c8a705f7f32295ae2e41eda81858148aa38a9e01b0d0->leave($__internal_962c5a37da41e0cec044c8a705f7f32295ae2e41eda81858148aa38a9e01b0d0_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/skin/pink.flag/css/jplayer.pink.flag.css";
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
        return new Twig_Source("/*! Pink Flag Skin for jPlayer 2.9.2 ~ (c) 2009-2014 Happyworm Ltd ~ MIT License */

/*
 * Skin for jPlayer Plugin (jQuery JavaScript Library)
 * http://www.jplayer.org
 *
 * Skin Name: Pink Flag
 *
 * Copyright (c) 2012 - 2014 Happyworm Ltd
 * Licensed under the MIT license.
 *  - http://www.opensource.org/licenses/mit-license.php
 *
 * Author: Silvia Benvenuti
 * Skin Version: 2.1 (jPlayer 2.8.0)
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
  color: #fff;
  border-top: 1px solid #554461;
  border-left: 1px solid #554461;
  border-right: 1px solid #180a1f;
  border-bottom: 1px solid #180a1f;
  background-color: #3a2a45; }

.jp-audio {
  width: 201px;
  padding: 20px; }

.jp-audio-stream {
  width: 101px;
  padding: 20px 20px 10px 20px; }

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
  width: 100%;
  background-color: #3a2a45;
  /* Required for the full screen */ }

/* @group CONTROLS */
.jp-video .jp-controls-holder {
  clear: both;
  width: 440px;
  margin: 0 auto 10px auto;
  position: relative;
  overflow: hidden; }

.jp-audio .jp-controls-holder {
  height: 80px; }

.jp-audio-stream .jp-controls-holder {
  height: 50px; }

.jp-controls {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0 0 no-repeat;
  padding: 1px 0 2px 1px;
  overflow: hidden;
  width: 201px;
  height: 34px; }

.jp-audio .jp-controls,
.jp-audio-stream .jp-controls {
  margin: 0 auto; }

.jp-audio-stream .jp-controls {
  width: 100px; }

.jp-video .jp-controls {
  margin: 0 0 0 115px;
  float: left;
  display: inline;
  /* need this to fix IE6 double margin */ }

.jp-controls button {
  display: block;
  float: left;
  overflow: hidden;
  text-indent: -9999px;
  height: 34px;
  margin: 0 1px 2px 0;
  padding: 0;
  border: none;
  cursor: pointer; }

/* @group single player controls */
.jp-type-single .jp-controls button {
  width: 99px; }

.jp-type-single .jp-play {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -40px no-repeat; }

.jp-type-single .jp-play:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -100px -40px no-repeat; }

.jp-state-playing .jp-type-single .jp-play {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -120px no-repeat; }

.jp-state-playing .jp-type-single .jp-play:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -100px -120px no-repeat; }

/* The right border is normally in the ul background image. */
.jp-audio-stream .jp-play,
.jp-audio-stream .jp-pause {
  border-right: 1px solid #180920; }

.jp-type-single .jp-stop {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -80px no-repeat; }

.jp-type-single .jp-stop:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -100px -80px no-repeat; }

/* @end */
/* @group playlist player controls */
.jp-type-playlist .jp-controls button {
  width: 49px; }

.jp-type-playlist .jp-play {
  background: url(\"../image/jplayer.pink.flag.jpg\") -24px -40px no-repeat; }

.jp-type-playlist .jp-play:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -124px -40px no-repeat; }

.jp-state-playing div.jp-type-playlist .jp-play {
  background: url(\"../image/jplayer.pink.flag.jpg\") -24px -120px no-repeat; }

.jp-state-playing div.jp-type-playlist .jp-play:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -124px -120px no-repeat; }

.jp-type-playlist .jp-stop {
  background: url(\"../image/jplayer.pink.flag.jpg\") -24px -80px no-repeat; }

.jp-type-playlist .jp-stop:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -124px -80px no-repeat; }

.jp-type-playlist .jp-previous {
  background: url(\"../image/jplayer.pink.flag.jpg\") -24px -200px no-repeat; }

.jp-type-playlist .jp-previous:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -124px -200px no-repeat; }

.jp-type-playlist .jp-next {
  background: url(\"../image/jplayer.pink.flag.jpg\") -24px -160px no-repeat; }

.jp-type-playlist .jp-next:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -124px -160px no-repeat; }

/* @end */
/* @group TOGGLES */
.jp-toggles {
  padding: 0;
  margin: 0 auto;
  overflow: hidden; }

.jp-audio .jp-toggles {
  width: 55px; }

.jp-audio .jp-type-single .jp-toggles {
  width: 25px; }

.jp-video .jp-toggles {
  float: left;
  width: 105px;
  margin: 10px 0 0 15px; }

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
  background: url(\"../image/jplayer.pink.flag.jpg\") 0 -420px no-repeat;
  margin-left: 15px; }

.jp-full-screen:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -30px -420px no-repeat; }

.jp-state-full-screen .jp-full-screen {
  background: url(\"../image/jplayer.pink.flag.jpg\") -60px -420px no-repeat; }

.jp-state-full-screen .jp-full-screen:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -90px -420px no-repeat; }

.jp-repeat {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0 -440px no-repeat;
  margin-left: 0; }

.jp-repeat:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -30px -440px no-repeat; }

.jp-state-looped .jp-repeat {
  background: url(\"../image/jplayer.pink.flag.jpg\") -60px -440px no-repeat; }

.jp-state-looped .jp-repeat:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -90px -440px no-repeat; }

.jp-shuffle {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0 -460px no-repeat;
  margin-left: 15px; }

.jp-shuffle:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -30px -460px no-repeat; }

.jp-state-shuffled .jp-shuffle {
  background: url(\"../image/jplayer.pink.flag.jpg\") -60px -460px no-repeat; }

.jp-state-shuffled .jp-shuffle:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -90px -460px no-repeat; }

.jp-audio .jp-shuffle {
  margin-left: 5px; }

/* @end */
/* @group progress bar */
/* The seeking class is added/removed inside jPlayer */
div.jp-seeking-bg {
  background: url(\"../image/jplayer.pink.flag.seeking.gif\"); }

.jp-progress {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -240px no-repeat;
  width: 197px;
  height: 13px;
  padding: 0 2px 2px 2px;
  margin-bottom: 4px;
  overflow: hidden; }

div.jp-video .jp-progress {
  border-top: 1px solid #180a1f;
  border-bottom: 1px solid #554560;
  width: 100%;
  background-image: none;
  padding: 0; }

.jp-seek-bar {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -260px repeat-x;
  width: 0px;
  height: 100%;
  overflow: hidden;
  cursor: pointer; }

.jp-play-bar {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -280px repeat-x;
  width: 0px;
  height: 100%;
  overflow: hidden; }

/* @end */
/* @group volume controls */
.jp-state-no-volume .jp-volume-controls {
  display: none; }

.jp-audio .jp-volume-controls,
.jp-audio-stream .jp-volume-controls {
  height: 30px; }

.jp-volume-controls button {
  position: absolute;
  display: block;
  overflow: hidden;
  text-indent: -9999px;
  margin: 0;
  padding: 0;
  width: 16px;
  height: 11px;
  border: none;
  cursor: pointer; }

.jp-audio .jp-volume-controls .jp-mute,
.jp-audio-stream .jp-volume-controls .jp-mute {
  top: -6px;
  left: 0; }

.jp-audio .jp-volume-controls .jp-volume-max,
.jp-audio-stream .jp-volume-controls .jp-volume-max {
  top: -6px;
  right: 0; }

.jp-video .jp-volume-controls .jp-mute,
.jp-video .jp-volume-controls .jp-unmute {
  left: 0;
  top: 14px; }

.jp-video .jp-volume-controls .jp-volume-max {
  left: 84px;
  top: 14px; }

.jp-volume-controls .jp-mute {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -330px no-repeat; }

.jp-volume-controls .jp-mute:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -25px -330px no-repeat; }

.jp-state-muted .jp-volume-controls .jp-mute {
  background: url(\"../image/jplayer.pink.flag.jpg\") -60px -330px no-repeat; }

.jp-state-muted .jp-volume-controls .jp-mute:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -85px -330px no-repeat; }

.jp-volume-controls .jp-volume-max {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -350px no-repeat; }

.jp-volume-controls .jp-volume-max:focus {
  background: url(\"../image/jplayer.pink.flag.jpg\") -25px -350px no-repeat; }

.jp-volume-bar {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -300px repeat-x;
  position: absolute;
  width: 197px;
  height: 4px;
  padding: 2px 2px 1px 2px;
  overflow: hidden;
  cursor: pointer; }

.jp-audio .jp-interface .jp-volume-bar,
.jp-audio-stream .jp-interface .jp-volume-bar {
  top: 10px;
  left: 0; }

.jp-audio-stream .jp-interface .jp-volume-bar {
  width: 97px;
  border-right: 1px solid #180920;
  padding-right: 1px; }

.jp-video .jp-volume-bar {
  top: 0;
  left: 0;
  width: 95px;
  border-right: 1px solid #180920;
  padding-right: 1px;
  margin-top: 30px; }

.jp-volume-bar-value {
  background: url(\"../image/jplayer.pink.flag.jpg\") 0px -320px repeat-x;
  height: 4px; }

/* @end */
/* @group current time and duration */
.jp-current-time, .jp-duration {
  width: 70px;
  font-size: .5em;
  color: #8c7a99; }

.jp-current-time {
  float: left;
  cursor: default; }

.jp-duration {
  float: right;
  text-align: right;
  cursor: pointer; }

.jp-video .jp-current-time {
  padding-left: 20px; }

.jp-video .jp-duration {
  padding-right: 20px; }

/* @end */
/* @group playlist */
.jp-details {
  font-size: .7em;
  margin: 0;
  padding: 0; }

.jp-details .jp-title {
  padding: 0;
  margin: 0;
  overflow: hidden;
  text-align: center;
  cursor: default; }

.jp-video .jp-details {
  margin: 0 90px 10px; }

.jp-playlist ul {
  list-style-type: none;
  font-size: .7em;
  margin: 0;
  padding: 0; }

.jp-video .jp-playlist ul {
  margin: 0 20px; }

.jp-playlist li {
  position: relative;
  padding: 2px 0;
  border-top: 1px solid #554461;
  border-bottom: 1px solid #180a1f;
  overflow: hidden; }

/* Note that the first-child (IE6) and last-child (IE6/7/8) selectors do not work on IE */
div.jp-type-playlist div.jp-playlist li:first-child {
  border-top: none;
  padding-top: 3px; }

div.jp-type-playlist div.jp-playlist li:last-child {
  border-bottom: none;
  padding-bottom: 3px; }

div.jp-type-playlist div.jp-playlist a {
  color: #fff;
  text-decoration: none; }

div.jp-type-playlist div.jp-playlist a:hover {
  color: #e892e9; }

div.jp-type-playlist div.jp-playlist li.jp-playlist-current {
  background-color: #26102e;
  margin: 0 -20px;
  padding: 2px 20px;
  border-top: 1px solid #26102e;
  border-bottom: 1px solid #26102e; }

div.jp-type-playlist div.jp-playlist li.jp-playlist-current a {
  color: #e892e9; }

div.jp-type-playlist div.jp-playlist a.jp-playlist-item-remove {
  float: right;
  display: inline;
  text-align: right;
  margin-left: 10px;
  font-weight: bold;
  color: #8C7A99; }

div.jp-type-playlist div.jp-playlist a.jp-playlist-item-remove:hover {
  color: #E892E9; }

div.jp-type-playlist div.jp-playlist span.jp-free-media {
  float: right;
  display: inline;
  text-align: right;
  color: #8C7A99; }

div.jp-type-playlist div.jp-playlist span.jp-free-media a {
  color: #8C7A99; }

div.jp-type-playlist div.jp-playlist span.jp-free-media a:hover {
  color: #E892E9; }

span.jp-artist {
  font-size: .8em;
  color: #8C7A99; }

/* @end */
.jp-video .jp-video-play {
  width: 100%;
  overflow: hidden;
  /* Important for nested negative margins to work in modern browsers */ }

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
  border: none;
  cursor: pointer;
  background: url(\"../image/jplayer.pink.flag.video.play.png\") 0 0 no-repeat;
  text-indent: -9999px; }

.jp-video-play-icon:focus {
  background: url(\"../image/jplayer.pink.flag.video.play.png\") 0 -100px no-repeat; }

.jp-jplayer audio,
.jp-jplayer {
  width: 0px;
  height: 0px; }

.jp-jplayer {
  background-color: #000000; }

/* @group NO SOLUTION error feedback */
.jp-no-solution {
  padding: 5px;
  font-size: .8em;
  background-color: #3a2a45;
  border-top: 2px solid #554461;
  border-left: 2px solid #554461;
  border-right: 2px solid #180a1f;
  border-bottom: 2px solid #180a1f;
  color: #FFF;
  display: none; }

.jp-no-solution a {
  color: #FFF; }

.jp-no-solution span {
  font-size: 1em;
  display: block;
  text-align: center;
  font-weight: bold; }

/* @end */
", "@MwebAdmin/filemanager/js/jPlayer/skin/pink.flag/css/jplayer.pink.flag.css", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/skin/pink.flag/css/jplayer.pink.flag.css");
    }
}
