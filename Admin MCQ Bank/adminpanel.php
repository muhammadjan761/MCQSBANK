<?php
require("connection.php");
 session_start();
 error_reporting(0);
$name=$_SESSION['userr'];

?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">


</style>


	<title>Dashboard</title>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">></script>
  <link rel="stylesheet" type="text/css" href="assets/laststyle5.css">

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

	<script type="text/javascript" src='assets/datajs5.js'></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
	

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
		<?php  
								$_SESSION['id']=$a;
								if ($name==true) {
							?>

	<div class="container-fluid">
		<div class="search-wrapper">
					<i class="fas fa-search" id="searchbtn"></i>
					<input class="form-control" placeholder="search Here...." type="text" id="search" autocomplete="off">
				</div>
			<div class="uppernav bg-dark">
				<div class="user-profile">
					<i class="fas fa-user-circle text-light">Hi Admin!</i>
				</div>
			</div>
			<nav class="bg-dark">
				<input type="checkbox" id="click">
				<label for="click" id="checkbtn">
					<i class="fas fa-bars" ></i>
				</label>
				<label for='click' id="cancelbtn">
						<i class="fas fa-window-close"></i>
				</label>
				<label class="logo"><a href="adminpanel.php" class="text-light">DASHBOARD</a></label>
				<div class="sidebar">
					<ul class="bg-dark">
						 <li><a href="cat.php" class="text-light"><i class='fas fa-list-alt'></i>SUBJECS</a></li>
						 <li><a href="Questions.php" class="text-light"><i class="fas fa-question-circle"></i>QUESTIONS</a></li>
						 <li><a href="addquestion2.php" class="text-light"><i class="fas fa-plus"></i>ADDQUESTION</a></li>
				 		 <li><a href="addcat.php" class="text-light"><i class="fas fa-plus-square"></i>ADDCATEGORY</a></li>
						 <li><a href="logout.php" class="text-light"><i class="fas fa-sign-out-alt"></i>logout</a></li>
					</ul>
				</div>
			</nav>
				<div class="wrapper border">
					
							<div class="row mt-4">
								<div class="col-md-12 bg-dark text-light text-center">
									<h1>Questions</h1>
								</div>
							</div>
							<div class="table-responsive-sm table-responsive-md table-responsive-lg mt-4">
								<table id="table-body" class="table table-hover table-striped">

								</table>
							</div>
				</div>

		<?php
			}
			else{
				header('location:index.php');
			}
				
		  ?>
		
			}
			<div id="msg">
				
			</div>
			<div id="model">
				<div id="model-form">
					<table>
					
					</table>
					<button class="btn btn-close btn-close-white" id="close-btn"></button>
				</div>
			</div>
			  <div class="loader-wraper">
					<div class="spinner-grow" id="loader"></div>
				</div>
</body>
</html>