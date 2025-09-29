<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = $_POST["firstName"] ?? '';
    $lastName  = $_POST["lastName"] ?? '';
    $email     = $_POST["email"] ?? '';
    $password  = $_POST["password"] ?? '';

    
    echo "Registration successful: $firstName $lastName ($email)";
}
?>
