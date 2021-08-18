<?php 
	$link=mysqli_connect('localhost','root','','db_hospital');
		require_once 'inc/patient.php';
		if(isset($_GET['status'])){
				delete_patient_info();
		}
		
			require_once 'inc/patient.php';
			$query_result=select_all_patient_info();
				
?> 




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-clearmin.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/roboto.css">
        <link rel="stylesheet" type="text/css" href="assets/css/material-design.css">
        <link rel="stylesheet" type="text/css" href="assets/css/small-n-flat.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <title>HMS Admin</title>
    </head>
    <body class="cm-no-transition cm-1-navbar">
       <?php include 'inc/admenu.php'?>
       <?php include 'inc/header.php'?>
        
        <div id="global">
            <div class="container-fluid cm-container-white">
                <h2 style="margin-top:0;">Welcome to HMS Admin Dashboard !</h2> 
                <p> </p>
			
            </div>
			<div class="container"> 
			<div class="row">
			
			<div class="col-sm-8 col-sm-offset-2"> 
			<div class="well"> 
			
			<br /> 
			<table class="table table-bordered"> 
			
			<thead> 
				<tr> 
					<th>Patient Name</th>
					<th>Email Address</th>
					<th>Phone Number</th>
					<th>Address</th>
					<th>Action</th>
				
				</tr>
			</thead>
				
			<tbody> 
				<?php while($patient_info=mysqli_fetch_assoc($query_result)){  ?>
				<tr> 
					<td><?php echo $patient_info['patient_name'];?></td>
					<td><?php echo $patient_info['email_address'];?></td>
					<td><?php echo $patient_info['phone_number'];?></td>
					<td><?php echo $patient_info['address'];?></td>
					<td>
						
						<a href="?status=delete&&patient_id=<?php echo $patient_info['patient_id'];?>" class="btn btn-danger">
						<span class="glyphicon glyphicon-trash"></span>
						</a>
					
					</td>

				
				</tr>
				<?php }?>
			</tbody>
			</table>
			
			
		</div>
			</div>
			</div>	
		</div>
           
            <footer class="cm-footer"><span class="pull-left">Annoye</span><span class="pull-right">&copy; Project 1 UU CSE</span></footer>
        </div>
        <script src="assets/js/lib/jquery-2.1.3.min.js"></script>
        <script src="assets/js/jquery.mousewheel.min.js"></script>
        <script src="assets/js/jquery.cookie.min.js"></script>
        <script src="assets/js/fastclick.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/clearmin.min.js"></script>
        <script src="assets/js/demo/home.js"></script>
    </body>
</html>