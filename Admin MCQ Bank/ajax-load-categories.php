<?php 
include("connection.php");
$Q="SELECT * FROM subjects";
$str="";
$result=mysqli_query($conn,$Q);
	
	while ($row=mysqli_fetch_assoc($result)) {
		echo $str="<li><a  class='nav-link text-light' style='cursor:pointer' id='btnnnn' data-id='{$row['sub_id']}' data-name='{$row['subject']}'>".strtoupper($row['subject'])."</a></li>";
	}
	
?>