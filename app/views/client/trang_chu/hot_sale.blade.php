<article class="hot__Sale">
    <section class="tieude__sale">
        <h2>HOT SALE</h2>
        <p><a href="####">Xem tất cả (29)</a></p>
    </section>

    <section class="sale__products">
        @foreach ($lstSanPham as $lst)
        <div class="sale__product__item">
            <div class="banner__sale">
                <div>
                    <span>Đang có flash sale</span>
                </div>
                <div>
                    <span>-5%</span>
                </div>
            </div>

            <div class="img__sale">
                <a href="###">
                    <img src="<?=Url('asset/global/img/sanpham/')?>" alt="img">
                </a>
            </div>

            <div class="tenpro__sale">
                <a href="###">
                    {{ $lst['ten_SanPham'] }}
                </a>
            </div>

            <div class="price__sale">
                <span>{{ number_format($lst['gia_SanPham']) }} VNĐ</span>
                <span>{{ number_format($lst['gia_Sale'] )}} VNĐ</span>
            </div>

            <div class="phienban__sale">
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
                            CPU: {{ $lst['cpu'] }}
                        </div>
                        <div class="item">
                            RAM: {{ $lst['ram'] }}
                        </div>
                        <div class="item">
                            Màn hình: {{ $lst['manHinh'] }}
                        </div>
                        <div class="item">
                            Đồ họa: {{ $lst['cardDoHoa'] }}
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
        @endforeach
        </div>
    </section>
</article>