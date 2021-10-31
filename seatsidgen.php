<?php

function seatsidgen() {
    $conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM seats GROUP BY seat_row";

	if ($result = mysqli_query($conn, $sql)) {
        $num_results = $result->num_rows;

        for ($i=0; $i <$num_results; $i++) {

            $row = $result->fetch_assoc();
            $seatrow = htmlspecialchars(stripslashes($row['seat_row']));
            echo "<div>";
            echo $seatrow;
            echo "</div>";

            echo "<div class=\"row\">";
            $getcol = "SELECT * FROM seats WHERE seat_row = '$seatrow';";
            if ($ok = mysqli_query($conn, $getcol)) {

                $num_results_col = $ok->num_rows;
                for ($col=0; $col <$num_results_col; $col++){
                    $rowdeets = mysqli_fetch_assoc($ok);
                    echo "<div id=\"";
                    echo htmlspecialchars(stripslashes($rowdeets['seat_id']));
                    echo "\" class=\"seat\"></div>";
                }
            } else {
                echo "Failed fetching data from movies table.";
            }
            echo "</div>";
        }


	} else {

		echo "Failed fetching data from seats table.";

	}
	mysqli_close($conn);
}



?>
