<?php
//Đường dẫn của web

const BASE_URL = "http://localhost/DA1_Remake/";

function Url($url){
    return BASE_URL . $url;
}

function number($params){
    return number_format($params,0,",",".");
} //chuyển đổi và ngăn cách số cho đẹp , output = 123.000 , muốn ngăn cách bằng dấu , thì sửa dấu .

const DBHOST = "127.0.0.1"; //địa chỉ localhost
const DBNAME = "duan1_rm";  //tên database
const DBUSER = "root";  //tên đăng nhập
const DBPASS = ""; //pass
const DBCHARSET= "utf8";  //kiểu hỗ trợ tiếng việt

?>