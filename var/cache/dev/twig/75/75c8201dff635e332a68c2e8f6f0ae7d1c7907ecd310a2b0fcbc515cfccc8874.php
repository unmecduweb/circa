<?php

/* @MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerMp3.as */
class __TwigTemplate_79bb99d57e53bb4ddf92dc9e4e0e10c751ad05f7e2f0c87b724465175ed4fc18 extends Twig_Template
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
        $__internal_c07abc339f0ab7dbd98fdaa07d9e20f939062ec2066d4f1f5a85046812a1abbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07abc339f0ab7dbd98fdaa07d9e20f939062ec2066d4f1f5a85046812a1abbc->enter($__internal_c07abc339f0ab7dbd98fdaa07d9e20f939062ec2066d4f1f5a85046812a1abbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerMp3.as"));

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
 * Date: 28th May 2013
 */

package happyworm.jPlayer {
\timport flash.display.Sprite;

\timport flash.media.Sound;
\timport flash.media.SoundChannel;
\timport flash.media.SoundLoaderContext;
\timport flash.media.SoundTransform;
\timport flash.net.URLRequest;
\timport flash.utils.Timer;
\timport flash.errors.IOError;
\timport flash.events.*;

\tpublic class JplayerMp3 extends Sprite {
\t\tprivate var mySound:Sound = new Sound();
\t\tprivate var myChannel:SoundChannel = new SoundChannel();
\t\tprivate var myContext:SoundLoaderContext = new SoundLoaderContext(3000, false);
\t\tprivate var myTransform:SoundTransform = new SoundTransform();
\t\tprivate var myRequest:URLRequest = new URLRequest();

\t\tprivate var timeUpdateTimer:Timer = new Timer(250, 0); // Matched to HTML event freq
\t\tprivate var progressTimer:Timer = new Timer(250, 0); // Matched to HTML event freq
\t\tprivate var seekingTimer:Timer = new Timer(100, 0); // Internal: How often seeking is checked to see if it is over.
\t\tprivate var playingTimer:Timer = new Timer(100, 0); // Internal: How often waiting/playing is checked.
\t\tprivate var waitingTimer:Timer = new Timer(3000, 0); // Internal: Check from loadstart to loadOpen. Generates a waiting event.
\t\t
\t\tpublic var myStatus:JplayerStatus = new JplayerStatus();

\t\tpublic function JplayerMp3(volume:Number) {
\t\t\ttimeUpdateTimer.addEventListener(TimerEvent.TIMER, timeUpdateHandler);
\t\t\tprogressTimer.addEventListener(TimerEvent.TIMER, progressHandler);
\t\t\tseekingTimer.addEventListener(TimerEvent.TIMER, seekingHandler);
\t\t\tplayingTimer.addEventListener(TimerEvent.TIMER, playingHandler);
\t\t\twaitingTimer.addEventListener(TimerEvent.TIMER, waitingHandler);
\t\t\tsetVolume(volume);
\t\t}
\t\tpublic function setFile(src:String):void {
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"setFile: \" + src));
\t\t\tif(myStatus.isPlaying) {
\t\t\t\tmyChannel.stop();
\t\t\t}
\t\t\tprogressUpdates(false);
\t\t\ttimeUpdates(false);
\t\t\twaitingTimer.stop();
\t\t\ttry {
\t\t\t\tmySound.close();
\t\t\t} catch (err:IOError) {
\t\t\t\t// Occurs if the file is either yet to be opened or has finished downloading.
\t\t\t}
\t\t\tmySound = null;
\t\t\tmySound = new Sound();
\t\t\tmySound.addEventListener(IOErrorEvent.IO_ERROR, errorHandler);
\t\t\tmySound.addEventListener(Event.OPEN, loadOpen);
\t\t\tmySound.addEventListener(Event.COMPLETE, loadComplete);
\t\t\tmyRequest = new URLRequest(src);
\t\t\tmyStatus.reset();
\t\t\tmyStatus.src = src;
\t\t\tmyStatus.srcSet = true;
\t\t\ttimeUpdateEvent();
\t\t}
\t\tpublic function clearFile():void {
\t\t\tsetFile(\"\");
\t\t\tmyStatus.srcSet = false;
\t\t}
\t\tprivate function errorHandler(err:IOErrorEvent):void {
\t\t\t// MP3 player needs to stop progress and timeupdate events as they are started before the error occurs.
\t\t\t// NB: The MP4 player works differently and the error occurs before they are started.
\t\t\tprogressUpdates(false);
\t\t\ttimeUpdates(false);
\t\t\tmyStatus.error(); // Resets status except the src, and it sets srcError property.
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_ERROR, myStatus));
\t\t}
\t\tprivate function loadOpen(e:Event):void {
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"loadOpen:\"));
\t\t\twaitingTimer.stop();
\t\t\tmyStatus.loading();
\t\t\tif(myStatus.playOnLoad) {
\t\t\t\tmyStatus.playOnLoad = false; // Capture the flag
\t\t\t\t// this.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_LOADSTART, myStatus)); // So loadstart event happens before play event occurs.
\t\t\t\tplay();
\t\t\t} else {
\t\t\t\t// this.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_LOADSTART, myStatus));
\t\t\t\tpause();
\t\t\t}
\t\t\tprogressUpdates(true);
\t\t}
\t\tprivate function loadComplete(e:Event):void {
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"loadComplete:\"));
\t\t\tmyStatus.loaded();
\t\t\tprogressUpdates(false);
\t\t\tprogressEvent();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_CANPLAYTHROUGH, myStatus));
\t\t}
\t\tprivate function soundCompleteHandler(e:Event):void {
\t\t\tmyStatus.pausePosition = 0;
\t\t\tmyStatus.isPlaying = false;
\t\t\ttimeUpdates(false);
\t\t\ttimeUpdateEvent();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_ENDED, myStatus));
\t\t}
\t\tprivate function progressUpdates(active:Boolean):void {
\t\t\t// Using a timer rather than Flash's load progress event, because that event gave data at about 200Hz. The 10Hz timer is closer to HTML5 norm.
\t\t\tif(active) {
\t\t\t\tprogressTimer.start();
\t\t\t} else {
\t\t\t\tprogressTimer.stop();
\t\t\t}
\t\t}
\t\tprivate function progressHandler(e:TimerEvent):void {
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
\t\t\t\tplayingTimer.start();
\t\t\t} else {
\t\t\t\ttimeUpdateTimer.stop();
\t\t\t\tplayingTimer.stop();
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
\t\t\t\tseekingEvent();
\t\t\t\twaitingEvent();
\t\t\t\tseekingTimer.start();
\t\t\t} else {
\t\t\t\tseekingTimer.stop();
\t\t\t}
\t\t}
\t\tprivate function seekingHandler(e:TimerEvent):void {
\t\t\tif(myStatus.pausePosition <= getDuration()) {
\t\t\t\tseekedEvent();
\t\t\t\tseeking(false);
\t\t\t\tif(myStatus.playOnSeek) {
\t\t\t\t\tmyStatus.playOnSeek = false; // Capture the flag.
\t\t\t\t\tplay();
\t\t\t\t}
\t\t\t} else if(myStatus.isLoaded && (myStatus.pausePosition > getDuration())) {
\t\t\t\t// Illegal seek time
\t\t\t\tseeking(false);
\t\t\t\tseekedEvent();
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
\t\tprivate function playingHandler(e:TimerEvent):void {
\t\t\tcheckPlaying(false); // Without forcing playing event.
\t\t}
\t\tprivate function checkPlaying(force:Boolean):void {
\t\t\tif(mySound.isBuffering) {
\t\t\t\tif(!myStatus.isWaiting) {
\t\t\t\t\twaitingEvent();
\t\t\t\t}
\t\t\t} else {
\t\t\t\tif(myStatus.isWaiting || force) {
\t\t\t\t\tplayingEvent();
\t\t\t\t}
\t\t\t}
\t\t}
\t\tprivate function waitingEvent():void {
\t\t\tmyStatus.isWaiting = true;
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_WAITING, myStatus));
\t\t}
\t\tprivate function playingEvent():void {
\t\t\tmyStatus.isWaiting = false;
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_CANPLAY, myStatus));
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PLAYING, myStatus));
\t\t}
\t\tprivate function waitingHandler(e:TimerEvent):void {
\t\t\twaitingTimer.stop();
\t\t\tif(myStatus.playOnLoad) {
\t\t\t\twaitingEvent();
\t\t\t}
\t\t}
\t\tpublic function load():Boolean {
\t\t\tif(myStatus.loadRequired()) {
\t\t\t\tmyStatus.startingDownload();
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_LOADSTART, myStatus));
\t\t\t\twaitingTimer.start();
\t\t\t\tmySound.load(myRequest, myContext);
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\tpublic function play(time:Number = NaN):Boolean {
\t\t\tvar wasPlaying:Boolean = myStatus.isPlaying;

\t\t\tif(!isNaN(time) && myStatus.srcSet) {
\t\t\t\tif(myStatus.isPlaying) {
\t\t\t\t\tmyChannel.stop();
\t\t\t\t\tmyStatus.isPlaying = false;
\t\t\t\t}
\t\t\t\tmyStatus.pausePosition = time;
\t\t\t}

\t\t\tif(myStatus.isStartingDownload) {
\t\t\t\tmyStatus.playOnLoad = true; // Raise flag, captured in loadOpen()
\t\t\t\treturn true;
\t\t\t} else if(myStatus.loadRequired()) {
\t\t\t\tmyStatus.playOnLoad = true; // Raise flag, captured in loadOpen()
\t\t\t\treturn load();
\t\t\t} else if((myStatus.isLoading || myStatus.isLoaded) && !myStatus.isPlaying) {
\t\t\t\tif(myStatus.isLoaded && myStatus.pausePosition > getDuration()) { // The time is invalid, ie., past the end.
\t\t\t\t\tmyStatus.pausePosition = 0;
\t\t\t\t\ttimeUpdates(false);
\t\t\t\t\ttimeUpdateEvent();
\t\t\t\t\tif(wasPlaying) { // For when playing and then get a play(huge)
\t\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PAUSE, myStatus));
\t\t\t\t\t}
\t\t\t\t} else if(myStatus.pausePosition > getDuration()) {
\t\t\t\t\tmyStatus.playOnSeek = true;
\t\t\t\t\tseeking(true);
\t\t\t\t} else {
\t\t\t\t\tmyStatus.isPlaying = true; // Set immediately before playing. Could affects events.
\t\t\t\t\tmyChannel = mySound.play(myStatus.pausePosition);
\t\t\t\t\tmyChannel.soundTransform = myTransform;
\t\t\t\t\tmyChannel.addEventListener(Event.SOUND_COMPLETE, soundCompleteHandler);
\t\t\t\t\ttimeUpdates(true);
\t\t\t\t\tif(!wasPlaying) {
\t\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PLAY, myStatus));
\t\t\t\t\t}
\t\t\t\t\tcheckPlaying(true); // Force the playing event unless waiting, which will be dealt with in the playingTimer.
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\tpublic function pause(time:Number = NaN):Boolean {
\t\t\tmyStatus.playOnLoad = false; // Reset flag in case load/play issued immediately before this command, ie., before loadOpen() event.
\t\t\tmyStatus.playOnSeek = false; // Reset flag in case play(time) issued before the command and is still seeking to time set.

\t\t\tvar wasPlaying:Boolean = myStatus.isPlaying;

\t\t\t// To avoid possible loops with timeupdate and pause(time). A pause() does not have the problem.
\t\t\tvar alreadyPausedAtTime:Boolean = false;
\t\t\tif(!isNaN(time) && myStatus.pausePosition == time) {
\t\t\t\talreadyPausedAtTime = true;
\t\t\t}

\t\t\tif(myStatus.isPlaying) {
\t\t\t\tmyStatus.isPlaying = false;
\t\t\t\tmyChannel.stop();
\t\t\t\tif(myChannel.position > 0) { // Required otherwise a fast play then pause causes myChannel.position to equal zero and not the correct value. ie., When it happens leave pausePosition alone.
\t\t\t\t\tmyStatus.pausePosition = myChannel.position;
\t\t\t\t}
\t\t\t}

\t\t\tif(!isNaN(time) && myStatus.srcSet) {
\t\t\t\tmyStatus.pausePosition = time;
\t\t\t}

\t\t\tif(wasPlaying) {
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PAUSE, myStatus));
\t\t\t}
\t\t\t
\t\t\tif(myStatus.isStartingDownload) {
\t\t\t\treturn true;
\t\t\t} else if(myStatus.loadRequired()) {
\t\t\t\tif(time > 0) { // We do not want the stop() command, which does pause(0), causing a load operation.
\t\t\t\t\treturn load();
\t\t\t\t} else {
\t\t\t\t\treturn true; // Technically the pause(0) succeeded. ie., It did nothing, since nothing was required.
\t\t\t\t}
\t\t\t} else if(myStatus.isLoading || myStatus.isLoaded) {
\t\t\t\tif(myStatus.isLoaded && myStatus.pausePosition > getDuration()) { // The time is invalid, ie., past the end.
\t\t\t\t\tmyStatus.pausePosition = 0;
\t\t\t\t} else if(myStatus.pausePosition > getDuration()) {
\t\t\t\t\tseeking(true);
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
\t\t\tvar time:Number = percent * getDuration() / 100;
\t\t\tif(myStatus.isPlaying || myStatus.playOnLoad || myStatus.playOnSeek) {
\t\t\t\treturn play(time);
\t\t\t} else {
\t\t\t\treturn pause(time);
\t\t\t}
\t\t}
\t\tpublic function setVolume(v:Number):void {
\t\t\tmyStatus.volume = v;
\t\t\tmyTransform.volume = v;
\t\t\tmyChannel.soundTransform = myTransform;
\t\t}
\t\tprivate function updateStatusValues():void {
\t\t\tmyStatus.seekPercent = 100 * getLoadRatio();
\t\t\tmyStatus.currentTime = getCurrentTime();
\t\t\tmyStatus.currentPercentRelative = 100 * getCurrentRatioRel();
\t\t\tmyStatus.currentPercentAbsolute = 100 * getCurrentRatioAbs();
\t\t\tmyStatus.duration = getDuration();
\t\t}
\t\tpublic function getLoadRatio():Number {
\t\t\tif((myStatus.isLoading || myStatus.isLoaded) && mySound.bytesTotal > 0) {
\t\t\t\treturn mySound.bytesLoaded / mySound.bytesTotal;
\t\t\t} else {
\t\t\t\treturn 0;
\t\t\t}
\t\t}
\t\tpublic function getDuration():Number {
\t\t\tif(mySound.length > 0) {
\t\t\t\treturn mySound.length;
\t\t\t} else {
\t\t\t\treturn 0;
\t\t\t}
\t\t}
\t\tpublic function getCurrentTime():Number {
\t\t\tif(myStatus.isPlaying) {
\t\t\t\treturn myChannel.position;
\t\t\t} else {
\t\t\t\treturn myStatus.pausePosition;
\t\t\t}
\t\t}
\t\tpublic function getCurrentRatioRel():Number {
\t\t\tif((getDuration() > 0) && (getCurrentTime() <= getDuration())) {
\t\t\t\treturn getCurrentTime() / getDuration();
\t\t\t} else {
\t\t\t\treturn 0;
\t\t\t}
\t\t}
\t\tpublic function getCurrentRatioAbs():Number {
\t\t\treturn getCurrentRatioRel() * getLoadRatio();
\t\t}
\t}
}
";
        
        $__internal_c07abc339f0ab7dbd98fdaa07d9e20f939062ec2066d4f1f5a85046812a1abbc->leave($__internal_c07abc339f0ab7dbd98fdaa07d9e20f939062ec2066d4f1f5a85046812a1abbc_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerMp3.as";
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
 * Date: 28th May 2013
 */

package happyworm.jPlayer {
\timport flash.display.Sprite;

\timport flash.media.Sound;
\timport flash.media.SoundChannel;
\timport flash.media.SoundLoaderContext;
\timport flash.media.SoundTransform;
\timport flash.net.URLRequest;
\timport flash.utils.Timer;
\timport flash.errors.IOError;
\timport flash.events.*;

\tpublic class JplayerMp3 extends Sprite {
\t\tprivate var mySound:Sound = new Sound();
\t\tprivate var myChannel:SoundChannel = new SoundChannel();
\t\tprivate var myContext:SoundLoaderContext = new SoundLoaderContext(3000, false);
\t\tprivate var myTransform:SoundTransform = new SoundTransform();
\t\tprivate var myRequest:URLRequest = new URLRequest();

\t\tprivate var timeUpdateTimer:Timer = new Timer(250, 0); // Matched to HTML event freq
\t\tprivate var progressTimer:Timer = new Timer(250, 0); // Matched to HTML event freq
\t\tprivate var seekingTimer:Timer = new Timer(100, 0); // Internal: How often seeking is checked to see if it is over.
\t\tprivate var playingTimer:Timer = new Timer(100, 0); // Internal: How often waiting/playing is checked.
\t\tprivate var waitingTimer:Timer = new Timer(3000, 0); // Internal: Check from loadstart to loadOpen. Generates a waiting event.
\t\t
\t\tpublic var myStatus:JplayerStatus = new JplayerStatus();

\t\tpublic function JplayerMp3(volume:Number) {
\t\t\ttimeUpdateTimer.addEventListener(TimerEvent.TIMER, timeUpdateHandler);
\t\t\tprogressTimer.addEventListener(TimerEvent.TIMER, progressHandler);
\t\t\tseekingTimer.addEventListener(TimerEvent.TIMER, seekingHandler);
\t\t\tplayingTimer.addEventListener(TimerEvent.TIMER, playingHandler);
\t\t\twaitingTimer.addEventListener(TimerEvent.TIMER, waitingHandler);
\t\t\tsetVolume(volume);
\t\t}
\t\tpublic function setFile(src:String):void {
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"setFile: \" + src));
\t\t\tif(myStatus.isPlaying) {
\t\t\t\tmyChannel.stop();
\t\t\t}
\t\t\tprogressUpdates(false);
\t\t\ttimeUpdates(false);
\t\t\twaitingTimer.stop();
\t\t\ttry {
\t\t\t\tmySound.close();
\t\t\t} catch (err:IOError) {
\t\t\t\t// Occurs if the file is either yet to be opened or has finished downloading.
\t\t\t}
\t\t\tmySound = null;
\t\t\tmySound = new Sound();
\t\t\tmySound.addEventListener(IOErrorEvent.IO_ERROR, errorHandler);
\t\t\tmySound.addEventListener(Event.OPEN, loadOpen);
\t\t\tmySound.addEventListener(Event.COMPLETE, loadComplete);
\t\t\tmyRequest = new URLRequest(src);
\t\t\tmyStatus.reset();
\t\t\tmyStatus.src = src;
\t\t\tmyStatus.srcSet = true;
\t\t\ttimeUpdateEvent();
\t\t}
\t\tpublic function clearFile():void {
\t\t\tsetFile(\"\");
\t\t\tmyStatus.srcSet = false;
\t\t}
\t\tprivate function errorHandler(err:IOErrorEvent):void {
\t\t\t// MP3 player needs to stop progress and timeupdate events as they are started before the error occurs.
\t\t\t// NB: The MP4 player works differently and the error occurs before they are started.
\t\t\tprogressUpdates(false);
\t\t\ttimeUpdates(false);
\t\t\tmyStatus.error(); // Resets status except the src, and it sets srcError property.
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_ERROR, myStatus));
\t\t}
\t\tprivate function loadOpen(e:Event):void {
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"loadOpen:\"));
\t\t\twaitingTimer.stop();
\t\t\tmyStatus.loading();
\t\t\tif(myStatus.playOnLoad) {
\t\t\t\tmyStatus.playOnLoad = false; // Capture the flag
\t\t\t\t// this.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_LOADSTART, myStatus)); // So loadstart event happens before play event occurs.
\t\t\t\tplay();
\t\t\t} else {
\t\t\t\t// this.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_LOADSTART, myStatus));
\t\t\t\tpause();
\t\t\t}
\t\t\tprogressUpdates(true);
\t\t}
\t\tprivate function loadComplete(e:Event):void {
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.DEBUG_MSG, myStatus, \"loadComplete:\"));
\t\t\tmyStatus.loaded();
\t\t\tprogressUpdates(false);
\t\t\tprogressEvent();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_CANPLAYTHROUGH, myStatus));
\t\t}
\t\tprivate function soundCompleteHandler(e:Event):void {
\t\t\tmyStatus.pausePosition = 0;
\t\t\tmyStatus.isPlaying = false;
\t\t\ttimeUpdates(false);
\t\t\ttimeUpdateEvent();
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_ENDED, myStatus));
\t\t}
\t\tprivate function progressUpdates(active:Boolean):void {
\t\t\t// Using a timer rather than Flash's load progress event, because that event gave data at about 200Hz. The 10Hz timer is closer to HTML5 norm.
\t\t\tif(active) {
\t\t\t\tprogressTimer.start();
\t\t\t} else {
\t\t\t\tprogressTimer.stop();
\t\t\t}
\t\t}
\t\tprivate function progressHandler(e:TimerEvent):void {
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
\t\t\t\tplayingTimer.start();
\t\t\t} else {
\t\t\t\ttimeUpdateTimer.stop();
\t\t\t\tplayingTimer.stop();
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
\t\t\t\tseekingEvent();
\t\t\t\twaitingEvent();
\t\t\t\tseekingTimer.start();
\t\t\t} else {
\t\t\t\tseekingTimer.stop();
\t\t\t}
\t\t}
\t\tprivate function seekingHandler(e:TimerEvent):void {
\t\t\tif(myStatus.pausePosition <= getDuration()) {
\t\t\t\tseekedEvent();
\t\t\t\tseeking(false);
\t\t\t\tif(myStatus.playOnSeek) {
\t\t\t\t\tmyStatus.playOnSeek = false; // Capture the flag.
\t\t\t\t\tplay();
\t\t\t\t}
\t\t\t} else if(myStatus.isLoaded && (myStatus.pausePosition > getDuration())) {
\t\t\t\t// Illegal seek time
\t\t\t\tseeking(false);
\t\t\t\tseekedEvent();
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
\t\tprivate function playingHandler(e:TimerEvent):void {
\t\t\tcheckPlaying(false); // Without forcing playing event.
\t\t}
\t\tprivate function checkPlaying(force:Boolean):void {
\t\t\tif(mySound.isBuffering) {
\t\t\t\tif(!myStatus.isWaiting) {
\t\t\t\t\twaitingEvent();
\t\t\t\t}
\t\t\t} else {
\t\t\t\tif(myStatus.isWaiting || force) {
\t\t\t\t\tplayingEvent();
\t\t\t\t}
\t\t\t}
\t\t}
\t\tprivate function waitingEvent():void {
\t\t\tmyStatus.isWaiting = true;
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_WAITING, myStatus));
\t\t}
\t\tprivate function playingEvent():void {
\t\t\tmyStatus.isWaiting = false;
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_CANPLAY, myStatus));
\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PLAYING, myStatus));
\t\t}
\t\tprivate function waitingHandler(e:TimerEvent):void {
\t\t\twaitingTimer.stop();
\t\t\tif(myStatus.playOnLoad) {
\t\t\t\twaitingEvent();
\t\t\t}
\t\t}
\t\tpublic function load():Boolean {
\t\t\tif(myStatus.loadRequired()) {
\t\t\t\tmyStatus.startingDownload();
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_LOADSTART, myStatus));
\t\t\t\twaitingTimer.start();
\t\t\t\tmySound.load(myRequest, myContext);
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\tpublic function play(time:Number = NaN):Boolean {
\t\t\tvar wasPlaying:Boolean = myStatus.isPlaying;

\t\t\tif(!isNaN(time) && myStatus.srcSet) {
\t\t\t\tif(myStatus.isPlaying) {
\t\t\t\t\tmyChannel.stop();
\t\t\t\t\tmyStatus.isPlaying = false;
\t\t\t\t}
\t\t\t\tmyStatus.pausePosition = time;
\t\t\t}

\t\t\tif(myStatus.isStartingDownload) {
\t\t\t\tmyStatus.playOnLoad = true; // Raise flag, captured in loadOpen()
\t\t\t\treturn true;
\t\t\t} else if(myStatus.loadRequired()) {
\t\t\t\tmyStatus.playOnLoad = true; // Raise flag, captured in loadOpen()
\t\t\t\treturn load();
\t\t\t} else if((myStatus.isLoading || myStatus.isLoaded) && !myStatus.isPlaying) {
\t\t\t\tif(myStatus.isLoaded && myStatus.pausePosition > getDuration()) { // The time is invalid, ie., past the end.
\t\t\t\t\tmyStatus.pausePosition = 0;
\t\t\t\t\ttimeUpdates(false);
\t\t\t\t\ttimeUpdateEvent();
\t\t\t\t\tif(wasPlaying) { // For when playing and then get a play(huge)
\t\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PAUSE, myStatus));
\t\t\t\t\t}
\t\t\t\t} else if(myStatus.pausePosition > getDuration()) {
\t\t\t\t\tmyStatus.playOnSeek = true;
\t\t\t\t\tseeking(true);
\t\t\t\t} else {
\t\t\t\t\tmyStatus.isPlaying = true; // Set immediately before playing. Could affects events.
\t\t\t\t\tmyChannel = mySound.play(myStatus.pausePosition);
\t\t\t\t\tmyChannel.soundTransform = myTransform;
\t\t\t\t\tmyChannel.addEventListener(Event.SOUND_COMPLETE, soundCompleteHandler);
\t\t\t\t\ttimeUpdates(true);
\t\t\t\t\tif(!wasPlaying) {
\t\t\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PLAY, myStatus));
\t\t\t\t\t}
\t\t\t\t\tcheckPlaying(true); // Force the playing event unless waiting, which will be dealt with in the playingTimer.
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\tpublic function pause(time:Number = NaN):Boolean {
\t\t\tmyStatus.playOnLoad = false; // Reset flag in case load/play issued immediately before this command, ie., before loadOpen() event.
\t\t\tmyStatus.playOnSeek = false; // Reset flag in case play(time) issued before the command and is still seeking to time set.

\t\t\tvar wasPlaying:Boolean = myStatus.isPlaying;

\t\t\t// To avoid possible loops with timeupdate and pause(time). A pause() does not have the problem.
\t\t\tvar alreadyPausedAtTime:Boolean = false;
\t\t\tif(!isNaN(time) && myStatus.pausePosition == time) {
\t\t\t\talreadyPausedAtTime = true;
\t\t\t}

\t\t\tif(myStatus.isPlaying) {
\t\t\t\tmyStatus.isPlaying = false;
\t\t\t\tmyChannel.stop();
\t\t\t\tif(myChannel.position > 0) { // Required otherwise a fast play then pause causes myChannel.position to equal zero and not the correct value. ie., When it happens leave pausePosition alone.
\t\t\t\t\tmyStatus.pausePosition = myChannel.position;
\t\t\t\t}
\t\t\t}

\t\t\tif(!isNaN(time) && myStatus.srcSet) {
\t\t\t\tmyStatus.pausePosition = time;
\t\t\t}

\t\t\tif(wasPlaying) {
\t\t\t\tthis.dispatchEvent(new JplayerEvent(JplayerEvent.JPLAYER_PAUSE, myStatus));
\t\t\t}
\t\t\t
\t\t\tif(myStatus.isStartingDownload) {
\t\t\t\treturn true;
\t\t\t} else if(myStatus.loadRequired()) {
\t\t\t\tif(time > 0) { // We do not want the stop() command, which does pause(0), causing a load operation.
\t\t\t\t\treturn load();
\t\t\t\t} else {
\t\t\t\t\treturn true; // Technically the pause(0) succeeded. ie., It did nothing, since nothing was required.
\t\t\t\t}
\t\t\t} else if(myStatus.isLoading || myStatus.isLoaded) {
\t\t\t\tif(myStatus.isLoaded && myStatus.pausePosition > getDuration()) { // The time is invalid, ie., past the end.
\t\t\t\t\tmyStatus.pausePosition = 0;
\t\t\t\t} else if(myStatus.pausePosition > getDuration()) {
\t\t\t\t\tseeking(true);
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
\t\t\tvar time:Number = percent * getDuration() / 100;
\t\t\tif(myStatus.isPlaying || myStatus.playOnLoad || myStatus.playOnSeek) {
\t\t\t\treturn play(time);
\t\t\t} else {
\t\t\t\treturn pause(time);
\t\t\t}
\t\t}
\t\tpublic function setVolume(v:Number):void {
\t\t\tmyStatus.volume = v;
\t\t\tmyTransform.volume = v;
\t\t\tmyChannel.soundTransform = myTransform;
\t\t}
\t\tprivate function updateStatusValues():void {
\t\t\tmyStatus.seekPercent = 100 * getLoadRatio();
\t\t\tmyStatus.currentTime = getCurrentTime();
\t\t\tmyStatus.currentPercentRelative = 100 * getCurrentRatioRel();
\t\t\tmyStatus.currentPercentAbsolute = 100 * getCurrentRatioAbs();
\t\t\tmyStatus.duration = getDuration();
\t\t}
\t\tpublic function getLoadRatio():Number {
\t\t\tif((myStatus.isLoading || myStatus.isLoaded) && mySound.bytesTotal > 0) {
\t\t\t\treturn mySound.bytesLoaded / mySound.bytesTotal;
\t\t\t} else {
\t\t\t\treturn 0;
\t\t\t}
\t\t}
\t\tpublic function getDuration():Number {
\t\t\tif(mySound.length > 0) {
\t\t\t\treturn mySound.length;
\t\t\t} else {
\t\t\t\treturn 0;
\t\t\t}
\t\t}
\t\tpublic function getCurrentTime():Number {
\t\t\tif(myStatus.isPlaying) {
\t\t\t\treturn myChannel.position;
\t\t\t} else {
\t\t\t\treturn myStatus.pausePosition;
\t\t\t}
\t\t}
\t\tpublic function getCurrentRatioRel():Number {
\t\t\tif((getDuration() > 0) && (getCurrentTime() <= getDuration())) {
\t\t\t\treturn getCurrentTime() / getDuration();
\t\t\t} else {
\t\t\t\treturn 0;
\t\t\t}
\t\t}
\t\tpublic function getCurrentRatioAbs():Number {
\t\t\treturn getCurrentRatioRel() * getLoadRatio();
\t\t}
\t}
}
", "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerMp3.as", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerMp3.as");
    }
}
