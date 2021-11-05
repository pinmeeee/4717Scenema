<!DOCTYPE html>
<?php include "cinemashowtimes.php"; ?>
<?php include "dropdown.php"; ?>
<?php $movId = $_GET['id']; ?>
<html lang="en">

<head>
    <title>Showtimes | Scenema</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/scenema.css">
    <link rel="stylesheet" href="./css/showtime.css">
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
            <div id="showtimecontent">
                <h1 id="title"><?php display_movie_name($movId) ?> 
                    
                 </h1>
                <table class="showtimerow">
                    <tr>
                        <td rowspan="2">Clementi Mall</td>
                        <td>MON (1JAN)</td>
                        <td>TUE (2JAN)</td>
                        <td>WED (3JAN)</td>
                    </tr>
                    <tr>
                        <td><?php display_showtimes(1, 1, $movId) ?></td>
                        <td><?php display_showtimes(1, 2, $movId) ?></td>
                        <td><?php display_showtimes(1, 3, $movId) ?></td>
                    </tr>
                </table>
                <table class="showtimerow">
                    <tr>
                        <td rowspan="2">Jurong Point</td>
                        <td>MON (1JAN)</td>
                        <td>TUE (2JAN)</td>
                        <td>WED (3JAN)</td>
                    </tr>
                    <tr>
                        <td><?php display_showtimes(2, 1, $movId) ?></td>
                        <td><?php display_showtimes(2, 2, $movId) ?></td>
                        <td><?php display_showtimes(2, 3, $movId) ?></td>
                    </tr>
                </table>
                <table class="showtimerow">
                    <tr>
                        <td rowspan="2">AMK Hub</td>
                        <td>MON (1JAN)</td>
                        <td>TUE (2JAN)</td>
                        <td>WED (3JAN)</td>
                    </tr>
                    <tr>
                        <td><?php display_showtimes(3, 1, $movId) ?></td>
                        <td><?php display_showtimes(3, 2, $movId) ?></td>
                        <td><?php display_showtimes(3, 3, $movId) ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <footer>
            <small><i>Copyright &copy; 2021 Scenema Cinemas</i></small>
        </footer>
    </div>
</body>

</html>