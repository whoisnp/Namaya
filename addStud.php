<?php 
	session_start();
		
	// if(!isset($_SESSION))
	// {
	// 	header('location:index.php');
	// 	exit;
	// }
if($_SESSION["user_id"]) {
	

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>ApplicationForm</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>
<style>
#appfrm {
    /* background-image: url(/assets/img/Picture2.png); */
    background-position: center;
    background-size: cover;
    background-blend-mode: screen;
    border-color: black;
    border-style: solid;
    border-width: 3px;
    padding-left: 40px;
    padding-bottom: 20px;
}

nav {
    border-radius: 20px;
}

#pic {
    display: inline-block;
    background-color: #00aeef;
    color: white;
    padding: 0.5rem;
    font-family: sans-serif;
    border-radius: 0.3rem;
    cursor: pointer;
    margin-top: 1rem;
    margin-left: 7.6rem;
}

hr {
    background-color: #00aeef;
}

@media only screen and (max-width:600px) {
    #pic {
        display: inline-block;
        background-color: #00aeef;
        color: white;
        /* padding: 0.5rem; */
        font-family: sans-serif;
        border-radius: 0.3rem;
        cursor: pointer;
        margin-top: 1rem;
        margin-left: 0rem;
    }
}
</style>

<body>
    <div class="container profile profile-view" id="profile">
        <hr />
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container-fluid">
                <div>
                    <img src="assets/img/Picture1.png" width="100" height="100" />
                </div>
                <h3 class="text-center">
                    <strong><span style="text-decoration: underline">World Traditional And Creative Arts
                            Federation&nbsp;</span>&amp;&nbsp;<span style="text-decoration: underline">National Martial
                            Arts &amp; Yoga Association</span></strong>
                </h3>
                <div>
                    <img src="assets/img/Picture2.png" width="100" height="100" />
                </div>
            </div>
        </nav>
        <hr />
        <div>

            <h4 class="text-center">APPLICATION FORM</h4>
        </div>
        <form id="appfrm">
            <div class="form-row profile-row">
                <div class="col-md-8">
                    <h1>Profile</h1>
                    <hr />
                    <div class="form-row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Date of admission :</label><input class="form-control" id="doa" type="date"
                                    name="doa" style="width: 30%;" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label>Student ID :</label><input class="form-control" id="Sid" type="number"
                                    name="id" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label>Student Profession :</label><input class="form-control" id="StudRole" type="text"
                                    name="profession" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label>Student Name :</label><input class="form-control" id="name" type="text"
                                    name="Name" />
                            </div>
                            <div class="form-group">
                                <label>Date of Birth :</label><input class="form-control" id="dob" type="date" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label>Father/Gaurdian Name :</label><input class="form-control" type="text"
                                    name="FatherName" id="FatherName" />
                            </div>
                            <div class="form-group"><label>Gender :</label></div>
                            <div class="form-check d-inline">
                                <input class="form-check-input" type="radio" id="formCheck-2" name="gender"
                                    value="Male" /><label class="form-check-label" for="formCheck-2">Male</label>
                            </div>
                            <div class="form-check d-inline">
                                <input class="form-check-input" type="radio" id="formCheck-1" name="gender"
                                    value="female" /><label class="form-check-label" for="formCheck-1">Female</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Blood Group :</label><input class="form-control" type="text" name="BldGrp" id="BldGrp"
                            autocomplete="off" />
                    </div>
                    <div class="form-group">
                        <label>Address :</label><textarea id="address" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Mobile Number :</label><input class="form-control" id="Mno" type="tel" />
                    </div>
                    <div class="form-group">
                        <label>Email </label><input class="form-control" type="email" id="email" autocomplete="off"
                            required="" name="email" />
                    </div>
                    <hr />
                    <div class="form-row">
                        <div class="col-md-12 content-right">
                            <button id="sumbit" class="btn btn-primary form-btn" type="submit">
                                SAVE</button>
                            <!-- <button id="upload" class="btn btn-danger form-btn" >
                  UPLOAD
                </button> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 relative">
                    <div class="avatar">
                        <div class="avatar-bg center"></div>
                    </div>
                    <input id="photo" class="form-control-file form-control" type="file" name="avatar-file"
                        accept="image/png, image/jpeg" />
                    <!-- <lable for="photo" id="pic">Choose File</lable> -->
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-storage.js"></script>
</body>
<script>
// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
var firebaseConfig = {
    apiKey: "AIzaSyCmJCdJ5y8Px2gn7O6PTq_MxVx30Q4zZDM",
    authDomain: "projecttkr-4aa57.firebaseapp.com",
    projectId: "projecttkr-4aa57",
    storageBucket: "projecttkr-4aa57.appspot.com",
    messagingSenderId: "353303900963",
    appId: "1:353303900963:web:6ee6c1e0a0e774c2851296",
    measurementId: "G-12RFY7K0EN",
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();

var storage = firebase.storage();
var storageRef = storage.ref();
var picurl;

var messagesRef = firebase.database().ref("Students");

var imagesRef = storageRef.child('images');
var spaceRef = storageRef.child('images/space.jpg');

var ImgUrl;
var files = [];
var reader = new FileReader();

appfrm = document.querySelector("#appfrm");
appfrm.addEventListener("submit", (e) => {
    // Img()
    e.preventDefault();
    var doa = document.getElementById("doa").value;
    var Sid = document.getElementById("Sid").value;
    var StudRole = document.getElementById("StudRole").value;
    var name = document.getElementById("name").value;
    var dob = document.getElementById("dob").value;
    var FatherName = document.getElementById("FatherName").value;
    var gender = radioGender();
    var address = document.getElementById("address").value;
    var BldGrp = document.getElementById("BldGrp").value;
    var Mno = document.getElementById("Mno").value;
    var email = document.getElementById("email").value;
    // saveMessage(name, dob, FatherName, gender ,address, BldGrp, Mno, email);
    // =====================
    // ImgName = document.getElementById("name").value;
    var uploadTask = firebase
        .storage()
        .ref("Images/" + name + ".png")
        .put(files[0]);
    uploadTask.snapshot.ref.getDownloadURL().then(function(url) {
        var picurl = url
        console.log(name, dob, FatherName, gender, address, BldGrp, Mno, email, picurl)
        saveMessage(name,
            dob,
            FatherName,
            gender,
            address,
            BldGrp,
            Mno,
            email,
            picurl,
            doa,
            Sid,
            StudRole)
    });


    // =====================
    // console.log(picurl)
    function radioGender() {
        var Gender = document.querySelector("input[name=gender]:checked").value;
        return Gender;
    }

    function saveMessage(
        name,
        dob,
        FatherName,
        gender,
        address,
        BldGrp,
        Mno,
        email,
        picurl,
        doa,
        Sid,
        StudRole
    ) {
        var newMessageRef = messagesRef.push();
        var Achivement = "None"
        newMessageRef.set({
            name: name,
            dob: dob,
            FatherName: FatherName,
            gender: gender,
            address: address,
            BldGrp: BldGrp,
            Mno: Mno,
            email: email,
            picurl: picurl,
            doa: doa,
            Sid: Sid,
            StudRole: StudRole,
            Achivement: Achivement,
        });
        window.location = "dashboard.php";
    }
});
//   ================================ Image Processing================================
/**---------------------------------   selction ---------------------------------- **/
document.getElementById("photo").onclick = (e) => {
    var input = document.getElementById("photo");
    input.onchange = (e) => {
        files = e.target.files;
        reader = new FileReader();
        reader.onload = () => {
            console.log("done");
        };
        reader.readAsDataURL(files[0]);
    };
    // input.click();
};

/**---------------------------------  uploading ---------------------------------- **/


// document.getElementById("sumbit").onclick = () => {
Img = () => {
    // ImgName = document.getElementById("name").value;
    // // console.log(ImgName)
    // var uploadTask = firebase
    //   .storage()
    //   .ref("Images/" + ImgName + ".png")
    //   .put(files[0]);
    //   uploadTask.snapshot.ref.getDownloadURL().then
    //   (function (url) {
    //       // ImgUrl = url;
    //       // console.log(url)
    //       // console.log(url, name, dob, FatherName, gender ,address, BldGrp, Mno, email);
    //       var picurl =  url
    //       // return url

    //     });

    // uploadTask.on(
    //   "state_changed",
    //   function (snapshot) {
    //     var progress =
    //       (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
    //       console.log(progress)
    //   },
    //   (error) => {
    //     alert(error);
    //   },

    //   () => {
    //     uploadTask.snapshot.ref.getDownloadURL().then
    //     (function (url) {
    //       // ImgUrl = url;
    //       console.log(address)
    //       console.log(url, name, dob, FatherName, gender ,address, BldGrp, Mno, email);
    //       return url

    //     });
    //     // firebase
    //     //   .database()
    //     //   .ref("Pictures/" + ImgName)
    //     //   .set({
    //     //     Name: ImgName,
    //     //     Link: ImgUrl,
    //     //   });
    //     // alert("Success");
    //     // console.log(ImgUrl);
    //   }) ;
};
</script>
</body>

</html>



<?php
}else 
// echo "<h1>Please login first .</h1>";
header('location:index.php');
	exit;
?>