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
  background:url(images/pink_bullet.gif) no-repeat bottom left;
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
    <a href="index.php" id="logo"></a>
    <a href="http://www.songbird.me/" id="web_active"></a>
    <a href="mobile.php" id="mobile_active"></a>
    <a href="desktop.php" id="desktop_active"></a>
  </div>
  <div id="content">
    <h1>Get SONGBIRD &amp; Get Going.</h1>
        Download Songbird for your Mac or PC. Manage your music and videos, build playlists, browse, search, and sort. Then sync your music to your portable music player or phone. Songbird makes it simple.
        
        <div class="clearfix"></div>
        
        <div id="left_column">
          <img src="images/screenshots/desktop_1.jpg" width="600" height="427" border="0">
        </div>
        
        <div id="sidebar">
          Keep me up to date with SONGBIRD news, software updates, and the latest information on products and services.
            <input type="text" name="email"  value="Email Address" size="24" onFocus="this.value=''" style="padding:10px; color:#999999; font-size:15px; font-family:Arial, Helvetica, sans-serif; border:1px solid #999999; width:288px; margin-top:20px;">
            <a href="http://market.android.com/details?id=com.songbirdnest.mediaplayer" id="free_android"></a>
            <a href="http://www.songbird.me" id="web_app"></a>
            
            <div class="clearfix" style="height:20px"></div>
            
            
            
        </div><!--sidebar -->
        
        <div class="clearfix"></div>
        
 
        
        <div class="clearfix"></div>
        
    </div><!--content -->
<div class="clearfix"></div>

  <?php include('includes/footer.php'); ?>

<div class="clearfix"></div>
</div><!--container -->

<!-- include Google Analytics Tracking Code -->
<?php include('includes/ga.php'); ?>
<!-- End GA Include -->
</body>
</html>
