<!-- Begin Page Content -->

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $page_title ?></h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="user" method="post" action="<?= SITE_ADMIN_URL . 'settings'; ?>">
                <input type="hidden" name="id" value="<?= $website_data['wes_id'] ?>">
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="name">Website Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $website_data['wes_name'] ?? '' ?>" placeholder="Website Name">
                    </div>
                    <div class="col-sm-3">
                        <label for="maintenance_mode">Select Maintenance Status</label>
                        <select class="form-control" name="maintenance_mode" id="maintenance_mode">
                            <option value="">Select</option>
                            <option value="1" <?= (!empty($website_data['wes_maintenance_mode']) ? ($website_data['wes_maintenance_mode'] == 1 ? 'selected' : '') : '') ?>>Active</option>
                            <option value="0" <?= (!empty($website_data['wes_maintenance_mode']) ? ($website_data['wes_maintenance_mode'] == 0 ? 'selected' : '') : '') ?>>inactive</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label for="start_date">Maintenance Start Date</label>
                        <input type="date" class="form-control " id="start_date" name="start_date" value="<?= change_to_custom_date($website_data['wes_maintenance_start_time'], SYSTEM_DATE_TIME) ?? '' ?>" placeholder="Start Date">
                    </div>
                    <div class="col-sm-3">
                        <label for="end_date">Maintenance End Value</label>
                        <input type="date" class="form-control " id="end_date" name="end_date" value="<?= change_to_custom_date($website_data['wes_maintenance_end_time'], SYSTEM_DATE_TIME) ?? '' ?>" placeholder="End Date">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="mail_name">Mailer Name</label>
                        <input type="text" class="form-control" id="mail_name" name="mail_name" value="<?= $website_data['wes_mailer'] ?? '' ?>" placeholder="Website Mailer Name">
                    </div>
                    <div class="col-sm-3">
                        <label for="mail_host">Mailer Host</label>
                        <input type="text" class="form-control" id="mail_host" name="mail_host" value="<?= $website_data['wes_mailer_host'] ?? '' ?>" placeholder="Website Mailer Host">
                    </div>
                    <div class="col-sm-3">
                        <label for="mail_port">Mailer Port</label>
                        <input type="text" class="form-control" id="mail_port" name="mail_port" value="<?= $website_data['wes_mailer_port'] ?? '' ?>" placeholder="Website Mailer Port">
                    </div>
                    <div class="col-sm-3">
                        <label for="mail_enc">Mailer Encryption </label>
                        <input type="text" class="form-control" id="mail_enc" name="mail_enc" value="<?= $website_data['wes_mailer_encryption'] ?? '' ?>" placeholder="Website Mailer Encryption">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="mail_u_name">Mailer Username </label>
                        <input type="text" class="form-control" id="mail_u_name" name="mail_u_name" value="<?= $website_data['wes_mailer_uname'] ?? '' ?>" placeholder="Website Mailer User Name">
                    </div>
                    <div class="col-sm-3">
                        <label for="mail_u_pass">Mailer Password </label>
                        <input type="text" class="form-control" id="mail_u_pass" name="mail_u_pass" value="<?= $website_data['wes_mailer_upass'] ?? '' ?>" placeholder="Website Mailer User Password">
                    </div>
                    <div class="col-sm-3">
                        <label for="mail_from_address">Mailer From Address</label>
                        <input type="text" class="form-control" id="mail_from_address" name="mail_from_address" value="<?= $website_data['wes_mailer_from_address'] ?? '' ?>" placeholder="Website Mailer From Address">
                    </div>
                    <div class="col-sm-3">
                        <label for="mail_from_name">Mailer From Name</label>
                        <input type="text" class="form-control" id="mail_from_name" name="mail_from_name" value="<?= $website_data['wes_mailer_from_name'] ?? '' ?>" placeholder="Website Mailer From Name">
                    </div>
                </div>
                <button type="submit" name="save_setting" class="btn btn-sm btn-primary ">
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