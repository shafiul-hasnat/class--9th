<?php
  $hostName ='localhost';
  $userName = 'root';
  $password ='';
  $dbname ='form';

   $conn =  mysqli_connect($hostName,$userName,$password,$dbname);

   $_SESSION=$conn;



?> 