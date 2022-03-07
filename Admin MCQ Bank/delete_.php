<?php 
require("connection.php");
$QQQ="select * from questions";
		$res=mysqli_query($conn,$QQQ);
		$output="";
		if(mysqli_num_rows($res)>0){
			$output="<table border=2>
			<tr>
				<th>S NO</th>
				<th>question</th>
				<th>option 1</th>
				<th>option 2</th>
				<th>option 3</th>
				<th>option 4</th>
				<th>correct option</th>
				<th>Operaations</th>
			</tr>
			";
			$a=0;
	
			while($ress=mysqli_fetch_assoc($res)){
				$a=$a+1;
				$output .="<tr>
					<td>$a</td>								
					<td>{$ress['question']}</td>
					<td>{$ress['option1']}</td>
					<td>{$ress['option2']}</td>
					<td>{$ress['option3']}</td>
					<td>{$ress['option4']}</td>
					<td>{$ress['corect_opt']}</td>
					<td><a href='delete_Q.php'>edit</a></td>
					</tr>";
			}
			$output .="</table>";
			
			echo $output;
		}else{
			echo "no reord found";
		}

?>