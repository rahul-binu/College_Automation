<?php
// include('app_bar.php');
// include('side_bar.php');
include('Navbar.php');
// include('footer.php');

?>

<!-- 

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
             .validation-message {
      color: red;
      font-size: 12px;
      margin-top: 5px;
    }
        </style>
    </head>
    <body>
       

    <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-4">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

  onsubmit="return validation()"
                <form class="mx-1 mx-md-4" action="#" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Your Name</label>
                      <input type="text" id="form3Example1c" class="form-control" name="username" value="<?= set_value('username') ?>" />
                     <span class="text-danger"><?= display_error($validation, 'username') ?></span>
                     
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Your Email</label>
                      <input type="email" id="form3Example3c" class="form-control" name="email" value="<?= set_value('email') ?>"/>
                      <span class="text-danger"><?= display_error($validation, 'email') ?></span>

                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">                     
                       <label class="form-label" for="form3Example4c">Password</label>
                       <input type="password" id="form3Example4c" class="form-control" name="password"/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4cd">Repeat your password</label>
                    <input type="password" id="form3Example4cd" class="form-control" onchange="validation()"/>
                      <div class="validation-message" id="msg"></div>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                
                  
                    <label class="form-check-label mt-2" >
                      already have an account just  . <a href="#!">login</a>
                    </label>
                   
                  </div>
                  
                  

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-lg" >Register</button>
                  </div>

                </form>

                <script>
                    function validation(){
                        var messageDiv = document.getElementById("msg");
                     var pass = document.getElementById("form3Example4c").value;
                     var conpass = document.getElementById("form3Example4cd").value;

                      if(pass == conpass){
                        
                        return true;
                      }else {
                       
                        messageDiv.textContent = "password is not matching";
                        setTimeout(function () {
            // Clear the message div after 4 seconds
            messageDiv.textContent = "";
          }, 4000);
          return false;
                      }
                    }

             
                </script>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script data-require="bootstrap@*" data-semver="4.0.5" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/828b754f04.js" crossorigin="anonymous"></script>


    </body>
    </html> -->





<style>
  .card {
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
  }
</style>

<?php $page_session = \config\Services::session(); ?>

<section class="">
  <div class="container py-5 h-100 mt-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-10 col-lg-4 col-sm-10 mt-5 pt-3">
        <h3 class="text-center mb-3 text-primary">NSS College RajaKumari</h3>
        <div class="card shadow-2-strong">
          <div class="card-body  text-center mt-4">

            <?php if ($page_session->getTempdata('success')): ?>
              <div class="alert alert-success">
                <?= $page_session->getTempdata('success'); ?>
              </div>
            <?php endif; ?>

            <?php if ($page_session->getTempdata('error')): ?>
              <div class="alert alert-danger">
                <?= $page_session->getTempdata('error'); ?>
              </div>
            <?php endif; ?>

            <?= form_open() ?>
            <div class="form-outline">
              <h3 class="">Create a new account</h3>
            </div>


            <div class="form-outline mb-4">
              <input type="text" id="-2" class="form-control form-control-md" name="username" placeholder="Name"
                value="<?= set_value('username') ?>" />
              <span class="text-danger">
                <?= display_error($validation, 'username') ?>
              </span>
            </div>

            <div class="form-outline mb-4">
              <input type="email" id="-2" class="form-control form-control-md" name="email" placeholder="Email"
                value="<?= set_value('email') ?>" />
              <span class="text-danger">
                <?= display_error($validation, 'email') ?>
              </span>
            </div>

            <div class="form-outline mb-4">

              <select id="input" class="form-select" name="designation" required>
                <option value="">Designation</option>

                <option value="student">Student</option>
                <option value="parent">Parent</option>


              </select>
            </div>

            <!-- <div class="form-outline mb-4">
              <div class="col">
                <input type="password" id="-2" class="form-control form-control-md mb-4" name="password"
                  placeholder="Password" />
                <span class="text-danger">
                  <?= display_error($validation, 'password') ?>
                </span>
              </div>
              <div class="col">
                <input type="password" id="-2" class="form-control form-control-md mb-4" placeholder="confirm password"
                  name="conpass" />
                <span class="text-danger">
                  <?= display_error($validation, 'conpass') ?>
                </span>
              </div>
            </div> -->


            <button class="btn btn-primary btn-lg w-100 mb-2" type="submit">create</button>
            <!-- <span class=""><a href="<?= base_url() ?>cc/" class="text-decoration-none ">Already have an
                account</a></span>
            <?= form_close() ?> -->

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script data-require="bootstrap@*" data-semver="4.0.5"
  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/828b754f04.js" crossorigin="anonymous"></script>