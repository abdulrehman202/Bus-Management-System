<?php $websiteName="Travel H"; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo "$websiteName";?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="../css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<div class="image-holder">
					<img src="../images/registration-form-4.jpg" alt="">
				</div>
				<form method="POST" action="registerUser.php" >
					<h3>Sign Up</h3>
					<div class="form-holder active">
						<input name = "name"  type="text" placeholder="name" class="form-control" required>
					</div>
					<div class="form-holder">
						<input name = "email" type="e-mail" placeholder="E-mail" class="form-control" required>
					</div>
					<div class="form-holder">
						<input name = "address" type="text" placeholder="Address" class="form-control" required>
					</div>
					<div class="form-holder">
						<input name = "contact" type="tel" placeholder="Contact No" class="form-control" required>
					</div>
					<div class="form-holder passwordC">
						<input name = "pass" type="Password" placeholder="Password" class="form-control" required>
					</div>
					<div class="form-holder passwordC">
						<input name = "re_pass" type="Password" placeholder="Confirm Password" class="form-control" required>
					</div>
					<div class="custom-file">
							<!-- <label>Select your image</label> -->
							<label>Upload Profile Pic</label>

							<input name="pic" type="file" class="custom-file-input" id="validatedCustomFile" required>
							<label class="custom-file-label" for="validatedCustomFile">Choose File</label>
							<div class="invalid-feedback">File not choosen</div>
						</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" checked required> I agree all statement in <a href="#">Terms & Conditions</a>
							<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-login">
						<button>Sign up</button>
						<p>Already Have account? <a href="signin.php">Login</a></p>
					</div>
				</form>
			</div>
		</div>

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>