<?php

/* @MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/TraceOut.as */
class __TwigTemplate_3b771fd7e043ef5589ce2c6137a41c015e7008bb7b27bda67bb4bab53eac525b extends Twig_Template
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
        $__internal_6bada2dd2c6b166c53ab4cf2f247920bb3f892233e6f6f47c60eddf1863fe99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bada2dd2c6b166c53ab4cf2f247920bb3f892233e6f6f47c60eddf1863fe99c->enter($__internal_6bada2dd2c6b166c53ab4cf2f247920bb3f892233e6f6f47c60eddf1863fe99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/TraceOut.as"));

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
 * Date: 7th August 2012
 */

package happyworm.jPlayer
{
\timport flash.net.LocalConnection;
\timport flash.events.StatusEvent;
\timport flash.system.Capabilities;
\timport flash.utils.getTimer;

\tpublic class TraceOut
\t{

\t\tprivate var outgoing_lc:LocalConnection = new LocalConnection ();
\t\tprivate var firstEvent:Boolean = true;
\t\tprivate var _localAIRDebug:Boolean = false;

\t\tpublic function TraceOut()
\t\t{
\t\t\toutgoing_lc.addEventListener(StatusEvent.STATUS, lcListener);
\t\t\toutgoing_lc.send(\"_log_output\",\"startLogging\",\"\");
\t\t}

\t\tprivate function lcListener(event:StatusEvent):void
\t\t{
\t\t\t// Must have this listener to avoid errors
\t\t\tif (event.level == \"error\")
\t\t\t{
\t\t\t\t_localAIRDebug = false;
\t\t\t}
\t\t\telse if(event.level ==\"status\" && firstEvent==true)
\t\t\t{
\t\t\t\tfirstEvent = false;
\t\t\t\ttracer(\"<< Successful Connection To Event Logger >>\");
\t\t\t\ttracer(\"DEBUG INFO: \\n<\"+Capabilities.serverString + \">\\nFlash Player Version: \" + Capabilities.version + \"\\n\");
\t\t\t\t_localAIRDebug = true;
\t\t\t}
\t\t}

\t\tpublic function localAIRDebug():Boolean
\t\t{
\t\t\treturn _localAIRDebug;
\t\t}

\t\tpublic function tracer(msg:String):void
\t\t{
\t\t\ttrace(msg);
\t\t\tvar outMsg:String = \"[\" + getTimer() + \"ms] \" + msg;
\t\t\toutgoing_lc.send(\"_log_output\",\"displayMsg\",outMsg);
\t\t\t\t\t\t\t 
\t\t}
\t}
}
";
        
        $__internal_6bada2dd2c6b166c53ab4cf2f247920bb3f892233e6f6f47c60eddf1863fe99c->leave($__internal_6bada2dd2c6b166c53ab4cf2f247920bb3f892233e6f6f47c60eddf1863fe99c_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/TraceOut.as";
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
 * Date: 7th August 2012
 */

package happyworm.jPlayer
{
\timport flash.net.LocalConnection;
\timport flash.events.StatusEvent;
\timport flash.system.Capabilities;
\timport flash.utils.getTimer;

\tpublic class TraceOut
\t{

\t\tprivate var outgoing_lc:LocalConnection = new LocalConnection ();
\t\tprivate var firstEvent:Boolean = true;
\t\tprivate var _localAIRDebug:Boolean = false;

\t\tpublic function TraceOut()
\t\t{
\t\t\toutgoing_lc.addEventListener(StatusEvent.STATUS, lcListener);
\t\t\toutgoing_lc.send(\"_log_output\",\"startLogging\",\"\");
\t\t}

\t\tprivate function lcListener(event:StatusEvent):void
\t\t{
\t\t\t// Must have this listener to avoid errors
\t\t\tif (event.level == \"error\")
\t\t\t{
\t\t\t\t_localAIRDebug = false;
\t\t\t}
\t\t\telse if(event.level ==\"status\" && firstEvent==true)
\t\t\t{
\t\t\t\tfirstEvent = false;
\t\t\t\ttracer(\"<< Successful Connection To Event Logger >>\");
\t\t\t\ttracer(\"DEBUG INFO: \\n<\"+Capabilities.serverString + \">\\nFlash Player Version: \" + Capabilities.version + \"\\n\");
\t\t\t\t_localAIRDebug = true;
\t\t\t}
\t\t}

\t\tpublic function localAIRDebug():Boolean
\t\t{
\t\t\treturn _localAIRDebug;
\t\t}

\t\tpublic function tracer(msg:String):void
\t\t{
\t\t\ttrace(msg);
\t\t\tvar outMsg:String = \"[\" + getTimer() + \"ms] \" + msg;
\t\t\toutgoing_lc.send(\"_log_output\",\"displayMsg\",outMsg);
\t\t\t\t\t\t\t 
\t\t}
\t}
}
", "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/TraceOut.as", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/TraceOut.as");
    }
}
