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
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/styles.min.css" />

</head>
<style>
body {
    pointer-events: none;
    disable;
    }
    .cell {
            min-height: 75px;
            flex-grow: 1;
        }
        #i121h {
            flex-basis: 10.4%;
            display: inline;
        }
        #ip4zi{
            flex-basis: 48.4%;
        }
        #i121i{
            flex-basis: 2.4%;
            display: inline;
        }

#doa,
#id,
#StudRole,
#name,
#dob,
#email,
#FatherName,
#address,
#BldGrp,
#Achivement,
#Mno,
#sign {
    width: 100%;
    padding: 7px 10px;
    border-radius: 2px;
    color: black;
    background-color: #ffffff;
    border: none;
    border-bottom-width: 3px;
}

#appfrm {
    /* background-image: url(/assets/img/Picture2.png); */
    background-position: center;
    background-size: cover;
    background-blend-mode: screen;
    /* border-color: black;
        border-style: solid;
        border-width: 3px; */
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

#logo {
    width: 100%;
    height: 100%;
}

@media only screen and (max-width:990px) {
    #logo {
        width: 50%;
        height: 50%;
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
</style>

<body>
    <div class="myrow" id="whole">

        <div id="iyno" class="row">


            <div id="i121i" class="cell">
                <img alt="" src="assets/img/Picture1.png" id="i6lu1" />
            </div>
            <div id="ip4zi" class="cell">
                <div id="i3j7u">
                    <u><b>WORLD TRADITIONAL?? AND CREATIVE ARTS??</b></u>
                    <div>
                        <span><b>&amp;</b></span>
                    </div>
                    <div><u>National Martial Arts &amp; Yoga Fedration??</u></div>
                    <div>
                        <span><b><br /><br /></b></span>
                    </div>
                </div>
            </div>
            <div id="i121h" class="cell">
                <img alt="" src="assets/img/Picture2.png" id="ivpwj" />
            </div>
        </div>





        <form id="appfrm">
            <div class="form-row profile-row">

                <div class="col-md-8">
                    <h1>Application Form </h1>
                    <hr />
                    <div class="col-md-4" id="mob">
                        <img id="myimg0" src="" alt="Student Image" height="200" width="200">
                        <!-- <lable for="photo" id="pic">Choose File</lable> -->
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Date of admission :</label><input class="form-control" id="doa" type="text"
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
                                <label>Date of Birth :</label><input class="form-control" id="dob" type="text" />
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
                    <br>
                    <br><br><br>
                    <div class="form-row">
                        <div class="col-md-4 content-left" id="backcont">
                            <input type="text" id="sign">
                            <label for="">Parent Signature</label>

                            <!-- <button class="btn btn-danger form-btn" type="reset">
                        CANCEL
                      </button> -->
                        </div>
                        <div class="col-md-4 content-left" id="backcont">
                            <input type="text" id="sign">
                            <label for="">Student Signature</label>

                            <!-- <button class="btn btn-danger form-btn" type="reset">
                         CANCEL
                       </button> -->
                        </div>
                        <div class="col-md-4 content-right" id="editcont">
                            <input type="text" id="sign">
                            <label for="">Instructor Signature</label>

                            <!-- <button class="btn btn-danger form-btn" type="reset">
                        CANCEL
                      </button> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 relative" id="comp">
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
    <!-- <div id="invfo" class="cell">
          <img
            id="photo"
            src=""
          />
        </div> -->
    </div>
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
                setTimeout(() => {
                    // html2pdf(document.body);
                    print();
                }, 2000);
            });
    }
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
    function addScript(url) {
        var script = document.createElement("script");
        script.type = "application/javascript";
        script.src = url;
        document.head.appendChild(script);
    }
    addScript(
        "https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"
    );
    </script>
</body>

</html>




<?php
}else 
// echo "<h1>Please login first .</h1>";
header('location:index.php');
	exit;
?>