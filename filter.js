
var month;
function setMonth(){
    month = document.getElementById('month').value;
    alert(month);
}

var moviesel=0;
var cinsel=0;
var daysel=0;
var timesel=0;

function update_movie(){
    moviesel = document.getElementById("movieSelected").value;
    enabletime();
    enablebutt();
}
function update_cinema() {
    cinsel = document.getElementById("cinemaSelected").value;
    enabletime();
    enablebutt();
}
function update_day() {
    daysel = document.getElementById("daySelected").value;
    enabletime();
    enablebutt();
}
function enabletime(){
    if (moviesel!=0 & cinsel!=0 & daysel!=0 ){
        alert("time dropdown enabled, timesel is"+timesel);
        document.getElementById("timeSelected").disabled = false;
        timesel = document.getElementById("timeSelected").value;
    }else{
        document.getElementById("timeSelected").disabled = true;
    }  
}
function enablebutt(){
    if (moviesel != 0 & cinsel != 0 & daysel != 0) {
        if (timesel === 1 | timesel === 2 |timesel === 3){
            document.getElementById("booknowbutt").disabled = false;
            alert("button enabled, timesel is" + timesel);
        }else{
            alert("button not enabled, timesel,moviesel,cinemasel,daysel is" + timesel + moviesel + cinsel +daysel + timesel);
        }
    } else {
        document.getElementById("timeSelected").disabled = true;
    }

}
