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
    color: #00aeef;
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

#doa {
    width: 30%;
}

#mob {
    display: none;
}

#comp {
    display: block;
}

@media only screen and (max-width:990px) {
    .col-lg-2 {
        width: 20%;
        padding: 0;
    }

    .col-lg-8 {
        width: 60%;
        padding: 0;
    }

    h3 {
        font-size: 2.5vw;
        margin-top: 15px;
    }

    h1 {
        font-size: 6vw;
    }
}

@media only screen and (max-width:767px) {
    #appfrm {
        border: none;
        margin: 0;
        padding: 0;
    }

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

    .col-lg-2 {
        width: 20%;
        padding: 0;
    }

    .col-lg-8 {
        width: 60%;
        padding: 0;
    }

    h3 {
        font-size: 3.5vw;
        margin-top: 10px;
    }

    h1 {
        font-size: 9vw;
    }

    #doa {
        width: 100%;
    }

    #mob {
        display: block;
    }

    #comp {
        display: none;
    }

    #backcont,
    #editcont {
        width: 50%;
    }
}

.wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.main-circle {
    width: 150px;
    height: 150px;
    border: 4px solid #00aeef;
    border-top: 4px solid transparent;
    border-right: 4px solid transparent;
    position: relative;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    animation: rotate 2s infinite;
}

.main-circle:before {
    width: 100%;
    height: 100%;
    position: absolute;
    content: '';
    border: 4px solid transparent;
    border-right: 4px solid #00aeef;
    transform: rotate(40deg);
    border-radius: 50%;
}

.green-circle {
    animation: rotate 2s infinite .4s;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 120px;
    height: 120px;
    border: 4px solid #00aeef;
    border-top: 4px solid transparent;
    border-right: 4px solid transparent;
    transform: rotate(-20deg);
    border-radius: 50%;
    position: relative;
}

.green-circle:before {
    content: '';
    width: 100%;
    height: 100%;
    border-radius: 50%;
    position: absolute;
    border: 4px solid transparent;
    border-right: 4px solid #00aeef;
    transform: rotate(60deg);
}

.brown-circle {
    animation: rotate 2s infinite .6s;
    width: 80px;
    height: 80px;
    border: 4px solid #00aeef;
    border-top: 4px solid transparent;
    border-right: 4px solid transparent;
    transform: rotate(-20deg);
    border-radius: 50%;
}

@keyframes rotate {
    from {}

    to {
        transform: rotate(360deg);
    }
}
</style>


