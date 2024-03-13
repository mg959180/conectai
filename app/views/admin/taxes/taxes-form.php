<!-- Begin Page Content -->

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $page_title ?></h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="user" method="post" action="<?= SITE_ADMIN_URL . 'taxes/save'; ?>">
                <?php if ($mode == 'edit') { ?>
                    <input type="hidden" name="id" value="<?= $taxes_data['tax_id'] ?>">
                    <input type="hidden" name="mode" value="edit">
                <?php } else { ?>
                    <input type="hidden" name="mode" value="add">
                <?php } ?>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="tax_name">Tax Name</label>
                        <input type="text" class="form-control" id="tax_name" name="tax_name" value="<?= $taxes_data['tax_name'] ?? '' ?>" placeholder="Tax Name">
                    </div>
                    <div class="col-sm-3">
                        <label for="tax_value">Tax Value</label>
                        <input type="text" class="form-control " id="tax_value" name="tax_value" value="<?= $taxes_data['tax_value'] ?? '' ?>" placeholder="Tax Value">
                    </div>
                    <div class="col-sm-3">
                        <label for="tax_country">Select Country</label>
                        <select class="form-control" name="tax_country" id="tax_country">
                            <option value="">Select</option>
                            <?php foreach ($countries_data as $cnV) { ?>
                                <option value="<?= $cnV['cun_id'] ?>" <?= (isset($taxes_data['tax_cnt_id']) ? ($taxes_data['tax_cnt_id'] == $cnV['cun_id'] ? 'selected' : '') : '') ?>><?= $cnV['cun_name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label for="tax_status">Select Status</label>
                        <select class="form-control" name="tax_status" id="tax_status">
                            <option value="">Select</option>
                            <option value="1" <?= (isset($taxes_data['tax_status']) ? ($taxes_data['tax_status'] == 1 ? 'selected' : '') : '') ?>>Active</option>
                            <option value="0" <?= (isset($taxes_data['tax_status']) ? ($taxes_data['tax_status'] == 0 ? 'selected' : '') : '') ?>>inactive</option>
                        </select>
                    </div>
                </div>
                <button type="submit" name="save_taxes" class="btn btn-sm btn-primary ">
                    Save
                </button>
                <a href="<?= SITE_ADMIN_URL . 'taxes' ?>" class="btn btn-sm btn-warning ">
                    Back
                </a>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->