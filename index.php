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
		autostop: 1,
		end: function() {
			$('#replay').click(function () {
					$('#slides img:first').fadeIn(1000, function() {
						$('#slides').cycle({
								autostop: 1
						});//end #slides
					});	//end img:first
			});//end #replay
			}//end end
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
<div id="wrapper">
	<div id="logo"><a href="http://nextstep-esolutions.com/Clients/songbird/"><span>Songbird</span></a></div>
	<div id="main-content">
        <div id="rotator">
            <div id="slides">
                <img src="images/slides/1.png" border="0" style="margin-left:24px">
                <img src="images/slides/2.png" border="0" style="display:none">
                <img src="images/slides/3.png" border="0" style="margin-left:20px; display:none">
                <a href="#" id="replay" style="display:none; position:relative; z-index:0"><img src="images/slides/4.png" border="0" style="margin-left:24px; margin-top:185px; position:relative; z-index:0"></a>
            </div>
        </div><!--rotator -->
		<div id="bottom-content">
			<div id="video"><a href="video.php" class="nyroModal"><img src="images/video.jpg" width="178" height="100" alt="video" border="0" /></a></div>
			<div id="experience">
            	<a href="http://www.songbird.me/" class="button"><span>Experience Song Bird Now</span></a>
				<p>Also free for <a href="desktop.php" class="pink">Desktop</a> &amp; <a href="mobile.php" class="pink">Mobile</a></p>
			</div>
		</div><!--bottom-content -->
	</div><!--main-content -->
	<div class="clearfix"></div>
</div><!--wrapper -->

<div class="clearfix"></div>

<ul id="ticker01">
	<li>
    	<strong>Join in</strong> our "Lead the Flock" contest with <strong>big music prizes</strong> for playing. <a class="pink" href="#">Click here</a> for info!</p></span>
	</li>
</ul>    

<div style="clear:both;"></div>

<div id="footer">
	<div id="footer-content">
		<p>2012 &copy; SONGBIRD All Rights Reserved &nbsp;&nbsp; | &nbsp;</p>
        	<ul>
                <li><a href="#">Help</a></li>
                <li><a href="#">Partners</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="overview.php">About</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms of Use</a></li>
            </ul> 
		<a class="facebook" href="http://www.facebook.com/Songbird?ref=search&sid=648331437.2719007091..1" target="_blank"></a><a class="twitter" href="https://twitter.com/#!/songbird" target="_blank"></a>
	</div><!--footer-content -->
	<div class="clearfix"></div>
</div><!--footer -->

<div class="clearfix"></div>
</body>
</html>
