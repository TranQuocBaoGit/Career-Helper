<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Programming</title>
</head>

<body>

    <?php
    echo  '<h3 class="text-center mt-3" style="color: green;">Register Success!<h3>';
    sleep(3);
    header("Location: ../index.php?page=home");
    ?>
</body>