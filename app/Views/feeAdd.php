<style>
    label span {
        color: red;
        font-size: 20px;
    }

    .monthTable,
    #exceptionTable {
        overflow-x: auto;
    }

    #datePicker {
        max-width: 7dvw;
    }
</style>

<div class="container p-3">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col text-center">
                    <h3>Fee setup</h3>
                    <?php if (!empty($formInputData)): ?>
                        <?= print_r($formInputData); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="card-body">
            <?= form_open() ?>
            <div class="row mb-3">
                <div class="col-sm-12 col-md-6 col-lg-3 " id="">
                    <label for="fee_head" class="mx-4">01. Fee head<span> * </span>:</label>
                    <select class="form-select form-select-md" name="fee_head" id="fee_head">
                        <?php if (!empty($feeHead)): ?>
                            <option value="<?= $feeHead; ?>">
                                <?= $feeHead; ?>
                            </option>
                        <?php else: ?>
                            <option value="">Somthing went wrong</option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 " id="">
                    <label for="yearOfAsmission" class="mx-4">02. Year of Admission<span> * </span>:</label>
                    <input type="text" class="form-control " name="yearOfAsmission" id="yearOfAsmission"
                        placeholder="Year of Admission">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 " id="">
                    <label for="programme" class="mx-4">03. Programme<span> * </span>:</label>
                    <select class="form-select form-select-md" name="programme" id="programme">
                        <option value="All">All</option>
                        <option value="Bca">Bca</option>
                        <option value="Bba">Bba</option>
                        <option value="B.Com-1">B.Com-1</option>
                        <option value="B.Com-2">B.Com-2</option>
                        <option value="Bsc">Bsc</option>
                        <option value="Msc">Msc</option>

                    </select>
                </div>
                <!---->

                <!---->
                <div class="col-sm-12 col-md-12 col-lg-3 " id="">
                    <label for="academic_year" class="mx-4">04. Academic year<span> * </span>:</label>

                    <input type="text" name="accadamicYearStart" id="academic_year" class="form-control " value=""
                        placeholder="20-21">
                    <span></span>
                    <input type="text" name="accadamicYearEnd" id="academic_year" class="form-control-sm" value="20"
                        style="display:none;">

                </div>

            </div>
            <div class="row mb-3">

                <div class="col-sm-12 col-md-12 col-lg-6 " id="">
                    <label for="collectype" class="mx-4">05. Collection type<span> * </span>:</label>

                    <label for="yearly" class="px-4">Yearly</label>
                    <input type="radio" id="yearly" name="collectype" value="yearly" onclick="toggleYearSelect()">

                    <label for="halfYearly" class="px-4">Half Yearly</label>
                    <input type="radio" id="halfYearly" name="collectype" value="halfYearly"
                        onclick="togglehalfYearlySelect()">

                    <label for="monthly" class="px-4">Monthly</label>
                    <input type="radio" id="monthly" name="collectype" value="monthly" onclick="toggleMonthSelect()">
                </div>
            </div>
            <div class="row mb-3 " style="display: none;" id="monthSelectTable">
                <div class="col-lg-12 col-sm-12 col-md-12 text-end monthTable">
                    <table class="table table-bordered table-striped col-lg-12 text-start">
                        <thead class=" col-lg-12 col-sm-12 col-md-12 ">
                            <tr class="">
                                <td>Remark</td>
                                <td>Amount</td>
                                <td>Applicable from</td>
                                <td>Applicable till</td>
                                <td>Remark</td>
                                <td>Amount</td>
                                <td>Applicable from</td>
                                <td>Applicable till</td>
                                <td>Remark</td>
                                <td>Amount</td>
                                <td>Applicable from</td>
                                <td>Applicable till</td>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- changed the april inout box class 'input-class'  into null,and changed the script copyInputValues 0 to 1-->
                            <tr class="">
                                <!-- <td>April</td>
                                <td><input type="text" class=""size="6" placeholder="000" id="input3" name="apr"onkeyup="calculateTotalAmt()"></td>
                                <td><input type="date" name="aprApplicableFrom" id="datePicker" size="4" placeholder="dd/mm/yyyy"></td>
                                <td><input type="date" name="aprApplicableTill" id="datePicker" size="8" placeholder="dd/mm/yyy"></td>
                                <td>May</td>
                                <td><input type="text" class="input-box"size="6" placeholder="000" id="input2" name="may"
                                        onkeyup="calculateTotalAmt()"></td>
                                <td><input type="date" name="mayApplicableFrom" id="datePicker" size="8" placeholder="dd/mm/yyy"></td>
                                <td><input type="date" name="mayApplicableTill" id="datePicker" size="8" placeholder="dd/mm/yyy"></td>-->
                                <td>June</td>
                                <td><input type="text" class="input-box" size="6" placeholder="000" id="input1"
                                        name="jun" onkeyup="calculateTotalAmt()" oninput="copyInputValues()"></td>
                                <td> <input type="date" name="junApplicableFrom" id="datePicker" size="8"
                                        placeholder="dd/mm/yyyy" value="2023-06-01"></td>
                                <td><input type="date" name="junApplicableTill" id="datePicker" size="8"
                                        placeholder="dd/mm/yyy" value="2023-06-1"></td>
                                <td>July</td>
                                <td><input type="text" class="input-box" size="6" placeholder="000" id="input2"
                                        name="jul" onkeyup="calculateTotalAmt()"></td>
                                <td><input type="date" name="julApplicableFrom" id="datePicker" size="8"
                                        placeholder="dd/mm/yyy" value="2023-07-01"></td>
                                <td><input type="date" name="julApplicableTill" id="datePicker" size="8"
                                        placeholder="dd/mm/yyy" value="2023-07-01"></td>
                                <td>August</td>
                                <td><input type="text" class="input-box" size="6" placeholder="000" id="input3"
                                        name="aug" onkeyup="calculateTotalAmt()"></td>
                                <td><input type="date" name="augApplicableFrom" id="datePicker" size="8"
                                        placeholder="dd/mm/yyy" value="2023-08-01"></td>
                                <td><input type="date" name="augApplicableTill" id="datePicker" size="8"
                                        placeholder="dd/mm/yyy" value="2023-08-01"></td>
                            </tr>
                            <tr>

                                <td>September</td>
                                <td><input type="text" class="input-box" size="6" placeholder="000" id="input4"
                                        name="sep" onkeyup="calculateTotalAmt()"></td>
                                <td><input type="date" name="sepApplicableFrom" id="datePicker" size="8"
                                        placeholder="dd/mm/yyy" value="2023-09-01"></td>
                                <td><input type="date" name="sepApplicableTill" id="datePicker" size="8"
                                        placeholder="dd/mm/yyy" value="2023-09-01"></td>
                                <td>October</td>
                                <td><input type="text" class="input-box" size="6" placeholder="000" id="input5"
                                        name="oct" onkeyup="calculateTotalAmt()"></td>
                                <td><input type="date" name="octApplicableFrom" id="datePicker" size="8"
                                        placeholder="dd/mm/yyy" value="2023-10-01"></td>
                                <td><input type="date" name="octApplicableTill" id="datePicker" size="8"
                                        placeholder="dd/mm/yyy" value="2023-10-01"></td>

                                <td>November</td>
                                <td><input type="text" class="input-box" size="6" placeholder="000" id="input6"
                                        name="nov" onkeyup="calculateTotalAmt()"></td>
                                <td><input type="date" name="novApplicableFrom" id="datePicker" size="8"
                                        placeholder="dd/mm/yyy" value="2023-11-01"></td>
                                <td><input type="date" name="novApplicableTill" id="datePicker" size="8"
                                        placeholder="dd/mm/yyy" value="2023-11-01"></td>
                            </tr>
                            <tr>

                                <td>December</td>
                                <td><input type="text" class="input-box" size="6" placeholder="000" id="input7"
                                        name="dec" onkeyup="calculateTotalAmt()"></td>
                                <td><input type="date" name="decApplicableFrom" id="datePicker" size="8"
                                        placeholder="dd/mm/yyy" value="2023-12-01"></td>
                                <td><input type="date" name="decApplicableTill" id="datePicker" size="8"
                                        placeholder="dd/mm/yyy" value="2023-12-01"></td>
                                <td>January</td>
                                <td><input type="text" class="input-box" size="6" placeholder="000" id="input8"
                                        name="jan" onkeyup="calculateTotalAmt()"></td>
                                <td><input type="date" name="janApplicableFrom" id="datePicker" size="8"
                                        placeholder="dd/mm/yyy" value="2024-01-01"></td>
                                <td><input type="date" name="janApplicableTill" id="datePicker" size="8"
                                        placeholder="dd/mm/yyy" value="2024-01-01"></td>
                                <td>February</td>
                                <td><input type="text" class="input-box" size="6" placeholder="000" id="input9"
                                        name="feb" onkeyup="calculateTotalAmt()"></td>
                                <td><input type="date" name="febApplicableFrom" id="datePicker" size="8"
                                        placeholder="dd/mm/yyy" value="2024-02-01"></td>
                                <td><input type="date" name="febApplicableTill" id="datePicker" size="8"
                                        placeholder="dd/mm/yyy" value="2024-02-01"></td>
                            </tr>
                            <tr>
                                <td>Mar</td>
                                <td><input type="text" class="input-box" size="6" placeholder="000" id="input10"
                                        name="mar" onkeyup="calculateTotalAmt()"></td>
                                <td><input type="date" name="marApplicableFrom" id="datePicker" size="8"
                                        placeholder="dd/mm/yyy" value="2024-03-01"></td>
                                <td><input type="date" name="marApplicableTill" id="datePicker" size="8"
                                        placeholder="dd/mm/yyy" value="2024-03-01"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row mb-3 " style="display:none;" id="halfyearlySelectTable">
                <div class="col-lg-12 col-sm-3 col-md-6 text-end">
                    <table class="col text-center">
                        <thead class="col-lg-12 col-sm-3 col-md-6">
                            <tr class="">
                                <td>Remark</td>
                                <td>Amount</td>
                                <td>Applicable from</td>
                                <td>Applicable till</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td>First half</td>
                                <td><input type="text" size="6" id="input13" name="firstHalf"
                                        onkeyup="calculateTotalAmt2()" value="0"></td>
                                <td><input type="date" name="firstHalfApplicableFrom" id="" size="8"
                                        placeholder="dd/mm/yyy"></td>
                                <td><input type="date" name="firstHalfApplicableTill" id="" size="8"
                                        placeholder="dd/mm/yyy"></td>
                            </tr>
                            <tr>
                                <td>Second half</td>
                                <td><input type="text" size="6" id="input14" name="secondHalf"
                                        onkeyup="calculateTotalAmt2()" value="0"></td>
                                <td><input type="date" name="secondHalfApplicableFrom" id="" size="8"
                                        placeholder="dd/mm/yyy"></td>
                                <td><input type="date" name="seconHalfApplicableTill" id="" size="8"
                                        placeholder="dd/mm/yyy"></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php $rem = 'firstHalf+secondHalf';
                    ?>
                </div>
            </div>
            <div id="totalAmount" class="mt-3 mb-3" style="display: none;">
                <div class="row" id="totalAmtTable">

                    <div class="col-lg-2">
                        <label for="totalAmtID">Total payable amount <span> : </span></label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" id="totalAmtID" name="totalAmount">
                    </div>
                    <div class="col-lg-8" id="yearlyDueDate" style="display:none;">
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="applicable_from" class="mx-4"> Applicable from<span> *
                                    </span>:</label>
                            </div>
                            <div class="col-lg-3">
                                <input type="date" name="yearApplicableFrom" id="applicable_from"
                                    class="form-control-sm" placeholder="dd/mm/yyyy">
                            </div>
                            <div class="col-lg-3">
                                <label for="applicable_till" class="mx-4"> Applicable till<span> *
                                    </span>:</label>
                            </div>
                            <div class="col-lg-3">
                                <input type="date" name="yearApplicableTill" id="applicable_till"
                                    class="form-control-sm" placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 px-5 d-flex justify-content-start">
                    <h3>Exception</h3>
                </div>
                <div class="col-12 d-flex justify-content-center" id="">
                    <table class="text-center">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Operator</th>
                                <th>Sub category</th>
                                <th>Amount</th>
                                <th></th>
                                <th>Percentage</th>
                            </tr>
                        </thead>
                        <tbody id="exceptionTable">
                            <tr id="exceptionRow">
                                <td><input type="text" name="exeCategory[]" id="" class="form-control form-control-md ">
                                </td>
                                <td><select name="oper[]" id="" class="form-select form-select-md ">
                                        <option value="=">=</option>
                                        <option value="!=">!=</option>
                                        <option value=">">></option>
                                        <option value="<"><span>
                                                << /span>
                                        </option>
                                    </select></td>
                                <td><input type="text" name="exeSubCategory[]" id=""
                                        class="form-control form-control-md ">
                                </td>
                                <td><input type="text" name="exeAmount[]" id="" class="form-control form-control-md "
                                        value="0"></td>
                                <td>Or</td>
                                <td><input type="text" name="exePercentage[]" id="" class="form-control form-control-md"
                                        value="0"></td>
                                <td><button type="button" class="remove-row btn btn-close bg-danger"></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-11 d-flex justify-content-end mt-3">
                    <button class="btn btn-primary mx-5" type="button" id="add-row"><i class="bi bi-plus"></i></button>
                </div>
            </div>
            <div class="row mt-4 mb-3">
                <div class="col d-flex justify-content-end">
                    <input type="reset" value="Reset" class="mx-2 btn btn-warning">
                    <input type="submit" value="Save & Next" class="mx-2 btn btn-primary">
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>

