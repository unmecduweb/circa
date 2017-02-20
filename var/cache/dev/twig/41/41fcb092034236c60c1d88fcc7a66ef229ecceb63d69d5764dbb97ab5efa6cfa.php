<?php

/* @MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerMp4.as */
class __TwigTemplate_d46dc3902120c452e0e0897298bd980396f7baf45523cdd8a5058b78e1d44717 extends Twig_Template
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
        $__internal_577c1b31725d30be4b217240ca9d34a86e49827bce703b2447def106166520c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_577c1b31725d30be4b217240ca9d34a86e49827bce703b2447def106166520c3->enter($__internal_577c1b31725d30be4b217240ca9d34a86e49827bce703b2447def106166520c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerMp4.as"));

        // line 1
        echo "/*
 * jPlayer Plugin for jQuery JavaScript Library
 * http://www.jplayer.org
 *
 * Copyright (c) 2009 - 2013 Happyworm Ltd
 * Licensed under the MIT license.
 * http://opensource.org/licenses/MIT
 *
 * Author: Mark J Panaghiston
 * Date: 29th January 2013
 */

package happyworm.jPlayer {
\timport flash.display.Sprite;

\timport flash.media.Video;
\timport flash.media.SoundTransform;

\timport flash.net.NetConnection;
\timport flash.net.NetStream;

\timport flash.utils.Timer;

\timport flash.events.NetStatusEvent;
\timport flash.events.SecurityErrorEvent;
\timport flash.events.TimerEvent;

\tpublic class JplayerMp4 extends Sprite {
\t\t
\t\tpublic var myVideo:Video = new Video();
\t\tprivate var myConnection:NetConnection;
\t\tprivate var myStream:NetStream;
\t\t
\t\tprivate var myTransform:SoundTransform = new SoundTransform();

\t\tpublic var myStatus:JplayerStatus = new JplayerStatus();
\t\t
\t\tprivate var timeUpdateTimer:Timer = new Timer(250, 0); // Matched to HTML event freq
\t\tprivate var progressTimer:Timer = new Timer(250, 0); // Matched to HTML event freq
\t\tprivate var seekingTimer:Timer = new Timer(100, 0); // Internal: How often seeking is checked to see if it is over.

\t\tpublic function JplayerMp4(volume:Number) {
\t\t\tmyConnection = new NetConnection();
\t\t\tmyConnection.addEventListener(NetStatusEvent.NET_STATUS, netStatusHandler);
\t\t\tmyConnection.addEventListener(SecurityErrorEvent.SECURITY_ERROR, securityErrorHandler);
\t\t\tmyVideo.smoothing = true;
\t\t\tthis.addChild(myVideo);
\t\t\t
\t\t\ttimeUpdateTimer.addEventListener(TimerEvent.TIMER, timeUpdateHandler);
\t\t\tprogressTimer.addEventListener(TimerEvent.TIMER, progressHandler);
\t\t\tseekingTimer.addEventListener(TimerEvent.TIMER, seekingHandler);

\t\t\tmyStatus.volume = volume;
\t\t}
\t\tprivate function progressUpdates(active:Boolean):void {
\t\t\tif(active) {
\t\t\t\tprogressTimer.start();
\t\t\t} else {
\t\t\t\tprogressTimer.stop();
\t\t\t}
\t\t}
\t\tprivate function progressHandler(e:TimerEvent):void {
\t\t\tif(myStatus.isLoading) {
\t\t\t\tif(getLoadRatio() == 1) { // Close as can get to a loadComplete event since client.onPlayStatus only works with FMS
\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"progressHandler: loadComplete\"));
\t\t\t\t\tmyStatus.loaded();
\t\t\t\t\tprogressUpdates(false);
\t\t\t\t}
\t\t\t}
\t\t\tprogressEvent();
\t\t}
\t\tprivate function progressEvent():void {
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"progressEvent:\"));
\t\t\tupdateStatusValues();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PROGRESS, myStatus));
\t\t}
\t\tprivate function timeUpdates(active:Boolean):void {
\t\t\tif(active) {
\t\t\t\ttimeUpdateTimer.start();
\t\t\t} else {
\t\t\t\ttimeUpdateTimer.stop();
\t\t\t}
\t\t}
\t\tprivate function timeUpdateHandler(e:TimerEvent):void {
\t\t\ttimeUpdateEvent();
\t\t}
\t\tprivate function timeUpdateEvent():void {
\t\t\tupdateStatusValues();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_TIMEUPDATE, myStatus));
\t\t}
\t\tprivate function seeking(active:Boolean):void {
\t\t\tif(active) {
\t\t\t\tif(!myStatus.isSeeking) {
\t\t\t\t\tseekingEvent();
\t\t\t\t}
\t\t\t\tseekingTimer.start();
\t\t\t} else {
\t\t\t\tif(myStatus.isSeeking) {
\t\t\t\t\tseekedEvent();
\t\t\t\t}
\t\t\t\tseekingTimer.stop();
\t\t\t}
\t\t}
\t\tprivate function seekingHandler(e:TimerEvent):void {
\t\t\tif(getSeekTimeRatio() <= getLoadRatio()) {
\t\t\t\tseeking(false);
\t\t\t\tif(myStatus.playOnSeek) {
\t\t\t\t\tmyStatus.playOnSeek = false; // Capture the flag.
\t\t\t\t\tplay(myStatus.pausePosition); // Must pass time or the seek time is never set.
\t\t\t\t} else {
\t\t\t\t\tpause(myStatus.pausePosition); // Must pass time or the stream.time is read.
\t\t\t\t}
\t\t\t} else if(myStatus.metaDataReady && myStatus.pausePosition > myStatus.duration) {
\t\t\t\t// Illegal seek time
\t\t\t\tseeking(false);
\t\t\t\tpause(0);
\t\t\t}
\t\t}
\t\tprivate function seekingEvent():void {
\t\t\tmyStatus.isSeeking = true;
\t\t\tupdateStatusValues();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_SEEKING, myStatus));
\t\t}
\t\tprivate function seekedEvent():void {
\t\t\tmyStatus.isSeeking = false;
\t\t\tupdateStatusValues();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_SEEKED, myStatus));
\t\t}
\t\tprivate function netStatusHandler(e:NetStatusEvent):void {
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"netStatusHandler: '\" + e.info.code + \"'\"));
\t\t\tswitch(e.info.code) {
\t\t\t\tcase \"NetConnection.Connect.Success\":
\t\t\t\t\tconnectStream();
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Play.Start\":
\t\t\t\t\t// This event code occurs once, when the media is opened. Equiv to loadOpen() in mp3 player.
\t\t\t\t\tmyStatus.loading();
\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_LOADSTART, myStatus));
\t\t\t\t\tprogressUpdates(true);
\t\t\t\t\t// See onMetaDataHandler() for other condition, since duration is vital.
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Play.Stop\":
\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"NetStream.Play.Stop: getDuration() - getCurrentTime() = \" + (getDuration() - getCurrentTime())));

