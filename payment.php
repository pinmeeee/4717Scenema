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
            <form action="success.php" method="post">
                <div>
                <label id="namelab">Name:</label>
                    <input 
                        type="text"  
                        name="name" 
                        size=50 
                        onchange="validateName()"
                        required 
                        placeholder="Enter your name here"
                    ></div><br><br>

                <div>
                <label id="phonelab">Mobile:</label>
                    <input 
                    type="text" 
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
                        name="email"
                        size=50 
                        onchange="validateEmail()"
                        required 
                        placeholder="Enter your Email-ID here"
                    ></div> <br><br>

                <div>   
                <label id="cardlab">Credit Card Number:</label>
                    <input 
                    type="text" 
                    name="card" 
                    size=50
                    maxlength="16" 
                    onchange="validateCard()"
                    required 
                    placeholder = "Enter your Credit Card number here"
                    ></div><br><br>
                    
                <div id="homebuttons">
                    <button name="return" type="button" class="paymentbutt" value="return" onclick="history.back();">GO BACK</button>
                    <button name="confirm" type="submit" class="paymentbutt" value="pay">PAY</button>
                </div>
            </form>
        </div>
            <footer>
            <small><i>Copyright &copy; 2021 Scenema Cinemas</i></small>
        </footer>
    </div>
</body>
</html>