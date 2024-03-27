<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Meta Details List</h1>
        <a href="<?= SITE_ADMIN_URL . 'meta-details/mode' ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add</a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Meta Details</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if (count($meta_data) > 0) { ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th width="10%">Meta Image</th>
                                <th width="30%">Meta Name</th>
                                <th width="30%">Meta Url</th>
                                <th width="10%">Meta lang</th>
                                <th width="10%">Meta Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($meta_data as $me_key => $me_data) { ?>
                                <tr>
                                    <td><?= ++$me_key ?></td>
                                    <td><img src="<?php echo !empty($me_data['wmd_meta_image']) ? UPLOAD_URL . 'admin/meta_images/' . $me_data['wmd_meta_image'] : '#'; ?>" class="img-thumbnail img-responsive d-block rounded " onerror=" src='<?= UPLOAD_URL . 'admin/default.png' ?>'" style="height: 100px; width: 100px;"></td>
                                    <td><?= $me_data['wmd_name'] ?></td>
                                    <td><?= $me_data['wmd_website_url'] ?></td>
                                    <td><?= $me_data['wmd_lang'] ?></td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control" onchange="changeStatus('<?= $me_data['wmd_id'] ?>',this)">
                                                <option value="1" <?= $me_data['wmd_active'] == 1 ? 'selected' : '' ?>>Active</option>
                                                <option value="0" <?= $me_data['wmd_active'] == 0 ? 'selected' : '' ?>>inactive</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <a href="<?= SITE_ADMIN_URL . 'meta-details/mode/' . $me_data['wmd_id'] ?>" class="btn btn-sm btn-info"> Edit</a>
                                            <a href="javascript:void(0);" data-href="<?= SITE_ADMIN_URL . 'meta-details/delete/' . encryptData($me_data['wmd_id']) ?>" class="btn btn-sm btn-danger" onclick="deleteData(this)"> Delete</a>
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
<?php if (count($meta_data) > 0) { ?>
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
                xhr.open("POST", "<?= SITE_ADMIN_URL ?>meta-details/meta-details-status", true);
                xhr.onload = function() {
                    let res = JSON.parse(this.response);
                    custom_alert(res.type, res.msg);
                }
                xhr.send(data);
            }
        }
    </script>
<?php } ?>
<link rel="stylesheet" href="<?= SITE_URL ?>public/front/assets/css/sweet_alert.css" />
<script src="<?= SITE_URL ?>public/front/assets/js/sweet_alert.js"></script>
<script>
    function deleteData(_this) {
        let link = _this.getAttribute('data-href');
        console.log(link);
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