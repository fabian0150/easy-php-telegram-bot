<?php
	include("../config.php");

	$json_raw = file_get_contents("php://input");
	$json_out = json_decode($json_raw);

	$ch = curl_init("https://api.telegram.org/bot" . $bot_id . "/deleteWebhook");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,false);

	$param = array("url" => $bot_webhook_url);
	curl_setopt($ch, CURLOPT_POST,1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($param));

	$result = curl_exec($ch);

	if($result) {
		echo "<h1>Webhook for <a href='https://t.me/" . $bot_name . "'>" . $bot_name . "</a> unset!</h1>";
	} else {
		echo "<h1>Webhook for <a href='https://t.me/" . $bot_name . "'>" . $bot_name . "</a> <span style='color:red;'>still</span> set!</h1>";
	}
	echo "<hr>" . print_r($result);

	curl_close($ch);
?>