<?php 
include('connection.php');
$id=$_POST['cid'];
$Q="SELECT * from subjects where sub_id='$id'";
$res=mysqli_query($conn,$Q);

while($row=mysqli_fetch_assoc($res)){
	$result="<div class='col-md-12 bg-dark text-light text-center rounded'>
				<h1>EDIT</h1>
			</div>
			<form type='POST'>
			<input type='text' id='subid' value='{$row['sub_id']}'  class='form-control' hidden>
				<tr>
					<td class='col-md-12 col-sm-12'>
						 <input type='text' id='sub' value='{$row['subject']}'  class='form-control'>
					 </td>
				</tr>
				<tr class='mt-3'>
					<td class='col-md-12 col-sm-12'>
					 <button class='btn btn-dark w-100' type='submit' value='{$row['sub_id']}' id='esubmit'>Submit</button>
					 </td>
				</tr>
			</form>";
}
echo $result;
?>