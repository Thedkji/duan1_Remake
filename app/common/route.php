<?php
use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? '': $_GET['url'];

$route = new RouteCollector;

// route
$route->get('/',function(){
    // require_once "app/views/client/trang_chu/main.php";
    header("Location:client/trang_chu");
});

// List client Trang chủ
$route->get("client/trang_chu",[App\controllers\sanpham\SanPhamController::class,"ListTrangChu"]);

// List client Laptop
$route->get("client/laptop",[App\controllers\sanpham\SanPhamController::class,"Listlaptop"]);

// List client chitietsp
$route->get("client/chitietsp",[App\controllers\sanpham\SanPhamController::class,"ListChiTietSP"]);

// Khởi tạo một đối tượng Dispatcher từ thư viện Phroute và sử dụng dữ liệu định tuyến từ đối tượng Route
$dispatcher = new Phroute\Phroute\Dispatcher($route->getData());

// Thực thi phương thức dispatch để xác định và gọi controller phù hợp dựa trên method HTTP và URL được yêu cầu
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

?>