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
   };
  function captureiPhoneEmail () {
    var emailElement = document.getElementById("iPhone_email_addr");
    var emailSubmitBtn = document.getElementById("email_submit_btn");
    if ( emailElement.value.length > 0 ) {
      $.get(
	    "../lib/mailchimp/subscribe.php" ,
	    { email_addr : emailElement.value, list_id : "e5d8fe17cd" }
	  );
	  emailElement.value = "Thank You!";
	  emailElement.disabled = true;
	  emailSubmitBtn.disabled = true;
    };
   };
</script>
<!-- End Tracking Action -->
</head>

<body class="sub">
<div id="container">
	<div id="header">
    	<a href="/" id="logo"></a>
        <a href="http://www.songbird.me/" id="web"></a>
        <div id="mobile_active"></div>
        <a href="/desktop/" id="desktop"></a>
    </div>
    <div id="content">
    	<h1>Songbird for Android. Make Your Music Connections Personal.</h1>
        Download for free, directly to your phone or tablet. An elegant player provides the best access to your music collection on your Android device. SONGBIRD. Personal music connections.
        
        <div class="clearfix"></div>
        
        <div id="left_column">
        	<img src="../images/screenshots/mobile_1.jpg" width="600" height="427" border="0">
        </div>
        
        <div id="sidebar">
        	<input type="checkbox" id="email_optin" name="email_optin" checked="true">Keep me up to date with SONGBIRD news, software updates, and the latest information on products and services.</input>
            <input type="text" name="email"  value="Email Address" size="24" onFocus="this.value=''" style="padding:10px; color:#999999; font-size:15px; font-family:Helvetica, Arial, sans-serif; border:1px solid #999999; width:288px; margin-top:20px;">
            <a href="http://market.android.com/details?id=com.songbirdnest.mediaplayer" id="download"></a>
            
            <div id="iphone">
            	<img src="../images/icon_iphone.png" border="0" width="23" height="44" align="left" style="margin:0 10px 0 0;"><strong>IPHONE COMING SOON</strong><br>submit your email to be the first to know about availability.<br>
                <input type="text" name="iPhone_email_addr" id="iPhone_email_addr"  value="Email Address" size="24" onFocus="this.value=''" style="padding:10px; color:#999999; font-size:15px; font-family:Helvetica, Arial, sans-serif; margin-top:20px; background:url(../images/bg_emailsubmit.png) no-repeat; width:193px; height:17px; border:none"><input type="button" id="email_submit_btn" onClick="captureiPhoneEmail();" id="iPhone_email_addr" name="iPhone_email_addr" style="float:right; background:url(../images/bg_emailsubmit.png) no-repeat -213px 0; width:37px; height:37px; border:none; margin:20px 0 0 0;" >
            </div>
        </div>
        
        <div class="clearfix"></div>
        
        <div class="three_column" style="margin:40px 10px 0 0;">
        	<h1>Clear &amp; Clear Interface</h1>
            <img src="../images/screenshots/mobile_2.jpg" width="310" height="170px" style="margin:10px 0" border="0">
            Browse, sort and play your music the way you want. Create,edit and sort playlists. Search through all your music. 
        </div>
        <div class="three_column" style="margin:40px 10px 0 0;">
        	<h1>Discover &amp; Connect</h1>
            <img src="../images/screenshots/mobile_3.jpg" width="310" height="170px" style="margin:10px 0" border="0">
            See which artists your friends are into. Quickly and easily ‘like’ any song and post to your wall. 
        </div>
        <div class="three_column" style="margin:40px 0px 0 0;">
        	<h1>Widget, Lockscreen &amp; More</h1>
            <img src="../images/screenshots/mobile_4.jpg" width="310" height="170px" style="margin:10px 0" border="0">
            Matching homescreen and lockscreen widgets with album art. Headset, bluetooth car audio and Last.fm support. 
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
