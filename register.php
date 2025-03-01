<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "myproject";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform database operations here

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url(images/bg2.jpg);
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}
.registration-box {
    background-color: #ffffff;
    padding: 40px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    text-align: left;
}

.registration-box h2 {
    margin-bottom: 20px;
    color: #333333;
}

.input-group {
    margin-bottom: 20px;
    text-align: left;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
    color: #666666;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #dddddd;
    border-radius: 3px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 10px;
  margin: 2px 0 10px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f2f2f2; display: flex; justify-content: center; align-items: center; height: 100vh;background-image: url(images/bg3.jpg); background-repeat: no-repeat; background-attachment: fixed;background-size: cover;">

<form action="config.php" method="post">
  <div class="container">
  <div class="registration-box">

    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
  <div class="input-group">
    <label for="fname"><b>first name</b></label>
    <input type="text" placeholder="Enter fname" name="fname" id="fname" required>
  </div>
  <div class="input-group">
    <label for="lname"><b>last name</b></label>
    <input type="text" placeholder="Enter lname" name="lname" id="lname" required>
  </div>
  <div class="input-group">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
 </div>
 <div class="input-group">
    <label for="username"><b>User name</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" required>
 </div>
 <div class="input-group">
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
</div>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>

  </div>
 
  <div class="container signin">
    <p>Already have an account? <a href="#">login</a>.</p>
  </div>
  </div>

</form>

</body>
</html>
