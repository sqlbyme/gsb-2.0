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
  $(document).keypress(function(e) {
    if(e.which == 13 && document.activeElement.id == "email_addr") {
      captureiPhoneEmail();
    }
  });

  function captureEmail () {
    var emailElement = document.getElementById("email_addr");
    var optInChecked = document.getElementById("email_optin");
    var emailButton = document.getElementById("email_submit_btn");
    if ( emailElement.value.length > 0 && email_optin.checked == true && emailElement.disabled != true) {
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
    var emailElement = document.getElementById("email_addr");
    var emailSubmitBtn = document.getElementById("email_submit_btn");
    if ( emailElement.value.length > 0 && email_optin.checked == true && emailElement.disabled != true) {
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
    	<a href="/" id="logo_sm"></a>
        <div id="header_nav">
		  <a href="http://www.songbird.me/" id="web" target="_blank" ></a>
          <a href="/mobile/android/" id="android"></a>
          <div id="iOS_active"></div>
        </div>
    </div>
    <div id="content">
    	<h1>Songbird. Connecting fans everywhere!</h1>
        With a focus on fans, Songbird personalizes music content from the artists you love the most. Share your own photos with artists and other fans, discover new artists, and see the latest updates from your favorites. Download for free!
        <div class="clearfix"></div>
        
        <div id="left_column">
        	<img src="/images/screenshots/ios_1.jpg" width="600" height="427" style="border: none;" alt="Mobile Screen Shot number 1.">
        </div>
        
        <div id="sidebar">
        	<input type="checkbox" id="email_optin" name="email_optin" checked="checked">Keep me up to date with Songbird news and software updates.
            <!-- <input type="checkbox" id="email_optin" name="email_optin" checked="checked">Please notify me when the iOS App is available to download! -->
            <input type="text" name="email_addr" id="email_addr"  value="Email Address" size="24" onFocus="this.value=''" ><a href="javascript:void(0);" id="email_submit_btn" onClick="captureiPhoneEmail();" ></a>
            <!-- <span style="background:url('/images/coming-soon-362x90.jpg');display:block;width:362px;height:90px;margin-top:20px;" />     -->        
            <a href="https://itunes.apple.com/us/app/songbird.me/id561535312?mt=8" id="download_ios" onClick="_gaq.push(['_trackEvent','iOS page download', 'button clicked', 'App Store']); captureiPhoneEmail();" target="_blank" ></a> 
            
            
        </div>
        
        <div class="clearfix"></div>
        
        <div class="three_column" style="margin:40px 10px 0 0;">
        	<h1>Connect with Artists</h1>
            <img src="/images/screenshots/ios_2.jpg" width="310" height="170" style="margin:10px 0 0 0; border: none;"  alt="Mobile Screenshot number 2.">
            Personalize your music experience with real-time updates from the artists you care about. Share, like, and add to the feed.
        </div>
        <div class="three_column" style="margin:40px 10px 0 0;">
        	<h1>Add Your Photos</h1>
            <img src="/images/screenshots/ios_3.jpg" width="310" height="170" style="margin:10px 0 0 0; border: none;" alt="Mobile Screenshot number 3.">
            Do you have great concert photos, memorabilia, fan art or music memes? Easily contribute to your favorite artist’s feed.
        </div>
        <div class="three_column" style="margin:40px 0px 0 0;">
        	<h1>Like, Share, and Save</h1>
            <img src="/images/screenshots/ios_4.jpg" width="310" height="170" style="margin:10px 0 0 0; border: none;"  alt="Mobile screenshot number 4.">
            Get social with other fans, see what your friends are sharing and "like" favorite posts to save them to your profile.
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
