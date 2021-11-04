<?php
include 'insert_details.php';


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
            <p class="thick" >YOUR TICKETS</p>
            <br>
            <p> Your payment ID is <?php echo $lastIndex ?></p>
            <p> Your seats are: <?php echo $seshseatId ?></p>
        </div>
        <div id="homebuttons">
            <a href="index.php"><button id="homebutt">HOME</button></a>
            </div>
    </div>
</body>
</html>
