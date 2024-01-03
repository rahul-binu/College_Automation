<!-- Fee alocation using jquery and ajax bulk insertion -->
<?php include('layout/structure.php'); ?>
<?php
$year = null;
$Acdyear = null;
$yearOfAdmission = null;
$programe = "Select--";
if (isset($_POST['yearOfAdmission'])) {
    $year = $_POST['yearOfAdmission'];
    $Acdyear = $_POST['accadamicYear'];
    $programe = $_POST['studentProgram'];
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

            <div class="row mb-2">
                <div class="col-sm-12 col-md-4 col-lg-3 ">
                    <label for="yearOfAdmission" class="px-2">01. Year of Admission<span> * </span>:</label>
                    <input type="text" class="form-control" id="yearOfAdmission" aria-describedby=""
                        placeholder="Year of Admission">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 ">
                    <label for="accadamicYear" class="px-2">02. Accadamic Year<span> * </span>:</label>
                    <input type="text" class="form-control" name="accadamicYear" id="accadamicYear" aria-describedby=""
                        placeholder="2010-11">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 ">
                    <label for="studentProgram" class="px-2">03. Programme<span> * </span>:</label>
                    <div class="studentProgram">
                        <select name="studentProgram" aria-controls="studentProgram" id="program"
                            class="custom-select custom-select-sm form-control form-control-md">
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

            <hr>

            <div class="row mb-2">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th><input type="checkbox" name="" id=""></th>
                            <th>AdmNo</th>
                            <th>Name</th>
                            <th>Total amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<script>
    $(document).on('click', '#findStudents', function () {
        //function to display the student and fee data
        $('.tbody').html("");
        var yearOfAdmission = $('#yearOfAdmission').val();
        var accadamicYear = $('#accadamicYear').val();
        var program = $('#program').val();
        var filterConditions = {
            'yearOfAdmission': $('#yearOfAdmission').val(),
            'accadamicYear': $('#accadamicYear').val(),
            'program': $('#program').val()
        };
        console.log(filterConditions);
        $.ajax({
            method: 'POST',
            url: 'StudentFeeAlloController/studentFeeAllocationFilter',
            data: filterConditions,
            success: function (response) {
                console.log(response);
                $.each(response.items, function (key, value) {
                    var slNo = 0;
                    if (key === 'students') {

                        //students data
                        $.each(value, function (index, student) {
                            slNo++;
                            $('.tbody').append(
                                '<tr>\
                                <td>'+ slNo + '</td>\
                                <td> <input type="checkbox" > </td>\
                                <td>'+ student.admissionNo + '</td>\
                                <td>' + student.name + ' </td>\
                                <td> </td>\
                                <td> <button class="btn " id="modalPopBtn'+ slNo + '"> hai </button> </td>\
                                <!-- model start-->\
<div class="modal fade" id="modalPopBtn'+ slNo + '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">\
    <div class="modal-dialog modal-lg">\
        <div class="modal-content p-2">\
            <div class="row">\
                <div class="col-1">#</div>\
                <div class="col-4">Fee Head</div>\
                <div class="col-3">Amount</div>\
                <div class="col-4">Due date</div>\
            </div>\
            <div class="row">\
                <div class="col-1">\
                    #\
                </div>\
                <div class="col-4">\
                    <input type="text" name="" id="" value="fee Head">\
                </div>\
                <div class="col-3">\
                    <input type="text" name="" id="" value="Amount">\
                </div>\
                <div class="col-4">\
                    <input type="text" name="" id="">\
                </div>\
            </div>\
            <div class="modal-footer">\
            <button type="button" class="btn btn-primary feeMasterUpdateButton" data-dismiss="modal"\
                    aria-label="Close">Update</button>\
            </div>\
        </div>\
    </div>\
</div>\
<!-- model end-->\
                                </tr>'
                            );
                            $(document).on('click', '#modalPopBtn', function () {
        $('#myModal').modal('show');
    });
                            console.log("Admission No:", student.admissionNo);
                            console.log("Name:", student.name);
                            console.log("Programme:", student.programme);
                            console.log("Year Of Admission:", student.yearOfAdmission);
                        });

                    } else if (key === 'fees') {

                        $.each(value, function (index, fee) {
                            console.log("Fee Head:", fee.fee_head);
                            console.log("Total Amount:", fee.totalAmount);
                            // console.log("applicableFrom", fee.applicableFrom);
                            //spliting applicableFrom
                            var dateComponents = fee.applicableFrom.split(',');
                            dateComponents.forEach(function (dateComponent) {
                                var parts = dateComponent.split(':');

                                // Extract month and date
                                var applicableFromMonth = parts[0];
                                var applicableToDate = parts[1];

                                console.log("Month:", applicableFromMonth);
                                console.log("Date:", applicableToDate);
                                console.log("------");
                            });

                            //  console.log("applicableTill", fee.applicableTill);
                            //spliting applicableTo
                            var applicableToDates = fee.applicableTill.split(',');
                            applicableToDates.forEach(function (applicableToDates) {
                                var parts = applicableToDates.split(':');

                                var applicableToMonth = parts[0];
                                var applicableToDate = parts[1];

                                console.log("Month:", applicableToMonth);
                                console.log("Date:", applicableToDate);
                                console.log("------");
                            });

                            //console.log("collectionRemark", fee.collectionRemark);
                            var collectionRemarks = fee.collectionRemark.split(',');
                            collectionRemarks.forEach(function (collectionRemark) {
                                var parts = collectionRemark.split(':');

                                var collectionRemarkMonth = parts[0];
                                var collectionRemarkAmount = parts[1];

                                console.log("Month:", collectionRemarkMonth);
                                console.log("amount:", collectionRemarkAmount);
                                console.log("------");
                            });
                            console.log("Accademic Year:", fee.accadamicYear);
                        });
                    }
                });

            }
        });

    });
    $(document).on('click', '#modalPopBtn', function () {
        $('#myModal').modal('show');
    });
</script>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>