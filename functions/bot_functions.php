<?php
	function startBot($chat_id) {
		global $bot_name, $db_conn;
		sendMessage($chat_id, "Welcome to the " . $bot_name . "!");
		$sql = "INSERT INTO TBL_USER (chat_id) VALUES (" . $chat_id . ");";

		if ($db_conn->query($sql) === TRUE) {
			sendMessage($chat_id, "You are now registered!");
		} 
	}

	function stopBot($chat_id) {
		global $bot_name;
		sendMessage($chat_id, "Welcome to the " . $bot_name . "!");
	}

	function exampleMenu($chat_id) {
		$button_1 = array('text' => "Hello World 1", 'callback_data' => "btn_helloworld1");
		$button_2 = array('text' => "Hello World 2", 'callback_data' => "btn_helloworld2");
		$button_3 = array('text' => "Hello World 3", 'callback_data' => "btn_helloworld3");
		$keyboard = array(array($button_1, $button_2, $button_3));
		sendButton($chat_id, "Menu", $keyboard);	
	}

?>