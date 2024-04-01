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
    <title>Rút tiền</title>
    <link rel="icon" href="./favicon.ico">

</head>

<body>
    <link rel="stylesheet" href="./css/app.ad1b5a95.css">
    <div id="app" class="QYZX">
        <div data-v-68cd18ac="">
            <div data-v-68cd18ac="" class="van-nav-bar van-hairline--bottom"
                style="color: rgb(255, 255, 255) !important;">
                <div class="van-nav-bar__content">
                    <a href="./profile.php" class="van-nav-bar__left"><i
                            class="van-icon van-icon-arrow-left van-nav-bar__arrow">
                            <!---->
                        </i></a>
                    <div class="van-nav-bar__title van-ellipsis">rút tiền</div>
                </div>
            </div>
            <div data-v-68cd18ac="" class="pd-top">
                <div data-v-68cd18ac="">
                    <div data-v-68cd18ac="" class="withdraw-box">
                        <div data-v-68cd18ac="" class="item-block mg-btm15">
                            <div data-v-68cd18ac="" class="van-cell van-field">
                                <div data-v-68cd18ac="" class="van-cell__title van-field__label"><label
                                        data-v-68cd18ac="" id="van-field-1-label" for="van-field-1-input">VND</label>
                                </div>
                                <div data-v-68cd18ac="" class="van-cell__value van-field__value">
                                    <div data-v-68cd18ac="" class="van-field__body"><input data-v-68cd18ac=""
                                            type="text" inputmode="decimal" id="van-field-1-input"
                                            placeholder="Nhập số tiền rút tiền" aria-labelledby="van-field-1-label"
                                            class="van-field__control"></div>
                                </div>
                            </div>
                            <div data-v-68cd18ac="" class="fz12 col-999 mg-lef15 mg-tp15"> Số dư tài khoản：VND10457
                            </div>
                        </div>
                        <div data-v-68cd18ac="" class="item-block">
                            <div data-v-68cd18ac="" class="item-box">
                                <div data-v-68cd18ac="" class="fz14 col-89a"> TÊN ĐĂNG NHẬP</div>
                                <div data-v-68cd18ac="">
                                    <div data-v-68cd18ac="" class="fz14 text-rgt">0987654321</div>
                                </div>
                            </div>
                            <div data-v-68cd18ac="" class="item-box">
                                <div data-v-68cd18ac="" class="fz14 col-89a"> Tài khoản ngân hàng </div>
                                <div data-v-68cd18ac="">
                                    <div data-v-68cd18ac="" class="fz14 text-rgt"> 096********217</div>
                                </div>
                            </div>
                            <div data-v-68cd18ac="" class="item-box">
                                <div data-v-68cd18ac="" class="fz14 col-89a"> Tên ngân hàng </div>
                                <div data-v-68cd18ac="">
                                    <div data-v-68cd18ac="" class="fz14 text-rgt">CTG</div>
                                </div>
                            </div>
                            <div data-v-68cd18ac="" class="item-box">
                                <div data-v-68cd18ac="" class="fz14 col-89a">Tên thật</div>
                                <div data-v-68cd18ac="">
                                    <div data-v-68cd18ac="" class="fz14 text-rgt">0987654321</div>
                                </div>
                            </div>
                            <div data-v-68cd18ac="" class="item-box">
                                <div data-v-68cd18ac="" class="fz14 col-89a">Mật khẩu quỹ</div>
                                <div data-v-68cd18ac="">
                                    <div data-v-68cd18ac="" class="fz14 text-rgt">
                                        <div data-v-68cd18ac="" class="van-cell van-field" style="padding: 0px;">
                                            <div data-v-68cd18ac="" class="van-cell__value van-field__value">
                                                <div data-v-68cd18ac="" class="van-field__body"><input
                                                        data-v-68cd18ac="" type="password" id="van-field-2-input"
                                                        placeholder="Mật khẩu quỹ"
                                                        class="van-field__control van-field__control--right"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-68cd18ac="" class="fz12 text-rgt line-ht col-f41"> Số tiền rút tối thiểu:
                                50000VND </div>
                            <div data-v-68cd18ac="" class="fz12 text-rgt line-ht col-f41"> Số tiền rút tối đa:
                                999999999VND </div>
                        </div>
                        <div data-v-68cd18ac="" class="btn-box">
                            <div data-v-68cd18ac="" class="btn" style="line-height: 30px;">
                                <div data-v-68cd18ac=""> Rút tiền ngay lập tức </div>
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