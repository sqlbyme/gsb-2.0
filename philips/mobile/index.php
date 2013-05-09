<?php 

  $UA = $_SERVER['HTTP_USER_AGENT']; 
  if (preg_match('/Android/', $UA)) {
    $iPhone_url = "https://itunes.apple.com/us/app/songbird.me/id561535312";
    $Android_url = "market://details?id=com.songbirdnest.mediaplayer";
  } else {
    $iPhone_url = "itms-apps://itunes.com/apps/SongbirdMusic";
    $Android_url = "http://market.android.com/details?id=com.songbirdnest.mediaplayer";
  }

?>
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
<meta name="viewport" content="user-scalable=yes, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<style>

/* For the iPad */
@media screen and (orientation: portrait) {
 body {
   font-family: Helvetica, Arial, "Times New Roman";
   font-size: 100%;
 } 
 #container {
    position: relative;
    margin: 0.313em auto;
    width: 30.000em;
    height: 6.500em;
    background: url('../../images/mobile-logo-header.png') no-repeat;
    -webkit-background-size: 100% auto;
    -moz-background-size: 100% auto; 
    -o-background-size: 100% auto; 
    background-size: 100% auto;
  }
  #header {
    position: absolute;
    top: 3.033em;
    left: 0.063em;
    width: 30.000em;
  }
  h1 {
    font-size: 1.250em;
    color: #e6317e;
  }
	#content {
	  position: relative;
	  height: 80em;
	  width: auto;
	  top: 13.000em;
	}
	#iPhone-img {
	  position: absolute;
	  background: url('../../images/ios-product-shot.png') no-repeat;
	  -webkit-background-size: 100% auto;
    -moz-background-size: 100% auto; 
    -o-background-size: 100% auto; 
    background-size: 100% auto;
	  top: 1.000em;
	  width: 14.575em;
	  height: 26.000em;
	}
  #Android-img {
    position: absolute;
    background: url('../../images/android-product-shot.png') no-repeat;
    -webkit-background-size: 95% auto;
    -moz-background-size: 95% auto; 
    -o-background-size: 95% auto; 
    background-size: 95% auto;
    left: 15.000em;
    width: 14.575em;
    top: 1.225em;
    height: 28.000em;
  }
  #appstore-badge {
    position: absolute;
    background: url('../../images/appstore-badge.png') no-repeat;
    -webkit-background-size: 95% auto;
    -moz-background-size: 95% auto; 
    -o-background-size: 95% auto; 
    background-size: 95% auto;
    top: 27.500em;
    width: 14.575em;
    height: 5.000em;
  }
  #googleplay-badge {
    position: absolute;
    background: url('../../images/googleplay-badge.png') no-repeat;
    -webkit-background-size: 95% auto;
    -moz-background-size: 95% auto; 
    -o-background-size: 95% auto; 
    background-size: 95% auto;
    left: 15.000em;
    width: 14.575em;
    top: 27.500em;
    height: 5.000em;
  }
  #connect_copy {
    position: absolute;
    top: 33.000em;
    width: 30.000em;
  }
  #connect_img {
    position: absolute;
    background: url('../../images/connect.png') no-repeat;
    -webkit-background-size: 87% auto;
    -moz-background-size: 87% auto; 
    -o-background-size: 87% auto; 
    background-size: 87% auto;
    top: 40.000em;
    left: 1.500em;
    width: 30.000em;
    height: 16.450em;
  }
  #play_copy {
    position: absolute;
    top: 55.575em;
    width: 30.000em;
  }
  #play_img {
    position: absolute;
    background: url('../../images/play.png') no-repeat;
    -webkit-background-size: 87% auto;
    -moz-background-size: 87% auto; 
    -o-background-size: 87% auto; 
    background-size: 87% auto;
    top: 62.000em;
    left: 1.500em;
    width: 30.000em;
    height: 16.450em;
  }
  #like_copy {
    position: absolute;
    top: 78.000em;
    width: 30.000em;
  }
  #like_img {
    position: absolute;
    background: url('../../images/like.png') no-repeat;
    -webkit-background-size: 87% auto;
    -moz-background-size: 87% auto; 
    -o-background-size: 87% auto; 
    background-size: 87% auto;
    top: 85.575em;
    left: 1.500em;
    width: 30.000em;
    height: 16.450em;
  }
  #appstore-badge_footer {
    position: absolute;
    background: url('../../images/appstore-badge.png') no-repeat;
    -webkit-background-size: 95% auto;
    -moz-background-size: 95% auto; 
    -o-background-size: 95% auto; 
    background-size: 95% auto;
    top: 104.500em;
    width: 14.575em;
    height: 5.000em;
  }
  #googleplay-badge_footer {
    position: absolute;
    background: url('../../images/googleplay-badge.png') no-repeat;
    -webkit-background-size: 95% auto;
    -moz-background-size: 95% auto; 
    -o-background-size: 95% auto; 
    background-size: 95% auto;
    left: 15.000em;
    width: 14.575em;
    top: 104.500em;
    height: 5.000em;
  }
  #footer_copy{
    position: absolute;
    top: 110.000em;
    width: 30.000em;
  }
  a#footer_link {
    text-decoration: none;
    color:#e6317e;
  }
}
@media screen and (orientation: landscape) {
  body {
    font-family: Helvetica, Arial, "Times New Roman";
    font-size: 87.5%;
  } 
  #container {
     position: relative;
     margin: 0.313em auto;
     width: 30.000em;
     height: 6.500em;
     background: url('../../images/mobile-logo-header.png') no-repeat;
     background-size: 100%;
   }
   #header {
     position: absolute;
     top: 3.033em;
     left: 0.063em;
     width: 30.000em;
   }
   h1 {
     font-size: 1.250em;
     color: #e6317e;
   }
 	#content {
 	  position: relative;
 	  height: 80em;
 	  width: auto;
 	  top: 13.000em;
 	}
 	#iPhone-img {
 	  position: absolute;
 	  background: url('../../images/ios-product-shot.png') no-repeat;
 	  -webkit-background-size: 100% auto;
    -moz-background-size: 100% auto; 
    -o-background-size: 100% auto; 
    background-size: 100% auto;
 	  top: 1.000em;
 	  width: 14.575em;
 	  height: 26.000em;
 	}
   #Android-img {
     position: absolute;
     background: url('../../images/android-product-shot.png') no-repeat;
     -webkit-background-size: 95% auto;
     -moz-background-size: 95% auto; 
     -o-background-size: 95% auto; 
     background-size: 95% auto;
     left: 15.000em;
     width: 14.575em;
     top: 1.225em;
     height: 28.000em;
   }
   #appstore-badge {
     position: absolute;
     background: url('../../images/appstore-badge.png') no-repeat;
     -webkit-background-size: 95% auto;
     -moz-background-size: 95% auto; 
     -o-background-size: 95% auto; 
     background-size: 95% auto;
     top: 27.500em;
     width: 14.575em;
     height: 5.000em;
   }
   #googleplay-badge {
     position: absolute;
     background: url('../../images/googleplay-badge.png') no-repeat;
     -webkit-background-size: 95% auto;
     -moz-background-size: 95% auto; 
     -o-background-size: 95% auto; 
     background-size: 95% auto;
     left: 15.000em;
     width: 14.575em;
     top: 27.500em;
     height: 5.000em;
   }
   #connect_copy {
     position: absolute;
     top: 33.000em;
     width: 30.000em;
   }
   #connect_img {
     position: absolute;
     background: url('../../images/connect.png') no-repeat;
     -webkit-background-size: 87% auto;
     -moz-background-size: 87% auto; 
     -o-background-size: 87% auto; 
     background-size: 87% auto;
     top: 40.000em;
     left: 1.500em;
     width: 30.000em;
     height: 16.450em;
   }
   #play_copy {
     position: absolute;
     top: 55.575em;
     width: 30.000em;
   }
   #play_img {
     position: absolute;
     background: url('../../images/play.png') no-repeat;
     -webkit-background-size: 87% auto;
      -moz-background-size: 87% auto; 
      -o-background-size: 87% auto; 
      background-size: 87% auto;
     top: 62.000em;
     left: 1.500em;
     width: 30.000em;
     height: 16.450em;
   }
   #like_copy {
     position: absolute;
     top: 78.000em;
     width: 30.000em;
   }
   #like_img {
     position: absolute;
     background: url('../../images/like.png') no-repeat;
     -webkit-background-size: 87% auto;
      -moz-background-size: 87% auto; 
      -o-background-size: 87% auto; 
      background-size: 87% auto;
     top: 85.575em;
     left: 1.500em;
     width: 30.000em;
     height: 16.450em;
   }
   #appstore-badge_footer {
     position: absolute;
     background: url('../../images/appstore-badge.png') no-repeat;
     -webkit-background-size: 95% auto;
      -moz-background-size: 95% auto; 
      -o-background-size: 95% auto; 
      background-size: 95% auto;
     top: 104.500em;
     width: 14.575em;
     height: 5.000em;
   }
   #googleplay-badge_footer {
     position: absolute;
     background: url('../../images/googleplay-badge.png') no-repeat;
     -webkit-background-size: 95% auto;
       -moz-background-size: 95% auto; 
       -o-background-size: 95% auto; 
       background-size: 95% auto;
     left: 15.000em;
     width: 14.575em;
     top: 104.500em;
     height: 5.000em;
   }
   #footer_copy{
     position: absolute;
     top: 110.000em;
     width: 30.000em;
   }
   a#footer_link {
     text-decoration: none;
     color:#e6317e;
   }
}

