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
                <div>
                    <h6 style="font-weight: bold;">Website Settings</h2>
                </div>
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
                    <div class="col-sm-3">
                        <label for="email_verification_time">Email Verification Time</label>
                        <select class="form-control" name="email_verification_time" id="email_verification_time">
                            <option value="">Select</option>
                            <option value="1" <?= (!empty($website_data['wes_email_verification_time']) ? ($website_data['wes_email_verification_time'] == (1 * 60) ? 'selected' : '') : '') ?>>1 Minutes</option>
                            <option value="2" <?= (!empty($website_data['wes_email_verification_time']) ? ($website_data['wes_email_verification_time'] == (2 * 60) ? 'selected' : '') : '') ?>>2 Minutes</option>
                            <option value="3" <?= (!empty($website_data['wes_email_verification_time']) ? ($website_data['wes_email_verification_time'] == (3 * 60) ? 'selected' : '') : '') ?>>3 Minutes</option>
                            <option value="4" <?= (!empty($website_data['wes_email_verification_time']) ? ($website_data['wes_email_verification_time'] == (4 * 60) ? 'selected' : '') : '') ?>>4 Minutes</option>
                            <option value="5" <?= (!empty($website_data['wes_email_verification_time']) ? ($website_data['wes_email_verification_time'] == (5 * 60) ? 'selected' : '') : '') ?>>5 Minutes</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label for="otp_attempts">Email OTP Attempts</label>
                        <select class="form-control" name="otp_attempts" id="otp_attempts">
                            <option value="">Select</option>
                            <option value="1" <?= (!empty($website_data['wes_otp_attempts']) ? ($website_data['wes_otp_attempts'] == 1 ? 'selected' : '') : '') ?>>1</option>
                            <option value="2" <?= (!empty($website_data['wes_otp_attempts']) ? ($website_data['wes_otp_attempts'] == 2 ? 'selected' : '') : '') ?>>2</option>
                            <option value="3" <?= (!empty($website_data['wes_otp_attempts']) ? ($website_data['wes_otp_attempts'] == 3 ? 'selected' : '') : '') ?>>3</option>
                            <option value="4" <?= (!empty($website_data['wes_otp_attempts']) ? ($website_data['wes_otp_attempts'] == 4 ? 'selected' : '') : '') ?>>4</option>
                            <option value="5" <?= (!empty($website_data['wes_otp_attempts']) ? ($website_data['wes_otp_attempts'] == 5 ? 'selected' : '') : '') ?>>5</option>
                        </select>
                    </div>
                </div>
                <div>
                    <h6 style="font-weight: bold;">Mail Settings</h2>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <label for="mail_status">Mailer Active</label>
                        <select class="form-control" name="mail_status" id="mail_status">
                            <option value="">Select</option>
                            <option value="1" <?= (!empty($website_data['wes_mail_active']) ? ($website_data['wes_mail_active'] == 1 ? 'selected' : '') : '') ?>>Active</option>
                            <option value="0" <?= (!empty($website_data['wes_mail_active']) ? ($website_data['wes_mail_active'] == 0 ? 'selected' : '') : '') ?>>inactive</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <label for="mail_name">Mailer Name</label>
                        <input type="text" class="form-control" id="mail_name" name="mail_name" value="<?= $website_data['wes_mailer'] ?? '' ?>" placeholder="Website Mailer Name">
                    </div>
                    <div class="col-sm-2">
                        <label for="mail_host">Mailer Host</label>
                        <input type="text" class="form-control" id="mail_host" name="mail_host" value="<?= $website_data['wes_mailer_host'] ?? '' ?>" placeholder="Website Mailer Host">
                    </div>
                    <div class="col-sm-2">
                        <label for="mail_port">Mailer Port</label>
                        <input type="text" class="form-control" id="mail_port" name="mail_port" value="<?= $website_data['wes_mailer_port'] ?? '' ?>" placeholder="Website Mailer Port">
                    </div>
                    <div class="col-sm-2">
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
                <div>
                    <h6 style="font-weight: bold;">OpenAi Settings</h2>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="open_ai_uid">OpenAi User Id</label>
                        <input type="text" class="form-control" id="open_ai_uid" name="open_ai_uid" value="<?= $website_data['wes_open_ai_uid'] ?? '' ?>" placeholder="Website OpenAi User Name">
                    </div>
                    <div class="col-sm-4">
                        <label for="open_ai_upass">OpenAi User Password</label>
                        <input type="text" class="form-control" id="open_ai_upass" name="open_ai_upass" value="<?= $website_data['wes_open_ai_upass'] ?? '' ?>" placeholder="Website OpenAi User Password">
                    </div>
                    <div class="col-sm-4">
                        <label for="open_ai_key">OpenAi Key</label>
                        <input type="text" class="form-control" id="open_ai_key" name="open_ai_key" value="<?= $website_data['wes_open_ai_key'] ?? '' ?>" placeholder="Website OpenAi Key">
                    </div>
                    <div class="col-sm-4">
                        <label for="open_ai_website_no">OpenAi No of Website For Demo</label>
                        <input type="text" class="form-control" id="open_ai_website_no" name="open_ai_website_no" value="<?= $website_data['wes_demo_websites'] ?? '' ?>" placeholder="OpenAi No of Website For Demo">
                    </div>
                    <div class="col-sm-4">
                        <label for="open_ai_website_no_pages">OpenAi No of Website Pages For Demo</label>
                        <input type="text" class="form-control" id="open_ai_website_no_pages" name="open_ai_website_no_pages" value="<?= $website_data['wes_demo_pages'] ?? '' ?>" placeholder="OpenAi No of Website Pages For Demo">
                    </div>
                    <div class="col-sm-4">
                        <label for="open_ai_demo_days">OpenAi Demo Days</label>
                        <select class="form-control" name="open_ai_demo_days" id="open_ai_demo_days">
                            <option value="">Select</option>
                            <option value="3" <?= (!empty($website_data['wes_open_ai_demo_days']) ? ($website_data['wes_open_ai_demo_days'] == 3 ? 'selected' : '') : '') ?>>3 days</option>
                            <option value="5" <?= (!empty($website_data['wes_open_ai_demo_days']) ? ($website_data['wes_open_ai_demo_days'] == 5 ? 'selected' : '') : '') ?>>5 days</option>
                            <option value="7" <?= (!empty($website_data['wes_open_ai_demo_days']) ? ($website_data['wes_open_ai_demo_days'] == 7 ? 'selected' : '') : '') ?>>7 days</option>
                            <option value="10" <?= (!empty($website_data['wes_open_ai_demo_days']) ? ($website_data['wes_open_ai_demo_days'] == 10 ? 'selected' : '') : '') ?>>10 days</option>
                            <option value="15" <?= (!empty($website_data['wes_open_ai_demo_days']) ? ($website_data['wes_open_ai_demo_days'] == 15 ? 'selected' : '') : '') ?>>15 days</option>
                            <option value="30" <?= (!empty($website_data['wes_open_ai_demo_days']) ? ($website_data['wes_open_ai_demo_days'] == 30 ? 'selected' : '') : '') ?>>30 days</option>
                        </select>
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