<!DOCTYPE html>
<html lang="en">
<?php include "cinemashowtimes.php"; ?>

<?php include "seatselection.php" ?>

<?php 
    if(isset($_POST['seatsSelected'])) {
        echo $_POST['seatsSelected'];
    } else {
        echo "nothing";
    }
?>


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
<<<<<<< HEAD
                        <td>Movie Name</td>
=======
                        <td><?php display_show_movie($showId) ?>
                        <?php 
    if(isset($_POST['seatsSelected'])) {
        echo "seats selected are";
        echo $_POST['seatsSelected'];
    } else {
        echo "nothing";
    }

    if(isset($_POST['totalcost'])) {
        echo "total cost is";
        echo $_POST['totalcost'];
    } else {
        echo "nothing";
    }
?>
                    </td>
                
>>>>>>> 096b95ec91eb2c4ffd0519ddcc6302bd125717c0
                    </tr>
                    <tr>
                    <?php 
                     if(isset($_POST['seatsSelected'])) {
                        echo "seats selected are";
                        echo $_POST['seatsSelected'];
                    } else {
                        echo "nothing";
                    }  
                    ?>
                    </tr>
                    <tr>
                        <td>ITEM</td>
                        <td>COST</td>
                        <td>QUANTITY</td>
                        <td>SUBTOTAL</td>
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
    <a href="seatsbooking.php"><button id="confirmationbutt">GO BACK</button></a>
    <a href="payment.php"><button id="confirmationbutt">PROCEED TO PAYMENT</button></a>
    </div>
    </div>
</body>
</html>
