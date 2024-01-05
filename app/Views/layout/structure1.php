<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        .topnav {
            overflow: hidden;
            background-color: #243784;
            margin-left: 0;
            z-index: 1;
            width:100%;
            box-shadow: 0px 1px 6px 0px #242024;
            position:fixed;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f1f1f1;
            padding: 0px 16px;
            text-decoration: none;
            font-size: 17px;
            cursor: pointer;
        }

        #systemName {
            color: white;
        }

        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .sidenav {
            height: 100%;
            width: 60px;
            position: fixed;
            z-index: 2;
            top: 50px;
            left: 0;
            background-color: #243784;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 20px;
        }

        .sidenav a {
            padding: 8px 8px 8px 10px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
            cursor: pointer;
        }

        .sidenav a i {
            display: inline-block;
        }

        #homeButton {
            margin-top: 0;
        }

        .sidenav a span {
            display: none;
            margin-left: 10px;
        }

        .sidenav a.active span {
            display: inline-block;

        }

        .sidenav a.active i {
            display: none;
        }

        .main {
            transition: margin-left 0.5s;
            padding: 16px;
            margin-left: 60px;
            padding-top:4.5em;
        }
    </style>
</head>

<body>
    <div class="topnav">
        <div class="row">
            <div id="options" class="col-8 d-flex justify-content-start ">
                <a href="#" class="mt-3" onclick="toggleNav()"><i class="fs-4 bi-list"></i></a>
                <a class="mt-3" onclick="history.back()"><i class="bi bi-arrow-left"></i></a>
                <a class="mt-3" onclick="history.forward()"><i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="col-4 py-3 d-flex justify-content-end">
                <span id="systemName">NSS College Rajakumari Office automation system </span>
            </div>
        </div>
    </div>

    <div class="sidenav" id="mySidenav">
        <a href="<?= base_url() ?>oStaff" class="nav-link align-middle mx-1 px-2" id="homeButton">
            <i class="fs-4 bi-house"></i> <span>Home</span>
        </a>
        <a href="/uproject/" class="nav-link px-2 mx-1 align-middle">
            <i class="fs-4 bi-speedometer2 mx-1 py-2"></i> <span>Old Dashboard</span> </a>
        <a href="<?= base_url() ?>FeeManController/studentfeeview" class="nav-link px-2 align-middle ">
            <i class="fs-4 bi bi-patch-plus mx-1 py-2"></i> <span> View student Fee</span></a>
        <a href="<?= base_url() ?>FeeManController/feeDetailsView" class="nav-link px-2 align-middle mx-1">
            <i class="fs-4 bi-search py-2"></i> <span>View Fee</span></a>
        <a href="<?= base_url() ?>usersController/login" class="nav-link mx-1 align-middle px-2">
            <i class="fs-4 bi-person py-2"></i> <span>Profile</span>
        </a>
        <a class="dropdown-item" href="<?= base_url()."login/logout"?>" onclick="return confirm('Are you sure you want to logout?')">

            <i class="fs-4 bi-box-arrow-left py-2"></i> <span>Logout</span>
        </a>
    </div>

    <div class="main">
        <!-- Your main content goes here -->
        <?= $this->renderSection("content"); ?>
    </div>

    <script>
        function toggleNav() {
            var sidenav = document.getElementById("mySidenav");
            var main = document.getElementsByClassName("main")[0];

            if (sidenav.style.width === "250px") {
                sidenav.style.width = "60px";
                main.style.marginLeft = "60px";
                hideIconNames();
            } else {
                sidenav.style.width = "250px";
                main.style.marginLeft = "250px";
                showIconNames();
            }
        }

        function hideIconNames() {
            var iconNames = document.querySelectorAll(".sidenav a span");
            iconNames.forEach(function (name) {
                name.style.display = "none";
            });
        }

        function showIconNames() {
            var iconNames = document.querySelectorAll(".sidenav a span");
            iconNames.forEach(function (name) {
                name.style.display = "inline-block";
            });
        }

        // function changeHomeContent() {
        //   var mainContent = document.querySelector(".main h2");
        //   mainContent.innerText = "Home Content";
        // }
        //
        // function changeUserContent() {
        //   var mainContent = document.querySelector(".main h2");
        //   mainContent.innerText = "User Content";
        // }
    </script>

<!--bootstrap jquery cdn-->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> 

<!--bootstrap js cdn-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>