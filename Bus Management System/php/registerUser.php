<?php

session_start();

try{ 
	require 'connect.php';
	if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['address'])&&isset($_POST['contact'])&&isset($_POST['pass'])&&isset($_POST['pic']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$pwd = $_POST['pass'];
		$pic = $_POST['pic'];



		$sql = "INSERT INTO users (Name,Email,Address,Contact,Password,Picture) VALUES ('$name','$email','$address',$contact,'$pwd','$pic')";
		$conn->exec($sql);
		$last_id = $conn->lastInsertId();
		$_SESSION['uid'] =  $last_id;
		header("Location:book bus.php");
	}
	else{
		header("Location:signup.php");		
	}
}
catch(PDOException $e) {
	// echo $sql . "<br>" . $e->getMessage();
	header("Location:signup.php");		

}

?>