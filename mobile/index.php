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
<link rel="stylesheet" href="../../css/style.css" type="text/css" media="all" />
<meta name="viewport" content="width=1000">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!-- Start Tracking Action -->
<script type="text/javascript">
  function captureEmail () {
    var emailElement = document.getElementById("email_addr");
    var optInChecked = document.getElementById("email_optin");
    var emailButton = document.getElementById("email_submit_btn");
    if ( emailElement.value.length > 0 && optInChecked.checked == true && emailElement.disabled != true) {
      $.get(
	    "../../lib/mailchimp/subscribe.php" ,
	    { email_addr : emailElement.value, list_id : "c8c47a06ad" }
	  );
	  emailElement.value = "Thank You!";
	  emailElement.disabled = true;
	  emailButton.style.display = "none";
	  emailElement.style.border = "0px solid #999";
    };
   };
  function captureiPhoneEmail () {
    var emailElement = document.getElementById("iPhone_email_addr");
    var emailSubmitBtn = document.getElementById("iPhone_email_submit_btn");
    if ( emailElement.value.length > 0 ) {
      $.get(
	    "../../lib/mailchimp/subscribe.php" ,
	    { email_addr : emailElement.value, list_id : "e5d8fe17cd" }
	  );
	  emailElement.value = "Thank You!";
	  emailElement.disabled = true;
	  emailSubmitBtn.style.display = "none";
	  emailElement.style.border = "0px solid #999";
	  emailElement.style.background = "#E6E7E9";
    };
   };
</script>
<!-- End Tracking Action -->
</head>

<body class="sub">
<div id="container">
	<div id="header">
    	<a href="/" id="logo"></a>
        <div id="header_nav">
		  <a href="http://www.songbird.me/" id="web" target="_blank" ></a>
          <div id="android_active"></div>
          <a href="/mobile/iOS/" id="iOS"></a>
        </div>
    </div>
    <div id="content">
    	<h1>Songbird. Connecting fans everywhere!</h1>
        With a focus on fans, Songbird personalizes music content from the artists you love the most. Share your own photos with artists and other fans or discover new artists, all while listening to your music on an Android device. Download for free!
        
        <div class="clearfix"></div>
        
        <div id="left_column">
        	<img src="/images/screenshots/mobile_1.jpg" width="600" height="427" style="border: none;" alt="Mobile Screen Shot number 1.">
        </div>
        
        <div id="sidebar">
        	<input type="checkbox" id="email_optin" name="email_optin" checked="checked">Keep me up to date with Songbird news and software updates.
            <input type="text" name="email_addr" id="email_addr"  value="Email Address" size="24" onFocus="this.value=''" ><a href="javascript:void(0);" id="email_submit_btn" onClick="captureEmail();" ></a>
            <a href="http://market.android.com/details?id=com.songbirdnest.mediaplayer" id="download" target="_blank" ></a>
            
            
        </div>
        
        <div class="clearfix"></div>
        
        <div class="three_column" style="margin:40px 10px 0 0;">
        	<h1>Connect with Artists</h1>
            <img src="/images/screenshots/android_1.png" width="310" height="170" style="margin:10px 0 0 0; border: none;"  alt="Mobile Screenshot number 2.">
            Personalize your music experience with real-time updates from the artists you care about. Share, like, and add to the feed.
        </div>
        <div class="three_column" style="margin:40px 10px 0 0;">
        	<h1>Add Your Photos</h1>
            <img src="/images/screenshots/android_2.png" width="310" height="170" style="margin:10px 0 0 0; border: none;" alt="Mobile Screenshot number 3.">
            Do you have great concert photos, memorabilia, fan art or music memes? Easily contribute to your favorite artist’s feed. 
        </div>
        <div class="three_column" style="margin:40px 0px 0 0;">
        	<h1>Listen and More</h1>
            <img src="/images/screenshots/android_3.png" width="310" height="170" style="margin:10px 0 0 0; border: none;"  alt="Mobile screenshot number 4.">
            As you listen to your favorite tracks, see what artists are posting and talking about without skipping a beat.
        </div>
        
        <div class="clearfix"></div>
        
    </div><!--content -->
    <div class="clearfix"></div>

<?php include('../../includes/footer.php'); ?>

    <div class="clearfix"></div>
</div><!--container -->

<!-- include Google Analytics Tracking Code -->
<?php include('../../includes/ga.php'); ?>
<!-- End GA Include -->
</body>
</html>
