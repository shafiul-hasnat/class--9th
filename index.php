<?php

session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>


<div class="box">
   <form action="./main.php" method="post">
    <label for="name">Name :</label>
    <input name="name" type="text" placeholder="enter your name">
    <?php
    if(isset($_SESSION['name_error'])){
      echo ($_SESSION['name_error']);
    }
    ?><br>

    <label for="Email">Email :</label>
    <input name="email" type="text" placeholder="enter your email">

    <?php
    if(isset($_SESSION['email_error'])){
      echo ($_SESSION['email_error']);
    }
    ?><br>


    <label for="password">Password :</label>
    <input name="password" type="password" placeholder="enter your password">


    <?php
    if(isset($_SESSION['password_error'])){
      echo ($_SESSION['password_error']);
    }
    ?><br>


    <label for="text">description :</label>
    <input name="description" type="text" placeholder="something write">

    <?php
    if(isset($_SESSION['description_error'])){
      echo ($_SESSION['description_error']);
    }
    ?><br>

    <button class="btn" type="submit">submit</button>
   </form>
</div>
  
</body>
</html>

<?php

session_unset();