\t\t\t\t\t// Check if media is at the end (or close) otherwise this was due to download bandwidth stopping playback. ie., Download is not fast enough.
\t\t\t\t\tif(Math.abs(getDuration() - getCurrentTime()) < 150) { // Testing found 150ms worked best for M4A files, where playHead(99.9) caused a stuck state due to firing with ~116ms left to play.
\t\t\t\t\t\tendedEvent();
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Seek.InvalidTime\":
\t\t\t\t\t// Used for capturing invalid set times and clicks on the end of the progress bar.
\t\t\t\t\tendedEvent();
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Play.StreamNotFound\":
\t\t\t\t\tmyStatus.error(); // Resets status except the src, and it sets srcError property.
\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_ERROR, myStatus));
\t\t\t\t\tbreak;
\t\t\t}
\t\t\t// \"NetStream.Seek.Notify\" event code is not very useful. It occurs after every seek(t) command issued and does not appear to wait for the media to be ready.
\t\t}
\t\tprivate function endedEvent():void {
\t\t\tvar wasPlaying:Boolean = myStatus.isPlaying;
\t\t\tpause(0);
\t\t\ttimeUpdates(false);
\t\t\ttimeUpdateEvent();
\t\t\tif(wasPlaying) {
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_ENDED, myStatus));
\t\t\t}
\t\t}
\t\tprivate function securityErrorHandler(event:SecurityErrorEvent):void {
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"securityErrorHandler.\"));
\t\t}
\t\tprivate function connectStream():void {
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"connectStream.\"));
\t\t\tvar customClient:Object = new Object();
\t\t\tcustomClient.onMetaData = onMetaDataHandler;
\t\t\t// customClient.onPlayStatus = onPlayStatusHandler; // According to the forums and my tests, onPlayStatus only works with FMS (Flash Media Server).
\t\t\tmyStream = null;
\t\t\tmyStream = new NetStream(myConnection);
\t\t\tmyStream.addEventListener(NetStatusEvent.NET_STATUS, netStatusHandler);
\t\t\tmyStream.client = customClient;
\t\t\tmyVideo.attachNetStream(myStream);
\t\t\tsetVolume(myStatus.volume);
\t\t\tmyStream.play(myStatus.src);
\t\t}
\t\tpublic function setFile(src:String):void {
\t\t\tif(myStream != null) {
\t\t\t\tmyStream.close();
\t\t\t}
\t\t\tmyVideo.clear();
\t\t\tprogressUpdates(false);
\t\t\ttimeUpdates(false);

\t\t\tmyStatus.reset();
\t\t\tmyStatus.src = src;
\t\t\tmyStatus.srcSet = true;
\t\t\ttimeUpdateEvent();
\t\t}
\t\tpublic function clearFile():void {
\t\t\tsetFile(\"\");
\t\t\tmyStatus.srcSet = false;
\t\t}
\t\tpublic function load():Boolean {
\t\t\tif(myStatus.loadRequired()) {
\t\t\t\tmyStatus.startingDownload();
\t\t\t\tmyConnection.connect(null);
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\tpublic function play(time:Number = NaN):Boolean {
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
\t\t\t\tif(myStatus.metaDataReady && myStatus.pausePosition > myStatus.duration) { // The time is invalid, ie., past the end.
\t\t\t\t\tmyStream.pause(); // Since it is playing by default at this point.
\t\t\t\t\tmyStatus.pausePosition = 0;
\t\t\t\t\tmyStream.seek(0);
\t\t\t\t\ttimeUpdates(false);
\t\t\t\t\ttimeUpdateEvent();
\t\t\t\t\tif(wasPlaying) { // For when playing and then get a play(huge)
\t\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PAUSE, myStatus));
\t\t\t\t\t}
\t\t\t\t} else if(getSeekTimeRatio() > getLoadRatio()) { // Use an estimate based on the downloaded amount
\t\t\t\t\tmyStatus.playOnSeek = true;
\t\t\t\t\tseeking(true);
\t\t\t\t\tmyStream.pause(); // Since it is playing by default at this point.
\t\t\t\t} else {
\t\t\t\t\tif(!isNaN(time)) { // Avoid using seek() when it is already correct.
\t\t\t\t\t\tmyStream.seek(myStatus.pausePosition/1000); // Since time is in ms and seek() takes seconds
\t\t\t\t\t}
\t\t\t\t\tmyStatus.isPlaying = true; // Set immediately before playing. Could affects events.
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
\t\tpublic function pause(time:Number = NaN):Boolean {
\t\t\tmyStatus.playOnLoad = false; // Reset flag in case load/play issued immediately before this command, ie., before onMetadata() event.
\t\t\tmyStatus.playOnSeek = false; // Reset flag in case play(time) issued before the command and is still seeking to time set.

\t\t\tvar wasPlaying:Boolean = myStatus.isPlaying;

\t\t\t// To avoid possible loops with timeupdate and pause(time). A pause() does not have the problem.
\t\t\tvar alreadyPausedAtTime:Boolean = false;
\t\t\tif(!isNaN(time) && myStatus.pausePosition == time) {
\t\t\t\talreadyPausedAtTime = true;
\t\t\t}

\t\t\t// Need to wait for metadata to load before ever issuing a pause. The metadata handler will call this function if needed, when ready.
\t\t\tif(myStream != null && myStatus.metaDataReady) { // myStream is a null until the 1st media is loaded. ie., The 1st ever setMedia being followed by a pause() or pause(t).
\t\t\t\tmyStream.pause();
\t\t\t}
\t\t\tif(myStatus.isPlaying) {
\t\t\t\tmyStatus.isPlaying = false;
\t\t\t\tmyStatus.pausePosition = myStream.time * 1000;
\t\t\t}
\t\t\t
\t\t\tif(!isNaN(time) && myStatus.srcSet) {
\t\t\t\tmyStatus.pausePosition = time;
\t\t\t}

\t\t\tif(wasPlaying) {
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PAUSE, myStatus));
\t\t\t}

\t\t\tif(myStatus.isStartingDownload) {
\t\t\t\treturn true;
\t\t\t} else if(myStatus.loadRequired()) {
\t\t\t\tif(time > 0) { // We do not want the stop() command, which does pause(0), causing a load operation.
\t\t\t\t\treturn load();
\t\t\t\t} else {
\t\t\t\t\treturn true; // Technically the pause(0) succeeded. ie., It did nothing, since nothing was required.
\t\t\t\t}
\t\t\t} else if(myStatus.isLoading || myStatus.isLoaded) {
\t\t\t\tif(myStatus.metaDataReady && myStatus.pausePosition > myStatus.duration) { // The time is invalid, ie., past the end.
\t\t\t\t\tmyStatus.pausePosition = 0;
\t\t\t\t\tmyStream.seek(0);
\t\t\t\t\tseekedEvent(); // Deals with seeking effect when using setMedia() then pause(huge). NB: There is no preceeding seeking event.
\t\t\t\t} else if(!isNaN(time)) {
\t\t\t\t\tif(getSeekTimeRatio() > getLoadRatio()) { // Use an estimate based on the downloaded amount
\t\t\t\t\t\tseeking(true);
\t\t\t\t\t} else {
\t\t\t\t\t\tif(myStatus.metaDataReady) { // Otherwise seek(0) will stop the metadata loading.
\t\t\t\t\t\t\tmyStream.seek(myStatus.pausePosition/1000);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\ttimeUpdates(false);
\t\t\t\t// Need to be careful with timeupdate event, otherwise a pause in a timeupdate event can cause a loop.
\t\t\t\t// Neither pause() nor pause(time) will cause a timeupdate loop.
\t\t\t\tif(wasPlaying || !isNaN(time) && !alreadyPausedAtTime) {
\t\t\t\t\ttimeUpdateEvent();
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\tpublic function playHead(percent:Number):Boolean {
\t\t\tvar time:Number = percent * getDuration() * getLoadRatio() / 100;
\t\t\tif(myStatus.isPlaying || myStatus.playOnLoad || myStatus.playOnSeek) {
\t\t\t\treturn play(time);
\t\t\t} else {
\t\t\t\treturn pause(time);
\t\t\t}
\t\t}
\t\tpublic function setVolume(v:Number):void {
\t\t\tmyStatus.volume = v;
\t\t\tmyTransform.volume = v;
\t\t\tif(myStream != null) {
\t\t\t\tmyStream.soundTransform = myTransform;
\t\t\t}
\t\t}
\t\tprivate function updateStatusValues():void {
\t\t\tmyStatus.seekPercent = 100 * getLoadRatio();
\t\t\tmyStatus.currentTime = getCurrentTime();
\t\t\tmyStatus.currentPercentRelative = 100 * getCurrentRatioRel();
\t\t\tmyStatus.currentPercentAbsolute = 100 * getCurrentRatioAbs();
\t\t\tmyStatus.duration = getDuration();
\t\t}
\t\tpublic function getLoadRatio():Number {
\t\t\tif((myStatus.isLoading || myStatus.isLoaded) && myStream.bytesTotal > 0) {
\t\t\t\treturn myStream.bytesLoaded / myStream.bytesTotal;
\t\t\t} else {
\t\t\t\treturn 0;
\t\t\t}
\t\t}
\t\tpublic function getDuration():Number {
\t\t\treturn myStatus.duration; // Set from meta data.
\t\t}
\t\tpublic function getCurrentTime():Number {
\t\t\tif(myStatus.isPlaying) {
\t\t\t\treturn myStream.time * 1000;
\t\t\t} else {
\t\t\t\treturn myStatus.pausePosition;
\t\t\t}
\t\t}
\t\tpublic function getCurrentRatioRel():Number {
\t\t\tif((getLoadRatio() > 0) && (getCurrentRatioAbs() <= getLoadRatio())) {
\t\t\t\treturn getCurrentRatioAbs() / getLoadRatio();
\t\t\t} else {
\t\t\t\treturn 0;
\t\t\t}
\t\t}
\t\tpublic function getCurrentRatioAbs():Number {
\t\t\tif(getDuration() > 0) {
\t\t\t\treturn getCurrentTime() / getDuration();
\t\t\t} else {
\t\t\t\treturn 0;
\t\t\t}
\t\t}
\t\tpublic function getSeekTimeRatio():Number {
\t\t\tif(getDuration() > 0) {
\t\t\t\treturn myStatus.pausePosition / getDuration();
\t\t\t} else {
\t\t\t\treturn 1;
\t\t\t}
\t\t}
\t\tpublic function onMetaDataHandler(info:Object):void { // Used in connectStream() in myStream.client object.
\t\t\t// This event occurs when jumping to the start of static files! ie., seek(0) will cause this event to occur.
\t\t\tif(!myStatus.metaDataReady) {
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"onMetaDataHandler: \" + info.duration + \" | \" + info.width + \"x\" + info.height));

\t\t\t\tmyStatus.metaDataReady = true; // Set flag so that this event only effects jPlayer the 1st time.
\t\t\t\tmyStatus.metaData = info;
\t\t\t\tmyStatus.duration = info.duration * 1000; // Only available via Meta Data.
\t\t\t\tif(info.width != undefined) {
\t\t\t\t\tmyVideo.width = myStatus.videoWidth = info.width;
\t\t\t\t}
\t\t\t\tif(info.height != undefined) {
\t\t\t\t\tmyVideo.height = myStatus.videoHeight = info.height;
\t\t\t\t}

\t\t\t\tif(myStatus.playOnLoad) {
\t\t\t\t\tmyStatus.playOnLoad = false; // Capture the flag
\t\t\t\t\tif(myStatus.pausePosition > 0 ) { // Important for setMedia followed by play(time).
\t\t\t\t\t\tplay(myStatus.pausePosition);
\t\t\t\t\t} else {
\t\t\t\t\t\tplay(); // Not always sending pausePosition avoids the extra seek(0) for a normal play() command.
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tpause(myStatus.pausePosition); // Always send the pausePosition. Important for setMedia() followed by pause(time). Deals with not reading stream.time with setMedia() and play() immediately followed by stop() or pause(0)
\t\t\t\t}
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_LOADEDMETADATA, myStatus));
\t\t\t} else {
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"onMetaDataHandler: Already read (NO EFFECT)\"));
\t\t\t}
\t\t}
\t}
}
";
        
        $__internal_577c1b31725d30be4b217240ca9d34a86e49827bce703b2447def106166520c3->leave($__internal_577c1b31725d30be4b217240ca9d34a86e49827bce703b2447def106166520c3_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerMp4.as";
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
 * Author: Mark J Panaghiston
 * Date: 29th January 2013
 */

package happyworm.jPlayer {
\timport flash.display.Sprite;

\timport flash.media.Video;
\timport flash.media.SoundTransform;

\timport flash.net.NetConnection;
\timport flash.net.NetStream;

\timport flash.utils.Timer;

\timport flash.events.NetStatusEvent;
\timport flash.events.SecurityErrorEvent;
\timport flash.events.TimerEvent;

\tpublic class JplayerMp4 extends Sprite {
\t\t
\t\tpublic var myVideo:Video = new Video();
\t\tprivate var myConnection:NetConnection;
\t\tprivate var myStream:NetStream;
\t\t
\t\tprivate var myTransform:SoundTransform = new SoundTransform();

\t\tpublic var myStatus:JplayerStatus = new JplayerStatus();
\t\t
\t\tprivate var timeUpdateTimer:Timer = new Timer(250, 0); // Matched to HTML event freq
\t\tprivate var progressTimer:Timer = new Timer(250, 0); // Matched to HTML event freq
\t\tprivate var seekingTimer:Timer = new Timer(100, 0); // Internal: How often seeking is checked to see if it is over.

\t\tpublic function JplayerMp4(volume:Number) {
\t\t\tmyConnection = new NetConnection();
\t\t\tmyConnection.addEventListener(NetStatusEvent.NET_STATUS, netStatusHandler);
\t\t\tmyConnection.addEventListener(SecurityErrorEvent.SECURITY_ERROR, securityErrorHandler);
\t\t\tmyVideo.smoothing = true;
\t\t\tthis.addChild(myVideo);
\t\t\t
\t\t\ttimeUpdateTimer.addEventListener(TimerEvent.TIMER, timeUpdateHandler);
\t\t\tprogressTimer.addEventListener(TimerEvent.TIMER, progressHandler);
\t\t\tseekingTimer.addEventListener(TimerEvent.TIMER, seekingHandler);

\t\t\tmyStatus.volume = volume;
\t\t}
\t\tprivate function progressUpdates(active:Boolean):void {
\t\t\tif(active) {
\t\t\t\tprogressTimer.start();
\t\t\t} else {
\t\t\t\tprogressTimer.stop();
\t\t\t}
\t\t}
\t\tprivate function progressHandler(e:TimerEvent):void {
\t\t\tif(myStatus.isLoading) {
\t\t\t\tif(getLoadRatio() == 1) { // Close as can get to a loadComplete event since client.onPlayStatus only works with FMS
\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"progressHandler: loadComplete\"));
\t\t\t\t\tmyStatus.loaded();
\t\t\t\t\tprogressUpdates(false);
\t\t\t\t}
\t\t\t}
\t\t\tprogressEvent();
\t\t}
\t\tprivate function progressEvent():void {
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"progressEvent:\"));
\t\t\tupdateStatusValues();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PROGRESS, myStatus));
\t\t}
\t\tprivate function timeUpdates(active:Boolean):void {
\t\t\tif(active) {
\t\t\t\ttimeUpdateTimer.start();
\t\t\t} else {
\t\t\t\ttimeUpdateTimer.stop();
\t\t\t}
\t\t}
\t\tprivate function timeUpdateHandler(e:TimerEvent):void {
\t\t\ttimeUpdateEvent();
\t\t}
\t\tprivate function timeUpdateEvent():void {
\t\t\tupdateStatusValues();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_TIMEUPDATE, myStatus));
\t\t}
\t\tprivate function seeking(active:Boolean):void {
\t\t\tif(active) {
\t\t\t\tif(!myStatus.isSeeking) {
\t\t\t\t\tseekingEvent();
\t\t\t\t}
\t\t\t\tseekingTimer.start();
\t\t\t} else {
\t\t\t\tif(myStatus.isSeeking) {
\t\t\t\t\tseekedEvent();
\t\t\t\t}
\t\t\t\tseekingTimer.stop();
\t\t\t}
\t\t}
\t\tprivate function seekingHandler(e:TimerEvent):void {
\t\t\tif(getSeekTimeRatio() <= getLoadRatio()) {
\t\t\t\tseeking(false);
\t\t\t\tif(myStatus.playOnSeek) {
\t\t\t\t\tmyStatus.playOnSeek = false; // Capture the flag.
\t\t\t\t\tplay(myStatus.pausePosition); // Must pass time or the seek time is never set.
\t\t\t\t} else {
\t\t\t\t\tpause(myStatus.pausePosition); // Must pass time or the stream.time is read.
\t\t\t\t}
\t\t\t} else if(myStatus.metaDataReady && myStatus.pausePosition > myStatus.duration) {
\t\t\t\t// Illegal seek time
\t\t\t\tseeking(false);
\t\t\t\tpause(0);
\t\t\t}
\t\t}
\t\tprivate function seekingEvent():void {
\t\t\tmyStatus.isSeeking = true;
\t\t\tupdateStatusValues();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_SEEKING, myStatus));
\t\t}
\t\tprivate function seekedEvent():void {
\t\t\tmyStatus.isSeeking = false;
\t\t\tupdateStatusValues();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_SEEKED, myStatus));
\t\t}
\t\tprivate function netStatusHandler(e:NetStatusEvent):void {
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"netStatusHandler: '\" + e.info.code + \"'\"));
\t\t\tswitch(e.info.code) {
\t\t\t\tcase \"NetConnection.Connect.Success\":
\t\t\t\t\tconnectStream();
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Play.Start\":
\t\t\t\t\t// This event code occurs once, when the media is opened. Equiv to loadOpen() in mp3 player.
\t\t\t\t\tmyStatus.loading();
\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_LOADSTART, myStatus));
\t\t\t\t\tprogressUpdates(true);
\t\t\t\t\t// See onMetaDataHandler() for other condition, since duration is vital.
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Play.Stop\":
\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"NetStream.Play.Stop: getDuration() - getCurrentTime() = \" + (getDuration() - getCurrentTime())));

