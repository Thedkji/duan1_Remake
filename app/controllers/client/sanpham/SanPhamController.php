<?php

namespace App\controllers\client\sanpham;

use App\Controllers\BaseController;

class SanPhamController extends BaseController
{
    public function ListTrangChu()
    {
        // require_once "./app/views/client/trang_chu/main.php";
        $listSale =  $this->modelSanPham->listSanPhamSale("0,5");  // limit = 0->5 sản phẩm
        $listLaptop =  $this->modelSanPham->listSanPhamDanhMuc(1, 0);  //id_DanhMucCha = 1 == laptop, id_DanhMucCon = 0 ,limit = 0->10 sản phẩm
        $listApple =  $this->modelSanPham->listSanPhamDanhMuc(0, 1);  //id_DanhMucCha = 1 == laptop, id_DanhMucCon = 1 ==apple ,limit = 0->10 sản phẩm
        $listAcer =  $this->modelSanPham->listSanPhamDanhMuc(0, 2);  //id_DanhMucCha = 1 == laptop, id_DanhMucCon = 2 ==acer,limit = 0->10 sản phẩm
        $listLeonovo =  $this->modelSanPham->listSanPhamDanhMuc(0, 3);  //id_DanhMucCha = 1 == laptop, id_DanhMucCon = 3 ==leonovo,limit = 0->10 sản phẩm
        $listPhuKien =  $this->modelSanPham->listSanPhamDanhMuc(2, 0);  //id_DanhMucCha = 1 == laptop, id_DanhMucCon = 2 ==acer,limit = 0->10 sản phẩm

        return $this->render('client.trang_chu.main', [
            'lstSanPham' => $listSale,
            'listLaptop' => $listLaptop,
            'listApple' => $listApple,
            'listAcer' => $listAcer,
            'listLeonovo' => $listLeonovo,
            'listPhuKien' => $listPhuKien
        ]);
    }
    public function Listlaptop($page)
    {
        $numberPage = $page; //Lấy biến get trên thanh url để set up next , pre
        $listSanPham = $this->modelSanPham->pagination($page); //hàm xử lý phân trang trong model sản phẩm
        $totalSanPham = $this->modelSanPham->getSanPham(); //lấy toàn bộ sản phẩm 
        $tongSP = count($totalSanPham); //tính toán tổng số trang bằng cách dùng hàm count 
        $tongSoTrang = ceil($tongSP / 16); //thực hiện phép tính phân trang với công thức = tổng số sản phẩm / số sản phẩm hiển thị
        //hàm ceil để làm tròn ví dụ 42 sản phẩm / 16 sản phẩm hiển thị = 2,625 trang , dùng hàm ceil sẽ = 3
        //* muốn sửa số sản phẩm hiển thị (16) thì vào model>sanpham>tìm hàm pagination và sửa tham số

        $listDanhMuc = $this->modelSanPhamDanhMuc->getAllDanhMuc();

        return $this->render('client.laptop.main', [
            "listSanPham" => $listSanPham,
            "totalSanPham" => $totalSanPham,
            "tongSoTrang" => $tongSoTrang,
            "numberPage" => $numberPage,
            "listDanhMuc" => $listDanhMuc,
        ]);
    }

    public function ListChiTietSP($id)
    {
        $listSanPham = $this->modelSanPham->getSanPham($id);
        return $this->render('client.chitietsp.main', [
            "listSanPham" => $listSanPham,
        ]);
    }

    public function GioHang($id)
    {

        return $this->render('client.giohang.main', []);
    }
}
