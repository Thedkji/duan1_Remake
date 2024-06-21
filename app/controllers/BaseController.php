<?php

namespace App\Controllers;

use App\Models\Sanpham\DanhMucModel;
use App\models\sanpham\SanPhamModel;


use App\models\taikhoan\TaiKhoanModel;
use eftec\bladeone\BladeOne;

class BaseController
{
    public $modelTaiKhoan;
    public $modelSanPham;
    public $modelSanPhamDanhMuc;

    public function __construct()
    {
        $this->modelTaiKhoan = new TaiKhoanModel();
        $this->modelSanPham = new SanPhamModel();
        $this->modelSanPhamDanhMuc = new DanhMucModel();
    }

    public function render($viewsFile, $data = [])
    {
        $views = './app/views';
        $cache = './app/cache';
        $baldeOne = new BladeOne($views, $cache, BladeOne::MODE_DEBUG);
        echo $baldeOne->run($viewsFile, $data);
    }
}
