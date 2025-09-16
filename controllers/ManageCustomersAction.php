<?php
$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $searchCustomer = trim($_POST['searchCustomer'] ?? '');
  if (empty($searchCustomer)) {
    $error = 'Please enter a customer name/ID';
  } else {
    header('Location: /wms/view/ManageCustomers.php');
    exit;
  }
}
?>