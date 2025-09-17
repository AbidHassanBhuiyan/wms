<?php
$error = '';
include_once '/wms/controllers/ManageServicesAction.php';

session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: Login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Manage Services</title>
  <link rel="stylesheet" href="/wms/view/css/style.css">
  <script src="/wms/view/js/script.js" defer></script>
</head>
<body>
<header>
  <h1>Manage Services</h1>
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
    <h2>Service List</h2>
    <span id="error-msg" class="error"><?php echo $error; ?></span>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateManageServices(this)">
      <input type="text" name="serviceName" placeholder="New Service Name">
      <button type="submit">Add Service</button>
    </form>
    <ul>
      <li>Oil Change <button>Remove</button></li>
      <li>Brake Repair <button>Remove</button></li>
    </ul>
  </div>
</div>
</body>
</html>