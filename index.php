<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Programming</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f6cc3a16c6.js" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</head>

<body>
    <?php
    include "header.php";
    
    $page = "home";
    $getpage = "home";
    $getpage = $_GET["page"];
    // $mapActive = array('home','products');
    // if(in_array($getpage,$mapActive)) include "googlemap-direct.php";
    if ($getpage == 'home') include'home.php';
    elseif($getpage == 'about') include'about.php';
    elseif($getpage == 'login') include 'authentication/login.php';
    elseif($getpage == 'register') include 'authentication/register.php';
    elseif($getpage == 'register-success') include 'authentication/register-success.php';
    elseif($getpage == 'forgetpassword') include 'authentication/forgetpassword.php';
    elseif($getpage == 'individualCV') include 'manageCV/individualCV.php';
    elseif($getpage == 'searchCandidate') include 'search/searchCandidate.php';
    elseif(!isset($_SESSION['userId'])){
        if(($getpage == 'createCV') || ($getpage == 'logout') || ($getpage == 'manageCV') || ($getpage == 'deleteCV') || ($getpage =='userSetting') || ($getpage == 'individualCV')){
            include 'error/errorLogin.php';
            include 'authentication/login.php';
        }
    }
    elseif($getpage == 'manageCV') include 'manageCV/manageCV.php';
    elseif($getpage == 'deleteCV') include 'manageCV/deleteCV.php';
    elseif($getpage == 'createCV') include 'manageCV/createCV.php';
    elseif($getpage == 'logout') include 'authentication/logout.php';
    elseif($getpage == "userSetting") include 'user/userSetting.php';
    
    if($getpage != 'login' && $getpage != 'register' && $getpage != 'userSetting'){
        include "footer.php";
    }
    ?>
    </body>
</html>