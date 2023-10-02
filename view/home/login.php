<?php
require_once("c://xampp/htdocs/tech_department/view/head/head.php");
//Redirect to the dashboard if user exist
if (!empty($_SESSION['user'])) {
    header("Location:panel_control.php");
}
?>

<div class="d-flex align-items-center py-4 content-sign-in">
    <!-- Custom styles for this template -->
    <link href="/tech_department/asset/static/css/sign-in.css" rel="stylesheet">

    <!--Login-->
    <main class="form-signin w-100 m-auto">
        <form action="verificar.php" method="POST" class="login" autocomplete="off">

            <!--Img-->
            <img class="mb-4" src="/tech_department/asset/static/img/sign-in/logo.png" alt="" width="72" height="57" />
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <!--Email-->
            <div class="mb-3">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" />
                
            </div>

            <!--Password-->
            <div class="mb-3">
                <label for="password">Password</label>
                <div class="box-eye">
                    <button type="button" onclick="showPassword('password','eyepassword')">
                        <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                    </button>
                </div>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" />
            </div>



            <?php if (!empty($_GET['error'])) : ?>
                <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
                    <?= !empty($_GET['error']) ? $_GET['error'] : "" ?>
                </div>
            <?php endif; ?>

            <button class="btn btn-primary w-100 py-2" type="submit">
                Sign in
            </button>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
        </form>
    </main>
</div>

<?php
require_once("c://xampp/htdocs/login/view/head/footer.php");
?>