<?php
if (is_array($tk)) {
    extract($tk);
}
?>
<div class="row">
    <div class="row formtitle">
        <h1>Cập nhật tài khoản khách hàng</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Tên khách hàng<br>
                <input type="text" name="user" value="<?= $user ?>">
            </div>
            <div class="row mb10">
                Đổi mật khẩu<br>
                <input type="text" name="pass" value="<?= $pass ?>">
            </div>
            <div class="row mb10">
                Email <br>
                <input type="text" name="email" value="<?= $email ?>">
            </div>
            <div class="row mb10">
                Địa chỉ <br>
                <input type="text" name="address" value="<?= $address ?>">
            </div>
            <div class="row mb10">
                Số điện thoại <br>
                <input type="text" name="tel" value="<?= $tel ?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input name="capnhat" type="submit" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=dskh"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>