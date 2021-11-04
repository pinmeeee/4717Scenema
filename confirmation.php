<!DOCTYPE html>
<html lang="en">
<?php include "cinemashowtimes.php"; ?>
<?php include "seatselection.php"; ?>


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
            <h1 id="title">CONFIRMATION</h1>
    </div>
        <div id="confirmationcontent">
        <table class="confirmationtable">
                    <tr>
                        <th colspan="4">Your Basket</th>
                    </tr>
                    <tr>
                        <td>
                            <?php  display_show_movie($seshShowId); 
                            echo " @";
                            display_show_cinema($seshShowId);
                            echo "  ";
                            display_show_day($seshShowId);
                            echo "  ";
                            display_show_time($seshShowId);
                            ?>
                        </td>
                    </tr>
                    <tr><td>
                    <?php 
                        echo "Seats:";
                        echo $seshseatId;
                    ?></td>
                    </tr>
                    <tr>
                        <th>ITEM</th>
                        <th>COST</th>
                        <th>QUANTITY</th>
                        <th>SUBTOTAL</th>
                    </tr>
                    <tr>
                        <td>weekday standard</td>
                        <td>10</td>
                        <td>
                        <?php
                        if(isset($_POST['count'])) {
                         echo $_POST['count'];
                        } else {
                             echo "nothing";
                        }
                        ?>
                        </td>
                        <td>
                        <?php
                        if(isset($_POST['totalcost'])) {
                         echo $_POST['totalcost'];
                        } else {
                             echo "nothing";
                        }
                        ?>
                        </td>
                    </tr>   
                </table>
        </div>

    <div id="homebuttons">
    <a href="seatsbooking.php?id=<?php echo $seshShowId ?>"><button id="confirmationbutt">GO BACK</button></a>
    <a href="payment.php"><button id="confirmationbutt">PROCEED TO PAYMENT</button></a>
    </div>
    </div>
</body>
</html>
