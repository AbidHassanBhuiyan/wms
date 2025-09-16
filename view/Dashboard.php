<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: Login.php");
    exit();
}
 
$msg = $_SESSION['msg'] ?? '';
unset($_SESSION['msg']);
?>
<!DOCTYPE html>
<html>
<head>
<title>Manager Dashboard</title>
<link rel="stylesheet" href="/wms/view/css/style.css">
</head>
<body>
<header>
<h1>Manager Dashboard</h1>
<nav>
<a href="/wms/view/ChangePassword.php">Change Password</a>
<a href="/wms/controllers/Logout.php">Logout</a>
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
<?php if (!empty($msg)): ?>
<p style="color:green"><?php echo $msg; ?></p>
<?php endif; ?>
 
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
<p>Use the sidebar to manage workshop operations.</p>
</div>
</div>
</body>
</html>