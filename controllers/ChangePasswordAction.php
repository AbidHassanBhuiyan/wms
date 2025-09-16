<?php
session_start();
require '../models/Db.php'; 

if (!isset($_SESSION['username'])) {
    header("Location: /wms/view/Login.php");
    exit();
}

$uname = $_SESSION['username'];
$old = trim($_POST['old'] ?? '');
$new = trim($_POST['new'] ?? '');
$confirm = trim($_POST['confirm'] ?? '');
$isValid = true;

if (empty($old)) {
    $_SESSION['e1'] = "Old password required";
    $isValid = false;
}
if (strlen($new) < 6) {
    $_SESSION['e2'] = "New password must be 6+ chars";
    $isValid = false;
}
if ($new !== $confirm) {
    $_SESSION['e3'] = "Passwords do not match";
    $isValid = false;
}

if ($isValid) {
    $sql = "SELECT * FROM info WHERE uname='$uname' AND password='$old'";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) === 1) {
        $update = "UPDATE info SET password='$new' WHERE uname='$uname'";
        if (mysqli_query($conn, $update)) {
            $_SESSION['msg'] = "Password changed successfully!";
            header("Location: /wms/view/Dashboard.php"); 
            exit();
        } else {
            $_SESSION['msg'] = "Error updating password";
            header("Location: /wms/view/ChangePassword.php"); 
            exit();
        }
    } else {
        $_SESSION['e1'] = "Old password incorrect";
        header("Location: /wms/view/ChangePassword.php"); 
        exit();
    }
} else {
    header("Location: /wms/view/ChangePassword.php"); 
    exit();
}
?>