<!DOCTYPE html>
<?php include "selectedmovie.php"; ?>
<?php $movieId = $_GET['id']; ?>
<html lang="en">

<head>
    <title>MOVIE 1 | Scenema</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="scenema.css">
    <link rel="stylesheet" href="moviedetails.css">
    <script type="text/javascript" src="jobs-validation.js"></script>
</head>

<body style="background-color: #191919;">

<div id="wrapper">
        <header>
            <img id="navilogo" src="assets/logo.png">
            <div id="navibutts">
                <a href="home.html"><button type="button" class="navibutt">HOME</button></a>
                <a href="nowshowing.html"><button type="button" class="navibutt">MOVIES</button></a>
                <a href="cinemas.html"><button type="button" class="navibutt">CINEMAS</button></a>
            </div>
        </header>
<div id="content">
    <div id="filters">
        <select name="movie" id="movie" class="filter">
            <option value="none" selected disabled hidden>SELECT MOVIE</option>
            <option value="paw patrol">Paw Patrol</option>
            <option value="shang-chi">Shang-Chi</option>
            <option value="boss baby">Boss Baby</option>
        </select>
        <select name="cinema" id="cinema" class="filter">
            <option value="none" selected disabled hidden>SELECT CINEMA</option>
            <option value="clementi mall">Clementi Mall</option>
            <option value="jurong point">Jurong Point</option>
            <option value="amk hub">AMK Hub</option>
        </select>
        <select name="day" id="day" class="filter">
            <option value="none" selected disabled hidden>SELECT DAY</option>
            <option value="monday">Monday</option>
            <option value="tuesday">Tuesday</option>
            <option value="wednesday">Wednesday</option>
        </select>
        <select name="time" id="time" class="filter">
            <option value="none" selected disabled hidden>SELECT TIME</option>
            <option value="9:00:00">9am</option>
            <option value="12:00:00">12pm</option>
            <option value="18:00:00">6pm</option>
        </select>
        <button type="button" class="filterbutt">BOOK NOW</button>
    </div>
        <div id="moviedetailscontent">
            <div id="movieposter">
                <img src="assets/bossbaby.jpeg">
            </div>
            <div id="moviedetailbox">
                <p id="detailtitle"><?php display_selected_movie_title($movieId) ?></p>
                <p class="detaillabels">CAST</p>
                <p id="detailcast"><?php display_selected_movie_director($movieId) ?></p>
                <p class="detaillabels">DIRECTOR</p>
                <p id="detaildirector"><?php display_selected_movie_cast($movieId) ?></p>
                <p class="detaillabels">SYNOPSIS</p>
                <p id="detailsynopsis"><?php display_selected_movie_synopsis($movieId) ?></p>
                <button id="showtimebutt">SHOWTIMES</button>
            </div>
        </div>
        <footer>
            <small><i>Copyright &copy; 2021 Scenema Cinemas</i></small>
        </footer>
    </div>
</div>
</body>

</html>