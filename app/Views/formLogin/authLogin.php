<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-SARPRAS SMALAN</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/smalan.png">
    <script src="https://kit.fontawesome.com/49b420f669.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <h1 class="auth-title">Log in.</h1>

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= url_to('login') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text"
                                class="form-control form-control-xl <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" id="password"
                                class="form-control form-control-xl <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                placeholder="<?= lang('Auth.password') ?>">

                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                                <span class="eye" onclick="myFunction()" style="margin-left:270px;">
                                    <i id="hide1" class="fa-solid fa-eye"></i>
                                    <i id="hide2" class="fa-solid fa-eye-slash"></i>
                                </span>
                            </div>
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                        </div>
                        <!-- <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div> -->
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5"> Log in</button>
                    </form>
                    <!-- <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600"><?= lang('Auth.needAnAccount') ?><a href="<?= base_url('register') ?>"
                                class="font-bold"> Sign
                                up</a>.</p>
                        <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
    <script src="assets/js/password.js"></script>
</body>

</html>
