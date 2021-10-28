<!DOCTYPE html>
<?php include "cinemashowtimes.php"; ?>
<?php $cinId = $_GET['id']; ?>
<html lang="en">

<head>
    <title>Showtimes | Scenema</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/scenema.css">
    <link rel="stylesheet" href="./css/showtime.css">
    <script type="text/javascript" src="jobs-validation.js"></script>
</head>

<body>
    <div id="wrapper">
        <header>
            <img id="navilogo" src="assets/logo.png">
            <div id="navibutts">
            <a href="index.html"><button type="button" class="navibutt">HOME</button></a>
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
            <div id="showtimecontent">
                <h1 id="title"><?php display_cinema_name($cinId) ?> 
                    
                 </h1>
                <table class="showtimerow">
                    <tr>
                        <td rowspan="2">Paw Patrol</td>
                        <td>MON (1JAN)</td>
                        <td>TUE (2JAN)</td>
                        <td>WED (3JAN)</td>
                    </tr>
                    <tr>
                        <td><?php display_showtimes($cinId, 1, 1) ?></td>
                        <td><?php display_showtimes($cinId, 2, 1) ?></td>
                        <td><?php display_showtimes($cinId, 3, 1) ?></td>
                    </tr>
                </table>
                <table class="showtimerow">
                    <tr>
                        <td rowspan="2">Shang-Chi</td>
                        <td>MON (1JAN)</td>
                        <td>TUE (2JAN)</td>
                        <td>WED (3JAN)</td>
                    </tr>
                    <tr>
                        <td><?php display_showtimes($cinId, 1, 2) ?></td>
                        <td><?php display_showtimes($cinId, 2, 2) ?></td>
                        <td><?php display_showtimes($cinId, 3, 2) ?></td>
                    </tr>
                </table>
                <table class="showtimerow">
                    <tr>
                        <td rowspan="2">Boss Baby</td>
                        <td>MON (1JAN)</td>
                        <td>TUE (2JAN)</td>
                        <td>WED (3JAN)</td>
                    </tr>
                    <tr>
                        <td><?php display_showtimes($cinId, 1, 3) ?></td>
                        <td><?php display_showtimes($cinId, 2, 3) ?></td>
                        <td><?php display_showtimes($cinId, 3, 3) ?></td>
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