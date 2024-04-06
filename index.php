<?php
require_once "global/env.php";
?>
<style>
    <?php
    require_once "global/main.css";
    ?>
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="libs/bootstrap.min.css">
    <link rel="stylesheet" href="libs/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <title>Trang chủ</title>
</head>

<body>
    <div class="container-fluid bg-secondary"> <!-- container bọc cả trang web -->

        <header style="background-color: var(--bg-Color-Main);" class="w-100"> <!-- Header -->
            <div class="row p-2 container m-auto">
                <!-- Logo -->
                <div class="col-xl-2 bg-danger">logo</div>

                <!-- search -->
                <div class="col-xl-5 position-relative text-center p-0  align-content-center">
                    <input type="text" placeholder="Nhập tên sản phẩm cần tìm" class="w-75 h-75" style="width:80%;outline: none;">
                    <button class="position-absolute text-white h-75" style="right: 10%;width: 60px;background-color: var(--bg-Color-Submain-M);">
                        <div class="bi bi-search"></div>
                    </button>
                </div>

                <!-- thanh phụ -->
                <div class="col-xl-5">
                    <div class="d-flex text-center justify-content-end gap-5">
                        <div class="">
                            <a href="#">
                                <div class="bi bi-person fs-3 text-white"></div>
                                <div class="text-white fw-normal">Tài khoản của tôi</div>
                            </a>
                        </div>

                        <div class="">
                            <a href="#">
                                <div class="bi bi-cart fs-3 text-white"></div>
                                <div class="text-white fw-normal">Giỏ hàng</div>
                            </a>
                        </div>

                        <!-- Thêm tiếp mục ở đây -->
                    </div>
                </div>
            </div>
        </header> <!-- End header -->

        <!-- nav -->
        <nav class="w-100" style="background-color: var(--bg-Color-Submain-L);height: 40px;">
            <div class="container m-auto">
                <ul style="color:var(--cl-Text-W)" class="row justify-content-center h-100 text-center gap-4">
                    <li class="col-xl-1 nav-hover h-100 align-content-center">
                        <span class="bi bi-phone fs-5"></span>
                        <a href="#" class="fw-semibold">Điện thoại</a>
                    </li>
                    <li class="col-xl-1 nav-hover h-100 align-content-center">
                        <span class="bi bi-laptop fs-5"></span>
                        <a href="#" class="fw-semibold">Laptop</a>
                    </li>
                    <li class="col-xl-1 nav-hover h-100 align-content-center">
                        <span class="bi bi-tablet fs-5"></span>
                        <a href="#" class="fw-semibold">Tablet</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- end nav -->

        <!-- Main -->
        <main id="main_TrangChu">
        </main>
        <!-- End Main -->
    </div> <!--End container bọc cả trang web-->
</body>

</html>