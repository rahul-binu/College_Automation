<?php
include('structure.php');
?>

 <!--start  -->

 <div id="feeAdd">
    <div class="card mb-3">
        <div class="card-header">
            <h2>Student fee Add</h2>
        </div>
        <div class="card-body">
            <form action="">
                <div class="row mb-2">
                <div class="col-sm-12 col-md-6 col-lg-4 ">
                        <label for="yearOfAdmission"class="mx-4">01. Year of Admission<span> * </span>:</label>
                        <input type="text" class="form-control" name="yearOfAdmission" id="yearOfAdmission" aria-describedby=""
                            placeholder="Year of Admission">
                    </div><div class="col-sm-12 col-md-6 col-lg-4 ">
                        <label for="admissionNumber"class="mx-4">02. Admission Number<span> * </span>:</label>
                        <input type="text" class="form-control" name="admissionNumber" id="admissionNumber" aria-describedby=""
                            placeholder=" Admission Number">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 " id="">
                        <label for="programme"class="mx-4">02. Programme<span> * </span>:</label>
                        <select class="form-select form-select-md" name="programme" id="programme">
                            <option value="All">All</option>
                            <option value="Bca">Bca</option>
                            <option value="Bba">Bba</option>
                            <option value="B.Com">B.Com</option>
                            <option value="Bsc">Bsc</option>
                            <option value="Msc">Msc</option>

                        </select>
                    </div>
                </div>

                <div class="row mb-2">
                <div class="col-sm-12 col-md-6 col-lg-6 ">
                <label for="firstName"class="mx-4">04. First Name<span> * </span>:</label>
                        <input type="text" class="form-control" name="firstName" id="firstName" aria-describedby=""
                            placeholder="First Name">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 ">
                        <label for="lastName"class="mx-4">0.5 Last Name<span> * </span>:</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" aria-describedby=""
                            placeholder=" Last Name">
                    </div>
                </div>
                <div class="card d-flex justify-content-center mb-2" >
                    <div class="card-head d-flex justify-content-center">
                        <h3>Fees</h3>
                    </div>
                    <table class="table table-responsive" >
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Apply</th>
                                <th scope="col">Fee Head</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>

                                    <input class="form-check-input" type="checkbox" value="">

                                </td>
                                <td>Tutuion Fee</td>
                                <td>1750 <span>RS/-</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>

                                    <input class="form-check-input" type="checkbox" value="">

                                </td>
                                <td>Maticulation Fee</td>
                                <td>150 <span>RS/-</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>

                                    <input class="form-check-input" type="checkbox" value="">

                                </td>
                                <td>Sports Fee</td>
                                <td>175 <span>RS/-</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>

                                    <input class="form-check-input" type="checkbox" value="">

                                </td>
                                <td>Practical Lab Fee</td>
                                <td>100 <span>RS/-</span></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                
                <!-- execption card-->

                <div class="card d-flex justify-content-center mb-2" id="exp-table-card">
                    <div class="card-head d-flex justify-content-center">
                        <h3>Execptions</h3>
                    </div>
                    <table class="table table-responsive" id="exp-table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Apply</th>
                                <th scope="col">Exception</th>
                                <th scope="col">Exception percentage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>

                                    <input class="form-check-input" type="checkbox" value="">

                                </td>
                                <td>OBC</td>
                                <td>10 %</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <input class="form-check-input" type="checkbox" value="" checked>
                                </td>
                                <td>Sc/St</td>
                                <td>7 %</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <input class="form-check-input" type="checkbox" value="">
                                </td>
                                <td>Minority</td>
                                <td>3 %</td>
                            </tr>
                            <tr>
                                <th>*</th>
                                <th>New</th>
                                <td>
                                    <input type="text" class="form-control" name="exception-t-input"
                                        id="exception-t-input" placeholder="Exp_1 : 10,Exp_2 : 12">
                                </td>
                                <td><p><sub>This data can be used for future operations</sub></p></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row mb-2">
                    <div class="col-12 text-end" id="sub-btn">
                        <input type="submit" class="btn btn-primary text-end">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

                 <!-- end --> 