\t\t\t\t\t// Check if media is at the end (or close) otherwise this was due to download bandwidth stopping playback. ie., Download is not fast enough.
\t\t\t\t\tif(Math.abs(getDuration() - getCurrentTime()) < 150) { // Testing found 150ms worked best for M4A files, where playHead(99.9) caused a stuck state due to firing with ~116ms left to play.
\t\t\t\t\t\tendedEvent();
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Seek.InvalidTime\":
\t\t\t\t\t// Used for capturing invalid set times and clicks on the end of the progress bar.
\t\t\t\t\tendedEvent();
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetStream.Play.StreamNotFound\":
\t\t\t\t\tmyStatus.error(); // Resets status except the src, and it sets srcError property.
\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_ERROR, myStatus));
\t\t\t\t\tbreak;
\t\t\t}
\t\t\t// \"NetStream.Seek.Notify\" event code is not very useful. It occurs after every seek(t) command issued and does not appear to wait for the media to be ready.
\t\t}
\t\tprivate function endedEvent():void {
\t\t\tvar wasPlaying:Boolean = myStatus.isPlaying;
\t\t\tpause(0);
\t\t\ttimeUpdates(false);
\t\t\ttimeUpdateEvent();
\t\t\tif(wasPlaying) {
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_ENDED, myStatus));
\t\t\t}
\t\t}
\t\tprivate function securityErrorHandler(event:SecurityErrorEvent):void {
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"securityErrorHandler.\"));
\t\t}
\t\tprivate function connectStream():void {
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"connectStream.\"));
\t\t\tvar customClient:Object = new Object();
\t\t\tcustomClient.onMetaData = onMetaDataHandler;
\t\t\t// customClient.onPlayStatus = onPlayStatusHandler; // According to the forums and my tests, onPlayStatus only works with FMS (Flash Media Server).
\t\t\tmyStream = null;
\t\t\tmyStream = new NetStream(myConnection);
\t\t\tmyStream.addEventListener(NetStatusEvent.NET_STATUS, netStatusHandler);
\t\t\tmyStream.client = customClient;
\t\t\tmyVideo.attachNetStream(myStream);
\t\t\tsetVolume(myStatus.volume);
\t\t\tmyStream.play(myStatus.src);
\t\t}
\t\tpublic function setFile(src:String):void {
\t\t\tif(myStream != null) {
\t\t\t\tmyStream.close();
\t\t\t}
\t\t\tmyVideo.clear();
\t\t\tprogressUpdates(false);
\t\t\ttimeUpdates(false);

\t\t\tmyStatus.reset();
\t\t\tmyStatus.src = src;
\t\t\tmyStatus.srcSet = true;
\t\t\ttimeUpdateEvent();
\t\t}
\t\tpublic function clearFile():void {
\t\t\tsetFile(\"\");
\t\t\tmyStatus.srcSet = false;
\t\t}
\t\tpublic function load():Boolean {
\t\t\tif(myStatus.loadRequired()) {
\t\t\t\tmyStatus.startingDownload();
\t\t\t\tmyConnection.connect(null);
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\tpublic function play(time:Number = NaN):Boolean {
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
\t\t\t\tif(myStatus.metaDataReady && myStatus.pausePosition > myStatus.duration) { // The time is invalid, ie., past the end.
\t\t\t\t\tmyStream.pause(); // Since it is playing by default at this point.
\t\t\t\t\tmyStatus.pausePosition = 0;
\t\t\t\t\tmyStream.seek(0);
\t\t\t\t\ttimeUpdates(false);
\t\t\t\t\ttimeUpdateEvent();
\t\t\t\t\tif(wasPlaying) { // For when playing and then get a play(huge)
\t\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PAUSE, myStatus));
\t\t\t\t\t}
\t\t\t\t} else if(getSeekTimeRatio() > getLoadRatio()) { // Use an estimate based on the downloaded amount
\t\t\t\t\tmyStatus.playOnSeek = true;
\t\t\t\t\tseeking(true);
\t\t\t\t\tmyStream.pause(); // Since it is playing by default at this point.
\t\t\t\t} else {
\t\t\t\t\tif(!isNaN(time)) { // Avoid using seek() when it is already correct.
\t\t\t\t\t\tmyStream.seek(myStatus.pausePosition/1000); // Since time is in ms and seek() takes seconds
\t\t\t\t\t}
\t\t\t\t\tmyStatus.isPlaying = true; // Set immediately before playing. Could affects events.
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
\t\tpublic function pause(time:Number = NaN):Boolean {
\t\t\tmyStatus.playOnLoad = false; // Reset flag in case load/play issued immediately before this command, ie., before onMetadata() event.
\t\t\tmyStatus.playOnSeek = false; // Reset flag in case play(time) issued before the command and is still seeking to time set.

\t\t\tvar wasPlaying:Boolean = myStatus.isPlaying;

\t\t\t// To avoid possible loops with timeupdate and pause(time). A pause() does not have the problem.
\t\t\tvar alreadyPausedAtTime:Boolean = false;
\t\t\tif(!isNaN(time) && myStatus.pausePosition == time) {
\t\t\t\talreadyPausedAtTime = true;
\t\t\t}

\t\t\t// Need to wait for metadata to load before ever issuing a pause. The metadata handler will call this function if needed, when ready.
\t\t\tif(myStream != null && myStatus.metaDataReady) { // myStream is a null until the 1st media is loaded. ie., The 1st ever setMedia being followed by a pause() or pause(t).
\t\t\t\tmyStream.pause();
\t\t\t}
\t\t\tif(myStatus.isPlaying) {
\t\t\t\tmyStatus.isPlaying = false;
\t\t\t\tmyStatus.pausePosition = myStream.time * 1000;
\t\t\t}
\t\t\t
\t\t\tif(!isNaN(time) && myStatus.srcSet) {
\t\t\t\tmyStatus.pausePosition = time;
\t\t\t}

\t\t\tif(wasPlaying) {
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PAUSE, myStatus));
\t\t\t}

\t\t\tif(myStatus.isStartingDownload) {
\t\t\t\treturn true;
\t\t\t} else if(myStatus.loadRequired()) {
\t\t\t\tif(time > 0) { // We do not want the stop() command, which does pause(0), causing a load operation.
\t\t\t\t\treturn load();
\t\t\t\t} else {
\t\t\t\t\treturn true; // Technically the pause(0) succeeded. ie., It did nothing, since nothing was required.
\t\t\t\t}
\t\t\t} else if(myStatus.isLoading || myStatus.isLoaded) {
\t\t\t\tif(myStatus.metaDataReady && myStatus.pausePosition > myStatus.duration) { // The time is invalid, ie., past the end.
\t\t\t\t\tmyStatus.pausePosition = 0;
\t\t\t\t\tmyStream.seek(0);
\t\t\t\t\tseekedEvent(); // Deals with seeking effect when using setMedia() then pause(huge). NB: There is no preceeding seeking event.
\t\t\t\t} else if(!isNaN(time)) {
\t\t\t\t\tif(getSeekTimeRatio() > getLoadRatio()) { // Use an estimate based on the downloaded amount
\t\t\t\t\t\tseeking(true);
\t\t\t\t\t} else {
\t\t\t\t\t\tif(myStatus.metaDataReady) { // Otherwise seek(0) will stop the metadata loading.
\t\t\t\t\t\t\tmyStream.seek(myStatus.pausePosition/1000);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\ttimeUpdates(false);
\t\t\t\t// Need to be careful with timeupdate event, otherwise a pause in a timeupdate event can cause a loop.
\t\t\t\t// Neither pause() nor pause(time) will cause a timeupdate loop.
\t\t\t\tif(wasPlaying || !isNaN(time) && !alreadyPausedAtTime) {
\t\t\t\t\ttimeUpdateEvent();
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\tpublic function playHead(percent:Number):Boolean {
\t\t\tvar time:Number = percent * getDuration() * getLoadRatio() / 100;
\t\t\tif(myStatus.isPlaying || myStatus.playOnLoad || myStatus.playOnSeek) {
\t\t\t\treturn play(time);
\t\t\t} else {
\t\t\t\treturn pause(time);
\t\t\t}
\t\t}
\t\tpublic function setVolume(v:Number):void {
\t\t\tmyStatus.volume = v;
\t\t\tmyTransform.volume = v;
\t\t\tif(myStream != null) {
\t\t\t\tmyStream.soundTransform = myTransform;
\t\t\t}
\t\t}
\t\tprivate function updateStatusValues():void {
\t\t\tmyStatus.seekPercent = 100 * getLoadRatio();
\t\t\tmyStatus.currentTime = getCurrentTime();
\t\t\tmyStatus.currentPercentRelative = 100 * getCurrentRatioRel();
\t\t\tmyStatus.currentPercentAbsolute = 100 * getCurrentRatioAbs();
\t\t\tmyStatus.duration = getDuration();
\t\t}
\t\tpublic function getLoadRatio():Number {
\t\t\tif((myStatus.isLoading || myStatus.isLoaded) && myStream.bytesTotal > 0) {
\t\t\t\treturn myStream.bytesLoaded / myStream.bytesTotal;
\t\t\t} else {
\t\t\t\treturn 0;
\t\t\t}
\t\t}
\t\tpublic function getDuration():Number {
\t\t\treturn myStatus.duration; // Set from meta data.
\t\t}
\t\tpublic function getCurrentTime():Number {
\t\t\tif(myStatus.isPlaying) {
\t\t\t\treturn myStream.time * 1000;
\t\t\t} else {
\t\t\t\treturn myStatus.pausePosition;
\t\t\t}
\t\t}
\t\tpublic function getCurrentRatioRel():Number {
\t\t\tif((getLoadRatio() > 0) && (getCurrentRatioAbs() <= getLoadRatio())) {
\t\t\t\treturn getCurrentRatioAbs() / getLoadRatio();
\t\t\t} else {
\t\t\t\treturn 0;
\t\t\t}
\t\t}
\t\tpublic function getCurrentRatioAbs():Number {
\t\t\tif(getDuration() > 0) {
\t\t\t\treturn getCurrentTime() / getDuration();
\t\t\t} else {
\t\t\t\treturn 0;
\t\t\t}
\t\t}
\t\tpublic function getSeekTimeRatio():Number {
\t\t\tif(getDuration() > 0) {
\t\t\t\treturn myStatus.pausePosition / getDuration();
\t\t\t} else {
\t\t\t\treturn 1;
\t\t\t}
\t\t}
\t\tpublic function onMetaDataHandler(info:Object):void { // Used in connectStream() in myStream.client object.
\t\t\t// This event occurs when jumping to the start of static files! ie., seek(0) will cause this event to occur.
\t\t\tif(!myStatus.metaDataReady) {
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"onMetaDataHandler: \" + info.duration + \" | \" + info.width + \"x\" + info.height));

\t\t\t\tmyStatus.metaDataReady = true; // Set flag so that this event only effects jPlayer the 1st time.
\t\t\t\tmyStatus.metaData = info;
\t\t\t\tmyStatus.duration = info.duration * 1000; // Only available via Meta Data.
\t\t\t\tif(info.width != undefined) {
\t\t\t\t\tmyVideo.width = myStatus.videoWidth = info.width;
\t\t\t\t}
\t\t\t\tif(info.height != undefined) {
\t\t\t\t\tmyVideo.height = myStatus.videoHeight = info.height;
\t\t\t\t}

\t\t\t\tif(myStatus.playOnLoad) {
\t\t\t\t\tmyStatus.playOnLoad = false; // Capture the flag
\t\t\t\t\tif(myStatus.pausePosition > 0 ) { // Important for setMedia followed by play(time).
\t\t\t\t\t\tplay(myStatus.pausePosition);
\t\t\t\t\t} else {
\t\t\t\t\t\tplay(); // Not always sending pausePosition avoids the extra seek(0) for a normal play() command.
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tpause(myStatus.pausePosition); // Always send the pausePosition. Important for setMedia() followed by pause(time). Deals with not reading stream.time with setMedia() and play() immediately followed by stop() or pause(0)
\t\t\t\t}
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_LOADEDMETADATA, myStatus));
\t\t\t} else {
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"onMetaDataHandler: Already read (NO EFFECT)\"));
\t\t\t}
\t\t}
\t}
}
", "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerMp4.as", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerMp4.as");
    }
}
