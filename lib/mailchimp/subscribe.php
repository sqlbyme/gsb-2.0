<?php
require_once 'inc/config.inc.php'; //contains apikey
 
  /**
   * Set vars of data to be sent.
  */

  $email = $_GET['email_addr'];
  $listId = $_GET['list_id'];
  //$listId = "c8c47a06ad"; 


  $merges = array('MMERGE1'=>'getsongbird.com',
                  'OPTINIP'=>$_SERVER['REMOTE_ADDR']
  );
 

 
  $double_optin=false;
  $update_existing=true;
  $replace_interests=false;
  $send_welcome=true;
  $email_type = 'html';            
  $data = array(
          'email_address'=>$email,
          'apikey'=>$apikey,
          'merge_vars' => $merges,
          'id' => $listId,
          'double_optin' => $double_optin,
          'update_existing' => $update_existing,
          'replace_interests' => $replace_interests,
          'send_welcome' => $send_welcome,
          'email_type' => $email_type
  );
  $payload = json_encode($data);
 
  //replace us2 with your actual datacenter
  $submit_url = "https://us1.api.mailchimp.com/1.3/?method=listSubscribe";
 
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $submit_url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, urlencode($payload));

  $result = curl_exec($ch);
  curl_close ($ch);
  $data = json_decode($result);
  if ($data->error){
    echo $data->code .' : '.$data->error."\n";
  } else {
    echo "success, look for the confirmation message\n";
  }

?>