<?php
// kq_register.php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = isset($_POST["fullname"]) ? $_POST["fullname"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $confirm = isset($_POST["confirm_password"]) ? $_POST["confirm_password"] : "";

    if ($password === $confirm) {
        // In thông tin người đăng ký
        echo "Đăng ký thành công. Thông tin người dùng:<br>";
        echo "Họ và tên: " . htmlspecialchars($fullname) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        // Lưu ý: không in mật khẩu ra giao diện trong thực tế.
    } else {
        echo "Hai mật khẩu không khớp.";
    }
} else {
    echo "Vui lòng gửi form bằng phương thức POST.";
}
?>
