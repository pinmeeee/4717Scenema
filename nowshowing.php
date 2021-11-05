<?php include "dropdown.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Now Showing | Scenema</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/scenema.css">
    <link rel="stylesheet" href="./css/nowshowing.css">
    <script type="text/javascript" src="filter.js"></script>
</head>

<body>
    <div id="wrapper">
        <header>
            <a href="./index.php"><img id="navilogo" src="assets/logo.png"></a>
            <div id="navibutts">
                <a href="index.php"><button type="button" class="navibutt">HOME</button></a>
                <a href="nowshowing.php"><button type="button" class="navibutt">MOVIES</button></a>
                <a href="cinemas.php"><button type="button" class="navibutt">CINEMAS</button></a>
            </div>
        </header>
        
        <div id="content">
            <div id="filters">
            <form action="./dropdown.php" method="get">
                <select name="movieSelected" id="movieSelected" class="filter"
                onchange="update_movie()">
                    <option value="none" selected disabled hidden>SELECT MOVIE</option>
                    <option value="1">Paw Patrol</option>
                    <option value="2">Shang-Chi</option>
                    <option value="3">Boss Baby</option>
                </select>
                <select name="cinemaSelected" id="cinemaSelected" class="filter"
                onchange="update_cinema()">
                    <option value="none" selected disabled hidden>SELECT CINEMA</option>
                    <option value="1">Clementi Mall</option>
                    <option value="2">Jurong Point</option>
                    <option value="3">AMK Hub</option>
                </select>
                <select name="daySelected" id="daySelected" class="filter"
                onchange="update_day()">
                    <option value="none" selected disabled hidden>SELECT DAY</option>
                    <option value="1">Monday</option>
                    <option value="2">Tuesday</option>
                    <option value="3">Wednesday</option>
                </select>
                
               <?php
                    // $conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

                    // if (!$conn) {
                    //     die("Connection failed: " . mysqli_connect_error());
                    // }

                    // $moviesel=$_GET['moviesel'];
                    // $cinsel=$_GET['cinsel'];
                    // $daysel=$_GET['daysel'];

                    // // $sql = "SELECT DISTINCT showtime FROM showtimes WHERE cinema_id=$cinsel AND movie_id=$moviesel AND day_id=$daysel limit 1";
                    // if(isset($moviesel) and isset($cinsel) and isset($daysel) and strlen($moviesel) > 0 and strlen($cinsel) > 0 and strlen($daysel) > 0 ){
                    //     // echo "<div>$moviesel$cinsel$daysel</div>";
                    //     echo "<div>reloaded page</div>";
                    // }else{
                    //     echo "<select name=\"timeSelected\" id=\"timeSelected\" class=\"filter\" disabled onchange=\"enablebutt()\">
                    //         <option value=\"none\" selected disabled hidden>SELECT TIME</option> 
                    //         <option value=\"1\">9am</option>
                    //         <option value=\"2\">12pm</option>
                    //         <option value=\"3\">6pm</option>
                    //     </select>";
                    // }

                ?>


                <select name="timeSelected" id="timeSelected" class="filter" disabled onchange="enablebutt()">
                    <option value="none" selected disabled hidden>SELECT TIME</option> 
                    <option value="1">9am</option>
                    <option value="2">12pm</option>
                    <option value="3">6pm</option>
                </select>
                <button type="submit" class="filterbutt" id="booknowbutt" disabled>BOOK NOW</button>
                </form>
            </div>
            <div>
                <h1 id="title">NOW SHOWING</h1>
            </div>
            <div id="nowshowingcontent">
                <a href="./moviedetails.php?id=1"><img src="assets/pawpatrol.jpeg"></a>
                <a href="./moviedetails.php?id=2"><img src="assets/shangchi.jpeg"></a>
                <a href="./moviedetails.php?id=3"><img src="assets/bossbaby.jpeg"></a>
            </div>
        </div>
        <footer>
            <small><i>Copyright &copy; 2021 Scenema Cinemas</i></small>
        </footer>
    </div>
</body>

</html>