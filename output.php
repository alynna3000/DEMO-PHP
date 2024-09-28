<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $email=$_POST["email"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $confirm_password=$_POST["confirm-password"];

    test($username);
    test($email);
    test($password);
    test($confirm_password);




    // dummytummy("waaaaaaaaaa");

    /* function dummytummy($x)
    {
        echo "the value is ano ". $x;
    } */


  /* if(trim($email))
  {
    echo "USER EMAIL IS NOT EMPTY <br>";
  } else {
    echo "USER EMAIL IS EMPTY <br>";
  }

  if(trim($username))
  {
    echo "USERNAME IS NOT EMPTY <br>";
  } else {
    echo "USERNAME IS EMPTY <br>";
  }

  if(trim($password))
  {
    echo "USER PASSWORD IS NOT EMPTY <br>";
  } else {
    echo "USER PASSWORD IS EMPTY <br>";
  }

  if(trim($confirm_password))
  {
    echo "USER CONFIRM PASSWORD IS NOT EMPTY <br>";
  } else {
    echo "USER CONFIRM PASSWORD IS EMPTY <br>";
  } */


  
    /* echo "username is ". $username. "<br>";
    echo "user email is ". $email.  "<br>";
    echo "user password is ". $password.  "<br>";
    echo "user confirm password is ". $confirm-password.  "<br>"; */
}


?>