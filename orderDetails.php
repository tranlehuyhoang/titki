<?php session_start();
if (isset($_SESSION['phone'])) {
} else {
    echo '<script>window.location.href = "./login.php";</script>';
}; ?>
<?php include_once('./server.php') ?>
<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn hàng chi tiết</title>
    <link rel="icon" href="./favicon.ico">

</head>

<body>
    <link rel="stylesheet" href="./css/app.ad1b5a95.css">
    <div id="app" class="QYZX">
        <div>
            <div class="van-nav-bar van-hairline--bottom" style="color: rgb(255, 255, 255) !important;">
                <div class="van-nav-bar__content">
                    <a href="./order.php" class="van-nav-bar__left"><i
                            class="van-icon van-icon-arrow-left van-nav-bar__arrow">
                            <!---->
                        </i></a>
                    <div class="van-nav-bar__title van-ellipsis">Chi tiết đơn hàng</div>
                </div>
            </div> <?php if ($orderDetail->num_rows > 0) {
                        while ($row = $orderDetail->fetch_assoc()) {
                            // Hiển thị thông tin của từng đơn hàng
                    ?>
            <div class="pd-top">
                <div>
                    <div class="detail-main">
                        <div style="position: absolute; right: -2px; top: -4px; width: 90px; height: auto;"><img
                                src="  <?php echo $row['status'] == 1 ? "data:image/png;base64,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" : "data:image/png;base64,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"; ?> "
                                alt="" style="width: 100%;"></div><img alt="" src="<?php echo $row['image']; ?>"
                            class="imgs">
                        <div class="fz16 col-055 font-wgh"> <?php echo $row['name']; ?> </div>
                        <div class="d-flex flex-align-center mg-tp20"><img src="./img/tikiicon.ef1c71dc.png" alt=""
                                class="imgs-icon">
                            <div class="fz12 col-acc mg-lef10">TIKI</div>
                        </div>
                        <div class="money-box">
                            <div class="d-flex flex-align-center flex-justify-between line-ht money-item">
                                <div class="fz16 col-0c5"> Giá trị đơn hàng </div>
                                <div class="fz16 col-fa0"> VND <?php echo number_format($row['price']); ?> </div>

                            </div>
                            <div class="d-flex flex-align-center flex-justify-between line-ht money-item">
                                <div class="fz16 col-0c5">Tiền lợi nhuận</div>
                                <div class="fz16 col-fa0"> VND <?php echo number_format($row['commission']); ?> </div>
                            </div>
                            <div class="d-flex flex-align-center flex-justify-between line-ht money-item">
                                <div class="fz16 col-0c5">Số tiền phải trả lại</div>
                                <div class="fz16 col-fa0"> VND
                                    <?php echo number_format($row['commission'] + $row['price']); ?> </div>
                            </div>
                            <div class="d-flex flex-align-center flex-justify-between line-ht money-item"
                                style="display: none;">
                                <div class="fz16 col-0c5"> Số tiền phải trả lại </div>
                                <div class="fz16 col-fa0">VND108,724,450</div>
                            </div>
                            <div class="d-flex flex-align-center flex-justify-between line-ht money-item">
                                <div class="fz16 col-0c5">Mã đơn hàng</div>
                                <div class="fz16 col-fa0"> SH2404010946574000 </div>
                            </div>
                            <div class="d-flex flex-align-center flex-justify-between line-ht money-item">
                                <div class="fz16 col-0c5">Thời gian nhận</div>
                                <div class="fz16 col-fa0"> <?php echo ($row['date']); ?></div>
                            </div>
                            <div class="d-flex flex-align-center flex-justify-between line-ht money-item">
                                <div class="fz16 col-0c5">Trạng thái đặt hàng</div>
                                <div class="fz16 col-fa0">
                                    <?php echo $row['status'] == 1 ? "Thành công" : "Đang chờ xử lí"; ?> </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-box " style="display:   <?php echo $row['status'] == 1 ? "none" : "flex"; ?>  ;">
                        <div class="btn" style="line-height: 30px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    <div>Gửi đơn</div>
                                </font>
                            </font>
                        </div>
                    </div>
                </div>
            </div> <?php
                        }
                    }; ?>
        </div>
        <div></div>
    </div>
</body>

</html>