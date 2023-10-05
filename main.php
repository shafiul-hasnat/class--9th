<?php 
session_start();
include './env.php';

$name =trim($_REQUEST['name']);
$email =trim($_REQUEST['email']);
$password =$_REQUEST['password'];

$vpass=password_hash($password,PASSWORD_BCRYPT);
$description = trim($_REQUEST['description']);

$error=[];

$_SESSION=$error;


// name condtion checking


if(empty($name)) {
    $error['name_error']='tor name likh';
}else{

      if(strlen($name) >30) {
        $error['name_error']= 'komy likh';
      }
};

// email condition checking


if(empty($email) ) {
  $error['email_error']= 'tor email likh';
}else{
      if(strlen($email)> 50) {
        $error['email_error']= 'komy likh';
      }
}


// password condtion checking

if(empty($password) ) {
  $error['password_error']= 'tor password de';
}else{
      if(strlen($password)< 8) {
        $error['password_error']= 'komy likh';
      }
}



// Description condtion checking

if(empty($description) ) {
  $error['description_error']= 'kiso mothamot de';
}else{
      if(strlen($description)> 500) {
        $error['descrtion_error']= 'komy likh';
      }
}



if(count($error) > 0) {
  // print_r($error);

  $_SESSION=$error;
  header('Location: ./index.php');
}else{

  $query = "INSERT INTO datas( Name, Email, Password, Description) VALUES ('$name','$email','$vpass','$description')";

  mysqli_query($conn,$query);
  
}


?>


