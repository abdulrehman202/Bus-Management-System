<?php

session_start();

try{ 
	require 'connect.php';
	if(isset($_POST['seatsAvailable']))
	{
		$seats = $_POST['seatsAvailable'];
	}
	else 
		$seats = 0;
	if(isset($_POST['dptCity'])&&isset($_POST['destCity'])&&isset($_POST['dptDate'])&&isset($_POST['dptHour'])&&isset($_POST['dptMin'])&&isset($_POST['dptMeridian']))
	{
		$dCIty = $_POST['dptCity'];
		$aCity = $_POST['destCity'];
		$dDate = $_POST['dptDate'];
		$dTime = $_POST['dptHour'].":".$_POST['dptMin'];
		$dMeridian = $_POST['dptMeridian'];

		$sql = "INSERT INTO bus (Departure, Arrival, Date, Time, Meridiem, Seats) VALUES ('$dCIty','$aCity','$dDate','$dTime','$dMeridian',$seats)";
		$conn->exec($sql);
		$last_id = $conn->lastInsertId();
		$_SESSION['uid'] =  $last_id;
		header("Location:add bus admin.php");
		echo "<div class='form-label'>Data Added<div>";
	}
	else{
		echo "<br>Incomplete data fields";

	}
}
catch(PDOException $e)
{
	echo $sql . "<br>" . $e->getMessage();
}

?>