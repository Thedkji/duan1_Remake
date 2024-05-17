<div id="taikhoancuatoi">
    <div class="overlay"></div>
    <form action="###" method="post">
        <div>
            <h2>Tài khoản của tôi</h2>
            <div class="img">
                <img src="{{ Url('asset/global/img/slide_show/banner-footer-anh-trung_1683094141.webp') }}" alt=""
                    width="100%" height="100%">
            </div>
        </div>
        <div style="position:relative;">
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
            <input type="text" placeholder="Số điện thoại" name="tel" value="{{ $listTK_ID['tel'] }}">
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
            <input type="text" placeholder="Địa chỉ" name="diaChi" value="{{ $listTK_ID['diaChi'] }}">
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

        <div style="position:relative;">
            <input type="password" id="" placeholder="Mật khẩu" name="matKhau"
                value="{{ $listTK_ID['matKhau'] }}" readonly>
        </div>

        @php
            if (isset($err['matKhau'])) {
                echo " <div class='err'>
                            <p>" .
                    $err['matKhau'] .
                    "</p>
                        </div>";
            }
        @endphp

        {{-- <div style="position:relative;">
                <input type="password" id="" placeholder="Nhập lại mật khẩu" name="matKhau2"
                    value="{{ $_POST['matKhau2'] }}">
            </div>

            @php
                if (isset($err['matKhau2'])) {
                    echo " <div class='err'>
                            <p>" .
                        $err['matKhau2'] .
                        "</p>
                        </div>";
                }
            @endphp --}}

        <div>
            <button type="submit" name="btn_suathongtin" class="btn_suathongtin">Sửa thông tin</button>
        </div>

        <div class="camket">
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
<script src="{{ Url('asset/js/taikhoancuatoi.js') }}"></script>
