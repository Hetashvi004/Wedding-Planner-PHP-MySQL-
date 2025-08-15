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
        @include 'connection.php';

if (isset($_POST['signup'])) {
require "gump.class.php";
$gump = new GUMP();
$_POST = $gump->sanitize($_POST); 

$gump->validation_rules(array(
  'username'    => 'required|alpha_numeric|max_len,20|min_len,4',
  'name'    => 'required|alpha_numeric|max_len,20|min_len,4',
  'password'    => 'required|alpha_space|max_len,30|min_len,5',
  'email'       => 'required|valid_email',
  'password'    => 'required|max_len,50|min_len,6',
));
$gump->filter_rules(array(
  'username' => 'trim|sanitize_string',
  'name' => 'trim|sanitize_string',
  'password' => 'trim|sanitize_string',
  'password' => 'trim',
  'email'    => 'trim|sanitize_email',
  ));
$validated_data = $gump->run($_POST);

if($validated_data === false) {
  ?>
  <center><font color="red" > <?php echo $gump->get_readable_errors(true); ?> </font></center>
  <?php
}
else if ($_POST['password'] !== $_POST['repassword']) 
{
  echo  "<center><font color='red'>Passwords do not match </font></center>";
}
else {
      $username = $validated_data['username'];
      $checkusername = "SELECT * FROM users WHERE username = '$username'";
      try {
        $run_check = mysqli_query($conn , $checkusername) or die(mysqli_error($conn));
      } catch (exception $e) {
          echo $e;
      }
      $countusername = mysqli_num_rows($run_check); 
      if ($countusername > 0 ) {
    echo  "<center><font color='red'>Username is already taken! try a different one</font></center>";
}
$email = $validated_data['email'];
$checkemail = "SELECT * FROM users WHERE email = '$email'";
      $run_check = mysqli_query($conn , $checkemail) or die(mysqli_error($conn));
      $countemail = mysqli_num_rows($run_check); 
      if ($countemail > 0 ) {
    echo  "<center><font color='red'>Email is already taken! try a different one</font></center>";
}

  else {
      $username = $validated_data['username'];
      $name = $validated_data['name'];
      $email = $validated_data['email'];
      $pass = $validated_data['password'];
      $password = password_hash("$pass" , PASSWORD_DEFAULT);
      $number = $_POST['number'];
      $role = $_POST['role'];
      $query = "INSERT INTO users(username,name,password,number,role,email) VALUES ('$username' ,'$name' , '$password' ,'$number','$role', '$email' )";
      $result = mysqli_query($conn , $query) or die(mysqli_error($conn));
      if (mysqli_affected_rows($conn) > 0) { 
        echo "<script>alert('SUCCESSFULLY SIGNED UP');
        window.location.href='login.php';</script>";
}
else {
  echo "<script>alert('Error Occured');</script>";
}
}
}
}
?>
<br>

      <div  class="signup-card">
        <form id="contactform" method="POST"> 
        <h1>Sign-Up</h1><br>
           
          <input id="username" name="username" placeholder="Enter your username" required="" tabindex="1" type="text" value="<?php if(isset($_POST['signup'])) { echo $_POST['username']; } ?>"> 
          </br><br>
           
          <input id="name" name="name" placeholder="Enter your name" required="" type="text"> 
          </br><br>

          <input type="password" id="password" name="password" placeholder="Enter your password" required=""> 
          </br> </br>
           
          <input type="password" id="repassword" name="repassword" placeholder="Enter confirm password" required=""> 
          </br> </br>

          <input type="number" id="number" name="number" placeholder="Enter your phone number" required=""> 
          </br> </br>

          <select name="role" placeholder="Role" name="role" required="">
          
            <option value="user">User</option>
            <option value="admin">Admin</option>
            </select><br><br>
           
          <input id="email" name="email" placeholder="example@domain.com" required="" type="email" value="<?php if(isset($_POST['signup'])) { echo $_POST['email']; } ?>"> <br><br>
          <button type="submit" name="signup" id="submit" tabindex="5" class="btn">Sign me up!</button>
            
   </form> 
        </div> 
   
        <?php @include 'footer.php';?>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
</body>
</html>