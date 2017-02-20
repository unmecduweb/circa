<?php

/* @MwebAdmin/filemanager/js/ViewerJS/viewer.css */
class __TwigTemplate_0085d344f3c69f012e5693fc89cced676750467f38dc4f39eea10cf5b509ab3f extends Twig_Template
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
        $__internal_188294b760dc412435d03790ea8d149d26684b4e3caf67ea83ed6a21d0cd1f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188294b760dc412435d03790ea8d149d26684b4e3caf67ea83ed6a21d0cd1f6e->enter($__internal_188294b760dc412435d03790ea8d149d26684b4e3caf67ea83ed6a21d0cd1f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/js/ViewerJS/viewer.css"));

        // line 1
        echo "/**
 * Copyright (C) 2012-2014 KO GmbH <copyright@kogmbh.com>
 *
 * @licstart
 * This file is part of WebODF.
 *
 * WebODF is free software: you can redistribute it and/or modify it
 * under the terms of the GNU Affero General Public License (GNU AGPL)
 * as published by the Free Software Foundation, either version 3 of
 * the License, or (at your option) any later version.
 *
 * WebODF is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with WebODF.  If not, see <http://www.gnu.org/licenses/>.
 * @licend
 *
 * @source: http://www.webodf.org/
 * @source: https://github.com/kogmbh/WebODF/
 */

/*
 * This file is a derivative from a part of Mozilla's PDF.js project. The
 * original license header follows.
 */

/* Copyright 2012 Mozilla Foundation
 *
 * Licensed under the Apache License, Version 2.0 (the \"License\");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an \"AS IS\" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

* {
    padding: 0;
    margin: 0;
}

html > body {
  font-family: sans-serif;
  overflow: hidden;
}

.titlebar > span,
.toolbarLabel,
input,
button,
select {
  font: message-box;
}

#titlebar {
    position: absolute;
    z-index: 2; 
    top: 0px;
    left: 0px;
    height: 32px;
    width: 100%;
    overflow: hidden;

    -webkit-box-shadow: 0px 1px 3px rgba(50, 50, 50, 0.75);
    -moz-box-shadow:    0px 1px 3px rgba(50, 50, 50, 0.75);
    box-shadow:         0px 1px 3px rgba(50, 50, 50, 0.75);
    
    background-image: url(images/texture.png), linear-gradient(rgba(69, 69, 69, .95), rgba(82, 82, 82, .99));
    background-image: url(images/texture.png), -webkit-linear-gradient(rgba(69, 69, 69, .95), rgba(82, 82, 82, .99));
    background-image: url(images/texture.png), -moz-linear-gradient(rgba(69, 69, 69, .95), rgba(82, 82, 82, .99));
    background-image: url(images/texture.png), -ms-linear-gradient(rgba(69, 69, 69, .95), rgba(82, 82, 82, .99));
    background-image: url(images/texture.png), -o-linear-gradient(rgba(69, 69, 69, .95), rgba(82, 82, 82, .99));
}

#titlebar a, #aboutDialog a, #titlebar a:visited, #aboutDialog a:visited {
    color: #ccc;
}

#documentName {
    margin-right: 10px;
    margin-left: 10px;
    margin-top: 8px;
    color: #F2F2F2;
    line-height: 14px;
    font-family: sans-serif; 
}
#documentName {
    font-size: 14px;
}

#toolbarContainer {
    position: absolute;
    z-index: 2; 
    bottom: 0px;
    left: 0px;
    height: 32px;
    width: 100%;
    overflow: hidden;

    -webkit-box-shadow: 0px -1px 3px rgba(50, 50, 50, 0.75);
    -moz-box-shadow:    0px -1px 3px rgba(50, 50, 50, 0.75);
    box-shadow:         0px -1px 3px rgba(50, 50, 50, 0.75);
    
    background-image: url(images/texture.png), linear-gradient(rgba(82, 82, 82, .99), rgba(69, 69, 69, .95));
    background-image: url(images/texture.png), -webkit-linear-gradient(rgba(82, 82, 82, .99), rgba(69, 69, 69, .95));
    background-image: url(images/texture.png), -moz-linear-gradient(rgba(82, 82, 82, .99), rgba(69, 69, 69, .95));
    background-image: url(images/texture.png), -ms-linear-gradient(rgba(82, 82, 82, .99), rgba(69, 69, 69, .95));
    background-image: url(images/texture.png), -o-linear-gradient(rgba(82, 82, 82, .99), rgba(69, 69, 69, .95));
}

#toolbar {
    position: relative;
}

#toolbarMiddleContainer, #toolbarLeft {
    visibility: hidden;
}

html[dir='ltr'] #toolbarLeft {
    margin-left: -1px;
}
html[dir='rtl'] #toolbarRight {
    margin-left: -1px;
}
html[dir='ltr'] #toolbarLeft,
html[dir='rtl'] #toolbarRight {
    position: absolute;
    top: 0;
    left: 0;
}
html[dir='ltr'] #toolbarRight,
html[dir='rtl'] #toolbarLeft {
    position: absolute;
    top: 0;
    right: 0;
}
html[dir='ltr'] #toolbarLeft > *,
html[dir='ltr'] #toolbarMiddle > *,
html[dir='ltr'] #toolbarRight > * {
    float: left;
}
html[dir='rtl'] #toolbarLeft > *,
html[dir='rtl'] #toolbarMiddle > *,
html[dir='rtl'] #toolbarRight > * {
    float: right;
}

/* outer/inner center provides horizontal center */
html[dir='ltr'] .outerCenter {
      float: right;
        position: relative;
          right: 50%;
}
html[dir='rtl'] .outerCenter {
      float: left;
        position: relative;
          left: 50%;
}
html[dir='ltr'] .innerCenter {
      float: right;
        position: relative;
          right: -50%;
}
html[dir='rtl'] .innerCenter {
      float: left;
        position: relative;
          left: -50%;
}

html[dir='ltr'] .splitToolbarButton {
      margin: 3px 2px 4px 0;
        display: inline-block;
}
html[dir='rtl'] .splitToolbarButton {
      margin: 3px 0 4px 2px;
        display: inline-block;
}
html[dir='ltr'] .splitToolbarButton > .toolbarButton {
      border-radius: 0;
        float: left;
}
html[dir='rtl'] .splitToolbarButton > .toolbarButton {
      border-radius: 0;
        float: right;
}

.splitToolbarButton.toggled .toolbarButton {
      margin: 0;
}

.toolbarButton {
    border: 0 none;
    background-color: rgba(0, 0, 0, 0);
    min-width: 32px;
    height: 25px;
    border-radius: 2px;
    background-image: none;
}

html[dir='ltr'] .toolbarButton,
html[dir='ltr'] .dropdownToolbarButton {
      margin: 3px 2px 4px 0;
}
html[dir='rtl'] .toolbarButton,
html[dir='rtl'] .dropdownToolbarButton {
      margin: 3px 0 4px 2px;
}

.toolbarButton:hover,
.toolbarButton:focus,
.dropdownToolbarButton {
    background-color: hsla(0,0%,0%,.12);
    background-image: linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -webkit-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -moz-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -ms-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -o-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-clip: padding-box;
    border: 1px solid hsla(0,0%,0%,.35);
    border-color: hsla(0,0%,0%,.32) hsla(0,0%,0%,.38) hsla(0,0%,0%,.42);
    box-shadow: 0 1px 0 hsla(0,0%,100%,.05) inset,
                0 0 1px hsla(0,0%,100%,.15) inset,
                0 1px 0 hsla(0,0%,100%,.05);
}

.toolbarButton:hover:active,
.dropdownToolbarButton:hover:active {
    background-color: hsla(0,0%,0%,.2);
    background-image: linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -webkit-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -moz-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -ms-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -o-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    border-color: hsla(0,0%,0%,.35) hsla(0,0%,0%,.4) hsla(0,0%,0%,.45);
    box-shadow: 0 1px 1px hsla(0,0%,0%,.1) inset,
                0 0 1px hsla(0,0%,0%,.2) inset,
                0 1px 0 hsla(0,0%,100%,.05);
}

.splitToolbarButton:hover > .toolbarButton,
.splitToolbarButton:focus > .toolbarButton,
.splitToolbarButton.toggled > .toolbarButton,
.toolbarButton.textButton {
    background-color: hsla(0,0%,0%,.12);
    background-image: -webkit-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -moz-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -ms-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -o-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-clip: padding-box;
    border: 1px solid hsla(0,0%,0%,.35);
    border-color: hsla(0,0%,0%,.32) hsla(0,0%,0%,.38) hsla(0,0%,0%,.42);
    box-shadow: 0 1px 0 hsla(0,0%,100%,.05) inset,
    0 0 1px hsla(0,0%,100%,.15) inset,
    0 1px 0 hsla(0,0%,100%,.05);
    -webkit-transition-property: background-color, border-color, box-shadow;
    -webkit-transition-duration: 150ms;
    -webkit-transition-timing-function: ease;
    -moz-transition-property: background-color, border-color, box-shadow;
    -moz-transition-duration: 150ms;
    -moz-transition-timing-function: ease;
    -ms-transition-property: background-color, border-color, box-shadow;
    -ms-transition-duration: 150ms;
    -ms-transition-timing-function: ease;
    -o-transition-property: background-color, border-color, box-shadow;
    -o-transition-duration: 150ms;
    -o-transition-timing-function: ease;
    transition-property: background-color, border-color, box-shadow;
    transition-duration: 150ms;
    transition-timing-function: ease;

}
.splitToolbarButton > .toolbarButton:hover,
.splitToolbarButton > .toolbarButton:focus,
.dropdownToolbarButton:hover,
.toolbarButton.textButton:hover,
.toolbarButton.textButton:focus {
      background-color: hsla(0,0%,0%,.2);
        box-shadow: 0 1px 0 hsla(0,0%,100%,.05) inset,
                    0 0 1px hsla(0,0%,100%,.15) inset,
                    0 0 1px hsla(0,0%,0%,.05);
                    z-index: 199;
}


.splitToolbarButton:hover > .toolbarButton,
.splitToolbarButton:focus > .toolbarButton,
.splitToolbarButton.toggled > .toolbarButton,
.toolbarButton.textButton {
    background-color: hsla(0,0%,0%,.12);
    background-image: -webkit-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -moz-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -ms-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -o-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-clip: padding-box;
    border: 1px solid hsla(0,0%,0%,.35);
    border-color: hsla(0,0%,0%,.32) hsla(0,0%,0%,.38) hsla(0,0%,0%,.42);
    box-shadow: 0 1px 0 hsla(0,0%,100%,.05) inset,
    0 0 1px hsla(0,0%,100%,.15) inset,
    0 1px 0 hsla(0,0%,100%,.05);
    -webkit-transition-property: background-color, border-color, box-shadow;
    -webkit-transition-duration: 150ms;
    -webkit-transition-timing-function: ease;
    -moz-transition-property: background-color, border-color, box-shadow;
    -moz-transition-duration: 150ms;
    -moz-transition-timing-function: ease;
    -ms-transition-property: background-color, border-color, box-shadow;
    -ms-transition-duration: 150ms;
    -ms-transition-timing-function: ease;
    -o-transition-property: background-color, border-color, box-shadow;
    -o-transition-duration: 150ms;
    -o-transition-timing-function: ease;
    transition-property: background-color, border-color, box-shadow;
    transition-duration: 150ms;
    transition-timing-function: ease;

}
.splitToolbarButton > .toolbarButton:hover,
.splitToolbarButton > .toolbarButton:focus,
.dropdownToolbarButton:hover,
.toolbarButton.textButton:hover,
.toolbarButton.textButton:focus {
    background-color: hsla(0,0%,0%,.2);
    box-shadow: 0 1px 0 hsla(0,0%,100%,.05) inset,
                0 0 1px hsla(0,0%,100%,.15) inset,
                 0 0 1px hsla(0,0%,0%,.05);
    z-index: 199;
}

.dropdownToolbarButton {
    border: 1px solid #333 !important;
}

.toolbarButton,
.dropdownToolbarButton {
      min-width: 16px;
        padding: 2px 6px 2px;
          border: 1px solid transparent;
            border-radius: 2px;
              color: hsl(0,0%,95%);
                font-size: 12px;
                  line-height: 14px;
                    -webkit-user-select:none;
                      -moz-user-select:none;
                        -ms-user-select:none;
                          /* Opera does not support user-select, use <... unselectable=\"on\"> instead */
                            cursor: default;
                              -webkit-transition-property: background-color, border-color, box-shadow;
                                -webkit-transition-duration: 150ms;
                                  -webkit-transition-timing-function: ease;
                                    -moz-transition-property: background-color, border-color, box-shadow;
                                      -moz-transition-duration: 150ms;
                                        -moz-transition-timing-function: ease;
                                          -ms-transition-property: background-color, border-color, box-shadow;
                                            -ms-transition-duration: 150ms;
                                              -ms-transition-timing-function: ease;
                                                -o-transition-property: background-color, border-color, box-shadow;
                                                  -o-transition-duration: 150ms;
                                                    -o-transition-timing-function: ease;
                                                      transition-property: background-color, border-color, box-shadow;
                                                        transition-duration: 150ms;
                                                          transition-timing-function: ease;
}

html[dir='ltr'] .toolbarButton,
html[dir='ltr'] .dropdownToolbarButton {
      margin: 3px 2px 4px 0;
}
html[dir='rtl'] .toolbarButton,
html[dir='rtl'] .dropdownToolbarButton {
      margin: 3px 0 4px 2px;
}

.splitToolbarButton:hover > .splitToolbarButtonSeparator,
.splitToolbarButton.toggled > .splitToolbarButtonSeparator {
      padding: 12px 0;
        margin: 0;
          box-shadow: 0 0 0 1px hsla(0,0%,100%,.03);
            -webkit-transition-property: padding;
              -webkit-transition-duration: 10ms;
                -webkit-transition-timing-function: ease;
                  -moz-transition-property: padding;
                    -moz-transition-duration: 10ms;
                      -moz-transition-timing-function: ease;
                        -ms-transition-property: padding;
                          -ms-transition-duration: 10ms;
                            -ms-transition-timing-function: ease;
                              -o-transition-property: padding;
                                -o-transition-duration: 10ms;
                                  -o-transition-timing-function: ease;
                                    transition-property: padding;
                                      transition-duration: 10ms;
                                        transition-timing-function: ease;
}

.toolbarButton.toggled:hover:active,
.splitToolbarButton > .toolbarButton:hover:active {
      background-color: hsla(0,0%,0%,.4);
        border-color: hsla(0,0%,0%,.4) hsla(0,0%,0%,.5) hsla(0,0%,0%,.55);
          box-shadow: 0 1px 1px hsla(0,0%,0%,.2) inset,
                        0 0 1px hsla(0,0%,0%,.3) inset,
                                      0 1px 0 hsla(0,0%,100%,.05);
}

html[dir='ltr'] .splitToolbarButton > .toolbarButton:first-child,
html[dir='rtl'] .splitToolbarButton > .toolbarButton:last-child {
      position: relative;
        margin: 0;
        margin-left: 4px;
          margin-right: -1px;
            border-top-left-radius: 2px;
              border-bottom-left-radius: 2px;
                border-right-color: transparent;
}
html[dir='ltr'] .splitToolbarButton > .toolbarButton:last-child,
html[dir='rtl'] .splitToolbarButton > .toolbarButton:first-child {
      position: relative;
        margin: 0;
          margin-left: -1px;
            border-top-right-radius: 2px;
              border-bottom-right-radius: 2px;
                border-left-color: transparent;
}
.splitToolbarButtonSeparator {
      padding: 8px 0;
        width: 1px;
          background-color: hsla(0,0%,00%,.5);
            z-index: 99;
              box-shadow: 0 0 0 1px hsla(0,0%,100%,.08);
                display: inline-block;
                  margin: 5px 0;
}
html[dir='ltr'] .splitToolbarButtonSeparator {
      float:left;
}
html[dir='rtl'] .splitToolbarButtonSeparator {
      float:right;
}

.dropdownToolbarButton {
      min-width: 120px;
        max-width: 120px;
          padding: 4px 2px 4px;
            overflow: hidden;
              background: url(images/toolbarButton-menuArrows.png) no-repeat;
}

.dropdownToolbarButton > select {
      -webkit-appearance: none;
        -moz-appearance: none; /* in the future this might matter, see bugzilla bug #649849 */
          min-width: 140px;
            font-size: 12px;
              color: hsl(0,0%,95%);
                margin:0;
                  padding:0;
                    border:none;
                      background: rgba(0,0,0,0); /* Opera does not support 'transparent' <select> background */
}

.dropdownToolbarButton > select > option {
      background: hsl(0,0%,24%);
}

#pageWidthOption {
  border-bottom: 1px rgba(255, 255, 255, .5) solid;
}


