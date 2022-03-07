<?php 
require("connection.php");
$Q="SELECT * FROM SUBJECTS order by sub_id desc limit 5";
$output="";
$res=mysqli_query($conn,$Q);
if (mysqli_num_rows($res)>0) {
	$output="<table>
				<tr>
					<td>S NO:</td>
					<td>SUBJECT</td>
					<td colspan='2' align='center'>Operations</td>
				</tr>";
	$a=0;
	while($result=mysqli_fetch_assoc($res)){
		$a=$a+1;
		$output.="<tr>
			<td>{$a}</td>
			<td>{$result['subject']}</td>
			<td align='center'><button data-did='{$result['sub_id']}' id='dbtn' type='button' class'btn btn-danger' style='background-color:#dc3545; border:#dc3545;padding:6px 12px;color:white; border-radius:5px; border-bottom:5px;'>Delete</button></td>
			<td><button id='ebtn' type='button' class='editbtnn btn btn-success' data-eid='{$result['sub_id']}' style='border:#dc3545;padding:6px 20px;color:white; border-radius:5px; border-top:5px;'>Edit</button></td>
			
		</tr>";
	}
	$output.="</table>";
	echo $output;
}else{
	echo "no record found";
}

?>
