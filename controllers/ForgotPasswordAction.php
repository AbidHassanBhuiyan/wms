<?php
session_start();
require '../models/Db.php'; 

$email = trim($_POST['email'] ?? '');
$isValid = true;

if (empty($email)) {
    $_SESSION['e1'] = "Email required";
    $isValid = false;
}

$_SESSION['email'] = $email;

if ($isValid) {
    $sql = "SELECT * FROM info WHERE email='$email'";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) === 1) {
        $_SESSION['msg'] = "Password reset instructions sent to your email.";
    } else {
        $_SESSION['e1'] = "Email not found";
    }
}

header("Location: /wms/view/ForgotPassword.php");
exit();
?>