<style>
    #newStdFee a {
        color: black;
        text-decoration: none;
    }

    #table-container {
        overflow-x: auto;
    }

    @media print {
        * {
            visibility: hidden;
        }

        #tableAction,
        #serialNumber {
            display: none;
        }

        #table-container * {
            visibility: visible;
        }

        #table-container {
            position: absolute;
            left: 0;
            top: 0;
        }
    }

    @media induvidualDetailsPrint{
        *{
            visibility:hidden;
        }
        .model{
            visibility:visible;
        }
    }
</style>
<?php
include('layout/structure.php');
?>
<!-- Modal -->
<?= form_open('/FeeManController/studenntFeeDueFilter') ?>
<div class="modal fade align-center" id="filterModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="row p-2">
                <div class="col-10">
                    <h5 class="text-center">Filters</h5>
                </div>
                <div class="col-2 d-flex justify-content-end ">
                    <button type="button" class="btn btn-danger btn-close" data-dismiss="modal" aria-label=""></button>
                </div>
            </div>
            <div class="modal-body px-5">
                <div class="row mb-2">
                    <div class="col-6">
                        <input type="text" name="yearOfAdmission" class="form-control form-control-sm"
                            placeholder="Year of admission" id="">
                    </div>
                    <div class="col-6">
                        <input type="text" name="accadamicYear" class="form-control form-control-sm"
                            placeholder="Accadamic year" id="">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-6">
                        <select name="programFilterData" aria-controls="dataTable"
                            class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="">Programme</option>
                            <option value="bca">Bca</option>
                            <option value="bba">Bba</option>
                            <option value="b.com">B.com</option>
                            <option value="bsc">Bsc</option>
                            <option value="msc">Msc</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <select name="statusFilterData" aria-controls="dataTable"
                            class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="">Status</option>
                            <option value="1">Paid</option>
                            <option value="0">Due</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Find">
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>

