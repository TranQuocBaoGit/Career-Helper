<head>
	<link rel="stylesheet" href="style/createCV.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/createCV.js"></script>
    <script src="js/showHintCV.js"></script>
</head>
<body style="background-color:#dddddd;">


        <form class="form-horizontal mt-3" method="post" action="manageCV/newCVprocessing.php">
            <div class="container mt-4 pt-4 col-8 d-flex head">
                <h1 class="text-center my-3 col-6">CV Form</h3>
                <div class="form-outline col-6 px-3 mt-1">
                    <label class="form-label" style="font-weight:bold; margin-left: auto; font-size: 1.2rem;">CV NAME</label>
                    <input type="text" id="cvName" name="cvName" class="form-control" required/>
                </div>
            </div>

        <div class="container cv-form mt-4 pt-4 col-8" style="padding: 0 100px;">

            <div class="structure">
                <h3>Objective</h3>
                <div class="form-outline mb-3">
                    <label class="form-label" for="">Position</label>
                    <input type="text" id="position" name="position" class="form-control" required onkeyup="showHintPosition(this.value)"/>
                </div>
                <div class="form-outline mb-3">
                    <label class="form-label" for="">Career Goal (optional)</label>
                    <textarea rows = "4" id="careerGoal" name = "careerGoal" class="form-control" style="resize:none"></textarea>
                </div>
            </div>


            <div class="structure">
                <h3>Education</h3>
                <div class="form-outline mb-3">
                    <label class="form-label" for="">Degree Name</label>
                    <input type="text" id="degreeName" name="degreeName" class="form-control" required/>
                </div>
                <div class="row mb-3">
                    <div class="col-8">
                        <div class="form-outline">
                            <label class="form-label" for="">School</label>
                            <input type="text" id="degreeSchool" name="degreeSchool" class="form-control" required/>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-outline">
                            <label class="form-label" for="">Time</label>
                            <input type="date" id="degreeTime" name="degreeTime" class="form-control" required/>
                        </div>
                    </div>
                </div>
            </div>


            <div class="structure">
                <h3>Skill</h3>
                <div id="skillArea">
                    <div id="skillArea1" class="row">
                        <div class="form-outline mb-3 col-4">
                            <label class="form-label" for="">Skill 1</label>
                            <input type="text" id="skill1" name="skill1" class="form-control" required/>
                        </div>
                    </div>
                </div>

                <div class="form-outline mb-3">
                    <a class="btn btn-secondary btn-block" onclick="addSkill()">+</a>
                </div>
            </div>


            <div class="structure">
                <h3>Certificate</h3>
                <div id="certificateArea">
                    <div id="certificate1">
                        <h4 class="second-h">Certificate 1</h4>
                        <div class="form-outline mb-3">
                            <label class="form-label" for="">Certificate Name</label>
                            <input type="text" id="certificateName1" name="certificateName1" class="form-control" required/>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="">Obtain Date</label>
                                    <input type="date" id="obtainDate1" name="obtainDate1" class="form-control" required/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="">Expiration Date</label>
                                    <input type="date" id="expireDate1" name="expireDate1" class="form-control" required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-outline mb-3">
                            <label class="form-label" for="">From Organization</label>
                            <input type="text" id="organization1" name="organization1" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <div class="form-outline mb-3">
                    <a class="btn btn-secondary btn-block" onclick="addCertificate()">+</a>
                </div>
            </div>


            <div class="structure">
                <h3>Project/Experience</h3>
                <div id="projectArea">
                    <div id="project1">
                        <h4 class="second-h">Project 1</h4>
                        <div class="form-outline mb-3">
                            <label class="form-label" for="">Project Name</label>
                            <input type="text" id="project1" name="project1" class="form-control" required/>
                        </div>
                        <div class="row mb-3">
                            <div class="col-8">
                                <div class="form-outline">
                                    <label class="form-label" for="">Project Description</label>
                                    <textarea rows = "4" id="projectDescription1" name = "projectDescription1" class="form-control" style="resize:none" required></textarea>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-outline">
                                    <label class="form-label" for="">Project Time</label>
                                    <input type="date" id="projectTime1" name="projectTime1" class="form-control" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-outline mb-3">
                    <a class="btn btn-secondary btn-block" onclick="addProject()">+</a>
                </div>
            </div>


            <div class="structure">
                <h3>Working History</h3>
                <div id="jobArea">
                    <div id="job1">
                        <h4 class="second-h">Job 1</h4>
                        <div class="form-outline mb-3">
                            <label class="form-label" for="">Job Name</label>
                            <input type="text" id="jobName1" name="jobName1" class="form-control" required/>
                        </div>
                        <div class="form-outline mb-3">
                            <label class="form-label" for="">Job Description</label>
                            <textarea rows = "4" id="jobDescription1" name = "jobDescription1" class="form-control" style="resize:none" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-outline mb-3">
                    <a class="btn btn-secondary btn-block" onclick="addJob()">+</a>
                </div>
            </div>


            <div class="structure">
                <h3>Other Information (optional)</h3>
                <div id="personal-infor">
                    <h4 class="second-h">Self Description</h4>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="">Personality</label>
                                <textarea rows = "4" id="personality" name = "personality" class="form-control" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="">Personal Hobby</label>
                                <textarea rows = "4" id="hobby" name = "hobby" class="form-control" style="resize:none"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="relativeArea">
                    <div id="relative1">
                        <h4 class="second-h">Reference 1</h4>
                        <div class="row mb-2">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="">Relative Name</label>
                                    <input type="text" id="relative1" name="relative1" class="form-control" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="">Relationship</label>
                                    <input type="text" id="relationship1" name="relationship1" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="">Phone</label>
                                    <input type="text" id="relativePhone1" name="relativePhone1" class="form-control" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="">Email</label>
                                    <input type="text" id="relativeEmail1" name="relativeEmail1" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-outline mb-3">
                    <a class="btn btn-secondary btn-block" onclick="addRelative()">+</a>
                </div>

            </div>



            <!-- Submit button -->
            <button type="submit" class="mb-4 add-button">Add CV</button>
        </div>

        </form>

    </div>
    <div style="display:block; height: 100px"></div>

</body>
