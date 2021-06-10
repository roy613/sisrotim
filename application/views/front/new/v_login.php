<!doctype html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/logo.png">
    <title>SIMPRONATASA | login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/new/login-form-20/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(<?php echo base_url(); ?>assets/f2/img/b1.jpeg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "gagal") {
                            echo "<div class='alert alert-danger font-weight-bold text-center'>Maaf! Username & Password
Salah.</div>";
                        } else if ($_GET['alert'] == "belum_login") {
                            echo "<div class='alert alert-danger font-weight-bold text-center'>Anda Harus Login Terlebih
Dulu!</div>";
                        } else if ($_GET['alert'] == "logout") {
                            echo "<div class='alert alert-warning font-weight-bold text-center'>Terima Kasih Atas Kunjungannya,<br> Saat Ini Anda Telah LOGOUT!</div>";
                        }
                    }
                    ?>
                    <img src="<?php echo base_url(); ?>assets/logo.png" width="auto" alt="" height="80px" class="mr-2"><br>
                    <h2 class="heading-section" style="text-shadow: 2px 2px 9px black">LOGIN SIMPRONATASA</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h6 class="mb-4 text-center" style="color:#fff; text-shadow: 2px 2px 9px black">Silahkan Input Username dan Password Anda</h6>
                        <form action="<?php echo base_url() . 'welcome/login_aksi' ?>" class="signin-form">
                            <div class="form-group">
                                <div style="color: red;"><?php echo form_error('username'); ?></div>
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <div style="color: red;"><?php echo form_error('password'); ?></div>
                                <input id="password-field" name="password" type="password" class="form-control" placeholder="Password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3"><b>Masuk</b></button>
                            </div>
                        </form>
                        <a href="<?php echo base_url(); ?>" class="form-control btn btn-out px-3"><b>Kembali</b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo base_url() ?>assets/new/login-form-20/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/new/login-form-20/js/popper.js"></script>
    <script src="<?php echo base_url() ?>assets/new/login-form-20/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/new/login-form-20/js/main.js"></script>

</body>

</html>