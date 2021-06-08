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
				<img src="../images/registration-form-4.jpg" alt="background">
			</div>
			<form action = "login.php" method = "POST">
				<h3>Sign In</h3>
				<div class="form-holder active">
					<input name = "email" type="text" placeholder="e-mail" class="form-control" required>
				</div>
				<div class="form-holder passwordC">
					<input name = "pass" type="password" placeholder="Password" class="form-control" required>
				</div>
				<label>
							<input name = "savePass" type="checkbox"> Remember Me</input>
							<span class="checkmark"></span>
						</label>
				<div class="form-login">
					<button>Sign in</button>
					<p>Don't have an account? <a href="signup.php">Sign Up</a></p>
				</div>
			</form>
		</div>
	</div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>