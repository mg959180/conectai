<!-- Begin Page Content -->
<style>
    .error {
        color: #e12626;
        font-size: 16px;
        width: -webkit-fill-available !important;
    }
</style>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pricing Form</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="user" id="plans-form" method="post" action="<?= SITE_ADMIN_URL . 'pricing/save-plans'; ?>" enctype="multipart/form-data">
                <?php if ($mode == 'edit') { ?>
                    <input type="hidden" name="id" value="<?= $pricing_form_data['plan_id'] ?>">
                <?php } ?>
                <input type="hidden" name="mode" value="<?= $mode ?>">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Plans Name</label>
                            <input type="text" id="name" class="form-control " placeholder="Plans Name" name="name" value="<?= $pricing_form_data['plan_name'] ?? '' ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="code">Plans Code</label>
                            <input type="text" class="form-control " id="code" name="code" value="<?= $pricing_form_data['plan_code'] ?? '' ?>" placeholder="Plans Code">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="short_desc">Plans Short Desc</label>
                            <input type="text" id="short_desc" class="form-control " placeholder="Plans Short Desc" value="<?= $pricing_form_data['plan_short_desc'] ?? '' ?>" name="short_desc">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="desc">Plans Desc</label>
                            <textarea id="desc" class="form-control " placeholder="Plans Desc" rows="2" name="desc"><?= $pricing_form_data['plan_desc'] ?? '' ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input class="form-checkbox" type="checkbox" role="switch" name="best_selling" id="best_selling" <?= (isset($pricing_form_data['plan_best_selling']) ? ($pricing_form_data['plan_best_selling'] == 1 ? 'checked' : '') : '') ?>>
                            <label for="best_selling">Plans best selling</label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <label for="sort_order">Display Order</label>
                        <input type="number" name="sort_order" id="sort_order" class="form-control" value="<?= $pricing_form_data['plan_sort_order'] ?? '' ?>" placeholder="Plan display order">
                    </div>
                    <div class="col-sm-3">
                        <label for="status">Select Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="">Select</option>
                            <option value="1" <?= (isset($pricing_form_data['plan_status']) ? ($pricing_form_data['plan_status'] == 1 ? 'selected' : '') : '') ?>>Active</option>
                            <option value="0" <?= (isset($pricing_form_data['plan_status']) ? ($pricing_form_data['plan_status'] == 0 ? 'selected' : '') : '') ?>>inactive</option>
                        </select>
                    </div>
                </div>
                <button type="submit" name="save_plans" class="btn btn-sm btn-primary ">
                    Save
                </button>
                <a href="<?= SITE_ADMIN_URL . 'pricing' ?>" class="btn btn-sm btn-warning ">
                    Back
                </a>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


<script src="<?= ADMIN_ASSETS_URL . 'vendor/jquery/jquery.validate.min.js' ?>"></script>
<script>
    $('#plans-form').validate({
        rules: {
            name: {
                required: true,
            },
            code: {
                required: true,
            },
            short_desc: {
                required: true,
                maxlength: 200,
            },
            desc: {
                required: true,
            },
            status: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "Plan Title must be required",
            },
            code: {
                required: "Plan Code must be required",
            },
            short_desc: {
                required: "Plan Short Description must be required",
            },
            desc: {
                required: "Description must be required",
            },
            status: {
                required: "Status must be required",
            },
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
</script>