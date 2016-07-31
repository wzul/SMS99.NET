<?php

$billplz_data = array(
                'Username' => 'xx',
				'Password' => 'xx',
				'Message'  => 'RM0.00 huhu untung le',
				'Mobile'   => '60145356443',
				'Sender'   => 'Wan Two',
				'Type'	   => '1',
				'sseqno'   => 'grimace'
				);
$process = curl_init("http://login.sms99.net/websmsapi/ISendSMS.aspx");
curl_setopt($process, CURLOPT_HEADER, 0);
//curl_setopt($process, CURLOPT_USERPWD, $api_key . ":");
curl_setopt($process, CURLOPT_TIMEOUT, 10);
curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($process, CURLOPT_POSTFIELDS, http_build_query($billplz_data));
$return = curl_exec($process);
curl_close($process);
//$arr = json_decode($return, true);
var_dump($return);