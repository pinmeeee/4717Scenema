<?php
// Create connection
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

<<<<<<< HEAD
=======
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }


<<<<<<< HEAD
=======

>>>>>>> 0e220173414fef3def0fc67647dc6c1169542764
>>>>>>> ff2d1b49a57c9b1f8459aeffa22eeabe67766c95
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

                $query = "INSERT INTO payment values
                            (null,'".$name."', '".$mobile."', '".$email."', '".$card."')";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    $queryLastIndex = "SELECT MAX( payment_id ) FROM `payment`;";
                    $lastIndex = mysqli_query($conn, $queryLastIndex);
                    $row = $lastIndex->fetch_assoc();
                    $lastIndex = $row['MAX( payment_id )'];                    
=======
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
                    
>>>>>>> ff2d1b49a57c9b1f8459aeffa22eeabe67766c95
                } else {
                    echo "User not added to database.";
                }
<<<<<<< HEAD
=======
<<<<<<< HEAD
        }

=======
                // mysqli_close($conn);

>>>>>>> ff2d1b49a57c9b1f8459aeffa22eeabe67766c95
        }

        $to      = 'f32ee@localhost';
    $subject = 'Payment Confirmed!';
    $message = "Your tickets has been confirmed! \nPayment Id: {$lastIndex}.";
    $headers = 'From: f32ee@localhost' . "\r\n" .
        'Reply-To: f32ee@localhost' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

<<<<<<< HEAD
    mail($to, $subject, $message, $headers,'-ff32ee@localhost');
    // echo ("mail sent to : ".$to);
    
=======
// }
// }
    // mysqli_close($conn);
>>>>>>> 0e220173414fef3def0fc67647dc6c1169542764
>>>>>>> ff2d1b49a57c9b1f8459aeffa22eeabe67766c95
?>