<style>
    .card {
        border-radius: 10px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    }
</style>

<section class="">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-10 col-lg-4 col-sm-10">
                <h3 class="text-center mb-3 text-primary">NSS College RajaKumari</h3>
                <div class="card shadow-2-strong">
                    <div class="card-body  text-center">
                     

                    <?= form_open()?>
                        <div class="form-outline">
                            <h3 class="">Create a new account</h3>
                        </div>
                        <div class="row mb-4">
                            <div class="col"> 
                                <input type="text" name="first_name" id="" class="form-control form-control-md"placeholder="First name">
                            </div>
                            <div class="col">
                                <input type="text" name="last_name" id="" class="form-control form-control-md"placeholder="Last name">
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="email" id="-2" class="form-control form-control-md" name="email"
                                placeholder="Email adress or phone number" />
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" id="-2" class="form-control form-control-md" name="designation"
                                placeholder="Designation" />
                        </div>

                        <div class="form-outline mb-4">
                           <div class="col">
                           <input type="password" id="-2" class="form-control form-control-md mb-4" name="password"
                                placeholder="Password" />
                           </div>
                           <div class="col">
                           <input type="password" id="-2" class="form-control form-control-md mb-4"
                                placeholder="confirm password" />
                           </div>
                        </div>


                        <button class="btn btn-primary btn-lg w-100 mb-2" type="submit">Sign up</button>
                        <span class=""><a href="<?=base_url()?>usersController/login" class="text-decoration-none ">Already have an account</a></span>
                        <?= form_close()?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>