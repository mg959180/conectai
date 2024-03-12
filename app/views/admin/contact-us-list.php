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
                                <!-- <th>Subject</th> -->
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($contact_us_data as $con_data) { ?>
                                <tr>
                                    <td width="15%"><?= $con_data['con_name'] ?></td>
                                    <td width="15%"><?= $con_data['con_email'] ?></td>
                                    <td width="15%"><?= $con_data['con_mobile'] ?></td>
                                    <!-- <td>< ?= $con_data['con_subject'] ?></td> -->
                                    <td><?= $con_data['con_message'] ?></td>
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