<!-- Begin Page Content -->

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Change Password</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="user" method="post">
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="current_password">Current Password</label>
                        <input type="password" class="form-control" id="current_password" name="current_password" value="" placeholder="Current Password">
                    </div>
                    <div class="col-sm-4">
                        <label for="new_password">New Password</label>
                        <input type="text" class="form-control " id="new_password" name="new_password" value="" placeholder="New Password">
                    </div>
                    <div class="col-sm-4">
                        <label for="retype_password">Retype Password</label>
                        <input type="text" class="form-control " id="retype_password" name="retype_password" value="" placeholder="Re Enter New Password">
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