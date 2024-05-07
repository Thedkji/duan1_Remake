function slideSanPhamLienQuan() {
    let slide_list = document.querySelector('#sanphamlienquan .slide_sanpham .slide_list');
    let slide_list_item = document.querySelectorAll('#sanphamlienquan .slide_sanpham .slide_list a');
    let pre = document.querySelector('#sanphamlienquan .slide_sanpham .nextpre .pre');
    let next = document.querySelector('#sanphamlienquan .slide_sanpham .nextpre .next');
    let active = 0;
    pre.addEventListener('click', () => {
        active--;
        if (active < 0) {
            active = slide_list_item.length - 1;
        }
        reloadSlide();
    })

    next.addEventListener('click', () => {
        active++;
        if (active > slide_list_item.length - 1) {
            active = 0;
        }
        reloadSlide();
    })

    function reloadSlide() {
        let widthLeft = slide_list_item[active].offsetLeft;
        slide_list.style.transform = `translateX(-${widthLeft}px)`;
        console.log(widthLeft);
    }
}
slideSanPhamLienQuan();
