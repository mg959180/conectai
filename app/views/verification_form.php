<form id="verification-form" class="p-2" onsubmit="verification_form(); return false">
    <h6 class="mb-3">Email</h6>
    <input type="hidden" name="email" value="<?= $user_data['usr_email'] ?>">
    <input type="text" name="otp" id="otp" maxlength="6" class="form-control form-control-sm mb-2" placeholder="Enter otp">
    <div id="add_otp_error" class="text-danger text-left"></div>
    <div id="show_otp_timer" class="text-info text-right"></div>
    <div class="d-grid gap-2 mt-5">
        <button type="submit" id="btn-verify-submit" class="btn btn-primary">Continue <i class="fas fa-chevron-circle-right"></i></button>
    </div>
    <div class="text-center mt-2">
        <img src="<?= SITE_URL ?>public/front/assets/images/login-social-proof.png" alt="" class="img-fluid" height="60" width="450">
    </div>
</form>