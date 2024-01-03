<style>
    label span {
        color: red;
        font-size: 20px;
    }
</style>

<?php
$my_session = \CodeIgniter\Config\Services::session();
?>
<!--model-->

<!--model end-->
<div class="container ">
    <div class="card mb-3 p-3">
        <?php if (isset($validation)): ?>
            <?= $validation->listErrors(); ?>
        <?php endif; ?>
        <?= form_open(); ?>
        <?php if ($my_session->getTempData('true')): ?>
            <div class="alert alert-scuscess">
                <?= $my_session->getTempData('true') ?>
            </div>
        <?php endif ?>
        <?php if ($my_session->getTempData('false')): ?>
            <div class="alert alert-danger">
                <?= $my_session->getTempData('false') ?>
            </div>
        <?php endif; ?>
        <div class="row mb-2">
            <div class="col-sm-12 col-md-6 col-lg-3 " id="">
                <label for="fee_group" class="mx-4">01. Fee Group<span> * </span>:</label>
                <input type="text" class="form-control" name="fee_group" id="fee_group" placeholder=" Fee Group"
                    required>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 " id="">
                <label for="fee_group_acro" class="mx-4">02. Fee Group Acronym<span> * </span>:</label>
                <input type="text" class="form-control" name="fee_group_acro" id="fee_group_acro"
                    placeholder="Fee Group Acronym" value="<?php set_value('fee_group_acro') ?>">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 " id="">
                <label for="fee_head" class="mx-4">03. Fee Head<span> * </span>:</label>
                <input type="text" class="form-control" name="fee_head" id="fee_head" placeholder=" Fee Head" required>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 " id="">
                <label for="fee_head_acro" class="mx-4">04. Fee Head Acronym<span> * </span>:</label>
                <input type="text" class="form-control" name="fee_head_acro" id="fee_head_acro"
                    placeholder="Fee Head Acronym">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col d-flex justify-content-end">
                <input type="reset" value="Reset" class="mx-2 btn btn-warning">
                <input type="submit" value="Save" class="mx-2 btn btn-primary">
            </div>
        </div>
        <?= form_close(); ?>
        <div class="card-footer ">
            <div class="container d-flex justify-content-center">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Fee group</th>
                            <th>Fee head</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($res)): ?>
                            <?php
                            $i = 0; ?>
                            <?php foreach ($res as $fee): ?>
                                <tr>
                                    <?php $i++; ?>
                                    <td>
                                        <?= $i ?>
                                    </td>
                                    <td>
                                        <?= $fee->fee_group; ?><span>(</span>
                                        <?= $fee->fee_group_acro ?><span>)</span>
                                    </td>
                                    <td>
                                        <?= $fee->fee_head; ?><span>(</span>
                                        <?= $fee->fee_head_acro; ?><span>)</span>
                                    </td>
                                  <!--  <td><a href="<?= base_url() ?>feeManController/feeadd/<?= $fee->fee_head; ?>"><button
                                                class="btn btn-info"><i class="bi bi-plus"></i></button></a>
                                        <button class="btn btn-warning" data-toggle="modal"
                                            data-target="#feeHeadUpdate">Edit</button>
                                    </td>-->
                                    <td>
                                        <?php if ($fee->status == 1): ?>
                                            <p><h5 hre="<?= base_url(); ?>feeManController/feeStatus/<?= $fee->fee_head; ?>/0"
                                                    class="text-success">Active</h5></p>
                                        <?php else: ?>
                                            <p><h5 hre="<?= base_url(); ?>feeManController/feeStatus/<?= $fee->fee_head; ?>/1"
                                                    class="text-danger">Inactive</h5></p>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td>*</td>
                                <td>*</td>
                                <td>*</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        // Add an input event listener to the "Fee Group" input box
        $('#fee_group').on('input', function () {
            //filter using the fee group vlalue
            var inputText = $(this).val().toLowerCase();

            $('tbody tr').each(function () {
                var feeGroupText = $(this).find('td:nth-child(2)').text().toLowerCase(); 

                if (feeGroupText.includes(inputText)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });

        $('#fee_head').on('input', function () {
            //filter using the fee head value
            var inputText = $(this).val().toLowerCase();

            $('tbody tr').each(function () {
                var feeGroupText = $(this).find('td:nth-child(3)').text().toLowerCase(); 

                if (feeGroupText.includes(inputText)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
        
    });
</script>