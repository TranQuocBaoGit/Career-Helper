<head>
    <link rel="stylesheet" href="style/individualCV.css">
</head>

<?php
$host = "localhost";
$db = "OnlineCV";
$username = "root";
$passwpord = "";

$connection = mysqli_connect($host, $username, $passwpord, $db);
if(isset($_REQUEST['cvId'])){

    $cvId = $_REQUEST['cvId'];
    $selectCV = 'SELECT * FROM cv WHERE cvId='.$cvId;
    $thiscv = mysqli_query($connection, $selectCV);
    $cv = mysqli_fetch_assoc($thiscv);

    $userId = "";
    if(isset($_SESSION['userId'])){
        $userId = $_SESSION['userId'];
    }
    if(isset($_REQUEST['from'])){
        if($_REQUEST['from'] == 'searchCandidate'){
            $selectUserId = 'SELECT userId FROM cv WHERE cvId='.$cvId;
            $userIdFromCVquery = mysqli_query($connection, $selectUserId);
            $userIdrow = mysqli_fetch_assoc($userIdFromCVquery);
            $userId = $userIdrow['userId'];
        }
    }

    $selectUser = 'SELECT email, fname, lname, phone, birthdate, address FROM users WHERE userId ='.$userId;
    $thisuser = mysqli_query($connection, $selectUser);
    $user = mysqli_fetch_assoc($thisuser);



    $selectSkill = 'SELECT * FROM skill WHERE cvId='.$cvId;
    $skills = mysqli_query($connection, $selectSkill);

    $selectCertificate = 'SELECT * FROM certificate WHERE cvId='.$cvId;
    $certificates = mysqli_query($connection, $selectCertificate);

    $selectJob = 'SELECT * FROM job WHERE cvId='.$cvId;
    $jobs = mysqli_query($connection, $selectJob);

    $selectProject = 'SELECT * FROM project WHERE cvId='.$cvId;
    $projects = mysqli_query($connection, $selectProject);

    $selectRelative = 'SELECT * FROM reference WHERE cvId='.$cvId;
    $relatives = mysqli_query($connection, $selectRelative);

    function fetchSkill($skills){
        while($skill = mysqli_fetch_assoc($skills)){
            $skillName = $skill['skillName'];
            echo '<p class="col-4">'.$skillName.'</p>';
        }
    }

    function fetchCertificate($certificates){
        $no = 1;
        while($certificate = mysqli_fetch_assoc($certificates)){
            $certificateName = $certificate['certificateName'];
            $obtainDate = $certificate['obtainDate'];
            $expireDate = $certificate['expireDate'];
            $organization = $certificate['organization'];
            echo '
            <div class="eachCertificate col-6">
                <p class="title" style="font-size:1.2rem; margin-right:0;">Certificate '.$no.'</p>
                <div class="row mb-2">
                    <div class="col-8">
                        <p class="title">Name </p>
                        <p>'.$certificateName.'</p>
                        <p class="title">From Organization </p>
                        <p class="">'.$organization.'</p>
                    </div>
                    <div class="col-4">
                        <p class="title">Obtain Date</p>
                        <p class="">'.$obtainDate.'</p>
                        <p class="title">Expire Date</p>
                        <p class="">'.$expireDate.'</p>
                    </div>
                </div>
            </div>
            ';
            $no += 1;
        }
    }

    function fetchProject($projects){
        $no = 1;
        while($project = mysqli_fetch_assoc($projects)){
            $projectName = $project['projectName'];
            $projectDescription = $project['projectDescription'];
            $projectTime = $project['projectTime'];

            echo '
            <div class="eachProject col-6">
                <p class="title" style="font-size:1.2rem; margin-right:0;">Project '.$no.'</p>
                <div class="row mb-2">
                    <div class="col-8">
                        <p class="title">Name </p>
                        <p>'.$projectName.'</p>
                        <p class="title">Description </p>
                        <p class="careerGoal">'.$projectDescription.'</p>
                    </div>
                    <div class="col-4">
                        <p class="title">Project Time</p>
                        <p class="">'.$projectTime.'</p>
                    </div>
                </div>
            </div>
            ';
            $no += 1;
            if($no % 2 == 0){
                echo '<br>';
            }
        }
    }

    function fetchJob($jobs){
        $no = 1;
        while($job = mysqli_fetch_assoc($jobs)){
            $jobName = $job['jobName'];
            $jobDescription = $job['jobDescription'];
            echo '
            <div class="eachJob col-6">
                <div class="mb-2">
                    <p class="title" style="font-size:1.2rem; margin-right:0;">Job '.$no.'</p>
                    <div>
                        <p class="title">Name </p>
                        <p class="w-75">'.$jobName.'</p>
                    </div>
                    <div>
                        <p class="title">Description </p>
                        <p class="careerGoal">'.$jobDescription.'</p>
                    </div>
                </div>
            </div>
            ';
            $no += 1;
        }
    }

    function fetchRelative($relatives){
        $no = 1;
        while($relative = mysqli_fetch_assoc($relatives)){
            $relativeName = $relative['relative'];
            $relationship = $relative['relationship'];
            $relativePhone = $relative['relativePhone'];
            $relativeEmail = $relative['relativeEmail'];
            echo '
            <div class="eachRelative col-6">
                <p class="title" style="font-size:1.2rem; margin-right:0;">Relative '.$no.'</p>
                <div class="d-flex">
                    <div class="col-6">
                        <p class="title">Name </p>
                        <p class="w-75">.'.$relativeName.'</p>
                        <p class="title">Relationship </p>
                        <p class="careerGoal">.'.$relationship.'</p>
                    </div>
                    <div class="col-6">
                        <p class="title">Phone </p>
                        <p class="careerGoal">.'.$relativePhone.'</p>
                        <p class="title">Email </p>
                        <p class="careerGoal">.'.$relativeEmail.'</p>
                    </div>

                </div>
            </div>
            ';
            $no += 1;
        }
    }
}
?>


