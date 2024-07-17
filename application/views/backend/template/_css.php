<link rel="stylesheet" href="<?= base_url('assets/modernize/assets/') ?>/css/styles.min.css" />
<link rel="stylesheet" href="<?= base_url('assets/toastr/') ?>build/toastr.min.css">
<style>
    .toast-success {
        background-color: #384AEB;
        /* Warna latar belakang untuk pesan sukses */
    }

    :root {
        --primary: #384AEB;
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

    .btn {
        border-radius: 20px;
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