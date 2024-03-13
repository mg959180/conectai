<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div id="error-div">
                    </div>
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-2 d-none d-lg-block"></div>
                        <div class="col-lg-8">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form class="user" id="login-form">
                                    <div class="form-group">
                                        <input type="text" id="uname" name="uname" required oninvalid="this.setCustomValidity('Please Enter Username')" oninput="this.setCustomValidity('')" class="form-control form-control-user" aria-describedby="userHelp" placeholder="Enter username...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="pass" required oninvalid="this.setCustomValidity('Please Enter Password')" oninput="this.setCustomValidity('')">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block" name="login_btn" id="login_btn">
                                        Login
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-2 d-none d-lg-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let login_form = document.getElementById('login-form');
    login_form.addEventListener('submit', (e) => {
        e.preventDefault();
        let data = new FormData();
        data.append('uname', login_form.elements['uname'].value);
        data.append('pass', login_form.elements['pass'].value);
        data.append('login', '1');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "<?= SITE_ADMIN_URL ?>auth", true);
        xhr.onload = function() {
            let res = JSON.parse(this.response);
            if (res.sts == true) {
                window.location = "<?= SITE_ADMIN_URL ?>";
            } else {
                custom_alert(res.type, res.msg);
            }
        }
        xhr.send(data);
    });
</script>