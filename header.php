<?php
    session_start();   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/header.css">
</head>

<body>
    <header style="max-height: 10%; " id="header" class="sticky-top header">
        <div class="container-fluid bg-white row">
                <div class="col-md-4 p-3 text-dark">
                    <h2 class="w-50">
                        <a class="nav-link mx-2" href="index.php?page=home">Career Helper</a>
                    </h2>
                </div>
    
                <nav class="col-md-6 navbar navbar-expand-sm bg-white navbar-dark rounded-bottom" style="height: 10%;">
                    <div class="container-fluid justify-content-center">
                        <ul class="navbar-nav fs-4 pt-2 col-12">
                            <li class="col-4 button"><a class="mx-2" href="index.php?page=manageCV">Manage CV</a></li>
                            <li class="col-4 button"><a class="mx-2" href="index.php?page=searchCandidate">Search Candidate</a></li>
                        </ul>
                    </div>
                </nav>

                    <?php if(isset($_SESSION["userId"])): ?>

                    <div class="col-md-2 container-fluid justify-content-end navbar navbar-expand-sm bg-white navbar-dark">
                        <ul class="navbar-nav fs-4">
                            <li class="button"><a class="mx-2" href="index.php?page=userSetting">Setting</a></li>
                            <li class="button"><a class="mx-2" href="index.php?page=logout">Logout</a></li>
                        </ul>
                    </div>

                    <?php else: ?>

                    <div class="col-md-2 container-fluid justify-content-end navbar navbar-expand-sm bg-white navbar-dark">
                        <ul class="navbar-nav fs-4">
                            <li class="button"><a class="mx-2" href="index.php?page=login">Login</a></li>
                            <li class="button"><a class="mx-2" href="index.php?page=register">Register</a></li>
                        </ul>
                    </div>

                    <?php endif; ?>
        </div>

    </header>
    <!-- <form class="d-flex w-100 px-2">
        <input type="search" placeholder= "Search..." class="form-control" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
    </form> -->

    
    


</body>