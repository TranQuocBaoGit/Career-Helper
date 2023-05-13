<?php
$host = "localhost";
$db = "OnlineCV";
$username = "root";
$passwpord = "";

$connection = mysqli_connect($host, $username, $passwpord, $db);

if(isset($_POST['cvId'])){
    $cvId = $_POST['cvId'];
    $query = 'DELETE FROM cv WHERE cvId='.$cvId;
    mysqli_query($connection, $query);
}
header("Location: index.php?page=manageCV");
?>