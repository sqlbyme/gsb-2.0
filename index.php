<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html dir="ltr" lang="en-US">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Effortless Music Discovery" />
<meta name="keywords" content="songbird, songbird for Android, Android music player, songbird.me " />
<meta name="robots" content="index,follow" />
<meta name="googlebot" content="index,follow" />
<meta name="revisit-after" content="7 days" />

<title>Songbird</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="js/nyroModal/styles/nyroModal.css" type="text/css" media="screen" />
<style>
#slides { 
  width:475px;
  height:500px; 
}
#slides img, #slides a img, #slides a {
  position:relative;
  background:none !important;
  z-index:0 !important;
}
</style>
<meta name="viewport" content="width=1230">
<!-- jQuery (required) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/nyroModal/js/jquery.nyroModal.custom.js"></script>
<!--[if IE 6]>
	<script type="text/javascript" src="js/nyroModal/js/jquery.nyroModal-ie6.min.js"></script>
<![endif]-->
<!-- include Cycle plugin -->
<script type="text/javascript" src="js/jquery.li-scroller.1.0.js"></script>
<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
<script type="text/javascript">
$(function() {
  
  $('#slides img:first').fadeIn(1000, function() {
    $('#slides').cycle({
	    autostop: 0,
	    pause: 1
	  });
	});
});



$(function(){
    $("ul#ticker01").liScroll();
});
jQuery(function(){
  jQuery('.nyroModal').nyroModal();
  $('#nyroModalFull').css('zIndex',9999);
});
</script>
</head>

<body>
<div id="logo"><a href="./index.php" onClick="recordOutboundLink(this, 'Logo Clicked', 'Link Location: Home Page');"><span>Songbird</span></a></div>
<div id="promo_box"><a href="promotions/leadtheflock/enter/" onClick="recordOutboundLink(this, 'Promotion Clicked', 'Link Location: Home Page Ticker');"></a></div>
<div id="wrapper">
  <div id="main-content">
    <div id="rotator">
      <div id="slides">
        <img src="images/slides/1.png" border="0" style="display: none;">
        <img src="images/slides/2.png" border="0" style="display: none;">
        <img src="images/slides/3.png" border="0" style="display: none;">
        <img src="images/slides/4.png" border="0" style="display: none;">
      </div>
    </div><!--rotator -->
    <div id="bottom-content">
      <div id="video"><a href="video.php" class="nyroModal"><img src="images/video.jpg" width="178" height="100" alt="video" border="0" /></a></div>
        <div id="experience">
          <a href="/products/" class="button" onClick="recordOutboundLink(this, 'Learn More Clicked', 'Link Location: Home Page');"></a>
          <div id="product">
            <a href="http://www.songbird.me/" class="web" target="_blank" onClick="recordOutboundLink(this, 'Web Icon Clicked', 'Link Location: Home Page'); " ></a>
            <a href="/mobile/" class="mobile" onClick="recordOutboundLink(this, 'Mobile Icon Clicked', 'Link Location: Home Page');"></a>
            <a href="/desktop/" class="desktop" onClick="recordOutboundLink(this, 'Desktop Icon Clicked', 'Link Location: Home Page');"></a>
          </div>
      </div>
    </div><!--bottom-content -->
  </div><!--main-content -->
<div class="clearfix"></div>
</div><!--wrapper -->

<div class="clearfix"></div>

<!-- <ul id="ticker01">
  <li>
    <strong>Songbird</strong> is giving away <strong>$1500</strong> to see your favorite music live! <a class="pink" href="promotions/leadtheflock/enter/" onClick="recordOutboundLink(this, 'Promotion Clicked', 'Link Location: Home Page Ticker');">Click here</a> for info!</p></span>
  </li>
</ul>    -->

<div style="clear:both;"></div>

<?php include('includes/footer.php'); ?>

<div class="clearfix"></div>

<!-- include Google Analytics Tracking Code -->
<?php include('includes/ga.php'); ?>
<!-- End GA Include -->
</body>
</html>
