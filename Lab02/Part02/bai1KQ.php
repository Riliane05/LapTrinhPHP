<?php
// kq_login.php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    // So sánh với dữ liệu mẫu
    if ($username === "admin" && $password === "123456") {
        echo "Đăng nhập thành công";
    } else {
        echo "Sai thông tin";
    }
} else {
    echo "Vui lòng gửi form bằng phương thức POST.";
}
?>