<div class="col" id="fee-view-dash">
    <div id="filter">
        <div class="row">
            <div class="col">
                <h3>Student Fee Details</h3>
            </div>
        </div>
        <br>
        <div id="newStdFee" class="my-3">
            <a href="<?= base_url(); ?>FeeManController/studentFeeAdd">
                <span class="mx-1">Add New Student</span><i class="bi bi-plus-circle"></i>
            </a>
        </div>
        <div class="row mb-3">
            <div class="col-sm-12 col-md-6 col-lg-2">
                <div class="dataTables_length" id="dataTable_filter">
                    <select name="dataTable_lenth" aria-controls="dataTable"
                        class="custom-select custom-select-sm form-control form-control-sm" id="filterProgram">
                        <option value="">Programme</option>
                        <option value="bca">Bca</option>
                        <option value="bba">Bba</option>
                        <option value="b.com">B.com</option>
                        <option value="bsc">Bsc</option>
                        <option value="msc">Msc</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <div class="dataTables_length" id="dataTable_filter">
                    <input type="search" class="form-control form-control-sm" name="" id="filterAccadamicYear"
                        placeholder="Acadamic year">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <div class="dataTables_filter" id="dataTable_filter">
                    <input type="search" class="form-control form-control-sm" placeholder="Admission Number"
                        id="filterAdmissionNumber">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <button class="btn">
                    <i class="bi bi-filter" data-toggle="modal" data-target="#filterModal"></i>
                </button>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2">
                <button type="button" onclick="window.print();">Print</button>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2"></div>
        </div>
    </div>
    <div class="row">
        <div class="container " id="table-container">
            <div class="row  ">
                <table class="table table-striped" id="table-cont">
                    <thead>
                        <tr>
                            <th id="serialNumber">Sl NO</th>
                            <th>Adm No</th>
                            <th>Name of student</th>
                            <th>Programme</th>
                            <th>Year of admission</th>
                            <th>Accadamic year</th>
                            <th>Total amount</th>
                         <!--   <th>Paid amount</th> -->
                            <th id="tableAction">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($stdinfo)): ?>
                            <?php $i = 0; ?>
                            <?php foreach ($stdinfo as $stdinfo): ?>
                                <?php $i++; ?>
                                <!-- studentFeeDetailsModal -->
                                <div class="modal fade aligin-center" id="studentFeeDetailsModal<?= $i ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="row p-2">
                                                <div class="col-10">
                                                    <h5 class="text-center">Fee Details</h5>
                                                </div>
                                                <div class="col-2 d-flex justify-content-end ">
                                                    <button type="button" class="btn btn-danger btn-close"
                                                        data-dismiss="modal"></button>
                                                </div>
                                            </div>
                                            <div class="modal-body px-4">
                                                <div class="row">
                                                    <div class="col">Name :</div>
                                                    <div class="col">
                                                        <?= $stdinfo->student_name ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">Admission No :</div>
                                                    <div class="col">
                                                        <?= $stdinfo->admissionNO?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">Programme :</div>
                                                    <div class="col">
                                                        <?= $stdinfo->program ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">Year Of admission :</div>
                                                    <div class="col">
                                                        <?= $stdinfo->yearOfAdmission ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col"> Accadamic year :</div>
                                                    <div class="col">
                                                        <?= $stdinfo->feeAllocationYear ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <hr>
                                                    <div class="col-3">
                                                        <span>Fees</span>                                                  
                                                    </div>
                                                    <div class="col-3"><span>Amount</span></div>
                                                    <div class="col-3"><span>Due date</span></div>
                                                    <div class="col-3"><span>Paid date</span></div>

                                                </div>
                                                <div class="row">
                                                    <hr><!-- removed th ? symbol becouse when i use the due filter it throwing an error-->
                                                    <div class="col-3"><span> <php print_r($stdinfo->fee_head);?></span></div>
                                                    <div class="col-3"><span> <php print_r($stdinfo->Amount);?></span></div>
                                                    <div class="col-3"><span> <php print_r($stdinfo->dueDate);?></span></div>
                                                    <div class="col-3"><span> <php print_r($stdinfo->paidDate);?></span></div>
                                                </div>
                                               
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" onclick="induvidualDetailsPrint()">Print</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- studentFeeDetailsModal end -->
                                <tr>
                                    <td id="serialNumber">
                                        <?= $i ?>
                                    </td>
                                    <td>
                                        <?= $stdinfo->admissionNO?>
                                    </td>
                                    <td>
                                        <?= $stdinfo->student_name ?>
                                    </td>
                                    <td>
                                        <?= $stdinfo->program ?>
                                    </td>
                                    <td>
                                        <?= $stdinfo->yearOfAdmission ?>
                                    </td>
                                    <td>
                                        <?= $stdinfo->feeAllocationYear ?>
                                    </td>
                                    <td>
                                        <?= $stdinfo->total_amount ?>
                                    </td>
                                    <!--<td><?= "paid amount"?></td>-->
                                    <td id="tableAction">
                                        <a href="<?= base_url() ?>feemanController/stdFeeBill/<?= $stdinfo->admissionNO ?>">
                                            <button type="button" class="btn btn-primary" id="f-bill-pay-btn"><i
                                                    class="bi bi-credit-card-2-back-fill"></i></button></a>
                                        <!--  <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal"
                                    data-bs-target="#s-bill-add">Bill</button>
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#studentFeeDetailsModal<?= "$ i" ?>"><i class="bi bi-eye"></i></button>-->
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <div class="mx-2 alert alert-warning d-flex justify-content-start">
                        <h3><b>Sorry no record found!...</b></h3>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {

        $('#filterProgram').on('change', function () {
            //filter using the accadamic year value value
            var selectedProgramme = $(this).val();
            // alert(selectedProgramme);
            $('tbody tr').each(function () {
                var programme = $(this).find('td:nth-child(4)').text().toLowerCase();
                if (programme.includes(selectedProgramme)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }

            });
        });

        $('#filterAccadamicYear').on('input', function () {
            var accadamicYear = $(this).val();
            $('tbody tr').each(function () {
                var newaccadamicYear = $(this).find('td:nth-child(6)').text();
                if (newaccadamicYear.includes(accadamicYear)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });

        $('#filterAdmissionNumber').on('input', function () {
            var addmissionNumber = $(this).val();
            $('tbody tr').each(function () {
                var newAddmissionNumber = $(this).find('td:nth-child(2)').text();
                if (newAddmissionNumber.includes(addmissionNumber)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });

    });

    function induvidualDetailsPrint() {
       window.print();
    }
</script>