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
        unset($_SESSION['success']);
        header("location:" . Url('client/trang_chu'));
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
        if (isset($_POST['btn_dangky']) && $_SERVER['REQUEST_METHOD'] == "POST") {
            $hoTen = $_POST['hoTen'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $diaChi = $_POST['diaChi'];
            $matKhau = $_POST['matKhau'];
            $matKhau2 = $_POST['matKhau2'];
            $checkErr = true;
            $err = [];  //mảng chứa các giá trị lỗi
            // validate họ tên
            $regexVNName = "/^[\p{L}\s]+$/u";
            if (empty(trim($hoTen))) {
                $err['hoTen'] = "Tên không được để trống";
                $checkErr = false;
            } else if (!preg_match($regexVNName, $hoTen)) {
                $err['hoTen'] = "Tên không được có số";
                $checkErr = false;
            }

            //Validate email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) {
                $err['email'] = "Sai định dạng email";
                $checkErr = false;
            }

            //Validate số điện thoại
            $checkSDT = "/^0(3[2-9]|5[6|8|9]|7[0|6-9]|8[1-9]|9[0-9])[0-9]{7}$/";
            if (empty($tel)) {
                $err['tel'] = "Số điện thoại không được để trống";
                $checkErr = false;
            } else if (!preg_match($checkSDT, $tel)) {
                $err['tel'] = "Số điện thoại không đúng định dạng";
                $checkErr = false;
            }

            //Validate địa chỉ
            if (empty($diaChi)) {
                $err['diaChi'] = "Địa chỉ không được để trống";
                $checkErr = false;
            }

            // $checkMK = "/^[0-9a-zA-Z]@$/" !preg_match($checkMK,$matKhau) &&;
            //Validate pass
            if (empty($matKhau)) {
                $err['matKhau'] = "Mật khẩu không được để trống";
                $checkErr = false;
            }
            // else if (strlen($matKhau) < 8) {
            //     $err['matKhau'] = "Mật khẩu phải lớn hơn 8 ký tự";
            //     $checkErr = false;
            // }

            //Validate pass 2
            if ($matKhau2 !== $matKhau) {
                $err['matKhau2'] = "Mật khẩu không trùng khớp với mật khẩu vừa tạo";
                $checkErr = false;
            }
        }


        if ($checkErr == true) {
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

    function EditTaiKhoanCuaToi($id)
    {
        if (isset($_POST['btn_suathongtin']) && $_SERVER['REQUEST_METHOD'] == "POST") {
            $listTK_ID = $this->modelTaiKhoan->getTaiKhoan($id);
            $hoTen = $_POST['hoTen'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $diaChi = $_POST['diaChi'];
            $err = [];
            $checkErr = true;

            // Validate họ tên
            $regexVNName = "/^[\p{L}\s]+$/u";
            if (empty(trim($hoTen))) {
                $err['hoTen'] = "Tên không được để trống";
                $checkErr = false;
            } else if (!preg_match($regexVNName, $hoTen)) {
                $err['hoTen'] = "Tên không được có số";
                $checkErr = false;
            }

            // Validate email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $err['email'] = "Sai định dạng email";
                $checkErr = false;
            }

            // Validate số điện thoại
            $checkSDT = "/^0(3[2-9]|5[6|8|9]|7[0|6-9]|8[1-9]|9[0-9])[0-9]{7}$/";
            if (empty($tel)) {
                $err['tel'] = "Số điện thoại không được để trống";
                $checkErr = false;
            } else if (!preg_match($checkSDT, $tel)) {
                $err['tel'] = "Số điện thoại không đúng định dạng";
                $checkErr = false;
            }

            // Validate địa chỉ
            if (empty($diaChi)) {
                $err['diaChi'] = "Địa chỉ không được để trống";
                $checkErr = false;
            }

            // Chỉ thực hiện cập nhật thông tin nếu không có lỗi
            if ($checkErr) {
                $this->modelTaiKhoan->EditTaiKhoan($listTK_ID['id_TaiKhoan'], $hoTen, $email, $tel, $diaChi);
                echo '<script>alert("Sửa thành công!"); window.location="' . Url('client/taikhoancuatoi/' . $listTK_ID['id_TaiKhoan']) . '";</script>';
                exit(); // Không để tiếp tục thực hiện render sau header
            } else {
                return $this->render('client.account.taikhoancuatoi', ["listTK_ID" => $listTK_ID, "err" => $err]);
            }
        } else {
            // Nếu không phải POST request hoặc không có nút bấm thì lấy dữ liệu tài khoản hiện tại
            $listTK_ID = $this->modelTaiKhoan->getTaiKhoan($id);
            return $this->render('client.account.taikhoancuatoi', ["listTK_ID" => $listTK_ID]);
        }
    }


    function DoiMatKhau($id)
    {
        $listTK_ID = $this->modelTaiKhoan->getTaiKhoan($id);
        return $this->render('client.account.doimatkhau', ["listTK_ID" => $listTK_ID]);
    }
    function DoiMatKhau2($id)
    {
        if (isset($_POST['btn_doi'])) {
            $matKhau = $_POST['matKhau'];
            $matKhau2 = $_POST['matKhau2'];
            $matKhau3 = $_POST['matKhau3'];
            $listTK_ID = $this->modelTaiKhoan->getTaiKhoan($id);
            $check = true;
            if ($matKhau !== $listTK_ID['matKhau']) {
                $err = "Mật khẩu sai vui lòng nhập lại";
                $check = false;
                return $this->render('client.account.doimatkhau', ["listTK_ID" => $listTK_ID, "err" => $err]);
            }
            if (strlen($matKhau2) < 1) {
                $err = "Mật khẩu mới phải lớn hơn 8 ký tự và ko được để trống";
                $check = false;
                return $this->render('client.account.doimatkhau', ["listTK_ID" => $listTK_ID, "err" => $err]);
            }
            if ($matKhau2 !== $matKhau3) {
                $err = "Mật khẩu mới phải trùng khớp với mật khẩu được nhập lại";
                $check = false;
                return $this->render('client.account.doimatkhau', ["listTK_ID" => $listTK_ID, "err" => $err]);
            }

            if ($check) {
                $this->modelTaiKhoan->DoiMK($id, $matKhau2);
                $_SESSION['success']= '<script>alert("Đổi mật khẩu thành công vui lòng đăng nhập lại!");</script>';
                unset($_SESSION['user']);
                header("location:".Url('client/dangnhap'));
            }
        }
    }
}
