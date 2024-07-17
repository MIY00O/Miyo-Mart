<?php $user_id = $this->session->userdata('user_id') ?>
<nav class="navbar fixed-top navbar-expand-lg navbar-ligh bg-light" style="z-index: 3;">
    <div class="container">
        <a class="navbar-brand logo_h" href="<?= base_url('') ?>"><img src="<?= base_url('assets/aroma/') ?>img/logoMini.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav mr-auto ml-auto ">
                <div class="container-fluid">
                    <form class="d-flex search-form" role="search">
                        <div class="input-group filter-bar-search">
                            <div class="input-group-append">
                                <form action="<?= base_url('home'); ?>" method="post">
                                    <input type="hidden" name="search_term" placeholder="Cari Produk">
                                    <!-- <button type="hidden">Cari</button> -->
                                </form>
                                <form action="<?php echo base_url('home'); ?>" method="post">
                                    <input type="text" name="search_term" placeholder="Cari Produk">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
            </ul>
            <ul class="nav-shop mt-4 mb-4">
                <?php if ($this->session->userdata('username') == NULL) { ?>
                    <li class="nav-item dropdown">
                        <button class="dropdown mr-4" data-toggle="dropdown"><i class="ti-shopping-cart "></i><span class="nav-shop__circle"></span></button>
                        <a class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal" href="">Masuk</a>
                        <a class="btn btn-primary" href="<?= base_url('Frontend/FrontRegister') ?>">Register</a>
                    </li>
                <?php } else if ($this->session->userdata('level') == 'AdminShop') { ?>
                    <li class="nav-item dropdown">
                        <button class="dropdown mr-4" data-toggle="dropdown" id="shipping"><i class="ti-shopping-cart "></i><span class="nav-shop__circle">
                                <?php foreach ($wishlistCount as $as) { ?>
                                    <?= $as['product_count'] ?>
                                <?php } ?>
                            </span>
                        </button>
                        <div class="dropdown-menu mr-5" aria-labelledby="shipping">
                            <div class="dropdown-header dropdown-header-custom ">
                                <span>Produk</span>
                                <span><a href="<?= base_url('Frontend/FrontProduct/Wishlist') ?>">Lihat</a></span>
                            </div>
                            <?php foreach ($wishlist as $as) { ?>
                                <form action="" method="post">
                                    <a class="dropdown-item" href="<?= base_url('Frontend/FrontProduct/singleeProduct/' . $as['product_id'] . '/' . $as['count_items']) ?>" style="width: 26vw; height:auto;">
                                </form>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="row align-items-center">
                                        <img src="<?= base_url('assets/my-assets/upload/photo/' . $as['picture1']) ?>" alt="Image 2" class="img-thumbnail" style="width: 50px; height: auto;">
                                        <p class="ml-3 mb-0">
                                            <?php
                                            if (strlen($as['name']) > 17) {
                                                echo substr($as['name'], 0, 17) . '...';
                                            } else {
                                                echo $as['name'];
                                            }
                                            ?>
                                        </p>
                                    </div>
                                    <div class="row align-items-center">
                                        <p class="ml-3 mb-0 bold">x<?= number_format($as['count_items']) ?></p>
                                        <p class="ml-3 mb-0">Rp.<?= number_format($as['total']) ?></p>
                                    </div>
                                </div>
                                </a>
                            <?php } ?>
                        </div>
                        <span style="height: 100px; border-left: 2px solid grey; margin-right: 20px;"></span>
                        <a class="btn btn-primary mr-2" data-toggle="modal" data-target="#openShop" href="">
                            <?php foreach ($usertoko as $row) {
                                echo substr($row['store_name'], 0, 8);
                            } ?>
                        </a>
                        <button class="" data-toggle="modal" data-target="#user"><i class="ti-user"></i>
                            <?= substr($this->session->userdata('username'), 0, 8); ?>
                            <?php if ($this->session->userdata('username') > 8) : ?>
                                . . .
                            <?php endif; ?></button>

                        <div class="dropdown-menu mr-5" aria-labelledby="user">
                            <?php foreach ($allproduct as $as) { ?>
                                <a class="dropdown-item" href="#" style="width: 26vw; height:auto;">
                                    <div class="d-flex align-items-center">
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                    </li>
                <?php } else { ?>
                    <li class="nav-item dropdown">
                        <button class="dropdown mr-4" data-toggle="dropdown" id="shipping"><i class="ti-shopping-cart "></i><span class="nav-shop__circle">
                                <?php foreach ($wishlistCount as $as) { ?>
                                    <?= $as['product_count'] ?>
                                <?php } ?>
                            </span></button>
                        <div class="dropdown-menu mr-5" aria-labelledby="shipping">
                            <div class="dropdown-header dropdown-header-custom ">
                                <span>Produk</span>
                                <span><a href="<?= base_url('Frontend/FrontProduct/Wishlist') ?>">Lihat</a></span>
                            </div>
                            <?php foreach ($wishlist as $as) { ?>
                                <form action="" method="post">
                                    <a class="dropdown-item" href="<?= base_url('Frontend/FrontProduct/singleeProduct/' . $as['product_id'] . '/' . $as['count_items']) ?>" style="width: 26vw; height:auto;">
                                </form>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="row align-items-center">
                                        <img src="<?= base_url('assets/my-assets/upload/photo/' . $as['picture1']) ?>" alt="Image 2" class="img-thumbnail" style="width: 50px; height: auto;">
                                        <p class="ml-3 mb-0">
                                            <?php
                                            if (strlen($as['name']) > 17) {
                                                echo substr($as['name'], 0, 17) . '...';
                                            } else {
                                                echo $as['name'];
                                            }
                                            ?>
                                        </p>
                                    </div>
                                    <div class="row align-items-center">
                                        <p class="ml-3 mb-0 bold">x<?= number_format($as['count_items']) ?></p>
                                        <p class="ml-3 mb-0">Rp.<?= number_format($as['total']) ?></p>
                                    </div>
                                </div>
                                </a>
                            <?php } ?>
                        </div>
                        <span style="height: 100px; border-left: 2px solid grey; margin-right: 20px;"></span>
                        <a class="btn btn-primary mr-2" data-toggle="modal" data-target="#create" href="">Buat Toko</a>
                        <button class="" data-toggle="modal" data-target="#user"><i class="ti-user"></i>
                            <?= substr($this->session->userdata('username'), 0, 8); ?>
                            <?php if ($this->session->userdata('username') > 8) : ?>
                                . . .
                            <?php endif; ?></button>

                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal -->
<!-- Login -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2>Masuk</h2>
                <p>Belum punya akun? <a href="<?= base_url('Frontend/FrontRegister') ?>">Daftar</a></p>
                <form class="row login_form" method="post" action="<?= base_url('Home/login') ?>" id="register_form">
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Nama">
                        <small id="alertuser" class="form-text text-muted">Masukan username</small>
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <small id="alertpassword" class="form-text text-muted">Masukan password</small>
                    </div>
                    <div class="col-md-12 form-group">
                        <button id="but" type="submit" value="submit" class="btn btn-outline-primary w-100" disabled>Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Login -->

<!-- Buat Toko -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2>Buat Toko</h2>
                <form class="row login_form" method="post" action="<?= base_url('Frontend/FrontRegister/create') ?>" id="register_form">
                    <div class="col-md-12 form-group">
                        <input id="telp" name="telp" type="hidden" class="form-control" value="<?= $this->session->userdata('telp'); ?>" readonly>
                        <input type="text" class="form-control" id="store_name" name="store_name" placeholder="Nama toko">
                        <small id="alertnama" class="form-text text-muted">Masukan nama toko</small>
                    </div>
                    <div class="col-md-12 form-group">
                        <?php if ($this->session->userdata('address')) { ?>
                            <input type="text" class="form-control" id="store_address" name="store_address" value="<?= $this->session->userdata('address') ?>" readonly>
                            <small id="alertalamat" class="form-text text-muted">Masukan alamat toko</small>
                        <?php } else { ?>
                            <input type="text" class="form-control" id="store_address" name="store_address" placeholder="Alamat toko">
                            <small id="alertalamat" class="form-text text-muted">Masukan alamat toko</small>
                        <?php } ?>
                    </div>
                    <div class="col-md-12 form-group">
                        <textarea name="store_description" id="">Masukan deskripsi toko</textarea>
                        <small id="alertalamat" class="form-text text-muted">Masukan deskripsi toko</small>
                    </div>
                    <div class="col-md-12 form-group">
                        <button id="but" type="submit" value="submit" class="btn btn-outline-primary w-100">Buat toko</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Buat Toko -->

<!-- User -->
<div class="modal fade" id="user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="biodata-tab" data-toggle="tab" href="#biodata" role="tab" aria-controls="home" aria-selected="true">Biodata diri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="order-tab" data-toggle="tab" href="#order" role="tab" aria-controls="order" aria-selected="false">Transaksi</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active mt-4 text-justify" id="biodata" role="tabpanel" aria-labelledby="biodata-tab">
                            <p><span>Nama</span>: <?= $this->session->userdata('username') ?></p>
                            <?php if ($this->session->userdata('address') == NULL) { ?>
                                <p><span>Alamat</span>: <a href="" type="button" data-toggle="modal" data-target="#modalKedua">Tambahkan alamatmu</a></p>
                                <div class="modal fade" id="modalKedua" tabindex="-1" role="dialog" aria-labelledby="modalKeduaLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url('Home/updateaddress/' . $user_id) ?>" method="post">
                                                    <div class="col-md-12 form-group">
                                                        <input type="text" class="form-control" id="address" name="address" placeholder="Masukan alamatmu">
                                                        <small id="alertnama" class="form-text text-muted">Masukan alamatmu</small>
                                                    </div>
                                                    <button id="but" type="submit" value="submit" class="btn btn-outline-primary w-100">Update alamatmu</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <p><span>Alamat</span>: <?= $this->session->userdata('address') ?></p>
                            <?php } ?>
                            <p><span>No telepon</span>: <?= $this->session->userdata('telp') ?></p>
                            <div class="d-flex justify-content-end">
                                <a type="button" class="btn btn-outline-primary" href="<?= base_url('Home/logout') ?>">
                                    Logout
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order-tab">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="process-tab" data-toggle="tab" href="#orderprocess" role="tab" aria-controls="orderprocess" aria-selected="true">Pesanan Diproses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="send-tab" data-toggle="tab" href="#ordersend" role="tab" aria-controls="ordersend" aria-selected="false">Pesanan Dikirim</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="completed-tab" data-toggle="tab" href="#ordercompleted" role="tab" aria-controls="ordercompleted" aria-selected="false">Pesanan Selesai</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="orderprocess" role="tabpanel" aria-labelledby="process-tab">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap mb-0 align-middle table-striped">
                                            <thead class="text-dark fs-4">
                                                <tr>
                                                    <th class="border-bottom-0 text-center">
                                                        <h6 class="fw-semibold mb-0">No</h6>
                                                    </th>
                                                    <th class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0">Gambar</h6>
                                                    </th>
                                                    <th class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0">Nama</h6>
                                                    </th>
                                                    <th class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0">Harga Total</h6>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (empty($productUserProcess)) { ?>
                                                    <tr>
                                                        <td colspan="4" class="text-center mt-4">
                                                            <h4 class="fw-semibold mb-0">Tidak ada pesanan yang sedang diproses</h4>
                                                        </td>
                                                    </tr>
                                                <?php } else { ?>
                                                    <?php $no = 0;
                                                    $no++;
                                                    foreach ($productUserProcess as $as) { ?>
                                                        <tr>

                                                            <td class="border-bottom-0 text-center">
                                                                <h6 class="fw-semibold mb-0"><?= $no ?></h6>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal"><img src="<?= base_url('assets/my-assets/upload/photo/' . $as['picture1']) ?>" style="width: 6vw; height:auto;" alt=""></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <h6 class="fw-semibold mb-1">
                                                                    <?php
                                                                    if (strlen($as['name']) > 10) {
                                                                        echo substr($as['name'], 0, 10) . '...';
                                                                    } else {
                                                                        echo $as['name'];
                                                                    }
                                                                    ?>
                                                                </h6>
                                                                <span class="fw-normal">
                                                                    <?php
                                                                    if (strlen($as['description']) > 10) {
                                                                        echo substr($as['description'], 0, 10) . '...';
                                                                    } else {
                                                                        echo $as['description'];
                                                                    }
                                                                    ?>
                                                                </span>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal">Rp.<?= number_format($as['total']) ?></p>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ordersend" role="tabpanel" aria-labelledby="send-tab">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap mb-0 align-middle table-striped">
                                            <thead class="text-dark fs-4">
                                                <tr>
                                                    <th class="border-bottom-0 text-center">
                                                        <h6 class="fw-semibold mb-0">No</h6>
                                                    </th>
                                                    <th class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0">Gambar</h6>
                                                    </th>
                                                    <th class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0">Nama</h6>
                                                    </th>
                                                    <th class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0">Harga Total</h6>
                                                    </th>
                                                    <th class="border-bottom-0 text-center">
                                                        <h6 class="fw-semibold mb-0">Aksi</h6>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (empty($productUserSend)) { ?>
                                                    <tr>
                                                        <td colspan="5" class="text-center mt-4">
                                                            <h4 class="fw-semibold mb-0">Tidak ada pesanan yang sedang dikirim</h4>
                                                        </td>
                                                    </tr>
                                                <?php } else { ?>
                                                    <?php $no = 0;
                                                    $no++;
                                                    foreach ($productUserSend as $as) { ?>
                                                        <tr>

                                                            <td class="border-bottom-0 text-center">
                                                                <h6 class="fw-semibold mb-0"><?= $no ?></h6>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal"><img src="<?= base_url('assets/my-assets/upload/photo/' . $as['picture1']) ?>" style="width: 6vw; height:auto;" alt=""></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <h6 class="fw-semibold mb-1">
                                                                    <?php
                                                                    if (strlen($as['name']) > 10) {
                                                                        echo substr($as['name'], 0, 10) . '...';
                                                                    } else {
                                                                        echo $as['name'];
                                                                    }
                                                                    ?>
                                                                </h6>
                                                                <span class="fw-normal">
                                                                    <?php
                                                                    if (strlen($as['description']) > 10) {
                                                                        echo substr($as['description'], 0, 10) . '...';
                                                                    } else {
                                                                        echo $as['description'];
                                                                    }
                                                                    ?>
                                                                </span>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal">Rp.<?= number_format($as['total']) ?></p>
                                                            </td>
                                                            <td class="border-bottom-0 text-center">
                                                                <?php if ($as['condition_process'] == 'Send') { ?>
                                                                    <button type="button" class="btn btn-secondary" disabled>Sedang dikirim</button>
                                                                <?php } else { ?>
                                                                    <a type="button" class="btn btn-primary" href="<?= base_url('Backend/BackPesanan/sendCompleted/' . $as['process_id']) ?>">Konfirmasi</a>
                                                                <?php } ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ordercompleted" role="tabpanel" aria-labelledby="completed-tab">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap mb-0 align-middle table-striped">
                                            <thead class="text-dark fs-4">
                                                <tr>
                                                    <th class="border-bottom-0 text-center">
                                                        <h6 class="fw-semibold mb-0">No</h6>
                                                    </th>
                                                    <th class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0">Gambar</h6>
                                                    </th>
                                                    <th class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0">Nama</h6>
                                                    </th>
                                                    <th class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0">Harga Total</h6>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (empty($productUserCompleted)) { ?>
                                                    <tr>
                                                        <td colspan="4" class="text-center mt-4">
                                                            <h4 class="fw-semibold mb-0">Tidak ada pesanan</h4>
                                                        </td>
                                                    </tr>
                                                <?php } else { ?>
                                                    <?php $no = 0;
                                                    $no++;
                                                    foreach ($productUserCompleted as $as) { ?>
                                                        <tr>

                                                            <td class="border-bottom-0 text-center">
                                                                <h6 class="fw-semibold mb-0"><?= $no ?></h6>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal"><img src="<?= base_url('assets/my-assets/upload/photo/' . $as['picture1']) ?>" style="width: 6vw; height:auto;" alt=""></p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <h6 class="fw-semibold mb-1">
                                                                    <?php
                                                                    if (strlen($as['name']) > 10) {
                                                                        echo substr($as['name'], 0, 10) . '...';
                                                                    } else {
                                                                        echo $as['name'];
                                                                    }
                                                                    ?>
                                                                </h6>
                                                                <span class="fw-normal">
                                                                    <?php
                                                                    if (strlen($as['description']) > 10) {
                                                                        echo substr($as['description'], 0, 10) . '...';
                                                                    } else {
                                                                        echo $as['description'];
                                                                    }
                                                                    ?>
                                                                </span>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal">Rp.<?= number_format($as['total']) ?></p>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- User -->

<!-- Login -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2>Masuk</h2>
                <p>Belum punya akun? <a href="<?= base_url('Frontend/FrontRegister') ?>">Daftar</a></p>
                <form class="row login_form" method="post" action="<?= base_url('Home/login') ?>" id="register_form">
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Nama">
                        <small id="alertuser" class="form-text text-muted">Masukan username</small>
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <small id="alertpassword" class="form-text text-muted">Masukan password</small>
                    </div>
                    <div class="col-md-12 form-group">
                        <button id="but" type="submit" value="submit" class="btn btn-outline-primary w-100" disabled>Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Login -->

<!-- Open Shop -->
<div class="modal fade" id="openShop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2>MiyoMart Seller</h2>
                <p>Pantau pesanan yang masuk dan cek perkembangan tokomu</p>
                <a href="<?= base_url('Backend/BackDashboard') ?>" class="btn btn-outline-primary w-100">Cek MiyoMart Seller</a>
            </div>
        </div>
    </div>
</div>
<!-- Open Shop -->
<!-- Modal -->

<!-- JS Validation -->
<script>
    var username = document.getElementById('username');
    var password = document.getElementById('password');
    var button = document.getElementById('but');


    username.addEventListener('keyup', function() {
        validateForm();
    });

    password.addEventListener('keyup', function() {
        validateForm();
    });

    function validateForm() {
        var usernameValue = username.value;
        var passwordValue = password.value;
        var letterRegex = /^[A-Za-z]+$/;

        if ((!isNaN(usernameValue) || (usernameValue.length >= 6 && usernameValue.length <= 16 && letterRegex.test(usernameValue))) &&
            passwordValue.length >= 6 && passwordValue.length <= 16) {
            document.getElementById('alertuser').innerHTML = '    <i class="ti-check"></i>';
            document.getElementById('alertpassword').innerHTML = '    <i class="ti-check"></i>';
            button.disabled = false;
        } else {

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
<!-- JS Validation -->