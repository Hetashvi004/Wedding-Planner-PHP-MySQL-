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

			 // session_start();
		  if(isset($_POST['submit']))
          {
              $name=$_POST['name'];
              $email=$_POST['email'];
             $message=$_POST['message'];

			 try{
				$query = "INSERT INTO contact(name,email,message) VALUES ('$name' , '$email' , '$message' )";
				$result=mysqli_query($conn,$query);
				if($result)
              {
				echo "<script>alert('Your message was sent successfully!.');</script>";
				echo "<script>window.location.href ='contact.php'</script>";
              }
			 }
			 catch (exception $e)
			 {
				echo '<script>alert("Something Went Wrong. Please try again")</script>';
			 }

              
  
              
              
              //else{
               // echo "Error in insertion";
              //}
          }
      ?>

        <!-- Start Contact -->
        <center>
	<div id="contact" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
					<h1 class="heading">contact with us</h1>
						<h1>We'll Contact You As Soon As Possible...</h1>
                        <br>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
				  <div class="contact-block">
					<form id="contactform" method="POST">
					  <div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" id="contact_name" name="name" placeholder="Your Name" required data-error="Please enter your name">
								<div class="help-block with-errors"></div>
							</div>                                 
						</div>
                        <br>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" placeholder="Your Email" id="contact_email" class="form-control" name="email" required data-error="Please enter your email">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						</br>
						<div class="col-md-12"> 
							 <div class="form-group">  
								<textarea class="form-control" id="contact_message" name="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea> 
								<div class="help-block with-errors"></div> 
							 </div> 
                            <br>
							<div class="submit-button text-center">
								<button class="btn btn-common" id="submit" type="submit" name="submit">Send Message</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div> 
								<div class="clearfix"></div> 
							</div>
						</div> 
					  </div>            
					</form>
				  </div>
				</div>
			</div>
		</div>
	
       </center>
	<!-- End Contact -->

        <?php @include 'footer.php';?>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
</body>
</html>