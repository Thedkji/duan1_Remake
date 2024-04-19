<?php
use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? '': $_GET['url'];

$route = new RouteCollector;

// route
$route->get('/',function(){
    require_once "app/views/client/trang_chu/main.php";
});



// Khởi tạo một đối tượng Dispatcher từ thư viện Phroute và sử dụng dữ liệu định tuyến từ đối tượng Route
$dispatcher = new Phroute\Phroute\Dispatcher($route->getData());

// Thực thi phương thức dispatch để xác định và gọi controller phù hợp dựa trên method HTTP và URL được yêu cầu
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

?>