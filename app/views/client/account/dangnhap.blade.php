<div id="dangnhap">
    <nav>
        <ul>
            <li class="active"><a href="<?= Url('client/dangnhap') ?>">ĐĂNG NHẬP</a></li>
            <li><a href="<?= Url('client/dangky') ?>">ĐĂNG KÝ</a></li>
        </ul>
    </nav>

    <form action="{{ Url('client/dangnhap2') }}" method="post">
        <div>
            <input type="text" placeholder="Email hoặc số điện thoại" name="user" value="{{ $_POST['user'] }}">
        </div>
        <div>
            <input type="password" id="" placeholder="Mật khẩu" name="pass" value="{{ $_POST['pass'] }}">
        </div>
        @php
            if (isset($err)) {
                echo    " <div class='err'>
                            <p>" .$err ."</p>
                        </div>";
            }
        @endphp
        <div class="quenmk">
            <p><a href="###">Quên mật khẩu ?</a></p>
        </div>

        <div>
            <button type="submit" name="btn-DangNhap">ĐĂNG NHẬP</button>
        </div>

        <div class="camket">
            <p>Trung Trần cam kết bảo mật và sẽ không bao giờ đăng hay chia sẻ thông tin mà chưa có được sự đồng ý của
                bạn.</p>
        </div>
    </form>
</div>
