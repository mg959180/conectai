<!-- Begin Page Content -->

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $page_title ?></h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="user" method="post" action="<?= SITE_ADMIN_URL . 'settings/payment-info-setting'; ?>">
                <input type="hidden" name="id" value="<?= $website_data['wes_id'] ?>">
                <div>
                    <h4 style="font-weight: bold;">Banks Settings</h4>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <label for="is_bank_active">Activate Bank</label>
                        <select class="form-control" name="is_bank_active" id="is_bank_active">
                            <option value="">Select</option>
                            <option value="1" <?= (!empty($website_data['wes_is_bank_active']) ? ($website_data['wes_is_bank_active'] == 1 ? 'selected' : '') : '') ?>>Active</option>
                            <option value="0" <?= (!empty($website_data['wes_is_bank_active']) ? ($website_data['wes_is_bank_active'] == 0 ? 'selected' : '') : '') ?>>inactive</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label for="bank_name">Bank Name</label>
                        <input type="text" class="form-control" id="bank_name" name="bank_name" value="<?= $website_data['wes_bank_name'] ?? '' ?>" placeholder="Bank Name">
                    </div>
                    <div class="col-sm-4">
                        <label for="bank_ac_holder_name">Bank A/C Holder Name</label>
                        <input type="text" class="form-control" id="bank_ac_holder_name" name="bank_ac_holder_name" value="<?= $website_data['wes_bank_ac_holder_name'] ?? '' ?>" placeholder="Website A/C Holder Name">
                    </div>
                    <div class="col-sm-3">
                        <label for="bank_ac_no">Bank A/C Number</label>
                        <input type="text" class="form-control" id="bank_ac_no" name="bank_ac_no" value="<?= $website_data['wes_bank_ac_no'] ?? '' ?>" placeholder="Bank A/C Number">
                    </div>
                    <div class="col-sm-3">
                        <label for="bank_ac_ifcs_no">Bank A/C IFCS Number</label>
                        <input type="text" class="form-control" id="bank_ac_ifcs_no" name="bank_ac_ifcs_no" value="<?= $website_data['wes_bank_ac_ifcs_no'] ?? '' ?>" placeholder="Bank A/C IFCS Number">
                    </div>
                </div>
                <button type="submit" name="save_payment_setting" class="btn btn-sm btn-primary ">
                    Save
                </button>
                <a href="<?= SITE_ADMIN_URL ?>" class="btn btn-sm btn-warning ">
                    Back
                </a>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->