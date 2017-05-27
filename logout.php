<?php
	session_start();
	unset($_SESSION['users']);
	unset($_SESSION['usersId']);
	header('Location: index.php');