
<!DOCTYPE html>
<?php 
require("connection.php");
session_start();
error_reporting(0);
if (isset($_POST['submit'])) {
	$cat=$_POST['cat'];
	$code=$_POST['code'];
	$QQ="select subject from Subjects where subject='$cat'";
	$re=mysqli_query($conn,$QQ);
	if(mysqli_num_rows($re)>0){
		echo "Subject already added";
			}
		else{
			
			$Q="insert into subjects (subject) values('$cat')";
			mysqli_query($conn,$Q) or die("query failed");;

			echo "<script>
    		alert('subject added successfully');
    		</script>";
		}
	}


?>
<html>
<head>
	<title>ADD CATEGORY</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">></script>
<link rel="stylesheet" type="text/css" href="assets/laststyle5.css">
	<script type="text/javascript" src='assets/datajs5.js'></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
	

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

</head>
<body>
		<?php 
	$name=$_SESSION['userr'];
	if($name==true){
		/*session varifcation*/
	 ?>
	<div class="container-fluid">
		<!-- navigation bar start -->
		<div class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top border border-white rounded">
				<a href="adminpanel.php" class="navbar-brand text-light">MCQ's BANK</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsiblenavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="collapsiblenavbar">
					<div class="navbar-nav">
						<div class="nav-item"><a href="cat.php" class="nav-link active text-light">SUBJECS</a></div>
						<div class="nav-item"><a href="Questions.php" class="nav-link text-light">QUESTIONS</a></div>
						<div class="nav-item"><a href="addquestion2.php" class="nav-link text-light">ADDQUESTION</a></div>
						<div class="nav-item"><a href="addcat.php" class="nav-link text-light">ADDCATEGORY</a></div>
						<div class="nav-item"><a href="logout.php" class="nav-link text-light">logout</a></div>
					</div>
				</div>
		</div> <!-- navigation bar end -->

		<!-- add subject form wrapper start-->
			<div class="subform_wrapper">
				<div class="bg-dark text-light text-center rounded">
					 <div class="col-md-12 col-sm-12 h3">ADD SUBJECT</div>
				</div>
				<form method="post" class="form-control shadow">
					<div class="row">
						<div class="col-md-12 col-sm-12 mt-3"><input type="text" id="cat" class="form-control" placeholder="Enter Subject" required></div>
						<div class="col-md-12 col-sm-12 d-grid mt-3 mb-3"><input class="btn btn-dark text-light" type="submit" id="btn"></div>
					</div>
				</form> 
			</div>
			<!-- end of the form wrapper -->
	
	
 			<!-- retrived subjects data -->
			<div class="tablesubject-body">
					<div class="bg-dark text-light text-center mb-3 rounded">
						 <div class="col-md-12 h3">SUBJECTS</div>
					</div>
				<div class="table-responsive-sm table-responsive-md table-responsive-lg border rounded shadow">
					<table id="table-subject" class="table table-hover table-striped">
	
					</table>
					<div class="border">
						<h1 id="message"></h1>
					</div>
				</div>
			</div>
			<div id="edit_cat_box">
						<div id="edit_cat_box_form">
							<table>
								
							</table>
							<button id="close-bt" class="btn btn-close btn-close-white"></button>
						</div>
					</div>
	</div>
				  <div class="loader-wraper">
					<div class="spinner-grow" id="loader"></div>
				</div>


<?php } else{
	header("location:index.php");
}?>
</body>
</html>