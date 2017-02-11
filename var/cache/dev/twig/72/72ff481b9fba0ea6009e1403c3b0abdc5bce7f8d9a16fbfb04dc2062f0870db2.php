<?php

/* @MwebAdmin/filemanager/js/jPlayer/add-on/jquery.jplayer.inspector.js */
class __TwigTemplate_c8884a4cd718ce03ffebbeedc57503126f87e8340e9f534abf4f3788e674144b extends Twig_Template
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
        $__internal_bc90d0e247cd531551225aa0d5c551300eb14514eb9437548b7872a367f03d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc90d0e247cd531551225aa0d5c551300eb14514eb9437548b7872a367f03d44->enter($__internal_bc90d0e247cd531551225aa0d5c551300eb14514eb9437548b7872a367f03d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/add-on/jquery.jplayer.inspector.js"));

        // line 1
        echo "/*
 * jPlayerInspector Plugin for jPlayer Plugin for jQuery JavaScript Library
 * http://www.jplayer.org
 *
 * Copyright (c) 2009 - 2014 Happyworm Ltd
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/MIT
 *
 * Author: Mark J Panaghiston
 * Version: 1.0.5
 * Date: 1st April 2014
 *
 * For use with jPlayer Version: 2.6.0+
 *
 * Note: Declare inspector instances after jPlayer instances. ie., Otherwise the jPlayer instance is nonsense.
 */

(function(\$, undefined) {
\t\$.jPlayerInspector = {};
\t\$.jPlayerInspector.i = 0;
\t\$.jPlayerInspector.defaults = {
\t\tjPlayer: undefined, // The jQuery selector of the jPlayer instance to inspect.
\t\tidPrefix: \"jplayer_inspector_\",
\t\tvisible: false
\t};
\t
\tvar methods = {
\t\tinit: function(options) {
\t\t\tvar self = this;
\t\t\tvar \$this = \$(this);
\t\t\t
\t\t\tvar config = \$.extend({}, \$.jPlayerInspector.defaults, options);
\t\t\t\$(this).data(\"jPlayerInspector\", config);

\t\t\tconfig.id = \$(this).attr(\"id\");
\t\t\tconfig.jPlayerId = config.jPlayer.attr(\"id\");

\t\t\tconfig.windowId = config.idPrefix + \"window_\" + \$.jPlayerInspector.i;
\t\t\tconfig.statusId = config.idPrefix + \"status_\" + \$.jPlayerInspector.i;
\t\t\tconfig.configId = config.idPrefix + \"config_\" + \$.jPlayerInspector.i;
\t\t\tconfig.toggleId = config.idPrefix + \"toggle_\" + \$.jPlayerInspector.i;
\t\t\tconfig.eventResetId = config.idPrefix + \"event_reset_\" + \$.jPlayerInspector.i;
\t\t\tconfig.updateId = config.idPrefix + \"update_\" + \$.jPlayerInspector.i;
\t\t\tconfig.eventWindowId = config.idPrefix + \"event_window_\" + \$.jPlayerInspector.i;
\t\t\t
\t\t\tconfig.eventId = {};
\t\t\tconfig.eventJq = {};
\t\t\tconfig.eventTimeout = {};
\t\t\tconfig.eventOccurrence = {};
\t\t\t
\t\t\t\$.each(\$.jPlayer.event, function(eventName,eventType) {
\t\t\t\tconfig.eventId[eventType] = config.idPrefix + \"event_\" + eventName + \"_\" + \$.jPlayerInspector.i;
\t\t\t\tconfig.eventOccurrence[eventType] = 0;
\t\t\t});
\t\t\t
\t\t\tvar structure = 
\t\t\t\t'<p><a href=\"#\" id=\"' + config.toggleId + '\">' + (config.visible ? \"Hide\" : \"Show\") + '</a> jPlayer Inspector</p>' 
\t\t\t\t+ '<div id=\"' + config.windowId + '\">'
\t\t\t\t\t+ '<div id=\"' + config.statusId + '\"></div>'
\t\t\t\t\t+ '<div id=\"' + config.eventWindowId + '\" style=\"padding:5px 5px 0 5px;background-color:#eee;border:1px dotted #000;\">'
\t\t\t\t\t\t+ '<p style=\"margin:0 0 10px 0;\"><strong>jPlayer events that have occurred over the past 1 second:</strong>'
\t\t\t\t\t\t+ '<br />(Backgrounds: <span style=\"padding:0 5px;background-color:#eee;border:1px dotted #000;\">Never occurred</span> <span style=\"padding:0 5px;background-color:#fff;border:1px dotted #000;\">Occurred before</span> <span style=\"padding:0 5px;background-color:#9f9;border:1px dotted #000;\">Occurred</span> <span style=\"padding:0 5px;background-color:#ff9;border:1px dotted #000;\">Multiple occurrences</span> <a href=\"#\" id=\"' + config.eventResetId + '\">reset</a>)</p>';
\t\t\t
\t\t\t// MJP: Would use the next 3 lines for ease, but the events are just slapped on the page.
\t\t\t// \$.each(\$.jPlayer.event, function(eventName,eventType) {
\t\t\t// \tstructure += '<div id=\"' + config.eventId[eventType] + '\" style=\"float:left;\">' + eventName + '</div>';
\t\t\t// });
\t\t\t
\t\t\tvar eventStyle = \"float:left;margin:0 5px 5px 0;padding:0 5px;border:1px dotted #000;\";
\t\t\t// MJP: Doing it longhand so order and layout easier to control.
\t\t\tstructure +=
\t\t\t\t\t\t'<div id=\"' + config.eventId[\$.jPlayer.event.ready] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.setmedia] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.flashreset] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.resize] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.repeat] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.click] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.warning] + '\" style=\"' + eventStyle + '\"></div>'

\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.loadstart] + '\" style=\"clear:left;' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.progress] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.timeupdate] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.volumechange] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.error] + '\" style=\"' + eventStyle + '\"></div>'

