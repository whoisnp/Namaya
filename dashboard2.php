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
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
    * {
        box-sizing: border-box;
    }

    #myInput {
        /* background-image: url("/css/searchicon.png"); */
        background-position: 10px 10px;
        background-repeat: no-repeat;
        width: 100%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
    }

    #myTable {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ddd;
        font-size: 18px;
    }

    #myTable th,
    #myTable td {
        text-align: left;
        padding: 12px;
    }

    #myTable tr {
        border-bottom: 1px solid #ddd;
    }

    #myTable tr.header,
    #myTable tr:hover {
        background-color: #f1f1f1;
    }
    </style>
</head>

<body onload="myfun()">
    <h2>Students</h2>

    <input type="text" id="myInput" onkeyup="SearchStud()" placeholder="Search for names.." title="Type in a name" />

    <table id="myTable">
        <tr class="header">
            <th>Name</th>
            <th>DOB</th>
            <th>Edit</th>
            <th>Print</th>
        </tr>
    </table>
    <script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.22.1/firebase.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
            $("#myTable").append(content);
            // document.getElementById("example").append(content);
            // document.getElementById("loader").removeAttribute("class");
        }
    });
    $(document).on("click", ".pdf", function() {
        let id = $(this).data("id");
        window.location = "pdf.php?id=" + id;
    });
    $(document).on("click", ".edit", function() {
        let id = $(this).data("id");
        window.location = "EditPage.php?id=" + id;
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
        table = document.getElementById("myTable");
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