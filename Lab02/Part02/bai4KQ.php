<?php
// kq_rectangle.php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $length = isset($_POST["length"]) ? $_POST["length"] : "";
    $width = isset($_POST["width"]) ? $_POST["width"] : "";

    if (is_numeric($length) && is_numeric($width)) {
        $l = floatval($length);
        $w = floatval($width);
        $area = $l * $w;
        echo "Chiều dài: $l <br>";
        echo "Chiều rộng: $w <br>";
        echo "Diện tích hình chữ nhật = " . $area;
    } else {
        echo "Vui lòng nhập số hợp lệ cho chiều dài và chiều rộng.";
    }
} else {
    echo "Vui lòng gửi form bằng phương thức POST.";
}
?>
