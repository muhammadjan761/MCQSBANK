<?php 
require("connection.php");
session_start();
error_reporting();
$que_id=$_GET['rn'];
$Q="SELECT * from questions where id={$que_id}";
$result=mysqli_query($conn,$Q) or die("query failed");
if (mysqli_num_rows($result)>0) {
while($row=mysqli_fetch_assoc($result)){
?>
<!DOCTYPE html>
<html>
<head>
	<title>update question</title>
</head>
<body>
	<form method='post' action="process.php">
		<label>ID:</label>
		<input type="text" name="id" value="<?php echo $row['id'] ?>"><br>
		<label>Subject:</label>
				<?php
			 $Q2= "Select * from subjects";
			 $re=mysqli_query($conn,$Q2) or die("query failed");
			 echo '<select name=subjects>';
			 
			 while($roww=mysqli_fetch_assoc($re)){
			 	if ($row['sub_id'] == $roww['sub_id']) {
			 		$select="selected";
			 	}else{
			 		$select="";
			 	}
			 	echo "<option {$select} value='{$roww['sub_id']}'>{$roww['subject']}</option>";
			 }

			 echo "</select> <br>";


			 ?> 
			 <label>Question:</label>
<input type="text" name="question" placeholder="question" value="<?php echo $row['question'] ?>"><br>
<label>Option 1:</label>
<input type="text" name="op1" placeholder="option1" value="<?php echo $row['option1'] ?>"><br>
<label>Option 2:</label>
<input type="text" name="op2" placeholder="option1" value="<?php echo $row['option2'] ?>"><br>
<label>Option 3:</label>
<input type="text" name="op3" placeholder="option1" value="<?php echo $row['option3'] ?>"><br>
<label>Option 4:</label>
<input type="text" name="op4" placeholder="option1" value="<?php echo $row['option4'] ?>"><br>
<label>Correct Option:</label>
<input type="text" name="cor_op" placeholder="option1" value="<?php echo $row['corect_opt'] ?>">
<input type="submit" name="submit">
</form>
<?php 
	
	
	}
	
}
?>
</body>
</html>