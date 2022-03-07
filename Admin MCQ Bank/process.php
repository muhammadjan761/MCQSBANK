<?php 
require("connection.php");
$sub_id=$_POST['id'];
$question=$_POST['question'];
$sub=$_POST['subjects'];
$op1=$_POST['op1'];
$op2=$_POST['op2'];
$op3=$_POST['op3'];
$op4=$_POST['op4'];
$cor_op=$_POST['cor_op'];

$SQL="UPDATE questions SET question='$question', sub_id='$sub', option1='$op1',option2='$op2',option3='$op3',option4='$op4'
	,corect_opt='$cor_op' where id='$sub_id'";

	$result=mysqli_query($conn,$SQL) or die("querry failed");
	header("location:adminpanel.php");
	mysqli_close($conn);




?>