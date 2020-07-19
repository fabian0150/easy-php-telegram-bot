<?php
	include("../config.php");

	$json_raw = file_get_contents("php://input");
	$json_out = json_decode($json_raw);

	$ch = curl_init("https://api.telegram.org/bot" . $bot_id . "/getWebhookInfo");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,false);

	$param = array("url" => $bot_webhook_url);
	curl_setopt($ch, CURLOPT_POST,1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($param));

	$result = curl_exec($ch);

	
	print_r($result);

	curl_close($ch);
?>