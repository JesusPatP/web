<?php
require_once dirname(__DIR__) . '/head/head.php';
if (!empty($_SESSION['user'])) {
    header("Location:/tech_department/view/dashboard/dashboard.php");
}
?>
<div class="login_conatiner">
    <link rel="stylesheet" href="/tech_department/assets/css/sign-in.css">
    <!----------------------- Main Container -------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!----------------------- Login Container -------------------------->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!--------------------------- Left Box ----------------------------->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #5c54d4;">
                <div class="featured-image mb-3">
                    <img src="/tech_department/assets/img/sign-in/undraw_launching_re_tomg.svg" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
                <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on this platform.</small>
            </div>
            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <form action="verificar.php" method="POST" class="login" autocomplete="off">
                        <div class="header-text mb-4">
                            <h2>Hello,Again</h2>
                            <p>We are happy to have you back.</p>
                        </div>
                        <!--Email-->
                        <div class="input-group mb-3">
                            <input type="email" name="email" id="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email address">
                        </div>
                        <!--Password-->
                        <div class="input-group">
                            <input type="password" name="password" id="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                            <div class="input-group">
                                <button type="button" onclick="showPassword('password','eyepassword')">
                                    <i id="eyepassword" class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="divider"></div>
                        <!--Error Message-->
                        <?php if (!empty($_GET['error'])) : ?>
                            <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
                                <?= !empty($_GET['error']) ? $_GET['error'] : "" ?>
                            </div>
                        <?php endif; ?>
                        <!--Button-->
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                        </div>

                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once dirname(__DIR__) . '/head/footer.php';
?>