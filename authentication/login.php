<?php
$invalid = false;
$noUser = false;
if($_SERVER["REQUEST_METHOD"] === "POST"){
	require_once "./database/dtb.php";
	
	$queryAccount = sprintf("SELECT * FROM users 
							WHERE email = '%s'", 
							$connection->real_escape_String($_POST["email"]));
	$result = mysqli_query($connection, $queryAccount);

	$user = mysqli_fetch_assoc($result);

	if($user){
		if(password_verify($_POST["password"], $user["password"])){
			session_start();
			session_regenerate_id();
			$_SESSION["userId"] = $user["userId"];
			$_SESSION["fname"] = $user["fname"];
			$_SESSION["lname"] = $user["lname"];
			$_SESSION["birthdate"] = $user["birthdate"];
			$_SESSION["phone"] = $user["phone"];
			$_SESSION["email"] = $user["email"];
			$_SESSION["address"] = $user["address"];
			header("Location: index.php?page=home");
		}
	}
	else{
		$noUser = true;
	}
	$invalid = true;
}

?>
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
		<div class="panel panel-primary" style="background-color: white;
					width: 500px; margin: 75px auto; border: 1px solid #3336a3; border-radius: 10px; padding: 2% 5%;">
			<div class="panel-heading">
				<h2 class="text-center" style="color: #61107a;">Login</h2>

				<?php if($noUser): ?>
				<p style="color: red;" class="text-center mb-0">The email address you entered doesn't match any account</p>
				<?php elseif($invalid): ?>
				<p style="color: red;" class="text-center mb-0">Wrong password</p>
				<?php endif;?>

			</div>
			<div class="panel-body">
				<form method="post">
					<input type="hidden" class="form-control" id="email" name="page" 
					  		 value="home" style="border: 1px solid #c3c4e8;">
					<div class="form-group mb-2">
					  <label for="email" style="color: #040acf;" >Email</label>
					  <input required="true" type="email" class="form-control" id="email" name="email" 
					  		 value="<?= htmlspecialchars($_POST["email"] ?? "")?>" style="border: 1px solid #c3c4e8;">
					</div>
					<div class="form-group mb-2">
					  <label for="pwd" style="color: #040acf;">Password</label>
					  <input required="true" type="password" class="form-control" id="pwd" name="password" minlength="8" style="border: 1px solid #c3c4e8;">
					</div>
					
					<button class="btn" style="width: 100%; margin: 0.5rem auto; margin-top:1rem; color: #040acf; border: 1px solid #3336a3; border-radius: 5px; background-color: #f0f0f5;">Login</button>
					<hr>
					<button class="btn" style="width: 100%; margin: 0.5rem auto; border: 1px solid #3336a3; border-radius: 5px; background-color: #f0f0f5;">
							<a href="index.php?page=register" class="text-decoration-none d-block w-100" style="color: #040acf;">Create new account</a>
					</button>
					<p class="text-center mt-1">
						<a href="index.php?page=forgetpassword" class="text-decoration-none" style="margin:0 auto;">Forget password?</a>
					</p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>