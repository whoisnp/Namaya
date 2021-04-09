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

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
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

    #navitem:hover {
        background-color: white;
        color: #00aeef;
        border-radius: 50px;
    }
   #myInput{
        background-color: #00aeef;
        height:40px;
        border-radius:2px;
     
    }

    /* .navbar-toggler.collapse {
            color: white;
            background-color: white;
            text-align: center;
        } */

    #example {
        width: 100%;
        overflow-x: auto;
    }

    @media only screen and (max-width:992px) {
        table {
            width: 100%;
        }

        #navitem {
            padding-left: 110px;
        }

        #navitem:hover {
            background-color: white;
            color: #00aeef;
            border-radius: 5px;
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
</head>


<body onload="myfun()">
    <div class="wrapper" id="loader0">
        <div class="main-circle">
            <div class="green-circle">
                <div class="brown-circle">

                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark static-top" id="navhid">
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
                        <a class="nav-link" id="navitem" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="navitem" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="navitem" href="#">Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="navitem" href="#">Instructors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="navitem" href="#">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="navitem" href="#">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="#" id="navitem" onclick="signOut()">Signout</a> -->
                        <a href="logout.php?logout=true" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-4" id="pghide">
        <button id="addStud" class="addStud btn btn-success pull-right">
            Add Student
        </button>
        <div class="row content-right" id="sear">
            <input type="text" id="myInput" onkeyup="SearchStud()" placeholder="Search for names.." title="Type in a name" />
            </div>
        <div class="row py-5">
           
            <div class="col-lg-10 mx-auto">

           



                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr style="background-color: rgb(76, 123, 242);">
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>
                                    <!-- <div class="d-flex justify-content-center">
                                        <div id="loader" class="spinner-border" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div> -->
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

    function myfun() {
        var myVar;
        document.getElementById("pghide").style.display = "none";
        document.getElementById("navhid").style.display = "none";
        myVar = setTimeout(showPage, 3000);
    }

    function showPage() {
        document.getElementById("loader0").style.display = "none";
        document.getElementById("pghide").style.display = "block";
        document.getElementById("navhid").style.display = "block";

    }
    function SearchStud() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("example");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
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