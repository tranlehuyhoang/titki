<?php session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    // Xóa session
    session_unset();
    session_destroy();

    // Chuyển hướng đến trang đăng nhập
    header("Location: ./login.php");
    exit();
}
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
    <title>Tài khoản</title>
    <link rel="icon" href="./favicon.ico">

</head>

<body>
    <link rel="stylesheet" href="./css/app.ad1b5a95.css">
    <div id="app" class="QYZX">
        <div style="overflow: hidden; height: 100%;">
            <div class="main" style="overflow: hidden auto;">
                <div>
                    <div>
                        <div class="fixed-box">
                            <div class="img-box"><img
                                    src="data:image/png;base64,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"
                                    class="img"></div>
                            <div class="line-ht">
                                <div class="d-flex flex-align-center">
                                    <div class="fz18 col-f96 mg-rgt5">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;"><?php echo $phone; ?></font>
                                        </font>
                                    </div>
                                    <div class="fz14 col-055 font-wgh">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">VIP1</font>
                                        </font>
                                    </div>
                                </div>
                                <div class="fz12 col-055 text-lef">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Mã mời：<?php echo $phone; ?></font>
                                    </font>
                                </div>
                            </div>
                        </div>
                        <div class="main-box">
                            <div class="item-block mg-btm10">
                                <div class="block-title">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Vốn lưu động</font>
                                    </font>
                                </div>
                                <div class="text-lef mg-tp10">
                                    <div class="d-flex flex-align-center flex-justify-between">
                                        <div class="fz12 col-055">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Số vốn lưu động</font>
                                            </font>
                                        </div>
                                        <div class="fz12 col-f96" style="cursor: pointer;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Vốn lưu động</font>
                                            </font>
                                        </div>
                                    </div>
                                    <div class="fz22 col-fa0 mg-tp5 mg-btm5">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                <?php echo number_format($balance); ?>VND</font>
                                        </font>
                                    </div>
                                </div>

                                <div class="btn-block">
                                    <a href="./withdraw.php" class="btn">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Nạp tiền</font>
                                        </font>
                                    </a>
                                    <a href="./deposit.php" class="btn">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Rút tiền</font>
                                        </font>
                                    </a>
                                </div>
                                <div class="text-block">
                                    <div>
                                        <div class="fz12 col-055 mg-btm5">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Đơn hàng hôm nay</font>
                                            </font>
                                        </div>
                                        <div class="fz18 col-f96">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">2</font>
                                            </font>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="fz12 col-055 mg-btm5">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Hoa hồng hôm nay</font>
                                            </font>
                                        </div>
                                        <div class="fz18 col-f96 text-rgt">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">1,174 VND</font>
                                            </font>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-block">
                                    <div>
                                        <div class="fz12 col-055 mg-btm5">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tất cả đơn hàng</font>
                                            </font>
                                        </div>
                                        <div class="fz18 col-f96">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">3</font>
                                            </font>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="fz12 col-055mg-btm5">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tổng hoa hồng</font>
                                            </font>
                                        </div>
                                        <div class="fz18 col-f96 text-rgt">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">0 VND</font>
                                            </font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-block">
                                <div class="block-title">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Thao tác nhanh</font>
                                    </font>
                                </div>
                                <div class="operation-list">
                                    <a href="./order.php" class="operation-item">
                                        <div class="image-box"><img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAAuCAYAAAB04nriAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAAPKADAAQAAAABAAAALgAAAACR/y2+AAADuUlEQVRoBe2aS2gTURSG/3MnTdJXYlOUVuxCNz660IJ9IF10pfioiGKWCq7cqTvRhdm4dqtgq7hQjLjRrhVRUbGoIC5UsFBF46PRUEgf6czx3NSUlnbu1I3ObXthMsk952b+7z5yz5wMIaDwI2c3yMnAc7eC3ViAe3jMBEZVIgfEr6Pz22kiTGlxZFLID51jAtln8rHCFks9oc78Dq3VF5gHUYMxyoG53gqoIJGxpqPUmbumfP2KaFsysBpSVR8sn3yB2Vnna7PRQNxiBnZspDJppjKR/5Q2tbXYtgJs8eAtSvoyGmF2dY/4A3vup0V1mS1O5JR5/IFr8BJEo7bwBOr0vDvaxxeYtqMIip0K/CIbHOLNr6h9qBwi+wJrDuoe74MT24dIzQuoyKQNbDMaiRjRxjxqN/ajNtVZqfeNpSsOs8+sY+9M5q/azG7/r99TJuP962uG7nrzRovvZyKob55XHzrlFUEfGjxKp8tbTqXKdC6D8eClKmxa3wri4zJpe+TWOWlqFB4b6Sn7VY67KPFVWrVrKEgbMWcUxjo6wJELAtsV1CCcdp6UQboHd+oEJfa+M2lU+L6lBnAO2gur8SgqRzucyBETrLYpxFfH5dwd5Bh6OyEh0G38a6DBpFWBJpVMh1qTkx02FhZJSwEBwNM0ssUukUIRYzBlNC6RLpiDUQG2Z9+dI3/eh0AOAXZ1xGhXnDyPU1dI7CxJdEzRxILmP5UKdYlxcXxucrLEVhKdOeQKOhDxLQq3PhfB3m2BfuvrZYfhCzxvgFrTxtk6HVp+zFYjleyRn/WzwrZNjio7GGVDlTUpr0Oi/RJGCpepJT1m0j5nkXM+m0S8bjPYWQ14c2ymL/l/NnLh0k+Q+57q93z/fzpWrhyeHpiZtvwmG0VLcoNE1zod0ixrwo4/WwijsrO+xmjpGa3tLQZ17fSPll67scRhyVKekf1sfVCj0NkZI7IN92O8cJ5S6YJJn2LOOogldwjoOSthNR2hUV4PI5rYb4LVNoV8nb5TOiCja/vfo2ugaGc5RWWgVohCP7ex1eBjiUmSAIwmdHTJlupfJJZ29DrWSQDLC5PM0ghKnr4n9i2VuyVfB+sMpGZ2noW0Lz3ghShn1S1bYOM0mNVB1r+VEdYJABjvMOyglAQAYwJU+mXSKwmA6jEwPTU5WWFjCCgPUqL3h0mvjPCDIhTfEOfHJsdw21indZ6h5F4J0lleu5yV8HJ33UYo56Q0OCT7WSqoYUjs+oHRYXli8CYmJi9Sqnc4SNdv7WffxLa6nMoAAAAASUVORK5CYII="
                                                class="image"></div>
                                        <div class="fz14 col-055 mg-tp10">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Đơn hàng</font>
                                            </font>
                                        </div>
                                    </a>
                                    <a href="./setting.php" class="operation-item">
                                        <div class="image-box"><img
                                                src="data:image/png;base64,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"
                                                class="image"></div>
                                        <div class="fz14 col-055 mg-tp10">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Sửa đổi</font>
                                            </font>
                                        </div>
                                    </a>
                                    <div class="operation-item">
                                        <div class="image-box"><img
                                                src="data:image/png;base64,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"
                                                class="image"></div>
                                        <div class="fz14 col-055 mg-tp10">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Hướng dẫn</font>
                                            </font>
                                        </div>
                                    </div>
                                    <div class="operation-item">
                                        <div class="image-box"><img
                                                src="data:image/png;base64,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"
                                                class="image"></div>
                                        <div class="fz14 col-055 mg-tp10">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Dịch vụ</font>
                                            </font>
                                        </div>
                                    </div>
                                    <div class="operation-item">
                                        <div class="image-box"><img src="./img/5.c210e37f.png" class="image"></div>
                                        <div class="fz14 col-055 mg-tp10">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Giới thiệu công ty</font>
                                            </font>
                                        </div>
                                    </div>
                                    <div class="operation-item">
                                        <div class="image-box"><i class="van-icon van-icon-service"
                                                style="font-size: 36px;">
                                                <!---->
                                            </i></div>
                                        <div class="fz14 col-055 mg-tp10">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Dịch vụ trực tuyến</font>
                                            </font>
                                        </div>
                                    </div>
                                </div>
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
                    <a href="./task.php" class="van-col van-col--8">
                        <div><i class="van-icon van-icon-notes-o">
                                <!---->
                            </i>
                            <p>Nhiệm vụ</p>
                        </div>
                    </a>
                    <a href="./profile.php" class="van-col van-col--8 selected">
                        <div><i class="van-icon van-icon-friends-o">
                                <!---->
                            </i>
                            <p>Của tôi</p>
                        </div>
                    </a>
                </div>
            </div>
            <a target="“_blank”" href="129804" style="visibility: hidden;">1</a>
        </div>
        <div></div>
    </div>
</body>

</html>