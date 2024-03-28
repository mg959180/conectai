<style>
    .error {
        color: #e12626;
        font-size: 16px;
        width: -webkit-fill-available !important;
    }
</style>

<link rel="stylesheet" href="<?= ADMIN_ASSETS_URL . 'vendor/select2/select2.min.css' ?>">
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Plans Features List</h1>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Plans Features List</h6>
        </div>
        <div class="card-body">
            <form action="<?= SITE_ADMIN_URL . 'pricing/save-plans-features' ?>" method="post" id="save-form" class="g-3" enctype="multipart/form-data">
                <div class="row mb-3">
                    <input type="hidden" name="mode" value="<?= $mode ?>">
                    <div class="col-sm-2 col-md-2 col-lg-2">
                        <label class="feature_title">Feature Title</label>
                        <input type="text" name="feature_title" id="feature_title" class="form-control" placeholder="Feature Title " value="<?= isset($edit_results['pfe_title']) ? $edit_results['pfe_title'] : '' ?>" required>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2">
                        <label class="feature_value">Feature Value</label>
                        <input type="text" name="feature_value" id="feature_value" class="form-control" placeholder="Feature Value " value="<?= isset($edit_results['pfe_value']) ? $edit_results['pfe_value'] : '' ?>">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <label class="desc">Feature Description</label>
                        <input type="text" name="desc" id="desc" class="form-control" placeholder="Feature Desc" value="<?= isset($edit_results['pfe_desc']) ? $edit_results['pfe_desc'] : '' ?>" required>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <label class="extra_desc">Feature Extra Desc</label>
                        <input type="text" name="extra_desc" id="extra_desc" class="form-control" placeholder="Feature Extra Desc" value="<?= isset($edit_results['pfe_extra_desc']) ? $edit_results['pfe_extra_desc'] : '' ?>">
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2">
                        <label>Select Status</label>
                        <select class="form-select form-control select2" id="status" name="status">
                            <option value=""> Select</option>
                            <option value="1" <?= (isset($edit_results['pfe_status']) ? ($edit_results['pfe_status'] == 1 ? 'selected' : '') : '') ?>>Active</option>
                            <option value="0" <?= (isset($edit_results['pfe_status']) ? ($edit_results['pfe_status'] == 0 ? 'selected' : '') : '') ?>>inactive</option>
                        </select>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <label>Select Plans Price Duration</label>
                        <select class="form-select form-control select2-multiple" multiple id="price" name="price[]">
                            <option value="">Select Plans Price Duration</option>
                            <?php foreach ($plans_prices  as $prK => $prV) { ?>
                                <option value="<?= $prV['ppr_id'] ?>" <?= (isset($edit_results['pfe_ppr_ids']) ? (in_array($prV['ppr_id'], explode(',', $edit_results['pfe_ppr_ids'])) ? 'selected' : '') : '') ?>>
                                    <?= $prV['currency_code'] . $prV['ppr_amount'] . ' ' . WEBSITE_DURATION[$prV['ppr_duration']] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-sm-2">
                        <div class="form-group mt-5">
                            <input class="form-checkbox" type="checkbox" role="switch" name="required" id="required" <?= (isset($edit_results['pfe_required']) ? ($edit_results['pfe_required'] == 1 ? 'checked' : '') : '') ?>>
                            <label for="required">Feature Required</label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group mt-5">
                            <input class="form-checkbox" type="checkbox" role="switch" name="show_in_plans" id="show_in_plans" <?= (isset($edit_results['pfe_show_in_plans']) ? ($edit_results['pfe_show_in_plans'] == 1 ? 'checked' : '') : '') ?>>
                            <label for="show_in_plans">Feature Show In Plans</label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <label for="sort_order">Display Order</label>
                        <input type="number" name="sort_order" id="sort_order" class="form-control" value="<?= $edit_results['pfe_sort_order'] ?? '' ?>" placeholder="Feature display order">
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2">
                        <div class="btn-group mt-5">
                            <input type="hidden" name="mid" value="<?= isset($id) ? $id : '' ?>">
                            <button type="submit" name="submit_plan_prices" class="btn btn-sm btn-success" id="submit_plan_prices"><?= isset($edit_results) && !empty($edit_results) ? 'Update' : 'Add' ?></button>
                            <?php if (isset($edit_results) && !empty($edit_results)) { ?>
                                <input type="hidden" name="id" value="<?= isset($edit_results['pfe_id']) ? ($edit_results['pfe_id']) : '' ?>">
                                <a href="<?= SITE_ADMIN_URL . 'pricing/define-plans-packages/' . encryptData($edit_results['pfe_plan_id']) ?>" class="btn btn-sm btn-danger">
                                    clear
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </form>


            <div class="table-responsive">
                <?php
                if (!empty($plans_features)) { ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" style="width:20%;">Feature Price Names</th>
                                <th scope="col" style="width:10%;">Feature Title</th>
                                <th scope="col" style="width:10%;">Feature Value</th>
                                <th scope="col" style="width:20%;">Feature Desc</th>
                                <th scope="col" style="width:20%;">Feature Extra Desc</th>
                                <th scope="col" style="width:5%;">Feature Required</th>
                                <th scope="col" style="width:5%;">Feature Show In Plans</th>
                                <th scope="col" style="width:5%;">Display Order</th>
                                <th scope="col" style="width:5%;">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($plans_features as $rk => $rV) {  ?>
                                <tr>
                                    <th scope="row"><?= ++$rk ?></th>
                                    <td><?= !empty($rV['price_name']) ? $rV['price_name'] : '--' ?></td>
                                    <td><?= $rV['pfe_title'] ?></td>
                                    <td><?= !empty($rV['pfe_value']) ? $rV['pfe_value'] : '--' ?></td>
                                    <td><?= $rV['pfe_desc'] ?></td>
                                    <td><?= !empty($rV['pfe_extra_desc']) ? $rV['pfe_extra_desc'] : '--' ?></td>
                                    <td><?= ($rV['pfe_required'] == 1 ? 'Yes' : 'No') ?></td>
                                    <td><?= ($rV['pfe_show_in_plans'] == 1 ? 'Yes' : 'No') ?></td>
                                    <td><?= ($rV['pfe_status'] == 1 ? 'Active' : 'Inactive') ?></td>
                                    <td>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="sort_order" onchange="changeOrder('<?= $rV['pfe_id'] ?>',this)" value="<?= $rV['pfe_sort_order'] ?>">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-primary" style="margin-right: 5px; padding:5px;" href="<?= SITE_ADMIN_URL . 'pricing/define-plans-features/' . encryptData($rV['pfe_plan_id']) . '/' . encryptData($rV['pfe_id']) ?>">
                                                Edit
                                            </a>
                                            <a class="btn btn-sm btn-danger" style="margin-right: 5px; padding:5px;" onclick="deleteData(this)" title="Click to delete" href="javascript:void(0);" data-href="<?= SITE_ADMIN_URL . 'pricing/delete-plans-features/' . encryptData($rV['pfe_plan_id']) . '/' . encryptData($rV['pfe_id']) ?>">
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


<script src="<?= ADMIN_ASSETS_URL . 'vendor/select2/select2.min.js' ?>"></script>
<script src="<?= ADMIN_ASSETS_URL . 'vendor/jquery/jquery.validate.min.js' ?>"></script>
<script>
    $('#save-form').validate({
        rules: {
            feature_title: {
                required: true,
            },
            desc: {
                required: true,
            },
            sort_order: {
                required: true,
            },
            status: {
                required: true,
            },
        },
        messages: {
            feature_title: {
                required: "Feature Title must be required",
            },
            desc: {
                required: "Feature Desc must be required",
            },
            sort_order: {
                required: "Display order must be required",
            },
            status: {
                required: "Status must be required",
            },
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

    $(document).ready(function() {
       
    });

    $('.select2-multiple').select2();

    function changeOrder(id, _this) {
        let this_item = _this;
        if (id > 0) {
            let status = this_item.value;
            let data = new FormData();
            data.append('id', id);
            data.append('order', status);
            data.append('change_order', 1);
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "<?= SITE_ADMIN_URL ?>pricing/plans-features-order", true);
            xhr.onload = function() {
                let res = JSON.parse(this.response);
                custom_alert(res.type, res.msg);
            }
            xhr.send(data);
        }
    }
</script>