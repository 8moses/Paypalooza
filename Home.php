

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Home.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/berlin-sans-fb-demi" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<style>
@import url('https://fonts.cdnfonts.com/css/berlin-sans-fb-demi');
</style>
  <!-- Begin beginscherm -->   
<div id="mySidebar" class="sidebar"></div>
    <nav>
        <ul>
               
                <li><a href="">Dashboard</a></li>
                <li><a href="">Transaction</a></li>
                <li><a href="">Wallet</a></li>
                <label class="logo">Paypalooza</label>
                <li><a href="#signupbtn1">Log in</a></li>
                <a href="#signup" class="btn">Sign up</a>
        </ul>
     </nav>   
     

     <div id="image1"><img src="schermafbeelding 2023-03-27 133132.png"width="300px" height="400px"></div>
     <div id="square">
        <p>Securely pay and get paid with ease - powered by us.<p>
     </div>
     <div id="image2"><img src="schermafbeelding 2023-03-29 103733.png"width="50px" height="50px"></div>
     <div id="image3"><img src="schermafbeelding 2023-03-29 105243.png"width="80px" height="80px"></div>
     <h1>Pay with ease and 
        confidence, <br>
        with our secure online payment <br>
        solution.</h1>

    <div id="line"></div>
    <h4>Welcome to our website! We are a secure and convenient<br>
        online payment system that makes it easy for you to send<br>
         and receive money. Whether you're paying for goods and<br>
          services online, sending money to friends and family, or<br>
           receiving payments for your business, we've got you covered. </h4>

           <div id="signupbtn"><h2>Sign up</h2></div>
           <div id="loginbtn"><h2>Log in</h2></div>
    <!-- einde beginscherm -->

     <!-- Start Signup scherm -->
    <div id="background"><div id="signup"></div></div>
  
    <div id="text1">Welcome back!</div>
    <div id="line2"></div>
    <div id="text2">To keep connected with us please login <br> with your personal info. </div>
    <div id ="loginbtn1"><a href="#signupbtn1"></a>
        <div id="text3">Log in</div>
    </div>
  
    <form action="action_page.php" method="post">
  

  <div class="container">
    <label for="uname"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Full Name" name="uname" required>

    <label for="email"><b>E-mail</b></label>
    <input type="text" placeholder="Enter E-mail" name="email" required>


    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="iBan"><b>IBAN</b></label>
    <input type="text" placeholder="IBAN" name="day" required>
<br>
    <label for="Age"><b>Age</b></label>
    <input type="text" placeholder="Age" name="age" required><br>
    
    

 

<div id="signup3">
  <div id="text4">Sign up!</div>
  <div id="background2"></div>
  
</div>
</form>

<form1 action="action_page.php" method="post">
  

  <div class="container2">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Full Name" name="uname" required>
 
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

 
</div>
<div class="pageloginbtn">
  <main>Log in</main>
</div>


<div id="text4">Hello friend!</div>

    <div id="line3"></div>
    <div id="text5">Enter your details and <br>start a new journey with us </div>
    <div id ="signupbtn1"><a href="#signup">
      <h6>Sign up!</h6>
    </div>

    <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "paypalooza";

// maak connectie
$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

// Lees elke regel van de database tabel.
$sq1 = "SELECT * FROM users";
$result = $connection->query($sq1);

//controleer de connectie
if (!$result) {
die("invalid: " . $connection->error);
}
while ($row = $result->fetch_assoc()){
  echo "<tr>
  <td>" .$row["id"] . "</td>
  <td>" .$row["username"] . "</td>
  <td>" .$row["password"] . "</td>
  <td>" .$row["sign up"] . "</td>

  </tr>";

}
?>
</body> 
</html>