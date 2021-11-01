<?php

include 'insert_details.php';
$to      = 'f32ee@localhost';
    $subject = 'Order Confirmed!';
    $message = "Your tickets has been confirmed!";
    $headers = 'From: f32ee@localhost' . "\r\n" .
        'Reply-To: f32ee@localhost' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers,'-ff32ee@localhost');
    // echo ("mail sent to : ".$to);

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
            <img id="navilogo" src="logo.png">
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
        </div>
        <div id="homebuttons">
            <a href="index.html"><button id="homebutt">HOME</button></a>
            </div>
    </div>
</body>
</html>