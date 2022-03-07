<?php 
include("connection.php");
$Q="SELECT * From Subjects";
$str="";
$a=0;
$rr=mysqli_query($conn,$Q);
if(mysqli_num_rows($rr)>0){
	$str="<table>
	<tr>
		<th>S No:</th>
		<th>Subject</th>
		<th>operations</th>
	</tr>";
	While($row=mysqli_fetch_assoc($rr)){
		$a=$a+1;
	$str.="<tr>
		<td>".$a."</td>
		<td>".$row['subject']."</td>
		<td><button id='dbtn' class='btn btn-danger' data-did='".$row['sub_id']."'>Delete</button>
		<button style='width:72px;' id='ebtn' class='btn btn-success' data-eid='".$row['sub_id']."'>edit</button></td>
	</tr>";
	}
	$str.="</table>";
	echo $str;
}else{
	echo "no record found";
}

?>