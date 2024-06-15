@php
    if (isset($_SESSION['success'])) {
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    }
@endphp
<div id="taikhoancuatoi">
    <div class="overlay"></div>
    <form action="{{ Url('client/edittaikhoancuatoi/').$listTK_ID['id_TaiKhoan'] }}" method="post">
        <div>
            <h2>Tài khoản của tôi</h2>
            <div class="img">
                <img src="{{ Url('asset/global/img/slide_show/banner-footer-anh-trung_1683094141.webp') }}" alt=""
                    width="100%" height="100%">
            </div>
        </div>
        <div style="position:relative;">
            <label for="">Họ tên</label>
            <input type="text" placeholder="Họ và tên" id="hoTen" name="hoTen"
                value="{{ $listTK_ID['hoTen'] }}">
        </div>

        @php
            if (isset($err['hoTen'])) {
                echo " <div class='err'>
                                <p>" .
                    $err['hoTen'] .
                    "</p>
                            </div>";
            }
        @endphp

        <div>
            <label for="">Email</label>
            <input type="text" placeholder="Email" name="email" value="{{ $listTK_ID['email'] }}">
        </div>

        @php
            if (isset($err['email'])) {
                echo " <div class='err'>
                                <p>" .
                    $err['email'] .
                    "</p>
                            </div>";
            }
        @endphp

        <div style="position:relative;">
            <label for="">Số điện thoại</label>
            <input type="number" placeholder="Số điện thoại" name="tel" value="0{{ $listTK_ID['tel'] }}">
        </div>

        @php
            if (isset($err['tel'])) {
                echo " <div class='err'>
                            <p>" .
                    $err['tel'] .
                    "</p>
                        </div>";
            }
        @endphp

        <div style="position:relative;">
            <label for="">Địa chỉ</label>
            <textarea name="diaChi" id="" cols="50%" rows="5">{{ $listTK_ID['diaChi'] }}</textarea>
        </div>

        @php
            if (isset($err['diaChi'])) {
                echo " <div class='err'>
                            <p>" .
                    $err['diaChi'] .
                    "</p>
                        </div>";
            }
        @endphp

        <div style="position:relative;" class="inputMatKhau">
            <div class="doimatkhau">
                <button><a href="{{ Url('client/doimatkhau/') . $listTK_ID['id_TaiKhoan'] }}">Đổi mật khẩu</a></button>
            </div>
        </div>

        <div style="text-align: center">
            <button type="submit" name="btn_suathongtin" class="btn_suathongtin">Sửa thông tin</button>
        </div>

        <div class="camket" style="text-align: center">
            <p>Trung Trần cam kết bảo mật và sẽ không bao giờ đăng hay chia sẻ thông tin mà chưa có được sự đồng ý
                của
                bạn.</p>
        </div>

        <div class="modalEditAnh">
            <img src="{{ Url('asset/global/img/slide_show/banner-footer-anh-trung_1683094141.webp') }}" alt=""
                width="100%" height="100%">
            <input type="file" name="img">
        </div>
    </form>
</div>
<script src="{{  Url('asset/js/taikhoancuatoi.js?v=').time() }}"></script>

