<?php
$host = "localhost";
$db = "OnlineCV";
$username = "root";
$passwpord = "";

$connection = mysqli_connect($host, $username, $passwpord, $db);

session_start();

// insert CV
$userId = $_SESSION['userId'];
$cvName = $_POST['cvName'];
$position = $_POST['position'];
$careerGoal = null;
if(isset($_POST['careerGoal'])){
    $careerGoal = $_POST['careerGoal'];
}
$degreeName = $_POST['degreeName'];
$degreeSchool = $_POST['degreeSchool'];
$degreeTime = $_POST['degreeTime'];

$personality = null;
if(isset($_POST['personality'])){
    $personality = $_POST['personality'];
}
$hobby = null;
if(isset($_POST['hobby'])){
    $hobby = $_POST['hobby'];
}

$insertCV = $connection->prepare("INSERT INTO cv (userId, cvName, position, careerGoal, degreeName, degreeSchool, degreeTime, personality, hobby) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$insertCV->bind_param("issssssss", $userId, $cvName, $position, $careerGoal, $degreeName, $degreeSchool, $degreeTime, $personality, $hobby);
mysqli_stmt_execute($insertCV);

$cvId = mysqli_insert_id($connection);

// insert skill
$skillNo = 1;
while(isset($_POST['skill'.strval($skillNo)])){
    $skillName = $_POST['skill'.strval($skillNo)];
    $insertSkill = $connection->prepare("INSERT INTO skill (cvId, skillName) VALUES (?, ?)");
    $insertSkill->bind_param("is", $cvId, $skillName);
    mysqli_stmt_execute($insertSkill);
    $skillNo = $skillNo + 1;
}

//insert certificate
$certificateNo = 1;
while(isset($_POST['certificateName'.strval($certificateNo)])){
    $certificateName = $_POST['certificateName'.strval($certificateNo)];
    $obtainDate = $_POST['obtainDate'.strval($certificateNo)];
    $expireDate = $_POST['expireDate'.strval($certificateNo)];
    $organization = $_POST['organization'.strval($certificateNo)];
    $insertCertificate = $connection->prepare("INSERT INTO certificate (cvId, obtainDate, expireDate, organization, certificateName) VALUES (?, ?, ?, ?, ?)");
    $insertCertificate->bind_param("issss", $cvId, $obtainDate, $expireDate, $organization, $certificateName);
    mysqli_stmt_execute($insertCertificate);
    $certificateNo = $certificateNo + 1;
}

// insert project
$projectNo = 1;
while(isset($_POST['project'.strval($projectNo)])){
    $projectName = $_POST['project'.strval($projectNo)];
    $projectDescription = $_POST['projectDescription'.strval($projectNo)];
    $projectTime = $_POST['projectTime'.strval($projectNo)];
    $insertProject = $connection->prepare("INSERT INTO project (projectName, projectDescription, projectTime, cvId) VALUES (?, ?, ?, ?)");
    $insertProject->bind_param("sssi", $projectName, $projectDescription, $projectTime, $cvId);
    mysqli_stmt_execute($insertProject);
    $projectNo = $projectNo + 1;
}

// insert job
$jobNo = 1;
while(isset($_POST['jobName'.strval($jobNo)])){
    $jobName = $_POST['jobName'.strval($jobNo)];
    $jobDescription = $_POST['jobDescription'.strval($jobNo)];
    $insertJob = $connection->prepare("INSERT INTO job (jobName, jobDescription, cvId) VALUES (?, ?, ?)");
    $insertJob->bind_param("ssi", $jobName, $jobDescription, $cvId);
    mysqli_stmt_execute($insertJob);
    $jobNo = $jobNo + 1;
}

// insert relative
$relativeNo = 1;
while(isset($_POST['relative'.strval($relativeNo)])){
    $relative = $_POST['relative'.strval($relativeNo)];
    $relationship = null;
    if(isset($_POST['relationship'])){
        $relationship = $_POST['relationship'];
    }
    $relativePhone = null;
    if(isset($_POST['relativePhone'])){
        $relativePhone = $_POST['relativePhone'];
    }
    $relativeEmail = null;
    if(isset($_POST['relativeEmail'])){
        $relativeEmail = $_POST['relativeEmail'];
    }
    $insertRelative = $connection->prepare("INSERT INTO reference (cvId, relative, relationship, relativePhone, relativeEmail) VALUES (?, ?, ?, ?, ?)");
    $insertRelative->bind_param("issss", $cvId, $relative, $relationship, $relativePhone, $relativeEmail);
    mysqli_stmt_execute($insertRelative);
    $relativeNo = $relativeNo + 1;
}

header("Location: ../index.php?page=home");
?>