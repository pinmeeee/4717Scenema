<?php
// Create connection
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");


                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }


<<<<<<< HEAD
=======

>>>>>>> 0e220173414fef3def0fc67647dc6c1169542764
	// create short variable names
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $card=$_POST['card'];

	
        if (!$name || !$mobile || !$email || !$card) { //check that user has entered all fields
            echo "You have not entered all the required details.<br />"
                    ."Please go back and try again.";
            exit;
        }else{
<<<<<<< HEAD
=======

                $conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");


                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
>>>>>>> 0e220173414fef3def0fc67647dc6c1169542764

                $query = "INSERT INTO payment value
                            (null,'".$name."', '".$mobile."', '".$email."', '".$card."')";

                if ($result = mysqli_query($conn, $query)) {
                    $row = mysqli_fetch_assoc($result);
                    
                } else {
                    echo "Failed fetching data from database.";
                }
<<<<<<< HEAD
        }

=======
                // mysqli_close($conn);

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

// }
// }
    // mysqli_close($conn);
>>>>>>> 0e220173414fef3def0fc67647dc6c1169542764
?>