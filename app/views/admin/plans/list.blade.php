<?php
$user_details = getUserDetails();
?>
<link href="{{ url('assets/select2/select2.min.css') }}" rel="stylesheet" />

<link href="{{ url('assets/admin/vendor/simple-datatables/style.css') }}" rel="stylesheet">

<section class="section dashboard">
    <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">
                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body pt-3">

                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <form method="get" action="{{ url(ADMIN_URL . 'packages/') }}">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4 col-lg-4">
                                            <select class="form-select form-control select2" id="menu"
                                                name="menu">
                                                <option value="">Select Menu</option>
                                                <?php  foreach($results['menu_list'] as $mT => $mK){?>
                                                <option value="<?= $mT ?>"
                                                    {{ ($results['menu_filter'] ?? old('menu')) == $mT ? 'selected' : '' }}>
                                                    <?= $mK ?>
                                                </option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-md-4 col-lg-4">
                                            <select class="form-select form-control select2" id="section_type"
                                                name="section_type">
                                                <option value="">Select Section Type</option>
                                                <?php  foreach(PLANS_SECTIONS as $sK => $sV){?>
                                                <option value="<?= $sK ?>"
                                                    {{ ($results['section_filter'] ?? old('section_type')) == $sK ? 'selected' : '' }}>
                                                    <?= $sV ?>
                                                </option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-md-4 col-lg-4">
                                            <button class="btn btn-md btn-primary" type="submit">
                                                Search
                                            </button>
                                            <?php if($results['filter']){ ?>
                                            <a class="btn btn-md btn-danger"
                                                href="{{ url(ADMIN_URL . 'packages/') }}" title="Clear filter">
                                                Clear
                                            </a>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-sm-12 ">
                                <a class="btn btn-md btn-success" href="{{ url(ADMIN_URL . 'packages/') }}"
                                    style="float:right; padding-left:10px;padding-right:10px;" title="add new Plans">
                                    <i class="bi bi-plus-circle"></i>
                                </a>
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table  table-striped datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Menu Name</th>
                                        <th scope="col">Plan Name</th>
                                        <th scope="col">Best Selling</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($results['data']) && !empty($results['data'])) { ?>
                                    <?php  $start_counter = 1;
                                      foreach ($results['data'] as $rK => $rV) { ?>
                                    <tr>
                                        <td>{{ $start_counter++ }}</td>
                                        <td>{{ $rV['menu_name'] }}</td>
                                        <td>{{ $rV['plan_name'] }}</td>
                                        <td>{{ $rV['plan_best_selling'] ? 'Yes' : 'No' }}</td>
                                        <td>{{ WEBSITE_STATUS_LABEL[$rV['plan_status']] }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <?php if(isset($user_details[0]['adm_type']) && ($user_details[0]['adm_type'] == 1)) { ?>
                                                <a class="btn btn-sm btn-primary btn-circle"
                                                    style="margin-right: 5px; padding:5px;"
                                                    title="Click to Define Plans Features"
                                                    href="{{ url(ADMIN_URL . 'define-packages-features/' . encrypt($rV['plan_id'])) }}">
                                                    <i class="bx bxs-file-find"></i>
                                                </a>
                                                <a class="btn btn-sm btn-primary btn-circle"
                                                    style="margin-right: 5px; padding:5px;"
                                                    title="Click to Define Plans Prices"
                                                    href="{{ url(ADMIN_URL . 'define-packages-plans/' . encrypt($rV['plan_id'])) }}">
                                                    <i class="bx bxs-file-export"></i>
                                                </a>
                                                <a class="btn btn-sm btn-primary btn-circle"
                                                    style="margin-right: 5px; padding:5px;" title="Click to edit Plans"
                                                    href="{{ url(ADMIN_URL . 'packages/' . encrypt($rV['plan_id'])) }}">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <?php } ?>
                                                <?php if(isset($user_details[0]['adm_type']) && ($user_details[0]['adm_type'] == 1)) { ?>
                                                <a class="btn btn-sm btn-danger btn-circle"
                                                    style="margin-right: 5px; padding:5px;" title="Click to delete"
                                                    href="{{ url(ADMIN_URL . 'delete-packages/' . encrypt($rV['plan_id'])) }}">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                                <?php } ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <span>
                                                Created By:
                                                <?= isset($rV['plan_created_by']) ? getAdminName($rV['plan_created_by']) . ' ' . change_to_custom_date($rV['plan_created_date'], DATE_TIME_FORMAT_LONG_A) : '-' ?>
                                            </span>
                                        </td>
                                        <td colspan="3">
                                            <span>
                                                Modified By:
                                                <?= isset($rV['plan_modified_by']) ? getAdminName($rV['plan_modified_by']) . ' ' . change_to_custom_date($rV['plan_modified_date'], DATE_TIME_FORMAT_LONG_A) : '-' ?>
                                            </span>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <?php } else { ?>
                                    <tr>
                                        <td colspan="6" style="text-align:center">
                                            <?php echo NO_RECORDS_FOUND; ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>
                </div><!-- End Recent Sales -->
            </div>
        </div><!-- End Left side columns -->
    </div>
</section>

<script src="{{ url('assets/admin/vendor/simple-datatables/simple-datatables.js') }}"></script>

<script src="{{ url('assets/select2/select2.min.js') }}"></script>

<script>
    $(".select2").select2();
    /**
     * Initiate Datatables
     */
    const datatables = document.querySelectorAll('.datatable')
    datatables.forEach(datatable => {
        new simpleDatatables.DataTable(datatable);
    })
</script>
