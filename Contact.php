<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');	}?>
<!DOCTYPE html>
<head><title>jamin</title>
<link rel="stylesheet" type="text/css" href="about.css">
<link rel="stylesheet" type="text/css" href="cssabout.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="jsnav.js"></script>
<script src="jsforimsgrid.js"></script>

</head>
<body>

<div class="topnav" style="font-family:arial">
<br/>
<div class="box">Jamin.com</div>
<br/>
  <a href="jamin.php"><i class="glyphicon glyphicon-home"></i>Home</a>
   <a href="property1.php">Property</a>
  <a   href="About.php">About</a>
  <a href="Agent.php">Agent</a>
   <a class="active" href="Contact.php">Contact</a>
   <a href="login.php">Login</a>

</div>



  <form method="post" action="contactus.php" id="contact_form" class="center">
   <br/><br/><br/>
   <h2>Contact us</h2>
    <input type="text" id="contact_name" name="name" placeholder="Name" required >  
    <input type="email" id="contact_email" name="email" placeholder="Email" required>
    <textarea name="message" id="contact_message" name="message" rows="6" placeholder="Enter a message mate"></textarea>
    <button type="submit" id="contact_btn">Send Message</button>
  </form>

  
</body>
</html>