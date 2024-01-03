<style>

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
        justify-content: center;
            align-items: center;
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
                       
   <?php form_open()?>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Assign</th>
                    <th>Admission number</th>
                    <th>Name</th>
                    <th>Total amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="studentFeeTable">
                <?php foreach ($data['students'] as $student): ?>
                    <tr>
                        <td><?= $student->admissionNo ?></td>
                        <td>
                            <input type="checkbox" name="admissionNo" value="<?= $student->admissionNo ?>">
                        </td>
                        <td><?= $student->admissionNo ?></td>
                        <td><?= $student->name ?></td>
                        <td>
                            <input type="text" class="studentPayableAmount" name="studentPayableAmount" value="" readonly>
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning edit-button" data-toggle="modal" data-target="#feeSetModal<?= $student->admissionNo ?>">
                                Edit
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


    <!-- Modal for editing fees -->
    <?php foreach ($data['students'] as $student): ?>
        <div class="modal fade" id="feeSetModal<?= $student->admissionNo ?>" tabindex="-1" role="dialog" aria-labelledby="feeEditModel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Fee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form to edit fees for the selected student -->
                        <form id="editFeeForm<?= $student->admissionNo ?>">
                            <!-- Hidden input to store the student's admission number -->
                            <input type="hidden" name="studentAdmissionNo" value="<?= $student->admissionNo ?>">
                            <!-- Fee details go here -->
                            <!-- For each fee, include input fields for editing -->
                            <div class="form-group">
                                <label for="feeHead">Fee Head:</label>
                                <input type="text" class="form-control" name="feeHead" required>
                            </div>
                            <div class="form-group">
                                <label for="feeAmount">Fee Amount:</label>
                                <input type="number" class="form-control" name="feeAmount" required>
                            </div>
                            <div class="form-group">
                                <label for="applicableTill">Applicable Till:</label>
                                <input type="date" class="form-control" name="applicableTill" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
     
    <?php endforeach; ?>
    <input class="btn btn-success" type="submit" value="Save">
        <?php form_close()?>
    <!-- Include jQuery and Bootstrap JavaScript libraries here -->
   

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
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            // Handle checkbox change event
            $('input[type="checkbox"]').on('change', function () {
                if (this.checked) {
                    var admissionNo = $(this).val();
                    // Open the corresponding modal
                    $('#feeSetModal' + admissionNo).modal('show');
                }
            });

            // Handle form submission for editing fees
            $('form[id^="editFeeForm"]').submit(function (e) {
                e.preventDefault();
                var form = $(this);
                var admissionNo = form.find('input[name="studentAdmissionNo"]').val();

                // Make an AJAX request to save fee data (you need to implement this on the server)
                $.ajax({
                    url: 'save_fee.php', // Replace with the actual URL for saving fees
                    method: 'POST',
                    data: form.serialize(),
                    success: function (data) {
                        // You can update the fee display in the table if needed
                        $('#studentFeeTable .studentPayableAmount').val(data.totalAmount);
                        // Close the modal
                        $('#feeSetModal' + admissionNo).modal('hide');
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>