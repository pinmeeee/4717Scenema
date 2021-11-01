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

	if (isset($seatId)){
		$_SESSION['seatid'] = $seatId;
		$seshseatId = $_SESSION['seatid'];
	}else{
		$seshseatId = $_SESSION['seatid'];
	}

	

	// if (isset($_POST['seatsSelected'])){
	// 	$_SESSION['seshSets'] = $_POST['seatsSelected'];
	// 	$seshSeats = $_SESSION['seshSets'];
	// }else{
	// 	$seshSeats = $_SESSION['seshSets'];
	// }

	// if (! $_POST['seatsSelected']){
	// 	echo "there is something";
	// }

	
	echo "Session id is";
	echo $id;
	echo "Show id is";
	echo $seshShowId;
	// echo "Seats selected are";
	// echo $seshSeats;

?>