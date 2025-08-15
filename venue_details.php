<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">  
    <link href="css/jquery-ui-1.13.2.custom/jquery-ui.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
        <?php @include 'header.php';
		      @include 'connection.php';
          ?>
         
       <?php
       if(isset($_POST['submit']))
          {
              $name=$_POST['name'];
              $number=$_POST['number'];
              $email=$_POST['email'];
              $type=$_POST['type'];
             $city=$_POST['city'];
             $date=$_POST['date'];
             $payment=$_POST['payment'];

             
			 try{
				$query = "INSERT INTO tblbook(name,number,email,type,city,date,payment) VALUES ('$name' , '$number' , '$email' , '$type' , '$city' , '$date' , '$payment')";
				$result=mysqli_query($conn,$query);
				if($result)
              {
				echo "<script>alert('Your booking was successfully!.');</script>";
				echo "<script>window.location.href ='./razorpay-php-master/payment.php'</script>";
              }
			 }
			 catch (exception $e)
			 {
				echo '<script>alert("Something Went Wrong. Please try again")</script>';
			 }   
      
              
          
        }

       if (!isset($_SESSION['id'])) {
           header('Location: login.php');
           exit();
       } else {
        ?>

<center>
	<div id="contact" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">     
					<div class="title-box"> 
          <div class="submit-button text-center">
            <button class="btn btn-common" type="submit"><a href="packages.php"> < </a></button>
          </div>
					<h1 class="heading">
         
            VENUE DETAILS
          </h1>
          <br>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
				  <div class="contact-block">
					<form action="" method="post" id="dateForm">
					  <div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required data-error="Please enter your name">
								<div class="help-block with-errors"></div>
							</div>                                 
						</div>
            <br>
						<div class="col-md-12">
							<div class="form-group">
								<input type="number" placeholder="Enter your Phone Number" id="number" class="form-control" name="number" required data-error="Please enter your number">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						</br>
            <div class="col-md-12">
							<div class="form-group">
								<input type="text" placeholder="Enter Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						</br>
            <div class="col-md-12"> 
							 <div class="form-group"> 
                <select name="type" id="weddingType" class="form-control" required data-error="please select wedding type">
                   <option value="ultimate" selected>ultimate</option>
                  <option value="prestige">prestige</option>
                  <option value="premium">premium</option>
                  <option value="classic">classic</option>
                  <option value="simple">simple</option>
                 </select> 
								<div class="help-block with-errors"></div> 
							 </div> 
						<div class="col-md-12"> 
							 <div class="form-group"> 
                <select name="city" id="city" placeholder="Enter Wedding City" class="form-control" required data-error="please select wedding city" >
                   <option value="Udaipur">Udaipur</option>
                  <option value="Jaipur">Jaipur</option>
                  <option value="Goa">Goa</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Andaman and nicobar islands">Andaman and nicobar islands</option>
                  <option value="Agra">Agra</option>
                  <option value="Jodhpur">Jodhpur</option>
                  <option value="Surat">Surat</option>
                  <option value="Shimla">Shimla</option>
                  <option value="Rishikesh">Rishikesh</option>
                </select> 
								<div class="help-block with-errors"></div> 
							 </div> 
                            
              <div class="col-md-12">
							<div class="form-group">
								<input type="text" placeholder="Enter Your Wedding Date" id="datepicker" class="datepicker form-control" name="date" required data-error="Please enter your Wedding date">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						</br>
                <div class="col-md-12">
							 <div class="form-group">  
								<input type="number" class="form-control" id="payment" name="payment" placeholder="Advance Payment" required data-error="Please Enter Advance Payment" value="20000" readonly> 
								<div class="help-block with-errors"></div> 
							 </div> 
                           
							<div class="submit-button text-center">
								<button class="btn btn-common" id="submit" type="submit" name="submit">Book Now</button>
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

        <?php

mysqli_close($conn);
       
}
?>
          <?php @include 'footer.php';?>
          </div>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          <script src="css/jquery-ui-1.13.2.custom/jquery-ui.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
          
          <script>
    $(document).ready(function() {
      $("#date").change(function() {
        var selectedDate = $(this).val();
        checkAvailableDate(selectedDate);
      });
    });

    function checkAvailableDate(selectedDate) {
      $.ajax({
        url: "check_date.php",  type: "POST",
        data: { selectedDate: selectedDate },
        success: function(response) {
          if (response === "available") {
            $("#date").prop("disabled", false); // Enable date selection
          } else {
            $("#date").prop("disabled", true); // Disable date selection
          }
        }
      });
    }
  </script>
  

</script>
      </body>
      </html>