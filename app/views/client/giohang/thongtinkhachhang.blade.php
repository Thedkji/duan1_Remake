<section id="thongtinkhachhang">
    <div class="form-thongtin">
        <h3>THÔNG TIN KHÁCH HÀNG</h3>

        <section id="cach_thuc_mua_hang">
            <h4>Chọn cách thức mua hàng</h4>
            <div class="btn-diachinhan">
                <button>
                    <i class="bi bi-truck"></i>
                    <span>Giao tận nơi</span>
                </button>
                <button>
                    <i class="bi bi-shop"></i>
                    <span>Nhận tại cửa hàng</span>
                </button>
            </div>
        </section>

        <section id="gioitinh">
            <span>
                <input type="radio" name="gioitinh"> Anh
            </span>
            <span>
                <input type="radio" name="gioitinh"> Chị
            </span>
        </section>

        <section id="form-thong-tin-kh">
            <div>
                <label for="">Họ và tên *</label>
                <input type="text" name="hoTen" placeholder="Họ và tên *">
            </div>

            <div>
                <label for="">Số điện thoại *</label>
                <input type="text" name="hoTen" placeholder="Số điện thoại *">
            </div>

            <div>
                <label for="">Tỉnh/ Thành phố *</label>
                <select name="thanhpho" id="">
                    <option value="Tỉnh/Thành phố">Tỉnh/ Thành phố *</option>
                </select>
            </div>

            <div>
                <label for="">Quận/ Huyện *</label>
                <select name="quan" id="">
                    <option value="Quận/Huyện">Quận/ Huyện *</option>
                </select>
            </div>

            <div>
                <label for="">Phường/ Xã *</label>
                <select name="phuong" id="">
                    <option value="Phường/Xã">Phường/ Xã *</option>
                </select>
            </div>

            <div>
                <label for="">Số nhà, tên đường *</label>
                <input type="text" name="sonha" placeholder="Số nhà, tên đường *">
            </div>
        </section>

        <section id="loai-dia-chi">
            <h4>Loại địa chỉ</h4>
            <div>
                <input type="radio" name="loai-diachi"><span>NHÀ RIÊNG ( giao hàng tất cả thời gian )</span>
                <input type="radio" name="loai-diachi"><span>CƠ QUAN ( giao hàng giờ hành chính )</span>
            </div>

            <input type="text" name="yeucaukhac" placeholder="yêu cầu khác (Không bắt buộc)">
            <div>
                <input type="checkbox" name="goi-ng-khac">Gọi người khác nhận hàng (nếu có)
                <input type="checkbox" name="hoa-don-cty">Xuất hóa đơn công ty
            </div>
        </section>
    </div>

    @include('client.giohang.phuongthucthanhtoan')
</section>
