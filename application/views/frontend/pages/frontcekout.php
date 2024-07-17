    <section class="checkout_area section-margin--small" style="height: 100vh;">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                            <div class="cart_inner">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Produk</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <img src="<?= base_url('assets/my-assets/upload/photo/' . $product->picture1) ?>" style="width:50%; height:auto;" alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <p> <?php
                                                                if (strlen($product->name) > 35) {
                                                                    echo substr($product->name, 0, 35) . '...';
                                                                } else {
                                                                    echo $product->name;
                                                                }
                                                                ?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5>Rp.<?= number_format($product->price) ?></h5>
                                                </td>
                                                <td>
                                                    <div class="product_count">
                                                        <input type="number" name="qty" id="" value="<?= $count; ?>" title="Quantity:" class="input-text qty" readonly>
                                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Pesanan kamu</h2>
                            <ul class="list">
                                <li><a href="#">
                                        <h4>Product <span>Total</span></h4>
                                    </a></li>
                                <li><a href="#"> <?php
                                                    if (strlen($product->name) > 10) {
                                                        echo substr($product->name, 0, 10) . '...';
                                                    } else {
                                                        echo $product->name;
                                                    }
                                                    ?><span class="middle">x <?= $count ?></span> <span class="last">Rp.<?= number_format($producttotal) ?></span></a></li>
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Total <span>Rp.<?= number_format($producttotal) ?></span></a></li>
                            </ul>
                            <div class="text-center">
                                <a class="button button-paypal" data-toggle="modal" data-target="#pembayaran" href="">Pilih Pembayaran</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="pembayaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pilih Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="row login_form" method="post" action="<?= base_url('Frontend/FrontProduct/order/' . $product->product_id) ?>">
                        <div class="col-md-12 form-group order_box">
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="delivery_method" value="COD">
                                    <label for="f-option5">COD (Cash On Delivery)</label>
                                    <div class="check"></div>
                                </div>
                                <p>COD (Cash On Delivery) adalah sebuah metode pembayaran dimana kamu akan membayar ketika barang telah sampai.</p>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="hidden" class="form-control" placeholder="Isi nama produk" name="product_id" value="<?= $product->product_id ?>">
                            <input type="hidden" class="form-control" placeholder="Isi nama produk" name="qty" value="<?= $count; ?>">
                            <button id="but" type="submit" value="submit" class="btn btn-primary w-100">Bayar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>