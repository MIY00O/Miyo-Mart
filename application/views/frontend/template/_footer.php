<footer class="footer">
    <div class="footer-area">
        <div class="container">
            <div class="row section_gap">

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">MiyoMart</h4>
                        <ul class="list">
                            <li><a href="">Home</a></li>
                            <?php if ($this->session->userdata('level') == 'Customers') { ?>
                                <li><a href="<?= base_url('Frontend/FrontProduct/wishlist') ?>">Wishlist</a></li>
                            <?php } else if ($this->session->userdata('level') == 'AdminShop') { ?>
                                <li><a href="<?= base_url('Backend/BackDashboard') ?>">AdminShop</a></li>
                                <li><a href="<?= base_url('Frontend/FrontProduct/wishlist') ?>">Wishlist</a></li>
                            <?php } else { ?>
                                <li><a href="<?= base_url('Frontend/FrontProduct/wishlist') ?>">Wishlist</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Contact Us</h4>
                        <div class="ml-40">
                            <p class="sm-head">
                                <span class="fa fa-location-arrow"></span>
                                PT.
                            </p>
                            <p>MiyoMart</p>

                            <p class="sm-head">
                                <span class="fa fa-envelope"></span>
                                Email
                            </p>
                            <p>
                                care@miyoMart.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 ">
                    <div class="d-flex justify-content-center">
                        <a class="navbar-brand logo_h" href="index.html"><img src="<?= base_url('assets/aroma/') ?>img/logoNew.png" style="width: 30vw; height:auto;"></a>
                    </div>
                    <p class="col-lg-12 footer-text text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> PT. MiyoMart
                        | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>


</footer>