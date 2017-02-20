<?php

/* @MwebAdmin/filemanager/js/jPlayer/jquery.jplayer/jquery.jplayer.js */
class __TwigTemplate_a4a0a136f1edfc804625cf7b9c6224b0114df4b3952f6e7f86a25729feb45a61 extends Twig_Template
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
        $__internal_f8ef344228010f890f2692a09a272991ba76851ffcedf37e1272630be7972f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ef344228010f890f2692a09a272991ba76851ffcedf37e1272630be7972f8a->enter($__internal_f8ef344228010f890f2692a09a272991ba76851ffcedf37e1272630be7972f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/jquery.jplayer/jquery.jplayer.js"));

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
 * Version: 2.4.0
 * Date: 5th June 2013
 */

/* Code verified using http://www.jshint.com/ */
/*jshint asi:false, bitwise:false, boss:false, browser:true, curly:true, debug:false, eqeqeq:true, eqnull:false, evil:false, forin:false, immed:false, jquery:true, laxbreak:false, newcap:true, noarg:true, noempty:true, nonew:true, onevar:false, passfail:false, plusplus:false, regexp:false, undef:true, sub:false, strict:false, white:false, smarttabs:true */
/*global define:false, ActiveXObject:false, alert:false */

/* Support for Zepto 1.0 compiled with optional data module.
 * For AMD support, you will need to manually switch the 2 lines in the code below.
 * Search terms: \"jQuery Switch\" and \"Zepto Switch\"
 */

(function (root, factory) {
\tif (typeof define === 'function' && define.amd) {
\t\t// AMD. Register as an anonymous module.
\t\tdefine(['jquery'], factory); // jQuery Switch
\t\t// define(['zepto'], factory); // Zepto Switch
\t} else {
\t\t// Browser globals
\t\tif(root.jQuery) { // Use jQuery if available
\t\t\tfactory(root.jQuery);
\t\t} else { // Otherwise, use Zepto
\t\t\tfactory(root.Zepto);
\t\t}
\t}
}(this, function (\$, undefined) {

\t// Adapted from jquery.ui.widget.js (1.8.7): \$.widget.bridge - Tweaked \$.data(this,XYZ) to \$(this).data(XYZ) for Zepto
\t\$.fn.jPlayer = function( options ) {
\t\tvar name = \"jPlayer\";
\t\tvar isMethodCall = typeof options === \"string\",
\t\t\targs = Array.prototype.slice.call( arguments, 1 ),
\t\t\treturnValue = this;

\t\t// allow multiple hashes to be passed on init
\t\toptions = !isMethodCall && args.length ?
\t\t\t\$.extend.apply( null, [ true, options ].concat(args) ) :
\t\t\toptions;

\t\t// prevent calls to internal methods
\t\tif ( isMethodCall && options.charAt( 0 ) === \"_\" ) {
\t\t\treturn returnValue;
\t\t}

\t\tif ( isMethodCall ) {
\t\t\tthis.each(function() {
\t\t\t\tvar instance = \$(this).data( name ),
\t\t\t\t\tmethodValue = instance && \$.isFunction( instance[options] ) ?
\t\t\t\t\t\tinstance[ options ].apply( instance, args ) :
\t\t\t\t\t\tinstance;
\t\t\t\tif ( methodValue !== instance && methodValue !== undefined ) {
\t\t\t\t\treturnValue = methodValue;
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t});
\t\t} else {
\t\t\tthis.each(function() {
\t\t\t\tvar instance = \$(this).data( name );
\t\t\t\tif ( instance ) {
\t\t\t\t\t// instance.option( options || {} )._init(); // Orig jquery.ui.widget.js code: Not recommend for jPlayer. ie., Applying new options to an existing instance (via the jPlayer constructor) and performing the _init(). The _init() is what concerns me. It would leave a lot of event handlers acting on jPlayer instance and the interface.
\t\t\t\t\tinstance.option( options || {} ); // The new constructor only changes the options. Changing options only has basic support atm.
\t\t\t\t} else {
\t\t\t\t\t\$(this).data( name, new \$.jPlayer( options, this ) );
\t\t\t\t}
\t\t\t});
\t\t}

\t\treturn returnValue;
\t};

\t\$.jPlayer = function( options, element ) {
\t\t// allow instantiation without initializing for simple inheritance
\t\tif ( arguments.length ) {
\t\t\tthis.element = \$(element);
\t\t\tthis.options = \$.extend(true, {},
\t\t\t\tthis.options,
\t\t\t\toptions
\t\t\t);
\t\t\tvar self = this;
\t\t\tthis.element.bind( \"remove.jPlayer\", function() {
\t\t\t\tself.destroy();
\t\t\t});
\t\t\tthis._init();
\t\t}
\t};
\t// End of: (Adapted from jquery.ui.widget.js (1.8.7))

\t// Zepto is missing one of the animation methods.
\tif(typeof \$.fn.stop !== 'function') {
\t\t\$.fn.stop = function() {};
\t}

\t// Emulated HTML5 methods and properties
\t\$.jPlayer.emulateMethods = \"load play pause\";
\t\$.jPlayer.emulateStatus = \"src readyState networkState currentTime duration paused ended playbackRate\";
\t\$.jPlayer.emulateOptions = \"muted volume\";

\t// Reserved event names generated by jPlayer that are not part of the HTML5 Media element spec
\t\$.jPlayer.reservedEvent = \"ready flashreset resize repeat error warning\";

\t// Events generated by jPlayer
\t\$.jPlayer.event = {};
\t\$.each(
\t\t[
\t\t\t'ready',
\t\t\t'flashreset', // Similar to the ready event if the Flash solution is set to display:none and then shown again or if it's reloaded for another reason by the browser. For example, using CSS position:fixed on Firefox for the full screen feature.
\t\t\t'resize', // Occurs when the size changes through a full/restore screen operation or if the size/sizeFull options are changed.
\t\t\t'repeat', // Occurs when the repeat status changes. Usually through clicks on the repeat button of the interface.
\t\t\t'click', // Occurs when the user clicks on one of the following: poster image, html video, flash video.
\t\t\t'error', // Event error code in event.jPlayer.error.type. See \$.jPlayer.error
\t\t\t'warning', // Event warning code in event.jPlayer.warning.type. See \$.jPlayer.warning

\t\t\t// Other events match HTML5 spec.
\t\t\t'loadstart',
\t\t\t'progress',
\t\t\t'suspend',
\t\t\t'abort',
\t\t\t'emptied',
\t\t\t'stalled',
\t\t\t'play',
\t\t\t'pause',
\t\t\t'loadedmetadata',
\t\t\t'loadeddata',
\t\t\t'waiting',
\t\t\t'playing',
\t\t\t'canplay',
\t\t\t'canplaythrough',
\t\t\t'seeking',
\t\t\t'seeked',
\t\t\t'timeupdate',
\t\t\t'ended',
\t\t\t'ratechange',
\t\t\t'durationchange',
\t\t\t'volumechange'
\t\t],
\t\tfunction() {
\t\t\t\$.jPlayer.event[ this ] = 'jPlayer_' + this;
\t\t}
\t);

\t\$.jPlayer.htmlEvent = [ // These HTML events are bubbled through to the jPlayer event, without any internal action.
\t\t\"loadstart\",
\t\t// \"progress\", // jPlayer uses internally before bubbling.
\t\t// \"suspend\", // jPlayer uses internally before bubbling.
\t\t\"abort\",
\t\t// \"error\", // jPlayer uses internally before bubbling.
\t\t\"emptied\",
\t\t\"stalled\",
\t\t// \"play\", // jPlayer uses internally before bubbling.
\t\t// \"pause\", // jPlayer uses internally before bubbling.
\t\t\"loadedmetadata\",
\t\t\"loadeddata\",
\t\t// \"waiting\", // jPlayer uses internally before bubbling.
\t\t// \"playing\", // jPlayer uses internally before bubbling.
\t\t\"canplay\",
\t\t\"canplaythrough\",
\t\t// \"seeking\", // jPlayer uses internally before bubbling.
\t\t// \"seeked\", // jPlayer uses internally before bubbling.
\t\t// \"timeupdate\", // jPlayer uses internally before bubbling.
\t\t// \"ended\", // jPlayer uses internally before bubbling.
\t\t\"ratechange\"
\t\t// \"durationchange\" // jPlayer uses internally before bubbling.
\t\t// \"volumechange\" // jPlayer uses internally before bubbling.
\t];

\t\$.jPlayer.pause = function() {
\t\t\$.each(\$.jPlayer.prototype.instances, function(i, element) {
\t\t\tif(element.data(\"jPlayer\").status.srcSet) { // Check that media is set otherwise would cause error event.
\t\t\t\telement.jPlayer(\"pause\");
\t\t\t}
\t\t});
\t};

\t// Default for jPlayer option.timeFormat
\t\$.jPlayer.timeFormat = {
\t\tshowHour: false,
\t\tshowMin: true,
\t\tshowSec: true,
\t\tpadHour: false,
\t\tpadMin: true,
\t\tpadSec: true,
\t\tsepHour: \":\",
\t\tsepMin: \":\",
\t\tsepSec: \"\"
\t};
\tvar ConvertTime = function() {
\t\tthis.init();
\t};
\tConvertTime.prototype = {
\t\tinit: function() {
\t\t\tthis.options = {
\t\t\t\ttimeFormat: \$.jPlayer.timeFormat
\t\t\t};
\t\t},
\t\ttime: function(s) { // function used on jPlayer.prototype._convertTime to enable per instance options.
\t\t\ts = (s && typeof s === 'number') ? s : 0;

\t\t\tvar myTime = new Date(s * 1000),
\t\t\t\thour = myTime.getUTCHours(),
\t\t\t\tmin = this.options.timeFormat.showHour ? myTime.getUTCMinutes() : myTime.getUTCMinutes() + hour * 60,
\t\t\t\tsec = this.options.timeFormat.showMin ? myTime.getUTCSeconds() : myTime.getUTCSeconds() + min * 60,
\t\t\t\tstrHour = (this.options.timeFormat.padHour && hour < 10) ? \"0\" + hour : hour,
\t\t\t\tstrMin = (this.options.timeFormat.padMin && min < 10) ? \"0\" + min : min,
\t\t\t\tstrSec = (this.options.timeFormat.padSec && sec < 10) ? \"0\" + sec : sec,
\t\t\t\tstrTime = \"\";

\t\t\tstrTime += this.options.timeFormat.showHour ? strHour + this.options.timeFormat.sepHour : \"\";
\t\t\tstrTime += this.options.timeFormat.showMin ? strMin + this.options.timeFormat.sepMin : \"\";
\t\t\tstrTime += this.options.timeFormat.showSec ? strSec + this.options.timeFormat.sepSec : \"\";

\t\t\treturn strTime;
\t\t}
\t};
\tvar myConvertTime = new ConvertTime();
\t\$.jPlayer.convertTime = function(s) {
\t\treturn myConvertTime.time(s);
\t};

\t// Adapting jQuery 1.4.4 code for jQuery.browser. Required since jQuery 1.3.2 does not detect Chrome as webkit.
\t\$.jPlayer.uaBrowser = function( userAgent ) {
\t\tvar ua = userAgent.toLowerCase();

\t\t// Useragent RegExp
\t\tvar rwebkit = /(webkit)[ \\/]([\\w.]+)/;
\t\tvar ropera = /(opera)(?:.*version)?[ \\/]([\\w.]+)/;
\t\tvar rmsie = /(msie) ([\\w.]+)/;
\t\tvar rmozilla = /(mozilla)(?:.*? rv:([\\w.]+))?/;

\t\tvar match = rwebkit.exec( ua ) ||
\t\t\tropera.exec( ua ) ||
\t\t\trmsie.exec( ua ) ||
\t\t\tua.indexOf(\"compatible\") < 0 && rmozilla.exec( ua ) ||
\t\t\t[];

\t\treturn { browser: match[1] || \"\", version: match[2] || \"0\" };
\t};

\t// Platform sniffer for detecting mobile devices
\t\$.jPlayer.uaPlatform = function( userAgent ) {
\t\tvar ua = userAgent.toLowerCase();

\t\t// Useragent RegExp
\t\tvar rplatform = /(ipad|iphone|ipod|android|blackberry|playbook|windows ce|webos)/;
\t\tvar rtablet = /(ipad|playbook)/;
\t\tvar randroid = /(android)/;
\t\tvar rmobile = /(mobile)/;

\t\tvar platform = rplatform.exec( ua ) || [];
\t\tvar tablet = rtablet.exec( ua ) ||
\t\t\t!rmobile.exec( ua ) && randroid.exec( ua ) ||
\t\t\t[];

\t\tif(platform[1]) {
\t\t\tplatform[1] = platform[1].replace(/\\s/g, \"_\"); // Change whitespace to underscore. Enables dot notation.
\t\t}

\t\treturn { platform: platform[1] || \"\", tablet: tablet[1] || \"\" };
\t};

\t\$.jPlayer.browser = {
\t};
\t\$.jPlayer.platform = {
\t};

\tvar browserMatch = \$.jPlayer.uaBrowser(navigator.userAgent);
\tif ( browserMatch.browser ) {
\t\t\$.jPlayer.browser[ browserMatch.browser ] = true;
\t\t\$.jPlayer.browser.version = browserMatch.version;
\t}
\tvar platformMatch = \$.jPlayer.uaPlatform(navigator.userAgent);
\tif ( platformMatch.platform ) {
\t\t\$.jPlayer.platform[ platformMatch.platform ] = true;
\t\t\$.jPlayer.platform.mobile = !platformMatch.tablet;
\t\t\$.jPlayer.platform.tablet = !!platformMatch.tablet;
\t}

\t// Internet Explorer (IE) Browser Document Mode Sniffer. Based on code at:
\t// http://msdn.microsoft.com/en-us/library/cc288325%28v=vs.85%29.aspx#GetMode
\t\$.jPlayer.getDocMode = function() {
\t\tvar docMode;
\t\tif (\$.jPlayer.browser.msie) {
\t\t\tif (document.documentMode) { // IE8 or later
\t\t\t\tdocMode = document.documentMode;
\t\t\t} else { // IE 5-7
\t\t\t\tdocMode = 5; // Assume quirks mode unless proven otherwise
\t\t\t\tif (document.compatMode) {
\t\t\t\t\tif (document.compatMode === \"CSS1Compat\") {
\t\t\t\t\t\tdocMode = 7; // standards mode
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t\treturn docMode;
\t};
\t\$.jPlayer.browser.documentMode = \$.jPlayer.getDocMode();

\t\$.jPlayer.nativeFeatures = {
\t\tinit: function() {

\t\t\t/* Fullscreen function naming influenced by W3C naming.
\t\t\t * No support for: Mozilla Proposal: https://wiki.mozilla.org/Gecko:FullScreenAPI
\t\t\t */

\t\t\tvar d = document,
\t\t\t\tv = d.createElement('video'),
\t\t\t\tspec = {
\t\t\t\t\t// http://www.w3.org/TR/fullscreen/
\t\t\t\t\tw3c: [
\t\t\t\t\t\t'fullscreenEnabled',
\t\t\t\t\t\t'fullscreenElement',
\t\t\t\t\t\t'requestFullscreen',
\t\t\t\t\t\t'exitFullscreen',
\t\t\t\t\t\t'fullscreenchange',
\t\t\t\t\t\t'fullscreenerror'
\t\t\t\t\t],
\t\t\t\t\t// https://developer.mozilla.org/en-US/docs/DOM/Using_fullscreen_mode
\t\t\t\t\tmoz: [
\t\t\t\t\t\t'mozFullScreenEnabled',
\t\t\t\t\t\t'mozFullScreenElement',
\t\t\t\t\t\t'mozRequestFullScreen',
\t\t\t\t\t\t'mozCancelFullScreen',
\t\t\t\t\t\t'mozfullscreenchange',
\t\t\t\t\t\t'mozfullscreenerror'
\t\t\t\t\t],
\t\t\t\t\t// http://developer.apple.com/library/safari/#documentation/WebKit/Reference/ElementClassRef/Element/Element.html
\t\t\t\t\t// http://developer.apple.com/library/safari/#documentation/UserExperience/Reference/DocumentAdditionsReference/DocumentAdditions/DocumentAdditions.html
\t\t\t\t\twebkit: [
\t\t\t\t\t\t'',
\t\t\t\t\t\t'webkitCurrentFullScreenElement',
\t\t\t\t\t\t'webkitRequestFullScreen',
\t\t\t\t\t\t'webkitCancelFullScreen',
\t\t\t\t\t\t'webkitfullscreenchange',
\t\t\t\t\t\t''
\t\t\t\t\t],
\t\t\t\t\t// http://developer.apple.com/library/safari/#documentation/AudioVideo/Reference/HTMLVideoElementClassReference/HTMLVideoElement/HTMLVideoElement.html
\t\t\t\t\twebkitVideo: [
\t\t\t\t\t\t'webkitSupportsFullscreen',
\t\t\t\t\t\t'webkitDisplayingFullscreen',
\t\t\t\t\t\t'webkitEnterFullscreen',
\t\t\t\t\t\t'webkitExitFullscreen',
\t\t\t\t\t\t'',
\t\t\t\t\t\t''
\t\t\t\t\t]
\t\t\t\t},
\t\t\t\tspecOrder = [
\t\t\t\t\t'w3c',
\t\t\t\t\t'moz',
\t\t\t\t\t'webkit',
\t\t\t\t\t'webkitVideo'
\t\t\t\t],
\t\t\t\tfs, i, il;

\t\t\tthis.fullscreen = fs = {
\t\t\t\tsupport: {
\t\t\t\t\tw3c: !!d[spec.w3c[0]],
\t\t\t\t\tmoz: !!d[spec.moz[0]],
\t\t\t\t\twebkit: typeof d[spec.webkit[3]] === 'function',
\t\t\t\t\twebkitVideo: typeof v[spec.webkitVideo[2]] === 'function'
\t\t\t\t},
\t\t\t\tused: {}
\t\t\t};

\t\t\t// Store the name of the spec being used and as a handy boolean.
\t\t\tfor(i = 0, il = specOrder.length; i < il; i++) {
\t\t\t\tvar n = specOrder[i];
\t\t\t\tif(fs.support[n]) {
\t\t\t\t\tfs.spec = n;
\t\t\t\t\tfs.used[n] = true;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}

\t\t\tif(fs.spec) {
\t\t\t\tvar s = spec[fs.spec];
\t\t\t\tfs.api = {
\t\t\t\t\tfullscreenEnabled: true,
\t\t\t\t\tfullscreenElement: function(elem) {
\t\t\t\t\t\telem = elem ? elem : d; // Video element required for webkitVideo
\t\t\t\t\t\treturn elem[s[1]];
\t\t\t\t\t},
\t\t\t\t\trequestFullscreen: function(elem) {
\t\t\t\t\t\treturn elem[s[2]]();
\t\t\t\t\t},
\t\t\t\t\texitFullscreen: function(elem) {
\t\t\t\t\t\telem = elem ? elem : d; // Video element required for webkitVideo
\t\t\t\t\t\treturn elem[s[3]]();
\t\t\t\t\t}
\t\t\t\t};
\t\t\t\tfs.event = {
\t\t\t\t\tfullscreenchange: s[4],
\t\t\t\t\tfullscreenerror: s[5]
\t\t\t\t};
\t\t\t} else {
\t\t\t\tfs.api = {
\t\t\t\t\tfullscreenEnabled: false,
\t\t\t\t\tfullscreenElement: function() {
\t\t\t\t\t\treturn null;
\t\t\t\t\t},
\t\t\t\t\trequestFullscreen: function() {},
\t\t\t\t\texitFullscreen: function() {}
\t\t\t\t};
\t\t\t\tfs.event = {};
\t\t\t}
\t\t}
\t};
\t\$.jPlayer.nativeFeatures.init();

\t// The keyboard control system.

\t// The current jPlayer instance in focus.
\t\$.jPlayer.focus = null;

\t// The list of element node names to ignore with key controls.
\t\$.jPlayer.keyIgnoreElementNames = \"INPUT TEXTAREA\";

\t// The function that deals with key presses.
\tvar keyBindings = function(event) {

\t\tvar f = \$.jPlayer.focus,
\t\t\tignoreKey;

\t\t// A jPlayer instance must be in focus. ie., keyEnabled and the last one played.
\t\tif(f) {
\t\t\t// What generated the key press?
\t\t\t\$.each( \$.jPlayer.keyIgnoreElementNames.split(/\\s+/g), function(i, name) {
\t\t\t\t// The strings should already be uppercase.
\t\t\t\tif(event.target.nodeName.toUpperCase() === name.toUpperCase()) {
\t\t\t\t\tignoreKey = true;
\t\t\t\t\treturn false; // exit each.
\t\t\t\t}
\t\t\t});
\t\t\tif(!ignoreKey) {
\t\t\t\t// See if the key pressed matches any of the bindings.
\t\t\t\t\$.each(f.options.keyBindings, function(action, binding) {
\t\t\t\t\t// The binding could be a null when the default has been disabled. ie., 1st clause in if()
\t\t\t\t\tif(binding && event.which === binding.key && \$.isFunction(binding.fn)) {
\t\t\t\t\t\tevent.preventDefault(); // Key being used by jPlayer, so prevent default operation.
\t\t\t\t\t\tbinding.fn(f);
\t\t\t\t\t\treturn false; // exit each.
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}
\t};

\t\$.jPlayer.keys = function(en) {
\t\tvar event = \"keydown.jPlayer\";
\t\t// Remove any binding, just in case enabled more than once.
\t\t\$(document.documentElement).unbind(event);
\t\tif(en) {
\t\t\t\$(document.documentElement).bind(event, keyBindings);
\t\t}
\t};

\t// Enable the global key control handler ready for any jPlayer instance with the keyEnabled option enabled.
\t\$.jPlayer.keys(true);

\t\$.jPlayer.prototype = {
\t\tcount: 0, // Static Variable: Change it via prototype.
\t\tversion: { // Static Object
\t\t\tscript: \"2.4.0\",
\t\t\tneedFlash: \"2.4.0\",
\t\t\tflash: \"unknown\"
\t\t},
\t\toptions: { // Instanced in \$.jPlayer() constructor
\t\t\tswfPath: \"js\", // Path to Jplayer.swf. Can be relative, absolute or server root relative.
\t\t\tsolution: \"html, flash\", // Valid solutions: html, flash. Order defines priority. 1st is highest,
\t\t\tsupplied: \"mp3\", // Defines which formats jPlayer will try and support and the priority by the order. 1st is highest,
\t\t\tpreload: 'metadata',  // HTML5 Spec values: none, metadata, auto.
\t\t\tvolume: 0.8, // The volume. Number 0 to 1.
\t\t\tmuted: false,
\t\t\twmode: \"opaque\", // Valid wmode: window, transparent, opaque, direct, gpu. 
\t\t\tbackgroundColor: \"#000000\", // To define the jPlayer div and Flash background color.
\t\t\tcssSelectorAncestor: \"#jp_container_1\",
\t\t\tcssSelector: { // * denotes properties that should only be required when video media type required. _cssSelector() would require changes to enable splitting these into Audio and Video defaults.
\t\t\t\tvideoPlay: \".jp-video-play\", // *
\t\t\t\tplay: \".jp-play\",
\t\t\t\tpause: \".jp-pause\",
\t\t\t\tstop: \".jp-stop\",
\t\t\t\tseekBar: \".jp-seek-bar\",
\t\t\t\tplayBar: \".jp-play-bar\",
\t\t\t\tmute: \".jp-mute\",
\t\t\t\tunmute: \".jp-unmute\",
\t\t\t\tvolumeBar: \".jp-volume-bar\",
\t\t\t\tvolumeBarValue: \".jp-volume-bar-value\",
\t\t\t\tvolumeMax: \".jp-volume-max\",
\t\t\t\tcurrentTime: \".jp-current-time\",
\t\t\t\tduration: \".jp-duration\",
\t\t\t\tfullScreen: \".jp-full-screen\", // *
\t\t\t\trestoreScreen: \".jp-restore-screen\", // *
\t\t\t\trepeat: \".jp-repeat\",
\t\t\t\trepeatOff: \".jp-repeat-off\",
\t\t\t\tgui: \".jp-gui\", // The interface used with autohide feature.
\t\t\t\tnoSolution: \".jp-no-solution\" // For error feedback when jPlayer cannot find a solution.
\t\t\t},
\t\t\tsmoothPlayBar: false, // Smooths the play bar transitions, which affects clicks and short media with big changes per second.
\t\t\tfullScreen: false, // Native Full Screen
\t\t\tfullWindow: false,
\t\t\tautohide: {
\t\t\t\trestored: false, // Controls the interface autohide feature.
\t\t\t\tfull: true, // Controls the interface autohide feature.
\t\t\t\tfadeIn: 200, // Milliseconds. The period of the fadeIn anim.
\t\t\t\tfadeOut: 600, // Milliseconds. The period of the fadeOut anim.
\t\t\t\thold: 1000 // Milliseconds. The period of the pause before autohide beings.
\t\t\t},
\t\t\tloop: false,
\t\t\trepeat: function(event) { // The default jPlayer repeat event handler
\t\t\t\tif(event.jPlayer.options.loop) {
\t\t\t\t\t\$(this).unbind(\".jPlayerRepeat\").bind(\$.jPlayer.event.ended + \".jPlayer.jPlayerRepeat\", function() {
\t\t\t\t\t\t\$(this).jPlayer(\"play\");
\t\t\t\t\t});
\t\t\t\t} else {
\t\t\t\t\t\$(this).unbind(\".jPlayerRepeat\");
\t\t\t\t}
\t\t\t},
\t\t\tnativeVideoControls: {
\t\t\t\t// Works well on standard browsers.
\t\t\t\t// Phone and tablet browsers can have problems with the controls disappearing.
\t\t\t},
\t\t\tnoFullWindow: {
\t\t\t\tmsie: /msie [0-6]\\./,
\t\t\t\tipad: /ipad.*?os [0-4]\\./,
\t\t\t\tiphone: /iphone/,
\t\t\t\tipod: /ipod/,
\t\t\t\tandroid_pad: /android [0-3]\\.(?!.*?mobile)/,
\t\t\t\tandroid_phone: /android.*?mobile/,
\t\t\t\tblackberry: /blackberry/,
\t\t\t\twindows_ce: /windows ce/,
\t\t\t\tiemobile: /iemobile/,
\t\t\t\twebos: /webos/
\t\t\t},
\t\t\tnoVolume: {
\t\t\t\tipad: /ipad/,
\t\t\t\tiphone: /iphone/,
\t\t\t\tipod: /ipod/,
\t\t\t\tandroid_pad: /android(?!.*?mobile)/,
\t\t\t\tandroid_phone: /android.*?mobile/,
\t\t\t\tblackberry: /blackberry/,
\t\t\t\twindows_ce: /windows ce/,
\t\t\t\tiemobile: /iemobile/,
\t\t\t\twebos: /webos/,
\t\t\t\tplaybook: /playbook/
\t\t\t},
\t\t\ttimeFormat: {
\t\t\t\t// Specific time format for this instance. The supported options are defined in \$.jPlayer.timeFormat
\t\t\t\t// For the undefined options we use the default from \$.jPlayer.timeFormat
\t\t\t},
\t\t\tkeyEnabled: false, // Enables keyboard controls.
\t\t\taudioFullScreen: false, // Enables keyboard controls to enter full screen with audio media.
\t\t\tkeyBindings: { // The key control object, defining the key codes and the functions to execute.
\t\t\t\t// The parameter, f = \$.jPlayer.focus, will be checked truethy before attempting to call any of these functions.
\t\t\t\t// Properties may be added to this object, in key/fn pairs, to enable other key controls. EG, for the playlist add-on.
\t\t\t\tplay: {
\t\t\t\t\tkey: 32, // space
\t\t\t\t\tfn: function(f) {
\t\t\t\t\t\tif(f.status.paused) {
\t\t\t\t\t\t\tf.play();
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tf.pause();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tfullScreen: {
\t\t\t\t\tkey: 13, // enter
\t\t\t\t\tfn: function(f) {
\t\t\t\t\t\tif(f.status.video || f.options.audioFullScreen) {
\t\t\t\t\t\t\tf._setOption(\"fullScreen\", !f.options.fullScreen);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tmuted: {
\t\t\t\t\tkey: 8, // backspace
\t\t\t\t\tfn: function(f) {
\t\t\t\t\t\tf._muted(!f.options.muted);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tvolumeUp: {
\t\t\t\t\tkey: 38, // UP
\t\t\t\t\tfn: function(f) {
\t\t\t\t\t\tf.volume(f.options.volume + 0.1);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tvolumeDown: {
\t\t\t\t\tkey: 40, // DOWN
\t\t\t\t\tfn: function(f) {
\t\t\t\t\t\tf.volume(f.options.volume - 0.1);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\tverticalVolume: false, // Calculate volume from the bottom of the volume bar. Default is from the left. Also volume affects either width or height.
\t\t\t// globalVolume: false, // Not implemented: Set to make volume changes affect all jPlayer instances
\t\t\t// globalMute: false, // Not implemented: Set to make mute changes affect all jPlayer instances
\t\t\tidPrefix: \"jp\", // Prefix for the ids of html elements created by jPlayer. For flash, this must not include characters: . - + * / \\
\t\t\tnoConflict: \"jQuery\",
\t\t\temulateHtml: false, // Emulates the HTML5 Media element on the jPlayer element.
\t\t\terrorAlerts: false,
\t\t\twarningAlerts: false
\t\t},
\t\toptionsAudio: {
\t\t\tsize: {
\t\t\t\twidth: \"0px\",
\t\t\t\theight: \"0px\",
\t\t\t\tcssClass: \"\"
\t\t\t},
\t\t\tsizeFull: {
\t\t\t\twidth: \"0px\",
\t\t\t\theight: \"0px\",
\t\t\t\tcssClass: \"\"
\t\t\t}
\t\t},
\t\toptionsVideo: {
\t\t\tsize: {
\t\t\t\twidth: \"480px\",
\t\t\t\theight: \"270px\",
\t\t\t\tcssClass: \"jp-video-270p\"
\t\t\t},
\t\t\tsizeFull: {
\t\t\t\twidth: \"100%\",
\t\t\t\theight: \"100%\",
\t\t\t\tcssClass: \"jp-video-full\"
\t\t\t}
\t\t},
\t\tinstances: {}, // Static Object
\t\tstatus: { // Instanced in _init()
\t\t\tsrc: \"\",
\t\t\tmedia: {},
\t\t\tpaused: true,
\t\t\tformat: {},
\t\t\tformatType: \"\",
\t\t\twaitForPlay: true, // Same as waitForLoad except in case where preloading.
\t\t\twaitForLoad: true,
\t\t\tsrcSet: false,
\t\t\tvideo: false, // True if playing a video
\t\t\tseekPercent: 0,
\t\t\tcurrentPercentRelative: 0,
\t\t\tcurrentPercentAbsolute: 0,
\t\t\tcurrentTime: 0,
\t\t\tduration: 0,
\t\t\tvideoWidth: 0, // Intrinsic width of the video in pixels.
\t\t\tvideoHeight: 0, // Intrinsic height of the video in pixels.
\t\t\treadyState: 0,
\t\t\tnetworkState: 0,
\t\t\tplaybackRate: 1,
\t\t\tended: 0

/*\t\tPersistant status properties created dynamically at _init():
\t\t\twidth
\t\t\theight
\t\t\tcssClass
\t\t\tnativeVideoControls
\t\t\tnoFullWindow
\t\t\tnoVolume
*/
\t\t},

\t\tinternal: { // Instanced in _init()
\t\t\tready: false
\t\t\t// instance: undefined
\t\t\t// domNode: undefined
\t\t\t// htmlDlyCmdId: undefined
\t\t\t// autohideId: undefined
\t\t\t// cmdsIgnored
\t\t},
\t\tsolution: { // Static Object: Defines the solutions built in jPlayer.
\t\t\thtml: true,
\t\t\tflash: true
\t\t},
\t\t// 'MPEG-4 support' : canPlayType('video/mp4; codecs=\"mp4v.20.8\"')
\t\tformat: { // Static Object
\t\t\tmp3: {
\t\t\t\tcodec: 'audio/mpeg; codecs=\"mp3\"',
\t\t\t\tflashCanPlay: true,
\t\t\t\tmedia: 'audio'
\t\t\t},
\t\t\tm4a: { // AAC / MP4
\t\t\t\tcodec: 'audio/mp4; codecs=\"mp4a.40.2\"',
\t\t\t\tflashCanPlay: true,
\t\t\t\tmedia: 'audio'
\t\t\t},
\t\t\toga: { // OGG
\t\t\t\tcodec: 'audio/ogg; codecs=\"vorbis\"',
\t\t\t\tflashCanPlay: false,
\t\t\t\tmedia: 'audio'
\t\t\t},
\t\t\twav: { // PCM
\t\t\t\tcodec: 'audio/wav; codecs=\"1\"',
\t\t\t\tflashCanPlay: false,
\t\t\t\tmedia: 'audio'
\t\t\t},
\t\t\twebma: { // WEBM
\t\t\t\tcodec: 'audio/webm; codecs=\"vorbis\"',
\t\t\t\tflashCanPlay: false,
\t\t\t\tmedia: 'audio'
\t\t\t},
\t\t\tfla: { // FLV / F4A
\t\t\t\tcodec: 'audio/x-flv',
\t\t\t\tflashCanPlay: true,
\t\t\t\tmedia: 'audio'
\t\t\t},
\t\t\trtmpa: { // RTMP AUDIO
\t\t\t\tcodec: 'audio/rtmp; codecs=\"rtmp\"',
\t\t\t\tflashCanPlay: true,
\t\t\t\tmedia: 'audio'
\t\t\t},
\t\t\tm4v: { // H.264 / MP4
\t\t\t\tcodec: 'video/mp4; codecs=\"avc1.42E01E, mp4a.40.2\"',
\t\t\t\tflashCanPlay: true,
\t\t\t\tmedia: 'video'
\t\t\t},
\t\t\togv: { // OGG
\t\t\t\tcodec: 'video/ogg; codecs=\"theora, vorbis\"',
\t\t\t\tflashCanPlay: false,
\t\t\t\tmedia: 'video'
\t\t\t},
\t\t\twebmv: { // WEBM
\t\t\t\tcodec: 'video/webm; codecs=\"vorbis, vp8\"',
\t\t\t\tflashCanPlay: false,
\t\t\t\tmedia: 'video'
\t\t\t},
\t\t\tflv: { // FLV / F4V
\t\t\t\tcodec: 'video/x-flv',
\t\t\t\tflashCanPlay: true,
\t\t\t\tmedia: 'video'
\t\t\t},
\t\t\trtmpv: { // RTMP VIDEO
\t\t\t\tcodec: 'video/rtmp; codecs=\"rtmp\"',
\t\t\t\tflashCanPlay: true,
\t\t\t\tmedia: 'video'
\t\t\t}
\t\t},
\t\t_init: function() {
\t\t\tvar self = this;
\t\t\t
\t\t\tthis.element.empty();
\t\t\t
\t\t\tthis.status = \$.extend({}, this.status); // Copy static to unique instance.
\t\t\tthis.internal = \$.extend({}, this.internal); // Copy static to unique instance.

\t\t\t// Initialize the time format
\t\t\tthis.options.timeFormat = \$.extend({}, \$.jPlayer.timeFormat, this.options.timeFormat);

\t\t\t// On iOS, assume commands will be ignored before user initiates them.
\t\t\tthis.internal.cmdsIgnored = \$.jPlayer.platform.ipad || \$.jPlayer.platform.iphone || \$.jPlayer.platform.ipod;

\t\t\tthis.internal.domNode = this.element.get(0);

\t\t\t// Add key bindings focus to 1st jPlayer instanced with key control enabled.
\t\t\tif(this.options.keyEnabled && !\$.jPlayer.focus) {
\t\t\t\t\$.jPlayer.focus = this;
\t\t\t}

\t\t\tthis.formats = []; // Array based on supplied string option. Order defines priority.
\t\t\tthis.solutions = []; // Array based on solution string option. Order defines priority.
\t\t\tthis.require = {}; // Which media types are required: video, audio.
\t\t\t
\t\t\tthis.htmlElement = {}; // DOM elements created by jPlayer
\t\t\tthis.html = {}; // In _init()'s this.desired code and setmedia(): Accessed via this[solution], where solution from this.solutions array.
\t\t\tthis.html.audio = {};
\t\t\tthis.html.video = {};
\t\t\tthis.flash = {}; // In _init()'s this.desired code and setmedia(): Accessed via this[solution], where solution from this.solutions array.
\t\t\t
\t\t\tthis.css = {};
\t\t\tthis.css.cs = {}; // Holds the css selector strings
\t\t\tthis.css.jq = {}; // Holds jQuery selectors. ie., \$(css.cs.method)

\t\t\tthis.ancestorJq = []; // Holds jQuery selector of cssSelectorAncestor. Init would use \$() instead of [], but it is only 1.4+

\t\t\tthis.options.volume = this._limitValue(this.options.volume, 0, 1); // Limit volume value's bounds.

\t\t\t// Create the formats array, with prority based on the order of the supplied formats string
\t\t\t\$.each(this.options.supplied.toLowerCase().split(\",\"), function(index1, value1) {
\t\t\t\tvar format = value1.replace(/^\\s+|\\s+\$/g, \"\"); //trim
\t\t\t\tif(self.format[format]) { // Check format is valid.
\t\t\t\t\tvar dupFound = false;
\t\t\t\t\t\$.each(self.formats, function(index2, value2) { // Check for duplicates
\t\t\t\t\t\tif(format === value2) {
\t\t\t\t\t\t\tdupFound = true;
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tif(!dupFound) {
\t\t\t\t\t\tself.formats.push(format);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\t// Create the solutions array, with prority based on the order of the solution string
\t\t\t\$.each(this.options.solution.toLowerCase().split(\",\"), function(index1, value1) {
\t\t\t\tvar solution = value1.replace(/^\\s+|\\s+\$/g, \"\"); //trim
\t\t\t\tif(self.solution[solution]) { // Check solution is valid.
\t\t\t\t\tvar dupFound = false;
\t\t\t\t\t\$.each(self.solutions, function(index2, value2) { // Check for duplicates
\t\t\t\t\t\tif(solution === value2) {
\t\t\t\t\t\t\tdupFound = true;
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tif(!dupFound) {
\t\t\t\t\t\tself.solutions.push(solution);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\tthis.internal.instance = \"jp_\" + this.count;
\t\t\tthis.instances[this.internal.instance] = this.element;

\t\t\t// Check the jPlayer div has an id and create one if required. Important for Flash to know the unique id for comms.
\t\t\tif(!this.element.attr(\"id\")) {
\t\t\t\tthis.element.attr(\"id\", this.options.idPrefix + \"_jplayer_\" + this.count);
\t\t\t}

\t\t\tthis.internal.self = \$.extend({}, {
\t\t\t\tid: this.element.attr(\"id\"),
\t\t\t\tjq: this.element
\t\t\t});
\t\t\tthis.internal.audio = \$.extend({}, {
\t\t\t\tid: this.options.idPrefix + \"_audio_\" + this.count,
\t\t\t\tjq: undefined
\t\t\t});
\t\t\tthis.internal.video = \$.extend({}, {
\t\t\t\tid: this.options.idPrefix + \"_video_\" + this.count,
\t\t\t\tjq: undefined
\t\t\t});
\t\t\tthis.internal.flash = \$.extend({}, {
\t\t\t\tid: this.options.idPrefix + \"_flash_\" + this.count,
\t\t\t\tjq: undefined,
\t\t\t\tswf: this.options.swfPath + (this.options.swfPath.toLowerCase().slice(-4) !== \".swf\" ? (this.options.swfPath && this.options.swfPath.slice(-1) !== \"/\" ? \"/\" : \"\") + \"Jplayer.swf\" : \"\")
\t\t\t});
\t\t\tthis.internal.poster = \$.extend({}, {
\t\t\t\tid: this.options.idPrefix + \"_poster_\" + this.count,
\t\t\t\tjq: undefined
\t\t\t});

\t\t\t// Register listeners defined in the constructor
\t\t\t\$.each(\$.jPlayer.event, function(eventName,eventType) {
\t\t\t\tif(self.options[eventName] !== undefined) {
\t\t\t\t\tself.element.bind(eventType + \".jPlayer\", self.options[eventName]); // With .jPlayer namespace.
\t\t\t\t\tself.options[eventName] = undefined; // Destroy the handler pointer copy on the options. Reason, events can be added/removed in other ways so this could be obsolete and misleading.
\t\t\t\t}
\t\t\t});

\t\t\t// Determine if we require solutions for audio, video or both media types.
\t\t\tthis.require.audio = false;
\t\t\tthis.require.video = false;
\t\t\t\$.each(this.formats, function(priority, format) {
\t\t\t\tself.require[self.format[format].media] = true;
\t\t\t});

\t\t\t// Now required types are known, finish the options default settings.
\t\t\tif(this.require.video) {
\t\t\t\tthis.options = \$.extend(true, {},
\t\t\t\t\tthis.optionsVideo,
\t\t\t\t\tthis.options
\t\t\t\t);
\t\t\t} else {
\t\t\t\tthis.options = \$.extend(true, {},
\t\t\t\t\tthis.optionsAudio,
\t\t\t\t\tthis.options
\t\t\t\t);
\t\t\t}
\t\t\tthis._setSize(); // update status and jPlayer element size

\t\t\t// Determine the status for Blocklisted options.
\t\t\tthis.status.nativeVideoControls = this._uaBlocklist(this.options.nativeVideoControls);
\t\t\tthis.status.noFullWindow = this._uaBlocklist(this.options.noFullWindow);
\t\t\tthis.status.noVolume = this._uaBlocklist(this.options.noVolume);

\t\t\t// Create event handlers if native fullscreen is supported
\t\t\tif(\$.jPlayer.nativeFeatures.fullscreen.api.fullscreenEnabled) {
\t\t\t\tthis._fullscreenAddEventListeners();
\t\t\t}

\t\t\t// The native controls are only for video and are disabled when audio is also used.
\t\t\tthis._restrictNativeVideoControls();

\t\t\t// Create the poster image.
\t\t\tthis.htmlElement.poster = document.createElement('img');
\t\t\tthis.htmlElement.poster.id = this.internal.poster.id;
\t\t\tthis.htmlElement.poster.onload = function() { // Note that this did not work on Firefox 3.6: poster.addEventListener(\"onload\", function() {}, false); Did not investigate x-browser.
\t\t\t\tif(!self.status.video || self.status.waitForPlay) {
\t\t\t\t\tself.internal.poster.jq.show();
\t\t\t\t}
\t\t\t};
\t\t\tthis.element.append(this.htmlElement.poster);
\t\t\tthis.internal.poster.jq = \$(\"#\" + this.internal.poster.id);
\t\t\tthis.internal.poster.jq.css({'width': this.status.width, 'height': this.status.height});
\t\t\tthis.internal.poster.jq.hide();
\t\t\tthis.internal.poster.jq.bind(\"click.jPlayer\", function() {
\t\t\t\tself._trigger(\$.jPlayer.event.click);
\t\t\t});
\t\t\t
\t\t\t// Generate the required media elements
\t\t\tthis.html.audio.available = false;
\t\t\tif(this.require.audio) { // If a supplied format is audio
\t\t\t\tthis.htmlElement.audio = document.createElement('audio');
\t\t\t\tthis.htmlElement.audio.id = this.internal.audio.id;
\t\t\t\tthis.html.audio.available = !!this.htmlElement.audio.canPlayType && this._testCanPlayType(this.htmlElement.audio); // Test is for IE9 on Win Server 2008.
\t\t\t}
\t\t\tthis.html.video.available = false;
\t\t\tif(this.require.video) { // If a supplied format is video
\t\t\t\tthis.htmlElement.video = document.createElement('video');
\t\t\t\tthis.htmlElement.video.id = this.internal.video.id;
\t\t\t\tthis.html.video.available = !!this.htmlElement.video.canPlayType && this._testCanPlayType(this.htmlElement.video); // Test is for IE9 on Win Server 2008.
\t\t\t}

\t\t\tthis.flash.available = this._checkForFlash(10.1);

\t\t\tthis.html.canPlay = {};
\t\t\tthis.flash.canPlay = {};
\t\t\t\$.each(this.formats, function(priority, format) {
\t\t\t\tself.html.canPlay[format] = self.html[self.format[format].media].available && \"\" !== self.htmlElement[self.format[format].media].canPlayType(self.format[format].codec);
\t\t\t\tself.flash.canPlay[format] = self.format[format].flashCanPlay && self.flash.available;
\t\t\t});
\t\t\tthis.html.desired = false;
\t\t\tthis.flash.desired = false;
\t\t\t\$.each(this.solutions, function(solutionPriority, solution) {
\t\t\t\tif(solutionPriority === 0) {
\t\t\t\t\tself[solution].desired = true;
\t\t\t\t} else {
\t\t\t\t\tvar audioCanPlay = false;
\t\t\t\t\tvar videoCanPlay = false;
\t\t\t\t\t\$.each(self.formats, function(formatPriority, format) {
\t\t\t\t\t\tif(self[self.solutions[0]].canPlay[format]) { // The other solution can play
\t\t\t\t\t\t\tif(self.format[format].media === 'video') {
\t\t\t\t\t\t\t\tvideoCanPlay = true;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\taudioCanPlay = true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tself[solution].desired = (self.require.audio && !audioCanPlay) || (self.require.video && !videoCanPlay);
\t\t\t\t}
\t\t\t});
\t\t\t// This is what jPlayer will support, based on solution and supplied.
\t\t\tthis.html.support = {};
\t\t\tthis.flash.support = {};
\t\t\t\$.each(this.formats, function(priority, format) {
\t\t\t\tself.html.support[format] = self.html.canPlay[format] && self.html.desired;
\t\t\t\tself.flash.support[format] = self.flash.canPlay[format] && self.flash.desired;
\t\t\t});
\t\t\t// If jPlayer is supporting any format in a solution, then the solution is used.
\t\t\tthis.html.used = false;
\t\t\tthis.flash.used = false;
\t\t\t\$.each(this.solutions, function(solutionPriority, solution) {
\t\t\t\t\$.each(self.formats, function(formatPriority, format) {
\t\t\t\t\tif(self[solution].support[format]) {
\t\t\t\t\t\tself[solution].used = true;
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});

\t\t\t// Init solution active state and the event gates to false.
\t\t\tthis._resetActive();
\t\t\tthis._resetGate();

\t\t\t// Set up the css selectors for the control and feedback entities.
\t\t\tthis._cssSelectorAncestor(this.options.cssSelectorAncestor);
\t\t\t
\t\t\t// If neither html nor flash are being used by this browser, then media playback is not possible. Trigger an error event.
\t\t\tif(!(this.html.used || this.flash.used)) {
\t\t\t\tthis._error( {
\t\t\t\t\ttype: \$.jPlayer.error.NO_SOLUTION, 
\t\t\t\t\tcontext: \"{solution:'\" + this.options.solution + \"', supplied:'\" + this.options.supplied + \"'}\",
\t\t\t\t\tmessage: \$.jPlayer.errorMsg.NO_SOLUTION,
\t\t\t\t\thint: \$.jPlayer.errorHint.NO_SOLUTION
\t\t\t\t});
\t\t\t\tif(this.css.jq.noSolution.length) {
\t\t\t\t\tthis.css.jq.noSolution.show();
\t\t\t\t}
\t\t\t} else {
\t\t\t\tif(this.css.jq.noSolution.length) {
\t\t\t\t\tthis.css.jq.noSolution.hide();
\t\t\t\t}
\t\t\t}

\t\t\t// Add the flash solution if it is being used.
\t\t\tif(this.flash.used) {
\t\t\t\tvar htmlObj,
\t\t\t\tflashVars = 'jQuery=' + encodeURI(this.options.noConflict) + '&id=' + encodeURI(this.internal.self.id) + '&vol=' + this.options.volume + '&muted=' + this.options.muted;

\t\t\t\t// Code influenced by SWFObject 2.2: http://code.google.com/p/swfobject/
\t\t\t\t// Non IE browsers have an initial Flash size of 1 by 1 otherwise the wmode affected the Flash ready event. 

\t\t\t\tif(\$.jPlayer.browser.msie && (Number(\$.jPlayer.browser.version) < 9 || \$.jPlayer.browser.documentMode < 9)) {
\t\t\t\t\tvar objStr = '<object id=\"' + this.internal.flash.id + '\" classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" width=\"0\" height=\"0\" tabindex=\"-1\"></object>';

\t\t\t\t\tvar paramStr = [
\t\t\t\t\t\t'<param name=\"movie\" value=\"' + this.internal.flash.swf + '\" />',
\t\t\t\t\t\t'<param name=\"FlashVars\" value=\"' + flashVars + '\" />',
\t\t\t\t\t\t'<param name=\"allowScriptAccess\" value=\"always\" />',
\t\t\t\t\t\t'<param name=\"bgcolor\" value=\"' + this.options.backgroundColor + '\" />',
\t\t\t\t\t\t'<param name=\"wmode\" value=\"' + this.options.wmode + '\" />'
\t\t\t\t\t];

\t\t\t\t\thtmlObj = document.createElement(objStr);
\t\t\t\t\tfor(var i=0; i < paramStr.length; i++) {
\t\t\t\t\t\thtmlObj.appendChild(document.createElement(paramStr[i]));
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tvar createParam = function(el, n, v) {
\t\t\t\t\t\tvar p = document.createElement(\"param\");
\t\t\t\t\t\tp.setAttribute(\"name\", n);\t
\t\t\t\t\t\tp.setAttribute(\"value\", v);
\t\t\t\t\t\tel.appendChild(p);
\t\t\t\t\t};

\t\t\t\t\thtmlObj = document.createElement(\"object\");
\t\t\t\t\thtmlObj.setAttribute(\"id\", this.internal.flash.id);
\t\t\t\t\thtmlObj.setAttribute(\"name\", this.internal.flash.id);
\t\t\t\t\thtmlObj.setAttribute(\"data\", this.internal.flash.swf);
\t\t\t\t\thtmlObj.setAttribute(\"type\", \"application/x-shockwave-flash\");
\t\t\t\t\thtmlObj.setAttribute(\"width\", \"1\"); // Non-zero
\t\t\t\t\thtmlObj.setAttribute(\"height\", \"1\"); // Non-zero
\t\t\t\t\thtmlObj.setAttribute(\"tabindex\", \"-1\");
\t\t\t\t\tcreateParam(htmlObj, \"flashvars\", flashVars);
\t\t\t\t\tcreateParam(htmlObj, \"allowscriptaccess\", \"always\");
\t\t\t\t\tcreateParam(htmlObj, \"bgcolor\", this.options.backgroundColor);
\t\t\t\t\tcreateParam(htmlObj, \"wmode\", this.options.wmode);
\t\t\t\t}

\t\t\t\tthis.element.append(htmlObj);
\t\t\t\tthis.internal.flash.jq = \$(htmlObj);
\t\t\t}
\t\t\t
\t\t\t// Add the HTML solution if being used.
\t\t\tif(this.html.used) {

\t\t\t\t// The HTML Audio handlers
\t\t\t\tif(this.html.audio.available) {
\t\t\t\t\tthis._addHtmlEventListeners(this.htmlElement.audio, this.html.audio);
\t\t\t\t\tthis.element.append(this.htmlElement.audio);
\t\t\t\t\tthis.internal.audio.jq = \$(\"#\" + this.internal.audio.id);
\t\t\t\t}

\t\t\t\t// The HTML Video handlers
\t\t\t\tif(this.html.video.available) {
\t\t\t\t\tthis._addHtmlEventListeners(this.htmlElement.video, this.html.video);
\t\t\t\t\tthis.element.append(this.htmlElement.video);
\t\t\t\t\tthis.internal.video.jq = \$(\"#\" + this.internal.video.id);
\t\t\t\t\tif(this.status.nativeVideoControls) {
\t\t\t\t\t\tthis.internal.video.jq.css({'width': this.status.width, 'height': this.status.height});
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.internal.video.jq.css({'width':'0px', 'height':'0px'}); // Using size 0x0 since a .hide() causes issues in iOS
\t\t\t\t\t}
\t\t\t\t\tthis.internal.video.jq.bind(\"click.jPlayer\", function() {
\t\t\t\t\t\tself._trigger(\$.jPlayer.event.click);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}

\t\t\t// Create the bridge that emulates the HTML Media element on the jPlayer DIV
\t\t\tif( this.options.emulateHtml ) {
\t\t\t\tthis._emulateHtmlBridge();
\t\t\t}

\t\t\tif(this.html.used && !this.flash.used) { // If only HTML, then emulate flash ready() call after 100ms.
\t\t\t\tsetTimeout( function() {
\t\t\t\t\tself.internal.ready = true;
\t\t\t\t\tself.version.flash = \"n/a\";
\t\t\t\t\tself._trigger(\$.jPlayer.event.repeat); // Trigger the repeat event so its handler can initialize itself with the loop option.
\t\t\t\t\tself._trigger(\$.jPlayer.event.ready);
\t\t\t\t}, 100);
\t\t\t}

\t\t\t// Initialize the interface components with the options.
\t\t\tthis._updateNativeVideoControls();
\t\t\t// The other controls are now setup in _cssSelectorAncestor()
\t\t\tif(this.css.jq.videoPlay.length) {
\t\t\t\tthis.css.jq.videoPlay.hide();
\t\t\t}

\t\t\t\$.jPlayer.prototype.count++; // Change static variable via prototype.
\t\t},
\t\tdestroy: function() {
\t\t\t// MJP: The background change remains. Would need to store the original to restore it correctly.
\t\t\t// MJP: The jPlayer element's size change remains.

\t\t\t// Clear the media to reset the GUI and stop any downloads. Streams on some browsers had persited. (Chrome)
\t\t\tthis.clearMedia();
\t\t\t// Remove the size/sizeFull cssClass from the cssSelectorAncestor
\t\t\tthis._removeUiClass();
\t\t\t// Remove the times from the GUI
\t\t\tif(this.css.jq.currentTime.length) {
\t\t\t\tthis.css.jq.currentTime.text(\"\");
\t\t\t}
\t\t\tif(this.css.jq.duration.length) {
\t\t\t\tthis.css.jq.duration.text(\"\");
\t\t\t}
\t\t\t// Remove any bindings from the interface controls.
\t\t\t\$.each(this.css.jq, function(fn, jq) {
\t\t\t\t// Check selector is valid before trying to execute method.
\t\t\t\tif(jq.length) {
\t\t\t\t\tjq.unbind(\".jPlayer\");
\t\t\t\t}
\t\t\t});
\t\t\t// Remove the click handlers for \$.jPlayer.event.click
\t\t\tthis.internal.poster.jq.unbind(\".jPlayer\");
\t\t\tif(this.internal.video.jq) {
\t\t\t\tthis.internal.video.jq.unbind(\".jPlayer\");
\t\t\t}
\t\t\t// Remove the fullscreen event handlers
\t\t\tthis._fullscreenRemoveEventListeners();
\t\t\t// Remove key bindings
\t\t\tif(this === \$.jPlayer.focus) {
\t\t\t\t\$.jPlayer.focus = null;
\t\t\t}
\t\t\t// Destroy the HTML bridge.
\t\t\tif(this.options.emulateHtml) {
\t\t\t\tthis._destroyHtmlBridge();
\t\t\t}
\t\t\tthis.element.removeData(\"jPlayer\"); // Remove jPlayer data
\t\t\tthis.element.unbind(\".jPlayer\"); // Remove all event handlers created by the jPlayer constructor
\t\t\tthis.element.empty(); // Remove the inserted child elements
\t\t\t
\t\t\tdelete this.instances[this.internal.instance]; // Clear the instance on the static instance object
\t\t},
\t\tenable: function() { // Plan to implement
\t\t\t// options.disabled = false
\t\t},
\t\tdisable: function () { // Plan to implement
\t\t\t// options.disabled = true
\t\t},
\t\t_testCanPlayType: function(elem) {
\t\t\t// IE9 on Win Server 2008 did not implement canPlayType(), but it has the property.
\t\t\ttry {
\t\t\t\telem.canPlayType(this.format.mp3.codec); // The type is irrelevant.
\t\t\t\treturn true;
\t\t\t} catch(err) {
\t\t\t\treturn false;
\t\t\t}
\t\t},
\t\t_uaBlocklist: function(list) {
\t\t\t// list : object with properties that are all regular expressions. Property names are irrelevant.
\t\t\t// Returns true if the user agent is matched in list.
\t\t\tvar\tua = navigator.userAgent.toLowerCase(),
\t\t\t\tblock = false;

\t\t\t\$.each(list, function(p, re) {
\t\t\t\tif(re && re.test(ua)) {
\t\t\t\t\tblock = true;
\t\t\t\t\treturn false; // exit \$.each.
\t\t\t\t}
\t\t\t});
\t\t\treturn block;
\t\t},
\t\t_restrictNativeVideoControls: function() {
\t\t\t// Fallback to noFullWindow when nativeVideoControls is true and audio media is being used. Affects when both media types are used.
\t\t\tif(this.require.audio) {
\t\t\t\tif(this.status.nativeVideoControls) {
\t\t\t\t\tthis.status.nativeVideoControls = false;
\t\t\t\t\tthis.status.noFullWindow = true;
\t\t\t\t}
\t\t\t}
\t\t},
\t\t_updateNativeVideoControls: function() {
\t\t\tif(this.html.video.available && this.html.used) {
\t\t\t\t// Turn the HTML Video controls on/off
\t\t\t\tthis.htmlElement.video.controls = this.status.nativeVideoControls;
\t\t\t\t// Show/hide the jPlayer GUI.
\t\t\t\tthis._updateAutohide();
\t\t\t\t// For when option changed. The poster image is not updated, as it is dealt with in setMedia(). Acceptable degradation since seriously doubt these options will change on the fly. Can again review later.
\t\t\t\tif(this.status.nativeVideoControls && this.require.video) {
\t\t\t\t\tthis.internal.poster.jq.hide();
\t\t\t\t\tthis.internal.video.jq.css({'width': this.status.width, 'height': this.status.height});
\t\t\t\t} else if(this.status.waitForPlay && this.status.video) {
\t\t\t\t\tthis.internal.poster.jq.show();
\t\t\t\t\tthis.internal.video.jq.css({'width': '0px', 'height': '0px'});
\t\t\t\t}
\t\t\t}
\t\t},
\t\t_addHtmlEventListeners: function(mediaElement, entity) {
\t\t\tvar self = this;
\t\t\tmediaElement.preload = this.options.preload;
\t\t\tmediaElement.muted = this.options.muted;
\t\t\tmediaElement.volume = this.options.volume;

\t\t\t// Create the event listeners
\t\t\t// Only want the active entity to affect jPlayer and bubble events.
\t\t\t// Using entity.gate so that object is referenced and gate property always current
\t\t\t
\t\t\tmediaElement.addEventListener(\"progress\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tif(self.internal.cmdsIgnored && this.readyState > 0) { // Detect iOS executed the command
\t\t\t\t\t\tself.internal.cmdsIgnored = false;
\t\t\t\t\t}
\t\t\t\t\tself._getHtmlStatus(mediaElement);
\t\t\t\t\tself._updateInterface();
\t\t\t\t\tself._trigger(\$.jPlayer.event.progress);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"timeupdate\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._getHtmlStatus(mediaElement);
\t\t\t\t\tself._updateInterface();
\t\t\t\t\tself._trigger(\$.jPlayer.event.timeupdate);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"durationchange\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._getHtmlStatus(mediaElement);
\t\t\t\t\tself._updateInterface();
\t\t\t\t\tself._trigger(\$.jPlayer.event.durationchange);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"play\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._updateButtons(true);
\t\t\t\t\tself._html_checkWaitForPlay(); // So the native controls update this variable and puts the hidden interface in the correct state. Affects toggling native controls.
\t\t\t\t\tself._trigger(\$.jPlayer.event.play);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"playing\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._updateButtons(true);
\t\t\t\t\tself._seeked();
\t\t\t\t\tself._trigger(\$.jPlayer.event.playing);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"pause\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._updateButtons(false);
\t\t\t\t\tself._trigger(\$.jPlayer.event.pause);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"waiting\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._seeking();
\t\t\t\t\tself._trigger(\$.jPlayer.event.waiting);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"seeking\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._seeking();
\t\t\t\t\tself._trigger(\$.jPlayer.event.seeking);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"seeked\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._seeked();
\t\t\t\t\tself._trigger(\$.jPlayer.event.seeked);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"volumechange\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\t// Read the values back from the element as the Blackberry PlayBook shares the volume with the physical buttons master volume control.
\t\t\t\t\t// However, when tested 6th July 2011, those buttons do not generate an event. The physical play/pause button does though.
\t\t\t\t\tself.options.volume = mediaElement.volume;
\t\t\t\t\tself.options.muted = mediaElement.muted;
\t\t\t\t\tself._updateMute();
\t\t\t\t\tself._updateVolume();
\t\t\t\t\tself._trigger(\$.jPlayer.event.volumechange);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"suspend\", function() { // Seems to be the only way of capturing that the iOS4 browser did not actually play the media from the page code. ie., It needs a user gesture.
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._seeked();
\t\t\t\t\tself._trigger(\$.jPlayer.event.suspend);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"ended\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\t// Order of the next few commands are important. Change the time and then pause.
\t\t\t\t\t// Solves a bug in Firefox, where issuing pause 1st causes the media to play from the start. ie., The pause is ignored.
\t\t\t\t\tif(!\$.jPlayer.browser.webkit) { // Chrome crashes if you do this in conjunction with a setMedia command in an ended event handler. ie., The playlist demo.
\t\t\t\t\t\tself.htmlElement.media.currentTime = 0; // Safari does not care about this command. ie., It works with or without this line. (Both Safari and Chrome are Webkit.)
\t\t\t\t\t}
\t\t\t\t\tself.htmlElement.media.pause(); // Pause otherwise a click on the progress bar will play from that point, when it shouldn't, since it stopped playback.
\t\t\t\t\tself._updateButtons(false);
\t\t\t\t\tself._getHtmlStatus(mediaElement, true); // With override true. Otherwise Chrome leaves progress at full.
\t\t\t\t\tself._updateInterface();
\t\t\t\t\tself._trigger(\$.jPlayer.event.ended);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"error\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._updateButtons(false);
\t\t\t\t\tself._seeked();
\t\t\t\t\tif(self.status.srcSet) { // Deals with case of clearMedia() causing an error event.
\t\t\t\t\t\tclearTimeout(self.internal.htmlDlyCmdId); // Clears any delayed commands used in the HTML solution.
\t\t\t\t\t\tself.status.waitForLoad = true; // Allows the load operation to try again.
\t\t\t\t\t\tself.status.waitForPlay = true; // Reset since a play was captured.
\t\t\t\t\t\tif(self.status.video && !self.status.nativeVideoControls) {
\t\t\t\t\t\t\tself.internal.video.jq.css({'width':'0px', 'height':'0px'});
\t\t\t\t\t\t}
\t\t\t\t\t\tif(self._validString(self.status.media.poster) && !self.status.nativeVideoControls) {
\t\t\t\t\t\t\tself.internal.poster.jq.show();
\t\t\t\t\t\t}
\t\t\t\t\t\tif(self.css.jq.videoPlay.length) {
\t\t\t\t\t\t\tself.css.jq.videoPlay.show();
\t\t\t\t\t\t}
\t\t\t\t\t\tself._error( {
\t\t\t\t\t\t\ttype: \$.jPlayer.error.URL,
\t\t\t\t\t\t\tcontext: self.status.src, // this.src shows absolute urls. Want context to show the url given.
\t\t\t\t\t\t\tmessage: \$.jPlayer.errorMsg.URL,
\t\t\t\t\t\t\thint: \$.jPlayer.errorHint.URL
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}, false);
\t\t\t// Create all the other event listeners that bubble up to a jPlayer event from html, without being used by jPlayer.
\t\t\t\$.each(\$.jPlayer.htmlEvent, function(i, eventType) {
\t\t\t\tmediaElement.addEventListener(this, function() {
\t\t\t\t\tif(entity.gate) {
\t\t\t\t\t\tself._trigger(\$.jPlayer.event[eventType]);
\t\t\t\t\t}
\t\t\t\t}, false);
\t\t\t});
\t\t},
\t\t_getHtmlStatus: function(media, override) {
\t\t\tvar ct = 0, cpa = 0, sp = 0, cpr = 0;

\t\t\t// Fixes the duration bug in iOS, where the durationchange event occurs when media.duration is not always correct.
\t\t\t// Fixes the initial duration bug in BB OS7, where the media.duration is infinity and displays as NaN:NaN due to Date() using inifity.
\t\t\tif(isFinite(media.duration)) {
\t\t\t\tthis.status.duration = media.duration;
\t\t\t}

\t\t\tct = media.currentTime;
\t\t\tcpa = (this.status.duration > 0) ? 100 * ct / this.status.duration : 0;
\t\t\tif((typeof media.seekable === \"object\") && (media.seekable.length > 0)) {
\t\t\t\tsp = (this.status.duration > 0) ? 100 * media.seekable.end(media.seekable.length-1) / this.status.duration : 100;
\t\t\t\tcpr = (this.status.duration > 0) ? 100 * media.currentTime / media.seekable.end(media.seekable.length-1) : 0; // Duration conditional for iOS duration bug. ie., seekable.end is a NaN in that case.
\t\t\t} else {
\t\t\t\tsp = 100;
\t\t\t\tcpr = cpa;
\t\t\t}
\t\t\t
\t\t\tif(override) {
\t\t\t\tct = 0;
\t\t\t\tcpr = 0;
\t\t\t\tcpa = 0;
\t\t\t}

\t\t\tthis.status.seekPercent = sp;
\t\t\tthis.status.currentPercentRelative = cpr;
\t\t\tthis.status.currentPercentAbsolute = cpa;
\t\t\tthis.status.currentTime = ct;

\t\t\tthis.status.videoWidth = media.videoWidth;
\t\t\tthis.status.videoHeight = media.videoHeight;

\t\t\tthis.status.readyState = media.readyState;
\t\t\tthis.status.networkState = media.networkState;
\t\t\tthis.status.playbackRate = media.playbackRate;
\t\t\tthis.status.ended = media.ended;
\t\t},
\t\t_resetStatus: function() {
\t\t\tthis.status = \$.extend({}, this.status, \$.jPlayer.prototype.status); // Maintains the status properties that persist through a reset.
\t\t},
\t\t_trigger: function(eventType, error, warning) { // eventType always valid as called using \$.jPlayer.event.eventType
\t\t\tvar event = \$.Event(eventType);
\t\t\tevent.jPlayer = {};
\t\t\tevent.jPlayer.version = \$.extend({}, this.version);
\t\t\tevent.jPlayer.options = \$.extend(true, {}, this.options); // Deep copy
\t\t\tevent.jPlayer.status = \$.extend(true, {}, this.status); // Deep copy
\t\t\tevent.jPlayer.html = \$.extend(true, {}, this.html); // Deep copy
\t\t\tevent.jPlayer.flash = \$.extend(true, {}, this.flash); // Deep copy
\t\t\tif(error) {
\t\t\t\tevent.jPlayer.error = \$.extend({}, error);
\t\t\t}
\t\t\tif(warning) {
\t\t\t\tevent.jPlayer.warning = \$.extend({}, warning);
\t\t\t}
\t\t\tthis.element.trigger(event);
\t\t},
\t\tjPlayerFlashEvent: function(eventType, status) { // Called from Flash
\t\t\tif(eventType === \$.jPlayer.event.ready) {
\t\t\t\tif(!this.internal.ready) {
\t\t\t\t\tthis.internal.ready = true;
\t\t\t\t\tthis.internal.flash.jq.css({'width':'0px', 'height':'0px'}); // Once Flash generates the ready event, minimise to zero as it is not affected by wmode anymore.

\t\t\t\t\tthis.version.flash = status.version;
\t\t\t\t\tif(this.version.needFlash !== this.version.flash) {
\t\t\t\t\t\tthis._error( {
\t\t\t\t\t\t\ttype: \$.jPlayer.error.VERSION,
\t\t\t\t\t\t\tcontext: this.version.flash,
\t\t\t\t\t\t\tmessage: \$.jPlayer.errorMsg.VERSION + this.version.flash,
\t\t\t\t\t\t\thint: \$.jPlayer.errorHint.VERSION
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\tthis._trigger(\$.jPlayer.event.repeat); // Trigger the repeat event so its handler can initialize itself with the loop option.
\t\t\t\t\tthis._trigger(eventType);
\t\t\t\t} else {
\t\t\t\t\t// This condition occurs if the Flash is hidden and then shown again.
\t\t\t\t\t// Firefox also reloads the Flash if the CSS position changes. position:fixed is used for full screen.

\t\t\t\t\t// Only do this if the Flash is the solution being used at the moment. Affects Media players where both solution may be being used.
\t\t\t\t\tif(this.flash.gate) {

\t\t\t\t\t\t// Send the current status to the Flash now that it is ready (available) again.
\t\t\t\t\t\tif(this.status.srcSet) {

\t\t\t\t\t\t\t// Need to read original status before issuing the setMedia command.
\t\t\t\t\t\t\tvar\tcurrentTime = this.status.currentTime,
\t\t\t\t\t\t\t\tpaused = this.status.paused; 

\t\t\t\t\t\t\tthis.setMedia(this.status.media);
\t\t\t\t\t\t\tif(currentTime > 0) {
\t\t\t\t\t\t\t\tif(paused) {
\t\t\t\t\t\t\t\t\tthis.pause(currentTime);
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tthis.play(currentTime);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tthis._trigger(\$.jPlayer.event.flashreset);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tif(this.flash.gate) {
\t\t\t\tswitch(eventType) {
\t\t\t\t\tcase \$.jPlayer.event.progress:
\t\t\t\t\t\tthis._getFlashStatus(status);
\t\t\t\t\t\tthis._updateInterface();
\t\t\t\t\t\tthis._trigger(eventType);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \$.jPlayer.event.timeupdate:
\t\t\t\t\t\tthis._getFlashStatus(status);
\t\t\t\t\t\tthis._updateInterface();
\t\t\t\t\t\tthis._trigger(eventType);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \$.jPlayer.event.play:
\t\t\t\t\t\tthis._seeked();
\t\t\t\t\t\tthis._updateButtons(true);
\t\t\t\t\t\tthis._trigger(eventType);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \$.jPlayer.event.pause:
\t\t\t\t\t\tthis._updateButtons(false);
\t\t\t\t\t\tthis._trigger(eventType);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \$.jPlayer.event.ended:
\t\t\t\t\t\tthis._updateButtons(false);
\t\t\t\t\t\tthis._trigger(eventType);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \$.jPlayer.event.click:
\t\t\t\t\t\tthis._trigger(eventType); // This could be dealt with by the default
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \$.jPlayer.event.error:
\t\t\t\t\t\tthis.status.waitForLoad = true; // Allows the load operation to try again.
\t\t\t\t\t\tthis.status.waitForPlay = true; // Reset since a play was captured.
\t\t\t\t\t\tif(this.status.video) {
\t\t\t\t\t\t\tthis.internal.flash.jq.css({'width':'0px', 'height':'0px'});
\t\t\t\t\t\t}
\t\t\t\t\t\tif(this._validString(this.status.media.poster)) {
\t\t\t\t\t\t\tthis.internal.poster.jq.show();
\t\t\t\t\t\t}
\t\t\t\t\t\tif(this.css.jq.videoPlay.length && this.status.video) {
\t\t\t\t\t\t\tthis.css.jq.videoPlay.show();
\t\t\t\t\t\t}
\t\t\t\t\t\tif(this.status.video) { // Set up for another try. Execute before error event.
\t\t\t\t\t\t\tthis._flash_setVideo(this.status.media);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tthis._flash_setAudio(this.status.media);
\t\t\t\t\t\t}
\t\t\t\t\t\tthis._updateButtons(false);
\t\t\t\t\t\tthis._error( {
\t\t\t\t\t\t\ttype: \$.jPlayer.error.URL,
\t\t\t\t\t\t\tcontext:status.src,
\t\t\t\t\t\t\tmessage: \$.jPlayer.errorMsg.URL,
\t\t\t\t\t\t\thint: \$.jPlayer.errorHint.URL
\t\t\t\t\t\t});
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \$.jPlayer.event.seeking:
\t\t\t\t\t\tthis._seeking();
\t\t\t\t\t\tthis._trigger(eventType);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \$.jPlayer.event.seeked:
\t\t\t\t\t\tthis._seeked();
\t\t\t\t\t\tthis._trigger(eventType);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \$.jPlayer.event.ready:
\t\t\t\t\t\t// The ready event is handled outside the switch statement.
\t\t\t\t\t\t// Captured here otherwise 2 ready events would be generated if the ready event handler used setMedia.
\t\t\t\t\t\tbreak;
\t\t\t\t\tdefault:
\t\t\t\t\t\tthis._trigger(eventType);
\t\t\t\t}
\t\t\t}
\t\t\treturn false;
\t\t},
\t\t_getFlashStatus: function(status) {
\t\t\tthis.status.seekPercent = status.seekPercent;
\t\t\tthis.status.currentPercentRelative = status.currentPercentRelative;
\t\t\tthis.status.currentPercentAbsolute = status.currentPercentAbsolute;
\t\t\tthis.status.currentTime = status.currentTime;
\t\t\tthis.status.duration = status.duration;

\t\t\tthis.status.videoWidth = status.videoWidth;
\t\t\tthis.status.videoHeight = status.videoHeight;

\t\t\t// The Flash does not generate this information in this release
\t\t\tthis.status.readyState = 4; // status.readyState;
\t\t\tthis.status.networkState = 0; // status.networkState;
\t\t\tthis.status.playbackRate = 1; // status.playbackRate;
\t\t\tthis.status.ended = false; // status.ended;
\t\t},
\t\t_updateButtons: function(playing) {
\t\t\tif(playing === undefined) {
\t\t\t\tplaying = !this.status.paused;
\t\t\t} else {
\t\t\t\tthis.status.paused = !playing;
\t\t\t}
\t\t\tif(this.css.jq.play.length && this.css.jq.pause.length) {
\t\t\t\tif(playing) {
\t\t\t\t\tthis.css.jq.play.hide();
\t\t\t\t\tthis.css.jq.pause.show();
\t\t\t\t} else {
\t\t\t\t\tthis.css.jq.play.show();
\t\t\t\t\tthis.css.jq.pause.hide();
\t\t\t\t}
\t\t\t}
\t\t\tif(this.css.jq.restoreScreen.length && this.css.jq.fullScreen.length) {
\t\t\t\tif(this.status.noFullWindow) {
\t\t\t\t\tthis.css.jq.fullScreen.hide();
\t\t\t\t\tthis.css.jq.restoreScreen.hide();
\t\t\t\t} else if(this.options.fullWindow) {
\t\t\t\t\tthis.css.jq.fullScreen.hide();
\t\t\t\t\tthis.css.jq.restoreScreen.show();
\t\t\t\t} else {
\t\t\t\t\tthis.css.jq.fullScreen.show();
\t\t\t\t\tthis.css.jq.restoreScreen.hide();
\t\t\t\t}
\t\t\t}
\t\t\tif(this.css.jq.repeat.length && this.css.jq.repeatOff.length) {
\t\t\t\tif(this.options.loop) {
\t\t\t\t\tthis.css.jq.repeat.hide();
\t\t\t\t\tthis.css.jq.repeatOff.show();
\t\t\t\t} else {
\t\t\t\t\tthis.css.jq.repeat.show();
\t\t\t\t\tthis.css.jq.repeatOff.hide();
\t\t\t\t}
\t\t\t}
\t\t},
\t\t_updateInterface: function() {
\t\t\tif(this.css.jq.seekBar.length) {
\t\t\t\tthis.css.jq.seekBar.width(this.status.seekPercent+\"%\");
\t\t\t}
\t\t\tif(this.css.jq.playBar.length) {
\t\t\t\tif(this.options.smoothPlayBar) {
\t\t\t\t\tthis.css.jq.playBar.stop().animate({
\t\t\t\t\t\twidth: this.status.currentPercentAbsolute+\"%\"
\t\t\t\t\t}, 250, \"linear\");
\t\t\t\t} else {
\t\t\t\t\tthis.css.jq.playBar.width(this.status.currentPercentRelative+\"%\");
\t\t\t\t}
\t\t\t}
\t\t\tif(this.css.jq.currentTime.length) {
\t\t\t\tthis.css.jq.currentTime.text(this._convertTime(this.status.currentTime));
\t\t\t}
\t\t\tif(this.css.jq.duration.length) {
\t\t\t\tthis.css.jq.duration.text(this._convertTime(this.status.duration));
\t\t\t}
\t\t},
\t\t_convertTime: ConvertTime.prototype.time,
\t\t_seeking: function() {
\t\t\tif(this.css.jq.seekBar.length) {
\t\t\t\tthis.css.jq.seekBar.addClass(\"jp-seeking-bg\");
\t\t\t}
\t\t},
\t\t_seeked: function() {
\t\t\tif(this.css.jq.seekBar.length) {
\t\t\t\tthis.css.jq.seekBar.removeClass(\"jp-seeking-bg\");
\t\t\t}
\t\t},
\t\t_resetGate: function() {
\t\t\tthis.html.audio.gate = false;
\t\t\tthis.html.video.gate = false;
\t\t\tthis.flash.gate = false;
\t\t},
\t\t_resetActive: function() {
\t\t\tthis.html.active = false;
\t\t\tthis.flash.active = false;
\t\t},
\t\tsetMedia: function(media) {
\t\t
\t\t\t/*\tmedia[format] = String: URL of format. Must contain all of the supplied option's video or audio formats.
\t\t\t *\tmedia.poster = String: Video poster URL.
\t\t\t *\tmedia.subtitles = String: * NOT IMPLEMENTED * URL of subtitles SRT file
\t\t\t *\tmedia.chapters = String: * NOT IMPLEMENTED * URL of chapters SRT file
\t\t\t *\tmedia.stream = Boolean: * NOT IMPLEMENTED * Designating actual media streams. ie., \"false/undefined\" for files. Plan to refresh the flash every so often.
\t\t\t */

\t\t\tvar\tself = this,
\t\t\t\tsupported = false,
\t\t\t\tposterChanged = this.status.media.poster !== media.poster; // Compare before reset. Important for OSX Safari as this.htmlElement.poster.src is absolute, even if original poster URL was relative.

\t\t\tthis._resetMedia();
\t\t\tthis._resetGate();
\t\t\tthis._resetActive();

\t\t\t\$.each(this.formats, function(formatPriority, format) {
\t\t\t\tvar isVideo = self.format[format].media === 'video';
\t\t\t\t\$.each(self.solutions, function(solutionPriority, solution) {
\t\t\t\t\tif(self[solution].support[format] && self._validString(media[format])) { // Format supported in solution and url given for format.
\t\t\t\t\t\tvar isHtml = solution === 'html';

\t\t\t\t\t\tif(isVideo) {
\t\t\t\t\t\t\tif(isHtml) {
\t\t\t\t\t\t\t\tself.html.video.gate = true;
\t\t\t\t\t\t\t\tself._html_setVideo(media);
\t\t\t\t\t\t\t\tself.html.active = true;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tself.flash.gate = true;
\t\t\t\t\t\t\t\tself._flash_setVideo(media);
\t\t\t\t\t\t\t\tself.flash.active = true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(self.css.jq.videoPlay.length) {
\t\t\t\t\t\t\t\tself.css.jq.videoPlay.show();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tself.status.video = true;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tif(isHtml) {
\t\t\t\t\t\t\t\tself.html.audio.gate = true;
\t\t\t\t\t\t\t\tself._html_setAudio(media);
\t\t\t\t\t\t\t\tself.html.active = true;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tself.flash.gate = true;
\t\t\t\t\t\t\t\tself._flash_setAudio(media);
\t\t\t\t\t\t\t\tself.flash.active = true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(self.css.jq.videoPlay.length) {
\t\t\t\t\t\t\t\tself.css.jq.videoPlay.hide();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tself.status.video = false;
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\tsupported = true;
\t\t\t\t\t\treturn false; // Exit \$.each
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tif(supported) {
\t\t\t\t\treturn false; // Exit \$.each
\t\t\t\t}
\t\t\t});

\t\t\tif(supported) {
\t\t\t\tif(!(this.status.nativeVideoControls && this.html.video.gate)) {
\t\t\t\t\t// Set poster IMG if native video controls are not being used
\t\t\t\t\t// Note: With IE the IMG onload event occurs immediately when cached.
\t\t\t\t\t// Note: Poster hidden by default in _resetMedia()
\t\t\t\t\tif(this._validString(media.poster)) {
\t\t\t\t\t\tif(posterChanged) { // Since some browsers do not generate img onload event.
\t\t\t\t\t\t\tthis.htmlElement.poster.src = media.poster;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tthis.internal.poster.jq.show();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tthis.status.srcSet = true;
\t\t\t\tthis.status.media = \$.extend({}, media);
\t\t\t\tthis._updateButtons(false);
\t\t\t\tthis._updateInterface();
\t\t\t} else { // jPlayer cannot support any formats provided in this browser
\t\t\t\t// Send an error event
\t\t\t\tthis._error( {
\t\t\t\t\ttype: \$.jPlayer.error.NO_SUPPORT,
\t\t\t\t\tcontext: \"{supplied:'\" + this.options.supplied + \"'}\",
\t\t\t\t\tmessage: \$.jPlayer.errorMsg.NO_SUPPORT,
\t\t\t\t\thint: \$.jPlayer.errorHint.NO_SUPPORT
\t\t\t\t});
\t\t\t}
\t\t},
\t\t_resetMedia: function() {
\t\t\tthis._resetStatus();
\t\t\tthis._updateButtons(false);
\t\t\tthis._updateInterface();
\t\t\tthis._seeked();
\t\t\tthis.internal.poster.jq.hide();

\t\t\tclearTimeout(this.internal.htmlDlyCmdId);

\t\t\tif(this.html.active) {
\t\t\t\tthis._html_resetMedia();
\t\t\t} else if(this.flash.active) {
\t\t\t\tthis._flash_resetMedia();
\t\t\t}
\t\t},
\t\tclearMedia: function() {
\t\t\tthis._resetMedia();

\t\t\tif(this.html.active) {
\t\t\t\tthis._html_clearMedia();
\t\t\t} else if(this.flash.active) {
\t\t\t\tthis._flash_clearMedia();
\t\t\t}

\t\t\tthis._resetGate();
\t\t\tthis._resetActive();
\t\t},
\t\tload: function() {
\t\t\tif(this.status.srcSet) {
\t\t\t\tif(this.html.active) {
\t\t\t\t\tthis._html_load();
\t\t\t\t} else if(this.flash.active) {
\t\t\t\t\tthis._flash_load();
\t\t\t\t}
\t\t\t} else {
\t\t\t\tthis._urlNotSetError(\"load\");
\t\t\t}
\t\t},
\t\tfocus: function() {
\t\t\tif(this.options.keyEnabled) {
\t\t\t\t\$.jPlayer.focus = this;
\t\t\t}
\t\t},
\t\tplay: function(time) {
\t\t\ttime = (typeof time === \"number\") ? time : NaN; // Remove jQuery event from click handler
\t\t\tif(this.status.srcSet) {
\t\t\t\tthis.focus();
\t\t\t\tif(this.html.active) {
\t\t\t\t\tthis._html_play(time);
\t\t\t\t} else if(this.flash.active) {
\t\t\t\t\tthis._flash_play(time);
\t\t\t\t}
\t\t\t} else {
\t\t\t\tthis._urlNotSetError(\"play\");
\t\t\t}
\t\t},
\t\tvideoPlay: function() { // Handles clicks on the play button over the video poster
\t\t\tthis.play();
\t\t},
\t\tpause: function(time) {
\t\t\ttime = (typeof time === \"number\") ? time : NaN; // Remove jQuery event from click handler
\t\t\tif(this.status.srcSet) {
\t\t\t\tif(this.html.active) {
\t\t\t\t\tthis._html_pause(time);
\t\t\t\t} else if(this.flash.active) {
\t\t\t\t\tthis._flash_pause(time);
\t\t\t\t}
\t\t\t} else {
\t\t\t\tthis._urlNotSetError(\"pause\");
\t\t\t}
\t\t},
\t\tpauseOthers: function() {
\t\t\tvar self = this;
\t\t\t\$.each(this.instances, function(i, element) {
\t\t\t\tif(self.element !== element) { // Do not this instance.
\t\t\t\t\tif(element.data(\"jPlayer\").status.srcSet) { // Check that media is set otherwise would cause error event.
\t\t\t\t\t\telement.jPlayer(\"pause\");
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t},
\t\tstop: function() {
\t\t\tif(this.status.srcSet) {
\t\t\t\tif(this.html.active) {
\t\t\t\t\tthis._html_pause(0);
\t\t\t\t} else if(this.flash.active) {
\t\t\t\t\tthis._flash_pause(0);
\t\t\t\t}
\t\t\t} else {
\t\t\t\tthis._urlNotSetError(\"stop\");
\t\t\t}
\t\t},
\t\tplayHead: function(p) {
\t\t\tp = this._limitValue(p, 0, 100);
\t\t\tif(this.status.srcSet) {
\t\t\t\tif(this.html.active) {
\t\t\t\t\tthis._html_playHead(p);
\t\t\t\t} else if(this.flash.active) {
\t\t\t\t\tthis._flash_playHead(p);
\t\t\t\t}
\t\t\t} else {
\t\t\t\tthis._urlNotSetError(\"playHead\");
\t\t\t}
\t\t},
\t\t_muted: function(muted) {
\t\t\tthis.options.muted = muted;
\t\t\tif(this.html.used) {
\t\t\t\tthis._html_mute(muted);
\t\t\t}
\t\t\tif(this.flash.used) {
\t\t\t\tthis._flash_mute(muted);
\t\t\t}

\t\t\t// The HTML solution generates this event from the media element itself.
\t\t\tif(!this.html.video.gate && !this.html.audio.gate) {
\t\t\t\tthis._updateMute(muted);
\t\t\t\tthis._updateVolume(this.options.volume);
\t\t\t\tthis._trigger(\$.jPlayer.event.volumechange);
\t\t\t}
\t\t},
\t\tmute: function(mute) { // mute is either: undefined (true), an event object (true) or a boolean (muted).
\t\t\tmute = mute === undefined ? true : !!mute;
\t\t\tthis._muted(mute);
\t\t},
\t\tunmute: function(unmute) { // unmute is either: undefined (true), an event object (true) or a boolean (!muted).
\t\t\tunmute = unmute === undefined ? true : !!unmute;
\t\t\tthis._muted(!unmute);
\t\t},
\t\t_updateMute: function(mute) {
\t\t\tif(mute === undefined) {
\t\t\t\tmute = this.options.muted;
\t\t\t}
\t\t\tif(this.css.jq.mute.length && this.css.jq.unmute.length) {
\t\t\t\tif(this.status.noVolume) {
\t\t\t\t\tthis.css.jq.mute.hide();
\t\t\t\t\tthis.css.jq.unmute.hide();
\t\t\t\t} else if(mute) {
\t\t\t\t\tthis.css.jq.mute.hide();
\t\t\t\t\tthis.css.jq.unmute.show();
\t\t\t\t} else {
\t\t\t\t\tthis.css.jq.mute.show();
\t\t\t\t\tthis.css.jq.unmute.hide();
\t\t\t\t}
\t\t\t}
\t\t},
\t\tvolume: function(v) {
\t\t\tv = this._limitValue(v, 0, 1);
\t\t\tthis.options.volume = v;

\t\t\tif(this.html.used) {
\t\t\t\tthis._html_volume(v);
\t\t\t}
\t\t\tif(this.flash.used) {
\t\t\t\tthis._flash_volume(v);
\t\t\t}

\t\t\t// The HTML solution generates this event from the media element itself.
\t\t\tif(!this.html.video.gate && !this.html.audio.gate) {
\t\t\t\tthis._updateVolume(v);
\t\t\t\tthis._trigger(\$.jPlayer.event.volumechange);
\t\t\t}
\t\t},
\t\tvolumeBar: function(e) { // Handles clicks on the volumeBar
\t\t\tif(this.css.jq.volumeBar.length) {
\t\t\t\t// Using \$(e.currentTarget) to enable multiple volume bars
\t\t\t\tvar \$bar = \$(e.currentTarget),
\t\t\t\t\toffset = \$bar.offset(),
\t\t\t\t\tx = e.pageX - offset.left,
\t\t\t\t\tw = \$bar.width(),
\t\t\t\t\ty = \$bar.height() - e.pageY + offset.top,
\t\t\t\t\th = \$bar.height();
\t\t\t\tif(this.options.verticalVolume) {
\t\t\t\t\tthis.volume(y/h);
\t\t\t\t} else {
\t\t\t\t\tthis.volume(x/w);
\t\t\t\t}
\t\t\t}
\t\t\tif(this.options.muted) {
\t\t\t\tthis._muted(false);
\t\t\t}
\t\t},
\t\tvolumeBarValue: function() { // Handles clicks on the volumeBarValue
\t\t\t// The volumeBar handles this event as the event propagates up the DOM.
\t\t},
\t\t_updateVolume: function(v) {
\t\t\tif(v === undefined) {
\t\t\t\tv = this.options.volume;
\t\t\t}
\t\t\tv = this.options.muted ? 0 : v;

\t\t\tif(this.status.noVolume) {
\t\t\t\tif(this.css.jq.volumeBar.length) {
\t\t\t\t\tthis.css.jq.volumeBar.hide();
\t\t\t\t}
\t\t\t\tif(this.css.jq.volumeBarValue.length) {
\t\t\t\t\tthis.css.jq.volumeBarValue.hide();
\t\t\t\t}
\t\t\t\tif(this.css.jq.volumeMax.length) {
\t\t\t\t\tthis.css.jq.volumeMax.hide();
\t\t\t\t}
\t\t\t} else {
\t\t\t\tif(this.css.jq.volumeBar.length) {
\t\t\t\t\tthis.css.jq.volumeBar.show();
\t\t\t\t}
\t\t\t\tif(this.css.jq.volumeBarValue.length) {
\t\t\t\t\tthis.css.jq.volumeBarValue.show();
\t\t\t\t\tthis.css.jq.volumeBarValue[this.options.verticalVolume ? \"height\" : \"width\"]((v*100)+\"%\");
\t\t\t\t}
\t\t\t\tif(this.css.jq.volumeMax.length) {
\t\t\t\t\tthis.css.jq.volumeMax.show();
\t\t\t\t}
\t\t\t}
\t\t},
\t\tvolumeMax: function() { // Handles clicks on the volume max
\t\t\tthis.volume(1);
\t\t\tif(this.options.muted) {
\t\t\t\tthis._muted(false);
\t\t\t}
\t\t},
\t\t_cssSelectorAncestor: function(ancestor) {
\t\t\tvar self = this;
\t\t\tthis.options.cssSelectorAncestor = ancestor;
\t\t\tthis._removeUiClass();
\t\t\tthis.ancestorJq = ancestor ? \$(ancestor) : []; // Would use \$() instead of [], but it is only 1.4+
\t\t\tif(ancestor && this.ancestorJq.length !== 1) { // So empty strings do not generate the warning.
\t\t\t\tthis._warning( {
\t\t\t\t\ttype: \$.jPlayer.warning.CSS_SELECTOR_COUNT,
\t\t\t\t\tcontext: ancestor,
\t\t\t\t\tmessage: \$.jPlayer.warningMsg.CSS_SELECTOR_COUNT + this.ancestorJq.length + \" found for cssSelectorAncestor.\",
\t\t\t\t\thint: \$.jPlayer.warningHint.CSS_SELECTOR_COUNT
\t\t\t\t});
\t\t\t}
\t\t\tthis._addUiClass();
\t\t\t\$.each(this.options.cssSelector, function(fn, cssSel) {
\t\t\t\tself._cssSelector(fn, cssSel);
\t\t\t});

\t\t\t// Set the GUI to the current state.
\t\t\tthis._updateInterface();
\t\t\tthis._updateButtons();
\t\t\tthis._updateAutohide();
\t\t\tthis._updateVolume();
\t\t\tthis._updateMute();
\t\t},
\t\t_cssSelector: function(fn, cssSel) {
\t\t\tvar self = this;
\t\t\tif(typeof cssSel === 'string') {
\t\t\t\tif(\$.jPlayer.prototype.options.cssSelector[fn]) {
\t\t\t\t\tif(this.css.jq[fn] && this.css.jq[fn].length) {
\t\t\t\t\t\tthis.css.jq[fn].unbind(\".jPlayer\");
\t\t\t\t\t}
\t\t\t\t\tthis.options.cssSelector[fn] = cssSel;
\t\t\t\t\tthis.css.cs[fn] = this.options.cssSelectorAncestor + \" \" + cssSel;

\t\t\t\t\tif(cssSel) { // Checks for empty string
\t\t\t\t\t\tthis.css.jq[fn] = \$(this.css.cs[fn]);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.css.jq[fn] = []; // To comply with the css.jq[fn].length check before its use. As of jQuery 1.4 could have used \$() for an empty set. 
\t\t\t\t\t}

\t\t\t\t\tif(this.css.jq[fn].length) {
\t\t\t\t\t\tvar handler = function(e) {
\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\tself[fn](e);
\t\t\t\t\t\t\t\$(this).blur();
\t\t\t\t\t\t};
\t\t\t\t\t\tthis.css.jq[fn].bind(\"click.jPlayer\", handler); // Using jPlayer namespace
\t\t\t\t\t}

\t\t\t\t\tif(cssSel && this.css.jq[fn].length !== 1) { // So empty strings do not generate the warning. ie., they just remove the old one.
\t\t\t\t\t\tthis._warning( {
\t\t\t\t\t\t\ttype: \$.jPlayer.warning.CSS_SELECTOR_COUNT,
\t\t\t\t\t\t\tcontext: this.css.cs[fn],
\t\t\t\t\t\t\tmessage: \$.jPlayer.warningMsg.CSS_SELECTOR_COUNT + this.css.jq[fn].length + \" found for \" + fn + \" method.\",
\t\t\t\t\t\t\thint: \$.jPlayer.warningHint.CSS_SELECTOR_COUNT
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tthis._warning( {
\t\t\t\t\t\ttype: \$.jPlayer.warning.CSS_SELECTOR_METHOD,
\t\t\t\t\t\tcontext: fn,
\t\t\t\t\t\tmessage: \$.jPlayer.warningMsg.CSS_SELECTOR_METHOD,
\t\t\t\t\t\thint: \$.jPlayer.warningHint.CSS_SELECTOR_METHOD
\t\t\t\t\t});
\t\t\t\t}
\t\t\t} else {
\t\t\t\tthis._warning( {
\t\t\t\t\ttype: \$.jPlayer.warning.CSS_SELECTOR_STRING,
\t\t\t\t\tcontext: cssSel,
\t\t\t\t\tmessage: \$.jPlayer.warningMsg.CSS_SELECTOR_STRING,
\t\t\t\t\thint: \$.jPlayer.warningHint.CSS_SELECTOR_STRING
\t\t\t\t});
\t\t\t}
\t\t},
\t\tseekBar: function(e) { // Handles clicks on the seekBar
\t\t\tif(this.css.jq.seekBar.length) {
\t\t\t\t// Using \$(e.currentTarget) to enable multiple seek bars
\t\t\t\tvar \$bar = \$(e.currentTarget),
\t\t\t\t\toffset = \$bar.offset(),
\t\t\t\t\tx = e.pageX - offset.left,
\t\t\t\t\tw = \$bar.width(),
\t\t\t\t\tp = 100 * x / w;
\t\t\t\tthis.playHead(p);
\t\t\t}
\t\t},
\t\tplayBar: function() { // Handles clicks on the playBar
\t\t\t// The seekBar handles this event as the event propagates up the DOM.
\t\t},
\t\trepeat: function() { // Handle clicks on the repeat button
\t\t\tthis._loop(true);
\t\t},
\t\trepeatOff: function() { // Handle clicks on the repeatOff button
\t\t\tthis._loop(false);
\t\t},
\t\t_loop: function(loop) {
\t\t\tif(this.options.loop !== loop) {
\t\t\t\tthis.options.loop = loop;
\t\t\t\tthis._updateButtons();
\t\t\t\tthis._trigger(\$.jPlayer.event.repeat);
\t\t\t}
\t\t},

\t\t// Plan to review the cssSelector method to cope with missing associated functions accordingly.

\t\tcurrentTime: function() { // Handles clicks on the text
\t\t\t// Added to avoid errors using cssSelector system for the text
\t\t},
\t\tduration: function() { // Handles clicks on the text
\t\t\t// Added to avoid errors using cssSelector system for the text
\t\t},
\t\tgui: function() { // Handles clicks on the gui
\t\t\t// Added to avoid errors using cssSelector system for the gui
\t\t},
\t\tnoSolution: function() { // Handles clicks on the error message
\t\t\t// Added to avoid errors using cssSelector system for no-solution
\t\t},

\t\t// Options code adapted from ui.widget.js (1.8.7).  Made changes so the key can use dot notation. To match previous getData solution in jPlayer 1.
\t\toption: function(key, value) {
\t\t\tvar options = key;

\t\t\t // Enables use: options().  Returns a copy of options object
\t\t\tif ( arguments.length === 0 ) {
\t\t\t\treturn \$.extend( true, {}, this.options );
\t\t\t}

\t\t\tif(typeof key === \"string\") {
\t\t\t\tvar keys = key.split(\".\");

\t\t\t\t // Enables use: options(\"someOption\")  Returns a copy of the option. Supports dot notation.
\t\t\t\tif(value === undefined) {

\t\t\t\t\tvar opt = \$.extend(true, {}, this.options);
\t\t\t\t\tfor(var i = 0; i < keys.length; i++) {
\t\t\t\t\t\tif(opt[keys[i]] !== undefined) {
\t\t\t\t\t\t\topt = opt[keys[i]];
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tthis._warning( {
\t\t\t\t\t\t\t\ttype: \$.jPlayer.warning.OPTION_KEY,
\t\t\t\t\t\t\t\tcontext: key,
\t\t\t\t\t\t\t\tmessage: \$.jPlayer.warningMsg.OPTION_KEY,
\t\t\t\t\t\t\t\thint: \$.jPlayer.warningHint.OPTION_KEY
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\treturn undefined;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\treturn opt;
\t\t\t\t}

\t\t\t\t // Enables use: options(\"someOptionObject\", someObject}).  Creates: {someOptionObject:someObject}
\t\t\t\t // Enables use: options(\"someOption\", someValue).  Creates: {someOption:someValue}
\t\t\t\t // Enables use: options(\"someOptionObject.someOption\", someValue).  Creates: {someOptionObject:{someOption:someValue}}

\t\t\t\toptions = {};
\t\t\t\tvar opts = options;

\t\t\t\tfor(var j = 0; j < keys.length; j++) {
\t\t\t\t\tif(j < keys.length - 1) {
\t\t\t\t\t\topts[keys[j]] = {};
\t\t\t\t\t\topts = opts[keys[j]];
\t\t\t\t\t} else {
\t\t\t\t\t\topts[keys[j]] = value;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t // Otherwise enables use: options(optionObject).  Uses original object (the key)

\t\t\tthis._setOptions(options);

\t\t\treturn this;
\t\t},
\t\t_setOptions: function(options) {
\t\t\tvar self = this;
\t\t\t\$.each(options, function(key, value) { // This supports the 2 level depth that the options of jPlayer has. Would review if we ever need more depth.
\t\t\t\tself._setOption(key, value);
\t\t\t});

\t\t\treturn this;
\t\t},
\t\t_setOption: function(key, value) {
\t\t\tvar self = this;

\t\t\t// The ability to set options is limited at this time.

\t\t\tswitch(key) {
\t\t\t\tcase \"volume\" :
\t\t\t\t\tthis.volume(value);
\t\t\t\t\tbreak;
\t\t\t\tcase \"muted\" :
\t\t\t\t\tthis._muted(value);
\t\t\t\t\tbreak;
\t\t\t\tcase \"cssSelectorAncestor\" :
\t\t\t\t\tthis._cssSelectorAncestor(value); // Set and refresh all associations for the new ancestor.
\t\t\t\t\tbreak;
\t\t\t\tcase \"cssSelector\" :
\t\t\t\t\t\$.each(value, function(fn, cssSel) {
\t\t\t\t\t\tself._cssSelector(fn, cssSel); // NB: The option is set inside this function, after further validity checks.
\t\t\t\t\t});
\t\t\t\t\tbreak;
\t\t\t\tcase \"fullScreen\" :
\t\t\t\t\tif(this.options[key] !== value) { // if changed
\t\t\t\t\t\tvar wkv = \$.jPlayer.nativeFeatures.fullscreen.used.webkitVideo;
\t\t\t\t\t\tif(!wkv || wkv && !this.status.waitForPlay) {
\t\t\t\t\t\t\tif(!wkv) { // No sensible way to unset option on these devices.
\t\t\t\t\t\t\t\tthis.options[key] = value;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(value) {
\t\t\t\t\t\t\t\tthis._requestFullscreen();
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tthis._exitFullscreen();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(!wkv) {
\t\t\t\t\t\t\t\tthis._setOption(\"fullWindow\", value);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase \"fullWindow\" :
\t\t\t\t\tif(this.options[key] !== value) { // if changed
\t\t\t\t\t\tthis._removeUiClass();
\t\t\t\t\t\tthis.options[key] = value;
\t\t\t\t\t\tthis._refreshSize();
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase \"size\" :
\t\t\t\t\tif(!this.options.fullWindow && this.options[key].cssClass !== value.cssClass) {
\t\t\t\t\t\tthis._removeUiClass();
\t\t\t\t\t}
\t\t\t\t\tthis.options[key] = \$.extend({}, this.options[key], value); // store a merged copy of it, incase not all properties changed.
\t\t\t\t\tthis._refreshSize();
\t\t\t\t\tbreak;
\t\t\t\tcase \"sizeFull\" :
\t\t\t\t\tif(this.options.fullWindow && this.options[key].cssClass !== value.cssClass) {
\t\t\t\t\t\tthis._removeUiClass();
\t\t\t\t\t}
\t\t\t\t\tthis.options[key] = \$.extend({}, this.options[key], value); // store a merged copy of it, incase not all properties changed.
\t\t\t\t\tthis._refreshSize();
\t\t\t\t\tbreak;
\t\t\t\tcase \"autohide\" :
\t\t\t\t\tthis.options[key] = \$.extend({}, this.options[key], value); // store a merged copy of it, incase not all properties changed.
\t\t\t\t\tthis._updateAutohide();
\t\t\t\t\tbreak;
\t\t\t\tcase \"loop\" :
\t\t\t\t\tthis._loop(value);
\t\t\t\t\tbreak;
\t\t\t\tcase \"nativeVideoControls\" :
\t\t\t\t\tthis.options[key] = \$.extend({}, this.options[key], value); // store a merged copy of it, incase not all properties changed.
\t\t\t\t\tthis.status.nativeVideoControls = this._uaBlocklist(this.options.nativeVideoControls);
\t\t\t\t\tthis._restrictNativeVideoControls();
\t\t\t\t\tthis._updateNativeVideoControls();
\t\t\t\t\tbreak;
\t\t\t\tcase \"noFullWindow\" :
\t\t\t\t\tthis.options[key] = \$.extend({}, this.options[key], value); // store a merged copy of it, incase not all properties changed.
\t\t\t\t\tthis.status.nativeVideoControls = this._uaBlocklist(this.options.nativeVideoControls); // Need to check again as noFullWindow can depend on this flag and the restrict() can override it.
\t\t\t\t\tthis.status.noFullWindow = this._uaBlocklist(this.options.noFullWindow);
\t\t\t\t\tthis._restrictNativeVideoControls();
\t\t\t\t\tthis._updateButtons();
\t\t\t\t\tbreak;
\t\t\t\tcase \"noVolume\" :
\t\t\t\t\tthis.options[key] = \$.extend({}, this.options[key], value); // store a merged copy of it, incase not all properties changed.
\t\t\t\t\tthis.status.noVolume = this._uaBlocklist(this.options.noVolume);
\t\t\t\t\tthis._updateVolume();
\t\t\t\t\tthis._updateMute();
\t\t\t\t\tbreak;
\t\t\t\tcase \"emulateHtml\" :
\t\t\t\t\tif(this.options[key] !== value) { // To avoid multiple event handlers being created, if true already.
\t\t\t\t\t\tthis.options[key] = value;
\t\t\t\t\t\tif(value) {
\t\t\t\t\t\t\tthis._emulateHtmlBridge();
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tthis._destroyHtmlBridge();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase \"timeFormat\" :
\t\t\t\t\tthis.options[key] = \$.extend({}, this.options[key], value); // store a merged copy of it, incase not all properties changed.
\t\t\t\t\tbreak;
\t\t\t\tcase \"keyEnabled\" :
\t\t\t\t\tthis.options[key] = value;
\t\t\t\t\tif(!value && this === \$.jPlayer.focus) {
\t\t\t\t\t\t\$.jPlayer.focus = null;
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase \"keyBindings\" :
\t\t\t\t\tthis.options[key] = \$.extend(true, {}, this.options[key], value); // store a merged DEEP copy of it, incase not all properties changed.
\t\t\t\t\tbreak;
\t\t\t\tcase \"audioFullScreen\" :
\t\t\t\t\tthis.options[key] = value;
\t\t\t\t\tbreak;
\t\t\t}

\t\t\treturn this;
\t\t},
\t\t// End of: (Options code adapted from ui.widget.js)

\t\t_refreshSize: function() {
\t\t\tthis._setSize(); // update status and jPlayer element size
\t\t\tthis._addUiClass(); // update the ui class
\t\t\tthis._updateSize(); // update internal sizes
\t\t\tthis._updateButtons();
\t\t\tthis._updateAutohide();
\t\t\tthis._trigger(\$.jPlayer.event.resize);
\t\t},
\t\t_setSize: function() {
\t\t\t// Determine the current size from the options
\t\t\tif(this.options.fullWindow) {
\t\t\t\tthis.status.width = this.options.sizeFull.width;
\t\t\t\tthis.status.height = this.options.sizeFull.height;
\t\t\t\tthis.status.cssClass = this.options.sizeFull.cssClass;
\t\t\t} else {
\t\t\t\tthis.status.width = this.options.size.width;
\t\t\t\tthis.status.height = this.options.size.height;
\t\t\t\tthis.status.cssClass = this.options.size.cssClass;
\t\t\t}

\t\t\t// Set the size of the jPlayer area.
\t\t\tthis.element.css({'width': this.status.width, 'height': this.status.height});
\t\t},
\t\t_addUiClass: function() {
\t\t\tif(this.ancestorJq.length) {
\t\t\t\tthis.ancestorJq.addClass(this.status.cssClass);
\t\t\t}
\t\t},
\t\t_removeUiClass: function() {
\t\t\tif(this.ancestorJq.length) {
\t\t\t\tthis.ancestorJq.removeClass(this.status.cssClass);
\t\t\t}
\t\t},
\t\t_updateSize: function() {
\t\t\t// The poster uses show/hide so can simply resize it.
\t\t\tthis.internal.poster.jq.css({'width': this.status.width, 'height': this.status.height});

\t\t\t// Video html or flash resized if necessary at this time, or if native video controls being used.
\t\t\tif(!this.status.waitForPlay && this.html.active && this.status.video || this.html.video.available && this.html.used && this.status.nativeVideoControls) {
\t\t\t\tthis.internal.video.jq.css({'width': this.status.width, 'height': this.status.height});
\t\t\t}
\t\t\telse if(!this.status.waitForPlay && this.flash.active && this.status.video) {
\t\t\t\tthis.internal.flash.jq.css({'width': this.status.width, 'height': this.status.height});
\t\t\t}
\t\t},
\t\t_updateAutohide: function() {
\t\t\tvar\tself = this,
\t\t\t\tevent = \"mousemove.jPlayer\",
\t\t\t\tnamespace = \".jPlayerAutohide\",
\t\t\t\teventType = event + namespace,
\t\t\t\thandler = function() {
\t\t\t\t\tself.css.jq.gui.fadeIn(self.options.autohide.fadeIn, function() {
\t\t\t\t\t\tclearTimeout(self.internal.autohideId);
\t\t\t\t\t\tself.internal.autohideId = setTimeout( function() {
\t\t\t\t\t\t\tself.css.jq.gui.fadeOut(self.options.autohide.fadeOut);
\t\t\t\t\t\t}, self.options.autohide.hold);
\t\t\t\t\t});
\t\t\t\t};

\t\t\tif(this.css.jq.gui.length) {

\t\t\t\t// End animations first so that its callback is executed now.
\t\t\t\t// Otherwise an in progress fadeIn animation still has the callback to fadeOut again.
\t\t\t\tthis.css.jq.gui.stop(true, true);

\t\t\t\t// Removes the fadeOut operation from the fadeIn callback.
\t\t\t\tclearTimeout(this.internal.autohideId);

\t\t\t\tthis.element.unbind(namespace);
\t\t\t\tthis.css.jq.gui.unbind(namespace);

\t\t\t\tif(!this.status.nativeVideoControls) {
\t\t\t\t\tif(this.options.fullWindow && this.options.autohide.full || !this.options.fullWindow && this.options.autohide.restored) {
\t\t\t\t\t\tthis.element.bind(eventType, handler);
\t\t\t\t\t\tthis.css.jq.gui.bind(eventType, handler);
\t\t\t\t\t\tthis.css.jq.gui.hide();
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.css.jq.gui.show();
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tthis.css.jq.gui.hide();
\t\t\t\t}
\t\t\t}
\t\t},
\t\tfullScreen: function() {
\t\t\tthis._setOption(\"fullScreen\", true);
\t\t},
\t\trestoreScreen: function() {
\t\t\tthis._setOption(\"fullScreen\", false);
\t\t},
\t\t_fullscreenAddEventListeners: function() {
\t\t\tvar self = this,
\t\t\t\tfs = \$.jPlayer.nativeFeatures.fullscreen;

\t\t\tif(fs.api.fullscreenEnabled) {
\t\t\t\tif(fs.event.fullscreenchange) {
\t\t\t\t\t// Create the event handler function and store it for removal.
\t\t\t\t\tif(typeof this.internal.fullscreenchangeHandler !== 'function') {
\t\t\t\t\t\tthis.internal.fullscreenchangeHandler = function() {
\t\t\t\t\t\t\tself._fullscreenchange();
\t\t\t\t\t\t};
\t\t\t\t\t}
\t\t\t\t\tdocument.addEventListener(fs.event.fullscreenchange, this.internal.fullscreenchangeHandler, false);
\t\t\t\t}
\t\t\t\t// No point creating handler for fullscreenerror.
\t\t\t\t// Either logic avoids fullscreen occurring (w3c/moz), or their is no event on the browser (webkit).
\t\t\t}
\t\t},
\t\t_fullscreenRemoveEventListeners: function() {
\t\t\tvar fs = \$.jPlayer.nativeFeatures.fullscreen;
\t\t\tif(this.internal.fullscreenchangeHandler) {
\t\t\t\tdocument.addEventListener(fs.event.fullscreenchange, this.internal.fullscreenchangeHandler, false);
\t\t\t}
\t\t},
\t\t_fullscreenchange: function() {
\t\t\t// If nothing is fullscreen, then we cannot be in fullscreen mode.
\t\t\tif(this.options.fullScreen && !\$.jPlayer.nativeFeatures.fullscreen.api.fullscreenElement()) {
\t\t\t\tthis._setOption(\"fullScreen\", false);
\t\t\t}
\t\t},
\t\t_requestFullscreen: function() {
\t\t\t// Either the container or the jPlayer div
\t\t\tvar e = this.ancestorJq.length ? this.ancestorJq[0] : this.element[0],
\t\t\t\tfs = \$.jPlayer.nativeFeatures.fullscreen;

\t\t\t// This method needs the video element. For iOS and Android.
\t\t\tif(fs.used.webkitVideo) {
\t\t\t\te = this.htmlElement.video;
\t\t\t}

\t\t\tif(fs.api.fullscreenEnabled) {
\t\t\t\tfs.api.requestFullscreen(e);
\t\t\t}
\t\t},
\t\t_exitFullscreen: function() {

\t\t\tvar fs = \$.jPlayer.nativeFeatures.fullscreen,
\t\t\t\te;

\t\t\t// This method needs the video element. For iOS and Android.
\t\t\tif(fs.used.webkitVideo) {
\t\t\t\te = this.htmlElement.video;
\t\t\t}

\t\t\tif(fs.api.fullscreenEnabled) {
\t\t\t\tfs.api.exitFullscreen(e);
\t\t\t}
\t\t},
\t\t_html_initMedia: function(media) {
\t\t\t// Remove any existing track elements
\t\t\tvar \$media = \$(this.htmlElement.media).empty();

\t\t\t// Create any track elements given with the media, as an Array of track Objects.
\t\t\t\$.each(media.track || [], function(i,v) {
\t\t\t\tvar track = document.createElement('track');
\t\t\t\ttrack.setAttribute(\"kind\", v.kind ? v.kind : \"\");
\t\t\t\ttrack.setAttribute(\"src\", v.src ? v.src : \"\");
\t\t\t\ttrack.setAttribute(\"srclang\", v.srclang ? v.srclang : \"\");
\t\t\t\ttrack.setAttribute(\"label\", v.label ? v.label : \"\");
\t\t\t\tif(v.def) {
\t\t\t\t\ttrack.setAttribute(\"default\", v.def);
\t\t\t\t}
\t\t\t\t\$media.append(track);
\t\t\t});

\t\t\tthis.htmlElement.media.src = this.status.src;

\t\t\tif(this.options.preload !== 'none') {
\t\t\t\tthis._html_load(); // See function for comments
\t\t\t}
\t\t\tthis._trigger(\$.jPlayer.event.timeupdate); // The flash generates this event for its solution.
\t\t},
\t\t_html_setFormat: function(media) {
\t\t\tvar self = this;
\t\t\t// Always finds a format due to checks in setMedia()
\t\t\t\$.each(this.formats, function(priority, format) {
\t\t\t\tif(self.html.support[format] && media[format]) {
\t\t\t\t\tself.status.src = media[format];
\t\t\t\t\tself.status.format[format] = true;
\t\t\t\t\tself.status.formatType = format;
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t});
\t\t},
\t\t_html_setAudio: function(media) {
\t\t\tthis._html_setFormat(media);
\t\t\tthis.htmlElement.media = this.htmlElement.audio;
\t\t\tthis._html_initMedia(media);
\t\t},
\t\t_html_setVideo: function(media) {
\t\t\tthis._html_setFormat(media);
\t\t\tif(this.status.nativeVideoControls) {
\t\t\t\tthis.htmlElement.video.poster = this._validString(media.poster) ? media.poster : \"\";
\t\t\t}
\t\t\tthis.htmlElement.media = this.htmlElement.video;
\t\t\tthis._html_initMedia(media);
\t\t},
\t\t_html_resetMedia: function() {
\t\t\tif(this.htmlElement.media) {
\t\t\t\tif(this.htmlElement.media.id === this.internal.video.id && !this.status.nativeVideoControls) {
\t\t\t\t\tthis.internal.video.jq.css({'width':'0px', 'height':'0px'});
\t\t\t\t}
\t\t\t\tthis.htmlElement.media.pause();
\t\t\t}
\t\t},
\t\t_html_clearMedia: function() {
\t\t\tif(this.htmlElement.media) {
\t\t\t\tthis.htmlElement.media.src = \"about:blank\";
\t\t\t\t// The following load() is only required for Firefox 3.6 (PowerMacs).
\t\t\t\t// Recent HTMl5 browsers only require the src change. Due to changes in W3C spec and load() effect.
\t\t\t\tthis.htmlElement.media.load(); // Stops an old, \"in progress\" download from continuing the download. Triggers the loadstart, error and emptied events, due to the empty src. Also an abort event if a download was in progress.
\t\t\t}
\t\t},
\t\t_html_load: function() {
\t\t\t// This function remains to allow the early HTML5 browsers to work, such as Firefox 3.6
\t\t\t// A change in the W3C spec for the media.load() command means that this is no longer necessary.
\t\t\t// This command should be removed and actually causes minor undesirable effects on some browsers. Such as loading the whole file and not only the metadata.
\t\t\tif(this.status.waitForLoad) {
\t\t\t\tthis.status.waitForLoad = false;
\t\t\t\tthis.htmlElement.media.load();
\t\t\t}
\t\t\tclearTimeout(this.internal.htmlDlyCmdId);
\t\t},
\t\t_html_play: function(time) {
\t\t\tvar self = this,
\t\t\t\tmedia = this.htmlElement.media;

\t\t\tthis._html_load(); // Loads if required and clears any delayed commands.

\t\t\tif(!isNaN(time)) {

\t\t\t\t// Attempt to play it, since iOS has been ignoring commands
\t\t\t\tif(this.internal.cmdsIgnored) {
\t\t\t\t\tmedia.play();
\t\t\t\t}

\t\t\t\ttry {
\t\t\t\t\t// !media.seekable is for old HTML5 browsers, like Firefox 3.6.
\t\t\t\t\t// Checking seekable.length is important for iOS6 to work with setMedia().play(time)
\t\t\t\t\tif(!media.seekable || typeof media.seekable === \"object\" && media.seekable.length > 0) {
\t\t\t\t\t\tmedia.currentTime = time;
\t\t\t\t\t\tmedia.play();
\t\t\t\t\t} else {
\t\t\t\t\t\tthrow 1;
\t\t\t\t\t}
\t\t\t\t} catch(err) {
\t\t\t\t\tthis.internal.htmlDlyCmdId = setTimeout(function() {
\t\t\t\t\t\tself.play(time);
\t\t\t\t\t}, 250);
\t\t\t\t\treturn; // Cancel execution and wait for the delayed command.
\t\t\t\t}
\t\t\t} else {
\t\t\t\tmedia.play();
\t\t\t}
\t\t\tthis._html_checkWaitForPlay();
\t\t},
\t\t_html_pause: function(time) {
\t\t\tvar self = this,
\t\t\t\tmedia = this.htmlElement.media;
\t\t\t
\t\t\tif(time > 0) { // We do not want the stop() command, which does pause(0), causing a load operation.
\t\t\t\tthis._html_load(); // Loads if required and clears any delayed commands.
\t\t\t} else {
\t\t\t\tclearTimeout(this.internal.htmlDlyCmdId);
\t\t\t}

\t\t\t// Order of these commands is important for Safari (Win) and IE9. Pause then change currentTime.
\t\t\tmedia.pause();

\t\t\tif(!isNaN(time)) {
\t\t\t\ttry {
\t\t\t\t\tif(!media.seekable || typeof media.seekable === \"object\" && media.seekable.length > 0) {
\t\t\t\t\t\tmedia.currentTime = time;
\t\t\t\t\t} else {
\t\t\t\t\t\tthrow 1;
\t\t\t\t\t}
\t\t\t\t} catch(err) {
\t\t\t\t\tthis.internal.htmlDlyCmdId = setTimeout(function() {
\t\t\t\t\t\tself.pause(time);
\t\t\t\t\t}, 250);
\t\t\t\t\treturn; // Cancel execution and wait for the delayed command.
\t\t\t\t}
\t\t\t}
\t\t\tif(time > 0) { // Avoids a setMedia() followed by stop() or pause(0) hiding the video play button.
\t\t\t\tthis._html_checkWaitForPlay();
\t\t\t}
\t\t},
\t\t_html_playHead: function(percent) {
\t\t\tvar self = this,
\t\t\t\tmedia = this.htmlElement.media;

\t\t\tthis._html_load(); // Loads if required and clears any delayed commands.

\t\t\ttry {
\t\t\t\tif(typeof media.seekable === \"object\" && media.seekable.length > 0) {
\t\t\t\t\tmedia.currentTime = percent * media.seekable.end(media.seekable.length-1) / 100;
\t\t\t\t} else if(media.duration > 0 && !isNaN(media.duration)) {
\t\t\t\t\tmedia.currentTime = percent * media.duration / 100;
\t\t\t\t} else {
\t\t\t\t\tthrow \"e\";
\t\t\t\t}
\t\t\t} catch(err) {
\t\t\t\tthis.internal.htmlDlyCmdId = setTimeout(function() {
\t\t\t\t\tself.playHead(percent);
\t\t\t\t}, 250);
\t\t\t\treturn; // Cancel execution and wait for the delayed command.
\t\t\t}
\t\t\tif(!this.status.waitForLoad) {
\t\t\t\tthis._html_checkWaitForPlay();
\t\t\t}
\t\t},
\t\t_html_checkWaitForPlay: function() {
\t\t\tif(this.status.waitForPlay) {
\t\t\t\tthis.status.waitForPlay = false;
\t\t\t\tif(this.css.jq.videoPlay.length) {
\t\t\t\t\tthis.css.jq.videoPlay.hide();
\t\t\t\t}
\t\t\t\tif(this.status.video) {
\t\t\t\t\tthis.internal.poster.jq.hide();
\t\t\t\t\tthis.internal.video.jq.css({'width': this.status.width, 'height': this.status.height});
\t\t\t\t}
\t\t\t}
\t\t},
\t\t_html_volume: function(v) {
\t\t\tif(this.html.audio.available) {
\t\t\t\tthis.htmlElement.audio.volume = v;
\t\t\t}
\t\t\tif(this.html.video.available) {
\t\t\t\tthis.htmlElement.video.volume = v;
\t\t\t}
\t\t},
\t\t_html_mute: function(m) {
\t\t\tif(this.html.audio.available) {
\t\t\t\tthis.htmlElement.audio.muted = m;
\t\t\t}
\t\t\tif(this.html.video.available) {
\t\t\t\tthis.htmlElement.video.muted = m;
\t\t\t}
\t\t},
\t\t_flash_setAudio: function(media) {
\t\t\tvar self = this;
\t\t\ttry {
\t\t\t\t// Always finds a format due to checks in setMedia()
\t\t\t\t\$.each(this.formats, function(priority, format) {
\t\t\t\t\tif(self.flash.support[format] && media[format]) {
\t\t\t\t\t\tswitch (format) {
\t\t\t\t\t\t\tcase \"m4a\" :
\t\t\t\t\t\t\tcase \"fla\" :
\t\t\t\t\t\t\t\tself._getMovie().fl_setAudio_m4a(media[format]);
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"mp3\" :
\t\t\t\t\t\t\t\tself._getMovie().fl_setAudio_mp3(media[format]);
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"rtmpa\":
\t\t\t\t\t\t\t\tself._getMovie().fl_setAudio_rtmp(media[format]);
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t\tself.status.src = media[format];
\t\t\t\t\t\tself.status.format[format] = true;
\t\t\t\t\t\tself.status.formatType = format;
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tif(this.options.preload === 'auto') {
\t\t\t\t\tthis._flash_load();
\t\t\t\t\tthis.status.waitForLoad = false;
\t\t\t\t}
\t\t\t} catch(err) { this._flashError(err); }
\t\t},
\t\t_flash_setVideo: function(media) {
\t\t\tvar self = this;
\t\t\ttry {
\t\t\t\t// Always finds a format due to checks in setMedia()
\t\t\t\t\$.each(this.formats, function(priority, format) {
\t\t\t\t\tif(self.flash.support[format] && media[format]) {
\t\t\t\t\t\tswitch (format) {
\t\t\t\t\t\t\tcase \"m4v\" :
\t\t\t\t\t\t\tcase \"flv\" :
\t\t\t\t\t\t\t\tself._getMovie().fl_setVideo_m4v(media[format]);
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"rtmpv\":
\t\t\t\t\t\t\t\tself._getMovie().fl_setVideo_rtmp(media[format]);
\t\t\t\t\t\t\t\tbreak;\t\t
\t\t\t\t\t\t}
\t\t\t\t\t\tself.status.src = media[format];
\t\t\t\t\t\tself.status.format[format] = true;
\t\t\t\t\t\tself.status.formatType = format;
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tif(this.options.preload === 'auto') {
\t\t\t\t\tthis._flash_load();
\t\t\t\t\tthis.status.waitForLoad = false;
\t\t\t\t}
\t\t\t} catch(err) { this._flashError(err); }
\t\t},
\t\t_flash_resetMedia: function() {
\t\t\tthis.internal.flash.jq.css({'width':'0px', 'height':'0px'}); // Must do via CSS as setting attr() to zero causes a jQuery error in IE.
\t\t\tthis._flash_pause(NaN);
\t\t},
\t\t_flash_clearMedia: function() {
\t\t\ttry {
\t\t\t\tthis._getMovie().fl_clearMedia();
\t\t\t} catch(err) { this._flashError(err); }
\t\t},
\t\t_flash_load: function() {
\t\t\ttry {
\t\t\t\tthis._getMovie().fl_load();
\t\t\t} catch(err) { this._flashError(err); }
\t\t\tthis.status.waitForLoad = false;
\t\t},
\t\t_flash_play: function(time) {
\t\t\ttry {
\t\t\t\tthis._getMovie().fl_play(time);
\t\t\t} catch(err) { this._flashError(err); }
\t\t\tthis.status.waitForLoad = false;
\t\t\tthis._flash_checkWaitForPlay();
\t\t},
\t\t_flash_pause: function(time) {
\t\t\ttry {
\t\t\t\tthis._getMovie().fl_pause(time);
\t\t\t} catch(err) { this._flashError(err); }
\t\t\tif(time > 0) { // Avoids a setMedia() followed by stop() or pause(0) hiding the video play button.
\t\t\t\tthis.status.waitForLoad = false;
\t\t\t\tthis._flash_checkWaitForPlay();
\t\t\t}
\t\t},
\t\t_flash_playHead: function(p) {
\t\t\ttry {
\t\t\t\tthis._getMovie().fl_play_head(p);
\t\t\t} catch(err) { this._flashError(err); }
\t\t\tif(!this.status.waitForLoad) {
\t\t\t\tthis._flash_checkWaitForPlay();
\t\t\t}
\t\t},
\t\t_flash_checkWaitForPlay: function() {
\t\t\tif(this.status.waitForPlay) {
\t\t\t\tthis.status.waitForPlay = false;
\t\t\t\tif(this.css.jq.videoPlay.length) {
\t\t\t\t\tthis.css.jq.videoPlay.hide();
\t\t\t\t}
\t\t\t\tif(this.status.video) {
\t\t\t\t\tthis.internal.poster.jq.hide();
\t\t\t\t\tthis.internal.flash.jq.css({'width': this.status.width, 'height': this.status.height});
\t\t\t\t}
\t\t\t}
\t\t},
\t\t_flash_volume: function(v) {
\t\t\ttry {
\t\t\t\tthis._getMovie().fl_volume(v);
\t\t\t} catch(err) { this._flashError(err); }
\t\t},
\t\t_flash_mute: function(m) {
\t\t\ttry {
\t\t\t\tthis._getMovie().fl_mute(m);
\t\t\t} catch(err) { this._flashError(err); }
\t\t},
\t\t_getMovie: function() {
\t\t\treturn document[this.internal.flash.id];
\t\t},
\t\t_getFlashPluginVersion: function() {

\t\t\t// _getFlashPluginVersion() code influenced by:
\t\t\t// - FlashReplace 1.01: http://code.google.com/p/flashreplace/
\t\t\t// - SWFObject 2.2: http://code.google.com/p/swfobject/

\t\t\tvar version = 0,
\t\t\t\tflash;
\t\t\tif(window.ActiveXObject) {
\t\t\t\ttry {
\t\t\t\t\tflash = new ActiveXObject(\"ShockwaveFlash.ShockwaveFlash\");
\t\t\t\t\tif (flash) { // flash will return null when ActiveX is disabled
\t\t\t\t\t\tvar v = flash.GetVariable(\"\$version\");
\t\t\t\t\t\tif(v) {
\t\t\t\t\t\t\tv = v.split(\" \")[1].split(\",\");
\t\t\t\t\t\t\tversion = parseInt(v[0], 10) + \".\" + parseInt(v[1], 10);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} catch(e) {}
\t\t\t}
\t\t\telse if(navigator.plugins && navigator.mimeTypes.length > 0) {
\t\t\t\tflash = navigator.plugins[\"Shockwave Flash\"];
\t\t\t\tif(flash) {
\t\t\t\t\tversion = navigator.plugins[\"Shockwave Flash\"].description.replace(/.*\\s(\\d+\\.\\d+).*/, \"\$1\");
\t\t\t\t}
\t\t\t}
\t\t\treturn version * 1; // Converts to a number
\t\t},
\t\t_checkForFlash: function (version) {
\t\t\tvar flashOk = false;
\t\t\tif(this._getFlashPluginVersion() >= version) {
\t\t\t\tflashOk = true;
\t\t\t}
\t\t\treturn flashOk;
\t\t},
\t\t_validString: function(url) {
\t\t\treturn (url && typeof url === \"string\"); // Empty strings return false
\t\t},
\t\t_limitValue: function(value, min, max) {
\t\t\treturn (value < min) ? min : ((value > max) ? max : value);
\t\t},
\t\t_urlNotSetError: function(context) {
\t\t\tthis._error( {
\t\t\t\ttype: \$.jPlayer.error.URL_NOT_SET,
\t\t\t\tcontext: context,
\t\t\t\tmessage: \$.jPlayer.errorMsg.URL_NOT_SET,
\t\t\t\thint: \$.jPlayer.errorHint.URL_NOT_SET
\t\t\t});
\t\t},
\t\t_flashError: function(error) {
\t\t\tvar errorType;
\t\t\tif(!this.internal.ready) {
\t\t\t\terrorType = \"FLASH\";
\t\t\t} else {
\t\t\t\terrorType = \"FLASH_DISABLED\";
\t\t\t}
\t\t\tthis._error( {
\t\t\t\ttype: \$.jPlayer.error[errorType],
\t\t\t\tcontext: this.internal.flash.swf,
\t\t\t\tmessage: \$.jPlayer.errorMsg[errorType] + error.message,
\t\t\t\thint: \$.jPlayer.errorHint[errorType]
\t\t\t});
\t\t\t// Allow the audio player to recover if display:none and then shown again, or with position:fixed on Firefox.
\t\t\t// This really only affects audio in a media player, as an audio player could easily move the jPlayer element away from such issues.
\t\t\tthis.internal.flash.jq.css({'width':'1px', 'height':'1px'});
\t\t},
\t\t_error: function(error) {
\t\t\tthis._trigger(\$.jPlayer.event.error, error);
\t\t\tif(this.options.errorAlerts) {
\t\t\t\tthis._alert(\"Error!\" + (error.message ? \"\\n\\n\" + error.message : \"\") + (error.hint ? \"\\n\\n\" + error.hint : \"\") + \"\\n\\nContext: \" + error.context);
\t\t\t}
\t\t},
\t\t_warning: function(warning) {
\t\t\tthis._trigger(\$.jPlayer.event.warning, undefined, warning);
\t\t\tif(this.options.warningAlerts) {
\t\t\t\tthis._alert(\"Warning!\" + (warning.message ? \"\\n\\n\" + warning.message : \"\") + (warning.hint ? \"\\n\\n\" + warning.hint : \"\") + \"\\n\\nContext: \" + warning.context);
\t\t\t}
\t\t},
\t\t_alert: function(message) {
\t\t\talert(\"jPlayer \" + this.version.script + \" : id='\" + this.internal.self.id +\"' : \" + message);
\t\t},
\t\t_emulateHtmlBridge: function() {
\t\t\tvar self = this;

\t\t\t// Emulate methods on jPlayer's DOM element.
\t\t\t\$.each( \$.jPlayer.emulateMethods.split(/\\s+/g), function(i, name) {
\t\t\t\tself.internal.domNode[name] = function(arg) {
\t\t\t\t\tself[name](arg);
\t\t\t\t};

\t\t\t});

\t\t\t// Bubble jPlayer events to its DOM element.
\t\t\t\$.each(\$.jPlayer.event, function(eventName,eventType) {
\t\t\t\tvar nativeEvent = true;
\t\t\t\t\$.each( \$.jPlayer.reservedEvent.split(/\\s+/g), function(i, name) {
\t\t\t\t\tif(name === eventName) {
\t\t\t\t\t\tnativeEvent = false;
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tif(nativeEvent) {
\t\t\t\t\tself.element.bind(eventType + \".jPlayer.jPlayerHtml\", function() { // With .jPlayer & .jPlayerHtml namespaces.
\t\t\t\t\t\tself._emulateHtmlUpdate();
\t\t\t\t\t\tvar domEvent = document.createEvent(\"Event\");
\t\t\t\t\t\tdomEvent.initEvent(eventName, false, true);
\t\t\t\t\t\tself.internal.domNode.dispatchEvent(domEvent);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\t// The error event would require a special case
\t\t\t});

\t\t\t// IE9 has a readyState property on all elements. The document should have it, but all (except media) elements inherit it in IE9. This conflicts with Popcorn, which polls the readyState.
\t\t},
\t\t_emulateHtmlUpdate: function() {
\t\t\tvar self = this;

\t\t\t\$.each( \$.jPlayer.emulateStatus.split(/\\s+/g), function(i, name) {
\t\t\t\tself.internal.domNode[name] = self.status[name];
\t\t\t});
\t\t\t\$.each( \$.jPlayer.emulateOptions.split(/\\s+/g), function(i, name) {
\t\t\t\tself.internal.domNode[name] = self.options[name];
\t\t\t});
\t\t},
\t\t_destroyHtmlBridge: function() {
\t\t\tvar self = this;

\t\t\t// Bridge event handlers are also removed by destroy() through .jPlayer namespace.
\t\t\tthis.element.unbind(\".jPlayerHtml\"); // Remove all event handlers created by the jPlayer bridge. So you can change the emulateHtml option.

\t\t\t// Remove the methods and properties
\t\t\tvar emulated = \$.jPlayer.emulateMethods + \" \" + \$.jPlayer.emulateStatus + \" \" + \$.jPlayer.emulateOptions;
\t\t\t\$.each( emulated.split(/\\s+/g), function(i, name) {
\t\t\t\tdelete self.internal.domNode[name];
\t\t\t});
\t\t}
\t};

\t\$.jPlayer.error = {
\t\tFLASH: \"e_flash\",
\t\tFLASH_DISABLED: \"e_flash_disabled\",
\t\tNO_SOLUTION: \"e_no_solution\",
\t\tNO_SUPPORT: \"e_no_support\",
\t\tURL: \"e_url\",
\t\tURL_NOT_SET: \"e_url_not_set\",
\t\tVERSION: \"e_version\"
\t};

\t\$.jPlayer.errorMsg = {
\t\tFLASH: \"jPlayer's Flash fallback is not configured correctly, or a command was issued before the jPlayer Ready event. Details: \", // Used in: _flashError()
\t\tFLASH_DISABLED: \"jPlayer's Flash fallback has been disabled by the browser due to the CSS rules you have used. Details: \", // Used in: _flashError()
\t\tNO_SOLUTION: \"No solution can be found by jPlayer in this browser. Neither HTML nor Flash can be used.\", // Used in: _init()
\t\tNO_SUPPORT: \"It is not possible to play any media format provided in setMedia() on this browser using your current options.\", // Used in: setMedia()
\t\tURL: \"Media URL could not be loaded.\", // Used in: jPlayerFlashEvent() and _addHtmlEventListeners()
\t\tURL_NOT_SET: \"Attempt to issue media playback commands, while no media url is set.\", // Used in: load(), play(), pause(), stop() and playHead()
\t\tVERSION: \"jPlayer \" + \$.jPlayer.prototype.version.script + \" needs Jplayer.swf version \" + \$.jPlayer.prototype.version.needFlash + \" but found \" // Used in: jPlayerReady()
\t};

\t\$.jPlayer.errorHint = {
\t\tFLASH: \"Check your swfPath option and that Jplayer.swf is there.\",
\t\tFLASH_DISABLED: \"Check that you have not display:none; the jPlayer entity or any ancestor.\",
\t\tNO_SOLUTION: \"Review the jPlayer options: support and supplied.\",
\t\tNO_SUPPORT: \"Video or audio formats defined in the supplied option are missing.\",
\t\tURL: \"Check media URL is valid.\",
\t\tURL_NOT_SET: \"Use setMedia() to set the media URL.\",
\t\tVERSION: \"Update jPlayer files.\"
\t};

\t\$.jPlayer.warning = {
\t\tCSS_SELECTOR_COUNT: \"e_css_selector_count\",
\t\tCSS_SELECTOR_METHOD: \"e_css_selector_method\",
\t\tCSS_SELECTOR_STRING: \"e_css_selector_string\",
\t\tOPTION_KEY: \"e_option_key\"
\t};

\t\$.jPlayer.warningMsg = {
\t\tCSS_SELECTOR_COUNT: \"The number of css selectors found did not equal one: \",
\t\tCSS_SELECTOR_METHOD: \"The methodName given in jPlayer('cssSelector') is not a valid jPlayer method.\",
\t\tCSS_SELECTOR_STRING: \"The methodCssSelector given in jPlayer('cssSelector') is not a String or is empty.\",
\t\tOPTION_KEY: \"The option requested in jPlayer('option') is undefined.\"
\t};

\t\$.jPlayer.warningHint = {
\t\tCSS_SELECTOR_COUNT: \"Check your css selector and the ancestor.\",
\t\tCSS_SELECTOR_METHOD: \"Check your method name.\",
\t\tCSS_SELECTOR_STRING: \"Check your css selector is a string.\",
\t\tOPTION_KEY: \"Check your option name.\"
\t};
}));
";
        
        $__internal_f8ef344228010f890f2692a09a272991ba76851ffcedf37e1272630be7972f8a->leave($__internal_f8ef344228010f890f2692a09a272991ba76851ffcedf37e1272630be7972f8a_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/jquery.jplayer/jquery.jplayer.js";
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
 * Version: 2.4.0
 * Date: 5th June 2013
 */

/* Code verified using http://www.jshint.com/ */
/*jshint asi:false, bitwise:false, boss:false, browser:true, curly:true, debug:false, eqeqeq:true, eqnull:false, evil:false, forin:false, immed:false, jquery:true, laxbreak:false, newcap:true, noarg:true, noempty:true, nonew:true, onevar:false, passfail:false, plusplus:false, regexp:false, undef:true, sub:false, strict:false, white:false, smarttabs:true */
/*global define:false, ActiveXObject:false, alert:false */

/* Support for Zepto 1.0 compiled with optional data module.
 * For AMD support, you will need to manually switch the 2 lines in the code below.
 * Search terms: \"jQuery Switch\" and \"Zepto Switch\"
 */

(function (root, factory) {
\tif (typeof define === 'function' && define.amd) {
\t\t// AMD. Register as an anonymous module.
\t\tdefine(['jquery'], factory); // jQuery Switch
\t\t// define(['zepto'], factory); // Zepto Switch
\t} else {
\t\t// Browser globals
\t\tif(root.jQuery) { // Use jQuery if available
\t\t\tfactory(root.jQuery);
\t\t} else { // Otherwise, use Zepto
\t\t\tfactory(root.Zepto);
\t\t}
\t}
}(this, function (\$, undefined) {

\t// Adapted from jquery.ui.widget.js (1.8.7): \$.widget.bridge - Tweaked \$.data(this,XYZ) to \$(this).data(XYZ) for Zepto
\t\$.fn.jPlayer = function( options ) {
\t\tvar name = \"jPlayer\";
\t\tvar isMethodCall = typeof options === \"string\",
\t\t\targs = Array.prototype.slice.call( arguments, 1 ),
\t\t\treturnValue = this;

\t\t// allow multiple hashes to be passed on init
\t\toptions = !isMethodCall && args.length ?
\t\t\t\$.extend.apply( null, [ true, options ].concat(args) ) :
\t\t\toptions;

\t\t// prevent calls to internal methods
\t\tif ( isMethodCall && options.charAt( 0 ) === \"_\" ) {
\t\t\treturn returnValue;
\t\t}

\t\tif ( isMethodCall ) {
\t\t\tthis.each(function() {
\t\t\t\tvar instance = \$(this).data( name ),
\t\t\t\t\tmethodValue = instance && \$.isFunction( instance[options] ) ?
\t\t\t\t\t\tinstance[ options ].apply( instance, args ) :
\t\t\t\t\t\tinstance;
\t\t\t\tif ( methodValue !== instance && methodValue !== undefined ) {
\t\t\t\t\treturnValue = methodValue;
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t});
\t\t} else {
\t\t\tthis.each(function() {
\t\t\t\tvar instance = \$(this).data( name );
\t\t\t\tif ( instance ) {
\t\t\t\t\t// instance.option( options || {} )._init(); // Orig jquery.ui.widget.js code: Not recommend for jPlayer. ie., Applying new options to an existing instance (via the jPlayer constructor) and performing the _init(). The _init() is what concerns me. It would leave a lot of event handlers acting on jPlayer instance and the interface.
\t\t\t\t\tinstance.option( options || {} ); // The new constructor only changes the options. Changing options only has basic support atm.
\t\t\t\t} else {
\t\t\t\t\t\$(this).data( name, new \$.jPlayer( options, this ) );
\t\t\t\t}
\t\t\t});
\t\t}

\t\treturn returnValue;
\t};

\t\$.jPlayer = function( options, element ) {
\t\t// allow instantiation without initializing for simple inheritance
\t\tif ( arguments.length ) {
\t\t\tthis.element = \$(element);
\t\t\tthis.options = \$.extend(true, {},
\t\t\t\tthis.options,
\t\t\t\toptions
\t\t\t);
\t\t\tvar self = this;
\t\t\tthis.element.bind( \"remove.jPlayer\", function() {
\t\t\t\tself.destroy();
\t\t\t});
\t\t\tthis._init();
\t\t}
\t};
\t// End of: (Adapted from jquery.ui.widget.js (1.8.7))

\t// Zepto is missing one of the animation methods.
\tif(typeof \$.fn.stop !== 'function') {
\t\t\$.fn.stop = function() {};
\t}

\t// Emulated HTML5 methods and properties
\t\$.jPlayer.emulateMethods = \"load play pause\";
\t\$.jPlayer.emulateStatus = \"src readyState networkState currentTime duration paused ended playbackRate\";
\t\$.jPlayer.emulateOptions = \"muted volume\";

\t// Reserved event names generated by jPlayer that are not part of the HTML5 Media element spec
\t\$.jPlayer.reservedEvent = \"ready flashreset resize repeat error warning\";

\t// Events generated by jPlayer
\t\$.jPlayer.event = {};
\t\$.each(
\t\t[
\t\t\t'ready',
\t\t\t'flashreset', // Similar to the ready event if the Flash solution is set to display:none and then shown again or if it's reloaded for another reason by the browser. For example, using CSS position:fixed on Firefox for the full screen feature.
\t\t\t'resize', // Occurs when the size changes through a full/restore screen operation or if the size/sizeFull options are changed.
\t\t\t'repeat', // Occurs when the repeat status changes. Usually through clicks on the repeat button of the interface.
\t\t\t'click', // Occurs when the user clicks on one of the following: poster image, html video, flash video.
\t\t\t'error', // Event error code in event.jPlayer.error.type. See \$.jPlayer.error
\t\t\t'warning', // Event warning code in event.jPlayer.warning.type. See \$.jPlayer.warning

\t\t\t// Other events match HTML5 spec.
\t\t\t'loadstart',
\t\t\t'progress',
\t\t\t'suspend',
\t\t\t'abort',
\t\t\t'emptied',
\t\t\t'stalled',
\t\t\t'play',
\t\t\t'pause',
\t\t\t'loadedmetadata',
\t\t\t'loadeddata',
\t\t\t'waiting',
\t\t\t'playing',
\t\t\t'canplay',
\t\t\t'canplaythrough',
\t\t\t'seeking',
\t\t\t'seeked',
\t\t\t'timeupdate',
\t\t\t'ended',
\t\t\t'ratechange',
\t\t\t'durationchange',
\t\t\t'volumechange'
\t\t],
\t\tfunction() {
\t\t\t\$.jPlayer.event[ this ] = 'jPlayer_' + this;
\t\t}
\t);

\t\$.jPlayer.htmlEvent = [ // These HTML events are bubbled through to the jPlayer event, without any internal action.
\t\t\"loadstart\",
\t\t// \"progress\", // jPlayer uses internally before bubbling.
\t\t// \"suspend\", // jPlayer uses internally before bubbling.
\t\t\"abort\",
\t\t// \"error\", // jPlayer uses internally before bubbling.
\t\t\"emptied\",
\t\t\"stalled\",
\t\t// \"play\", // jPlayer uses internally before bubbling.
\t\t// \"pause\", // jPlayer uses internally before bubbling.
\t\t\"loadedmetadata\",
\t\t\"loadeddata\",
\t\t// \"waiting\", // jPlayer uses internally before bubbling.
\t\t// \"playing\", // jPlayer uses internally before bubbling.
\t\t\"canplay\",
\t\t\"canplaythrough\",
\t\t// \"seeking\", // jPlayer uses internally before bubbling.
\t\t// \"seeked\", // jPlayer uses internally before bubbling.
\t\t// \"timeupdate\", // jPlayer uses internally before bubbling.
\t\t// \"ended\", // jPlayer uses internally before bubbling.
\t\t\"ratechange\"
\t\t// \"durationchange\" // jPlayer uses internally before bubbling.
\t\t// \"volumechange\" // jPlayer uses internally before bubbling.
\t];

\t\$.jPlayer.pause = function() {
\t\t\$.each(\$.jPlayer.prototype.instances, function(i, element) {
\t\t\tif(element.data(\"jPlayer\").status.srcSet) { // Check that media is set otherwise would cause error event.
\t\t\t\telement.jPlayer(\"pause\");
\t\t\t}
\t\t});
\t};

\t// Default for jPlayer option.timeFormat
\t\$.jPlayer.timeFormat = {
\t\tshowHour: false,
\t\tshowMin: true,
\t\tshowSec: true,
\t\tpadHour: false,
\t\tpadMin: true,
\t\tpadSec: true,
\t\tsepHour: \":\",
\t\tsepMin: \":\",
\t\tsepSec: \"\"
\t};
\tvar ConvertTime = function() {
\t\tthis.init();
\t};
\tConvertTime.prototype = {
\t\tinit: function() {
\t\t\tthis.options = {
\t\t\t\ttimeFormat: \$.jPlayer.timeFormat
\t\t\t};
\t\t},
\t\ttime: function(s) { // function used on jPlayer.prototype._convertTime to enable per instance options.
\t\t\ts = (s && typeof s === 'number') ? s : 0;

\t\t\tvar myTime = new Date(s * 1000),
\t\t\t\thour = myTime.getUTCHours(),
\t\t\t\tmin = this.options.timeFormat.showHour ? myTime.getUTCMinutes() : myTime.getUTCMinutes() + hour * 60,
\t\t\t\tsec = this.options.timeFormat.showMin ? myTime.getUTCSeconds() : myTime.getUTCSeconds() + min * 60,
\t\t\t\tstrHour = (this.options.timeFormat.padHour && hour < 10) ? \"0\" + hour : hour,
\t\t\t\tstrMin = (this.options.timeFormat.padMin && min < 10) ? \"0\" + min : min,
\t\t\t\tstrSec = (this.options.timeFormat.padSec && sec < 10) ? \"0\" + sec : sec,
\t\t\t\tstrTime = \"\";

\t\t\tstrTime += this.options.timeFormat.showHour ? strHour + this.options.timeFormat.sepHour : \"\";
\t\t\tstrTime += this.options.timeFormat.showMin ? strMin + this.options.timeFormat.sepMin : \"\";
\t\t\tstrTime += this.options.timeFormat.showSec ? strSec + this.options.timeFormat.sepSec : \"\";

\t\t\treturn strTime;
\t\t}
\t};
\tvar myConvertTime = new ConvertTime();
\t\$.jPlayer.convertTime = function(s) {
\t\treturn myConvertTime.time(s);
\t};

\t// Adapting jQuery 1.4.4 code for jQuery.browser. Required since jQuery 1.3.2 does not detect Chrome as webkit.
\t\$.jPlayer.uaBrowser = function( userAgent ) {
\t\tvar ua = userAgent.toLowerCase();

\t\t// Useragent RegExp
\t\tvar rwebkit = /(webkit)[ \\/]([\\w.]+)/;
\t\tvar ropera = /(opera)(?:.*version)?[ \\/]([\\w.]+)/;
\t\tvar rmsie = /(msie) ([\\w.]+)/;
\t\tvar rmozilla = /(mozilla)(?:.*? rv:([\\w.]+))?/;

\t\tvar match = rwebkit.exec( ua ) ||
\t\t\tropera.exec( ua ) ||
\t\t\trmsie.exec( ua ) ||
\t\t\tua.indexOf(\"compatible\") < 0 && rmozilla.exec( ua ) ||
\t\t\t[];

\t\treturn { browser: match[1] || \"\", version: match[2] || \"0\" };
\t};

\t// Platform sniffer for detecting mobile devices
\t\$.jPlayer.uaPlatform = function( userAgent ) {
\t\tvar ua = userAgent.toLowerCase();

\t\t// Useragent RegExp
\t\tvar rplatform = /(ipad|iphone|ipod|android|blackberry|playbook|windows ce|webos)/;
\t\tvar rtablet = /(ipad|playbook)/;
\t\tvar randroid = /(android)/;
\t\tvar rmobile = /(mobile)/;

\t\tvar platform = rplatform.exec( ua ) || [];
\t\tvar tablet = rtablet.exec( ua ) ||
\t\t\t!rmobile.exec( ua ) && randroid.exec( ua ) ||
\t\t\t[];

\t\tif(platform[1]) {
\t\t\tplatform[1] = platform[1].replace(/\\s/g, \"_\"); // Change whitespace to underscore. Enables dot notation.
\t\t}

\t\treturn { platform: platform[1] || \"\", tablet: tablet[1] || \"\" };
\t};

\t\$.jPlayer.browser = {
\t};
\t\$.jPlayer.platform = {
\t};

\tvar browserMatch = \$.jPlayer.uaBrowser(navigator.userAgent);
\tif ( browserMatch.browser ) {
\t\t\$.jPlayer.browser[ browserMatch.browser ] = true;
\t\t\$.jPlayer.browser.version = browserMatch.version;
\t}
\tvar platformMatch = \$.jPlayer.uaPlatform(navigator.userAgent);
\tif ( platformMatch.platform ) {
\t\t\$.jPlayer.platform[ platformMatch.platform ] = true;
\t\t\$.jPlayer.platform.mobile = !platformMatch.tablet;
\t\t\$.jPlayer.platform.tablet = !!platformMatch.tablet;
\t}

\t// Internet Explorer (IE) Browser Document Mode Sniffer. Based on code at:
\t// http://msdn.microsoft.com/en-us/library/cc288325%28v=vs.85%29.aspx#GetMode
\t\$.jPlayer.getDocMode = function() {
\t\tvar docMode;
\t\tif (\$.jPlayer.browser.msie) {
\t\t\tif (document.documentMode) { // IE8 or later
\t\t\t\tdocMode = document.documentMode;
\t\t\t} else { // IE 5-7
\t\t\t\tdocMode = 5; // Assume quirks mode unless proven otherwise
\t\t\t\tif (document.compatMode) {
\t\t\t\t\tif (document.compatMode === \"CSS1Compat\") {
\t\t\t\t\t\tdocMode = 7; // standards mode
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t\treturn docMode;
\t};
\t\$.jPlayer.browser.documentMode = \$.jPlayer.getDocMode();

\t\$.jPlayer.nativeFeatures = {
\t\tinit: function() {

\t\t\t/* Fullscreen function naming influenced by W3C naming.
\t\t\t * No support for: Mozilla Proposal: https://wiki.mozilla.org/Gecko:FullScreenAPI
\t\t\t */

\t\t\tvar d = document,
\t\t\t\tv = d.createElement('video'),
\t\t\t\tspec = {
\t\t\t\t\t// http://www.w3.org/TR/fullscreen/
\t\t\t\t\tw3c: [
\t\t\t\t\t\t'fullscreenEnabled',
\t\t\t\t\t\t'fullscreenElement',
\t\t\t\t\t\t'requestFullscreen',
\t\t\t\t\t\t'exitFullscreen',
\t\t\t\t\t\t'fullscreenchange',
\t\t\t\t\t\t'fullscreenerror'
\t\t\t\t\t],
\t\t\t\t\t// https://developer.mozilla.org/en-US/docs/DOM/Using_fullscreen_mode
\t\t\t\t\tmoz: [
\t\t\t\t\t\t'mozFullScreenEnabled',
\t\t\t\t\t\t'mozFullScreenElement',
\t\t\t\t\t\t'mozRequestFullScreen',
\t\t\t\t\t\t'mozCancelFullScreen',
\t\t\t\t\t\t'mozfullscreenchange',
\t\t\t\t\t\t'mozfullscreenerror'
\t\t\t\t\t],
\t\t\t\t\t// http://developer.apple.com/library/safari/#documentation/WebKit/Reference/ElementClassRef/Element/Element.html
\t\t\t\t\t// http://developer.apple.com/library/safari/#documentation/UserExperience/Reference/DocumentAdditionsReference/DocumentAdditions/DocumentAdditions.html
\t\t\t\t\twebkit: [
\t\t\t\t\t\t'',
\t\t\t\t\t\t'webkitCurrentFullScreenElement',
\t\t\t\t\t\t'webkitRequestFullScreen',
\t\t\t\t\t\t'webkitCancelFullScreen',
\t\t\t\t\t\t'webkitfullscreenchange',
\t\t\t\t\t\t''
\t\t\t\t\t],
\t\t\t\t\t// http://developer.apple.com/library/safari/#documentation/AudioVideo/Reference/HTMLVideoElementClassReference/HTMLVideoElement/HTMLVideoElement.html
\t\t\t\t\twebkitVideo: [
\t\t\t\t\t\t'webkitSupportsFullscreen',
\t\t\t\t\t\t'webkitDisplayingFullscreen',
\t\t\t\t\t\t'webkitEnterFullscreen',
\t\t\t\t\t\t'webkitExitFullscreen',
\t\t\t\t\t\t'',
\t\t\t\t\t\t''
\t\t\t\t\t]
\t\t\t\t},
\t\t\t\tspecOrder = [
\t\t\t\t\t'w3c',
\t\t\t\t\t'moz',
\t\t\t\t\t'webkit',
\t\t\t\t\t'webkitVideo'
\t\t\t\t],
\t\t\t\tfs, i, il;

\t\t\tthis.fullscreen = fs = {
\t\t\t\tsupport: {
\t\t\t\t\tw3c: !!d[spec.w3c[0]],
\t\t\t\t\tmoz: !!d[spec.moz[0]],
\t\t\t\t\twebkit: typeof d[spec.webkit[3]] === 'function',
\t\t\t\t\twebkitVideo: typeof v[spec.webkitVideo[2]] === 'function'
\t\t\t\t},
\t\t\t\tused: {}
\t\t\t};

\t\t\t// Store the name of the spec being used and as a handy boolean.
\t\t\tfor(i = 0, il = specOrder.length; i < il; i++) {
\t\t\t\tvar n = specOrder[i];
\t\t\t\tif(fs.support[n]) {
\t\t\t\t\tfs.spec = n;
\t\t\t\t\tfs.used[n] = true;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}

\t\t\tif(fs.spec) {
\t\t\t\tvar s = spec[fs.spec];
\t\t\t\tfs.api = {
\t\t\t\t\tfullscreenEnabled: true,
\t\t\t\t\tfullscreenElement: function(elem) {
\t\t\t\t\t\telem = elem ? elem : d; // Video element required for webkitVideo
\t\t\t\t\t\treturn elem[s[1]];
\t\t\t\t\t},
\t\t\t\t\trequestFullscreen: function(elem) {
\t\t\t\t\t\treturn elem[s[2]]();
\t\t\t\t\t},
\t\t\t\t\texitFullscreen: function(elem) {
\t\t\t\t\t\telem = elem ? elem : d; // Video element required for webkitVideo
\t\t\t\t\t\treturn elem[s[3]]();
\t\t\t\t\t}
\t\t\t\t};
\t\t\t\tfs.event = {
\t\t\t\t\tfullscreenchange: s[4],
\t\t\t\t\tfullscreenerror: s[5]
\t\t\t\t};
\t\t\t} else {
\t\t\t\tfs.api = {
\t\t\t\t\tfullscreenEnabled: false,
\t\t\t\t\tfullscreenElement: function() {
\t\t\t\t\t\treturn null;
\t\t\t\t\t},
\t\t\t\t\trequestFullscreen: function() {},
\t\t\t\t\texitFullscreen: function() {}
\t\t\t\t};
\t\t\t\tfs.event = {};
\t\t\t}
\t\t}
\t};
\t\$.jPlayer.nativeFeatures.init();

\t// The keyboard control system.

\t// The current jPlayer instance in focus.
\t\$.jPlayer.focus = null;

\t// The list of element node names to ignore with key controls.
\t\$.jPlayer.keyIgnoreElementNames = \"INPUT TEXTAREA\";

\t// The function that deals with key presses.
\tvar keyBindings = function(event) {

\t\tvar f = \$.jPlayer.focus,
\t\t\tignoreKey;

\t\t// A jPlayer instance must be in focus. ie., keyEnabled and the last one played.
\t\tif(f) {
\t\t\t// What generated the key press?
\t\t\t\$.each( \$.jPlayer.keyIgnoreElementNames.split(/\\s+/g), function(i, name) {
\t\t\t\t// The strings should already be uppercase.
\t\t\t\tif(event.target.nodeName.toUpperCase() === name.toUpperCase()) {
\t\t\t\t\tignoreKey = true;
\t\t\t\t\treturn false; // exit each.
\t\t\t\t}
\t\t\t});
\t\t\tif(!ignoreKey) {
\t\t\t\t// See if the key pressed matches any of the bindings.
\t\t\t\t\$.each(f.options.keyBindings, function(action, binding) {
\t\t\t\t\t// The binding could be a null when the default has been disabled. ie., 1st clause in if()
\t\t\t\t\tif(binding && event.which === binding.key && \$.isFunction(binding.fn)) {
\t\t\t\t\t\tevent.preventDefault(); // Key being used by jPlayer, so prevent default operation.
\t\t\t\t\t\tbinding.fn(f);
\t\t\t\t\t\treturn false; // exit each.
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}
\t};

\t\$.jPlayer.keys = function(en) {
\t\tvar event = \"keydown.jPlayer\";
\t\t// Remove any binding, just in case enabled more than once.
\t\t\$(document.documentElement).unbind(event);
\t\tif(en) {
\t\t\t\$(document.documentElement).bind(event, keyBindings);
\t\t}
\t};

\t// Enable the global key control handler ready for any jPlayer instance with the keyEnabled option enabled.
\t\$.jPlayer.keys(true);

\t\$.jPlayer.prototype = {
\t\tcount: 0, // Static Variable: Change it via prototype.
\t\tversion: { // Static Object
\t\t\tscript: \"2.4.0\",
\t\t\tneedFlash: \"2.4.0\",
\t\t\tflash: \"unknown\"
\t\t},
\t\toptions: { // Instanced in \$.jPlayer() constructor
\t\t\tswfPath: \"js\", // Path to Jplayer.swf. Can be relative, absolute or server root relative.
\t\t\tsolution: \"html, flash\", // Valid solutions: html, flash. Order defines priority. 1st is highest,
\t\t\tsupplied: \"mp3\", // Defines which formats jPlayer will try and support and the priority by the order. 1st is highest,
\t\t\tpreload: 'metadata',  // HTML5 Spec values: none, metadata, auto.
\t\t\tvolume: 0.8, // The volume. Number 0 to 1.
\t\t\tmuted: false,
\t\t\twmode: \"opaque\", // Valid wmode: window, transparent, opaque, direct, gpu. 
\t\t\tbackgroundColor: \"#000000\", // To define the jPlayer div and Flash background color.
\t\t\tcssSelectorAncestor: \"#jp_container_1\",
\t\t\tcssSelector: { // * denotes properties that should only be required when video media type required. _cssSelector() would require changes to enable splitting these into Audio and Video defaults.
\t\t\t\tvideoPlay: \".jp-video-play\", // *
\t\t\t\tplay: \".jp-play\",
\t\t\t\tpause: \".jp-pause\",
\t\t\t\tstop: \".jp-stop\",
\t\t\t\tseekBar: \".jp-seek-bar\",
\t\t\t\tplayBar: \".jp-play-bar\",
\t\t\t\tmute: \".jp-mute\",
\t\t\t\tunmute: \".jp-unmute\",
\t\t\t\tvolumeBar: \".jp-volume-bar\",
\t\t\t\tvolumeBarValue: \".jp-volume-bar-value\",
\t\t\t\tvolumeMax: \".jp-volume-max\",
\t\t\t\tcurrentTime: \".jp-current-time\",
\t\t\t\tduration: \".jp-duration\",
\t\t\t\tfullScreen: \".jp-full-screen\", // *
\t\t\t\trestoreScreen: \".jp-restore-screen\", // *
\t\t\t\trepeat: \".jp-repeat\",
\t\t\t\trepeatOff: \".jp-repeat-off\",
\t\t\t\tgui: \".jp-gui\", // The interface used with autohide feature.
\t\t\t\tnoSolution: \".jp-no-solution\" // For error feedback when jPlayer cannot find a solution.
\t\t\t},
\t\t\tsmoothPlayBar: false, // Smooths the play bar transitions, which affects clicks and short media with big changes per second.
\t\t\tfullScreen: false, // Native Full Screen
\t\t\tfullWindow: false,
\t\t\tautohide: {
\t\t\t\trestored: false, // Controls the interface autohide feature.
\t\t\t\tfull: true, // Controls the interface autohide feature.
\t\t\t\tfadeIn: 200, // Milliseconds. The period of the fadeIn anim.
\t\t\t\tfadeOut: 600, // Milliseconds. The period of the fadeOut anim.
\t\t\t\thold: 1000 // Milliseconds. The period of the pause before autohide beings.
\t\t\t},
\t\t\tloop: false,
\t\t\trepeat: function(event) { // The default jPlayer repeat event handler
\t\t\t\tif(event.jPlayer.options.loop) {
\t\t\t\t\t\$(this).unbind(\".jPlayerRepeat\").bind(\$.jPlayer.event.ended + \".jPlayer.jPlayerRepeat\", function() {
\t\t\t\t\t\t\$(this).jPlayer(\"play\");
\t\t\t\t\t});
\t\t\t\t} else {
\t\t\t\t\t\$(this).unbind(\".jPlayerRepeat\");
\t\t\t\t}
\t\t\t},
\t\t\tnativeVideoControls: {
\t\t\t\t// Works well on standard browsers.
\t\t\t\t// Phone and tablet browsers can have problems with the controls disappearing.
\t\t\t},
\t\t\tnoFullWindow: {
\t\t\t\tmsie: /msie [0-6]\\./,
\t\t\t\tipad: /ipad.*?os [0-4]\\./,
\t\t\t\tiphone: /iphone/,
\t\t\t\tipod: /ipod/,
\t\t\t\tandroid_pad: /android [0-3]\\.(?!.*?mobile)/,
\t\t\t\tandroid_phone: /android.*?mobile/,
\t\t\t\tblackberry: /blackberry/,
\t\t\t\twindows_ce: /windows ce/,
\t\t\t\tiemobile: /iemobile/,
\t\t\t\twebos: /webos/
\t\t\t},
\t\t\tnoVolume: {
\t\t\t\tipad: /ipad/,
\t\t\t\tiphone: /iphone/,
\t\t\t\tipod: /ipod/,
\t\t\t\tandroid_pad: /android(?!.*?mobile)/,
\t\t\t\tandroid_phone: /android.*?mobile/,
\t\t\t\tblackberry: /blackberry/,
\t\t\t\twindows_ce: /windows ce/,
\t\t\t\tiemobile: /iemobile/,
\t\t\t\twebos: /webos/,
\t\t\t\tplaybook: /playbook/
\t\t\t},
\t\t\ttimeFormat: {
\t\t\t\t// Specific time format for this instance. The supported options are defined in \$.jPlayer.timeFormat
\t\t\t\t// For the undefined options we use the default from \$.jPlayer.timeFormat
\t\t\t},
\t\t\tkeyEnabled: false, // Enables keyboard controls.
\t\t\taudioFullScreen: false, // Enables keyboard controls to enter full screen with audio media.
\t\t\tkeyBindings: { // The key control object, defining the key codes and the functions to execute.
\t\t\t\t// The parameter, f = \$.jPlayer.focus, will be checked truethy before attempting to call any of these functions.
\t\t\t\t// Properties may be added to this object, in key/fn pairs, to enable other key controls. EG, for the playlist add-on.
\t\t\t\tplay: {
\t\t\t\t\tkey: 32, // space
\t\t\t\t\tfn: function(f) {
\t\t\t\t\t\tif(f.status.paused) {
\t\t\t\t\t\t\tf.play();
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tf.pause();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tfullScreen: {
\t\t\t\t\tkey: 13, // enter
\t\t\t\t\tfn: function(f) {
\t\t\t\t\t\tif(f.status.video || f.options.audioFullScreen) {
\t\t\t\t\t\t\tf._setOption(\"fullScreen\", !f.options.fullScreen);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tmuted: {
\t\t\t\t\tkey: 8, // backspace
\t\t\t\t\tfn: function(f) {
\t\t\t\t\t\tf._muted(!f.options.muted);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tvolumeUp: {
\t\t\t\t\tkey: 38, // UP
\t\t\t\t\tfn: function(f) {
\t\t\t\t\t\tf.volume(f.options.volume + 0.1);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tvolumeDown: {
\t\t\t\t\tkey: 40, // DOWN
\t\t\t\t\tfn: function(f) {
\t\t\t\t\t\tf.volume(f.options.volume - 0.1);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\tverticalVolume: false, // Calculate volume from the bottom of the volume bar. Default is from the left. Also volume affects either width or height.
\t\t\t// globalVolume: false, // Not implemented: Set to make volume changes affect all jPlayer instances
\t\t\t// globalMute: false, // Not implemented: Set to make mute changes affect all jPlayer instances
\t\t\tidPrefix: \"jp\", // Prefix for the ids of html elements created by jPlayer. For flash, this must not include characters: . - + * / \\
\t\t\tnoConflict: \"jQuery\",
\t\t\temulateHtml: false, // Emulates the HTML5 Media element on the jPlayer element.
\t\t\terrorAlerts: false,
\t\t\twarningAlerts: false
\t\t},
\t\toptionsAudio: {
\t\t\tsize: {
\t\t\t\twidth: \"0px\",
\t\t\t\theight: \"0px\",
\t\t\t\tcssClass: \"\"
\t\t\t},
\t\t\tsizeFull: {
\t\t\t\twidth: \"0px\",
\t\t\t\theight: \"0px\",
\t\t\t\tcssClass: \"\"
\t\t\t}
\t\t},
\t\toptionsVideo: {
\t\t\tsize: {
\t\t\t\twidth: \"480px\",
\t\t\t\theight: \"270px\",
\t\t\t\tcssClass: \"jp-video-270p\"
\t\t\t},
\t\t\tsizeFull: {
\t\t\t\twidth: \"100%\",
\t\t\t\theight: \"100%\",
\t\t\t\tcssClass: \"jp-video-full\"
\t\t\t}
\t\t},
\t\tinstances: {}, // Static Object
\t\tstatus: { // Instanced in _init()
\t\t\tsrc: \"\",
\t\t\tmedia: {},
\t\t\tpaused: true,
\t\t\tformat: {},
\t\t\tformatType: \"\",
\t\t\twaitForPlay: true, // Same as waitForLoad except in case where preloading.
\t\t\twaitForLoad: true,
\t\t\tsrcSet: false,
\t\t\tvideo: false, // True if playing a video
\t\t\tseekPercent: 0,
\t\t\tcurrentPercentRelative: 0,
\t\t\tcurrentPercentAbsolute: 0,
\t\t\tcurrentTime: 0,
\t\t\tduration: 0,
\t\t\tvideoWidth: 0, // Intrinsic width of the video in pixels.
\t\t\tvideoHeight: 0, // Intrinsic height of the video in pixels.
\t\t\treadyState: 0,
\t\t\tnetworkState: 0,
\t\t\tplaybackRate: 1,
\t\t\tended: 0

/*\t\tPersistant status properties created dynamically at _init():
\t\t\twidth
\t\t\theight
\t\t\tcssClass
\t\t\tnativeVideoControls
\t\t\tnoFullWindow
\t\t\tnoVolume
*/
\t\t},

\t\tinternal: { // Instanced in _init()
\t\t\tready: false
\t\t\t// instance: undefined
\t\t\t// domNode: undefined
\t\t\t// htmlDlyCmdId: undefined
\t\t\t// autohideId: undefined
\t\t\t// cmdsIgnored
\t\t},
\t\tsolution: { // Static Object: Defines the solutions built in jPlayer.
\t\t\thtml: true,
\t\t\tflash: true
\t\t},
\t\t// 'MPEG-4 support' : canPlayType('video/mp4; codecs=\"mp4v.20.8\"')
\t\tformat: { // Static Object
\t\t\tmp3: {
\t\t\t\tcodec: 'audio/mpeg; codecs=\"mp3\"',
\t\t\t\tflashCanPlay: true,
\t\t\t\tmedia: 'audio'
\t\t\t},
\t\t\tm4a: { // AAC / MP4
\t\t\t\tcodec: 'audio/mp4; codecs=\"mp4a.40.2\"',
\t\t\t\tflashCanPlay: true,
\t\t\t\tmedia: 'audio'
\t\t\t},
\t\t\toga: { // OGG
\t\t\t\tcodec: 'audio/ogg; codecs=\"vorbis\"',
\t\t\t\tflashCanPlay: false,
\t\t\t\tmedia: 'audio'
\t\t\t},
\t\t\twav: { // PCM
\t\t\t\tcodec: 'audio/wav; codecs=\"1\"',
\t\t\t\tflashCanPlay: false,
\t\t\t\tmedia: 'audio'
\t\t\t},
\t\t\twebma: { // WEBM
\t\t\t\tcodec: 'audio/webm; codecs=\"vorbis\"',
\t\t\t\tflashCanPlay: false,
\t\t\t\tmedia: 'audio'
\t\t\t},
\t\t\tfla: { // FLV / F4A
\t\t\t\tcodec: 'audio/x-flv',
\t\t\t\tflashCanPlay: true,
\t\t\t\tmedia: 'audio'
\t\t\t},
\t\t\trtmpa: { // RTMP AUDIO
\t\t\t\tcodec: 'audio/rtmp; codecs=\"rtmp\"',
\t\t\t\tflashCanPlay: true,
\t\t\t\tmedia: 'audio'
\t\t\t},
\t\t\tm4v: { // H.264 / MP4
\t\t\t\tcodec: 'video/mp4; codecs=\"avc1.42E01E, mp4a.40.2\"',
\t\t\t\tflashCanPlay: true,
\t\t\t\tmedia: 'video'
\t\t\t},
\t\t\togv: { // OGG
\t\t\t\tcodec: 'video/ogg; codecs=\"theora, vorbis\"',
\t\t\t\tflashCanPlay: false,
\t\t\t\tmedia: 'video'
\t\t\t},
\t\t\twebmv: { // WEBM
\t\t\t\tcodec: 'video/webm; codecs=\"vorbis, vp8\"',
\t\t\t\tflashCanPlay: false,
\t\t\t\tmedia: 'video'
\t\t\t},
\t\t\tflv: { // FLV / F4V
\t\t\t\tcodec: 'video/x-flv',
\t\t\t\tflashCanPlay: true,
\t\t\t\tmedia: 'video'
\t\t\t},
\t\t\trtmpv: { // RTMP VIDEO
\t\t\t\tcodec: 'video/rtmp; codecs=\"rtmp\"',
\t\t\t\tflashCanPlay: true,
\t\t\t\tmedia: 'video'
\t\t\t}
\t\t},
\t\t_init: function() {
\t\t\tvar self = this;
\t\t\t
\t\t\tthis.element.empty();
\t\t\t
\t\t\tthis.status = \$.extend({}, this.status); // Copy static to unique instance.
\t\t\tthis.internal = \$.extend({}, this.internal); // Copy static to unique instance.

\t\t\t// Initialize the time format
\t\t\tthis.options.timeFormat = \$.extend({}, \$.jPlayer.timeFormat, this.options.timeFormat);

\t\t\t// On iOS, assume commands will be ignored before user initiates them.
\t\t\tthis.internal.cmdsIgnored = \$.jPlayer.platform.ipad || \$.jPlayer.platform.iphone || \$.jPlayer.platform.ipod;

\t\t\tthis.internal.domNode = this.element.get(0);

\t\t\t// Add key bindings focus to 1st jPlayer instanced with key control enabled.
\t\t\tif(this.options.keyEnabled && !\$.jPlayer.focus) {
\t\t\t\t\$.jPlayer.focus = this;
\t\t\t}

\t\t\tthis.formats = []; // Array based on supplied string option. Order defines priority.
\t\t\tthis.solutions = []; // Array based on solution string option. Order defines priority.
\t\t\tthis.require = {}; // Which media types are required: video, audio.
\t\t\t
\t\t\tthis.htmlElement = {}; // DOM elements created by jPlayer
\t\t\tthis.html = {}; // In _init()'s this.desired code and setmedia(): Accessed via this[solution], where solution from this.solutions array.
\t\t\tthis.html.audio = {};
\t\t\tthis.html.video = {};
\t\t\tthis.flash = {}; // In _init()'s this.desired code and setmedia(): Accessed via this[solution], where solution from this.solutions array.
\t\t\t
\t\t\tthis.css = {};
\t\t\tthis.css.cs = {}; // Holds the css selector strings
\t\t\tthis.css.jq = {}; // Holds jQuery selectors. ie., \$(css.cs.method)

\t\t\tthis.ancestorJq = []; // Holds jQuery selector of cssSelectorAncestor. Init would use \$() instead of [], but it is only 1.4+

\t\t\tthis.options.volume = this._limitValue(this.options.volume, 0, 1); // Limit volume value's bounds.

\t\t\t// Create the formats array, with prority based on the order of the supplied formats string
\t\t\t\$.each(this.options.supplied.toLowerCase().split(\",\"), function(index1, value1) {
\t\t\t\tvar format = value1.replace(/^\\s+|\\s+\$/g, \"\"); //trim
\t\t\t\tif(self.format[format]) { // Check format is valid.
\t\t\t\t\tvar dupFound = false;
\t\t\t\t\t\$.each(self.formats, function(index2, value2) { // Check for duplicates
\t\t\t\t\t\tif(format === value2) {
\t\t\t\t\t\t\tdupFound = true;
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tif(!dupFound) {
\t\t\t\t\t\tself.formats.push(format);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\t// Create the solutions array, with prority based on the order of the solution string
\t\t\t\$.each(this.options.solution.toLowerCase().split(\",\"), function(index1, value1) {
\t\t\t\tvar solution = value1.replace(/^\\s+|\\s+\$/g, \"\"); //trim
\t\t\t\tif(self.solution[solution]) { // Check solution is valid.
\t\t\t\t\tvar dupFound = false;
\t\t\t\t\t\$.each(self.solutions, function(index2, value2) { // Check for duplicates
\t\t\t\t\t\tif(solution === value2) {
\t\t\t\t\t\t\tdupFound = true;
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tif(!dupFound) {
\t\t\t\t\t\tself.solutions.push(solution);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\tthis.internal.instance = \"jp_\" + this.count;
\t\t\tthis.instances[this.internal.instance] = this.element;

\t\t\t// Check the jPlayer div has an id and create one if required. Important for Flash to know the unique id for comms.
\t\t\tif(!this.element.attr(\"id\")) {
\t\t\t\tthis.element.attr(\"id\", this.options.idPrefix + \"_jplayer_\" + this.count);
\t\t\t}

\t\t\tthis.internal.self = \$.extend({}, {
\t\t\t\tid: this.element.attr(\"id\"),
\t\t\t\tjq: this.element
\t\t\t});
\t\t\tthis.internal.audio = \$.extend({}, {
\t\t\t\tid: this.options.idPrefix + \"_audio_\" + this.count,
\t\t\t\tjq: undefined
\t\t\t});
\t\t\tthis.internal.video = \$.extend({}, {
\t\t\t\tid: this.options.idPrefix + \"_video_\" + this.count,
\t\t\t\tjq: undefined
\t\t\t});
\t\t\tthis.internal.flash = \$.extend({}, {
\t\t\t\tid: this.options.idPrefix + \"_flash_\" + this.count,
\t\t\t\tjq: undefined,
\t\t\t\tswf: this.options.swfPath + (this.options.swfPath.toLowerCase().slice(-4) !== \".swf\" ? (this.options.swfPath && this.options.swfPath.slice(-1) !== \"/\" ? \"/\" : \"\") + \"Jplayer.swf\" : \"\")
\t\t\t});
\t\t\tthis.internal.poster = \$.extend({}, {
\t\t\t\tid: this.options.idPrefix + \"_poster_\" + this.count,
\t\t\t\tjq: undefined
\t\t\t});

\t\t\t// Register listeners defined in the constructor
\t\t\t\$.each(\$.jPlayer.event, function(eventName,eventType) {
\t\t\t\tif(self.options[eventName] !== undefined) {
\t\t\t\t\tself.element.bind(eventType + \".jPlayer\", self.options[eventName]); // With .jPlayer namespace.
\t\t\t\t\tself.options[eventName] = undefined; // Destroy the handler pointer copy on the options. Reason, events can be added/removed in other ways so this could be obsolete and misleading.
\t\t\t\t}
\t\t\t});

\t\t\t// Determine if we require solutions for audio, video or both media types.
\t\t\tthis.require.audio = false;
\t\t\tthis.require.video = false;
\t\t\t\$.each(this.formats, function(priority, format) {
\t\t\t\tself.require[self.format[format].media] = true;
\t\t\t});

\t\t\t// Now required types are known, finish the options default settings.
\t\t\tif(this.require.video) {
\t\t\t\tthis.options = \$.extend(true, {},
\t\t\t\t\tthis.optionsVideo,
\t\t\t\t\tthis.options
\t\t\t\t);
\t\t\t} else {
\t\t\t\tthis.options = \$.extend(true, {},
\t\t\t\t\tthis.optionsAudio,
\t\t\t\t\tthis.options
\t\t\t\t);
\t\t\t}
\t\t\tthis._setSize(); // update status and jPlayer element size

\t\t\t// Determine the status for Blocklisted options.
\t\t\tthis.status.nativeVideoControls = this._uaBlocklist(this.options.nativeVideoControls);
\t\t\tthis.status.noFullWindow = this._uaBlocklist(this.options.noFullWindow);
\t\t\tthis.status.noVolume = this._uaBlocklist(this.options.noVolume);

\t\t\t// Create event handlers if native fullscreen is supported
\t\t\tif(\$.jPlayer.nativeFeatures.fullscreen.api.fullscreenEnabled) {
\t\t\t\tthis._fullscreenAddEventListeners();
\t\t\t}

\t\t\t// The native controls are only for video and are disabled when audio is also used.
\t\t\tthis._restrictNativeVideoControls();

\t\t\t// Create the poster image.
\t\t\tthis.htmlElement.poster = document.createElement('img');
\t\t\tthis.htmlElement.poster.id = this.internal.poster.id;
\t\t\tthis.htmlElement.poster.onload = function() { // Note that this did not work on Firefox 3.6: poster.addEventListener(\"onload\", function() {}, false); Did not investigate x-browser.
\t\t\t\tif(!self.status.video || self.status.waitForPlay) {
\t\t\t\t\tself.internal.poster.jq.show();
\t\t\t\t}
\t\t\t};
\t\t\tthis.element.append(this.htmlElement.poster);
\t\t\tthis.internal.poster.jq = \$(\"#\" + this.internal.poster.id);
\t\t\tthis.internal.poster.jq.css({'width': this.status.width, 'height': this.status.height});
\t\t\tthis.internal.poster.jq.hide();
\t\t\tthis.internal.poster.jq.bind(\"click.jPlayer\", function() {
\t\t\t\tself._trigger(\$.jPlayer.event.click);
\t\t\t});
\t\t\t
\t\t\t// Generate the required media elements
\t\t\tthis.html.audio.available = false;
\t\t\tif(this.require.audio) { // If a supplied format is audio
\t\t\t\tthis.htmlElement.audio = document.createElement('audio');
\t\t\t\tthis.htmlElement.audio.id = this.internal.audio.id;
\t\t\t\tthis.html.audio.available = !!this.htmlElement.audio.canPlayType && this._testCanPlayType(this.htmlElement.audio); // Test is for IE9 on Win Server 2008.
\t\t\t}
\t\t\tthis.html.video.available = false;
\t\t\tif(this.require.video) { // If a supplied format is video
\t\t\t\tthis.htmlElement.video = document.createElement('video');
\t\t\t\tthis.htmlElement.video.id = this.internal.video.id;
\t\t\t\tthis.html.video.available = !!this.htmlElement.video.canPlayType && this._testCanPlayType(this.htmlElement.video); // Test is for IE9 on Win Server 2008.
\t\t\t}

\t\t\tthis.flash.available = this._checkForFlash(10.1);

\t\t\tthis.html.canPlay = {};
\t\t\tthis.flash.canPlay = {};
\t\t\t\$.each(this.formats, function(priority, format) {
\t\t\t\tself.html.canPlay[format] = self.html[self.format[format].media].available && \"\" !== self.htmlElement[self.format[format].media].canPlayType(self.format[format].codec);
\t\t\t\tself.flash.canPlay[format] = self.format[format].flashCanPlay && self.flash.available;
\t\t\t});
\t\t\tthis.html.desired = false;
\t\t\tthis.flash.desired = false;
\t\t\t\$.each(this.solutions, function(solutionPriority, solution) {
\t\t\t\tif(solutionPriority === 0) {
\t\t\t\t\tself[solution].desired = true;
\t\t\t\t} else {
\t\t\t\t\tvar audioCanPlay = false;
\t\t\t\t\tvar videoCanPlay = false;
\t\t\t\t\t\$.each(self.formats, function(formatPriority, format) {
\t\t\t\t\t\tif(self[self.solutions[0]].canPlay[format]) { // The other solution can play
\t\t\t\t\t\t\tif(self.format[format].media === 'video') {
\t\t\t\t\t\t\t\tvideoCanPlay = true;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\taudioCanPlay = true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tself[solution].desired = (self.require.audio && !audioCanPlay) || (self.require.video && !videoCanPlay);
\t\t\t\t}
\t\t\t});
\t\t\t// This is what jPlayer will support, based on solution and supplied.
\t\t\tthis.html.support = {};
\t\t\tthis.flash.support = {};
\t\t\t\$.each(this.formats, function(priority, format) {
\t\t\t\tself.html.support[format] = self.html.canPlay[format] && self.html.desired;
\t\t\t\tself.flash.support[format] = self.flash.canPlay[format] && self.flash.desired;
\t\t\t});
\t\t\t// If jPlayer is supporting any format in a solution, then the solution is used.
\t\t\tthis.html.used = false;
\t\t\tthis.flash.used = false;
\t\t\t\$.each(this.solutions, function(solutionPriority, solution) {
\t\t\t\t\$.each(self.formats, function(formatPriority, format) {
\t\t\t\t\tif(self[solution].support[format]) {
\t\t\t\t\t\tself[solution].used = true;
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});

\t\t\t// Init solution active state and the event gates to false.
\t\t\tthis._resetActive();
\t\t\tthis._resetGate();

\t\t\t// Set up the css selectors for the control and feedback entities.
\t\t\tthis._cssSelectorAncestor(this.options.cssSelectorAncestor);
\t\t\t
\t\t\t// If neither html nor flash are being used by this browser, then media playback is not possible. Trigger an error event.
\t\t\tif(!(this.html.used || this.flash.used)) {
\t\t\t\tthis._error( {
\t\t\t\t\ttype: \$.jPlayer.error.NO_SOLUTION, 
\t\t\t\t\tcontext: \"{solution:'\" + this.options.solution + \"', supplied:'\" + this.options.supplied + \"'}\",
\t\t\t\t\tmessage: \$.jPlayer.errorMsg.NO_SOLUTION,
\t\t\t\t\thint: \$.jPlayer.errorHint.NO_SOLUTION
\t\t\t\t});
\t\t\t\tif(this.css.jq.noSolution.length) {
\t\t\t\t\tthis.css.jq.noSolution.show();
\t\t\t\t}
\t\t\t} else {
\t\t\t\tif(this.css.jq.noSolution.length) {
\t\t\t\t\tthis.css.jq.noSolution.hide();
\t\t\t\t}
\t\t\t}

\t\t\t// Add the flash solution if it is being used.
\t\t\tif(this.flash.used) {
\t\t\t\tvar htmlObj,
\t\t\t\tflashVars = 'jQuery=' + encodeURI(this.options.noConflict) + '&id=' + encodeURI(this.internal.self.id) + '&vol=' + this.options.volume + '&muted=' + this.options.muted;

\t\t\t\t// Code influenced by SWFObject 2.2: http://code.google.com/p/swfobject/
\t\t\t\t// Non IE browsers have an initial Flash size of 1 by 1 otherwise the wmode affected the Flash ready event. 

\t\t\t\tif(\$.jPlayer.browser.msie && (Number(\$.jPlayer.browser.version) < 9 || \$.jPlayer.browser.documentMode < 9)) {
\t\t\t\t\tvar objStr = '<object id=\"' + this.internal.flash.id + '\" classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" width=\"0\" height=\"0\" tabindex=\"-1\"></object>';

\t\t\t\t\tvar paramStr = [
\t\t\t\t\t\t'<param name=\"movie\" value=\"' + this.internal.flash.swf + '\" />',
\t\t\t\t\t\t'<param name=\"FlashVars\" value=\"' + flashVars + '\" />',
\t\t\t\t\t\t'<param name=\"allowScriptAccess\" value=\"always\" />',
\t\t\t\t\t\t'<param name=\"bgcolor\" value=\"' + this.options.backgroundColor + '\" />',
\t\t\t\t\t\t'<param name=\"wmode\" value=\"' + this.options.wmode + '\" />'
\t\t\t\t\t];

\t\t\t\t\thtmlObj = document.createElement(objStr);
\t\t\t\t\tfor(var i=0; i < paramStr.length; i++) {
\t\t\t\t\t\thtmlObj.appendChild(document.createElement(paramStr[i]));
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tvar createParam = function(el, n, v) {
\t\t\t\t\t\tvar p = document.createElement(\"param\");
\t\t\t\t\t\tp.setAttribute(\"name\", n);\t
\t\t\t\t\t\tp.setAttribute(\"value\", v);
\t\t\t\t\t\tel.appendChild(p);
\t\t\t\t\t};

\t\t\t\t\thtmlObj = document.createElement(\"object\");
\t\t\t\t\thtmlObj.setAttribute(\"id\", this.internal.flash.id);
\t\t\t\t\thtmlObj.setAttribute(\"name\", this.internal.flash.id);
\t\t\t\t\thtmlObj.setAttribute(\"data\", this.internal.flash.swf);
\t\t\t\t\thtmlObj.setAttribute(\"type\", \"application/x-shockwave-flash\");
\t\t\t\t\thtmlObj.setAttribute(\"width\", \"1\"); // Non-zero
\t\t\t\t\thtmlObj.setAttribute(\"height\", \"1\"); // Non-zero
\t\t\t\t\thtmlObj.setAttribute(\"tabindex\", \"-1\");
\t\t\t\t\tcreateParam(htmlObj, \"flashvars\", flashVars);
\t\t\t\t\tcreateParam(htmlObj, \"allowscriptaccess\", \"always\");
\t\t\t\t\tcreateParam(htmlObj, \"bgcolor\", this.options.backgroundColor);
\t\t\t\t\tcreateParam(htmlObj, \"wmode\", this.options.wmode);
\t\t\t\t}

\t\t\t\tthis.element.append(htmlObj);
\t\t\t\tthis.internal.flash.jq = \$(htmlObj);
\t\t\t}
\t\t\t
\t\t\t// Add the HTML solution if being used.
\t\t\tif(this.html.used) {

\t\t\t\t// The HTML Audio handlers
\t\t\t\tif(this.html.audio.available) {
\t\t\t\t\tthis._addHtmlEventListeners(this.htmlElement.audio, this.html.audio);
\t\t\t\t\tthis.element.append(this.htmlElement.audio);
\t\t\t\t\tthis.internal.audio.jq = \$(\"#\" + this.internal.audio.id);
\t\t\t\t}

\t\t\t\t// The HTML Video handlers
\t\t\t\tif(this.html.video.available) {
\t\t\t\t\tthis._addHtmlEventListeners(this.htmlElement.video, this.html.video);
\t\t\t\t\tthis.element.append(this.htmlElement.video);
\t\t\t\t\tthis.internal.video.jq = \$(\"#\" + this.internal.video.id);
\t\t\t\t\tif(this.status.nativeVideoControls) {
\t\t\t\t\t\tthis.internal.video.jq.css({'width': this.status.width, 'height': this.status.height});
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.internal.video.jq.css({'width':'0px', 'height':'0px'}); // Using size 0x0 since a .hide() causes issues in iOS
\t\t\t\t\t}
\t\t\t\t\tthis.internal.video.jq.bind(\"click.jPlayer\", function() {
\t\t\t\t\t\tself._trigger(\$.jPlayer.event.click);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}

\t\t\t// Create the bridge that emulates the HTML Media element on the jPlayer DIV
\t\t\tif( this.options.emulateHtml ) {
\t\t\t\tthis._emulateHtmlBridge();
\t\t\t}

\t\t\tif(this.html.used && !this.flash.used) { // If only HTML, then emulate flash ready() call after 100ms.
\t\t\t\tsetTimeout( function() {
\t\t\t\t\tself.internal.ready = true;
\t\t\t\t\tself.version.flash = \"n/a\";
\t\t\t\t\tself._trigger(\$.jPlayer.event.repeat); // Trigger the repeat event so its handler can initialize itself with the loop option.
\t\t\t\t\tself._trigger(\$.jPlayer.event.ready);
\t\t\t\t}, 100);
\t\t\t}

\t\t\t// Initialize the interface components with the options.
\t\t\tthis._updateNativeVideoControls();
\t\t\t// The other controls are now setup in _cssSelectorAncestor()
\t\t\tif(this.css.jq.videoPlay.length) {
\t\t\t\tthis.css.jq.videoPlay.hide();
\t\t\t}

\t\t\t\$.jPlayer.prototype.count++; // Change static variable via prototype.
\t\t},
\t\tdestroy: function() {
\t\t\t// MJP: The background change remains. Would need to store the original to restore it correctly.
\t\t\t// MJP: The jPlayer element's size change remains.

\t\t\t// Clear the media to reset the GUI and stop any downloads. Streams on some browsers had persited. (Chrome)
\t\t\tthis.clearMedia();
\t\t\t// Remove the size/sizeFull cssClass from the cssSelectorAncestor
\t\t\tthis._removeUiClass();
\t\t\t// Remove the times from the GUI
\t\t\tif(this.css.jq.currentTime.length) {
\t\t\t\tthis.css.jq.currentTime.text(\"\");
\t\t\t}
\t\t\tif(this.css.jq.duration.length) {
\t\t\t\tthis.css.jq.duration.text(\"\");
\t\t\t}
\t\t\t// Remove any bindings from the interface controls.
\t\t\t\$.each(this.css.jq, function(fn, jq) {
\t\t\t\t// Check selector is valid before trying to execute method.
\t\t\t\tif(jq.length) {
\t\t\t\t\tjq.unbind(\".jPlayer\");
\t\t\t\t}
\t\t\t});
\t\t\t// Remove the click handlers for \$.jPlayer.event.click
\t\t\tthis.internal.poster.jq.unbind(\".jPlayer\");
\t\t\tif(this.internal.video.jq) {
\t\t\t\tthis.internal.video.jq.unbind(\".jPlayer\");
\t\t\t}
\t\t\t// Remove the fullscreen event handlers
\t\t\tthis._fullscreenRemoveEventListeners();
\t\t\t// Remove key bindings
\t\t\tif(this === \$.jPlayer.focus) {
\t\t\t\t\$.jPlayer.focus = null;
\t\t\t}
\t\t\t// Destroy the HTML bridge.
\t\t\tif(this.options.emulateHtml) {
\t\t\t\tthis._destroyHtmlBridge();
\t\t\t}
\t\t\tthis.element.removeData(\"jPlayer\"); // Remove jPlayer data
\t\t\tthis.element.unbind(\".jPlayer\"); // Remove all event handlers created by the jPlayer constructor
\t\t\tthis.element.empty(); // Remove the inserted child elements
\t\t\t
\t\t\tdelete this.instances[this.internal.instance]; // Clear the instance on the static instance object
\t\t},
\t\tenable: function() { // Plan to implement
\t\t\t// options.disabled = false
\t\t},
\t\tdisable: function () { // Plan to implement
\t\t\t// options.disabled = true
\t\t},
\t\t_testCanPlayType: function(elem) {
\t\t\t// IE9 on Win Server 2008 did not implement canPlayType(), but it has the property.
\t\t\ttry {
\t\t\t\telem.canPlayType(this.format.mp3.codec); // The type is irrelevant.
\t\t\t\treturn true;
\t\t\t} catch(err) {
\t\t\t\treturn false;
\t\t\t}
\t\t},
\t\t_uaBlocklist: function(list) {
\t\t\t// list : object with properties that are all regular expressions. Property names are irrelevant.
\t\t\t// Returns true if the user agent is matched in list.
\t\t\tvar\tua = navigator.userAgent.toLowerCase(),
\t\t\t\tblock = false;

\t\t\t\$.each(list, function(p, re) {
\t\t\t\tif(re && re.test(ua)) {
\t\t\t\t\tblock = true;
\t\t\t\t\treturn false; // exit \$.each.
\t\t\t\t}
\t\t\t});
\t\t\treturn block;
\t\t},
\t\t_restrictNativeVideoControls: function() {
\t\t\t// Fallback to noFullWindow when nativeVideoControls is true and audio media is being used. Affects when both media types are used.
\t\t\tif(this.require.audio) {
\t\t\t\tif(this.status.nativeVideoControls) {
\t\t\t\t\tthis.status.nativeVideoControls = false;
\t\t\t\t\tthis.status.noFullWindow = true;
\t\t\t\t}
\t\t\t}
\t\t},
\t\t_updateNativeVideoControls: function() {
\t\t\tif(this.html.video.available && this.html.used) {
\t\t\t\t// Turn the HTML Video controls on/off
\t\t\t\tthis.htmlElement.video.controls = this.status.nativeVideoControls;
\t\t\t\t// Show/hide the jPlayer GUI.
\t\t\t\tthis._updateAutohide();
\t\t\t\t// For when option changed. The poster image is not updated, as it is dealt with in setMedia(). Acceptable degradation since seriously doubt these options will change on the fly. Can again review later.
\t\t\t\tif(this.status.nativeVideoControls && this.require.video) {
\t\t\t\t\tthis.internal.poster.jq.hide();
\t\t\t\t\tthis.internal.video.jq.css({'width': this.status.width, 'height': this.status.height});
\t\t\t\t} else if(this.status.waitForPlay && this.status.video) {
\t\t\t\t\tthis.internal.poster.jq.show();
\t\t\t\t\tthis.internal.video.jq.css({'width': '0px', 'height': '0px'});
\t\t\t\t}
\t\t\t}
\t\t},
\t\t_addHtmlEventListeners: function(mediaElement, entity) {
\t\t\tvar self = this;
\t\t\tmediaElement.preload = this.options.preload;
\t\t\tmediaElement.muted = this.options.muted;
\t\t\tmediaElement.volume = this.options.volume;

\t\t\t// Create the event listeners
\t\t\t// Only want the active entity to affect jPlayer and bubble events.
\t\t\t// Using entity.gate so that object is referenced and gate property always current
\t\t\t
\t\t\tmediaElement.addEventListener(\"progress\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tif(self.internal.cmdsIgnored && this.readyState > 0) { // Detect iOS executed the command
\t\t\t\t\t\tself.internal.cmdsIgnored = false;
\t\t\t\t\t}
\t\t\t\t\tself._getHtmlStatus(mediaElement);
\t\t\t\t\tself._updateInterface();
\t\t\t\t\tself._trigger(\$.jPlayer.event.progress);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"timeupdate\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._getHtmlStatus(mediaElement);
\t\t\t\t\tself._updateInterface();
\t\t\t\t\tself._trigger(\$.jPlayer.event.timeupdate);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"durationchange\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._getHtmlStatus(mediaElement);
\t\t\t\t\tself._updateInterface();
\t\t\t\t\tself._trigger(\$.jPlayer.event.durationchange);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"play\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._updateButtons(true);
\t\t\t\t\tself._html_checkWaitForPlay(); // So the native controls update this variable and puts the hidden interface in the correct state. Affects toggling native controls.
\t\t\t\t\tself._trigger(\$.jPlayer.event.play);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"playing\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._updateButtons(true);
\t\t\t\t\tself._seeked();
\t\t\t\t\tself._trigger(\$.jPlayer.event.playing);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"pause\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._updateButtons(false);
\t\t\t\t\tself._trigger(\$.jPlayer.event.pause);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"waiting\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._seeking();
\t\t\t\t\tself._trigger(\$.jPlayer.event.waiting);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"seeking\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._seeking();
\t\t\t\t\tself._trigger(\$.jPlayer.event.seeking);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"seeked\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._seeked();
\t\t\t\t\tself._trigger(\$.jPlayer.event.seeked);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"volumechange\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\t// Read the values back from the element as the Blackberry PlayBook shares the volume with the physical buttons master volume control.
\t\t\t\t\t// However, when tested 6th July 2011, those buttons do not generate an event. The physical play/pause button does though.
\t\t\t\t\tself.options.volume = mediaElement.volume;
\t\t\t\t\tself.options.muted = mediaElement.muted;
\t\t\t\t\tself._updateMute();
\t\t\t\t\tself._updateVolume();
\t\t\t\t\tself._trigger(\$.jPlayer.event.volumechange);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"suspend\", function() { // Seems to be the only way of capturing that the iOS4 browser did not actually play the media from the page code. ie., It needs a user gesture.
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._seeked();
\t\t\t\t\tself._trigger(\$.jPlayer.event.suspend);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"ended\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\t// Order of the next few commands are important. Change the time and then pause.
\t\t\t\t\t// Solves a bug in Firefox, where issuing pause 1st causes the media to play from the start. ie., The pause is ignored.
\t\t\t\t\tif(!\$.jPlayer.browser.webkit) { // Chrome crashes if you do this in conjunction with a setMedia command in an ended event handler. ie., The playlist demo.
\t\t\t\t\t\tself.htmlElement.media.currentTime = 0; // Safari does not care about this command. ie., It works with or without this line. (Both Safari and Chrome are Webkit.)
\t\t\t\t\t}
\t\t\t\t\tself.htmlElement.media.pause(); // Pause otherwise a click on the progress bar will play from that point, when it shouldn't, since it stopped playback.
\t\t\t\t\tself._updateButtons(false);
\t\t\t\t\tself._getHtmlStatus(mediaElement, true); // With override true. Otherwise Chrome leaves progress at full.
\t\t\t\t\tself._updateInterface();
\t\t\t\t\tself._trigger(\$.jPlayer.event.ended);
\t\t\t\t}
\t\t\t}, false);
\t\t\tmediaElement.addEventListener(\"error\", function() {
\t\t\t\tif(entity.gate) {
\t\t\t\t\tself._updateButtons(false);
\t\t\t\t\tself._seeked();
\t\t\t\t\tif(self.status.srcSet) { // Deals with case of clearMedia() causing an error event.
\t\t\t\t\t\tclearTimeout(self.internal.htmlDlyCmdId); // Clears any delayed commands used in the HTML solution.
\t\t\t\t\t\tself.status.waitForLoad = true; // Allows the load operation to try again.
\t\t\t\t\t\tself.status.waitForPlay = true; // Reset since a play was captured.
\t\t\t\t\t\tif(self.status.video && !self.status.nativeVideoControls) {
\t\t\t\t\t\t\tself.internal.video.jq.css({'width':'0px', 'height':'0px'});
\t\t\t\t\t\t}
\t\t\t\t\t\tif(self._validString(self.status.media.poster) && !self.status.nativeVideoControls) {
\t\t\t\t\t\t\tself.internal.poster.jq.show();
\t\t\t\t\t\t}
\t\t\t\t\t\tif(self.css.jq.videoPlay.length) {
\t\t\t\t\t\t\tself.css.jq.videoPlay.show();
\t\t\t\t\t\t}
\t\t\t\t\t\tself._error( {
\t\t\t\t\t\t\ttype: \$.jPlayer.error.URL,
\t\t\t\t\t\t\tcontext: self.status.src, // this.src shows absolute urls. Want context to show the url given.
\t\t\t\t\t\t\tmessage: \$.jPlayer.errorMsg.URL,
\t\t\t\t\t\t\thint: \$.jPlayer.errorHint.URL
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}, false);
\t\t\t// Create all the other event listeners that bubble up to a jPlayer event from html, without being used by jPlayer.
\t\t\t\$.each(\$.jPlayer.htmlEvent, function(i, eventType) {
\t\t\t\tmediaElement.addEventListener(this, function() {
\t\t\t\t\tif(entity.gate) {
\t\t\t\t\t\tself._trigger(\$.jPlayer.event[eventType]);
\t\t\t\t\t}
\t\t\t\t}, false);
\t\t\t});
\t\t},
\t\t_getHtmlStatus: function(media, override) {
\t\t\tvar ct = 0, cpa = 0, sp = 0, cpr = 0;

\t\t\t// Fixes the duration bug in iOS, where the durationchange event occurs when media.duration is not always correct.
\t\t\t// Fixes the initial duration bug in BB OS7, where the media.duration is infinity and displays as NaN:NaN due to Date() using inifity.
\t\t\tif(isFinite(media.duration)) {
\t\t\t\tthis.status.duration = media.duration;
\t\t\t}

\t\t\tct = media.currentTime;
\t\t\tcpa = (this.status.duration > 0) ? 100 * ct / this.status.duration : 0;
\t\t\tif((typeof media.seekable === \"object\") && (media.seekable.length > 0)) {
\t\t\t\tsp = (this.status.duration > 0) ? 100 * media.seekable.end(media.seekable.length-1) / this.status.duration : 100;
\t\t\t\tcpr = (this.status.duration > 0) ? 100 * media.currentTime / media.seekable.end(media.seekable.length-1) : 0; // Duration conditional for iOS duration bug. ie., seekable.end is a NaN in that case.
\t\t\t} else {
\t\t\t\tsp = 100;
\t\t\t\tcpr = cpa;
\t\t\t}
\t\t\t
\t\t\tif(override) {
\t\t\t\tct = 0;
\t\t\t\tcpr = 0;
\t\t\t\tcpa = 0;
\t\t\t}

\t\t\tthis.status.seekPercent = sp;
\t\t\tthis.status.currentPercentRelative = cpr;
\t\t\tthis.status.currentPercentAbsolute = cpa;
\t\t\tthis.status.currentTime = ct;

\t\t\tthis.status.videoWidth = media.videoWidth;
\t\t\tthis.status.videoHeight = media.videoHeight;

\t\t\tthis.status.readyState = media.readyState;
\t\t\tthis.status.networkState = media.networkState;
\t\t\tthis.status.playbackRate = media.playbackRate;
\t\t\tthis.status.ended = media.ended;
\t\t},
\t\t_resetStatus: function() {
\t\t\tthis.status = \$.extend({}, this.status, \$.jPlayer.prototype.status); // Maintains the status properties that persist through a reset.
\t\t},
\t\t_trigger: function(eventType, error, warning) { // eventType always valid as called using \$.jPlayer.event.eventType
\t\t\tvar event = \$.Event(eventType);
\t\t\tevent.jPlayer = {};
\t\t\tevent.jPlayer.version = \$.extend({}, this.version);
\t\t\tevent.jPlayer.options = \$.extend(true, {}, this.options); // Deep copy
\t\t\tevent.jPlayer.status = \$.extend(true, {}, this.status); // Deep copy
\t\t\tevent.jPlayer.html = \$.extend(true, {}, this.html); // Deep copy
\t\t\tevent.jPlayer.flash = \$.extend(true, {}, this.flash); // Deep copy
\t\t\tif(error) {
\t\t\t\tevent.jPlayer.error = \$.extend({}, error);
\t\t\t}
\t\t\tif(warning) {
\t\t\t\tevent.jPlayer.warning = \$.extend({}, warning);
\t\t\t}
\t\t\tthis.element.trigger(event);
\t\t},
\t\tjPlayerFlashEvent: function(eventType, status) { // Called from Flash
\t\t\tif(eventType === \$.jPlayer.event.ready) {
\t\t\t\tif(!this.internal.ready) {
\t\t\t\t\tthis.internal.ready = true;
\t\t\t\t\tthis.internal.flash.jq.css({'width':'0px', 'height':'0px'}); // Once Flash generates the ready event, minimise to zero as it is not affected by wmode anymore.

\t\t\t\t\tthis.version.flash = status.version;
\t\t\t\t\tif(this.version.needFlash !== this.version.flash) {
\t\t\t\t\t\tthis._error( {
\t\t\t\t\t\t\ttype: \$.jPlayer.error.VERSION,
\t\t\t\t\t\t\tcontext: this.version.flash,
\t\t\t\t\t\t\tmessage: \$.jPlayer.errorMsg.VERSION + this.version.flash,
\t\t\t\t\t\t\thint: \$.jPlayer.errorHint.VERSION
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\tthis._trigger(\$.jPlayer.event.repeat); // Trigger the repeat event so its handler can initialize itself with the loop option.
\t\t\t\t\tthis._trigger(eventType);
\t\t\t\t} else {
\t\t\t\t\t// This condition occurs if the Flash is hidden and then shown again.
\t\t\t\t\t// Firefox also reloads the Flash if the CSS position changes. position:fixed is used for full screen.

\t\t\t\t\t// Only do this if the Flash is the solution being used at the moment. Affects Media players where both solution may be being used.
\t\t\t\t\tif(this.flash.gate) {

\t\t\t\t\t\t// Send the current status to the Flash now that it is ready (available) again.
\t\t\t\t\t\tif(this.status.srcSet) {

\t\t\t\t\t\t\t// Need to read original status before issuing the setMedia command.
\t\t\t\t\t\t\tvar\tcurrentTime = this.status.currentTime,
\t\t\t\t\t\t\t\tpaused = this.status.paused; 

\t\t\t\t\t\t\tthis.setMedia(this.status.media);
\t\t\t\t\t\t\tif(currentTime > 0) {
\t\t\t\t\t\t\t\tif(paused) {
\t\t\t\t\t\t\t\t\tthis.pause(currentTime);
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tthis.play(currentTime);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tthis._trigger(\$.jPlayer.event.flashreset);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tif(this.flash.gate) {
\t\t\t\tswitch(eventType) {
\t\t\t\t\tcase \$.jPlayer.event.progress:
\t\t\t\t\t\tthis._getFlashStatus(status);
\t\t\t\t\t\tthis._updateInterface();
\t\t\t\t\t\tthis._trigger(eventType);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \$.jPlayer.event.timeupdate:
\t\t\t\t\t\tthis._getFlashStatus(status);
\t\t\t\t\t\tthis._updateInterface();
\t\t\t\t\t\tthis._trigger(eventType);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \$.jPlayer.event.play:
\t\t\t\t\t\tthis._seeked();
\t\t\t\t\t\tthis._updateButtons(true);
\t\t\t\t\t\tthis._trigger(eventType);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \$.jPlayer.event.pause:
\t\t\t\t\t\tthis._updateButtons(false);
\t\t\t\t\t\tthis._trigger(eventType);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \$.jPlayer.event.ended:
\t\t\t\t\t\tthis._updateButtons(false);
\t\t\t\t\t\tthis._trigger(eventType);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \$.jPlayer.event.click:
\t\t\t\t\t\tthis._trigger(eventType); // This could be dealt with by the default
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \$.jPlayer.event.error:
\t\t\t\t\t\tthis.status.waitForLoad = true; // Allows the load operation to try again.
\t\t\t\t\t\tthis.status.waitForPlay = true; // Reset since a play was captured.
\t\t\t\t\t\tif(this.status.video) {
\t\t\t\t\t\t\tthis.internal.flash.jq.css({'width':'0px', 'height':'0px'});
\t\t\t\t\t\t}
\t\t\t\t\t\tif(this._validString(this.status.media.poster)) {
\t\t\t\t\t\t\tthis.internal.poster.jq.show();
\t\t\t\t\t\t}
\t\t\t\t\t\tif(this.css.jq.videoPlay.length && this.status.video) {
\t\t\t\t\t\t\tthis.css.jq.videoPlay.show();
\t\t\t\t\t\t}
\t\t\t\t\t\tif(this.status.video) { // Set up for another try. Execute before error event.
\t\t\t\t\t\t\tthis._flash_setVideo(this.status.media);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tthis._flash_setAudio(this.status.media);
\t\t\t\t\t\t}
\t\t\t\t\t\tthis._updateButtons(false);
\t\t\t\t\t\tthis._error( {
\t\t\t\t\t\t\ttype: \$.jPlayer.error.URL,
\t\t\t\t\t\t\tcontext:status.src,
\t\t\t\t\t\t\tmessage: \$.jPlayer.errorMsg.URL,
\t\t\t\t\t\t\thint: \$.jPlayer.errorHint.URL
\t\t\t\t\t\t});
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \$.jPlayer.event.seeking:
\t\t\t\t\t\tthis._seeking();
\t\t\t\t\t\tthis._trigger(eventType);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \$.jPlayer.event.seeked:
\t\t\t\t\t\tthis._seeked();
\t\t\t\t\t\tthis._trigger(eventType);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \$.jPlayer.event.ready:
\t\t\t\t\t\t// The ready event is handled outside the switch statement.
\t\t\t\t\t\t// Captured here otherwise 2 ready events would be generated if the ready event handler used setMedia.
\t\t\t\t\t\tbreak;
\t\t\t\t\tdefault:
\t\t\t\t\t\tthis._trigger(eventType);
\t\t\t\t}
\t\t\t}
\t\t\treturn false;
\t\t},
\t\t_getFlashStatus: function(status) {
\t\t\tthis.status.seekPercent = status.seekPercent;
\t\t\tthis.status.currentPercentRelative = status.currentPercentRelative;
\t\t\tthis.status.currentPercentAbsolute = status.currentPercentAbsolute;
\t\t\tthis.status.currentTime = status.currentTime;
\t\t\tthis.status.duration = status.duration;

\t\t\tthis.status.videoWidth = status.videoWidth;
\t\t\tthis.status.videoHeight = status.videoHeight;

\t\t\t// The Flash does not generate this information in this release
\t\t\tthis.status.readyState = 4; // status.readyState;
\t\t\tthis.status.networkState = 0; // status.networkState;
\t\t\tthis.status.playbackRate = 1; // status.playbackRate;
\t\t\tthis.status.ended = false; // status.ended;
\t\t},
\t\t_updateButtons: function(playing) {
\t\t\tif(playing === undefined) {
\t\t\t\tplaying = !this.status.paused;
\t\t\t} else {
\t\t\t\tthis.status.paused = !playing;
\t\t\t}
\t\t\tif(this.css.jq.play.length && this.css.jq.pause.length) {
\t\t\t\tif(playing) {
\t\t\t\t\tthis.css.jq.play.hide();
\t\t\t\t\tthis.css.jq.pause.show();
\t\t\t\t} else {
\t\t\t\t\tthis.css.jq.play.show();
\t\t\t\t\tthis.css.jq.pause.hide();
\t\t\t\t}
\t\t\t}
\t\t\tif(this.css.jq.restoreScreen.length && this.css.jq.fullScreen.length) {
\t\t\t\tif(this.status.noFullWindow) {
\t\t\t\t\tthis.css.jq.fullScreen.hide();
\t\t\t\t\tthis.css.jq.restoreScreen.hide();
\t\t\t\t} else if(this.options.fullWindow) {
\t\t\t\t\tthis.css.jq.fullScreen.hide();
\t\t\t\t\tthis.css.jq.restoreScreen.show();
\t\t\t\t} else {
\t\t\t\t\tthis.css.jq.fullScreen.show();
\t\t\t\t\tthis.css.jq.restoreScreen.hide();
\t\t\t\t}
\t\t\t}
\t\t\tif(this.css.jq.repeat.length && this.css.jq.repeatOff.length) {
\t\t\t\tif(this.options.loop) {
\t\t\t\t\tthis.css.jq.repeat.hide();
\t\t\t\t\tthis.css.jq.repeatOff.show();
\t\t\t\t} else {
\t\t\t\t\tthis.css.jq.repeat.show();
\t\t\t\t\tthis.css.jq.repeatOff.hide();
\t\t\t\t}
\t\t\t}
\t\t},
\t\t_updateInterface: function() {
\t\t\tif(this.css.jq.seekBar.length) {
\t\t\t\tthis.css.jq.seekBar.width(this.status.seekPercent+\"%\");
\t\t\t}
\t\t\tif(this.css.jq.playBar.length) {
\t\t\t\tif(this.options.smoothPlayBar) {
\t\t\t\t\tthis.css.jq.playBar.stop().animate({
\t\t\t\t\t\twidth: this.status.currentPercentAbsolute+\"%\"
\t\t\t\t\t}, 250, \"linear\");
\t\t\t\t} else {
\t\t\t\t\tthis.css.jq.playBar.width(this.status.currentPercentRelative+\"%\");
\t\t\t\t}
\t\t\t}
\t\t\tif(this.css.jq.currentTime.length) {
\t\t\t\tthis.css.jq.currentTime.text(this._convertTime(this.status.currentTime));
\t\t\t}
\t\t\tif(this.css.jq.duration.length) {
\t\t\t\tthis.css.jq.duration.text(this._convertTime(this.status.duration));
\t\t\t}
\t\t},
\t\t_convertTime: ConvertTime.prototype.time,
\t\t_seeking: function() {
\t\t\tif(this.css.jq.seekBar.length) {
\t\t\t\tthis.css.jq.seekBar.addClass(\"jp-seeking-bg\");
\t\t\t}
\t\t},
\t\t_seeked: function() {
\t\t\tif(this.css.jq.seekBar.length) {
\t\t\t\tthis.css.jq.seekBar.removeClass(\"jp-seeking-bg\");
\t\t\t}
\t\t},
\t\t_resetGate: function() {
\t\t\tthis.html.audio.gate = false;
\t\t\tthis.html.video.gate = false;
\t\t\tthis.flash.gate = false;
\t\t},
\t\t_resetActive: function() {
\t\t\tthis.html.active = false;
\t\t\tthis.flash.active = false;
\t\t},
\t\tsetMedia: function(media) {
\t\t
\t\t\t/*\tmedia[format] = String: URL of format. Must contain all of the supplied option's video or audio formats.
\t\t\t *\tmedia.poster = String: Video poster URL.
\t\t\t *\tmedia.subtitles = String: * NOT IMPLEMENTED * URL of subtitles SRT file
\t\t\t *\tmedia.chapters = String: * NOT IMPLEMENTED * URL of chapters SRT file
\t\t\t *\tmedia.stream = Boolean: * NOT IMPLEMENTED * Designating actual media streams. ie., \"false/undefined\" for files. Plan to refresh the flash every so often.
\t\t\t */

\t\t\tvar\tself = this,
\t\t\t\tsupported = false,
\t\t\t\tposterChanged = this.status.media.poster !== media.poster; // Compare before reset. Important for OSX Safari as this.htmlElement.poster.src is absolute, even if original poster URL was relative.

\t\t\tthis._resetMedia();
\t\t\tthis._resetGate();
\t\t\tthis._resetActive();

\t\t\t\$.each(this.formats, function(formatPriority, format) {
\t\t\t\tvar isVideo = self.format[format].media === 'video';
\t\t\t\t\$.each(self.solutions, function(solutionPriority, solution) {
\t\t\t\t\tif(self[solution].support[format] && self._validString(media[format])) { // Format supported in solution and url given for format.
\t\t\t\t\t\tvar isHtml = solution === 'html';

\t\t\t\t\t\tif(isVideo) {
\t\t\t\t\t\t\tif(isHtml) {
\t\t\t\t\t\t\t\tself.html.video.gate = true;
\t\t\t\t\t\t\t\tself._html_setVideo(media);
\t\t\t\t\t\t\t\tself.html.active = true;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tself.flash.gate = true;
\t\t\t\t\t\t\t\tself._flash_setVideo(media);
\t\t\t\t\t\t\t\tself.flash.active = true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(self.css.jq.videoPlay.length) {
\t\t\t\t\t\t\t\tself.css.jq.videoPlay.show();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tself.status.video = true;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tif(isHtml) {
\t\t\t\t\t\t\t\tself.html.audio.gate = true;
\t\t\t\t\t\t\t\tself._html_setAudio(media);
\t\t\t\t\t\t\t\tself.html.active = true;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tself.flash.gate = true;
\t\t\t\t\t\t\t\tself._flash_setAudio(media);
\t\t\t\t\t\t\t\tself.flash.active = true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(self.css.jq.videoPlay.length) {
\t\t\t\t\t\t\t\tself.css.jq.videoPlay.hide();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tself.status.video = false;
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\tsupported = true;
\t\t\t\t\t\treturn false; // Exit \$.each
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tif(supported) {
\t\t\t\t\treturn false; // Exit \$.each
\t\t\t\t}
\t\t\t});

\t\t\tif(supported) {
\t\t\t\tif(!(this.status.nativeVideoControls && this.html.video.gate)) {
\t\t\t\t\t// Set poster IMG if native video controls are not being used
\t\t\t\t\t// Note: With IE the IMG onload event occurs immediately when cached.
\t\t\t\t\t// Note: Poster hidden by default in _resetMedia()
\t\t\t\t\tif(this._validString(media.poster)) {
\t\t\t\t\t\tif(posterChanged) { // Since some browsers do not generate img onload event.
\t\t\t\t\t\t\tthis.htmlElement.poster.src = media.poster;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tthis.internal.poster.jq.show();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tthis.status.srcSet = true;
\t\t\t\tthis.status.media = \$.extend({}, media);
\t\t\t\tthis._updateButtons(false);
\t\t\t\tthis._updateInterface();
\t\t\t} else { // jPlayer cannot support any formats provided in this browser
\t\t\t\t// Send an error event
\t\t\t\tthis._error( {
\t\t\t\t\ttype: \$.jPlayer.error.NO_SUPPORT,
\t\t\t\t\tcontext: \"{supplied:'\" + this.options.supplied + \"'}\",
\t\t\t\t\tmessage: \$.jPlayer.errorMsg.NO_SUPPORT,
\t\t\t\t\thint: \$.jPlayer.errorHint.NO_SUPPORT
\t\t\t\t});
\t\t\t}
\t\t},
\t\t_resetMedia: function() {
\t\t\tthis._resetStatus();
\t\t\tthis._updateButtons(false);
\t\t\tthis._updateInterface();
\t\t\tthis._seeked();
\t\t\tthis.internal.poster.jq.hide();

\t\t\tclearTimeout(this.internal.htmlDlyCmdId);

\t\t\tif(this.html.active) {
\t\t\t\tthis._html_resetMedia();
\t\t\t} else if(this.flash.active) {
\t\t\t\tthis._flash_resetMedia();
\t\t\t}
\t\t},
\t\tclearMedia: function() {
\t\t\tthis._resetMedia();

\t\t\tif(this.html.active) {
\t\t\t\tthis._html_clearMedia();
\t\t\t} else if(this.flash.active) {
\t\t\t\tthis._flash_clearMedia();
\t\t\t}

\t\t\tthis._resetGate();
\t\t\tthis._resetActive();
\t\t},
\t\tload: function() {
\t\t\tif(this.status.srcSet) {
\t\t\t\tif(this.html.active) {
\t\t\t\t\tthis._html_load();
\t\t\t\t} else if(this.flash.active) {
\t\t\t\t\tthis._flash_load();
\t\t\t\t}
\t\t\t} else {
\t\t\t\tthis._urlNotSetError(\"load\");
\t\t\t}
\t\t},
\t\tfocus: function() {
\t\t\tif(this.options.keyEnabled) {
\t\t\t\t\$.jPlayer.focus = this;
\t\t\t}
\t\t},
\t\tplay: function(time) {
\t\t\ttime = (typeof time === \"number\") ? time : NaN; // Remove jQuery event from click handler
\t\t\tif(this.status.srcSet) {
\t\t\t\tthis.focus();
\t\t\t\tif(this.html.active) {
\t\t\t\t\tthis._html_play(time);
\t\t\t\t} else if(this.flash.active) {
\t\t\t\t\tthis._flash_play(time);
\t\t\t\t}
\t\t\t} else {
\t\t\t\tthis._urlNotSetError(\"play\");
\t\t\t}
\t\t},
\t\tvideoPlay: function() { // Handles clicks on the play button over the video poster
\t\t\tthis.play();
\t\t},
\t\tpause: function(time) {
\t\t\ttime = (typeof time === \"number\") ? time : NaN; // Remove jQuery event from click handler
\t\t\tif(this.status.srcSet) {
\t\t\t\tif(this.html.active) {
\t\t\t\t\tthis._html_pause(time);
\t\t\t\t} else if(this.flash.active) {
\t\t\t\t\tthis._flash_pause(time);
\t\t\t\t}
\t\t\t} else {
\t\t\t\tthis._urlNotSetError(\"pause\");
\t\t\t}
\t\t},
\t\tpauseOthers: function() {
\t\t\tvar self = this;
\t\t\t\$.each(this.instances, function(i, element) {
\t\t\t\tif(self.element !== element) { // Do not this instance.
\t\t\t\t\tif(element.data(\"jPlayer\").status.srcSet) { // Check that media is set otherwise would cause error event.
\t\t\t\t\t\telement.jPlayer(\"pause\");
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t},
\t\tstop: function() {
\t\t\tif(this.status.srcSet) {
\t\t\t\tif(this.html.active) {
\t\t\t\t\tthis._html_pause(0);
\t\t\t\t} else if(this.flash.active) {
\t\t\t\t\tthis._flash_pause(0);
\t\t\t\t}
\t\t\t} else {
\t\t\t\tthis._urlNotSetError(\"stop\");
\t\t\t}
\t\t},
\t\tplayHead: function(p) {
\t\t\tp = this._limitValue(p, 0, 100);
\t\t\tif(this.status.srcSet) {
\t\t\t\tif(this.html.active) {
\t\t\t\t\tthis._html_playHead(p);
\t\t\t\t} else if(this.flash.active) {
\t\t\t\t\tthis._flash_playHead(p);
\t\t\t\t}
\t\t\t} else {
\t\t\t\tthis._urlNotSetError(\"playHead\");
\t\t\t}
\t\t},
\t\t_muted: function(muted) {
\t\t\tthis.options.muted = muted;
\t\t\tif(this.html.used) {
\t\t\t\tthis._html_mute(muted);
\t\t\t}
\t\t\tif(this.flash.used) {
\t\t\t\tthis._flash_mute(muted);
\t\t\t}

\t\t\t// The HTML solution generates this event from the media element itself.
\t\t\tif(!this.html.video.gate && !this.html.audio.gate) {
\t\t\t\tthis._updateMute(muted);
\t\t\t\tthis._updateVolume(this.options.volume);
\t\t\t\tthis._trigger(\$.jPlayer.event.volumechange);
\t\t\t}
\t\t},
\t\tmute: function(mute) { // mute is either: undefined (true), an event object (true) or a boolean (muted).
\t\t\tmute = mute === undefined ? true : !!mute;
\t\t\tthis._muted(mute);
\t\t},
\t\tunmute: function(unmute) { // unmute is either: undefined (true), an event object (true) or a boolean (!muted).
\t\t\tunmute = unmute === undefined ? true : !!unmute;
\t\t\tthis._muted(!unmute);
\t\t},
\t\t_updateMute: function(mute) {
\t\t\tif(mute === undefined) {
\t\t\t\tmute = this.options.muted;
\t\t\t}
\t\t\tif(this.css.jq.mute.length && this.css.jq.unmute.length) {
\t\t\t\tif(this.status.noVolume) {
\t\t\t\t\tthis.css.jq.mute.hide();
\t\t\t\t\tthis.css.jq.unmute.hide();
\t\t\t\t} else if(mute) {
\t\t\t\t\tthis.css.jq.mute.hide();
\t\t\t\t\tthis.css.jq.unmute.show();
\t\t\t\t} else {
\t\t\t\t\tthis.css.jq.mute.show();
\t\t\t\t\tthis.css.jq.unmute.hide();
\t\t\t\t}
\t\t\t}
\t\t},
\t\tvolume: function(v) {
\t\t\tv = this._limitValue(v, 0, 1);
\t\t\tthis.options.volume = v;

\t\t\tif(this.html.used) {
\t\t\t\tthis._html_volume(v);
\t\t\t}
\t\t\tif(this.flash.used) {
\t\t\t\tthis._flash_volume(v);
\t\t\t}

\t\t\t// The HTML solution generates this event from the media element itself.
\t\t\tif(!this.html.video.gate && !this.html.audio.gate) {
\t\t\t\tthis._updateVolume(v);
\t\t\t\tthis._trigger(\$.jPlayer.event.volumechange);
\t\t\t}
\t\t},
\t\tvolumeBar: function(e) { // Handles clicks on the volumeBar
\t\t\tif(this.css.jq.volumeBar.length) {
\t\t\t\t// Using \$(e.currentTarget) to enable multiple volume bars
\t\t\t\tvar \$bar = \$(e.currentTarget),
\t\t\t\t\toffset = \$bar.offset(),
\t\t\t\t\tx = e.pageX - offset.left,
\t\t\t\t\tw = \$bar.width(),
\t\t\t\t\ty = \$bar.height() - e.pageY + offset.top,
\t\t\t\t\th = \$bar.height();
\t\t\t\tif(this.options.verticalVolume) {
\t\t\t\t\tthis.volume(y/h);
\t\t\t\t} else {
\t\t\t\t\tthis.volume(x/w);
\t\t\t\t}
\t\t\t}
\t\t\tif(this.options.muted) {
\t\t\t\tthis._muted(false);
\t\t\t}
\t\t},
\t\tvolumeBarValue: function() { // Handles clicks on the volumeBarValue
\t\t\t// The volumeBar handles this event as the event propagates up the DOM.
\t\t},
\t\t_updateVolume: function(v) {
\t\t\tif(v === undefined) {
\t\t\t\tv = this.options.volume;
\t\t\t}
\t\t\tv = this.options.muted ? 0 : v;

\t\t\tif(this.status.noVolume) {
\t\t\t\tif(this.css.jq.volumeBar.length) {
\t\t\t\t\tthis.css.jq.volumeBar.hide();
\t\t\t\t}
\t\t\t\tif(this.css.jq.volumeBarValue.length) {
\t\t\t\t\tthis.css.jq.volumeBarValue.hide();
\t\t\t\t}
\t\t\t\tif(this.css.jq.volumeMax.length) {
\t\t\t\t\tthis.css.jq.volumeMax.hide();
\t\t\t\t}
\t\t\t} else {
\t\t\t\tif(this.css.jq.volumeBar.length) {
\t\t\t\t\tthis.css.jq.volumeBar.show();
\t\t\t\t}
\t\t\t\tif(this.css.jq.volumeBarValue.length) {
\t\t\t\t\tthis.css.jq.volumeBarValue.show();
\t\t\t\t\tthis.css.jq.volumeBarValue[this.options.verticalVolume ? \"height\" : \"width\"]((v*100)+\"%\");
\t\t\t\t}
\t\t\t\tif(this.css.jq.volumeMax.length) {
\t\t\t\t\tthis.css.jq.volumeMax.show();
\t\t\t\t}
\t\t\t}
\t\t},
\t\tvolumeMax: function() { // Handles clicks on the volume max
\t\t\tthis.volume(1);
\t\t\tif(this.options.muted) {
\t\t\t\tthis._muted(false);
\t\t\t}
\t\t},
\t\t_cssSelectorAncestor: function(ancestor) {
\t\t\tvar self = this;
\t\t\tthis.options.cssSelectorAncestor = ancestor;
\t\t\tthis._removeUiClass();
\t\t\tthis.ancestorJq = ancestor ? \$(ancestor) : []; // Would use \$() instead of [], but it is only 1.4+
\t\t\tif(ancestor && this.ancestorJq.length !== 1) { // So empty strings do not generate the warning.
\t\t\t\tthis._warning( {
\t\t\t\t\ttype: \$.jPlayer.warning.CSS_SELECTOR_COUNT,
\t\t\t\t\tcontext: ancestor,
\t\t\t\t\tmessage: \$.jPlayer.warningMsg.CSS_SELECTOR_COUNT + this.ancestorJq.length + \" found for cssSelectorAncestor.\",
\t\t\t\t\thint: \$.jPlayer.warningHint.CSS_SELECTOR_COUNT
\t\t\t\t});
\t\t\t}
\t\t\tthis._addUiClass();
\t\t\t\$.each(this.options.cssSelector, function(fn, cssSel) {
\t\t\t\tself._cssSelector(fn, cssSel);
\t\t\t});

\t\t\t// Set the GUI to the current state.
\t\t\tthis._updateInterface();
\t\t\tthis._updateButtons();
\t\t\tthis._updateAutohide();
\t\t\tthis._updateVolume();
\t\t\tthis._updateMute();
\t\t},
\t\t_cssSelector: function(fn, cssSel) {
\t\t\tvar self = this;
\t\t\tif(typeof cssSel === 'string') {
\t\t\t\tif(\$.jPlayer.prototype.options.cssSelector[fn]) {
\t\t\t\t\tif(this.css.jq[fn] && this.css.jq[fn].length) {
\t\t\t\t\t\tthis.css.jq[fn].unbind(\".jPlayer\");
\t\t\t\t\t}
\t\t\t\t\tthis.options.cssSelector[fn] = cssSel;
\t\t\t\t\tthis.css.cs[fn] = this.options.cssSelectorAncestor + \" \" + cssSel;

\t\t\t\t\tif(cssSel) { // Checks for empty string
\t\t\t\t\t\tthis.css.jq[fn] = \$(this.css.cs[fn]);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.css.jq[fn] = []; // To comply with the css.jq[fn].length check before its use. As of jQuery 1.4 could have used \$() for an empty set. 
\t\t\t\t\t}

\t\t\t\t\tif(this.css.jq[fn].length) {
\t\t\t\t\t\tvar handler = function(e) {
\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\tself[fn](e);
\t\t\t\t\t\t\t\$(this).blur();
\t\t\t\t\t\t};
\t\t\t\t\t\tthis.css.jq[fn].bind(\"click.jPlayer\", handler); // Using jPlayer namespace
\t\t\t\t\t}

\t\t\t\t\tif(cssSel && this.css.jq[fn].length !== 1) { // So empty strings do not generate the warning. ie., they just remove the old one.
\t\t\t\t\t\tthis._warning( {
\t\t\t\t\t\t\ttype: \$.jPlayer.warning.CSS_SELECTOR_COUNT,
\t\t\t\t\t\t\tcontext: this.css.cs[fn],
\t\t\t\t\t\t\tmessage: \$.jPlayer.warningMsg.CSS_SELECTOR_COUNT + this.css.jq[fn].length + \" found for \" + fn + \" method.\",
\t\t\t\t\t\t\thint: \$.jPlayer.warningHint.CSS_SELECTOR_COUNT
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tthis._warning( {
\t\t\t\t\t\ttype: \$.jPlayer.warning.CSS_SELECTOR_METHOD,
\t\t\t\t\t\tcontext: fn,
\t\t\t\t\t\tmessage: \$.jPlayer.warningMsg.CSS_SELECTOR_METHOD,
\t\t\t\t\t\thint: \$.jPlayer.warningHint.CSS_SELECTOR_METHOD
\t\t\t\t\t});
\t\t\t\t}
\t\t\t} else {
\t\t\t\tthis._warning( {
\t\t\t\t\ttype: \$.jPlayer.warning.CSS_SELECTOR_STRING,
\t\t\t\t\tcontext: cssSel,
\t\t\t\t\tmessage: \$.jPlayer.warningMsg.CSS_SELECTOR_STRING,
\t\t\t\t\thint: \$.jPlayer.warningHint.CSS_SELECTOR_STRING
\t\t\t\t});
\t\t\t}
\t\t},
\t\tseekBar: function(e) { // Handles clicks on the seekBar
\t\t\tif(this.css.jq.seekBar.length) {
\t\t\t\t// Using \$(e.currentTarget) to enable multiple seek bars
\t\t\t\tvar \$bar = \$(e.currentTarget),
\t\t\t\t\toffset = \$bar.offset(),
\t\t\t\t\tx = e.pageX - offset.left,
\t\t\t\t\tw = \$bar.width(),
\t\t\t\t\tp = 100 * x / w;
\t\t\t\tthis.playHead(p);
\t\t\t}
\t\t},
\t\tplayBar: function() { // Handles clicks on the playBar
\t\t\t// The seekBar handles this event as the event propagates up the DOM.
\t\t},
\t\trepeat: function() { // Handle clicks on the repeat button
\t\t\tthis._loop(true);
\t\t},
\t\trepeatOff: function() { // Handle clicks on the repeatOff button
\t\t\tthis._loop(false);
\t\t},
\t\t_loop: function(loop) {
\t\t\tif(this.options.loop !== loop) {
\t\t\t\tthis.options.loop = loop;
\t\t\t\tthis._updateButtons();
\t\t\t\tthis._trigger(\$.jPlayer.event.repeat);
\t\t\t}
\t\t},

\t\t// Plan to review the cssSelector method to cope with missing associated functions accordingly.

\t\tcurrentTime: function() { // Handles clicks on the text
\t\t\t// Added to avoid errors using cssSelector system for the text
\t\t},
\t\tduration: function() { // Handles clicks on the text
\t\t\t// Added to avoid errors using cssSelector system for the text
\t\t},
\t\tgui: function() { // Handles clicks on the gui
\t\t\t// Added to avoid errors using cssSelector system for the gui
\t\t},
\t\tnoSolution: function() { // Handles clicks on the error message
\t\t\t// Added to avoid errors using cssSelector system for no-solution
\t\t},

\t\t// Options code adapted from ui.widget.js (1.8.7).  Made changes so the key can use dot notation. To match previous getData solution in jPlayer 1.
\t\toption: function(key, value) {
\t\t\tvar options = key;

\t\t\t // Enables use: options().  Returns a copy of options object
\t\t\tif ( arguments.length === 0 ) {
\t\t\t\treturn \$.extend( true, {}, this.options );
\t\t\t}

\t\t\tif(typeof key === \"string\") {
\t\t\t\tvar keys = key.split(\".\");

\t\t\t\t // Enables use: options(\"someOption\")  Returns a copy of the option. Supports dot notation.
\t\t\t\tif(value === undefined) {

\t\t\t\t\tvar opt = \$.extend(true, {}, this.options);
\t\t\t\t\tfor(var i = 0; i < keys.length; i++) {
\t\t\t\t\t\tif(opt[keys[i]] !== undefined) {
\t\t\t\t\t\t\topt = opt[keys[i]];
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tthis._warning( {
\t\t\t\t\t\t\t\ttype: \$.jPlayer.warning.OPTION_KEY,
\t\t\t\t\t\t\t\tcontext: key,
\t\t\t\t\t\t\t\tmessage: \$.jPlayer.warningMsg.OPTION_KEY,
\t\t\t\t\t\t\t\thint: \$.jPlayer.warningHint.OPTION_KEY
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\treturn undefined;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\treturn opt;
\t\t\t\t}

\t\t\t\t // Enables use: options(\"someOptionObject\", someObject}).  Creates: {someOptionObject:someObject}
\t\t\t\t // Enables use: options(\"someOption\", someValue).  Creates: {someOption:someValue}
\t\t\t\t // Enables use: options(\"someOptionObject.someOption\", someValue).  Creates: {someOptionObject:{someOption:someValue}}

\t\t\t\toptions = {};
\t\t\t\tvar opts = options;

\t\t\t\tfor(var j = 0; j < keys.length; j++) {
\t\t\t\t\tif(j < keys.length - 1) {
\t\t\t\t\t\topts[keys[j]] = {};
\t\t\t\t\t\topts = opts[keys[j]];
\t\t\t\t\t} else {
\t\t\t\t\t\topts[keys[j]] = value;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t // Otherwise enables use: options(optionObject).  Uses original object (the key)

\t\t\tthis._setOptions(options);

\t\t\treturn this;
\t\t},
\t\t_setOptions: function(options) {
\t\t\tvar self = this;
\t\t\t\$.each(options, function(key, value) { // This supports the 2 level depth that the options of jPlayer has. Would review if we ever need more depth.
\t\t\t\tself._setOption(key, value);
\t\t\t});

\t\t\treturn this;
\t\t},
\t\t_setOption: function(key, value) {
\t\t\tvar self = this;

\t\t\t// The ability to set options is limited at this time.

\t\t\tswitch(key) {
\t\t\t\tcase \"volume\" :
\t\t\t\t\tthis.volume(value);
\t\t\t\t\tbreak;
\t\t\t\tcase \"muted\" :
\t\t\t\t\tthis._muted(value);
\t\t\t\t\tbreak;
\t\t\t\tcase \"cssSelectorAncestor\" :
\t\t\t\t\tthis._cssSelectorAncestor(value); // Set and refresh all associations for the new ancestor.
\t\t\t\t\tbreak;
\t\t\t\tcase \"cssSelector\" :
\t\t\t\t\t\$.each(value, function(fn, cssSel) {
\t\t\t\t\t\tself._cssSelector(fn, cssSel); // NB: The option is set inside this function, after further validity checks.
\t\t\t\t\t});
\t\t\t\t\tbreak;
\t\t\t\tcase \"fullScreen\" :
\t\t\t\t\tif(this.options[key] !== value) { // if changed
\t\t\t\t\t\tvar wkv = \$.jPlayer.nativeFeatures.fullscreen.used.webkitVideo;
\t\t\t\t\t\tif(!wkv || wkv && !this.status.waitForPlay) {
\t\t\t\t\t\t\tif(!wkv) { // No sensible way to unset option on these devices.
\t\t\t\t\t\t\t\tthis.options[key] = value;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(value) {
\t\t\t\t\t\t\t\tthis._requestFullscreen();
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tthis._exitFullscreen();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(!wkv) {
\t\t\t\t\t\t\t\tthis._setOption(\"fullWindow\", value);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase \"fullWindow\" :
\t\t\t\t\tif(this.options[key] !== value) { // if changed
\t\t\t\t\t\tthis._removeUiClass();
\t\t\t\t\t\tthis.options[key] = value;
\t\t\t\t\t\tthis._refreshSize();
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase \"size\" :
\t\t\t\t\tif(!this.options.fullWindow && this.options[key].cssClass !== value.cssClass) {
\t\t\t\t\t\tthis._removeUiClass();
\t\t\t\t\t}
\t\t\t\t\tthis.options[key] = \$.extend({}, this.options[key], value); // store a merged copy of it, incase not all properties changed.
\t\t\t\t\tthis._refreshSize();
\t\t\t\t\tbreak;
\t\t\t\tcase \"sizeFull\" :
\t\t\t\t\tif(this.options.fullWindow && this.options[key].cssClass !== value.cssClass) {
\t\t\t\t\t\tthis._removeUiClass();
\t\t\t\t\t}
\t\t\t\t\tthis.options[key] = \$.extend({}, this.options[key], value); // store a merged copy of it, incase not all properties changed.
\t\t\t\t\tthis._refreshSize();
\t\t\t\t\tbreak;
\t\t\t\tcase \"autohide\" :
\t\t\t\t\tthis.options[key] = \$.extend({}, this.options[key], value); // store a merged copy of it, incase not all properties changed.
\t\t\t\t\tthis._updateAutohide();
\t\t\t\t\tbreak;
\t\t\t\tcase \"loop\" :
\t\t\t\t\tthis._loop(value);
\t\t\t\t\tbreak;
\t\t\t\tcase \"nativeVideoControls\" :
\t\t\t\t\tthis.options[key] = \$.extend({}, this.options[key], value); // store a merged copy of it, incase not all properties changed.
\t\t\t\t\tthis.status.nativeVideoControls = this._uaBlocklist(this.options.nativeVideoControls);
\t\t\t\t\tthis._restrictNativeVideoControls();
\t\t\t\t\tthis._updateNativeVideoControls();
\t\t\t\t\tbreak;
\t\t\t\tcase \"noFullWindow\" :
\t\t\t\t\tthis.options[key] = \$.extend({}, this.options[key], value); // store a merged copy of it, incase not all properties changed.
\t\t\t\t\tthis.status.nativeVideoControls = this._uaBlocklist(this.options.nativeVideoControls); // Need to check again as noFullWindow can depend on this flag and the restrict() can override it.
\t\t\t\t\tthis.status.noFullWindow = this._uaBlocklist(this.options.noFullWindow);
\t\t\t\t\tthis._restrictNativeVideoControls();
\t\t\t\t\tthis._updateButtons();
\t\t\t\t\tbreak;
\t\t\t\tcase \"noVolume\" :
\t\t\t\t\tthis.options[key] = \$.extend({}, this.options[key], value); // store a merged copy of it, incase not all properties changed.
\t\t\t\t\tthis.status.noVolume = this._uaBlocklist(this.options.noVolume);
\t\t\t\t\tthis._updateVolume();
\t\t\t\t\tthis._updateMute();
\t\t\t\t\tbreak;
\t\t\t\tcase \"emulateHtml\" :
\t\t\t\t\tif(this.options[key] !== value) { // To avoid multiple event handlers being created, if true already.
\t\t\t\t\t\tthis.options[key] = value;
\t\t\t\t\t\tif(value) {
\t\t\t\t\t\t\tthis._emulateHtmlBridge();
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tthis._destroyHtmlBridge();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase \"timeFormat\" :
\t\t\t\t\tthis.options[key] = \$.extend({}, this.options[key], value); // store a merged copy of it, incase not all properties changed.
\t\t\t\t\tbreak;
\t\t\t\tcase \"keyEnabled\" :
\t\t\t\t\tthis.options[key] = value;
\t\t\t\t\tif(!value && this === \$.jPlayer.focus) {
\t\t\t\t\t\t\$.jPlayer.focus = null;
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase \"keyBindings\" :
\t\t\t\t\tthis.options[key] = \$.extend(true, {}, this.options[key], value); // store a merged DEEP copy of it, incase not all properties changed.
\t\t\t\t\tbreak;
\t\t\t\tcase \"audioFullScreen\" :
\t\t\t\t\tthis.options[key] = value;
\t\t\t\t\tbreak;
\t\t\t}

\t\t\treturn this;
\t\t},
\t\t// End of: (Options code adapted from ui.widget.js)

\t\t_refreshSize: function() {
\t\t\tthis._setSize(); // update status and jPlayer element size
\t\t\tthis._addUiClass(); // update the ui class
\t\t\tthis._updateSize(); // update internal sizes
\t\t\tthis._updateButtons();
\t\t\tthis._updateAutohide();
\t\t\tthis._trigger(\$.jPlayer.event.resize);
\t\t},
\t\t_setSize: function() {
\t\t\t// Determine the current size from the options
\t\t\tif(this.options.fullWindow) {
\t\t\t\tthis.status.width = this.options.sizeFull.width;
\t\t\t\tthis.status.height = this.options.sizeFull.height;
\t\t\t\tthis.status.cssClass = this.options.sizeFull.cssClass;
\t\t\t} else {
\t\t\t\tthis.status.width = this.options.size.width;
\t\t\t\tthis.status.height = this.options.size.height;
\t\t\t\tthis.status.cssClass = this.options.size.cssClass;
\t\t\t}

\t\t\t// Set the size of the jPlayer area.
\t\t\tthis.element.css({'width': this.status.width, 'height': this.status.height});
\t\t},
\t\t_addUiClass: function() {
\t\t\tif(this.ancestorJq.length) {
\t\t\t\tthis.ancestorJq.addClass(this.status.cssClass);
\t\t\t}
\t\t},
\t\t_removeUiClass: function() {
\t\t\tif(this.ancestorJq.length) {
\t\t\t\tthis.ancestorJq.removeClass(this.status.cssClass);
\t\t\t}
\t\t},
\t\t_updateSize: function() {
\t\t\t// The poster uses show/hide so can simply resize it.
\t\t\tthis.internal.poster.jq.css({'width': this.status.width, 'height': this.status.height});

\t\t\t// Video html or flash resized if necessary at this time, or if native video controls being used.
\t\t\tif(!this.status.waitForPlay && this.html.active && this.status.video || this.html.video.available && this.html.used && this.status.nativeVideoControls) {
\t\t\t\tthis.internal.video.jq.css({'width': this.status.width, 'height': this.status.height});
\t\t\t}
\t\t\telse if(!this.status.waitForPlay && this.flash.active && this.status.video) {
\t\t\t\tthis.internal.flash.jq.css({'width': this.status.width, 'height': this.status.height});
\t\t\t}
\t\t},
\t\t_updateAutohide: function() {
\t\t\tvar\tself = this,
\t\t\t\tevent = \"mousemove.jPlayer\",
\t\t\t\tnamespace = \".jPlayerAutohide\",
\t\t\t\teventType = event + namespace,
\t\t\t\thandler = function() {
\t\t\t\t\tself.css.jq.gui.fadeIn(self.options.autohide.fadeIn, function() {
\t\t\t\t\t\tclearTimeout(self.internal.autohideId);
\t\t\t\t\t\tself.internal.autohideId = setTimeout( function() {
\t\t\t\t\t\t\tself.css.jq.gui.fadeOut(self.options.autohide.fadeOut);
\t\t\t\t\t\t}, self.options.autohide.hold);
\t\t\t\t\t});
\t\t\t\t};

\t\t\tif(this.css.jq.gui.length) {

\t\t\t\t// End animations first so that its callback is executed now.
\t\t\t\t// Otherwise an in progress fadeIn animation still has the callback to fadeOut again.
\t\t\t\tthis.css.jq.gui.stop(true, true);

\t\t\t\t// Removes the fadeOut operation from the fadeIn callback.
\t\t\t\tclearTimeout(this.internal.autohideId);

\t\t\t\tthis.element.unbind(namespace);
\t\t\t\tthis.css.jq.gui.unbind(namespace);

\t\t\t\tif(!this.status.nativeVideoControls) {
\t\t\t\t\tif(this.options.fullWindow && this.options.autohide.full || !this.options.fullWindow && this.options.autohide.restored) {
\t\t\t\t\t\tthis.element.bind(eventType, handler);
\t\t\t\t\t\tthis.css.jq.gui.bind(eventType, handler);
\t\t\t\t\t\tthis.css.jq.gui.hide();
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.css.jq.gui.show();
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tthis.css.jq.gui.hide();
\t\t\t\t}
\t\t\t}
\t\t},
\t\tfullScreen: function() {
\t\t\tthis._setOption(\"fullScreen\", true);
\t\t},
\t\trestoreScreen: function() {
\t\t\tthis._setOption(\"fullScreen\", false);
\t\t},
\t\t_fullscreenAddEventListeners: function() {
\t\t\tvar self = this,
\t\t\t\tfs = \$.jPlayer.nativeFeatures.fullscreen;

\t\t\tif(fs.api.fullscreenEnabled) {
\t\t\t\tif(fs.event.fullscreenchange) {
\t\t\t\t\t// Create the event handler function and store it for removal.
\t\t\t\t\tif(typeof this.internal.fullscreenchangeHandler !== 'function') {
\t\t\t\t\t\tthis.internal.fullscreenchangeHandler = function() {
\t\t\t\t\t\t\tself._fullscreenchange();
\t\t\t\t\t\t};
\t\t\t\t\t}
\t\t\t\t\tdocument.addEventListener(fs.event.fullscreenchange, this.internal.fullscreenchangeHandler, false);
\t\t\t\t}
\t\t\t\t// No point creating handler for fullscreenerror.
\t\t\t\t// Either logic avoids fullscreen occurring (w3c/moz), or their is no event on the browser (webkit).
\t\t\t}
\t\t},
\t\t_fullscreenRemoveEventListeners: function() {
\t\t\tvar fs = \$.jPlayer.nativeFeatures.fullscreen;
\t\t\tif(this.internal.fullscreenchangeHandler) {
\t\t\t\tdocument.addEventListener(fs.event.fullscreenchange, this.internal.fullscreenchangeHandler, false);
\t\t\t}
\t\t},
\t\t_fullscreenchange: function() {
\t\t\t// If nothing is fullscreen, then we cannot be in fullscreen mode.
\t\t\tif(this.options.fullScreen && !\$.jPlayer.nativeFeatures.fullscreen.api.fullscreenElement()) {
\t\t\t\tthis._setOption(\"fullScreen\", false);
\t\t\t}
\t\t},
\t\t_requestFullscreen: function() {
\t\t\t// Either the container or the jPlayer div
\t\t\tvar e = this.ancestorJq.length ? this.ancestorJq[0] : this.element[0],
\t\t\t\tfs = \$.jPlayer.nativeFeatures.fullscreen;

\t\t\t// This method needs the video element. For iOS and Android.
\t\t\tif(fs.used.webkitVideo) {
\t\t\t\te = this.htmlElement.video;
\t\t\t}

\t\t\tif(fs.api.fullscreenEnabled) {
\t\t\t\tfs.api.requestFullscreen(e);
\t\t\t}
\t\t},
\t\t_exitFullscreen: function() {

\t\t\tvar fs = \$.jPlayer.nativeFeatures.fullscreen,
\t\t\t\te;

\t\t\t// This method needs the video element. For iOS and Android.
\t\t\tif(fs.used.webkitVideo) {
\t\t\t\te = this.htmlElement.video;
\t\t\t}

\t\t\tif(fs.api.fullscreenEnabled) {
\t\t\t\tfs.api.exitFullscreen(e);
\t\t\t}
\t\t},
\t\t_html_initMedia: function(media) {
\t\t\t// Remove any existing track elements
\t\t\tvar \$media = \$(this.htmlElement.media).empty();

\t\t\t// Create any track elements given with the media, as an Array of track Objects.
\t\t\t\$.each(media.track || [], function(i,v) {
\t\t\t\tvar track = document.createElement('track');
\t\t\t\ttrack.setAttribute(\"kind\", v.kind ? v.kind : \"\");
\t\t\t\ttrack.setAttribute(\"src\", v.src ? v.src : \"\");
\t\t\t\ttrack.setAttribute(\"srclang\", v.srclang ? v.srclang : \"\");
\t\t\t\ttrack.setAttribute(\"label\", v.label ? v.label : \"\");
\t\t\t\tif(v.def) {
\t\t\t\t\ttrack.setAttribute(\"default\", v.def);
\t\t\t\t}
\t\t\t\t\$media.append(track);
\t\t\t});

\t\t\tthis.htmlElement.media.src = this.status.src;

\t\t\tif(this.options.preload !== 'none') {
\t\t\t\tthis._html_load(); // See function for comments
\t\t\t}
\t\t\tthis._trigger(\$.jPlayer.event.timeupdate); // The flash generates this event for its solution.
\t\t},
\t\t_html_setFormat: function(media) {
\t\t\tvar self = this;
\t\t\t// Always finds a format due to checks in setMedia()
\t\t\t\$.each(this.formats, function(priority, format) {
\t\t\t\tif(self.html.support[format] && media[format]) {
\t\t\t\t\tself.status.src = media[format];
\t\t\t\t\tself.status.format[format] = true;
\t\t\t\t\tself.status.formatType = format;
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t});
\t\t},
\t\t_html_setAudio: function(media) {
\t\t\tthis._html_setFormat(media);
\t\t\tthis.htmlElement.media = this.htmlElement.audio;
\t\t\tthis._html_initMedia(media);
\t\t},
\t\t_html_setVideo: function(media) {
\t\t\tthis._html_setFormat(media);
\t\t\tif(this.status.nativeVideoControls) {
\t\t\t\tthis.htmlElement.video.poster = this._validString(media.poster) ? media.poster : \"\";
\t\t\t}
\t\t\tthis.htmlElement.media = this.htmlElement.video;
\t\t\tthis._html_initMedia(media);
\t\t},
\t\t_html_resetMedia: function() {
\t\t\tif(this.htmlElement.media) {
\t\t\t\tif(this.htmlElement.media.id === this.internal.video.id && !this.status.nativeVideoControls) {
\t\t\t\t\tthis.internal.video.jq.css({'width':'0px', 'height':'0px'});
\t\t\t\t}
\t\t\t\tthis.htmlElement.media.pause();
\t\t\t}
\t\t},
\t\t_html_clearMedia: function() {
\t\t\tif(this.htmlElement.media) {
\t\t\t\tthis.htmlElement.media.src = \"about:blank\";
\t\t\t\t// The following load() is only required for Firefox 3.6 (PowerMacs).
\t\t\t\t// Recent HTMl5 browsers only require the src change. Due to changes in W3C spec and load() effect.
\t\t\t\tthis.htmlElement.media.load(); // Stops an old, \"in progress\" download from continuing the download. Triggers the loadstart, error and emptied events, due to the empty src. Also an abort event if a download was in progress.
\t\t\t}
\t\t},
\t\t_html_load: function() {
\t\t\t// This function remains to allow the early HTML5 browsers to work, such as Firefox 3.6
\t\t\t// A change in the W3C spec for the media.load() command means that this is no longer necessary.
\t\t\t// This command should be removed and actually causes minor undesirable effects on some browsers. Such as loading the whole file and not only the metadata.
\t\t\tif(this.status.waitForLoad) {
\t\t\t\tthis.status.waitForLoad = false;
\t\t\t\tthis.htmlElement.media.load();
\t\t\t}
\t\t\tclearTimeout(this.internal.htmlDlyCmdId);
\t\t},
\t\t_html_play: function(time) {
\t\t\tvar self = this,
\t\t\t\tmedia = this.htmlElement.media;

\t\t\tthis._html_load(); // Loads if required and clears any delayed commands.

\t\t\tif(!isNaN(time)) {

\t\t\t\t// Attempt to play it, since iOS has been ignoring commands
\t\t\t\tif(this.internal.cmdsIgnored) {
\t\t\t\t\tmedia.play();
\t\t\t\t}

\t\t\t\ttry {
\t\t\t\t\t// !media.seekable is for old HTML5 browsers, like Firefox 3.6.
\t\t\t\t\t// Checking seekable.length is important for iOS6 to work with setMedia().play(time)
\t\t\t\t\tif(!media.seekable || typeof media.seekable === \"object\" && media.seekable.length > 0) {
\t\t\t\t\t\tmedia.currentTime = time;
\t\t\t\t\t\tmedia.play();
\t\t\t\t\t} else {
\t\t\t\t\t\tthrow 1;
\t\t\t\t\t}
\t\t\t\t} catch(err) {
\t\t\t\t\tthis.internal.htmlDlyCmdId = setTimeout(function() {
\t\t\t\t\t\tself.play(time);
\t\t\t\t\t}, 250);
\t\t\t\t\treturn; // Cancel execution and wait for the delayed command.
\t\t\t\t}
\t\t\t} else {
\t\t\t\tmedia.play();
\t\t\t}
\t\t\tthis._html_checkWaitForPlay();
\t\t},
\t\t_html_pause: function(time) {
\t\t\tvar self = this,
\t\t\t\tmedia = this.htmlElement.media;
\t\t\t
\t\t\tif(time > 0) { // We do not want the stop() command, which does pause(0), causing a load operation.
\t\t\t\tthis._html_load(); // Loads if required and clears any delayed commands.
\t\t\t} else {
\t\t\t\tclearTimeout(this.internal.htmlDlyCmdId);
\t\t\t}

\t\t\t// Order of these commands is important for Safari (Win) and IE9. Pause then change currentTime.
\t\t\tmedia.pause();

\t\t\tif(!isNaN(time)) {
\t\t\t\ttry {
\t\t\t\t\tif(!media.seekable || typeof media.seekable === \"object\" && media.seekable.length > 0) {
\t\t\t\t\t\tmedia.currentTime = time;
\t\t\t\t\t} else {
\t\t\t\t\t\tthrow 1;
\t\t\t\t\t}
\t\t\t\t} catch(err) {
\t\t\t\t\tthis.internal.htmlDlyCmdId = setTimeout(function() {
\t\t\t\t\t\tself.pause(time);
\t\t\t\t\t}, 250);
\t\t\t\t\treturn; // Cancel execution and wait for the delayed command.
\t\t\t\t}
\t\t\t}
\t\t\tif(time > 0) { // Avoids a setMedia() followed by stop() or pause(0) hiding the video play button.
\t\t\t\tthis._html_checkWaitForPlay();
\t\t\t}
\t\t},
\t\t_html_playHead: function(percent) {
\t\t\tvar self = this,
\t\t\t\tmedia = this.htmlElement.media;

\t\t\tthis._html_load(); // Loads if required and clears any delayed commands.

\t\t\ttry {
\t\t\t\tif(typeof media.seekable === \"object\" && media.seekable.length > 0) {
\t\t\t\t\tmedia.currentTime = percent * media.seekable.end(media.seekable.length-1) / 100;
\t\t\t\t} else if(media.duration > 0 && !isNaN(media.duration)) {
\t\t\t\t\tmedia.currentTime = percent * media.duration / 100;
\t\t\t\t} else {
\t\t\t\t\tthrow \"e\";
\t\t\t\t}
\t\t\t} catch(err) {
\t\t\t\tthis.internal.htmlDlyCmdId = setTimeout(function() {
\t\t\t\t\tself.playHead(percent);
\t\t\t\t}, 250);
\t\t\t\treturn; // Cancel execution and wait for the delayed command.
\t\t\t}
\t\t\tif(!this.status.waitForLoad) {
\t\t\t\tthis._html_checkWaitForPlay();
\t\t\t}
\t\t},
\t\t_html_checkWaitForPlay: function() {
\t\t\tif(this.status.waitForPlay) {
\t\t\t\tthis.status.waitForPlay = false;
\t\t\t\tif(this.css.jq.videoPlay.length) {
\t\t\t\t\tthis.css.jq.videoPlay.hide();
\t\t\t\t}
\t\t\t\tif(this.status.video) {
\t\t\t\t\tthis.internal.poster.jq.hide();
\t\t\t\t\tthis.internal.video.jq.css({'width': this.status.width, 'height': this.status.height});
\t\t\t\t}
\t\t\t}
\t\t},
\t\t_html_volume: function(v) {
\t\t\tif(this.html.audio.available) {
\t\t\t\tthis.htmlElement.audio.volume = v;
\t\t\t}
\t\t\tif(this.html.video.available) {
\t\t\t\tthis.htmlElement.video.volume = v;
\t\t\t}
\t\t},
\t\t_html_mute: function(m) {
\t\t\tif(this.html.audio.available) {
\t\t\t\tthis.htmlElement.audio.muted = m;
\t\t\t}
\t\t\tif(this.html.video.available) {
\t\t\t\tthis.htmlElement.video.muted = m;
\t\t\t}
\t\t},
\t\t_flash_setAudio: function(media) {
\t\t\tvar self = this;
\t\t\ttry {
\t\t\t\t// Always finds a format due to checks in setMedia()
\t\t\t\t\$.each(this.formats, function(priority, format) {
\t\t\t\t\tif(self.flash.support[format] && media[format]) {
\t\t\t\t\t\tswitch (format) {
\t\t\t\t\t\t\tcase \"m4a\" :
\t\t\t\t\t\t\tcase \"fla\" :
\t\t\t\t\t\t\t\tself._getMovie().fl_setAudio_m4a(media[format]);
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"mp3\" :
\t\t\t\t\t\t\t\tself._getMovie().fl_setAudio_mp3(media[format]);
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"rtmpa\":
\t\t\t\t\t\t\t\tself._getMovie().fl_setAudio_rtmp(media[format]);
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t\tself.status.src = media[format];
\t\t\t\t\t\tself.status.format[format] = true;
\t\t\t\t\t\tself.status.formatType = format;
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tif(this.options.preload === 'auto') {
\t\t\t\t\tthis._flash_load();
\t\t\t\t\tthis.status.waitForLoad = false;
\t\t\t\t}
\t\t\t} catch(err) { this._flashError(err); }
\t\t},
\t\t_flash_setVideo: function(media) {
\t\t\tvar self = this;
\t\t\ttry {
\t\t\t\t// Always finds a format due to checks in setMedia()
\t\t\t\t\$.each(this.formats, function(priority, format) {
\t\t\t\t\tif(self.flash.support[format] && media[format]) {
\t\t\t\t\t\tswitch (format) {
\t\t\t\t\t\t\tcase \"m4v\" :
\t\t\t\t\t\t\tcase \"flv\" :
\t\t\t\t\t\t\t\tself._getMovie().fl_setVideo_m4v(media[format]);
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"rtmpv\":
\t\t\t\t\t\t\t\tself._getMovie().fl_setVideo_rtmp(media[format]);
\t\t\t\t\t\t\t\tbreak;\t\t
\t\t\t\t\t\t}
\t\t\t\t\t\tself.status.src = media[format];
\t\t\t\t\t\tself.status.format[format] = true;
\t\t\t\t\t\tself.status.formatType = format;
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tif(this.options.preload === 'auto') {
\t\t\t\t\tthis._flash_load();
\t\t\t\t\tthis.status.waitForLoad = false;
\t\t\t\t}
\t\t\t} catch(err) { this._flashError(err); }
\t\t},
\t\t_flash_resetMedia: function() {
\t\t\tthis.internal.flash.jq.css({'width':'0px', 'height':'0px'}); // Must do via CSS as setting attr() to zero causes a jQuery error in IE.
\t\t\tthis._flash_pause(NaN);
\t\t},
\t\t_flash_clearMedia: function() {
\t\t\ttry {
\t\t\t\tthis._getMovie().fl_clearMedia();
\t\t\t} catch(err) { this._flashError(err); }
\t\t},
\t\t_flash_load: function() {
\t\t\ttry {
\t\t\t\tthis._getMovie().fl_load();
\t\t\t} catch(err) { this._flashError(err); }
\t\t\tthis.status.waitForLoad = false;
\t\t},
\t\t_flash_play: function(time) {
\t\t\ttry {
\t\t\t\tthis._getMovie().fl_play(time);
\t\t\t} catch(err) { this._flashError(err); }
\t\t\tthis.status.waitForLoad = false;
\t\t\tthis._flash_checkWaitForPlay();
\t\t},
\t\t_flash_pause: function(time) {
\t\t\ttry {
\t\t\t\tthis._getMovie().fl_pause(time);
\t\t\t} catch(err) { this._flashError(err); }
\t\t\tif(time > 0) { // Avoids a setMedia() followed by stop() or pause(0) hiding the video play button.
\t\t\t\tthis.status.waitForLoad = false;
\t\t\t\tthis._flash_checkWaitForPlay();
\t\t\t}
\t\t},
\t\t_flash_playHead: function(p) {
\t\t\ttry {
\t\t\t\tthis._getMovie().fl_play_head(p);
\t\t\t} catch(err) { this._flashError(err); }
\t\t\tif(!this.status.waitForLoad) {
\t\t\t\tthis._flash_checkWaitForPlay();
\t\t\t}
\t\t},
\t\t_flash_checkWaitForPlay: function() {
\t\t\tif(this.status.waitForPlay) {
\t\t\t\tthis.status.waitForPlay = false;
\t\t\t\tif(this.css.jq.videoPlay.length) {
\t\t\t\t\tthis.css.jq.videoPlay.hide();
\t\t\t\t}
\t\t\t\tif(this.status.video) {
\t\t\t\t\tthis.internal.poster.jq.hide();
\t\t\t\t\tthis.internal.flash.jq.css({'width': this.status.width, 'height': this.status.height});
\t\t\t\t}
\t\t\t}
\t\t},
\t\t_flash_volume: function(v) {
\t\t\ttry {
\t\t\t\tthis._getMovie().fl_volume(v);
\t\t\t} catch(err) { this._flashError(err); }
\t\t},
\t\t_flash_mute: function(m) {
\t\t\ttry {
\t\t\t\tthis._getMovie().fl_mute(m);
\t\t\t} catch(err) { this._flashError(err); }
\t\t},
\t\t_getMovie: function() {
\t\t\treturn document[this.internal.flash.id];
\t\t},
\t\t_getFlashPluginVersion: function() {

\t\t\t// _getFlashPluginVersion() code influenced by:
\t\t\t// - FlashReplace 1.01: http://code.google.com/p/flashreplace/
\t\t\t// - SWFObject 2.2: http://code.google.com/p/swfobject/

\t\t\tvar version = 0,
\t\t\t\tflash;
\t\t\tif(window.ActiveXObject) {
\t\t\t\ttry {
\t\t\t\t\tflash = new ActiveXObject(\"ShockwaveFlash.ShockwaveFlash\");
\t\t\t\t\tif (flash) { // flash will return null when ActiveX is disabled
\t\t\t\t\t\tvar v = flash.GetVariable(\"\$version\");
\t\t\t\t\t\tif(v) {
\t\t\t\t\t\t\tv = v.split(\" \")[1].split(\",\");
\t\t\t\t\t\t\tversion = parseInt(v[0], 10) + \".\" + parseInt(v[1], 10);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} catch(e) {}
\t\t\t}
\t\t\telse if(navigator.plugins && navigator.mimeTypes.length > 0) {
\t\t\t\tflash = navigator.plugins[\"Shockwave Flash\"];
\t\t\t\tif(flash) {
\t\t\t\t\tversion = navigator.plugins[\"Shockwave Flash\"].description.replace(/.*\\s(\\d+\\.\\d+).*/, \"\$1\");
\t\t\t\t}
\t\t\t}
\t\t\treturn version * 1; // Converts to a number
\t\t},
\t\t_checkForFlash: function (version) {
\t\t\tvar flashOk = false;
\t\t\tif(this._getFlashPluginVersion() >= version) {
\t\t\t\tflashOk = true;
\t\t\t}
\t\t\treturn flashOk;
\t\t},
\t\t_validString: function(url) {
\t\t\treturn (url && typeof url === \"string\"); // Empty strings return false
\t\t},
\t\t_limitValue: function(value, min, max) {
\t\t\treturn (value < min) ? min : ((value > max) ? max : value);
\t\t},
\t\t_urlNotSetError: function(context) {
\t\t\tthis._error( {
\t\t\t\ttype: \$.jPlayer.error.URL_NOT_SET,
\t\t\t\tcontext: context,
\t\t\t\tmessage: \$.jPlayer.errorMsg.URL_NOT_SET,
\t\t\t\thint: \$.jPlayer.errorHint.URL_NOT_SET
\t\t\t});
\t\t},
\t\t_flashError: function(error) {
\t\t\tvar errorType;
\t\t\tif(!this.internal.ready) {
\t\t\t\terrorType = \"FLASH\";
\t\t\t} else {
\t\t\t\terrorType = \"FLASH_DISABLED\";
\t\t\t}
\t\t\tthis._error( {
\t\t\t\ttype: \$.jPlayer.error[errorType],
\t\t\t\tcontext: this.internal.flash.swf,
\t\t\t\tmessage: \$.jPlayer.errorMsg[errorType] + error.message,
\t\t\t\thint: \$.jPlayer.errorHint[errorType]
\t\t\t});
\t\t\t// Allow the audio player to recover if display:none and then shown again, or with position:fixed on Firefox.
\t\t\t// This really only affects audio in a media player, as an audio player could easily move the jPlayer element away from such issues.
\t\t\tthis.internal.flash.jq.css({'width':'1px', 'height':'1px'});
\t\t},
\t\t_error: function(error) {
\t\t\tthis._trigger(\$.jPlayer.event.error, error);
\t\t\tif(this.options.errorAlerts) {
\t\t\t\tthis._alert(\"Error!\" + (error.message ? \"\\n\\n\" + error.message : \"\") + (error.hint ? \"\\n\\n\" + error.hint : \"\") + \"\\n\\nContext: \" + error.context);
\t\t\t}
\t\t},
\t\t_warning: function(warning) {
\t\t\tthis._trigger(\$.jPlayer.event.warning, undefined, warning);
\t\t\tif(this.options.warningAlerts) {
\t\t\t\tthis._alert(\"Warning!\" + (warning.message ? \"\\n\\n\" + warning.message : \"\") + (warning.hint ? \"\\n\\n\" + warning.hint : \"\") + \"\\n\\nContext: \" + warning.context);
\t\t\t}
\t\t},
\t\t_alert: function(message) {
\t\t\talert(\"jPlayer \" + this.version.script + \" : id='\" + this.internal.self.id +\"' : \" + message);
\t\t},
\t\t_emulateHtmlBridge: function() {
\t\t\tvar self = this;

\t\t\t// Emulate methods on jPlayer's DOM element.
\t\t\t\$.each( \$.jPlayer.emulateMethods.split(/\\s+/g), function(i, name) {
\t\t\t\tself.internal.domNode[name] = function(arg) {
\t\t\t\t\tself[name](arg);
\t\t\t\t};

\t\t\t});

\t\t\t// Bubble jPlayer events to its DOM element.
\t\t\t\$.each(\$.jPlayer.event, function(eventName,eventType) {
\t\t\t\tvar nativeEvent = true;
\t\t\t\t\$.each( \$.jPlayer.reservedEvent.split(/\\s+/g), function(i, name) {
\t\t\t\t\tif(name === eventName) {
\t\t\t\t\t\tnativeEvent = false;
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tif(nativeEvent) {
\t\t\t\t\tself.element.bind(eventType + \".jPlayer.jPlayerHtml\", function() { // With .jPlayer & .jPlayerHtml namespaces.
\t\t\t\t\t\tself._emulateHtmlUpdate();
\t\t\t\t\t\tvar domEvent = document.createEvent(\"Event\");
\t\t\t\t\t\tdomEvent.initEvent(eventName, false, true);
\t\t\t\t\t\tself.internal.domNode.dispatchEvent(domEvent);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\t// The error event would require a special case
\t\t\t});

\t\t\t// IE9 has a readyState property on all elements. The document should have it, but all (except media) elements inherit it in IE9. This conflicts with Popcorn, which polls the readyState.
\t\t},
\t\t_emulateHtmlUpdate: function() {
\t\t\tvar self = this;

\t\t\t\$.each( \$.jPlayer.emulateStatus.split(/\\s+/g), function(i, name) {
\t\t\t\tself.internal.domNode[name] = self.status[name];
\t\t\t});
\t\t\t\$.each( \$.jPlayer.emulateOptions.split(/\\s+/g), function(i, name) {
\t\t\t\tself.internal.domNode[name] = self.options[name];
\t\t\t});
\t\t},
\t\t_destroyHtmlBridge: function() {
\t\t\tvar self = this;

\t\t\t// Bridge event handlers are also removed by destroy() through .jPlayer namespace.
\t\t\tthis.element.unbind(\".jPlayerHtml\"); // Remove all event handlers created by the jPlayer bridge. So you can change the emulateHtml option.

\t\t\t// Remove the methods and properties
\t\t\tvar emulated = \$.jPlayer.emulateMethods + \" \" + \$.jPlayer.emulateStatus + \" \" + \$.jPlayer.emulateOptions;
\t\t\t\$.each( emulated.split(/\\s+/g), function(i, name) {
\t\t\t\tdelete self.internal.domNode[name];
\t\t\t});
\t\t}
\t};

\t\$.jPlayer.error = {
\t\tFLASH: \"e_flash\",
\t\tFLASH_DISABLED: \"e_flash_disabled\",
\t\tNO_SOLUTION: \"e_no_solution\",
\t\tNO_SUPPORT: \"e_no_support\",
\t\tURL: \"e_url\",
\t\tURL_NOT_SET: \"e_url_not_set\",
\t\tVERSION: \"e_version\"
\t};

\t\$.jPlayer.errorMsg = {
\t\tFLASH: \"jPlayer's Flash fallback is not configured correctly, or a command was issued before the jPlayer Ready event. Details: \", // Used in: _flashError()
\t\tFLASH_DISABLED: \"jPlayer's Flash fallback has been disabled by the browser due to the CSS rules you have used. Details: \", // Used in: _flashError()
\t\tNO_SOLUTION: \"No solution can be found by jPlayer in this browser. Neither HTML nor Flash can be used.\", // Used in: _init()
\t\tNO_SUPPORT: \"It is not possible to play any media format provided in setMedia() on this browser using your current options.\", // Used in: setMedia()
\t\tURL: \"Media URL could not be loaded.\", // Used in: jPlayerFlashEvent() and _addHtmlEventListeners()
\t\tURL_NOT_SET: \"Attempt to issue media playback commands, while no media url is set.\", // Used in: load(), play(), pause(), stop() and playHead()
\t\tVERSION: \"jPlayer \" + \$.jPlayer.prototype.version.script + \" needs Jplayer.swf version \" + \$.jPlayer.prototype.version.needFlash + \" but found \" // Used in: jPlayerReady()
\t};

\t\$.jPlayer.errorHint = {
\t\tFLASH: \"Check your swfPath option and that Jplayer.swf is there.\",
\t\tFLASH_DISABLED: \"Check that you have not display:none; the jPlayer entity or any ancestor.\",
\t\tNO_SOLUTION: \"Review the jPlayer options: support and supplied.\",
\t\tNO_SUPPORT: \"Video or audio formats defined in the supplied option are missing.\",
\t\tURL: \"Check media URL is valid.\",
\t\tURL_NOT_SET: \"Use setMedia() to set the media URL.\",
\t\tVERSION: \"Update jPlayer files.\"
\t};

\t\$.jPlayer.warning = {
\t\tCSS_SELECTOR_COUNT: \"e_css_selector_count\",
\t\tCSS_SELECTOR_METHOD: \"e_css_selector_method\",
\t\tCSS_SELECTOR_STRING: \"e_css_selector_string\",
\t\tOPTION_KEY: \"e_option_key\"
\t};

\t\$.jPlayer.warningMsg = {
\t\tCSS_SELECTOR_COUNT: \"The number of css selectors found did not equal one: \",
\t\tCSS_SELECTOR_METHOD: \"The methodName given in jPlayer('cssSelector') is not a valid jPlayer method.\",
\t\tCSS_SELECTOR_STRING: \"The methodCssSelector given in jPlayer('cssSelector') is not a String or is empty.\",
\t\tOPTION_KEY: \"The option requested in jPlayer('option') is undefined.\"
\t};

\t\$.jPlayer.warningHint = {
\t\tCSS_SELECTOR_COUNT: \"Check your css selector and the ancestor.\",
\t\tCSS_SELECTOR_METHOD: \"Check your method name.\",
\t\tCSS_SELECTOR_STRING: \"Check your css selector is a string.\",
\t\tOPTION_KEY: \"Check your option name.\"
\t};
}));
", "@MwebAdmin/filemanager/js/jPlayer/jquery.jplayer/jquery.jplayer.js", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/jquery.jplayer/jquery.jplayer.js");
    }
}
