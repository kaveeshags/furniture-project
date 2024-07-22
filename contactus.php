
<?php
$conn = new mysqli("localhost", "root", "", "myproject");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $First_name = $_POST['fname'];
    $Last_name = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contacts (First_name, Last_name, email, message) VALUES ('$fname', 'lname', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Contact</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
    <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    <label for="country">Country</label>
      <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>
    <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      <input type="submit" value="Submit">
    <div>
      <p>
        <i class="fa fa-map-marker fa-1x">&nbsp;
          <span class="contact-text place">
            No:109,Maha AluthgamAra,Ranmuduwewa,Sooriywewa
          </span>
        </i>
      </p>
      <p>
        <i class="fa fa-envelope fa-1x">&nbsp;
          <span class="contact-text gmail">
            <a href="mailto:yourmail@gmail.com"
              title="Send me an email">
              Ksiriwardhana51@gmail.com</a>
          </span>
        </i>
      </p>
      <p>
        <i class="fa fa-phone fa-1x">&nbsp;
          <span class="contact-text phone">
            0703943373
          </span>
        </i>
      </p>
    </div>
  </form>
</div>
<div class="footer">
  <?php   include 'footer.php' ?>
</div>
</body>
</html>
