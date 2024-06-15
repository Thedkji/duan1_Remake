function ShowModalImg() {
    $(document).ready(function () {
        let modalAnh = $('#taikhoancuatoi .modalEditAnh');
        let overlay = $('#taikhoancuatoi .overlay');
        $('#taikhoancuatoi .img').click(function (e) {
            e.preventDefault();
            if (modalAnh.css('display') == 'none') {
                modalAnh.show();
                overlay.show();
            }
        });

        $('#taikhoancuatoi .overlay').click(function (e) {
            e.preventDefault();
            if (modalAnh.css('display') == 'block') {
                modalAnh.hide();
                overlay.hide();
            }
        })
    });
}

ShowModalImg();