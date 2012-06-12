<?php include("../includes/download.php"); ?>
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
	<!-- Start Tracking Action -->
	<script type="text/javascript">
  function captureEmail () {
    var emailElement = document.getElementById("email_addr");
    var optInChecked = document.getElementById("email_optin");
    if ( emailElement.value.length > 0 && optInChecked.checked == true && emailElement.disabled != true) {
      $.get(
	    "../lib/mailchimp/subscribe.php" ,
	    { email_addr : emailElement.value, list_id : "c8c47a06ad" }
	  );
	  emailElement.value = "Thank You!";
	  emailElement.disabled = true;
    };
	 setTimeout('getSongbird()', 1500);
  };
	  function getSongbird () {
		   window.location = "<?php echo(get_dl($dl_platform, $dl_arch)); ?>";
	  };
	</script>
	<!-- End Tracking Action -->
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
    <a href="http://www.songbird.me/" id="web" target="_blank" ></a>
    <a href="/mobile/" id="mobile"></a>
    <div id="desktop_active"></div>
  </div>
  <div id="content">
    <h1>Get SONGBIRD &amp; Get Going.</h1>
        Download Songbird for your Mac or PC. Manage your music and videos, build playlists, browse, search, and sort. Then sync your music to your portable music player or phone. Songbird makes it simple.
        
        <div class="clearfix"></div>
        
        <div id="left_column">
          <img src="../images/screenshots/desktop_1.jpg" width="600" height="427" border="0">
        </div>
        
        <div id="sidebar">
          <input type="checkbox" id="email_optin" name="email_optin" checked="true">Keep me up to date with SONGBIRD news, software updates, and the latest information on products and services.</input>
            
            <input type="text" name="email_addr"  id="email_addr" value="Email Address" size="24" onFocus="this.value=''" style="padding:10px; color:#999999; font-size:15px; font-family:Arial, Helvetica, sans-serif; border:1px solid #999999; width:288px; margin-top:20px;"></input>
            <a href="javascript:void(0);" onclick="recordOutboundLink(this, 'Desktop page download', '/desktop/<?php echo(get_dl($dl_platform, $dl_arch, 'file')); ?>'); captureEmail();" id="download"></a>
            
            <div class="clearfix" style="height:20px"></div>
            
            Minimum Requirements<br>
            <div class="requirements">
                <a id="mac_toggle" href="#">Mac</a> | <a id="pc_toggle" href="#">PC</a>
            </div>
            
             <div id="mac">                    
                <span class="pink">Mac Minimum Requirements</span><br>
                <div style="margin:0">
                    <li>Mac OS X 10.5 or later</li>
                    <li>Macintosh computer with an Intel x86 processor</li>
                    <li>At least 512 MB of physical RAM</li>
                    <li>At least 100 MB of available space</li>
                    <li>Speakers or headphones</li>
                </div>                      
            </div>     
            <div id="pc">                	
                <span class="pink">PC Minimum Requirements</span><br>
                <div style="margin:0">
                    <li>Windows XP SP3, Windows Vista, Windows 7</li>
                    <li>1.5 GHz Pentium 4 or comparable</li>
                    <li>At least 512 MB of physical RAM</li>
                    <li>At least 150 MB of available space</li>
                    <li>Speakers or headphones</li>
                </div>                	 
            </div>
            
        </div><!--sidebar -->
        
        <div class="clearfix"></div>
        
        <div class="three_column" style="margin:40px 10px 0 0;">
          <h1>Bring Tracks to Life</h1>
            <img src="../images/screenshots/desktop_2.jpg" width="310" height="170px" style="margin:10px 0" border="0">
            MashTape scours the Web to bring you videos, photos and more for every song. 
        </div>
        <div class="three_column" style="margin:40px 10px 0 0;">
          <h1>Catch the Show</h1>
            <img src="../images/screenshots/desktop_3.jpg" width="310" height="170px" style="margin:10px 0" border="0">
            Get notified and purchase tickets when your favorite bands come to town. 
        </div>
        <div class="three_column" style="margin:40px 0px 0 0;">
          <h1>Get Tracks to Go</h1>
            <img src="../images/screenshots/desktop_4.jpg" width="310" height="170px" style="margin:10px 0" border="0">
            Purchase albums and songs directly through Songbird from 7digital. 
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
