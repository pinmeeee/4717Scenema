
var month;
function setMonth(){
    month = document.getElementById('month').value;
    alert(month);
}

var moviesel=0;
var cinsel=0;
var daysel=0;

function update_movie(){
    moviesel = document.getElementById("movieSelected").value;
    enabletime();
}
function update_cinema() {
    cinsel = document.getElementById("cinemaSelected").value;
    enabletime();
}
function update_day() {
    daysel = document.getElementById("daySelected").value;
    enabletime();
    // alert("You have selected"+moviesel+cinsel+daysel);
}
function enabletime(){
    if (moviesel!=0 & cinsel!=0 & daysel!=0 ){
        document.getElementById("timeSelected").disabled = false;
    }else{
        document.getElementById("timeSelected").disabled = true;
    }
}
