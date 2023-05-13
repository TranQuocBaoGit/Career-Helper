<?php

$host = "localhost";
$db = "OnlineCV";
$username = "root";
$passwpord = "";

$connection = mysqli_connect($host, $username, $passwpord, $db);
$email = $_POST["email"];
$checkEmail = "SELECT * FROM users WHERE email = '".$email."'";
$queryCheck = mysqli_query($connection, $checkEmail);
if(mysqli_num_rows($queryCheck) != 0){
    header("Location: ../index.php?page=register&error=emailTaken");
}
elseif($_POST["password"] != $_POST["cpassword"]){
    header("Location: ../index.php?page=register&error=wrongPassword");
}

$hashed_pwd = password_hash($_POST["password"], PASSWORD_DEFAULT);

$stmt = $connection->prepare("INSERT INTO users (email, password, fname, lname, phone, birthdate, address) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $_POST["email"], $hashed_pwd, $_POST["fname"], $_POST["lname"], $_POST["phone"], $_POST["birthdate"], $_POST["address"]);
mysqli_stmt_execute($stmt);

header("Location: ../index.php?page=register-success");
?>