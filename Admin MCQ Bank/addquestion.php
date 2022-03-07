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
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">></script>
	<script type="text/javascript" src='load-data2.js'></script>
<style type="text/css">
	.addQ_header{
		border:1px solid black;
		text-align: center;
	}
	.select_cat{
		border:1px solid black;
		text-align: center;
	}
</style>
</head>
<body>
	<div class="addQ_header">
<h1>ADD QUESTION</h1>
</div>
<div class="Select_Cat">
	<h1>Select Category</h1>
</div>

<?php
$name=$_SESSION['userr'];
if($name==true){
echo'<form method="post">
	<label>Category:</label>
	<select id="category">
	<option selected disabled>select category</option>';

		$SQL="SELECT * FROM subjects";
		$result=mysqli_query($conn,$SQL) or die("Category Querry failed");

			while($row=mysqli_fetch_assoc($result)){
				echo "<option value='{$row['sub_id']}'>".$row['subject']."</option>";
			}
	

	echo'</select>
	<label>Question:</label>
	<input type="text" id="question"><br><br>
	<label>Options:</label><br><br>
	<label>Option 1:</label>
	<input type="text" id="opt_1">
	<label>Option 2:</label>

	<input type="text" id="opt2"><br><br>
	<label>Option 3:</label>

	<input type="text" id="opt3">
	<label>Option 4:</label>

	<input type="text" id="opt4">
	<label>Correct Option:</label>

	<input type="text" id="correct_opttion">
	<input type="submit" id="bttn">
</form>';

}else
{

				header("location:index.php");
} ?>
<div>

	<table>
		<tr>
			<td id="table-body"></td>
		</tr>
	</table>
</div>
</body>
</html>