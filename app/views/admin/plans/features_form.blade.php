<?php
$user_details = getUserDetails();
$edit_data = $results['edit'][0];
if (isset($edit_data['pfe_icon_type'])) {
    $value = $edit_data['pfe_icon_type'];
} else {
    $value = old('icon_type');
}
?>
<style>
    .img-upload-btn i {
        position: absolute;
        height: 16px;
        width: 16px;
        top: 32%;
        left: 50%;
        margin-top: -8px;
        margin-left: -8px;
    }
</style>
<link href="{{ url('assets/select2/select2.min.css') }}" rel="stylesheet" />
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $page_title }}</h5>
            <form action="{{ url(ADMIN_URL . 'save-packages-features') }}" method="post" id="save-form" class="g-3"
                enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <input type="text" name="feature_title" id="feature_title" class="form-control"
                            placeholder="Feature Title "
                            value="<?= isset($edit_data['pfe_title']) ? $edit_data['pfe_title'] : '' ?>" required>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <input type="text" name="feature_value" id="feature_value" class="form-control"
                            placeholder="Feature Value "
                            value="<?= isset($edit_data['pfe_value']) ? $edit_data['pfe_value'] : '' ?>" required>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <label>Status</label>
                        <select class="form-select form-control select2" id="status" name="status">
                            <?php  foreach(WEBSITE_STATUS_LABEL as $sK => $sV){?>
                            <option value="<?= $sK ?>"
                                {{ (isset($edit_data['pfe_status']) ? $edit_data['pfe_status'] : '') == $sK ? 'selected' : '' }}>
                                <?= $sV ?>
                            </option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <label for="desc">Plans Features Desc</label>
                        <textarea id="desc" class="form-control" placeholder="Plans Desc" name="desc">{{ $edit_data['pfe_desc'] ?? old('desc') }}</textarea>
                    </div>
                </div>
                <div class="row mb-5">

                    <div class="col-md-4">

                        <label>Select Plans Price Duration</label>
                        <div class="form-control">
                            <select class="form-select select2 select2-multiple" multiple id="price" name="price[]">
                                <option value="">Select Plans Price Duration</option>
                                <?php  foreach($results['price_res']  as $prK => $prV) { ?>
                                <option value="<?= $prV['ppr_id'] ?>"
                                    {{ $prV['ppr_id'] == ($edit_data['pfe_ppr_id'] ?? old('price')) ? 'selected' : '' }}>
                                    <?= $prV['currency_code'] . $prV['ppr_amount'] . ' ' . WEBSITE_PACKAGES_DURATIONS[$prV['ppr_duraion']] ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label>Select Image Type</label>
                        <div class="form-control ">
                            <select class="form-select form-control select2" id="icon_type" name="icon_type">
                                <option value="">Select Image Type</option>
                                <?php  foreach(IMAGE_TYPE  as $seK => $seV) { ?>
                                <option value="<?= $seK ?>" {{ $value == $seK ? 'selected' : '' }}>
                                    <?= $seV ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="img-upload-btn" id="image_div"
                            style="display: <?= $value == 2 ? 'block' : 'none' ?>">
                            <?php if(!empty($edit_data['pfe_icon']) &&  $value  == 2) { ?>
                            <input type="file" name="images" onchange="preview()" id="imagess"
                                value="<?php echo $edit_data['pfe_icon'] ?? old('images'); ?>" style="display: none">
                            <img id="frame" src="<?php echo !empty($edit_data['pfe_icon']) ? uploadUrl('plans', $edit_data['pfe_icon']) : '#'; ?>"
                                class="img-thumbnail img-responsive mx-auto d-block rounded "
                                style="height: 100px; width: 100px;" />
                            <?php } else { ?>
                            <input type="file" name="images" onchange="preview()" id="imagess"
                                style="display: none">
                            <img id="frame" class="img-thumbnail img-responsive  mx-auto d-block rounded "
                                src="{{ uploadUrl() }}" style="height: 100px; width: 100px;" />
                            <?php } ?>
                        </div>
                        <div id="icon_div" style="display: <?= $value == 1 ? 'block' : 'none' ?> ">
                            <input type="text" name="feature_icon" id="feature_icon" class="form-control"
                                placeholder="Feature Icon "
                                value="<?= isset($edit_data['pfe_icon']) ? $edit_data['pfe_icon'] : '' ?>">
                        </div>
                    </div>

                </div>

                <div class="row mb-5">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <input type="hidden" name="parent_id"
                            value="<?= isset($results['parent_id']) ? encrypt($results['parent_id']) : '' ?>">
                        <?php if( isset($edit_data) && !empty($edit_data)){ ?>
                        <input type="hidden" name="old_images" class="form-control"
                            value="{{ $edit_data['pfe_icon'] }}">
                        <?php  } ?>
                        <input type="hidden" name="pfe_id"
                            value="<?= isset($edit_data['pfe_id']) ? encrypt($edit_data['pfe_id']) : '' ?>">
                        <button type="submit" name="submit_plan_featues" class="btn btn-sm btn-success"
                            style="margin-top: 15px"
                            id="submit_plan_featues">{{ isset($edit_data) && !empty($edit_data) ? 'Update' : 'Add' }}</button>
                        @if (isset($edit_data) && !empty($edit_data))
                            <a href="{{ url(ADMIN_URL . 'define-packages-features/' . encrypt($edit_data['pfe_plan_id'])) }}"
                                class="btn btn-sm btn-danger" style="margin-top: 15px">
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
                        <th scope="col" style="width:20%;">Plan Features Title</th>
                        <th scope="col" style="width:10%;">Plan Features Value</th>
                        <th scope="col" style="width:10%;">Plan Features Icon</th>
                        <th scope="col" style="width:10%;">Plan Features Price</th>
                        <th scope="col" style="width:5%;">Plan Features Status</th>
                        <th scope="col" style="width:5%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($results['results'])) { ?>
                    <?php foreach ($results['results'] as $rk => $rV) { ?>
                    <tr>
                        <td>{{ ++$rk }}</td>
                        <td>{{ $rV['pfe_title'] }}</td>
                        <td>{{ $rV['pfe_value'] }}</td>
                        <td>{{ $rV['pfe_icon'] }}</td>
                        <td>{{ $rV['price_name'] ?? '' }}</td>
                        <td>{{ WEBSITE_STATUS_LABEL[$rV['pfe_status']] }}</td>
                        <td>
                            <div class="btn-group">
                                <?php if(isset($user_details[0]['adm_type']) && ($user_details[0]['adm_type'] == 1)){ ?>
                                <a class="btn btn-sm btn-primary" style="margin-right: 5px; padding:5px;"
                                    href="{{ url(ADMIN_URL . 'define-packages-features/' . encrypt($rV['pfe_plan_id']) . '/' . encrypt($rV['pfe_id'])) }}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-sm btn-danger btn-circle" style="margin-right: 5px; padding:5px;"
                                    title="Click to delete"
                                    href="{{ url(ADMIN_URL . 'delete-packages-features/' . encrypt($rV['pfe_id'])) }}">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <?php } ?>
                            </div>
                        </td>
                    </tr>
                    <?php if(!empty($rV['pfe_desc'])) {?>
                    <tr>
                        <td colspan="7">
                            <strong>Description:- </strong> {{ $rV['pfe_desc'] }}
                        </td>
                    </tr>
                    <?php } ?>
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
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
    $(document).ready(function() {

        $('#frame').on('click', function() {
            $('#imagess').trigger('click');
        });
        $(".select2").select2();

        $('#save-form').validate({
            rules: {
                feature_title: {
                    required: true,
                    minlength: 2,
                    maxlength: 100,
                },
                feature_value: {
                    required: true,
                },
                desc: {
                    required: true,
                },
                'price[]': {
                    required: true,
                },
                icon_type: {
                    required: true,
                },
                imagess: {
                    required: function() {
                        if ($('#icon_type').val() == 2) {
                            return true;
                        } else {
                            return false;
                        }
                    },
                },
                icon: {
                    required: function() {
                        if ($('#icon_type').val() == 1) {
                            return true;
                        } else {
                            return false;
                        }
                    },
                },
                status: {
                    required: true,
                },
            },
            messages: {
                feature_title: {
                    required: "Feature Title must be required",
                    minlength: "Feature Title must be minimum 2 character",
                    maxlength: "Feature Title must be maximum 50 character",
                },
                feature_value: {
                    required: "Feature Value must be required",
                },
                desc: {
                    required: "Feature Description must be required",
                },
                'price[]': {
                    required: "Feature Price must be required",
                },
                icon_type: {
                    required: "Image Type must be required",
                },
                imagess: {
                    required: "Image must be required",
                },
                icon: {
                    required: "Icon must be required",
                },
                status: {
                    required: "Status must be required",
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

        $('#icon_type').on('change', function() {
            if ($(this).val() == 1) {
                $('#icon_div').show();
                $('#image_div').hide();
            } else if ($(this).val() == 2) {
                $('#image_div').show();
                $('#icon_div').hide();
            }
        });

    });

    CKEDITOR.replace('desc');
</script>
