// Trang chủ - slide_show_tintuc

// Slide Show
function SlideShow() {
    let slide_list = document.querySelector(".slide_show_tin_tuc .slide_list");

    let items = document.querySelectorAll(".slide_show_tin_tuc .item");

    let next = document.querySelector(".slide_show_tin_tuc .next");
    let pre = document.querySelector(".slide_show_tin_tuc .pre");

    let dots = document.querySelectorAll(".slide_show_tin_tuc .dots ul li");

    let active = 0; //biến giả định mỗi lần ng dùng click
    let lengthItem = items.length - 1; //độ dài mảng của item
    // Xử lý khi người dùng bấm next
    next.onclick = () => {
        active++;
        if (active > lengthItem) {
            active = 0;
        }
        ReloadSlide();
    };
    // Xử lý khi người dùng bấm pre
    pre.onclick = () => {
        active--;
        if (active < 0) {
            active = lengthItem;
        }
        ReloadSlide();
    };

    //Slide Auto
    let slideAuto = setInterval(next.onclick, 8000);

    // Hàm xử lý
    function ReloadSlide() {
        let leftWidth = items[active].offsetLeft; //lấy ra chiều dài từ mép bên trái đến cuối phần tử items

        slide_list.style.transform = `translateX(-${leftWidth}px)`; //dịch chuyển 1 khoảng bằng với chiều dài phần tử items được active

        // Xử lý khi chuyển đổi ảnh sẽ active dots tương ứng
        let oldDots = document.querySelector(".slide_show_tin_tuc .dots ul li.active");

        oldDots.classList.remove("active");
        dots[active].classList.add("active");

        //   dừng tạm thời và bắt nó đếm lại từ đầu ví dụ slide đang đếm dc 7 giây rồi nhưng ng dùng bấm để xem ảnh bộ đếm sẽ đếm lại từ đầu
        clearInterval(slideAuto);
        let slideAuto = setInterval(next.onclick, 8000);
    }

    // Xử lý các dots khi ng dùng bấm vào để chuyển về ảnh tương ứng
    dots.forEach((li, index) => {
        li.onclick = () => {
            active = index;
            ReloadSlide();
        };
    });
}
//Đổi viền cho tin tức
function HieuUngTinTuc() {
    let tin_tuc_list_item = document.querySelectorAll(".tin_tuc_list_item");

    
    tin_tuc_list_item.forEach((value, index) => {
        value.addEventListener('mouseover', () => {
            console.log(index);
            if(!index == 0){
                tin_tuc_list_item[0].classList.remove('tin_tuc_list_item-active');
            }
        });

        value.addEventListener('mouseout', () => {
            tin_tuc_list_item[0].classList.add('tin_tuc_list_item-active');
        });
    });
   

}



//  function Hover_Items_MayTinh() {
//     let listProductsItem = document.querySelectorAll('.maytinh__xachtay .list__products__item');
//     let thongso__muahang = document.querySelectorAll('.maytinh__xachtay .thongso__muahang');

//     listProductsItem.forEach((value, index) => {
//         value.addEventListener('mouseover', () => {
//             thongso__muahang[index].style.display = "block";

//             value.style.boxShadow = "0 0 5px rgb(174, 173, 173)";
//             value.style.background = "white";
//             value.style.borderRadius = "10px";
//             value.style.position = "relative";
//             value.style.zIndex = "2";    //khi hover vào thì sẽ đè lên phần tử khác
//         })

//         value.addEventListener('mouseout', () => {
//             thongso__muahang[index].style.display = "none";

//             value.style.boxShadow = "none";
//             value.style.background = "none";
//             value.style.borderRadius = "none";
//             value.style.position = "static";
//         })
//     });

// }

// Chạy các hàm
// Trang chủ - slide_show_tintuc
SlideShow();
HieuUngTinTuc();


