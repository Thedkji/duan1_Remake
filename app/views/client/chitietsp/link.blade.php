<section id="link">
    <div>
        <img src="<?= Url('asset/global/img/logo/becurant.png') ?>" alt="" width="15px" height="16px">
        <a href="<?= Url('client/trang_chu') ?>">Trang chủ > </a>
        <a href="<?= Url('client/laptop/1') ?>">Laptop ></a>
        <a href="<?= Url('client/chitietsp/').$listSanPham['id_SanPham'] ?>">{{ $listSanPham['ten_SanPham'] }}</a>
    </div>
</section>