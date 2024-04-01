<?php session_start();
if (!isset($_SESSION['phone'])) {
} else {
    echo '<script>window.location.href = "./";</script>';
}; ?>
<?php include_once('./server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="icon" href="./favicon.ico">

</head>

<body>
    <link rel="stylesheet" href="./css/app.ad1b5a95.css">
    <div id="app" class="QYZX">
        <div class="login" style="background: url(&quot;./img/headbg2x.1c5aca6e.png&quot;) 0% 0% / 100% no-repeat;">
            <div class="login-block"><img src="./img/login.ef1c71dc.png" style="width: 100px;">
                <form action="" method="post" class="login-box" enctype="multipart/form-data">
                    <input type="text" name="login" hidden>
                    <div>
                        <div><span class="title">TÊN ĐĂNG NHẬP</span>
                            <div class="field van-cell van-field">
                                <div class="van-field__left-icon"><i class="icon"><img src="./img/download (1).png"
                                            class="van-icon__image">
                                        <!---->
                                    </i></div>
                                <div class="van-cell__value van-cell__value--alone van-field__value">
                                    <div class="van-field__body"> <input type="tel" required name="phone" minlength="8"
                                            pattern="[0-9]{8,}" placeholder="Vui lòng nhập số điện thoại của bạn"
                                            class="van-field__control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div><span class="title">Mật khẩu</span>
                            <div class="field van-cell van-field">
                                <div class="van-field__left-icon"><i class="icon"><img src="./img/download (2).png"
                                            class="van-icon__image">
                                        <!---->
                                    </i></div>
                                <div class="van-cell__value van-cell__value--alone van-field__value">
                                    <div class="van-field__body"> <input type="password" id="password" name="password"
                                            placeholder="Vui lòng nhập mật khẩu của bạn" class="van-field__control">
                                    </div>
                                </div>
                            </div>
                        </div><a href="./register.php" class="regBtn">ĐĂNG KÝ</a>
                    </div>
                    <div data-v-43f62a9c="">
                        <div style="margin: 15px 0px 10px;"><button type="submit"
                                class="van-button van-button--info van-button--normal van-button--round subbtn redBg">
                                <div class="van-button__content"><span class="van-button__text">Đăng nhập</span></div>
                            </button></div>
                    </div>
                </form>
            </div>

        </div>
        <div></div>
    </div>
</body>

</html>