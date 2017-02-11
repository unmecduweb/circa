<?php

/* @MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/ConnectManager.as */
class __TwigTemplate_69fa08e22b8943134a0e28506ddb44c95f3ef012180847151debb98b1a7905c3 extends Twig_Template
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
        $__internal_9a40ed3f24a49d097d963e441de1d049b8be031014a04870fbe7e31146c5998c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a40ed3f24a49d097d963e441de1d049b8be031014a04870fbe7e31146c5998c->enter($__internal_9a40ed3f24a49d097d963e441de1d049b8be031014a04870fbe7e31146c5998c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/ConnectManager.as"));

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
 * Custom NetConnection Manager for more robust RTMP support
 * Based in part on work by Will Law for the old Akamai NCManager.as
 * and some of Will's new work in the OVP base classes (Open Video Player)
 * as well as similar approaches by many other NetConnection managers
 *
 */
 
 /* 
 TODO LIST 08/18/2011:
 1. Wired up errors to dispatch events to Jplayer events to allow them to bubble up to JS
 2. Rework event dispatch to handoff netconnection instead of a passed in reference
 3. Allow a customizeable list of protocols and ports to be used instead of entire list
 4. Allow a specific port/protocol (1 connect type) to be used first, and then optionally fallback on a custom list or the default list
 5. Remove some traces and check a few other items below where I've made notes
 */

package happyworm.jPlayer {
\t
\timport flash.events.*;
\timport flash.net.*;
\t
\timport flash.utils.Timer;
\timport flash.utils.getTimer;
\timport flash.utils.clearInterval;
\timport flash.utils.setInterval;

\tpublic class ConnectManager extends Object {
\t\t
\t\tprivate var protocols_arr:Array = new Array(\"rtmp\",\"rtmpt\",\"rtmpe\",\"rtmpte\",\"rtmps\");
\t\tprivate var ports_arr:Array = new Array(\"\",\":1935\",\":80\",\":443\");
\t\tprivate const protCount:Number = 5;
\t\tprivate const portCount:Number = 4;
\t\t
\t\tprivate var _ncRef:Object;
\t\t
\t\tprivate var _aNC:Array;

\t\tprivate var k_TIMEOUT:Number = 30000;
\t\tprivate var k_startConns:Number;
\t\tprivate var m_connList:Array = [];
\t\tprivate var m_serverName:String;
\t\tprivate var m_appName:String;
\t\tprivate var m_streamName:String;
\t\tprivate var m_connListCounter:Number;
\t\tprivate var m_flashComConnectTimeOut:Number;
\t\tprivate var m_validNetConnection:NetConnection;
\t\t
\t\tprivate var connectSuccess:Boolean=false;
\t\t
\t\tprivate var negotiating:Boolean=false;
\t\tprivate var idleTimeOut:Boolean=false;

\t\tpublic function ConnectManager() {
\t\t\ttrace (\"ConnectManager Initialized Version: 1.00 DT\");
\t\t\tcreatePortsProtocolsArray();
\t\t}
\t\t
\t\tprivate function createPortsProtocolsArray():void {
\t\tvar outerLoop:Number=0;
\t\tvar innerLoop:Number=0;
\t\t\tfor (outerLoop=0; outerLoop<protocols_arr.length; outerLoop++) {
\t\t\t\t
\t\t\t\tfor (innerLoop=0; innerLoop<ports_arr.length; innerLoop++) {
\t\t\t\t\tm_connList.push( { protocol: protocols_arr[outerLoop], port: ports_arr[innerLoop] } );
\t\t\t\t}
\t\t\t\t
\t\t\t}\t\t
\t\t}
\t\t
\t\tpublic function negotiateConnect(ncRef:Object,p_serverName:String,p_appName:String):void
\t\t{
\t\t\tnegotiating=true;
\t\t\t_ncRef=ncRef;
\t\t\ttrace(\"*** SERVER NAME: \"+p_serverName);
\t\t\ttrace(\"*** APP NAME: \"+p_serverName);
\t\t\tk_startConns = getTimer();
\t\t\tm_serverName = p_serverName;
\t\t\tm_appName = p_appName;
\t\t
\t\t\t// Set a timeout function, just in case we never connect successfully
\t\t\tclearInterval(m_flashComConnectTimeOut);
\t\t\tm_flashComConnectTimeOut = setInterval(onFlashComConnectTimeOut,k_TIMEOUT,k_TIMEOUT);
\t\t\t
\t\t\t// Createe a NetConnection for each of the protocols/ports listed in the m_connList list.
\t\t\t// Connection attempts occur at intervals of 1.5 seconds. 
\t\t\t// The first connection to succeed will be used, all the others will be closed.
\t\t\t_aNC = new Array();
\t\t\tfor (var i:uint = 0; i < m_connList.length; i++)
\t\t\t{
\t\t\t\t_aNC[i] = new NetConnection();
\t\t\t\t_aNC[i].addEventListener(NetStatusEvent.NET_STATUS,netStatus);
\t\t\t\t_aNC[i].addEventListener(SecurityErrorEvent.SECURITY_ERROR,netSecurityError);
\t\t\t\t_aNC[i].addEventListener(AsyncErrorEvent.ASYNC_ERROR,asyncError);      
\t\t\t\t_aNC[i].client = new Object;
\t\t\t\t_aNC[i].client.owner = this;
\t\t\t\t_aNC[i].client.connIndex = i;
\t\t\t\t_aNC[i].client.id = i;
\t\t\t\t_aNC[i].client.pending = true;
\t\t\t\t
\t\t\t\t/* Revisit this chunk - not needed at the moment as NC is handed off and this 
\t\t\t\t// is handled elsewhere
\t\t\t\t// Need to put in some event dispatching as a more elegant solution and leave it here
\t\t\t\t
\t\t\t\t_aNC[i].client.onBWDone = function (p_bw, deltaDown, deltaTime, latency) {
\t\t\t\t\t//this.owner.dispatchEvent ({type:\"ncBandWidth\", kbps:p_bw, latency:latency});
\t\t\t\t};

\t\t\t\t_aNC[i].client.onBWCheck = function (counter) {
\t\t\t\t\treturn ++counter;
\t\t\t\t};

\t\t\t\t_aNC[i].client.onStatus = function (info) {
\t\t\t\t\t//
\t\t\t\t};
\t\t\t\t*/
\t\t\t\t
\t\t\t}
\t\t\tm_connListCounter = 0;
\t\t\tnextConnect ();
\t\t}
\t\t
\t\tprivate function nextConnect():void
\t\t{
\t\t\ttrace(\"*** Connection: \"+ m_connListCounter + \": \"+m_connList[m_connListCounter].protocol + \"://\" + m_serverName + m_connList[m_connListCounter].port + \"/\" + m_appName);

\t\t\ttry {
\t\t\t\t_aNC[m_connListCounter].connect(m_connList[m_connListCounter].protocol + \"://\" + m_serverName + m_connList[m_connListCounter].port + \"/\" + m_appName);

\t\t\t} catch (error:Error) {
\t\t\t\t// statements
\t\t\t\ttrace(\"*** Caught an error condition: \"+error);
\t\t\t\tm_connListCounter = m_connList.length+1;
\t\t\t}
\t\t\t// statements
\t\t\t\tclearInterval(_aNC[\"ncInt\" + m_connListCounter]);

\t\t\tif ((m_connListCounter < m_connList.length - 1))
\t\t\t{
\t\t\t\tm_connListCounter++;
\t\t\t\t_aNC[\"ncInt\" + m_connListCounter] = setInterval(nextConnect,1500);
\t\t\t}

\t\t}
\t\t
\t\t// Cleans up all connections if none have succeeded by the timeout interval
\t\tprivate function onFlashComConnectTimeOut(timeout:Number):void
\t\t{
\t\t\tstopAll();
\t\t}
\t\t
\t\tprivate function handleGoodConnect(_nc:NetConnection):void {
\t\t\tnegotiating=false;
\t\t\ttrace(\"Handing OFF NetConnection\");
\t\t\tclearInterval(m_flashComConnectTimeOut);
\t\t\t_ncRef.connectStream();
\t\t\t_ncRef.onBWDone(null,_nc);
\t\t\t//dispatchEvent(event);
\t\t\t// Need to enable and pass to Jplayer event system- revisit
\t\t\t// right now handing back a hardcoded reference that is passed in
\t\t\t// Should come up with a more loosely coupled way via event dispatch

\t\t}
\t\t
\t\tpublic function getNegotiating():Boolean {
\t\t\treturn negotiating;
\t\t}
\t\t
\t\tpublic function setNegotiating(bool:Boolean):void {
\t\t\tnegotiating=bool;
\t\t}
\t\t
\t\t
\t\tpublic function stopAll(bool:Boolean=false):void {
\t\t\t
\t\t\t//this.dispatchEvent ({type:\"ncFailedToConnect\", timeout:timeout});
\t\t\t// Need to enable and pass to Jplayer event system- revisit
\t\t\t// trace(_aNC+\":\"+m_flashComConnectTimeOut+\":\"+m_connList.length)
\t\t\tif(_aNC!=null && !isNaN(m_flashComConnectTimeOut) ) {
\t\t\t\tclearInterval(m_flashComConnectTimeOut);
\t\t\tfor (var i:uint = 0; i < m_connList.length; i++)
\t\t\t{
\t\t\t\tif (_aNC[i]!=null)
\t\t\t\t{
\t\t\t\t\tclearInterval(_aNC[\"ncInt\" + i]);
\t\t\t\t\t_aNC[i].close();
\t\t\t\t\tif(bool==false) {
\t\t\t\t\t\t_aNC[i].client = null;
\t\t\t\t\t}
\t\t\t\t\t_aNC[i] = null;
\t\t\t\t\tdelete _aNC[i];
\t\t\t\t}
\t\t\t}
\t\t\t}
\t\t\t\t\t\t
\t\t}
\t\t
\t\t
\t\tprivate function netStatus(event:NetStatusEvent):void {
\t\t\t
\t\t\ttrace(event.info.code);
\t\t\tif(event.info.description != undefined) {
\t\t\t\ttrace(event.info.description);
\t\t\t}
\t\t\t_aNC[event.target.client.id].client.pending = true;
\t\t\t
\t\t\t\t// this.owner.m_validNetConnection = this.client.owner[this.client.connIndex];
\t\t\t\t// if (info.description == \"[ License.Limit.Exceeded ]\") {

\t\t\t\tswitch (event.info.code) {
\t\t\t\t\tcase \"NetConnection.Connect.IdleTimeOut\":
\t\t\t\t\ttrace(\"IDLE TIMEOUT OCCURRED!\")
\t\t\t\t\tnegotiating=true;
\t\t\t\t\tidleTimeOut=true;
\t\t\t\t\t_ncRef.shutDownNcNs();
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetConnection.Connect.Closed\":
\t\t\t\t\tif(!negotiating && !idleTimeOut) {
\t\t\t\t\t\tidleTimeOut = false;
\t\t\t\t\t\t_ncRef.doneYet();
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetConnection.Connect.InvalidApp\":
\t\t\t\tcase \"NetConnection.Connect.Rejected\":
\t\t\t\t\t//handleRejectedOrInvalid(event) 
    \t\t\t\tbreak;
\t\t\t\tcase \"NetConnection.Call.Failed\":
\t\t\t\t\t/*
\t\t\t\t\tif (event.info.description.indexOf(\"_checkbw\") != -1) {
\t\t\t\t\t\tevent.target.expectBWDone = true;
\t\t\t\t\t\tevent.target.call(\"checkBandwidth\",null);
\t\t\t\t\t}
\t\t\t\t\t*/
\t\t\t\t\tbreak;
\t\t\t\t\tcase \"NetConnection.Connect.Success\":
\t\t\t\t\t\tvar i:uint=0;
\t\t\t\t\t\tfor ( i = 0; i<_aNC.length; i++) {
\t\t\t\t\t\tif (_aNC[i] && (i != event.target.client.id)) {
\t\t\t\t\t\t\t_aNC[i].close();
\t\t\t\t\t\t\t_aNC[i] = null;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tvar _nc:NetConnection = NetConnection(event.target);
\t\t\t\t\tvar connID:Number = event.target.client.id;
\t\t\t\t\tvar _actualPort:String = m_connList[m_connListCounter].port;
\t\t\t\t\tvar _actualProtocol:String = m_connList[m_connListCounter].protocol;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t// See if we have version info
\t\t\t\t\tvar _serverVersion:String = \"UNKNOWN\";
\t\t\t\t\tif (event.info.data && event.info.data.version) {
\t\t\t\t\t\t_serverVersion = event.info.data.version;
\t\t\t\t\t}
\t\t\t\t\ttrace(\"Connect ID: \"+connID+\" - PORT: \"+_actualPort+\" - PROTOCOL: \"+_actualProtocol+\" - FMS Version: \"+_serverVersion);
\t\t\t\t\t
\t\t\t\t\tclearInterval(_aNC[\"ncInt\" + connID]);
\t\t\t\t\tclearInterval(_aNC[\"ncInt\" + m_connListCounter]);

\t\t\t\t\thandleGoodConnect(_nc);
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t}
\t\t\t\t\t\t

\t\t/** Catches any netconnection net security errors
\t\t * @private
\t\t */
\t\tprivate function netSecurityError(event:SecurityErrorEvent):void {
\t\t\ttrace(\"SECURITY ERROR:\"+event);
\t\t\t//dispatchEvent(event);
\t\t\t// Need to enable and pass to Jplayer event system- revisit
    \t}
    \t
    \t/** Catches any async errors
    \t * @private
    \t */
\t\tprivate function asyncError(event:AsyncErrorEvent):void {
\t\t\ttrace(\"ASYNC ERROR:\"+event.error);
\t\t\t//dispatchEvent(event);
\t\t\t// Need to enable and pass to Jplayer event system- revisit
    \t}
\t\t
\t\t

\t}// class
\t
} //package
";
        
        $__internal_9a40ed3f24a49d097d963e441de1d049b8be031014a04870fbe7e31146c5998c->leave($__internal_9a40ed3f24a49d097d963e441de1d049b8be031014a04870fbe7e31146c5998c_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/ConnectManager.as";
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
 * Custom NetConnection Manager for more robust RTMP support
 * Based in part on work by Will Law for the old Akamai NCManager.as
 * and some of Will's new work in the OVP base classes (Open Video Player)
 * as well as similar approaches by many other NetConnection managers
 *
 */
 
 /* 
 TODO LIST 08/18/2011:
 1. Wired up errors to dispatch events to Jplayer events to allow them to bubble up to JS
 2. Rework event dispatch to handoff netconnection instead of a passed in reference
 3. Allow a customizeable list of protocols and ports to be used instead of entire list
 4. Allow a specific port/protocol (1 connect type) to be used first, and then optionally fallback on a custom list or the default list
 5. Remove some traces and check a few other items below where I've made notes
 */

package happyworm.jPlayer {
\t
\timport flash.events.*;
\timport flash.net.*;
\t
\timport flash.utils.Timer;
\timport flash.utils.getTimer;
\timport flash.utils.clearInterval;
\timport flash.utils.setInterval;

\tpublic class ConnectManager extends Object {
\t\t
\t\tprivate var protocols_arr:Array = new Array(\"rtmp\",\"rtmpt\",\"rtmpe\",\"rtmpte\",\"rtmps\");
\t\tprivate var ports_arr:Array = new Array(\"\",\":1935\",\":80\",\":443\");
\t\tprivate const protCount:Number = 5;
\t\tprivate const portCount:Number = 4;
\t\t
\t\tprivate var _ncRef:Object;
\t\t
\t\tprivate var _aNC:Array;

\t\tprivate var k_TIMEOUT:Number = 30000;
\t\tprivate var k_startConns:Number;
\t\tprivate var m_connList:Array = [];
\t\tprivate var m_serverName:String;
\t\tprivate var m_appName:String;
\t\tprivate var m_streamName:String;
\t\tprivate var m_connListCounter:Number;
\t\tprivate var m_flashComConnectTimeOut:Number;
\t\tprivate var m_validNetConnection:NetConnection;
\t\t
\t\tprivate var connectSuccess:Boolean=false;
\t\t
\t\tprivate var negotiating:Boolean=false;
\t\tprivate var idleTimeOut:Boolean=false;

\t\tpublic function ConnectManager() {
\t\t\ttrace (\"ConnectManager Initialized Version: 1.00 DT\");
\t\t\tcreatePortsProtocolsArray();
\t\t}
\t\t
\t\tprivate function createPortsProtocolsArray():void {
\t\tvar outerLoop:Number=0;
\t\tvar innerLoop:Number=0;
\t\t\tfor (outerLoop=0; outerLoop<protocols_arr.length; outerLoop++) {
\t\t\t\t
\t\t\t\tfor (innerLoop=0; innerLoop<ports_arr.length; innerLoop++) {
\t\t\t\t\tm_connList.push( { protocol: protocols_arr[outerLoop], port: ports_arr[innerLoop] } );
\t\t\t\t}
\t\t\t\t
\t\t\t}\t\t
\t\t}
\t\t
\t\tpublic function negotiateConnect(ncRef:Object,p_serverName:String,p_appName:String):void
\t\t{
\t\t\tnegotiating=true;
\t\t\t_ncRef=ncRef;
\t\t\ttrace(\"*** SERVER NAME: \"+p_serverName);
\t\t\ttrace(\"*** APP NAME: \"+p_serverName);
\t\t\tk_startConns = getTimer();
\t\t\tm_serverName = p_serverName;
\t\t\tm_appName = p_appName;
\t\t
\t\t\t// Set a timeout function, just in case we never connect successfully
\t\t\tclearInterval(m_flashComConnectTimeOut);
\t\t\tm_flashComConnectTimeOut = setInterval(onFlashComConnectTimeOut,k_TIMEOUT,k_TIMEOUT);
\t\t\t
\t\t\t// Createe a NetConnection for each of the protocols/ports listed in the m_connList list.
\t\t\t// Connection attempts occur at intervals of 1.5 seconds. 
\t\t\t// The first connection to succeed will be used, all the others will be closed.
\t\t\t_aNC = new Array();
\t\t\tfor (var i:uint = 0; i < m_connList.length; i++)
\t\t\t{
\t\t\t\t_aNC[i] = new NetConnection();
\t\t\t\t_aNC[i].addEventListener(NetStatusEvent.NET_STATUS,netStatus);
\t\t\t\t_aNC[i].addEventListener(SecurityErrorEvent.SECURITY_ERROR,netSecurityError);
\t\t\t\t_aNC[i].addEventListener(AsyncErrorEvent.ASYNC_ERROR,asyncError);      
\t\t\t\t_aNC[i].client = new Object;
\t\t\t\t_aNC[i].client.owner = this;
\t\t\t\t_aNC[i].client.connIndex = i;
\t\t\t\t_aNC[i].client.id = i;
\t\t\t\t_aNC[i].client.pending = true;
\t\t\t\t
\t\t\t\t/* Revisit this chunk - not needed at the moment as NC is handed off and this 
\t\t\t\t// is handled elsewhere
\t\t\t\t// Need to put in some event dispatching as a more elegant solution and leave it here
\t\t\t\t
\t\t\t\t_aNC[i].client.onBWDone = function (p_bw, deltaDown, deltaTime, latency) {
\t\t\t\t\t//this.owner.dispatchEvent ({type:\"ncBandWidth\", kbps:p_bw, latency:latency});
\t\t\t\t};

\t\t\t\t_aNC[i].client.onBWCheck = function (counter) {
\t\t\t\t\treturn ++counter;
\t\t\t\t};

\t\t\t\t_aNC[i].client.onStatus = function (info) {
\t\t\t\t\t//
\t\t\t\t};
\t\t\t\t*/
\t\t\t\t
\t\t\t}
\t\t\tm_connListCounter = 0;
\t\t\tnextConnect ();
\t\t}
\t\t
\t\tprivate function nextConnect():void
\t\t{
\t\t\ttrace(\"*** Connection: \"+ m_connListCounter + \": \"+m_connList[m_connListCounter].protocol + \"://\" + m_serverName + m_connList[m_connListCounter].port + \"/\" + m_appName);

\t\t\ttry {
\t\t\t\t_aNC[m_connListCounter].connect(m_connList[m_connListCounter].protocol + \"://\" + m_serverName + m_connList[m_connListCounter].port + \"/\" + m_appName);

\t\t\t} catch (error:Error) {
\t\t\t\t// statements
\t\t\t\ttrace(\"*** Caught an error condition: \"+error);
\t\t\t\tm_connListCounter = m_connList.length+1;
\t\t\t}
\t\t\t// statements
\t\t\t\tclearInterval(_aNC[\"ncInt\" + m_connListCounter]);

\t\t\tif ((m_connListCounter < m_connList.length - 1))
\t\t\t{
\t\t\t\tm_connListCounter++;
\t\t\t\t_aNC[\"ncInt\" + m_connListCounter] = setInterval(nextConnect,1500);
\t\t\t}

\t\t}
\t\t
\t\t// Cleans up all connections if none have succeeded by the timeout interval
\t\tprivate function onFlashComConnectTimeOut(timeout:Number):void
\t\t{
\t\t\tstopAll();
\t\t}
\t\t
\t\tprivate function handleGoodConnect(_nc:NetConnection):void {
\t\t\tnegotiating=false;
\t\t\ttrace(\"Handing OFF NetConnection\");
\t\t\tclearInterval(m_flashComConnectTimeOut);
\t\t\t_ncRef.connectStream();
\t\t\t_ncRef.onBWDone(null,_nc);
\t\t\t//dispatchEvent(event);
\t\t\t// Need to enable and pass to Jplayer event system- revisit
\t\t\t// right now handing back a hardcoded reference that is passed in
\t\t\t// Should come up with a more loosely coupled way via event dispatch

\t\t}
\t\t
\t\tpublic function getNegotiating():Boolean {
\t\t\treturn negotiating;
\t\t}
\t\t
\t\tpublic function setNegotiating(bool:Boolean):void {
\t\t\tnegotiating=bool;
\t\t}
\t\t
\t\t
\t\tpublic function stopAll(bool:Boolean=false):void {
\t\t\t
\t\t\t//this.dispatchEvent ({type:\"ncFailedToConnect\", timeout:timeout});
\t\t\t// Need to enable and pass to Jplayer event system- revisit
\t\t\t// trace(_aNC+\":\"+m_flashComConnectTimeOut+\":\"+m_connList.length)
\t\t\tif(_aNC!=null && !isNaN(m_flashComConnectTimeOut) ) {
\t\t\t\tclearInterval(m_flashComConnectTimeOut);
\t\t\tfor (var i:uint = 0; i < m_connList.length; i++)
\t\t\t{
\t\t\t\tif (_aNC[i]!=null)
\t\t\t\t{
\t\t\t\t\tclearInterval(_aNC[\"ncInt\" + i]);
\t\t\t\t\t_aNC[i].close();
\t\t\t\t\tif(bool==false) {
\t\t\t\t\t\t_aNC[i].client = null;
\t\t\t\t\t}
\t\t\t\t\t_aNC[i] = null;
\t\t\t\t\tdelete _aNC[i];
\t\t\t\t}
\t\t\t}
\t\t\t}
\t\t\t\t\t\t
\t\t}
\t\t
\t\t
\t\tprivate function netStatus(event:NetStatusEvent):void {
\t\t\t
\t\t\ttrace(event.info.code);
\t\t\tif(event.info.description != undefined) {
\t\t\t\ttrace(event.info.description);
\t\t\t}
\t\t\t_aNC[event.target.client.id].client.pending = true;
\t\t\t
\t\t\t\t// this.owner.m_validNetConnection = this.client.owner[this.client.connIndex];
\t\t\t\t// if (info.description == \"[ License.Limit.Exceeded ]\") {

\t\t\t\tswitch (event.info.code) {
\t\t\t\t\tcase \"NetConnection.Connect.IdleTimeOut\":
\t\t\t\t\ttrace(\"IDLE TIMEOUT OCCURRED!\")
\t\t\t\t\tnegotiating=true;
\t\t\t\t\tidleTimeOut=true;
\t\t\t\t\t_ncRef.shutDownNcNs();
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetConnection.Connect.Closed\":
\t\t\t\t\tif(!negotiating && !idleTimeOut) {
\t\t\t\t\t\tidleTimeOut = false;
\t\t\t\t\t\t_ncRef.doneYet();
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase \"NetConnection.Connect.InvalidApp\":
\t\t\t\tcase \"NetConnection.Connect.Rejected\":
\t\t\t\t\t//handleRejectedOrInvalid(event) 
    \t\t\t\tbreak;
\t\t\t\tcase \"NetConnection.Call.Failed\":
\t\t\t\t\t/*
\t\t\t\t\tif (event.info.description.indexOf(\"_checkbw\") != -1) {
\t\t\t\t\t\tevent.target.expectBWDone = true;
\t\t\t\t\t\tevent.target.call(\"checkBandwidth\",null);
\t\t\t\t\t}
\t\t\t\t\t*/
\t\t\t\t\tbreak;
\t\t\t\t\tcase \"NetConnection.Connect.Success\":
\t\t\t\t\t\tvar i:uint=0;
\t\t\t\t\t\tfor ( i = 0; i<_aNC.length; i++) {
\t\t\t\t\t\tif (_aNC[i] && (i != event.target.client.id)) {
\t\t\t\t\t\t\t_aNC[i].close();
\t\t\t\t\t\t\t_aNC[i] = null;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tvar _nc:NetConnection = NetConnection(event.target);
\t\t\t\t\tvar connID:Number = event.target.client.id;
\t\t\t\t\tvar _actualPort:String = m_connList[m_connListCounter].port;
\t\t\t\t\tvar _actualProtocol:String = m_connList[m_connListCounter].protocol;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t// See if we have version info
\t\t\t\t\tvar _serverVersion:String = \"UNKNOWN\";
\t\t\t\t\tif (event.info.data && event.info.data.version) {
\t\t\t\t\t\t_serverVersion = event.info.data.version;
\t\t\t\t\t}
\t\t\t\t\ttrace(\"Connect ID: \"+connID+\" - PORT: \"+_actualPort+\" - PROTOCOL: \"+_actualProtocol+\" - FMS Version: \"+_serverVersion);
\t\t\t\t\t
\t\t\t\t\tclearInterval(_aNC[\"ncInt\" + connID]);
\t\t\t\t\tclearInterval(_aNC[\"ncInt\" + m_connListCounter]);

\t\t\t\t\thandleGoodConnect(_nc);
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t}
\t\t\t\t\t\t

\t\t/** Catches any netconnection net security errors
\t\t * @private
\t\t */
\t\tprivate function netSecurityError(event:SecurityErrorEvent):void {
\t\t\ttrace(\"SECURITY ERROR:\"+event);
\t\t\t//dispatchEvent(event);
\t\t\t// Need to enable and pass to Jplayer event system- revisit
    \t}
    \t
    \t/** Catches any async errors
    \t * @private
    \t */
\t\tprivate function asyncError(event:AsyncErrorEvent):void {
\t\t\ttrace(\"ASYNC ERROR:\"+event.error);
\t\t\t//dispatchEvent(event);
\t\t\t// Need to enable and pass to Jplayer event system- revisit
    \t}
\t\t
\t\t

\t}// class
\t
} //package
", "@MwebAdmin/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/ConnectManager.as", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/actionscript/happyworm/jPlayer/ConnectManager.as");
    }
}
