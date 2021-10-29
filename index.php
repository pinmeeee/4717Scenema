
<?php include "dropdown.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home | Scenema</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/scenema.css">
    <script type="text/javascript" src="filter.js"></script>
</head>

<body>
    <div id="wrapper">
        <div id="homepageheader">
            <img id="homelogo" src="assets/logo.png">
        </div>
        <div id="homebuttons">
            <a href="nowshowing.html"><button type="button" class="mainbutt">MOVIES</button></a>
            <a href="cinemas.html"><button type="button" class="mainbutt">CINEMAS</button></a>
        </div>
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
                <select name="timeSelected" id="timeSelected" class="filter" disabled>
                    <option value="none" selected disabled hidden>SELECT TIME</option>
                    <option value="1">9am</option>
                    <option value="2">12pm</option>
                    <option value="3">6pm</option>
                </select>
                <button type="submit" class="filterbutt">BOOK NOW</button>
                </form>
            </div>
        <div id="homecontent">
                <a href="./moviedetails.php?id=1">pawpatrol banner</a>
                <a href="./moviedetails.php?id=2"><img src="assets/shangchibanner.jpg"></a>
        </div>
        <footer>
            <small><i>Copyright &copy; 2021 Scenema Cinemas</i></small>
        </footer>
    </div>
</body>
</html>