<section id="header_laptop">
    <section class="link">
        <div>
            <img src="<?= Url('asset/global/img/logo/becurant.png') ?>" alt="" width="15px" height="16px">
            <a href="<?= Url('client/trang_chu') ?>">
                Trang chủ > <a href="###">Laptop</a>
            </a>
        </div>
    </section>

    <div class="title">
        <h2>Máy tính xách tay</h2>

        <div class="sapxep_theoyeucau">
            <p>1-24 trên 859 sản phẩm</p>

            <div>
                <p>Sắp xếp theo :</p>
                <p><a href="###">Giá tăng dần</a></p>
                <p><a href="###">Giá giảm dần</a></p>
                <p><a href="###">Xem nhiều</a></p>
            </div>
        </div>
    </div>

    <section id="box_Container">
        <section class="filter">
            <div class="boloc">
                <i class="bi bi-funnel"></i>
                Bộ lọc
                <button class="btn_loc">Lọc</button>
            </div>

            <div class="item">
                <div class="item_title">
                    <p>Danh mục</p>
                    <i class="bi bi-chevron-down"></i>
                </div>

                <div class="select">
                    @foreach ($listDanhMuc as $item)
                        <div class="option">
                            <input type="checkbox">
                            <span>{{ $item['ten_DanhMuc'] }}</span>                            

                        </div>
                    @endforeach
                </div>
            </div>
            <div class="item">
                <div class="item_title">
                    <p>Nhu cầu</p>
                    <i class="bi bi-chevron-down"></i>
                </div>

                <div class="select">
                    <div class="option">
                        <input type="checkbox">
                        <span>Game</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Đồ họa , kỹ thuật</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Lập trình</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Mỏng nhẹ</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Work station</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_title">
                    <p>Giá</p>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <div class="select">
                    <div class="option">
                        <input type="checkbox">
                        <span>Game</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Đồ họa , kỹ thuật</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Lập trình</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Mỏng nhẹ</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Work station</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_title">
                    <p>VGA - Card đồ họa rời</p>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <div class="select">
                    <div class="option">
                        <input type="checkbox">
                        <span>Game</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Đồ họa , kỹ thuật</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Lập trình</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Mỏng nhẹ</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Work station</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_title">
                    <p>Giá</p>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <div class="select">
                    <div class="option">
                        <input type="checkbox">
                        <span>Game</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Đồ họa , kỹ thuật</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Lập trình</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Mỏng nhẹ</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Work station</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_title">
                    <p>Giá</p>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <div class="select">
                    <div class="option">
                        <input type="checkbox">
                        <span>Game</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Đồ họa , kỹ thuật</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Lập trình</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Mỏng nhẹ</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Work station</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_title">
                    <p>Giá</p>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <div class="select">
                    <div class="option">
                        <input type="checkbox">
                        <span>Game</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Đồ họa , kỹ thuật</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Lập trình</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Mỏng nhẹ</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Work station</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_title">
                    <p>Giá</p>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <div class="select">
                    <div class="option">
                        <input type="checkbox">
                        <span>Game</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Đồ họa , kỹ thuật</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Lập trình</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Mỏng nhẹ</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Work station</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_title">
                    <p>Giá</p>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <div class="select">
                    <div class="option">
                        <input type="checkbox">
                        <span>Game</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Đồ họa , kỹ thuật</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Lập trình</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Mỏng nhẹ</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Work station</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item_title">
                    <p>Giá</p>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <div class="select">
                    <div class="option">
                        <input type="checkbox">
                        <span>Game</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Đồ họa , kỹ thuật</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Lập trình</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Mỏng nhẹ</span>
                    </div>
                    <div class="option">
                        <input type="checkbox">
                        <span>Work station</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="sanpham">
            <!-- item1 -->
            @foreach ($listSanPham as $item)
                <!-- item1 -->
                <div class="list__products__container">
                    <div class="list__products__item">
                        <div class="img__pro">
                            <a href="{{ url("client/chitietsp/").$item['id_SanPham'] }}">
                                <img src="./asset/global/img/sanpham/thinkbook_14_plus_2023_1-copy-copy.webp"
                                    alt="">
                            </a>
                        </div>

                        <div class="ten__pro">
                            <a href="{{ url("client/>chitietsp/").$item['id_SanPham'] }}">
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
                                        <b>CPU:</b> {{ $item['cpu'] }}
                                    </div>
                                    <div class="item">
                                        <b>RAM:</b> {{ $item['ram'] }}
                                    </div>
                                    <div class="item">
                                        <b>Màn hình:</b> {{ $item['manHinh'] }}
                                    </div>
                                    <div class="item">
                                        <b>Đồ họa:</b> {{ $item['cardDoHoa'] }}
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
                <!--  -->
            @endforeach
            <!--  -->

            <div class="phan-trang">
                <!-- Nút Previous -->
                @if ($numberPage > 1)
                    <div class="phan-trang-item">
                        <a href="{{ url('client/laptop/' . ($numberPage - 1)) }}"><i class="bi bi-chevron-left"></i></a>
                    </div>
                @endif
    
                <!-- Hiển thị các trang -->
                @for ($i = 1; $i <= $tongSoTrang; $i++)
                    <div class="phan-trang-item  {{ $numberPage == $i ? 'active' : '' }}">
                        {{-- Nếu như numberPage tức số page trên url bằng với $i lựa chọn của ng dùng thì trả về class là active ngược lại thì ko --}}
                        <a href="{{ url('client/laptop/' . $i) }}">{{ $i }}</a>
                    </div>
                @endfor
    
                <!-- Nút Next -->
                @if ($numberPage < $tongSoTrang)
                    <div class="phan-trang-item">
                        <a href="{{ url('client/laptop/' . ($numberPage + 1)) }}"><i class="bi bi-chevron-right"></i></a>
                    </div>
                @endif
            </div>
        </section>

        <div></div>

    </section>

</section>
