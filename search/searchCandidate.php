<html>
<head>
    <link rel="stylesheet" href="style/searchCandidate.css">
</head>
<body>
    <div class="container-fluid w-50 mt-3 p-4">
        <div class="option mb-3">
            <h4>Search for employee</h4>
        </div>

    <div class="yourCV">
        <?php
        $host = "localhost";
        $db = "OnlineCV";
        $username = "root";
        $passwpord = "";
        
        $connection = mysqli_connect($host, $username, $passwpord, $db);

        $selectCV = "SELECT cvId, cvName, position FROM cv";
        $myCV = mysqli_query($connection, $selectCV);


        while($row = mysqli_fetch_assoc($myCV)){
            $cvId = $row['cvId'];
            $cvName = $row['cvName'];
            $position = $row['position'];

            $selectUserId = 'SELECT userId FROM cv WHERE cvId='.$cvId;
            $userIdFromCVquery = mysqli_query($connection, $selectUserId);
            $userIdrow = mysqli_fetch_assoc($userIdFromCVquery);
            $selectUserName = 'SELECT fname, lname FROM users WHERE userId='.$userIdrow['userId'];
            $userFromQuery = mysqli_query($connection, $selectUserName);
            $userRow = mysqli_fetch_assoc($userFromQuery);
            $userName = ''.$userRow['fname'].' '.$userRow['lname'];


            echo'
            <div class="eachCV p-2">
                <div class="img"></div>
                <p class="cvName">'.$cvName.'</p>
                <div class="d-flex">
                    <p style="margin-right:0.5rem; margin-left:1rem;">Name:</p>
                    <p style="font-weight:normal;">'.$userName.'</p>
                </div>
                <div>
                    <p>Position Seek</p>
                    <p style="font-weight:normal;">'.$position.'</p>
                </div>
                <a href="index.php?page=individualCV&from=searchCandidate&cvId='.$cvId.'">Detail</a>
            </div>
            ';
        }
        ?>
        </div>
    </div>

</body>
</html>
