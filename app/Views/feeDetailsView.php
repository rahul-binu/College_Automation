
<style>
    #new-fee a {
        color: black;
        text-decoration: none;
    }

    #table-cont {
        overflow-x: auto;
        margin-right: 0%;
    }

    @media print {

        #filter,
        #table-action-buttons {
            visibility: hidden;
            display: none;
        }

        #buttons {
            display: none;
        }


        #table-container {
            visibility: visible;
            margin-top: 0;
        }
    }
</style>
<!--fee view modal-->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            dxfcgh
        </div>
    </div>
</div>



<!--modal end-->
<!--start  -->
<div id="feeDetailsView">
    <div>
        <div id="filter">
            <div class="row">
                <div class="col">
                    <h3>Fee Details</h3>
                </div>
            </div>
            <br>
            <div id="new-fee" class="mb-4">
                <a href="<?= base_url() ?>FeeOps">
                    <span class="mx-1">Add New Fee</span><i class="bi bi-plus-circle"></i>
                </a>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12 col-md-6 col-lg-2">
                    <div class="dataTables_length" id="dataTable_filter">
                        <select name="Selcected-programme" aria-controls="dataTable" id="Programme"
                            class=" form-control form-control-sm">
                            <option value="">Course</option>
                            <option value="bca">Bca</option>
                            <option value="bba">Bba</option>
                            <option value="b.com">B.com</option>
                            <option value="bsc">Bsc</option>
                            <option value="msc">Msc</option>
                        </select>
                    </div>
                </div>
                <!-- <div class="col-sm-12 col-md-6 col-lg-2">
                    <div class="" id="dataTable_filter">
                        <select name="dataTable_lenth" aria-controls="dataTable" id=""
                            class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="all">Collection Type</option>
                            <option value="Bca">Yearly</option>
                            <option value="Bba">Monthly</option>
                            <option value="B.com">Quatarly</option>
                        </select>
                    </div>
                </div> -->
                <div class="col-sm-12 col-md-6 col-lg-3"></div>
                <div class="col-sm-12 col-md-6 col-lg-2">
                    <div class="" id="dataTable_filter">
                        <input type="search" class="form-control form-control-sm" placeholder="Accadamic year"
                            aria-controls="dataTable" id="accadamicYear">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="" id="dataTable_filter">
                        <input type="search" class="form-control form-control-sm" placeholder="Fee Head"
                            aria-controls="dataTable" id="fee_head">
                    </div>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-secondary" onclick="print()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-floppy" viewBox="0 0 16 16">
                            <path d="M11 2H9v3h2z" />
                            <path
                                d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z" />
                        </svg></button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container" id="table-container">
                <div class="row" id="table-cont">
                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>Slno</th>
                                <th>Fee Group</th>
                                <th>Fee Head</th>
                                <th>Programme</th>
                                <th>Year of admission</th>
                                <th>Accadamic Year</th>
                                <th>Collection Type</th>
                                <th>Total payable amount</th>
                                <th id="table-action-buttons">Status</th>
                                <th id="table-action-buttons">Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($fees)): ?>
                                <?php //print_r($fees); ?>
                                <?php $i = 1; ?>
                                <?php foreach ($fees as $fee): ?>
                                    <?php
                                    $status = ($fee->status == 1) ? '0' : '1';
                                    $button = ($fee->status == 1) ? 'btn-success' : 'btn-danger';
                                    $ConvertedDtatus = ($fee->status == 1) ? 'Active' : 'Inactive';
                                    $statusModalData = ($fee->status == 1) ? 'Inactive' : 'Active';
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $i ?>
                                        </td>
                                        <td>
                                            <?= $fee->fee_group ?>
                                        </td>
                                        <td>
                                            <?= $fee->fee_head ?>
                                        </td>
                                        <td>
                                            <?= $fee->programme ?>
                                        </td>
                                        <td>
                                            <?= $fee->yearOfAdmission ?>
                                        </td>
                                        <td>
                                            <?= $fee->accadamicYear ?>
                                        </td>
                                        <td>
                                            <?= $fee->collectionType ?>
                                        </td>
                                        <td>
                                            <?= $fee->totalAmount ?>
                                        </td>
                                        <td id="table-action-buttons">
                                            <button class="btn <?= $button ?>" data-toggle="modal"
                                                data-target="#statusModal<?= $i ?>">
                                                <?= $ConvertedDtatus ?>
                                            </button>

                                            <div class="modal fade align-center modal-sm " id="statusModal<?= $i ?>">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content ">
                                                        <div class="modal-body">
                                                            <p class="text-center ">Do you want to change status to
                                                                <?= $statusModalData, "?" ?>
                                                            </p>
                                                            <div class="row d-flex justify-content-center">
                                                                <div class="col-6 d-flex justify-content-center">
                                                                    <a
                                                                        href="<?= base_url() ?>feeOps/feeSetupStatusChange/<?= $status ?>/<?= $fee->fee_head ?>/<?= $fee->programme ?>">
                                                                        <button class="btn btn-success">
                                                                            <?= "Yes" ?>
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                                <div class="col-6 d-flex justify-content-center"><button
                                                                        data-dismiss="modal" class="btn btn-danger">No</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td id="table-action-buttons">
                                            <button class="btn btn-warning mb-2"><a
                                                    href="<?php base_url() ?>editFee/<?= $fee->SlNo ?>" class="text-light"><i
                                                        class="bi bi-pencil-square"></i></a></button>
                                            <button class="btn btn-primary" data-toggle="modal"
                                                data-target="#feeDetailsViewModal<?= $fee->SlNo ?>"><a class="text-light"><i
                                                        class="bi bi-eye"></i></a></button>
                                        </td>
                                        <?php $i++; ?>
                                        <td id="table-action-buttons">
                                            <!-- fee details modal start -->
                                            <div class="modal fade" tabindex="-1" role="dialog"
                                                id="feeDetailsViewModal<?= $fee->SlNo ?>" aria-hidden="true">
                                                <div class="modal-dialog modal-md">
                                                    <div class="modal-content p-3">

                                                        <div class="modal-header d-flex justify-content-center">
                                                            <h3 class="">Fee details</h3>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <table class="">
                                                                    <tbody class="m-4">
                                                                        <tr>
                                                                            <td> Fee group</td>
                                                                            <td>:</td>
                                                                            <td>
                                                                                <?= $fee->fee_group ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> Fee head</td>
                                                                            <td>:</td>
                                                                            <td>
                                                                                <?= $fee->fee_head ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> Programme</td>
                                                                            <td>:</td>
                                                                            <td>
                                                                                <?= $fee->programme ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> Year of admission</td>
                                                                            <td>:</td>
                                                                            <td>
                                                                                <?= $fee->yearOfAdmission ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> Accadamic year</td>
                                                                            <td>:</td>
                                                                            <td>
                                                                                <?= $fee->accadamicYear ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="px-3 py-2">
                                                                                <h5>Collection details</h5>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Total payable Amount</td>
                                                                            <td>:</td>
                                                                            <td>
                                                                                <?= $fee->totalAmount ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Collection Type </td>
                                                                            <td>:</td>
                                                                            <td>
                                                                                <?= $fee->collectionType ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="px-3 py-2">
                                                                                <h6>Collection remark</h6>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="row">

                                                                <?php

                                                                $collectionRemarks = explode(',', $fee->collectionRemark);
                                                                $applicableTill = explode(',', $fee->applicableTill);
                                                                $applicableFrom = explode(',', $fee->applicableFrom);

                                                                echo '<table class=" table table-striped table-hover">';
                                                                echo '<tr>';
                                                                echo '<th>Collection Remark</th>';
                                                                echo '<th>Amount</th>';
                                                                echo '<th>Applicable From</th>';
                                                                echo '<th>Applicable Till</th>';
                                                                echo '</tr>';

                                                                foreach ($collectionRemarks as $index => $value) {
                                                                    $parts = explode(':', $value);

                                                                    // Check if both parts is there before checking them
                                                                    $amount = isset($parts[1]) ? $parts[1] : '';
                                                                    $applicableFromParts = explode(':', $applicableFrom[$index]);
                                                                    $applicableTillParts = explode(':', $applicableTill[$index]);

                                                                    // get the second part of applicable from and till otherwise appending null
                                                                    $applicableFromValue = isset($applicableFromParts[1]) ? $applicableFromParts[1] : '';
                                                                    $applicableTillValue = isset($applicableTillParts[1]) ? $applicableTillParts[1] : '';

                                                                    echo '<tr>';
                                                                    echo '<td>' . $parts[0] . '</td>';
                                                                    echo '<td>' . $amount . '</td>';
                                                                    echo '<td>' . $applicableFromValue . '</td>';
                                                                    echo '<td>' . $applicableTillValue . '</td>';
                                                                    echo '</tr>';
                                                                }

                                                                echo '</table>';

                                                                ?>

                                                            </div>

                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- fee details modal end -->
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
</div>
<!-- end -->


<script>
    $(document).ready(function () {

        $('#fee_head').on('input', function () {
            //filter using the fee head value
            var inputText = $(this).val().toLowerCase();
            $('tbody tr').each(function () {
                var feeGroupText = $(this).find('td:nth-child(3)').text().toLowerCase();

                if (feeGroupText.includes(inputText)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });

        $('#accadamicYear').on('input', function () {
            var inputAccadamicYear = $(this).val();
            $('tbody tr').each(function () {
                var accadamicYear = $(this).find('td:nth-child(6)').text();

                if (accadamicYear.includes(inputAccadamicYear)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });

        $('#Programme').on('change', function () {
            //filter using the accadamic year value value
            var selectedProgramme = $(this).val();
            //alert(selectedProgramme);
            $('tbody tr').each(function () {
                var programme = $(this).find('td:nth-child(4)').text().toLowerCase();
                //console.log(programme);
                if (programme.includes(selectedProgramme)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }

            });
        });


    });
</script>
