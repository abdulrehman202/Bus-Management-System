<?php
$websiteName="Travel A"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	

	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<!-- <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" /> -->
	<!-- CSS -->
	<link type="text/css" rel="stylesheet" href="../css/book bus style.css" />
	<title><?php echo "$websiteName";?></title>
</head>

<body>
	<?php

	session_start();
	?>

	<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="#"><?php echo "$websiteName";?></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link active" href="#">Book Bus<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="view past bookings.php">View Past Bookings</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logOut.php">Log Out</a>
				</li>
			</ul>
		</div>
	</nav>

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							
							<h1>Book Bus</h1>
						</div>
						<form action = "bookBus.php" method = "POST">
							
							<div class="form-group">
								<span class="form-label">No Of Seats</span>
								<input name = "seatsToBook" class="form-control" type="number" placeholder="No Of Seats" maxlength="2" pattern="\d{2}" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
							</div>
							<div class="form-group">
								<span class="form-label">Departure City</span>
								<select name = "dptCity" id="departureCity" class="form-control" required>
									<?php
									require 'connect.php';

									$sql = "SELECT DISTINCT Departure FROM bus";

									$stmt = $conn->prepare($sql);

									$stmt->execute();
									while($row = $stmt->fetch(PDO::FETCH_ASSOC))
									{
										echo "<option>".$row['Departure']."</option>";
									}
									
									
									?>
									<div class="invalid-feedback">No City selected</div>
								</select>
								<span class="select-arrow"></span>
							</div>
							<div class="form-group">
								<span class="form-label">Destination City</span>
								<select name = "destCity" id="destinationCity"  class="form-control" required>
									<?php
									require 'connect.php';

									$sql = "SELECT DISTINCT Arrival FROM bus";

									$stmt = $conn->prepare($sql);

									$stmt->execute();
									while($row = $stmt->fetch(PDO::FETCH_ASSOC))
									{
										echo "<option>".$row['Arrival']."</option>";
									}
									
									
									?>
									<div class="invalid-feedback">No City selected</div>
								</select>
								<span class="select-arrow"></span>
							</div>
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Departure Date</span>
										<input name = "dptDate" class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Hour</span>
												<select name = dptHour class="form-control" required>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
													<option>11</option>
													<option>12</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Min</span>
												<select name = "dptMin" class="form-control" required>
													<option>05</option>
													<option>10</option>
													<option>15</option>
													<option>20</option>
													<option>25</option>
													<option>30</option>
													<option>35</option>
													<option>40</option>
													<option>45</option>
													<option>50</option>
													<option>55</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">AM/PM</span>
												<select name = 'meridien' class="form-control">
													<option>AM</option>
													<option>PM</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Book Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>