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
                            <option value="1" <?= ($website_data['wes_maintenance_mode'] == 1 ? 'selected' : '') ?>>Active</option>
                            <option value="0" <?= ($website_data['wes_maintenance_mode'] == 0 ? 'selected' : '') ?>>inactive</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label for="start_date">Maintenance Start Date</label>
                        <input type="date" class="form-control " id="start_date" name="start_date" value="<?= change_to_custom_date($website_data['wes_maintenance_start_time'], SYSTEM_DATE_TIME) ?? '' ?>" placeholder="Start Date">
                    </div>
                    <div class="col-sm-3">
                        <label for="end_date">Tax Value</label>
                        <input type="date" class="form-control " id="end_date" name="end_date" value="<?= change_to_custom_date($website_data['wes_maintenance_end_time'], SYSTEM_DATE_TIME) ?? '' ?>" placeholder="End Date">
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