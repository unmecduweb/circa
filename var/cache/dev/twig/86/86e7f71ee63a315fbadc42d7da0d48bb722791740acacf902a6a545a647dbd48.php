<?php

/* @MwebAdmin/filemanager/js/jPlayer/actionscript/Jplayer.as */
class __TwigTemplate_5f352d6a6b35ba4ba481796773b9eb1d5ddf560e5a385f064389eebdb75240e5 extends Twig_Template
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
        $__internal_023b12f73bcee06234b57cb5b2c7ed6819e8d220a0337b557df90622f3446154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023b12f73bcee06234b57cb5b2c7ed6819e8d220a0337b557df90622f3446154->enter($__internal_023b12f73bcee06234b57cb5b2c7ed6819e8d220a0337b557df90622f3446154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/actionscript/Jplayer.as"));

        // line 1
        echo "/*
 * jPlayer Plugin for jQuery JavaScript Library
 * http://www.jplayer.org
 *
 * Copyright (c) 2009 - 2013 Happyworm Ltd
 * Licensed under the MIT.
 * http://opensource.org/licenses/MIT
 *
 * Author: Mark J Panaghiston
 * Version: 2.4.0
 * Date: 5th June 2013
 *
 * FlashVars expected: (AS3 property of: loaderInfo.parameters)
 *\tid: \t(URL Encoded: String) Id of jPlayer instance
 *\tvol:\t(Number) Sets the initial volume
 *\tmuted:\t(Boolean in a String) Sets the initial muted state
 *\tjQuery:\t(URL Encoded: String) Sets the jQuery var name. Used with: someVar = jQuery.noConflict(true); The someVar name must contain jQuery in it.
 *
 * Compiled using: Adobe Flex Compiler (mxmlc) Version 4.5.1 build 21328
 */

package {
\timport flash.system.Security;
\timport flash.external.ExternalInterface;

\timport flash.utils.Timer;
\timport flash.events.TimerEvent;
\t
\timport flash.text.TextField;
\timport flash.text.TextFormat;

\timport flash.events.KeyboardEvent;

\timport flash.display.Sprite;
\timport happyworm.jPlayer.*;

\timport flash.display.StageAlign;
\timport flash.display.StageScaleMode;
\timport flash.events.Event;
\timport flash.net.LocalConnection;
\timport flash.events.StatusEvent;

\timport flash.events.MouseEvent;

\timport flash.ui.ContextMenu;
\timport flash.ui.ContextMenuItem;
\timport flash.events.ContextMenuEvent;
\timport flash.net.URLRequest;
\timport flash.net.navigateToURL;
\timport flash.media.Video;

\tpublic class Jplayer extends Sprite {
\t\tprivate var jQuery:String;
\t\tprivate var sentNumberFractionDigits:uint = 2;

\t\tpublic var commonStatus:JplayerStatus = new JplayerStatus(); // Used for inital ready event so volume is correct.

\t\tprivate var myInitTimer:Timer = new Timer(100, 0);

\t\tprivate var myMp3Player:JplayerMp3;
\t\tprivate var myMp4Player:JplayerMp4;

\t\tprivate var myRtmpPlayer:JplayerRtmp;
\t\t
\t\tprivate var isRtmp:Boolean = false;
\t\tprivate var isMp4:Boolean = false;

\t\tprivate var isMp3:Boolean = false;
\t\tprivate var isVideo:Boolean = false;

\t\tprivate var securityIssue:Boolean = false; // On direct access and when SWF parameters contain illegal characters

\t\tprivate var contextMenuFix:Sprite = new Sprite(); // A sprite that will be on top and fix the content menu over video bug. (A Flash plugin bug.)

\t\tprivate var txLog:TextField;
\t\tprivate var debug:Boolean = false; // Set debug to false for release compile!
\t\tprivate var localAIRDebug:Boolean = false; // This is autodetermined by AIR app - leave false!

\t\tprivate var traceOut:TraceOut;

\t\tpublic function Jplayer() {

\t\t\tflash.system.Security.allowDomain(\"*\");
\t\t\ttraceOut = new TraceOut();

\t\t\t// Fix to the security exploit reported by Jason Calvert http://appsec.ws/
\t\t\tcheckFlashVars(loaderInfo.parameters);

\t\t\tstage.scaleMode = StageScaleMode.NO_SCALE;
\t\t\tstage.align = StageAlign.TOP_LEFT;

\t\t\tif(!securityIssue) {
\t\t\t\t// The jQuery param is the primary cause of security concerns.
\t\t\t\tjQuery = loaderInfo.parameters.jQuery + \"('#\" + loaderInfo.parameters.id + \"').jPlayer\";
\t\t\t\tcommonStatus.volume = Number(loaderInfo.parameters.vol);
\t\t\t\tcommonStatus.muted = loaderInfo.parameters.muted == \"true\";

\t\t\t\tstage.addEventListener(Event.RESIZE, resizeHandler);
\t\t\t\tstage.addEventListener(MouseEvent.CLICK, clickHandler);

\t\t\t\tvar initialVolume:Number = commonStatus.volume;
\t\t\t\tif(commonStatus.muted) {
\t\t\t\t\tinitialVolume = 0;
\t\t\t\t}

\t\t\t\tmyMp3Player = new JplayerMp3(initialVolume);
\t\t\t\taddChild(myMp3Player);

\t\t\t\tmyMp4Player = new JplayerMp4(initialVolume);
\t\t\t\taddChild(myMp4Player);

\t\t\t\tmyRtmpPlayer = new JplayerRtmp(initialVolume);
\t\t\t\taddChild(myRtmpPlayer);

\t\t\t\tswitchType(\"mp3\"); // set default state to mp3
\t\t\t}

\t\t\t// The ContextMenu only partially works. The menu select events never occur.
\t\t\t// Investigated and it is something to do with the way jPlayer inserts the Flash on the page.
\t\t\t// A simple test inserting the Jplayer.swf on a page using: 1) SWFObject 2.2 works. 2) AC_FL_RunContent() works.
\t\t\t// jPlayer Flash insertion is based on SWFObject 2.2 and the resaon behind this failure is not clear. The Flash insertion HTML on the page looks similar.
\t\t\tvar myContextMenu:ContextMenu = new ContextMenu();
\t\t\tmyContextMenu.hideBuiltInItems();
\t\t\tvar menuItem_jPlayer:ContextMenuItem = new ContextMenuItem(\"jPlayer \" + JplayerStatus.VERSION);
\t\t\tvar menuItem_happyworm:ContextMenuItem = new ContextMenuItem(\"© 2009-2013 Happyworm Ltd\", true);
\t\t\tmenuItem_jPlayer.addEventListener(ContextMenuEvent.MENU_ITEM_SELECT, menuSelectHandler_jPlayer);
\t\t\tmenuItem_happyworm.addEventListener(ContextMenuEvent.MENU_ITEM_SELECT, menuSelectHandler_happyworm);
\t\t\tmyContextMenu.customItems.push(menuItem_jPlayer, menuItem_happyworm);
\t\t\tcontextMenu = myContextMenu;

\t\t\t// Log console for dev compile option: debug
\t\t\tif(debug || securityIssue) {
\t\t\t\ttxLog = new TextField();
\t\t\t\ttxLog.x = 5;
\t\t\t\ttxLog.y = 5;
\t\t\t\ttxLog.width = stage.stageWidth - 10;
\t\t\t\ttxLog.height = stage.stageHeight - 10;
\t\t\t\ttxLog.backgroundColor = 0xEEEEFF;
\t\t\t\ttxLog.border = true;
\t\t\t\ttxLog.background = true;
\t\t\t\ttxLog.multiline = true;
\t\t\t\ttxLog.text = \"jPlayer \" + JplayerStatus.VERSION;

\t\t\t\tif(securityIssue) {
\t\t\t\t\ttxLog.visible = true;
\t\t\t\t} else if(debug) {
\t\t\t\t\ttxLog.visible = false;
\t\t\t\t}

\t\t\t\tthis.addChild(txLog);

\t\t\t\tif(debug && !securityIssue) {
\t\t\t\t\tthis.stage.addEventListener(KeyboardEvent.KEY_UP, keyboardHandler);

\t\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.DEBUG_MSG, debugMsgHandler);
\t\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.DEBUG_MSG, debugMsgHandler);
\t\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.DEBUG_MSG, debugMsgHandler);
\t\t\t\t}
\t\t\t}

\t\t\t// Known Flash problem with contextMenu over video player.
\t\t\t// Add a transparent rectangle into the sprite.
\t\t\tcontextMenuFix.graphics.beginFill(0x000000, 0); // Transparent black
\t\t\tcontextMenuFix.graphics.drawRect(0, 0, 10, 10); // Arbitary rectangle
\t\t\tcontextMenuFix.graphics.endFill();
\t\t\taddChild(contextMenuFix); // Put the sprite on the top layer.

\t\t\tif(!securityIssue) {
\t\t\t\t// Delay init() because Firefox 3.5.7+ developed a bug with local testing in Firebug.
\t\t\t\tmyInitTimer.addEventListener(TimerEvent.TIMER, init);
\t\t\t\tmyInitTimer.start();
\t\t\t}
\t\t}

\t\tprivate function switchType(playType:String):void {
\t\t\tswitch(playType) {
\t\t\t\tcase \"rtmpa\":
\t\t\t\tisRtmp=true;
\t\t\t\tisMp3=false;
\t\t\t\tisMp4=false;
\t\t\t\tisVideo=false;
\t\t\t\tbreak;
\t\t\tcase \"rtmpv\":
\t\t\t\tisRtmp=true;
\t\t\t\tisMp3=false;
\t\t\t\tisMp4=false;
\t\t\t\tisVideo=true;
\t\t\t\tbreak;
\t\t\tcase \"mp3\":
\t\t\t\tisRtmp=false;
\t\t\t\tisMp3=true;
\t\t\t\tisMp4=false;
\t\t\t\tisVideo=false;
\t\t\t\tbreak;
\t\t\tcase \"mp4\":
\t\t\t\tisRtmp=false;
\t\t\t\tisMp3=false;
\t\t\t\tisMp4=true;
\t\t\t\tisVideo=false;
\t\t\t\tbreak;
\t\t\tcase \"m4v\":
\t\t\t\tisRtmp=false;
\t\t\t\tisMp3=false;
\t\t\t\tisMp4=true;
\t\t\t\tisVideo=true;
\t\t\t\tbreak;
\t\t\t}
\t\t\t
\t\t\tlistenToMp3(isMp3);
\t\t\tlistenToMp4(isMp4);
\t\t\tlistenToRtmp(isRtmp);
\t\t}
\t\t
\t\tprivate function init(e:TimerEvent):void {
\t\t\tmyInitTimer.stop();
\t\t\tif(ExternalInterface.available && !securityIssue) {
\t\t\t\tExternalInterface.addCallback(\"fl_setAudio_mp3\", fl_setAudio_mp3);
\t\t\t\tExternalInterface.addCallback(\"fl_setAudio_m4a\", fl_setAudio_m4a);
\t\t\t\tExternalInterface.addCallback(\"fl_setVideo_m4v\", fl_setVideo_m4v);
\t\t\t\tExternalInterface.addCallback(\"fl_setAudio_rtmp\", fl_setAudio_rtmp);
\t\t\t\tExternalInterface.addCallback(\"fl_setVideo_rtmp\", fl_setVideo_rtmp);
\t\t\t\tExternalInterface.addCallback(\"fl_clearMedia\", fl_clearMedia);
\t\t\t\tExternalInterface.addCallback(\"fl_load\", fl_load);
\t\t\t\tExternalInterface.addCallback(\"fl_play\", fl_play);
\t\t\t\tExternalInterface.addCallback(\"fl_pause\", fl_pause);
\t\t\t\tExternalInterface.addCallback(\"fl_play_head\", fl_play_head);
\t\t\t\tExternalInterface.addCallback(\"fl_volume\", fl_volume);
\t\t\t\tExternalInterface.addCallback(\"fl_mute\", fl_mute);

\t\t\t\tExternalInterface.call(jQuery, \"jPlayerFlashEvent\", JplayerEvent.JPLAYER_READY, extractStatusData(commonStatus)); // See JplayerStatus() class for version number.
\t\t\t}
\t\t}
\t\tprivate function checkFlashVars(p:Object):void {
\t\t\t// Check for direct access. Inspired by mediaelement.js - Also added name to HTML object for non-IE browsers.
\t\t\tif(ExternalInterface.objectID != null && ExternalInterface.objectID.toString() != \"\") {
\t\t\t\tfor each (var s:String in p) {
\t\t\t\t\tif(illegalChar(s)) {
\t\t\t\t\t\tsecurityIssue = true; // Found a security concern.
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tif(!securityIssue) {
\t\t\t\t\tif(jQueryIllegal(p.jQuery)) {
\t\t\t\t\t\tsecurityIssue = true; // Found a security concern.
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\tsecurityIssue = true; // Direct access disables the callbacks, which were a security concern.
\t\t\t}
\t\t}
\t\tprivate function illegalChar(s:String):Boolean {
\t\t\t// A whitelist of accepted chars.
\t\t\tvar validParam:RegExp = /^[-A-Za-z0-9_.]+\$/;
\t\t\treturn !validParam.test(s);
\t\t}
\t\tprivate function jQueryIllegal(s:String):Boolean {
\t\t\t// Check param contains the term jQuery.
\t\t\tvar validParam:RegExp = /(jQuery)/;
\t\t\treturn !validParam.test(s);
\t\t}
\t\t// switchType() here
\t\tprivate function listenToMp3(active:Boolean):void {
\t\t\tif(active) {
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_ERROR, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_PROGRESS, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_TIMEUPDATE, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_ENDED, jPlayerFlashEvent);
\t\t\t\t
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_PLAY, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_PAUSE, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_LOADSTART, jPlayerFlashEvent);

\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_SEEKING, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_SEEKED, jPlayerFlashEvent);

\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_WAITING, jPlayerFlashEvent); // only MP3 atm
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_PLAYING, jPlayerFlashEvent); // only MP3 atm

\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_CANPLAY, jPlayerFlashEvent); // only MP3 atm
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_CANPLAYTHROUGH, jPlayerFlashEvent); // only MP3 atm
\t\t\t} else {
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_ERROR, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_PROGRESS, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_TIMEUPDATE, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_ENDED, jPlayerFlashEvent);
\t\t\t\t
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_PLAY, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_PAUSE, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_LOADSTART, jPlayerFlashEvent);

\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_SEEKING, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_SEEKED, jPlayerFlashEvent);

\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_WAITING, jPlayerFlashEvent); // only MP3 atm
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_PLAYING, jPlayerFlashEvent); // only MP3 atm

\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_CANPLAY, jPlayerFlashEvent); // only MP3 atm
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_CANPLAYTHROUGH, jPlayerFlashEvent); // only MP3 atm
\t\t\t}
\t\t}
\t\tprivate function listenToMp4(active:Boolean):void {
\t\t\tif(active) {
\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_ERROR, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_PROGRESS, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_TIMEUPDATE, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_ENDED, jPlayerFlashEvent);

\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_PLAY, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_PAUSE, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_LOADSTART, jPlayerFlashEvent);

\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_SEEKING, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_SEEKED, jPlayerFlashEvent);

\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_LOADEDMETADATA, jPlayerMetaDataHandler); // Note the unique handler
\t\t\t} else {
\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_ERROR, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_PROGRESS, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_TIMEUPDATE, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_ENDED, jPlayerFlashEvent);

\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_PLAY, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_PAUSE, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_LOADSTART, jPlayerFlashEvent);

\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_SEEKING, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_SEEKED, jPlayerFlashEvent);

\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_LOADEDMETADATA, jPlayerMetaDataHandler); // Note the unique handler
\t\t\t}
\t\t}

