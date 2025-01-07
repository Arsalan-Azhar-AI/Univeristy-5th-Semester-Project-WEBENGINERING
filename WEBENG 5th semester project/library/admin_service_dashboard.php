<?php
session_start();
$adminid=$_SESSION['adminid'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <style>
    .imglogo{
        margin: auto;
    }
    .innerdiv{
        text-align: center;
        margin:100px;
    }
    .greenbtn{
        background-color: rgb(16,170,16);
        color:white;
        width:95%;
        height:40px;
        margin-top: 8px;
    }
    .leftinnerdiv{
        float:left;
        width: 25%;
    }
  </style>
  <body>
<div class="container">
    <div class="innerdiv">
        <div class="row"><img class="imglogo"src="images/logo.png" alt="logo img"></div>
    </div>
    <div class="leftinnerdiv">
        <button class="greenbtn">Admin</button>
        <button class="greenbtn" onclick="openpart('addbook')">ADD BOOK</button>
                <button class="greenbtn" onclick="openpart('bookreport')">BOOK REPORT</button>
                <button class="greenbtn" onclick="openpart('bookrequestapprove')">BOOK REQUEST APPROVE</button>
                <button class="greenbtn" onclick="openpart('addperson')">ADD STUDENT</button>
                <button class="greenbtn" onclick="openpart('studentrecord')">STUDENT REPORT</button>
                <button class="greenbtn" onclick="openpart('issuebook')">ISSUE BOOK</button>
                <button class="greenbtn" onclick="openpart('issuebookreport')">ISSUE REPORT</button>
                <a href="index.php"><button class="greenbtn">LOGOUT</button></a>
    </div>
    <div class="rightinnerdiv">
        <div id="addperson" class="innerright portion" style="display:none">
        <button class="greenbtn">ADD PERSON</button>
        <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
            <label>Name:</label><input type="text" name="addname">
            </br>
            <label>Pasword:</label><input type="pasword" name="addpass">
            </br>
            <label>Email:</label><input type="email" name="addemail">
            </br>
            <label for="typw">Choose type:</label>
            <select name="type">
                <option value="student">student</option>
                <option value="teacher">teacher</option>
            </select>
            <input type="submit" value="SUBMIT">
        </form>
    </div>
    </div>
</div>
<script>
    function openpart(portion) {
        var i;
        var x=document.getElementsByClassName("portion");
    
    for (let i = 0; i < x.length; i++) {
        x[i].style.display="none";        
    }
    document.getElementById(portion).style.display="block";
    }
</script>
</body>
</html>