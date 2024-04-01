<?php include_once('./server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="icon" href="./favicon.ico">

</head>

<body>
    <link rel="stylesheet" href="./css/app.ad1b5a95.css">
    <div id="app" class="QYZX">
        <div style="position: relative;">
            <a href="./login.php" class="leftreturn"><i class="van-icon van-icon-arrow-left"
                    style="color: rgb(13, 194, 83); font-size: 30px;">
                    <!---->
                </i></a>
            <form method="post" action="" class="login-block" style="top: 2rem;">
                <div class="titlePage" style="margin-top: 20px;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"> ĐĂNG KÝ </font>
                    </font>
                </div>
                <div class="login-box">
                    <div>
                        <!---->
                        <div>
                            <span class="title">Điện thoại</span>
                            <div class="field van-cell van-field">
                                <div class="van-field__left-icon">
                                    <i class="icon">
                                        <img src="./img/download (1).png" class="van-icon__image">
                                        <!---->
                                    </i>
                                </div>
                                <div class="van-cell__value van-cell__value--alone van-field__value">
                                    <div class="van-field__body">
                                        <input type="tel" required name="phone" minlength="8" pattern="[0-9]{8,}"
                                            placeholder="Vui lòng nhập số điện thoại của bạn"
                                            class="van-field__control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="title">Mật khẩu</span>
                            <div class="field van-cell van-field">
                                <div class="van-field__left-icon">
                                    <i class="icon">
                                        <img src="./img/download (2).png" class="van-icon__image">
                                        <!---->
                                    </i>
                                </div>
                                <div class="van-cell__value van-cell__value--alone van-field__value">
                                    <div class="van-field__body">
                                        <input type="password" id="password" name="password"
                                            placeholder="Vui lòng nhập mật khẩu của bạn" class="van-field__control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="title">Xác nhận mật khẩu</span>
                            <div class="field van-cell van-field">
                                <div class="van-field__left-icon">
                                    <i class="icon">
                                        <img src="./img/download (2).png" class="van-icon__image">
                                        <!---->
                                    </i>
                                </div>
                                <div class="van-cell__value van-cell__value--alone van-field__value">
                                    <div class="van-field__body">
                                        <input type="password" id="confirm_password" name="confirm_password"
                                            placeholder="Vui lòng nhập lại mật khẩu" class="van-field__control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---->

                        <!---->
                        <div role="radiogroup" class="van-radio-group">
                            <div role="radio" tabindex="-1" aria-checked="false" class="van-radio">
                                <div class="van-radio__icon van-radio__icon--round">
                                    <i class="van-icon van-icon-success">
                                        <!---->
                                    </i>
                                </div>
                                <span class="van-radio__label">
                                    <div style="float: left;">Tôi đồng ý với </div> &nbsp; <span class="regBtn"
                                        style="display: inline;">thỏa thuận người dùng</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div style="margin: 15px 0px 10px;"><button
                                class="van-button van-button--info van-button--normal van-button--round subbtn grayBg"
                                onclick="checkPassword()">
                                <div class="van-button__content"><span class="van-button__text">Tiếp tục</span></div>
                            </button></div>
                    </div>
                </div>
            </form>

            <script>
            function checkPassword() {
                var password = document.getElementById("password").value;
                var confirm_password = document.getElementById("confirm_password").value;

                if (password !== confirm_password) {
                    alert("Mật khẩu không khớp. Vui lòng nhập lại.");
                    return false;
                }
            }
            </script>
        </div>
        <div></div>
    </div>
</body>

</html>