<section id="theam">
    <?php echo view('/layout/structure'); ?>
</section>
<style>
    #s-f-dash {
        padding-top: 2em;
        margin-right: 1em;
    }

    #s-f-card {
        padding-right: 3em;
        margin-left:4.5em;
        box-shadow: 0 0 4px 2px rgb(151, 155, 188);
    }

    input {
        vertical-align: middle;
        border: 0;
        outline: 0;
        background: transparent;
        border-bottom: 0px solid grey;
    }


    #fee-table {
        margin-top: 1.5em;
        text-align: center;
        overflow-x: auto;
    }


    #grand-total-dash {
        padding-top: 3em;
    }


    #bill-pay-btn i {
        font-size: 18px;
    }

    @media print {
        #topNonPrint, #theam, #bill-pay-btn {
            display: none;
        }

        #nprintSection {
            visibility: visible !important;
        }
    }
</style>

<?php if (!empty($fees)): ?>
    <?php
    foreach ($fees['fees'] as $fee)
        ; foreach ($fees['student'] as $student)
        ;
    ?>

    <div class="row" id="s-f-dash">

        <?= form_open('StudentFeeOps/billPayment') ?>
        <div class="card p-3" id="s-f-card">
            <div class="row mb-3" id="topNonPrint">
                <div class="col-6">
                    <table>
                        <tr>
                            <td class="px-3"><label for="bill-id">Bill Id : </label></td>
                            <td><span><input type="text" name="billId" id="" value="" required> </span></td>
                        </tr>
                    </table>
                </div>
                <div class="col-4">
                    <table>
                        <tr>
                            <td><label for="date">Date : </label></td>
                            <td class="px-3"><input type="date" id="date" name="billDate" required></td>
                        </tr>
                    </table>
                </div>
                <div class="col-2 text-end">
                    <button type="button" class="btn btn-secondary" onclick="print()">print</button>
                </div>
            </div>
            <section id="printSection">

                <!-- Other rows and input fields ... -->
                <div class="row mb-2">
                    <div class="col-2">
                        <span>Student name :</span>
                    </div>
                    <div class="col-2">
                        <input type="text" placeholder="Stdent name" id="sname" name="name" value="<?= $student->student_name ?>">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-2">
                        <span>Year of admission :</span>
                    </div>
                    <div class="col-2">
                        <span> <input type="text" value="<?= $student->yearOfAdmission ?>"></span>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-2">
                        <span>Admission Number :</span>
                    </div>
                    <div class="col-2">
                        <span><input type="text" placeholder="000" id="admno" name="admissionNo"
                                value="<?= $student->admission_no ?>"> </span>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-2">
                        <span>Programme :</span>
                    </div>
                    <div class="col-2">
                        <span><input type="text" name="program" id="" value="<?= $student->program ?>"></span>
                    </div>
                </div>


                <div class="row  d-flex justify-content-center" id="fee-table">
                    <div class="col-12">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Apply</th>
                                    <th>Fee </th>
                                    <th>Exception</th>
                                    <th>Payable amount</th>
                                    <th>Due date</th>
                                    <th>Paid date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($fees)): ?>
                                    <?php $i = 0; ?>
                                    <?php foreach ($fees['fees'] as $items): ?>
                                        <tr>
                                            <?php $i++;
                                            //$status = ($items->paidDate == '0000-00-00') ? "Unpaid" : "Paid";
                                            if ($items->paidDate != '0000-00-00') {
                                                $status = "Paid";
                                                $textClass = "success";
                                            } else if ($items->dueDate > date("Y-m-d")) {
                                                $status = "--";
                                                $textClass = "warning";
                                            } else {
                                                $status = "Due";
                                                $textClass = "danger";
                                            }
                                            $checkBoxType = ($items->paidDate == '0000-00-00') ? "" : "disabled";
                                            ?>
                                            <td>
                                                <?= $i ?>
                                            </td>
                                            <td><input class="form-check-input" type="checkbox" value="<?= $items->SFRID ?>"
                                                    name="feecheCkbox[]" <?= $checkBoxType ?>></td>
                                            <td>
                                                <?= $items->fee_head ?>
                                            </td>
                                            <td>nah</td>
                                            <td><input type="text" value="<?= $items->Amount ?>" id="" placeholder=""></td>
                                            <td>
                                                <?= $items->dueDate ?>
                                            </td>
                                            <td>
                                                <?= $items->paidDate ?>
                                            </td>
                                            <td class="text-<?= $textClass ?>">
                                                <?= $status ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="9">Opps something went wrong!...</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!-- Other rows and input fields ... -->

            <div class="row" id="grand-total-dash">
                <div class="col">
                    <table>
                        <tr>
                            <!-- <td><label for="grand-total">Grand Total : </label></td>
                            <td><input type="text" value="00000" id="grand-total"><span class="bg-red">RS/-</span></td>
                        </tr>-->
                    </table>
                </div>
            </div>
            <div class="row " id="bill-pay-btn">
                <div class="col d-flex justify-content-end">
                    <input type="submit" class="btn btn-primary" id="bill-pay-btn">
                </div>
            </div>
        </div>
        <?= form_close() ?>

    </div>
<?php else: ?>
    <div class="row">
        <div class="col-12 alert alert-danger">
            <span>
                <h3>Opps somthing went wrong!...</h3>
            </span>
        </div>
    </div>
<?php endif; ?>