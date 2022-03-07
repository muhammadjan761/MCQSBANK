<?php 

require("connection.php");
$ID=$_POST['Qid'];

$QQ="DELETE FROM questions WHERE id={$ID}";
if(mysqli_query($conn,$QQ) or die("querry failed".$QQ.error())){
	echo 1;
}else{
	echo 2;
}

?>