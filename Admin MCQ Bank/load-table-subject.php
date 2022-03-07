<?php 
require("connection.php");
$Q="SELECT * FROM SUBJECTS";
$output="";
$res=mysqli_query($conn,$Q);
if (mysqli_num_rows($res)>0) {
	$output="<table>
				<tr>
					<td>S NO:</td>
					<td>SUBJECT</td>
				</tr>";
	while($result=mysqli_fetch_assoc($res)){
		$output.="<tr>
			<td>{$result['sub_id']}</td>
			<td>{$result['subject']}</td>

		</tr>"
	}
	$output.="</table>"
	echo $output;
}else{
	echo "no record found";
}

?>