\t\tprivate function listenToRtmp(active:Boolean):void {
\t\t\tif(active) {
\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_ERROR, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_PROGRESS, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_TIMEUPDATE, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_ENDED, jPlayerFlashEvent);

\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_PLAY, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_PAUSE, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_LOADSTART, jPlayerFlashEvent);
\t\t\t\t
\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_CANPLAY, jPlayerFlashEvent);

\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_SEEKING, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_SEEKED, jPlayerFlashEvent);

\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_LOADEDMETADATA, jPlayerMetaDataHandler); // Note the unique handler
\t\t\t} else {
\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_ERROR, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_PROGRESS, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_TIMEUPDATE, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_ENDED, jPlayerFlashEvent);

\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_PLAY, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_PAUSE, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_LOADSTART, jPlayerFlashEvent);
\t\t\t\t
\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_CANPLAY, jPlayerFlashEvent);

\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_SEEKING, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_SEEKED, jPlayerFlashEvent);

\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_LOADEDMETADATA, jPlayerMetaDataHandler); // Note the unique handler
\t\t\t}
\t\t}

\t\tprivate function fl_setAudio_mp3(src:String):Boolean {
\t\t\tif (src != null) {
\t\t\t\tlog(\"fl_setAudio_mp3: \"+src);
\t\t\t\tswitchType(\"mp3\");
\t\t\t\tmyMp4Player.clearFile();
\t\t\t\tmyRtmpPlayer.clearFile();
\t\t\t\tmyMp3Player.setFile(src);
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\tlog(\"fl_setAudio_mp3: null\");
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\tprivate function fl_setAudio_rtmp(src:String):Boolean {
\t\t\ttracer(\"SET RTMP: \"+src);
\t\t\tif (src != null) {
\t\t\t\tlog(\"fl_setAudio_rtmp: \"+src);
\t\t\t\tswitchType(\"rtmpa\");
\t\t\t\tmyMp4Player.clearFile();
\t\t\t\tmyMp3Player.clearFile();
\t\t\t\tmyRtmpPlayer.setFile(src,false);
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\tlog(\"fl_setAudio_rtmp: null\");
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\t
\t\tprivate function fl_setVideo_rtmp(src:String):Boolean {
\t\t\ttracer(\"SET RTMP: \"+src);
\t\t\tif (src != null) {
\t\t\t\tlog(\"fl_setVideo_rtmp: \"+src);
\t\t\t\tswitchType(\"rtmpv\");
\t\t\t\tmyMp4Player.clearFile();
\t\t\t\tmyMp3Player.clearFile();
\t\t\t\tmyRtmpPlayer.setFile(src,true);
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\tlog(\"fl_setVideo_rtmp: null\");
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\tprivate function fl_setAudio_m4a(src:String):Boolean {
\t\t\tif (src != null) {
\t\t\t\tlog(\"fl_setAudio_m4a: \"+src);
\t\t\t\tswitchType(\"mp4\")
\t\t\t\tmyMp3Player.clearFile();
\t\t\t\tmyRtmpPlayer.clearFile();
\t\t\t\tmyMp4Player.setFile(src);
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\tlog(\"fl_setAudio_m4a: null\");
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\tprivate function fl_setVideo_m4v(src:String):Boolean {
\t\t\tif (src != null) {
\t\t\t\tlog(\"fl_setVideo_m4v: \"+src);
\t\t\t\tswitchType(\"m4v\");
\t\t\t\tmyMp3Player.clearFile();
\t\t\t\tmyRtmpPlayer.clearFile();
\t\t\t\tmyMp4Player.setFile(src);
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\tlog(\"fl_setVideo_m4v: null\");
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\tprivate function fl_clearMedia():void {
\t\t\tlog(\"clearMedia.\");
\t\t\tmyMp3Player.clearFile();
\t\t\tmyMp4Player.clearFile();
\t\t\tmyRtmpPlayer.clearFile();
\t\t}

\t\tprivate function getType():Object {
\t\t\tvar returnType:Object;
\t\t\tif(isMp3) {
\t\t\t\treturnType=myMp3Player;
\t\t\t} 
\t\t\tif(isRtmp) {
\t\t\t\treturnType=myRtmpPlayer;
\t\t\t}
\t\t\tif(isMp4) {
\t\t\t\treturnType=myMp4Player;
\t\t\t}
\t\t\treturn returnType;
\t\t}

\t\tprivate function fl_load():Boolean {
\t\t\tlog(\"load.\");
\t\t\tvar returnType:Object = getType();
\t\t\treturn returnType.load();
\t\t}
\t\tprivate function fl_play(time:Number = NaN):Boolean {
\t\t\tlog(\"play: time = \" + time);
\t\t\tvar returnType:Object = getType();
\t\t\treturn returnType.play(time * 1000); // Flash uses milliseconds
\t\t}
\t\tprivate function fl_pause(time:Number = NaN):Boolean {
\t\t\tlog(\"pause: time = \" + time);
\t\t\tvar returnType:Object = getType();
\t\t\treturn returnType.pause(time * 1000); // Flash uses milliseconds
\t\t}
\t\tprivate function fl_play_head(percent:Number):Boolean {
\t\t\tlog(\"play_head: \"+percent+\"%\");
\t\t\tvar returnType:Object = getType();
\t\t\treturn returnType.playHead(percent);
\t\t}
\t\tprivate function fl_volume(v:Number):void {
\t\t\tlog(\"volume: \"+v);
\t\t\tcommonStatus.volume = v;
\t\t\tif(!commonStatus.muted) {
\t\t\t\tmyMp3Player.setVolume(v);
\t\t\t\tmyMp4Player.setVolume(v);
\t\t\t\tmyRtmpPlayer.setVolume(v);
\t\t\t}
\t\t}
\t\tprivate function fl_mute(mute:Boolean):void {
\t\t\tlog(\"mute: \"+mute);
\t\t\tcommonStatus.muted = mute;
\t\t\tif(mute) {
\t\t\t\tmyMp3Player.setVolume(0);
\t\t\t\tmyMp4Player.setVolume(0);
\t\t\t\tmyRtmpPlayer.setVolume(0);
\t\t\t} else {
\t\t\t\tmyMp3Player.setVolume(commonStatus.volume);
\t\t\t\tmyMp4Player.setVolume(commonStatus.volume);
\t\t\t\tmyRtmpPlayer.setVolume(commonStatus.volume);
\t\t\t}
\t\t}
\t\tprivate function jPlayerFlashEvent(e:JplayerEvent):void {
\t\t\tlog(\"jPlayer Flash Event: \" + e.type + \": \" + e.target);
\t\t\t//tracer(\"jPlayer Flash Event: \" + e.type + \": \" + e.target);
\t\t\tif(ExternalInterface.available && !securityIssue) {
\t\t\t\tExternalInterface.call(jQuery, \"jPlayerFlashEvent\", e.type, extractStatusData(e.data));
\t\t\t}
\t\t}
\t\t
\t\tprivate function tracer(msg:String):void {
\t\t\ttraceOut.tracer(msg);
\t\t}
\t\t
\t\tprivate function extractStatusData(data:JplayerStatus):Object {
\t\t\tvar myStatus:Object = {
\t\t\t\tversion: JplayerStatus.VERSION,
\t\t\t\tsrc: data.src,
\t\t\t\tpaused: !data.isPlaying, // Changing this name requires inverting all assignments and conditional statements.
\t\t\t\tsrcSet: data.srcSet,
\t\t\t\tseekPercent: data.seekPercent,
\t\t\t\tcurrentPercentRelative: data.currentPercentRelative,
\t\t\t\tcurrentPercentAbsolute: data.currentPercentAbsolute,
\t\t\t\tcurrentTime: data.currentTime / 1000, // JavaScript uses seconds
\t\t\t\tduration: data.duration / 1000, // JavaScript uses seconds
\t\t\t\tvideoWidth: data.videoWidth,
\t\t\t\tvideoHeight: data.videoHeight,
\t\t\t\tvolume: commonStatus.volume,
\t\t\t\tmuted: commonStatus.muted
\t\t\t};
\t\t\tlog(\"extractStatusData: sp=\"+myStatus.seekPercent+\" cpr=\"+myStatus.currentPercentRelative+\" cpa=\"+myStatus.currentPercentAbsolute+\" ct=\"+myStatus.currentTime+\" d=\"+myStatus.duration);
\t\t\treturn myStatus;
\t\t}
\t\tprivate function jPlayerMetaDataHandler(e:JplayerEvent):void {
\t\t\tlog(\"jPlayerMetaDataHandler:\" + e.target);
\t\t\tif(ExternalInterface.available && !securityIssue) {
\t\t\t\tresizeHandler(new Event(Event.RESIZE));
\t\t\t\tExternalInterface.call(jQuery, \"jPlayerFlashEvent\", e.type, extractStatusData(e.data));
\t\t\t}
\t\t}
\t\tprivate function resizeHandler(e:Event):void {
\t\t\tlog(\"resizeHandler: stageWidth = \" + stage.stageWidth + \" | stageHeight = \" + stage.stageHeight);

\t\t\tvar mediaX:Number = 0;
\t\t\tvar mediaY:Number = 0;
\t\t\tvar mediaWidth:Number = 0;
\t\t\tvar mediaHeight:Number = 0;
\t\t\t
\t\t\tvar aspectRatioStage:Number = 0;
\t\t\tvar aspectRatioVideo:Number = 0;
\t\t\t
\t\t\tvar videoItem:*;
\t\t\t
\t\t\tif(isRtmp) {
\t\t\t\tvideoItem = myRtmpPlayer;
\t\t\t}
\t\t\tif(isMp4) {
\t\t\t\tvideoItem = myMp4Player;
\t\t\t}
\t\t\t
\t\t\tif(videoItem) {
\t\t\t\tif(stage.stageWidth > 0 && stage.stageHeight > 0 && videoItem.myVideo.width > 0 && videoItem.myVideo.height > 0) {
\t\t\t\t\taspectRatioStage = stage.stageWidth / stage.stageHeight;
\t\t\t\t\taspectRatioVideo = videoItem.myVideo.width / videoItem.myVideo.height;
\t\t\t\t\tif(aspectRatioStage < aspectRatioVideo) {
\t\t\t\t\t\tmediaWidth = stage.stageWidth;
\t\t\t\t\t\tmediaHeight = stage.stageWidth / aspectRatioVideo;
\t\t\t\t\t\tmediaX = 0;
\t\t\t\t\t\tmediaY = (stage.stageHeight - mediaHeight) / 2;
\t\t\t\t\t} else {
\t\t\t\t\t\tmediaWidth = stage.stageHeight * aspectRatioVideo;
\t\t\t\t\t\tmediaHeight = stage.stageHeight;
\t\t\t\t\t\tmediaX = (stage.stageWidth - mediaWidth) / 2;
\t\t\t\t\t\tmediaY = 0;
\t\t\t\t\t}
\t\t\t\t\tresizeEntity(videoItem, mediaX, mediaY, mediaWidth, mediaHeight);
\t\t\t\t}
\t\t\t}
\t\t\tif((debug || securityIssue) && stage.stageWidth > 20 && stage.stageHeight > 20) {
\t\t\t\ttxLog.width = stage.stageWidth - 10;
\t\t\t\ttxLog.height = stage.stageHeight - 10;
\t\t\t}
\t\t\t// Resize the sprite so it covers the entire stage area
\t\t\tcontextMenuFix.x = 0;
\t\t\tcontextMenuFix.y = 0;
\t\t\tcontextMenuFix.width = stage.stageWidth;
\t\t\tcontextMenuFix.height = stage.stageHeight;
\t\t}
\t\tprivate function resizeEntity(entity:Sprite, mediaX:Number, mediaY:Number, mediaWidth:Number, mediaHeight:Number):void {
\t\t\tentity.x = mediaX;
\t\t\tentity.y = mediaY;
\t\t\tentity.width = mediaWidth;
\t\t\tentity.height = mediaHeight;
\t\t}
\t\tprivate function clickHandler(e:MouseEvent):void {
\t\t\t// This needs to work with RTMP format too!
\t\t\tif(isMp3) {
\t\t\t\tjPlayerFlashEvent(new JplayerEvent(JplayerEvent.JPLAYER_CLICK, myMp3Player.myStatus, \"click\"))
\t\t\t} else {
\t\t\t\tjPlayerFlashEvent(new JplayerEvent(JplayerEvent.JPLAYER_CLICK, myMp4Player.myStatus, \"click\"))
\t\t\t}
\t\t}
\t\t// This event is never called. See comments in class constructor.
\t\tprivate function menuSelectHandler_jPlayer(e:ContextMenuEvent):void {
\t\t\tnavigateToURL(new URLRequest(\"http://jplayer.org/\"), \"_blank\");
\t\t}
\t\t// This event is never called. See comments in class constructor.
\t\tprivate function menuSelectHandler_happyworm(e:ContextMenuEvent):void {
\t\t\tnavigateToURL(new URLRequest(\"http://happyworm.com/\"), \"_blank\");
\t\t}
\t\tprivate function log(t:String):void {
\t\t\tif(debug) {
\t\t\t\ttxLog.text = t + \"\\n\" + txLog.text;
\t\t\t\tlocalAIRDebug = traceOut.localAIRDebug();
\t\t\t\tif(localAIRDebug) {
\t\t\t\t\ttracer(t);
\t\t\t\t}

\t\t\t\tif(ExternalInterface.available && !securityIssue) {
\t\t\t\t\tExternalInterface.call(\"console.log\", t);
\t\t\t\t}
\t\t\t}
\t\t}
\t\tprivate function debugMsgHandler(e:JplayerEvent):void {
\t\t\tlog(e.msg);
\t\t}
\t\tprivate function keyboardHandler(e:KeyboardEvent):void {
\t\t\tlog(\"keyboardHandler: e.keyCode = \" + e.keyCode);
\t\t\tswitch(e.keyCode) {
\t\t\t\tcase 68 : // d
\t\t\t\t\ttxLog.visible = !txLog.visible;
\t\t\t\t\tlog(\"Toggled log display: \" + txLog.visible);
\t\t\t\t\tbreak;
\t\t\t\tcase 76 : // l
\t\t\t\t\tif(e.ctrlKey && e.shiftKey) {
\t\t\t\t\t\ttxLog.text = \"Cleared log.\";
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t}
\t\t}
\t}
}
";
        
        $__internal_023b12f73bcee06234b57cb5b2c7ed6819e8d220a0337b557df90622f3446154->leave($__internal_023b12f73bcee06234b57cb5b2c7ed6819e8d220a0337b557df90622f3446154_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/actionscript/Jplayer.as";
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
 * jPlayer Plugin for jQuery JavaScript Library
 * http://www.jplayer.org
 *
 * Copyright (c) 2009 - 2013 Happyworm Ltd
 * Licensed under the MIT.
 * http://opensource.org/licenses/MIT
 *
 * Author: Mark J Panaghiston
 * Version: 2.4.0
 * Date: 5th June 2013
 *
 * FlashVars expected: (AS3 property of: loaderInfo.parameters)
 *\tid: \t(URL Encoded: String) Id of jPlayer instance
 *\tvol:\t(Number) Sets the initial volume
 *\tmuted:\t(Boolean in a String) Sets the initial muted state
 *\tjQuery:\t(URL Encoded: String) Sets the jQuery var name. Used with: someVar = jQuery.noConflict(true); The someVar name must contain jQuery in it.
 *
 * Compiled using: Adobe Flex Compiler (mxmlc) Version 4.5.1 build 21328
 */

package {
\timport flash.system.Security;
\timport flash.external.ExternalInterface;

\timport flash.utils.Timer;
\timport flash.events.TimerEvent;
\t
\timport flash.text.TextField;
\timport flash.text.TextFormat;

\timport flash.events.KeyboardEvent;

\timport flash.display.Sprite;
\timport happyworm.jPlayer.*;

\timport flash.display.StageAlign;
\timport flash.display.StageScaleMode;
\timport flash.events.Event;
\timport flash.net.LocalConnection;
\timport flash.events.StatusEvent;

\timport flash.events.MouseEvent;

\timport flash.ui.ContextMenu;
\timport flash.ui.ContextMenuItem;
\timport flash.events.ContextMenuEvent;
\timport flash.net.URLRequest;
\timport flash.net.navigateToURL;
\timport flash.media.Video;

\tpublic class Jplayer extends Sprite {
\t\tprivate var jQuery:String;
\t\tprivate var sentNumberFractionDigits:uint = 2;

\t\tpublic var commonStatus:JplayerStatus = new JplayerStatus(); // Used for inital ready event so volume is correct.

\t\tprivate var myInitTimer:Timer = new Timer(100, 0);

\t\tprivate var myMp3Player:JplayerMp3;
\t\tprivate var myMp4Player:JplayerMp4;

\t\tprivate var myRtmpPlayer:JplayerRtmp;
\t\t
\t\tprivate var isRtmp:Boolean = false;
\t\tprivate var isMp4:Boolean = false;

\t\tprivate var isMp3:Boolean = false;
\t\tprivate var isVideo:Boolean = false;

\t\tprivate var securityIssue:Boolean = false; // On direct access and when SWF parameters contain illegal characters

\t\tprivate var contextMenuFix:Sprite = new Sprite(); // A sprite that will be on top and fix the content menu over video bug. (A Flash plugin bug.)

\t\tprivate var txLog:TextField;
\t\tprivate var debug:Boolean = false; // Set debug to false for release compile!
\t\tprivate var localAIRDebug:Boolean = false; // This is autodetermined by AIR app - leave false!

\t\tprivate var traceOut:TraceOut;

\t\tpublic function Jplayer() {

\t\t\tflash.system.Security.allowDomain(\"*\");
\t\t\ttraceOut = new TraceOut();

\t\t\t// Fix to the security exploit reported by Jason Calvert http://appsec.ws/
\t\t\tcheckFlashVars(loaderInfo.parameters);

\t\t\tstage.scaleMode = StageScaleMode.NO_SCALE;
\t\t\tstage.align = StageAlign.TOP_LEFT;

\t\t\tif(!securityIssue) {
\t\t\t\t// The jQuery param is the primary cause of security concerns.
\t\t\t\tjQuery = loaderInfo.parameters.jQuery + \"('#\" + loaderInfo.parameters.id + \"').jPlayer\";
\t\t\t\tcommonStatus.volume = Number(loaderInfo.parameters.vol);
\t\t\t\tcommonStatus.muted = loaderInfo.parameters.muted == \"true\";

\t\t\t\tstage.addEventListener(Event.RESIZE, resizeHandler);
\t\t\t\tstage.addEventListener(MouseEvent.CLICK, clickHandler);

\t\t\t\tvar initialVolume:Number = commonStatus.volume;
\t\t\t\tif(commonStatus.muted) {
\t\t\t\t\tinitialVolume = 0;
\t\t\t\t}

\t\t\t\tmyMp3Player = new JplayerMp3(initialVolume);
\t\t\t\taddChild(myMp3Player);

\t\t\t\tmyMp4Player = new JplayerMp4(initialVolume);
\t\t\t\taddChild(myMp4Player);

\t\t\t\tmyRtmpPlayer = new JplayerRtmp(initialVolume);
\t\t\t\taddChild(myRtmpPlayer);

\t\t\t\tswitchType(\"mp3\"); // set default state to mp3
\t\t\t}

\t\t\t// The ContextMenu only partially works. The menu select events never occur.
\t\t\t// Investigated and it is something to do with the way jPlayer inserts the Flash on the page.
\t\t\t// A simple test inserting the Jplayer.swf on a page using: 1) SWFObject 2.2 works. 2) AC_FL_RunContent() works.
\t\t\t// jPlayer Flash insertion is based on SWFObject 2.2 and the resaon behind this failure is not clear. The Flash insertion HTML on the page looks similar.
\t\t\tvar myContextMenu:ContextMenu = new ContextMenu();
\t\t\tmyContextMenu.hideBuiltInItems();
\t\t\tvar menuItem_jPlayer:ContextMenuItem = new ContextMenuItem(\"jPlayer \" + JplayerStatus.VERSION);
\t\t\tvar menuItem_happyworm:ContextMenuItem = new ContextMenuItem(\"© 2009-2013 Happyworm Ltd\", true);
\t\t\tmenuItem_jPlayer.addEventListener(ContextMenuEvent.MENU_ITEM_SELECT, menuSelectHandler_jPlayer);
\t\t\tmenuItem_happyworm.addEventListener(ContextMenuEvent.MENU_ITEM_SELECT, menuSelectHandler_happyworm);
\t\t\tmyContextMenu.customItems.push(menuItem_jPlayer, menuItem_happyworm);
\t\t\tcontextMenu = myContextMenu;

\t\t\t// Log console for dev compile option: debug
\t\t\tif(debug || securityIssue) {
\t\t\t\ttxLog = new TextField();
\t\t\t\ttxLog.x = 5;
\t\t\t\ttxLog.y = 5;
\t\t\t\ttxLog.width = stage.stageWidth - 10;
\t\t\t\ttxLog.height = stage.stageHeight - 10;
\t\t\t\ttxLog.backgroundColor = 0xEEEEFF;
\t\t\t\ttxLog.border = true;
\t\t\t\ttxLog.background = true;
\t\t\t\ttxLog.multiline = true;
\t\t\t\ttxLog.text = \"jPlayer \" + JplayerStatus.VERSION;

\t\t\t\tif(securityIssue) {
\t\t\t\t\ttxLog.visible = true;
\t\t\t\t} else if(debug) {
\t\t\t\t\ttxLog.visible = false;
\t\t\t\t}

\t\t\t\tthis.addChild(txLog);

\t\t\t\tif(debug && !securityIssue) {
\t\t\t\t\tthis.stage.addEventListener(KeyboardEvent.KEY_UP, keyboardHandler);

\t\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.DEBUG_MSG, debugMsgHandler);
\t\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.DEBUG_MSG, debugMsgHandler);
\t\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.DEBUG_MSG, debugMsgHandler);
\t\t\t\t}
\t\t\t}

\t\t\t// Known Flash problem with contextMenu over video player.
\t\t\t// Add a transparent rectangle into the sprite.
\t\t\tcontextMenuFix.graphics.beginFill(0x000000, 0); // Transparent black
\t\t\tcontextMenuFix.graphics.drawRect(0, 0, 10, 10); // Arbitary rectangle
\t\t\tcontextMenuFix.graphics.endFill();
\t\t\taddChild(contextMenuFix); // Put the sprite on the top layer.

\t\t\tif(!securityIssue) {
\t\t\t\t// Delay init() because Firefox 3.5.7+ developed a bug with local testing in Firebug.
\t\t\t\tmyInitTimer.addEventListener(TimerEvent.TIMER, init);
\t\t\t\tmyInitTimer.start();
\t\t\t}
\t\t}

\t\tprivate function switchType(playType:String):void {
\t\t\tswitch(playType) {
\t\t\t\tcase \"rtmpa\":
\t\t\t\tisRtmp=true;
\t\t\t\tisMp3=false;
\t\t\t\tisMp4=false;
\t\t\t\tisVideo=false;
\t\t\t\tbreak;
\t\t\tcase \"rtmpv\":
\t\t\t\tisRtmp=true;
\t\t\t\tisMp3=false;
\t\t\t\tisMp4=false;
\t\t\t\tisVideo=true;
\t\t\t\tbreak;
\t\t\tcase \"mp3\":
\t\t\t\tisRtmp=false;
\t\t\t\tisMp3=true;
\t\t\t\tisMp4=false;
\t\t\t\tisVideo=false;
\t\t\t\tbreak;
\t\t\tcase \"mp4\":
\t\t\t\tisRtmp=false;
\t\t\t\tisMp3=false;
\t\t\t\tisMp4=true;
\t\t\t\tisVideo=false;
\t\t\t\tbreak;
\t\t\tcase \"m4v\":
\t\t\t\tisRtmp=false;
\t\t\t\tisMp3=false;
\t\t\t\tisMp4=true;
\t\t\t\tisVideo=true;
\t\t\t\tbreak;
\t\t\t}
\t\t\t
\t\t\tlistenToMp3(isMp3);
\t\t\tlistenToMp4(isMp4);
\t\t\tlistenToRtmp(isRtmp);
\t\t}
\t\t
\t\tprivate function init(e:TimerEvent):void {
\t\t\tmyInitTimer.stop();
\t\t\tif(ExternalInterface.available && !securityIssue) {
\t\t\t\tExternalInterface.addCallback(\"fl_setAudio_mp3\", fl_setAudio_mp3);
\t\t\t\tExternalInterface.addCallback(\"fl_setAudio_m4a\", fl_setAudio_m4a);
\t\t\t\tExternalInterface.addCallback(\"fl_setVideo_m4v\", fl_setVideo_m4v);
\t\t\t\tExternalInterface.addCallback(\"fl_setAudio_rtmp\", fl_setAudio_rtmp);
\t\t\t\tExternalInterface.addCallback(\"fl_setVideo_rtmp\", fl_setVideo_rtmp);
\t\t\t\tExternalInterface.addCallback(\"fl_clearMedia\", fl_clearMedia);
\t\t\t\tExternalInterface.addCallback(\"fl_load\", fl_load);
\t\t\t\tExternalInterface.addCallback(\"fl_play\", fl_play);
\t\t\t\tExternalInterface.addCallback(\"fl_pause\", fl_pause);
\t\t\t\tExternalInterface.addCallback(\"fl_play_head\", fl_play_head);
\t\t\t\tExternalInterface.addCallback(\"fl_volume\", fl_volume);
\t\t\t\tExternalInterface.addCallback(\"fl_mute\", fl_mute);

\t\t\t\tExternalInterface.call(jQuery, \"jPlayerFlashEvent\", JplayerEvent.JPLAYER_READY, extractStatusData(commonStatus)); // See JplayerStatus() class for version number.
\t\t\t}
\t\t}
\t\tprivate function checkFlashVars(p:Object):void {
\t\t\t// Check for direct access. Inspired by mediaelement.js - Also added name to HTML object for non-IE browsers.
\t\t\tif(ExternalInterface.objectID != null && ExternalInterface.objectID.toString() != \"\") {
\t\t\t\tfor each (var s:String in p) {
\t\t\t\t\tif(illegalChar(s)) {
\t\t\t\t\t\tsecurityIssue = true; // Found a security concern.
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tif(!securityIssue) {
\t\t\t\t\tif(jQueryIllegal(p.jQuery)) {
\t\t\t\t\t\tsecurityIssue = true; // Found a security concern.
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\tsecurityIssue = true; // Direct access disables the callbacks, which were a security concern.
\t\t\t}
\t\t}
\t\tprivate function illegalChar(s:String):Boolean {
\t\t\t// A whitelist of accepted chars.
\t\t\tvar validParam:RegExp = /^[-A-Za-z0-9_.]+\$/;
\t\t\treturn !validParam.test(s);
\t\t}
\t\tprivate function jQueryIllegal(s:String):Boolean {
\t\t\t// Check param contains the term jQuery.
\t\t\tvar validParam:RegExp = /(jQuery)/;
\t\t\treturn !validParam.test(s);
\t\t}
\t\t// switchType() here
\t\tprivate function listenToMp3(active:Boolean):void {
\t\t\tif(active) {
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_ERROR, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_PROGRESS, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_TIMEUPDATE, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_ENDED, jPlayerFlashEvent);
\t\t\t\t
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_PLAY, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_PAUSE, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_LOADSTART, jPlayerFlashEvent);

\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_SEEKING, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_SEEKED, jPlayerFlashEvent);

\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_WAITING, jPlayerFlashEvent); // only MP3 atm
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_PLAYING, jPlayerFlashEvent); // only MP3 atm

\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_CANPLAY, jPlayerFlashEvent); // only MP3 atm
\t\t\t\tmyMp3Player.addEventListener(JplayerEvent.JPLAYER_CANPLAYTHROUGH, jPlayerFlashEvent); // only MP3 atm
\t\t\t} else {
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_ERROR, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_PROGRESS, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_TIMEUPDATE, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_ENDED, jPlayerFlashEvent);
\t\t\t\t
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_PLAY, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_PAUSE, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_LOADSTART, jPlayerFlashEvent);

\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_SEEKING, jPlayerFlashEvent);
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_SEEKED, jPlayerFlashEvent);

\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_WAITING, jPlayerFlashEvent); // only MP3 atm
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_PLAYING, jPlayerFlashEvent); // only MP3 atm

\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_CANPLAY, jPlayerFlashEvent); // only MP3 atm
\t\t\t\tmyMp3Player.removeEventListener(JplayerEvent.JPLAYER_CANPLAYTHROUGH, jPlayerFlashEvent); // only MP3 atm
\t\t\t}
\t\t}
\t\tprivate function listenToMp4(active:Boolean):void {
\t\t\tif(active) {
\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_ERROR, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_PROGRESS, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_TIMEUPDATE, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_ENDED, jPlayerFlashEvent);

\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_PLAY, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_PAUSE, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_LOADSTART, jPlayerFlashEvent);

\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_SEEKING, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_SEEKED, jPlayerFlashEvent);

\t\t\t\tmyMp4Player.addEventListener(JplayerEvent.JPLAYER_LOADEDMETADATA, jPlayerMetaDataHandler); // Note the unique handler
\t\t\t} else {
\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_ERROR, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_PROGRESS, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_TIMEUPDATE, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_ENDED, jPlayerFlashEvent);

\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_PLAY, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_PAUSE, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_LOADSTART, jPlayerFlashEvent);

\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_SEEKING, jPlayerFlashEvent);
\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_SEEKED, jPlayerFlashEvent);

\t\t\t\tmyMp4Player.removeEventListener(JplayerEvent.JPLAYER_LOADEDMETADATA, jPlayerMetaDataHandler); // Note the unique handler
\t\t\t}
\t\t}

\t\tprivate function listenToRtmp(active:Boolean):void {
\t\t\tif(active) {
\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_ERROR, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_PROGRESS, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_TIMEUPDATE, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_ENDED, jPlayerFlashEvent);

\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_PLAY, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_PAUSE, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_LOADSTART, jPlayerFlashEvent);
\t\t\t\t
\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_CANPLAY, jPlayerFlashEvent);

\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_SEEKING, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_SEEKED, jPlayerFlashEvent);

\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_LOADEDMETADATA, jPlayerMetaDataHandler); // Note the unique handler
\t\t\t} else {
\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_ERROR, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_PROGRESS, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_TIMEUPDATE, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_ENDED, jPlayerFlashEvent);

\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_PLAY, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_PAUSE, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_LOADSTART, jPlayerFlashEvent);
\t\t\t\t
\t\t\t\tmyRtmpPlayer.addEventListener(JplayerEvent.JPLAYER_CANPLAY, jPlayerFlashEvent);

\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_SEEKING, jPlayerFlashEvent);
\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_SEEKED, jPlayerFlashEvent);

\t\t\t\tmyRtmpPlayer.removeEventListener(JplayerEvent.JPLAYER_LOADEDMETADATA, jPlayerMetaDataHandler); // Note the unique handler
\t\t\t}
\t\t}

\t\tprivate function fl_setAudio_mp3(src:String):Boolean {
\t\t\tif (src != null) {
\t\t\t\tlog(\"fl_setAudio_mp3: \"+src);
\t\t\t\tswitchType(\"mp3\");
\t\t\t\tmyMp4Player.clearFile();
\t\t\t\tmyRtmpPlayer.clearFile();
\t\t\t\tmyMp3Player.setFile(src);
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\tlog(\"fl_setAudio_mp3: null\");
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\tprivate function fl_setAudio_rtmp(src:String):Boolean {
\t\t\ttracer(\"SET RTMP: \"+src);
\t\t\tif (src != null) {
\t\t\t\tlog(\"fl_setAudio_rtmp: \"+src);
\t\t\t\tswitchType(\"rtmpa\");
\t\t\t\tmyMp4Player.clearFile();
\t\t\t\tmyMp3Player.clearFile();
\t\t\t\tmyRtmpPlayer.setFile(src,false);
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\tlog(\"fl_setAudio_rtmp: null\");
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\t
\t\tprivate function fl_setVideo_rtmp(src:String):Boolean {
\t\t\ttracer(\"SET RTMP: \"+src);
\t\t\tif (src != null) {
\t\t\t\tlog(\"fl_setVideo_rtmp: \"+src);
\t\t\t\tswitchType(\"rtmpv\");
\t\t\t\tmyMp4Player.clearFile();
\t\t\t\tmyMp3Player.clearFile();
\t\t\t\tmyRtmpPlayer.setFile(src,true);
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\tlog(\"fl_setVideo_rtmp: null\");
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\tprivate function fl_setAudio_m4a(src:String):Boolean {
\t\t\tif (src != null) {
\t\t\t\tlog(\"fl_setAudio_m4a: \"+src);
\t\t\t\tswitchType(\"mp4\")
\t\t\t\tmyMp3Player.clearFile();
\t\t\t\tmyRtmpPlayer.clearFile();
\t\t\t\tmyMp4Player.setFile(src);
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\tlog(\"fl_setAudio_m4a: null\");
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\tprivate function fl_setVideo_m4v(src:String):Boolean {
\t\t\tif (src != null) {
\t\t\t\tlog(\"fl_setVideo_m4v: \"+src);
\t\t\t\tswitchType(\"m4v\");
\t\t\t\tmyMp3Player.clearFile();
\t\t\t\tmyRtmpPlayer.clearFile();
\t\t\t\tmyMp4Player.setFile(src);
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\tlog(\"fl_setVideo_m4v: null\");
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\tprivate function fl_clearMedia():void {
\t\t\tlog(\"clearMedia.\");
\t\t\tmyMp3Player.clearFile();
\t\t\tmyMp4Player.clearFile();
\t\t\tmyRtmpPlayer.clearFile();
\t\t}

\t\tprivate function getType():Object {
\t\t\tvar returnType:Object;
\t\t\tif(isMp3) {
\t\t\t\treturnType=myMp3Player;
\t\t\t} 
\t\t\tif(isRtmp) {
\t\t\t\treturnType=myRtmpPlayer;
\t\t\t}
\t\t\tif(isMp4) {
\t\t\t\treturnType=myMp4Player;
\t\t\t}
\t\t\treturn returnType;
\t\t}

\t\tprivate function fl_load():Boolean {
\t\t\tlog(\"load.\");
\t\t\tvar returnType:Object = getType();
\t\t\treturn returnType.load();
\t\t}
\t\tprivate function fl_play(time:Number = NaN):Boolean {
\t\t\tlog(\"play: time = \" + time);
\t\t\tvar returnType:Object = getType();
\t\t\treturn returnType.play(time * 1000); // Flash uses milliseconds
\t\t}
\t\tprivate function fl_pause(time:Number = NaN):Boolean {
\t\t\tlog(\"pause: time = \" + time);
\t\t\tvar returnType:Object = getType();
\t\t\treturn returnType.pause(time * 1000); // Flash uses milliseconds
\t\t}
\t\tprivate function fl_play_head(percent:Number):Boolean {
\t\t\tlog(\"play_head: \"+percent+\"%\");
\t\t\tvar returnType:Object = getType();
\t\t\treturn returnType.playHead(percent);
\t\t}
\t\tprivate function fl_volume(v:Number):void {
\t\t\tlog(\"volume: \"+v);
\t\t\tcommonStatus.volume = v;
\t\t\tif(!commonStatus.muted) {
\t\t\t\tmyMp3Player.setVolume(v);
\t\t\t\tmyMp4Player.setVolume(v);
\t\t\t\tmyRtmpPlayer.setVolume(v);
\t\t\t}
\t\t}
\t\tprivate function fl_mute(mute:Boolean):void {
\t\t\tlog(\"mute: \"+mute);
\t\t\tcommonStatus.muted = mute;
\t\t\tif(mute) {
\t\t\t\tmyMp3Player.setVolume(0);
\t\t\t\tmyMp4Player.setVolume(0);
\t\t\t\tmyRtmpPlayer.setVolume(0);
\t\t\t} else {
\t\t\t\tmyMp3Player.setVolume(commonStatus.volume);
\t\t\t\tmyMp4Player.setVolume(commonStatus.volume);
\t\t\t\tmyRtmpPlayer.setVolume(commonStatus.volume);
\t\t\t}
\t\t}
\t\tprivate function jPlayerFlashEvent(e:JplayerEvent):void {
\t\t\tlog(\"jPlayer Flash Event: \" + e.type + \": \" + e.target);
\t\t\t//tracer(\"jPlayer Flash Event: \" + e.type + \": \" + e.target);
\t\t\tif(ExternalInterface.available && !securityIssue) {
\t\t\t\tExternalInterface.call(jQuery, \"jPlayerFlashEvent\", e.type, extractStatusData(e.data));
\t\t\t}
\t\t}
\t\t
\t\tprivate function tracer(msg:String):void {
\t\t\ttraceOut.tracer(msg);
\t\t}
\t\t
\t\tprivate function extractStatusData(data:JplayerStatus):Object {
\t\t\tvar myStatus:Object = {
\t\t\t\tversion: JplayerStatus.VERSION,
\t\t\t\tsrc: data.src,
\t\t\t\tpaused: !data.isPlaying, // Changing this name requires inverting all assignments and conditional statements.
\t\t\t\tsrcSet: data.srcSet,
\t\t\t\tseekPercent: data.seekPercent,
\t\t\t\tcurrentPercentRelative: data.currentPercentRelative,
\t\t\t\tcurrentPercentAbsolute: data.currentPercentAbsolute,
\t\t\t\tcurrentTime: data.currentTime / 1000, // JavaScript uses seconds
\t\t\t\tduration: data.duration / 1000, // JavaScript uses seconds
\t\t\t\tvideoWidth: data.videoWidth,
\t\t\t\tvideoHeight: data.videoHeight,
\t\t\t\tvolume: commonStatus.volume,
\t\t\t\tmuted: commonStatus.muted
\t\t\t};
\t\t\tlog(\"extractStatusData: sp=\"+myStatus.seekPercent+\" cpr=\"+myStatus.currentPercentRelative+\" cpa=\"+myStatus.currentPercentAbsolute+\" ct=\"+myStatus.currentTime+\" d=\"+myStatus.duration);
\t\t\treturn myStatus;
\t\t}
\t\tprivate function jPlayerMetaDataHandler(e:JplayerEvent):void {
\t\t\tlog(\"jPlayerMetaDataHandler:\" + e.target);
\t\t\tif(ExternalInterface.available && !securityIssue) {
\t\t\t\tresizeHandler(new Event(Event.RESIZE));
\t\t\t\tExternalInterface.call(jQuery, \"jPlayerFlashEvent\", e.type, extractStatusData(e.data));
\t\t\t}
\t\t}
\t\tprivate function resizeHandler(e:Event):void {
\t\t\tlog(\"resizeHandler: stageWidth = \" + stage.stageWidth + \" | stageHeight = \" + stage.stageHeight);

\t\t\tvar mediaX:Number = 0;
\t\t\tvar mediaY:Number = 0;
\t\t\tvar mediaWidth:Number = 0;
\t\t\tvar mediaHeight:Number = 0;
\t\t\t
\t\t\tvar aspectRatioStage:Number = 0;
\t\t\tvar aspectRatioVideo:Number = 0;
\t\t\t
\t\t\tvar videoItem:*;
\t\t\t
\t\t\tif(isRtmp) {
\t\t\t\tvideoItem = myRtmpPlayer;
\t\t\t}
\t\t\tif(isMp4) {
\t\t\t\tvideoItem = myMp4Player;
\t\t\t}
\t\t\t
\t\t\tif(videoItem) {
\t\t\t\tif(stage.stageWidth > 0 && stage.stageHeight > 0 && videoItem.myVideo.width > 0 && videoItem.myVideo.height > 0) {
\t\t\t\t\taspectRatioStage = stage.stageWidth / stage.stageHeight;
\t\t\t\t\taspectRatioVideo = videoItem.myVideo.width / videoItem.myVideo.height;
\t\t\t\t\tif(aspectRatioStage < aspectRatioVideo) {
\t\t\t\t\t\tmediaWidth = stage.stageWidth;
\t\t\t\t\t\tmediaHeight = stage.stageWidth / aspectRatioVideo;
\t\t\t\t\t\tmediaX = 0;
\t\t\t\t\t\tmediaY = (stage.stageHeight - mediaHeight) / 2;
\t\t\t\t\t} else {
\t\t\t\t\t\tmediaWidth = stage.stageHeight * aspectRatioVideo;
\t\t\t\t\t\tmediaHeight = stage.stageHeight;
\t\t\t\t\t\tmediaX = (stage.stageWidth - mediaWidth) / 2;
\t\t\t\t\t\tmediaY = 0;
\t\t\t\t\t}
\t\t\t\t\tresizeEntity(videoItem, mediaX, mediaY, mediaWidth, mediaHeight);
\t\t\t\t}
\t\t\t}
\t\t\tif((debug || securityIssue) && stage.stageWidth > 20 && stage.stageHeight > 20) {
\t\t\t\ttxLog.width = stage.stageWidth - 10;
\t\t\t\ttxLog.height = stage.stageHeight - 10;
\t\t\t}
\t\t\t// Resize the sprite so it covers the entire stage area
\t\t\tcontextMenuFix.x = 0;
\t\t\tcontextMenuFix.y = 0;
\t\t\tcontextMenuFix.width = stage.stageWidth;
\t\t\tcontextMenuFix.height = stage.stageHeight;
\t\t}
\t\tprivate function resizeEntity(entity:Sprite, mediaX:Number, mediaY:Number, mediaWidth:Number, mediaHeight:Number):void {
\t\t\tentity.x = mediaX;
\t\t\tentity.y = mediaY;
\t\t\tentity.width = mediaWidth;
\t\t\tentity.height = mediaHeight;
\t\t}
\t\tprivate function clickHandler(e:MouseEvent):void {
\t\t\t// This needs to work with RTMP format too!
\t\t\tif(isMp3) {
\t\t\t\tjPlayerFlashEvent(new JplayerEvent(JplayerEvent.JPLAYER_CLICK, myMp3Player.myStatus, \"click\"))
\t\t\t} else {
\t\t\t\tjPlayerFlashEvent(new JplayerEvent(JplayerEvent.JPLAYER_CLICK, myMp4Player.myStatus, \"click\"))
\t\t\t}
\t\t}
\t\t// This event is never called. See comments in class constructor.
\t\tprivate function menuSelectHandler_jPlayer(e:ContextMenuEvent):void {
\t\t\tnavigateToURL(new URLRequest(\"http://jplayer.org/\"), \"_blank\");
\t\t}
\t\t// This event is never called. See comments in class constructor.
\t\tprivate function menuSelectHandler_happyworm(e:ContextMenuEvent):void {
\t\t\tnavigateToURL(new URLRequest(\"http://happyworm.com/\"), \"_blank\");
\t\t}
\t\tprivate function log(t:String):void {
\t\t\tif(debug) {
\t\t\t\ttxLog.text = t + \"\\n\" + txLog.text;
\t\t\t\tlocalAIRDebug = traceOut.localAIRDebug();
\t\t\t\tif(localAIRDebug) {
\t\t\t\t\ttracer(t);
\t\t\t\t}

\t\t\t\tif(ExternalInterface.available && !securityIssue) {
\t\t\t\t\tExternalInterface.call(\"console.log\", t);
\t\t\t\t}
\t\t\t}
\t\t}
\t\tprivate function debugMsgHandler(e:JplayerEvent):void {
\t\t\tlog(e.msg);
\t\t}
\t\tprivate function keyboardHandler(e:KeyboardEvent):void {
\t\t\tlog(\"keyboardHandler: e.keyCode = \" + e.keyCode);
\t\t\tswitch(e.keyCode) {
\t\t\t\tcase 68 : // d
\t\t\t\t\ttxLog.visible = !txLog.visible;
\t\t\t\t\tlog(\"Toggled log display: \" + txLog.visible);
\t\t\t\t\tbreak;
\t\t\t\tcase 76 : // l
\t\t\t\t\tif(e.ctrlKey && e.shiftKey) {
\t\t\t\t\t\ttxLog.text = \"Cleared log.\";
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t}
\t\t}
\t}
}
", "@MwebAdmin/filemanager/js/jPlayer/actionscript/Jplayer.as", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/actionscript/Jplayer.as");
    }
}
