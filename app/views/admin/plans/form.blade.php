<?php if (isset($results['results']['plan_icon_type'])) {
    $icon_type = $results['results']['plan_icon_type'];
} else {
    $icon_type = '';
} ?>

<link href="{{ url('assets/select2/select2.min.css') }}" rel="stylesheet" />
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
<link media="all" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid">
    <div class="card">
        <div class="card-body pt-5">
            <!-- General Form Elements -->
            <form action="{{ url(ADMIN_URL . 'save-packages') }}" method="post" id="edit-form" class="g-3"
                enctype="multipart/form-data">
                @csrf
                <?php if($results['mode'] == 'edit'){ ?>
                <input type="hidden" name="plan_id" value="{{ encrypt($results['results']['plan_id']) }}">
                <input type="hidden" name="old_images" class="form-control"
                    value="{{ $results['results']['plan_icon'] }}">
                <?php } ?>

                <input type="hidden" name="mode" value="{{ $results['mode'] }}">

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <label for="name">Plans Name</label>
                        <input type="text" id="name" class="form-control " placeholder="Plans Name"
                            name="name" value="{{ $results['results']['plan_name'] ?? old('name') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <label for="short_desc">Plans Short Desc</label>
                        <input type="text" id="short_desc" class="form-control " placeholder="Plans Short Desc"
                            value="{{ $results['results']['plan_short_desc'] ?? old('short_desc') }}" name="short_desc">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <label for="desc">Plans Desc</label>
                        <textarea id="desc" class="form-control" rows="5" placeholder="Plans Desc" name="desc">{{ $results['results']['plan_desc'] ?? old('desc') }}</textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label for="link">Plans Url</label>
                        <input id="link" class="form-control " placeholder="Plans Url"
                            value="{{ $results['results']['plan_link'] ?? old('link') }}" name="link">
                    </div>
                    <div class="col-sm-3">
                        <label for="category">Plans Category Slug</label>
                        <input id="category" class="form-control " placeholder="Plans Category"
                            value="{{ $results['results']['plan_category'] ?? old('category') }}" name="category">
                    </div>

                    <div class="col-sm-3">
                        <label for="sub_category">Plans Sub Category Slug</label>
                        <input id="sub_category" class="form-control " placeholder="Plans Sub Category"
                            value="{{ $results['results']['plan_sub_category'] ?? old('sub_category') }}"
                            name="sub_category">
                    </div>

                </div>
                <div class="row mb-3">

                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <label>Select Country</label>
                        <div class="form-control">
                            <select class="form-select select2" id="country" required="" name="country">
                                <option value="">Select Country</option>
                                @if (isset($results['currencies_list']))
                                    @foreach ($results['currencies_list'] as $cnt)
                                        <option value="{{ $cnt['currency_country_id'] }}"
                                            {{ ((isset($results['results']['plan_currency']) ? $results['results']['plan_currency'] : '') ?? old('country')) == $cnt['currency_country_id'] ? 'selected' : '' }}>
                                            {{ $cnt['currency_country_name'] }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <label for="plan_amount">Plans Amount</label>
                        <input type="number" name="plan_amount" id="plan_amount" class="form-control"
                            placeholder="Plan Amount"
                            value="<?= isset($results['results']['plan_min_price']) ? $results['results']['plan_min_price'] : '' ?>"
                            required>
                    </div>

                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <label for="duration">Select Duration</label>
                        <div class="form-control">
                            <select class="form-select select2" id="duration" name="duration">
                                <option value=""> Select</option>
                                <?php  foreach(WEBSITE_PACKAGES_DURATIONS as $pdK => $pdV){?>
                                <option value="<?= $pdK ?>"
                                    {{ (isset($results['results']['plan_duration']) ? $results['results']['plan_duration'] : '') == $pdK ? 'selected' : '' }}>
                                    <?= $pdV ?>
                                </option>
                                <?php }?>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" name="best_selling"
                                id="best_selling"
                                {{ $results['results']['plan_best_selling'] ?? old('best_selling') ? 'checked' : '' }}>
                            <label class="form-check-label" for="best_selling">Plans best selling</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col-md-4">
                        <label for="icon_type">Select Image Type</label>
                        <div class="form-control">
                            <select class="form-select form-control select2" id="icon_type" name="icon_type">
                                <option value="">Select Image Type</option>
                                <?php  foreach(IMAGE_TYPE  as $seK => $seV) { ?>
                                <option value="<?= $seK ?>"
                                    {{ ($icon_type ?? old('icon_type')) == $seK ? 'selected' : '' }}>
                                    <?= $seV ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="img-upload-btn" id="image_div"
                            style="display: <?= $icon_type == 2 ? 'block' : 'none' ?>">
                            <?php if(isset($results['results']['plan_icon'])) { ?>
                            <?php if($icon_type == 2){ ?>
                            <input type="file" name="images" onchange="preview()" id="imagess"
                                value="<?php echo $results['results']['plan_icon'] ?? old('images'); ?>" style="display: none">
                            <img id="frame" src="<?php echo isset($results['results']['plan_icon']) ? uploadUrl('plans', $results['results']['plan_icon']) : '#'; ?>"
                                class="img-thumbnail img-responsive mx-auto d-block rounded "
                                style="height: 100px; width: 100px;" />
                            <?php } ?>
                            <?php } else { ?>
                            <input type="file" name="images" onchange="preview()" id="imagess"
                                style="display: none">
                            <img id="frame" class="img-thumbnail img-responsive  mx-auto d-block rounded "
                                src="{{ uploadUrl() }}" style="height: 100px; width: 100px;" />
                            <?php } ?>
                        </div>
                        <div id="icon_div" style="display: <?= $icon_type == 1 ? 'block' : 'none' ?> ">
                            <input type="text" name="icon" class="form-control" placeholder="icon name"
                                value="<?= $icon_type == 1 && $results['results']['plan_icon'] ? $results['results']['plan_icon'] : '' ?>">
                        </div>

                    </div>


                    <div class="col-sm-4">
                        <label for="status">Select status</label>
                        <div class="form-control">
                            <select class="form-select select2" id="status" required="" name="status">
                                <option value="">Select Status</option>
                                <?php  foreach(WEBSITE_STATUS_LABEL as $sK => $sV){?>
                                <option value="<?= $sK ?>"
                                    {{ ($results['results']['plan_status'] ?? old('status')) == $sK ? 'selected' : '' }}>
                                    <?= $sV ?>
                                </option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-3">
                        <label for="section_type">Select Section Type</label>
                        <div class="form-control">
                            <select class="form-select form-control select2 select2-multiple" multiple id="section_type" name="section_type[]">
                                <option value="">Select Section Type</option>
                                <?php  foreach(PLANS_SECTIONS  as $seK => $seV) { ?>
                                <?php
                                $sele = '';
                                if (isset($results['results']['plan_section_type'])) {
                                    $selected = in_array($seK, explode(',', $results['results']['plan_section_type']));
                                    if ($selected) {
                                        $sele = 'selected';
                                    }
                                } ?>
                                <option value="<?= $seK ?>" {{ $sele }}>
                                    <?= $seV ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <label>Select Parent Menu</label>
                        <div class="form-control">
                            <select class="form-select form-control select2 select2-multiple" multiple
                                id="menu_parents" name="menu_parents[]">
                                <option value="">Select parent menu</option>
                                <?php  foreach($results['data']  as $sK => $sV){?>
                                <?php
                                $sel = '';
                                if (isset($results['results']['plan_smu_id'])) {
                                    $selected = in_array($sK, explode(',', $results['results']['plan_smu_id']));
                                    if ($selected) {
                                        $sel = 'selected';
                                    }
                                } ?>
                                <option value="<?= $sK ?>" {{ $sel }}>
                                    <?= $sV ?>
                                </option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        <a href="{{ url(ADMIN_URL . 'packages-listing') }}"
                            class="btn btn-sm btn-warning text-white">Back</a>
                    </div>
                </div>
            </form><!-- End General Form Elements -->
        </div>
    </div>
</div>

<script src="{{ url('assets/select2/select2.min.js') }}"></script>

<script src="{{ url('assets/admin/vendor/jquery/jquery.validate.min.js') }}"></script>
<script>
    $(".select2").select2();

    function preview() {
        frame.src = URL.createObjectURL(event.target.files);
    }
    $(document).ready(function() {

        $('#frame').on('click', function() {
            $('#imagess').trigger('click');
        });

        $('#icon_type').on('change', function() {
            if ($(this).val() == 1) {
                $('#icon_div').show();
                $('#image_div').hide();
            } else if ($(this).val() == 2) {
                $('#image_div').show();
                $('#icon_div').hide();
            } else {
                $('#image_div').hide();
                $('#icon_div').hide();
            }
        });

        $('#edit-form').validate({
            rules: {
                name: {
                    required: true,
                },
                short_desc: {
                    required: true,
                    maxlength: 500,
                },
                desc: {
                    required: true,
                },
                section_type: {
                    required: true,
                },
                status: {
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
                'menu_parents[]': {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "Plan Name must be required",
                },
                short_desc: {
                    required: "Short Description must be required",
                },
                desc: {
                    required: "Description must be required",
                },
                status: {
                    required: "Status must be required",
                },
                section_type: {
                    required: "Section Type must be required",
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
                'menu_parents[]': {
                    required: "menu name must be required",
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

    });

    CKEDITOR.replace('desc');
</script>
