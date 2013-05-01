<?php

  // This is a simple file used to detect whether the user is a mobile/tablet user and redirect accordingly.
  require_once '../lib/mobile-detect/Mobile_Detect.php';
  $detect = new Mobile_Detect;
  if ($detect->isMobile() || $detect->isTablet()) {
    header("Location: /philips/mobile/index.php");
  } else {
   header("Location: /philips/desktop/index.php");
  }

?>