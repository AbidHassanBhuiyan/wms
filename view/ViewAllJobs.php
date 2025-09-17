<?php

session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: Login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>View All Jobs</title>
  <link rel="stylesheet" href="/wms/view/css/style.css">
</head>
<body>
<header>
  <h1>View All Jobs</h1>
  <nav>
    <a href="/wms/view/Dashboard.php">Dashboard</a>
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
    <h2>Jobs Overview</h2>
    <h3>Completed Jobs</h3>
    <ul>
      <li>Job #101 - Completed by Gazi</li>
    </ul>
    <h3>Upcoming Jobs</h3>
    <ul>
      <li>Job #102 - Assigned to Saffat</li>
    </ul>
  </div>
</div>
</body>
</html>