<?php


include('Navbar.php');


?>
<link rel="stylesheet" href="/Uproject/index.css">
<link rel="stylesheet" href="std_view1.css">

<div class="row " id="rows">
<div class="col-2"></div>


<div class="col-10">
<div id="display" class="container-fluid ">
             <h3 id="heading" class="">Student Details</h3>
             <!-- Search form -->
<form action=""class="form " method="post">
<div class="dataTables_filter d-flex" id="dataTable_filter">
                    <input type="search" class="form-control form-control-sm" placeholder="Find by ID" name="fid"
                        aria-controls="dataTable">
                        <button class="btn1 mt-1 ms-2" type="submit" name="submit2" value="check"> <i class="fs-5 bi-search"></i> </button>
                </div>
   
</form>
               
                <!-- <form id="sort" action="" class="form px-5 ms-5">
                    <select class="sel2 "   name="Search4" onchange="$('#myform').submit();">
                      <option value="">Type</option> 
                      <option value="">due</option>
                      <option value="">course</option>
                      <option value="">batch</option>
                      <option value="">admission</option>   
                   </select>
                 <select class="sel"   name="Search4" onchange="$('#myform').submit();">
                     <option value="">Sort</option> 
                     <option value="">due</option>
                     <option value="">course</option>
                     <option value="">batch</option>
                     <option value="">admission</option>   
                 </select>
                 <input class="btn1 ms-3 mt-1" type="button" value="check">
                 <a href="stdsortmore.php" class="ms-4 mt-1" id="a"><p>Sort More</p></a>
              </form> -->
              

              <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
              <form id="sort" action="" class="form px-2 ms-3" method="post">
<select name="selectLevel" id="selectLevel" class="sel2">
     <option value="comply">option</option>
     <option value="gender">gender</option>
     <option value="course">course</option>
     <option value="year1">year</option>
     <option value="cast">cast</option>
     <option value="cari">caricular</option>
</select>

<select name="selectSubject" id="selectSubject" class="sel">
    <option data-value="comply" value="1">value</option>
    <option data-value="gender" value="male">male</option>
    <option data-value="gender" value="female">female</option>
    <option data-value="gender" value="other">others</option>
    <option data-value="course" value="bca">bca</option>
    <option data-value="course" value="bba">bba</option>
    <option data-value="course" value="bsc">bsc</option>
    <option data-value="course" value="bcom">bcom</option>
    <option data-value="year1" value="2023">2023</option> 
    <option data-value="year1" value="2022">2022</option> 
    <option data-value="year1" value="2021">2021</option> 
    <option data-value="year1" value="2020">2020</option> 
    <option data-value="cari" value="nss">nss</option> 
    <option data-value="cari" value="ncc">ncc</option> 
    <option data-value="cast" value="obc">obc</option> 
    <option data-value="cast" value="oec">oec</option> 
    <option data-value="cast" value="general">general</option> 
    <option data-value="cari" value="nss">Nss</option> 
    <option data-value="cari" value="ncc">Ncc</option>
    <option data-value="cari" value="others">others</option> 
 







</select>

<select name="selectTopic" id="selectTopic" class="sel">
    <option data-value="" value="">view in</option>
    <option  value="desc">desc</option>
    <
    <option  value="asc">asc</option>
    
   
         
</select>
<input class="btn1 ms-3 mt-1" type="submit" value="check" name="submit">
                 <a href="stdsortmore.php" class="ms-2 mt-1" id="a"><input class="btn1" type="button" value="more sort"></a>
</form>

