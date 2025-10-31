<?php
// Bài tập 1: Tạo mảng kết hợp chứa tên và tuổi của 5 người

$people = array(
    "John" => 25,
    "Alice" => 30,
    "Bob" => 22,
    "Tom" => 27,
    "Jane" => 21
);

// In ra toàn bộ mảng
echo "<h3>Toàn bộ mảng:</h3>";
echo "<pre>";
print_r($people);
echo "</pre>";

// In ra giá trị của từng phần tử
echo "<h3>Thông tin chi tiết:</h3>";
foreach ($people as $name => $age) {
    echo "Người tên $name có số tuổi là $age<br>";
}
?>