html[dir='ltr'] .dropdownToolbarButton {
      background-position: 95%;
}
html[dir='rtl'] .dropdownToolbarButton {
      background-position: 5%;
}


.toolbarButton.fullscreen::before {
    display: inline-block;
    content: url(images/toolbarButton-fullscreen.png);
}

.toolbarButton.presentation::before {
    display: inline-block;
    content: url(images/toolbarButton-presentation.png);
}

.toolbarButton.download::before {
    display: inline-block;
    content: url(images/toolbarButton-download.png);
}

.toolbarButton.about {
    color: #F2F2F2;
    font-size: 14px;
    font-weight: bold;
    line-height: 14px;
    font-family: sans-serif;
}
.toolbarButton.about::before {
    display: inline-block;
}

.toolbarButton.zoomOut::before {
    display: inline-block;
    content: url(images/toolbarButton-zoomOut.png);
}
    
.toolbarButton.zoomIn::before {
    display: inline-block;
    content: url(images/toolbarButton-zoomIn.png);
}

.toolbarButton.pageUp::before {
  display: inline-block;
  content: url(images/toolbarButton-pageUp.png);
}

.toolbarButton.pageDown::before {
  display: inline-block;
  content: url(images/toolbarButton-pageDown.png);
}

.toolbarField.pageNumber {
  min-width: 16px;
  text-align: right;
  width: 40px;
}

