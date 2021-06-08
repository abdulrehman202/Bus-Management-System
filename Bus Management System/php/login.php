<?php

session_start();

$email = $_POST['email'];
$password = $_POST['pass'];

$x=$password;
try{
	$sql = "SELECT id, Name FROM users WHERE  Email = '$email' AND Password = '$x'";

	require 'connect.php';

	$stmt = $conn->prepare($sql);

	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	if($row){

		$_SESSION['uid'] = $row['id'];

		if($row['Name'] == 'Admin')
		{
			header("Location:add bus admin.php");
		}

		else
		{
			header("Location:book bus.php");
		}
	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("Wrong Email or Password")';
		echo '</script>';
		header("Location:signin.php");
	}

}catch(PDOException $e)
{
	echo '<script language="javascript">';
	echo 'alert($e->getMessage())';
	echo '</script>';
}
?>