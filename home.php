<?php

    // session_start();
    if(isset($_SESSION["userId"])){
        $host = "localhost";
        $db = "OnlineCV";
        $username = "root";
        $passwpord = "";
        $connection = mysqli_connect($host, $username, $passwpord, $db);
        $query = 'SELECT fname, lname FROM users WHERE userId ='.$_SESSION["userId"];
        $result = mysqli_query($connection, $query);

        $user = mysqli_fetch_assoc($result);
    }
?>

<div class="content">
    <h1 class="text-center mt-3">Home Page<h1>
    <?php if(isset($user)): ?>
        <h3 class="text-center mt-3"><?php echo 'Hello '.$user["fname"].' '.$user["lname"]; ?></h3>
    <?php endif; ?>
</div>
