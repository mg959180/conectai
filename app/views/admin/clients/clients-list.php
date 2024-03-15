<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Clients List</h1>
        <a href="<?= SITE_ADMIN_URL . 'clients/mode' ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add</a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Clients</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if (count($clients_data) > 0) { ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th width="10%">Client Image</th>
                                <th width="30%">Client Name</th>
                                <th width="30%">Client Url</th>
                                <th width="10%">Client Display Order</th>
                                <th width="10%">Client Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($clients_data as $cli_key => $cli_data) { ?>
                                <tr>
                                    <td><?= ++$cli_key ?></td>
                                    <td><img src="<?php echo !empty($cli_data['poi_image']) ? UPLOAD_URL . 'admin/client_images/' . $cli_data['poi_image'] : '#'; ?>" class="img-thumbnail img-responsive d-block rounded " onerror=" src='<?= UPLOAD_URL . 'admin/default.png' ?>'" style="height: 100px; width: 100px;"></td>
                                    <td><?= $cli_data['poi_title'] ?></td>
                                    <td><?= $cli_data['poi_desc'] ?></td>
                                    <td>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="sort_order" onchange="changeOrder('<?= $cli_data['poi_id'] ?>',this)" value="<?= $cli_data['poi_sort_order'] ?>">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control" onchange="changeStatus('<?= $cli_data['poi_id'] ?>',this)">
                                                <option value="1" <?= $cli_data['poi_status'] == 1 ? 'selected' : '' ?>>Active</option>
                                                <option value="0" <?= $cli_data['poi_status'] == 0 ? 'selected' : '' ?>>inactive</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <a href="<?= SITE_ADMIN_URL . 'clients/mode/' . $cli_data['poi_id'] ?>" class="btn btn-sm btn-info"> Edit</a>
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
<?php if (count($clients_data) > 0) { ?>
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
                xhr.open("POST", "<?= SITE_ADMIN_URL ?>clients/clients-status", true);
                xhr.onload = function() {
                    let res = JSON.parse(this.response);
                    custom_alert(res.type, res.msg);
                }
                xhr.send(data);
            }
        }

        function changeOrder(id, _this) {
            let this_item = _this;
            if (id > 0) {
                let status = this_item.value;
                let data = new FormData();
                data.append('id', id);
                data.append('order', status);
                data.append('change_order', 1);
                let xhr = new XMLHttpRequest();
                xhr.open("POST", "<?= SITE_ADMIN_URL ?>clients/clients-order", true);
                xhr.onload = function() {
                    let res = JSON.parse(this.response);
                    custom_alert(res.type, res.msg);
                }
                xhr.send(data);
            }
        }
    </script>
<?php } ?>