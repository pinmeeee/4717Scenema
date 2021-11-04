
<!DOCTYPE html>
<html lang="en">
<?php include "cinemashowtimes.php"; ?>
<?php include "seatsidgen.php"; ?>
<?php $showId = $_GET['id']; ?>
<?php include "seatselection.php" ?>


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
<form method="POST" action="confirmation.php">

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

                    <?php seatsidgen($showId) ?>
                    <!-- <div class="row">
                        <div id="test1" class="seat"></div>
                        <div id="test2" class="seat occupied"></div>
                        <div id="test3" class="seat occupied"></div>
                        <div id="test4" class="seat"></div>
                        <div id="test5" class="seat"></div>
                    </div> -->
                </div>
            </div>
            <div id="basketcontent">
                <table class="baskettable">
                    <tr>
                        <th>Your Basket</th>
                    </tr>
                    <tr>
                        <td><?php display_show_movie($showId) ?>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>No. of tickets: <input readonly  onchange="enablebookbutt()" type="text" name="count" id="count" value=""></td> 
                    </tr>
                    <tr>
                        <td>Total Cost: $<input readonly type="text" name="totalcost" id="totalcost" value=""></td>
                    </tr>   
                    <tr>
                        <td>Seats selected: <input readonly type="text" name="seatsSelected" id="seatsSelected" value=""></td>
                    </tr>
                </table>
                <!-- <div>Seats selected: <input type="text" name="seatsSelected" id="seatsSelected" value=""></div> -->
                <!-- <div>Seats selected: 
                    <span name="seatsSelected" id="seatsSelected">none</span>
                </div> -->
                <!-- <input type="hidden" id="seatsSelected" name="seatsSelected" value="">  -->
            </div>
        </div>
        <div id="bookingbuttons">
            <button type="submit" class="bookingbutt" id="booknowbutt">BOOK NOW</button>
        </div>
</form>
        <footer>
            <small><i>Copyright &copy; 2021 Scenema Cinemas</i></small>
        </footer>
    </div>
</body>

<script>
     
    var count=0;
    var seats=document.getElementsByClassName("seat");
    var seatSel= [];
    for(var i=0;i<seats.length;i++){
      var item=seats[i];
      
      item.addEventListener("click",(event)=>{
        var price= 10;
        

        if (!event.target.classList.contains('occupied') && !event.target.classList.contains('selected') ){
            count++;
            seatSel.push(event.target.id);
            var total=count*price;
            event.target.classList.add("selected");

            document.getElementById("count").value=count;
            document.getElementById("totalcost").value=total;
            document.getElementById("seatsSelected").value=seatSel;

        }else if (event.target.classList.contains('selected') ){
            count--;

            var index = seatSel.indexOf(event.target.id);
            if (index > -1) {
                seatSel.splice(index, 1);
            }
            var total=count*price;
            event.target.classList.remove("selected");
            document.getElementById("count").innerText=count;
            document.getElementById("totalcost").innerText=total;
            document.getElementById("seatsSelected").value=seatSel;
        }
      })
    }

    //trying to disable book now button when count is less than 1

    // function enablebookbutt(){
    //     if (count==0){
    //         document.getElementById("booknowbutt").disabled=true;
    //         alert("booknowbutton disabled");
    //     }else{
    //         alert("booknowbutton enabled");
    //         document.getElementById("booknowbutt").disabled=false;
    //     }
    // }
    
  </script>

</html>