<?php
//session to pull data into basket
	session_start();
	$id=session_id();

	if (isset($showId)){
		$_SESSION['showid'] = $showId;
		$seshShowId = $_SESSION['showid'];
	}else{
		$seshShowId = $_SESSION['showid'];
	}

	if (isset($_POST['seatsSelected'])){
		$_SESSION['seatsid'] = $_POST['seatsSelected'];
		$seshseatId = $_SESSION['seatsid'];
	}else{
		$seshseatId = $_SESSION['seatsid'];
	}

	
	echo "DATA IN SESSION: ";
	echo "Session id is ";
	echo $id;
	echo "Show id is ";
	echo $seshShowId;
	echo "ID of seats selected are ";
	echo $seshseatId;

?>