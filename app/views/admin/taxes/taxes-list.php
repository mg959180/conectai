<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Taxes List</h1>
        <a href="<?= SITE_ADMIN_URL . 'taxes/mode'?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add</a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Taxes</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if (count($taxes_data) > 0) { ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tax ID</th>
                                <th>Tax Name</th>
                                <th>Tax Value</th>
                                <th>Tax Country Name</th>
                                <th>Tax Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($taxes_data as $tax_data) { ?>
                                <tr>
                                    <td><?= $tax_data['tax_id'] ?></td>
                                    <td><?= $tax_data['tax_name'] ?></td>
                                    <td><?= $tax_data['tax_value'] . '-' . ($tax_data['tax_value_type'] == 1 ? '%' : 'OFF') ?></td>
                                    <td><?= $tax_data['cnt_name'] ?></td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control" onchange="changeStatus('<?= $tax_data['tax_id'] ?>',this)">
                                                <option value="1" <?= $tax_data['tax_status'] == 1 ? 'selected' : '' ?>>Active</option>
                                                <option value="0" <?= $tax_data['tax_status'] == 0 ? 'selected' : '' ?>>inactive</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <a href="<?= SITE_ADMIN_URL . 'taxes/mode/' . $tax_data['tax_id'] ?>" class="btn btn-sm btn-info"> Edit</a>
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
            xhr.open("POST", "<?= SITE_ADMIN_URL ?>taxes/taxes-status", true);
            xhr.onload = function() {
                let res = JSON.parse(this.response);
                custom_alert(res.type, res.msg);
            }
            xhr.send(data);
        }
    }
</script>