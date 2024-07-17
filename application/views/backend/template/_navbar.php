<header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                    <i class="ti ti-menu-2"></i>
                </a>
            </li>
        </ul>

        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                        <h6><?php foreach ($usertoko as $row) {
                                echo substr($row['username'], 0, 10);
                            } ?></h6>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                        <div class="message-body">
                            <a href="<?= base_url('Home') ?>" class="d-flex align-items-center gap-2 dropdown-item">
                                <i class="ti ti-arrow-right fs-6"></i>
                                <p class="mb-0 fs-3">Beranda</p>
                            </a>
                            <a href="" class="btn btn-outline-primary mx-3 mt-2 d-block" data-bs-toggle="modal" data-bs-target="#exampleModal">Logout</a>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Modal -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h2>Logout</h2>
                <p>Apakah kamu yakin mau keluar?</p>
                <form class="row login_form" method="post" action="<?= base_url('Home/logout') ?>" id="register_form">
                    <div class="col-md-12 form-group">
                        <button id="but" type="submit" value="submit" class="btn btn-outline-primary w-100">Logout</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->