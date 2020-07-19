<?php

	$config = '<?php //CONFIG CREATED WITH SCRIPT
    //Bot Config
	$root_sub_dir					= "' . $_POST['root_sub_dir'] . '";
	$root 							=  realpath($_SERVER["DOCUMENT_ROOT"]) . "/" . $root_sub_dir;
	$bot_url						= "' . $_POST['bot_url'] . '";
    $bot_name 						= "' . $_POST['bot_name'] . '";
    $bot_id 						= "' . $_POST['bot_id'] . '";
    $bot_webhook_url 				= $bot_url . "/webhook.php";
	$bot_log						= $root . "/logs/message.log";
	$bot_functions					= $root . "/functions/bot_functions.php";
	$bot_functions_logic			= $root . "/functions/bot_logic.php";
	$bot_callback_functions 		= $root . "/functions/callback_functions.php";
	$bot_callback_functions_logic 	= $root . "/functions/callback_logic.php";

    //DB Config

    $db_servername = "' . $_POST['db_servername'] . '";
    $db_username = "' . $_POST['db_username'] . '";
    $db_password = "' . $_POST['db_password'] . '";
    $db_dbname = "' . $_POST['db_dbname'] . '";
	$db_conn = new mysqli($db_servername, $db_username, $db_password, $db_dbname);
	if ($db_conn->connect_error) {
	    echo "DB Connection failed: " . $db_conn->connect_error . "<br>";
	}

    //Bot Source Functions
    function sendMessage($chat_id, $message_text) {
		global $bot_id;
		$ch = curl_init("https://api.telegram.org/bot" . $bot_id . "/sendMessage");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

		$param = array(
			"chat_id" => $chat_id,
			"text" => $message_text,
			"parse_mode" => "html"
		);

		curl_setopt($ch, CURLOPT_POST,1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($param));

		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
    }

    function sendButton($chat_id, $message_text, $replyMarkup) {
		global $bot_id;
		$encodeMarkup = json_encode(array("inline_keyboard" => $replyMarkup));

		$content = array(
			"chat_id" => $chat_id,
			"reply_markup" => $encodeMarkup,
			"text" => $message_text,
		);

		$url = "https://api.telegram.org/bot" . $bot_id . "/sendMessage";
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST,1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($content));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}

	function sendPhoto($bot_id,$chat_id,$photo_url) {
		$ch = curl_init("https://api.telegram.org/bot" . $bot_id . "/sendPhoto");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
		$param = array(
			"chat_id" => $chat_id,
			"photo" => $photo_url
		);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}

	function sendVideo($bot_id,$chat_id,$video_url)
	{
		$ch = curl_init("https://api.telegram.org/bot" . $bot_id . "/sendVideo");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
		$param = array(
			"chat_id" => $chat_id,
			"video" => $video_url
		);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}
	
	include($bot_functions);
	include($bot_callback_functions);

?>';



	$config_file = fopen("../config.php", "w+");
	fwrite($config_file, $config);
	fclose($config_file);	
	header('Location: ../index.php');


?>
