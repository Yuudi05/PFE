<?php

	session_start();
	session_destroy();
	unset($_SESSION);
	header("location:index1.php");

?>