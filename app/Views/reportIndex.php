<?= $this->extend("/layout/structure1") ?>
<?= $this->section("content"); ?>

<style>
    h1 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    p {
        font-size: 18px;
        line-height: 1.5;
    }

    a {
        text-decoration: none;
    }

    .card i {
        font-size: 4rem;
        color: white;
        left: 5px;
    }

    .card {
        height: 6em;
    }

    .card span {
        color: white;
        font-size: 2rem;
    }

    #functionCards {
        border-radius: 20px;
    }
</style>
<!-- modal tofilter data for report genaration -->
<div class="modal fade" id="feeReportModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-headder d-flex justify-content-end">
                <button type="button" class="btn btn-danger btn-close p-2" data-dismiss="modal"></button>
            </div>
            <?= form_open('reports/feeReport') ?>
            <div class="model-body p-3 mx-3">
                <div class="row">
                    <div class="col"><input type="text" name="accadamicYear" class="form form-control form-control-sm"
                            placeholder="Accadamic Year"></div>
                    <div class="col">
                        <select name="status" id="" class="form form-control form-control-sm">
                            <option value="1">Paid</option>
                            <option value="0">Due</option>
                        </select>
                    </div>
                    <div class="col" style="display:none">
                        <select name="section" id="" class="form form-control form-control-sm">
                            <option value="">Section</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2" style="display:none">
                    <div class="col">
                        <select name="program" id="" class="form form-control form-control-sm">
                            <option value="bca">BCA</option>
                            <option value="b.com">B.Com</option>
                            <option value="bba">BBA</option>
                            <option value="bsc">BSc Electronics</option>
                            <option value="msc">MSc Electronics</option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="status" id="" class="form form-control form-control-sm">
                            <option value="1">Paid</option>
                            <option value="0">Due</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="model-footer text-end p-2 ">
                <input type="submit" value="Next" class="btn btn-primary">
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
<!-- modal end -->

<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-12 py-1" id="options">
        <a href="" data-toggle="modal" data-target="#feeReportModal">
            <div class="card bg-info" id="functionCards">
                <div class="row">
                    <div class="col-3">
                        <i class="bi bi-journal-plus"></i>
                    </div>
                    <div class="col-9 py-4"><span>Fee Report </span></div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 py-1">
        <a href="<?= base_url() ?>Reports/yearlyDueReport">
            <div class="card  bg-primary" id="functionCards">
                <div class="row">
                    <div class="col-3">
                        <i class="bi bi-person-lines-fill"></i>
                    </div>
                    <div class="col-9"><span>Yearly Collection Report</span></div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 py-1">

    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 py-1">

    </div>
</div>

<?= $this->endSection() ?>