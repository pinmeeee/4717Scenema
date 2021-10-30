<!DOCTYPE html>
<html lang="en">
<?php include "cinemashowtimes.php"; ?>
<?php $showId = $_GET['id']; ?>

<head>
    <title>Confirmation | Scenema</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/scenema.css">
    <link rel="stylesheet" href="./css/confirmation.css">
</head>

<body>
    <div id="wrapper">
        <header>
            <img id="navilogo" src="assets/logo.png">
        </header>

    <div id="content">
        <table id="progress">
            <tr>
                <td id="smalltitle">SELECT SEATS</td>
                <td id="selected">CONFIRMATION</td>
                <td id="smalltitle">PAYMENT</td>
                <td id="smalltitle">SUCCESSFUL BOOKING</td>
            </tr>
        </table>
            <h1 id="title">confirmstion</h1>
    </div>
        <div id="confirmationcontent">
        <table class="confirmationtable">
                    <tr>
                        <th colspan="4">Your Basket</td>
                    </tr>
                    <tr>
                        <td><?php display_show_movie($showId) ?>;</td>
                    </tr>
                    <tr>
                        <td>Showing at <?php display_show_cinema($showId) ?>,;<?php display_show_day($showId) ?>&nbsp,;<?php display_show_time($showId) ?>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>ITEM</td>
                        <td>COST</td>
                        <td>QUANTITY</td>
                        <td>SUBTOTAL</td>
                    </tr>
                    <tr>
                        <td>weekday standard</td>
                        <td>COST</td>
                        <td>QUANTITY</td>
                        <td>SUBTOTAL</td>
                    </tr>   
                </table>
        </div>

    <div id="homebuttons">
    <button id="confirmationbutt">GO BACK</button>
    <button id="confirmationbutt">PROCEED TO PAYMENT</button>
    </div>
    </div>
</body>
</html>