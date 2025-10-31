<?php
// Bài tập 2: Tìm giá trị lớn nhất trong mảng kết hợp

$products = array(
    "Laptop" => 1500,
    "Phone" => 800,
    "Tablet" => 1200
);

// In ra toàn bộ mảng sản phẩm
echo "<h3>Danh sách sản phẩm:</h3>";
foreach ($products as $product => $price) {
    echo "$product: $$price<br>";
}

// Tìm sản phẩm có giá cao nhất
$maxPrice = 0;
$productName = "";

foreach ($products as $product => $price) {
    if ($price > $maxPrice) {
        $maxPrice = $price;
        $productName = $product;
    }
}

// Hoặc có thể sử dụng hàm có sẵn:
// $maxPrice = max($products);
// $productName = array_search($maxPrice, $products);

echo "<h3>Kết quả:</h3>";
echo "The most expensive product is $productName with price \$$maxPrice";
?>