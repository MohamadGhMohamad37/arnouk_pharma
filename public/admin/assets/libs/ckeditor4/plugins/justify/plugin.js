/*
 Copyright (c) 2003-2023, CKSource Holding sp. z o.o. All rights reserved.
 CKEditor 4 LTS ("Long Term Support") is available under the terms of the Extended Support Model.
*/
(function(){function p(a,c){var b;if(c)b=a.getComputedStyle("text-align");else{for(;!a.hasAttribute||!a.hasAttribute("align")&&!a.getStyle("text-align");){b=a.getParent();if(!b)break;a=b}b=a.getStyle("text-align")||a.getAttribute("align")||""}b&&(b=b.replace(/(?:-(?:moz|webkit)-)?(?:start|auto)/i,""));!b&&c&&(b="rtl"==a.getComputedStyle("direction")?"right":"left");return b}function h(a,c,b){this.editor=a;this.name=c;this.value=b;this.context="p";c=a.config.justifyClasses;var f=a.config.enterMode==
CKEDITOR.ENTER_P?"p":"div";if(c){switch(b){case "left":this.cssClassName=c[0];break;case "center":this.cssClassName=c[1];break;case "right":this.cssClassName=c[2];break;case "justify":this.cssClassName=c[3]}this.cssClassRegex=new RegExp("(?:^|\\s+)(?:"+c.join("|")+")(?\x3d$|\\s)");this.requiredContent=f+"("+this.cssClassName+")"}else this.requiredContent=f+"{text-align}";this.allowedContent={"caption div h1 h2 h3 h4 h5 h6 p pre td th li":{propertiesOnly:!0,styles:this.cssClassName?null:"text-align",
classes:this.cssClassName||null}};a.config.enterMode==CKEDITOR.ENTER_BR&&(this.allowedContent.div=!0)}function l(a){var c=a.editor,b=c.createRange();b.setStartBefore(a.data.node);b.setEndAfter(a.data.node);for(var f=new CKEDITOR.dom.walker(b),d;d=f.next();)if(d.type==CKEDITOR.NODE_ELEMENT)if(!d.equals(a.data.node)&&d.getDirection())b.setStartAfter(d),f=new CKEDITOR.dom.walker(b);else{var e=c.config.justifyClasses;e&&(d.hasClass(e[0])?(d.removeClass(e[0]),d.addClass(e[2])):d.hasClass(e[2])&&(d.removeClass(e[2]),
d.addClass(e[0])));e=d.getStyle("text-align");"left"==e?d.setStyle("text-align","right"):"right"==e&&d.setStyle("text-align","left")}}h.prototype={exec:function(a){var c=a.getSelection(),b=a.config.enterMode;if(c){for(var f=c.createBookmarks(),d=c.getRanges(),e=this.cssClassName,h,g,l=a.config.useComputedState,m=d.length-1;0<=m;m--)for(h=d[m].createIterator(),h.enlargeBr=b!=CKEDITOR.ENTER_BR;g=h.getNextParagraph(b==CKEDITOR.ENTER_P?"p":"div");)if(!g.isReadOnly()){var k=g.getName(),n;n=a.activeFilter.check(k+
"{text-align}");if((k=a.activeFilter.check(k+"("+e+")"))||n){g.removeAttribute("align");g.removeStyle("text-align");var r=e&&(g.$.className=CKEDITOR.tools.ltrim(g.$.className.replace(this.cssClassRegex,""))),q=this.state==CKEDITOR.TRISTATE_OFF&&(!l||p(g,!0)!=this.value);e&&k?q?g.addClass(e):r||g.removeAttribute("class"):q&&n&&g.setStyle("text-align",this.value)}}a.focus();a.forceNextSelectionCheck();c.selectBookmarks(f)}},refresh:function(a,c){var b=c.block||c.blockLimit,f=b.getName(),d=b.equals(a.editable()),
f=this.cssClassName?a.activeFilter.check(f+"("+this.cssClassName+")"):a.activeFilter.check(f+"{text-align}");d&&!CKEDITOR.dtd.$list[c.lastElement.getName()]?this.setState(CKEDITOR.TRISTATE_OFF):!d&&f?this.setState(p(b,this.editor.config.useComputedState)==this.value?CKEDITOR.TRISTATE_ON:CKEDITOR.TRISTATE_OFF):this.setState(CKEDITOR.TRISTATE_DISABLED)}};CKEDITOR.plugins.add("justify",{icons:"justifyblock,justifycenter,justifyleft,justifyright",hidpi:!0,init:function(a){if(!a.blockless){var c=new h(a,
"justifyleft","left"),b=new h(a,"justifycenter","center"),f=new h(a,"justifyright","right"),d=new h(a,"justifyblock","justify");a.addCommand("justifyleft",c);a.addCommand("justifycenter",b);a.addCommand("justifyright",f);a.addCommand("justifyblock",d);a.ui.addButton&&(a.ui.addButton("JustifyLeft",{isToggle:!0,label:a.lang.common.alignLeft,command:"justifyleft",toolbar:"align,10"}),a.ui.addButton("JustifyCenter",{isToggle:!0,label:a.lang.common.center,command:"justifycenter",toolbar:"align,20"}),a.ui.addButton("JustifyRight",
{isToggle:!0,label:a.lang.common.alignRight,command:"justifyright",toolbar:"align,30"}),a.ui.addButton("JustifyBlock",{isToggle:!0,label:a.lang.common.justify,command:"justifyblock",toolbar:"align,40"}));a.on("dirChanged",l)}}})})();