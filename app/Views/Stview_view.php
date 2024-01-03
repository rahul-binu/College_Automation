<?php


include('Navbar.php');

include('cdn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body {
        margin: 0; /* Remove default margin */
      }
      .flex-container {
        display: flex;
        flex-wrap: wrap; /* Allow items to wrap to the next line */
        /* Adjust as needed */
        
        height: 100vh; /* Adjust as needed */
      }
      .container {
        flex-basis: calc(33.333% - 20px); /* Set the width of each container in the row */
        box-sizing: border-box;
        margin: 10px; /* Adjust as needed for spacing between cards */
      }
      i {
        font-size: 40px;
      }
      a {
        text-decoration: none;
      }
      .card {
        width: 230px;
        height:150px;
        box-shadow: 2px 2px 10px #EEF5FF;
        margin-bottom: 10px; /* Adjust as needed for spacing between cards */
      }
      .card:hover {
        box-shadow: 3px 3px 15px #9EB8D9;
      }
      .card-body {
        color: #0F2167;
      }
      #second{
        margin-left: -150px;
      }
    </style>
</head>
<body>

<div class="flex-container ms-5 ps-5 mt-1 pt-5">
    <div class="container mt-5">
        <a href="<?= base_url()?>oStaff/register">
            <div class="card ps-4 pt-4">
                <div class="card-body">
                    <h5 class="card-title">Add a Student .</h5>
                    <i class="fas fa-plus ms-5"></i>
                </div>
            </div>
        </a>

        <a href="<?= base_url()?>oStaff/approve">
            <div class="card mt-5 ps-4 pt-4">
                <div class="card-body">
                    <h5 class="card-title">Approve student</h5>
                    <i class="fas fa-check ms-5"></i>
                </div>
            </div>
        </a>

        <a href="<?= base_url()?>oStudent/register">
            <div class="card mt-5 ps-4 pt-4">
                <div class="card-body">
                    <h5 class="card-title">Register Student</h5>
                    <i class="fas fa-plus ms-5"></i>
                </div>
            </div>
        </a>
    </div>
    
    <div class="container mt-5" id="second">
        <a href="<?= base_url()?>oStaff/addparent">
            <div class="card  ps-4 pt-4">
                <div class="card-body">
                    <h5 class="card-title">Add a parent .</h5>
                    <i class="fas fa-plus ms-5"></i>
                </div>
            </div>
        </a>

       
    </div>
    <!-- Repeat the above structure for the second container if needed -->

</div>

</body>
</html>

