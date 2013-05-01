<?php
// GENERATE THE QSA KEY FOR S3
include_once "s3.php";
include_once "/usr/local/AWS/S3_Auth.php";


// Set the windows, mac and source bucket link uri's - These are the only links that will ever need to be updated for future releases.
$windows = "installer/windows/i686-msvc8/Songbird_2.2.0-2453_windows-i686-msvc8.zip"; // ** ONLY CHANGE ME WHEN A NEW VERSION IS RELEASED **
$mac = "installer/macosx/i686/Songbird_2.2.0-2453_macosx-i686.dmg"; // ** ONLY CHANGE ME WHEN A NEW VERSION IS RELEASED **
$source = "installer/source/Songbird2.2.tar.gz";  // ** ONLY CHANGE ME WHEN A NEW VERSION IS RELEASED **


// Setup the Service-Side GA Tracker
require_once $_SERVER['DOCUMENT_ROOT'].'/lib/php-ga-1.1.1/src/autoload.php';
use UnitedPrototype\GoogleAnalytics;
$visitor = new GoogleAnalytics\Visitor();
$visitor->setIpAddress($_SERVER['REMOTE_ADDRESS']);
$visitor->setUserAgent($_SERVER['HTTP_USER_AGENT']);
$session = new GoogleAnalytics\Session();
$page = new GoogleAnalytics\Page('/desktop/index.php');
$page->setTitle('Phillip Referral Download');

#$tracker->trackPageview($page, $session, $visitor); // we don't need to track the pageview on a referral download.

// Deal with a referral download directly instead of loading the page.
$qs = $_SERVER['QUERY_STRING'];
switch($qs) {
  case "download=Philips_windows":
    // Setup the tracker for this specific event
    $tracker = new GoogleAnalytics\Tracker("UA-114360-23", "songbirdnest.com");
    $event = new GoogleAnalytics\Event();
    $event->setCategory("Downloads");
    $event->setAction("Philips Downloads");
    $event->setLabel("Free for Pc");
    $event->setNoninteraction("true");
    $tracker->trackEvent($event, $session, $visitor);

    // Generate a keyed query string url to access the S3 bucket securely.
    $dl['uri'] = $windows;
    $dl['url'] = S3::getAuthenticatedURL("download.songbirdnest.com", $dl['uri'], 3300, false, false);
    header("Location:" . $dl['url']);
  break;

  case "download=Philips_mac":
    $tracker = new GoogleAnalytics\Tracker("UA-114360-23", "songbirdnest.com");
    $event = new GoogleAnalytics\Event();
    $event->setCategory("Downloads");
    $event->setAction("Philips Downloads");
    $event->setLabel("Free for Mac");
    $event->setNoninteraction("true");
    $tracker->trackEvent($event, $session, $visitor);
    $dl['uri'] = $mac;
    $dl['url'] = S3::getAuthenticatedURL("download.songbirdnest.com", $dl['uri'], 3300, false, false);
    header("Location:" . $dl['url']);
  break;
  
  case "download=Philips_windows_landing":
    // Setup the tracker for this specific event
    $tracker = new GoogleAnalytics\Tracker("UA-114360-23", "songbirdnest.com");
    $event = new GoogleAnalytics\Event();
    $event->setCategory("Downloads");
    $event->setAction("Philips Landing Downloads");
    $event->setLabel("Free for Pc");
    $event->setNoninteraction("true");
    $tracker->trackEvent($event, $session, $visitor);

    // Generate a keyed query string url to access the S3 bucket securely.
    $dl['uri'] = $windows;
    $dl['url'] = S3::getAuthenticatedURL("download.songbirdnest.com", $dl['uri'], 3300, false, false);
    header("Location:" . $dl['url']);
  break;

  case "download=Philips_mac_landing":
    $tracker = new GoogleAnalytics\Tracker("UA-114360-23", "songbirdnest.com");
    $event = new GoogleAnalytics\Event();
    $event->setCategory("Downloads");
    $event->setAction("Philips Landing Downloads");
    $event->setLabel("Free for Mac");
    $event->setNoninteraction("true");
    $tracker->trackEvent($event, $session, $visitor);
    $dl['uri'] = $mac;
    $dl['url'] = S3::getAuthenticatedURL("download.songbirdnest.com", $dl['uri'], 3300, false, false);
    header("Location:" . $dl['url']);
  break;

  case "download=windows":
    $tracker = new GoogleAnalytics\Tracker("UA-114360-23", "songbirdnest.com");
    $event = new GoogleAnalytics\Event();
    $event->setCategory("Downloads");
    $event->setAction("Direct");
    $event->setLabel("Free for Pc");
    $event->setNoninteraction("true");
    $tracker->trackEvent($event, $session, $visitor);
    $dl['uri'] = $windows;
    $dl['url'] = S3::getAuthenticatedURL("download.songbirdnest.com", $dl['uri'], 3300, false, false);
    header("Location:" . $dl['url']);
  break;

  case "download=mac":
    $tracker = new GoogleAnalytics\Tracker("UA-114360-23", "songbirdnest.com");
    $event = new GoogleAnalytics\Event();
    $event->setCategory("Downloads");
    $event->setAction("Direct");
    $event->setLabel("Free for Mac");
    $event->setNoninteraction("true");
    $tracker->trackEvent($event, $session, $visitor);
    $dl['uri'] = $mac;
    $dl['url'] = S3::getAuthenticatedURL("download.songbirdnest.com", $dl['uri'], 3300, false, false);
    header("Location:" . $dl['url']);
  break;

  case "download=GSB_windows":
    $tracker = new GoogleAnalytics\Tracker("UA-114360-23", "songbirdnest.com");
    $event = new GoogleAnalytics\Event();
    $event->setCategory("Downloads");
    $event->setAction("Getsongbird Downloads");
    $event->setLabel("Free for Pc");
    $event->setNoninteraction("true");
    $tracker->trackEvent($event, $session, $visitor);
    $dl['uri'] = $windows;
    $dl['url'] = S3::getAuthenticatedURL("download.songbirdnest.com", $dl['uri'], 3300, false, false);
    header("Location:" . $dl['url']);
  break;

  case "download=GSB_mac":
    $tracker = new GoogleAnalytics\Tracker("UA-114360-23", "songbirdnest.com");
    $event = new GoogleAnalytics\Event();
    $event->setCategory("Downloads");
    $event->setAction("Getsongbird Downloads");
    $event->setLabel("Free for Mac");
    $event->setNoninteraction("true");
    $tracker->trackEvent($event, $session, $visitor);
    $dl['uri'] = $mac;
    $dl['url'] = S3::getAuthenticatedURL("download.songbirdnest.com", $dl['uri'], 3300, false, false);
    header("Location:" . $dl['url']);
  break;
     
  case "download=source":
    $tracker = new GoogleAnalytics\Tracker("UA-114360-23", "songbirdnest.com");
    $event = new GoogleAnalytics\Event();
    $event->setCategory("Downloads");
    $event->setAction("Getsongbird Downloads");
    $event->setLabel("Source Code");
    $event->setNoninteraction("true");
    $tracker->trackEvent($event, $session, $visitor);
    $dl['uri'] = $source;
    $dl['url'] = S3::getAuthenticatedURL("download.songbirdnest.com", $dl['uri'], 3300, false, false);
    header("Location:" . $dl['url']);
  break;
}

?>
