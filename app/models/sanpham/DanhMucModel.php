<?php

namespace App\Models\Sanpham;

use App\models\BaseModel;

class DanhMucModel extends BaseModel
{
    public function getAllDanhMuc() //Lấy  tất cả danh mục
    {
        $sql = "SELECT * FROM danhmuc ORDER BY id_DanhMuc ASC";
        return $this->getAllData($sql);
    }
    

    


}
