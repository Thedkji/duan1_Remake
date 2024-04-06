<?php
// Sử dụng namespace của RouteCollector từ thư viện Phroute
use Phroute\Phroute\RouteCollector;

// Lấy URL từ tham số GET 'url' hoặc gán mặc định là '/' nếu không có
$url = !isset($_GET['url']) ? '/' : $_GET['url'];

// Khởi tạo một đối tượng RouteCollector để quản lý tuyến đường (định tuyến)
$route = new RouteCollector();

// Định nghĩa một tuyến đường cho yêu cầu GET đến URL "/"
$route->get("/", function(){
    // Chuyển hướng người dùng đến trang "index.php"
    header("location:index.php");
});

// Khởi tạo một đối tượng Dispatcher với dữ liệu định tuyến từ RouteCollector
$dispatcher = new Phroute\Phroute\Dispatcher($route->getData());

// Gọi phương thức dispatch() để xử lý yêu cầu dựa trên phương thức HTTP và URL
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Xuất kết quả (response) ra màn hình
echo $response;
?>