/* For the iPhone */
@media screen and (max-width: 20.000em) and (orientation: portrait) {
 body {
   font-family: Helvetica, Arial, "Times New Roman";
   font-size: 62.5%;
 } 
 #container {
    position: relative;
    margin: 0.313em auto;
    width: 30.000em;
    height: 6.500em;
    background: url('../../images/mobile-logo-header.png') no-repeat;
    -webkit-background-size: 100% auto;
    -moz-background-size: 100% auto; 
    -o-background-size: 100% auto; 
    background-size: 100% auto;
  }
  #header {
    position: absolute;
    top: 3.033em;
    left: 0.063em;
    width: 30.000em;
  }
  h1 {
    font-size: 1.250em;
    color: #e6317e;
  }
	#content {
	  position: relative;
	  height: 80em;
	  width: auto;
	  top: 13.000em;
	}
	#iPhone-img {
	  position: absolute;
	  background: url('../../images/ios-product-shot.png') no-repeat;
	  -webkit-background-size: 100% auto;
    -moz-background-size: 100% auto; 
    -o-background-size: 100% auto; 
    background-size: 100% auto;
	  top: 1.000em;
	  width: 14.575em;
	  height: 26.000em;
	}
  #Android-img {
    position: absolute;
    background: url('../../images/android-product-shot.png') no-repeat;
    -webkit-background-size: 95% auto;
    -moz-background-size: 95% auto; 
    -o-background-size: 95% auto; 
    background-size: 95% auto;
    left: 15.000em;
    width: 14.575em;
    top: 1.225em;
    height: 28.000em;
  }
  #appstore-badge {
    position: absolute;
    background: url('../../images/appstore-badge.png') no-repeat;
    -webkit-background-size: 95% auto;
    -moz-background-size: 95% auto; 
    -o-background-size: 95% auto; 
    background-size: 95% auto;
    top: 27.500em;
    width: 14.575em;
    height: 5.000em;
  }
  #googleplay-badge {
    position: absolute;
    background: url('../../images/googleplay-badge.png') no-repeat;
    -webkit-background-size: 95% auto;
    -moz-background-size: 95% auto; 
    -o-background-size: 95% auto; 
    background-size: 95% auto;
    left: 15.000em;
    width: 14.575em;
    top: 27.500em;
    height: 5.000em;
  }
  #connect_copy {
    position: absolute;
    top: 33.000em;
    width: 30.000em;
  }
  #connect_img {
    position: absolute;
    background: url('../../images/connect.png') no-repeat;
    -webkit-background-size: 87% auto;
    -moz-background-size: 87% auto; 
    -o-background-size: 87% auto; 
    background-size: 87% auto;
    top: 40.000em;
    left: 1.500em;
    width: 30.000em;
    height: 16.450em;
  }
  #play_copy {
    position: absolute;
    top: 55.575em;
    width: 30.000em;
  }
  #play_img {
    position: absolute;
    background: url('../../images/play.png') no-repeat;
    -webkit-background-size: 87% auto;
    -moz-background-size: 87% auto; 
    -o-background-size: 87% auto; 
    background-size: 87% auto;
    top: 62.000em;
    left: 1.500em;
    width: 30.000em;
    height: 16.450em;
  }
  #like_copy {
    position: absolute;
    top: 78.000em;
    width: 30.000em;
  }
  #like_img {
    position: absolute;
    background: url('../../images/like.png') no-repeat;
    -webkit-background-size: 87% auto;
    -moz-background-size: 87% auto; 
    -o-background-size: 87% auto; 
    background-size: 87% auto;
    top: 85.575em;
    left: 1.500em;
    width: 30.000em;
    height: 16.450em;
  }
  #appstore-badge_footer {
    position: absolute;
    background: url('../../images/appstore-badge.png') no-repeat;
    -webkit-background-size: 95% auto;
    -moz-background-size: 95% auto; 
    -o-background-size: 95% auto; 
    background-size: 95% auto;
    top: 104.500em;
    width: 14.575em;
    height: 5.000em;
  }
  #googleplay-badge_footer {
    position: absolute;
    background: url('../../images/googleplay-badge.png') no-repeat;
    -webkit-background-size: 95% auto;
    -moz-background-size: 95% auto; 
    -o-background-size: 95% auto; 
    background-size: 95% auto;
    left: 15.000em;
    width: 14.575em;
    top: 104.500em;
    height: 5.000em;
  }
  #footer_copy{
    position: absolute;
    top: 110.000em;
    width: 30.000em;
  }
  a#footer_link {
    text-decoration: none;
    color:#e6317e;
  }
}
@media screen and (max-width: 33.750em) and (orientation: portrait) {
 body {
   font-family: Helvetica, Arial, "Times New Roman";
   font-size: 62.5%;
 } 
 #container {
    position: relative;
    margin: 0.313em auto;
    width: 30.000em;
    height: 6.500em;
    background: url('../../images/mobile-logo-header.png') no-repeat;
    -webkit-background-size: 100% auto;
    -moz-background-size: 100% auto; 
    -o-background-size: 100% auto; 
    background-size: 100% auto;
  }
  #header {
    position: absolute;
    top: 3.033em;
    left: 0.063em;
    width: 30.000em;
  }
  h1 {
    font-size: 1.250em;
    color: #e6317e;
  }
	#content {
	  position: relative;
	  height: 80em;
	  width: auto;
	  top: 13.000em;
	}
	#iPhone-img {
	  position: absolute;
	  background: url('../../images/ios-product-shot.png') no-repeat;
	  -webkit-background-size: 100% auto;
    -moz-background-size: 100% auto; 
    -o-background-size: 100% auto; 
    background-size: 100% auto;
	  top: 1.000em;
	  width: 14.575em;
	  height: 26.000em;
	}
  #Android-img {
    position: absolute;
    background: url('../../images/android-product-shot.png') no-repeat;
    -webkit-background-size: 95% auto;
    -moz-background-size: 95% auto; 
    -o-background-size: 95% auto; 
    background-size: 95% auto;
    left: 15.000em;
    width: 14.575em;
    top: 1.225em;
    height: 28.000em;
  }
  #appstore-badge {
    position: absolute;
    background: url('../../images/appstore-badge.png') no-repeat;
    -webkit-background-size: 95% auto;
    -moz-background-size: 95% auto; 
    -o-background-size: 95% auto; 
    background-size: 95% auto;
    top: 27.500em;
    width: 14.575em;
    height: 5.000em;
  }
  #googleplay-badge {
    position: absolute;
    background: url('../../images/googleplay-badge.png') no-repeat;
    -webkit-background-size: 95% auto;
    -moz-background-size: 95% auto; 
    -o-background-size: 95% auto; 
    background-size: 95% auto;
    left: 15.000em;
    width: 14.575em;
    top: 27.500em;
    height: 5.000em;
  }
  #connect_copy {
    position: absolute;
    top: 33.000em;
    width: 30.000em;
  }
  #connect_img {
    position: absolute;
    background: url('../../images/connect.png') no-repeat;
    -webkit-background-size: 87% auto;
    -moz-background-size: 87% auto; 
    -o-background-size: 87% auto; 
    background-size: 87% auto;
    top: 40.000em;
    left: 1.500em;
    width: 30.000em;
    height: 16.450em;
  }
  #play_copy {
    position: absolute;
    top: 55.575em;
    width: 30.000em;
  }
  #play_img {
    position: absolute;
    background: url('../../images/play.png') no-repeat;
    -webkit-background-size: 87% auto;
    -moz-background-size: 87% auto; 
    -o-background-size: 87% auto; 
    background-size: 87% auto;
    top: 62.000em;
    left: 1.500em;
    width: 30.000em;
    height: 16.450em;
  }
  #like_copy {
    position: absolute;
    top: 78.000em;
    width: 30.000em;
  }
  #like_img {
    position: absolute;
    background: url('../../images/like.png') no-repeat;
    -webkit-background-size: 87% auto;
    -moz-background-size: 87% auto; 
    -o-background-size: 87% auto; 
    background-size: 87% auto;
    top: 85.575em;
    left: 1.500em;
    width: 30.000em;
    height: 16.450em;
  }
  #appstore-badge_footer {
    position: absolute;
    background: url('../../images/appstore-badge.png') no-repeat;
    -webkit-background-size: 95% auto;
    -moz-background-size: 95% auto; 
    -o-background-size: 95% auto; 
    background-size: 95% auto;
    top: 104.500em;
    width: 14.575em;
    height: 5.000em;
  }
  #googleplay-badge_footer {
    position: absolute;
    background: url('../../images/googleplay-badge.png') no-repeat;
    -webkit-background-size: 95% auto;
    -moz-background-size: 95% auto; 
    -o-background-size: 95% auto; 
    background-size: 95% auto;
    left: 15.000em;
    width: 14.575em;
    top: 104.500em;
    height: 5.000em;
  }
  #footer_copy{
    position: absolute;
    top: 110.000em;
    width: 30.000em;
  }
  a#footer_link {
    text-decoration: none;
    color:#e6317e;
  }
}

