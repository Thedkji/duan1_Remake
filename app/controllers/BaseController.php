<?php
namespace App\Controllers;
use App\models\taikhoan\TaiKhoanModel;
use eftec\bladeone\BladeOne;

class BaseController{
    public $modelTaiKhoan;
    public function __construct(){
        $this->modelTaiKhoan = new TaiKhoanModel();
    }

    public function render($viewsFile,$data = []){
        $views = './app/views';
        $cache = './app/cache';
        $baldeOne = new BladeOne($views,$cache,BladeOne::MODE_DEBUG);
        echo $baldeOne->run($viewsFile,$data);
    }
}
?>