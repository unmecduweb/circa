<?php

/* @MwebAdmin/filemanager/js/jPlayer/add-on/jplayer.playlist.js */
class __TwigTemplate_ac3c5104e57f3f4d43ccd812b172c182e9a0f269c59bb86d26e3ea45a2d8a2fe extends Twig_Template
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
        $__internal_337e32146615f853191ff24b16928cf9eacdf79228a06765a986d079b428ee6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337e32146615f853191ff24b16928cf9eacdf79228a06765a986d079b428ee6b->enter($__internal_337e32146615f853191ff24b16928cf9eacdf79228a06765a986d079b428ee6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/add-on/jplayer.playlist.js"));

        // line 1
        echo "/*
 * Playlist Object for the jPlayer Plugin
 * http://www.jplayer.org
 *
 * Copyright (c) 2009 - 2014 Happyworm Ltd
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/MIT
 *
 * Author: Mark J Panaghiston
 * Version: 2.4.1
 * Date: 19th November 2014
 *
 * Requires:
 *  - jQuery 1.7.0+
 *  - jPlayer 2.8.2+
 */

/*global jPlayerPlaylist:true */

(function(\$, undefined) {

\tjPlayerPlaylist = function(cssSelector, playlist, options) {
\t\tvar self = this;

\t\tthis.current = 0;
\t\tthis.loop = false; // Flag used with the jPlayer repeat event
\t\tthis.shuffled = false;
\t\tthis.removing = false; // Flag is true during remove animation, disabling the remove() method until complete.

\t\tthis.cssSelector = \$.extend({}, this._cssSelector, cssSelector); // Object: Containing the css selectors for jPlayer and its cssSelectorAncestor
\t\tthis.options = \$.extend(true, {
\t\t\tkeyBindings: {
\t\t\t\tnext: {
\t\t\t\t\tkey: 221, // ]
\t\t\t\t\tfn: function() {
\t\t\t\t\t\tself.next();
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tprevious: {
\t\t\t\t\tkey: 219, // [
\t\t\t\t\tfn: function() {
\t\t\t\t\t\tself.previous();
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tshuffle: {
\t\t\t\t\tkey: 83, // s
\t\t\t\t\tfn: function() {
\t\t\t\t\t\tself.shuffle();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\tstateClass: {
\t\t\t\tshuffled: \"jp-state-shuffled\"
\t\t\t}
\t\t}, this._options, options); // Object: The jPlayer constructor options for this playlist and the playlist options

\t\tthis.playlist = []; // Array of Objects: The current playlist displayed (Un-shuffled or Shuffled)
\t\tthis.original = []; // Array of Objects: The original playlist

\t\tthis._initPlaylist(playlist); // Copies playlist to this.original. Then mirrors this.original to this.playlist. Creating two arrays, where the element pointers match. (Enables pointer comparison.)

\t\t// Setup the css selectors for the extra interface items used by the playlist.
\t\tthis.cssSelector.details = this.cssSelector.cssSelectorAncestor + \" .jp-details\"; // Note that jPlayer controls the text in the title element.
\t\tthis.cssSelector.playlist = this.cssSelector.cssSelectorAncestor + \" .jp-playlist\";
\t\tthis.cssSelector.next = this.cssSelector.cssSelectorAncestor + \" .jp-next\";
\t\tthis.cssSelector.previous = this.cssSelector.cssSelectorAncestor + \" .jp-previous\";
\t\tthis.cssSelector.shuffle = this.cssSelector.cssSelectorAncestor + \" .jp-shuffle\";
\t\tthis.cssSelector.shuffleOff = this.cssSelector.cssSelectorAncestor + \" .jp-shuffle-off\";

\t\t// Override the cssSelectorAncestor given in options
\t\tthis.options.cssSelectorAncestor = this.cssSelector.cssSelectorAncestor;

\t\t// Override the default repeat event handler
\t\tthis.options.repeat = function(event) {
\t\t\tself.loop = event.jPlayer.options.loop;
\t\t};

\t\t// Create a ready event handler to initialize the playlist
\t\t\$(this.cssSelector.jPlayer).bind(\$.jPlayer.event.ready, function() {
\t\t\tself._init();
\t\t});

\t\t// Create an ended event handler to move to the next item
\t\t\$(this.cssSelector.jPlayer).bind(\$.jPlayer.event.ended, function() {
\t\t\tself.next();
\t\t});

\t\t// Create a play event handler to pause other instances
\t\t\$(this.cssSelector.jPlayer).bind(\$.jPlayer.event.play, function() {
\t\t\t\$(this).jPlayer(\"pauseOthers\");
\t\t});

\t\t// Create a resize event handler to show the title in full screen mode.
\t\t\$(this.cssSelector.jPlayer).bind(\$.jPlayer.event.resize, function(event) {
\t\t\tif(event.jPlayer.options.fullScreen) {
\t\t\t\t\$(self.cssSelector.details).show();
\t\t\t} else {
\t\t\t\t\$(self.cssSelector.details).hide();
\t\t\t}
\t\t});

\t\t// Create click handlers for the extra buttons that do playlist functions.
\t\t\$(this.cssSelector.previous).click(function(e) {
\t\t\te.preventDefault();
\t\t\tself.previous();
\t\t\tself.blur(this);
\t\t});

\t\t\$(this.cssSelector.next).click(function(e) {
\t\t\te.preventDefault();
\t\t\tself.next();
\t\t\tself.blur(this);
\t\t});

\t\t\$(this.cssSelector.shuffle).click(function(e) {
\t\t\te.preventDefault();
\t\t\tif(self.shuffled && \$(self.cssSelector.jPlayer).jPlayer(\"option\", \"useStateClassSkin\")) {
\t\t\t\tself.shuffle(false);
\t\t\t} else {
\t\t\t\tself.shuffle(true);
\t\t\t}
\t\t\tself.blur(this);
\t\t});
\t\t\$(this.cssSelector.shuffleOff).click(function(e) {
\t\t\te.preventDefault();
\t\t\tself.shuffle(false);
\t\t\tself.blur(this);
\t\t}).hide();

\t\t// Put the title in its initial display state
\t\tif(!this.options.fullScreen) {
\t\t\t\$(this.cssSelector.details).hide();
\t\t}

\t\t// Remove the empty <li> from the page HTML. Allows page to be valid HTML, while not interfereing with display animations
\t\t\$(this.cssSelector.playlist + \" ul\").empty();

\t\t// Create .on() handlers for the playlist items along with the free media and remove controls.
\t\tthis._createItemHandlers();

\t\t// Instance jPlayer
\t\t\$(this.cssSelector.jPlayer).jPlayer(this.options);
\t};

\tjPlayerPlaylist.prototype = {
\t\t_cssSelector: { // static object, instanced in constructor
\t\t\tjPlayer: \"#jquery_jplayer_1\",
\t\t\tcssSelectorAncestor: \"#jp_container_1\"
\t\t},
\t\t_options: { // static object, instanced in constructor
\t\t\tplaylistOptions: {
\t\t\t\tautoPlay: false,
\t\t\t\tloopOnPrevious: false,
\t\t\t\tshuffleOnLoop: true,
\t\t\t\tenableRemoveControls: false,
\t\t\t\tdisplayTime: 'slow',
\t\t\t\taddTime: 'fast',
\t\t\t\tremoveTime: 'fast',
\t\t\t\tshuffleTime: 'slow',
\t\t\t\titemClass: \"jp-playlist-item\",
\t\t\t\tfreeGroupClass: \"jp-free-media\",
\t\t\t\tfreeItemClass: \"jp-playlist-item-free\",
\t\t\t\tremoveItemClass: \"jp-playlist-item-remove\"
\t\t\t}
\t\t},
\t\toption: function(option, value) { // For changing playlist options only
\t\t\tif(value === undefined) {
\t\t\t\treturn this.options.playlistOptions[option];
\t\t\t}

\t\t\tthis.options.playlistOptions[option] = value;

\t\t\tswitch(option) {
\t\t\t\tcase \"enableRemoveControls\":
\t\t\t\t\tthis._updateControls();
\t\t\t\t\tbreak;
\t\t\t\tcase \"itemClass\":
\t\t\t\tcase \"freeGroupClass\":
\t\t\t\tcase \"freeItemClass\":
\t\t\t\tcase \"removeItemClass\":
\t\t\t\t\tthis._refresh(true); // Instant
\t\t\t\t\tthis._createItemHandlers();
\t\t\t\t\tbreak;
\t\t\t}
\t\t\treturn this;
\t\t},
\t\t_init: function() {
\t\t\tvar self = this;
\t\t\tthis._refresh(function() {
\t\t\t\tif(self.options.playlistOptions.autoPlay) {
\t\t\t\t\tself.play(self.current);
\t\t\t\t} else {
\t\t\t\t\tself.select(self.current);
\t\t\t\t}
\t\t\t});
\t\t},
\t\t_initPlaylist: function(playlist) {
\t\t\tthis.current = 0;
\t\t\tthis.shuffled = false;
\t\t\tthis.removing = false;
\t\t\tthis.original = \$.extend(true, [], playlist); // Copy the Array of Objects
\t\t\tthis._originalPlaylist();
\t\t},
\t\t_originalPlaylist: function() {
\t\t\tvar self = this;
\t\t\tthis.playlist = [];
\t\t\t// Make both arrays point to the same object elements. Gives us 2 different arrays, each pointing to the same actual object. ie., Not copies of the object.
\t\t\t\$.each(this.original, function(i) {
\t\t\t\tself.playlist[i] = self.original[i];
\t\t\t});
\t\t},
\t\t_refresh: function(instant) {
\t\t\t/* instant: Can be undefined, true or a function.
\t\t\t *\tundefined -> use animation timings
\t\t\t *\ttrue -> no animation
\t\t\t *\tfunction -> use animation timings and excute function at half way point.
\t\t\t */
\t\t\tvar self = this;

\t\t\tif(instant && !\$.isFunction(instant)) {
\t\t\t\t\$(this.cssSelector.playlist + \" ul\").empty();
\t\t\t\t\$.each(this.playlist, function(i) {
\t\t\t\t\t\$(self.cssSelector.playlist + \" ul\").append(self._createListItem(self.playlist[i]));
\t\t\t\t});
\t\t\t\tthis._updateControls();
\t\t\t} else {
\t\t\t\tvar displayTime = \$(this.cssSelector.playlist + \" ul\").children().length ? this.options.playlistOptions.displayTime : 0;

\t\t\t\t\$(this.cssSelector.playlist + \" ul\").slideUp(displayTime, function() {
\t\t\t\t\tvar \$this = \$(this);
\t\t\t\t\t\$(this).empty();
\t\t\t\t\t
\t\t\t\t\t\$.each(self.playlist, function(i) {
\t\t\t\t\t\t\$this.append(self._createListItem(self.playlist[i]));
\t\t\t\t\t});
\t\t\t\t\tself._updateControls();
\t\t\t\t\tif(\$.isFunction(instant)) {
\t\t\t\t\t\tinstant();
\t\t\t\t\t}
\t\t\t\t\tif(self.playlist.length) {
\t\t\t\t\t\t\$(this).slideDown(self.options.playlistOptions.displayTime);
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(this).show();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t},
\t\t_createListItem: function(media) {
\t\t\tvar self = this;

\t\t\t// Wrap the <li> contents in a <div>
\t\t\tvar listItem = \"<li><div>\";

\t\t\t// Create remove control
\t\t\tlistItem += \"<a href='javascript:;' class='\" + this.options.playlistOptions.removeItemClass + \"'>&times;</a>\";

\t\t\t// Create links to free media
\t\t\tif(media.free) {
\t\t\t\tvar first = true;
\t\t\t\tlistItem += \"<span class='\" + this.options.playlistOptions.freeGroupClass + \"'>(\";
\t\t\t\t\$.each(media, function(property,value) {
\t\t\t\t\tif(\$.jPlayer.prototype.format[property]) { // Check property is a media format.
\t\t\t\t\t\tif(first) {
\t\t\t\t\t\t\tfirst = false;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tlistItem += \" | \";
\t\t\t\t\t\t}
\t\t\t\t\t\tlistItem += \"<a class='\" + self.options.playlistOptions.freeItemClass + \"' href='\" + value + \"' tabindex='-1'>\" + property + \"</a>\";
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tlistItem += \")</span>\";
\t\t\t}

\t\t\t// The title is given next in the HTML otherwise the float:right on the free media corrupts in IE6/7
\t\t\tlistItem += \"<a href='javascript:;' class='\" + this.options.playlistOptions.itemClass + \"' tabindex='0'>\" + media.title + (media.artist ? \" <span class='jp-artist'>by \" + media.artist + \"</span>\" : \"\") + \"</a>\";
\t\t\tlistItem += \"</div></li>\";

\t\t\treturn listItem;
\t\t},
\t\t_createItemHandlers: function() {
\t\t\tvar self = this;
\t\t\t// Create live handlers for the playlist items
\t\t\t\$(this.cssSelector.playlist).off(\"click\", \"a.\" + this.options.playlistOptions.itemClass).on(\"click\", \"a.\" + this.options.playlistOptions.itemClass, function(e) {
\t\t\t\te.preventDefault();
\t\t\t\tvar index = \$(this).parent().parent().index();
\t\t\t\tif(self.current !== index) {
\t\t\t\t\tself.play(index);
\t\t\t\t} else {
\t\t\t\t\t\$(self.cssSelector.jPlayer).jPlayer(\"play\");
\t\t\t\t}
\t\t\t\tself.blur(this);
\t\t\t});

\t\t\t// Create live handlers that disable free media links to force access via right click
\t\t\t\$(this.cssSelector.playlist).off(\"click\", \"a.\" + this.options.playlistOptions.freeItemClass).on(\"click\", \"a.\" + this.options.playlistOptions.freeItemClass, function(e) {
\t\t\t\te.preventDefault();
\t\t\t\t\$(this).parent().parent().find(\".\" + self.options.playlistOptions.itemClass).click();
\t\t\t\tself.blur(this);
\t\t\t});

\t\t\t// Create live handlers for the remove controls
\t\t\t\$(this.cssSelector.playlist).off(\"click\", \"a.\" + this.options.playlistOptions.removeItemClass).on(\"click\", \"a.\" + this.options.playlistOptions.removeItemClass, function(e) {
\t\t\t\te.preventDefault();
\t\t\t\tvar index = \$(this).parent().parent().index();
\t\t\t\tself.remove(index);
\t\t\t\tself.blur(this);
\t\t\t});
\t\t},
\t\t_updateControls: function() {
\t\t\tif(this.options.playlistOptions.enableRemoveControls) {
\t\t\t\t\$(this.cssSelector.playlist + \" .\" + this.options.playlistOptions.removeItemClass).show();
\t\t\t} else {
\t\t\t\t\$(this.cssSelector.playlist + \" .\" + this.options.playlistOptions.removeItemClass).hide();
\t\t\t}

\t\t\tif(this.shuffled) {
\t\t\t\t\$(this.cssSelector.jPlayer).jPlayer(\"addStateClass\", \"shuffled\");
\t\t\t} else {
\t\t\t\t\$(this.cssSelector.jPlayer).jPlayer(\"removeStateClass\", \"shuffled\");
\t\t\t}
\t\t\tif(\$(this.cssSelector.shuffle).length && \$(this.cssSelector.shuffleOff).length) {
\t\t\t\tif(this.shuffled) {
\t\t\t\t\t\$(this.cssSelector.shuffleOff).show();
\t\t\t\t\t\$(this.cssSelector.shuffle).hide();
\t\t\t\t} else {
\t\t\t\t\t\$(this.cssSelector.shuffleOff).hide();
\t\t\t\t\t\$(this.cssSelector.shuffle).show();
\t\t\t\t}
\t\t\t}
\t\t},
\t\t_highlight: function(index) {
\t\t\tif(this.playlist.length && index !== undefined) {
\t\t\t\t\$(this.cssSelector.playlist + \" .jp-playlist-current\").removeClass(\"jp-playlist-current\");
\t\t\t\t\$(this.cssSelector.playlist + \" li:nth-child(\" + (index + 1) + \")\").addClass(\"jp-playlist-current\").find(\".jp-playlist-item\").addClass(\"jp-playlist-current\");
\t\t\t\t// \$(this.cssSelector.details + \" li\").html(\"<span class='jp-title'>\" + this.playlist[index].title + \"</span>\" + (this.playlist[index].artist ? \" <span class='jp-artist'>by \" + this.playlist[index].artist + \"</span>\" : \"\"));
\t\t\t}
\t\t},
\t\tsetPlaylist: function(playlist) {
\t\t\tthis._initPlaylist(playlist);
\t\t\tthis._init();
\t\t},
\t\tadd: function(media, playNow) {
\t\t\t\$(this.cssSelector.playlist + \" ul\").append(this._createListItem(media)).find(\"li:last-child\").hide().slideDown(this.options.playlistOptions.addTime);
\t\t\tthis._updateControls();
\t\t\tthis.original.push(media);
\t\t\tthis.playlist.push(media); // Both array elements share the same object pointer. Comforms with _initPlaylist(p) system.

\t\t\tif(playNow) {
\t\t\t\tthis.play(this.playlist.length - 1);
\t\t\t} else {
\t\t\t\tif(this.original.length === 1) {
\t\t\t\t\tthis.select(0);
\t\t\t\t}
\t\t\t}
\t\t},
\t\tremove: function(index) {
\t\t\tvar self = this;

\t\t\tif(index === undefined) {
\t\t\t\tthis._initPlaylist([]);
\t\t\t\tthis._refresh(function() {
\t\t\t\t\t\$(self.cssSelector.jPlayer).jPlayer(\"clearMedia\");
\t\t\t\t});
\t\t\t\treturn true;
\t\t\t} else {

\t\t\t\tif(this.removing) {
\t\t\t\t\treturn false;
\t\t\t\t} else {
\t\t\t\t\tindex = (index < 0) ? self.original.length + index : index; // Negative index relates to end of array.
\t\t\t\t\tif(0 <= index && index < this.playlist.length) {
\t\t\t\t\t\tthis.removing = true;

\t\t\t\t\t\t\$(this.cssSelector.playlist + \" li:nth-child(\" + (index + 1) + \")\").slideUp(this.options.playlistOptions.removeTime, function() {
\t\t\t\t\t\t\t\$(this).remove();

\t\t\t\t\t\t\tif(self.shuffled) {
\t\t\t\t\t\t\t\tvar item = self.playlist[index];
\t\t\t\t\t\t\t\t\$.each(self.original, function(i) {
\t\t\t\t\t\t\t\t\tif(self.original[i] === item) {
\t\t\t\t\t\t\t\t\t\tself.original.splice(i, 1);
\t\t\t\t\t\t\t\t\t\treturn false; // Exit \$.each
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\tself.playlist.splice(index, 1);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tself.original.splice(index, 1);
\t\t\t\t\t\t\t\tself.playlist.splice(index, 1);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif(self.original.length) {
\t\t\t\t\t\t\t\tif(index === self.current) {
\t\t\t\t\t\t\t\t\tself.current = (index < self.original.length) ? self.current : self.original.length - 1; // To cope when last element being selected when it was removed
\t\t\t\t\t\t\t\t\tself.select(self.current);
\t\t\t\t\t\t\t\t} else if(index < self.current) {
\t\t\t\t\t\t\t\t\tself.current--;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\$(self.cssSelector.jPlayer).jPlayer(\"clearMedia\");
\t\t\t\t\t\t\t\tself.current = 0;
\t\t\t\t\t\t\t\tself.shuffled = false;
\t\t\t\t\t\t\t\tself._updateControls();
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tself.removing = false;
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t},
\t\tselect: function(index) {
\t\t\tindex = (index < 0) ? this.original.length + index : index; // Negative index relates to end of array.
\t\t\tif(0 <= index && index < this.playlist.length) {
\t\t\t\tthis.current = index;
\t\t\t\tthis._highlight(index);
\t\t\t\t\$(this.cssSelector.jPlayer).jPlayer(\"setMedia\", this.playlist[this.current]);
\t\t\t} else {
\t\t\t\tthis.current = 0;
\t\t\t}
\t\t},
\t\tplay: function(index) {
\t\t\tindex = (index < 0) ? this.original.length + index : index; // Negative index relates to end of array.
\t\t\tif(0 <= index && index < this.playlist.length) {
\t\t\t\tif(this.playlist.length) {
\t\t\t\t\tthis.select(index);
\t\t\t\t\t\$(this.cssSelector.jPlayer).jPlayer(\"play\");
\t\t\t\t}
\t\t\t} else if(index === undefined) {
\t\t\t\t\$(this.cssSelector.jPlayer).jPlayer(\"play\");
\t\t\t}
\t\t},
\t\tpause: function() {
\t\t\t\$(this.cssSelector.jPlayer).jPlayer(\"pause\");
\t\t},
\t\tnext: function() {
\t\t\tvar index = (this.current + 1 < this.playlist.length) ? this.current + 1 : 0;

\t\t\tif(this.loop) {
\t\t\t\t// See if we need to shuffle before looping to start, and only shuffle if more than 1 item.
\t\t\t\tif(index === 0 && this.shuffled && this.options.playlistOptions.shuffleOnLoop && this.playlist.length > 1) {
\t\t\t\t\tthis.shuffle(true, true); // playNow
\t\t\t\t} else {
\t\t\t\t\tthis.play(index);
\t\t\t\t}
\t\t\t} else {
\t\t\t\t// The index will be zero if it just looped round
\t\t\t\tif(index > 0) {
\t\t\t\t\tthis.play(index);
\t\t\t\t}
\t\t\t}
\t\t},
\t\tprevious: function() {
\t\t\tvar index = (this.current - 1 >= 0) ? this.current - 1 : this.playlist.length - 1;

\t\t\tif(this.loop && this.options.playlistOptions.loopOnPrevious || index < this.playlist.length - 1) {
\t\t\t\tthis.play(index);
\t\t\t}
\t\t},
\t\tshuffle: function(shuffled, playNow) {
\t\t\tvar self = this;

\t\t\tif(shuffled === undefined) {
\t\t\t\tshuffled = !this.shuffled;
\t\t\t}

\t\t\tif(shuffled || shuffled !== this.shuffled) {

\t\t\t\t\$(this.cssSelector.playlist + \" ul\").slideUp(this.options.playlistOptions.shuffleTime, function() {
\t\t\t\t\tself.shuffled = shuffled;
\t\t\t\t\tif(shuffled) {
\t\t\t\t\t\tself.playlist.sort(function() {
\t\t\t\t\t\t\treturn 0.5 - Math.random();
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\tself._originalPlaylist();
\t\t\t\t\t}
\t\t\t\t\tself._refresh(true); // Instant

\t\t\t\t\tif(playNow || !\$(self.cssSelector.jPlayer).data(\"jPlayer\").status.paused) {
\t\t\t\t\t\tself.play(0);
\t\t\t\t\t} else {
\t\t\t\t\t\tself.select(0);
\t\t\t\t\t}

\t\t\t\t\t\$(this).slideDown(self.options.playlistOptions.shuffleTime);
\t\t\t\t});
\t\t\t}
\t\t},
\t\tblur: function(that) {
\t\t\tif(\$(this.cssSelector.jPlayer).jPlayer(\"option\", \"autoBlur\")) {
\t\t\t\t\$(that).blur();
\t\t\t}
\t\t}
\t};
})(jQuery);
";
        
        $__internal_337e32146615f853191ff24b16928cf9eacdf79228a06765a986d079b428ee6b->leave($__internal_337e32146615f853191ff24b16928cf9eacdf79228a06765a986d079b428ee6b_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/add-on/jplayer.playlist.js";
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
 * Playlist Object for the jPlayer Plugin
 * http://www.jplayer.org
 *
 * Copyright (c) 2009 - 2014 Happyworm Ltd
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/MIT
 *
 * Author: Mark J Panaghiston
 * Version: 2.4.1
 * Date: 19th November 2014
 *
 * Requires:
 *  - jQuery 1.7.0+
 *  - jPlayer 2.8.2+
 */

/*global jPlayerPlaylist:true */

(function(\$, undefined) {

\tjPlayerPlaylist = function(cssSelector, playlist, options) {
\t\tvar self = this;

\t\tthis.current = 0;
\t\tthis.loop = false; // Flag used with the jPlayer repeat event
\t\tthis.shuffled = false;
\t\tthis.removing = false; // Flag is true during remove animation, disabling the remove() method until complete.

\t\tthis.cssSelector = \$.extend({}, this._cssSelector, cssSelector); // Object: Containing the css selectors for jPlayer and its cssSelectorAncestor
\t\tthis.options = \$.extend(true, {
\t\t\tkeyBindings: {
\t\t\t\tnext: {
\t\t\t\t\tkey: 221, // ]
\t\t\t\t\tfn: function() {
\t\t\t\t\t\tself.next();
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tprevious: {
\t\t\t\t\tkey: 219, // [
\t\t\t\t\tfn: function() {
\t\t\t\t\t\tself.previous();
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tshuffle: {
\t\t\t\t\tkey: 83, // s
\t\t\t\t\tfn: function() {
\t\t\t\t\t\tself.shuffle();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\tstateClass: {
\t\t\t\tshuffled: \"jp-state-shuffled\"
\t\t\t}
\t\t}, this._options, options); // Object: The jPlayer constructor options for this playlist and the playlist options

\t\tthis.playlist = []; // Array of Objects: The current playlist displayed (Un-shuffled or Shuffled)
\t\tthis.original = []; // Array of Objects: The original playlist

\t\tthis._initPlaylist(playlist); // Copies playlist to this.original. Then mirrors this.original to this.playlist. Creating two arrays, where the element pointers match. (Enables pointer comparison.)

\t\t// Setup the css selectors for the extra interface items used by the playlist.
\t\tthis.cssSelector.details = this.cssSelector.cssSelectorAncestor + \" .jp-details\"; // Note that jPlayer controls the text in the title element.
\t\tthis.cssSelector.playlist = this.cssSelector.cssSelectorAncestor + \" .jp-playlist\";
\t\tthis.cssSelector.next = this.cssSelector.cssSelectorAncestor + \" .jp-next\";
\t\tthis.cssSelector.previous = this.cssSelector.cssSelectorAncestor + \" .jp-previous\";
\t\tthis.cssSelector.shuffle = this.cssSelector.cssSelectorAncestor + \" .jp-shuffle\";
\t\tthis.cssSelector.shuffleOff = this.cssSelector.cssSelectorAncestor + \" .jp-shuffle-off\";

\t\t// Override the cssSelectorAncestor given in options
\t\tthis.options.cssSelectorAncestor = this.cssSelector.cssSelectorAncestor;

\t\t// Override the default repeat event handler
\t\tthis.options.repeat = function(event) {
\t\t\tself.loop = event.jPlayer.options.loop;
\t\t};

\t\t// Create a ready event handler to initialize the playlist
\t\t\$(this.cssSelector.jPlayer).bind(\$.jPlayer.event.ready, function() {
\t\t\tself._init();
\t\t});

\t\t// Create an ended event handler to move to the next item
\t\t\$(this.cssSelector.jPlayer).bind(\$.jPlayer.event.ended, function() {
\t\t\tself.next();
\t\t});

\t\t// Create a play event handler to pause other instances
\t\t\$(this.cssSelector.jPlayer).bind(\$.jPlayer.event.play, function() {
\t\t\t\$(this).jPlayer(\"pauseOthers\");
\t\t});

\t\t// Create a resize event handler to show the title in full screen mode.
\t\t\$(this.cssSelector.jPlayer).bind(\$.jPlayer.event.resize, function(event) {
\t\t\tif(event.jPlayer.options.fullScreen) {
\t\t\t\t\$(self.cssSelector.details).show();
\t\t\t} else {
\t\t\t\t\$(self.cssSelector.details).hide();
\t\t\t}
\t\t});

\t\t// Create click handlers for the extra buttons that do playlist functions.
\t\t\$(this.cssSelector.previous).click(function(e) {
\t\t\te.preventDefault();
\t\t\tself.previous();
\t\t\tself.blur(this);
\t\t});

\t\t\$(this.cssSelector.next).click(function(e) {
\t\t\te.preventDefault();
\t\t\tself.next();
\t\t\tself.blur(this);
\t\t});

\t\t\$(this.cssSelector.shuffle).click(function(e) {
\t\t\te.preventDefault();
\t\t\tif(self.shuffled && \$(self.cssSelector.jPlayer).jPlayer(\"option\", \"useStateClassSkin\")) {
\t\t\t\tself.shuffle(false);
\t\t\t} else {
\t\t\t\tself.shuffle(true);
\t\t\t}
\t\t\tself.blur(this);
\t\t});
\t\t\$(this.cssSelector.shuffleOff).click(function(e) {
\t\t\te.preventDefault();
\t\t\tself.shuffle(false);
\t\t\tself.blur(this);
\t\t}).hide();

\t\t// Put the title in its initial display state
\t\tif(!this.options.fullScreen) {
\t\t\t\$(this.cssSelector.details).hide();
\t\t}

\t\t// Remove the empty <li> from the page HTML. Allows page to be valid HTML, while not interfereing with display animations
\t\t\$(this.cssSelector.playlist + \" ul\").empty();

\t\t// Create .on() handlers for the playlist items along with the free media and remove controls.
\t\tthis._createItemHandlers();

\t\t// Instance jPlayer
\t\t\$(this.cssSelector.jPlayer).jPlayer(this.options);
\t};

\tjPlayerPlaylist.prototype = {
\t\t_cssSelector: { // static object, instanced in constructor
\t\t\tjPlayer: \"#jquery_jplayer_1\",
\t\t\tcssSelectorAncestor: \"#jp_container_1\"
\t\t},
\t\t_options: { // static object, instanced in constructor
\t\t\tplaylistOptions: {
\t\t\t\tautoPlay: false,
\t\t\t\tloopOnPrevious: false,
\t\t\t\tshuffleOnLoop: true,
\t\t\t\tenableRemoveControls: false,
\t\t\t\tdisplayTime: 'slow',
\t\t\t\taddTime: 'fast',
\t\t\t\tremoveTime: 'fast',
\t\t\t\tshuffleTime: 'slow',
\t\t\t\titemClass: \"jp-playlist-item\",
\t\t\t\tfreeGroupClass: \"jp-free-media\",
\t\t\t\tfreeItemClass: \"jp-playlist-item-free\",
\t\t\t\tremoveItemClass: \"jp-playlist-item-remove\"
\t\t\t}
\t\t},
\t\toption: function(option, value) { // For changing playlist options only
\t\t\tif(value === undefined) {
\t\t\t\treturn this.options.playlistOptions[option];
\t\t\t}

\t\t\tthis.options.playlistOptions[option] = value;

\t\t\tswitch(option) {
\t\t\t\tcase \"enableRemoveControls\":
\t\t\t\t\tthis._updateControls();
\t\t\t\t\tbreak;
\t\t\t\tcase \"itemClass\":
\t\t\t\tcase \"freeGroupClass\":
\t\t\t\tcase \"freeItemClass\":
\t\t\t\tcase \"removeItemClass\":
\t\t\t\t\tthis._refresh(true); // Instant
\t\t\t\t\tthis._createItemHandlers();
\t\t\t\t\tbreak;
\t\t\t}
\t\t\treturn this;
\t\t},
\t\t_init: function() {
\t\t\tvar self = this;
\t\t\tthis._refresh(function() {
\t\t\t\tif(self.options.playlistOptions.autoPlay) {
\t\t\t\t\tself.play(self.current);
\t\t\t\t} else {
\t\t\t\t\tself.select(self.current);
\t\t\t\t}
\t\t\t});
\t\t},
\t\t_initPlaylist: function(playlist) {
\t\t\tthis.current = 0;
\t\t\tthis.shuffled = false;
\t\t\tthis.removing = false;
\t\t\tthis.original = \$.extend(true, [], playlist); // Copy the Array of Objects
\t\t\tthis._originalPlaylist();
\t\t},
\t\t_originalPlaylist: function() {
\t\t\tvar self = this;
\t\t\tthis.playlist = [];
\t\t\t// Make both arrays point to the same object elements. Gives us 2 different arrays, each pointing to the same actual object. ie., Not copies of the object.
\t\t\t\$.each(this.original, function(i) {
\t\t\t\tself.playlist[i] = self.original[i];
\t\t\t});
\t\t},
\t\t_refresh: function(instant) {
\t\t\t/* instant: Can be undefined, true or a function.
\t\t\t *\tundefined -> use animation timings
\t\t\t *\ttrue -> no animation
\t\t\t *\tfunction -> use animation timings and excute function at half way point.
\t\t\t */
\t\t\tvar self = this;

\t\t\tif(instant && !\$.isFunction(instant)) {
\t\t\t\t\$(this.cssSelector.playlist + \" ul\").empty();
\t\t\t\t\$.each(this.playlist, function(i) {
\t\t\t\t\t\$(self.cssSelector.playlist + \" ul\").append(self._createListItem(self.playlist[i]));
\t\t\t\t});
\t\t\t\tthis._updateControls();
\t\t\t} else {
\t\t\t\tvar displayTime = \$(this.cssSelector.playlist + \" ul\").children().length ? this.options.playlistOptions.displayTime : 0;

\t\t\t\t\$(this.cssSelector.playlist + \" ul\").slideUp(displayTime, function() {
\t\t\t\t\tvar \$this = \$(this);
\t\t\t\t\t\$(this).empty();
\t\t\t\t\t
\t\t\t\t\t\$.each(self.playlist, function(i) {
\t\t\t\t\t\t\$this.append(self._createListItem(self.playlist[i]));
\t\t\t\t\t});
\t\t\t\t\tself._updateControls();
\t\t\t\t\tif(\$.isFunction(instant)) {
\t\t\t\t\t\tinstant();
\t\t\t\t\t}
\t\t\t\t\tif(self.playlist.length) {
\t\t\t\t\t\t\$(this).slideDown(self.options.playlistOptions.displayTime);
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(this).show();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t},
\t\t_createListItem: function(media) {
\t\t\tvar self = this;

\t\t\t// Wrap the <li> contents in a <div>
\t\t\tvar listItem = \"<li><div>\";

\t\t\t// Create remove control
\t\t\tlistItem += \"<a href='javascript:;' class='\" + this.options.playlistOptions.removeItemClass + \"'>&times;</a>\";

\t\t\t// Create links to free media
\t\t\tif(media.free) {
\t\t\t\tvar first = true;
\t\t\t\tlistItem += \"<span class='\" + this.options.playlistOptions.freeGroupClass + \"'>(\";
\t\t\t\t\$.each(media, function(property,value) {
\t\t\t\t\tif(\$.jPlayer.prototype.format[property]) { // Check property is a media format.
\t\t\t\t\t\tif(first) {
\t\t\t\t\t\t\tfirst = false;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tlistItem += \" | \";
\t\t\t\t\t\t}
\t\t\t\t\t\tlistItem += \"<a class='\" + self.options.playlistOptions.freeItemClass + \"' href='\" + value + \"' tabindex='-1'>\" + property + \"</a>\";
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tlistItem += \")</span>\";
\t\t\t}

\t\t\t// The title is given next in the HTML otherwise the float:right on the free media corrupts in IE6/7
\t\t\tlistItem += \"<a href='javascript:;' class='\" + this.options.playlistOptions.itemClass + \"' tabindex='0'>\" + media.title + (media.artist ? \" <span class='jp-artist'>by \" + media.artist + \"</span>\" : \"\") + \"</a>\";
\t\t\tlistItem += \"</div></li>\";

\t\t\treturn listItem;
\t\t},
\t\t_createItemHandlers: function() {
\t\t\tvar self = this;
\t\t\t// Create live handlers for the playlist items
\t\t\t\$(this.cssSelector.playlist).off(\"click\", \"a.\" + this.options.playlistOptions.itemClass).on(\"click\", \"a.\" + this.options.playlistOptions.itemClass, function(e) {
\t\t\t\te.preventDefault();
\t\t\t\tvar index = \$(this).parent().parent().index();
\t\t\t\tif(self.current !== index) {
\t\t\t\t\tself.play(index);
\t\t\t\t} else {
\t\t\t\t\t\$(self.cssSelector.jPlayer).jPlayer(\"play\");
\t\t\t\t}
\t\t\t\tself.blur(this);
\t\t\t});

\t\t\t// Create live handlers that disable free media links to force access via right click
\t\t\t\$(this.cssSelector.playlist).off(\"click\", \"a.\" + this.options.playlistOptions.freeItemClass).on(\"click\", \"a.\" + this.options.playlistOptions.freeItemClass, function(e) {
\t\t\t\te.preventDefault();
\t\t\t\t\$(this).parent().parent().find(\".\" + self.options.playlistOptions.itemClass).click();
\t\t\t\tself.blur(this);
\t\t\t});

\t\t\t// Create live handlers for the remove controls
\t\t\t\$(this.cssSelector.playlist).off(\"click\", \"a.\" + this.options.playlistOptions.removeItemClass).on(\"click\", \"a.\" + this.options.playlistOptions.removeItemClass, function(e) {
\t\t\t\te.preventDefault();
\t\t\t\tvar index = \$(this).parent().parent().index();
\t\t\t\tself.remove(index);
\t\t\t\tself.blur(this);
\t\t\t});
\t\t},
\t\t_updateControls: function() {
\t\t\tif(this.options.playlistOptions.enableRemoveControls) {
\t\t\t\t\$(this.cssSelector.playlist + \" .\" + this.options.playlistOptions.removeItemClass).show();
\t\t\t} else {
\t\t\t\t\$(this.cssSelector.playlist + \" .\" + this.options.playlistOptions.removeItemClass).hide();
\t\t\t}

\t\t\tif(this.shuffled) {
\t\t\t\t\$(this.cssSelector.jPlayer).jPlayer(\"addStateClass\", \"shuffled\");
\t\t\t} else {
\t\t\t\t\$(this.cssSelector.jPlayer).jPlayer(\"removeStateClass\", \"shuffled\");
\t\t\t}
\t\t\tif(\$(this.cssSelector.shuffle).length && \$(this.cssSelector.shuffleOff).length) {
\t\t\t\tif(this.shuffled) {
\t\t\t\t\t\$(this.cssSelector.shuffleOff).show();
\t\t\t\t\t\$(this.cssSelector.shuffle).hide();
\t\t\t\t} else {
\t\t\t\t\t\$(this.cssSelector.shuffleOff).hide();
\t\t\t\t\t\$(this.cssSelector.shuffle).show();
\t\t\t\t}
\t\t\t}
\t\t},
\t\t_highlight: function(index) {
\t\t\tif(this.playlist.length && index !== undefined) {
\t\t\t\t\$(this.cssSelector.playlist + \" .jp-playlist-current\").removeClass(\"jp-playlist-current\");
\t\t\t\t\$(this.cssSelector.playlist + \" li:nth-child(\" + (index + 1) + \")\").addClass(\"jp-playlist-current\").find(\".jp-playlist-item\").addClass(\"jp-playlist-current\");
\t\t\t\t// \$(this.cssSelector.details + \" li\").html(\"<span class='jp-title'>\" + this.playlist[index].title + \"</span>\" + (this.playlist[index].artist ? \" <span class='jp-artist'>by \" + this.playlist[index].artist + \"</span>\" : \"\"));
\t\t\t}
\t\t},
\t\tsetPlaylist: function(playlist) {
\t\t\tthis._initPlaylist(playlist);
\t\t\tthis._init();
\t\t},
\t\tadd: function(media, playNow) {
\t\t\t\$(this.cssSelector.playlist + \" ul\").append(this._createListItem(media)).find(\"li:last-child\").hide().slideDown(this.options.playlistOptions.addTime);
\t\t\tthis._updateControls();
\t\t\tthis.original.push(media);
\t\t\tthis.playlist.push(media); // Both array elements share the same object pointer. Comforms with _initPlaylist(p) system.

\t\t\tif(playNow) {
\t\t\t\tthis.play(this.playlist.length - 1);
\t\t\t} else {
\t\t\t\tif(this.original.length === 1) {
\t\t\t\t\tthis.select(0);
\t\t\t\t}
\t\t\t}
\t\t},
\t\tremove: function(index) {
\t\t\tvar self = this;

\t\t\tif(index === undefined) {
\t\t\t\tthis._initPlaylist([]);
\t\t\t\tthis._refresh(function() {
\t\t\t\t\t\$(self.cssSelector.jPlayer).jPlayer(\"clearMedia\");
\t\t\t\t});
\t\t\t\treturn true;
\t\t\t} else {

\t\t\t\tif(this.removing) {
\t\t\t\t\treturn false;
\t\t\t\t} else {
\t\t\t\t\tindex = (index < 0) ? self.original.length + index : index; // Negative index relates to end of array.
\t\t\t\t\tif(0 <= index && index < this.playlist.length) {
\t\t\t\t\t\tthis.removing = true;

\t\t\t\t\t\t\$(this.cssSelector.playlist + \" li:nth-child(\" + (index + 1) + \")\").slideUp(this.options.playlistOptions.removeTime, function() {
\t\t\t\t\t\t\t\$(this).remove();

\t\t\t\t\t\t\tif(self.shuffled) {
\t\t\t\t\t\t\t\tvar item = self.playlist[index];
\t\t\t\t\t\t\t\t\$.each(self.original, function(i) {
\t\t\t\t\t\t\t\t\tif(self.original[i] === item) {
\t\t\t\t\t\t\t\t\t\tself.original.splice(i, 1);
\t\t\t\t\t\t\t\t\t\treturn false; // Exit \$.each
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\tself.playlist.splice(index, 1);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tself.original.splice(index, 1);
\t\t\t\t\t\t\t\tself.playlist.splice(index, 1);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif(self.original.length) {
\t\t\t\t\t\t\t\tif(index === self.current) {
\t\t\t\t\t\t\t\t\tself.current = (index < self.original.length) ? self.current : self.original.length - 1; // To cope when last element being selected when it was removed
\t\t\t\t\t\t\t\t\tself.select(self.current);
\t\t\t\t\t\t\t\t} else if(index < self.current) {
\t\t\t\t\t\t\t\t\tself.current--;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\$(self.cssSelector.jPlayer).jPlayer(\"clearMedia\");
\t\t\t\t\t\t\t\tself.current = 0;
\t\t\t\t\t\t\t\tself.shuffled = false;
\t\t\t\t\t\t\t\tself._updateControls();
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tself.removing = false;
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t},
\t\tselect: function(index) {
\t\t\tindex = (index < 0) ? this.original.length + index : index; // Negative index relates to end of array.
\t\t\tif(0 <= index && index < this.playlist.length) {
\t\t\t\tthis.current = index;
\t\t\t\tthis._highlight(index);
\t\t\t\t\$(this.cssSelector.jPlayer).jPlayer(\"setMedia\", this.playlist[this.current]);
\t\t\t} else {
\t\t\t\tthis.current = 0;
\t\t\t}
\t\t},
\t\tplay: function(index) {
\t\t\tindex = (index < 0) ? this.original.length + index : index; // Negative index relates to end of array.
\t\t\tif(0 <= index && index < this.playlist.length) {
\t\t\t\tif(this.playlist.length) {
\t\t\t\t\tthis.select(index);
\t\t\t\t\t\$(this.cssSelector.jPlayer).jPlayer(\"play\");
\t\t\t\t}
\t\t\t} else if(index === undefined) {
\t\t\t\t\$(this.cssSelector.jPlayer).jPlayer(\"play\");
\t\t\t}
\t\t},
\t\tpause: function() {
\t\t\t\$(this.cssSelector.jPlayer).jPlayer(\"pause\");
\t\t},
\t\tnext: function() {
\t\t\tvar index = (this.current + 1 < this.playlist.length) ? this.current + 1 : 0;

\t\t\tif(this.loop) {
\t\t\t\t// See if we need to shuffle before looping to start, and only shuffle if more than 1 item.
\t\t\t\tif(index === 0 && this.shuffled && this.options.playlistOptions.shuffleOnLoop && this.playlist.length > 1) {
\t\t\t\t\tthis.shuffle(true, true); // playNow
\t\t\t\t} else {
\t\t\t\t\tthis.play(index);
\t\t\t\t}
\t\t\t} else {
\t\t\t\t// The index will be zero if it just looped round
\t\t\t\tif(index > 0) {
\t\t\t\t\tthis.play(index);
\t\t\t\t}
\t\t\t}
\t\t},
\t\tprevious: function() {
\t\t\tvar index = (this.current - 1 >= 0) ? this.current - 1 : this.playlist.length - 1;

\t\t\tif(this.loop && this.options.playlistOptions.loopOnPrevious || index < this.playlist.length - 1) {
\t\t\t\tthis.play(index);
\t\t\t}
\t\t},
\t\tshuffle: function(shuffled, playNow) {
\t\t\tvar self = this;

\t\t\tif(shuffled === undefined) {
\t\t\t\tshuffled = !this.shuffled;
\t\t\t}

\t\t\tif(shuffled || shuffled !== this.shuffled) {

\t\t\t\t\$(this.cssSelector.playlist + \" ul\").slideUp(this.options.playlistOptions.shuffleTime, function() {
\t\t\t\t\tself.shuffled = shuffled;
\t\t\t\t\tif(shuffled) {
\t\t\t\t\t\tself.playlist.sort(function() {
\t\t\t\t\t\t\treturn 0.5 - Math.random();
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\tself._originalPlaylist();
\t\t\t\t\t}
\t\t\t\t\tself._refresh(true); // Instant

\t\t\t\t\tif(playNow || !\$(self.cssSelector.jPlayer).data(\"jPlayer\").status.paused) {
\t\t\t\t\t\tself.play(0);
\t\t\t\t\t} else {
\t\t\t\t\t\tself.select(0);
\t\t\t\t\t}

\t\t\t\t\t\$(this).slideDown(self.options.playlistOptions.shuffleTime);
\t\t\t\t});
\t\t\t}
\t\t},
\t\tblur: function(that) {
\t\t\tif(\$(this.cssSelector.jPlayer).jPlayer(\"option\", \"autoBlur\")) {
\t\t\t\t\$(that).blur();
\t\t\t}
\t\t}
\t};
})(jQuery);
", "@MwebAdmin/filemanager/js/jPlayer/add-on/jplayer.playlist.js", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/add-on/jplayer.playlist.js");
    }
}
