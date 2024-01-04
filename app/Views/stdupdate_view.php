


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
  height: 93%;
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
                  <div class="col-4">
                     <h2 id="heading" class="">Student Updation</h2>
                  </div>
                  <div class="col-3 "></div>
                      <div class="docs col-3 pt-3 "><a href="regdocs.php">
                      <p >Documents</p></a>
                  </div>
                  <?php foreach ($std as $row) : ?>
                  <div class="docs col-3 pt-3 ms-3"><a href="<?= base_url() ?>ostaff\updateparent\<?= $row['parent_phn'];?>">
                      <p >Parent</p></a>
                  </div>
                  <?php endforeach ?>
                 
                 
                 
                 </div>

                 <div class="container">

<form action="#" method="post">

<!-- first input -->

<?php foreach ($std as $row) : ?>
<div class="form first row g-3" id="form1">
    <div class="col-md-4">
      <label for="inputname" class="form-label">Student Name</label>
      <input type="text" class="form-control" id="inputname" name="sname" value="<?= $row['student_name'];?>" required>
      <div class="validation-message"></div>
    </div>
    <div class="col-md-4">
      <label for="inputadno" class="form-label">Admission Number</label>
      <input type="number" class="form-control" id="inputadno" name="adno" value="<?= $row['admission_no'];?>">
    
    </div>
    <div class="col-md-4">
        <label for="inputreg" class="form-label">Register Number</label>
        <input type="number" class="form-control" id="inputreg" name="regno" value="<?= $row['register_no'];?>">
      </div>


     

     <div class="col-md-4 mt-5 pt-1 ps-5 ">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" 
            <?php if($row['gender']=='male'){
                     echo "checked";
              }?>
            >
            <label class="form-check-label" for="inlineRadio1">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female"
            <?php if($row['gender']=='female'){
                     echo "checked";
              }?>
            >
            <label class="form-check-label" for="inlineRadio2">Female</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="others"
            <?php if($row['gender']=='others'){
                     echo "checked";
              }?>
            >
            <label class="form-check-label" for="inlineRadio2">others</label>
          </div>
       
        </div> 

        <div class="col-md-4">
            <label for="inputdate" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="inputdate" name="dob" value="<?= $row['dob'];?>">
          </div>
         
         <div class="col-md-4">
            <label for="inputreg" class="form-label">Year of Admission</label >
            <input type="number" class="form-control" id="inputreg" name="yearofad" value="<?= $row['yearOfAdmission'];?>">
          </div>

          <div class="col-md-4">
            <label for="inputcourse" class="form-label">Program</label >
            <select id="inputcourse" class="form-select" name="program">
              <option selected>Choose..</option>
              <option value="BCA" 
              <?php if($row['program']=='BCA'){
                     echo "selected";
              }?>
              >BCA</option>

              <option value="BBA" 
              <?php if($row['program']=='BBA'){
                     echo "selected";
              }?>>BBA</option>
              <option value="BCOM 1"
              <?php if($row['program']=='BCOM 1'){
                     echo "selected";
              }?>
              >B.COM 1</option>
              <option value="BCOM 2"
              <?php if($row['program']=='BCOM 2'){
                     echo "selected";
              }?>
              >B.COM 2</option>
              <option value="BSC"
              <?php if($row['program']=='BSC'){
                     echo "selected";
              }?>
              >BSC</option>
              <option value="MSC"
              <?php if($row['program']=='MSC'){
                     echo "selected";
              }?>
              >MSC</option>

            </select>
          </div>

    <div class="col-8">
      <label for="inputAddress" class="form-label">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="House,PO" name="adress" value="<?= $row['adress'];?>">
    </div> 


   
