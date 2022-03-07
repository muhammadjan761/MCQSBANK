<?php 
include('connection.php');
$id=$_POST['did'];
$Q="DELETE FROM subjects where sub_id='$id'";
if (mysqli_query($conn,$Q)) {
	echo "1";
}else{
	echo "2";
}

?>