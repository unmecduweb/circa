<?php

/* @MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerEvent.as */
class __TwigTemplate_4a83b16cfa55a7a8837695298baa29f026480b021fc4cc79b34857aa7c185c93 extends Twig_Template
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
        $__internal_21bc630f31c5b4e75325d1df805e6ce48ab5e1c171d45398555b2e7a94003c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21bc630f31c5b4e75325d1df805e6ce48ab5e1c171d45398555b2e7a94003c16->enter($__internal_21bc630f31c5b4e75325d1df805e6ce48ab5e1c171d45398555b2e7a94003c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerEvent.as"));

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
 * Date: 20th May 2013
 */

package happyworm.jPlayer {
\timport flash.events.Event;
\t
\tpublic class JplayerEvent extends Event {
\t\t
\t\t// The event strings must match those in the JavaScript's \$.jPlayer.event object

\t\tpublic static const JPLAYER_READY:String = \"jPlayer_ready\";
\t\tpublic static const JPLAYER_FLASHRESET:String = \"jPlayer_flashreset\"; // Handled in JavaScript
\t\tpublic static const JPLAYER_RESIZE:String = \"jPlayer_resize\"; // Handled in JavaScript
\t\tpublic static const JPLAYER_REPEAT:String = \"jPlayer_repeat\"; // Handled in JavaScript
\t\tpublic static const JPLAYER_CLICK:String = \"jPlayer_click\";
\t\tpublic static const JPLAYER_ERROR:String = \"jPlayer_error\";
\t\tpublic static const JPLAYER_WARNING:String = \"jPlayer_warning\"; // Currently not used by the flash solution

\t\tpublic static const JPLAYER_LOADSTART:String = \"jPlayer_loadstart\";
\t\tpublic static const JPLAYER_PROGRESS:String = \"jPlayer_progress\";
\t\tpublic static const JPLAYER_SUSPEND:String = \"jPlayer_suspend\"; // Not implemented
\t\tpublic static const JPLAYER_ABORT:String = \"jPlayer_abort\"; // Not implemented
\t\tpublic static const JPLAYER_EMPTIED:String = \"jPlayer_emptied\"; // Not implemented
\t\tpublic static const JPLAYER_STALLED:String = \"jPlayer_stalled\"; // Not implemented
\t\tpublic static const JPLAYER_PLAY:String = \"jPlayer_play\";
\t\tpublic static const JPLAYER_PAUSE:String = \"jPlayer_pause\";
\t\tpublic static const JPLAYER_LOADEDMETADATA:String = \"jPlayer_loadedmetadata\"; // MP3 has no equivilent
\t\tpublic static const JPLAYER_LOADEDDATA:String = \"jPlayer_loadeddata\"; // Not implemented
\t\tpublic static const JPLAYER_WAITING:String = \"jPlayer_waiting\"; // Not implemented (Done in: MP3)
\t\tpublic static const JPLAYER_PLAYING:String = \"jPlayer_playing\"; // Not implemented (Done in: MP3)
\t\tpublic static const JPLAYER_CANPLAY:String = \"jPlayer_canplay\"; // Not implemented (Done in: MP3)
\t\tpublic static const JPLAYER_CANPLAYTHROUGH:String = \"jPlayer_canplaythrough\"; // Not implemented (Done in: MP3)
\t\tpublic static const JPLAYER_SEEKING:String = \"jPlayer_seeking\";
\t\tpublic static const JPLAYER_SEEKED:String = \"jPlayer_seeked\";
\t\tpublic static const JPLAYER_TIMEUPDATE:String = \"jPlayer_timeupdate\";
\t\tpublic static const JPLAYER_ENDED:String = \"jPlayer_ended\";
\t\tpublic static const JPLAYER_RATECHANGE:String = \"jPlayer_ratechange\"; // Not implemented
\t\tpublic static const JPLAYER_DURATIONCHANGE:String = \"jPlayer_durationchange\"; // Not implemented
\t\tpublic static const JPLAYER_VOLUMECHANGE:String = \"jPlayer_volumechange\"; // See JavaScript

\t\t// Events used internal to jPlayer's Flash.
\t\tpublic static const DEBUG_MSG:String = \"debug_msg\";

\t\tpublic var data:JplayerStatus;
\t\tpublic var msg:String = \"\";

\t\tpublic function JplayerEvent(type:String, data:JplayerStatus, msg:String = \"\", bubbles:Boolean = false, cancelable:Boolean = false) {
\t\t\tsuper(type, bubbles, cancelable);
\t\t\tthis.data = data;
\t\t\tthis.msg = msg;
\t\t}
\t\tpublic override function clone():Event {
\t\t\treturn new JplayerEvent(type, data, msg, bubbles, cancelable);
\t\t}
\t\tpublic override function toString():String {
\t\t\treturn formatToString(\"JplayerEvent\", \"type\", \"bubbles\", \"cancelable\", \"eventPhase\", \"data\", \"msg\");
\t\t}
\t}
}";
        
        $__internal_21bc630f31c5b4e75325d1df805e6ce48ab5e1c171d45398555b2e7a94003c16->leave($__internal_21bc630f31c5b4e75325d1df805e6ce48ab5e1c171d45398555b2e7a94003c16_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerEvent.as";
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
 * Date: 20th May 2013
 */

package happyworm.jPlayer {
\timport flash.events.Event;
\t
\tpublic class JplayerEvent extends Event {
\t\t
\t\t// The event strings must match those in the JavaScript's \$.jPlayer.event object

\t\tpublic static const JPLAYER_READY:String = \"jPlayer_ready\";
\t\tpublic static const JPLAYER_FLASHRESET:String = \"jPlayer_flashreset\"; // Handled in JavaScript
\t\tpublic static const JPLAYER_RESIZE:String = \"jPlayer_resize\"; // Handled in JavaScript
\t\tpublic static const JPLAYER_REPEAT:String = \"jPlayer_repeat\"; // Handled in JavaScript
\t\tpublic static const JPLAYER_CLICK:String = \"jPlayer_click\";
\t\tpublic static const JPLAYER_ERROR:String = \"jPlayer_error\";
\t\tpublic static const JPLAYER_WARNING:String = \"jPlayer_warning\"; // Currently not used by the flash solution

\t\tpublic static const JPLAYER_LOADSTART:String = \"jPlayer_loadstart\";
\t\tpublic static const JPLAYER_PROGRESS:String = \"jPlayer_progress\";
\t\tpublic static const JPLAYER_SUSPEND:String = \"jPlayer_suspend\"; // Not implemented
\t\tpublic static const JPLAYER_ABORT:String = \"jPlayer_abort\"; // Not implemented
\t\tpublic static const JPLAYER_EMPTIED:String = \"jPlayer_emptied\"; // Not implemented
\t\tpublic static const JPLAYER_STALLED:String = \"jPlayer_stalled\"; // Not implemented
\t\tpublic static const JPLAYER_PLAY:String = \"jPlayer_play\";
\t\tpublic static const JPLAYER_PAUSE:String = \"jPlayer_pause\";
\t\tpublic static const JPLAYER_LOADEDMETADATA:String = \"jPlayer_loadedmetadata\"; // MP3 has no equivilent
\t\tpublic static const JPLAYER_LOADEDDATA:String = \"jPlayer_loadeddata\"; // Not implemented
\t\tpublic static const JPLAYER_WAITING:String = \"jPlayer_waiting\"; // Not implemented (Done in: MP3)
\t\tpublic static const JPLAYER_PLAYING:String = \"jPlayer_playing\"; // Not implemented (Done in: MP3)
\t\tpublic static const JPLAYER_CANPLAY:String = \"jPlayer_canplay\"; // Not implemented (Done in: MP3)
\t\tpublic static const JPLAYER_CANPLAYTHROUGH:String = \"jPlayer_canplaythrough\"; // Not implemented (Done in: MP3)
\t\tpublic static const JPLAYER_SEEKING:String = \"jPlayer_seeking\";
\t\tpublic static const JPLAYER_SEEKED:String = \"jPlayer_seeked\";
\t\tpublic static const JPLAYER_TIMEUPDATE:String = \"jPlayer_timeupdate\";
\t\tpublic static const JPLAYER_ENDED:String = \"jPlayer_ended\";
\t\tpublic static const JPLAYER_RATECHANGE:String = \"jPlayer_ratechange\"; // Not implemented
\t\tpublic static const JPLAYER_DURATIONCHANGE:String = \"jPlayer_durationchange\"; // Not implemented
\t\tpublic static const JPLAYER_VOLUMECHANGE:String = \"jPlayer_volumechange\"; // See JavaScript

\t\t// Events used internal to jPlayer's Flash.
\t\tpublic static const DEBUG_MSG:String = \"debug_msg\";

\t\tpublic var data:JplayerStatus;
\t\tpublic var msg:String = \"\";

\t\tpublic function JplayerEvent(type:String, data:JplayerStatus, msg:String = \"\", bubbles:Boolean = false, cancelable:Boolean = false) {
\t\t\tsuper(type, bubbles, cancelable);
\t\t\tthis.data = data;
\t\t\tthis.msg = msg;
\t\t}
\t\tpublic override function clone():Event {
\t\t\treturn new JplayerEvent(type, data, msg, bubbles, cancelable);
\t\t}
\t\tpublic override function toString():String {
\t\t\treturn formatToString(\"JplayerEvent\", \"type\", \"bubbles\", \"cancelable\", \"eventPhase\", \"data\", \"msg\");
\t\t}
\t}
}", "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerEvent.as", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerEvent.as");
    }
}
