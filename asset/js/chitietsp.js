// slide sản phẩm
function SlideViewSP() {
    let slideList = document.querySelector('#chitietsp .slide-sanpham .slide-list');
    let imgs = document.querySelectorAll('#chitietsp .slide-sanpham .slide-list img');
    let btnNext = document.querySelector('#chitietsp .nextpre .next');
    let btnPre = document.querySelector('#chitietsp .nextpre .pre');
    let dots = document.querySelectorAll('#chitietsp .dots ul li');

    let i = 0;
    btnNext.addEventListener('click', () => {
        {
            i++;
            if (i > imgs.length - 1) {
                i = 0;
            }
            reloadSlide();
        }
    })

    btnPre.addEventListener('click', () => {
        {
            i--;
            if (i < 0) {
                i = imgs.length - 1;
            }
            reloadSlide();
        }
    })

    function reloadSlide() {
        let widthLeft = imgs[i].offsetLeft;
        slideList.style.transform = `translateX(-${widthLeft}px)`;

        let dotsActive = document.querySelector('#chitietsp .dots ul li.active');
        dotsActive.classList.remove('active');
        dots[i].classList.add('active');
    }

    function Dots() {
        dots.forEach((li, index) => {
            li.addEventListener('click', () => {
                i = index;
                reloadSlide();
            })
        })
    }
    Dots();
}

// chuyển đổi nav trong phần thông số
function chuyendoiNav() {
    let li_a = document.querySelectorAll('.thongsochinh .thongso_container .thongso_item:first-child nav ul li a');
    let danhgia_chitiet = document.querySelector('.thongsochinh .thongso_container .thongso_item:first-child .danhgia_chitiet');
    let video_review = document.querySelector('.thongsochinh .thongso_container .thongso_item:first-child .video_review');
    let binhluan = document.querySelector('.thongsochinh .thongso_container .thongso_item:first-child .binhluan');

    li_a.forEach((a, i) => {
        a.addEventListener("click", () => {
            let a_active = document.querySelector('.thongsochinh .thongso_container .thongso_item:first-child nav ul li a.active');
            a_active.classList.remove('active');
            a.classList.add('active');
            switch (i) {
                case 0:
                    danhgia_chitiet.classList.remove('hidden_content');
                    video_review.classList.add('hidden_content');
                    binhluan.classList.add('hidden_content');
                    break;
                case 1:
                    danhgia_chitiet.classList.add('hidden_content');
                    video_review.classList.remove('hidden_content');
                    binhluan.classList.add('hidden_content');
                    break;
                case 2:
                    danhgia_chitiet.classList.add('hidden_content');
                    video_review.classList.add('hidden_content');
                    binhluan.classList.remove('hidden_content');
                    break;
                default:
                    break;
            }
        })
    })
}

// Bật mở form đánh giá
function hienFormDanhGia() {
    let formDanhGia = document.querySelector('.thongsochinh .thongso_container .form_danhgia');
    let btn_danhgia = document.querySelector('.thongsochinh .thongso_container  .btn_danhgia');
    let btn_close = document.querySelector('.thongsochinh .thongso_container .form_danhgia div:first-child button');
    document.addEventListener("DOMContentLoaded", () => {
        btn_danhgia.addEventListener('click', () => {
            formDanhGia.style.display = `block`;
        });

        btn_close.addEventListener("click", () => {
            formDanhGia.style.display = `none`;
        })
    })

}

SlideViewSP();
chuyendoiNav();
hienFormDanhGia();