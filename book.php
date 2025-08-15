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
              @include 'function.php'; ?>

              <?php 
              
              if(isset($_POST['saveUser']))
              {
                $full_name    = $_POST['full_name'];
                $role         = $_POST['role'];
                $phone_number = $_POST['phone_number'];
                $email        = $_POST['email'];
                $place        = $_POST['place'];
                $venue        = $_POST['venue'];

                if($full_name != '' || $email != '' || $phone_number != '' || $place != '' || $venue != '')
                {
                    $query = "INSERT INTO price (full_name,role,phone_number,email,place,venue) VALUES ('$full_name','$role','$phone_number','$email','$place','$venue')";
                    $result=mysqli_query($conn, $query);

                    if($result)
                    {
                        echo "<script>alert('Booked Successfullyyy...');
                            window.location.href='price.php';</script>";
                    }
                    else
                    {
                        echo "<script>alert('Something Went Wrong');</script>";
                    }
                }
                else
                {
                    echo "<script>alert('Please fill all the details correctly...');</script>";
                }
              }
              
              ?>
            <center>
            <h1>
                Add User
            </h1>
            </center>
            <div  class="form">
        <form id="contactform" method="POST"> 

          <p class="contact"><label for="full_name">full_name</label></p> 
          <input type="text" name="full_name" placeholder="Enter your username" required="" tabindex="1"> 

          <p class="contact"><label for="role">Select Role</label>
          <select name="role">
            <option value="">Select Role</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
          </select>
        </p>

          <p class="contact"><label for="phone_number">Contact Number</label></p> 
          <input type="text" name="phone_number" required="" placeholder="Enter your phone number"> 

          <p class="contact"><label for="email">Email</label></p> 
          <input type="email"  name="email" placeholder="example@domain.com" required="">

          <p class="contact"><label for="place">Wedding City</label></p> 
          <input type="text" name="place" placeholder="Enter wedding city" required="" tabindex="1" > 

          <p class="contact"><label for="venue">Wedding venue</label></p> 
          <input type="text" name="venue" placeholder="Enter wedding venue" required="" tabindex="1" > 

          <br><br>
            
            <input type="submit" class="buttom" name="saveUser" tabindex="5" value="Save" >    
   </form> 
        </div> 
            </form>

              <?php @include 'footer.php';?>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
</body>
</html>