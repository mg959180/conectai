<!-- Begin Page Content -->
<style>
    .img-upload-btn {
        position: relative;
        left: 100px;
    }

    .img-upload-btn i {
        position: absolute;
        height: 16px;
        width: 16px;
        top: 32%;
        left: 50%;
        margin-top: -8px;
        margin-left: -8px;
    }

    .error {
        color: #e12626;
        font-size: 16px;
        width: -webkit-fill-available !important;
    }
</style>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $page_title ?></h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="user" id="meta-form" method="post" action="<?= SITE_ADMIN_URL . 'meta-details/save'; ?>" enctype="multipart/form-data">
                <?php if ($mode == 'edit') { ?>
                    <input type="hidden" name="old_images" value="<?= $meta_data['wmd_meta_image'] ?>">
                    <input type="hidden" name="id" value="<?= $meta_data['wmd_id'] ?>">
                    <input type="hidden" name="mode" value="edit">
                <?php } else { ?>
                    <input type="hidden" name="mode" value="add">
                <?php } ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Meta Page Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $meta_data['wmd_name'] ?? '' ?>" placeholder="Meta Page Name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="website_url">Meta Page Url</label>
                            <input type="text" class="form-control " id="website_url" name="website_url" value="<?= $meta_data['wmd_website_url'] ?? '' ?>" placeholder="Meta Page Url">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="meta_title">Meta Title</label>
                        <textarea class="form-control" id="meta_title" name="meta_title" rows="2" placeholder="Meta Title"><?= $meta_data['wmd_meta_title'] ?? '' ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="meta_keyword">Meta Keyword</label>
                        <textarea class="form-control" id="meta_keyword" name="meta_keyword" rows="2" placeholder="Meta Keyword"><?= $meta_data['wmd_meta_keyword'] ?? '' ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="meta_description">Meta Description</label>
                        <textarea class="form-control" id="meta_description" name="meta_description" rows="5" placeholder="Meta Description"><?= $meta_data['wmd_meta_description'] ?? '' ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <div class="img-upload-btn">
                            <div class="form-group">
                                <input type="file" class="form-control" name="images" onchange="preview()" id="imagess" value="<?php echo $meta_data['wmd_meta_image']  ?? ''; ?>" style="display: none">
                                <img id="frame" onclick="selectImage()" src="<?php echo !empty($meta_data['wmd_meta_image']) ? UPLOAD_URL . 'admin/meta_images/' . $meta_data['wmd_meta_image'] : '#'; ?>" class="img-thumbnail img-responsive d-block rounded " onerror=" src='<?= UPLOAD_URL . 'admin/default.png' ?>'" style="height: 100px; width: 100px;" />
                                <label for="imagess">upload Image</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <label for="image_alt">Meta Page Image Alt</label>
                        <input type="text" class="form-control " id="image_alt" name="image_alt" value="<?= $meta_data['wmd_meta_image_alt'] ?? '' ?>" placeholder="Meta Page Image Alt">
                    </div>
                    <div class="col-sm-3">
                        <label for="lang">Meta Page Lang</label>
                        <input type="text" class="form-control " id="lang" name="lang" value="<?= $meta_data['wmd_lang'] ?? '' ?>" placeholder="Meta Page Language">
                    </div>
                    <div class="col-sm-3">
                        <label for="active">Select Status</label>
                        <select class="form-control" name="active" id="active">
                            <option value="">Select</option>
                            <option value="1" <?= (isset($meta_data['wmd_active']) ? ($meta_data['wmd_active'] == 1 ? 'selected' : '') : '') ?>>Active</option>
                            <option value="0" <?= (isset($meta_data['wmd_active']) ? ($meta_data['wmd_active'] == 0 ? 'selected' : '') : '') ?>>inactive</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="maintenance_mode">Select Maintenance Status</label>
                        <select class="form-control" name="maintenance_mode" id="maintenance_mode">
                            <option value="">Select</option>
                            <option value="1" <?= (!empty($meta_data['wmd_maintenance_mode']) ? ($meta_data['wmd_maintenance_mode'] == 1 ? 'selected' : '') : '') ?>>Active</option>
                            <option value="0" <?= (!empty($meta_data['wmd_maintenance_mode']) ? ($meta_data['wmd_maintenance_mode'] == 0 ? 'selected' : '') : '') ?>>inactive</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label for="maintenance_start_time">Maintenance Start Date</label>
                        <input type="date" class="form-control " id="maintenance_start_time" name="maintenance_start_time" value="<?= change_to_custom_date($meta_data['wmd_maintenance_start_time'], SYSTEM_DATE_TIME) ?? '' ?>" placeholder="Start Date">
                    </div>
                    <div class="col-sm-3">
                        <label for="maintenance_end_time">Maintenance End Value</label>
                        <input type="date" class="form-control " id="maintenance_end_time" name="maintenance_end_time" value="<?= change_to_custom_date($meta_data['wmd_maintenance_end_time'], SYSTEM_DATE_TIME) ?? '' ?>" placeholder="End Date">
                    </div>
                </div>
                <button type="submit" name="save_meta" class="btn btn-sm btn-primary ">
                    Save
                </button>
                <a href="<?= SITE_ADMIN_URL . 'meta-details' ?>" class="btn btn-sm btn-warning ">
                    Back
                </a>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<script>
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }

    function selectImage() {
        document.getElementById('imagess').click();
    }
</script>

<script src="<?= ADMIN_ASSETS_URL . 'vendor/jquery/jquery.validate.min.js' ?>"></script>
<script>
    $('#meta-form').validate({
        rules: {
            name: {
                required: true,
            },
            website_url: {
                required: true,
            },
            meta_title: {
                required: true,
            },
            meta_keyword: {
                required: true,
            },
            meta_description: {
                required: true,
            },
            images: {
                required: true,
            },
            image_alt: {
                required: true,
            },
            lang: {
                required: true,
            },
            active: {
                required: true,
            },
            maintenance_start_time: {
                required: true,
            },
            maintenance_end_time: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "Page name must be required",
            },
            website_url: {
                required: "Page url must be required",
            },
            meta_title: {
                required: "Meta title must be required",
            },
            meta_keyword: {
                required: "Meta keyword must be required",
            },
            meta_description: {
                required: "Meta Description must be required",
            },
            images: {
                required: "Image must be required",
            },
            image_alt: {
                required: "Image Alt Name must be required",
            },
            lang: {
                required: "Page language must be required",
            },
            active: {
                required: "Status must be required",
            },
            maintenance_start_time: {
                required: "Maintenance Start Time must be required",
            },
            maintenance_end_time: {
                required: "Maintenance End Time must be required",
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
</script>