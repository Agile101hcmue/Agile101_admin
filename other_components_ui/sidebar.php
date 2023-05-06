<?php
    // define("DOMAIN", "http://127.0.0.1/e_commerce_admin/"); // remmeber to replace/change new domain before deploy/hosting
    $domain = "http://127.0.0.1/Agile101_admin"; // remember to change this
?>

<div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo $domain; ?>/auth/add_admin.php">
                                <span data-feather="home" class="align-text-bottom"></span>
                                Thêm Người Quản Lí
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $domain; ?>/components/manage.php">
                                <span data-feather="file" class="align-text-bottom"></span>
                                Quản Lí Sản Phẩm
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $domain; ?>/promotions/manage.php">
                                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                Quản Lí Khuyến Mãi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users" class="align-text-bottom"></span>
                                Quản Lí Giỏ Hàng
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/TrHgTung/Agile101_admin">
                                <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                                Cập Nhật Phiên Bản Mới
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $domain; ?>/documents/privacy.php">
                                <span data-feather="layers" class="align-text-bottom"></span>
                                Chính Sách
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
    </div>
</div>