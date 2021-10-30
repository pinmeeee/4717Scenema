
<?php
// Create connection
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){//to run PHP script on submit
	// create short variable names
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$card=$_POST['card'];
	
if (!$name || !$mobile || !$email || !$card) { //check that user has entered all fields
    echo "You have not entered all the required details.<br />"
            ."Please go back and try again.";
    exit;
}

$query = "insert into payment value
            ('".$name."', '".$mobile."', '".$email."', '".$card."')";
  $result = $db->query($query);

  if ($result) {
      echo  $db->affected_rows." payment details inserted into database.";
  } else {
  	  echo "An error has occurred.  The payment details w not added.";
  }

  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment | Scenema</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/scenema.css">
    <link rel="stylesheet" href="./css/payment.css">
    <script type="text/javascript" src="payment_validation.js"></script>
</head>
<body>
    <div id="wrapper">
        <header>
            <img id="navilogo" src="assets/logo.png">
        </header>

    <div id="content">
        <table id="progress">
            <tr>
                <td id="smalltitle">SELECT SEATS</td>
                <td id="smalltitle">CONFIRMATION</td>
                <td id="selected">PAYMENT</td>
                <td id="smalltitle">SUCCESSFUL BOOKING</td>
            </tr>
        </table>
            <h1 id="title">PAYMENT DETAILS</h1>
    </div>
        <div id="paymentslip">
            <form action="insert_details.php" method="post">
                <div>
                <label id="namelab">Name:</label>
                    <input 
                        type="text"  
                        id="name" 
                        size=50 
                        onchange="validateName()"
                        required 
                        placeholder="Enter your name here"
                    ></div><br><br>

                <div>
                <label id="phonelab">Mobile:</label>
                    <input 
                    type="tel" 
                    name="mobile" 
                    size=50
                    maxlength="8" 
                    onchange="validateMobile()"
                    required 
                    placeholder = "Enter your mobile here"
                    ></div><br><br>

                <div>   
                <label id="emaillab">Email:</label>
                    <input 
                        type="text" 
                        id="email"
                        size=50 
                        onchange="validateEmail()"
                        required 
                        placeholder="Enter your Email-ID here"
                    ></div> <br><br>

                <div>   
                <label id="cardlab">Credit Card Number:</label>
                    <input 
                    type="tel" 
                    id="card" 
                    size=50
                    maxlength="16" 
                    onchange="validateCard()"
                    required 
                    placeholder = "Enter your Credit Card number here"
                    ></div><br><br>
            </form>
        </div>
        <div id="homebuttons">
            <input type="submit" id="submit" value="GO BACK" id="paymentbutt">
            <input type="submit" id="submit" value="PAY" id="paymentbutt">
            </div>
            <footer>
            <small><i>Copyright &copy; 2021 Scenema Cinemas</i></small>
        </footer>
    </div>
</body>
</html>