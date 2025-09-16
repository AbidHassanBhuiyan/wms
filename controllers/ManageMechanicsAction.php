<?php
$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $mechanicName = trim($_POST['mechanicName'] ?? '');
  if (empty($mechanicName)) {
    $error = 'Please enter mechanic name';
  } else {
    header('Location: /wms/view/ManageMechanics.php');
    exit;
  }
}
?>