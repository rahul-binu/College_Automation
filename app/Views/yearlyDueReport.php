<section id="theam">
    <?php //$this->extend('\layout\structure1'); ?>
    <?php //$this->section('content'); ?>
    <?php echo view('/layout/structure'); ?>
</section>
<style>
    #main-contant {
        padding-left: 2em;
    }

    #Head {
        border: 1px solid black;
    }

    #body {
        border: .5px solid black;
    }

    #Tamount {
        color: green;
    }

    @media print {

        #filter-forms,
        #print-btn {
            visibility: hidden;
            display: none;
        }

        #theam {
            /* Corrected the ID name here */
            display: none !important;
            visibility: hidden !important;
            color: green !important;
        }

        #buttons {
            display: none;
        }

        #Head,
        #table {
            visibility: visible;
        }

        #tabel {
            visibility: visible;
            margin-top: 0;
        }

    }
</style>
<!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<section class="mx-5" id="main-contant">
    <div id="Head" class="row text-center p-3">
        <h3>N.S.S College Rajakumari</h3>
        <h4>Kulaparachal</h4>
    </div>
    <div id="body" class="row p-3">
        <section id="filter-forms">
            <div class="row">
                <div class="col-9"></div>
                <div class="col-2 text-center">
                    <span>Accadamic Year</span>
                </div>
            </div>
            <?= form_open('reports/yearlyDueReport') ?>
            <div class="row  mb-3">
                <div class="col-9"></div>
                <div class="col-2 d-flex justify-content-end">
                    <input type="text" name="accadamicYear" id="" placeholder="00-00"
                        class="form form-control form-control-sm">
                </div>
                <div class="col">
                    <input type="submit" value="Get" class="btn btn-primary">
                </div>
            </div>
            <?php form_close(); ?>
        </section>
        <?php if (!empty($items)): ?>
            <div class="row mb-2">
                <div class="col">
                    <span>Accadamic Year: </span>
                    <span>
                        <?= $items[0]->feeAllocationYear ?>
                    </span>
                </div>
                <div class="col text-end  px-5" id="print-btn">
                    <button type="button" class="btn btn-secondary" onclick="print()"><i
                            class="bi bi-floppy-fill"></i></button>
                </div>
            </div>
            <table class="table table-bordered" id="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Admission No</th>
                        <th>Name of Student</th>
                        <th>Program</th>
                        <th>Total Amount</th>
                        <th>Paid Amount</th>
                        <th>Total Due</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 0 ?>
                    <?php foreach ($items as $item):
                        $i++; ?>
                        <tr>

                            <td>
                                <?= $i ?>
                            </td>
                            <td>
                                <?= $item->admission_no ?>
                            </td>
                            <td>
                                <?= $item->student_name ?>
                            </td>
                            <td>
                                <?= $item->program ?>
                            </td>
                            <td>
                                <?= $item->TotalAmt ?><span>RS/-</span>
                            </td>
                            <td>
                                <?= $item->PaidAmt ?> <span>RS/-</span>
                            </td>
                            <td>
                                <?php $due = $item->TotalAmt - $item->PaidAmt;
                                $textClass = ($due == 0) ? 'text-success' : 'text-warning';
                                echo '<h6 class="' . $textClass . '" >', $due . '<span> RS/-</span></h6>';
                                $due = 0; ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>


            </table>
        <?php else: ?>
            <div class="row">
                <div id="alert " class="col-12 alert alert-warning">
                    <span class="">
                        O0ps No Data To Show.....
                    </span>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php //$this->endSection(); ?>