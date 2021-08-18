<?php 

//add_patient php code

	function add_patient(){
		$link=mysqli_connect('localhost','root','','db_hospital');
	$sql="INSERT INTO tbl_patient_info (patient_name, email_address, phone_number, address)VALUES('$_POST[patient_name]', '$_POST[email_address]', '$_POST[phone_number]', '$_POST[address]')";
	
	if(mysqli_query($link,$sql)){
		 
		$message="patient info save successfully";
		return $message;
	}else{
		die('Query problem'.mysqli_error($link));
	}
}



//edi_patient php code

	function select_patient_info(){
				global $link;
				global $patient_id;
				$student_id=$_GET['patient_id'];
			$sql="SELECT*FROM tbl_patient_info WHERE patient_id='$patient_id'";

			 if(mysqli_query($link,$sql)){
				$query_result=mysqli_query($link,$sql);
				$db_hospital=mysqli_fetch_assoc($query_result);
			}else{
				die('Query problem'.mysqli_error($link));
			}
			return $db_hospital;
}


	function update_patient_info(){
		global $link;
		global $patient_id;
		
		$sql="UPDATE tbl_patient_info SET patient_name='$_POST[patient_name]',email_address='$_POST[email_address]',phone_number='$_POST[phone_number]',address='$_POST[address]' where patient_id='$patient_id'";
	if(mysqli_query($link,$sql)){
		 header('Location:view_patient.php');
		$message="Student info Update successfully";
	}else{
		die('Query problem'.mysqli_error($link));
	}

	}
	
	
	
//view_patient php code	

				function delete_patient_info(){
						global $link;
						$patient_id=$_GET['patient_id'];
						$sql="DELETE FROM tbl_patient_info WHERE patient_id='$patient_id'";
							if(!mysqli_query($link,$sql)){
						die('Query Problem'.mysqli_error($link));
							}
				}
				
				
				
				
				
					function select_all_patient_info(){
								global $link;
								$sql="SELECT*FROM tbl_patient_info";
							if(mysqli_query($link,$sql)){
							$query_result=mysqli_query($link,$sql);
									return $query_result;
							$patient_info=mysqli_fetch_assoc($query_result);
							}else{
								die('Query Problem'.mysqli_error($link));
							}
					}
?>