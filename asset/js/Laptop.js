// Hàm xử lý sự kiện click cho các mục lựa chọn
function clickItemSelect() {
    // Lấy tất cả các phần tử có class .item trong #header_laptop .filter_sanpham .filter
    let item = document.querySelectorAll('#header_laptop #box_Container .filter .item');
    let filter = document.querySelector('#header_laptop #box_Container .filter');
    // Lấy tất cả các phần tử có class .item_title trong #header_laptop #box_Container .filter .item
    let item_title = document.querySelectorAll('#header_laptop #box_Container .filter .item .item_title');

    // Lấy tất cả các phần tử có class .select trong #header_laptop #box_Container .filter
    let select = document.querySelectorAll('#header_laptop #box_Container .filter .item .select');

    // Lấy tất cả các phần tử có class .bi-chevron-down trong #header_laptop #box_Container .filter
    let icon = document.querySelectorAll('#header_laptop #box_Container .filter .bi-chevron-down');

    // Duyệt qua từng phần tử .item_title
    item_title.forEach((item_title, i) => {
        // Thêm sự kiện click cho mỗi phần tử .item_title
        item_title.addEventListener('click', () => {
            // Lấy giá trị thuộc tính overflow của phần tử .item tương ứng
            let overflow = window.getComputedStyle(item[i]).getPropertyValue("overflow");

            let itemHeight = item[i].offsetHeight;  //lấy chiều dài của phần tử item
            let filterHeight = filter.offsetHeight;  //lấy chiều dài của phần tử item
            let selectHeight = select[i].offsetHeight; //lấy chiều dài của phần tử item

            // Nếu giá trị overflow là hidden
            if (overflow == `hidden`) {
                // Mở rộng chiều cao tối đa của phần tử .item và hiển thị nội dung bị ẩn
                item[i].style.maxHeight = `calc(${itemHeight}px + 500px)`;
                item[i].style.overflow = `visible`;
                // Xoay icon 180 độ
                icon[i].style.transform = `rotate(180deg)`;
                // Thêm hiệu ứng chuyển đổi cho icon
                icon[i].style.transition = `all 0.25s ease-in`;
                //Khi bấm vào item thì hiển thị nội dung và tăng chiều cao của filter bằng với max-height + thêm chiều cao của item hiện ra + thêm 20px nữa cho cách hàng ra cho đẹp
                filter.style.maxHeight = `calc(${filterHeight + (selectHeight + 20)}px)`;
            } else {
                // Thu nhỏ chiều cao tối đa của phần tử .item và ẩn nội dung vượt quá
                item[i].style.maxHeight = `50px`;
                item[i].style.overflow = `hidden`;
                // Đặt lại vị trí ban đầu cho icon
                icon[i].style.transform = `rotate(0deg)`;
                // Thêm hiệu ứng chuyển đổi cho icon
                item[i].style.transition = `all 0.25s`; // set lại transition cho item
                filter.style.maxHeight = `calc(${filterHeight - (selectHeight + 20)}px)`;
            }
        })
    })
}

// laptop - header_laptop

clickItemSelect();
