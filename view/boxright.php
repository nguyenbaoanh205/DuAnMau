<div class="row mb">
    <div class="boxtitle">Tai khoan</div>
    <div class="boxcontent formtaikhoan ">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <div class="row mb10">
                Xin chào <strong><?= $user ?></strong>,<br> đã đăng nhập thành công
            </div>

            <div class="row mb10">
                <li>
                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                </li>
                <?php if ($role==1) { ?>
                <li>
                    <a href="admin/index.php">Đăng nhập Admin</a>
                </li>
                <?php } ?>
                <li>
                    <a href="index.php?act=thoat">Đăng xuất</a>
                </li>
            </div>
        <?php
            } else {
        ?>
            <form action="index.php?act=dangnhap" method="post">
                <div class="row mb10">
                    Tên đăng nhập<br>
                    <input type="text" name="user"><br>
                </div>

                <div class="row mb10">
                    Mật khẩu<br>
                    <input type="password" name="pass"><br>
                </div>

                <div class="row mb10">
                    <input type="checkbox" name="">
                    Ghi nhớ tài khoản<br>
                </div>

                <div class="row mb10">
                    <button type="submit" name="dangnhap">Đăng nhập</button>
                </div>
            </form>

            <li>
                <a href="#">Quên mật khẩu</a>
            </li>
            <li>
                <a href="index.php?act=dangky">Đăng ký thành viên</a>
            </li>
        <?php } ?>
    </div>
</div>
<div class="row mb ">
    <div class="boxtitle">Danh muc</div>
    <div class="boxcontent2 menudoc ">
        <ul>
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
            }
            ?>
            <!-- <li><a href="#">Đồng hồ</a></li>
                    <li><a href="#">Laptop</a></li>
                    <li><a href="#">Điện thoại</a></li>
                    <li><a href="#">Balo</a></li>
                    <li><a href="#">Đồng hồ</a></li>
                    <li><a href="#">Laptop</a></li>
                    <li><a href="#">Điện thoại</a></li>
                    <li><a href="#">Balo</a></li> -->
        </ul>
    </div>
    <div class="boxfooter searchbox searchbox1">
        <form class="search" action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw" placeholder="Tìm kiếm sản phẩm">
            <input type="submit" name="timkiem" value="Tìm kiếm">
        </form>
    </div>
</div>
<div class="row ">
    <div class="boxtitle">Top 10 yeu thich</div>
    <div class="row boxcontent">
        <?php
        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $img = $img_path . $img;
            echo '<div class="row mb10 top10">
                            <a href="' . $linksp . '"><img src="' . $img . '" alt=""></a>
                            <a href="' . $linksp . '">' . $name . '</a>
                        </div>';
        }
        ?>

        <!-- <div class="row mb10 top10">
                    <img src="view/images/anh0.jpg" alt="">
                    <a href="#">Sir Rodney mama</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/anh2.jpg" alt="">
                    <a href="#">Cate</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/anh1.jpg" alt="">
                    <a href="#">Tiger</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/anh0.jpg" alt="">
                    <a href="#">333</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/anh1.jpg" alt="">
                    <a href="#">Sir Rodney mama</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/anh2.jpg" alt="">
                    <a href="#">Cate</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/anh0.jpg" alt="">
                    <a href="#">Tiger</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/anh2.jpg" alt="">
                    <a href="#">333</a>
                </div> -->
    </div>
</div>