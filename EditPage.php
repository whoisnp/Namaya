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
</sty /le>

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
        <!-- <div>
        <img src="/assets/img/Picture3.png" width="100" height="100" />
        <h4 class="text-center">APPLICATION FORM</h4>
      </div> -->
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
                        <div class="col-md-6 content-left">
                            <a id="back" class="btn btn-warning form-btn" type="back" style="color: white;">
                                Back
                            </a>

                            <!-- <button class="btn btn-danger form-btn" type="reset">
                    CANCEL
                  </button> -->
                        </div>
                        <div class="col-md-6 content-right">
                            <button id="sumbit" class="btn btn-primary form-btn" type="submit">
                                Edit

                                <!-- <button class="btn btn-danger form-btn" type="reset">
                    CANCEL
                  </button> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 relative">
                    <!-- <div class="avatar">
              <div class="avatar-bg center"></div>
            </div> -->
                    <img id="myimg" src="" alt="Student Image" height="200" width="200">
                    <!-- <input
              id="photo"
              class="form-control-file form-control"
              type="file"
              name="avatar-file"
              accept="image/png, image/jpeg"
              hidden
            /> -->
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
            });

    }

    appfrm = document.querySelector("#appfrm");
    appfrm.addEventListener("submit", (e) => {
        e.preventDefault();
        var name = document.getElementById("name").value;
        var dob = document.getElementById("dob").value;
        var FatherName = document.getElementById("FatherName").value;
        var gender = radioGender();
        var address = document.getElementById("address").value;
        var BldGrp = document.getElementById("BldGrp").value;
        var Mno = document.getElementById("Mno").value;
        var email = document.getElementById("email").value;
        // saveMessage(name, dob, FatherName, gender ,address, BldGrp, Mno, email);
        change(name, dob, FatherName, gender, address, BldGrp, Mno, email);
        // console.log(name, dob, FatherName, gender, address, BldGrp, Mno, email);
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
            email
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
            });
        }

        window.location.reload();
    });
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
        window.location = "index.html";
    });
    </script>
</body>

</html>




<?php
}else 
// echo "<h1>Please login first .</h1>";
header('location:index.php');
	exit;
?>