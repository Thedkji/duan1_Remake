<?php
namespace App\controllers\sanpham;
use App\controllers\BaseController;
class SanPhamController extends BaseController{
    function ListTrangChu(){
        require_once "./app/views/client/trang_chu/main.php";
        

    }
    function Listlaptop(){
        // return $this->render("client.laptop.main");
        require_once "./app/views/client/laptop/main.php";
    }

    function ListChiTietSP(){
        // return $this->render("client.laptop.main");
        require_once "./app/views/client/chitietsp/main.php";
    }
}
?>