<?php

namespace App\models\sanpham;

use App\models\BaseModel;

class SanPhamModel  extends BaseModel
{
    public function getSanPham($id = 0) //Lấy 1 hoặc tất cả sản phẩm
    {
        $sql = "SELECT * FROM sanpham 
        LEFT JOIN thongso ON sanpham.id_ThongSo = thongso.id_ThongSo 
        LEFT JOIN thongsochitiet ON thongsochitiet.id_ThongSo = thongso.id_ThongSo 
        ";
        if ($id == 0) {
            $sql .= "ORDER BY id_SanPham DESC";
            return $this->getAllData($sql);
        } else {
            $sql .= "WHERE id_SanPham = $id ORDER BY id_SanPham DESC";
            return $this->getOneData($sql);
        }
    }

    public function pagination($page = 1, $perPage = 16)
    {  //Hàm sử dụng để phân trang
        $start = ($page - 1) * $perPage;
        $sql = "SELECT * FROM sanpham 
        LEFT JOIN thongso ON sanpham.id_ThongSo = thongso.id_ThongSo 
        LEFT JOIN thongsochitiet ON thongsochitiet.id_ThongSo = thongso.id_ThongSo 
        ORDER BY id_SanPham DESC LIMIT $start,$perPage";
        
        return $this->getAllData($sql);
    }

    public function listSanPhamDanhMuc($id_DanhMuc = 0, $id_DanhMucPhu = 0, $limit = "0,10") //Lấy 1 hoặc tất cả sản phẩm thuộc danh mục cụ thể
    {
        $sql = "SELECT * FROM sanpham 
        LEFT JOIN thongso ON sanpham.id_ThongSo = thongso.id_ThongSo 
        LEFT JOIN thongsochitiet ON thongsochitiet.id_ThongSo = thongso.id_ThongSo 
        WHERE 1 ";

        if ($id_DanhMuc !== 0) {
            $sql .= "AND id_DanhMuc = $id_DanhMuc ";
        } else if ($id_DanhMucPhu !== 0) {
            $sql .= "AND id_DanhMucPhu = $id_DanhMucPhu ";
        }
        $sql .= "ORDER BY id_SanPham DESC LIMIT $limit";
        return $this->getAllData($sql);
    }


    public function listSanPhamSale($limit = "0,5") //Lấy ra sản phẩm được sale mới nhất
    {
        $sql = "SELECT * FROM sanpham 
        LEFT JOIN thongso ON sanpham.id_ThongSo = thongso.id_ThongSo 
        where gia_Sale < gia_SanPham ORDER BY id_SanPham DESC LIMIT $limit";
        return $this->getAllData($sql);
    }

    public function insertSanPham($ten_SanPham, $img, $gia_SanPham, $gia_Sale, $luot_Xem, $mo_Ta, $id_ThongSo, $id_DanhMuc, $id_DanhMucPhu) //thêm mới sản phẩm
    {
        $sql = "insert into sanpham (ten_SanPham,img,gia_SanPham,gia_Sale,luot_Xem,mo_Ta,id_ThongSo,id_DanhMuc,id_DanhMucPhu) values ('$ten_SanPham','$img',$gia_SanPham,$gia_Sale,$luot_Xem,'$mo_Ta',$id_ThongSo,$id_DanhMuc,$id_DanhMucPhu)";
        return $this->getAllData($sql);
    }
}