@media screen and (min-width: 21.000em) and (max-width: 50.000em) and (orientation: landscape) {
  body {
    font-family: Helvetica, Arial, "Times New Roman";
    font-size: 87.5%;
  } 
  #container {
     position: relative;
     margin: 0.313em auto;
     width: 30.000em;
     height: 6.500em;
     background: url('../../images/mobile-logo-header.png') no-repeat;
     -webkit-background-size: 100% auto;
     -moz-background-size: 100% auto; 
     -o-background-size: 100% auto; 
     background-size: 100% auto;
   }
   #header {
     position: absolute;
     top: 3.033em;
     left: 0.063em;
     width: 30.000em;
   }
   h1 {
     font-size: 1.250em;
     color: #e6317e;
   }
 	#content {
 	  position: relative;
 	  height: 80em;
 	  width: auto;
 	  top: 13.000em;
 	}
 	#iPhone-img {
 	  position: absolute;
 	  background: url('../../images/ios-product-shot.png') no-repeat;
 	  -webkit-background-size: 100% auto;
    -moz-background-size: 100% auto; 
    -o-background-size: 100% auto; 
    background-size: 100% auto;
 	  top: 1.000em;
 	  width: 14.575em;
 	  height: 26.000em;
 	}
   #Android-img {
     position: absolute;
     background: url('../../images/android-product-shot.png') no-repeat;
     -webkit-background-size: 95% auto;
     -moz-background-size: 95% auto; 
     -o-background-size: 95% auto; 
     background-size: 95% auto;
     left: 15.000em;
     width: 14.575em;
     top: 1.225em;
     height: 28.000em;
   }
   #appstore-badge {
     position: absolute;
     background: url('../../images/appstore-badge.png') no-repeat;
     -webkit-background-size: 95% auto;
     -moz-background-size: 95% auto; 
     -o-background-size: 95% auto; 
     background-size: 95% auto;
     top: 27.500em;
     width: 14.575em;
     height: 5.000em;
   }
   #googleplay-badge {
     position: absolute;
     background: url('../../images/googleplay-badge.png') no-repeat;
     -webkit-background-size: 95% auto;
     -moz-background-size: 95% auto; 
     -o-background-size: 95% auto; 
     background-size: 95% auto;
     left: 15.000em;
     width: 14.575em;
     top: 27.500em;
     height: 5.000em;
   }
   #connect_copy {
     position: absolute;
     top: 33.000em;
     width: 30.000em;
   }
   #connect_img {
     position: absolute;
     background: url('../../images/connect.png') no-repeat;
     -webkit-background-size: 87% auto;
     -moz-background-size: 87% auto; 
     -o-background-size: 87% auto; 
     background-size: 87% auto;
     top: 40.000em;
     left: 1.500em;
     width: 30.000em;
     height: 16.450em;
   }
   #play_copy {
     position: absolute;
     top: 55.575em;
     width: 30.000em;
   }
   #play_img {
     position: absolute;
     background: url('../../images/play.png') no-repeat;
     -webkit-background-size: 87% auto;
     -moz-background-size: 87% auto; 
     -o-background-size: 87% auto; 
     background-size: 87% auto;
     top: 62.000em;
     left: 1.500em;
     width: 30.000em;
     height: 16.450em;
   }
   #like_copy {
     position: absolute;
     top: 78.000em;
     width: 30.000em;
   }
   #like_img {
     position: absolute;
     background: url('../../images/like.png') no-repeat;
     -webkit-background-size: 87% auto;
     -moz-background-size: 87% auto; 
     -o-background-size: 87% auto; 
     background-size: 87% auto;
     top: 85.575em;
     left: 1.500em;
     width: 30.000em;
     height: 16.450em;
   }
   #appstore-badge_footer {
     position: absolute;
     background: url('../../images/appstore-badge.png') no-repeat;
     -webkit-background-size: 95% auto;
     -moz-background-size: 95% auto; 
     -o-background-size: 95% auto; 
     background-size: 95% auto;
     top: 104.500em;
     width: 14.575em;
     height: 5.000em;
   }
   #googleplay-badge_footer {
     position: absolute;
     background: url('../../images/googleplay-badge.png') no-repeat;
     -webkit-background-size: 95% auto;
     -moz-background-size: 95% auto; 
     -o-background-size: 95% auto; 
     background-size: 95% auto;
     left: 15.000em;
     width: 14.575em;
     top: 104.500em;
     height: 5.000em;
   }
   #footer_copy{
     position: absolute;
     top: 110.000em;
     width: 30.000em;
   }
   a#footer_link {
     text-decoration: none;
     color:#e6317e;
   }
}

