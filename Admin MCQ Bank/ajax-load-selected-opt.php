<?php 
require("connection.php");
$subid=$_POST['sid'];
$SQL="SELECT * FROM subjects";
		$result=mysqli_query($conn,$SQL) or die("Category Querry failed");
					$STR="";
			while($row=mysqli_fetch_assoc($result)){
				if($subid==$row['sub_id']){
					$selected='selected';
				}else{
					$selected='';
				}
				$STR.="<option {$selected} value='{$row['sub_id']}'>".$row['subject']."</option>";
			}
echo $STR;
?>