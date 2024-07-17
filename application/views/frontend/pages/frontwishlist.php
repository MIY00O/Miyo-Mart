    <section class="checkout_area section-margin--small">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cart_inner">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Produk</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col" class="text-center">Jumlah</th>
                                            <th scope="col" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($wishlist as $as) { ?>
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <img src="<?= base_url('assets/my-assets/upload/photo/' . $as['picture1']) ?>" style="width:50%; height:auto;" alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <p>
                                                                <?php
                                                                if (strlen($as['name']) > 35) {
                                                                    echo substr($as['name'], 0, 35) . '...';
                                                                } else {
                                                                    echo $as['name'];
                                                                }
                                                                ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <form class="row contact_form" action="<?= base_url('Frontend/FrontProduct/checkout/') . $as['product_id'] ?>" method="post" novalidate="novalidate">
                                                    <td>
                                                        <h5>Rp.<?=
                                                                number_format($as['price']) ?></h5>
                                                    </td>
                                                    <td>
                                                        <div class="action-buttons">
                                                            <div class="product_count">
                                                                <input type="number" name="qty" id="sst<?= $as['product_id'] ?>" value="<?= $as['count_items']; ?>" title="Quantity:" class="input-text qty" readonly>
                                                                <button onclick="var result = document.getElementById('sst<?= $as['product_id'] ?>'); var sst<?= $as['product_id'] ?> = result.value; if( !isNaN( sst<?= $as['product_id'] ?> )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                                                <button onclick="var result = document.getElementById('sst<?= $as['product_id'] ?>'); var sst<?= $as['product_id'] ?> = result.value; if( !isNaN( sst<?= $as['product_id'] ?> ) &amp;&amp; sst<?= $as['product_id'] ?> > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                                            </div>

                                                        </div>
                                                    </td>
                                                    <td class="border-bottom-0 text-center">
                                                        <div class="action-buttons">
                                                            <a class="btn btn-danger" data-toggle="modal" data-target="#deletewishlist<?= $as['product_id'] ?>" href="">Hapus</a>
                                                            <button class="btn btn-primary" type="submit" href="">Beli Sekarang</button>
                                                        </div>
                                                    </td>
                                                </form>
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
    </section>
    <?php foreach ($wishlist as $as) { ?>
        <div class="modal fade" id="deletewishlist<?= $as['product_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <form action="<?= base_url('Frontend/FrontProduct/wishlistDelete/' . $as['product_id']) ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <div class="">
                                        <label class="form-label">Apakah kamu yakin ingin menghapus barang ini dari wishlist?</label>
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