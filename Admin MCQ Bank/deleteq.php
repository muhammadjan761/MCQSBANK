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
	<title>Delete Question</title>
</head>
<body>
<form method="post" action="process_delete.php">
	<input type="text" name="id"  value="<?php echo $row['id'] ?>">
	<label>are you sure you want to delete record?</label>
	<input type="submit" name="submit" value="Yes">
</form>
<?php 
	}
}
?>
</body>
</html>