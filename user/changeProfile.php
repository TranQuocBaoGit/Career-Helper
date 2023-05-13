<?php
        $host = "localhost";
        $db = "OnlineCV";
        $username = "root";
        $passwpord = "";
        
        $connection = mysqli_connect($host, $username, $passwpord, $db);
    session_start();
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];
    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['phone'] = $phone;
    $_SESSION['address'] = $address;
    $_SESSION['birthdate'] = $birthdate;
    $sql = 'UPDATE users 
            SET fname =\''. $fname. '\', lname =\''.$lname.'\', phone = \''.$phone.'\',birthdate =\''.$birthdate.'\', address = \''.$address.'\' 
            WHERE userId = '. $_SESSION["userId"];
    mysqli_query($connection, $sql);
    header("Location: ../index.php?page=userSetting&set=success");
?>