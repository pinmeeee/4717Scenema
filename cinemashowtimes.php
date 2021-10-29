<?php


function display_cinema_name($id) {
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM cinemas WHERE cinema_id = $id;";

	if ($result = mysqli_query($conn, $sql)) {
		$row = mysqli_fetch_assoc($result);
		echo htmlspecialchars(stripslashes($row['cinema_name']));
	} else {
		echo "Failed fetching data from database.";
	}
	mysqli_close($conn);
}

function display_movie_name($id) {
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM movies WHERE movie_id = $id;";

	if ($result = mysqli_query($conn, $sql)) {
		$row = mysqli_fetch_assoc($result);
		echo htmlspecialchars(stripslashes($row['title']));
	} else {
		echo "Failed fetching data from database.";
	}
	mysqli_close($conn);
}


function display_showtimes($cinid, $dayid, $movieid) {
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM showtimes WHERE cinema_id=$cinid AND day_id=$dayid AND movie_id=$movieid;";

	if ($result = mysqli_query($conn, $sql)) {
        $num_results = $result->num_rows;
        echo "<table>";

        for ($i=0; $i <$num_results; $i++) {

            $row = $result->fetch_assoc();
            echo "<tr><td><a href=\"./seatsbooking.php?id=";
			echo htmlspecialchars(stripslashes($row['show_id']));
			echo "\">";
            echo htmlspecialchars(stripslashes($row['showtime']));
            echo "</a></td></tr>";

        }
		echo "</table>";


	} else {

		echo "Failed fetching data from database.";

	}
	mysqli_close($conn);
}

function display_show_time($id) {
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM showtimes WHERE show_id = $id;";

	if ($result = mysqli_query($conn, $sql)) {
		$row = mysqli_fetch_assoc($result);
		echo htmlspecialchars(stripslashes($row['showtime']));
	} else {
		echo "Failed fetching data from database.";
	}
	mysqli_close($conn);
}


function display_show_movie($id) {
	$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM showtimes WHERE show_id = $id;";

	if ($result = mysqli_query($conn, $sql)) {
		$row = mysqli_fetch_assoc($result);
		$movieId = htmlspecialchars(stripslashes($row['movie_id']));
		$getmov = "SELECT * FROM movies WHERE movie_id = $movieId;";
		if ($ok = mysqli_query($conn, $getmov)) {
			$rowdeets = mysqli_fetch_assoc($ok);
			echo htmlspecialchars(stripslashes($rowdeets['title']));
		} else {
			echo "Failed fetching data from movies table.";
		}
	} else {
		echo "Failed fetching data from showtimes table.";
	}
	mysqli_close($conn);
}


function display_show_cinema($id) {
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM showtimes WHERE show_id = $id;";

	if ($result = mysqli_query($conn, $sql)) {
		$row = mysqli_fetch_assoc($result);
		$cinId = htmlspecialchars(stripslashes($row['cinema_id']));
		$getmov = "SELECT * FROM cinemas WHERE cinema_id = $cinId;";
		if ($ok = mysqli_query($conn, $getmov)) {
			$rowdeets = mysqli_fetch_assoc($ok);
			echo htmlspecialchars(stripslashes($rowdeets['cinema_name']));
		} else {
			echo "Failed fetching data from cinemas table.";
		}
	} else {
		echo "Failed fetching data from showtimes table.";
	}
	mysqli_close($conn);
}



function display_show_day($id) {
	$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM showtimes WHERE show_id = $id;";

	if ($result = mysqli_query($conn, $sql)) {
		$row = mysqli_fetch_assoc($result);
		$dayId = htmlspecialchars(stripslashes($row['day_id']));
		$getmov = "SELECT * FROM showdays WHERE day_id = $dayId;";
		if ($ok = mysqli_query($conn, $getmov)) {
			$rowdeets = mysqli_fetch_assoc($ok);
			echo htmlspecialchars(stripslashes($rowdeets['day']));
		} else {
			echo "Failed fetching data from showdays table.";
		}
	} else {
		echo "Failed fetching data from showtimes table.";
	}
	mysqli_close($conn);
}


?>