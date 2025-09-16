<?php
$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $customer = trim($_POST['customer'] ?? '');
  $mechanic = $_POST['mechanic'] ?? '';
  if (empty($customer)) {
    $error = 'Please enter customer name/ID';
  } elseif ($mechanic === 'Select Mechanic') {
    $error = 'Please select a mechanic';
  } else {
    header('Location: /wms/view/AssignJobs.php');
    exit;
  }
}
?>