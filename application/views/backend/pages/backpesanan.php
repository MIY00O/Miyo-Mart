<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-6">
            <!-- Page header -->
            <div class="mb-1">
                <h3 class="mb-0 ">Pesanan</h3>
            </div>
        </div>
        <div class="container mt-5">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Pesanan Diproses</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Pesanan Dikirim</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Pesanan Selesai</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="process-tab">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <!-- card -->
                            <div class="card mb-4">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap mb-0 align-middle table-striped">
                                            <thead class="text-dark fs-4">
                                                <tr>
                                                    <th class="border-bottom-0 text-center">
                                                        <h6 class="fw-semibold mb-0">No</h6>
                                                    </th>
                                                    <th class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0">Kode Resi</h6>
                                                    </th>
                                                    <th class="border-bottom-0 text-center">
                                                        <h6 class="fw-semibold mb-0">Metode Pembayaran</h6>
                                                    </th>
                                                    <th class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0">Total Harga</h6>
                                                    </th>
                                                    <th class="border-bottom-0 text-center">
                                                        <h6 class="fw-semibold mb-0">Aksi</h6>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($productProcess as $aa) { ?>
                                                    <tr>
                                                        <td class="border-bottom-0 text-center">
                                                            <h6 class="fw-semibold mb-0"><?= $no++; ?></h6>
                                                        </td>
                                                        <td class="border-bottom-0">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <span class="badge bg-warning rounded-3 fw-semibold"><?= $aa['buy_code']; ?></span>
                                                            </div>
                                                        </td>
                                                        <td class="border-bottom-0 text-center">
                                                            <p class="mb-0 fw-normal"><?= $aa['delivery_method']; ?></p>
                                                        </td>
                                                        <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal">Rp.<?= number_format($aa['total']) ?></p>
                                                        </td>
                                                        <td class="border-bottom-0 text-center">
                                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#detail<?= $aa['buy_code'] ?>">Detail</button>
                                                            <a type="button" class="btn btn-primary" href="<?= base_url('Backend/BackPesanan/Process/' . $aa['process_id']) ?>">Selesai Diproses</a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="send-tab">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <!-- card -->
                            <div class="card mb-4">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap mb-0 align-middle table-striped">
                                            <thead class="text-dark fs-4">
                                                <tr>
                                                    <th class="border-bottom-0  text-center">
                                                        <h6 class="fw-semibold mb-0">No</h6>
                                                    </th>
                                                    <th class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0">Kode Resi</h6>
                                                    </th>
                                                    <th class="border-bottom-0 text-center">
                                                        <h6 class="fw-semibold mb-0">Metode Pembayaran</h6>
                                                    </th>
                                                    <th class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0">Total Harga</h6>
                                                    </th>
                                                    <th class="border-bottom-0 text-center">
                                                        <h6 class="fw-semibold mb-0">Aksi</h6>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php $no = 1;
                                                foreach ($productSend as $aa) { ?>
                                                    <tr>
                                                        <td class="border-bottom-0  text-center">
                                                            <h6 class="fw-semibold mb-0"><?= $no++; ?></h6>
                                                        </td>
                                                        <td class="border-bottom-0">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <span class="badge bg-warning rounded-3 fw-semibold"><?= $aa['buy_code']; ?></span>
                                                            </div>
                                                        </td>
                                                        <td class="border-bottom-0 text-center">
                                                            <p class="mb-0 fw-normal"><?= $aa['delivery_method']; ?></p>
                                                        </td>
                                                        <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal">Rp.<?= number_format($aa['total']) ?></p>
                                                        </td>
                                                        <td class="border-bottom-0 text-center">
                                                            <?php if ($aa['condition_process'] == 'Send') { ?>

                                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#detail<?= $aa['buy_code'] ?>">Detail</button>
                                                                <a type="button" class="btn btn-primary" href="<?= base_url('Backend/BackPesanan/Send/' . $aa['process_id']) ?>">Selesai Dikirim</a>
                                                            <?php } else { ?>
                                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#detail<?= $aa['buy_code'] ?>">Detail</button>
                                                                <button type="button" class="btn btn-primary" href="" disabled>Menunggu Konfirmasi</button>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>

                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="completed-tab">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <!-- card -->
                            <div class="card mb-4">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap mb-0 align-middle table-striped">
                                            <thead class="text-dark fs-4">
                                                <tr>
                                                    <th class="border-bottom-0 text-center">
                                                        <h6 class="fw-semibold mb-0">No</h6>
                                                    </th>
                                                    <th class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0">Kode Resi</h6>
                                                    </th>
                                                    <th class="border-bottom-0 text-center">
                                                        <h6 class="fw-semibold mb-0">Metode Pembayaran</h6>
                                                    </th>
                                                    <th class="border-bottom-0">
                                                        <h6 class="fw-semibold mb-0">Total Harga</h6>
                                                    </th>
                                                    <th class="border-bottom-0 text-center">
                                                        <h6 class="fw-semibold mb-0">Aksi</h6>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($productCompleted as $aa) { ?>
                                                    <tr>
                                                        <td class="border-bottom-0 text-center">
                                                            <h6 class="fw-semibold mb-0"><?= $no++; ?></h6>
                                                        </td>
                                                        <td class="border-bottom-0">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <span class="badge bg-warning rounded-3 fw-semibold"><?= $aa['buy_code']; ?></span>
                                                            </div>
                                                        </td>
                                                        <td class="border-bottom-0 text-center">
                                                            <p class="mb-0 fw-normal"><?= $aa['delivery_method']; ?></p>
                                                        </td>
                                                        <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal">Rp.<?= number_format($aa['total']) ?></p>
                                                        </td>
                                                        <td class="border-bottom-0 text-center">
                                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#detail<?= $aa['buy_code'] ?>">Detail</button>
                                                        </td>
                                                    </tr>
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

<!-- Modal -->
<!-- Detail -->
<!-- <?php foreach ($product as $aa) { ?>
    <div class="modal fade" id="detail<?= $aa['buy_code'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <!-- card -->
<div class="card mb-4">
    <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle table-striped">
            <thead class="text-dark fs-4">
                <tr>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">No</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Kode Resi</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Nama Produk</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Metode Pembayaran</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Total Harga</h6>
                    </th>
                    <th class="border-bottom-0 text-center">
                        <h6 class="fw-semibold mb-0">Aksi</h6>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($product as $aa) { ?>
                    <tr>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0"><?= $no++; ?></h6>
                        </td>
                        <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge bg-warning rounded-3 fw-semibold"><?= $aa['buy_code']; ?></span>
                            </div>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal"><?= $aa['process_id']; ?></p>
                            <p class="mb-0 fw-normal"><?= $aa['name']; ?></p>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal"><?= $aa['delivery_method']; ?></p>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">Rp.<?= number_format($aa['total']) ?></p>
                        </td>
                        <td class="border-bottom-0 text-center">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['product_id'] ?>">Detail</button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['product_id'] ?>">Selesai</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- card -->
<div class="card mb-4">
    <!-- card body -->
    <div class="card-body">
        <div>
            <div class="mb-4">
                <!-- heading -->
                <h5 class="mb-1">Gambar Produk</h5>
                <p>Masukan gambar produk (Minimal 1 gambar) (Maksimal ukuran gambar adalah 10MB)</p>
                <!-- input -->
                <input name="picture1" value="<?= $aa['picture1'] ?>" type="file" class="form-control" accept="image/png, image/jpeg">
                <p>Gambar 1</p>
                <input name="picture2" value="<?= $aa['picture2'] ?>" type="file" class="form-control" accept="image/png, image/jpeg">
                <p>Gambar 2</p>
                <input name="picture3" value="<?= $aa['picture3'] ?>" type="file" class="form-control" accept="image/png, image/jpeg">
                <p>Gambar 3</p>
                <input name="picture4" value="<?= $aa['picture4'] ?>" type="file" class="form-control" accept="image/png, image/jpeg">
                <p>Gambar 4</p>
            </div>
        </div>
    </div>
</div>
<!-- card -->
<div class="card mb-4">
    <!-- card body -->
    <div class="card-body">
        <div>
            <div class="mb-3">
                <label class="form-label">Stok Produk</label>
                <input type="Number" name="stock" class="form-control" placeholder="Isi stok produk" value="<?= $aa['stock'] ?>">
            </div>
            <div class="mb-3">
                <div class="d-flex justify-content-between">
                    <label class="form-label">Kondisi Produk</label>
                    <input type="hidden" class="form-control" placeholder="Isi nama produk" name="condition_product" value="<?= $aa['condition_product'] ?>">
                </div>
                <!-- select menu -->
                <select class="form-select" name="condition_product" disabled>
                    <?php if ($aa['condition_product'] == 'used') : ?>
                        <option value="new" disabled>Baru</option>
                        <option value="used" selected>Bekas</option>
                    <?php else : ?>
                        <option value="new" selected>Baru</option>
                        <option value="used" disabled>Bekas</option>
                    <?php endif; ?>
                </select>

            </div>
        </div>
        <div class=" mb-3">
            <div class="d-flex justify-content-between">
                <label class="form-label">Preorder Produk</label>
            </div>
            <!-- select menu -->
            <select class="form-select" name="preorder" aria-label="Default select example">
                <?php if ($aa['preorder'] == 'Yes') { ?>
                    <option value="No">Tidak</option>
                    <option value="Yes" selected>Iya</option>
                <?php } else { ?>
                    <option value="No" selected>Tidak</option>
                    <option value="Yes">Iya</option>
                <?php } ?>

            </select>
        </div>
    </div>
</div>

<!-- card -->
<div class="card mb-4">
    <!-- card body -->
    <div class="card-body">
        <!-- input -->
        <div class="mb-3">
            <label class="form-label">Harga Produk</label>
            <input type="Number" name="price" value="<?= $aa['price'] ?>" class="form-control" placeholder="">
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
    <button type="submit" class="btn btn-primary">Ubah Produk</button>
</div>

</div>
</div>
</div>
<?php } ?> -->
<!-- Detail -->