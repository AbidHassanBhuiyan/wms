<?php
$emailErr = $passwordErr = "";
$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["email"])) {

        $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];
    }

   
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = $_POST["password"];
    }

    if ($emailErr || $passwordErr) {
       
         header("location: ../view/login.php?error=Email and Password are required");
        exit();
    }

    
    if ($email == "saffat@gmail.com" && $password == "123456") {
        header("location: ../view/mechanics_dash.php");
        exit();
    } else {
         header("location: ../view/login.php?error=Invalid Email and Password");
        exit();
    }
}
