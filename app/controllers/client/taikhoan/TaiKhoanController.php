<?php

namespace App\controllers\client\taikhoan;

use App\Controllers\BaseController;

class TaiKhoanController extends BaseController
{
    function DangNhap()
    {
        return $this->render('client.account.dangnhap');
    }

    function DangXuat()
    {
        unset($_SESSION['user']);
        header("location:". Url('client/trang_chu'));
    }
    function DangNhap2()
    {
        if (isset($_POST['btn-DangNhap'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $check = $this->modelTaiKhoan->checkUser($user, $pass);

            if (is_array($check)) {
                $_SESSION['user'] = $check;
                header("location:" . Url('client/trang_chu'));
            } else {
                $err = "Sai tài khoản hoặc mật khẩu";
                return $this->render('client.account.dangnhap', ["err" => $err]);
            }
        }
    }

    function DangKy()
    {
        return $this->render('client.account.dangky');
    }
    function DangKyPost()
    {
        if (isset($_POST['btn_dangky']) && $_SERVER['REQUEST_METHOD']) {
            $hoTen = $_POST['hoTen'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $diaChi = $_POST['diaChi'];
            $matKhau = $_POST['matKhau'];
            $matKhau2 = $_POST['matKhau2'];
            $checkErr = false;
            $err = [];  //mảng chứa các giá trị lỗi
            // validate họ tên
            $regexVNName = "/^[\p{L}\s]+$/u";
            if (empty(trim($hoTen))) {
                $err['hoTen'] = "Tên không được để trống";
                $checkErr = true;
            } else if (!preg_match($regexVNName, $hoTen)) {
                $err['hoTen'] = "Tên không được có số";
                $checkErr = true;
            }

            //Validate email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) {
                $err['email'] = "Sai định dạng email";
                $checkErr = true;
            }

            //Validate số điện thoại
            $checkSDT = "/^0(3[2-9]|5[6|8|9]|7[0|6-9]|8[1-9]|9[0-9])[0-9]{7}$/";
            if (empty($tel)) {
                $err['tel'] = "Số điện thoại không được để trống";
                $checkErr = true;
            } else if (!preg_match($checkSDT, $tel)) {
                $err['tel'] = "Số điện thoại không đúng định dạng";
                $checkErr = true;
            }

            //Validate địa chỉ
            if (empty($diaChi)) {
                $err['diaChi'] = "Địa chỉ không được để trống";
                $checkErr = true;
            }

            // $checkMK = "/^[0-9a-zA-Z]@$/" !preg_match($checkMK,$matKhau) &&;
            //Validate pass
            if (empty($matKhau)) {
                $err['matKhau'] = "Mật khẩu không được để trống";
                $checkErr = true;
            }
            // else if (strlen($matKhau) < 8) {
            //     $err['matKhau'] = "Mật khẩu phải lớn hơn 8 ký tự";
            //     $checkErr = true;
            // }

            //Validate pass 2
            if ($matKhau2 !== $matKhau) {
                $err['matKhau2'] = "Mật khẩu không trùng khớp với mật khẩu vừa tạo";
                $checkErr = true;
            }
        }


        if ($checkErr == false) {
            $this->modelTaiKhoan->insertTaiKhoan($hoTen, $email, $tel, $diaChi, $matKhau);
            return $this->render('client.account.dangnhap');
        } else {
            return $this->render('client.account.dangky', ["err" => $err]);
        }
    }

    function TaiKhoanCuaToi($id)
    {
        $listTK_ID = $this->modelTaiKhoan->getTaiKhoan($id);
        return $this->render('client.account.taikhoancuatoi', ["listTK_ID" => $listTK_ID]);
    }
}
