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
    <title>Đơn hàng</title>
    <link rel="icon" href="./favicon.ico">

</head>

<body>
    <link rel="stylesheet" href="./css/app.ad1b5a95.css">
    <div id="app" class="QYZX">
        <div data-v-6eb58c04="">
            <div data-v-6eb58c04="" class="nav-box">
                <div data-v-6eb58c04="" class="van-nav-bar van-hairline--bottom"
                    style="color: rgb(255, 255, 255) !important;">
                    <div class="van-nav-bar__content">
                        <a href="./profile.php" class="van-nav-bar__left"><i
                                class="van-icon van-icon-arrow-left van-nav-bar__arrow">
                                <!---->
                            </i></a>
                        <div class="van-nav-bar__title van-ellipsis">Đơn hàng</div>
                    </div>
                </div>
                <div data-v-6eb58c04="" class="van-tabs van-tabs--line">
                    <div class="van-tabs__wrap">
                        <div role="tablist" class="van-tabs__nav van-tabs__nav--line">
                            <div role="tab" class="van-tab van-tab--active" aria-selected="true"><span
                                    class="van-tab__text van-tab__text--ellipsis">Tất cả các</span></div>
                            <div role="tab" class="van-tab"><span class="van-tab__text van-tab__text--ellipsis">Chưa
                                    giải quyết</span></div>
                            <div role="tab" class="van-tab"><span
                                    class="van-tab__text van-tab__text--ellipsis">Hoàn</span></div>
                            <div role="tab" class="van-tab"><span class="van-tab__text van-tab__text--ellipsis">Đông
                                    cứng</span></div>
                            <div class="van-tabs__line"
                                style="transform: translateX(47px) translateX(-50%); transition-duration: 0.3s;"></div>
                        </div>
                    </div>
                    <div class="van-tabs__content">
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </div>
            </div>
            <div data-v-6eb58c04="" style="overflow: hidden;">
                <div data-v-6eb58c04="" class="CapitalList" style="overflow: hidden auto; margin-top: 110px;">
                    <div data-v-6eb58c04="" class="van-pull-refresh">
                        <div class="van-pull-refresh__track" style="transition-duration: 0ms;">
                            <div class="van-pull-refresh__head"></div>
                            <div data-v-6eb58c04="" role="feed" class="van-list">
                                <?php if ($order->num_rows > 0) {
                                    while ($row = $order->fetch_assoc()) {
                                        // Hiển thị thông tin của từng đơn hàng
                                ?>
                                <a href="./orderDetails.php?order_id=<?php echo $row['order_id']; ?>"
                                    data-v-6eb58c04="">
                                    <div data-v-6eb58c04="">
                                        <div data-v-6eb58c04="" class="capital-item">
                                            <div data-v-6eb58c04="" class="img-right"><img data-v-6eb58c04=""
                                                    src="data:image/png;base64,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"
                                                    alt=""></div>
                                            <div data-v-6eb58c04="" class="header-block">
                                                <div data-v-6eb58c04="" class="img-box"><img data-v-6eb58c04=""
                                                        src="./img/tikiicon.ef1c71dc.png"" alt=""></div>
                                                <div data-v-6eb58c04="" class=" fz12 col-acc mg-lef10"> TIKI </div>
                                            </div>
                                            <div data-v-6eb58c04=""
                                                class="fz16 col-055 ellipsis-1 mg-tp10 mg-btm10 font-wgh"> váy yếm lụa
                                                dáng dài 3 màu xinh xắn </div>
                                            <div data-v-6eb58c04="" class="footer-block">
                                                <div data-v-6eb58c04="" class="img-box"><img data-v-6eb58c04=""
                                                        src="<?php echo $row['image']; ?>" alt=""></div>
                                                <div data-v-6eb58c04=""
                                                    class="flex-1 d-flex flex-column flex-justify-between">
                                                    <div data-v-6eb58c04="" class="d-flex flex-justify-between flex-1">
                                                        <div data-v-6eb58c04="">
                                                            <div data-v-6eb58c04="" class="fz12 col-acc"> nhiệm vụ
                                                            </div>
                                                            <div data-v-6eb58c04="" class="fz16 col-fa0">
                                                                <?php echo number_format($row['price']); ?> VND
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-v-6eb58c04="">
                                                        <div data-v-6eb58c04="" class="fz12 col-acc ellipsis-1">
                                                            SH2404010946574000 </div>
                                                        <div data-v-6eb58c04="" class="fz12 col-acc">
                                                            <?php echo $row['date']; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    }
                                }; ?>
                            </div>


                            <div class="van-list__finished-text">Không còn nữa</div>
                            <div class="van-list__placeholder"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div></div>
    </div>
</body>

</html>