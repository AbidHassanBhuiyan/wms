<!DOCTYPE html>
<html>

<head>
  
  <title>Login</title>
  <script src="validateLogin.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style_login.css">

</head>

<body>



  <header><img src="bikelogo.webp" alt="HTML5 Icon" width="128" height="128">
    <h1>Mechanic Portal</h1>
  </header>

  <nav>

    <a href="Registration.php">Registration</a>

    <a href="Forget_pass.html">Forget Password</a>


  </nav>

  <div class="container">
    <h2>Login</h2>

    

    <form onsubmit="return validateLogin()" action="../controller/Action_login.php" method='post'>
      <label>Email</label>
      <input type="email" id="email" name="email" placeholder="Enter your email">




      <label>Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password">
      <span style="color:red;"><?php echo $passwordErr; ?></span><br><br>

      <?php
    if (isset($_GET['error'])) {
      echo "<span style='color:red;'>" . $_GET['error'] . "</span>";
    }
    ?>


      <button type="submit">Login</button>



    </form>
  </div>

</body>

</html>