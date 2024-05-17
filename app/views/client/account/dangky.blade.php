<div id="dangky">
    <nav>
        <ul>
            <li><a href="<?= Url('client/dangnhap') ?>">ĐĂNG NHẬP</a></li>
            <li class="active"><a href="<?= Url('client/dangky') ?>">ĐĂNG KÝ</a></li>
        </ul>
    </nav>

    <form action="<?= Url('client/dangky_post') ?>" method="post">
        <div style="position:relative;">
            <input type="text" placeholder="Họ và tên" id="hoTen" name="hoTen" value="{{ $_POST['hoTen'] }}">
            <span style="color: red;position:absolute;right:10px;top:25%">*</span>
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
            <input type="text" placeholder="Email" name="email" value="{{ $_POST['email'] }}">
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
            <input type="text" placeholder="Số điện thoại" name="tel" value="{{ $_POST['tel'] }}">
            <span style="color: red;position:absolute;right:10px;top:25%">*</span>
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
            <input type="text" placeholder="Địa chỉ" name="diaChi" value="{{ $_POST['diaChi'] }}">
            <span style="color: red;position:absolute;right:10px;top:25%">*</span>
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
            <input type="password" id="" placeholder="Mật khẩu" name="matKhau" value="{{ $_POST['matKhau'] }}">
            <span style="color: red;position:absolute;right:10px;top:25%">*</span>
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

        <div style="position:relative;">
            <input type="password" id="" placeholder="Nhập lại mật khẩu" name="matKhau2" value="{{ $_POST['matKhau2'] }}">
            <span style="color: red;position:absolute;right:10px;top:25%">*</span>
        </div>

        @php
            if (isset($err['matKhau2'])) {
                echo " <div class='err'>
                        <p>" .
                    $err['matKhau2'] .
                    "</p>
                    </div>";
            }
        @endphp

        <div class="quenmk">
            <p><a href="###">Quên mật khẩu ?</a></p>
        </div>

        <div>
            <button type="submit" name="btn_dangky">ĐĂNG KÝ</button>
        </div>

        <div class="camket">
            <p>Trung Trần cam kết bảo mật và sẽ không bao giờ đăng hay chia sẻ thông tin mà chưa có được sự đồng ý của
                bạn.</p>
        </div>
    </form>
</div>
