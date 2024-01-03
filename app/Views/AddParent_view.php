


<?php
// include('app_bar.php');
// include('side_bar.php');
 include('Navbar.php');
// include('footer.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/bootstrap.css">
   <link rel="stylesheet" href="regfrom1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>



   body {
  display: grid;
  padding-top: 20px;
  margin: 0; /* Remove default margin */
}

html, body {
  height: 90%;
  margin: 0; /* Remove default margin */
  padding: 0; /* Remove default padding */
}

.container {
  height: 60%;
  margin-top: 20px;
  margin-left: 9%;
  padding-top: 20px;
  border: 1px solid rgb(230, 229, 229);
  box-shadow: 1px 1px 5px rgb(230, 229, 229);
  position: relative;
}



    .head{
      margin-left: 9%;
      width: 88%;
      height: 40px;
 
      margin-top: 5%;
      display: flex;
    
      align-items: center;
    } 

     #heading{
      position: relative;
          left: 0;
          margin-left: 10%; */
          font-family: "Times New Roman", Times, serif;
          color: #192655;
        }


         .docs{
       
          display: flex;
          justify-content: center;
          align-items: center;
          width: 100px;
          height: 22px;
          box-shadow: 1px 1px 10px #c7c7c9;
          border-radius: 10px;
          transition: .3s;
          transform-origin: left;
     
       
         } 
         .docs a{
          text-decoration: none;
          color: black;
         }
         .docs a:hover{
          color: #ffff;
         }
         .docs:hover{
          background-color:#243784;
        
          box-shadow: 1px 1px 7px black;
         }


    </style>
</head>
<body>
               <div class="head row">
               
                 </div>

                 <div class="container">

<form action="#" method="post">

<!-- first input -->


<div class="form first row g-3" id="form1">
    <div class="col-md-4">
      <label for="inputname" class="form-label">Father Name</label>
      <input type="text" class="form-control" id="inputname" name="father"  required>
      <div class="validation-message"></div>
    </div>
    <div class="col-md-4">
      <label for="inputadno" class="form-label">Mother Name</label>
      <input type="text" class="form-control" id="inputadno" name="mother" required>
    
    </div>
    <div class="col-md-4">
            <label for="inputreg" class="form-label">Parent Phone</label >
            <input type="number" class="form-control" id="inputreg" name="phone" required>
          </div>

    <div class="col-md-4">
            <label for="inputreg" class="form-label">Parent Address</label >
            <input type="text" class="form-control" id="inputreg" name="adress" >
          </div>

    <div class="col-md-4">
        <label for="inputreg" class="form-label">Father State</label>
        <input type="textr" class="form-control" id="inputreg" name="fstate" >
      </div>

        <div class="col-md-4">
            <label for="inputdate" class="form-label">Mother State</label>
            <input type="text" class="form-control" id="inputdate" name="mstate" >
          </div>
         
         

       
   
    
      <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
        
      <button class="backbtn btn btn-primary me-md-2 pb-6" type="submit" >Add data</button>        
      </div>
  
    

    </div>



  </form>



                 </div>




<!-- Bootstrap and Popper.js scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="/js/bootstrap.js"></script>
</body>
</html>






      <!--link bootstrap  -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

      <script src="/js/bootstrap.js"></script>
</body>
</html>