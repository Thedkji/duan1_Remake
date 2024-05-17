<?php
namespace App\controllers\client\sanpham;
use App\Controllers\BaseController;
class SanPhamController extends BaseController{
    public function ListTrangChu(){
        // require_once "./app/views/client/trang_chu/main.php";
        return $this->render('client.trang_chu.main');
    }
    public function Listlaptop(){
        // require_once "./app/views/client/laptop/main.php";
        return $this->render('client.laptop.main');
    }

    public function ListChiTietSP(){
        // require_once "./app/views/client/chitietsp/main.php";
        return $this->render('client.chitietsp.main');
    }
}
?>