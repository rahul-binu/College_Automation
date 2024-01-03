<style>
    label span {
        color: red;
        font-size: 20px;
    }

    .monthTable,
    #exceptionTable {
        overflow-x: auto;
    }
</style>

<div class="container p-3">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col text-center">
                    <h3>Fee Details Edit</h3>
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
                        <?php if (!empty($items)): ?>
                            <?php foreach ($items as $item): ?>
                                <option value="<?= $item->fee_head ?>">
                                    <?= $item->fee_head ?>
                                </option>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <option>Somthing went wrong</option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 " id="">
                    <label for="yearOfAsmission" class="mx-4">02. Year of admission<span> * </span>:</label>
                    <input type="text" class="form-control " name="yearOfAsmission" id="yearOfAsmission"
                        value="<?= $item->yearOfAdmission ?>" placeholder="Year of Admission">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 " id="">
                    <label for="programme" class="mx-4">03. Programme<span> * </span>:</label>
                    <select class="form-select form-select-md" name="programme" id="programme">
                        <option value="<?= $item->programme ?>">
                            <?= $item->programme ?>
                        </option>
                        <option value="All">All</option>
                        <option value="Bca">Bca</option>
                        <option value="Bba">Bba</option>
                        <option value="B.Com">B.Com</option>
                        <option value="Bsc">Bsc</option>
                        <option value="Msc">Msc</option>

                    </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <label for="" class="mx-4">04. Accadamic year<span> * </span>:</label>
                    <input type="text" name="newAccadamicYear" id="" class="form-control"
                        value="<?= $item->accadamicYear ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-12 col-lg-6 " id="">
                    <label for="collectype" class="mx-4">05. Collection type<span> * </span>:</label>

                    <?php
                    if ($item->collectionType == 'yearly') { ?>
                        <label for="yearly" class="px-4">Yearly</label>
                        <input type="radio" id="yearly" name="collectype" value="yearly" onclick="toggleYearSelect()"
                            checked>

                       <!-- <label for="halfYearly" class="px-4">Half Yearly</label>
                        <input type="radio" id="halfYearly" name="collectype" value="halfYearly"
                            onclick="togglehalfYearlySelect()">

                        <label for="monthly" class="px-4">Monthly</label>
                        <input type="radio" id="monthly" name="collectype" value="monthly" onclick="toggleMonthSelect()">-->
                    <?php } elseif ($item->collectionType == 'halfYearly') { ?>
                       <!-- <label for="yearly" class="px-4">Yearly</label>
                        <input type="radio" id="yearly" name="collectype" value="yearly" onclick="toggleYearSelect()">-->

                        <label for="halfYearly" class="px-4">Half Yearly</label>
                        <input type="radio" id="halfYearly" name="collectype" value="halfYearly"
                            onclick="togglehalfYearlySelect()" checked>

                       <!-- <label for="monthly" class="px-4">Monthly</label>
                        <input type="radio" id="monthly" name="collectype" value="monthly" onclick="toggleMonthSelect()">-->
                    <?php } else { ?>
                       <!-- <label for="yearly" class="px-4">Yearly</label>
                        <input type="radio" id="yearly" name="collectype" value="yearly" onclick="toggleYearSelect()">

                        <label for="halfYearly" class="px-4">Half Yearly</label>
                        <input type="radio" id="halfYearly" name="collectype" value="halfYearly"
                            onclick="togglehalfYearlySelect()">-->

                        <label for="monthly" class="px-4">Monthly</label>
                        <input type="radio" id="monthly" name="collectype" value="monthly" onclick="toggleMonthSelect()"
                            checked>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <?php
            $collectionRemarks = explode(',', $item->collectionRemark);
            $applicableTill = explode(',', $item->applicableTill);
            $applicableFrom = explode(',', $item->applicableFrom);
            foreach ($collectionRemarks as $index => $value) {
                $parts = explode(':', $value);

                // Check if both parts is there before checking them
                $amount = isset($parts[1]) ? $parts[1] : '';
                $applicableFromParts = explode(':', $applicableFrom[$index]);
                $applicableTillParts = explode(':', $applicableTill[$index]);
                // get the second part of applicable from and till otherwise appending null
                $applicableFromValue = isset($applicableFromParts[1]) ? $applicableFromParts[1] : '';
                $applicableTillValue = isset($applicableTillParts[1]) ? $applicableTillParts[1] : '';

            }

            if ($item->collectionType == 'yearly') { ?>

                <div id="totalAmount" class="mt-3 mb-3" style="display: ;">
                    <div class="row" id="totalAmtTable">

                        <div class="col-lg-2">
                            <label for="totalAmtID">Total payable amount <span> : </span></label>
                        </div>
                        <div class="col-lg-2">
                            <input type="text" id="totalAmtID" name="totalAmount" value="<?= $item->totalAmount ?>">
                        </div>
                        <div class="col-lg-8" id="yearlyDueDate" style="display:;">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label for="applicable_from" class="mx-4"> Applicable from<span> *
                                        </span>:</label>
                                </div>
                                <div class="col-lg-3">
                                    <input type="date" name="yearApplicableFrom" id="applicable_from"
                                        class="form-control-sm" placeholder="dd/mm/yyyy"
                                        value="<?= $applicableFromValue ?>">
                                </div>
                                <div class="col-lg-3">
                                    <label for="applicable_till" class="mx-4"> Applicable till<span> *
                                        </span>:</label>
                                </div>
                                <div class="col-lg-3">
                                    <input type="date" name="yearApplicableTill" id="applicable_till"
                                        class="form-control-sm" value="<?= $applicableTillValue ?>"
                                        placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } elseif ($item->collectionType == 'halfYearly') { ?>
                <?php
                $collectionRemarks = explode(',', $item->collectionRemark);
                $applicableTill = explode(',', $item->applicableTill);
                $applicableFrom = explode(',', $item->applicableFrom);
                $applicableFromValue = [];
                $applicableTillValue = [];
                $i = 0;
                foreach ($collectionRemarks as $index => $value) {
                    $parts = explode(':', $value);

                    // Check if both parts is there before checking them
                    $amount = isset($parts[1]) ? $parts[1] : '';
                    $applicableFromParts = explode(':', $applicableFrom[$index]);
                    $applicableTillParts = explode(':', $applicableTill[$index]);
                    // get the second part of applicable from and till otherwise appending null
                    $applicableFromValue[$i] = isset($applicableFromParts[1]) ? $applicableFromParts[1] : '';
                    $applicableTillValue[$i] = isset($applicableTillParts[1]) ? $applicableTillParts[1] : '';
                    $i++;

                }
                ?>
                <div class="row mb-3 " id="halfyearlySelectTable"style="display:";>
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
                                            onkeyup="calculateTotalAmt2()" value="<?= $amount ?>"></td>
                                    <td><input type="date" name="firstHalfApplicableFrom" id="" size="8"
                                            placeholder="dd/mm/yyy" value="<?= $applicableFromValue[0] ?>"></td>
                                    <td><input type="date" name="firstHalfApplicableTill" id="" size="8"
                                            placeholder="dd/mm/yyy" value="<?= $applicableTillValue[0] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Second half</td>
                                    <td><input type="text" size="6" id="input14" name="secondHalf"
                                            onkeyup="calculateTotalAmt2()" value="<?= $amount ?>"></td>
                                    <td><input type="date" name="secondHalfApplicableFrom" id="" size="8"
                                            placeholder="dd/mm/yyy" value="<?= $applicableFromValue[1] ?>"></td>
                                    <td><input type="date" name="seconHalfApplicableTill" id="" size="8"
                                            placeholder="dd/mm/yyy" value="<?= $applicableTillValue[1] ?>"></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php $rem = 'firstHalf+secondHalf';
                        ?>
                    </div>
                    <div class="col-lg-2">
                        <label for="totalAmtID">Total payable amount <span> : </span></label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" id="totalAmtID" name="totalAmount" value="<?= $item->totalAmount ?>">
                    </div>
                </div>
            <?php } else {
                $applicableTill = explode(',', $item->applicableTill);
                $applicableFrom = explode(',', $item->applicableFrom);
                $collectionRemarks = explode(',', $item->collectionRemark);

                $numberOfElements = max(count($applicableTill), count($applicableFrom), count($collectionRemarks));
                $amountValue = [];
                $applicableFromValue = [];
                $applicableTillValue = [];
                for ($i = 1; $i < $numberOfElements; $i++) {
                    $tillParts = isset($applicableTill[$i]) ? explode(':', $applicableTill[$i]) : [];
                    $fromParts = isset($applicableFrom[$i]) ? explode(':', $applicableFrom[$i]) : [];
                    $amountParts = isset($collectionRemarks[$i]) ? explode(':', $collectionRemarks[$i]) : [];

                    // Check if both parts are present before accessing them
                    $amountValue[$i] = isset($amountParts[1]) ? $amountParts[1] : '';
                    $applicableFromValue[$i] = isset($fromParts[1]) ? $fromParts[1] : '';
                    $applicableTillValue[$i] = isset($tillParts[1]) ? $tillParts[1] : '';
                }

                // Now $amountValue, $applicableFromValue, and $applicableTillValue are indexed arrays
                // echo'<pre>';
                // print_r($amountValue);
                // print_r($applicableFromValue);
                // print_r($applicableTillValue);
            

                ?>

                <div class="row mb-3 " id="monthSelectTable"style="display:";>
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
                                            name="jun" onkeyup="calculateTotalAmt()" oninput="copyInputValues()"
                                            value="<?= $amountValue[1] ?>"></td>
                                    <td> <input type="date" name="junApplicableFrom" id="datePicker" size="8"
                                            placeholder="dd/mm/yyyy" value="<?= $applicableFromValue[1] ?>"></td>
                                    <td><input type="date" name="junApplicableTill" id="datePicker" size="8"
                                            placeholder="dd/mm/yyy" value="<?= $applicableTillValue[1] ?>"></td>
                                    <td>July</td>
                                    <td><input type="text" class="input-box" size="6" placeholder="000" id="input2"
                                            name="jul" onkeyup="calculateTotalAmt()" value="<?= $amountValue[2] ?>"
                                            \value="<?= $amountValue[1] ?>"></td>
                                    <td><input type="date" name="julApplicableFrom" value="<?= $applicableFromValue[2] ?>"
                                            id="datePicker" size="8" placeholder="dd/mm/yyy"></td>
                                    <td><input type="date" name="julApplicableTill" value="<?= $applicableTillValue[2] ?>"
                                            id="datePicker" size="8" placeholder="dd/mm/yyy"></td>
                                    <td>August</td>
                                    <td><input type="text" class="input-box" size="6" placeholder="000" id="input3"
                                            name="aug" onkeyup="calculateTotalAmt()" value="<?= $amountValue[3] ?>" \></td>
                                    <td><input type="date" name="augApplicableFrom" value="<?= $applicableFromValue[3] ?>"
                                            id="datePicker" size="8" placeholder="dd/mm/yyy"></td>
                                    <td><input type="date" name="augApplicableTill" value="<?= $applicableTillValue[3] ?>"
                                            id="datePicker" size="8" placeholder="dd/mm/yyy"></td>
                                </tr>
                                <tr>

                                    <td>September</td>
                                    <td><input type="text" class="input-box" size="6" placeholder="000" id="input4"
                                            name="sep" onkeyup="calculateTotalAmt()" value="<?= $amountValue[4] ?>" \></td>
                                    <td><input type="date" name="sepApplicableFrom" value="<?= $applicableFromValue[4] ?>"
                                            id="datePicker" size="8" placeholder="dd/mm/yyy"></td>
                                    <td><input type="date" name="sepApplicableTill" value="<?= $applicableTillValue[4] ?>"
                                            id="datePicker" size="8" placeholder="dd/mm/yyy"></td>
                                    <td>October</td>
                                    <td><input type="text" class="input-box" size="6" placeholder="000" id="input5"
                                            name="oct" onkeyup="calculateTotalAmt()" value="<?= $amountValue[5] ?>" \></td>
                                    <td><input type="date" name="octApplicableFrom" value="<?= $applicableFromValue[5] ?>"
                                            id="datePicker" size="8" placeholder="dd/mm/yyy"></td>
                                    <td><input type="date" name="octApplicableTill" value="<?= $applicableTillValue[5] ?>"
                                            id="datePicker" size="8" placeholder="dd/mm/yyy"></td>

                                    <td>November</td>
                                    <td><input type="text" class="input-box" size="6" placeholder="000" id="input6"
                                            name="nov" onkeyup="calculateTotalAmt()" value="<?= $amountValue[6] ?>" \></td>
                                    <td><input type="date" name="novApplicableFrom" value="<?= $applicableFromValue[6] ?>"
                                            id="datePicker" size="8" placeholder="dd/mm/yyy"></td>
                                    <td><input type="date" name="novApplicableTill" value="<?= $applicableTillValue[6] ?>"
                                            id="datePicker" size="8" placeholder="dd/mm/yyy"></td>
                                </tr>
                                <tr>

                                    <td>December</td>
                                    <td><input type="text" class="input-box" size="6" placeholder="000" id="input7"
                                            name="dec" onkeyup="calculateTotalAmt()" value="<?= $amountValue[7] ?>" \></td>
                                    <td><input type="date" name="decApplicableFrom" value="<?= $applicableFromValue[7] ?>"
                                            id="datePicker" size="8" placeholder="dd/mm/yyy"></td>
                                    <td><input type="date" name="decApplicableTill" value="<?= $applicableTillValue[7] ?>"
                                            id="datePicker" size="8" placeholder="dd/mm/yyy"></td>
                                    <td>January</td>
                                    <td><input type="text" class="input-box" size="6" placeholder="000" id="input8"
                                            name="jan" onkeyup="calculateTotalAmt()" value="<?= $amountValue[8] ?>" \></td>
                                    <td><input type="date" name="janApplicableFrom" value="<?= $applicableFromValue[8] ?>"
                                            id="datePicker" size="8" placeholder="dd/mm/yyy"></td>
                                    <td><input type="date" name="janApplicableTill" value="<?= $applicableTillValue[8] ?>"
                                            id="datePicker" size="8" placeholder="dd/mm/yyy"></td>
                                    <td>February</td>
                                    <td><input type="text" class="input-box" size="6" placeholder="000" id="input9"
                                            name="feb" onkeyup="calculateTotalAmt()" value="<?= $amountValue[9] ?>" \></td>
                                    <td><input type="date" name="febApplicableFrom" value="<?= $applicableFromValue[9] ?>"
                                            id="datePicker" size="8" placeholder="dd/mm/yyy"></td>
                                    <td><input type="date" name="febApplicableTill" value="<?= $applicableTillValue[9] ?>"
                                            id="datePicker" size="8" placeholder="dd/mm/yyy"></td>
                                </tr>
                                <tr>
                                    <td>Mar</td>
                                    <td><input type="text" class="input-box" size="6" placeholder="000" id="input10"
                                            name="mar" onkeyup="calculateTotalAmt()" value="<?= $amountValue[10] ?>" \></td>
                                    <td><input type="date" name="marApplicableFrom" value="<?= $applicableFromValue[10] ?>"
                                            id="datePicker" size="8" placeholder="dd/mm/yyy"></td>
                                    <td><input type="date" name="marApplicableTill" value="<?= $applicableTillValue[10] ?>"
                                            id="datePicker" size="8" placeholder="dd/mm/yyy"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-2">
                        <label for="totalAmtID">Total payable amount <span> : </span></label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" id="totalAmtID" name="totalAmount" value="<?= $item->totalAmount ?>">
                    </div>
                </div>
            <?php } ?>




            <!--   <div class="row mb-3">
                <div class="col-12 px-5 d-flex justify-content-start">
                    <h3>Exception</h3>
                </div>
                <div class="col-12 d-flex justify-content-center" id="">
                    <table class="text-center">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Sub category</th>
                                <th>Operator</th>
                                <th>Amount</th>
                                <th></th>
                                <th>Percentage</th>
                            </tr>
                        </thead>
                        <tbody id="exceptionTable">
                            <tr id="exceptionRow">
                                <td><input type="text" name="exeCategory[]" id="" class="form-control form-control-md ">
                                </td>
                                <td><input type="text" name="exeSubCategory[]" id=""
                                        class="form-control form-control-md ">
                                </td>
                                <td><select name="oper[]" id="" class="form-select form-select-md ">
                                        <option value="=">=</option>
                                        <option value="!=">!=</option>
                                        <option value=">">></option>
                                        <option value="<"><span>
                                                << /span>
                                        </option>
                                    </select></td>
                                <td><input type="text" name="exeAmount[]" id="" class="form-control form-control-md ">
                                </td>
                                <td>Or</td>
                                <td><input type="text" name="exePercentage[]" id=""
                                        class="form-control form-control-md">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-10 d-flex justify-content-end mt-3">
                    <button class="btn btn-primary px-5" type="button" id="add-row">Add Row</button>
                </div>
            </div> -->
            <div class="row mb-3">
                <div class="col d-flex justify-content-end">
                    <input type="reset" value="Reset" class="mx-2 btn btn-warning">
                    <input type="submit" value="Update" class="mx-2 btn btn-primary">
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

        if (monthlyRadio.checked) {
            monthSelectTable.style.display = "block";
            totalAmount.style.display = "block";
            halfyearlySelectTable.style.display = "none";
           // totalAmtID.value = "0";
        } else {
            monthSelectTable.style.display = "none";
        }
    }
    /*month total mat calculate
    function calculateTotalAmt() {
        var totalamt = 0;
        for (var i = 1; i <= 12; i++) {
            var inputField = TAReturn('input' + i);
            var value = parseFloat(inputField.value) || 0;
            totalamt += value;
        }
        TAReturn('totalAmtID').value = totalamt;
    }
    function TAReturn(id) {
        return document.getElementById(id);
    }*/
    //yearly collection
    function toggleYearSelect() {
        var yearlyRadio = document.getElementById("yearly");
      //  var totalAmount = document.getElementById("totalAmount");
        if (yearlyRadio.checked) {
            totalAmount.style.display = "block";
            monthSelectTable.style.display = "none";
            halfyearlySelectTable.style.display = "none";
            //totalAmtID.value = "0";
        }
    }
    //half yrar  collection
    function togglehalfYearlySelect() {
        var halfYearlyRadio = document.getElementById("halfYearly");
        if (halfYearlyRadio.checked) {
            halfyearlySelectTable.style.display = "block";
          //  totalAmount.style.display = "block";
            monthSelectTable.style.display = "none";
           // totalAmtID.value = "0";
        }
        else {
            halfyearlySelectTable.style.display = "none";
        }
    }/*

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
            newRow.find("input").val(''); // Clear input values
            $("#exceptionTable").append(newRow);
        });

    });

</script>