<div class="col-md-3">
      <label for="inputCity" class="form-label">Nationality</label>
      <input type="text" class="form-control" id="inputCity" name="nation" value="<?= $row['nation'];?>">
    </div>
    <div class="col-md-3">
        <label for="inputCity" class="form-label">State</label>
        <input type="text" class="form-control" id="inputCity" name="state" value="<?= $row['state1'];?>">
      </div>
    
    <div class="col-md-3">
      <label for="inputZip" class="form-label">District</label>
      <input type="text" class="form-control" id="inputZip" name="district" value="<?= $row['district'];?>">
    </div>
    <div class="col-md-3">
        <label for="inputCity" class="form-label">Pincode</label>
        <input type="number" class="form-control" id="inputCity" name="pincode" value="<?= $row['pincode'];?>">
      </div>

      <div class="col-md-4">
        <label for="inputCity" class="form-label">Aadhaar</label>
        <input type="number" class="form-control" id="inputCity" name="adhar" value="<?= $row['adhaar'];?>">
      </div>
    
    <div class="col-md-3">
      <label for="inputZip" class="form-label">Cast</label>
      <input type="text" class="form-control" id="inputZip" name="cast" value="<?= $row['cast'];?>">
    </div>
    <div class="col-md-3">
        <label for="inputCity" class="form-label">Religion</label>
        <input type="text" class="form-control" id="inputCity" name="reli" value="<?= $row['religion'];?>">
      </div> 
      <div class="col-md-2">
        <label for="inputCity" class="form-label">Anual Income</label>
        <input type="number" class="form-control" id="inputCity" name="anincome" value="<?= $row['income'];?>">
      </div> 

      
      <div class="col-md-4">
        <label for="inputCity" class="form-label">Guardian</label>
        <input type="text" class="form-control" id="inputCity" name="guard" value="<?= $row['guardian'];?>">
      </div>
    
    <div class="col-md-4">
      <label for="inputZip" class="form-label">Guardian Relation</label>
      <input type="text" class="form-control" id="inputZip" name="guardrel" value="<?= $row['guardian_rel'];?>">
    </div>
    <div class="col-md-4">
        <label for="inputCity" class="form-label">Guardian Contact</label>
        <input type="text" class="form-control" id="inputCity" name="guardcon" value="<?= $row['guardian_con'];?>">
      </div>

      <div class="col-md-4">
        <label for="inputCity" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputCity" name="email" value="<?= $row['email1'];?>">
        
      </div>
    
    <div class="col-md-4">
      <label for="inputZip" class="form-label">Phone Number</label>
      <input type="number" class="form-control" id="inputZip" name="phone" value="<?= $row['phno'];?>">
    </div>
    <div class="col-md-2">
        <label for="inputcourse" class="form-label">Blood Group</label>
        <select id="inputcourse" class="form-select" name="blood" >
          <option selected valu="" >Choose..</option>
          <option value="A+"
          <?php if($row['blood']=='A+'){
                     echo "selected";
              }?>
          >A+</option>
          <option value="B+"
          <?php if($row['blood']=='B+'){
                     echo "selected";
              }?>
          >B+</option>
          <option value="AB+"
          <?php if($row['blood']=='AB+'){
                     echo "selected";
              }?>
          >AB+</option>
          <option value="AB-"
          <?php if($row['blood']=='AB-'){
                     echo "selected";
              }?>
          >AB-</option>
          <option value="o+"
          <?php if($row['blood']=='o+'){
                     echo "selected";
              }?>
          >o+</option>
          

        </select>
      </div> 


      
    
    <div class="col-md-2">
      <label for="inputadno" class="form-label">Distance to college</label>
      <input type="number" class="form-control" id="inputadno" name="clgtoresdis" value="<?= $row['program'];?>">
    </div>

        <div class="col-md-12 mt-4 pt-1 "><h4>Acadamic Record</h4></div>



    <!-- explode -->
    <?php
    $k = $row['hs'];
    $values = explode(",", $k);


$var1 = null;



foreach ($values as $value) {
   
    
    $pair = explode(":", $value);

    
    if ($pair[0] == 'hs_name') {
        $var1['hs_name'] = $pair[1];
       
    } elseif ($pair[0] == 'hs_mark') {
        $var1['hs_mark'] = $pair[1];
    }elseif ($pair[0] == 'hs_percentage') {
      $var1['hs_percentage'] = $pair[1];
  }elseif ($pair[0] == 'hs_sylabus') {
    $var1['hs_sylabus'] = $pair[1];
}elseif ($pair[0] == 'hs_passout') {
  $var1['hs_passout'] = $pair[1];
}
}
?>



        <div class="col-md-3">
      <label for="inputadno" class="form-label">HS Name</label>
      <input type="text" class="form-control" id="inputadno" name="hsnm" value="<?= $var1['hs_name'];?>">
    </div>

    <div class="col-md-3">
      <label for="inputadno" class="form-label">HS Exam</label>
      <input type="text" class="form-control" id="inputadno" name="hssyl"  placeholder="sslc/other" value="<?= $var1['hs_sylabus'];?>">
    </div>

    <div class="col-md-2">
      <label for="inputadno" class="form-label">HS Pass Out Year</label>
      <input type="number" class="form-control" id="inputadno" name="hsyr" value="<?= $var1['hs_passout'];?>">
    </div>

    <div class="col-md-2">
      <label for="inputadno" class="form-label">HS Marks</label>
      <input type="number" class="form-control" id="inputadno" name="hsmrk" value="<?= $var1['hs_mark'];?>">
    </div>

    <div class="col-md-2">
      <label for="inputadno" class="form-label">HS Percentage</label>
      <input type="text" class="form-control" id="inputadno" name="hsperce" value="<?= $var1['hs_percentage'];?>">
    </div>


    <?php
    $k = $row['hss'];
    $values = explode(",", $k);



