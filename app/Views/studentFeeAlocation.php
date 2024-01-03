<?php echo view('layout/structure');
?>
<style>
    label {
        padding-left: 15px;
    }

    label span {
        color: red;
        font-size: 18;
    }
</style>


<div class="container-fluid">
    <div class="card">
        <div class="card-header text-center">
            <h3>Add fees</h3>
        </div>

        <div class="card-body">
            <?php
            // echo '<pre>';
            //  print_r($Data);
            ?>
            <div class="row mb-2">
                <div class="col-sm-12 col-md-4 col-lg-3 ">
                    <label for="yearOfAdmission" class="px-2">01. Year of Admission<span> * </span>:</label>
                    <input type="text" class="form-control form-control-sm" id="yearOfAdmission" aria-describedby=""
                        placeholder="Year of Admission">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 ">
                    <label for="accadamicYear" class="px-2">02. Accadamic Year<span> * </span>:</label>
                    <input type="text" class="form-control form-control-sm" name="accadamicYear" id="accadamicYear" aria-describedby=""
                        placeholder="2010-11">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 ">
                    <label for="studentProgram" class="px-2">03. Programme<span> * </span>:</label>
                    <div class="studentProgram">
                        <select name="studentProgram" aria-controls="studentProgram" id="program"
                            class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="">--Select--</option>
                            <option value="bca">Bca</option>
                            <option value="bba">Bba</option>
                            <option value="b.com">B.com</option>
                            <option value="bsc">Bsc</option>
                            <option value="bsc">Msc</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-2 col-lg-2 ">
                    <br>
                    <input type="submit" class="btn btn-primary" value="Find students" id="findStudents">
                </div>
                <div class="col-sm-12 col-md-2 col-lg-1 ">
                    <br>
                    <input type="reset" value="Reset" class="btn btn-warning" name="findStudents">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-12">
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th>Assign</th>
                                <th>Fee</th>
                                <th>Amount</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><input class="form-check-input" type="checkbox" value=""></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <input type="submit" value="Save" class="btn btn-primary mx-4">
                </div>
            </div>
        </div>

        <div class="alert alert-danger mx-3">
            <span>Opps somthing went terabily wrong...</span>
        </div>

    </div>

</div>