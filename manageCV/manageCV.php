<html>
<head>
    <link rel="stylesheet" href="style/manageCV.css">
</head>
<body>
    <div class="container w-50 mt-3 p-4 manageCV">
        <div class="option mb-3">
            <h4>Manage Your CV</h4>
            <a href="index.php?page=createCV">Create new CV</a>
        </div>

    <div class="yourCV">
        <?php
        $host = "localhost";
        $db = "OnlineCV";
        $username = "root";
        $passwpord = "";
        
        $connection = mysqli_connect($host, $username, $passwpord, $db);

        $userId = $_SESSION['userId'];
        $selectCV = "SELECT cvId, cvName FROM cv WHERE userId =".$userId;
        $myCV = mysqli_query($connection, $selectCV);
        // if(empty(mysqli_fetch_assoc($myCV))) echo "<h2>None</h2>";
        while($row = mysqli_fetch_assoc($myCV)){
            $cvId = $row['cvId'];
            $cvName = $row['cvName'];
            echo'
            <div class="eachCV p-2">
                <div class="img"></div>
                <p>'.$cvName.'</p>
                <a href="index.php?page=individualCV&from=manageCV&cvId='.$cvId.'" class="detail">Detail</a>
                <form action="index.php?page=deleteCV" method="post">
                    <input type="hidden" class="form-control" id="cvId" name="cvId" 
                    value="'.$cvId.'">
                    <button type="submit" class="delete">X</button>
                </form>
            </div>                
            ';
        }
        ?>
        </div>
    </div>

</body>
</html>
