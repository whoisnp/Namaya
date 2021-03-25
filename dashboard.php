<?php 
	session_start();
		
	// if(!isset($_SESSION))
	// {
	// 	header('location:index.php');
	// 	exit;
	// }
if($_SESSION["user_id"]) {
	

?>
<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- <link
      rel="stylesheet"
      href="https://cdn.datatables.net/searchbuilder/1.0.0/css/searchBuilder.dataTables.min.css"
    /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
    .navbar {
        min-height: 80px;
        background-color: #00aeef;
    }

    .custom {
        font-family: serif;
        font-weight: bold;
        font-size: xx-large;
        font-variant: normal;
        color: yellow;
    }

    .nav-link {
        background-color: transparent;
        border-color: transparent;
        color: white;
        font-family: "Lato", sans-serif;
        font-size: 14px;
        font-weight: 800 (black);
        font-style: normal;
        line-height: 1.5em;
        text-transform: uppercase;
        letter-spacing: 0.8px;
    }

    .nav-item:hover {
        background-color: white;
        color: transparent;
        border-radius: 50px;
    }

    .nav-link:hover {
        color: #00aeef;
    }

    /* .navbar-toggler.collapse{
        color: white;
        background-color: white;
      } */
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://plusequalz.educationhost.cloud/wp/wp-content/uploads/2017/05/20210227_084745.png"
                    alt="" width="75" height="75" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="text-white navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Instructors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="#" onclick="signOut()">Signout</a> -->
                        <a href="logout.php?logout=true" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <button id="addStud" class="addStud btn btn-success pull-right">
            Add Student
        </button>
        <div class="row py-5">
            <div class="col-lg-10 mx-auto">
                <div class="card rounded shadow border-0">
                    <div class="card-body p-5 bg-white rounded">
                        <div class="table-responsive">
                            <table id="example" style="width: 100%" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>DOB</th>
                                        <th>Risk</th>
                                        <th>Edit</th>
                                        <th>PDF</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <div id="loader" class="spinner-border" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/searchbuilder/1.0.0/js/dataTables.searchBuilder.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-auth.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.22.1/firebase.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
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

        var database = firebase.database();

        database.ref("Students").once("value", function(snapshot) {
            if (snapshot.exists()) {
                var content = "";
                snapshot.forEach(function(data) {
                    var val = data.val();
                    var x = data.key;
                    content += "<tr>";
                    content += "<td>" + val.name + "</td>";
                    content += "<td>" + val.dob + "</td>";
                    content +=
                        "<td><Button class=edit data-id=" + x + ">Edit</Button></td>";
                    content +=
                        "<td><Button class=pdf  data-id=" + x + ">PDF</Button></td>";
                    content += "</tr>";
                });
                $("#example").append(content);
                document.getElementById("loader").removeAttribute("class");
            }
        });
        // $("#example").DataTable();
        $(document).on("click", ".pdf", function() {
            let id = $(this).data("id");
            window.location = "pdf.php?id=" + id;
        });
        $(document).on("click", ".edit", function() {
            let id = $(this).data("id");
            window.location = "EditPage.php?id=" + id;
        });
    });
    document.getElementById("addStud").addEventListener("click", function() {
        window.location = "addStud.php";
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