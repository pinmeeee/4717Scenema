<?php

    $conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // echo " <select name=\"movieSelected\" id=\"movieSelected\" class=\"filter\"
    //             onchange=\"update_movie()\">
    //                 <option value=\"none\" selected disabled hidden>SELECT MOVIE</option>";



    $movieId = $_GET['movieSelected'];
    $cinemaId = $_GET['cinemaSelected'];
    $dayId = $_GET['daySelected'];

    

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