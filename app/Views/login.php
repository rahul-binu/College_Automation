<style>
  .card {
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
  }
  .head{
    color: #0766AD;
   
  }
</style>

<?php $page_session = \config\Services::session(); ?>
<?php if($page_session->getTempdata('success')): ?>
            <div class="alert alert-success"><?= $page_session->getTempdata('success'); ?></div>
            <?php endif; ?>

            <?php if($page_session->getTempdata('error')): ?>
            <div class="alert alert-danger"><?= $page_session->getTempdata('error'); ?></div>
            <?php endif; ?>
<section class="">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-10 col-lg-4 col-sm-10">
        <h3 class="text-center mb-4 head">NSS College RajaKumari</h3>
        <div class="card shadow-2-strong">
          <div class="card-body  text-center">

          <?php
          if(isset($validation)):
            ?>

            <div class="alert alert-danger">
           <?= $validation->listErrors() ?>
           </div>

            <?php
            endif;
          ?>

            <?= form_open() ?>
            <div class="form-outline">
              <h3 class="">Login</h3>
            </div>





            <div class="form-outline mb-4">
              <input type="email" id="-2" class="form-control form-control-md" name="email"
                placeholder="Email adress" required/>
            </div>

            <div class="form-outline mb-4">
             
              <select id="input" class="form-select" name="designation" required >
                <option value="">Designation</option>
                <option value="staff">Office staff</option>
                <option value="student">Student</option>
                <option value="parent">Parent</option>
                <option value="admin">Admin</option>
              
              </select>
            </div>

            <div class="form-outline mb-4">
              <div class="col">
                <input type="password" id="-2" class="form-control form-control-md mb-4" name="password"
                  placeholder="Password" required/>
              </div>
            </div>


            <button class="btn btn-primary btn-lg w-100 mb-2" type="submit">Login</button>
            <?= form_close() ?>

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