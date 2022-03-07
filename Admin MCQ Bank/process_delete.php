<?php 
require("connection.php");
$sub_id=$_POST['id'];

$SQL="DELETE from questions where id='$sub_id'";

	$result=mysqli_query($conn,$SQL) or die("querry failed");
	header("location:adminpanel.php");
	mysqli_close($conn);




?>