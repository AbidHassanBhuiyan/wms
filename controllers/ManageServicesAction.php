<?php
$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $serviceName = trim($_POST['serviceName'] ?? '');
  if (empty($serviceName)) {
    $error = 'Please enter service name';
  } else {
    header('Location: /wms/view/ManageServices.php');
    exit;
  }
}
?>