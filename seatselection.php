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

	if (isset($_POST['count'])){
		$_SESSION['count'] = $_POST['count'];
		$seshseatcount = $_SESSION['count'];
	}else{
		$seshseatcount = $_SESSION['count'];
	}

	if (isset($_POST['totalcost'])){
		$_SESSION['totalcost'] = $_POST['totalcost'];
		$seshseatcost = $_SESSION['totalcost'];
	}else{
		$seshseatcost = $_SESSION['totalcost'];
	}

	
	// echo "DATA IN SESSION: ";
	// echo "Session id is ";
	// echo $id;
	// echo "Show id is ";
	// echo $seshShowId;
	// echo "ID of seats selected are ";
	// echo $seshseatId;

?>