<script>

    $(document).ready(function() {

        // Save all selects' id in an array 
        // to determine which select's option and value would be changed
        // after you select an option in another select.
        var selectors = ['selectLevel', 'selectSubject', 'selectTopic']
      
        $('select').on('change', function() {
          var index = selectors.indexOf(this.id)
          var value = this.value
      
          // check if is the last one or not
          if (index < selectors.length - 1) {
            var next = $('#' + selectors[index + 1])
      
            // Show all the options in next select
            $(next).find('option').show()
            if (value != "") {
              // if this select's value is not empty
              // hide some of the options 
              $(next).find('option[data-value!=' + value + ']').hide()
            }
            
            // set next select's value to be the first option's value 
            // and trigger change()
            $(next).val($(next).find("option:first").val()).change()
          }
        })
      });
</script>

 
          



            </div>
         
             <!-- Content area... -->
               
                  <div class="outer-wrapper p-1 ms-3">
                    <div class="table-wrapper">
                        <table>
                            <thead>
                            <th >Status</th>
                            <th>Update</th>
                          
                                <th>Admission Number</th>
                                <th>Student Name</th>
                                <th>Register Number</th>
                                <th>year of Admission</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Course</th>
                                <th>Nation</th>
                                <th>State</th>
                                <th>District</th>
                                <th>Adress</th>
                                <th>Pincode</th>
                                <th>Aadhaar</th>
                                <th>Cast</th>
                                <th>Religion</th>
                                <th>Guardian</th>
                                <th>Relation</th>
                                <th>Phone</th>
                                <th>email</th>
                                <th>Blood</th>
                                
                            </thead>
                            <tbody>
                            
                        
<?php

$year = $_GET['year'];
$sort = "asc";

if(isset($_POST['submit2'])){
    $search = $_POST['fid'];
}else{
    
    $search = "";  
}
if(isset($_POST['fid']) && $search != ""){
    $query = "SELECT * FROM stdbasicinfo WHERE adno='$search'";
}else{
if(isset($_POST['submit']))
{
$option = $_POST['selectLevel'];  
$value = $_POST['selectSubject'];  
$sort = $_POST['selectTopic'];  

}
else{
    $value = "";   
}
if(isset($_POST['selectSubject']) && $value != ""){
    $query = "SELECT * FROM stdbasicinfo WHERE year1='$year' AND $option = '$value' ORDER BY sname $sort";
}else{
    $query = "SELECT * FROM stdbasicinfo WHERE year1='$year' ORDER BY sname $sort";
}
}


$result = mysqli_query($con, $query);

    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>  <tr>  <?php
            $stat = $row['status1'];
            if($stat!="deactive" && $stat!="passout"){
                ?>
                 <td> <a href="std_status.php?id=<?php echo $row['adno']; ?>"
            onclick ="return confirm('Do you want to change the status')"
            >ACTIVE</a></td>
                <?php
            }else if($stat!="passout") {

                ?>
                <td> <a href="#">DEACTIVE</a></td>
            <?php
            }else{
                ?>
                <td> <a href="#">PASS OUT</a></td>
            <?php
            }
          
            ?>
            
            <td> <a href="std_update.php?id=<?php echo $row['adno']; ?>"><i id="icon" class="fs-5 bi-Pencil-square m-3 "></i></a></td>
           
           
                <td ><?php echo $row['adno']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['regno']; ?></td>
                <td><?php echo $row['year1']; ?></td>
                <td><?php echo $row['dob']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['nation']; ?></td>
                <td><?php echo $row['state1']; ?></td>
                <td><?php echo $row['district']; ?></td>
                <td><?php echo $row['adress']; ?></td>
                <td><?php echo $row['pincode']; ?></td>
                <td><?php echo $row['adhaar']; ?></td>
                <td><?php echo $row['cast']; ?></td>
                <td><?php echo $row['religion']; ?></td>
                <td><?php echo $row['gur']; ?></td>
                <td><?php echo $row['gurrel']; ?></td>
                <td><?php echo $row['phno']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['blood']; ?></td>
            </tr>
            <?php
        }
    } else {
        echo "<tr><td colspan='13'><h2>No records found</h2></td></tr>";
    }




    ?> 
    
   

    
                            
                            </tbody>
                        </table>
                    </div>
                </div>        
           </div>
           </div>