.toolbarField {
  padding: 3px 6px;
  margin: 4px 0 4px 0;
  border: 1px solid transparent;
  border-radius: 2px;
  background-color: hsla(0,0%,100%,.09);
  background-image: -moz-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
  background-clip: padding-box;
  border: 1px solid hsla(0,0%,0%,.35);
  border-color: hsla(0,0%,0%,.32) hsla(0,0%,0%,.38) hsla(0,0%,0%,.42);
  box-shadow: 0 1px 0 hsla(0,0%,0%,.05) inset,
              0 1px 0 hsla(0,0%,100%,.05);
  color: hsl(0,0%,95%);
  font-size: 12px;
  line-height: 14px;
  outline-style: none;
  -moz-transition-property: background-color, border-color, box-shadow;
  -moz-transition-duration: 150ms;
  -moz-transition-timing-function: ease;
}

.toolbarField.pageNumber::-webkit-inner-spin-button,
.toolbarField.pageNumber::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

.toolbarField:hover {
  background-color: hsla(0,0%,100%,.11);
  border-color: hsla(0,0%,0%,.4) hsla(0,0%,0%,.43) hsla(0,0%,0%,.45);
}

.toolbarField:focus {
  background-color: hsla(0,0%,100%,.15);
  border-color: hsla(204,100%,65%,.8) hsla(204,100%,65%,.85) hsla(204,100%,65%,.9);
}

