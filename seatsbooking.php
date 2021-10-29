
<!DOCTYPE html>
<html lang="en">
<?php include "cinemashowtimes.php"; ?>
<?php $showId = $_GET['id']; ?>



<head>
    <title>Seats Booking | Scenema</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/scenema.css">
    <link rel="stylesheet" href="./css/seatsbooking.css">
    <script type="text/javascript" src="jobs-validation.js"></script>
</head>

<body>
    <div id="wrapper">
        <header>
            <img id="navilogo" src="assets/logo.png">
        </header>
        
        <div id="seatsbookingcontent">
            <div id="seatsselection">
                <h2 id="title">
                    <?php display_show_movie($showId) ?>&nbsp;
                    @<?php display_show_cinema($showId) ?>&nbsp;
                    <?php display_show_day($showId) ?>&nbsp;
                    <?php display_show_time($showId) ?>&nbsp;
                </h2>
                <table id="progress">
                    <tr>
                        <td id="selected">SELECT SEATS</td>
                        <td id="smalltitle">CONFIRMATION</td>
                        <td id="smalltitle">PAYMENT</td>
                        <td id="smalltitle">SUCCESSFUL BOOKING</td>
                    </tr>
                </table>
                
                <ul class="showcase">
                    <li class="legend">
                      <div id="seat" class="seat"></div>
                      <small class="seatlabel">Available</small>
                    </li>
                    <li class="legend">
                      <div id="seat" class="seat selected"></div>
                      <small class="seatlabel">Selected</small>
                    </li>
                    <li class="legend">
                      <div id="seat" class="seat occupied"></div>
                      <small class="seatlabel">Occupied</small>
                    </li>
                  </ul>
                  
                <div id="seatslayout">
                
                    <div class="screen"></div>
                
                    <div class="row">
                        <div id="seat" class="seat"></div>
                        <div id="seat" class="seat"></div>
                        <div id="seat" class="seat"></div>
                        <div id="seat" class="seat"></div>
                        <div id="seat" class="seat"></div>
                    </div>
                    <div class="row">
                        <div id="seat" class="seat"></div>
                        <div id="seat" class="seat"></div>
                        <div id="seat" class="seat"></div>
                        <div id="seat" class="seat occupied"></div>
                        <div id="seat" class="seat occupied"></div>
                    </div>
                    <div class="row">
                        <div id="seat" class="seat"></div>
                        <div id="seat" class="seat"></div>
                        <div id="seat" class="seat"></div>
                        <div id="seat" class="seat occupied"></div>
                        <div id="seat" class="seat occupied"></div>
                    </div>
                    <div class="row">
                        <div id="seat" class="seat"></div>
                        <div id="seat" class="seat"></div>
                        <div id="seat" class="seat"></div>
                        <div id="seat" class="seat"></div>
                        <div id="seat" class="seat"></div>
                    </div>
                
                </div>
            </div>
            <div id="basket">
                <p>this is basket</p>
            </div>
        </div>
        <footer>
            <small><i>Copyright &copy; 2021 Scenema Cinemas</i></small>
        </footer>
    </div>
</body>

</html>