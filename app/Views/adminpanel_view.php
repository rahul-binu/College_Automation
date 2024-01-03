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
      
    .container{

        height: 40vh;
        width: 18vw;
    }
    i{
        font-size: 40px;
    }
    a{
        text-decoration: none;
    }
    .card{
        box-shadow: 2px 2px 10px #EEF5FF;
    }
    .card:hover{
        box-shadow: 3px 3px 15px #9EB8D9;
    }
    .card-body{
        color: #0F2167;
        
    }
   
</style>
</head>
<body>
<div class="container pt-5 mt-5 ms-5 ps-5">
    <a href="/clgproject/oStaff/addstaff">
<div class="card ps-3">
  <div class="card-body ">
    <h5 class="card-title ms-4">Add Staff</h5>
    <i class="fas fa-plus ms-5"></i>
  </div>
</div>
</a>
<a href="/clgproject/oStaff/usersview">
<div class="card mt-5 ps-3">
  <div class="card-body ">
    <h5 class="card-title">Users view</h5>
    <i class="fas fa-check ms-5"></i>
  </div>
</div>
</a>
</div>
</body>
</html>
