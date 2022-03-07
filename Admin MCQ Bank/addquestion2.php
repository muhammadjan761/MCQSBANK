<?php 
require("connection.php");
session_start();
error_reporting(0);
if (isset($_POST['submit'])) {
	$subject=$_POST['category'];
	$question=$_POST['question'];
		$op1=$_POST['opt_1'];
			$opt2=$_POST['opt2'];
				$opt3=$_POST['opt3'];
					$opt4=$_POST['opt4'];
						$correctoption=$_POST['correct_opttion'];
						$QQ="SELECT question from questions where question='$question'";
						$req=mysqli_query($conn,$QQ);
						if(mysqli_num_rows($req)>0){
							echo "Question is already added";
						}else{
	$Q="insert into questions(sub_id,question,option1,option2,option3,option4,corect_opt) 
		values('$subject','$question','$op1','$opt2','$opt3','$opt4','$correctoption')";
						if(mysqli_query($conn, $Q)){
   					 echo "Records inserted successfully.";
						}else{
   							 echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
							}
}
}

?>
<!DOCTYPE html>
<html>
<head>
<title>ADD QUESTION</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">></script>
<link rel="stylesheet" type="text/css" href="assets/laststyle5.css">
	<script type="text/javascript" src='assets/datajs5.js'></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
	

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
	
	<div class="container-fluid">
				<div class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top border border-white rounded">
					<div class="container-fluid">
							<a href="adminpanel.php" class="navbar-brand text-light">MCQ's BANK</a>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
								<div class="navbar-nav">
									 <div class="nav-item"><a href="cat.php" class="nav-link text-light">SUBJECS</a></div>
									 <div class="nav-item"><a href="Questions.php" class="nav-link text-light">QUESTIONS</a></div>
									 <div class="nav-item"><a href="addquestion2.php" class="nav-link text-light">ADDQUESTION</a></div>
									 <div class="nav-item"><a href="addcat.php" class="nav-link text-light">ADDCATEGORY</a></div>
									 <div class="nav-item"><a href="logout.php" class="nav-link text-light">logout</a></div>
								</div>
							</div>
					</div>
				</div>
		<div class="mt-2 rounded">
				<div class="col col-md-12 col-sm-6 bg-dark h1 text-center text-white rounded p-5 ml-3 mr-3">
					ADD QUESTION
				</div>
			</div>

<?php
$name=$_SESSION['userr'];
if($name==true){?>
<form method="post" id="add_ques_Form" class="form-control mb-3 mt-4 container shadow-lg">
	<div class="row mb-3">
		<div class="col-md-6 col-sm-3 mt-3">
			<select id="sub" class="form-select form-select-md">
				<option selected disabled>select category</option>';
			</select>
		</div>
		<div  class="col-md-6 col-sm-3 mt-3">
				<input placeholder="Question" type="text" id="question"class="form-control">
		</div>
	</div>
	<div class="row mb-3">
		<div class="col-md-6 mb-3">
			<input placeholder="Option One" type="text" id="opt_1"class="form-control">
		</div>
		<div class="col-md-6">
			<input placeholder="Option Two" type="text" id="opt2"class="form-control">
		</div>
	</div>
	<div class="row mb-3">
		<div class="col-md-6 mb-3">
			<input placeholder="Option Three" type="text" id="opt3"class="form-control">
		</div>
		<div class="col-md-6">
			<input placeholder="Option Four" type="text" id="opt4"class="form-control">
		</div>
	</div>
	<div class="row mb-3">
		<div class="col-md-6 mb-3">
			<input placeholder="Correct Option" type="text" id="correct_opttion"class="form-control">
		</div>
		<div class="col-md-6">
	<input type="button" value="submit" id="bttn" class="btn btn-dark ">
		</div>
	</div>
</form>
<div class="table-responsive-sm table-responsive-md table-responsive-lg mt-4">

	<table id="table-body" class="table table-hover table-striped">
	
		<tr>
			<td id="msg" class="alert alert-success "></td>
		</tr>
	</table>

</div>
</div>
<div id="model">
	<div id="model-form">
		<table>
					
		</table>
		<button class="btn btn-close btn-close-white" id="close-btn"></button>
	</div>
</div>
<?php
}else
{

				header("location:index.php");
} ?>



<div class="loader-wraper">
	<div class="spinner-grow" id="loader"></div>
</div>
</body>
</html>