$var2 = null;


foreach ($values as $value) {
   
    
    $pair = explode(":", $value);

    
    if ($pair[0] == 'hss_name') {
        $var2['hss_name'] = $pair[1];
       
    } elseif ($pair[0] == 'hss_mark') {
        $var2['hss_mark'] = $pair[1];
    }elseif ($pair[0] == 'hss_percentage') {
      $var2['hss_percentage'] = $pair[1];
  }elseif ($pair[0] == 'hss_sylabus') {
    $var2['hss_sylabus'] = $pair[1];
}elseif ($pair[0] == 'hss_passout') {
  $var2['hss_passout'] = $pair[1];
}
}
?>


    <div class="col-md-3">
      <label for="inputadno" class="form-label">HSS Name</label>
      <input type="text" class="form-control" id="inputadno" name="hssnm" value="<?= $var2['hss_name'];?>">
    </div>

    <div class="col-md-3">
      <label for="inputadno" class="form-label">HSS Exam</label>
      <input type="text" class="form-control" id="inputadno" name="hsssyl"  placeholder="+2/VHSC" value="<?= $var2['hss_sylabus'];?>">
    </div>

    <div class="col-md-2">
      <label for="inputadno" class="form-label">HSS Pass Out Year</label>
      <input type="number" class="form-control" id="inputadno" name="hssyr" value="<?= $var2['hss_passout'];?>">
    </div>

    <div class="col-md-2">
      <label for="inputadno" class="form-label">HSS Marks</label>
      <input type="number" class="form-control" id="inputadno" name="hssmrk" value="<?= $var2['hss_mark'];?>">
    </div>

    <div class="col-md-2">
      <label for="inputadno" class="form-label">HSS Percentage</label>
      <input type="text" class="form-control" id="inputadno" name="hssperce" value="<?= $var2['hss_percentage'];?>">
    </div>


<div class="col-12">     
   
<h5>Co-caricular</h5>
 </div> 
   

 <?php
    $k = $row['co_caricular'];
    $values = explode(",", $k);



$var3 = null;


foreach ($values as $value) {
   
    
    $pair = explode(":", $value);

    
    if ($pair[0] == 'act1') {
        $var3['act1'] = $pair[1];
       
    } elseif ($pair[0] == 'act2') {
        $var3['act2'] = $pair[1];
    }elseif ($pair[0] == 'act3') {
      $var3['act3'] = $pair[1];
  }elseif ($pair[0] == 'act4') {
    $var3['act4'] = $pair[1];
}
}
?>

    <div class="col-md-3" id="input1">
      <label for="inputadno" class="form-label">Activity-1</label>
      <input type="text" class="form-control" id="inputadno" name="act1" value="<?= $var3['act1'];?>">
    </div>

    <div class="col-md-3" id="input2">
      <label for="inputadno" class="form-label">Activity-2</label>
      <input type="text" class="form-control" id="inputadno" name="act2" value="<?= $var3['act2'];?>">
    </div>

    <div class="col-md-3" id="input3">
      <label for="inputadno" class="form-label">Activity-3</label>
      <input type="text" class="form-control" id="inputadno" name="act3" value="<?= $var3['act3'];?>">
    </div>

    <div class="col-md-3" id="input4">
      <label for="inputadno" class="form-label">Activity-4</label>
      <input type="text" class="form-control" id="inputadno" name="act4" value="<?= $var3['act4'];?>">
    </div>
     
    
      <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
        
      <button class="backbtn btn btn-primary me-md-2 pb-6" type="submit" >Update</button>        
      </div>
  
    

    </div>

    <?php endforeach; ?>

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