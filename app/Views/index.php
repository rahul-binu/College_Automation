<?= view("/layout/structure") ?>
<link rel="stylesheet" type="text/css" href="<?= base_url()?>public/css/index.css">
<script type='text/javascript' src="<?= base_url()?>public/js/test.js"></script>
<main id="mainDash" class="mb-5">
    <div class="row" style="display:none">
        <a href="<?= base_url() ?>feemancontroller/feeadd">fee add form</a><br>
        <a href="<?= base_url() ?>feemancontroller/stdfeebill">Bill form</a><br>
        <a href="<?= base_url() ?>feemancontroller/stdFeeAddForm">stdFeeAddForm</a><br>
        <a href="<?= base_url() ?>feemancontroller/studentFeeAdd">studentfeeadd</a><br>
        <a href="<?= base_url() ?>feemancontroller/stdfeebill"></a><br>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 py-1">
            <a href="<?= base_url() ?>feemancontroller/feedetailsview">
                <div class="card bg-info" id="functionCards">
                    <div class="row">
                        <div class="col-3 py-3">
                            <i class="bi bi-journal-plus"></i>
                        </div>
                        <div class="col-9 py-4"><span>Fee Details</span></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 py-1">
            <a href="<?= base_url() ?>feemancontroller/studentfeeview">
                <div class="card  bg-primary" id="functionCards">
                    <div class="row">
                        <div class="col-3 py-3">
                            <i class="bi bi-person-lines-fill"></i>
                        </div>
                        <div class="col-9 py-4"><span>View Students</span></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 py-1">
            <a href="<?= base_url() ?>oStaff">
                <div class="card bg-warning" id="functionCards">
                    <div class="row">
                        <div class="col-3 py-3">
                        <i class="bi bi-list-ul"></i>
                        </div>
                        <div class="col-9 py-4"><span>Student List</span></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 py-1">
            <a href="<?= base_url() ?>reports/index">
                <div class="card bg-success" id="functionCards">
                    <div class="row">
                        <div class="col-3 py-3">
                        <i class="bi bi-file-earmark-bar-graph"></i>
                        </div>
                        <div class="col-9 py-4"><span>Reports</span></div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-6">
            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-6">
            <canvas id="MaleFeamlePie" style="width:100%;max-Width:600px"></canvas>
        </div>
    </div>
</main>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<script>
    //bar chart code
    const xValues = ["2021-22", "2022-23", "2023-24", "loading..."];
    const yValues = [75000, 80000, 55000, 0];
    const barColors = ["red", "green", "blue"];

    new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: { display: false },
            title: {
                display: true,
                text: "Total fee collection last Acadamic year"
            }
        }
    });

    //    //pie chart
    const pxValue = ["male", "female", "other"];
    const pyValue = ["450", "370", "0"];
    const pieColor = ["blue", "pink"];

    new Chart("MaleFeamlePie", {
        type: "pie",
        data: {
            labels: pxValue,
            datasets: [{
                backgroundColor: pieColor,
                data: pyValue
            }]
        },
        options: {
            legend: { display: false },
            title: {
                display: true,
                text: "College current strength"
            }
        }
    });

</script>
