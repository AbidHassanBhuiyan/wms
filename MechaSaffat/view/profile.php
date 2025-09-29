<!DOCTYPE html>
<html>
<head>
  
  <title>Profile</title>
<link rel="stylesheet" type="text/css" href="style_profile.css">
</head>
<body>
  <header><img src="bikelogo.webp" alt="HTML5 Icon" width="128" height="128"><h1>Mechanic Portal</h1></header>
  
  <nav>
    
    <a href="mechanics_dash.php">Dashboard</a>
    <a href="change_pass.php">Change Password</a>
    
    
  
  </nav>
</head> 
<body>
  <div class="container">
    
    <h2>Profile (View & Update)</h2>
    <form>

      <form onsubmit="return validateRegistration()">

      <label>First Name</label>
      <input type="text" value="Rahim">

      <label>Last Name</label>
      <input type="text" value="Uddin">

      <label>Email</label>
      <input type="email" value="rahim@example.com">

      <label>Phone</label>
      <input type="text" value="017XXXXXXXX">

      <label>Address</label>
      <input type="text" value="Dhaka, Bangladesh">

      <button type="submit">Update Profile</button>
    </form>
  </div>
</body>
</html>
