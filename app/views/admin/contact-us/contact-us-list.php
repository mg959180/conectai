<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Contact Us List</h1>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Contact Enquiry</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if (count($contact_us_data) > 0) { ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="15%">Name</th>
                                <th width="15%">Email</th>
                                <th width="15%">Contact No.</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($contact_us_data as $con_data) { ?>
                                <tr>
                                    <td width="15%"><?= $con_data['con_name'] ?></td>
                                    <td width="15%"><?= $con_data['con_email'] ?></td>
                                    <td width="15%"><?= $con_data['con_mobile'] ?></td>
                                    <td><?= $con_data['con_message'] ?></td>
                                    <td>
                                        <div class="form-group">
                                            <a href="javascript:void(0);" data-href="<?= SITE_ADMIN_URL . 'contact-enquiry/delete/' . encryptData($con_data['con_id']) ?>" class="btn btn-sm btn-danger" onclick="deleteData(this)"> Delete</a>
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