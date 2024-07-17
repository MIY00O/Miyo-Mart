<section class="order_details section-margin--small" style="height: 100vh;">
    <div class="container">
        <p class="text-center billing-alert">Terimakasih telah berbelanja. Pesanan sedang diproses</p>
        <div class="row mb-5">
            <div class="col-md-6 col-xl-5 mb-4 mb-xl-0">
                <div class="confirmation-card">
                    <h3 class="billing-title">Informasi Pesanan</h3>
                    <table class="order-rable">
                        <tbody>
                            <tr>
                                <td>Kode Resi</td>
                                <td>: <?= $process->buy_code ?></td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td>: <?= $product->buy_date ?></td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>: Rp.<?= number_format($product->price) ?></td>
                            </tr>
                            <tr>
                                <td>Payment method</td>
                                <td>: <?= $product->delivery_method ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6 col-xl-7 mb-4 mb-xl-0">
                <div class="confirmation-card">
                    <h3 class="billing-title">Detail Pesanan</h3>
                    <table class="order-rable">
                        <tbody>
                            <tr>
                                <td>Nama Produk</td>
                                <td>: <?= $product->name ?></td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td>: <?= $count ?></td>
                            </tr>
                            <tr>
                                <td>Sub total</td>
                                <td>: Rp.<?= number_format($product->price) ?></td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>: Rp.<?= number_format($producttotal) ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>