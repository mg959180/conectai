<!-- Begin Page Content -->
<style>
    .img-upload-btn {
        top: 25px;
        position: absolute;
        left: 60px;
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
</style>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile Edit</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="user" method="post" enctype="multipart/form-data">
                <input type="hidden" name="old_images" class="form-control" value="<?= $admin_edit_data['adm_profile_pic'] ?>">
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control " id="first_name" name="first_name" value="<?= $admin_edit_data['adm_fname']; ?>" placeholder="First Name">
                    </div>
                    <div class="col-sm-4">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control " id="last_name" name="last_name" value="<?= $admin_edit_data['adm_lname']; ?>" placeholder="Last Name">
                    </div>
                    <div class="col-sm-4">
                        <label for="screen_name">Screen Name</label>
                        <input type="text" class="form-control " id="screen_name" name="screen_name" value="<?= $admin_edit_data['adm_screen_name']; ?>" placeholder="Screen Name">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">

                        <div class="img-upload-btn">
                            <div class="form-group">
                                <?php if (!empty($admin_edit_data['adm_profile_pic'])) { ?>
                                    <input type="file" name="images" onchange="preview()" id="imagess" value="<?php echo $admin_edit_data['adm_profile_pic']  ?? ''; ?>" style="display: none">
                                    <img id="frame" onclick="selectImage()" src="<?php echo !empty($admin_edit_data['adm_profile_pic']) ? UPLOAD_URL . 'admin/profile_images/' . $admin_edit_data['adm_profile_pic'] : '#'; ?>" class="img-thumbnail img-responsive d-block rounded " onerror=" src='<?= UPLOAD_URL . 'admin/default.png' ?>'" style="height: 100px; width: 100px;" />
                                <?php } else { ?>
                                    <input type="file" name="images" onchange="preview()" id="imagess" style="display: none">
                                    <img id="frame" onclick="selectImage()" class="img-thumbnail img-responsive d-block rounded " src="#" onerror=" src='<?= UPLOAD_URL . 'admin/default.png' ?>'" style="height: 100px; width: 100px;" />
                                <?php } ?>
                                <label for="imagess">upload Image</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control " id="email" name="email" value="<?= $admin_edit_data['adm_email']; ?>" placeholder="Email Address">
                            </div>
                            <div class="col-sm-6">
                                <label for="contact">Contact Number</label>
                                <input type="tel" class="form-control " id="contact" name="contact" value="<?= $admin_edit_data['adm_phone1']; ?>" placeholder="Contact Number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="username">User Name</label>
                                <input type="text" class="form-control " id="username" name="username" value="<?= $admin_edit_data['adm_user_name']; ?>" placeholder="User Name">
                            </div>
                            <div class="col-sm-6">
                                <label for="slug">User Slug</label>
                                <input type="text" class="form-control " id="slug" name="slug" value="<?= $admin_edit_data['adm_slug']; ?>" placeholder="Slug">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" name="edit_profile" class="btn btn-sm btn-primary ">
                    Save
                </button>
                <a href="<?= SITE_ADMIN_URL ?>" class="btn btn-sm btn-warning ">
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