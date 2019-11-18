<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/php-template/store.php":
			$CURRENT_PAGE = "Store"; 
			$PAGE_TITLE = "Store";
			break;
		case "/php-template/events.php":
			$CURRENT_PAGE = "Events"; 
			$PAGE_TITLE = "Events";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Welcome to my homepage!";
	}
?>