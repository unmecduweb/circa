<?php

/* @MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerRtmp.as */
class __TwigTemplate_afb385bfb3aa4717175ddb52ad1b566d3bb266c118b5413d3189913c90ce9173 extends Twig_Template
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
        $__internal_ee0c4c9f183327841510dbc23f7404078ab1cea0b6e946862166223c0c571649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0c4c9f183327841510dbc23f7404078ab1cea0b6e946862166223c0c571649->enter($__internal_ee0c4c9f183327841510dbc23f7404078ab1cea0b6e946862166223c0c571649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerRtmp.as"));

        // line 1
        echo "/*
 * jPlayer Plugin for jQuery JavaScript Library
 * http://www.jplayer.org
 *
 * Copyright (c) 2009 - 2013 Happyworm Ltd
 * Licensed under the MIT license.
 * http://opensource.org/licenses/MIT
 *
 * Author: Robert M. Hall
 * Date: 29th January 2013
 * Based on JplayerMp4.as with modifications for rtmp
 */

package happyworm.jPlayer
{
\timport flash.display.Sprite;

\timport flash.media.Video;
\timport flash.media.SoundTransform;

\timport flash.net.NetConnection;
\timport flash.net.NetStream;
\timport flash.net.Responder;

\timport flash.utils.Timer;
\timport flash.utils.getTimer;

\timport flash.events.NetStatusEvent;
\timport flash.events.SecurityErrorEvent;
\timport flash.events.TimerEvent;
\timport flash.events.ErrorEvent;
\timport flash.events.UncaughtErrorEvent;
\timport flash.utils.clearInterval;
\timport flash.utils.setInterval;
\timport happyworm.jPlayer.ConnectManager;

\tpublic class JplayerRtmp extends Sprite
\t{

\t\tpublic var myVideo:Video = new Video;
\t\tprivate var myConnection:NetConnection;
\t\tprivate var myStream:NetStream;

\t\tpublic var responder:Responder;

\t\tprivate var streamName:String;
\t\t
\t\tprivate var connectString:Object;

\t\tprivate var firstTime:Boolean = true;

\t\tprivate var myTransform:SoundTransform = new SoundTransform  ;

\t\tpublic var myStatus:JplayerStatus = new JplayerStatus  ;

\t\tprivate var ConnMgr:ConnectManager=new ConnectManager();

\t\tprivate var timeUpdateTimer:Timer = new Timer(250,0);// Matched to HTML event freq
\t\tprivate var progressTimer:Timer = new Timer(250,0);// Matched to HTML event freq
\t\tprivate var seekingTimer:Timer = new Timer(100,0);// Internal: How often seeking is checked to see if it is over.

\t\tprivate var startBuffer:Number = 3;
\t\tprivate var maxBuffer:Number = 12;

\t\tpublic function JplayerRtmp(volume:Number)
\t\t{
\t\t\tmyConnection = new NetConnection  ;
\t\t\tmyConnection.client = this;
\t\t\t

\t\t\t// Moved the netconnection negotiation into the ConnectManager.as class - not needed for initial connection
\t\t\t// may need to add eventHandler back in for errors only or just dispatch from the ConnectManager..revisit...
\t\t\t
\t\t\t// myConnection.addEventListener(NetStatusEvent.NET_STATUS,netStatusHandler);
\t\t\t// myConnection.addEventListener(SecurityErrorEvent.SECURITY_ERROR,securityErrorHandler);
\t\t\tmyVideo.smoothing = true;
\t\t\tthis.addChild(myVideo);

\t\t\ttimeUpdateTimer.addEventListener(TimerEvent.TIMER,timeUpdateHandler);
\t\t\tprogressTimer.addEventListener(TimerEvent.TIMER,progressHandler);
\t\t\tseekingTimer.addEventListener(TimerEvent.TIMER,seekingHandler);

\t\t\tmyStatus.volume = volume;
\t\t\t
\t\t\taddEventListener(UncaughtErrorEvent.UNCAUGHT_ERROR, uncaughtErrorHandler);

\t\t\t
\t\t}
\t\t
\t\t
        
        private function uncaughtErrorHandler(event:UncaughtErrorEvent):void
        {
\t\t\ttrace(\"UNCAUGHT ERROR - try loading again\");
\t\t\t
            if (event.error is Error)
            {
                var error:Error = event.error as Error;
\t\t\t\ttrace(error);
                // do something with the error
            }
            else if (event.error is ErrorEvent)
            {
                var errorEvent:ErrorEvent = event.error as ErrorEvent;
                // do something with the error
\t\t\t\ttrace(errorEvent);
            }
            else
            {
                // a non-Error, non-ErrorEvent type was thrown and uncaught
            }
\t\t\tload();
        }
\t\t
\t\t
\t\t
\t\tprivate function progressUpdates(active:Boolean):void
\t\t{
\t\t\tif (active)
\t\t\t{
\t\t\t\tprogressTimer.start();
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tprogressTimer.stop();
\t\t\t}
\t\t}
\t\t
\t\tprivate function progressHandler(e:TimerEvent):void
\t\t{
\t\t\tif (myStatus.isLoading)
\t\t\t{
\t\t\t\tif ((getLoadRatio() == 1))
\t\t\t\t{// Close as can get to a loadComplete event since client.onPlayStatus only works with FMS
\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"progressHandler: loadComplete\"));
\t\t\t\t\tmyStatus.loaded();
\t\t\t\t\tprogressUpdates(false);
\t\t\t\t}
\t\t\t}
\t\t\tprogressEvent();
\t\t}
\t\t
\t\tprivate function progressEvent():void
\t\t{
\t\t\t// temporarily disabled progress event dispatching - not really needed for rtmp
\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"progressEvent:\"));
\t\t\tupdateStatusValues();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PROGRESS,myStatus));
\t\t}
\t\t
\t\tprivate function timeUpdates(active:Boolean):void
\t\t{
\t\t\tif (active)
\t\t\t{
\t\t\t\ttimeUpdateTimer.start();
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\ttimeUpdateTimer.stop();
\t\t\t}
\t\t}
\t\t
\t\tprivate function timeUpdateHandler(e:TimerEvent):void
\t\t{
\t\t\ttimeUpdateEvent();
\t\t}
\t\t
\t\tprivate function timeUpdateEvent():void
\t\t{
\t\t\tupdateStatusValues();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_TIMEUPDATE,myStatus));
\t\t}
\t\tprivate function seeking(active:Boolean):void
\t\t{
\t\t\tif (active)
\t\t\t{
\t\t\t\tif (! myStatus.isSeeking)
\t\t\t\t{
\t\t\t\t\tseekingEvent();
\t\t\t\t}
\t\t\t\tseekingTimer.start();
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tif (myStatus.isSeeking)
\t\t\t\t{
\t\t\t\t\tseekedEvent();
\t\t\t\t}
\t\t\t\tseekingTimer.stop();
\t\t\t}
\t\t}
\t\tprivate function seekingHandler(e:TimerEvent):void
\t\t{
\t\t\tif ((getSeekTimeRatio() <= getLoadRatio()))
\t\t\t{
\t\t\t\tseeking(false);
\t\t\t\tif (myStatus.playOnSeek)
\t\t\t\t{
\t\t\t\t\tmyStatus.playOnSeek = false;// Capture the flag.
\t\t\t\t\tplay(myStatus.pausePosition);// Must pass time or the seek time is never set.
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tpause(myStatus.pausePosition);// Must pass time or the stream.time is read.
\t\t\t\t}
\t\t\t}
\t\t\telse if (myStatus.metaDataReady && myStatus.pausePosition > myStatus.duration)
\t\t\t{
\t\t\t\t// Illegal seek time
\t\t\t\tseeking(false);
\t\t\t\tpause(0);
\t\t\t}
\t\t}
\t\tprivate function seekingEvent():void
\t\t{
\t\t\tmyStatus.isSeeking = true;
\t\t\tupdateStatusValues();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_SEEKING,myStatus));
\t\t}
\t\tprivate function seekedEvent():void
\t\t{
\t\t\tmyStatus.isSeeking = false;
\t\t\tupdateStatusValues();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_SEEKED,myStatus));
\t\t}


