<?php
session_start();
$errors = $_SESSION['errors'] ?? [];
$old = $_SESSION['old'] ?? [];
session_unset();

$theme = $_COOKIE['theme'] ?? 'light';

if (isset($_GET['theme'])) {
    $theme = $_GET['theme'] === 'dark' ? 'dark' : 'light';
    setcookie('theme', $theme, time() + (86400 * 30), "/"); 
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="validateregistration.js"></script>
  <link rel="stylesheet" type="text/css" href="style_reg.css">

  <style>
    .error {
      color: red; 
    }
  
    .error{color:red;}
    body.light { background: #092344; color: #000;  }
    body.dark { background: #070707ff; color: #070606ff; }
    .theme-toggle { margin: 10px; }
  </style>
</head>


<body class="<?php echo $theme; ?>">
  <header>
    <img src="bikelogo.webp" alt="HTML5 Icon" width="128" height="128">
    <h1>Mechanic Portal</h1>
  </header>
  
  <nav>
    <a href="login.php">Login</a>
    <a href="change_pass.php">Change Password</a>
    <a href="forget_pass.php">Forget Password</a>
  </nav>

  <div class="theme-toggle">
    <a href="?theme=light">Light Mode</a> | 
    <a href="?theme=dark">Dark Mode</a>
  </div>

  <div class="container">  
    <h2>Registration</h2>
    <form id="registrationForm">
        <input type="text" id="firstName" name="firstName" placeholder="First Name"><br>
        <input type="text" id="lastName" name="lastName" placeholder="Last Name"><br>
        <input type="email" id="email" name="email" placeholder="Email"><br>
        <input type="password" id="password" name="password" placeholder="Password"><br>
        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password"><br>
        <button type="submit">Register</button>
    </form>
  </div>
</body>
</html>
