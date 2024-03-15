<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Blogs List</h1>
        <a href="<?= SITE_ADMIN_URL . 'blogs/mode' ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add</a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Blogs</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if (count($blogs_data) > 0) { ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th width="35%">Blog Name</th>
                                <th width="35%">Blog Slug</th>
                                <th width="10%">Blog Display Order</th>
                                <th width="10%">Blog Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($blogs_data as $blo_key => $blo_data) { ?>
                                <tr>
                                    <td><?= ++$blo_key ?></td>
                                    <td><?= $blo_data['blo_title'] ?></td>
                                    <td><?= $blo_data['blo_slug'] ?></td>
                                    <td>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="sort_order" onchange="changeOrder('<?= $blo_data['blo_id'] ?>',this)" value="<?= $blo_data['blo_sort_order'] ?>">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control" onchange="changeStatus('<?= $blo_data['blo_id'] ?>',this)">
                                                <option value="1" <?= $blo_data['blo_status'] == 1 ? 'selected' : '' ?>>Active</option>
                                                <option value="0" <?= $blo_data['blo_status'] == 0 ? 'selected' : '' ?>>inactive</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <a href="<?= SITE_ADMIN_URL . 'blogs/mode/' . $blo_data['blo_id'] ?>" class="btn btn-sm btn-info"> Edit</a>
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
<?php if (count($blogs_data) > 0) { ?>
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
                xhr.open("POST", "<?= SITE_ADMIN_URL ?>blogs/blogs-status", true);
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
                xhr.open("POST", "<?= SITE_ADMIN_URL ?>blogs/blogs-order", true);
                xhr.onload = function() {
                    let res = JSON.parse(this.response);
                    custom_alert(res.type, res.msg);
                }
                xhr.send(data);
            }
        }
    </script>
<?php } ?>