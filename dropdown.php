<?php
    $movieId = $_GET['movieSelected'];
        $cinemaId = $_GET['cinemaSelected'];
        $dayId = $_GET['daySelected'];

        echo $movieId;



        
        $conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM showtimes WHERE cinema_id=$cinemaId  AND movie_id=$movieId AND day_id=$dayId limit 1";

            if ($result = mysqli_query($conn, $sql)) {
                $row = mysqli_fetch_assoc($result);
                $showid = htmlspecialchars(stripslashes($row['show_id']));
                header("Location:./seatsbooking.php?id=$showid");
            } else {
                echo "Failed fetching data from database.";
            }
            mysqli_close($conn);
            

?>