.toolbarLabel {
  min-width: 16px;
  padding: 3px 6px 3px 2px;
  margin: 4px 2px 4px 0;
  border: 1px solid transparent;
  border-radius: 2px;
  color: hsl(0,0%,85%);
  font-size: 12px;
  line-height: 14px;
  text-align: left;
  -webkit-user-select:none;
  -moz-user-select:none;
  cursor: default;
}

#canvasContainer {
    overflow: auto;

    padding-top: 6px;
    padding-bottom: 6px;
    position: absolute;
    top: 32px;
    right: 0;
    bottom: 32px;
    left: 0;

    text-align: center;
    
    background-color: #888;
    background-image: url(images/texture.png);
}

#canvasContainer.slideshow {
    padding: 0;
    overflow: hidden;
}

#canvasContainer.slideshow > * {
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

.presentationMode {
    top: 0 !important;
    bottom: 0 !important;
    background-color: black !important;
    cursor: default !important;
}

#canvas {
    box-shadow:         0px 0px 7px rgba(0, 0, 0, 0.75);
    -webkit-box-shadow: 0px 0px 7px rgba(0, 0, 0, 0.75);
    -moz-box-shadow:    0px 0px 7px rgba(0, 0, 0, 0.75);
    -ms-box-shadow:    0px 0px 7px rgba(0, 0, 0, 0.75);
    -o-box-shadow:    0px 0px 7px rgba(0, 0, 0, 0.75);

    /*
     * Hide the canvas overflow because otherwise the CSS-scaled 'sizer' child
     * of the canvas will still advertise the original size in Firefox, causing
     * strange scrollbar behavior.
     */
    overflow: hidden;
}

#sliderContainer {
    visibility: hidden;
}

#overlayNavigator {
    position: absolute;
    width: 100%;
    height: 0;
    top: calc(50% - 50px);
    background-color: rgba(0, 0, 0, 0);
    z-index: 3;
    opacity: 0;
    -webkit-transition: opacity 1s ease-out;
    -moz-transition: opacity 1s ease-out;
    transition: opacity 1s ease-out;
}
#previousPage {
    float: left;
    margin-left: 10px;
 
    /* CSS triangle */
    border-top: 50px solid transparent;
    border-bottom: 50px solid transparent; 
    border-right: 50px solid black;

    opacity: 0.5;
}
#nextPage {
    float: right;
    margin-right: 10px;
 
    /* CSS triangle */
    border-top: 50px solid transparent;
    border-bottom: 50px solid transparent; 
    border-left: 50px solid black;

    opacity: 0.5;
}
#previousPage:active {
    opacity: 0.8;
}
#nextPage:active {
    opacity: 0.8;
}
#overlayCloseButton {
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 3;
    font-size: 35px;
    color: white;
    background-color: black;
    opacity: 0.5;

    width: 40px;
    height: 40px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    text-align: center;
    cursor: pointer;
    display: none;
}
#overlayCloseButton:active {
    background-color: red;
}

#aboutDialogCentererTable {
    display: table;
    width:100%;
    height:100%;
}

#aboutDialogCentererCell {
    vertical-align: middle;
    text-align:center;
    display: table-cell;
}

#aboutDialog {
    width: 280px;
    background-color: #666;
    color: white;
    text-align: center;
    border-radius: 2px;
    box-shadow: 0px 1px 6px black;
    padding: 5px;
    font-style: sans-serif;
    display: inline-block;
}

#aboutDialog h1 {
    font-size: 25pt;
}

#aboutDialog p {
    font-size: 10pt;
}

#aboutDialog > * {
    margin: 10px;
}

#dialogOverlay {
    position: absolute;
    left: 0px;
    top: 0px;
    width:100%;
    height:100%;
    z-index: 3;
    background-color: rgba(0,0,0,.5);
    overflow: auto;
    display: none;
}

#blanked {
    display: none;
    cursor: none;
    position: absolute;
    left: 0px;
    top: 0px;
    width:100%;
    height:100%;
    z-index: 3;
}

