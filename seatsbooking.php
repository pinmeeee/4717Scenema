
<!DOCTYPE html>
<html lang="en">
<?php include "cinemashowtimes.php"; ?>
<?php $showId = $_GET['id']; ?>
<?php require_once('seatselection.php') ?>



<head>
    <title>Seats Booking | Scenema</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/scenema.css">
    <link rel="stylesheet" href="./css/seatsbooking.css">
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
            <div id="basketcontent">
                <table class="baskettable">
                    <tr>
                        <th colspan="2">Your Basket</td>
                    </tr>
                    <tr>
                        <td><?php display_show_movie($showId) ?>&nbsp;</td>
                        <td>No. of tickets: <span id="count">0</span></td>
                    </tr>
                    <tr>
                        <td>Total Cost: $</td>
                        <td><span id="total">0</span>
                        </td>
                    </tr>   
                </table>
            </div>
        </div>
        <div id="bookingbuttons">
            <a href="confirmation.php"><button type="button" class="bookingbutt">BOOK NOW</button></a>
        </div>
        <footer>
            <small><i>Copyright &copy; 2021 Scenema Cinemas</i></small>
        </footer>
    </div>
</body>

<script>
     
    var count=0;
    var seats=document.getElementsByClassName("seat");
    for(var i=0;i<seats.length;i++){
      var item=seats[i];
      
      item.addEventListener("click",(event)=>{
        var price= 10;

        if (!event.target.classList.contains('occupied') && !event.target.classList.contains('selected') ){
        count++;
        
        var total=count*price;
        event.target.classList.add("selected");
        document.getElementById("count").innerText=count;
        document.getElementById("total").innerText=total;

        }
      })
    }
  </script>

</html>