\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.play] + '\" style=\"clear:left;' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.pause] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.waiting] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.playing] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.seeking] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.seeked] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.ended] + '\" style=\"' + eventStyle + '\"></div>'

\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.loadeddata] + '\" style=\"clear:left;' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.loadedmetadata] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.canplay] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.canplaythrough] + '\" style=\"' + eventStyle + '\"></div>'

\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.suspend] + '\" style=\"clear:left;' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.abort] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.emptied] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.stalled] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.ratechange] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.durationchange] + '\" style=\"' + eventStyle + '\"></div>'

\t\t\t\t\t\t+ '<div style=\"clear:both\"></div>';

\t\t\t// MJP: Would like a check here in case we missed an event.

\t\t\t// MJP: Check fails, since it is not on the page yet.
/*\t\t\t\$.each(\$.jPlayer.event, function(eventName,eventType) {
\t\t\t\tif(\$(\"#\" + config.eventId[eventType])[0] === undefined) {
\t\t\t\t\tstructure += '<div id=\"' + config.eventId[eventType] + '\" style=\"clear:left;' + eventStyle + '\">' + eventName + '</div>';
\t\t\t\t}
\t\t\t});
*/
\t\t\tstructure +=
\t\t\t\t\t'</div>'
\t\t\t\t\t+ '<p><a href=\"#\" id=\"' + config.updateId + '\">Update</a> jPlayer Inspector</p>'
\t\t\t\t\t+ '<div id=\"' + config.configId + '\"></div>'
\t\t\t\t+ '</div>';
\t\t\t\$(this).html(structure);
\t\t\t
\t\t\tconfig.windowJq = \$(\"#\" + config.windowId);
\t\t\tconfig.statusJq = \$(\"#\" + config.statusId);
\t\t\tconfig.configJq = \$(\"#\" + config.configId);
\t\t\tconfig.toggleJq = \$(\"#\" + config.toggleId);
\t\t\tconfig.eventResetJq = \$(\"#\" + config.eventResetId);
\t\t\tconfig.updateJq = \$(\"#\" + config.updateId);

\t\t\t\$.each(\$.jPlayer.event, function(eventName,eventType) {
\t\t\t\tconfig.eventJq[eventType] = \$(\"#\" + config.eventId[eventType]);
\t\t\t\tconfig.eventJq[eventType].text(eventName + \" (\" + config.eventOccurrence[eventType] + \")\"); // Sets the text to the event name and (0);
\t\t\t\t
\t\t\t\tconfig.jPlayer.bind(eventType + \".jPlayerInspector\", function(e) {
\t\t\t\t\tconfig.eventOccurrence[e.type]++;
\t\t\t\t\tif(config.eventOccurrence[e.type] > 1) {
\t\t\t\t\t\tconfig.eventJq[e.type].css(\"background-color\",\"#ff9\");
\t\t\t\t\t} else {
\t\t\t\t\t\tconfig.eventJq[e.type].css(\"background-color\",\"#9f9\");
\t\t\t\t\t}
\t\t\t\t\tconfig.eventJq[e.type].text(eventName + \" (\" + config.eventOccurrence[e.type] + \")\");
\t\t\t\t\t// The timer to handle the color
\t\t\t\t\tclearTimeout(config.eventTimeout[e.type]);
\t\t\t\t\tconfig.eventTimeout[e.type] = setTimeout(function() {
\t\t\t\t\t\tconfig.eventJq[e.type].css(\"background-color\",\"#fff\");
\t\t\t\t\t}, 1000);
\t\t\t\t\t// The timer to handle the occurences.
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tconfig.eventOccurrence[e.type]--;
\t\t\t\t\t\tconfig.eventJq[e.type].text(eventName + \" (\" + config.eventOccurrence[e.type] + \")\");
\t\t\t\t\t}, 1000);
\t\t\t\t\tif(config.visible) { // Update the status, if inspector open.
\t\t\t\t\t\t\$this.jPlayerInspector(\"updateStatus\");
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});

\t\t\tconfig.jPlayer.bind(\$.jPlayer.event.ready + \".jPlayerInspector\", function(e) {
\t\t\t\t\$this.jPlayerInspector(\"updateConfig\");
\t\t\t});

\t\t\tconfig.toggleJq.click(function() {
\t\t\t\tif(config.visible) {
\t\t\t\t\t\$(this).text(\"Show\");
\t\t\t\t\tconfig.windowJq.hide();
\t\t\t\t\tconfig.statusJq.empty();
\t\t\t\t\tconfig.configJq.empty();
\t\t\t\t} else {
\t\t\t\t\t\$(this).text(\"Hide\");
\t\t\t\t\tconfig.windowJq.show();
\t\t\t\t\tconfig.updateJq.click();
\t\t\t\t}
\t\t\t\tconfig.visible = !config.visible;
\t\t\t\t\$(this).blur();
\t\t\t\treturn false;
\t\t\t});

\t\t\tconfig.eventResetJq.click(function() {
\t\t\t\t\$.each(\$.jPlayer.event, function(eventName,eventType) {
\t\t\t\t\tconfig.eventJq[eventType].css(\"background-color\",\"#eee\");
\t\t\t\t});
\t\t\t\t\$(this).blur();
\t\t\t\treturn false;
\t\t\t});

\t\t\tconfig.updateJq.click(function() {
\t\t\t\t\$this.jPlayerInspector(\"updateStatus\");
\t\t\t\t\$this.jPlayerInspector(\"updateConfig\");
\t\t\t\treturn false;
\t\t\t});

\t\t\tif(!config.visible) {
\t\t\t\tconfig.windowJq.hide();
\t\t\t} else {
\t\t\t\t// config.updateJq.click();
\t\t\t}
\t\t\t
\t\t\t\$.jPlayerInspector.i++;

\t\t\treturn this;
\t\t},
\t\tdestroy: function() {
\t\t\t\$(this).data(\"jPlayerInspector\") && \$(this).data(\"jPlayerInspector\").jPlayer.unbind(\".jPlayerInspector\");
\t\t\t\$(this).empty();
\t\t},
\t\tupdateConfig: function() { // This displays information about jPlayer's configuration in inspector
\t\t
\t\t\tvar jPlayerInfo = \"<p>This jPlayer instance is running in your browser where:<br />\"

\t\t\tfor(i = 0; i < \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").solutions.length; i++) {
\t\t\t\tvar solution = \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").solutions[i];
\t\t\t\tjPlayerInfo += \"&nbsp;jPlayer's <strong>\" + solution + \"</strong> solution is\";\t\t\t\t
\t\t\t\tif(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\")[solution].used) {
\t\t\t\t\tjPlayerInfo += \" being <strong>used</strong> and will support:<strong>\";
\t\t\t\t\tfor(format in \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\")[solution].support) {
\t\t\t\t\t\tif(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\")[solution].support[format]) {
\t\t\t\t\t\t\tjPlayerInfo += \" \" + format;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tjPlayerInfo += \"</strong><br />\";
\t\t\t\t} else {
\t\t\t\t\tjPlayerInfo += \" <strong>not required</strong><br />\";
\t\t\t\t}
\t\t\t}
\t\t\tjPlayerInfo += \"</p>\";

\t\t\tif(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").html.active) {
\t\t\t\tif(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").flash.active) {
\t\t\t\t\tjPlayerInfo += \"<strong>Problem with jPlayer since both HTML5 and Flash are active.</strong>\";
\t\t\t\t} else {
\t\t\t\t\tjPlayerInfo += \"The <strong>HTML5 is active</strong>.\";
\t\t\t\t}
\t\t\t} else {
\t\t\t\tif(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").flash.active) {
\t\t\t\t\tjPlayerInfo += \"The <strong>Flash is active</strong>.\";
\t\t\t\t} else {
\t\t\t\t\tjPlayerInfo += \"No solution is currently active. jPlayer needs a setMedia().\";
\t\t\t\t}
\t\t\t}
\t\t\tjPlayerInfo += \"</p>\";

\t\t\tvar formatType = \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.formatType;
\t\t\tjPlayerInfo += \"<p><code>status.formatType = '\" + formatType + \"'</code><br />\";
\t\t\tif(formatType) {
\t\t\t\tjPlayerInfo += \"<code>Browser canPlay('\" + \$.jPlayer.prototype.format[formatType].codec + \"')</code>\";
\t\t\t} else {
\t\t\t\tjPlayerInfo += \"</p>\";
\t\t\t}
\t\t\t
\t\t\tjPlayerInfo += \"<p><code>status.src = '\" + \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.src + \"'</code></p>\";

\t\t\tjPlayerInfo += \"<p><code>status.media = {<br />\";
\t\t\tfor(prop in \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.media) {
\t\t\t\tjPlayerInfo += \"&nbsp;\" + prop + \": \" + \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.media[prop] + \"<br />\"; // Some are strings
\t\t\t}
\t\t\tjPlayerInfo += \"};</code></p>\"

\t\t\tjPlayerInfo += \"<p>\";
\t\t\tjPlayerInfo += \"<code>status.videoWidth = '\" + \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.videoWidth + \"'</code>\";
\t\t\tjPlayerInfo += \" | <code>status.videoHeight = '\" + \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.videoHeight + \"'</code>\";
\t\t\tjPlayerInfo += \"<br /><code>status.width = '\" + \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.width + \"'</code>\";
\t\t\tjPlayerInfo += \" | <code>status.height = '\" + \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.height + \"'</code>\";
\t\t\tjPlayerInfo += \"</p>\";

\t\t\t+ \"<p>Raw browser test for HTML5 support. Should equal a function if HTML5 is available.<br />\";
\t\t\tif(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").html.audio.available) {
\t\t\t\tjPlayerInfo += \"<code>htmlElement.audio.canPlayType = \" + (typeof \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").htmlElement.audio.canPlayType) +\"</code><br />\"
\t\t\t}
\t\t\tif(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").html.video.available) {
\t\t\t\tjPlayerInfo += \"<code>htmlElement.video.canPlayType = \" + (typeof \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").htmlElement.video.canPlayType) +\"</code>\";
\t\t\t}
\t\t\tjPlayerInfo += \"</p>\";

\t\t\tjPlayerInfo += \"<p>This instance is using the constructor options:<br />\"
\t\t\t+ \"<code>\$('#\" + \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").internal.self.id + \"').jPlayer({<br />\"

\t\t\t+ \"&nbsp;swfPath: '\" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"swfPath\") + \"',<br />\"

\t\t\t+ \"&nbsp;solution: '\" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"solution\") + \"',<br />\"

\t\t\t+ \"&nbsp;supplied: '\" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"supplied\") + \"',<br />\"

\t\t\t+ \"&nbsp;preload: '\" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"preload\") + \"',<br />\"
\t\t\t
\t\t\t+ \"&nbsp;volume: \" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"volume\") + \",<br />\"
\t\t\t
\t\t\t+ \"&nbsp;muted: \" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"muted\") + \",<br />\"

\t\t\t+ \"&nbsp;backgroundColor: '\" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"backgroundColor\") + \"',<br />\"

\t\t\t+ \"&nbsp;cssSelectorAncestor: '\" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"cssSelectorAncestor\") + \"',<br />\"

\t\t\t+ \"&nbsp;cssSelector: {\";

\t\t\tvar cssSelector = \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"cssSelector\");
\t\t\tfor(prop in cssSelector) {
\t\t\t\t
\t\t\t\t// jPlayerInfo += \"<br />&nbsp;&nbsp;\" + prop + \": '\" + cssSelector[prop] + \"',\" // This works too of course, but want to use option method for deep keys.
\t\t\t\tjPlayerInfo += \"<br />&nbsp;&nbsp;\" + prop + \": '\" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"cssSelector.\" + prop) + \"',\"
\t\t\t}

\t\t\tjPlayerInfo = jPlayerInfo.slice(0, -1); // Because the sloppy comma was bugging me.

\t\t\tjPlayerInfo += \"<br />&nbsp;},<br />\"

\t\t\t+ \"&nbsp;errorAlerts: \" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"errorAlerts\") + \",<br />\"
\t\t\t
\t\t\t+ \"&nbsp;warningAlerts: \" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"warningAlerts\") + \"<br />\"

\t\t\t+ \"});</code></p>\";
\t\t\t\$(this).data(\"jPlayerInspector\").configJq.html(jPlayerInfo);
\t\t\treturn this;
\t\t},
\t\tupdateStatus: function() { // This displays information about jPlayer's status in the inspector
\t\t\t\$(this).data(\"jPlayerInspector\").statusJq.html(
\t\t\t\t\"<p>jPlayer is \" +
\t\t\t\t(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.paused ? \"paused\" : \"playing\") +
\t\t\t\t\" at time: \" + Math.floor(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.currentTime*10)/10 + \"s.\" +
\t\t\t\t\" (d: \" + Math.floor(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.duration*10)/10 + \"s\" +
\t\t\t\t\", sp: \" + Math.floor(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.seekPercent) + \"%\" +
\t\t\t\t\", cpr: \" + Math.floor(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.currentPercentRelative) + \"%\" +
\t\t\t\t\", cpa: \" + Math.floor(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.currentPercentAbsolute) + \"%)</p>\"
\t\t\t);
\t\t\treturn this;
\t\t}
\t};
\t\$.fn.jPlayerInspector = function( method ) {
\t\t// Method calling logic
\t\tif ( methods[method] ) {
\t\t\treturn methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
\t\t} else if ( typeof method === 'object' || ! method ) {
\t\t\treturn methods.init.apply( this, arguments );
\t\t} else {
\t\t\t\$.error( 'Method ' +  method + ' does not exist on jQuery.jPlayerInspector' );
\t\t}    
\t};
})(jQuery);
";
        
        $__internal_bc90d0e247cd531551225aa0d5c551300eb14514eb9437548b7872a367f03d44->leave($__internal_bc90d0e247cd531551225aa0d5c551300eb14514eb9437548b7872a367f03d44_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/add-on/jquery.jplayer.inspector.js";
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
 * jPlayerInspector Plugin for jPlayer Plugin for jQuery JavaScript Library
 * http://www.jplayer.org
 *
 * Copyright (c) 2009 - 2014 Happyworm Ltd
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/MIT
 *
 * Author: Mark J Panaghiston
 * Version: 1.0.5
 * Date: 1st April 2014
 *
 * For use with jPlayer Version: 2.6.0+
 *
 * Note: Declare inspector instances after jPlayer instances. ie., Otherwise the jPlayer instance is nonsense.
 */

(function(\$, undefined) {
\t\$.jPlayerInspector = {};
\t\$.jPlayerInspector.i = 0;
\t\$.jPlayerInspector.defaults = {
\t\tjPlayer: undefined, // The jQuery selector of the jPlayer instance to inspect.
\t\tidPrefix: \"jplayer_inspector_\",
\t\tvisible: false
\t};
\t
\tvar methods = {
\t\tinit: function(options) {
\t\t\tvar self = this;
\t\t\tvar \$this = \$(this);
\t\t\t
\t\t\tvar config = \$.extend({}, \$.jPlayerInspector.defaults, options);
\t\t\t\$(this).data(\"jPlayerInspector\", config);

\t\t\tconfig.id = \$(this).attr(\"id\");
\t\t\tconfig.jPlayerId = config.jPlayer.attr(\"id\");

\t\t\tconfig.windowId = config.idPrefix + \"window_\" + \$.jPlayerInspector.i;
\t\t\tconfig.statusId = config.idPrefix + \"status_\" + \$.jPlayerInspector.i;
\t\t\tconfig.configId = config.idPrefix + \"config_\" + \$.jPlayerInspector.i;
\t\t\tconfig.toggleId = config.idPrefix + \"toggle_\" + \$.jPlayerInspector.i;
\t\t\tconfig.eventResetId = config.idPrefix + \"event_reset_\" + \$.jPlayerInspector.i;
\t\t\tconfig.updateId = config.idPrefix + \"update_\" + \$.jPlayerInspector.i;
\t\t\tconfig.eventWindowId = config.idPrefix + \"event_window_\" + \$.jPlayerInspector.i;
\t\t\t
\t\t\tconfig.eventId = {};
\t\t\tconfig.eventJq = {};
\t\t\tconfig.eventTimeout = {};
\t\t\tconfig.eventOccurrence = {};
\t\t\t
\t\t\t\$.each(\$.jPlayer.event, function(eventName,eventType) {
\t\t\t\tconfig.eventId[eventType] = config.idPrefix + \"event_\" + eventName + \"_\" + \$.jPlayerInspector.i;
\t\t\t\tconfig.eventOccurrence[eventType] = 0;
\t\t\t});
\t\t\t
\t\t\tvar structure = 
\t\t\t\t'<p><a href=\"#\" id=\"' + config.toggleId + '\">' + (config.visible ? \"Hide\" : \"Show\") + '</a> jPlayer Inspector</p>' 
\t\t\t\t+ '<div id=\"' + config.windowId + '\">'
\t\t\t\t\t+ '<div id=\"' + config.statusId + '\"></div>'
\t\t\t\t\t+ '<div id=\"' + config.eventWindowId + '\" style=\"padding:5px 5px 0 5px;background-color:#eee;border:1px dotted #000;\">'
\t\t\t\t\t\t+ '<p style=\"margin:0 0 10px 0;\"><strong>jPlayer events that have occurred over the past 1 second:</strong>'
\t\t\t\t\t\t+ '<br />(Backgrounds: <span style=\"padding:0 5px;background-color:#eee;border:1px dotted #000;\">Never occurred</span> <span style=\"padding:0 5px;background-color:#fff;border:1px dotted #000;\">Occurred before</span> <span style=\"padding:0 5px;background-color:#9f9;border:1px dotted #000;\">Occurred</span> <span style=\"padding:0 5px;background-color:#ff9;border:1px dotted #000;\">Multiple occurrences</span> <a href=\"#\" id=\"' + config.eventResetId + '\">reset</a>)</p>';
\t\t\t
\t\t\t// MJP: Would use the next 3 lines for ease, but the events are just slapped on the page.
\t\t\t// \$.each(\$.jPlayer.event, function(eventName,eventType) {
\t\t\t// \tstructure += '<div id=\"' + config.eventId[eventType] + '\" style=\"float:left;\">' + eventName + '</div>';
\t\t\t// });
\t\t\t
\t\t\tvar eventStyle = \"float:left;margin:0 5px 5px 0;padding:0 5px;border:1px dotted #000;\";
\t\t\t// MJP: Doing it longhand so order and layout easier to control.
\t\t\tstructure +=
\t\t\t\t\t\t'<div id=\"' + config.eventId[\$.jPlayer.event.ready] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.setmedia] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.flashreset] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.resize] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.repeat] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.click] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.warning] + '\" style=\"' + eventStyle + '\"></div>'

\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.loadstart] + '\" style=\"clear:left;' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.progress] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.timeupdate] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.volumechange] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.error] + '\" style=\"' + eventStyle + '\"></div>'

\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.play] + '\" style=\"clear:left;' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.pause] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.waiting] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.playing] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.seeking] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.seeked] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.ended] + '\" style=\"' + eventStyle + '\"></div>'

\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.loadeddata] + '\" style=\"clear:left;' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.loadedmetadata] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.canplay] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.canplaythrough] + '\" style=\"' + eventStyle + '\"></div>'

\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.suspend] + '\" style=\"clear:left;' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.abort] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.emptied] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.stalled] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.ratechange] + '\" style=\"' + eventStyle + '\"></div>'
\t\t\t\t\t\t+ '<div id=\"' + config.eventId[\$.jPlayer.event.durationchange] + '\" style=\"' + eventStyle + '\"></div>'