@media only screen and (max-device-width: 800px) and (max-device-height: 800px) {
    #canvasContainer {
        top: 0;
        bottom: 0;
    }

    #overlayNavigator {
        height: 100px;
        pointer-events: none;
    }
    #nextPage, #previousPage {
        pointer-events: all;
    }

    #titlebar, #toolbarContainer {
        background-color: rgba(0, 0, 0, 0.6);
        background-image: none;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        transition: all 0.5s;
    }

    #titlebar {
        top: -32px;
    }
    #titlebar.viewer-touched {
        top: 0px;
    }
    #toolbarContainer {
        bottom: -32px;
    }
    #toolbarContainer.viewer-touched {
        bottom: 0px;
    }

    .viewer-touched {
        display: block;
        opacity: 1 !important;
    }

    #next, #previous {
        display: none;
    }
}
";
        
        $__internal_188294b760dc412435d03790ea8d149d26684b4e3caf67ea83ed6a21d0cd1f6e->leave($__internal_188294b760dc412435d03790ea8d149d26684b4e3caf67ea83ed6a21d0cd1f6e_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/js/ViewerJS/viewer.css";
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
        return new Twig_Source("/**
 * Copyright (C) 2012-2014 KO GmbH <copyright@kogmbh.com>
 *
 * @licstart
 * This file is part of WebODF.
 *
 * WebODF is free software: you can redistribute it and/or modify it
 * under the terms of the GNU Affero General Public License (GNU AGPL)
 * as published by the Free Software Foundation, either version 3 of
 * the License, or (at your option) any later version.
 *
 * WebODF is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with WebODF.  If not, see <http://www.gnu.org/licenses/>.
 * @licend
 *
 * @source: http://www.webodf.org/
 * @source: https://github.com/kogmbh/WebODF/
 */

/*
 * This file is a derivative from a part of Mozilla's PDF.js project. The
 * original license header follows.
 */

/* Copyright 2012 Mozilla Foundation
 *
 * Licensed under the Apache License, Version 2.0 (the \"License\");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an \"AS IS\" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

* {
    padding: 0;
    margin: 0;
}

html > body {
  font-family: sans-serif;
  overflow: hidden;
}

.titlebar > span,
.toolbarLabel,
input,
button,
select {
  font: message-box;
}

#titlebar {
    position: absolute;
    z-index: 2; 
    top: 0px;
    left: 0px;
    height: 32px;
    width: 100%;
    overflow: hidden;

    -webkit-box-shadow: 0px 1px 3px rgba(50, 50, 50, 0.75);
    -moz-box-shadow:    0px 1px 3px rgba(50, 50, 50, 0.75);
    box-shadow:         0px 1px 3px rgba(50, 50, 50, 0.75);
    
    background-image: url(images/texture.png), linear-gradient(rgba(69, 69, 69, .95), rgba(82, 82, 82, .99));
    background-image: url(images/texture.png), -webkit-linear-gradient(rgba(69, 69, 69, .95), rgba(82, 82, 82, .99));
    background-image: url(images/texture.png), -moz-linear-gradient(rgba(69, 69, 69, .95), rgba(82, 82, 82, .99));
    background-image: url(images/texture.png), -ms-linear-gradient(rgba(69, 69, 69, .95), rgba(82, 82, 82, .99));
    background-image: url(images/texture.png), -o-linear-gradient(rgba(69, 69, 69, .95), rgba(82, 82, 82, .99));
}

#titlebar a, #aboutDialog a, #titlebar a:visited, #aboutDialog a:visited {
    color: #ccc;
}

#documentName {
    margin-right: 10px;
    margin-left: 10px;
    margin-top: 8px;
    color: #F2F2F2;
    line-height: 14px;
    font-family: sans-serif; 
}
#documentName {
    font-size: 14px;
}

#toolbarContainer {
    position: absolute;
    z-index: 2; 
    bottom: 0px;
    left: 0px;
    height: 32px;
    width: 100%;
    overflow: hidden;

    -webkit-box-shadow: 0px -1px 3px rgba(50, 50, 50, 0.75);
    -moz-box-shadow:    0px -1px 3px rgba(50, 50, 50, 0.75);
    box-shadow:         0px -1px 3px rgba(50, 50, 50, 0.75);
    
    background-image: url(images/texture.png), linear-gradient(rgba(82, 82, 82, .99), rgba(69, 69, 69, .95));
    background-image: url(images/texture.png), -webkit-linear-gradient(rgba(82, 82, 82, .99), rgba(69, 69, 69, .95));
    background-image: url(images/texture.png), -moz-linear-gradient(rgba(82, 82, 82, .99), rgba(69, 69, 69, .95));
    background-image: url(images/texture.png), -ms-linear-gradient(rgba(82, 82, 82, .99), rgba(69, 69, 69, .95));
    background-image: url(images/texture.png), -o-linear-gradient(rgba(82, 82, 82, .99), rgba(69, 69, 69, .95));
}

#toolbar {
    position: relative;
}

#toolbarMiddleContainer, #toolbarLeft {
    visibility: hidden;
}

html[dir='ltr'] #toolbarLeft {
    margin-left: -1px;
}
html[dir='rtl'] #toolbarRight {
    margin-left: -1px;
}
html[dir='ltr'] #toolbarLeft,
html[dir='rtl'] #toolbarRight {
    position: absolute;
    top: 0;
    left: 0;
}
html[dir='ltr'] #toolbarRight,
html[dir='rtl'] #toolbarLeft {
    position: absolute;
    top: 0;
    right: 0;
}
html[dir='ltr'] #toolbarLeft > *,
html[dir='ltr'] #toolbarMiddle > *,
html[dir='ltr'] #toolbarRight > * {
    float: left;
}
html[dir='rtl'] #toolbarLeft > *,
html[dir='rtl'] #toolbarMiddle > *,
html[dir='rtl'] #toolbarRight > * {
    float: right;
}

/* outer/inner center provides horizontal center */
html[dir='ltr'] .outerCenter {
      float: right;
        position: relative;
          right: 50%;
}
html[dir='rtl'] .outerCenter {
      float: left;
        position: relative;
          left: 50%;
}
html[dir='ltr'] .innerCenter {
      float: right;
        position: relative;
          right: -50%;
}
html[dir='rtl'] .innerCenter {
      float: left;
        position: relative;
          left: -50%;
}

html[dir='ltr'] .splitToolbarButton {
      margin: 3px 2px 4px 0;
        display: inline-block;
}
html[dir='rtl'] .splitToolbarButton {
      margin: 3px 0 4px 2px;
        display: inline-block;
}
html[dir='ltr'] .splitToolbarButton > .toolbarButton {
      border-radius: 0;
        float: left;
}
html[dir='rtl'] .splitToolbarButton > .toolbarButton {
      border-radius: 0;
        float: right;
}

.splitToolbarButton.toggled .toolbarButton {
      margin: 0;
}

.toolbarButton {
    border: 0 none;
    background-color: rgba(0, 0, 0, 0);
    min-width: 32px;
    height: 25px;
    border-radius: 2px;
    background-image: none;
}

html[dir='ltr'] .toolbarButton,
html[dir='ltr'] .dropdownToolbarButton {
      margin: 3px 2px 4px 0;
}
html[dir='rtl'] .toolbarButton,
html[dir='rtl'] .dropdownToolbarButton {
      margin: 3px 0 4px 2px;
}

.toolbarButton:hover,
.toolbarButton:focus,
.dropdownToolbarButton {
    background-color: hsla(0,0%,0%,.12);
    background-image: linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -webkit-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -moz-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -ms-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -o-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-clip: padding-box;
    border: 1px solid hsla(0,0%,0%,.35);
    border-color: hsla(0,0%,0%,.32) hsla(0,0%,0%,.38) hsla(0,0%,0%,.42);
    box-shadow: 0 1px 0 hsla(0,0%,100%,.05) inset,
                0 0 1px hsla(0,0%,100%,.15) inset,
                0 1px 0 hsla(0,0%,100%,.05);
}

.toolbarButton:hover:active,
.dropdownToolbarButton:hover:active {
    background-color: hsla(0,0%,0%,.2);
    background-image: linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -webkit-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -moz-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -ms-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -o-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    border-color: hsla(0,0%,0%,.35) hsla(0,0%,0%,.4) hsla(0,0%,0%,.45);
    box-shadow: 0 1px 1px hsla(0,0%,0%,.1) inset,
                0 0 1px hsla(0,0%,0%,.2) inset,
                0 1px 0 hsla(0,0%,100%,.05);
}

.splitToolbarButton:hover > .toolbarButton,
.splitToolbarButton:focus > .toolbarButton,
.splitToolbarButton.toggled > .toolbarButton,
.toolbarButton.textButton {
    background-color: hsla(0,0%,0%,.12);
    background-image: -webkit-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -moz-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -ms-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -o-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-clip: padding-box;
    border: 1px solid hsla(0,0%,0%,.35);
    border-color: hsla(0,0%,0%,.32) hsla(0,0%,0%,.38) hsla(0,0%,0%,.42);
    box-shadow: 0 1px 0 hsla(0,0%,100%,.05) inset,
    0 0 1px hsla(0,0%,100%,.15) inset,
    0 1px 0 hsla(0,0%,100%,.05);
    -webkit-transition-property: background-color, border-color, box-shadow;
    -webkit-transition-duration: 150ms;
    -webkit-transition-timing-function: ease;
    -moz-transition-property: background-color, border-color, box-shadow;
    -moz-transition-duration: 150ms;
    -moz-transition-timing-function: ease;
    -ms-transition-property: background-color, border-color, box-shadow;
    -ms-transition-duration: 150ms;
    -ms-transition-timing-function: ease;
    -o-transition-property: background-color, border-color, box-shadow;
    -o-transition-duration: 150ms;
    -o-transition-timing-function: ease;
    transition-property: background-color, border-color, box-shadow;
    transition-duration: 150ms;
    transition-timing-function: ease;

}
.splitToolbarButton > .toolbarButton:hover,
.splitToolbarButton > .toolbarButton:focus,
.dropdownToolbarButton:hover,
.toolbarButton.textButton:hover,
.toolbarButton.textButton:focus {
      background-color: hsla(0,0%,0%,.2);
        box-shadow: 0 1px 0 hsla(0,0%,100%,.05) inset,
                    0 0 1px hsla(0,0%,100%,.15) inset,
                    0 0 1px hsla(0,0%,0%,.05);
                    z-index: 199;
}


.splitToolbarButton:hover > .toolbarButton,
.splitToolbarButton:focus > .toolbarButton,
.splitToolbarButton.toggled > .toolbarButton,
.toolbarButton.textButton {
    background-color: hsla(0,0%,0%,.12);
    background-image: -webkit-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -moz-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -ms-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: -o-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-image: linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
    background-clip: padding-box;
    border: 1px solid hsla(0,0%,0%,.35);
    border-color: hsla(0,0%,0%,.32) hsla(0,0%,0%,.38) hsla(0,0%,0%,.42);
    box-shadow: 0 1px 0 hsla(0,0%,100%,.05) inset,
    0 0 1px hsla(0,0%,100%,.15) inset,
    0 1px 0 hsla(0,0%,100%,.05);
    -webkit-transition-property: background-color, border-color, box-shadow;
    -webkit-transition-duration: 150ms;
    -webkit-transition-timing-function: ease;
    -moz-transition-property: background-color, border-color, box-shadow;
    -moz-transition-duration: 150ms;
    -moz-transition-timing-function: ease;
    -ms-transition-property: background-color, border-color, box-shadow;
    -ms-transition-duration: 150ms;
    -ms-transition-timing-function: ease;
    -o-transition-property: background-color, border-color, box-shadow;
    -o-transition-duration: 150ms;
    -o-transition-timing-function: ease;
    transition-property: background-color, border-color, box-shadow;
    transition-duration: 150ms;
    transition-timing-function: ease;

}
.splitToolbarButton > .toolbarButton:hover,
.splitToolbarButton > .toolbarButton:focus,
.dropdownToolbarButton:hover,
.toolbarButton.textButton:hover,
.toolbarButton.textButton:focus {
    background-color: hsla(0,0%,0%,.2);
    box-shadow: 0 1px 0 hsla(0,0%,100%,.05) inset,
                0 0 1px hsla(0,0%,100%,.15) inset,
                 0 0 1px hsla(0,0%,0%,.05);
    z-index: 199;
}

.dropdownToolbarButton {
    border: 1px solid #333 !important;
}

.toolbarButton,
.dropdownToolbarButton {
      min-width: 16px;
        padding: 2px 6px 2px;
          border: 1px solid transparent;
            border-radius: 2px;
              color: hsl(0,0%,95%);
                font-size: 12px;
                  line-height: 14px;
                    -webkit-user-select:none;
                      -moz-user-select:none;
                        -ms-user-select:none;
                          /* Opera does not support user-select, use <... unselectable=\"on\"> instead */
                            cursor: default;
                              -webkit-transition-property: background-color, border-color, box-shadow;
                                -webkit-transition-duration: 150ms;
                                  -webkit-transition-timing-function: ease;
                                    -moz-transition-property: background-color, border-color, box-shadow;
                                      -moz-transition-duration: 150ms;
                                        -moz-transition-timing-function: ease;
                                          -ms-transition-property: background-color, border-color, box-shadow;
                                            -ms-transition-duration: 150ms;
                                              -ms-transition-timing-function: ease;
                                                -o-transition-property: background-color, border-color, box-shadow;
                                                  -o-transition-duration: 150ms;
                                                    -o-transition-timing-function: ease;
                                                      transition-property: background-color, border-color, box-shadow;
                                                        transition-duration: 150ms;
                                                          transition-timing-function: ease;
}

html[dir='ltr'] .toolbarButton,
html[dir='ltr'] .dropdownToolbarButton {
      margin: 3px 2px 4px 0;
}
html[dir='rtl'] .toolbarButton,
html[dir='rtl'] .dropdownToolbarButton {
      margin: 3px 0 4px 2px;
}

.splitToolbarButton:hover > .splitToolbarButtonSeparator,
.splitToolbarButton.toggled > .splitToolbarButtonSeparator {
      padding: 12px 0;
        margin: 0;
          box-shadow: 0 0 0 1px hsla(0,0%,100%,.03);
            -webkit-transition-property: padding;
              -webkit-transition-duration: 10ms;
                -webkit-transition-timing-function: ease;
                  -moz-transition-property: padding;
                    -moz-transition-duration: 10ms;
                      -moz-transition-timing-function: ease;
                        -ms-transition-property: padding;
                          -ms-transition-duration: 10ms;
                            -ms-transition-timing-function: ease;
                              -o-transition-property: padding;
                                -o-transition-duration: 10ms;
                                  -o-transition-timing-function: ease;
                                    transition-property: padding;
                                      transition-duration: 10ms;
                                        transition-timing-function: ease;
}

.toolbarButton.toggled:hover:active,
.splitToolbarButton > .toolbarButton:hover:active {
      background-color: hsla(0,0%,0%,.4);
        border-color: hsla(0,0%,0%,.4) hsla(0,0%,0%,.5) hsla(0,0%,0%,.55);
          box-shadow: 0 1px 1px hsla(0,0%,0%,.2) inset,
                        0 0 1px hsla(0,0%,0%,.3) inset,
                                      0 1px 0 hsla(0,0%,100%,.05);
}

html[dir='ltr'] .splitToolbarButton > .toolbarButton:first-child,
html[dir='rtl'] .splitToolbarButton > .toolbarButton:last-child {
      position: relative;
        margin: 0;
        margin-left: 4px;
          margin-right: -1px;
            border-top-left-radius: 2px;
              border-bottom-left-radius: 2px;
                border-right-color: transparent;
}
html[dir='ltr'] .splitToolbarButton > .toolbarButton:last-child,
html[dir='rtl'] .splitToolbarButton > .toolbarButton:first-child {
      position: relative;
        margin: 0;
          margin-left: -1px;
            border-top-right-radius: 2px;
              border-bottom-right-radius: 2px;
                border-left-color: transparent;
}
.splitToolbarButtonSeparator {
      padding: 8px 0;
        width: 1px;
          background-color: hsla(0,0%,00%,.5);
            z-index: 99;
              box-shadow: 0 0 0 1px hsla(0,0%,100%,.08);
                display: inline-block;
                  margin: 5px 0;
}
html[dir='ltr'] .splitToolbarButtonSeparator {
      float:left;
}
html[dir='rtl'] .splitToolbarButtonSeparator {
      float:right;
}

.dropdownToolbarButton {
      min-width: 120px;
        max-width: 120px;
          padding: 4px 2px 4px;
            overflow: hidden;
              background: url(images/toolbarButton-menuArrows.png) no-repeat;
}

.dropdownToolbarButton > select {
      -webkit-appearance: none;
        -moz-appearance: none; /* in the future this might matter, see bugzilla bug #649849 */
          min-width: 140px;
            font-size: 12px;
              color: hsl(0,0%,95%);
                margin:0;
                  padding:0;
                    border:none;
                      background: rgba(0,0,0,0); /* Opera does not support 'transparent' <select> background */
}

.dropdownToolbarButton > select > option {
      background: hsl(0,0%,24%);
}

#pageWidthOption {
  border-bottom: 1px rgba(255, 255, 255, .5) solid;
}


html[dir='ltr'] .dropdownToolbarButton {
      background-position: 95%;
}
html[dir='rtl'] .dropdownToolbarButton {
      background-position: 5%;
}


.toolbarButton.fullscreen::before {
    display: inline-block;
    content: url(images/toolbarButton-fullscreen.png);
}

.toolbarButton.presentation::before {
    display: inline-block;
    content: url(images/toolbarButton-presentation.png);
}

.toolbarButton.download::before {
    display: inline-block;
    content: url(images/toolbarButton-download.png);
}

.toolbarButton.about {
    color: #F2F2F2;
    font-size: 14px;
    font-weight: bold;
    line-height: 14px;
    font-family: sans-serif;
}
.toolbarButton.about::before {
    display: inline-block;
}

.toolbarButton.zoomOut::before {
    display: inline-block;
    content: url(images/toolbarButton-zoomOut.png);
}
    
.toolbarButton.zoomIn::before {
    display: inline-block;
    content: url(images/toolbarButton-zoomIn.png);
}

.toolbarButton.pageUp::before {
  display: inline-block;
  content: url(images/toolbarButton-pageUp.png);
}

.toolbarButton.pageDown::before {
  display: inline-block;
  content: url(images/toolbarButton-pageDown.png);
}

.toolbarField.pageNumber {
  min-width: 16px;
  text-align: right;
  width: 40px;
}

.toolbarField {
  padding: 3px 6px;
  margin: 4px 0 4px 0;
  border: 1px solid transparent;
  border-radius: 2px;
  background-color: hsla(0,0%,100%,.09);
  background-image: -moz-linear-gradient(hsla(0,0%,100%,.05), hsla(0,0%,100%,0));
  background-clip: padding-box;
  border: 1px solid hsla(0,0%,0%,.35);
  border-color: hsla(0,0%,0%,.32) hsla(0,0%,0%,.38) hsla(0,0%,0%,.42);
  box-shadow: 0 1px 0 hsla(0,0%,0%,.05) inset,
              0 1px 0 hsla(0,0%,100%,.05);
  color: hsl(0,0%,95%);
  font-size: 12px;
  line-height: 14px;
  outline-style: none;
  -moz-transition-property: background-color, border-color, box-shadow;
  -moz-transition-duration: 150ms;
  -moz-transition-timing-function: ease;
}

.toolbarField.pageNumber::-webkit-inner-spin-button,
.toolbarField.pageNumber::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

.toolbarField:hover {
  background-color: hsla(0,0%,100%,.11);
  border-color: hsla(0,0%,0%,.4) hsla(0,0%,0%,.43) hsla(0,0%,0%,.45);
}

.toolbarField:focus {
  background-color: hsla(0,0%,100%,.15);
  border-color: hsla(204,100%,65%,.8) hsla(204,100%,65%,.85) hsla(204,100%,65%,.9);
}

.toolbarLabel {
  min-width: 16px;
  padding: 3px 6px 3px 2px;
  margin: 4px 2px 4px 0;
  border: 1px solid transparent;
  border-radius: 2px;
  color: hsl(0,0%,85%);
  font-size: 12px;
  line-height: 14px;
  text-align: left;
  -webkit-user-select:none;
  -moz-user-select:none;
  cursor: default;
}

#canvasContainer {
    overflow: auto;

    padding-top: 6px;
    padding-bottom: 6px;
    position: absolute;
    top: 32px;
    right: 0;
    bottom: 32px;
    left: 0;

    text-align: center;
    
    background-color: #888;
    background-image: url(images/texture.png);
}

