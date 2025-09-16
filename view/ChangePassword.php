<?php
session_start();
 
$e1 = $_SESSION['e1'] ?? '';
$e2 = $_SESSION['e2'] ?? '';
$e3 = $_SESSION['e3'] ?? '';
$msg = $_SESSION['msg'] ?? '';
 
unset($_SESSION['e1'], $_SESSION['e2'], $_SESSION['e3'], $_SESSION['msg']);
?>
<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" href="/wms/view/css/style.css">
<script src="/wms/view/js/script.js" defer></script>
</head>
<body>
<header>
<h1>Change Password</h1>
<nav>
<a href="/wms/view/Dashboard.php">Dashboard</a>
<a href="/wms/view/Logout.php">Logout</a>
</nav>
</header>
<div class="dashboard-wrapper">
<aside class="sidebar">
<nav>
<a href="/wms/view/Dashboard.php">Dashboard</a>
<a href="/wms/view/ManageCustomers.php">Manage Customers</a>
<a href="/wms/view/ManageMechanics.php">Manage Mechanics</a>
<a href="/wms/view/AssignJobs.php">Assign Jobs</a>
<a href="/wms/view/ManageServices.php">Manage Services</a>
<a href="/wms/view/ViewAllJobs.php">View All Jobs</a>
<a href="/wms/view/ViewReports.php">View Reports</a>
<a href="/wms/view/Accounts.php">Accounts</a>
</nav>
</aside>
 
  <div class="container">
<h2>Change Password</h2>
 
    <?php if (!empty($msg)): ?>
<p style="color:green"><?php echo $msg; ?></p>
<?php endif; ?>
 
<form action="/wms/controllers/ChangePasswordAction.php" method="post" onsubmit="return validateChangePassword(this)">
<input type="password" name="old" placeholder="Current Password" required>
<span id="oldPassErr" style="color:red"><?php echo $e1; ?></span>
 
      <input type="password" name="new" placeholder="New Password" required>
<span id="newPassErr" style="color:red"><?php echo $e2; ?></span>
 
      <input type="password" name="confirm" placeholder="Confirm New Password" required>
<span id="confirmPassErr" style="color:red"><?php echo $e3; ?></span>
 
<button type="submit">Update Password</button>
</form>
</div>
</div>
</body>
</html>