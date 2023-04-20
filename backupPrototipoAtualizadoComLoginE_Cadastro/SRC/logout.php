<?php
	header("location: ../public/index.php");
	session_start();
	session_unset();
	session_destroy();
?>