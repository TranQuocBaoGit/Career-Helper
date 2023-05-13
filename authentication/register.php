<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body style="background-color: #ebffee;">
	<div class="container">
		<div class="panel panel-primary" style="background-color: white; width: 700px; margin: 50px auto; border: 1px solid #3336a3; border-radius: 10px; padding: 2% 5%;">
			<div class="panel-heading">
				<h2 class="text-center" style="color: #61107a;">Resgiter Form</h2>
				<?php if(isset($_REQUEST["error"])): ?>
					<?php if($_REQUEST["error"] == "emailTaken"): ?>
						<p style="color: red;" class="text-center mb-0">Email already taken</p>
					<?php elseif($_REQUEST["error"] == "wrongPassword"): ?>
						<p style="color: red;" class="text-center mb-0">Wrong confirm password</p>
					<?php endif; ?>
				<?php endif; ?>
			</div>
			<div class="panel-body">
				<form method="post" action="authentication/register-processing.php">
					
					<div class="form-group mb-2">
					  <label for="email" style="color: #040acf;" >Enter email</label>
					  <input required="true" type="email" class="form-control" id="email" name="email" 
					  		 value="<?= htmlspecialchars($_POST["email"] ?? "")?>" style="border: 1px solid #c3c4e8;">
					</div>

					<div class="form-group">
					  <label for="pwd" style="color: #040acf;">Enter password</label>
					  <input required="true" type="password" class="form-control" id="pwd" name="password" minlength="8" style="border: 1px solid #c3c4e8;">
					</div>

					<div class="form-group">
					  <label for="cpwd" style="color: #040acf;">Confirm password</label>
					  <input required="true" type="password" class="form-control" id="cpwd" name="cpassword" minlength="8" style="border: 1px solid #c3c4e8;">
					</div>

					<div class="form-group mb-2 mt-2 row">
						<div class="col">
							<label for="fname" style="color: #040acf;">Enter first name</label>
							<input required="true" type="text" class="form-control" id="fname" name="fname" 
									value="<?= htmlspecialchars($_POST["fname"] ?? "")?>" style="border: 1px solid #c3c4e8;">
						</div>
						<div class="col">
							<label for="lname" style="color: #040acf;">Enter last name</label>
							<input required="true" type="text" class="form-control" id="lname" name="lname" 
									value="<?= htmlspecialchars($_POST["lname"] ?? "")?>" style="border: 1px solid #c3c4e8;">
						</div>
					</div>

					<div class="form-group mb-2 row">
						<div class="col-8">
							<label for="phone" style="color: #040acf;">Enter phone number</label>
							<input required="true" type="text" class="form-control" id="phone" name="phone" 
									value="<?= htmlspecialchars($_POST["phone"] ?? "")?>" style="border: 1px solid #c3c4e8;">
						</div>
						<div class="col-4">
							<label for="birthdate" style="color: #040acf;">Enter birthdate</label>
							<input required="true" type="date" class="form-control" id="birthdate" name="birthdate" 
									value="<?= htmlspecialchars($_POST["birthdate"] ?? "")?>" style="border: 1px solid #c3c4e8;">
						</div>
					</div>

					<div class="form-group">
					  <label for="address" style="color: #040acf;">Enter address</label>
					  <input required="true" type="text" class="form-control" id="address" name="address" style="border: 1px solid #c3c4e8;">
					</div>
					
					<button class="btn" style="width: 100%; margin: 0.5rem auto; margin-top:1rem; color: #040acf; border: 1px solid #3336a3; border-radius: 5px; background-color: #f0f0f5;">Create account</button>
					<p class="text-center mt-1">
						<a href="index.php?page=login" class="text-decoration-none" style="margin:0 auto;">Already have account?</a>
					</p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>