#canvasContainer.slideshow {
    padding: 0;
    overflow: hidden;
}

#canvasContainer.slideshow > * {
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

.presentationMode {
    top: 0 !important;
    bottom: 0 !important;
    background-color: black !important;
    cursor: default !important;
}

#canvas {
    box-shadow:         0px 0px 7px rgba(0, 0, 0, 0.75);
    -webkit-box-shadow: 0px 0px 7px rgba(0, 0, 0, 0.75);
    -moz-box-shadow:    0px 0px 7px rgba(0, 0, 0, 0.75);
    -ms-box-shadow:    0px 0px 7px rgba(0, 0, 0, 0.75);
    -o-box-shadow:    0px 0px 7px rgba(0, 0, 0, 0.75);

    /*
     * Hide the canvas overflow because otherwise the CSS-scaled 'sizer' child
     * of the canvas will still advertise the original size in Firefox, causing
     * strange scrollbar behavior.
     */
    overflow: hidden;
}

#sliderContainer {
    visibility: hidden;
}

#overlayNavigator {
    position: absolute;
    width: 100%;
    height: 0;
    top: calc(50% - 50px);
    background-color: rgba(0, 0, 0, 0);
    z-index: 3;
    opacity: 0;
    -webkit-transition: opacity 1s ease-out;
    -moz-transition: opacity 1s ease-out;
    transition: opacity 1s ease-out;
}
#previousPage {
    float: left;
    margin-left: 10px;
 
    /* CSS triangle */
    border-top: 50px solid transparent;
    border-bottom: 50px solid transparent; 
    border-right: 50px solid black;

    opacity: 0.5;
}
#nextPage {
    float: right;
    margin-right: 10px;
 
    /* CSS triangle */
    border-top: 50px solid transparent;
    border-bottom: 50px solid transparent; 
    border-left: 50px solid black;

    opacity: 0.5;
}
#previousPage:active {
    opacity: 0.8;
}
#nextPage:active {
    opacity: 0.8;
}
#overlayCloseButton {
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 3;
    font-size: 35px;
    color: white;
    background-color: black;
    opacity: 0.5;

    width: 40px;
    height: 40px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    text-align: center;
    cursor: pointer;
    display: none;
}
#overlayCloseButton:active {
    background-color: red;
}