<body style="background-color:#dddddd;">
    <div class="container cv-form mt-4 pt-4 col-8" style="padding: 0 100px;">

        <?php
        echo'
        <h2 class="cvName mb-3">'.$cv['cvName'].'</h2>
        <div class="userInfo d-flex">
            <div class="img"></div>
            <div class="d-flex">
                <div class="title">
                    <p>Name: </p>
                    <p>Email: </p>
                    <p>Phone: </p>
                    <p>Birthdate: </p>
                    <p>Address: </p>
                </div>
                <div>
                    <p>'.$user['lname'].' '.$user['fname'].'</p>
                    <p>'.$user['email'].'</p>
                    <p>'.$user['phone'].'</p>
                    <p>'.$user['birthdate'].'</p>
                    <p>'.$user['address'].'</p>
                </div>
            </div>
        </div>
        ';?>

        <br>
        <div class="cvInfo">
            <div class="d-flex mb-3">
                    <div class="objective col-8">
                        <h4>Objective</h4>
                        <?php
                        echo '
                        <p class="title">Desire Position </p>
                        <p>'.$cv['position'].'</p>
                        <p class="title">Career Goal </p>
                        <p class="careerGoal">'.$cv['careerGoal'].'</p>
                        ';
                        ?>
                    </div>
                    <div class="skill col-4">
                        <h4>Skill</h4>
                        <div class="d-flex skillList">
                            <?php
                            fetchSkill($skills);
                            ?>
                        </div>
                    </div>
            </div>
            <br>
            <div class="d-flex mb-3">
                <?php 
                echo '
                <div class="degree col-8">
                    <h4>Education</h4>
                    <p class="title">Degree </p>
                    <p>'.$cv['degreeName'].'</p>
                    <p class="title">From School </p>
                    <p class="careerGoal">'.$cv['degreeSchool'].'</p>
                    <p class="title">Obtain Time</p>
                    <p class="">'.$cv['degreeTime'].'</p>
                </div>
                <div class="personal col-4">
                    <h4>Personal</h4>
                    <p class="title">Personality </p>
                    <p class="careerGoal">.'.$cv['personality'].'</p>
                    <p class="title">Hobby </p>
                    <p class="careerGoal">.'.$cv['hobby'].'</p>
                </div>
                ';
                ?>
            </div>
            <br>
            <div class="d-flex mb-3">
                <div class="certificate w-100">
                    <h4>Certificate</h4>
                    <div class="d-flex skillList">
                        <?php
                        fetchCertificate($certificates);
                        ?>
                    </div>
                </div>
            </div>
            <br>
            <div class="d-flex mb-3">
                <div class="project w-100">
                    <h4>Project</h4>
                    <div class="d-flex skillList">
                        <?php
                        fetchProject($projects);
                        ?>
                    </div>
                </div>
            </div>
            <br>
            <div class="d-flex mb-3">
                <div class="job w-100">
                    <h4>Working History</h4>
                    <div class="d-flex skillList">
                        <?php
                        fetchJob($jobs);
                        ?>
                    </div>

                </div>
            </div>
            <br>
            <div class="d-flex mb-3">
                <div class="relative w-100">
                    <h4>Reference</h4>
                    <div class="d-flex skillList">
                        <?php
                        fetchRelative($relatives);
                        ?>
                    </div>

                </div>
            </div>
            <br>
        </div>
    </div>
</body>