<style>
    #studentANDFeeAmountTable {
        overflow-x: auto;
    }

    #studentPayableAmount {
        outline: none;
        border: 0;
        color: green;
    }

    .modal-body input {
        border: 0;
        outline: none;
    }

    #studentFeeTable tr input {
        outline: none;
        border: 0;
    }

    #modalDocument {
        /*align the model center/
        top: 50%;
        transform: translateY(-50%); */
    }
</style>

<?php
$year = null;
$Acdyear = null;
$yearOfAdmission = null;
if (isset($_POST['yearOfAdmission'])) {
    $year = $_POST['yearOfAdmission'];
    $Acdyear = $_POST['accadamicYear'];
}
?>
<div class="col" id="form-col">

    <!--form-->
    <div class="card mb-3">
        <div class="card-header d-flex justify-content-center">
            <div class="row">
                <div class="col">
                    <h2>Fee allocation</h2>
                </div>
            </div>
        </div>
        <div class="card-body">
            <?= form_open(); ?>
            <div class="row mb-2">
                <div class="col-sm-12 col-md-4 col-lg-3 ">
                    <label for="yearOfAdmission" class="px-2">01. Year of Admission<span> * </span>:</label>
                    <input type="text" class="form-control" name="yearOfAdmission" id="yearOfAdmission"
                        aria-describedby="" placeholder="Year of Admission" value="<?= $year ?>">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 ">
                    <label for="accadamicYear" class="px-2">02. Accadamic Year<span> * </span>:</label>
                    <input type="text" class="form-control" name="accadamicYear" id="accadamicYear" aria-describedby=""
                        placeholder="00-00" value="<?= $Acdyear ?>">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 ">
                    <label for="studentProgram" class="px-2">03. Programme<span> * </span>:</label>
                    <div class="studentProgram">
                        <select name="studentProgram" aria-controls="studentProgram"
                            class="custom-select custom-select-sm form-control form-control-md">
                            <option value="">Programme</option>
                            <option value="Bca">Bca</option>
                            <option value="Bba">Bba</option>
                            <option value="B.com">B.com</option>
                            <option value="Bsc">Bsc</option>
                            <option value="Msc">Msc</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-2 col-lg-2 ">
                    <br>
                    <input type="submit" class="btn btn-primary" value="Find students">
                </div>
                <div class="col-sm-12 col-md-2 col-lg-1 ">
                    <br>
                    <input type="reset" value="Reset" class="btn btn-warning" name="findStudents">
                </div>

            </div>
            <?= form_close(); ?>
            <hr>
            <div class="row mb-2">
                <?php if (!empty($data)): ?>
                    <div>
                        <div id="studentANDFeeAmountTable">
                            <?= form_open(); ?>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th><input type="checkbox" class="" id="selectAll"></th>
                                        <th>Ad No</th>
                                        <th>Name of student</th>
                                        <th>Total amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="studentFeeTable">
                                    <?php $i = 1; ?>

                                    <?php foreach ($data['students'] as $student): ?>
                                        <?php
                                        $totalValue = 0; //  total amount for each student
                                        $studentFees = []; // An array of fees for the current student
                                        ?>
                                        <?php // Retrieve fees associated with this student
                                                foreach ($data['fees'] as $fee) {

                                                    $totalValue += $fee->totalAmount;
                                                    $studentFees[] = $fee;
                                                }
                                                ?>
                                        <tr>
                                            <td>
                                                <?= $i++; ?>
                                            </td>
                                            <?php
                                            for ($j = 0; $j < count($data['existingStudents']); $j++) {
                                                $existingStd = $data['existingStudents'][$j]->admissionNo;
                                                $thisStudent = $student->admission_no;
                                                if ($existingStd == $thisStudent) {
                                                    echo "aler";
                                                    $textColor = "text-success";
                                                    $checkBoxStatus = "display:none";
                                                    break;

                                                } else {
                                                    echo "  no";
                                                    $textColor = "";
                                                    $checkBoxStatus = "";
                                                }
                                            }
                                            ?>
                                            <td>
                                                <input type="checkbox" name="admissionNo[]"
                                                    value="<?= $student->admission_no ?>" class="check-input"
                                                    style="<?= $checkBoxStatus ?>">
                                            </td>
                                            <td>
                                                <input type="text" id="" value="<?= $student->admission_no ?>" readonly>
                                            </td>
                                            <td>
                                                <input type="text" value="<?= $fee->accadamicYear ?>"
                                                    name="studentAccadamicYear" style="display:none;">
                                                <input type="text" class="<?= $textColor ?>" name="studentName[]" value="<?= $student->student_name ?>"
                                                    readonly >
                                            </td>
                                            <td>
                                                <input type="text" id="studentPayableAmount" name="studentPayableAmount[]"
                                                    value="<?= $totalValue ?>" readonly>
                                            </td>
                                            <td>
                                                <!-- model button -->
                                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#feeSetModal<?= $student->admission_no ?>">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                            </td>

                                            <!-- Fees data for this student -->

                                            <!-- Modal for editing fees -->
                                            <div class="modal fade" id="feeSetModal<?= $student->admission_no ?>" tabindex="-1"
                                                role="dialog" aria-labelledby="feEditModel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl" role="document" id="modalDocument">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title d-flex justify-content-center"
                                                                id="feEditModel">Edit fee</h5>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal"
                                                                aria-label="">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <h5>Transation Head</h5>
                                                                </div>
                                                                <div class="col-2">
                                                                    <h5>Payable Amount</h5>
                                                                </div>
                                                                <div class="col-2">
                                                                    <h5>Collection Type</h5>
                                                                </div>
                                                                <div class="col-2">
                                                                    <h5>Due Date</h5>
                                                                </div>
                                                                <div class="col-2">
                                                                    <h5>Amount</h5>
                                                                </div>
                                                            </div>
                                                            <!-- loop to display the fee -->
                                                            <!--change the text type into hidden-->
                                                            <input type="hidden" name="studentUniqeID[]" id=""
                                                                value="<?= $student->admission_no ?>">
                                                            <?php foreach ($studentFees as $fee): ?>
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        <input type="text" name="feeHead[]" id=""
                                                                            value="<?= $fee->fee_head ?>" readonlysize:6;>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <input type="text" name="feeAmount[]" id=""
                                                                            value="<?= $fee->totalAmount ?>" size:6;>
                                                                    </div>

                                                                    <div class="col-2">
                                                                        <?php
                                                                        $collectionRemarks = explode(',', $fee->applicableTill);

                                                                        foreach ($collectionRemarks as $value) {
                                                                            $parts = explode(':', $value);
                                                                            // Check if there is a second element
                                                                            if (isset($parts[1])) {
                                                                                ?>
                                                                                <input type="text" name="collectionRemark[]" id=""
                                                                                    value="<?php echo $parts[0]; ?>">
                                                                                <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </div>

                                                                    <div class="col-2">
                                                                        <?php
                                                                        $collectionRemarks = explode(',', $fee->applicableTill);

                                                                        foreach ($collectionRemarks as $value) {
                                                                            $parts = explode(':', $value);
                                                                            // Check if there is a second element
                                                                            if (isset($parts[1])) {
                                                                                ?>
                                                                                <input type="text" name="dueDate[]" id=""
                                                                                    value="<?php echo $parts[1]; ?>">
                                                                                <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </div>

                                                                    <div class="col-2">
                                                                        <?php
                                                                        $collectionRemarks = explode(',', $fee->collectionRemark);

                                                                        foreach ($collectionRemarks as $value) {
                                                                            $parts = explode(':', $value);
                                                                            // Check if there is a second element
                                                                            if (isset($parts[1])) {
                                                                                ?>
                                                                                <input type="text" name="collectionAmount[]" id=""
                                                                                    value="<?php echo $parts[1]; ?>">
                                                                                <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </div>

                                                                </div>
                                                            <?php endforeach; ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary"
                                                                data-dismiss="modal">Ok</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of modal for editing fees -->

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row mt-3">
                            <div class="col d-flex justify-content-end">
                                <input class="btn btn-success" type="submit" value="Save">
                            </div>
                        </div>
                        <?= form_close(); ?>

                    </div>
                <?php else: ?>
                    <div class="alert alert-warning">
                        <span>Please enter a valid input</span>
                    </div>
                <?php endif; ?>
            </div>

        </div>
        <!--submit button-->
    </div>
</div>

</div>


<script>
    //code for accrdiom
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }

    //code for the select all checkbox
    $(document).ready(function () {
        // Attach a click event handler to the "Select All" checkbox
        $('#selectAll').click(function () {
            // Set all checkboxes to the state of the "Select All" checkbox
            $('input[type="checkbox"]').prop('checked', $(this).prop('checked'));
        });
    });
</script>