<?php 
require("connection.php");
$SQL="SELECT * FROM subjects";
		$result=mysqli_query($conn,$SQL) or die("Category Querry failed");
					$STR="";
			while($row=mysqli_fetch_assoc($result)){
				
				$STR.="<option value='{$row['sub_id']}'>".$row['subject']."</option>";
			}
echo $STR;
?>