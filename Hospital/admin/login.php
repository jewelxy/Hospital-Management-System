<?php 
	include 'lib/session.php';
	Session::init();

?>

<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php include 'helpers/Format.php'; ?>

<?php
	$db = new Database();
	$fm = new Format();

?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-clearmin.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/roboto.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <title>Admin Login</title>
    <style></style>
  </head>
  <body class="cm-login">

    <div class="text-center" style="padding:90px 0 30px 0;background:#FFDAFF;border-bottom:1px solid #ddd;color: #d25e59;font-size: 25px;">
      Login Into HSM
    </div>
    
    <div class="col-sm-6 col-md-4 col-lg-3" style="margin:40px auto; float:none;">
	
		<?php
			if($_SERVER['REQUEST_METHOD']=='POST'){
				$username =$fm->validation($_POST['username']);
				$password =$fm->validation(md5( $_POST['password']));
				
				$username = mysqli_real_escape_string($db->link, $username);
				$password = mysqli_real_escape_string($db->link, $password);
				
				$query = "SELECT * FROM tbl_user WHERE username='$username' AND password = '$password'";
				$result = $db->select($query);
				
				if($result !=false){
					$value = mysqli_fetch_array($result);
					$row = mysqli_num_rows($result);
					
					if($row > 0){
						
						Session::set("login",true);
						Session::set("username",$value['username']);
						Session::set("userId",$value['id']);
						header("Location:index.php"); 
					}else{
						echo "<span style='color:#e1o;font-size:18px;'>No result found !!</span>";
					}
					
				}else{
					echo "<span style='color:#e1o;font-size:18px;'>Username or 
					Password mismatched !!</span>";
				}
			}
			
		?>
		
	
      <form method="post" action="login.php">
	<div class="col-xs-12">
          <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-addon"><i class="fa fa-fw fa-user"></i></div>
	      <input type="text" name="username" class="form-control" placeholder="Username">
	    </div>
          </div>
          <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-addon"><i class="fa fa-fw fa-lock"></i></div>
	      <input type="password" name="password" class="form-control" placeholder="Password">
	    </div>
          </div>
        </div>
	<div class="col-xs-6">
          <div class="checkbox"><label><input type="checkbox"> Remember me</label></div>
	</div><div class="col-xs-6">
          <input type="submit" value="Log in"  class="btn btn-block btn-primary">
        </div>
      </form>
    </div>
  </body>
</html>
