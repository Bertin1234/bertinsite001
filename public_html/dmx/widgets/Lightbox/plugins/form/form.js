/*
 DMXzone Lightbox
 Version: 1.1.0
 (c) 2013 DMXzone.com
 @build 15-07-2013 13:46:22
*/
DMX.Lightbox.plugins.form={canHandleContent:function(a){return(a=DMX.Lightbox.instance)&&a.current&&a.current.tagName&&"FORM"==a.current.tagName.toUpperCase()?50:0},invoke:function(a){var b=DMX.Lightbox.instance,c=b.Viewer.jQuery,d=b.Viewer,e=c('<iframe marginwidth="0" marginheight="0" src="javascript:void(0);" frameborder="0" hspace="0" vspace="0" scrolling="Auto" name="dmxLightbox" class="content" align="absmiddle" width="1" height="1" onload="frameLoaded(this);" allowTransparency="false"></iframe>').css({display:"block",
backgroundColor:"transparent",height:"100%",width:"100%",top:"-2000px",left:"-2000px"}).width("100%").height("100%").prependTo("body");c("body, html").css({overflow:"hidden"});b.setMetaData({title:a.title||a.src,width:a.width||1200,height:a.height||800,keepAspect:!1});d.showContent(e,!jQuery.browser.msie,!0,b.metaData.width||1200,b.metaData.height||800,b.metaData.title||" ",b.metaData.status||null);b.errorMessage='The content at "'+a.src+'" could not be loaded for '+a.contentLoadTimeout+" seconds.";
b.runCommand("showProgress")}};
