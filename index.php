<html>
  <head>
    <title>Telegram Bot Setup</title>
  </head>
  <body>
	  <h1>Telegram Bot Setup</h1>
	  <?php include("./config.php"); ?>
	  <h2>Write Config File</h2>
	  <form action="setup/writeConfig.php" method="POST">
		  <p><span style="font-weight: bold;">URL: </span><input type="text" name="bot_url" id="bot_url" size="100" value="<?php echo $bot_url; ?>" /></p>
		 <p><span style="font-weight: bold;">Root Sub Dir: </span><input type="text" name="root_sub_dir" id="root_sub_dir" size="100" value="<?php echo $root_sub_dir; ?>" /></p>
		  
		  <p><span style="font-weight: bold;">Bot Name: </span><input type="text" name="bot_name" id="bot_name" size="100" value="<?php echo $bot_name; ?>" /></p>
		  <p><span style="font-weight: bold;">Bot Key: </span><input type="text" name="bot_id" id="bot_id" size="100" value="<?php echo $bot_id; ?>" /></p>
		  <p><span style="font-weight: bold;">Database Server: </span><input type="text" name="db_servername" id="db_servername" size="100" value="<?php echo $db_servername; ?>" /></p>
		  <p><span style="font-weight: bold;">Database: </span><input type="text" name="db_dbname" id="db_dbname" size="100" value="<?php echo $db_dbname; ?>" /></p>
		  <p><span style="font-weight: bold;">Database Username: </span><input type="text" name="db_username" id="db_username" size="100" value="<?php echo $db_username; ?>" /></p>
		  <p><span style="font-weight: bold;">Database Password: </span><input type="text" name="db_password" id="db_password" size="100" value="<?php echo $db_password; ?>" /></p>
		 <br><br>
		  <button>Create File</button>
	  </form>
	  <hr>
	  <h2>Telegram Bot Config Info</h2>
	  <p><span style="font-weight: bold;">URL: </span><a href="<?php echo $bot_url; ?>"><?php echo $bot_url; ?></a></p>
	   <p><span style="font-weight: bold;">Root Path: </span><?php echo $root; ?> 
		   	<?php if(file_exists($root)) { echo "(Found)";} else { echo "(Not found)";}?></p>
	   <p><span style="font-weight: bold;">Root Sub Dir: </span><?php echo $root_sub_dir; ?></p>
	  <p><span style="font-weight: bold;">Bot Name: </span><a href="https://t.me/<?php echo $bot_name; ?>"><?php echo $bot_name; ?></a></p>
	  <p><span style="font-weight: bold;">Bot Key: </span><?php echo $bot_id; ?></p>
	    <p><span style="font-weight: bold;">Bot Webhook URL: </span><a href="<?php echo $bot_webhook_url; ?>"><?php echo $bot_webhook_url; ?></a></p>
	   <p><span style="font-weight: bold;">Bot Webhook Info: </span><a href="<?php echo $bot_url; ?>/webhook/infoWebhook.php"><?php echo $bot_url; ?>/webhook/infoWebhook.php</a></p>
	   <p><span style="font-weight: bold;">Bot Functions: </span><?php echo $bot_functions; ?>
	  		 <?php if(file_exists($bot_functions)) { echo "(Found)";} else { echo "(Not found)";}?></p>
	   <p><span style="font-weight: bold;">Bot Callback Functions: </span><?php echo $bot_callback_functions; ?>
	  		 <?php if(file_exists($bot_callback_functions)) { echo "(Found)";} else { echo "(Not found)";}?></p>
	    <p><span style="font-weight: bold;">Bot Log: </span><?php echo $bot_log; ?>
	  		 <?php if(file_exists($bot_log)) { echo "(Found)";} else { echo "(Not found)";}?></p>
	  <p><a href="webhook/setWebhook.php">Set Webhook</a></p>
	  <p><a href="webhook/unsetWebhook.php">Delete Webhook</a></p>
	  <p><a href="webhook/infoWebhook.php">Webhook Info</a></p>
	  <hr>
	  <h2>Database Config Info</h2>
	  <p><span style="font-weight: bold;">Database Server: </span><?php echo $db_servername; ?></p>
	  <p><span style="font-weight: bold;">Database: </span><?php echo $db_dbname; ?></p>
	  <p><span style="font-weight: bold;">Database Username: </span><?php echo $db_username; ?></p>
	  <p><span style="font-weight: bold;">Database Password: </span><?php echo $db_password; ?></p>
	  <p><a href="setup/dbsetup.php">Setup DB (Delete all data!)</a></p>
	  <hr>
  </body>
</html>
 