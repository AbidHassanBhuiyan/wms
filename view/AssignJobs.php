<?php
$error = '';
include_once '/wms/controllers/AssignJobsAction.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Assign Jobs</title>
  <link rel="stylesheet" href="/wms/view/css/style.css">
  <script src="/wms/view/js/script.js" defer></script>
</head>
<body>
<header>
  <h1>Assign Jobs</h1>
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
    <h2>Assign Jobs</h2>
    <span id="error-msg" class="error"><?php echo $error; ?></span>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateAssignJobs(this)">
      <input type="text" name="customer" placeholder="Customer Name/ID">
      <select name="mechanic">
        <option>Select Mechanic</option>
        <option>Gazi</option>
        <option>Saffat</option>
      </select>
      <button type="submit">Assign</button>
    </form>
  </div>
</div>
</body>
</html>