<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Trang Chủ</title>
    <!-- font roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- css được biên dịch từ sass -->
    <link rel="stylesheet" href="<?= Url('asset/css/index.css?v=') . time() ?>">

    <!-- font answe -->
    <link rel="stylesheet" href="<?= Url('asset/global/font/fontawesome-free-6.5.2-web/css/all.css?v=') . time() ?>">
    <!-- font icon boostrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>

<body>
    <header class="container">

        <div class="header__grid">
            <a href="<?= Url('client/trang_chu') ?>" class="logo">
                <div class="header__grid__item ">
                </div>
            </a>

            <div class="header__grid__item">
                <nav>
                    <ul class="nav__ul">
                        <li><a href="###">Giới thiệu</a></li>
                        <li><a href="<?= Url('client/laptop') ?>">Laptop</a></li>
                        <li><a href="###">Phụ kiện</a></li>
                        <li><a href="###">Khuyến mãi</a></li>
                    </ul>
                </nav>
            </div>

            <div class="header__grid__item">
                <div>
                    <input type="text" placeholder="Tìm kiếm sản phẩm">
                    <button>
                        <a href="###"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </button>
                </div>
            </div>

            <div class="header__grid__item">
                <div>
                    <a href="###">
                        <i class="far fa-heart"></i>
                    </a>
                    <a href="###">
                        <i class="bi bi-cart"></i>
                    </a>
                    <a href="###">
                        <i class="far fa-user"></i>
                    </a>

                    <a href="###" style="display:none">
                        <i class="bi bi-list"></i>
                    </a>

                </div>
            </div>
        </div>

    </header>
    
    <div class="thongbao">
       <div>
         <div class="cirlce "></div>
         <p>Ngày 30/04/2024 & 01/05/2024: Trung Trần Vẫn Làm Việc Bình Thường Phục Vụ Quý Khách Hàng !!!</p>
       </div>
    </div>
