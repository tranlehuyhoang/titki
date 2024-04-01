<?php session_start();
if (isset($_SESSION['phone'])) {
} else {
    echo '<script>window.location.href = "./login.php";</script>';
}; ?>
<?php include_once('./server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhiệm vụ</title>
    <link rel="icon" href="./favicon.ico">

</head>

<body>
    <link rel="stylesheet" href="./css/app.ad1b5a95.css">
    <div id="app" class="QYZX">
        <div style="overflow: hidden; height: 100%;">
            <div class="van-overlay" style="display: none;">
                <div class="van-loading van-loading--spinner" style="margin-top: calc(-100px + 50vh);"><span
                        class="van-loading__spinner van-loading__spinner--spinner"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></span>
                </div>
                <p style="margin-top: 20px; color: rgb(255, 255, 255); font-size: 18px;"> Tạo lệnh... </p>
            </div>
            <div class="nav-box">
                <div class="van-nav-bar van-hairline--bottom" style="color: rgb(255, 255, 255) !important;">
                    <div class="van-nav-bar__content">
                        <div class="van-nav-bar__title van-ellipsis">Gửi đơn hàng</div>
                    </div>
                </div>
            </div>
            <div class="main" style="overflow: hidden auto; height: calc(100% - 100px); margin-top: 45px;">
                <div class="task-main"
                    style="background-image: url(&quot;./img/task_bg.e98bdee7.png&quot;); background-size: 100%; background-repeat: no-repeat;">
                    <div class="main-top">
                        <div class="flex-1 line-ht">
                            <div class="fz12">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Bộ sưu tập Kho báu</font>
                                </font>
                            </div>
                            <div class="fz12">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Cùng nhau kiếm tiền hoa hồng</font>
                                </font>
                            </div>
                        </div>
                        <div class="fz12 col-ff" style="width: 25%;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Ngày qua ngày Kiếm tiền</font>
                            </font>
                        </div>
                    </div>
                    <div class="main-bottom">
                        <div class="fz12">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Hôm nay vẫn còn cơ hội đặt hàng</font>
                            </font>
                        </div>
                        <div class="gift-box">
                            <div class="img-box"><img src="./img/task_gift.ead2de28.png" alt=""></div>
                            <div class="img-box"><img src="./img/task_gift.ead2de28.png" alt=""></div>
                            <div class="img-box"><img src="./img/task_gift.ead2de28.png" alt=""></div>
                        </div>
                    </div>
                    <div class="main-footer">
                        <div class="footer-box">
                            <div class="top-block">
                                <div class="img-box">
                                    <div class="img-text">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">thành viên bình thường</font>
                                        </font>
                                    </div><img alt="" src="./img/vip1.e924a59b.png" class="img">
                                </div>
                                <div class="mg-lef15">
                                    <div class="mg-btm10">
                                        <div class="fz12 col-acc">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Thành viên áp dụng</font>
                                            </font>
                                        </div>
                                        <div class="fz14 font-wgh">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Thành viên áp dụng VIP1 trở lên
                                                </font>
                                            </font>
                                        </div>
                                    </div>
                                    <div class="mg-btm10">
                                        <div class="fz12 col-acc">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Phạm vi số lượng</font>
                                            </font>
                                        </div>
                                        <div class="fz14 font-wgh">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">0 VND To 99999999999VND</font>
                                            </font>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="fz12 col-acc">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Phí hoa hồng</font>
                                            </font>
                                        </div>
                                        <div class="fz14 font-wgh">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">15% tổng số vốn đặt hàng</font>
                                            </font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-block">
                                <div class="fz12 mg-tp5 mg-btm5">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Tài khoản của tôi</font>
                                    </font>
                                </div>
                                <div class="term-box">
                                    <div class="fz14">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Cấp độ thành viên：VIP1</font>
                                        </font>
                                    </div><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAB3klEQVRYR+3Wy07CQBQG4P8Ud0KfwMQHkcveldKaYCKi0bjVRzFujZd4i9HC3iVtfBGNL1C6hWOGSIS2QzqdUlh01tPp1//MmSlhxQetuA8FULdCRYJFgroJ6D6/Enuw7DZtEF0CGBqMM7/e/Zh82NKBpmsdMHAPoCRQTPgKat3NlQCGcWMg4ydodDeWDjS9ZpuZ7ibJ/YGGDG4F9Z6zVKAMR8THfq33ON1Yue9BKQ448uvdp3DX5wpUxQlsbsA0uNyAprfXZh5FGoIkZc11D+rgIgmafWubDboWrc+Mi6DuvOpcVbq4CLDsWt8ETA7JEUp8MtjqiVNeeZiefcjMt+FzLklZpSUOAcW8VEgpzqCOX3WeVb52posrXnMXTG8A1qYWUUJmlZz0Jln3rH2D8RBBEp0Oao7oROnIMrm5V10aZCyOMaSSelkTHTPlT7tFQxb34my5Y5KU4kAdv6G255SuuiTISt/qgHAz060iuQxwiW6Ssmu3CPFJYsSjReISAcUkKRLgSHIl49Cvvr+oHCXz5ib+WZAg/9ceN0S2uMQJThRS5IJwysDYci8QlwooHqq41g4DV+P/SYPOg6rTy2rPKR0zi3qpyrqJm0Rl0SznFkDdNIsEiwR1E9B9/hdcXww4Q5VScAAAAABJRU5ErkJggg=="
                                        alt="">
                                </div>
                                <div class="term-box">
                                    <div class="fz14">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Giới hạn cập nhật：0/20</font>
                                        </font>
                                    </div><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAB3klEQVRYR+3Wy07CQBQG4P8Ud0KfwMQHkcveldKaYCKi0bjVRzFujZd4i9HC3iVtfBGNL1C6hWOGSIS2QzqdUlh01tPp1//MmSlhxQetuA8FULdCRYJFgroJ6D6/Enuw7DZtEF0CGBqMM7/e/Zh82NKBpmsdMHAPoCRQTPgKat3NlQCGcWMg4ydodDeWDjS9ZpuZ7ibJ/YGGDG4F9Z6zVKAMR8THfq33ON1Yue9BKQ448uvdp3DX5wpUxQlsbsA0uNyAprfXZh5FGoIkZc11D+rgIgmafWubDboWrc+Mi6DuvOpcVbq4CLDsWt8ETA7JEUp8MtjqiVNeeZiefcjMt+FzLklZpSUOAcW8VEgpzqCOX3WeVb52posrXnMXTG8A1qYWUUJmlZz0Jln3rH2D8RBBEp0Oao7oROnIMrm5V10aZCyOMaSSelkTHTPlT7tFQxb34my5Y5KU4kAdv6G255SuuiTISt/qgHAz060iuQxwiW6Ssmu3CPFJYsSjReISAcUkKRLgSHIl49Cvvr+oHCXz5ib+WZAg/9ceN0S2uMQJThRS5IJwysDYci8QlwooHqq41g4DV+P/SYPOg6rTy2rPKR0zi3qpyrqJm0Rl0SznFkDdNIsEiwR1E9B9/hdcXww4Q5VScAAAAABJRU5ErkJggg=="
                                        alt="">
                                </div>
                                <div class="term-box">
                                    <div class="fz14">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Số tiền còn
                                                lại：<?php echo number_format($balance); ?>VND</font>
                                        </font>
                                    </div><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAB3klEQVRYR+3Wy07CQBQG4P8Ud0KfwMQHkcveldKaYCKi0bjVRzFujZd4i9HC3iVtfBGNL1C6hWOGSIS2QzqdUlh01tPp1//MmSlhxQetuA8FULdCRYJFgroJ6D6/Enuw7DZtEF0CGBqMM7/e/Zh82NKBpmsdMHAPoCRQTPgKat3NlQCGcWMg4ydodDeWDjS9ZpuZ7ibJ/YGGDG4F9Z6zVKAMR8THfq33ON1Yue9BKQ448uvdp3DX5wpUxQlsbsA0uNyAprfXZh5FGoIkZc11D+rgIgmafWubDboWrc+Mi6DuvOpcVbq4CLDsWt8ETA7JEUp8MtjqiVNeeZiefcjMt+FzLklZpSUOAcW8VEgpzqCOX3WeVb52posrXnMXTG8A1qYWUUJmlZz0Jln3rH2D8RBBEp0Oao7oROnIMrm5V10aZCyOMaSSelkTHTPlT7tFQxb34my5Y5KU4kAdv6G255SuuiTISt/qgHAz060iuQxwiW6Ssmu3CPFJYsSjReISAcUkKRLgSHIl49Cvvr+oHCXz5ib+WZAg/9ceN0S2uMQJThRS5IJwysDYci8QlwooHqq41g4DV+P/SYPOg6rTy2rPKR0zi3qpyrqJm0Rl0SznFkDdNIsEiwR1E9B9/hdcXww4Q5VScAAAAABJRU5ErkJggg=="
                                        alt="">
                                </div>
                            </div>
                            <div class="btn-box">
                                <form method="POST" action="" style="  width: 100%;  ">
                                    <input type="text" name="order" hidden>

                                    <button type="submit" class="notAllow btn"
                                        style="line-height: 30px; width: 100%;  ">
                                        <div>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Nhận ngay</font>
                                            </font>
                                        </div>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="footer-box">
                            <div class="fz12 text-lef mg-tp10 mg-btm5">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Ghi chú: Tất cả Đơn hàng sẽ được hệ thống
                                        TiKi tự động phân phối ngẫu nhiên !</font>
                                </font>
                            </div>
                            <div class="fz12 text-lef mg-btm10">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">-Giới hạn đơn hàng tùy thuộc vào cấp bậc
                                        thành viên của bạn.</font>
                                </font>
                            </div>
                            <div class="fz12 text-lef mg-btm10">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">-Vốn lưu động trong tài khoản của bạn cần có
                                        tương đương với giá trị đơn hàng mới có thể xử lí đơn.</font>
                                </font>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Footer">
                <div class="van-row" style="margin-top: 8px;">
                    <a href="./index.php" class="van-col van-col--8">
                        <div><i class="van-icon van-icon-shopping-cart-o">
                                <!---->
                            </i>
                            <p>Trang Chủ</p>
                        </div>
                    </a>
                    <a href="./task.php" class="van-col van-col--8 selected">
                        <div><i class="van-icon van-icon-notes-o">
                                <!---->
                            </i>
                            <p>Nhiệm vụ</p>
                        </div>
                    </a>
                    <a href="./profile.php" class="van-col van-col--8 ">
                        <div><i class="van-icon van-icon-friends-o">
                                <!---->
                            </i>
                            <p>Của tôi</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div></div>
    </div>
</body>

</html>