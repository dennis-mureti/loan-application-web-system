<?php

	echo "Logged out scuccessfully";
    
    session_start();
	session_destroy();

header('refresh:3; url=home.php');


?>