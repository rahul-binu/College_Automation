<!-- here student can see individuals data -->

<?php
// include("cdn.php");
include("student_view.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: grid;
        }
    </style>
</head>
<body>
<div class="container-fluid mt-4 d-flex pt-4">
<div class="col-lg-6 mt-4">
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->student_name; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Admission number</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->admission_no; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Register Number</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->register_no; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Year of Admission</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->yearOfAdmission; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Program</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->program; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Gender</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->gender; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">DOB</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->dob; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">email</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->email1; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Phone number</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->phno; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Aadhaar</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->adhaar; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Blood</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->blood; ?></p>
                </div>
            </div>
            <hr>
        </div>
   </div>
</div>
<div class="col-lg-6 mt-4">
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Address</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->adress; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Nationality</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->nation; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">State</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->state1; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">District</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->district; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Pincode</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->pincode; ?></p>
                </div>
            </div>
            <hr>
           
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Cast</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->cast; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Religion</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->religion; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Anual Income</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->income; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Guardian</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->guardian; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Guardian Relation</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->guardian_rel; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Guardian Contact</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->guardian_con; ?></p>
                </div>
            </div>
            <hr>
        </div>
   </div>
</div>
</div>



<div class="container-fluid mt-2 d-flex  ">

<?php
    $k =$userdata->hs;
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
   
<div class="col-lg-6">
<h5>Pervious Acadamic</h5>
    <div class="card mb-4 mt-4">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">HS Name</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $var1['hs_name'];?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">HS Syllabus</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $var1['hs_sylabus'];?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">HS Pass out</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $var1['hs_passout'];?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">HS Mark</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $var1['hs_mark'];?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Program</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $var1['hs_percentage'];?></p>
                </div>
            </div>
            <hr>



            <?php
    $k = $userdata->hss;
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

            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">HSS Name</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $var2['hss_name'];?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">HSS Syllabus</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $var2['hss_sylabus'];?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">HSS Pass out</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $var2['hss_passout'];?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">HSS Mark</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $var2['hss_mark'];?></p>
                </div>
            </div>
            <hr>

            <?php
    $k = $userdata->co_caricular;
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

            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0"> co-caricular Activity 1</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $var3['act1'];?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">co-caricular Activity 2</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $var3['act2'];?></p>
                </div>
            </div>
            <hr>
        </div>
   </div>
</div>


<div class="col-lg-6 ">
    <h5>Family Details</h5>
    <div class="card mb-4 mt-4">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Father</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->student_father; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Mother</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->student_mother; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Parent Address</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->parent_adres; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Father Status</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->father_state; ?></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">mother status</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->mother_state; ?></p>
                </div>
            </div>
            <hr>
           
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Parent Phone</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $userdata->parent_phn; ?></p>
                </div>
            </div>
           
        </div>
   </div>
</div>
</div>
</body>
</html>


