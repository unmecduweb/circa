<?php

/* @MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerStatus.as */
class __TwigTemplate_33b85e01c4e9881e8558a111ba90863123ebfe0ba9b4877beb1650c93f39cffe extends Twig_Template
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
        $__internal_5a9b29d92f9e803d1a9ad4457f34d5d99b027e12c8f5d050b7bafcbc787699e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9b29d92f9e803d1a9ad4457f34d5d99b027e12c8f5d050b7bafcbc787699e6->enter($__internal_5a9b29d92f9e803d1a9ad4457f34d5d99b027e12c8f5d050b7bafcbc787699e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerStatus.as"));

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
 * Date: 5th June 2013
 */

package happyworm.jPlayer {
\tpublic class JplayerStatus {

\t\tpublic static const VERSION:String = \"2.4.0\"; // The version of the Flash jPlayer entity.

\t\tpublic var volume:Number = 0.5; // Not affected by reset()
\t\tpublic var muted:Boolean = false; // Not affected by reset()

\t\tpublic var src:String;
\t\tpublic var srcError:Boolean;

\t\tpublic var srcSet:Boolean;
\t\tpublic var isPlaying:Boolean;
\t\tpublic var isSeeking:Boolean;

\t\tpublic var isWaiting:Boolean;

\t\tpublic var playOnLoad:Boolean;
\t\tpublic var playOnSeek:Boolean;

\t\tpublic var isStartingDownload:Boolean;
\t\tpublic var isLoading:Boolean;
\t\tpublic var isLoaded:Boolean;

\t\tpublic var pausePosition:Number;

\t\tpublic var seekPercent:Number;
\t\tpublic var currentTime:Number;
\t\tpublic var currentPercentRelative:Number;
\t\tpublic var currentPercentAbsolute:Number;
\t\tpublic var duration:Number;

\t\tpublic var videoWidth:Number;
\t\tpublic var videoHeight:Number;
\t\t
\t\tpublic var metaDataReady:Boolean;
\t\tpublic var metaData:Object;

\t\tpublic function JplayerStatus() {
\t\t\treset();
\t\t}
\t\tpublic function reset():void {
\t\t\tsrc = \"\";
\t\t\tsrcError = false;

\t\t\tsrcSet = false;
\t\t\tisPlaying = false;
\t\t\tisSeeking = false;

\t\t\tisWaiting = false;

\t\t\tplayOnLoad = false;
\t\t\tplayOnSeek = false;

\t\t\tisStartingDownload = false;
\t\t\tisLoading = false;
\t\t\tisLoaded = false;

\t\t\tpausePosition = 0;

\t\t\tseekPercent = 0;
\t\t\tcurrentTime = 0;
\t\t\tcurrentPercentRelative = 0;
\t\t\tcurrentPercentAbsolute = 0;
\t\t\tduration = 0;

\t\t\tvideoWidth = 0;
\t\t\tvideoHeight = 0;
\t\t\t
\t\t\tmetaDataReady = false;
\t\t\tmetaData = {};
\t\t}
\t\tpublic function error():void {
\t\t\tvar srcSaved:String = src;
\t\t\treset();
\t\t\tsrc = srcSaved;
\t\t\tsrcError = true;
\t\t}
\t\tpublic function loadRequired():Boolean {
\t\t\treturn (srcSet && !isStartingDownload && !isLoading && !isLoaded);
\t\t}
\t\tpublic function startingDownload():void {
\t\t\tisStartingDownload = true;
\t\t\tisLoading = false;
\t\t\tisLoaded = false;
\t\t}
\t\tpublic function loading():void {
\t\t\tisStartingDownload = false;
\t\t\tisLoading = true;
\t\t\tisLoaded = false;
\t\t}
\t\tpublic function loaded():void {
\t\t\tisStartingDownload = false;
\t\t\tisLoading = false;
\t\t\tisLoaded = true;
\t\t}
\t}
}
";
        
        $__internal_5a9b29d92f9e803d1a9ad4457f34d5d99b027e12c8f5d050b7bafcbc787699e6->leave($__internal_5a9b29d92f9e803d1a9ad4457f34d5d99b027e12c8f5d050b7bafcbc787699e6_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerStatus.as";
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
 * Date: 5th June 2013
 */

package happyworm.jPlayer {
\tpublic class JplayerStatus {

\t\tpublic static const VERSION:String = \"2.4.0\"; // The version of the Flash jPlayer entity.

\t\tpublic var volume:Number = 0.5; // Not affected by reset()
\t\tpublic var muted:Boolean = false; // Not affected by reset()

\t\tpublic var src:String;
\t\tpublic var srcError:Boolean;

\t\tpublic var srcSet:Boolean;
\t\tpublic var isPlaying:Boolean;
\t\tpublic var isSeeking:Boolean;

\t\tpublic var isWaiting:Boolean;

\t\tpublic var playOnLoad:Boolean;
\t\tpublic var playOnSeek:Boolean;

\t\tpublic var isStartingDownload:Boolean;
\t\tpublic var isLoading:Boolean;
\t\tpublic var isLoaded:Boolean;

\t\tpublic var pausePosition:Number;

\t\tpublic var seekPercent:Number;
\t\tpublic var currentTime:Number;
\t\tpublic var currentPercentRelative:Number;
\t\tpublic var currentPercentAbsolute:Number;
\t\tpublic var duration:Number;

\t\tpublic var videoWidth:Number;
\t\tpublic var videoHeight:Number;
\t\t
\t\tpublic var metaDataReady:Boolean;
\t\tpublic var metaData:Object;

\t\tpublic function JplayerStatus() {
\t\t\treset();
\t\t}
\t\tpublic function reset():void {
\t\t\tsrc = \"\";
\t\t\tsrcError = false;

\t\t\tsrcSet = false;
\t\t\tisPlaying = false;
\t\t\tisSeeking = false;

\t\t\tisWaiting = false;

\t\t\tplayOnLoad = false;
\t\t\tplayOnSeek = false;

\t\t\tisStartingDownload = false;
\t\t\tisLoading = false;
\t\t\tisLoaded = false;

\t\t\tpausePosition = 0;

\t\t\tseekPercent = 0;
\t\t\tcurrentTime = 0;
\t\t\tcurrentPercentRelative = 0;
\t\t\tcurrentPercentAbsolute = 0;
\t\t\tduration = 0;

\t\t\tvideoWidth = 0;
\t\t\tvideoHeight = 0;
\t\t\t
\t\t\tmetaDataReady = false;
\t\t\tmetaData = {};
\t\t}
\t\tpublic function error():void {
\t\t\tvar srcSaved:String = src;
\t\t\treset();
\t\t\tsrc = srcSaved;
\t\t\tsrcError = true;
\t\t}
\t\tpublic function loadRequired():Boolean {
\t\t\treturn (srcSet && !isStartingDownload && !isLoading && !isLoaded);
\t\t}
\t\tpublic function startingDownload():void {
\t\t\tisStartingDownload = true;
\t\t\tisLoading = false;
\t\t\tisLoaded = false;
\t\t}
\t\tpublic function loading():void {
\t\t\tisStartingDownload = false;
\t\t\tisLoading = true;
\t\t\tisLoaded = false;
\t\t}
\t\tpublic function loaded():void {
\t\t\tisStartingDownload = false;
\t\t\tisLoading = false;
\t\t\tisLoaded = true;
\t\t}
\t}
}
", "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerStatus.as", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/JplayerStatus.as");
    }
}
