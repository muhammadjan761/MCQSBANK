<?php 
require('connection.php');
					$Quid=$_POST['id'];
					$subject=$_POST['sub'];
					$Question=$_POST['Ques'];
					$option1=$_POST['opt1'];
					$option2=$_POST['opt2'];
					$option3=$_POST['opt3'];
					$option4=$_POST['opt4'];
					$coption=$_POST['copt'];
					$query="UPDATE questions SET sub_id='$subject',question='$Question',option1='$option1',option2='$option2',option3='$option3',option4='$option4',corect_opt='$coption' where id='$Quid' ";
					$str='';
					if(mysqli_query($conn,$query)){
						$str='1';
					}else{
						$str='0';

					}
					echo $str;
?>