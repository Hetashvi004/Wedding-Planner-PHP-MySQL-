<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <?php @include 'header.php';
        @include 'connection.php';?>

<?php
if (isset($_POST['login'])) {
  $username  = $_POST['user'];
  $password = $_POST['pass'];
  mysqli_real_escape_string($conn, $username);
  mysqli_real_escape_string($conn, $password);
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $user = $row['username'];
    $pass = $row['password'];
    $number = $row['number'];
    $role= $row['role'];
    $email = $row['email'];
    if (password_verify($password, $pass )) {
      $_SESSION['id'] = $id;
      $_SESSION['username'] = $username;
      $_SESSION['number']  = $number;
      $_SESSION['role'] = $role;
      $_SESSION['email']  = $email;
      header('location: packages.php');
    }
    else {
      echo "<script>alert('invalid username/password');
      window.location.href= 'login.php';</script>";

    }
  }
}
else {
      echo "<script>alert('invalid username/password');
      window.location.href= 'login.php';</script>";

    }
}
?>


  <div class="login-card">
    
  <form method="POST">
  <h1>Log-in</h1><br>
    <input type="text" name="user" placeholder="Username" required="username"><br>
    <input type="password" name="pass" placeholder="Password" required="password"><br>
    
    <button type="submit" name="login" class="btn">log in</button>
</br>
</br>
    <a href="signup.php">Register</a>
  </form>
  </div>

  <script src='css/jquery.min.js'></script>
<script src='css/jquery-ui.min.js'></script>


        <?php @include 'footer.php';?>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
</body>
</html>