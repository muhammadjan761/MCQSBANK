<?php
require('connection.php');
$Quid=$_POST['id'];
$query="SELECT * FROM questions WHERE id='$Quid'";
$output=mysqli_query($conn,$query);
$result="";
if (mysqli_num_rows($output)>0) {
	while ($row=mysqli_fetch_assoc($output)) {
	
	$result.="<div class='row'>
								<div class='col-md-12 bg-dark text-light text-center'>
									<h1>EDIT FORM</h1>
								</div>
							</div>
					<form method='POST'>
						<tr class='row mt-4'>
						<input id='id' value='{$row['id']}' hidden>
							<td class='col-md-3 col-sm-12 mt-2'>
								<select id='subb' class='form-select form-select-md form-select-sm'>
									
								</select>
							</td>
							<td class='col-md-3 col-sm-12 mt-2'>
								<input id='Question' type='text' placeholder='Question' class='form-control' value='{$row['question']}'>
							</td>
							<td class='col-md-3 col-sm-12 mt-2'>
								<input id='opt1' type='text' placeholder='Option one' class='form-control' value='{$row['option1']}'>
							</td>
							<td class='col-md-3 col-sm-12 mt-2'>
								<input id='opt-2' type='text' placeholder='Option two' class='form-control' value='{$row['option2']}'>
								</td>
						</tr>
						<tr class='row mt-2'> 
							<td class='col-md-3 col-sm-12 mt-2'>
								<input id='opt-3' type='text' placeholder='Option Three' class='form-control' value='{$row['option3']}'>
							</td>
							<td class='col-md-3 col-sm-12 mt-2'>
								<input id='opt-4' type='text' placeholder='Option Four' class='form-control' value='{$row['option4']}'>
							</td>
							<td class='col-md-3 col-sm-12 mt-2'>
								<input id='copt' type='text' placeholder='Correct Option' class='form-control' value='{$row['corect_opt']}'>
							</td>
							<td class='col-md-3 col-sm-12 mt-2'>
								<input type='button' value='submit' id='bttnnn' class='btn btn-dark '>
							</td>
						</tr>
						</form>";
					}
					echo $result;
}else{
	echo "no record found";
}



 ?>