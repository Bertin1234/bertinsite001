<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="fonts/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
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
<script type="text/javascript" src="ScriptLibrary/jquery-latest.pack.js"></script>
<script src="respond.min.js"></script>
<link rel="stylesheet" type="text/css" href="Styles/dmxNavigationMenu.css">
<script type="text/javascript" src="ScriptLibrary/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="ScriptLibrary/dmxNavigationMenu.js"></script>
<!--[if lt IE 7]><script type="text/javascript" src="Styles/IE7.js"></script><![endif]-->
<link href="css/style.css" rel="stylesheet" type="text/css">
<!--[if lt IE 7]><script type="text/javascript" src="../Styles/IE7.js"></script><![endif]-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="ScriptLibrary/dmxGoogleMaps.js"></script>
<script type="text/javascript" src="ScriptLibrary/dmxGoogleMaps2/extensions/drawing/drawing.js"></script>
</head>
<body>
<div class="header">
  <div class="gridContainer clearfix" id="header-inner">
    <div id="logo"><img src="lyslogo_2.jpg" width="38" height="55">
      <h2>Lys Designs</h2>
      <br class="clearfix">
    </div>
    <div id="navigation">
      <div id="navmenu1" class="dmxNavigationMenu">
  <ul class="menu horizontal">
    <li title="Home"><a href="Home.php">Home</a></li>
    <li title="Portfolio"><a href="portfolio.php" class="expandable">Portfolio<span class="sub_down"></span></a>
      <ul class="sub">
        <li title="Sub item 1"><a href="javascript:void(0);">Sub item 1</a></li>
        <li title="Sub item 2"><a href="javascript:void(0);">Sub item 2</a></li>
      </ul>
    </li>
    <li title="Resume/CV"><a href="InnerWithSidebar.html">Resume/CV</a></li>
    <li title="Contact"><a href="Contact.php">Contact</a></li>
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
  <div id="PageTitle"><h1>Portfolio</h1></div>
  <div class="clearfix"></div>
  <hr>
  <div id="PageSubTitle"><h2>This is a subtitle</h2>
  </div>
  <div id="FullWidthContent">
   <div id="ImageBox1" class="imagebox">
    <div class="thumbnail"> 
      <!-- image --> 
      <a title="" href="#"> <img src="http://placehold.it/350x190/ff0000/fff&text=Image+1" alt=""> </a> 
      <!-- description -->
      <div class="thumbnail-description"> 
        <!-- icon --> 
        <i class="icon-chevron-right"></i> 
        <!-- name --> 
        <b class="thumbnail-name">Lorem ipsum</b> </div>
    </div>
  </div>
  <div id="ImageBox2" class="imagebox">
    <div class="thumbnail"> 
      <!-- image --> 
      <a title="" href="#"> <img src="http://placehold.it/350x190/ff0000/fff&text=Image+2" alt=""> </a> 
      <!-- description -->
      <div class="thumbnail-description"> 
        <!-- icon --> 
        <i class="icon-chevron-right"></i> 
        <!-- name --> 
        <b class="thumbnail-name">Dolor sit amet</b> </div>
    </div>
  </div>
  <div id="ImageBox3" class="imagebox">
    <div class="thumbnail"> 
      <!-- image --> 
      <a title="" href="#"> <img src="http://placehold.it/350x190/ff0000/fff&text=Image+3" alt=""> </a> 
      <!-- description -->
      <div class="thumbnail-description"> 
        <!-- icon --> 
        <i class="icon-chevron-right"></i> 
        <!-- name --> 
        <b class="thumbnail-name">Consectetur adip</b></div>
    </div>
  </div>
  <div id="ImageBox4" class="imagebox">
    <div class="thumbnail"> 
      <!-- image --> 
      <a title="" href="#"> <img src="http://placehold.it/350x190/ff0000/fff&text=Image+4" alt=""> </a> 
      <!-- description -->
      <div class="thumbnail-description"> 
        <!-- icon --> 
        <i class="icon-chevron-right"></i> 
        <!-- name --> 
        <b class="thumbnail-name">Donec ac nibh </b> </div>
    </div>
  </div>
  <div id="ImageBox5" class="imagebox">
    <div class="thumbnail"> 
      <!-- image --> 
      <a title="" href="#"> <img src="http://placehold.it/350x190/ff0000/fff&text=Image+5" alt=""> </a> 
      <!-- description -->
      <div class="thumbnail-description"> 
        <!-- icon --> 
        <i class="icon-chevron-right"></i> 
        <!-- name --> 
        <b class="thumbnail-name">Elementum ante</b> </div>
    </div>
  </div>
  <div id="ImageBox1" class="imagebox">
    <div class="thumbnail"> 
      <!-- image --> 
      <a title="" href="#"> <img src="http://placehold.it/350x190/ff0000/fff&text=Image+6" alt=""> </a> 
      <!-- description -->
      <div class="thumbnail-description"> 
        <!-- icon --> 
        <i class="icon-chevron-right"></i> 
        <!-- name --> 
        <b class="thumbnail-name">Lorem ipsum</b> </div>
    </div>
  </div>
  <div id="ImageBox2" class="imagebox">
    <div class="thumbnail"> 
      <!-- image --> 
      <a title="" href="#"> <img src="http://placehold.it/350x190/ff0000/fff&text=Image+7" alt=""> </a> 
      <!-- description -->
      <div class="thumbnail-description"> 
        <!-- icon --> 
        <i class="icon-chevron-right"></i> 
        <!-- name --> 
        <b class="thumbnail-name">Dolor sit amet</b> </div>
    </div>
  </div>
  <div id="ImageBox3" class="imagebox">
    <div class="thumbnail"> 
      <!-- image --> 
      <a title="" href="#"> <img src="http://placehold.it/350x190/ff0000/fff&text=Image+8" alt=""> </a> 
      <!-- description -->
      <div class="thumbnail-description"> 
        <!-- icon --> 
        <i class="icon-chevron-right"></i> 
        <!-- name --> 
        <b class="thumbnail-name">Consectetur adip</b></div>
    </div>
  </div>
  <div id="ImageBox4" class="imagebox">
    <div class="thumbnail"> 
      <!-- image --> 
      <a title="" href="#"> <img src="http://placehold.it/350x190/ff0000/fff&text=Image+9" alt=""> </a> 
      <!-- description -->
      <div class="thumbnail-description"> 
        <!-- icon --> 
        <i class="icon-chevron-right"></i> 
        <!-- name --> 
        <b class="thumbnail-name">Donec ac nibh </b> </div>
    </div>
  </div>
  <div id="ImageBox5" class="imagebox">
    <div class="thumbnail"> 
      <!-- image --> 
      <a title="" href="#"> <img src="http://placehold.it/350x190/ff0000/fff&text=Image+10" alt=""> </a> 
      <!-- description -->
      <div class="thumbnail-description"> 
        <!-- icon --> 
        <i class="icon-chevron-right"></i> 
        <!-- name --> 
        <b class="thumbnail-name">Elementum ante</b> </div>
    </div>
  </div>
  
  </div>
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
  Copyright Information � 2012
  </div>
  </div>
<!-- End of footer -->

</body>
</html>
