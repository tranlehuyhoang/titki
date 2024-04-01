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

    // Hàm xử lý đăng nhập

    // Kiểm tra thông tin đăng nhập
    $login_query = "SELECT * FROM user WHERE phone = '$phone' AND password = '$password'";
    $result = $conn->query($login_query);

    if ($result->num_rows > 0) {
        // Đăng nhập thành công
        echo '<script>alert("Đăng nhập thành công.");</script>';
        echo '<script>window.location.href = "./";</script>';
    } else {
        // Đăng nhập thất bại
        echo '<script>alert("Số điện thoại hoặc mật khẩu không đúng.");</script>';
    }
}

// Gọi hàm đăng nhập


$conn->close();
?>