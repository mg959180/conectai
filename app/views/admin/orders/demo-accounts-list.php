<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Demo Accounts List</h1>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Demo Accounts List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if (count($demo_users_data) > 0) { ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Email</th>
                                <th scope="col">Email Verified</th>
                                <th scope="col">Website url <br>Website Lang</th>
                                <th scope="col" width="15%">Demo Chat Account Created</th>
                                <th scope="col">Start Date<br> End Date</th>
                                <th scope="col">Account Status</th>
                                <!-- <th scope="col">Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start_counter = 1;
                            foreach ($demo_users_data as $plan_data) { ?>
                                <tr>
                                    <td><?= $start_counter++; ?></td>
                                    <td><?= $plan_data['usr_email']; ?></td>
                                    <td><?= ($plan_data['usr_email_verified'] == 1 ? 'Verified' : 'UnVerified'); ?></td>
                                    <td><?= $plan_data['usr_website_name'] . '<br>' . $plan_data['usr_lang']; ?></td>
                                    <td><?= ($plan_data['usr_chat_account_created'] == 1 ? 'Yes' : 'No'); ?></td>
                                    <td><?= ($plan_data['usr_chat_account_created'] == 1 ? (change_to_custom_date($plan_data['usr_chat_demo_start_date'], DATE_TIME_FORMAT_LONG) . '<br>' . change_to_custom_date($plan_data['usr_chat_demo_end_date'], DATE_TIME_FORMAT_LONG)) : '--'); ?></td>
                                    <td>
                                        <?= ($plan_data['usr_chat_account_created'] == 1 ? (strtotime(change_to_custom_date($plan_data['usr_chat_demo_start_date'], SYSTEM_DATE_TIME)) < strtotime(date(SYSTEM_DATE_TIME)) ? 'Active' : 'Expired') : '--'); ?>
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