
<?php 
try{ 
	require 'connect.php';
	$id = $_POST["id"];  
	$text = $_POST["text"];

	$column_name = $_POST["column_name"];  
	$sql = "UPDATE bus SET ".$column_name."='".$text."' WHERE id='".$id."'"; 
	$stmt = $conn->prepare($sql);
	$stmt->execute();

}
catch(PDOException $e)
{
	echo "<script>";
	echo "alert($e->getMessage())";
	echo "</script>";
}
?>

