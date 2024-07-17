<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aroma Shop - Login</title>
    <link rel="icon" href="<?= base_url('assets/aroma/') ?>img/Fevicon.png" type="image/png">
    <link rel="stylesheet" href="<?= base_url('assets/aroma/') ?>vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/aroma/') ?>vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/aroma/') ?>vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/aroma/') ?>vendors/linericon/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/aroma/') ?>vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/aroma/') ?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/aroma/') ?>vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/aroma/') ?>vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assets/aroma/') ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/toastr/') ?>build/toastr.min.css">
    <style>
        /* Custom primary button */
        .btn-primary {
            background-color: #384aeb;
            border-color: #384aeb;
            border-radius: 20px;
            /* Makes the corners more rounded */
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active,
        .btn-primary.active,
        .open>.dropdown-toggle.btn-primary {
            background-color: #2f3cb8;
            border-color: #2f3cb8;
        }

        .btn-primary:focus,
        .btn-primary.focus {
            box-shadow: 0 0 0 0.2rem rgba(56, 74, 235, 0.5);
        }

        /* Custom outline primary button */
        .btn-outline-primary {
            color: #384aeb;
            border-color: #384aeb;
            border-radius: 20px;
            /* Makes the corners more rounded */
        }

        .btn-outline-primary:hover,
        .btn-outline-primary:focus,
        .btn-outline-primary:active,
        .btn-outline-primary.active,
        .open>.dropdown-toggle.btn-outline-primary {
            color: #fff;
            background-color: #384aeb;
            border-color: #384aeb;
        }

        .btn-outline-primary:focus,
        .btn-outline-primary.focus {
            box-shadow: 0 0 0 0.2rem rgba(56, 74, 235, 0.5);
        }

        .btn-outline-primary:disabled,
        .btn-outline-primary.disabled {
            color: #384aeb;
            background-color: transparent;
        }
    </style>
</head>

<body>
    <button style="display: none;" class="flash-data-error" value="<?= $this->session->flashdata('flash-error'); ?>"></button>
    <button style="display: none;" class="flash-data-success" value="<?= $this->session->flashdata('flash-success'); ?>"></button>
    <!--================Login Box Area =================-->

    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                    <img src="<?= base_url('assets/aroma/') ?>img/logoNew.png" style="width: 80%; height:auto;">
                    <h4>Jual Beli Mudah hanya di MiyoMart</h4>
                    <p>Bergabung dan rasakan kemudahan berbelanja</p>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner register_form_inner">
                        <h2>Buat Akun</h2>
                        <p>Sudah punya akun? <a href="<?= base_url('Home') ?>">Masuk</a></p>
                        <form class="row login_form" method="post" action="<?= base_url('Frontend/FrontRegister/register') ?>" id="register_form">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                                <small id="alertuser" class="form-text text-muted">Masukan username</small>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                                <small id="alertpassword" class="form-text text-muted">Masukan password</small>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="telp" name="telp" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'">
                                <small id="alerttelp" class="form-text text-muted">Masukan nomor telepon</small>
                            </div>
                            <div class="col-md-12 form-group">
                                <button id="but" type="submit" value="submit" class="btn btn-outline-primary w-100" disabled>Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Login Box Area =================-->



    <!--================ Start footer Area  =================-->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row d-flex">
                    <p class="col-lg-12 footer-text text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> By Miyo | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->



    <script src="<?= base_url('assets/aroma/') ?>vendors/jquery/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url('assets/aroma/') ?>vendors/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url('assets/aroma/') ?>vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/aroma/') ?>vendors/skrollr.min.js"></script>
    <script src="<?= base_url('assets/aroma/') ?>vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/aroma/') ?>vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="<?= base_url('assets/aroma/') ?>vendors/mail-script.js"></script>
    <script src="<?= base_url('assets/aroma/') ?>js/main.js"></script>
    <script src="<?= base_url('assets/toastr/') ?>build/toastr.min.js"></script>
    <script>
        var telp = document.getElementById('telp');
        var username = document.getElementById('username');
        var password = document.getElementById('password');
        var button = document.getElementById('but');

        telp.addEventListener('keyup', function() {
            validateForm();
        });

        username.addEventListener('keyup', function() {
            validateForm();
        });

        password.addEventListener('keyup', function() {
            validateForm();
        });

        function validateForm() {
            var telpValue = telp.value;
            var usernameValue = username.value;
            var passwordValue = password.value;
            var letterRegex = /^[A-Za-z]+$/;

            if (!isNaN(telpValue) && telpValue.length === 12 &&
                (!isNaN(usernameValue) || (usernameValue.length >= 6 && usernameValue.length <= 16 && letterRegex.test(usernameValue))) &&
                passwordValue.length >= 6 && passwordValue.length <= 16) {
                document.getElementById('alerttelp').innerHTML = '    <i class="ti-check"></i>';
                document.getElementById('alertuser').innerHTML = '    <i class="ti-check"></i>';
                document.getElementById('alertpassword').innerHTML = '    <i class="ti-check"></i>';
                button.disabled = false;
            } else {
                if (!isNaN(telpValue)) {
                    if (telpValue.length > 12) {
                        document.getElementById('alerttelp').innerHTML = 'Masukan nomor telepon anda';
                    } else {
                        document.getElementById('alerttelp').innerHTML = 'Masukan nomor yang valid';
                    }
                } else if (telpValue === '') {
                    document.getElementById('alerttelp').innerHTML = 'Masukan nomor telepon anda';
                } else {
                    document.getElementById('alerttelp').innerHTML = 'Masukan nomor yang valid';
                }

                if (!isNaN(usernameValue) || (usernameValue.length >= 6 && usernameValue.length <= 16 && letterRegex.test(usernameValue))) {
                    document.getElementById('alertuser').innerHTML = '    <i class="ti-check"></i>';
                } else if (usernameValue === '') {
                    document.getElementById('alertuser').innerHTML = 'Masukan username';
                } else if (!letterRegex.test(usernameValue)) {
                    document.getElementById('alertuser').innerHTML = 'Hanya huruf yang diperbolehkan';
                } else if (!isNaN(usernameValue)) {
                    document.getElementById('alertuser').innerHTML = 'Hanya huruf yang diperbolehkan';
                } else {
                    document.getElementById('alertuser').innerHTML = 'Masukan 6 - 16 huruf';
                }

                if (passwordValue.length >= 6 && passwordValue.length <= 16) {
                    document.getElementById('alertpassword').innerHTML = '    <i class="ti-check"></i>';
                } else {
                    document.getElementById('alertpassword').innerHTML = 'Masukan 6 - 16 karakter';
                }

                button.disabled = true;
            }
        }
    </script>
    <script>
        toastr.options.positionClass = 'toast-bottom-right';
        <?php if ($this->session->flashdata('success')) : ?>
            toastr.success('<?php echo $this->session->flashdata('success'); ?>');
        <?php endif; ?>

        <?php if ($this->session->flashdata('error')) : ?>
            toastr.error('<?php echo $this->session->flashdata('error'); ?>');
        <?php endif; ?>
    </script>

</body>

</html>