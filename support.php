<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sherlock Holmes - Support</title>
  <!-- ajout bootstrap css-->
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <!-- feuille css -->
  <link rel="stylesheet" href="support.css">
  <!-- police googlefont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
  <!-- icon bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <!-- favicon -->
  <link rel="icon" type="image/png" href="assets/logos/Frogwares_logo_flat_white.png" />
  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/c6081b8ccf.js" crossorigin="anonymous"></script>
</head>
<body>


  <!-- NAVBAR -->
  <?php
    include 'nav.php';
  ?>


  <section id="contact-form">
    <h2>Contact</h2>
      <form method="POST" id="contact" name="contact" accept-charset="utf-8">
          <label><span>Name</span><input name="name" type="text" placeholder="Name"/></label>
          <label><span>Email</span><input name="email" type="email" placeholder="Email"/></label>
          <label><span>Message</span><textarea name="message" placeholder="Message"></textarea></label>
          <input name="submit" type="submit" value="Send"/>
      </form>
  </section>

  <!-- bootstrap js -->
  <script src="bootstrap/bootstrap.min.js"></script>   
</body>
</html>