<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
   $username            = $_POST["username"];
   $email               = $_POST["email"];
   $password            = $_POST["password"];
   $confirm_password    = $_POST["confirm-password"];


   
   






    //Validate
   
    if (trim($username) != ""){
    echo "User username is not empty<br>";
    } else {
    echo "Field username is empty <br>";
    }


    if (trim($email) != ""){
    echo "User email is not empty<br>";
    } else {
    echo "Field email is empty <br>";
    }


    if (trim($password) != ""){
    echo "User password is not empty<br>";
    } else {
    echo "Field password is empty <br>";
    }


    if (trim($confirm_password) != ""){
    echo "User confirm password is not empty<br>";
    } else {
    echo "Field password is empty <br>";
    }
   
    if($password == $confirm_password){


        header("location: demo.php?success=REGISTRATION SUCCESSFUL");
        exit;


    } else {
        header("location: demo.php?error=PASSWORD MISMATCH");
        exit;


    }


}
?>