<style>
    #feeTable {
        position: fixed;
        bottom: 0;
        width: 92%;
    }

    #collectionTypeOption td input {
        font-size: large;
        color: green;
        border: 0;
        outline: 0;
        background: transparent;
        border-bottom: 1px solid black;
    }

    #collectionTypeOption tr td {
        padding-top: 1.5em;
    }
    


.card-body{
    margin-bottom:15%;
}
    @media screen and (max-width: 768px) {
        #feeTable table {
            display: none;
        }
    }
</style>
       
 
                 <!-- start -->

                 <div id="feeAddDash">
    <div class="card mb-3">
        <div class="card-header d-flex justify-content-center">
            <h2>New Fee</h2>
        </div>
        <div class="card-body">
            <form action="">
                <div class="row mb-2">
                    <div class="col-sm-12 col-md-6 col-lg-6 " id="">
                        <label for="yearOfAsmission"class="mx-4">01. Year of Admission<span> * </span>:</label>
                        <input type="text" class="form-control " name="yearOfAsmission" id="yearOfAsmission"
                            placeholder="Year of Admission">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 " id="">
                        <label for="programme"class="mx-4">02. Programme<span> * </span>:</label>
                        <select class="form-select form-select-md" name="programme" id="programme">
                            <option value="All">All</option>
                            <option value="Bca">Bca</option>
                            <option value="Bba">Bba</option>
                            <option value="B.Com">B.Com</option>
                            <option value="Bsc">Bsc</option>
                            <option value="Msc">Msc</option>

                        </select>
                    </div>
                </div>
                <div class="row mb-2">

                    <div class="col-sm-12 col-md-6 col-lg-6 " id="">
                        <label for="fee_group"class="mx-4">03. Fee Group<span> * </span>:</label>
                        <input type="text" class="form-control" name="fee_group" id="fee_group"
                            placeholder=" Fee Group">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 " id="">
                        <label for="fee_head"class="mx-4">04. Fee Head<span> * </span>:</label>
                        <input type="text" class="form-control" name="fee_head" id="fee_head" placeholder="Fee Head">
                    </div>

                </div>
                <div class="row mb-2">
                    <div class="col-sm-12 col-md-12 col-lg-12 " id="">
                        <label for="collectype"class="mx-4">05. Collection type<span> * </span>:</label>

                        <label for="yearly" class="px-4">Yearly</label>
                        <input type="radio" id="yearly" name="collectype" value="yearly" onclick="toggleYearSelect()">

                        <label for="quarterly" class="px-4">Quarterly</label>
                        <input type="radio" id="quarterly" name="collectype" value="quarterly"
                            onclick="toggleQuarterSelect()">

                        <label for="monthly" class="px-4">Monthly</label>
                        <input type="radio" id="monthly" name="collectype" value="monthly"
                            onclick="toggleMonthSelect()">
                    </div>
                </div>
                <div class="row mb-2" id="collectionTypeOption">
                    <div class="col-sm-12 col-md-12 col-lg-12 " id=""> <!--monthly select -->
                        <div id="monthSelect" style="display: none;">
                            <table>
                                <tr>
                                    <td> <input type="checkbox" class="" value="jan" id="jan"><label for="jan">January
                                            :</label></td>
                                    <td>
                                        <input type="text" id="month-amt-input" size="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox" class="" value="jan" id="jan"><label for="jan">February
                                            :</label></td>
                                    <td>
                                        <input type="text" id="month-amt-input" size="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox" class="" value="jan" id="jan"><label for="jan">March
                                            :</label></td>
                                    <td>
                                        <input type="text" id="month-amt-input" size="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox" class="" value="jan" id="jan"><label for="jan">June
                                            :</label></td>
                                    <td>
                                        <input type="text" id="month-amt-input" size="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox" class="" value="jan" id="jan"><label for="jan">July
                                            :</label></td>
                                    <td>
                                        <input type="text" id="month-amt-input" size="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox" class="" value="jan" id="jan"><label for="jan">August
                                            :</label></td>
                                    <td>
                                        <input type="text" id="month-amt-input" size="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox" class="" value="jan" id="jan"><label for="jan">September
                                            :</label></td>
                                    <td>
                                        <input type="text" id="month-amt-input" size="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox" class="" value="jan" id="jan"><label for="jan">October
                                            :</label></td>
                                    <td>
                                        <input type="text" id="month-amt-input" size="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox" class="" value="jan" id="jan"><label for="jan">November
                                            :</label></td>
                                    <td>
                                        <input type="text" id="month-amt-input" size="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox" class="" value="jan" id="jan"><label for="jan">December
                                            :</label></td>
                                    <td>
                                        <input type="text" id="month-amt-input" size="10">
                                    </td>
                                </tr>



                            </table>
                        </div>
                        <!--yearky select -->
                        <div id="yearSelect" style="display: none;">
                            <table>
                                <tr>
                                    <td> <input type="checkbox" class="" id="first" name="options[]"
                                            value="First Year"><label for="first">First Year :</label></td>
                                    <td>
                                        <input type="text" id="month-amt-input" size="10" name="firstYearFee">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox" class="" value="Second year" id="second"
                                            name="options[]"><label for="second">Second Year :</label></td>
                                    <td>
                                        <input type="text" id="month-amt-input" size="10" name="thirdYearFee">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox" class="" value="Third year" id="third"
                                            name="options[]"><label for="third">Third year :</label></td>
                                    <td>
                                        <input type="text" id="month-amt-input" size="10" name="secondYearFee">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!--Quarter select-->
                        <div id="quarterSelect" style="display: none;">
                            <table>
                                <tr>
                                    <td> <input type="checkbox" class="" value="jan" id="jan"><label for="jan">First
                                            Sem:</label></td>
                                    <td>
                                        <input type="text" id="month-amt-input" size="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox" class="" value="jan" id="feb"><label for="feb">Second
                                            Sem:</label></td>
                                    <td>
                                        <input type="text" id="month-amt-input" size="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox" class="" value="jan" id="jan"><label for="jan">Third
                                            sem:</label></td>
                                    <td>
                                        <input type="text" id="month-amt-input" size="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox" class="" value="jan" id="jan"><label for="jan">Fourth
                                            sem:</label></td>
                                    <td>
                                        <input type="text" id="month-amt-input" size="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox" class="" value="jan" id="jan"><label for="jan">Fifth
                                            sem:</label></td>
                                    <td>
                                        <input type="text" id="month-amt-input" size="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox" class="" value="jan" id="jan"><label for="jan">Sixth
                                            sem:</label></td>
                                    <td>
                                        <input type="text" id="month-amt-input" size="10">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="totalAmount" class="mt-3 mb-1" style="display: none;">
                            <table id="totalAmtTable">
                                <tr>
                                    <th>Total amount <span> : </span></th>
                                    <th><input type="text"></th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <label for=""class="mx-4">06. Applicable To<span> * </span>:</label>
                        <div class="input-group btn-group">

                          <!--  <select id="" multiple="multiple" style="display: none;">
                               
                                <option value="Obc">Obc</option>
                                <option value="Sc/St">Sc/St</option>
                                <option value="Merit quota">Merit quota</option>
                                <option value="Management quota">Management quota</option>
                                <option value="Community quota">Community quota</option>
                                <option value="cat1,cat2,cat3">New</option>
                            </select>-->

                            <div class="//btn-group">
                                <button type="button" class="multiselect dropdown-toggle btn btn-outline-dark mx-4 mt-2"
                                    data-toggle="dropdown" title="None selected">Select categories</button>
                                <ul class="multiselect-container dropdown-menu px-3">
                                   
                                    <li><label class="checkbox"><input type="checkbox" value="Obc">
                                            Obc</label></li>
                                    <li><label class="checkbox"><input type="checkbox" value="Sc/St">
                                            Sc/St</label></li>
                                    <li><label class="checkbox"><input type="checkbox" value="Merit quota">
                                            Merit quota</label></li>
                                    <li><label class="checkbox"><input type="checkbox" value="Management quota">
                                    Management quota</label></li>
                                            <li><label class="checkbox"><input type="checkbox" value="Community quota">
                                            Community quota</label></li>
                                    <li><span>New  </span><label class="checkbox"><input type="text"placeholder="cat1,cat2,cat3..."></label></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 ">
                        <label for="applicableFrom"class="mx-4">07. Applicable From<span> * </span>:</label>
                        <input type="text" class="form-control" name="applicableFrom" id="applicableFrom"
                            aria-describedby="" placeholder="dd/mm/yyy">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 ">
                        <label for="applicableTill"class="mx-4">0.8 Applicable Till <span> * </span>:</label>
                        <input type="text" class="form-control" name="applicableTill" id="applicableTill"
                            placeholder="dd/mm/yyy ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12"></div>
                    <table class="table table-responsive" id="exp-table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Apply</th>
                                        <th scope="col">Exception</th>
                                        <th scope="col">Exception percentage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>

                                            <input class="form-check-input" type="checkbox" value="">

                                        </td>
                                        <td>OBC</td>
                                        <td>10 %</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" value="" checked>
                                        </td>
                                        <td>Sc/St</td>
                                        <td>7 %</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" value="">
                                        </td>
                                        <td>Minority</td>
                                        <td>3 %</td>
                                    </tr>
                                    <tr>
                                        <th><span style="size:2em;">*</span></th>
                                        <th>New Exception</th>
                                        <td>
                                            <input type="text" class="form-control" name="exception"
                                                id="exception-t-input" placeholder="Exp_1 : 10,Exp_2 : 12">
                                        </td>
                                        <td><p><sub>This data can be used for future operations</sub></p></td>
                                    </tr>
                                </tbody>
                            </table>
                </div>
                <!--submit button-->
                <div class="row text-end">
                            <div class="col-12" id="sub-btn">
                                <input type="submit" class="btn btn-primary text-end"name="fee_submit">
                            </div>
                        </div>
            </form>
        </div>
    </div>
