<?php
// kq_contact.php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = isset($_POST["fullname"]) ? $_POST["fullname"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
    $message = isset($_POST["message"]) ? $_POST["message"] : "";

    echo "Dữ liệu đã nhận từ người dùng:<br>";
    echo "Họ và tên: " . htmlspecialchars($fullname) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Số điện thoại: " . htmlspecialchars($phone) . "<br>";
    echo "Nội dung liên hệ: <br>" . nl2br(htmlspecialchars($message));
} else {
    echo "Vui lòng gửi form bằng phương thức POST.";
}
?>
