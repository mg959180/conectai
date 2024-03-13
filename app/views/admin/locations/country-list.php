<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Countries List</h1>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Countries</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if (count($countries_data) > 0) { ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Country ID</th>
                                <th>Country Name</th>
                                <th>Country Currency</th>
                                <th>Country Currency Name</th>
                                <th>Country Currency Symbol</th>
                                <th>Country Nationality</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($countries_data as $cnt_data) { ?>
                                <tr>
                                    <td><?= $cnt_data['cun_id'] ?></td>
                                    <td><?= $cnt_data['cun_name'] ?></td>
                                    <td><?= $cnt_data['cun_currency'] ?></td>
                                    <td><?= $cnt_data['cun_currency_name'] ?></td>
                                    <td><?= $cnt_data['cun_currency_symbol'] ?></td>
                                    <td><?= $cnt_data['cun_nationality'] ?></td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control" onchange="changeStatus('<?= $cnt_data['cun_id'] ?>',this)">
                                                <option value="1" <?= $cnt_data['cun_status'] == 1 ? 'selected' : ''?>>Active</option>
                                                <option value="0" <?= $cnt_data['cun_status'] == 0 ? 'selected' : ''?>>inactive</option>
                                            </select>
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
            xhr.open("POST", "<?= SITE_ADMIN_URL ?>countries/country-status", true);
            xhr.onload = function() {
                let res = JSON.parse(this.response);
                custom_alert(res.type, res.msg);
            }
            xhr.send(data);
        }
    }
</script>