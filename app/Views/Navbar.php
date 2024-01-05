

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <meta charset="UTF-8">
    <script data-require="bootstrap@*" data-semver="4.0.5" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/828b754f04.js" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/828b754f04.js" crossorigin="anonymous"></script>

    <title>Document</title>
    <style>
         .btn{
            color:white;
        }
        /* Your existing styles */
        #a-btn {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 1.2rem;
        }
        #a-btn img {
            width: 30px;
            height: 30px;
        }
        #app_bar {
            top: 0;
            background-color: #243784;
            position: fixed;
            width: 100%;
            z-index: 1;
            height: 3.5em;
        }
        /* ... Rest of your styles ... */


        #top-drp-btn{
            color:#fff;
            padding-left:2em
        }
        #a-btn a{
            color:#fff;
            text-decoration:none;
            padding-left:2em
        }




        *{
    
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
           }
           
           body{
            background: #f5f5f5;
           }
        
          
        
           .menu{
           
            padding: 0 25px;
            font-size: larger;
            display: flex;
            justify-content: space-between;
            align-items: center;
          
            width: 60px;
           }
          .fas:hover{
            /* background-color: #2E4374; */
            border-radius: 30%;
             /* box-shadow: .4px .2px 20px rgb(69, 75, 128);
            */
           }
            
          
        
           .sidebar{
            position: fixed;
            top: 57px;
            left: 0;
            width: 220px;
            height: 100%;
           z-index: 99; 
          
           background: #f5f5f5;
           box-shadow: 1px 1px 5px rgb(209, 207, 207);
           }
        
           .sidebar ul li a{
            display: block;
            padding: 17px 0px;
            text-decoration: none;
            color: #0e94d4;
            margin-left: -33px;
            transition: .3s;
           }
           .sidebar ul{
            margin-top: 30px;
           }
           
           .sidebar ul li a .icon{
            font-size: 15px;
            color: rgb(50, 48, 48);
            vertical-align: middle;
            margin-left: 30px;
           }
           
           .sidebar ul li a .text{
            margin-left: 19px;
            color:  rgb(50, 48, 48);
            font-family: sans-serif;
            font-size: 15px;
            letter-spacing: 2px;
            
           
           }
           
           .sidebar ul li a:hover{
            background: #a7abaf;
            color: #fff;
           }
        
           .hover_collapse .sidebar{
            width: 70px;
            transition: .3s;
            
           }
           
           .hover_collapse .sidebar ul li a .text{
            display: none;
            
           }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.js"></script>
    <div class="wrapper hover_collapse">
        <div id="cont-fluid">
            <nav class="navbar navbar-expand static-top" id="app_bar">
                <div class="menu">
                    <div class="hamburger">
                    <i class="fas fa-bars"></i>
                    </div>
                  </div>
                <button class="btn" id="a-btn"><a href=""> <img src="\project\photos\collegelogo.pn" alt="NSS COLLEGE RAJAKUMARI"> </a></button>
               
                            <div class="dropdown show ps-3">
                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Reports

                            </a>

                            <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#myModal">student report</button>
                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#myModal">Xl data</button>

                                
                            </div>
                            </div>


                            <div class="dropdown show ps-3">
                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Certificate

                            </a>

                            <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#myModal">Generate TC</button>
                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#myModal">Generate cc</button>

                                
                            </div>
                            </div>
                        
          <?php
           if(session()->has("logged_user")){
    
            $des = session()->get('who');
            if($des=='admin'){
                ?>
 <button class="btn" id="a-btn"><a href="<?= base_url() ?>ostaff/adminpanel">Admin Panel</a></button>
                <?php
            }
          
          }
      
          ?>                    
                           
            </nav>
            
    <div class="sidebar">


        <div class="sidebar_inner">
            <ul>
                <li>
                    <a href="<?= base_url() ?>ostaff">
                  <span class="icon"><i class="fs-5 bi-house"></i></span>
                  <span class="text">Home</span>
                    </a>
                    </li>
                <li>
                <a href="<?= base_url() ?>FeeManController/index">
              <span class="icon">  <i class="fs-5 bi-speedometer2"></i></span>
              <span class="text">Fee Dashbord</span>
                </a>
                </li>
          
                <li>
                <a href="<?= base_url()?>feeManController/feedetailsview">
              <span class="icon">   <i class="fs-5 bi-cash-stack"></i></span>
              <span class="text">Fee's</span>
                </a>
                </li>
                <li>
                <a href="<?= base_url()?>oStaff/Stview">
              <span class="icon"> <i class="fs-5  bi-person-plus"></i></span>
              <span class="text">Create User</span>
                </a>
                </li>
                <li>
                <a href="<?= base_url() ?>oStaff">
              <span class="icon"> <i class="fs-5 bi-search"></i></span>
              <span class="text">View Student</span>
                </a>
                </li>
                <li>
                <a href="<?= base_url() ?>feemancontroller/studentfeeview">
              <span class="icon"><i class="fs-5 bi-bank"></i></span>
              <span class="text">Students fee</span>
                </a>
                </li>
                <li>
                <a href="<?= base_url() ?>ostaff/staffprofile">
              <span class="icon"><i class="fs-5 bi-person"></i></span>
              <span class="text">Profile</span>
              
                </a>
                </li>
                <li>
                <a class="dropdown-item" href="<?= base_url()."login/logout"?>" onclick="return confirm('Are you sure you want to logout?')">

              <span class="icon">  <i class="fs-5 bi-box-arrow-left"></i></span>
              <span class="text">Logout</span>
                </a>
                </li>
            </ul>
          </div>
          


    </div>
    
            
        </div>
    <script>
        var li_items = document.querySelectorAll(".sidebar ul li");
        var hamburger = document.querySelector(".hamburger");
        var wrapper = document.querySelector(".wrapper");

        hamburger.addEventListener("click", () => {
            hamburger.closest(".wrapper").classList.toggle("hover_collapse");
        });
    </script>


<!-- model -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



<div class="modal fade" id="myModal" role="dialog">
    <form action="<?= base_url() ?>/ostudent/tc" method="post">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Enter Admission number</p>
                    <input type="text" value="" name="admission_number" />
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </div>
        </div>
    </form>
</div>




</body>
</html>
