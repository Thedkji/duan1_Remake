<section class="maytinh__xachtay">
    <section>
        <h2>LAPTOP</h2>

        <div>
            <ul>
                <li><a href="###">Acer</a></li>
                <li><a href="###">Dell</a></li>
                <li><a href="###">Leonovo</a></li>
                <li><a href="###">Apple</a></li>
            </ul>

            <a href="###">
                <p>Xem tất cả (853)</p>
            </a>
        </div>
    </section>

    <section class="list__products">
        <!-- item1 -->
        @foreach ($listLaptop as $item)
            <div class="list__products__container">
                <div class="list__products__item">
                    <div class="img__pro">
                        <a href="###">
                            <img src="<?= Url('asset/global/img/sanpham/thinkbook_14_plus_2023_1-copy-copy.webp') ?>"
                                alt="">
                        </a>
                    </div>

                    <div class="ten__pro">
                        {{ $item['ten_SanPham'] }}
                        </a>
                    </div>

                    <div class="price__pro">
                        <span>{{ number_format($item['gia_SanPham']) }} VNĐ</span>
                        <span>{{ number_format($item['gia_Sale']) }} VNĐ</span>
                    </div>

                    <div class="phienban__pro">
                        <span>1 phiên bản</span>
                        <div>
                            <i class="bi bi-heart"></i>
                            <span> Yêu thích</span>
                        </div>
                    </div>

                    <div class="thongso__muahang">
                        <div class="thongso">
                            <div>
                                <div class="item">
                                    CPU: {{ $item['cpu'] }}
                                </div>
                                <div class="item">
                                    RAM: {{ $item['ram'] }}
                                </div>
                                <div class="item">
                                    Màn hình: {{ $item['manHinh'] }}
                                </div>
                                <div class="item">
                                    Đồ họa: {{ $item['cardDoHoa'] }}
                                </div>
                            </div>
                        </div>

                        <div class="muahang">
                            <button>
                                <a href="###">
                                    <i class="bi bi-cart-plus"></i>
                                </a>
                            </button>
                            <button>
                                <a href="###">
                                    So sánh
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end item1 -->
        @endforeach


        <!-- Thêm các items khác tương tự ở đây -->

    </section>
</section>
