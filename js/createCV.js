var certificate = 2
var project = 2
var job = 2
var relative = 2
var skill = 2
var skillArea = 1

function addCertificate(){
    var certificateSTR = certificate.toString();
    document.getElementById('certificateArea').innerHTML += `
    <div id="certificate`+certificateSTR+`">
        <h4 class="second-h">Certificate `+certificateSTR+`</h4>
        <div class="form-outline mb-3">
            <label class="form-label" for="">Certificate Name</label>
            <input type="text" id="certificateName`+certificateSTR+`" name="certificateName`+certificateSTR+`" class="form-control" required/>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="">Obtain Date</label>
                    <input type="date" id="obtainDate`+certificateSTR+`" name="obtainDate`+certificateSTR+`" class="form-control" required/>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="">Expiration Date</label>
                    <input type="date" id="expireDate`+certificateSTR+`" name="expireDate`+certificateSTR+`" class="form-control" required/>
                </div>
            </div>
        </div>
        <div class="form-outline mb-3">
            <label class="form-label" for="">From Organization</label>
            <input type="text" id="organization`+certificateSTR+`" name="organization`+certificateSTR+`" class="form-control" required/>
        </div>
    </div>`
    certificate += 1
}


function addProject(){
    var projectSTR = project.toString();
    document.getElementById('projectArea').innerHTML += `
    <div id="project`+projectSTR+`">
        <h4 class="second-h">Project `+projectSTR+`</h4>
        <div class="form-outline mb-3">
            <label class="form-label" for="">Project Name</label>
            <input type="text" id="project`+projectSTR+`" name="project`+projectSTR+`" class="form-control" required/>
        </div>
        <div class="row mb-3">
            <div class="col-8">
                <div class="form-outline">
                    <label class="form-label" for="">Project Description</label>
                    <textarea rows = "4" id="projectDescription`+projectSTR+`" name = "projectDescription`+projectSTR+`" class="form-control" style="resize:none" required></textarea>
                </div>
            </div>
            <div class="col-4">
                <div class="form-outline">
                    <label class="form-label" for="">Project Time</label>
                    <input type="date" id="projectTime`+projectSTR+`" name="projectTime`+projectSTR+`" class="form-control" required/>
                </div>
            </div>
        </div>
    </div>`
    project += 1
}


function addJob(){
    var jobSTR = job.toString();
    document.getElementById('jobArea').innerHTML += `
    <div id="job`+jobSTR+`">
        <h4 class="second-h">Job `+jobSTR+`</h4>
        <div class="form-outline mb-3">
            <label class="form-label" for="">Job Name</label>
            <input type="text" id="jobName`+jobSTR+`" name="jobName`+jobSTR+`" class="form-control" required/>
        </div>
        <div class="form-outline mb-3">
            <label class="form-label" for="">Job Description</label>
            <textarea rows = "4" id="jobDescription`+jobSTR+`" name = "jobDescription`+jobSTR+`" class="form-control" style="resize:none" required></textarea>
        </div>
    </div>`
    job += 1
}


function addRelative(){
    var relativeSTR = relative.toString();
    document.getElementById('relativeArea').innerHTML += `
    <div id="relative`+relativeSTR+`">
        <h4 class="second-h">Reference `+relativeSTR+`</h4>
        <div class="row mb-2">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="">Relative Name</label>
                    <input type="text" id="relative`+relativeSTR+`" name="relative`+relativeSTR+`" class="form-control" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="">Relationship</label>
                    <input type="text" id="relationship`+relativeSTR+`" name="relationship`+relativeSTR+`" class="form-control" />
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="">Phone</label>
                    <input type="text" id="relativePhone`+relativeSTR+`" name="relativePhone`+relativeSTR+`" class="form-control" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="">Email</label>
                    <input type="text" id="relativeEmail`+relativeSTR+`" name="relativeEmail`+relativeSTR+`" class="form-control" />
                </div>
            </div>
        </div>
    </div>`
    relative += 1
}

function addSkill(){
    var skillAreaSTR = skillArea.toString();
    var skillSTR = skill.toString();
    document.getElementById('skillArea'+skillAreaSTR).innerHTML += `
    <div class="form-outline mb-3 col-4">
        <label class="form-label" for="">Skill `+skillSTR+`</label>
        <input type="text" id="skill`+skillSTR+`" name="skill`+skillSTR+`" class="form-control" required/>
    </div>`
    skill += 1
    if((skill - 1) % 3 == 0){
        skillArea += 1
        skillAreaSTR = skillArea.toString();
        document.getElementById('skillArea').innerHTML += '<div id="skillArea'+skillAreaSTR+'" class="row"></div>'
    }
}