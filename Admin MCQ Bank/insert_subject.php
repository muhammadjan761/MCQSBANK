<?php 
require("connection.php");
$sub=$_POST['subject'];
$QQ="SELECT * FROM subjects WHERE subject='$sub'";
$re=mysqli_query($conn,$QQ);

$output=0;
if (mysqli_num_rows($re)>0) {
	$output=1;
}else{
$Q="INSERT INTO subjects(subject) VALUES('$sub')";
if (mysqli_query($conn,$Q)) {
	$output=2;
}else{
	$output=3;
}
}
echo $output;

?>