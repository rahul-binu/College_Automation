<?php
include("Navbar.php");
// include("cdn.php");
?>
<style>
  .card {
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
  }
  .head{
    color: #0766AD;
   
  }
</style>



<section class="">
  <div class="container py-5 h-100 mt-5">
    <div class="row d-flex justify-content-center align-items-center h-100 mt-5">
      <div class="col-12 col-md-10 col-lg-4 col-sm-10">
       
        <div class="card shadow-2-strong">
          <div class="card-body  text-center">

         
          <form action="" method="post" onsubmit="return handleSubmit()">
  <div class="form-outline">
    <h4 class="">Update user name and password</h4>
    <div class="col12">.</div>
  </div>

  <div class="form-outline mb-4">
    <div class="col">
      <input type="text" id="-2" class="form-control form-control-md mb-4" name="username"
        placeholder="username" value="<?= $userdata->username; ?>" required />
    </div>
  </div>

  <div class="form-outline mb-4">
    <div class="col">
      <input type="password" id="pass1" class="form-control form-control-md mb-4" name="password"
        placeholder=" new Password" onchange="passVal()" required />
      <div class="validation-message text-danger" id="msg2"></div>
    </div>
  </div>

  <div class="form-outline mb-4">
    <div class="col">
      <input type="password" id="pass2" class="form-control form-control-md mb-4"
        placeholder=" conform Password" onchange="checkPass()" required />
      <div class="validation-message text-danger" id="msg"></div>
    </div>
  </div>

  <button class="btn btn-primary btn-lg w-100 mb-2" type="submit">Update</button>
</form>

<script>
  function checkPass() {
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
    var messageDiv = document.getElementById("msg");
    var isValid;

    if (pass1 !== pass2) {
      isValid = false;
      messageDiv.textContent = "Password is not matching.";
    } else {
      isValid = true;
      messageDiv.textContent = ""; 
    }
    setTimeout(function () {
      messageDiv.textContent = "";
    }, 4000);
  }

  function passVal() {
    var pass1 = document.getElementById("pass1").value;
    var messageDiv = document.getElementById("msg2");
    var isValid;

    if (pass1.length <= 7) {
      isValid = false;
      messageDiv.textContent = "Password must be at least 8 characters long.";
    } else {
      isValid = true;
      messageDiv.textContent = ""; 
      
    }
    setTimeout(function () {
      messageDiv.textContent = "";
    }, 4000);
  }

  function handleSubmit() {
    checkPass();
    passVal();

    if (!isValid) {
      alert("Form submission failed. Please check the error messages.");
      return false; 
    }
    return true; 
  }
</script>

   

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

