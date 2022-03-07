<?php 
include('connection.php')
$category=$_POST['cat'];



$q="insert into subjects (subject) values('$category')";
if (mysqli_query($conn,$q)) {
	echo 1;
}else{
	echo 0;
}

?>