<body onload="myfun()">
    <div class="wrapper" id="loader0">
        <div class="main-circle">
            <div class="green-circle">
                <div class="brown-circle">

                </div>
            </div>
        </div>
    </div>
    <div class="container profile profile-view" id="profile">
        <hr />
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <img src="assets/img/Picture1.png" width="100%" height="100%" />
                </div>
                <div class="col-lg-8">
                    <h3 class="text-center">
                        <strong><span style="text-decoration: underline">World Traditional And Creative Arts
                                Federation&nbsp;</span>&amp;&nbsp;<span style="text-decoration: underline">National
                                Martial Arts &amp; Yoga Association</span></strong>
                    </h3>

                </div>
                <div class="col-lg-2">
                    <img src="assets/img/Picture2.png" width="100%" height="100%" />
                </div>

            </div>
        </div>
        <hr />
        <!-- <div>
        <img src="/assets/img/Picture3.png" width="100" height="100" />
        <h4 class="text-center">APPLICATION FORM</h4>
      </div> -->
        <form id="appfrm">
            <div class="form-row profile-row">
                <div class="col-md-4" id="mob">
                    <img id="myimg0" src="" alt="Student Image" height="200" width="200">
                    <input id="photo" class="form-control-file form-control" type="file" name="avatar-file"
                        accept="image/png, image/jpeg" value="" />
                    <!-- <lable for="photo" id="pic">Choose File</lable> -->
                </div>
                <div class="col-md-8">
                    <h1>Profile</h1>
                    <hr />
                    <div class="form-row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Date of admission :</label><input class="form-control" id="doa" type="date"
                                    name="doa" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label>Student ID :</label><input class="form-control" id="id" type="number"
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
                        <div class="form-group">
                            <label>Achivement :</label><textarea id="Achivement" class="form-control"></textarea>
                        </div>
                    </div>
                    <hr />
                    <div class="form-row">
                        <div class="col-md-6 content-left" id="backcont">
                            <a id="back" class="btn btn-warning form-btn" type="back" style="color: white;">
                                Back
                            </a>

                            <!-- <button class="btn btn-danger form-btn" type="reset">
                    CANCEL
                  </button> -->
                        </div>
                        <div class="col-md-6 content-right" id="editcont">
                            <button id="sumbit" class="btn btn-primary form-btn" type="submit">
                                Edit

                                <!-- <button class="btn btn-danger form-btn" type="reset">
                    CANCEL
                  </button> -->
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4 relative" id="comp">
                    <div class="avatar">
                        <div class="avatar-bg center"></div>
                    </div>
                    <img id="myimg" src="" alt="Student Image" height="200" width="200">
                    <input id="photo" class="form-control-file form-control" type="file" name="avatar-file"
                    accept="image/png, image/jpeg" hidden />
                    <lable for="photo" id="pic">Choose File</lable>
                </div> -->
                <div class="col-md-4 relative" id="comp">
                    <div class="avatar">
                        <!-- <div class="avatar-bg center"></div> -->
                        <img id="myimg" src="" alt="Student Image" height="200" width="200">
                    </div>
                    <input id="photo" class="form-control-file form-control" type="file" name="avatar-file"
                        accept="image/png, image/jpeg" value="" />
                    <!-- <lable for="photo" id="pic">Choose File</lable> -->
                </div>
            </div>
        </form>
    </div>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
      https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-storage.js"></script>
    <script>
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

    //   console.log(uid);
    function getData(uid) {
        firebase
            .database()
            .ref("Students/" + uid)
            .once("value")
            .then(function(snapshot) {
                var doa = snapshot.val().doa;
                var Sid = snapshot.val().Sid;
                var StudRole = snapshot.val().StudRole;
                var name = snapshot.val().name;
                var dob = snapshot.val().dob;
                var FatherName = snapshot.val().FatherName;
                var address = snapshot.val().address;
                var BldGrp = snapshot.val().BldGrp;
                var Mno = snapshot.val().Mno;
                var email = snapshot.val().email;
                var picurl = snapshot.val().picurl;
                var gender = snapshot.val().gender;
                var Achivement = snapshot.val().Achivement;


                document.getElementById("doa").value = doa;
                document.getElementById("id").value = Sid;
                document.getElementById("StudRole").value = StudRole;
                document.getElementById("name").value = name;
                document.getElementById("FatherName").value = FatherName;
                document.getElementById("dob").value = dob;
                document.getElementById("BldGrp").value = BldGrp;
                document.getElementById("Mno").value = Mno;
                document.getElementById("address").value = address;
                document.getElementById("Achivement").value = Achivement;
                document.getElementById("email").value = email;
                document.getElementById("myimg").src = picurl;
                document.getElementById("myimg0").src = picurl;
                gender == "Male" ?
                    (document.getElementById("formCheck-2").checked = true) :
                    (document.getElementById("formCheck-1").checked = true);
            });

    }

    appfrm = document.querySelector("#appfrm");
    appfrm.addEventListener("submit", (e) => {
        e.preventDefault();
        var doa = document.getElementById("doa").value;
        var Sid = document.getElementById("id").value;
        var StudRole = document.getElementById("StudRole").value;
        var name = document.getElementById("name").value;
        var dob = document.getElementById("dob").value;
        var FatherName = document.getElementById("FatherName").value;
        var gender = radioGender();
        var address = document.getElementById("address").value;
        var BldGrp = document.getElementById("BldGrp").value;
        var Mno = document.getElementById("Mno").value;
        var email = document.getElementById("email").value;
        var Achivement = document.getElementById("Achivement").value;

        var uploadTask = firebase
            .storage()
            .ref("Images/" + name + ".png")
            .put(files[0]);
        uploadTask.snapshot.ref.getDownloadURL().then(function(url) {
            var picurl = url
            console.log(name, dob, FatherName, gender, address, BldGrp, Mno, email, picurl)
            change(name,
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
                StudRole,
                Achivement)
        });
        // change(name, dob, FatherName, gender, address, BldGrp, Mno, email);

        function radioGender() {
            var Gender = document.querySelector("input[name=gender]:checked")
                .value;
            return Gender;
        }

        function change(
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
            StudRole,
            Achivement
        ) {
            var messagesRef = firebase.database().ref("Students/" + id);
            //   console.log(id);
            console.log(name);
            messagesRef.set({
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

        // window.location.reload();
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



    var query = location.search;
    //   console.log(query);
    var query = location.href.split("?")[1];
    var params = query.split("&");
    var id;
    params.forEach((param, index) => {
        var key = param.split("=")[0];
        var value = param.split("=")[1];
        if (key == "id") {
            id = value;
            getData(id);
        }
    });
    //   console.log(id);
    document.getElementById("back").addEventListener("click", function() {
        window.location = "dashboard.php";
    });

    function myfun() {
        var myVar;
        document.getElementById("profile").style.display = "none";

        myVar = setTimeout(showPage, 3000);
    }

    function showPage() {
        document.getElementById("loader0").style.display = "none";
        document.getElementById("profile").style.display = "block";


    }
    </script>
</body>

</html>


<?php
}else 
// echo "<h1>Please login first .</h1>";
header('location:index.php');
	exit;
?>