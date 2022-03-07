
<!DOCTYPE html>
<html>
<head>
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
	<title>Questions</title>
</head>
<body data-spy='scroll' data-target='.table' data-offset='5'>
	<?php
	session_start();
$name=$_SESSION['userr'];
if($name==true){?>
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
									 <div class="nav-item"><a href="#" class="nav-link text-light">QUESTIONS</a></div>
									 <div class="nav-item"><a href="addquestion2.php" class="nav-link text-light">ADDQUESTION</a></div>
									 <div class="nav-item"><a href="addcat.php" class="nav-link text-light">ADDCATEGORY</a></div>
									 <div class="nav-item"><a href="logout.php" class="nav-link text-light">logout</a></div>
								</div>
							</div>
					</div>
				</div>
				<section>
					<div class="navbar bg-dark justify-content-center">
						<div class="navbar-brand">
							 <h3 class="text-light">Categories</h3>
						</div>
						<ul class="nav" id="nav">
							
						</ul>
						
					</div>
				</section>
				<div class='table-wrapper'>
				<div id='scat'>
					select Category
				</div>
				<div  class="table-responsive-sm">
					<table id="category-table-section" class="table table-hover table-striped mt-3" style="width:100%;">
						
					</table>
					
				</div>
			</div>
				<div id="model">
				<div id="model-form">
					<table>
					
					</table>
					<button class="btn btn-close btn-close-white" id="close-btn"></button>
				</div>
			</div></div>
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