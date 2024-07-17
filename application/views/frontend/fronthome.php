<?php if (empty($search_term) && !$search_performed) : ?>
    <!-- ================ offer section start ================= -->
    <section class="offer mt-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="offer__content text-center">
                        <h3>Puncak 6.6</h3>
                        <h4>Paling OK dibulan Juni</h4>
                        <p>S&K berlaku | COD diseluruh Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ offer section end ================= -->

    <!-- ================ Best Selling item  carousel ================= -->
    <section class="section-margin calc-60px">
        <div class="container">
            <div class="section-intro pb-60px">
                <p>Produk yang sedang trending</p>
                <h2>Produk <span class="section-intro__style">Trending</span></h2>
            </div>
            <div class="owl-carousel owl-theme" id="bestSellerCarousel">
                <?php foreach ($trendingProduct as $as) { ?>
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
                                    <?= strlen($as['name']) > 20 ? substr($as['name'], 0, 20) . '...' : $as['name'] ?>
                                </a>
                            </h6>
                            <p class="card-product__price">Rp.<?= number_format($as['price']) ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- ================ Best Selling item  carousel end ================= -->


<?php elseif (!empty($productsearch)) : ?>
    <section class="section-margin calc-60px">
        <div class="container">
            <div class="row">
                <?php foreach ($productsearch as $as) : ?>
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
                                        <?= strlen($as['name']) > 20 ? substr($as['name'], 0, 20) . '...' : $as['name'] ?>
                                    </a>
                                </h6>
                                <p class="card-product__price">Rp.<?= number_format($as['price']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php else : ?>
    <section class="section-margin calc-60px">
        <div class="container d-flex justify-content-center">
            <div class="row">
                <td colspan="2">Tidak ada produk ditemukan.</td>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- ================ trending product section start ================= -->
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
                                    <?= strlen($as['name']) > 20 ? substr($as['name'], 0, 20) . '...' : $as['name'] ?>
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
<!-- ================ trending product section end ================= -->