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
    <title>Cài đặt</title>
    <link rel="icon" href="./favicon.ico">

</head>

<body>
    <link rel="stylesheet" href="./css/app.ad1b5a95.css">
    <div id="app" class="QYZX">
        <div>
            <div class="van-nav-bar van-hairline--bottom" style="color: rgb(255, 255, 255) !important;">
                <div class="van-nav-bar__content">
                    <a href="./profile.php" class="van-nav-bar__left"><i
                            class="van-icon van-icon-arrow-left van-nav-bar__arrow">
                            <!---->
                        </i></a>
                    <div class="van-nav-bar__title van-ellipsis">Sửa đổi</div>
                </div>
            </div>
            <div class="van-cell-group van-hairline--top-bottom">

            </div>
            <form method="POST" action="">
                <button class="van-button van-button--info van-button--normal"
                    style="width: 80%; margin-top: 65px; border-radius: 15px;" name="logout">
                    <div class="van-button__content">
                        <span class="van-button__text">Đăng xuất</span>
                    </div>
                </button>
            </form>
        </div>
        <div></div>
    </div>
</body>

</html>