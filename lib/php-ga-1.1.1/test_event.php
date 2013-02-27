<?php
/**
  * Example program to send event to GA via the server-side instead of client side.
**/


require_once 'src/autoload.php';
use UnitedPrototype\GoogleAnalytics;
$tracker = new GoogleAnalytics\Tracker("UA-114360-24", "events.songbirdnest.com");
$visitor = new GoogleAnalytics\Visitor();
$visitor->setIpAddress($_SERVER['REMOTE_ADDRESS']);
$visitor->setUserAgent($_SERVER['HTTP_USER_AGENT']);
$session = new GoogleAnalytics\Session();
$page = new GoogleAnalytics\Page('/test_event.php');
$page->setTitle('SS Test - Event Tracking');

$event = new GoogleAnalytics\Event();
$event->setCategory("Download");
$event->setAction("button clicked");
$event->setLabel("free for pc");
$event->setNoninteraction("true");

$tracker->trackEvent($event, $session, $visitor);

#$tracker->trackPageview($page, $session, $visitor);


?>