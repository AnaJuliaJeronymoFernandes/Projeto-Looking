<?php
	header("location: ../public/index.html");
	session_start();
	session_unset();
	session_destroy();
?>