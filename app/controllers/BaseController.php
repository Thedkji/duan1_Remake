<?php
namespace App\controllers;
use eftec\bladeone\BladeOne;
class BaseController{
    // Xây dựng hàm phương thức chạy thư viện bladeOne 
    function render($viewsFile,$data = []){
        $views = "./app/views";
        $cache = "./app/cache";
        $bladeOne = new BladeOne($views, $cache,BladeOne::MODE_DEBUG);
        echo $bladeOne->run($viewsFile,$data);
    } 
}
?>