\t\t\t\t\t\t+ '<div style=\"clear:both\"></div>';

\t\t\t// MJP: Would like a check here in case we missed an event.

\t\t\t// MJP: Check fails, since it is not on the page yet.
/*\t\t\t\$.each(\$.jPlayer.event, function(eventName,eventType) {
\t\t\t\tif(\$(\"#\" + config.eventId[eventType])[0] === undefined) {
\t\t\t\t\tstructure += '<div id=\"' + config.eventId[eventType] + '\" style=\"clear:left;' + eventStyle + '\">' + eventName + '</div>';
\t\t\t\t}
\t\t\t});
*/
\t\t\tstructure +=
\t\t\t\t\t'</div>'
\t\t\t\t\t+ '<p><a href=\"#\" id=\"' + config.updateId + '\">Update</a> jPlayer Inspector</p>'
\t\t\t\t\t+ '<div id=\"' + config.configId + '\"></div>'
\t\t\t\t+ '</div>';
\t\t\t\$(this).html(structure);
\t\t\t
\t\t\tconfig.windowJq = \$(\"#\" + config.windowId);
\t\t\tconfig.statusJq = \$(\"#\" + config.statusId);
\t\t\tconfig.configJq = \$(\"#\" + config.configId);
\t\t\tconfig.toggleJq = \$(\"#\" + config.toggleId);
\t\t\tconfig.eventResetJq = \$(\"#\" + config.eventResetId);
\t\t\tconfig.updateJq = \$(\"#\" + config.updateId);

\t\t\t\$.each(\$.jPlayer.event, function(eventName,eventType) {
\t\t\t\tconfig.eventJq[eventType] = \$(\"#\" + config.eventId[eventType]);
\t\t\t\tconfig.eventJq[eventType].text(eventName + \" (\" + config.eventOccurrence[eventType] + \")\"); // Sets the text to the event name and (0);
\t\t\t\t
\t\t\t\tconfig.jPlayer.bind(eventType + \".jPlayerInspector\", function(e) {
\t\t\t\t\tconfig.eventOccurrence[e.type]++;
\t\t\t\t\tif(config.eventOccurrence[e.type] > 1) {
\t\t\t\t\t\tconfig.eventJq[e.type].css(\"background-color\",\"#ff9\");
\t\t\t\t\t} else {
\t\t\t\t\t\tconfig.eventJq[e.type].css(\"background-color\",\"#9f9\");
\t\t\t\t\t}
\t\t\t\t\tconfig.eventJq[e.type].text(eventName + \" (\" + config.eventOccurrence[e.type] + \")\");
\t\t\t\t\t// The timer to handle the color
\t\t\t\t\tclearTimeout(config.eventTimeout[e.type]);
\t\t\t\t\tconfig.eventTimeout[e.type] = setTimeout(function() {
\t\t\t\t\t\tconfig.eventJq[e.type].css(\"background-color\",\"#fff\");
\t\t\t\t\t}, 1000);
\t\t\t\t\t// The timer to handle the occurences.
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\tconfig.eventOccurrence[e.type]--;
\t\t\t\t\t\tconfig.eventJq[e.type].text(eventName + \" (\" + config.eventOccurrence[e.type] + \")\");
\t\t\t\t\t}, 1000);
\t\t\t\t\tif(config.visible) { // Update the status, if inspector open.
\t\t\t\t\t\t\$this.jPlayerInspector(\"updateStatus\");
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});

\t\t\tconfig.jPlayer.bind(\$.jPlayer.event.ready + \".jPlayerInspector\", function(e) {
\t\t\t\t\$this.jPlayerInspector(\"updateConfig\");
\t\t\t});

\t\t\tconfig.toggleJq.click(function() {
\t\t\t\tif(config.visible) {
\t\t\t\t\t\$(this).text(\"Show\");
\t\t\t\t\tconfig.windowJq.hide();
\t\t\t\t\tconfig.statusJq.empty();
\t\t\t\t\tconfig.configJq.empty();
\t\t\t\t} else {
\t\t\t\t\t\$(this).text(\"Hide\");
\t\t\t\t\tconfig.windowJq.show();
\t\t\t\t\tconfig.updateJq.click();
\t\t\t\t}
\t\t\t\tconfig.visible = !config.visible;
\t\t\t\t\$(this).blur();
\t\t\t\treturn false;
\t\t\t});

\t\t\tconfig.eventResetJq.click(function() {
\t\t\t\t\$.each(\$.jPlayer.event, function(eventName,eventType) {
\t\t\t\t\tconfig.eventJq[eventType].css(\"background-color\",\"#eee\");
\t\t\t\t});
\t\t\t\t\$(this).blur();
\t\t\t\treturn false;
\t\t\t});

\t\t\tconfig.updateJq.click(function() {
\t\t\t\t\$this.jPlayerInspector(\"updateStatus\");
\t\t\t\t\$this.jPlayerInspector(\"updateConfig\");
\t\t\t\treturn false;
\t\t\t});

\t\t\tif(!config.visible) {
\t\t\t\tconfig.windowJq.hide();
\t\t\t} else {
\t\t\t\t// config.updateJq.click();
\t\t\t}
\t\t\t
\t\t\t\$.jPlayerInspector.i++;

\t\t\treturn this;
\t\t},
\t\tdestroy: function() {
\t\t\t\$(this).data(\"jPlayerInspector\") && \$(this).data(\"jPlayerInspector\").jPlayer.unbind(\".jPlayerInspector\");
\t\t\t\$(this).empty();
\t\t},
\t\tupdateConfig: function() { // This displays information about jPlayer's configuration in inspector
\t\t
\t\t\tvar jPlayerInfo = \"<p>This jPlayer instance is running in your browser where:<br />\"

\t\t\tfor(i = 0; i < \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").solutions.length; i++) {
\t\t\t\tvar solution = \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").solutions[i];
\t\t\t\tjPlayerInfo += \"&nbsp;jPlayer's <strong>\" + solution + \"</strong> solution is\";\t\t\t\t
\t\t\t\tif(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\")[solution].used) {
\t\t\t\t\tjPlayerInfo += \" being <strong>used</strong> and will support:<strong>\";
\t\t\t\t\tfor(format in \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\")[solution].support) {
\t\t\t\t\t\tif(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\")[solution].support[format]) {
\t\t\t\t\t\t\tjPlayerInfo += \" \" + format;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tjPlayerInfo += \"</strong><br />\";
\t\t\t\t} else {
\t\t\t\t\tjPlayerInfo += \" <strong>not required</strong><br />\";
\t\t\t\t}
\t\t\t}
\t\t\tjPlayerInfo += \"</p>\";

\t\t\tif(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").html.active) {
\t\t\t\tif(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").flash.active) {
\t\t\t\t\tjPlayerInfo += \"<strong>Problem with jPlayer since both HTML5 and Flash are active.</strong>\";
\t\t\t\t} else {
\t\t\t\t\tjPlayerInfo += \"The <strong>HTML5 is active</strong>.\";
\t\t\t\t}
\t\t\t} else {
\t\t\t\tif(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").flash.active) {
\t\t\t\t\tjPlayerInfo += \"The <strong>Flash is active</strong>.\";
\t\t\t\t} else {
\t\t\t\t\tjPlayerInfo += \"No solution is currently active. jPlayer needs a setMedia().\";
\t\t\t\t}
\t\t\t}
\t\t\tjPlayerInfo += \"</p>\";

\t\t\tvar formatType = \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.formatType;
\t\t\tjPlayerInfo += \"<p><code>status.formatType = '\" + formatType + \"'</code><br />\";
\t\t\tif(formatType) {
\t\t\t\tjPlayerInfo += \"<code>Browser canPlay('\" + \$.jPlayer.prototype.format[formatType].codec + \"')</code>\";
\t\t\t} else {
\t\t\t\tjPlayerInfo += \"</p>\";
\t\t\t}
\t\t\t
\t\t\tjPlayerInfo += \"<p><code>status.src = '\" + \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.src + \"'</code></p>\";

\t\t\tjPlayerInfo += \"<p><code>status.media = {<br />\";
\t\t\tfor(prop in \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.media) {
\t\t\t\tjPlayerInfo += \"&nbsp;\" + prop + \": \" + \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.media[prop] + \"<br />\"; // Some are strings
\t\t\t}
\t\t\tjPlayerInfo += \"};</code></p>\"

\t\t\tjPlayerInfo += \"<p>\";
\t\t\tjPlayerInfo += \"<code>status.videoWidth = '\" + \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.videoWidth + \"'</code>\";
\t\t\tjPlayerInfo += \" | <code>status.videoHeight = '\" + \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.videoHeight + \"'</code>\";
\t\t\tjPlayerInfo += \"<br /><code>status.width = '\" + \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.width + \"'</code>\";
\t\t\tjPlayerInfo += \" | <code>status.height = '\" + \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.height + \"'</code>\";
\t\t\tjPlayerInfo += \"</p>\";

\t\t\t+ \"<p>Raw browser test for HTML5 support. Should equal a function if HTML5 is available.<br />\";
\t\t\tif(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").html.audio.available) {
\t\t\t\tjPlayerInfo += \"<code>htmlElement.audio.canPlayType = \" + (typeof \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").htmlElement.audio.canPlayType) +\"</code><br />\"
\t\t\t}
\t\t\tif(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").html.video.available) {
\t\t\t\tjPlayerInfo += \"<code>htmlElement.video.canPlayType = \" + (typeof \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").htmlElement.video.canPlayType) +\"</code>\";
\t\t\t}
\t\t\tjPlayerInfo += \"</p>\";

\t\t\tjPlayerInfo += \"<p>This instance is using the constructor options:<br />\"
\t\t\t+ \"<code>\$('#\" + \$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").internal.self.id + \"').jPlayer({<br />\"

\t\t\t+ \"&nbsp;swfPath: '\" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"swfPath\") + \"',<br />\"

\t\t\t+ \"&nbsp;solution: '\" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"solution\") + \"',<br />\"

\t\t\t+ \"&nbsp;supplied: '\" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"supplied\") + \"',<br />\"

\t\t\t+ \"&nbsp;preload: '\" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"preload\") + \"',<br />\"
\t\t\t
\t\t\t+ \"&nbsp;volume: \" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"volume\") + \",<br />\"
\t\t\t
\t\t\t+ \"&nbsp;muted: \" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"muted\") + \",<br />\"

\t\t\t+ \"&nbsp;backgroundColor: '\" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"backgroundColor\") + \"',<br />\"

\t\t\t+ \"&nbsp;cssSelectorAncestor: '\" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"cssSelectorAncestor\") + \"',<br />\"

\t\t\t+ \"&nbsp;cssSelector: {\";

\t\t\tvar cssSelector = \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"cssSelector\");
\t\t\tfor(prop in cssSelector) {
\t\t\t\t
\t\t\t\t// jPlayerInfo += \"<br />&nbsp;&nbsp;\" + prop + \": '\" + cssSelector[prop] + \"',\" // This works too of course, but want to use option method for deep keys.
\t\t\t\tjPlayerInfo += \"<br />&nbsp;&nbsp;\" + prop + \": '\" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"cssSelector.\" + prop) + \"',\"
\t\t\t}

\t\t\tjPlayerInfo = jPlayerInfo.slice(0, -1); // Because the sloppy comma was bugging me.

\t\t\tjPlayerInfo += \"<br />&nbsp;},<br />\"

\t\t\t+ \"&nbsp;errorAlerts: \" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"errorAlerts\") + \",<br />\"
\t\t\t
\t\t\t+ \"&nbsp;warningAlerts: \" + \$(this).data(\"jPlayerInspector\").jPlayer.jPlayer(\"option\", \"warningAlerts\") + \"<br />\"

\t\t\t+ \"});</code></p>\";
\t\t\t\$(this).data(\"jPlayerInspector\").configJq.html(jPlayerInfo);
\t\t\treturn this;
\t\t},
\t\tupdateStatus: function() { // This displays information about jPlayer's status in the inspector
\t\t\t\$(this).data(\"jPlayerInspector\").statusJq.html(
\t\t\t\t\"<p>jPlayer is \" +
\t\t\t\t(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.paused ? \"paused\" : \"playing\") +
\t\t\t\t\" at time: \" + Math.floor(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.currentTime*10)/10 + \"s.\" +
\t\t\t\t\" (d: \" + Math.floor(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.duration*10)/10 + \"s\" +
\t\t\t\t\", sp: \" + Math.floor(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.seekPercent) + \"%\" +
\t\t\t\t\", cpr: \" + Math.floor(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.currentPercentRelative) + \"%\" +
\t\t\t\t\", cpa: \" + Math.floor(\$(this).data(\"jPlayerInspector\").jPlayer.data(\"jPlayer\").status.currentPercentAbsolute) + \"%)</p>\"
\t\t\t);
\t\t\treturn this;
\t\t}
\t};
\t\$.fn.jPlayerInspector = function( method ) {
\t\t// Method calling logic
\t\tif ( methods[method] ) {
\t\t\treturn methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
\t\t} else if ( typeof method === 'object' || ! method ) {
\t\t\treturn methods.init.apply( this, arguments );
\t\t} else {
\t\t\t\$.error( 'Method ' +  method + ' does not exist on jQuery.jPlayerInspector' );
\t\t}    
\t};
})(jQuery);
", "@MwebAdmin/filemanager/js/jPlayer/add-on/jquery.jplayer.inspector.js", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/add-on/jquery.jplayer.inspector.js");
    }
}
