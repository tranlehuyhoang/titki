<link rel="icon" href="./favicon.ico">
<?php

// Thay đổi các thông số kết nối tới cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tiki";

// Tạo kết nối tới cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname, 3309);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối tới cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

$sql = "SELECT orders.id as order_id, orders.date, product.*
FROM orders
JOIN product ON orders.productid = product.id
ORDER BY orders.id DESC;
;  
";

// Thực thi truy vấn
$order = $conn->query($sql);

// Kiểm tra và hiển thị kết quả

if (isset($_SESSION['phone'])) {
    $phone = $_SESSION['phone'];

    // Truy vấn thông tin người dùng dựa trên số điện thoại
    $user_query = "SELECT * FROM user WHERE phone = '$phone'";
    $result = $conn->query($user_query);

    if ($result->num_rows > 0) {
        // Lấy thông tin người dùng từ kết quả truy vấn
        $user = $result->fetch_assoc();
        // Sử dụng thông tin người dùng
        $phone = $user['phone'];
        $balance = $user['balance'];
        $name = $user['name'];
        $account_number = $user['account_number'];
        $bank_name = $user['bank_name'];
        // Hiển thị thông tin người dùng
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirm_password'])) {
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Kiểm tra mật khẩu và xác nhận mật khẩu
    if ($password !== $confirm_password) {
        echo '<script>alert("Mật khẩu không khớp. Vui lòng nhập lại.");</script>';
    } else {
        // Kiểm tra xem người dùng đã tồn tại hay chưa
        $check_query = "SELECT * FROM user WHERE phone = '$phone'";
        $result = $conn->query($check_query);

        if ($result->num_rows > 0) {
            echo '<script>alert("Người dùng đã tồn tại.");</script>';
        } else {
            // Thêm người dùng vào cơ sở dữ liệu
            $sql = "INSERT INTO user (phone, password) VALUES ('$phone', '$password')";

            if ($conn->query($sql) === TRUE) {
                echo '<script>alert("Đăng ký thành công.");</script>';
                echo '<script>window.location.href = "./";</script>';
            } else {
                echo '<script>alert("Lỗi: ' . $sql . '<br>' . $conn->error . '");</script>';
            }
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Kiểm tra thông tin đăng nhập
    $login_query = "SELECT * FROM user WHERE phone = '$phone' AND password = '$password'";
    $result = $conn->query($login_query);

    if ($result->num_rows > 0) {
        // Đăng nhập thành công
        $_SESSION['phone'] = $phone; // Lưu số điện thoại vào session

        echo '<script>alert("Đăng nhập thành công.");</script>';
        echo '<script>window.location.href = "./";</script>';
    } else {
        // Đăng nhập thất bại
        echo '<script>alert("Số điện thoại hoặc mật khẩu không đúng.");</script>';
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order'])) {
    // Kiểm tra xem đã có đơn hàng có cùng "userid" với "phone" hay không
    $phone = $_SESSION['phone'];
    $checkOrderQuery = "SELECT *
    FROM orders
    WHERE userid = '$phone'
    ORDER BY id desc
    LIMIT 1;";


    $checkOrderResult = $conn->query($checkOrderQuery);

    $order = $checkOrderResult->fetch_assoc();
    if (isset($order['productid'])) {
        if ($order['productid'] == 3) {
            echo '<script>alert("Hoàn thành các nhiệm vụ để nhận thêm.");</script>';

            return;
        }
        $productid = $order['productid'] + 1;
    } else {
        $productid = 1;
    }

    // Thực hiện truy vấn để thêm đơn hàng vào cơ sở dữ liệu
    $insertOrderQuery = "INSERT INTO orders (userid, productid) VALUES ('$phone', '$productid')";

    if ($conn->query($insertOrderQuery) === TRUE) {
        echo '<script>window.location.href = "./order.php";</script>';
    } else {
        echo 'Lỗi: ' . $insertOrderQuery . '<br>' . $conn->error;
    }
}
// Gọi hàm đăng nhập
if (isset($_GET['order_id'])) {
    $id = $_GET['order_id'];
    $sql = "SELECT orders.id as order_id, orders.date, orders.status, product.*
FROM orders
JOIN product ON orders.productid = product.id
WHERE orders.id = '$id'
ORDER BY orders.id DESC";
    $orderDetail = $conn->query($sql);
}

?>