</div>
                  <!-- end -->

    <?php
   // include('footer.php');
    ?>

<script>
    //monthly radio options
    function toggleMonthSelect() {
        var monthlyRadio = document.getElementById("monthly");
        var monthSelect = document.getElementById("monthSelect");

        alert('Select months add amount');

        if (monthlyRadio.checked) {
            monthSelect.style.display = "block";
            totalAmount.style.display = "block";
            quarterSelect.style.display = "none";
            yearSelect.style.display = "none";
        } else {
            monthSelect.style.display = "none";
        }
    }
    //yearly radio button
    function toggleYearSelect() {
        var yearlyRadio = document.getElementById("yearly");
        var yearSelect = document.getElementById("yearSelect");

        alert('Select Year add amount');

        if (yearlyRadio.checked) {
            yearSelect.style.display = "block";
            totalAmount.style.display = "block";
            quarterSelect.style.display = "none";
            monthSelect.style.display = "none";
        } else {
            yearSelect.style.display = "none";
        }
    }

    //Quaterly radio button
    function toggleQuarterSelect() {
        var quarterlyRadio = document.getElementById("quarterly");
        var quarterSelect = document.getElementById("quarterSelect");

        alert('Select Sem and add amount');

        if (quarterlyRadio.checked) {
            totalAmount.style.display = "block";
            quarterSelect.style.display = "block";
            monthSelect.style.display = "none";
            yearSelect.style.display = "none";
        } else {
            quarterSelect.style.display = "none";

        }
    }
    function categorySelect() {
        alert('Add Categories');
    }
</script>