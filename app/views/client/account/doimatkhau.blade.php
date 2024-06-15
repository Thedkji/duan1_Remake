<div id="doimatkhau">
    <button><a href="{{ Url('client/taikhoancuatoi/') . $listTK_ID['id_TaiKhoan'] }}">Quay lại</a></button>
    <form action="{{ Url('client/doimatkhau2/') . $listTK_ID['id_TaiKhoan'] }}" method="post">
        <h2>Đổi mật khẩu</h2>
        <div>
            <label for="">Nhập mật khẩu hiện tại</label>
            <input type="password" name="matKhau" value="{{  $_POST['matKhau'] }}">
        </div>
        <div>
            <label for="">Nhập mật khẩu mới</label>
            <input type="password" name="matKhau2" value="{{  $_POST['matKhau2'] }}">
        </div>
        <div>
            <label for="">Nhập lại mật khẩu mới</label>
            <input type="password" name="matKhau3" value="{{  $_POST['matKhau3'] }}">
        </div>
        @php
            if (isset($err)) {
                echo " <div class='err'><p>".$err."</p></div>";
            }
        @endphp
        <button type="submit" name="btn_doi">Đổi</button>
    </form>
</div>
