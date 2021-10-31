<?php
//session to pull data into basket
	session_start();
	$id=session_id();

	$_SESSION['showid'] = $showId;
	echo "Session id is";
	echo $id;
	echo "Show id is";
	echo $_SESSION['showid'];

?>

	<!-- if (!isset($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}
	if (isset($_GET['buy'])) {
		$_SESSION['cart'][] = $_GET['buy'];
		header('location: ' . $_SERVER['PHP_SELF']. '?' . SID);
		exit();
	} -->