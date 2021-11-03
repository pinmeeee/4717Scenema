<?php

include "seatselection.php";


// Create connection
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

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
                $query = "INSERT INTO payment values
                            (null,'".$name."', '".$mobile."', '".$email."', '".$card."', '".$id."')";
                
                $result = mysqli_query($conn, $query);
                if ($result) {
                    $queryLastIndex = "SELECT MAX( payment_id ) FROM `payment`;";
                    $lastIndex = mysqli_query($conn, $queryLastIndex);
                    $row = $lastIndex->fetch_assoc();
                    $lastIndex = $row['MAX( payment_id )'];
                    
                     

                } else {
                    echo "An error has occurred.  The item was not added.";
                }

                // $seating = unserialize($_SESSION['seatsSelected']);
                // foreach ($_SESSION['seatsSelected'] as $seat){
                echo "im outside the foreach loop";
                $seatarray = explode(",", $seshseatId);
                if(is_array($seatarray)){
                    echo "seat id is an array!!";
                    foreach ($seatarray as $seat){
                        echo "im in the foreach loop";
                        $query2 ="UPDATE available
                                SET taken = '1', session_id = '$id'
                                WHERE show_id = ".$seshShowId." AND seat_id = ".$seat."
                        ";
                    
                        if ($result2 = mysqli_query($conn, $query2)) {
                            $row2 = mysqli_fetch_assoc($result2);
                            echo "availabilty updated for red_id: ";
                            echo htmlspecialchars(stripslashes($row2['res_id']));
                        } else {
                            echo "An error has occurred.  availability not updated";
                        }


                }
                }else{
                    echo gettype($seatarray);
                }

                
               

                $to      = 'f32ee@localhost';
                $subject = 'Payment Confirmed!';
                $message = "Your tickets has been confirmed! \nPayment Id: {$lastIndex}. \nSeats:{$seshseatId}";
                $headers = 'From: f32ee@localhost' . "\r\n" .
                    'Reply-To: f32ee@localhost' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                mail($to, $subject, $message, $headers,'-ff32ee@localhost');
                // echo ("mail sent to : ".$to);
        }   
?>