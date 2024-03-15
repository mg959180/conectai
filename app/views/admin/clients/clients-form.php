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
            <form class="user" id="client-form" method="post" action="<?= SITE_ADMIN_URL . 'clients/save'; ?>" enctype="multipart/form-data">
                <?php if ($mode == 'edit') { ?>
                    <input type="hidden" name="old_images" value="<?= $clients_data['poi_image'] ?>">
                    <input type="hidden" name="id" value="<?= $clients_data['poi_id'] ?>">
                    <input type="hidden" name="mode" value="edit">
                <?php } else { ?>
                    <input type="hidden" name="mode" value="add">
                <?php } ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="client_name">Client Name</label>
                            <input type="text" class="form-control" id="client_name" name="client_name" value="<?= $clients_data['poi_title'] ?? '' ?>" placeholder="Client Name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="client_url">Client Url</label>
                            <input type="text" class="form-control " id="client_url" name="client_url" value="<?= $clients_data['poi_desc'] ?? '' ?>" placeholder="Client Url">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <div class="img-upload-btn">
                            <div class="form-group">
                                <input type="file" class="form-control" name="images" onchange="preview()" id="imagess" value="<?php echo $clients_data['poi_image']  ?? ''; ?>" style="display: none">
                                <img id="frame" onclick="selectImage()" src="<?php echo !empty($clients_data['poi_image']) ? UPLOAD_URL . 'admin/client_images/' . $clients_data['poi_image'] : '#'; ?>" class="img-thumbnail img-responsive d-block rounded " onerror=" src='<?= UPLOAD_URL . 'admin/default.png' ?>'" style="height: 100px; width: 100px;" />
                                <label for="imagess">upload Image</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <label for="image_alt">Client Image Alt</label>
                        <input type="text" class="form-control " id="image_alt" name="image_alt" value="<?= $clients_data['poi_image_alt_text'] ?? '' ?>" placeholder="Client Image Alt">
                    </div>
                    <div class="col-sm-3">
                        <label for="client_status">Select Status</label>
                        <select class="form-control" name="client_status" id="client_status">
                            <option value="">Select</option>
                            <option value="1" <?= (isset($clients_data['poi_status']) ? ($clients_data['poi_status'] == 1 ? 'selected' : '') : '') ?>>Active</option>
                            <option value="0" <?= (isset($clients_data['poi_status']) ? ($clients_data['poi_status'] == 0 ? 'selected' : '') : '') ?>>inactive</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label for="sort_order">Display Order</label>
                        <input type="number" name="sort_order" id="sort_order" class="form-control" value="<?= $clients_data['poi_sort_order'] ?? '' ?>" placeholder="Client display order">
                    </div>
                </div>
                <button type="submit" name="save_clients" class="btn btn-sm btn-primary ">
                    Save
                </button>
                <a href="<?= SITE_ADMIN_URL . 'clients' ?>" class="btn btn-sm btn-warning ">
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
    $('#client-form').validate({
        rules: {
            client_name: {
                required: true,
            },
            client_url: {
                required: true,
            },
            images: {
                required: true,
            },
            image_alt: {
                required: true,
            },
            client_status: {
                required: true,
            },
            sort_order: {
                required: true,
            },
        },
        messages: {
            client_name: {
                required: "Title must be required",
            },
            client_url: {
                required: "Slug must be required",
            },
            client_status: {
                required: "Status must be required",
            },
            sort_order: {
                required: "Sort Order must be required",
            },
            image_alt: {
                required: "Image Alt must be required",
            },
            images: {
                required: "Image must be required",
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
</script>