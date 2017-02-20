<?php

/* @MwebAdmin/filemanager/js/jPlayer/popcorn/popcorn.jplayer.js */
class __TwigTemplate_e2f5f00263577522771fe8ba0a5b79da09e73e1b424003c982c82c5142fd4621 extends Twig_Template
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
        $__internal_f9655d29a53b8a3d1b48c09d474a194ce99b42fd501d9ff8f6f34c502e1bbc02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9655d29a53b8a3d1b48c09d474a194ce99b42fd501d9ff8f6f34c502e1bbc02->enter($__internal_f9655d29a53b8a3d1b48c09d474a194ce99b42fd501d9ff8f6f34c502e1bbc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/popcorn/popcorn.jplayer.js"));

        // line 1
        echo "/*
 * jPlayer Player Plugin for Popcorn JavaScript Library
 * http://www.jplayer.org
 *
 * Copyright (c) 2012 - 2014 Happyworm Ltd
 * Licensed under the MIT license.
 * http://opensource.org/licenses/MIT
 *
 * Author: Mark J Panaghiston
 * Version: 1.1.6
 * Date: 27th November 2014
 *
 * For Popcorn Version: 1.3
 * For jPlayer Version: 2.9.0
 * Requires: jQuery 1.7+
 * Note: jQuery dependancy cannot be removed since jPlayer 2 is a jQuery plugin. Use of jQuery will be kept to a minimum.
 */

(function(Popcorn) {

\tvar JQUERY_SCRIPT = '//code.jquery.com/jquery-1.11.1.min.js', // Used if jQuery not already present.
\tJPLAYER_SCRIPT = '//code.jplayer.org/2.9.0/jplayer/jquery.jplayer.min.js', // Used if jPlayer not already present.
\tJPLAYER_SWFPATH = '//code.jplayer.org/2.9.0/jplayer/jquery.jplayer.swf', // Used if not specified in jPlayer options via SRC Object.
\tSOLUTION = 'html,flash', // The default solution option.
\tDEBUG = false, // Decided to leave the debugging option and console output in for the time being. Overhead is trivial.
\tjQueryDownloading = false, // Flag to stop multiple instances from each pulling in jQuery, thus corrupting it.
\tjPlayerDownloading = false, // Flag to stop multiple instances from each pulling in jPlayer, thus corrupting it.
\tformat = { // Duplicate of jPlayer 2.5.0 object, to avoid always requiring jQuery and jPlayer to be loaded before performing the _canPlayType() test.
\t\tmp3: {
\t\t\tcodec: 'audio/mpeg',
\t\t\tflashCanPlay: true,
\t\t\tmedia: 'audio'
\t\t},
\t\tm4a: { // AAC / MP4
\t\t\tcodec: 'audio/mp4; codecs=\"mp4a.40.2\"',
\t\t\tflashCanPlay: true,
\t\t\tmedia: 'audio'
\t\t},
\t\tm3u8a: { // AAC / MP4 / Apple HLS
\t\t\tcodec: 'application/vnd.apple.mpegurl; codecs=\"mp4a.40.2\"',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'audio'
\t\t},
\t\tm3ua: { // M3U
\t\t\tcodec: 'audio/mpegurl',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'audio'
\t\t},
\t\toga: { // OGG
\t\t\tcodec: 'audio/ogg; codecs=\"vorbis, opus\"',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'audio'
\t\t},
\t\tflac: { // FLAC
\t\t\tcodec: 'audio/x-flac',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'audio'
\t\t},
\t\twav: { // PCM
\t\t\tcodec: 'audio/wav; codecs=\"1\"',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'audio'
\t\t},
\t\twebma: { // WEBM
\t\t\tcodec: 'audio/webm; codecs=\"vorbis\"',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'audio'
\t\t},
\t\tfla: { // FLV / F4A
\t\t\tcodec: 'audio/x-flv',
\t\t\tflashCanPlay: true,
\t\t\tmedia: 'audio'
\t\t},
\t\trtmpa: { // RTMP AUDIO
\t\t\tcodec: 'audio/rtmp; codecs=\"rtmp\"',
\t\t\tflashCanPlay: true,
\t\t\tmedia: 'audio'
\t\t},
\t\tm4v: { // H.264 / MP4
\t\t\tcodec: 'video/mp4; codecs=\"avc1.42E01E, mp4a.40.2\"',
\t\t\tflashCanPlay: true,
\t\t\tmedia: 'video'
\t\t},
\t\tm3u8v: { // H.264 / AAC / MP4 / Apple HLS
\t\t\tcodec: 'application/vnd.apple.mpegurl; codecs=\"avc1.42E01E, mp4a.40.2\"',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'video'
\t\t},
\t\tm3uv: { // M3U
\t\t\tcodec: 'audio/mpegurl',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'video'
\t\t},
\t\togv: { // OGG
\t\t\tcodec: 'video/ogg; codecs=\"theora, vorbis\"',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'video'
\t\t},
\t\twebmv: { // WEBM
\t\t\tcodec: 'video/webm; codecs=\"vorbis, vp8\"',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'video'
\t\t},
\t\tflv: { // FLV / F4V
\t\t\tcodec: 'video/x-flv',
\t\t\tflashCanPlay: true,
\t\t\tmedia: 'video'
\t\t},
\t\trtmpv: { // RTMP VIDEO
\t\t\tcodec: 'video/rtmp; codecs=\"rtmp\"',
\t\t\tflashCanPlay: true,
\t\t\tmedia: 'video'
\t\t}
\t},
\tisObject = function(val) { // Basic check for Object
\t\tif(val && typeof val === 'object' && val.hasOwnProperty) {
\t\t\treturn true;
\t\t} else {
\t\t\treturn false;
\t\t}
\t},
\tgetMediaType = function(url) { // Function to gleam the media type from the URL
\t\tvar mediaType = false;
\t\tif(/\\.mp3\$/i.test(url)) {
\t\t\tmediaType = 'mp3';
\t\t} else if(/\\.mp4\$/i.test(url) || /\\.m4v\$/i.test(url)) {
\t\t\tmediaType = 'm4v';
\t\t} else if(/\\.m4a\$/i.test(url)) {
\t\t\tmediaType = 'm4a';
\t\t} else if(/\\.ogg\$/i.test(url) || /\\.oga\$/i.test(url)) {
\t\t\tmediaType = 'oga';
\t\t} else if(/\\.ogv\$/i.test(url)) {
\t\t\tmediaType = 'ogv';
\t\t} else if(/\\.webm\$/i.test(url)) {
\t\t\tmediaType = 'webmv';
\t\t}
\t\treturn mediaType;
\t},
\tgetSupplied = function(url) { // Function to generate a supplied option from an src object. ie., When supplied not specified.
\t\tvar supplied = '',
\t\tseparator = '';
\t\tif(isObject(url)) {
\t\t\t// Generate supplied option from object's properties. Non-format properties would be ignored by jPlayer. Order is unpredictable.
\t\t\tfor(var prop in url) {
\t\t\t\tif(url.hasOwnProperty(prop)) {
\t\t\t\t\tsupplied += separator + prop;
\t\t\t\t\tseparator = ',';
\t\t\t\t}
\t\t\t}
\t\t}
\t\tif(DEBUG) console.log('getSupplied(): Generated: supplied = \"' + supplied + '\"');
\t\treturn supplied;
\t};

\tPopcorn.player( 'jplayer', {
\t\t_canPlayType: function( containerType, url ) {
\t\t\t// url : Either a String or an Object structured similar a jPlayer media object. ie., As used by setMedia in jPlayer.
\t\t\t// The url object may also contain a solution and supplied property.

\t\t\t// Define the src object structure here!

\t\t\tvar cType = containerType.toLowerCase(),
\t\t\tsrcObj = {
\t\t\t\tmedia:{},
\t\t\t\toptions:{}
\t\t\t},
\t\t\trVal = false, // Only a boolean false means it is not supported.
\t\t\tmediaType;

\t\t\tif(cType !== 'video' && cType !== 'audio') {

\t\t\t\tif(typeof url === 'string') {
\t\t\t\t\t// Check it starts with http, so the URL is absolute... Well, it is not a perfect check.
\t\t\t\t\tif(/^http.*/i.test(url)) {
\t\t\t\t\t\tmediaType = getMediaType(url);
\t\t\t\t\t\tif(mediaType) {
\t\t\t\t\t\t\tsrcObj.media[mediaType] = url;
\t\t\t\t\t\t\tsrcObj.options.solution = SOLUTION;
\t\t\t\t\t\t\tsrcObj.options.supplied = mediaType;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tsrcObj = url; // Assume the url is an src object.
\t\t\t\t}

\t\t\t\t// Check for Object and appropriate minimum data structure.
\t\t\t\tif(isObject(srcObj) && isObject(srcObj.media)) {

\t\t\t\t\tif(!isObject(srcObj.options)) {
\t\t\t\t\t\tsrcObj.options = {};
\t\t\t\t\t}

\t\t\t\t\tif(!srcObj.options.solution) {
\t\t\t\t\t\tsrcObj.options.solution = SOLUTION;
\t\t\t\t\t}

\t\t\t\t\tif(!srcObj.options.supplied) {
\t\t\t\t\t\tsrcObj.options.supplied = getSupplied(srcObj.media);
\t\t\t\t\t}

\t\t\t\t\t// Figure out how jPlayer will play it.
\t\t\t\t\t// This may not work properly when both audio and video is supplied. ie., A media player. But it should return truethy and jPlayer can figure it out.
\t\t\t\t\t
\t\t\t\t\tvar solution = srcObj.options.solution.toLowerCase().split(\",\"), // Create the solution array, with prority based on the order of the solution string.
\t\t\t\t\tsupplied = srcObj.options.supplied.toLowerCase().split(\",\"); // Create the supplied formats array, with prority based on the order of the supplied formats string.

\t\t\t\t\tfor(var sol = 0; sol < solution.length; sol++) {

\t\t\t\t\t\tvar solutionType = solution[sol].replace(/^\\s+|\\s+\$/g, \"\"), //trim
\t\t\t\t\t\tcheckingHtml = solutionType === 'html',
\t\t\t\t\t\tcheckingFlash = solutionType === 'flash',
\t\t\t\t\t\tmediaElem;

\t\t\t\t\t\tfor(var fmt = 0; fmt < supplied.length; fmt++) {
\t\t\t\t\t\t\tmediaType = supplied[fmt].replace(/^\\s+|\\s+\$/g, \"\"); //trim
\t\t\t\t\t\t\tif(format[mediaType]) { // Check format is valid.

\t\t\t\t\t\t\t\t// Create an HTML5 media element for the type of media.
\t\t\t\t\t\t\t\tif(!mediaElem && checkingHtml) {
\t\t\t\t\t\t\t\t\tmediaElem = document.createElement(format[mediaType].media);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t// See if the HTML5 media element can play the MIME / Codec type.
\t\t\t\t\t\t\t\t// Flash also returns the object if the format is playable, so it is truethy, but that html property is false.
\t\t\t\t\t\t\t\t// This assumes Flash is available, but that should be dealt with by jPlayer if that happens.
\t\t\t\t\t\t\t\tvar htmlCanPlay = !!(mediaElem && mediaElem.canPlayType && mediaElem.canPlayType(format[mediaType].codec)),
\t\t\t\t\t\t\t\thtmlWillPlay = htmlCanPlay && checkingHtml,
\t\t\t\t\t\t\t\tflashWillPlay = format[mediaType].flashCanPlay && checkingFlash;
\t\t\t\t\t\t\t\t// The first one found will match what jPlayer uses.
\t\t\t\t\t\t\t\tif(htmlWillPlay || flashWillPlay) {
\t\t\t\t\t\t\t\t\trVal = {
\t\t\t\t\t\t\t\t\t\thtml: htmlWillPlay,
\t\t\t\t\t\t\t\t\t\ttype: mediaType
\t\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t\tsol = solution.length; // Exit solution loop
\t\t\t\t\t\t\t\t\tfmt = supplied.length; // Exit supplied loop
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\treturn rVal;
\t\t},
\t\t// _setup: function( options ) { // Warning: options is deprecated.
\t\t_setup: function() {
\t\t\tvar media = this,
\t\t\tmyPlayer, // The jQuery selector of the jPlayer element. Usually a <div>
\t\t\tjPlayerObj, // The jPlayer data instance. For performance and DRY code.
\t\t\tmediaType = 'unknown',
\t\t\tjpMedia = {},
\t\t\tjpOptions = {},
\t\t\tready = false, // Used during init to override the annoying duration dependance in the track event padding during Popcorn's isReady(). ie., We is ready after loadeddata and duration can then be set real value at leisure.
\t\t\tduration = 0, // For the durationchange event with both HTML5 and Flash solutions. Used with 'ready' to keep control during the Popcorn isReady() via loadeddata event. (Duration=0 is bad.)
\t\t\tdurationchangeId = null, // A timeout ID used with delayed durationchange event. (Because of the duration=NaN fudge to avoid Popcorn track event corruption.)
\t\t\tcanplaythrough = false,
\t\t\terror = null, // The MediaError object.

\t\t\tdispatchDurationChange = function() {
\t\t\t\tif(ready) {
\t\t\t\t\tif(DEBUG) console.log('Dispatched event : durationchange : ' + duration);
\t\t\t\t\tmedia.dispatchEvent('durationchange');
\t\t\t\t} else {
\t\t\t\t\tif(DEBUG) console.log('DELAYED EVENT (!ready) : durationchange : ' + duration);
\t\t\t\t\tclearTimeout(durationchangeId); // Stop multiple triggers causing multiple timeouts running in parallel.
\t\t\t\t\tdurationchangeId = setTimeout(dispatchDurationChange, 250);
\t\t\t\t}
\t\t\t},

\t\t\tjPlayerFlashEventsPatch = function() {

\t\t\t\t/* Events already supported by jPlayer Flash:
\t\t\t\t * loadstart
\t\t\t\t * loadedmetadata (M4A, M4V)
\t\t\t\t * progress
\t\t\t\t * play
\t\t\t\t * pause
\t\t\t\t * seeking
\t\t\t\t * seeked
\t\t\t\t * timeupdate
\t\t\t\t * ended
\t\t\t\t * volumechange
\t\t\t\t * error <- See the custom handler in jPlayerInit()
\t\t\t\t */

\t\t\t\t/* Events patched:
\t\t\t\t * loadeddata
\t\t\t\t * durationchange
\t\t\t\t * canplaythrough
\t\t\t\t * playing
\t\t\t\t */

\t\t\t\t/* Events NOT patched:
\t\t\t\t * suspend
\t\t\t\t * abort
\t\t\t\t * emptied
\t\t\t\t * stalled
\t\t\t\t * loadedmetadata (MP3)
\t\t\t\t * waiting
\t\t\t\t * canplay
\t\t\t\t * ratechange
\t\t\t\t */

\t\t\t\t// Triggering patched events through the jPlayer Object so the events are homogeneous. ie., The contain the event.jPlayer data structure.

\t\t\t\tvar checkDuration = function(event) {
\t\t\t\t\tif(event.jPlayer.status.duration !== duration) {
\t\t\t\t\t\tduration = event.jPlayer.status.duration;
\t\t\t\t\t\tdispatchDurationChange();
\t\t\t\t\t}
\t\t\t\t},

\t\t\t\tcheckCanPlayThrough = function(event) {
\t\t\t\t\tif(!canplaythrough && event.jPlayer.status.seekPercent === 100) {
\t\t\t\t\t\tcanplaythrough = true;
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tif(DEBUG) console.log('Trigger : canplaythrough');
\t\t\t\t\t\t\tjPlayerObj._trigger(\$.jPlayer.event.canplaythrough);
\t\t\t\t\t\t}, 0);
\t\t\t\t\t}
\t\t\t\t};

\t\t\t\tmyPlayer.bind(\$.jPlayer.event.loadstart, function() {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tif(DEBUG) console.log('Trigger : loadeddata');
\t\t\t\t\t\tjPlayerObj._trigger(\$.jPlayer.event.loadeddata);
\t\t\t\t\t}, 0);
\t\t\t\t})
\t\t\t\t.bind(\$.jPlayer.event.progress, function(event) {
\t\t\t\t\tcheckDuration(event);
\t\t\t\t\tcheckCanPlayThrough(event);
\t\t\t\t})
\t\t\t\t.bind(\$.jPlayer.event.timeupdate, function(event) {
\t\t\t\t\tcheckDuration(event);
\t\t\t\t\tcheckCanPlayThrough(event);
\t\t\t\t})
\t\t\t\t.bind(\$.jPlayer.event.play, function() {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tif(DEBUG) console.log('Trigger : playing');
\t\t\t\t\t\tjPlayerObj._trigger(\$.jPlayer.event.playing);
\t\t\t\t\t}, 0);
\t\t\t\t});

\t\t\t\tif(DEBUG) console.log('Created CUSTOM event handlers for FLASH');
\t\t\t},

\t\t\tjPlayerInit = function() {
\t\t\t\t(function(\$) {

\t\t\t\t\tmyPlayer = \$('#' +  media.id);

\t\t\t\t\tif(typeof media.src === 'string') {
\t\t\t\t\t\tmediaType = getMediaType(media.src);
\t\t\t\t\t\tjpMedia[mediaType] = media.src;
\t\t\t\t\t\tjpOptions.supplied = mediaType;
\t\t\t\t\t\tjpOptions.solution = SOLUTION;
\t\t\t\t\t} else if(isObject(media.src)) {
\t\t\t\t\t\tjpMedia = isObject(media.src.media) ? media.src.media : {};
\t\t\t\t\t\tjpOptions = isObject(media.src.options) ? media.src.options : {};
\t\t\t\t\t\tjpOptions.solution = jpOptions.solution || SOLUTION;
\t\t\t\t\t\tjpOptions.supplied = jpOptions.supplied || getSupplied(media.src.media);
\t\t\t\t\t}

\t\t\t\t\t// Allow the swfPath to be set to local server. ie., If the jPlayer Plugin is local and already on the page, then you can also use the local SWF.
\t\t\t\t\tjpOptions.swfPath = jpOptions.swfPath || JPLAYER_SWFPATH;

\t\t\t\t\tmyPlayer.bind(\$.jPlayer.event.ready, function(event) {
\t\t\t\t\t\tif(event.jPlayer.flash.used) {
\t\t\t\t\t\t\tjPlayerFlashEventsPatch();
\t\t\t\t\t\t}
\t\t\t\t\t\t// Set the media andd load it, so that the Flash solution behaves similar to HTML5 solution.
\t\t\t\t\t\t// This also allows the loadstart event to be used to know jPlayer is ready.
\t\t\t\t\t\t\$(this).jPlayer('setMedia', jpMedia).jPlayer('load');
\t\t\t\t\t});

\t\t\t\t\t// Do not auto-bubble the reserved events, nor the loadeddata and durationchange event, since the duration must be carefully handled when loadeddata event occurs.
\t\t\t\t\t// See the duration property code for more details. (Ranting.)

\t\t\t\t\tvar reservedEvents = \$.jPlayer.reservedEvent + ' loadeddata durationchange',
\t\t\t\t\treservedEvent = reservedEvents.split(/\\s+/g);

\t\t\t\t\t// Generate event handlers for all the standard HTML5 media events. (Except durationchange)

\t\t\t\t\tvar bindEvent = function(name) {
\t\t\t\t\t\tmyPlayer.bind(\$.jPlayer.event[name], function(event) {
\t\t\t\t\t\t\tif(DEBUG) console.log('Dispatched event: ' + name + (event && event.jPlayer ? ' (' + event.jPlayer.status.currentTime + 's)' : '')); // Must be after dispatch for some reason on Firefox/Opera
\t\t\t\t\t\t\tmedia.dispatchEvent(name);
\t\t\t\t\t\t});
\t\t\t\t\t\tif(DEBUG) console.log('Created event handler for: ' + name);
\t\t\t\t\t};

\t\t\t\t\tfor(var eventName in \$.jPlayer.event) {
\t\t\t\t\t\tif(\$.jPlayer.event.hasOwnProperty(eventName)) {
\t\t\t\t\t\t\tvar nativeEvent = true;
\t\t\t\t\t\t\tfor(var iRes in reservedEvent) {
\t\t\t\t\t\t\t\tif(reservedEvent.hasOwnProperty(iRes)) {
\t\t\t\t\t\t\t\t\tif(reservedEvent[iRes] === eventName) {
\t\t\t\t\t\t\t\t\t\tnativeEvent = false;
\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(nativeEvent) {
\t\t\t\t\t\t\t\tbindEvent(eventName);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tif(DEBUG) console.log('Skipped auto event handler creation for: ' + eventName);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tmyPlayer.bind(\$.jPlayer.event.loadeddata, function(event) {
\t\t\t\t\t\tif(DEBUG) console.log('Dispatched event: loadeddata' + (event && event.jPlayer ? ' (' + event.jPlayer.status.currentTime + 's)' : ''));
\t\t\t\t\t\tmedia.dispatchEvent('loadeddata');
\t\t\t\t\t\tready = true;
\t\t\t\t\t});
\t\t\t\t\tif(DEBUG) console.log('Created CUSTOM event handler for: loadeddata');

\t\t\t\t\tmyPlayer.bind(\$.jPlayer.event.durationchange, function(event) {
\t\t\t\t\t\tduration = event.jPlayer.status.duration;
\t\t\t\t\t\tdispatchDurationChange();
\t\t\t\t\t});
\t\t\t\t\tif(DEBUG) console.log('Created CUSTOM event handler for: durationchange');

\t\t\t\t\t// The error event is a special case. Plus jPlayer error event assumes it is a broken URL. (It could also be a decoder error... Or aborted or a Network error.)
\t\t\t\t\tmyPlayer.bind(\$.jPlayer.event.error, function(event) {
\t\t\t\t\t\t// Not sure how to handle the error situation. Popcorn does not appear to have the error or error.code property documented here: http://popcornjs.org/popcorn-docs/media-methods/
\t\t\t\t\t\t// If any error event happens, then something has gone pear shaped.

\t\t\t\t\t\terror = event.jPlayer.error; // Saving object pointer, not a copy of the object. Possible garbage collection issue... But the player is dead anyway, so don't care.

\t\t\t\t\t\tif(error.type === \$.jPlayer.error.URL) {
\t\t\t\t\t\t\terror.code = 4; // MEDIA_ERR_SRC_NOT_SUPPORTED since jPlayer makes this assumption. It is the most common error, then the decode error. Never seen either of the other 2 error types occur.
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\terror.code = 0; // It was a jPlayer error, not an HTML5 media error.
\t\t\t\t\t\t}

\t\t\t\t\t\tif(DEBUG) console.log('Dispatched event: error');
\t\t\t\t\t\tif(DEBUG) console.dir(error);
\t\t\t\t\t\tmedia.dispatchEvent('error');
\t\t\t\t\t});
\t\t\t\t\tif(DEBUG) console.log('Created CUSTOM event handler for: error');

\t\t\t\t\tPopcorn.player.defineProperty( media, 'error', {
\t\t\t\t\t\tset: function() {
\t\t\t\t\t\t\t// Read-only property
\t\t\t\t\t\t\treturn error;
\t\t\t\t\t\t},
\t\t\t\t\t\tget: function() {
\t\t\t\t\t\t\treturn error;
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\tPopcorn.player.defineProperty( media, 'currentTime', {
\t\t\t\t\t\tset: function( val ) {
\t\t\t\t\t\t\tif(jPlayerObj.status.paused) {
\t\t\t\t\t\t\t\tmyPlayer.jPlayer('pause', val);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tmyPlayer.jPlayer('play', val);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\treturn val;
\t\t\t\t\t\t},
\t\t\t\t\t\tget: function() {
\t\t\t\t\t\t\treturn jPlayerObj.status.currentTime;
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\t/* The joy of duration and the loadeddata event isReady() handler
\t\t\t\t\t * The duration is assumed to be a NaN or a valid duration.
\t\t\t\t\t * jPlayer uses zero instead of a NaN and this screws up the Popcorn track event start/end arrays padding.
\t\t\t\t\t * This line here:
\t\t\t\t\t *  videoDurationPlus = duration != duration ? Number.MAX_VALUE : duration + 1;
\t\t\t\t\t * Not sure why it is not simply:
\t\t\t\t\t *  videoDurationPlus = Number.MAX_VALUE; // Who cares if the padding is close to the real duration?
\t\t\t\t\t * So if you trigger loadeddata before the duration is correct, the track event padding is screwed up. (It pads the start, not the end... Well, duration+1 = 0+1 = 1s)
\t\t\t\t\t * That line makes the MP3 Flash fallback difficult to setup. The whole MP3 will need to load before the duration is known.
\t\t\t\t\t * Planning on using a NaN for duration until a >0 value is found... Except with MP3, where seekPercent must be 100% before setting the duration.
\t\t\t\t\t * Why not just use a NaN during init... And then correct the duration later?
\t\t\t\t\t */

\t\t\t\t\tPopcorn.player.defineProperty( media, 'duration', {
\t\t\t\t\t\tset: function() {
\t\t\t\t\t\t\t// Read-only property
\t\t\t\t\t\t\tif(ready) {
\t\t\t\t\t\t\t\treturn duration;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\treturn NaN;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\tget: function() {
\t\t\t\t\t\t\tif(ready) {
\t\t\t\t\t\t\t\treturn duration; // Popcorn has initialized, we can now use duration zero or whatever without fear.
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\treturn NaN; // Keep the duration a NaN until after loadeddata event has occurred. Otherwise Popcorn track event padding is corrupted.
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\tPopcorn.player.defineProperty( media, 'muted', {
\t\t\t\t\t\tset: function( val ) {
\t\t\t\t\t\t\tmyPlayer.jPlayer('mute', val);
\t\t\t\t\t\t\treturn jPlayerObj.options.muted;
\t\t\t\t\t\t},
\t\t\t\t\t\tget: function() {
\t\t\t\t\t\t\treturn jPlayerObj.options.muted;
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\tPopcorn.player.defineProperty( media, 'volume', {
\t\t\t\t\t\tset: function( val ) {
\t\t\t\t\t\t\tmyPlayer.jPlayer('volume', val);
\t\t\t\t\t\t\treturn jPlayerObj.options.volume;
\t\t\t\t\t\t},
\t\t\t\t\t\tget: function() {
\t\t\t\t\t\t\treturn jPlayerObj.options.volume;
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\tPopcorn.player.defineProperty( media, 'paused', {
\t\t\t\t\t\tset: function() {
\t\t\t\t\t\t\t// Read-only property
\t\t\t\t\t\t\treturn jPlayerObj.status.paused;
\t\t\t\t\t\t},
\t\t\t\t\t\tget: function() {
\t\t\t\t\t\t\treturn jPlayerObj.status.paused;
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\tmedia.play = function() {
\t\t\t\t\t\tmyPlayer.jPlayer('play');
\t\t\t\t\t};
\t\t\t\t\tmedia.pause = function() {
\t\t\t\t\t\tmyPlayer.jPlayer('pause');
\t\t\t\t\t};

\t\t\t\t\tmyPlayer.jPlayer(jpOptions); // Instance jPlayer. Note that the options should not have a ready event defined... Kill it by default?
\t\t\t\t\tjPlayerObj = myPlayer.data('jPlayer');

\t\t\t\t}(jQuery));
\t\t\t},

\t\t\tjPlayerCheck = function() {
\t\t\t\tif (!jQuery.jPlayer) {
\t\t\t\t\tif (!jPlayerDownloading) {
\t\t\t\t\t\tjPlayerDownloading = true;
\t\t\t\t\t\tPopcorn.getScript(JPLAYER_SCRIPT, function() {
\t\t\t\t\t\t\tjPlayerDownloading = false;
\t\t\t\t\t\t\tjPlayerInit();
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\tsetTimeout(jPlayerCheck, 250);
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tjPlayerInit();
\t\t\t\t}
\t\t\t},

\t\t\tjQueryCheck = function() {
\t\t\t\tif (!window.jQuery) {
\t\t\t\t\tif (!jQueryDownloading) {
\t\t\t\t\t\tjQueryDownloading = true;
\t\t\t\t\t\tPopcorn.getScript(JQUERY_SCRIPT, function() {
\t\t\t\t\t\t\tjQueryDownloading = false;
\t\t\t\t\t\t\tjPlayerCheck();
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\tsetTimeout(jQueryCheck, 250);
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tjPlayerCheck();
\t\t\t\t}
\t\t\t};

\t\t\tjQueryCheck();
\t\t},
\t\t_teardown: function() {
\t\t\tjQuery('#' +  this.id).jPlayer('destroy');
\t\t}
\t});

}(Popcorn));";
        
        $__internal_f9655d29a53b8a3d1b48c09d474a194ce99b42fd501d9ff8f6f34c502e1bbc02->leave($__internal_f9655d29a53b8a3d1b48c09d474a194ce99b42fd501d9ff8f6f34c502e1bbc02_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/popcorn/popcorn.jplayer.js";
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
 * jPlayer Player Plugin for Popcorn JavaScript Library
 * http://www.jplayer.org
 *
 * Copyright (c) 2012 - 2014 Happyworm Ltd
 * Licensed under the MIT license.
 * http://opensource.org/licenses/MIT
 *
 * Author: Mark J Panaghiston
 * Version: 1.1.6
 * Date: 27th November 2014
 *
 * For Popcorn Version: 1.3
 * For jPlayer Version: 2.9.0
 * Requires: jQuery 1.7+
 * Note: jQuery dependancy cannot be removed since jPlayer 2 is a jQuery plugin. Use of jQuery will be kept to a minimum.
 */

(function(Popcorn) {

\tvar JQUERY_SCRIPT = '//code.jquery.com/jquery-1.11.1.min.js', // Used if jQuery not already present.
\tJPLAYER_SCRIPT = '//code.jplayer.org/2.9.0/jplayer/jquery.jplayer.min.js', // Used if jPlayer not already present.
\tJPLAYER_SWFPATH = '//code.jplayer.org/2.9.0/jplayer/jquery.jplayer.swf', // Used if not specified in jPlayer options via SRC Object.
\tSOLUTION = 'html,flash', // The default solution option.
\tDEBUG = false, // Decided to leave the debugging option and console output in for the time being. Overhead is trivial.
\tjQueryDownloading = false, // Flag to stop multiple instances from each pulling in jQuery, thus corrupting it.
\tjPlayerDownloading = false, // Flag to stop multiple instances from each pulling in jPlayer, thus corrupting it.
\tformat = { // Duplicate of jPlayer 2.5.0 object, to avoid always requiring jQuery and jPlayer to be loaded before performing the _canPlayType() test.
\t\tmp3: {
\t\t\tcodec: 'audio/mpeg',
\t\t\tflashCanPlay: true,
\t\t\tmedia: 'audio'
\t\t},
\t\tm4a: { // AAC / MP4
\t\t\tcodec: 'audio/mp4; codecs=\"mp4a.40.2\"',
\t\t\tflashCanPlay: true,
\t\t\tmedia: 'audio'
\t\t},
\t\tm3u8a: { // AAC / MP4 / Apple HLS
\t\t\tcodec: 'application/vnd.apple.mpegurl; codecs=\"mp4a.40.2\"',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'audio'
\t\t},
\t\tm3ua: { // M3U
\t\t\tcodec: 'audio/mpegurl',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'audio'
\t\t},
\t\toga: { // OGG
\t\t\tcodec: 'audio/ogg; codecs=\"vorbis, opus\"',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'audio'
\t\t},
\t\tflac: { // FLAC
\t\t\tcodec: 'audio/x-flac',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'audio'
\t\t},
\t\twav: { // PCM
\t\t\tcodec: 'audio/wav; codecs=\"1\"',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'audio'
\t\t},
\t\twebma: { // WEBM
\t\t\tcodec: 'audio/webm; codecs=\"vorbis\"',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'audio'
\t\t},
\t\tfla: { // FLV / F4A
\t\t\tcodec: 'audio/x-flv',
\t\t\tflashCanPlay: true,
\t\t\tmedia: 'audio'
\t\t},
\t\trtmpa: { // RTMP AUDIO
\t\t\tcodec: 'audio/rtmp; codecs=\"rtmp\"',
\t\t\tflashCanPlay: true,
\t\t\tmedia: 'audio'
\t\t},
\t\tm4v: { // H.264 / MP4
\t\t\tcodec: 'video/mp4; codecs=\"avc1.42E01E, mp4a.40.2\"',
\t\t\tflashCanPlay: true,
\t\t\tmedia: 'video'
\t\t},
\t\tm3u8v: { // H.264 / AAC / MP4 / Apple HLS
\t\t\tcodec: 'application/vnd.apple.mpegurl; codecs=\"avc1.42E01E, mp4a.40.2\"',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'video'
\t\t},
\t\tm3uv: { // M3U
\t\t\tcodec: 'audio/mpegurl',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'video'
\t\t},
\t\togv: { // OGG
\t\t\tcodec: 'video/ogg; codecs=\"theora, vorbis\"',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'video'
\t\t},
\t\twebmv: { // WEBM
\t\t\tcodec: 'video/webm; codecs=\"vorbis, vp8\"',
\t\t\tflashCanPlay: false,
\t\t\tmedia: 'video'
\t\t},
\t\tflv: { // FLV / F4V
\t\t\tcodec: 'video/x-flv',
\t\t\tflashCanPlay: true,
\t\t\tmedia: 'video'
\t\t},
\t\trtmpv: { // RTMP VIDEO
\t\t\tcodec: 'video/rtmp; codecs=\"rtmp\"',
\t\t\tflashCanPlay: true,
\t\t\tmedia: 'video'
\t\t}
\t},
\tisObject = function(val) { // Basic check for Object
\t\tif(val && typeof val === 'object' && val.hasOwnProperty) {
\t\t\treturn true;
\t\t} else {
\t\t\treturn false;
\t\t}
\t},
\tgetMediaType = function(url) { // Function to gleam the media type from the URL
\t\tvar mediaType = false;
\t\tif(/\\.mp3\$/i.test(url)) {
\t\t\tmediaType = 'mp3';
\t\t} else if(/\\.mp4\$/i.test(url) || /\\.m4v\$/i.test(url)) {
\t\t\tmediaType = 'm4v';
\t\t} else if(/\\.m4a\$/i.test(url)) {
\t\t\tmediaType = 'm4a';
\t\t} else if(/\\.ogg\$/i.test(url) || /\\.oga\$/i.test(url)) {
\t\t\tmediaType = 'oga';
\t\t} else if(/\\.ogv\$/i.test(url)) {
\t\t\tmediaType = 'ogv';
\t\t} else if(/\\.webm\$/i.test(url)) {
\t\t\tmediaType = 'webmv';
\t\t}
\t\treturn mediaType;
\t},
\tgetSupplied = function(url) { // Function to generate a supplied option from an src object. ie., When supplied not specified.
\t\tvar supplied = '',
\t\tseparator = '';
\t\tif(isObject(url)) {
\t\t\t// Generate supplied option from object's properties. Non-format properties would be ignored by jPlayer. Order is unpredictable.
\t\t\tfor(var prop in url) {
\t\t\t\tif(url.hasOwnProperty(prop)) {
\t\t\t\t\tsupplied += separator + prop;
\t\t\t\t\tseparator = ',';
\t\t\t\t}
\t\t\t}
\t\t}
\t\tif(DEBUG) console.log('getSupplied(): Generated: supplied = \"' + supplied + '\"');
\t\treturn supplied;
\t};

\tPopcorn.player( 'jplayer', {
\t\t_canPlayType: function( containerType, url ) {
\t\t\t// url : Either a String or an Object structured similar a jPlayer media object. ie., As used by setMedia in jPlayer.
\t\t\t// The url object may also contain a solution and supplied property.

\t\t\t// Define the src object structure here!

\t\t\tvar cType = containerType.toLowerCase(),
\t\t\tsrcObj = {
\t\t\t\tmedia:{},
\t\t\t\toptions:{}
\t\t\t},
\t\t\trVal = false, // Only a boolean false means it is not supported.
\t\t\tmediaType;

\t\t\tif(cType !== 'video' && cType !== 'audio') {

\t\t\t\tif(typeof url === 'string') {
\t\t\t\t\t// Check it starts with http, so the URL is absolute... Well, it is not a perfect check.
\t\t\t\t\tif(/^http.*/i.test(url)) {
\t\t\t\t\t\tmediaType = getMediaType(url);
\t\t\t\t\t\tif(mediaType) {
\t\t\t\t\t\t\tsrcObj.media[mediaType] = url;
\t\t\t\t\t\t\tsrcObj.options.solution = SOLUTION;
\t\t\t\t\t\t\tsrcObj.options.supplied = mediaType;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tsrcObj = url; // Assume the url is an src object.
\t\t\t\t}

\t\t\t\t// Check for Object and appropriate minimum data structure.
\t\t\t\tif(isObject(srcObj) && isObject(srcObj.media)) {

\t\t\t\t\tif(!isObject(srcObj.options)) {
\t\t\t\t\t\tsrcObj.options = {};
\t\t\t\t\t}

\t\t\t\t\tif(!srcObj.options.solution) {
\t\t\t\t\t\tsrcObj.options.solution = SOLUTION;
\t\t\t\t\t}

\t\t\t\t\tif(!srcObj.options.supplied) {
\t\t\t\t\t\tsrcObj.options.supplied = getSupplied(srcObj.media);
\t\t\t\t\t}

\t\t\t\t\t// Figure out how jPlayer will play it.
\t\t\t\t\t// This may not work properly when both audio and video is supplied. ie., A media player. But it should return truethy and jPlayer can figure it out.
\t\t\t\t\t
\t\t\t\t\tvar solution = srcObj.options.solution.toLowerCase().split(\",\"), // Create the solution array, with prority based on the order of the solution string.
\t\t\t\t\tsupplied = srcObj.options.supplied.toLowerCase().split(\",\"); // Create the supplied formats array, with prority based on the order of the supplied formats string.

\t\t\t\t\tfor(var sol = 0; sol < solution.length; sol++) {

\t\t\t\t\t\tvar solutionType = solution[sol].replace(/^\\s+|\\s+\$/g, \"\"), //trim
\t\t\t\t\t\tcheckingHtml = solutionType === 'html',
\t\t\t\t\t\tcheckingFlash = solutionType === 'flash',
\t\t\t\t\t\tmediaElem;

\t\t\t\t\t\tfor(var fmt = 0; fmt < supplied.length; fmt++) {
\t\t\t\t\t\t\tmediaType = supplied[fmt].replace(/^\\s+|\\s+\$/g, \"\"); //trim
\t\t\t\t\t\t\tif(format[mediaType]) { // Check format is valid.

\t\t\t\t\t\t\t\t// Create an HTML5 media element for the type of media.
\t\t\t\t\t\t\t\tif(!mediaElem && checkingHtml) {
\t\t\t\t\t\t\t\t\tmediaElem = document.createElement(format[mediaType].media);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t// See if the HTML5 media element can play the MIME / Codec type.
\t\t\t\t\t\t\t\t// Flash also returns the object if the format is playable, so it is truethy, but that html property is false.
\t\t\t\t\t\t\t\t// This assumes Flash is available, but that should be dealt with by jPlayer if that happens.
\t\t\t\t\t\t\t\tvar htmlCanPlay = !!(mediaElem && mediaElem.canPlayType && mediaElem.canPlayType(format[mediaType].codec)),
\t\t\t\t\t\t\t\thtmlWillPlay = htmlCanPlay && checkingHtml,
\t\t\t\t\t\t\t\tflashWillPlay = format[mediaType].flashCanPlay && checkingFlash;
\t\t\t\t\t\t\t\t// The first one found will match what jPlayer uses.
\t\t\t\t\t\t\t\tif(htmlWillPlay || flashWillPlay) {
\t\t\t\t\t\t\t\t\trVal = {
\t\t\t\t\t\t\t\t\t\thtml: htmlWillPlay,
\t\t\t\t\t\t\t\t\t\ttype: mediaType
\t\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t\tsol = solution.length; // Exit solution loop
\t\t\t\t\t\t\t\t\tfmt = supplied.length; // Exit supplied loop
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\treturn rVal;
\t\t},
\t\t// _setup: function( options ) { // Warning: options is deprecated.
\t\t_setup: function() {
\t\t\tvar media = this,
\t\t\tmyPlayer, // The jQuery selector of the jPlayer element. Usually a <div>
\t\t\tjPlayerObj, // The jPlayer data instance. For performance and DRY code.
\t\t\tmediaType = 'unknown',
\t\t\tjpMedia = {},
\t\t\tjpOptions = {},
\t\t\tready = false, // Used during init to override the annoying duration dependance in the track event padding during Popcorn's isReady(). ie., We is ready after loadeddata and duration can then be set real value at leisure.
\t\t\tduration = 0, // For the durationchange event with both HTML5 and Flash solutions. Used with 'ready' to keep control during the Popcorn isReady() via loadeddata event. (Duration=0 is bad.)
\t\t\tdurationchangeId = null, // A timeout ID used with delayed durationchange event. (Because of the duration=NaN fudge to avoid Popcorn track event corruption.)
\t\t\tcanplaythrough = false,
\t\t\terror = null, // The MediaError object.

\t\t\tdispatchDurationChange = function() {
\t\t\t\tif(ready) {
\t\t\t\t\tif(DEBUG) console.log('Dispatched event : durationchange : ' + duration);
\t\t\t\t\tmedia.dispatchEvent('durationchange');
\t\t\t\t} else {
\t\t\t\t\tif(DEBUG) console.log('DELAYED EVENT (!ready) : durationchange : ' + duration);
\t\t\t\t\tclearTimeout(durationchangeId); // Stop multiple triggers causing multiple timeouts running in parallel.
\t\t\t\t\tdurationchangeId = setTimeout(dispatchDurationChange, 250);
\t\t\t\t}
\t\t\t},

\t\t\tjPlayerFlashEventsPatch = function() {

\t\t\t\t/* Events already supported by jPlayer Flash:
\t\t\t\t * loadstart
\t\t\t\t * loadedmetadata (M4A, M4V)
\t\t\t\t * progress
\t\t\t\t * play
\t\t\t\t * pause
\t\t\t\t * seeking
\t\t\t\t * seeked
\t\t\t\t * timeupdate
\t\t\t\t * ended
\t\t\t\t * volumechange
\t\t\t\t * error <- See the custom handler in jPlayerInit()
\t\t\t\t */

\t\t\t\t/* Events patched:
\t\t\t\t * loadeddata
\t\t\t\t * durationchange
\t\t\t\t * canplaythrough
\t\t\t\t * playing
\t\t\t\t */

\t\t\t\t/* Events NOT patched:
\t\t\t\t * suspend
\t\t\t\t * abort
\t\t\t\t * emptied
\t\t\t\t * stalled
\t\t\t\t * loadedmetadata (MP3)
\t\t\t\t * waiting
\t\t\t\t * canplay
\t\t\t\t * ratechange
\t\t\t\t */

\t\t\t\t// Triggering patched events through the jPlayer Object so the events are homogeneous. ie., The contain the event.jPlayer data structure.

\t\t\t\tvar checkDuration = function(event) {
\t\t\t\t\tif(event.jPlayer.status.duration !== duration) {
\t\t\t\t\t\tduration = event.jPlayer.status.duration;
\t\t\t\t\t\tdispatchDurationChange();
\t\t\t\t\t}
\t\t\t\t},

\t\t\t\tcheckCanPlayThrough = function(event) {
\t\t\t\t\tif(!canplaythrough && event.jPlayer.status.seekPercent === 100) {
\t\t\t\t\t\tcanplaythrough = true;
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tif(DEBUG) console.log('Trigger : canplaythrough');
\t\t\t\t\t\t\tjPlayerObj._trigger(\$.jPlayer.event.canplaythrough);
\t\t\t\t\t\t}, 0);
\t\t\t\t\t}
\t\t\t\t};

\t\t\t\tmyPlayer.bind(\$.jPlayer.event.loadstart, function() {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tif(DEBUG) console.log('Trigger : loadeddata');
\t\t\t\t\t\tjPlayerObj._trigger(\$.jPlayer.event.loadeddata);
\t\t\t\t\t}, 0);
\t\t\t\t})
\t\t\t\t.bind(\$.jPlayer.event.progress, function(event) {
\t\t\t\t\tcheckDuration(event);
\t\t\t\t\tcheckCanPlayThrough(event);
\t\t\t\t})
\t\t\t\t.bind(\$.jPlayer.event.timeupdate, function(event) {
\t\t\t\t\tcheckDuration(event);
\t\t\t\t\tcheckCanPlayThrough(event);
\t\t\t\t})
\t\t\t\t.bind(\$.jPlayer.event.play, function() {
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tif(DEBUG) console.log('Trigger : playing');
\t\t\t\t\t\tjPlayerObj._trigger(\$.jPlayer.event.playing);
\t\t\t\t\t}, 0);
\t\t\t\t});

\t\t\t\tif(DEBUG) console.log('Created CUSTOM event handlers for FLASH');
\t\t\t},

\t\t\tjPlayerInit = function() {
\t\t\t\t(function(\$) {

\t\t\t\t\tmyPlayer = \$('#' +  media.id);

\t\t\t\t\tif(typeof media.src === 'string') {
\t\t\t\t\t\tmediaType = getMediaType(media.src);
\t\t\t\t\t\tjpMedia[mediaType] = media.src;
\t\t\t\t\t\tjpOptions.supplied = mediaType;
\t\t\t\t\t\tjpOptions.solution = SOLUTION;
\t\t\t\t\t} else if(isObject(media.src)) {
\t\t\t\t\t\tjpMedia = isObject(media.src.media) ? media.src.media : {};
\t\t\t\t\t\tjpOptions = isObject(media.src.options) ? media.src.options : {};
\t\t\t\t\t\tjpOptions.solution = jpOptions.solution || SOLUTION;
\t\t\t\t\t\tjpOptions.supplied = jpOptions.supplied || getSupplied(media.src.media);
\t\t\t\t\t}

\t\t\t\t\t// Allow the swfPath to be set to local server. ie., If the jPlayer Plugin is local and already on the page, then you can also use the local SWF.
\t\t\t\t\tjpOptions.swfPath = jpOptions.swfPath || JPLAYER_SWFPATH;

\t\t\t\t\tmyPlayer.bind(\$.jPlayer.event.ready, function(event) {
\t\t\t\t\t\tif(event.jPlayer.flash.used) {
\t\t\t\t\t\t\tjPlayerFlashEventsPatch();
\t\t\t\t\t\t}
\t\t\t\t\t\t// Set the media andd load it, so that the Flash solution behaves similar to HTML5 solution.
\t\t\t\t\t\t// This also allows the loadstart event to be used to know jPlayer is ready.
\t\t\t\t\t\t\$(this).jPlayer('setMedia', jpMedia).jPlayer('load');
\t\t\t\t\t});

\t\t\t\t\t// Do not auto-bubble the reserved events, nor the loadeddata and durationchange event, since the duration must be carefully handled when loadeddata event occurs.
\t\t\t\t\t// See the duration property code for more details. (Ranting.)

\t\t\t\t\tvar reservedEvents = \$.jPlayer.reservedEvent + ' loadeddata durationchange',
\t\t\t\t\treservedEvent = reservedEvents.split(/\\s+/g);

\t\t\t\t\t// Generate event handlers for all the standard HTML5 media events. (Except durationchange)

\t\t\t\t\tvar bindEvent = function(name) {
\t\t\t\t\t\tmyPlayer.bind(\$.jPlayer.event[name], function(event) {
\t\t\t\t\t\t\tif(DEBUG) console.log('Dispatched event: ' + name + (event && event.jPlayer ? ' (' + event.jPlayer.status.currentTime + 's)' : '')); // Must be after dispatch for some reason on Firefox/Opera
\t\t\t\t\t\t\tmedia.dispatchEvent(name);
\t\t\t\t\t\t});
\t\t\t\t\t\tif(DEBUG) console.log('Created event handler for: ' + name);
\t\t\t\t\t};

\t\t\t\t\tfor(var eventName in \$.jPlayer.event) {
\t\t\t\t\t\tif(\$.jPlayer.event.hasOwnProperty(eventName)) {
\t\t\t\t\t\t\tvar nativeEvent = true;
\t\t\t\t\t\t\tfor(var iRes in reservedEvent) {
\t\t\t\t\t\t\t\tif(reservedEvent.hasOwnProperty(iRes)) {
\t\t\t\t\t\t\t\t\tif(reservedEvent[iRes] === eventName) {
\t\t\t\t\t\t\t\t\t\tnativeEvent = false;
\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(nativeEvent) {
\t\t\t\t\t\t\t\tbindEvent(eventName);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tif(DEBUG) console.log('Skipped auto event handler creation for: ' + eventName);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tmyPlayer.bind(\$.jPlayer.event.loadeddata, function(event) {
\t\t\t\t\t\tif(DEBUG) console.log('Dispatched event: loadeddata' + (event && event.jPlayer ? ' (' + event.jPlayer.status.currentTime + 's)' : ''));
\t\t\t\t\t\tmedia.dispatchEvent('loadeddata');
\t\t\t\t\t\tready = true;
\t\t\t\t\t});
\t\t\t\t\tif(DEBUG) console.log('Created CUSTOM event handler for: loadeddata');

\t\t\t\t\tmyPlayer.bind(\$.jPlayer.event.durationchange, function(event) {
\t\t\t\t\t\tduration = event.jPlayer.status.duration;
\t\t\t\t\t\tdispatchDurationChange();
\t\t\t\t\t});
\t\t\t\t\tif(DEBUG) console.log('Created CUSTOM event handler for: durationchange');

\t\t\t\t\t// The error event is a special case. Plus jPlayer error event assumes it is a broken URL. (It could also be a decoder error... Or aborted or a Network error.)
\t\t\t\t\tmyPlayer.bind(\$.jPlayer.event.error, function(event) {
\t\t\t\t\t\t// Not sure how to handle the error situation. Popcorn does not appear to have the error or error.code property documented here: http://popcornjs.org/popcorn-docs/media-methods/
\t\t\t\t\t\t// If any error event happens, then something has gone pear shaped.

\t\t\t\t\t\terror = event.jPlayer.error; // Saving object pointer, not a copy of the object. Possible garbage collection issue... But the player is dead anyway, so don't care.

\t\t\t\t\t\tif(error.type === \$.jPlayer.error.URL) {
\t\t\t\t\t\t\terror.code = 4; // MEDIA_ERR_SRC_NOT_SUPPORTED since jPlayer makes this assumption. It is the most common error, then the decode error. Never seen either of the other 2 error types occur.
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\terror.code = 0; // It was a jPlayer error, not an HTML5 media error.
\t\t\t\t\t\t}

\t\t\t\t\t\tif(DEBUG) console.log('Dispatched event: error');
\t\t\t\t\t\tif(DEBUG) console.dir(error);
\t\t\t\t\t\tmedia.dispatchEvent('error');
\t\t\t\t\t});
\t\t\t\t\tif(DEBUG) console.log('Created CUSTOM event handler for: error');

\t\t\t\t\tPopcorn.player.defineProperty( media, 'error', {
\t\t\t\t\t\tset: function() {
\t\t\t\t\t\t\t// Read-only property
\t\t\t\t\t\t\treturn error;
\t\t\t\t\t\t},
\t\t\t\t\t\tget: function() {
\t\t\t\t\t\t\treturn error;
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\tPopcorn.player.defineProperty( media, 'currentTime', {
\t\t\t\t\t\tset: function( val ) {
\t\t\t\t\t\t\tif(jPlayerObj.status.paused) {
\t\t\t\t\t\t\t\tmyPlayer.jPlayer('pause', val);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tmyPlayer.jPlayer('play', val);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\treturn val;
\t\t\t\t\t\t},
\t\t\t\t\t\tget: function() {
\t\t\t\t\t\t\treturn jPlayerObj.status.currentTime;
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\t/* The joy of duration and the loadeddata event isReady() handler
\t\t\t\t\t * The duration is assumed to be a NaN or a valid duration.
\t\t\t\t\t * jPlayer uses zero instead of a NaN and this screws up the Popcorn track event start/end arrays padding.
\t\t\t\t\t * This line here:
\t\t\t\t\t *  videoDurationPlus = duration != duration ? Number.MAX_VALUE : duration + 1;
\t\t\t\t\t * Not sure why it is not simply:
\t\t\t\t\t *  videoDurationPlus = Number.MAX_VALUE; // Who cares if the padding is close to the real duration?
\t\t\t\t\t * So if you trigger loadeddata before the duration is correct, the track event padding is screwed up. (It pads the start, not the end... Well, duration+1 = 0+1 = 1s)
\t\t\t\t\t * That line makes the MP3 Flash fallback difficult to setup. The whole MP3 will need to load before the duration is known.
\t\t\t\t\t * Planning on using a NaN for duration until a >0 value is found... Except with MP3, where seekPercent must be 100% before setting the duration.
\t\t\t\t\t * Why not just use a NaN during init... And then correct the duration later?
\t\t\t\t\t */

\t\t\t\t\tPopcorn.player.defineProperty( media, 'duration', {
\t\t\t\t\t\tset: function() {
\t\t\t\t\t\t\t// Read-only property
\t\t\t\t\t\t\tif(ready) {
\t\t\t\t\t\t\t\treturn duration;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\treturn NaN;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\tget: function() {
\t\t\t\t\t\t\tif(ready) {
\t\t\t\t\t\t\t\treturn duration; // Popcorn has initialized, we can now use duration zero or whatever without fear.
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\treturn NaN; // Keep the duration a NaN until after loadeddata event has occurred. Otherwise Popcorn track event padding is corrupted.
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\tPopcorn.player.defineProperty( media, 'muted', {
\t\t\t\t\t\tset: function( val ) {
\t\t\t\t\t\t\tmyPlayer.jPlayer('mute', val);
\t\t\t\t\t\t\treturn jPlayerObj.options.muted;
\t\t\t\t\t\t},
\t\t\t\t\t\tget: function() {
\t\t\t\t\t\t\treturn jPlayerObj.options.muted;
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\tPopcorn.player.defineProperty( media, 'volume', {
\t\t\t\t\t\tset: function( val ) {
\t\t\t\t\t\t\tmyPlayer.jPlayer('volume', val);
\t\t\t\t\t\t\treturn jPlayerObj.options.volume;
\t\t\t\t\t\t},
\t\t\t\t\t\tget: function() {
\t\t\t\t\t\t\treturn jPlayerObj.options.volume;
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\tPopcorn.player.defineProperty( media, 'paused', {
\t\t\t\t\t\tset: function() {
\t\t\t\t\t\t\t// Read-only property
\t\t\t\t\t\t\treturn jPlayerObj.status.paused;
\t\t\t\t\t\t},
\t\t\t\t\t\tget: function() {
\t\t\t\t\t\t\treturn jPlayerObj.status.paused;
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\tmedia.play = function() {
\t\t\t\t\t\tmyPlayer.jPlayer('play');
\t\t\t\t\t};
\t\t\t\t\tmedia.pause = function() {
\t\t\t\t\t\tmyPlayer.jPlayer('pause');
\t\t\t\t\t};

\t\t\t\t\tmyPlayer.jPlayer(jpOptions); // Instance jPlayer. Note that the options should not have a ready event defined... Kill it by default?
\t\t\t\t\tjPlayerObj = myPlayer.data('jPlayer');

\t\t\t\t}(jQuery));
\t\t\t},

\t\t\tjPlayerCheck = function() {
\t\t\t\tif (!jQuery.jPlayer) {
\t\t\t\t\tif (!jPlayerDownloading) {
\t\t\t\t\t\tjPlayerDownloading = true;
\t\t\t\t\t\tPopcorn.getScript(JPLAYER_SCRIPT, function() {
\t\t\t\t\t\t\tjPlayerDownloading = false;
\t\t\t\t\t\t\tjPlayerInit();
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\tsetTimeout(jPlayerCheck, 250);
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tjPlayerInit();
\t\t\t\t}
\t\t\t},

\t\t\tjQueryCheck = function() {
\t\t\t\tif (!window.jQuery) {
\t\t\t\t\tif (!jQueryDownloading) {
\t\t\t\t\t\tjQueryDownloading = true;
\t\t\t\t\t\tPopcorn.getScript(JQUERY_SCRIPT, function() {
\t\t\t\t\t\t\tjQueryDownloading = false;
\t\t\t\t\t\t\tjPlayerCheck();
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\tsetTimeout(jQueryCheck, 250);
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tjPlayerCheck();
\t\t\t\t}
\t\t\t};

\t\t\tjQueryCheck();
\t\t},
\t\t_teardown: function() {
\t\t\tjQuery('#' +  this.id).jPlayer('destroy');
\t\t}
\t});

}(Popcorn));", "@MwebAdmin/filemanager/js/jPlayer/popcorn/popcorn.jplayer.js", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/popcorn/popcorn.jplayer.js");
    }
}
