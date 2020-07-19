<?php
	include("./config.php");

	$user_input_raw = file_get_contents("php://input");
	
	$user_input = json_decode($user_input_raw);
	logMessage($user_input->message->chat->id, $user_input_raw);

	if(empty($user_input->message->text) == false) {
		include($bot_functions_logic);
	}
	if(empty($user_input->callback_query->from->id) == false) {
		include($bot_callback_functions_logic);
	}
?>