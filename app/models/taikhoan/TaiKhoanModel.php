<?php
namespace App\models\taikhoan;
use App\models\BaseModel;
class TaiKhoanModel extends BaseModel{
    function getTaiKhoan($id){
        $sql = "select * from taikhoan ";
        if($id == 0){
            return $this->getAllData($sql);
        }else{
            $sql.="where id_TaiKhoan = $id";
            return $this->getOneData($sql);
        }
    }
    function insertTaiKhoan($hoTen,$email,$tel,$diaChi,$matKhau){
        $sql = "insert into taikhoan (hoTen,email,tel,diaChi,matKhau) values ('$hoTen','$email',$tel,'$diaChi','$matKhau')";
        return $this->getAllData($sql);
    }

    function checkUser($user,$pass){
        $sql = "SELECT * FROM taikhoan WHERE (email = '$user' OR tel = '$user') AND matKhau = '$pass'";
        return $this->getOneData($sql);
    }
}
?>