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
<meta name="apple-itunes-app" content="app-id=561535312">
<title>Songbird</title>
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
<meta name="viewport" content="width=1000">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).keypress(function(e) {
    if(e.which == 13 && document.activeElement.id == "email_addr") {
      captureEmail("email_submit_btn");
    }
  });

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
  function testClick(button) {
	console.log (button.id);
	
}

  function captureEmail(button) {
    var emailElement = document.getElementById("email_addr");
    var optInChecked = document.getElementById("email_optin");
    var emailSubmitBtn = document.getElementById("email_submit_btn");
    if ( emailElement.value.length > 0 && emailElement.value != "Email Address" && email_optin.checked == true && emailElement.disabled != true) {
      $.get(
	    "../lib/mailchimp/subscribe.php" ,
	    { email_addr : emailElement.value, list_id : "c8c47a06ad" }
	  );
	  emailElement.value = "Thank You!";
	  emailElement.disabled = true;
	  emailElement.style.border = "none";
	  emailSubmitBtn.style.display = "none";
	  
    };
	 if (button.id != "email_submit_btn") { setTimeout(getSongbird(button.id), 1500); }
  };
	  function getSongbird (button) {
       if (button == "download_pc"){
	      window.location = "<?php echo(get_dl('windows', 'i686-msvc8')); ?>";
       }
       if (button == "download_mac"){
         window.location = "<?php echo(get_dl('macosx', 'i686')); ?>";
       }
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
    <a href="/" id="logo_sm"></a>
    <div id="header_nav">
	  <a href="http://www.songbird.me/" id="web" target="_blank" ></a>
      <a href="/mobile/android/" id="android"></a>
      <a href="/mobile/iOS/" id="iOS"></a>
    </div>
  </div>
  <div id="content">
    <h1>Songbird. Connecting Fans Everywhere!</h1>
        With a focus on fans, Songbird personalizes music content from the artists you love the most. Share your own photos with artists and other fans or discover new artists, all while listening to your music on your computer. Free download for Mac or PC!
        
        <div class="clearfix"></div>
        
        <div id="left_column">
          <img src="../images/screenshots/desktop_1.jpg" width="600" height="427" border="0">
        </div>
        
        <div id="sidebar">
          <input type="checkbox" id="email_optin" name="email_optin" checked="true">Keep me up to date with Songbird news and software updates.</input>
            
            <input type="text" name="email_addr"  id="email_addr" value="Email Address" size="24" onFocus="this.value=''" style="padding:10px; color:#999999; font-size:15px; font-family:Arial, Helvetica, sans-serif; border:1px solid #999999; width:288px; margin-top:20px;"><a href="javascript:void(0);" id="email_submit_btn" onClick="captureEmail(this);" ></a>
            <a href="javascript:void(0);" onclick="_gaq.push(['_trackEvent','Desktop page download', 'button clicked', 'Free for Pc']); captureEmail(this);" id="download_pc"></a>
            <a href="javascript:void(0);" onclick="_gaq.push(['_trackEvent','Desktop page download', 'button clicked', 'Free for Mac']); captureEmail(this);" id="download_mac"></a>
				
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
                </div>                      
            </div>     
            <div id="pc">                	
                <span class="pink">PC Minimum Requirements</span><br>
                <div style="margin:0">
                    <li>Windows XP SP3, Windows Vista, Windows 7</li>
                    <li>1.5 GHz Pentium 4 or comparable</li>
                    <li>At least 512 MB of physical RAM</li>
                </div>                	 
            </div>
            
        </div><!--sidebar -->
        
        <div class="clearfix"></div>
        
        <div class="three_column" style="margin:40px 10px 0 0;">
          <h1>Personal Media Hub</h1>
            <img src="../images/screenshots/desktop_2.jpg" width="310" height="170px" style="margin:10px 0" border="0">
             Manage your music and videos, build playlists, browse, and sort. Then sync your music to your portable music player or phone.
        </div>
        <div class="three_column" style="margin:40px 10px 0 0;">
          <h1>Connect with Artists</h1>
            <img src="../images/screenshots/desktop_3.jpg" width="310" height="170px" style="margin:10px 0" border="0">
            Personalize your music experience with real-time updates from the artists you care about. Share, like, and add your own photos to the feed too.
        </div>
        <div class="three_column" style="margin:40px 0px 0 0;">
          <h1>Play Your Music Anywhere</h1>
            <img src="../images/screenshots/desktop_4.jpg" width="310" height="170px" style="margin:10px 0" border="0">
            Push music to your wireless devices, like speakers and TVs, or act as a media server allowing wireless devices to pull from your Songbird library.
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
