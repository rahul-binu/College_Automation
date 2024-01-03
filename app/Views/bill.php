<?php echo view('layout/cdns'); ?>
<style>
    #billPrintSection {}

    #billSection {
        border: 2px solid #111;
        margin-left: 25%;
        margin-right: 25%;
    }

    #buttons {
        margin-top: 20px;
    }

    #totalAmountSapn {
        color: green;
        font-size: 20px;

    }

    @media print {
        #main {
            visibility: hidden;
        }

        #buttons {
            display: none;
        }


        #billPrintSection * {
            visibility: visible;
            margin-left: 0;
            margin-right: 0;
        }

        #billPrintSection {
            position: absolute;
            left: 0;
            top: 0;
        }
    }
</style>
<main id="main">
    <div class="container-fluid mt-5" id="billPrintSection">
        <section id="billSection">
            <div class="row">
                <div class="col text-end">
                    <a href="<?= base_url()?>feemancontroller/studentfeeview"><button class="btn btn-close bg-danger"></button></a>
                </div>
            </div>
            <div class="row py-2">
                <div class="col text-center">
                    <h2>N.N.S COLLEGE</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row text-center">
                        <h4>RAJAKUMARI</h4>
                    </div>
                </div>
            </div>
            <?php if (!empty($items)): ?>
                <section class=" p-3 ">
                    <div class="row">
                        <div class="col-6"><span>No. </span><span>
                                <?= $items[0]['billId'] ?>
                            </span></div>
                        <div class="col-6 text-end"><span>Date: </span><span>
                                <?= $items[0]['date'] ?>
                            </span></div>
                    </div>
                    <div class="row px-1">
                        <div class="col">
                            <span>Name: </span>
                            <span>
                                <?= $items[0]['name'] ?>
                            </span>
                        </div>
                    </div>
                    <div class="row px-1">
                        <div class="col-6">
                            <span>Admission No: </span>
                            <span>
                                <?= $items[0]['admissionNo'] ?>
                            </span>
                        </div>
                        <div class="col-6 text-end">
                            <span>Class: </span>
                            <span>
                                <?= $items[0]['stdProgram'] ?>
                            </span>
                        </div>
                    </div>
                    <div class="row px-3 mt-3">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Fee</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $totalAmount = 0 ?>
                                <?php foreach ($items[1]['fee'] as $key): ?>
                                    <?php $totalAmount += $key->amount ?>
                                    <tr>
                                        <td><span>
                                                <?= $key->fee_head ?>
                                            </span></td>
                                        <td><span>
                                                <?= $key->amount ?>
                                            </span></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td><span>Total</span></td>
                                    <td><span class="text-success" id="totalAmount">
                                            <?= $totalAmount ?> RS/-
                                        </span></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col text-end">
                                <span>Rupees: </span>
                                <span id="totalAmountSapn">
                                    <?= $totalAmount ?><span>RS/-</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row" id="buttons">
                    <div class="col m-3 text-end ">
                        <button class="btn btn-secondary" onclick="print()">Print</button>
                    </div>
                </div>
            <?php else: ?>
                <div class="row mx-5">
                    <div class="col alert alert-danger">
                        <span>Ops somthing went wrong</span>
                    </div>
                </div>
            <?php endif; ?>
        </section>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/to-words@3.7.0/dist/locales/ee-EE.min.js"></script>
<script>
    window.onload = function () {
        totalAmount();
    };

    function totalAmount() {

        let amount = document.getElementById('totalAmount').value;
        const words = numberToWords.toWords(amount);
        console.log(words);
    }
</script>