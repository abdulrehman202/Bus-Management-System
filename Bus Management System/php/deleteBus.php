<?php  
require 'connect.php';
$sql = "DELETE FROM bus WHERE id = '".$_POST["id"]."'";
$stmt = $conn->prepare($sql);
$stmt->execute();  
// if(mysqli_query($connect, $sql))  
// {  
// 	echo 'Data Deleted';  
// }  
?>