\t\tprivate function netStatusHandler(e:NetStatusEvent):void
\t\t{
\t\t\ttrace((\"netStatusHandler: \" + e.info.code));
\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"netStatusHandler: '\" + e.info.code + \"'\"));
\t\t\t//trace(\"BEFORE: bufferTime: \"+myStream.bufferTime+\" - bufferTimeMax: \"+myStream.bufferTimeMax);
\t\t\tswitch (e.info.code)
\t\t\t{
\t\t\t\tcase \"NetConnection.Connect.Success\" :
\t\t\t\t\t// connectStream(); // This method did not do anything sensible anyway.
\t\t\t\t\t// Do not think this case occurs. This was for the static file connection.
\t\t\t\t\t// Which now seems to be handled by the Connection Manager.
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Buffer.Full\":
\t\t\t\tif(connectString.streamTYPE == \"LIVE\") {
\t\t\t\t\t\tmyStream.bufferTime = startBuffer; 
\t\t\t\t\t} else {
\t\t\t\t\t\tmyStream.bufferTime = maxBuffer; 
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Buffer.Flush\":
\t\t\t\t\tmyStream.bufferTime = startBuffer; 
\t\t\t\t\tbreak;\t
\t\t\t\tcase \"NetStream.Buffer.Empty\":
\t\t\t\t\tmyStream.bufferTime = startBuffer; 
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Seek.Notify\":
\t\t\t\t\tmyStream.bufferTime = startBuffer; 
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Play.Start\" :

\t\t\t\t\tif (firstTime) {
\t\t\t\t\t\tfirstTime = false; // Capture flag

\t\t\t\t\t\tmyStatus.loading();
\t\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_LOADSTART,myStatus));

\t\t\t\t\t\t// NB: With MP4 player both audio and video types get connected to myVideo.
\t\t\t\t\t\t// NB: Had believed it was important for the audio too, otherwise what plays it?
\t\t\t\t\t\tif(videoBinding) {
\t\t\t\t\t\t\tmyVideo.attachNetStream(myStream);
\t\t\t\t\t\t}

\t\t\t\t\t\tsetVolume(myStatus.volume);

\t\t\t\t\t\t// Really the progress event just needs to be generated once, and should probably happen before now.
\t\t\t\t\t\tprogressUpdates(true);

\t\t\t\t\t\t// This is an ASSUMPTION! Made it so that the default GUI worked.
\t\t\t\t\t\t// Hence why this part should be refactored.
\t\t\t\t\t\t// Lots of commands sequences after setMedia would be corrupted by this assumption.
\t\t\t\t\t\t// Bascally, we assume that after a setMedia, you will play it.
\t\t\t\t\t\t// Doing setMedia and pause(15) cause the flag to be set incorrectly and the GUI locks up.
\t\t\t\t\t\tmyStatus.isPlaying = true; // Should be handled elsewhere.
\t\t\t\t\t}

\t\t\t\t\t// Under RTMP, this event code occurs every time the media starts playing and when a new position is seeked to, even when paused.

\t\t\t\t\t// Since under RTMP the event behaviour is quite different, believe a refactor is best here.
\t\t\t\t\t// ie., Under RTMP we should be able to know a lot more info about the stream.

\t\t\t\t\t// See onMetaDataHandler() for other condition, since duration is vital.
\t\t\t\t\t// See onResult() response handler too.
\t\t\t\t\t// Appears to be some duplication between onMetaDataHandler() and onResult(), along with a race between them occuring.

\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Play.UnpublishNotify\":
\t\t\t\t\tmyStream.bufferTime = startBuffer; // was 3
\t\t\t\tcase \"NetStream.Play.Stop\" :
\t\t\t\t\tmyStream.bufferTime = startBuffer; // was 3
\t\t\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"NetStream.Play.Stop: getDuration() - getCurrentTime() = \" + (getDuration() - getCurrentTime())));

\t\t\t\t\t// Check if media is at the end (or close) otherwise this was due to download bandwidth stopping playback. ie., Download is not fast enough.
\t\t\t\t\tif (Math.abs((getDuration() - getCurrentTime())) < 150)
\t\t\t\t\t{// Testing found 150ms worked best for M4A files, where playHead(99.9) caused a stuck state due to firing with ~116ms left to play.
\t\t\t\t\t\t//endedEvent();
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Seek.InvalidTime\" :
\t\t\t\t\t// Used for capturing invalid set times and clicks on the end of the progress bar.
\t\t\t\t\tendedEvent();
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Play.StreamNotFound\" :
\t\t\t\t\tmyStatus.error();
\t\t\t\t\t// Resets status except the src, and it sets srcError property.;
\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_ERROR,myStatus));
\t\t\t\t\tbreak;\t\t\t\t
\t\t\t}
\t\t\t//trace(\"AFTER: bufferTime: \"+myStream.bufferTime+\" - bufferTimeMax: \"+myStream.bufferTimeMax);
\t\t\t// \"NetStream.Seek.Notify\" event code is not very useful. It occurs after every seek(t) command issued and does not appear to wait for the media to be ready.
\t\t}
\t\tprivate function endedEvent():void
\t\t{
\t\t\ttrace(\"ENDED STREAM EVENT\");
\t\t\tvar wasPlaying:Boolean = myStatus.isPlaying;

\t\t\t// timeUpdates(false);
\t\t\t// timeUpdateEvent();
\t\t\tpause(0);

\t\t\tif (wasPlaying)
\t\t\t{
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_ENDED,myStatus));
\t\t\t}
\t\t}
\t\tprivate function securityErrorHandler(event:SecurityErrorEvent):void
\t\t{
\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"securityErrorHandler.\"));
\t\t}
\t\tpublic function connectStream():void
\t\t{
\t\t\ttrace(\"CONNECTING\");
\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"connectStream.\"));
\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_CANPLAY,myStatus));
\t\t\t
\t\t\ttimeUpdates(true);
\t\t\tprogressUpdates(true);
\t\t\t//myVideo.attachNetStream(myStream);
\t\t\t//setVolume(myStatus.volume);
\t\t}

\t\tprivate function onResult(result:Object):void
\t\t{
\t\t\ttrace(\"OnResult EVENT FIRED!\");
\t\t\tmyStatus.duration = parseFloat(result.toString()) * 1000;
\t\t\ttrace(((\"The stream length is \" + result) + \" seconds\"));

\t\t\tif(!myConnection.connected) {
\t\t\t\tload();
\t\t\t} else {
\t\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_CANPLAY,myStatus,\"Rockit!\"));
\t\t\t
\t\t\t//myStatus.loaded();
\t\t\t//myStatus.isPlaying=true; 
\t\t\tif (! myStatus.metaDataReady)
\t\t\t{
\t\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"onMetaDataHandler: \" + myStatus.duration));

\t\t\t\t//  Allow multiple onResult Handlers to affect size. As per PR #131 and #98.
\t\t\t\t//  myStatus.metaDataReady = true;

\t\t\t\t/*var info:Object = new Object();
\t\t\t\tinfo.duration=myStatus.duration
\t\t\t\tinfo.width=undefined;
\t\t\t\tinfo.height=undefined;
\t\t\t\tmyStatus.metaData = info;
\t\t\t\t*/
\t\t\t\tif (myStatus.playOnLoad)
\t\t\t\t{
\t\t\t\t\tmyStatus.playOnLoad = false;// Capture the flag
\t\t\t\t\tif (myStatus.pausePosition > 0)
\t\t\t\t\t{// Important for setMedia followed by play(time).
\t\t\t\t\t\tplay(myStatus.pausePosition);
\t\t\t\t\t}
\t\t\t\t\telse
\t\t\t\t\t{
\t\t\t\t\t\tplay();// Not always sending pausePosition avoids the extra seek(0) for a normal play() command.
\t\t\t\t\t}

\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tpause(myStatus.pausePosition);// Always send the pausePosition. Important for setMedia() followed by pause(time). Deals with not reading stream.time with setMedia() and play() immediately followed by stop() or pause(0)
\t\t\t\t}
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_LOADEDMETADATA,myStatus));
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"onMetaDataHandler: Already read (NO EFFECT)\"));
\t\t\t}
\t\t\t
\t\t\tmyStream.play(streamName);
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PLAY,myStatus));
\t\t\t// timeUpdates(false);
\t\t\t}

\t\t}
\t\t
\t\tprivate var overRideConnect:Boolean=false;
\t\tpublic function doneYet():void {
\t\t\tif(!myConnection.connected) {
\t\t\t\t// try again
\t\t\t\tConnMgr.stopAll(true);
\t\t\t\toverRideConnect=true;
\t\t\t\ttrace(\"Connected: \"+myConnection.connected+\" - \"+myStatus.loadRequired());\t\t\t\t
\t\t\t\tload();
\t\t\t}
\t\t}

\t\tprivate var videoBinding:Boolean=false;
\t\tpublic function setFile(src:String,videoSupport:Boolean=false):void
\t\t{
\t\t\t// videoSupport turns on/off video - by default no video, audio only
\t\t\tvideoBinding=videoSupport;
\t\t\t/* Dont close the stream or netconnection here anymore so we can recycle if host/appname are the same
\t\t\tif ((myStream != null))
\t\t\t{
\t\t\t\tmyStream.close();
\t\t\t\tmyConnection.close();
\t\t\t}
\t\t\t*/
\t\t\tif(ConnMgr.getNegotiating() == true) {
\t\t\t    //ConnMgr.stopAll();
\t\t\t\tConnMgr.setNegotiating(false);
\t\t\t}
\t\t\t
\t\t\tmyVideo.clear();
\t\t\t
\t\t\tprogressUpdates(false);
\t\t\ttimeUpdates(false);

\t\t\tmyStatus.reset();
\t\t\tmyStatus.src = src;
\t\t\tmyStatus.srcSet = true;

\t\t\tfirstTime = true;
\t\t\t
\t\t\t//myStatus.loaded();
\t\t\t
\t\t\tif(src != \"\") {
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_CANPLAY,myStatus));
\t\t\t}
\t\t\t
\t\t\t//timeUpdateEvent();
\t\t}
\t\t
\t\tpublic function shutDownNcNs():void {
\t\t\ttrace(\"Connections Closed\");
\t\t\ttimeUpdates(false);
\t\t\tprogressUpdates(false);
\t\t\tmyStream.close();
\t\t\tmyConnection.close();
\t\t\t
\t\t\tmyStatus.reset();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_ENDED,myStatus));
\t\t}

