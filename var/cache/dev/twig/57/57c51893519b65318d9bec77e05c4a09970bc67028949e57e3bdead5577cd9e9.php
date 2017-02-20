<?php

/* @MwebAdmin/filemanager/js/jPlayer/add-on/jplayer.playlist.min.js */
class __TwigTemplate_233af4fe595e687ef96c7a9f5d35f047f12f90f2bd7a5e7566c9b9ffb46ce96b extends Twig_Template
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
        $__internal_87e2ddce4be8c6f98d9d8108df67284356ff74f1ee6a78c6202933b8097e5c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e2ddce4be8c6f98d9d8108df67284356ff74f1ee6a78c6202933b8097e5c05->enter($__internal_87e2ddce4be8c6f98d9d8108df67284356ff74f1ee6a78c6202933b8097e5c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/jPlayer/add-on/jplayer.playlist.min.js"));

        // line 1
        echo "/*! jPlayerPlaylist for jPlayer 2.9.2 ~ (c) 2009-2014 Happyworm Ltd ~ MIT License */
!function(a,b){jPlayerPlaylist=function(b,c,d){var e=this;this.current=0,this.loop=!1,this.shuffled=!1,this.removing=!1,this.cssSelector=a.extend({},this._cssSelector,b),this.options=a.extend(!0,{keyBindings:{next:{key:221,fn:function(){e.next()}},previous:{key:219,fn:function(){e.previous()}},shuffle:{key:83,fn:function(){e.shuffle()}}},stateClass:{shuffled:\"jp-state-shuffled\"}},this._options,d),this.playlist=[],this.original=[],this._initPlaylist(c),this.cssSelector.details=this.cssSelector.cssSelectorAncestor+\" .jp-details\",this.cssSelector.playlist=this.cssSelector.cssSelectorAncestor+\" .jp-playlist\",this.cssSelector.next=this.cssSelector.cssSelectorAncestor+\" .jp-next\",this.cssSelector.previous=this.cssSelector.cssSelectorAncestor+\" .jp-previous\",this.cssSelector.shuffle=this.cssSelector.cssSelectorAncestor+\" .jp-shuffle\",this.cssSelector.shuffleOff=this.cssSelector.cssSelectorAncestor+\" .jp-shuffle-off\",this.options.cssSelectorAncestor=this.cssSelector.cssSelectorAncestor,this.options.repeat=function(a){e.loop=a.jPlayer.options.loop},a(this.cssSelector.jPlayer).bind(a.jPlayer.event.ready,function(){e._init()}),a(this.cssSelector.jPlayer).bind(a.jPlayer.event.ended,function(){e.next()}),a(this.cssSelector.jPlayer).bind(a.jPlayer.event.play,function(){a(this).jPlayer(\"pauseOthers\")}),a(this.cssSelector.jPlayer).bind(a.jPlayer.event.resize,function(b){b.jPlayer.options.fullScreen?a(e.cssSelector.details).show():a(e.cssSelector.details).hide()}),a(this.cssSelector.previous).click(function(a){a.preventDefault(),e.previous(),e.blur(this)}),a(this.cssSelector.next).click(function(a){a.preventDefault(),e.next(),e.blur(this)}),a(this.cssSelector.shuffle).click(function(b){b.preventDefault(),e.shuffle(e.shuffled&&a(e.cssSelector.jPlayer).jPlayer(\"option\",\"useStateClassSkin\")?!1:!0),e.blur(this)}),a(this.cssSelector.shuffleOff).click(function(a){a.preventDefault(),e.shuffle(!1),e.blur(this)}).hide(),this.options.fullScreen||a(this.cssSelector.details).hide(),a(this.cssSelector.playlist+\" ul\").empty(),this._createItemHandlers(),a(this.cssSelector.jPlayer).jPlayer(this.options)},jPlayerPlaylist.prototype={_cssSelector:{jPlayer:\"#jquery_jplayer_1\",cssSelectorAncestor:\"#jp_container_1\"},_options:{playlistOptions:{autoPlay:!1,loopOnPrevious:!1,shuffleOnLoop:!0,enableRemoveControls:!1,displayTime:\"slow\",addTime:\"fast\",removeTime:\"fast\",shuffleTime:\"slow\",itemClass:\"jp-playlist-item\",freeGroupClass:\"jp-free-media\",freeItemClass:\"jp-playlist-item-free\",removeItemClass:\"jp-playlist-item-remove\"}},option:function(a,c){if(c===b)return this.options.playlistOptions[a];switch(this.options.playlistOptions[a]=c,a){case\"enableRemoveControls\":this._updateControls();break;case\"itemClass\":case\"freeGroupClass\":case\"freeItemClass\":case\"removeItemClass\":this._refresh(!0),this._createItemHandlers()}return this},_init:function(){var a=this;this._refresh(function(){a.options.playlistOptions.autoPlay?a.play(a.current):a.select(a.current)})},_initPlaylist:function(b){this.current=0,this.shuffled=!1,this.removing=!1,this.original=a.extend(!0,[],b),this._originalPlaylist()},_originalPlaylist:function(){var b=this;this.playlist=[],a.each(this.original,function(a){b.playlist[a]=b.original[a]})},_refresh:function(b){var c=this;if(b&&!a.isFunction(b))a(this.cssSelector.playlist+\" ul\").empty(),a.each(this.playlist,function(b){a(c.cssSelector.playlist+\" ul\").append(c._createListItem(c.playlist[b]))}),this._updateControls();else{var d=a(this.cssSelector.playlist+\" ul\").children().length?this.options.playlistOptions.displayTime:0;a(this.cssSelector.playlist+\" ul\").slideUp(d,function(){var d=a(this);a(this).empty(),a.each(c.playlist,function(a){d.append(c._createListItem(c.playlist[a]))}),c._updateControls(),a.isFunction(b)&&b(),c.playlist.length?a(this).slideDown(c.options.playlistOptions.displayTime):a(this).show()})}},_createListItem:function(b){var c=this,d=\"<li><div>\";if(d+=\"<a href='javascript:;' class='\"+this.options.playlistOptions.removeItemClass+\"'>&times;</a>\",b.free){var e=!0;d+=\"<span class='\"+this.options.playlistOptions.freeGroupClass+\"'>(\",a.each(b,function(b,f){a.jPlayer.prototype.format[b]&&(e?e=!1:d+=\" | \",d+=\"<a class='\"+c.options.playlistOptions.freeItemClass+\"' href='\"+f+\"' tabindex='-1'>\"+b+\"</a>\")}),d+=\")</span>\"}return d+=\"<a href='javascript:;' class='\"+this.options.playlistOptions.itemClass+\"' tabindex='0'>\"+b.title+(b.artist?\" <span class='jp-artist'>by \"+b.artist+\"</span>\":\"\")+\"</a>\",d+=\"</div></li>\"},_createItemHandlers:function(){var b=this;a(this.cssSelector.playlist).off(\"click\",\"a.\"+this.options.playlistOptions.itemClass).on(\"click\",\"a.\"+this.options.playlistOptions.itemClass,function(c){c.preventDefault();var d=a(this).parent().parent().index();b.current!==d?b.play(d):a(b.cssSelector.jPlayer).jPlayer(\"play\"),b.blur(this)}),a(this.cssSelector.playlist).off(\"click\",\"a.\"+this.options.playlistOptions.freeItemClass).on(\"click\",\"a.\"+this.options.playlistOptions.freeItemClass,function(c){c.preventDefault(),a(this).parent().parent().find(\".\"+b.options.playlistOptions.itemClass).click(),b.blur(this)}),a(this.cssSelector.playlist).off(\"click\",\"a.\"+this.options.playlistOptions.removeItemClass).on(\"click\",\"a.\"+this.options.playlistOptions.removeItemClass,function(c){c.preventDefault();var d=a(this).parent().parent().index();b.remove(d),b.blur(this)})},_updateControls:function(){this.options.playlistOptions.enableRemoveControls?a(this.cssSelector.playlist+\" .\"+this.options.playlistOptions.removeItemClass).show():a(this.cssSelector.playlist+\" .\"+this.options.playlistOptions.removeItemClass).hide(),this.shuffled?a(this.cssSelector.jPlayer).jPlayer(\"addStateClass\",\"shuffled\"):a(this.cssSelector.jPlayer).jPlayer(\"removeStateClass\",\"shuffled\"),a(this.cssSelector.shuffle).length&&a(this.cssSelector.shuffleOff).length&&(this.shuffled?(a(this.cssSelector.shuffleOff).show(),a(this.cssSelector.shuffle).hide()):(a(this.cssSelector.shuffleOff).hide(),a(this.cssSelector.shuffle).show()))},_highlight:function(c){this.playlist.length&&c!==b&&(a(this.cssSelector.playlist+\" .jp-playlist-current\").removeClass(\"jp-playlist-current\"),a(this.cssSelector.playlist+\" li:nth-child(\"+(c+1)+\")\").addClass(\"jp-playlist-current\").find(\".jp-playlist-item\").addClass(\"jp-playlist-current\"))},setPlaylist:function(a){this._initPlaylist(a),this._init()},add:function(b,c){a(this.cssSelector.playlist+\" ul\").append(this._createListItem(b)).find(\"li:last-child\").hide().slideDown(this.options.playlistOptions.addTime),this._updateControls(),this.original.push(b),this.playlist.push(b),c?this.play(this.playlist.length-1):1===this.original.length&&this.select(0)},remove:function(c){var d=this;return c===b?(this._initPlaylist([]),this._refresh(function(){a(d.cssSelector.jPlayer).jPlayer(\"clearMedia\")}),!0):this.removing?!1:(c=0>c?d.original.length+c:c,c>=0&&c<this.playlist.length&&(this.removing=!0,a(this.cssSelector.playlist+\" li:nth-child(\"+(c+1)+\")\").slideUp(this.options.playlistOptions.removeTime,function(){if(a(this).remove(),d.shuffled){var b=d.playlist[c];a.each(d.original,function(a){return d.original[a]===b?(d.original.splice(a,1),!1):void 0}),d.playlist.splice(c,1)}else d.original.splice(c,1),d.playlist.splice(c,1);d.original.length?c===d.current?(d.current=c<d.original.length?d.current:d.original.length-1,d.select(d.current)):c<d.current&&d.current--:(a(d.cssSelector.jPlayer).jPlayer(\"clearMedia\"),d.current=0,d.shuffled=!1,d._updateControls()),d.removing=!1})),!0)},select:function(b){b=0>b?this.original.length+b:b,b>=0&&b<this.playlist.length?(this.current=b,this._highlight(b),a(this.cssSelector.jPlayer).jPlayer(\"setMedia\",this.playlist[this.current])):this.current=0},play:function(c){c=0>c?this.original.length+c:c,c>=0&&c<this.playlist.length?this.playlist.length&&(this.select(c),a(this.cssSelector.jPlayer).jPlayer(\"play\")):c===b&&a(this.cssSelector.jPlayer).jPlayer(\"play\")},pause:function(){a(this.cssSelector.jPlayer).jPlayer(\"pause\")},next:function(){var a=this.current+1<this.playlist.length?this.current+1:0;this.loop?0===a&&this.shuffled&&this.options.playlistOptions.shuffleOnLoop&&this.playlist.length>1?this.shuffle(!0,!0):this.play(a):a>0&&this.play(a)},previous:function(){var a=this.current-1>=0?this.current-1:this.playlist.length-1;(this.loop&&this.options.playlistOptions.loopOnPrevious||a<this.playlist.length-1)&&this.play(a)},shuffle:function(c,d){var e=this;c===b&&(c=!this.shuffled),(c||c!==this.shuffled)&&a(this.cssSelector.playlist+\" ul\").slideUp(this.options.playlistOptions.shuffleTime,function(){e.shuffled=c,c?e.playlist.sort(function(){return.5-Math.random()}):e._originalPlaylist(),e._refresh(!0),d||!a(e.cssSelector.jPlayer).data(\"jPlayer\").status.paused?e.play(0):e.select(0),a(this).slideDown(e.options.playlistOptions.shuffleTime)})},blur:function(b){a(this.cssSelector.jPlayer).jPlayer(\"option\",\"autoBlur\")&&a(b).blur()}}}(jQuery);";
        
        $__internal_87e2ddce4be8c6f98d9d8108df67284356ff74f1ee6a78c6202933b8097e5c05->leave($__internal_87e2ddce4be8c6f98d9d8108df67284356ff74f1ee6a78c6202933b8097e5c05_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/jPlayer/add-on/jplayer.playlist.min.js";
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
        return new Twig_Source("/*! jPlayerPlaylist for jPlayer 2.9.2 ~ (c) 2009-2014 Happyworm Ltd ~ MIT License */
!function(a,b){jPlayerPlaylist=function(b,c,d){var e=this;this.current=0,this.loop=!1,this.shuffled=!1,this.removing=!1,this.cssSelector=a.extend({},this._cssSelector,b),this.options=a.extend(!0,{keyBindings:{next:{key:221,fn:function(){e.next()}},previous:{key:219,fn:function(){e.previous()}},shuffle:{key:83,fn:function(){e.shuffle()}}},stateClass:{shuffled:\"jp-state-shuffled\"}},this._options,d),this.playlist=[],this.original=[],this._initPlaylist(c),this.cssSelector.details=this.cssSelector.cssSelectorAncestor+\" .jp-details\",this.cssSelector.playlist=this.cssSelector.cssSelectorAncestor+\" .jp-playlist\",this.cssSelector.next=this.cssSelector.cssSelectorAncestor+\" .jp-next\",this.cssSelector.previous=this.cssSelector.cssSelectorAncestor+\" .jp-previous\",this.cssSelector.shuffle=this.cssSelector.cssSelectorAncestor+\" .jp-shuffle\",this.cssSelector.shuffleOff=this.cssSelector.cssSelectorAncestor+\" .jp-shuffle-off\",this.options.cssSelectorAncestor=this.cssSelector.cssSelectorAncestor,this.options.repeat=function(a){e.loop=a.jPlayer.options.loop},a(this.cssSelector.jPlayer).bind(a.jPlayer.event.ready,function(){e._init()}),a(this.cssSelector.jPlayer).bind(a.jPlayer.event.ended,function(){e.next()}),a(this.cssSelector.jPlayer).bind(a.jPlayer.event.play,function(){a(this).jPlayer(\"pauseOthers\")}),a(this.cssSelector.jPlayer).bind(a.jPlayer.event.resize,function(b){b.jPlayer.options.fullScreen?a(e.cssSelector.details).show():a(e.cssSelector.details).hide()}),a(this.cssSelector.previous).click(function(a){a.preventDefault(),e.previous(),e.blur(this)}),a(this.cssSelector.next).click(function(a){a.preventDefault(),e.next(),e.blur(this)}),a(this.cssSelector.shuffle).click(function(b){b.preventDefault(),e.shuffle(e.shuffled&&a(e.cssSelector.jPlayer).jPlayer(\"option\",\"useStateClassSkin\")?!1:!0),e.blur(this)}),a(this.cssSelector.shuffleOff).click(function(a){a.preventDefault(),e.shuffle(!1),e.blur(this)}).hide(),this.options.fullScreen||a(this.cssSelector.details).hide(),a(this.cssSelector.playlist+\" ul\").empty(),this._createItemHandlers(),a(this.cssSelector.jPlayer).jPlayer(this.options)},jPlayerPlaylist.prototype={_cssSelector:{jPlayer:\"#jquery_jplayer_1\",cssSelectorAncestor:\"#jp_container_1\"},_options:{playlistOptions:{autoPlay:!1,loopOnPrevious:!1,shuffleOnLoop:!0,enableRemoveControls:!1,displayTime:\"slow\",addTime:\"fast\",removeTime:\"fast\",shuffleTime:\"slow\",itemClass:\"jp-playlist-item\",freeGroupClass:\"jp-free-media\",freeItemClass:\"jp-playlist-item-free\",removeItemClass:\"jp-playlist-item-remove\"}},option:function(a,c){if(c===b)return this.options.playlistOptions[a];switch(this.options.playlistOptions[a]=c,a){case\"enableRemoveControls\":this._updateControls();break;case\"itemClass\":case\"freeGroupClass\":case\"freeItemClass\":case\"removeItemClass\":this._refresh(!0),this._createItemHandlers()}return this},_init:function(){var a=this;this._refresh(function(){a.options.playlistOptions.autoPlay?a.play(a.current):a.select(a.current)})},_initPlaylist:function(b){this.current=0,this.shuffled=!1,this.removing=!1,this.original=a.extend(!0,[],b),this._originalPlaylist()},_originalPlaylist:function(){var b=this;this.playlist=[],a.each(this.original,function(a){b.playlist[a]=b.original[a]})},_refresh:function(b){var c=this;if(b&&!a.isFunction(b))a(this.cssSelector.playlist+\" ul\").empty(),a.each(this.playlist,function(b){a(c.cssSelector.playlist+\" ul\").append(c._createListItem(c.playlist[b]))}),this._updateControls();else{var d=a(this.cssSelector.playlist+\" ul\").children().length?this.options.playlistOptions.displayTime:0;a(this.cssSelector.playlist+\" ul\").slideUp(d,function(){var d=a(this);a(this).empty(),a.each(c.playlist,function(a){d.append(c._createListItem(c.playlist[a]))}),c._updateControls(),a.isFunction(b)&&b(),c.playlist.length?a(this).slideDown(c.options.playlistOptions.displayTime):a(this).show()})}},_createListItem:function(b){var c=this,d=\"<li><div>\";if(d+=\"<a href='javascript:;' class='\"+this.options.playlistOptions.removeItemClass+\"'>&times;</a>\",b.free){var e=!0;d+=\"<span class='\"+this.options.playlistOptions.freeGroupClass+\"'>(\",a.each(b,function(b,f){a.jPlayer.prototype.format[b]&&(e?e=!1:d+=\" | \",d+=\"<a class='\"+c.options.playlistOptions.freeItemClass+\"' href='\"+f+\"' tabindex='-1'>\"+b+\"</a>\")}),d+=\")</span>\"}return d+=\"<a href='javascript:;' class='\"+this.options.playlistOptions.itemClass+\"' tabindex='0'>\"+b.title+(b.artist?\" <span class='jp-artist'>by \"+b.artist+\"</span>\":\"\")+\"</a>\",d+=\"</div></li>\"},_createItemHandlers:function(){var b=this;a(this.cssSelector.playlist).off(\"click\",\"a.\"+this.options.playlistOptions.itemClass).on(\"click\",\"a.\"+this.options.playlistOptions.itemClass,function(c){c.preventDefault();var d=a(this).parent().parent().index();b.current!==d?b.play(d):a(b.cssSelector.jPlayer).jPlayer(\"play\"),b.blur(this)}),a(this.cssSelector.playlist).off(\"click\",\"a.\"+this.options.playlistOptions.freeItemClass).on(\"click\",\"a.\"+this.options.playlistOptions.freeItemClass,function(c){c.preventDefault(),a(this).parent().parent().find(\".\"+b.options.playlistOptions.itemClass).click(),b.blur(this)}),a(this.cssSelector.playlist).off(\"click\",\"a.\"+this.options.playlistOptions.removeItemClass).on(\"click\",\"a.\"+this.options.playlistOptions.removeItemClass,function(c){c.preventDefault();var d=a(this).parent().parent().index();b.remove(d),b.blur(this)})},_updateControls:function(){this.options.playlistOptions.enableRemoveControls?a(this.cssSelector.playlist+\" .\"+this.options.playlistOptions.removeItemClass).show():a(this.cssSelector.playlist+\" .\"+this.options.playlistOptions.removeItemClass).hide(),this.shuffled?a(this.cssSelector.jPlayer).jPlayer(\"addStateClass\",\"shuffled\"):a(this.cssSelector.jPlayer).jPlayer(\"removeStateClass\",\"shuffled\"),a(this.cssSelector.shuffle).length&&a(this.cssSelector.shuffleOff).length&&(this.shuffled?(a(this.cssSelector.shuffleOff).show(),a(this.cssSelector.shuffle).hide()):(a(this.cssSelector.shuffleOff).hide(),a(this.cssSelector.shuffle).show()))},_highlight:function(c){this.playlist.length&&c!==b&&(a(this.cssSelector.playlist+\" .jp-playlist-current\").removeClass(\"jp-playlist-current\"),a(this.cssSelector.playlist+\" li:nth-child(\"+(c+1)+\")\").addClass(\"jp-playlist-current\").find(\".jp-playlist-item\").addClass(\"jp-playlist-current\"))},setPlaylist:function(a){this._initPlaylist(a),this._init()},add:function(b,c){a(this.cssSelector.playlist+\" ul\").append(this._createListItem(b)).find(\"li:last-child\").hide().slideDown(this.options.playlistOptions.addTime),this._updateControls(),this.original.push(b),this.playlist.push(b),c?this.play(this.playlist.length-1):1===this.original.length&&this.select(0)},remove:function(c){var d=this;return c===b?(this._initPlaylist([]),this._refresh(function(){a(d.cssSelector.jPlayer).jPlayer(\"clearMedia\")}),!0):this.removing?!1:(c=0>c?d.original.length+c:c,c>=0&&c<this.playlist.length&&(this.removing=!0,a(this.cssSelector.playlist+\" li:nth-child(\"+(c+1)+\")\").slideUp(this.options.playlistOptions.removeTime,function(){if(a(this).remove(),d.shuffled){var b=d.playlist[c];a.each(d.original,function(a){return d.original[a]===b?(d.original.splice(a,1),!1):void 0}),d.playlist.splice(c,1)}else d.original.splice(c,1),d.playlist.splice(c,1);d.original.length?c===d.current?(d.current=c<d.original.length?d.current:d.original.length-1,d.select(d.current)):c<d.current&&d.current--:(a(d.cssSelector.jPlayer).jPlayer(\"clearMedia\"),d.current=0,d.shuffled=!1,d._updateControls()),d.removing=!1})),!0)},select:function(b){b=0>b?this.original.length+b:b,b>=0&&b<this.playlist.length?(this.current=b,this._highlight(b),a(this.cssSelector.jPlayer).jPlayer(\"setMedia\",this.playlist[this.current])):this.current=0},play:function(c){c=0>c?this.original.length+c:c,c>=0&&c<this.playlist.length?this.playlist.length&&(this.select(c),a(this.cssSelector.jPlayer).jPlayer(\"play\")):c===b&&a(this.cssSelector.jPlayer).jPlayer(\"play\")},pause:function(){a(this.cssSelector.jPlayer).jPlayer(\"pause\")},next:function(){var a=this.current+1<this.playlist.length?this.current+1:0;this.loop?0===a&&this.shuffled&&this.options.playlistOptions.shuffleOnLoop&&this.playlist.length>1?this.shuffle(!0,!0):this.play(a):a>0&&this.play(a)},previous:function(){var a=this.current-1>=0?this.current-1:this.playlist.length-1;(this.loop&&this.options.playlistOptions.loopOnPrevious||a<this.playlist.length-1)&&this.play(a)},shuffle:function(c,d){var e=this;c===b&&(c=!this.shuffled),(c||c!==this.shuffled)&&a(this.cssSelector.playlist+\" ul\").slideUp(this.options.playlistOptions.shuffleTime,function(){e.shuffled=c,c?e.playlist.sort(function(){return.5-Math.random()}):e._originalPlaylist(),e._refresh(!0),d||!a(e.cssSelector.jPlayer).data(\"jPlayer\").status.paused?e.play(0):e.select(0),a(this).slideDown(e.options.playlistOptions.shuffleTime)})},blur:function(b){a(this.cssSelector.jPlayer).jPlayer(\"option\",\"autoBlur\")&&a(b).blur()}}}(jQuery);", "@MwebAdmin/filemanager/js/jPlayer/add-on/jplayer.playlist.min.js", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/jPlayer/add-on/jplayer.playlist.min.js");
    }
}
