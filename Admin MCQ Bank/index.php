<!DOCTYPE html>
<?php 
require("connection.php");
session_start();
error_reporting(0);
if (isset($_POST['submit'])) {
	$user=$_POST['user_name'];
	$pass=$_POST['pass_word'];
	$Q="select * from mcqadmin where username='$user' and password='$pass'";
	$temp=mysqli_query($conn,$Q);
	$res=mysqli_num_rows($temp);
	$QQ="select * from mcqadmin";
$result=mysqli_query($conn,$QQ);
$row=mysqli_fetch_assoc($result);
	if ($res==1) {
		$_SESSION['userr']=$row['username'];
		header("location:adminpanel.php");
	}else{
		header("location:index.php");
	}
}

?>
<html>
<head>
	<title>LOGIN----ADMIN</title>
	<link rel="stylesheet" type="text/css" href="assets/laststyle5.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">></script>


<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

	<script type="text/javascript" src='assets/datajs5.js'></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
	

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

		<div class="login-wrapper rounded shadow-lg bg-light">
				<div class="row bg-dark rounded">
					<div class="col-md-12">
						<h1 class="text-light text-center" >LOGIN</h1>
					</div>
				</div>
					<form method="post" class="form-control">
						<div class="row mt-3">
							<div class="col-md-12">
								<input type="text" name="user_name" class="form-control" placeholder="USERNAME" required>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-12">
								<input type="password" name="pass_word" class="form-control" placeholder="PASSWORD" required>
							</div>
						</div>
						<div class="row mt-3 mb-3">
							<div class="col-md-6 ">
								<a href="#" class="text-dark">Fogot Password?</a>
							</div>
							<div class="col-md-6 text-center">
								<input id="loginbtn" class="btn btn-dark"  type="submit" name="submit">
							</div>
						</div>
						
						
					</form>

		</div>
			  <div class="loader-wraper">
					<div class="spinner-grow" id="loader"></div>
				</div>
</body>
</html>