\t\tpublic function clearFile():void
\t\t{
\t\t\tif (myStream != null)
\t\t\t{
\t\t\t\tmyStream.close();
\t\t\t\t// Dont close the netConnection here any longer, as we may recycle it later
\t\t\t\t// may need an extra way to close manually if switching media types after an rtmp session - revisit
\t\t\t\t// myConnection.close();
\t\t\t\tmyStatus.reset();
\t\t\t}
\t\t\tsetFile(\"\");
\t\t\tmyStatus.srcSet = false;
\t\t}

\t\tpublic function parseRTMPsrcConnect(rtmpSrc:String):Object
\t\t{
\t\t\t// rtmp://cp76372.live.edgefcs.net/live/Flash1Office@60204
\t\t\tvar appName:String = \"\";
\t\t\tvar streamFileName:String = \"\";
\t\t\tvar startIndex:uint = 2 + rtmpSrc.indexOf(\"//\");
\t\t\tvar streamTYPE:String = \"recorded\";
\t\t\tvar host:String = rtmpSrc.substr(startIndex);
\t\t\tvar port:String = \"\";
\t\t\thost = host.substr(0,host.indexOf(\"/\"));
\t\t\tvar endHost:Number = startIndex + host.length + 1;

\t\t\t// See if there is a host port specified
\t\t\tif(host.indexOf(\":\") != -1) {
\t\t\t\tport = host.substr(host.indexOf(\":\")+1);
\t\t\t\thost = host.substr(0,host.indexOf(\":\"));
\t\t\t}
\t\t\t
\t\t\t// Akamai specific live streams
\t\t\tif (rtmpSrc.lastIndexOf(\"/live/\") != -1)
\t\t\t{
\t\t\t\ttrace(\"LIVE!\");
\t\t\t\t
\t\t\t\t
\t\t\t\tappName = rtmpSrc.substring(endHost,rtmpSrc.lastIndexOf(\"/live/\") + 6);
\t\t\t\tstreamFileName = rtmpSrc.substr(rtmpSrc.lastIndexOf(\"/live/\") + 6);
\t\t\t\tstreamTYPE=\"LIVE\";
\t\t\t} else {
\t\t\t\tstreamTYPE=\"RECORDED\";
\t\t\t\t
\t\t\t}
\t\t\t
\t\t\t// Mp3 streams with standard appname/no instance name, mp3: prefix
\t\t\tif (rtmpSrc.indexOf(\".mp3\") != -1)
\t\t\t{
\t\t\t\tappName = rtmpSrc.substring(endHost,rtmpSrc.indexOf(\"mp3:\"));
\t\t\t\tstreamFileName = rtmpSrc.substr(rtmpSrc.indexOf(\"mp3:\"));
\t\t\t\tstreamFileName = streamFileName.substr(0,streamFileName.length - 4);
\t\t\t}
\t\t\t// rtmp://cp83813.edgefcs.net/ondemand/rob_hall/bruce_campbell_oldspice.flv
\t\t\t
\t\t\t// Mp4 streams with standard appname/no instance name, mp4: prefix
\t\t\tif (rtmpSrc.indexOf(\"mp4:\") != -1)
\t\t\t{
\t\t\t\tappName = rtmpSrc.substring(endHost,rtmpSrc.indexOf(\"mp4:\"));
\t\t\t\tstreamFileName = rtmpSrc.substr(rtmpSrc.indexOf(\"mp4:\"));
\t\t\t\tstreamFileName = streamFileName.substr(0,streamFileName.length - 4);
\t\t\t}
\t\t\t
\t\t\t// .f4v streams with standard appname/no instance name, .flv extension
\t\t\tif (rtmpSrc.indexOf(\".flv\") != -1)
\t\t\t{
\t\t\t// allow use of ^ in rtmp string to indicate break point for an appname or instance name that
\t\t\t// contains a / in it where it would require multiple connection attempts or manual configuratiom
\t\t\t// of the appname/instancename
\t\t\tvar endApp:Number=0;
\t\t\tif(rtmpSrc.indexOf(\"^\") != -1) {
\t\t\t\tendApp=rtmpSrc.indexOf(\"^\");
\t\t\t\trtmpSrc.replace(\"^\", \"/\");
\t\t\t} else {
\t\t\t\tendApp = rtmpSrc.indexOf(\"/\",endHost);
\t\t\t}
\t\t\t\tappName = rtmpSrc.substring(endHost,endApp) + \"/\";
\t\t\t\tstreamFileName = rtmpSrc.substr(endApp+1);
\t\t\t}
\t\t\t
\t\t\tif(port==\"\") {
\t\t\t\tport=\"MULTI\";
\t\t\t}
\t\t\t//rtmp, rtmpt, rtmps, rtmpe, rtmpte


\t\t\ttrace((\"\\n\\n*** HOST: \" + host));
\t\t\ttrace((\"*** PORT: \" + port));
\t\t\ttrace((\"*** APPNAME: \" + appName));
\t\t\ttrace((\"*** StreamName: \" + streamFileName));

\t\t\tvar streamParts:Object = new Object;
\t\t\tstreamParts.streamTYPE=streamTYPE;
\t\t\tstreamParts.appName = appName;
\t\t\tstreamParts.streamFileName = streamFileName;
\t\t\tstreamParts.hostName = host;
\t\t\tstreamName = streamFileName;
\t\t\t
\t\t\treturn streamParts;
\t\t}

\t\tpublic function load():Boolean
\t\t{
\t\t\t//trace(\"LOAD: \"+myStatus.src);
\t\t\tif (myStatus.loadRequired() || overRideConnect==true)
\t\t\t{
\t\t\t\toverRideConnect=false;
\t\t\t\tmyStatus.startingDownload();
\t\t\t\tvar lastAppName:String;
\t\t\t\tvar lastHostName:String;
\t\t\t\t\t
\t\t\t\ttry{
\t\t\t\t\t// we do a try, as these properties might not exist yet
\t\t\t\tif(connectString.appName != \"\" && connectString.appName != undefined) {
\t\t\t\t\ttrace(\"PREVIOUS APP/HOST INFO AVAILABLE\");
\t\t\t\t\tlastAppName = connectString.appName;
\t\t\t\t\tlastHostName = connectString.hostName;
\t\t\t\t\ttrace(\"LAST: \"+lastAppName,lastHostName);
\t\t\t\t} 
\t\t\t\t} catch (error:Error) {
\t\t\t\t\t//trace(\"*** Caught an error condition: \"+error);
\t\t\t\t}
\t\t\t\t
\t\t\t\tconnectString = parseRTMPsrcConnect(myStatus.src);
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\ttrace(\"**** LOAD :: CONNECT SOURCE: \" +connectString.hostName +\" \"+ connectString.appName);
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_WAITING, myStatus));
\t\t\t\t
\t\t\t\tif((connectString.appName == lastAppName && connectString.hostName == lastHostName) && (myConnection.connected)) {
\t\t\t\t\t// recycle the netConnection
\t\t\t\t\ttrace(\"RECYCLING NETCONNECTION\");
\t\t\t\t\tif ((myStream != null))
\t\t\t\t\t{
\t\t\t\t\t\tmyStream.close();
\t\t\t\t\t}
\t\t\t\t\tconnectStream();
\t\t\t\t\tonBWDone(null,myConnection);
\t\t\t\t} else {
\t\t\t\t\t// myConnection.connect(connectString.appName);
\t\t\t\t\ttrace(\"NEW NetConnection Negotiation\");
\t\t\t\t\tif ((myStream != null))
\t\t\t\t\t{
\t\t\t\t\t\tmyStream.close();
\t\t\t\t\t\tmyConnection.close();
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tConnMgr.stopAll(true);
\t\t\t\t\tConnMgr.negotiateConnect(this,connectString.hostName,connectString.appName);
\t\t\t\t}
\t\t\t\t
\t\t\t\ttrace(\"**** LOAD2 :: CONNECT SOURCE: \" +connectString.hostName +\" \"+ connectString.appName);
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_WAITING, myStatus));
\t\t\t\treturn true;
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\t
\t\t

\t\tpublic function onFCUnsubscribe(info:Object):void
\t\t{
\t\t\ttrace((\"onFCUnSubscribe worked\" + info));
\t\t}

\t\tpublic function onFCSubscribe(info:Object):void
\t\t{
\t\t\ttrace((\"onFCSubscribe worked\" + info));
\t\t}

\t\tpublic function onBWDone(info:Object,nc:NetConnection):void
\t\t{
\t\t\tif(nc.connected) {
\t\t\tmyConnection=nc;
\t\t\ttrace((((\"onBWDone \" + info) + \" :: \") + myStatus.src));

\t\t\tvar customClient:Object = new Object  ;
\t\t\tcustomClient.onMetaData = onMetaDataHandler;
\t\t\tcustomClient.onPlayStatus = onPlayStatusHandler;// According to the forums and my tests, onPlayStatus only works with FMS (Flash Media Server).

\t\t\tmyStream = null;
\t\t\tmyStream = new NetStream(myConnection);
\t\t\tmyStream.addEventListener(NetStatusEvent.NET_STATUS,netStatusHandler);
\t\t\tmyStream.client = customClient;
\t\t\t\tif(connectString.streamTYPE == \"LIVE\") {
\t\t\t\t\tmyStream.bufferTime = 3; // was 3
\t\t\t\t\tmyStream.bufferTimeMax = 24;
\t\t\t\t\tstartBuffer = 3;
\t\t\t\t\tmaxBuffer = 12;

\t\t\t\t} else {
\t\t\t\t\tmyStream.bufferTime = .2; // was 3
\t\t\t\t\tmyStream.bufferTimeMax = 0;
\t\t\t\t\tstartBuffer = .2;
\t\t\t\t\tmaxBuffer = 12;
\t\t\t\t}
\t\t

\t\t\t//streamName=\"\";
\t\t\t//var connectString:Object = parseRTMPsrcConnect(myStatus.src);
\t\t\t//streamName=connectString.streamFileName;

\t\t\tresponder = new Responder(onResult);
\t\t\tmyConnection.call(\"getStreamLength\",responder,streamName);
\t\t\t} else {
\t\t\t\tconnectStream();
\t\t\t}

\t\t\ttrace(\"PLAY SOURCE: \"+connectString);

\t\t}

\t\t\tpublic function play(time:Number = NaN):Boolean {
\t\t\t//trace(\"PLAY: \"+time+\" - isPlaying: \"+myStatus.isPlaying +\" - myStatus.isStartingDownload:\"+myStatus.isStartingDownload);
\t\t\tvar wasPlaying:Boolean = myStatus.isPlaying;

\t\t\tif(!isNaN(time) && myStatus.srcSet) {
\t\t\t\tif(myStatus.isPlaying) {
\t\t\t\t\tmyStream.pause();
\t\t\t\t\tmyStatus.isPlaying = false;
\t\t\t\t}
\t\t\t\tmyStatus.pausePosition = time;
\t\t\t}

\t\t\tif(myStatus.isStartingDownload) {
\t\t\t\tmyStatus.playOnLoad = true; // Raise flag, captured in onMetaDataHandler()
\t\t\t\treturn true;
\t\t\t} else if(myStatus.loadRequired()) {
\t\t\t\tmyStatus.playOnLoad = true; // Raise flag, captured in onMetaDataHandler()
\t\t\t\treturn load();
\t\t\t} else if((myStatus.isLoading || myStatus.isLoaded) && !myStatus.isPlaying) {
\t\t\t\tif(myStatus.metaDataReady && myStatus.pausePosition > myStatus.duration && connectString.streamTYPE != \"LIVE\") { // The time is invalid, ie., past the end.
\t\t\t\t\tmyStream.pause(); // Since it is playing by default at this point.
\t\t\t\t\tmyStatus.pausePosition = 0;
\t\t\t\t\ttrace(\"SEEKER!\");
\t\t\t\t\tmyStream.seek(0);
\t\t\t\t\ttimeUpdates(false);
\t\t\t\t\ttimeUpdateEvent();
\t\t\t\t\tif(wasPlaying) { // For when playing and then get a play(huge)
\t\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PAUSE, myStatus));
\t\t\t\t\t}
\t\t\t\t} else if(getSeekTimeRatio() > getLoadRatio()) { // Use an estimate based on the downloaded amount
\t\t\t\t\tmyStatus.playOnSeek = true;
\t\t\t\t\tseeking(true);
\t\t\t\t\ttrace(\"SEEKER PAUSE!\");
\t\t\t\t\tmyStream.pause(); // Since it is playing by default at this point.
\t\t\t\t} else {
\t\t\t\t\tif(!isNaN(time)) { // Avoid using seek() when it is already correct.
\t\t\t\t\t\ttrace(\"SEEKER3\");
\t\t\t\t\t\tmyStream.seek(myStatus.pausePosition/1000); // Since time is in ms and seek() takes seconds
\t\t\t\t\t}
\t\t\t\t\tmyStatus.isPlaying = true; // Set immediately before playing. Could affects events.
\t\t\t\t\ttrace(\"SHOULD GET RESUME!\");
\t\t\t\t\tmyStream.resume();
\t\t\t\t\ttimeUpdates(true);
\t\t\t\t\tif(!wasPlaying) {
\t\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PLAY, myStatus));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\t
\tpublic function pause(time:Number=NaN):Boolean
\t{
\t\t//trace(\"PAUSE: \"+time);
\t\tmyStatus.playOnLoad = false;// Reset flag in case load/play issued immediately before this command, ie., before onMetadata() event.
\t\tmyStatus.playOnSeek = false;// Reset flag in case play(time) issued before the command and is still seeking to time set.

\t\tvar wasPlaying:Boolean = myStatus.isPlaying;

\t\t
\t\t// To avoid possible loops with timeupdate and pause(time). A pause() does not have the problem.
\t\tvar alreadyPausedAtTime:Boolean = false;
\t\tif(!isNaN(time) && myStatus.pausePosition == time) {
\t\t\talreadyPausedAtTime = true;
\t\t}
\t\t
\t\ttrace(\"!isNaN: \"+!isNaN(time) +\" isNaN: \"+isNaN(time));

\t\t// Need to wait for metadata to load before ever issuing a pause. The metadata handler will call this function if needed, when ready.
\t\tif (((myStream != null) && myStatus.metaDataReady))
\t\t{// myStream is a null until the 1st media is loaded. ie., The 1st ever setMedia being followed by a pause() or pause(t).
\t\t\t
\t\t\tif(connectString.streamTYPE == \"LIVE\") {
\t\t\t\ttrace(\"PAUSING LIVE\");
\t\t\t\tmyStream.play(false) 
\t\t\t} else {
\t\t\t\ttrace(\"PAUSING RECORDED\");
\t\t\tmyStream.pause();
\t\t\t}
\t\t}
\t\tif (myStatus.isPlaying)
\t\t{
\t\t\tmyStatus.isPlaying = false;
\t\t\tmyStatus.pausePosition = myStream.time * 1000;
\t\t}

\t\tif (! isNaN(time) && myStatus.srcSet)
\t\t{
\t\t\tmyStatus.pausePosition = time;
\t\t}

\t\tif (wasPlaying)
\t\t{
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PAUSE,myStatus));
\t\t}

\t\tif (myStatus.isStartingDownload)
\t\t{
\t\t\treturn true;
\t\t}
\t\telse if (myStatus.loadRequired())
\t\t{
\t\t\tif ((time > 0))
\t\t\t{// We do not want the stop() command, which does pause(0), causing a load operation.
\t\t\t\treturn load();
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\treturn true;// Technically the pause(0) succeeded. ie., It did nothing, since nothing was required.
\t\t\t}
\t\t}
\t\telse if (myStatus.isLoading || myStatus.isLoaded)
\t\t{
\t\t\tif (myStatus.metaDataReady && myStatus.pausePosition > myStatus.duration && connectString.streamTYPE != \"LIVE\" )
\t\t\t{// The time is invalid, ie., past the end.
\t\t\t\tmyStatus.pausePosition = 0;
\t\t\t\t
\t\t\t\ttrace(\"GOT HERE!\");
\t\t\t\tmyStream.seek(0);
\t\t\t\tseekedEvent();// Deals with seeking effect when using setMedia() then pause(huge). NB: There is no preceeding seeking event.
\t\t\t}
\t\t\telse if (! isNaN(time))
\t\t\t{
\t\t\t\tif ((getSeekTimeRatio() > getLoadRatio()))
\t\t\t\t{// Use an estimate based on the downloaded amount
\t\t\t\t\tseeking(true);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tif (myStatus.metaDataReady && connectString.streamTYPE != \"LIVE\")
\t\t\t\t\t{// Otherwise seek(0) will stop the metadata loading.
\t\t\t\t\ttrace(\"GOT HERE TOO!\");
\t\t\t\t\t\tmyStream.seek(myStatus.pausePosition / 1000);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\ttimeUpdates(false);
\t\t\t// Need to be careful with timeupdate event, otherwise a pause in a timeupdate event can cause a loop.
\t\t\t// Neither pause() nor pause(time) will cause a timeupdate loop.
\t\t\tif(wasPlaying || !isNaN(time) && !alreadyPausedAtTime) {
\t\t\t\ttimeUpdateEvent();
\t\t\t}
\t\t\treturn true;
\t\t}
\t\telse
\t\t{
\t\t\treturn false;
\t\t}
\t}
\tpublic function playHead(percent:Number):Boolean
\t{
\t\tvar time:Number = percent * getDuration() * getLoadRatio() / 100;
\t\tif (myStatus.isPlaying || myStatus.playOnLoad || myStatus.playOnSeek)
\t\t{
\t\t\treturn play(time);
\t\t}
\t\telse
\t\t{
\t\t\treturn pause(time);
\t\t}
\t}
\tpublic function setVolume(v:Number):void
\t{
\t\tmyStatus.volume = v;
\t\tmyTransform.volume = v;
\t\tif ((myStream != null))
\t\t{
\t\t\tmyStream.soundTransform = myTransform;
\t\t}
\t}
\tprivate function updateStatusValues():void
\t{
\t\t//myStatus.seekPercent = 100 * getLoadRatio();
\t\tmyStatus.seekPercent = 100;
\t\tmyStatus.currentTime = getCurrentTime();
\t\tmyStatus.currentPercentRelative = 100 * getCurrentRatioRel();
\t\tmyStatus.currentPercentAbsolute = 100 * getCurrentRatioAbs();
\t\tmyStatus.duration = getDuration();
\t}
\tpublic function getLoadRatio():Number
\t{
\t\treturn 1;
\t\t/*trace(\"LoadRatio:\"+myStream.bytesLoaded, myStream.bytesTotal);
\t\tif((myStatus.isLoading || myStatus.isLoaded) && myStream.bytesTotal > 0) {
\t\t
\t\treturn myStream.bytesLoaded / myStream.bytesTotal;
\t\t} else {
\t\treturn 0;
\t\t}
\t\t*/

\t}
\tpublic function getDuration():Number
\t{
\t\treturn myStatus.duration;// Set from meta data.
\t}
\tpublic function getCurrentTime():Number
\t{
\t\tif (myStatus.isPlaying)
\t\t{
\t\t\t//trace(myStream.time * 1000);
\t\t\treturn myStream.time * 1000; // was +1000
\t\t}
\t\telse
\t\t{
\t\t\treturn myStatus.pausePosition;
\t\t}
\t}
\tpublic function getCurrentRatioRel():Number
\t{

\t\tif ((getCurrentRatioAbs() <= getLoadRatio()))
\t\t{
\t\t\t//if((getLoadRatio() > 0) && (getCurrentRatioAbs() <= getLoadRatio())) {
\t\t\treturn getCurrentRatioAbs() / getLoadRatio();
\t\t}
\t\telse
\t\t{
\t\t\treturn 0;
\t\t}
\t}
\tpublic function getCurrentRatioAbs():Number
\t{
\t\tif ((getDuration() > 0))
\t\t{
\t\t\treturn getCurrentTime() / getDuration();
\t\t}
\t\telse
\t\t{
\t\t\treturn 0;
\t\t}
\t}
\tpublic function getSeekTimeRatio():Number
\t{
\t\tif ((getDuration() > 0))
\t\t{
\t\t\treturn myStatus.pausePosition / getDuration();
\t\t}
\t\telse
\t\t{
\t\t\treturn 1;
\t\t}
\t}
\tpublic function onPlayStatusHandler(infoObject:Object):void
\t{
\t\ttrace(((\"OnPlayStatusHandler called: (\" + getTimer()) + \" ms)\"));
\t\tfor (var prop:* in infoObject)
\t\t{
\t\t\ttrace((((\"\\t\" + prop) + \":\\t\") + infoObject[prop]));
\t\t}
\t\tif (infoObject.code == \"NetStream.Play.Complete\")
\t\t{
\t\t\tendedEvent();
\t\t}
\t}

\tpublic function onMetaDataHandler(info:Object):void
\t{// Used in connectStream() in myStream.client object.
\t\t// This event occurs when jumping to the start of static files! ie., seek(0) will cause this event to occur.

\t\tif (! myStatus.metaDataReady)
\t\t{
\t\t\ttrace(\"\\n\\n*** METADATA FIRED! ***\\n\\n\");
\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"onMetaDataHandler: \" + info.duration + \" | \" + info.width + \"x\" + info.height));

\t\t\tmyStatus.metaDataReady = true;// Set flag so that this event only effects jPlayer the 1st time.
\t\t\tmyStatus.metaData = info;
\t\t\tmyStatus.duration = info.duration * 1000;// Only available via Meta Data.
\t\t\tif (info.width != undefined)
\t\t\t{
\t\t\t\tmyVideo.width = myStatus.videoWidth = info.width;
\t\t\t}
\t\t\tif (info.height != undefined)
\t\t\t{
\t\t\t\tmyVideo.height = myStatus.videoHeight = info.height;
\t\t\t}

\t\t\tif (myStatus.playOnLoad)
\t\t\t{
\t\t\t\tmyStatus.playOnLoad = false;// Capture the flag
\t\t\t\tif (myStatus.pausePosition > 0)
\t\t\t\t{// Important for setMedia followed by play(time).
\t\t\t\t\tplay(myStatus.pausePosition);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tplay();// Not always sending pausePosition avoids the extra seek(0) for a normal play() command.
\t\t\t\t}
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tpause(myStatus.pausePosition);// Always send the pausePosition. Important for setMedia() followed by pause(time). Deals with not reading stream.time with setMedia() and play() immediately followed by stop() or pause(0)
\t\t\t}
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_LOADEDMETADATA,myStatus));
\t\t}
\t\telse
\t\t{
\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"onMetaDataHandler: Already read (NO EFFECT)\"));
\t\t}
\t}
}
}";
        
        $__internal_ee0c4c9f183327841510dbc23f7404078ab1cea0b6e946862166223c0c571649->leave($__internal_ee0c4c9f183327841510dbc23f7404078ab1cea0b6e946862166223c0c571649_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerRtmp.as";
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
 * Licensed under the MIT license.
 * http://opensource.org/licenses/MIT
 *
 * Author: Robert M. Hall
 * Date: 29th January 2013
 * Based on JplayerMp4.as with modifications for rtmp
 */

package happyworm.jPlayer
{
\timport flash.display.Sprite;

\timport flash.media.Video;
\timport flash.media.SoundTransform;

\timport flash.net.NetConnection;
\timport flash.net.NetStream;
\timport flash.net.Responder;

\timport flash.utils.Timer;
\timport flash.utils.getTimer;

\timport flash.events.NetStatusEvent;
\timport flash.events.SecurityErrorEvent;
\timport flash.events.TimerEvent;
\timport flash.events.ErrorEvent;
\timport flash.events.UncaughtErrorEvent;
\timport flash.utils.clearInterval;
\timport flash.utils.setInterval;
\timport happyworm.jPlayer.ConnectManager;

\tpublic class JplayerRtmp extends Sprite
\t{

\t\tpublic var myVideo:Video = new Video;
\t\tprivate var myConnection:NetConnection;
\t\tprivate var myStream:NetStream;

\t\tpublic var responder:Responder;

\t\tprivate var streamName:String;
\t\t
\t\tprivate var connectString:Object;

\t\tprivate var firstTime:Boolean = true;

\t\tprivate var myTransform:SoundTransform = new SoundTransform  ;

\t\tpublic var myStatus:JplayerStatus = new JplayerStatus  ;

\t\tprivate var ConnMgr:ConnectManager=new ConnectManager();

\t\tprivate var timeUpdateTimer:Timer = new Timer(250,0);// Matched to HTML event freq
\t\tprivate var progressTimer:Timer = new Timer(250,0);// Matched to HTML event freq
\t\tprivate var seekingTimer:Timer = new Timer(100,0);// Internal: How often seeking is checked to see if it is over.

\t\tprivate var startBuffer:Number = 3;
\t\tprivate var maxBuffer:Number = 12;

\t\tpublic function JplayerRtmp(volume:Number)
\t\t{
\t\t\tmyConnection = new NetConnection  ;
\t\t\tmyConnection.client = this;
\t\t\t

\t\t\t// Moved the netconnection negotiation into the ConnectManager.as class - not needed for initial connection
\t\t\t// may need to add eventHandler back in for errors only or just dispatch from the ConnectManager..revisit...
\t\t\t
\t\t\t// myConnection.addEventListener(NetStatusEvent.NET_STATUS,netStatusHandler);
\t\t\t// myConnection.addEventListener(SecurityErrorEvent.SECURITY_ERROR,securityErrorHandler);
\t\t\tmyVideo.smoothing = true;
\t\t\tthis.addChild(myVideo);

\t\t\ttimeUpdateTimer.addEventListener(TimerEvent.TIMER,timeUpdateHandler);
\t\t\tprogressTimer.addEventListener(TimerEvent.TIMER,progressHandler);
\t\t\tseekingTimer.addEventListener(TimerEvent.TIMER,seekingHandler);

\t\t\tmyStatus.volume = volume;
\t\t\t
\t\t\taddEventListener(UncaughtErrorEvent.UNCAUGHT_ERROR, uncaughtErrorHandler);

\t\t\t
\t\t}
\t\t
\t\t
        
        private function uncaughtErrorHandler(event:UncaughtErrorEvent):void
        {
\t\t\ttrace(\"UNCAUGHT ERROR - try loading again\");
\t\t\t
            if (event.error is Error)
            {
                var error:Error = event.error as Error;
\t\t\t\ttrace(error);
                // do something with the error
            }
            else if (event.error is ErrorEvent)
            {
                var errorEvent:ErrorEvent = event.error as ErrorEvent;
                // do something with the error
\t\t\t\ttrace(errorEvent);
            }
            else
            {
                // a non-Error, non-ErrorEvent type was thrown and uncaught
            }
\t\t\tload();
        }
\t\t
\t\t
\t\t
\t\tprivate function progressUpdates(active:Boolean):void
\t\t{
\t\t\tif (active)
\t\t\t{
\t\t\t\tprogressTimer.start();
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tprogressTimer.stop();
\t\t\t}
\t\t}
\t\t
\t\tprivate function progressHandler(e:TimerEvent):void
\t\t{
\t\t\tif (myStatus.isLoading)
\t\t\t{
\t\t\t\tif ((getLoadRatio() == 1))
\t\t\t\t{// Close as can get to a loadComplete event since client.onPlayStatus only works with FMS
\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"progressHandler: loadComplete\"));
\t\t\t\t\tmyStatus.loaded();
\t\t\t\t\tprogressUpdates(false);
\t\t\t\t}
\t\t\t}
\t\t\tprogressEvent();
\t\t}
\t\t
\t\tprivate function progressEvent():void
\t\t{
\t\t\t// temporarily disabled progress event dispatching - not really needed for rtmp
\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"progressEvent:\"));
\t\t\tupdateStatusValues();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PROGRESS,myStatus));
\t\t}
\t\t
\t\tprivate function timeUpdates(active:Boolean):void
\t\t{
\t\t\tif (active)
\t\t\t{
\t\t\t\ttimeUpdateTimer.start();
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\ttimeUpdateTimer.stop();
\t\t\t}
\t\t}
\t\t
\t\tprivate function timeUpdateHandler(e:TimerEvent):void
\t\t{
\t\t\ttimeUpdateEvent();
\t\t}
\t\t
\t\tprivate function timeUpdateEvent():void
\t\t{
\t\t\tupdateStatusValues();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_TIMEUPDATE,myStatus));
\t\t}
\t\tprivate function seeking(active:Boolean):void
\t\t{
\t\t\tif (active)
\t\t\t{
\t\t\t\tif (! myStatus.isSeeking)
\t\t\t\t{
\t\t\t\t\tseekingEvent();
\t\t\t\t}
\t\t\t\tseekingTimer.start();
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tif (myStatus.isSeeking)
\t\t\t\t{
\t\t\t\t\tseekedEvent();
\t\t\t\t}
\t\t\t\tseekingTimer.stop();
\t\t\t}
\t\t}
\t\tprivate function seekingHandler(e:TimerEvent):void
\t\t{
\t\t\tif ((getSeekTimeRatio() <= getLoadRatio()))
\t\t\t{
\t\t\t\tseeking(false);
\t\t\t\tif (myStatus.playOnSeek)
\t\t\t\t{
\t\t\t\t\tmyStatus.playOnSeek = false;// Capture the flag.
\t\t\t\t\tplay(myStatus.pausePosition);// Must pass time or the seek time is never set.
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tpause(myStatus.pausePosition);// Must pass time or the stream.time is read.
\t\t\t\t}
\t\t\t}
\t\t\telse if (myStatus.metaDataReady && myStatus.pausePosition > myStatus.duration)
\t\t\t{
\t\t\t\t// Illegal seek time
\t\t\t\tseeking(false);
\t\t\t\tpause(0);
\t\t\t}
\t\t}
\t\tprivate function seekingEvent():void
\t\t{
\t\t\tmyStatus.isSeeking = true;
\t\t\tupdateStatusValues();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_SEEKING,myStatus));
\t\t}
\t\tprivate function seekedEvent():void
\t\t{
\t\t\tmyStatus.isSeeking = false;
\t\t\tupdateStatusValues();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_SEEKED,myStatus));
\t\t}


\t\tprivate function netStatusHandler(e:NetStatusEvent):void
\t\t{
\t\t\ttrace((\"netStatusHandler: \" + e.info.code));
\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"netStatusHandler: '\" + e.info.code + \"'\"));
\t\t\t//trace(\"BEFORE: bufferTime: \"+myStream.bufferTime+\" - bufferTimeMax: \"+myStream.bufferTimeMax);
\t\t\tswitch (e.info.code)
\t\t\t{
\t\t\t\tcase \"NetConnection.Connect.Success\" :
\t\t\t\t\t// connectStream(); // This method did not do anything sensible anyway.
\t\t\t\t\t// Do not think this case occurs. This was for the static file connection.
\t\t\t\t\t// Which now seems to be handled by the Connection Manager.
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Buffer.Full\":
\t\t\t\tif(connectString.streamTYPE == \"LIVE\") {
\t\t\t\t\t\tmyStream.bufferTime = startBuffer; 
\t\t\t\t\t} else {
\t\t\t\t\t\tmyStream.bufferTime = maxBuffer; 
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Buffer.Flush\":
\t\t\t\t\tmyStream.bufferTime = startBuffer; 
\t\t\t\t\tbreak;\t
\t\t\t\tcase \"NetStream.Buffer.Empty\":
\t\t\t\t\tmyStream.bufferTime = startBuffer; 
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Seek.Notify\":
\t\t\t\t\tmyStream.bufferTime = startBuffer; 
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Play.Start\" :

\t\t\t\t\tif (firstTime) {
\t\t\t\t\t\tfirstTime = false; // Capture flag

\t\t\t\t\t\tmyStatus.loading();
\t\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_LOADSTART,myStatus));

\t\t\t\t\t\t// NB: With MP4 player both audio and video types get connected to myVideo.
\t\t\t\t\t\t// NB: Had believed it was important for the audio too, otherwise what plays it?
\t\t\t\t\t\tif(videoBinding) {
\t\t\t\t\t\t\tmyVideo.attachNetStream(myStream);
\t\t\t\t\t\t}

\t\t\t\t\t\tsetVolume(myStatus.volume);

\t\t\t\t\t\t// Really the progress event just needs to be generated once, and should probably happen before now.
\t\t\t\t\t\tprogressUpdates(true);

\t\t\t\t\t\t// This is an ASSUMPTION! Made it so that the default GUI worked.
\t\t\t\t\t\t// Hence why this part should be refactored.
\t\t\t\t\t\t// Lots of commands sequences after setMedia would be corrupted by this assumption.
\t\t\t\t\t\t// Bascally, we assume that after a setMedia, you will play it.
\t\t\t\t\t\t// Doing setMedia and pause(15) cause the flag to be set incorrectly and the GUI locks up.
\t\t\t\t\t\tmyStatus.isPlaying = true; // Should be handled elsewhere.
\t\t\t\t\t}

\t\t\t\t\t// Under RTMP, this event code occurs every time the media starts playing and when a new position is seeked to, even when paused.

\t\t\t\t\t// Since under RTMP the event behaviour is quite different, believe a refactor is best here.
\t\t\t\t\t// ie., Under RTMP we should be able to know a lot more info about the stream.

\t\t\t\t\t// See onMetaDataHandler() for other condition, since duration is vital.
\t\t\t\t\t// See onResult() response handler too.
\t\t\t\t\t// Appears to be some duplication between onMetaDataHandler() and onResult(), along with a race between them occuring.

\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Play.UnpublishNotify\":
\t\t\t\t\tmyStream.bufferTime = startBuffer; // was 3
\t\t\t\tcase \"NetStream.Play.Stop\" :
\t\t\t\t\tmyStream.bufferTime = startBuffer; // was 3
\t\t\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"NetStream.Play.Stop: getDuration() - getCurrentTime() = \" + (getDuration() - getCurrentTime())));

\t\t\t\t\t// Check if media is at the end (or close) otherwise this was due to download bandwidth stopping playback. ie., Download is not fast enough.
\t\t\t\t\tif (Math.abs((getDuration() - getCurrentTime())) < 150)
\t\t\t\t\t{// Testing found 150ms worked best for M4A files, where playHead(99.9) caused a stuck state due to firing with ~116ms left to play.
\t\t\t\t\t\t//endedEvent();
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Seek.InvalidTime\" :
\t\t\t\t\t// Used for capturing invalid set times and clicks on the end of the progress bar.
\t\t\t\t\tendedEvent();
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Play.StreamNotFound\" :
\t\t\t\t\tmyStatus.error();
\t\t\t\t\t// Resets status except the src, and it sets srcError property.;
\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_ERROR,myStatus));
\t\t\t\t\tbreak;\t\t\t\t
\t\t\t}
\t\t\t//trace(\"AFTER: bufferTime: \"+myStream.bufferTime+\" - bufferTimeMax: \"+myStream.bufferTimeMax);
\t\t\t// \"NetStream.Seek.Notify\" event code is not very useful. It occurs after every seek(t) command issued and does not appear to wait for the media to be ready.
\t\t}
\t\tprivate function endedEvent():void
\t\t{
\t\t\ttrace(\"ENDED STREAM EVENT\");
\t\t\tvar wasPlaying:Boolean = myStatus.isPlaying;

\t\t\t// timeUpdates(false);
\t\t\t// timeUpdateEvent();
\t\t\tpause(0);

\t\t\tif (wasPlaying)
\t\t\t{
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_ENDED,myStatus));
\t\t\t}
\t\t}
\t\tprivate function securityErrorHandler(event:SecurityErrorEvent):void
\t\t{
\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"securityErrorHandler.\"));
\t\t}
\t\tpublic function connectStream():void
\t\t{
\t\t\ttrace(\"CONNECTING\");
\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"connectStream.\"));
\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_CANPLAY,myStatus));
\t\t\t
\t\t\ttimeUpdates(true);
\t\t\tprogressUpdates(true);
\t\t\t//myVideo.attachNetStream(myStream);
\t\t\t//setVolume(myStatus.volume);
\t\t}

\t\tprivate function onResult(result:Object):void
\t\t{
\t\t\ttrace(\"OnResult EVENT FIRED!\");
\t\t\tmyStatus.duration = parseFloat(result.toString()) * 1000;
\t\t\ttrace(((\"The stream length is \" + result) + \" seconds\"));

\t\t\tif(!myConnection.connected) {
\t\t\t\tload();
\t\t\t} else {
\t\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_CANPLAY,myStatus,\"Rockit!\"));
\t\t\t
\t\t\t//myStatus.loaded();
\t\t\t//myStatus.isPlaying=true; 
\t\t\tif (! myStatus.metaDataReady)
\t\t\t{
\t\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"onMetaDataHandler: \" + myStatus.duration));

\t\t\t\t//  Allow multiple onResult Handlers to affect size. As per PR #131 and #98.
\t\t\t\t//  myStatus.metaDataReady = true;

\t\t\t\t/*var info:Object = new Object();
\t\t\t\tinfo.duration=myStatus.duration
\t\t\t\tinfo.width=undefined;
\t\t\t\tinfo.height=undefined;
\t\t\t\tmyStatus.metaData = info;
\t\t\t\t*/
\t\t\t\tif (myStatus.playOnLoad)
\t\t\t\t{
\t\t\t\t\tmyStatus.playOnLoad = false;// Capture the flag
\t\t\t\t\tif (myStatus.pausePosition > 0)
\t\t\t\t\t{// Important for setMedia followed by play(time).
\t\t\t\t\t\tplay(myStatus.pausePosition);
\t\t\t\t\t}
\t\t\t\t\telse
\t\t\t\t\t{
\t\t\t\t\t\tplay();// Not always sending pausePosition avoids the extra seek(0) for a normal play() command.
\t\t\t\t\t}

\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tpause(myStatus.pausePosition);// Always send the pausePosition. Important for setMedia() followed by pause(time). Deals with not reading stream.time with setMedia() and play() immediately followed by stop() or pause(0)
\t\t\t\t}
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_LOADEDMETADATA,myStatus));
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"onMetaDataHandler: Already read (NO EFFECT)\"));
\t\t\t}
\t\t\t
\t\t\tmyStream.play(streamName);
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PLAY,myStatus));
\t\t\t// timeUpdates(false);
\t\t\t}

\t\t}
\t\t
\t\tprivate var overRideConnect:Boolean=false;
\t\tpublic function doneYet():void {
\t\t\tif(!myConnection.connected) {
\t\t\t\t// try again
\t\t\t\tConnMgr.stopAll(true);
\t\t\t\toverRideConnect=true;
\t\t\t\ttrace(\"Connected: \"+myConnection.connected+\" - \"+myStatus.loadRequired());\t\t\t\t
\t\t\t\tload();
\t\t\t}
\t\t}

\t\tprivate var videoBinding:Boolean=false;
\t\tpublic function setFile(src:String,videoSupport:Boolean=false):void
\t\t{
\t\t\t// videoSupport turns on/off video - by default no video, audio only
\t\t\tvideoBinding=videoSupport;
\t\t\t/* Dont close the stream or netconnection here anymore so we can recycle if host/appname are the same
\t\t\tif ((myStream != null))
\t\t\t{
\t\t\t\tmyStream.close();
\t\t\t\tmyConnection.close();
\t\t\t}
\t\t\t*/
\t\t\tif(ConnMgr.getNegotiating() == true) {
\t\t\t    //ConnMgr.stopAll();
\t\t\t\tConnMgr.setNegotiating(false);
\t\t\t}
\t\t\t
\t\t\tmyVideo.clear();
\t\t\t
\t\t\tprogressUpdates(false);
\t\t\ttimeUpdates(false);

\t\t\tmyStatus.reset();
\t\t\tmyStatus.src = src;
\t\t\tmyStatus.srcSet = true;

\t\t\tfirstTime = true;
\t\t\t
\t\t\t//myStatus.loaded();
\t\t\t
\t\t\tif(src != \"\") {
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_CANPLAY,myStatus));
\t\t\t}
\t\t\t
\t\t\t//timeUpdateEvent();
\t\t}
\t\t
\t\tpublic function shutDownNcNs():void {
\t\t\ttrace(\"Connections Closed\");
\t\t\ttimeUpdates(false);
\t\t\tprogressUpdates(false);
\t\t\tmyStream.close();
\t\t\tmyConnection.close();
\t\t\t
\t\t\tmyStatus.reset();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_ENDED,myStatus));
\t\t}

\t\tpublic function clearFile():void
\t\t{
\t\t\tif (myStream != null)
\t\t\t{
\t\t\t\tmyStream.close();
\t\t\t\t// Dont close the netConnection here any longer, as we may recycle it later
\t\t\t\t// may need an extra way to close manually if switching media types after an rtmp session - revisit
\t\t\t\t// myConnection.close();
\t\t\t\tmyStatus.reset();
\t\t\t}
\t\t\tsetFile(\"\");
\t\t\tmyStatus.srcSet = false;
\t\t}

\t\tpublic function parseRTMPsrcConnect(rtmpSrc:String):Object
\t\t{
\t\t\t// rtmp://cp76372.live.edgefcs.net/live/Flash1Office@60204
\t\t\tvar appName:String = \"\";
\t\t\tvar streamFileName:String = \"\";
\t\t\tvar startIndex:uint = 2 + rtmpSrc.indexOf(\"//\");
\t\t\tvar streamTYPE:String = \"recorded\";
\t\t\tvar host:String = rtmpSrc.substr(startIndex);
\t\t\tvar port:String = \"\";
\t\t\thost = host.substr(0,host.indexOf(\"/\"));
\t\t\tvar endHost:Number = startIndex + host.length + 1;

\t\t\t// See if there is a host port specified
\t\t\tif(host.indexOf(\":\") != -1) {
\t\t\t\tport = host.substr(host.indexOf(\":\")+1);
\t\t\t\thost = host.substr(0,host.indexOf(\":\"));
\t\t\t}
\t\t\t
\t\t\t// Akamai specific live streams
\t\t\tif (rtmpSrc.lastIndexOf(\"/live/\") != -1)
\t\t\t{
\t\t\t\ttrace(\"LIVE!\");
\t\t\t\t
\t\t\t\t
\t\t\t\tappName = rtmpSrc.substring(endHost,rtmpSrc.lastIndexOf(\"/live/\") + 6);
\t\t\t\tstreamFileName = rtmpSrc.substr(rtmpSrc.lastIndexOf(\"/live/\") + 6);
\t\t\t\tstreamTYPE=\"LIVE\";
\t\t\t} else {
\t\t\t\tstreamTYPE=\"RECORDED\";
\t\t\t\t
\t\t\t}
\t\t\t
\t\t\t// Mp3 streams with standard appname/no instance name, mp3: prefix
\t\t\tif (rtmpSrc.indexOf(\".mp3\") != -1)
\t\t\t{
\t\t\t\tappName = rtmpSrc.substring(endHost,rtmpSrc.indexOf(\"mp3:\"));
\t\t\t\tstreamFileName = rtmpSrc.substr(rtmpSrc.indexOf(\"mp3:\"));
\t\t\t\tstreamFileName = streamFileName.substr(0,streamFileName.length - 4);
\t\t\t}
\t\t\t// rtmp://cp83813.edgefcs.net/ondemand/rob_hall/bruce_campbell_oldspice.flv
\t\t\t
\t\t\t// Mp4 streams with standard appname/no instance name, mp4: prefix
\t\t\tif (rtmpSrc.indexOf(\"mp4:\") != -1)
\t\t\t{
\t\t\t\tappName = rtmpSrc.substring(endHost,rtmpSrc.indexOf(\"mp4:\"));
\t\t\t\tstreamFileName = rtmpSrc.substr(rtmpSrc.indexOf(\"mp4:\"));
\t\t\t\tstreamFileName = streamFileName.substr(0,streamFileName.length - 4);
\t\t\t}
\t\t\t
\t\t\t// .f4v streams with standard appname/no instance name, .flv extension
\t\t\tif (rtmpSrc.indexOf(\".flv\") != -1)
\t\t\t{
\t\t\t// allow use of ^ in rtmp string to indicate break point for an appname or instance name that
\t\t\t// contains a / in it where it would require multiple connection attempts or manual configuratiom
\t\t\t// of the appname/instancename
\t\t\tvar endApp:Number=0;
\t\t\tif(rtmpSrc.indexOf(\"^\") != -1) {
\t\t\t\tendApp=rtmpSrc.indexOf(\"^\");
\t\t\t\trtmpSrc.replace(\"^\", \"/\");
\t\t\t} else {
\t\t\t\tendApp = rtmpSrc.indexOf(\"/\",endHost);
\t\t\t}
\t\t\t\tappName = rtmpSrc.substring(endHost,endApp) + \"/\";
\t\t\t\tstreamFileName = rtmpSrc.substr(endApp+1);
\t\t\t}
\t\t\t
\t\t\tif(port==\"\") {
\t\t\t\tport=\"MULTI\";
\t\t\t}
\t\t\t//rtmp, rtmpt, rtmps, rtmpe, rtmpte


\t\t\ttrace((\"\\n\\n*** HOST: \" + host));
\t\t\ttrace((\"*** PORT: \" + port));
\t\t\ttrace((\"*** APPNAME: \" + appName));
\t\t\ttrace((\"*** StreamName: \" + streamFileName));

\t\t\tvar streamParts:Object = new Object;
\t\t\tstreamParts.streamTYPE=streamTYPE;
\t\t\tstreamParts.appName = appName;
\t\t\tstreamParts.streamFileName = streamFileName;
\t\t\tstreamParts.hostName = host;
\t\t\tstreamName = streamFileName;
\t\t\t
\t\t\treturn streamParts;
\t\t}

\t\tpublic function load():Boolean
\t\t{
\t\t\t//trace(\"LOAD: \"+myStatus.src);
\t\t\tif (myStatus.loadRequired() || overRideConnect==true)
\t\t\t{
\t\t\t\toverRideConnect=false;
\t\t\t\tmyStatus.startingDownload();
\t\t\t\tvar lastAppName:String;
\t\t\t\tvar lastHostName:String;
\t\t\t\t\t
\t\t\t\ttry{
\t\t\t\t\t// we do a try, as these properties might not exist yet
\t\t\t\tif(connectString.appName != \"\" && connectString.appName != undefined) {
\t\t\t\t\ttrace(\"PREVIOUS APP/HOST INFO AVAILABLE\");
\t\t\t\t\tlastAppName = connectString.appName;
\t\t\t\t\tlastHostName = connectString.hostName;
\t\t\t\t\ttrace(\"LAST: \"+lastAppName,lastHostName);
\t\t\t\t} 
\t\t\t\t} catch (error:Error) {
\t\t\t\t\t//trace(\"*** Caught an error condition: \"+error);
\t\t\t\t}
\t\t\t\t
\t\t\t\tconnectString = parseRTMPsrcConnect(myStatus.src);
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\ttrace(\"**** LOAD :: CONNECT SOURCE: \" +connectString.hostName +\" \"+ connectString.appName);
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_WAITING, myStatus));
\t\t\t\t
\t\t\t\tif((connectString.appName == lastAppName && connectString.hostName == lastHostName) && (myConnection.connected)) {
\t\t\t\t\t// recycle the netConnection
\t\t\t\t\ttrace(\"RECYCLING NETCONNECTION\");
\t\t\t\t\tif ((myStream != null))
\t\t\t\t\t{
\t\t\t\t\t\tmyStream.close();
\t\t\t\t\t}
\t\t\t\t\tconnectStream();
\t\t\t\t\tonBWDone(null,myConnection);
\t\t\t\t} else {
\t\t\t\t\t// myConnection.connect(connectString.appName);
\t\t\t\t\ttrace(\"NEW NetConnection Negotiation\");
\t\t\t\t\tif ((myStream != null))
\t\t\t\t\t{
\t\t\t\t\t\tmyStream.close();
\t\t\t\t\t\tmyConnection.close();
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tConnMgr.stopAll(true);
\t\t\t\t\tConnMgr.negotiateConnect(this,connectString.hostName,connectString.appName);
\t\t\t\t}
\t\t\t\t
\t\t\t\ttrace(\"**** LOAD2 :: CONNECT SOURCE: \" +connectString.hostName +\" \"+ connectString.appName);
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_WAITING, myStatus));
\t\t\t\treturn true;
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\t
\t\t

\t\tpublic function onFCUnsubscribe(info:Object):void
\t\t{
\t\t\ttrace((\"onFCUnSubscribe worked\" + info));
\t\t}

\t\tpublic function onFCSubscribe(info:Object):void
\t\t{
\t\t\ttrace((\"onFCSubscribe worked\" + info));
\t\t}

\t\tpublic function onBWDone(info:Object,nc:NetConnection):void
\t\t{
\t\t\tif(nc.connected) {
\t\t\tmyConnection=nc;
\t\t\ttrace((((\"onBWDone \" + info) + \" :: \") + myStatus.src));

\t\t\tvar customClient:Object = new Object  ;
\t\t\tcustomClient.onMetaData = onMetaDataHandler;
\t\t\tcustomClient.onPlayStatus = onPlayStatusHandler;// According to the forums and my tests, onPlayStatus only works with FMS (Flash Media Server).

\t\t\tmyStream = null;
\t\t\tmyStream = new NetStream(myConnection);
\t\t\tmyStream.addEventListener(NetStatusEvent.NET_STATUS,netStatusHandler);
\t\t\tmyStream.client = customClient;
\t\t\t\tif(connectString.streamTYPE == \"LIVE\") {
\t\t\t\t\tmyStream.bufferTime = 3; // was 3
\t\t\t\t\tmyStream.bufferTimeMax = 24;
\t\t\t\t\tstartBuffer = 3;
\t\t\t\t\tmaxBuffer = 12;

\t\t\t\t} else {
\t\t\t\t\tmyStream.bufferTime = .2; // was 3
\t\t\t\t\tmyStream.bufferTimeMax = 0;
\t\t\t\t\tstartBuffer = .2;
\t\t\t\t\tmaxBuffer = 12;
\t\t\t\t}
\t\t

\t\t\t//streamName=\"\";
\t\t\t//var connectString:Object = parseRTMPsrcConnect(myStatus.src);
\t\t\t//streamName=connectString.streamFileName;

\t\t\tresponder = new Responder(onResult);
\t\t\tmyConnection.call(\"getStreamLength\",responder,streamName);
\t\t\t} else {
\t\t\t\tconnectStream();
\t\t\t}

\t\t\ttrace(\"PLAY SOURCE: \"+connectString);

\t\t}

\t\t\tpublic function play(time:Number = NaN):Boolean {
\t\t\t//trace(\"PLAY: \"+time+\" - isPlaying: \"+myStatus.isPlaying +\" - myStatus.isStartingDownload:\"+myStatus.isStartingDownload);
\t\t\tvar wasPlaying:Boolean = myStatus.isPlaying;

\t\t\tif(!isNaN(time) && myStatus.srcSet) {
\t\t\t\tif(myStatus.isPlaying) {
\t\t\t\t\tmyStream.pause();
\t\t\t\t\tmyStatus.isPlaying = false;
\t\t\t\t}
\t\t\t\tmyStatus.pausePosition = time;
\t\t\t}

\t\t\tif(myStatus.isStartingDownload) {
\t\t\t\tmyStatus.playOnLoad = true; // Raise flag, captured in onMetaDataHandler()
\t\t\t\treturn true;
\t\t\t} else if(myStatus.loadRequired()) {
\t\t\t\tmyStatus.playOnLoad = true; // Raise flag, captured in onMetaDataHandler()
\t\t\t\treturn load();
\t\t\t} else if((myStatus.isLoading || myStatus.isLoaded) && !myStatus.isPlaying) {
\t\t\t\tif(myStatus.metaDataReady && myStatus.pausePosition > myStatus.duration && connectString.streamTYPE != \"LIVE\") { // The time is invalid, ie., past the end.
\t\t\t\t\tmyStream.pause(); // Since it is playing by default at this point.
\t\t\t\t\tmyStatus.pausePosition = 0;
\t\t\t\t\ttrace(\"SEEKER!\");
\t\t\t\t\tmyStream.seek(0);
\t\t\t\t\ttimeUpdates(false);
\t\t\t\t\ttimeUpdateEvent();
\t\t\t\t\tif(wasPlaying) { // For when playing and then get a play(huge)
\t\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PAUSE, myStatus));
\t\t\t\t\t}
\t\t\t\t} else if(getSeekTimeRatio() > getLoadRatio()) { // Use an estimate based on the downloaded amount
\t\t\t\t\tmyStatus.playOnSeek = true;
\t\t\t\t\tseeking(true);
\t\t\t\t\ttrace(\"SEEKER PAUSE!\");
\t\t\t\t\tmyStream.pause(); // Since it is playing by default at this point.
\t\t\t\t} else {
\t\t\t\t\tif(!isNaN(time)) { // Avoid using seek() when it is already correct.
\t\t\t\t\t\ttrace(\"SEEKER3\");
\t\t\t\t\t\tmyStream.seek(myStatus.pausePosition/1000); // Since time is in ms and seek() takes seconds
\t\t\t\t\t}
\t\t\t\t\tmyStatus.isPlaying = true; // Set immediately before playing. Could affects events.
\t\t\t\t\ttrace(\"SHOULD GET RESUME!\");
\t\t\t\t\tmyStream.resume();
\t\t\t\t\ttimeUpdates(true);
\t\t\t\t\tif(!wasPlaying) {
\t\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PLAY, myStatus));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\t
\tpublic function pause(time:Number=NaN):Boolean
\t{
\t\t//trace(\"PAUSE: \"+time);
\t\tmyStatus.playOnLoad = false;// Reset flag in case load/play issued immediately before this command, ie., before onMetadata() event.
\t\tmyStatus.playOnSeek = false;// Reset flag in case play(time) issued before the command and is still seeking to time set.

\t\tvar wasPlaying:Boolean = myStatus.isPlaying;

\t\t
\t\t// To avoid possible loops with timeupdate and pause(time). A pause() does not have the problem.
\t\tvar alreadyPausedAtTime:Boolean = false;
\t\tif(!isNaN(time) && myStatus.pausePosition == time) {
\t\t\talreadyPausedAtTime = true;
\t\t}
\t\t
\t\ttrace(\"!isNaN: \"+!isNaN(time) +\" isNaN: \"+isNaN(time));

\t\t// Need to wait for metadata to load before ever issuing a pause. The metadata handler will call this function if needed, when ready.
\t\tif (((myStream != null) && myStatus.metaDataReady))
\t\t{// myStream is a null until the 1st media is loaded. ie., The 1st ever setMedia being followed by a pause() or pause(t).
\t\t\t
\t\t\tif(connectString.streamTYPE == \"LIVE\") {
\t\t\t\ttrace(\"PAUSING LIVE\");
\t\t\t\tmyStream.play(false) 
\t\t\t} else {
\t\t\t\ttrace(\"PAUSING RECORDED\");
\t\t\tmyStream.pause();
\t\t\t}
\t\t}
\t\tif (myStatus.isPlaying)
\t\t{
\t\t\tmyStatus.isPlaying = false;
\t\t\tmyStatus.pausePosition = myStream.time * 1000;
\t\t}

\t\tif (! isNaN(time) && myStatus.srcSet)
\t\t{
\t\t\tmyStatus.pausePosition = time;
\t\t}

\t\tif (wasPlaying)
\t\t{
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PAUSE,myStatus));
\t\t}

\t\tif (myStatus.isStartingDownload)
\t\t{
\t\t\treturn true;
\t\t}
\t\telse if (myStatus.loadRequired())
\t\t{
\t\t\tif ((time > 0))
\t\t\t{// We do not want the stop() command, which does pause(0), causing a load operation.
\t\t\t\treturn load();
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\treturn true;// Technically the pause(0) succeeded. ie., It did nothing, since nothing was required.
\t\t\t}
\t\t}
\t\telse if (myStatus.isLoading || myStatus.isLoaded)
\t\t{
\t\t\tif (myStatus.metaDataReady && myStatus.pausePosition > myStatus.duration && connectString.streamTYPE != \"LIVE\" )
\t\t\t{// The time is invalid, ie., past the end.
\t\t\t\tmyStatus.pausePosition = 0;
\t\t\t\t
\t\t\t\ttrace(\"GOT HERE!\");
\t\t\t\tmyStream.seek(0);
\t\t\t\tseekedEvent();// Deals with seeking effect when using setMedia() then pause(huge). NB: There is no preceeding seeking event.
\t\t\t}
\t\t\telse if (! isNaN(time))
\t\t\t{
\t\t\t\tif ((getSeekTimeRatio() > getLoadRatio()))
\t\t\t\t{// Use an estimate based on the downloaded amount
\t\t\t\t\tseeking(true);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tif (myStatus.metaDataReady && connectString.streamTYPE != \"LIVE\")
\t\t\t\t\t{// Otherwise seek(0) will stop the metadata loading.
\t\t\t\t\ttrace(\"GOT HERE TOO!\");
\t\t\t\t\t\tmyStream.seek(myStatus.pausePosition / 1000);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\ttimeUpdates(false);
\t\t\t// Need to be careful with timeupdate event, otherwise a pause in a timeupdate event can cause a loop.
\t\t\t// Neither pause() nor pause(time) will cause a timeupdate loop.
\t\t\tif(wasPlaying || !isNaN(time) && !alreadyPausedAtTime) {
\t\t\t\ttimeUpdateEvent();
\t\t\t}
\t\t\treturn true;
\t\t}
\t\telse
\t\t{
\t\t\treturn false;
\t\t}
\t}
\tpublic function playHead(percent:Number):Boolean
\t{
\t\tvar time:Number = percent * getDuration() * getLoadRatio() / 100;
\t\tif (myStatus.isPlaying || myStatus.playOnLoad || myStatus.playOnSeek)
\t\t{
\t\t\treturn play(time);
\t\t}
\t\telse
\t\t{
\t\t\treturn pause(time);
\t\t}
\t}
\tpublic function setVolume(v:Number):void
\t{
\t\tmyStatus.volume = v;
\t\tmyTransform.volume = v;
\t\tif ((myStream != null))
\t\t{
\t\t\tmyStream.soundTransform = myTransform;
\t\t}
\t}
\tprivate function updateStatusValues():void
\t{
\t\t//myStatus.seekPercent = 100 * getLoadRatio();
\t\tmyStatus.seekPercent = 100;
\t\tmyStatus.currentTime = getCurrentTime();
\t\tmyStatus.currentPercentRelative = 100 * getCurrentRatioRel();
\t\tmyStatus.currentPercentAbsolute = 100 * getCurrentRatioAbs();
\t\tmyStatus.duration = getDuration();
\t}
\tpublic function getLoadRatio():Number
\t{
\t\treturn 1;
\t\t/*trace(\"LoadRatio:\"+myStream.bytesLoaded, myStream.bytesTotal);
\t\tif((myStatus.isLoading || myStatus.isLoaded) && myStream.bytesTotal > 0) {
\t\t
\t\treturn myStream.bytesLoaded / myStream.bytesTotal;
\t\t} else {
\t\treturn 0;
\t\t}
\t\t*/

\t}
\tpublic function getDuration():Number
\t{
\t\treturn myStatus.duration;// Set from meta data.
\t}
\tpublic function getCurrentTime():Number
\t{
\t\tif (myStatus.isPlaying)
\t\t{
\t\t\t//trace(myStream.time * 1000);
\t\t\treturn myStream.time * 1000; // was +1000
\t\t}
\t\telse
\t\t{
\t\t\treturn myStatus.pausePosition;
\t\t}
\t}
\tpublic function getCurrentRatioRel():Number
\t{

\t\tif ((getCurrentRatioAbs() <= getLoadRatio()))
\t\t{
\t\t\t//if((getLoadRatio() > 0) && (getCurrentRatioAbs() <= getLoadRatio())) {
\t\t\treturn getCurrentRatioAbs() / getLoadRatio();
\t\t}
\t\telse
\t\t{
\t\t\treturn 0;
\t\t}
\t}
\tpublic function getCurrentRatioAbs():Number
\t{
\t\tif ((getDuration() > 0))
\t\t{
\t\t\treturn getCurrentTime() / getDuration();
\t\t}
\t\telse
\t\t{
\t\t\treturn 0;
\t\t}
\t}
\tpublic function getSeekTimeRatio():Number
\t{
\t\tif ((getDuration() > 0))
\t\t{
\t\t\treturn myStatus.pausePosition / getDuration();
\t\t}
\t\telse
\t\t{
\t\t\treturn 1;
\t\t}
\t}
\tpublic function onPlayStatusHandler(infoObject:Object):void
\t{
\t\ttrace(((\"OnPlayStatusHandler called: (\" + getTimer()) + \" ms)\"));
\t\tfor (var prop:* in infoObject)
\t\t{
\t\t\ttrace((((\"\\t\" + prop) + \":\\t\") + infoObject[prop]));
\t\t}
\t\tif (infoObject.code == \"NetStream.Play.Complete\")
\t\t{
\t\t\tendedEvent();
\t\t}
\t}

\tpublic function onMetaDataHandler(info:Object):void
\t{// Used in connectStream() in myStream.client object.
\t\t// This event occurs when jumping to the start of static files! ie., seek(0) will cause this event to occur.

\t\tif (! myStatus.metaDataReady)
\t\t{
\t\t\ttrace(\"\\n\\n*** METADATA FIRED! ***\\n\\n\");
\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"onMetaDataHandler: \" + info.duration + \" | \" + info.width + \"x\" + info.height));

\t\t\tmyStatus.metaDataReady = true;// Set flag so that this event only effects jPlayer the 1st time.
\t\t\tmyStatus.metaData = info;
\t\t\tmyStatus.duration = info.duration * 1000;// Only available via Meta Data.
\t\t\tif (info.width != undefined)
\t\t\t{
\t\t\t\tmyVideo.width = myStatus.videoWidth = info.width;
\t\t\t}
\t\t\tif (info.height != undefined)
\t\t\t{
\t\t\t\tmyVideo.height = myStatus.videoHeight = info.height;
\t\t\t}

\t\t\tif (myStatus.playOnLoad)
\t\t\t{
\t\t\t\tmyStatus.playOnLoad = false;// Capture the flag
\t\t\t\tif (myStatus.pausePosition > 0)
\t\t\t\t{// Important for setMedia followed by play(time).
\t\t\t\t\tplay(myStatus.pausePosition);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tplay();// Not always sending pausePosition avoids the extra seek(0) for a normal play() command.
\t\t\t\t}
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tpause(myStatus.pausePosition);// Always send the pausePosition. Important for setMedia() followed by pause(time). Deals with not reading stream.time with setMedia() and play() immediately followed by stop() or pause(0)
\t\t\t}
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_LOADEDMETADATA,myStatus));
\t\t}
\t\telse
\t\t{
\t\t\t//this.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG,myStatus,\"onMetaDataHandler: Already read (NO EFFECT)\"));
\t\t}
\t}
}
}", "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerRtmp.as", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerRtmp.as");
    }
}
