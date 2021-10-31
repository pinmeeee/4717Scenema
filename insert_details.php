<?php
// Create connection


if(isset($_POST['submit'])){
    
    //to run PHP script on submit
	// create short variable names
    if($_REQUEST['confirm']){
        
	
        if (!$name || !$mobile || !$email || !$card) { //check that user has entered all fields
            echo "You have not entered all the required details.<br />"
                    ."Please go back and try again.";
            exit;
        }else{
                $name=$_POST['name'];
                $mobile=$_POST['mobile'];
                $email=$_POST['email'];
                $card=$_POST['card'];
                $conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $query = "INSERT INTO payment value
                            (null,'".$name."', '".$mobile."', '".$email."', '".$card."')";

                if ($result = mysqli_query($conn, $query)) {
                    $row = mysqli_fetch_assoc($result);
                    echo $name;
                } else {
                    echo "Failed fetching data from database.";
                }
                mysqli_close($conn);

        }

        // @ $db = new mysqli('localhost','f32ee','f32ee','f32ee');
        // if(mysqli_connect_errno()){
        //     echo 'Error: Could not connect to database.  Please try again later.';
        // exit;
        // }

        
    //     $result = $db->query($query); //query submission

    // //insert query results
    //     if ($result) {
    //         echo  $db->affected_rows."payment details inserted into database.";
    //     } else {
    //         echo "An error has occurred.  The payment details w not added.";
    //     }
    // }

}

    mysqli_close($conn);
?>