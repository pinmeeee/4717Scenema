<?php
<<<<<<< HEAD
include 'insert_details.php';

if ($result) {
            
    // Get the last index in the log to be assigned the payment_id, 
    $queryLastIndex = "SELECT MAX( payment_id ) FROM `payment`;";
    // echo $queryLastIndex;
    $lastIndex = $db->query($queryLastIndex);
    $row = $lastIndex->fetch_assoc();
    $lastIndex = $row['MAX( payment_id )'];
    // echo ( $lastIndex);

=======

include 'insert_details.php';
>>>>>>> 0e220173414fef3def0fc67647dc6c1169542764
$to      = 'f32ee@localhost';
    $subject = 'Order Confirmed!';
    $message = "Your tickets has been confirmed! \nPayment Id: {$lastIndex}.";
    $headers = 'From: f32ee@localhost' . "\r\n" .
        'Reply-To: f32ee@localhost' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers,'-ff32ee@localhost');
    // echo ("mail sent to : ".$to);

mysqli_close($conn);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Success | Scenema</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/scenema.css">
    <link rel="stylesheet" href="./css/success.css">
</head>

<body >
    <div id="wrapper">
        <header>
            <img id="navilogo" src="assets/logo.png">
        </header>

    <div id="content">
        <table id="progress">
            <tr>
                <td id="smalltitle">SELECT SEATS</td>
                <td id="smalltitle">CONFIRMATION</td>
                <td id="smalltitle">PAYMENT</td>
                <td id="selected">SUCCESSFUL BOOKING</td>
            </tr>
        </table>
            <h1 id="title">BOOKING SUCCESSFUL</h1>
    </div>
        <div id="successslip">
            <p>YOUR TICKETS</p>
            <p><?php {$lastIndex} ?>
        </div>
        <div id="homebuttons">
            <a href="index.html"><button id="homebutt">HOME</button></a>
            </div>
    </div>
</body>
</html>