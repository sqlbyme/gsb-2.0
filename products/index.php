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
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
<meta name="viewport" content="width=1000">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
  $(function() {
    $("#mac").hide();
    $("#pc").hide();
    $("#mac_toggle").click(function () {
      $("#mac_toggle").css("color","#e6317e");
      $("#pc_toggle").css("color","#666666");
      $("#mac").show("fast");
      $("#pc").hide("fast");
    });
    $("#pc_toggle").click(function () {
      $("#pc_toggle").css("color","#e6317e");
      $("#mac_toggle").css("color","#666666");
      $("#pc").show("fast");
      $("#mac").hide("fast");
    });
  });
</script>
<style>
.requirements {	
  position:absolute;
}
#mac, #pc {
  margin:24px 0 0 0;
  position:absolute;
  clear:both;
}
#pc li, #mac li {
  background:url(../images/pink_bullet.gif) no-repeat bottom left;
  list-style:none;
  padding:0 0 0 15px;
}
a#mac_toggle, a#pc_toggle {
  color:#666666;
  text-decoration:none;
}
a:hover#mac_toggle, a:hover#pc_toggle {
  color:#e6317e;
}
</style>
</head>

<body class="sub">
<div id="container">
  <div id="header">
    <a href="/" id="logo"></a>
    <a href="http://www.songbird.me/" id="web_active" target="_blank" ></a>
    <a href="/mobile/" id="mobile_active"></a>
    <a href="/desktop/" id="desktop_active"></a>
  </div>
  <div id="content">
    <h1>Songbird. Effortless Music Discovery.</h1>
        Make the most out of your music experiences with Songbird.me. 
        <br />
        Get the latest videos, images, new releases and more directly from the artists you love. Receive your own personalized artist recommendations from over 2 million artists. See what music your friends are into and share music content with them easily.
        
        <div class="clearfix"></div>
        
        <div id="left_column">
          <img src="../images/screenshots/info_1.jpeg" width="600" height="427" border="0">
        </div>
        
        <div id="sidebar">
          Keep me up to date with SONGBIRD news, software updates, and the latest information on products and services.
            <input type="text" name="email"  value="Email Address" size="24" onFocus="this.value=''" style="padding:10px; color:#999999; font-size:15px; font-family:Helvetica, Arial, sans-serif; border:1px solid #999999; width:288px; margin-top:20px;">
            <a href="http://market.android.com/details?id=com.songbirdnest.mediaplayer" id="free_android" target="_blank" ></a>
            <a href="http://www.songbird.me" id="web_app" target="_blank" ></a>
            
            <div class="clearfix" style="height:20px"></div>
            
            
            
        </div><!--sidebar -->
        
        <div class="clearfix"></div>
        
       <div class="three_column" style="margin:40px 10px 0 0;">
        	<h1>Fresh Artist Content</h1>
            <img src="../images/screenshots/info_2.jpeg" width="310" height="170" style="margin:10px 0" border="0">
            Automatically receive updates from <i>your</i> favorites; songs, videos, posts. Delivered to you to save you time & effort of searching.
        </div>
        <div class="three_column" style="margin:40px 10px 0 0;">
        	<h1>Personal Recommendations</h1>
            <img src="../images/screenshots/info_3.jpeg" width="310" height="170" style="margin:10px 0" border="0">
            Based on music and artists you love, Songbird suggestions are tailor made for <i>you</i>. The more artists you follow, the better your experience! 
        </div>
        <div class="three_column" style="margin:40px 0px 0 0;">
        	<h1>See Your Friends Music</h1>
            <img src="../images/screenshots/info_4.jpeg" width="310" height="170" style="margin:10px 0" border="0">
            Discover and follow new artists; on-click sharing with your friends. 
        </div>
 
        
        <div class="clearfix"></div>
        
    </div><!--content -->
<div class="clearfix"></div>

  <?php include('../includes/footer.php'); ?>

<div class="clearfix"></div>
</div><!--container -->

<!-- include Google Analytics Tracking Code -->
<?php include('../includes/ga.php'); ?>
<!-- End GA Include -->
</body>
</html>
