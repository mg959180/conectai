<?php
$user_details = getUserDetails();
$edit_data = $results['edit'][0];

?>

<link href="{{ url('assets/select2/select2.min.css') }}" rel="stylesheet" />
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $page_title }}</h5>
            <form action="{{ url(ADMIN_URL . 'save-packages-plans') }}" method="post" id="save-form" class="g-3"
                enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">

                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <label for="country">Select Country</label>
                        <div class="form-control">
                            <select class="form-select form-control select2" id="country" required=""
                                name="country">
                                <option value="">Select Country</option>
                                @if (isset($results['countries']))
                                    @foreach ($results['countries'] as $cnt)
                                        <option value="{{ $cnt['cun_id'] }}"
                                            {{ ((isset($edit_data['ppr_cun_id']) ? $edit_data['ppr_cun_id'] : '') ?? old('country')) == $cnt['cun_id'] ? 'selected' : '' }}>
                                            {{ $cnt['cun_name'] }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <label class="plan_amount">Plan Amount</label>
                        <input type="number" name="plan_amount" id="plan_amount" class="form-control"
                            placeholder="Plan Amount"
                            value="<?= isset($edit_data['ppr_amount']) ? $edit_data['ppr_amount'] : '' ?>" required>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2">
                        <label>Select Duration</label>

                        <div class="form-control">
                            <select class="form-select form-control select2" id="duraion" name="duraion">
                                <option value=""> Select</option>
                                <?php  foreach(WEBSITE_PACKAGES_DURATIONS as $pdK => $pdV){?>
                                <option value="<?= $pdK ?>"
                                    {{ (isset($edit_data['ppr_duraion']) ? $edit_data['ppr_duraion'] : '') == $pdK ? 'selected' : '' }}>
                                    <?= $pdV ?>
                                </option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2">
                        <label>Select Status</label>
                        
                        <div class="form-control">
                        <select class="form-select form-control select2" id="status" name="status">
                            <option value=""> Select</option>
                            <?php  foreach(WEBSITE_STATUS_LABEL as $sK => $sV){?>
                            <option value="<?= $sK ?>"
                                {{ (isset($edit_data['ppr_status']) ? $edit_data['ppr_status'] : '') == $sK ? 'selected' : '' }}>
                                <?= $sV ?>
                            </option>
                            <?php }?>
                        </select>
                        </div>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2">
                        <input type="hidden" name="parent_id"
                            value="<?= isset($results['parent_id']) ? encrypt($results['parent_id']) : '' ?>">
                        <input type="hidden" name="ppr_id"
                            value="<?= isset($edit_data['ppr_id']) ? encrypt($edit_data['ppr_id']) : '' ?>">
                        <button type="submit" name="submit_plan_prices" class="btn btn-sm btn-success"
                            id="submit_plan_prices">{{ isset($edit_data) && !empty($edit_data) ? 'Update' : 'Add' }}</button>
                        @if (isset($edit_data) && !empty($edit_data))
                            <a href="{{ url(ADMIN_URL . 'define-packages-plans/' . encrypt($edit_data['ppr_plan_id'])) }}"
                                class="btn btn-sm btn-danger">
                                <i class="bi bi-x-circle"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </form>

            <!-- Table with stripped rows -->
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th scope="col" style="width:5%;">#</th>
                        <th scope="col" style="width:20%;">Plan Duration</th>
                        <th scope="col" style="width:10%;">Plan Prices</th>
                        <th scope="col" style="width:20%;">Plan Status</th>
                        <th scope="col" style="width:5%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($results['results'])) { ?>
                    <?php foreach ($results['results'] as $rk => $rV) {  ?>
                    <tr>
                        <th scope="row">{{ ++$rk }}</th>
                        <td>{{ $rV['currency_code'] . ' ' . $rV['ppr_amount'] }}</td>
                        <td>{{ WEBSITE_PACKAGES_DURATIONS[$rV['ppr_duraion']] }}</td>
                        <td>{{ WEBSITE_STATUS_LABEL[$rV['ppr_status']] }}</td>
                        <td>
                            <div class="btn-group">
                                <?php if(isset($user_details[0]['adm_type']) && ($user_details[0]['adm_type'] == 1)){ ?>
                                <a class="btn btn-sm btn-primary" style="margin-right: 5px; padding:5px;"
                                    href="{{ url(ADMIN_URL . 'define-packages-plans/' . encrypt($rV['ppr_plan_id']) . '/' . encrypt($rV['ppr_id'])) }}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-sm btn-danger btn-circle" style="margin-right: 5px; padding:5px;"
                                    title="Click to delete"
                                    href="{{ url(ADMIN_URL . 'delete-packages-plans/' . encrypt($rV['ppr_id'])) }}">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <?php } ?>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php } else { ?>
                    <tr>
                        <td colspan="7" style="text-align:center">
                            <?php echo NO_RECORDS_FOUND; ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <!-- End Table with stripped rows -->
            <a href="{{ url(ADMIN_URL . 'packages-listing') }}" class="btn btn-sm btn-warning text-white">Back</a>
        </div>
    </div>
</div>


<script src="{{ url('assets/select2/select2.min.js') }}"></script>


<script src="{{ url('assets/admin/vendor/jquery/jquery.validate.min.js') }}"></script>

<script>
    $(document).ready(function() {

        $(".select2").select2();

        $('#save-form').validate({
            rules: {
                country: {
                    required: true,
                },
                plan_amount: {
                    required: true,
                },
                duraion: {
                    required: true,
                },
                status: {
                    required: true,
                },
            },
            messages: {
                country: {
                    required: "Country must be required",
                },
                plan_amount: {
                    required: "Plan Amount must be required",
                },
                duraion: {
                    required: "Plan Duration must be required",
                },
                status: {
                    required: "Status must be required",
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });


    });
</script>
