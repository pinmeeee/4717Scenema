<?php


function display_selected_movie_title($id) {
	
	if ($result = mysqli_query($conn, $sql)) {
		$row = mysqli_fetch_assoc($result);
		echo htmlspecialchars(stripslashes($row['title']));
	} else {
		echo "Failed fetching data from database.";
	}
	mysqli_close($conn);
}
function display_selected_movie_director($id) {
	$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM movies WHERE movie_id = $id;";

	if ($result = mysqli_query($conn, $sql)) {
		$row = mysqli_fetch_assoc($result);
		echo htmlspecialchars(stripslashes($row['director']));
	} else {
		echo "Failed fetching data from database.";
	}
	mysqli_close($conn);
}
function display_selected_movie_cast($id) {
	$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM movies WHERE movie_id = $id;";

	if ($result = mysqli_query($conn, $sql)) {
		$row = mysqli_fetch_assoc($result);
		echo htmlspecialchars(stripslashes($row['cast']));
	} else {
		echo "Failed fetching data from database.";
	}
	mysqli_close($conn);
}
function display_selected_movie_synopsis($id) {
	$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM movies WHERE movie_id = $id;";

	if ($result = mysqli_query($conn, $sql)) {
		$row = mysqli_fetch_assoc($result);
		echo htmlspecialchars(stripslashes($row['synopsis']));
	} else {
		echo "Failed fetching data from database.";
	}
	mysqli_close($conn);
}

?>