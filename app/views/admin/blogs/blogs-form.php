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
            <form class="user" id="blog-form" method="post" action="<?= SITE_ADMIN_URL . 'blogs/save'; ?>" enctype="multipart/form-data">
                <?php if ($mode == 'edit') { ?>
                    <input type="hidden" name="old_images" value="<?= $blogs_data['blo_images'] ?>">
                    <input type="hidden" name="id" value="<?= $blogs_data['blo_id'] ?>">
                    <input type="hidden" name="mode" value="edit">
                <?php } else { ?>
                    <input type="hidden" name="mode" value="add">
                <?php } ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="blo_name">Blog Name</label>
                            <input type="text" class="form-control" id="blo_name" name="blo_name" value="<?= $blogs_data['blo_title'] ?? '' ?>" placeholder="Blog Name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="blo_slug">Blog Slug</label>
                            <input type="text" class="form-control " id="blo_slug" name="blo_slug" value="<?= $blogs_data['blo_slug'] ?? '' ?>" placeholder="Blog Slug">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="blo_short_desc">Blog Short Desc</label>
                        <textarea class="form-control" id="blo_short_desc" name="blo_short_desc" rows="2" placeholder="Blog Short Description"><?= $blogs_data['blo_desc'] ?? '' ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="blo_desc">Blog Main Desc</label>
                        <textarea class="form-control" id="blo_desc" name="blo_desc" rows="5" placeholder="Blog Description"><?= $blogs_data['blo_desc'] ?? '' ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="blo_meta_title">Blog Meta Title</label>
                        <textarea class="form-control" id="blo_meta_title" name="blo_meta_title" rows="2" placeholder="Blog Meta Title"><?= $blogs_data['blo_meta_title'] ?? '' ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="blo_meta_keyword">Blog Meta Keyword</label>
                        <textarea class="form-control" id="blo_meta_keyword" name="blo_meta_keyword" rows="2" placeholder="Blog Meta Keyword"><?= $blogs_data['blo_meta_keyword'] ?? '' ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="blo_meta_description">Blog Meta Description</label>
                        <textarea class="form-control" id="blo_meta_description" name="blo_meta_description" rows="5" placeholder="Blog Meta Description"><?= $blogs_data['blo_meta_description'] ?? '' ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <div class="img-upload-btn">
                            <div class="form-group">
                                <input type="file" class="form-control" name="images" onchange="preview()" id="imagess" value="<?php echo $blogs_data['blo_images']  ?? ''; ?>" style="display: none">
                                <img id="frame" onclick="selectImage()" src="<?php echo !empty($blogs_data['blo_images']) ? UPLOAD_URL . 'admin/blog_images/' . $blogs_data['blo_images'] : '#'; ?>" class="img-thumbnail img-responsive d-block rounded " onerror=" src='<?= UPLOAD_URL . 'admin/default.png' ?>'" style="height: 100px; width: 100px;" />
                                <label for="imagess">upload Image</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <label for="image_alt">Blog Image Alt</label>
                        <input type="text" class="form-control " id="image_alt" name="image_alt" value="<?= $blogs_data['blo_image_alt_text'] ?? '' ?>" placeholder="Blog Image Alt">
                    </div>
                    <div class="col-sm-3">
                        <label for="blo_status">Select Status</label>
                        <select class="form-control" name="blo_status" id="blo_status">
                            <option value="">Select</option>
                            <option value="1" <?= (isset($blogs_data['blo_status']) ? ($blogs_data['blo_status'] == 1 ? 'selected' : '') : '') ?>>Active</option>
                            <option value="0" <?= (isset($blogs_data['blo_status']) ? ($blogs_data['blo_status'] == 0 ? 'selected' : '') : '') ?>>inactive</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label for="sort_order">Display Order</label>
                        <input type="number" name="sort_order" id="sort_order" class="form-control" value="<?= $blogs_data['blo_sort_order'] ?? '' ?>" placeholder="Blog display order">
                    </div>
                </div>
                <button type="submit" name="save_blogs" class="btn btn-sm btn-primary ">
                    Save
                </button>
                <a href="<?= SITE_ADMIN_URL . 'blogs' ?>" class="btn btn-sm btn-warning ">
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

<script src="<?= ADMIN_ASSETS_URL . 'vendor/ckeditor/ckeditor.js' ?>"></script>
<script src="<?= ADMIN_ASSETS_URL . 'vendor/jquery/jquery.validate.min.js' ?>"></script>
<script>
    $('#blog-form').validate({
        rules: {
            blo_name: {
                required: true,
            },
            blo_slug: {
                required: true,
            },
            blo_short_desc: {
                required: true,
                maxlength: 200,
            },
            blo_desc: {
                required: true,
            },
            images: {
                required: true,
            },
            image_alt: {
                required: true,
            },
            blo_meta_title: {
                required: true,
            },
            blo_meta_keyword: {
                required: true,
            },
            blo_meta_description: {
                required: true,
            },
            blo_status: {
                required: true,
            },
            sort_order: {
                required: true,
            },
        },
        messages: {
            blo_name: {
                required: "Title must be required",
            },
            blo_slug: {
                required: "Slug must be required",
            },
            blo_short_desc: {
                required: "Description must be required",
            },
            blo_desc: {
                required: "Description must be required",
            },
            blo_status: {
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
            },
            blo_meta_title: {
                required: "Meta Title must be required",
            },
            blo_meta_keyword: {
                required: "Meta Keyword must be required",
            },
            blo_meta_description: {
                required: "Meta Description must be required",
            },
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
</script>

<script>
    CKEDITOR.replace('blo_desc');
</script>