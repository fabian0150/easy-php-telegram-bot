<?php
	$chat_id = $user_input->message->chat->id;
	$command_arr = explode(" ", $user_input->message->text);
	
	if($command_arr[0] == "/start"){
		startBot($chat_id);
	}
	if($command_arr[0] == "/stop"){
		stopBot($chat_id);
	}
	if($command_arr[0] == "/menu"){
		exampleMenu($chat_id);
	}
?>