<?php


function display_selected_movie_title($id) {
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM movies WHERE movie_id = $id;";

	if ($result = mysqli_query($conn, $sql)) {
		$row = mysqli_fetch_assoc($result);
		echo htmlspecialchars(stripslashes($row['title']));
	} else {
		echo "display_selected_movie_title failed";
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

function display_selected_movie_poster($id) {
	switch ($id) {
		case 0:
			echo "<p>error</p>";
			break;
		case 1:
			echo "<img src=\"./assets/pawpatrol.jpeg\">";
			break;
		case 2:
			echo "<img src=\"./assets/shangchi.jpeg\">";
			break;
		case 3: 
			echo "<img src=\"./assets/bossbaby.jpeg\">";
			break;
	}
}

function display_showtime_button($id) {
	echo "<a id=\"showtimebutt\" href=\"./showtimemov.php?id=";
	echo $id;
	echo "\">SHOWTIMES</a>";
}

