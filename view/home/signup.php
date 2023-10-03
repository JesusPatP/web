<?php
require_once("c://xampp/htdocs/web/view/head/head.php");
if (!empty($_SESSION['user'])) {
    header("Location:/web/view/dashboard/dashboard.php");
}
?>
<!-- Custom styles for this template -->
<link href="/web/asset/static/css/sign-up.css" rel="stylesheet">
<div class="container">
    <main>
        <!--Text-->

        <div class="signup-container">
            <!--Form container-->
            <div class="register-form">

                <h4 class="mb-3">Register form</h4>
                <!--Form resgister-->
                <form action="store.php" method="POST" autocomplete="off">
                    <div class="row g-3">

                        <!--Username-->
                        <div class="col-12">
                           
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" value="<?= (!empty($_GET['username'])) ? $_GET['username'] : "" ?>" class="form-control" id="username">
                        
                        </div>

                        <!--Email-->
                        <div class="col-12">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" value="<?= (!empty($_GET['email'])) ? $_GET['email'] : "" ?>" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>

                        <!--Password-->
                        <div class="col-12">
                            <label for="password" class="form-label">Password</label>
                            <div class="box-eye">
                                <button type="button" onclick="showPassword('password','eyepassword')">
                                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                                </button>
                            </div>
                            <input type="password" name="password" value="<?= (!empty($_GET['password'])) ? $_GET['password'] : "" ?>" class="form-control" id="password">

                        </div>

                        <!--Confirm Password-->
                        <div class="col-12">
                            <label for="confirmPassword" class="form-label">Repeat the password</label>
                            <div class="box-eye">
                                <button type="button" onclick="showPassword('confirmPassword','eyepassword2')">
                                    <i id="eyepassword2" class="fa-solid fa-eye changePassword"></i>
                                </button>
                            </div>
                            <input type="password" name="confirmPassword" value="<?= (!empty($_GET['confirmPassword'])) ? $_GET['confirmPassword'] : "" ?>" class="form-control" id="confirmPassword">
                        </div>


                        <?php if (!empty($_GET['error'])) : ?>
                            <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
                                <?= !empty($_GET['error']) ? $_GET['error'] : "" ?>
                            </div>
                        <?php endif; ?>
                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Register</button>
                </form>
            </div>
        </div>
    </main>
    <?php
    require_once("c://xampp/htdocs/web/view/head/footer.php");
    ?>