#aboutDialogCentererTable {
    display: table;
    width:100%;
    height:100%;
}

#aboutDialogCentererCell {
    vertical-align: middle;
    text-align:center;
    display: table-cell;
}

#aboutDialog {
    width: 280px;
    background-color: #666;
    color: white;
    text-align: center;
    border-radius: 2px;
    box-shadow: 0px 1px 6px black;
    padding: 5px;
    font-style: sans-serif;
    display: inline-block;
}

#aboutDialog h1 {
    font-size: 25pt;
}

#aboutDialog p {
    font-size: 10pt;
}

#aboutDialog > * {
    margin: 10px;
}

#dialogOverlay {
    position: absolute;
    left: 0px;
    top: 0px;
    width:100%;
    height:100%;
    z-index: 3;
    background-color: rgba(0,0,0,.5);
    overflow: auto;
    display: none;
}

#blanked {
    display: none;
    cursor: none;
    position: absolute;
    left: 0px;
    top: 0px;
    width:100%;
    height:100%;
    z-index: 3;
}

@media only screen and (max-device-width: 800px) and (max-device-height: 800px) {
    #canvasContainer {
        top: 0;
        bottom: 0;
    }

    #overlayNavigator {
        height: 100px;
        pointer-events: none;
    }
    #nextPage, #previousPage {
        pointer-events: all;
    }

    #titlebar, #toolbarContainer {
        background-color: rgba(0, 0, 0, 0.6);
        background-image: none;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        transition: all 0.5s;
    }

    #titlebar {
        top: -32px;
    }
    #titlebar.viewer-touched {
        top: 0px;
    }
    #toolbarContainer {
        bottom: -32px;
    }
    #toolbarContainer.viewer-touched {
        bottom: 0px;
    }

    .viewer-touched {
        display: block;
        opacity: 1 !important;
    }

    #next, #previous {
        display: none;
    }
}
", "@MwebAdmin/filemanager/js/ViewerJS/viewer.css", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/js/ViewerJS/viewer.css");
    }
}
