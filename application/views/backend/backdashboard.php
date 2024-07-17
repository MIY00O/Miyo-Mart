<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url('Backend/BackDashboard/updateInfoStore') ?>" method="POST">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Toko</label>
                                    <input name="store_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="name" value="<?= $storeInfo->store_name ?>" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Deskripsi Toko</label>
                                    <textarea class="form-control" name="store_description" id=""><?= $storeInfo->store_description ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Alamat toko</label>
                                    <input name="store_address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="name" value="<?= $storeInfo->store_address ?>" readonly>
                                </div>
                                <div class="mb-3 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card overflow-hidden">
                        <div class="card-body p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h5 class="card-title fw-semibold">Total Produk Terjual</h5>
                                    <span class="fw-semibold mb-3"><?= $completedCount ?> produk terjual</span>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-currency-dollar fs-6"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card overflow-hidden">
                        <div class="card-body p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h5 class="card-title fw-semibold">Total Produk Dijual</h5>
                                    <span class="fw-semibold mb-3"><?= $allProductCount ?> produk dijual</span>
                                </div>

                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-currency-dollar fs-6"></i>
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
</div>