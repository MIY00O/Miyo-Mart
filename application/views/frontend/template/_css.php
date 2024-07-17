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
    .toast-success {
        background-color: #384AEB;
    }

    :root {
        --primary: #384AEB;
    }
</style>
<style>
    .square-image-container {
        position: relative;
        width: 100%;
        padding-top: 90%;
        overflow: hidden;
        border: 1px solid #ddd;
    }

    .square-image-container img.square-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
<style>
    .text-justify p {
        text-align: justify;
        margin: 0;
        padding: 5px 0;
    }

    .text-justify p span {
        display: inline-block;
        width: 120px;
    }
</style>
<style>
    .dropdown-header-custom {
        font-weight: bold;
        padding: 0.5rem 1.5rem;
        display: flex;
        justify-content: space-between;
    }

    .dropdown-item-custom {
        width: 100%;
        display: flex;
        align-items: center;
        padding: 0.5rem 1.5rem;
    }

    .dropdown-item-custom img {
        width: 50px;
        height: auto;
    }

    .dropdown-item-custom p {
        margin-left: 1rem;
        margin-bottom: 0;
    }
</style>
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

<style>
    .btn-danger {
        background-color: #e53935;
        border-color: #e53935;
        border-radius: 20px;
        /* Makes the corners more rounded */
    }

    .btn-danger:hover,
    .btn-danger:focus,
    .btn-danger:active,
    .btn-danger.active,
    .open>.dropdown-toggle.btn-danger {
        background-color: #d32f2f;
        border-color: #d32f2f;
    }

    .btn-danger:focus,
    .btn-danger.focus {
        box-shadow: 0 0 0 0.2rem rgba(229, 57, 53, 0.5);
    }

    /* Custom outline danger button */
    .btn-outline-danger {
        color: #e53935;
        border-color: #e53935;
        border-radius: 20px;
        /* Makes the corners more rounded */
    }

    .btn-outline-danger:hover,
    .btn-outline-danger:focus,
    .btn-outline-danger:active,
    .btn-outline-danger.active,
    .open>.dropdown-toggle.btn-outline-danger {
        color: #fff;
        background-color: #e53935;
        border-color: #e53935;
    }

    .btn-outline-danger:focus,
    .btn-outline-danger.focus {
        box-shadow: 0 0 0 0.2rem rgba(229, 57, 53, 0.5);
    }

    .btn-outline-danger:disabled,
    .btn-outline-danger.disabled {
        color: #e53935;
        background-color: transparent;
    }
</style>

<style>
    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
        border-radius: 20px;
        /* Makes the corners more rounded */
    }

    .btn-secondary:hover,
    .btn-secondary:focus,
    .btn-secondary:active,
    .btn-secondary.active,
    .open>.dropdown-toggle.btn-secondary {
        background-color: #5a6268;
        border-color: #545b62;
    }

    .btn-secondary:focus,
    .btn-secondary.focus {
        box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
    }

    /* Custom outline secondary button */
    .btn-outline-secondary {
        color: #6c757d;
        border-color: #6c757d;
        border-radius: 20px;
        /* Makes the corners more rounded */
    }

    .btn-outline-secondary:hover,
    .btn-outline-secondary:focus,
    .btn-outline-secondary:active,
    .btn-outline-secondary.active,
    .open>.dropdown-toggle.btn-outline-secondary {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-outline-secondary:focus,
    .btn-outline-secondary.focus {
        box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
    }

    .btn-outline-secondary:disabled,
    .btn-outline-secondary.disabled {
        color: #6c757d;
        background-color: transparent;
    }
</style>

<style>
    .number-control {
        display: flex;
        align-items: center;
    }

    .number-left::before,
    .number-right::after {
        content: attr(data-content);
        background-color: #384AEB;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px #384AEB;
        width: 20px;
        color: white;
        transition: background-color 0.3s;
        cursor: pointer;
    }

    .number-left::before {
        content: "-";
    }

    .number-right::after {
        content: "+";
    }

    .number-quantity {
        padding: 0.25rem;
        border: 0;
        width: 50px;
        -moz-appearance: textfield;
        border-top: 1px #384AEB;
        border-bottom: 1px #384AEB;
    }

    .number-left:hover::before,
    .number-right:hover::after {
        background-color: #384AEB;
    }
</style>
<style>
    .action-buttons {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .action-buttons .btn {
        margin-bottom: 0;
    }
</style>