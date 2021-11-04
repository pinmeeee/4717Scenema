<?php

function seatsidgen($spefshow) {
    $conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM seats GROUP BY seat_row"; //select all seats, each row of result is all the seats belonging to one row

	if ($result = mysqli_query($conn, $sql)) {
        $num_results = $result->num_rows;

        for ($i=0; $i <$num_results; $i++) { //for each row of seats

            $row = $result->fetch_assoc();
            $seatrow = htmlspecialchars(stripslashes($row['seat_row']));

            echo "<div class=\"row\">";
            $getcol = "SELECT * FROM seats WHERE seat_row = '$seatrow';"; //each row of result is one seat belonging to the row

            if ($ok = mysqli_query($conn, $getcol)) {

                $num_results_col = $ok->num_rows;
                for ($col=0; $col <$num_results_col; $col++){

                    $rowdeets = mysqli_fetch_assoc($ok);
                    $checkid = htmlspecialchars(stripslashes($rowdeets['seat_id']));
                    $spefshowid = htmlspecialchars(stripslashes($spefshow));

                    $getavail = "SELECT * FROM available WHERE seat_id = '$checkid' AND show_id = '$spefshowid'";

                    if ($resultcheck = mysqli_query($conn, $getavail)) {

                        //echo "showid is $spefshowid";

                        $rowavail = mysqli_fetch_assoc($resultcheck);
                        $avail = $rowavail['taken'];

                        if ($avail == '5'){
                            //echo "seat $checkid is taken! ";
                            echo "<div id=\"";
                            echo htmlspecialchars(stripslashes($rowdeets['seat_id']));
                            echo "\" class=\"seat occupied\"></div>";
                        }else{
                            //echo "seat $checkid is not taken! ";
                            echo "<div id=\"";
                            echo htmlspecialchars(stripslashes($rowdeets['seat_id']));
                            echo "\" class=\"seat\"></div>";
                        }

                    } else {
                        echo "Failed fetching data from database table avail.";
                    }

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
