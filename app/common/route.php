<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? '' : $_GET['url'];

$route = new RouteCollector;

// route
$route->get('/', function () {
    // require_once "app/views/client/trang_chu/main.php";
    header("Location:client/trang_chu");
});

// List client Trang chủ
$route->get("client/trang_chu", [App\controllers\client\sanpham\SanPhamController::class, "ListTrangChu"]);

// List client Laptop
$route->get("client/laptop/{page}", [App\controllers\client\sanpham\SanPhamController::class, "Listlaptop"]);

// List client chitietsp
$route->get("client/chitietsp", [App\controllers\client\sanpham\SanPhamController::class, "ListChiTietSP"]);

// List client account
$route->get("client/dangnhap", [App\controllers\client\taikhoan\TaiKhoanController::class, "DangNhap"]);
$route->post("client/dangnhap2", [App\controllers\client\taikhoan\TaiKhoanController::class, "DangNhap2"]);

$route->get("client/taikhoancuatoi/{id}", [App\controllers\client\taikhoan\TaiKhoanController::class, "TaiKhoanCuaToi"]);
$route->post("client/edittaikhoancuatoi/{id}", [App\controllers\client\taikhoan\TaiKhoanController::class, "EditTaiKhoanCuaToi"]);

$route->get("client/doimatkhau/{id}", [App\controllers\client\taikhoan\TaiKhoanController::class, "DoiMatKhau"]);
$route->post("client/doimatkhau2/{id}", [App\controllers\client\taikhoan\TaiKhoanController::class, "DoiMatKhau2"]);




$route->get("client/dangxuat", [App\controllers\client\taikhoan\TaiKhoanController::class, "DangXuat"]);

$route->get("client/dangky", [App\controllers\client\taikhoan\TaiKhoanController::class, "DangKy"]);
$route->post("client/dangky_post", [App\controllers\client\taikhoan\TaiKhoanController::class, "DangKyPost"]);


// Khởi tạo một đối tượng Dispatcher từ thư viện Phroute và sử dụng dữ liệu định tuyến từ đối tượng Route
$dispatcher = new Phroute\Phroute\Dispatcher($route->getData());

// Thực thi phương thức dispatch để xác định và gọi controller phù hợp dựa trên method HTTP và URL được yêu cầu
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
