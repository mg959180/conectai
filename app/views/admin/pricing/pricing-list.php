<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pricing List</h1>
        <a href="<?= SITE_ADMIN_URL . 'pricing/plans-form' ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add</a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pricing List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if (count($pricing_data) > 0) { ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Plan Name</th>
                                <th scope="col">Plan Code</th>
                                <th scope="col">Best Selling</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start_counter = 1;
                            foreach ($pricing_data as $plan_data) { ?>
                                <tr>
                                    <td><?= $start_counter++; ?></td>
                                    <td><?= $plan_data['plan_name']; ?></td>
                                    <td><?= $plan_data['plan_code']; ?></td>
                                    <td><?= ($plan_data['plan_best_selling'] ? 'Yes' : 'No'); ?></td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control" onchange="changeStatus('<?= $plan_data['plan_id'] ?>',this)">
                                                <option value="1" <?= ($plan_data['plan_status'] == 1 ? 'selected' : ''); ?>>Active</option>
                                                <option value="0" <?= ($plan_data['plan_status'] == 0 ? 'selected' : ''); ?>>inactive</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-primary" style="margin-right: 5px; padding:5px;" title="Click to Define Plans Prices" href="<?= SITE_ADMIN_URL . 'pricing/define-plans-packages/' . encryptData($plan_data['plan_id']) ?>">
                                                Define Prices
                                            </a>
                                            <a class="btn btn-sm btn-primary" style="margin-right: 5px; padding:5px;" title="Click to Define Plans Features" href="<?= SITE_ADMIN_URL . 'pricing/define-plans-features/' . encryptData($plan_data['plan_id']) ?>">
                                                Define Features
                                            </a>
                                            <a class="btn btn-sm btn-primary" style="margin-right: 5px; padding:5px;" title="Click to edit Plans" href="<?= SITE_ADMIN_URL . 'pricing/plans-form/' . encryptData($plan_data['plan_id']) ?>">
                                                Edit Plans
                                            </a>
                                            <a class="btn btn-sm btn-danger" onclick="deleteData(this)" data-href="<?= SITE_ADMIN_URL . 'pricing/delete-plans/' . encryptData($plan_data['plan_id']) ?>" style="margin-right: 5px; padding:5px;" title="Click to delete" href="javascript:void(0);">
                                                Delete Plans
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
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<link rel="stylesheet" href="<?= SITE_URL ?>public/front/assets/css/sweet_alert.css" />
<script src="<?= SITE_URL ?>public/front/assets/js/sweet_alert.js"></script>
<script>
    function changeStatus(id, _this) {
        let this_item = _this;
        if (id > 0) {
            let status = this_item.value;
            let data = new FormData();
            data.append('id', id);
            data.append('status', status);
            data.append('change_status', 1);
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "<?= SITE_ADMIN_URL ?>pricing/plans-status", true);
            xhr.onload = function() {
                let res = JSON.parse(this.response);
                custom_alert(res.type, res.msg);
            }
            xhr.send(data);
        }
    }

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