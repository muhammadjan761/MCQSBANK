<?php 
require('connection.php');
$value=$_POST['val'];
$Q="SELECT * FROM questions where question LIKE '%{$value}%'";
$output='';
$res=mysqli_query($conn,$Q) or die("error");
if (mysqli_num_rows($res)>0) {
$output="<table>
			<tr>
				<th>S NO</th>
				<th>question</th>
				<th>option 1</th>
				<th>option 2</th>
				<th>option 3</th>
				<th>option 4</th>
				<th>correct option</th>
				<th colspan=2>Operaations</th>
			</tr>
			";
			$a=0;
	
			while($ress=mysqli_fetch_assoc($res)){
				$a=$a+1;
				$output .="<tr>
					<td value=>$a</td>								
					<td>{$ress['question']}</td>
					<td>{$ress['option1']}</td>
					<td>{$ress['option2']}</td>
					<td>{$ress['option3']}</td>
					<td>{$ress['option4']}</td>
					<td>{$ress['corect_opt']}</td>
					<td><button type='button' class='btnn' data-id='{$ress['id']}' style='background-color:#dc3545; border:#dc3545;padding:6px 12px;color:white; border-radius:5px;'>delete</button></td>
					<td><button type='button' class='editbtnn btn btn-success' data-eid='{$ress['id']}' data-subid='{$ress['sub_id']}' style='border:#dc3545;padding:6px 20px;color:white; border-radius:5px;'>Edit</button></td>
					</tr>
					";
			}
			$output .="</table>";
			
			echo $output;
}else{
	echo "<h1>No Record found</h1>";
}
?>