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
            echo "<tr><td><a>";
            echo htmlspecialchars(stripslashes($row['showtime']));
            echo "</a></td></tr>";

        }
		echo "</table>";


	} else {

		echo "Failed fetching data from database.";

	}
	mysqli_close($conn);
}

?>