<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>BackOffice</title>
    <link rel="stylesheet" href="../CSS/BackOfficeTable.css">
    <script src="../JS/BackOfficeTable.js"></script>
</head>

<?php
include_once '../PHP/Session.php';
IsLoggedInTable();
?>

<body>
    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-red w3-card w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick='var x = document.getElementById("navDemo");if (x.className.indexOf("w3-show") == -1) {x.className += " w3-show";} else {x.className = x.className.replace(" w3-show", "");}' title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="Home.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
            <a href="Login.php" onclick="$.post('../PHP/Session.php?action=Logout');" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Logout</a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-button w3-padding-large" title="Notifications" onclick="window.location='BackOffice.php'">BackOffice <i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                    <a href="#" class="w3-bar-item w3-button">Numero de sócios</a>
                    <a href="#" class="w3-bar-item w3-button">Link</a>
                    <a href="#" class="w3-bar-item w3-button">Link</a>
                    <a href="ProgrammedEvents.php" class="w3-bar-item w3-button">Eventos programados</a>                    
                </div>
            </div>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="Login.php" class="w3-bar-item w3-button w3-padding-large">Logout</a>
            <a href="BackOffice.php" class="w3-bar-item w3-button w3-padding-large">BackOffice</a>
            <div class="w3-dropdown-hover">
                <button class="w3-button w3-padding-large" title="Notifications">Opções<i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                    <a href="#" class="w3-bar-item w3-button">Link</a>
                    <a href="#" class="w3-bar-item w3-button">Link</a>
                    <a href="#" class="w3-bar-item w3-button">Link</a>
                    <a href="ProgrammedEvents.php" class="w3-bar-item w3-button">Eventos programados</a>                    
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-100">
        <div class="row">
            <div class="col-12">
                <h1>BackOffice Table</h1>
            </div>
        </div>
    </div>
</body>

</html>