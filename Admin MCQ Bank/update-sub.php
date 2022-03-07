<?php 
include('connection.php');
$id=$_POST['id'];
$sub=$_POST['subject'];
$Q="UPDATE subjects SET subject='$sub' where sub_id='$id'";
if (mysqli_query($conn,$Q)) {
	echo "1";
}else {
	echo "2";
}

?>