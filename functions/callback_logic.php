<?php
    $data = $user_input->callback_query->data;
    $chat_id = $user_input->callback_query->message->chat->id;

    switch($data) {
        case "btn_helloworld1": //Hello world
			helloWorld($chat_id, $data);
        break;
		case "btn_helloworld2": //Hello world
			helloWorld($chat_id, $data);
        break;
		case "btn_helloworld3": //Hello world
			helloWorld($chat_id, $data);
        break;
        
    }
?>