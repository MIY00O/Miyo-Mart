<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="owl-carousel owl-theme s_Product_carousel">
                    <div class="single-prd-item square-image-container">
                        <img class="img-fluid square-image" src="<?= base_url('assets/my-assets/upload/photo/' . $product->picture1) ?>" alt="">
                    </div>
                    <?php if ($product->picture2 == NULL) { ?>
                    <?php } else { ?>
                        <div class="single-prd-item square-image-container">
                            <img class="img-fluid square-image" src="<?= base_url('assets/my-assets/upload/photo/' . $product->picture2) ?>" alt="">
                        </div>
                    <?php } ?>

                    <?php if ($product->picture3 == NULL) { ?>
                    <?php } else { ?>
                        <div class="single-prd-item square-image-container">
                            <img class="img-fluid square-image" src="<?= base_url('assets/my-assets/upload/photo/' . $product->picture3) ?>" alt="">
                        </div>
                    <?php } ?>

                    <?php if ($product->picture4 == NULL) { ?>
                    <?php } else { ?>
                        <div class="single-prd-item square-image-container">
                            <img class="img-fluid square-image" src="<?= base_url('assets/my-assets/upload/photo/' . $product->picture4) ?>" alt="">
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3><?= $product->name ?></h3>
                    <h2>Rp.<?= number_format($product->price) ?></h2>
                    <form action="<?= base_url('Frontend/FrontProduct/checkout/' . $product->product_id) ?>" method="post">
                        <div class="product_count">
                            <div>
                                <?php if ($product->stock == 0) { ?>
                                    <label for="">Availibility : </label>
                                    <label for="">Out of Stock</label>
                                <?php } else { ?>
                                    <label for="">Stok total : </label>
                                    <?php if ($product->stock < 50) { ?>
                                        <label for="">Sisa <?= $product->stock ?></label>
                                    <?php } else { ?>
                                        <label for=""><?= $product->stock ?></label>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            <label for="qty">Jumlah :</label>

                            <div class="product_count">
                                <?php if ($count_items) { ?>
                                    <input type="number" name="qty" id="sst" value="<?= $count_items ?>" min="1" title="Quantity:" class="input-text qty" readonly>
                                <?php } else { ?>
                                    <input type="number" name="qty" id="sst" value="1" min="1" title="Quantity:" class="input-text qty" readonly>
                                <?php } ?>
                                <button onclick="var result = document.getElementById('sst'); var sst = parseInt(result.value); if(!isNaN(sst)) result.value++; return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                <button onclick="var result = document.getElementById('sst'); var sst = parseInt(result.value); if(!isNaN(sst) && sst > 1) result.value--; return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                            </div>
                        </div>
                        <div class="card_area d-flex align-items-center">
                            <button type="submit" class="button primary-btn">Beli Sekarang</button>
                            <a class="icon_btn" href="<?= base_url('Frontend/FrontProduct/wishlistPlus/' . $product->product_id) ?>"><i class="ti-shopping-cart"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Deskripsi</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link " id="store-tab" data-toggle="tab" href="#store" role="tab" aria-controls="store" aria-selected="false">Toko</a>
            </li> -->
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <p><?= $product->description ?></p>
            </div>
            <!-- <div class="tab-pane fade" id="store" role="tabpanel" aria-labelledby="store-tab">
                <p><span>Nama</span>: <?= $this->session->userdata('username') ?></p>
                <p><span>Alamat</span>: <?= $this->session->userdata('address') ?></p>
                <p><span>No telepon</span>: <?= $this->session->userdata('telp') ?></p>
            </div> -->
        </div>
    </div>
</section>
<!--================End Product Description Area =================-->

<!--================ Start related Product area =================-->
<section class="section-margin calc-60px">
    <div class="container">
        <div class="section-intro pb-60px">
            <p>Menyediakan produk hanya untukmu</p>
            <h2>Produk <span class="section-intro__style">Untukmu</span></h2>
        </div>
        <div class="row">
            <?php foreach ($allproduct as $as) { ?>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card text-center card-product">
                        <a href="<?= base_url('Frontend/FrontProduct/singleProduct/' . $as['product_id']) ?>">
                            <div class="card-product__img square-image-container">
                                <img class="card-img square-image" src="<?= base_url('assets/my-assets/upload/photo/' . $as['picture1']) ?>" alt="">
                                <ul class="card-product__imgOverlay">
                                    <li>
                                        <a href="<?= base_url('Frontend/FrontProduct/wishlistPlus/' . $as['product_id']) ?>"><button><i class="ti-shopping-cart"></i></button></a>
                                    </li>
                                </ul>
                            </div>
                        </a>
                        <div class="card-body">
                            <p><?= $as['store_name'] ?></p>

                            <h6 class="card-product__title">
                                <a href="<?= base_url('Frontend/FrontProduct/singleProduct/' . $as['product_id']) ?>">
                                    <?php
                                    if (strlen($as['name']) > 20) {
                                        echo substr($as['name'], 0, 20) . '...';
                                    } else {
                                        echo $as['name'];
                                    }
                                    ?>
                                </a>
                            </h6>
                            <p class="card-product__price">Rp.<?= number_format($as['price']) ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--================ end related Product area =================-->