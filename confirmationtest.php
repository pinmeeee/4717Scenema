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
            <a href="./index.php"><img id="navilogo" src="assets/logo.png"></a>
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
    <?php
          if ($_SESSION['cart']) {
              echo "<form action='userInfo.php' method='POST'>";
              echo "<div id="confirmationcontent">
              <table class="confirmationtable">
                        <tr>
                            <th colspan="4">Your Basket</td>
                        </tr>
                        <tr>
                            <th>ITEM</th>
                            <th>COST</th>
                            <th>QTY</th>
                            <th>SUBTOTAL</th>
                          </tr>";
                  $subtotal = 0;
                  foreach ($_SESSION['cart'] as $key=>$value) {
                      $total = 10 * $value['quantity'];
                    echo "<tr>
                            <td>{$value['name']}\n<div style='color:grey;font-size:16px'>{$value['color']} </div></td> 
                            <td>{$value['cost']}</td>
                            <td>{$value['quantity']}</td>
                            <td>\$<label id='itemCost'>$total</td>
                            <input type='hidden' id='itemPrice' value='{$value['price']}'>
                            <td><a href='{$_SERVER['PHP_SELF']}?delete=$key'><img id='delete' src='assets/shoppingBag/trash.png'></a></td>
                          </tr>";
                    $subtotal = $subtotal + $total;
                  } 
              echo "</table>";
              echo "</div>";
              echo "<hr class='solid'><br>";
              echo "<span class='cartTotal'>SUBTOTAL: \$$subtotal </span><br><br><br><br>";
              echo "</form>";
              echo "<a href='userInfo.php'><button id='checkoutBtn'>CHECKOUT</button></a>";
              echo "<a href='index.php'><button id='backBtn'>BACK TO SHOPPING</button></a>";
          } else {
            echo "<div align='center' style='font-size: 18px;'>Oops! Looks like your cart is empty!</div>";
          }
          ?>

    <div id="homebuttons">
    <button id="confirmationbutt">GO BACK</button>
    <button id="confirmationbutt">PROCEED TO PAYMENT</button>
    </div>
    </div>
</body>
</html>