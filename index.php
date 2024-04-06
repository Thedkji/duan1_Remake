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
    <link rel="stylesheet" href="libs/fontawesome-free-6.5.2-web/css/all.css">
    <title>Trang chủ</title>
</head>

<body>
    <div class="container-fluid"> <!-- container bọc cả trang web -->

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
        <nav class="w-100" style="background-color: var(--bg-Color-Submain-XXL);height: 40px;">
            <div class="container m-auto">
                <ul style="color:var(--cl-Text-W)" class="row justify-content-center h-100 text-center gap-4">
                    <li class="col-xl-1 nav-hover h-100 align-content-center">
                        <span class="bi bi-phone fs-5"></span>
                        <a href="#" class="fw-semibold text-white">Điện thoại</a>
                    </li>
                    <li class="col-xl-1 nav-hover h-100 align-content-center">
                        <span class="bi bi-laptop fs-5"></span>
                        <a href="#" class="fw-semibold text-white">Laptop</a>
                    </li>
                    <li class="col-xl-1 nav-hover h-100 align-content-center">
                        <span class="bi bi-tablet fs-5"></span>
                        <a href="#" class="fw-semibold text-white">Tablet</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- end nav -->

        <!-- Main -->
        <main>
            <!-- Banner trang chủ -->
            <a href="#">
                <div class="container-fluid m-auto" id="main-Banner-TrangChu"></div>
            </a>

            <!-- Slide show sản phẩm và tin tức -->
            <div class="container m-auto row py-2 ps-2 shadow-lg mt-2 rounded-2 justify-content-between">
                <div class="col-xl-9 main-SlideShow position-relative rounded-2">
                   <a href="###" class="text-black">
                     <div class="main-SlideShow-Icon position-absolute top-50" style="right: 10;">
                         <i class="fa-solid fa-chevron-right position-absolute" style="left: 40%; top:35%"></i>
                     </div>
                   </a >

                    <a href="###" class="text-black">
                        <div class="main-SlideShow-Icon position-absolute top-50" style="left: 10;">
                            <i class="fa-solid fa-chevron-left position-absolute" style="left: 40%; top:35%"></i>
                        </div>
                    </a>
                </div>

                <!-- Tin tức -->
                <div class="col-xl-3 px-2">
                    <div class="shadow-lg rounded-2 p-2" style="background-color: white;">
                        <div class=" pb-2 text-secondary fw-bold"><a href="#" class="text-secondary">Tin Tức</a></div>
                        <div class="">
                            <a href="#"><img src="img/Trangchu/tinkhuyenmai/Tin1.webp" alt="" width="100%" height="100px"></a>
                        </div>
                        <div class="my-2"></div>
                        <div class="">
                            <a href="#"><img src="img/Trangchu/tinkhuyenmai/tin2.webp" alt="" width="100%" height="100px"></a>
                        </div>

                        <div class="d-flex flex-column gap-2 mt-3 main-tintuc">
                            <p><a href="###">Xem thêm</a></p>
                            <p><a href="#" class="text-black fw-light">Trải nghiệm Redmi A3 hiệu năng tốt - giá rẻ bất ngờ tại FPT Shop</a></p>
                            <p><a href="#" class="text-black fw-light">TUẦN LỄ LAPTOP ACER - FPT Shop ưu đãi đến 9 triệu, bảo hành 2 năm</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- End Main -->
    </div> <!--End container bọc cả trang web-->
</body>

</html>