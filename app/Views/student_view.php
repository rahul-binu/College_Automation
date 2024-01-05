<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Page Title</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script src="https://kit.fontawesome.com/828b754f04.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="lightslider.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Custom Styles -->
    <style>
        .navbar-light .navbar-nav .nav-link {
            color: #243784;
        }

        .navbar {
            box-shadow: 1px 1px 5px rgb(120, 120, 123);
        }
       
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h4>NSS college Rajakumari</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                        <a class="nav-link mx-2" href="<?= base_url()?>oStudent/"><i class="fas fa-plus-circl pe-"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#!"><i class="fas fa-plus-circl pe-"></i>Exams</a>
                    </li>
                    <li class="nav-item">

                        <div class="dropdown show ps-3">
                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Data

                            </a>

                            <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="<?= base_url()?>oStudent/register">Register Data</a>
                                <a class="dropdown-item" href="<?= base_url()?>oStudent/dataview">View acadamic Data</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#!"><i class="fas fa-hear pe-"></i>More</a>

                    </li>
                    <!-- <li class="nav-item ms-3">
                        <a class="btn btn-black btn-rounded" href="#!">Log out</a>
                    </li> -->
                   
                    <li class="nav-item ">
                        <div class="dropdown show ps-3">
                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>

                            <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                             <a class="dropdown-item " href="#"><h6 class="ps-3">Hi .<?= $userdata->username; ?><h6></a> 

                                <a class="dropdown-item" href="<?= base_url()?>oStudent/editprof"><i class="fas fa-user-pen px-1"></i> Edit profile</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-bell px-1"></i>notification</a>
                                <a class="dropdown-item" href="<?= base_url()."login/logout"?>" onclick="return confirm('Are you sure you want to logout?')"><i class="fas fa-right-from-bracket px-1"></i>Log out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Navbar -->

</body>

</html>