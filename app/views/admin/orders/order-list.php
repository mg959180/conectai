<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Orders List</h1>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Orders List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if (count($orders_data) > 0) { ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Transaction Id</th>
                                <th scope="col">Email</th>
                                <th scope="col">Country</th>
                                <th scope="col" width="30%">Plan Name</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Payment Mode</th>
                                <th scope="col">Transaction Status</th>
                                <th scope="col">Transaction Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start_counter = 1;
                            foreach ($orders_data as $plan_data) { ?>
                                <tr>
                                    <td><?= $start_counter++; ?></td>
                                    <td><?= $plan_data['ord_txn_id']; ?></td>
                                    <td><?= $plan_data['email']; ?></td>
                                    <td><?= $plan_data['cnt_name']; ?></td>
                                    <td><?= $plan_data['plan_name']; ?></td>
                                    <td><?= $plan_data['ord_total']; ?></td>
                                    <td><?= $plan_data['ord_payment_mode']; ?></td>
                                    <td><?= $plan_data['ord_transaction_status']; ?></td>
                                    <td><?= change_to_custom_date($plan_data['cnt_name'], DATE_TIME_FORMAT_LONG); ?></td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" style="margin-right: 5px; padding:5px;" title="Click to Define Plans Prices" href="<?= SITE_ADMIN_URL . 'orders/view-invoice/' . encryptData($plan_data['ord_id']) ?>">
                                            View Invoice
                                        </a>
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