<script>
    //monthky collection
    function toggleMonthSelect() {
        var monthlyRadio = document.getElementById("monthly");
        var monthSelectTable = document.getElementById("monthSelectTable");
        var yearlyDueDate = document.getElementById("yearlyDueDate");

        if (monthlyRadio.checked) {
            monthSelectTable.style.display = "block";
            totalAmount.style.display = "block";
            halfyearlySelectTable.style.display = "none";
            yearlyDueDate.style.display = "none";
            totalAmtID.value = "0";
        } else {
            monthSelectTable.style.display = "none";
        }
    }
    //month total mat calculate
    function calculateTotalAmt() {
        var totalamt = 0;
        for (var i = 1; i <= 10; i++) {
            var inputField = TAReturn('input' + i);
            var value = parseFloat(inputField.value) || 0;
            totalamt += value;
        }
        TAReturn('totalAmtID').value = totalamt;
    }
    function TAReturn(id) {
        return document.getElementById(id);
    }
    //yearly collection
    function toggleYearSelect() {
        var yearlyRadio = document.getElementById("yearly");
        var totalAmount = document.getElementById("totalAmount");
        var yearlyDueDate = document.getElementById("yearlyDueDate");

        if (yearlyRadio.checked) {
            totalAmount.style.display = "block";
            yearlyDueDate.style.display = "block";
            monthSelectTable.style.display = "none";
            halfyearlySelectTable.style.display = "none";
            totalAmtID.value = "0";
        }
    }
    //half yrar  collection
    function togglehalfYearlySelect() {
        var halfYearlyRadio = document.getElementById("halfYearly");
        var yearlyDueDate = document.getElementById("yearlyDueDate");
        if (halfYearlyRadio.checked) {
            halfyearlySelectTable.style.display = "block";
            totalAmount.style.display = "block";
            yearlyDueDate.style.display = "none";
            monthSelectTable.style.display = "none";
            totalAmtID.value = "0";
        }
        else {
            halfyearlySelectTable.style.display = "none";
        }
    }

    function calculateTotalAmt2() {
        var totalamt = 0;
        for (var i = 12; i <= 14; i++) {
            var inputField = TAReturn2('input' + i);
            var value = parseFloat(inputField.value) || 0;
            totalamt += value;
        }
        TAReturn2('totalAmtID').value = totalamt;
    }
    function TAReturn2(id) {
        return document.getElementById(id);
    }

    $(document).ready(function () {
    $("#add-row").click(function () {
        // Clone the last input row and append it to the container
        var newRow = $("#exceptionRow:last").clone();
        newRow.find("input").val('0'); // Clear input values
        $("#exceptionTable").append(newRow);
    });

    $(document).on("click", ".remove-row", function () {
        var rowCount = $(".remove-row").length;
        if (rowCount > 1) {
            $(this).closest("tr").remove();
        }
    });
});

    //collection type monthly to add all amount same as the first colomn
    function copyInputValues() {
        const checkbox = document.getElementById('copy_values');
        const inputBoxes = document.querySelectorAll('.input-box');

        // Get the value from the first input box
        const firstInputValue = inputBoxes[0].value; // Use index 0 instead of 1

        // Set all input boxes (except the first one) to the first input's value
        for (let i = 1; i < inputBoxes.length; i++) {
            inputBoxes[i].value = firstInputValue;
        }
    }




</script>