<?php 
require("connection.php");
session_start();
$user=$_SESSION['userr'];
if($user==true){
$Subject=$_POST['Subject'];
$Question=$_POST['Question'];
$opt1=$_POST['option1'];
$opt2=$_POST['option2'];
$opt3=$_POST['option3'];
$opt4=$_POST['option4'];
$correct_opt=$_POST['correct_opttion'];
$QUERY="SELECT question FROM questions WHERE question='$Question'";
$ress=mysqli_query($conn,$QUERY);
if (mysqli_num_rows($ress)>0) {
	echo 1;
	}else{

$QQ="INSERT INTO questions(sub_id,question,option1,option2,option3,option4,corect_opt) values('$Subject','$Question','$opt1','$opt2','$opt3','$opt4','$correct_opt')";

if (mysqli_query($conn,$QQ) or die("query failed")) {
	
	echo 2;
}else{

	echo 3;
}
}
}else{
	header('location:index.php');
}
?>