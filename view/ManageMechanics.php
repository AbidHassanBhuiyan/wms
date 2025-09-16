<?php
$error = '';
include_once '/wms/controllers/ManageMechanicsAction.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Manage Mechanics</title>
  <link rel="stylesheet" href="/wms/view/css/style.css">
  <script src="/wms/view/js/script.js" defer></script>
</head>
<body>
<header>
  <h1>Manage Mechanics</h1>
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
    <h2>Mechanic Management</h2>
    <span id="error-msg" class="error"><?php echo $error; ?></span>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateManageMechanics(this)">
      <input type="text" name="mechanicName" placeholder="Mechanic Name">
      <button type="submit">Add Mechanic</button>
    </form>
    <ul>
      <li>Gazi - Jobs: 5 <button>Assign Job</button> <button>Set Salary</button></li>
      <li>Saffat - Jobs: 3 <button>Assign Job</button> <button>Set Salary</button></li>
    </ul>
  </div>
</div>
</body>
</html>