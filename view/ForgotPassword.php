<?php
session_start();
 
$e1    = $_SESSION['e1'] ?? '';
$msg   = $_SESSION['msg'] ?? '';
$email = $_SESSION['email'] ?? '';
 
unset($_SESSION['e1'], $_SESSION['msg'], $_SESSION['email']);
?>
<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
<link rel="stylesheet" href="/wms/view/css/style.css">
<script src="/wms/view/js/script.js" defer></script>
</head>
<body>
<header>
<h1>Forgot Password</h1>
<nav>
<a href="/wms/view/Login.php">Login</a>
<a href="/wms/view/Register.php">Register</a>
</nav>
</header>
 
<div class="container">
<?php if (!empty($msg)): ?>
<p style="color:green"><?php echo $msg; ?></p>
<?php endif; ?>
 
<form action="wms/controllers/ForgotPasswordAction.php" method="post" onsubmit="return validateForgot(this)">
<input type="email" name="email" placeholder="Enter your email" value="<?php echo htmlspecialchars($email); ?>">
<span id="forgotEmailErr" style="color:red"><?php echo $e1; ?></span>
 
<button type="submit">Send Reset Link</button>
</form>
</div>
</body>
</html>