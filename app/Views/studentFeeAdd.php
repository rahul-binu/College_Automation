<style>
    .accordion {
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
    }

    .active,
    .accordion:hover {
        background-color: #ccc;
    }

    .feePanel {
        padding: 0 18px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }

    #accrodionSpans {
        margin-left: 3em;
    }

    /*remvoe accrodion*/

    #studentANDFeeAmountTable {
        overflow-x: auto;
    }

    #studentPayableAmount {
        outline: none;
        border: 0;
        color: green;
    }

    #studentFeeTable tr input {
        outline: none;
        border: 0;
    }

    #modalDocument {
       /*align the model center*/
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
                        placeholder="2010-11" value="<?= $Acdyear ?>">
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
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Assingn</th>
                                        <th>Admnission number</th>
                                        <th>Name</th>
                                        <th>Total amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <?php $i = 1;
                                $totalValue = 0; ?>

                                <?php foreach ($data['fees'] as $fee): ?>
                                    <?php $totalValue = $totalValue + $fee->totalAmount ?>
                                <?php endforeach; ?>

                                <tbody id="studentFeeTable">
                                    <?php foreach ($data['students'] as $student): ?>
                                        <tr>
                                            <td>
                                                <?= $i++ ?>
                                            </td>
                                            <td><input type="checkbox" name="admissionNo[]" value="<?= $student->admissionNo ?>"class="checkbox"></td>
                                            <td><input type="text" id="" value="<?= $student->admissionNo ?>" readonly></td>
                                            <td><input type="text" id="" name="studentName[]" value=" <?= $student->name ?>"readonly></td>
                                            <td><input type="text" id="studentPayableAmount" name="studentPayableAmount[]"
                                                    value="<?= $totalValue ?>" readonly></td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#feeSetModal">
                                                    <i class="bi bi-pencil"></i>
                                                </button>

                                            </td>
                                            <!--Fee data fetch-->
                                            <td>

                                            <td>
                                                <table>
                                                    <thead>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="feeSetModal" tabindex="-1" role="dialog"
                                                            aria-labelledby="feEditModel" aria-hidden="true">
                                                            <div class="modal-dialog modal-xl" role="document"id="modalDocument">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title d-flex justify-content-center"
                                                                            id="feEditModel">Edit fee</h5>
                                                                        <button type="button" class="close" data-dismiss="modal"
                                                                            aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <?php foreach ($data['fees'] as $fee): ?>
                                                                            <div class="row">
                                                                                <div class="col-4">
                                                                                    <input type="text" name="feeHead[]" id=""value="<?= $fee->fee_head ?>" readonly>
                                                                                </div>
                                                                                <div class="col-4">
                                                                                    <input type="text" name="feeAmount[]" id=""value="<?= $fee->totalAmount ?>">
                                                                                </div>
                                                                                <div class="col-4">
                                                                                    <input type="text" name="applicableTill[]" id=""value="<?= $fee->applicableTill ?>">
                                                                                </div>
                                                                            </div>
                                                                        <?php endforeach; ?>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Ok</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--model end-->
                                                    </tbody>
                                                </table>

                                            </td>
                                            <!--Fee data fetch-->
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
            var feePanel = this.nextElementSibling;
            if (feePanel.style.maxHeight) {
                feePanel.style.maxHeight = null;
            } else {
                feePanel.style.maxHeight = feePanel.scrollHeight + "px";
            }
        });
    }
    //   //code for calculate the total amount when the while the check boxes click
    //   const checkboxes = document.querySelectorAll('.checkbox');
    //   const totalInput = document.getElementById('studentPayableAmount');
    //   //trying to add multipme total amount ionput boxes
    //   //  totalInput.forEach(input);
    //   //  console.log.(totalInput);
    //
    //
    //   checkboxes.forEach(checkbox => {
    //       checkbox.addEventListener('change', updateTotal);
    //   });
    //
    //   function updateTotal() {
    //       let total = 0;
    //       checkboxes.forEach(checkbox => {
    //           if (checkbox.checked) {
    //               total += parseInt(checkbox.value);
    //           }
    //       });
    //       totalInput.value = total;
    //       console.log(total);
    //   }
</script>