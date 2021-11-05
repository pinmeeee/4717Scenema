<?php include "dropdown.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Our Cinemas | Scenema</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/scenema.css">
    <link rel="stylesheet" href="./css/cinema.css">
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
                <select name="timeSelected" id="timeSelected" class="filter" disabled>
                    <option value="none" selected disabled hidden>SELECT TIME</option>
                    <option value="1">9am</option>
                    <option value="2">12pm</option>
                    <option value="3">6pm</option>
                </select>
                <button type="submit" class="filterbutt">BOOK NOW</button>
                </form>
            </div>
            <div><h1 id="title">OUR CINEMAS</h1></div>
            <div id="cinemascontent">
                <div class="cinemalocation">
                    <a href="./showtimecin.php?id=1">
                        <img src="assets/clementi.png">
                        <div class="cinematitle">CLEMENTI</div>
                    </a>
                    <p>3155 Commonwealth Ave W<br>Singapore 129588</p>
                </div>
                <div class="cinemalocation">
                    <a href="./showtimecin.php?id=2">
                        <img src="assets/jurongpoint.png">
                        <div class="cinematitle">JURONG</div>
                    </a>
                    <p>1 Jurong West Central 2<br> Singapore 648886</p>
                </div>
                <div class="cinemalocation">
                    <a href="./showtimecin.php?id=3">
                        <img src="assets/amk.png">
                        <div class="cinematitle">ANG MO KIO</div>
                    </a>
                    <p>53 Ang Mo Kio Ave 3<br>Singapore 569933</p>
                </div>
            </div>
        </div>
        <footer>
            <small><i>Copyright &copy; 2021 Scenema Cinemas</i></small>
        </footer>
    </div>
</body>

</html>