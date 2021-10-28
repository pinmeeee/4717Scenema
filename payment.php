<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment | Scenema</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="scenema.css">
    <link rel="stylesheet" href="payment.css">
</head>
<body>
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
</body>
</html>