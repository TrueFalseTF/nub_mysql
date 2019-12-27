<?php	
	require_once("function.php");

	$link = mysqli_connect("localhost", "root", "", "store_kasha");
	
	if(isset($_GET['action'])) {
		implementation($link, $_POST["position"], $_POST["content"]);
	};

	include("pages/landing.php");
?>