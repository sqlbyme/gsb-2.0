<?php

/* GENERATE THE QSA KEY FOR S3
***********************************************************/

include_once "s3.php";
include_once "/usr/local/AWS/S3_Auth.php";




/* USER AGENT SNIFFING FOR DOWNLOAD LINK WITH BRAINS
***********************************************************/

$ua = getenv("HTTP_USER_AGENT");

$dl_platform = '';
$dl_arch = 'unknown';

if (strpos($ua, "Windows")) {
	$dl_platform = "windows";
	$dl_arch = "i686-msvc8";
}
else if (strpos($ua, "Intel Mac")) {
	$dl_platform = "macosx";
	$dl_arch = "i686";
}

/* GIVE ME THE DOWNLOAD LINK I WANT
***********************************************************/

function get_dl($platform = "", $arch = "unknown", $key = "url") {

	$dl = array(
		'version' => '2.2.0', /* UPDATE ME */
		'build'   => '2453', /* UPDATE ME */
		'platform' => $platform,
		'arch' => $arch,
		'suffix' => '',
		'display' => 'All Platforms',
		'filesize' => ''
	);

	if ($dl['platform'] == 'windows') {
		$dl['suffix'] = 'exe';
		$dl['display'] = 'Windows XP/Vista';
		$dl['filesize'] = '15.0 MB'; /* UPDATE ME TOO */
	}
	else if ($dl['platform'] == 'macosx') {
		$dl['suffix'] = 'dmg';
		if ($dl['arch'] == 'i686') {
			$dl['display'] = 'Mac OS X Intel';
			$dl['filesize'] = '27.1 MB'; /* UPDATE ME FIVE */
		}
	}
	if ($dl['arch'] == 'unknown') {
		//this used to link to /download which required some modrewrite on the server
		$dl['url'] = '/system-requirements.php';
		$dl['file'] = '';
	}
	else {
		$dl['file'] = 'Songbird_' . $dl['version'] . '-' . $dl['build'] . '_' . $dl['platform'] . '-' . $dl['arch'] . '.' . $dl['suffix'];
		$dl['uri'] = 'installer/' . $dl['platform'] . '/' . $dl['arch'] . '/' . $dl['file'];
		$dl['url'] = S3::getAuthenticatedURL("download.songbirdnest.com", $dl['uri'], 3300, false, false); 
		//$dl['url'] = 'http://download.songbirdnest.com/installer/' . $dl['platform'] . '/' . $dl['arch'] . '/' . $dl['file'];
	}
	
	return $dl[$key];

}

?>