</style>

</head>

<body class="sub">
  <div id="autocontainer">
    
      <div id="container">
        <div id="header">
          <h1>(re)discover music&#0153; with Songbird</h1>
          <p>Your own personalized music experience with photos and videos from the artists you love most.  Discover new music with YouTube playlists hand picked by the Songbird team.
             Stream your favorite music to your wireless speakers and televisions.</p>
        </div>
          <div id="content">
            <div id="iPhone-img"></div>
            <div id="Android-img"></div>
            <a href=<?php echo($iPhone_url); ?> id="appstore-badge" target="_blank"></a>
            <a href=<?php echo($Android_url); ?> id="googleplay-badge" target="_blank"></a>
            <div id="connect_copy">
              <h1>Connect with Artists</h1>
              <p>Personalize your music experience with real-time updated from the artists you care about.  Share, like, and add to the feed.</p>
            </div>
            <div id="connect_img"></div>
            <div id="play_copy">
              <h1>Play Your Music</h1>
              <p>Access and playback your entire library right from Songbird.  Stream music to your wireless speakers via Airplay (iOS only).</p>
            </div>
            <div id="play_img"></div>
            <div id="like_copy">
              <h1>Like, Share, and Save</h1>
              <p>Get social with other fans, see what your friends are sharing and "like" favorite posts to save them to your profile.</p>
            </div>
            <div id="like_img"></div>
            <a href=<?php echo($iPhone_url); ?> id="appstore-badge_footer" target="_blank"></a>
            <a href=<?php echo($Android_url); ?> id="googleplay-badge_footer" target="_blank"></a>
            <div id="footer_copy">
              <p>also available for desktop at <a href="http://www.getsongbird.com/desktop/" id="footer_link" target="_blank">getsongbird.com</a>
            </div>
          </div><!--content -->
          <div class="clearfix"></div>
        <div class="clearfix"></div>
      </div><!--container -->
    
  </div><!-- autocontainer -->

<!-- include Google Analytics Tracking Code -->
<?php include('../../includes/ga.php'); ?>
<!-- End GA Include -->
</body>
</html>
