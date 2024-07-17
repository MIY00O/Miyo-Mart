<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-6">
            <!-- Page header -->
            <div class="mb-1">
                <h3 class="mb-0 ">List Produk</h3>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-6">
            <!-- Page header -->
            <div class="mb-1 d-flex justify-content-end">
                <a href="<?= base_url('Backend/BackProduct') ?>" type="button" class="btn btn-primary">Tambah Produk</a>
            </div>
        </div>
    </div>
    <div>
        <!-- row -->
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
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">No</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Gambar</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Nama</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Harga</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Stok</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Preorder</h6>
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
                                                <p class="mb-0 fw-normal"><img src="<?= base_url('assets/my-assets/upload/photo/' . $aa['picture1']) ?>" style="width: 8vw; height:auto;" alt=""></p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-1"> <?php
                                                                                if (strlen($aa['name']) > 20) {
                                                                                    echo substr($aa['name'], 0, 20) . '...';
                                                                                } else {
                                                                                    echo $aa['name'];
                                                                                }
                                                                                ?></h6>
                                                <span class="fw-normal">
                                                    <?php
                                                    if (strlen($aa['description']) > 6) {
                                                        echo substr($aa['description'], 0, 6) . '...';
                                                    } else {
                                                        echo $aa['description'];
                                                    }
                                                    ?>
                                                </span>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">Rp.<?= number_format($aa['price']) ?></p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="badge bg-primary rounded-3 fw-semibold"><?= $aa['stock']; ?></span>
                                                </div>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal"><?= $aa['preorder']; ?></p>
                                            </td>
                                            <td class="border-bottom-0 text-center">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['product_id'] ?>">Edit</button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $aa['product_id'] ?>">Delete</button>
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

<!-- Modal -->
<!-- Edit -->
<?php foreach ($product as $aa) { ?>
    <div class="modal fade" id="edit<?= $aa['product_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('Backend/BackProduct/edit/' . $aa['product_id']) ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <!-- card -->
                                <div class="card mb-4">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div>
                                            <!-- input -->
                                            <div class="mb-3">
                                                <label class="form-label">Nama Produk</label>
                                                <input type="hidden" class="form-control" placeholder="Isi nama produk" name="product_id" value="<?= $aa['product_id'] ?>">
                                                <input type="hidden" class="form-control" placeholder="Isi nama produk" name="telp" value="<?= $this->session->userdata('telp') ?>">
                                                <input type="text" class="form-control" placeholder="Isi nama produk" name="name" value="<?= $aa['name'] ?>" disabled>
                                            </div>
                                            <!-- input -->
                                            <div>
                                                <label class="form-label">Deskripsi Produk</label>
                                                <textarea class="form-control" name="description" placeholder="Isi deskripsi produk" id="floatingTextarea2" style="height: 100px"><?= $aa['description'] ?></textarea>
                                            </div>
                                        </div>
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
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Edit -->
<!-- Delete -->
<?php foreach ($product as $aa) { ?>
    <div class="modal fade" id="delete<?= $aa['product_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <form action="<?= base_url('Backend/BackProduct/delete/' . $aa['product_id']) ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <!-- card -->
                                <div class="">
                                    <label class="form-label">Apakah kamu yakin ingin menghapus barang <span style="color: red;"><?= $aa['name'] ?></span>?</label>
                                    <input type="hidden" class="form-control" placeholder="Isi nama produk" name="product_id" value="<?= $aa['product_id'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus Produk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Delete -->