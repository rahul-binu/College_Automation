<?php $this->extend('/layout/structure1');
$this->section('content'); ?>

<style>
    #Head {
        border: 1px solid black;
    }

    #body {
        border: .5px solid black;
    }

    #Tamount {
        color: green;
    }
</style>

<section class="mx-5">
    <div id="Head" class="row text-center p-3">
        <h3>N.S.S College Rajakumari</h3>
        <h4>Kulaparachal</h4>
    </div>
    <div id="body" class="row p-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Admission No</th>
                    <th>Name of Student</th>
                    <th>Fee</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($items)):  ?>
                <?php $i= 0?>
                <?php foreach ($items as $item): $i++;?>
                    <tr>
                        
                        <td><?= $i ?></td>
                        <td><?= $item->admissionNO ?></td>
                        <td><?= $item->admissionNO ?></td>
                        <td><?= $item->fee_head ?></td>
                        <td>< ?></td>
                        <td><?= $item->paidDate ?></td>
                    </tr>
                    <?php endforeach ?>
                <?php else: ?>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-10 text-end"><span>Toatal Amount</span></div>
            <div class="col-2"><span id="Tamount"><span>Rs/-</span></span></div>
        </div>
    </div>
</section>

<?php $this->endSection(); ?>