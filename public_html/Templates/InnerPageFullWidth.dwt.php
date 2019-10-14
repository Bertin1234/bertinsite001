<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- TemplateEndEditable -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="../fonts/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="../css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="../respond.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Styles/dmxNavigationMenu.css" />
<script type="text/javascript" src="../ScriptLibrary/jquery-latest.pack.js"></script>
<script type="text/javascript" src="../ScriptLibrary/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../ScriptLibrary/dmxNavigationMenu.js"></script>
<!--[if lt IE 7]><script type="text/javascript" src="Styles/IE7.js"></script><![endif]-->
<link href="../css/style.css" rel="stylesheet" type="text/css">
<!--[if lt IE 7]><script type="text/javascript" src="../Styles/IE7.js"></script><![endif]-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="../ScriptLibrary/dmxGoogleMaps.js"></script>
<script type="text/javascript" src="../ScriptLibrary/dmxGoogleMaps2/extensions/drawing/drawing.js"></script>
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>
<body>
<div class="header">
  <div class="gridContainer clearfix" id="header-inner">
    <div id="logo">
      <h2>Responsive Design</h2>
    </div>
    <div id="navigation">
      <div id="navmenu1" class="dmxNavigationMenu">
  <ul class="menu horizontal">
    <li title="Home"><a href="index.html">Home</a></li>
    <li title="Features"><a href="javascript:void(0);" class="expandable">Features<span class="sub_down"></span></a>
      <ul class="sub">
        <li title="Sub item 1"><a href="javascript:void(0);">Sub item 1</a></li>
        <li title="Sub item 2"><a href="javascript:void(0);">Sub item 2</a></li>
      </ul>
    </li>
    <li title="Inner Page"><a href="InnerWithSidebar.html">Inner Page</a></li>
    <li title="Contact"><a href="InnerFullWidth.html">Contact</a></li>
  </ul>
  <div style="height:0;font-size:0;clear:both;"></div>
</div>
<script type="text/javascript">
  // <![CDATA[
 jQuery(document).ready(
   function()
     {
       jQuery("#navmenu1").dmxNavigationMenu(
         {"mainShowDuration": "normal", "mainShowEasing": "swing", "mainHideDuration": "normal", "mainHideEasing": "swing", "subShowDuration": "normal", "subShowEasing": "swing", "subHideDuration": "normal", "subHideEasing": "swing", "useMenuBarSearch": false, "keyboard": true}
       );
     }
 );
  // ]]>
</script>
    </div>
  </div>
</div>
<!-- End of Header --> 


<div class="gridContainer clearfix" id="content-wrap">
  <div id="PageTitle"><h1><!-- TemplateBeginEditable name="PageTitle" -->This is an inner page title.<!-- TemplateEndEditable -->
</h1></div>
  <div class="clearfix"></div>
  <hr>
  <div id="PageSubTitle"><h2><!-- TemplateBeginEditable name="PageSubTitle" -->This is a subtitle<!-- TemplateEndEditable --></h2>
  </div>
  <div id="FullWidthContent"><!-- TemplateBeginEditable name="FullWidthContent" -->
    <div class="dmxGoogleMaps" id="map1" style="width:100%;height:600px">
</div>
<script type="text/javascript">
  // <![CDATA[
 jQuery(document).ready(
   function()
     {
       jQuery("#map1").dmxGoogleMaps(
         {"drawing": [{"type": "polygon", "options": {"fillColor": "#1E90FF", "fillOpacity": 0.45, "strokeColor": "#1E90FF", "strokeOpacity": 1, "strokeWeight": 2, "paths": [[{"lat": 40.68207662481152, "lng": -74.00871968203126}, {"lat": 40.666453506945466, "lng": -73.994986771875}, {"lat": 40.64040684237453, "lng": -74.02382588320313}, {"lat": 40.64249094971443, "lng": -74.03618550234376}, {"lat": 40.62268930283699, "lng": -74.04167866640626}, {"lat": 40.61017997401522, "lng": -74.03481221132813}, {"lat": 40.60079644034905, "lng": -74.01009297304688}, {"lat": 40.5924544155695, "lng": -73.99636006289063}, {"lat": 40.58515429005574, "lng": -73.97988057070313}, {"lat": 40.58515429005574, "lng": -73.94280171328126}, {"lat": 40.58515429005574, "lng": -73.91533589296876}, {"lat": 40.5997537441752, "lng": -73.90022969179688}, {"lat": 40.62060457735659, "lng": -73.8906166546875}, {"lat": 40.644574991983056, "lng": -73.87276387148438}, {"lat": 40.65916146580796, "lng": -73.85216450625}, {"lat": 40.66749516202914, "lng": -73.80409932070313}, {"lat": 40.692490002835996, "lng": -73.80547261171876}, {"lat": 40.72580187719759, "lng": -73.83156514101563}, {"lat": 40.75389580827779, "lng": -73.84804463320313}, {"lat": 40.76949842050234, "lng": -73.8741371625}, {"lat": 40.76949842050234, "lng": -73.907096146875}, {"lat": 40.77885822975594, "lng": -73.92769551210938}, {"lat": 40.79029620587052, "lng": -73.929068803125}, {"lat": 40.74661333586299, "lng": -73.96889424257813}, {"lat": 40.70810701881904, "lng": -73.99841999941407}, {"lat": 40.70342229847135, "lng": -74.01455616884766}]]}}], "width": "100%", "height": 600, "zoom": 11, "markers": [{"address": "New York, US"}], "extensions": ["drawing"]}
       );
     }
 );
  // ]]>
</script>
  <!-- TemplateEndEditable --></div>
</div>
 

<!-- Footer -->
<div id="footer">
  <div class="gridContainer clearfix" id="footer-inner">
    <div id="footer-left">
    <i style="margin-left:0;" class="icon-home"></i> 123 Street. New York, NY, 123456. USA
     <i class="icon-phone"></i> (555) 123-456-7890
     <a href="mailto:#"><i class="icon-envelope"></i> contact@yourdomain.com</a>
    </div>
    <div style="font-size:24px;" id="footer-right"><i class="icon-facebook-sign"></i> <i class="icon-twitter"></i> <i class="icon-google-plus"></i> <i class="icon-linkedin"></i></div>
  </div>
</div>
<div id="footer-bottom">
  <div class="gridContainer clearfix">
  Copyright Information © 2012
  </div>
  </div>
<!-- End of footer -->

</body>
</html>
