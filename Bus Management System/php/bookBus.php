<?php

session_start();

$dCIty = $_POST['dptCity'];
$aCity = $_POST['destCity'];
$dDate = $_POST['dptDate'];
$dTime = $_POST['dptHour'].":".$_POST['dptMin'];
$dMeridian = $_POST['meridien'];
$seats = $_POST['seatsToBook'];

try{ 
	require 'connect.php';
	$dCIty = $_POST['dptCity'];
	$aCity = $_POST['destCity'];
	$dDate = $_POST['dptDate'];
	$dTime = $_POST['dptHour'].":".$_POST['dptMin'];
	$dMeridian = $_POST['meridien'];
	$seats = $_POST['seatsToBook'];


	$sql = "SELECT id, Seats FROM bus WHERE  Departure = '$dCIty' AND Arrival = '$aCity' AND Date = '$dDate' AND Time = '$dTime' AND Meridiem = '$dMeridian' AND Seats >=$seats";
	$stmt = $conn->prepare($sql);

	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);

	if($row)
	{
$cId = 	(int) $_SESSION['uid']; //customer Id
$bId = (int) $row['id']; //Bus Id
$sql = "INSERT INTO bookings (custId, busId, Seats) VALUES ($cId, $bId, $seats)";
$conn->exec($sql);
$last_id = $conn->lastInsertId();

$sql = "UPDATE bus SET Seats = Seats - $seats WHERE id = $bId";
$conn->exec($sql);

}

}
catch(PDOException $e)
{
	echo $sql . "<br>" . $e->getMessage();
}

?>