<?php
namespace App\models;
use App\models\BaseModel;
class SanPhamModel  extends BaseModel{
    function getSanPham($id){
        $sql = "select * from sanpham";
    }
}
?>