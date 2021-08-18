<?php 
$message='';

require_once 'inc/patient.php';
if(isset($_POST['btn'])){
		$message=add_patient();
		
	}

?> 


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
</head>
<body>
	<div class="bodyWrapper">
	
			<!--Header--->
		<div class="headerWrapper clear">
			<div class="logo">
			<img src="images/logo.png" alt="" />
			</div>
			<div class="bannerContact">
			<?php include 'inc/social.php'?>
			</div>
		</div>
		
		<!--Menu--->
		<?php include 'inc/menu.php'?>
		<!--Content--->
		
		<div class="contentWrapper clear">
			<div class="mainContent">
			
			
				  <form action="" method="POST">
				  <fieldset>
				  <h1 class="notificationMessage"> 
			
			<?php echo $message;?> </h1>
				  <legend>Insert Patient Information</legend>
					<label for="patient_name">Patient Name</label>
					<input type="text"  name="patient_name" placeholder="Insert name..">
					
					<label for="email_address">Email Adress</label>
					<input type="email" id="lname" name="email_address" placeholder="Insert Email Adress..">
					
					<label for="phone_number">Mobile Number</label>
					<input type="number" id="lname" name="phone_number" placeholder="Insert Mobile Number..">
					
					
					<label for="adress">Address</label>
					<textarea name="address" id="lname" cols="60" rows="5"></textarea>
					
					<!--<label for="adress">Address</label>
					<input type="text" id="lname" name="adress" placeholder="Insert Adress..">--->
					
				    <button type="submit" name="btn" class="btn-submit">Submit</button>
				
					</fieldset>
				</form>
						
			</div>
			
			<!--Navigation----->
			<div class="naviGation">
			<ul><li><a href="">Receptionist</a></li></ul>
			<ul><li><a href="">Doctors Area</a></li></ul>
			<ul><li><a href="">Patient Area</a></li></ul>
			
			
			</div>
		</div>
		
		<!--bigFooter-->
		<div class="bigFooter"> 
	
			<!-----Google Map Inserted--->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.5520693080507!2d90.40052751456437!3d23.87003468453053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c43aad03699f%3A0xd7744072ad2d345e!2sUttara+University!5e0!3m2!1sen!2sbd!4v1523897525511" width="97%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
		
		</div>
		
		<!--footer--->
		
		<div class="footerWrapper clear"> 
		<p> @copyright || UU CSE (Project-2018) </p>
		</div>
		
	
	</div>
</body>
</html>