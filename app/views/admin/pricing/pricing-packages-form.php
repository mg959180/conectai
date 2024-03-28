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
        <h1 class="h3 mb-0 text-gray-800">Plans Pricing List</h1>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Plans Pricing List</h6>
        </div>
        <div class="card-body">
            <form action="<?= SITE_ADMIN_URL . 'pricing/save-plans-packages' ?>" method="post" id="save-form" class="g-3" enctype="multipart/form-data">
                <div class="row mb-3">
                    <input type="hidden" name="mode" value="<?= $mode ?>">
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <label for="country">Select Country</label>
                        <select class="form-select form-control select2" id="country" required="" name="country">
                            <option value="">Select Country</option>
                            <?php if (isset($countries_data)) { ?>
                                <?php foreach ($countries_data as $cnt) { ?>
                                    <option value="<?= $cnt['cun_id'] ?>" <?= isset($edit_plans_prices['ppr_cun_id']) ? ($edit_plans_prices['ppr_cun_id'] == $cnt['cun_id'] ? 'selected' : '') : '' ?>>
                                        <?= $cnt['cun_name'] ?>
                                    </option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <label class="amount">Plan Amount</label>
                        <input type="number" name="amount" id="amount" class="form-control" placeholder="Plan Amount" value="<?= isset($edit_plans_prices['ppr_amount']) ? $edit_plans_prices['ppr_amount'] : '' ?>" required>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2">
                        <label>Select Duration</label>
                        <select class="form-select form-control select2" id="duration" name="duration">
                            <option value=""> Select</option>
                            <?php foreach (WEBSITE_DURATION as $wk => $wv) { ?>
                                <option value="<?= $wk ?>" <?= (isset($edit_plans_prices['ppr_duration']) ? ($edit_plans_prices['ppr_duration'] == $wk ? 'selected' : '') : '') ?>><?= $wv ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2">
                        <label>Select Status</label>
                        <select class="form-select form-control select2" id="status" name="status">
                            <option value=""> Select</option>
                            <option value="1" <?= (isset($edit_plans_prices['ppr_status']) ? ($edit_plans_prices['ppr_status'] == 1 ? 'selected' : '') : '') ?>>Active</option>
                            <option value="0" <?= (isset($edit_plans_prices['ppr_status']) ? ($edit_plans_prices['ppr_status'] == 0 ? 'selected' : '') : '') ?>>inactive</option>
                        </select>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2">
                        <div class="btn-group mt-4">
                            <input type="hidden" name="mid" value="<?= isset($id) ? $id : '' ?>">
                            <button type="submit" name="submit_plan_prices" class="btn btn-sm btn-success" id="submit_plan_prices"><?= isset($edit_plans_prices) && !empty($edit_plans_prices) ? 'Update' : 'Add' ?></button>
                            <?php if (isset($edit_plans_prices) && !empty($edit_plans_prices)) { ?>
                                <input type="hidden" name="id" value="<?= isset($edit_plans_prices['ppr_id']) ? ($edit_plans_prices['ppr_id']) : '' ?>">
                                <a href="<?= SITE_ADMIN_URL . 'pricing/define-plans-packages/' . encryptData($edit_plans_prices['ppr_plan_id']) ?>" class="btn btn-sm btn-danger">
                                    clear
                                </a>
                            <?php   } ?>
                        </div>
                    </div>
                </div>
            </form>


            <div class="table-responsive">
                <?php
                if (!empty($plans_prices)) { ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" style="width:20%;">Plan Duration</th>
                                <th scope="col" style="width:10%;">Plan Prices</th>
                                <th scope="col" style="width:20%;">Plan Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($plans_prices as $rk => $rV) {  ?>
                                <tr>
                                    <th scope="row"><?= ++$rk ?></th>
                                    <td><?= WEBSITE_DURATION[$rV['ppr_duration']] ?></td>
                                    <td><?= $rV['currency_code'] . ' ' . $rV['ppr_amount'] ?></td>
                                    <td><?= ($rV['ppr_status'] ? 'Active' : 'Inactive') ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-primary" style="margin-right: 5px; padding:5px;" href="<?= SITE_ADMIN_URL . 'pricing/define-plans-packages/' . encryptData($rV['ppr_plan_id']) . '/' . encryptData($rV['ppr_id']) ?>">
                                                Edit
                                            </a>
                                            <a class="btn btn-sm btn-danger" style="margin-right: 5px; padding:5px;" onclick="deleteData(this)" title="Click to delete" href="javascript:void(0);" data-href="<?= SITE_ADMIN_URL . 'pricing/delete-plans-packages/' . encryptData($rV['ppr_plan_id']) . '/' . encryptData($rV['ppr_id']) ?>">
                                                Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } else { ?>
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tbody>
                            <td colspan="6">No Records Found</td>
                        </tbody>
                    </table>
                <?php } ?>
            </div>


            <a href="<?= SITE_ADMIN_URL . 'pricing' ?>" class="btn btn-sm btn-warning ">
                Back
            </a>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<link rel="stylesheet" href="<?= SITE_URL ?>public/front/assets/css/sweet_alert.css" />
<script src="<?= SITE_URL ?>public/front/assets/js/sweet_alert.js"></script>
<script>
    function deleteData(_this) {
        let link = _this.getAttribute('data-href');
        Swal.fire({
                title: "Are you sure?",
                text: "You will not be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = link;
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    }
</script>


<script src="<?= ADMIN_ASSETS_URL . 'vendor/jquery/jquery.validate.min.js' ?>"></script>
<script>
    $('#save-form').validate({
        rules: {
            amount: {
                required: true,
            },
            duration: {
                required: true,
            },
            country: {
                required: true,
            },
            status: {
                required: true,
            },
        },
        messages: {
            amount: {
                required: "Plan Amount must be required",
            },
            duration: {
                required: "Plan Duration must be required",
            },
            country: {
                required: "Plan Country must be required",
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