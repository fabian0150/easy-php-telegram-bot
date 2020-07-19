<?php
	//Callback Functions
	function helloWorld($chat_id, $data) {
		sendMessage($chat_id, "Hello World " . $data);
	}

?>