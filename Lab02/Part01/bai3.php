<?php
// Bài tập 3: Quản lý thông tin sinh viên - Theo code mẫu

// Tạo mảng kết hợp lưu thông tin sinh viên
$students = array(
    "SV001" => array(
        "name" => "Nguyễn Văn An",
        "dob" => "2000-05-15",
        "average_score" => 8.5
    ),
    "SV002" => array(
        "name" => "Trần Thị Bình",
        "dob" => "1999-08-22",
        "average_score" => 7.2
    ),
    "SV003" => array(
        "name" => "Lê Văn Cường",
        "dob" => "2001-02-17",
        "average_score" => 9.0
    ),
    "SV004" => array(
        "name" => "Phạm Thị Dung",
        "dob" => "2000-11-30",
        "average_score" => 6.8
    ),
    "SV005" => array(
        "name" => "Hoàng Văn Em",
        "dob" => "1999-06-05",
        "average_score" => 5.5
    )
);

// Hàm xếp loại sinh viên
function classify($average_score) {
    if ($average_score < 3.5) {
        return "Kém";
    } elseif ($average_score < 5) {
        return "Yếu";
    } elseif ($average_score < 6.5) {
        return "Trung bình";
    } elseif ($average_score < 8) {
        return "Khá";
    } else {
        return "Giỏi";
    }
}

echo "========== QUẢN LÝ THÔNG TIN SINH VIÊN ==========<br><br>";

// 1. In toàn bộ thông tin sinh viên
echo "<h3>1. TOÀN BỘ THÔNG TIN SINH VIÊN:</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse;'>";
echo "<tr style='background-color: #4CAF50; color: white;'>";
echo "<th>MSSV</th><th>Họ và tên</th><th>Ngày sinh</th><th>Điểm trung bình</th></tr>";

foreach ($students as $mssv => $info) {
    echo "<tr>";
    echo "<td>$mssv</td>";
    echo "<td>{$info['name']}</td>";
    echo "<td>{$info['dob']}</td>";
    echo "<td>{$info['average_score']}</td>";
    echo "</tr>";
}
echo "</table><br><br>";

// 2. Thêm một sinh viên mới
echo "<h3>2. THÊM SINH VIÊN MỚI:</h3>";
$newStudentID = "SV006";
$students[$newStudentID] = array(
    "name" => "Đỗ Thị Phương",
    "dob" => "2000-03-20",
    "average_score" => 8.8
);
echo "✓ Đã thêm sinh viên: <b>$newStudentID - {$students[$newStudentID]['name']}</b><br>";
echo "Thông tin: Ngày sinh: {$students[$newStudentID]['dob']}, Điểm TB: {$students[$newStudentID]['average_score']}<br><br>";

// 3. Tính điểm trung bình của toàn bộ sinh viên
echo "<h3>3. ĐIỂM TRUNG BÌNH CỦA TOÀN BỘ SINH VIÊN:</h3>";
$totalScore = 0;
$studentCount = count($students);

foreach ($students as $student) {
    $totalScore += $student['average_score'];
}

$overallAverage = $totalScore / $studentCount;
echo "Tổng số sinh viên: <b>$studentCount</b><br>";
echo "Tổng điểm: <b>$totalScore</b><br>";
echo "Điểm trung bình chung: <b>" . number_format($overallAverage, 2) . "</b><br><br>";

// 4. In ra sinh viên có điểm trung bình cao nhất
echo "<h3>4. SINH VIÊN CÓ ĐIỂM TRUNG BÌNH CAO NHẤT:</h3>";
$maxScore = 0;
$topStudentID = "";
$topStudentInfo = array();

foreach ($students as $mssv => $info) {
    if ($info['average_score'] > $maxScore) {
        $maxScore = $info['average_score'];
        $topStudentID = $mssv;
        $topStudentInfo = $info;
    }
}

echo "<div style='background-color: #fffacd; padding: 10px; border-left: 4px solid #ffd700;'>";
echo "<b>MSSV:</b> $topStudentID<br>";
echo "<b>Họ và tên:</b> {$topStudentInfo['name']}<br>";
echo "<b>Ngày sinh:</b> {$topStudentInfo['dob']}<br>";
echo "<b>Điểm trung bình:</b> <span style='color: red; font-size: 18px;'>{$topStudentInfo['average_score']}</span><br>";
echo "</div><br>";

// 5. Xếp loại sinh viên
echo "<h3>5. XẾP LOẠI SINH VIÊN:</h3>";
echo "Biết rằng: Kém < 3.5, 3.5 ≤ Yếu < 5, 5 ≤ TB < 6.5, 6.5 ≤ Khá < 8, Giỏi ≥ 8<br><br>";

echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse;'>";
echo "<tr style='background-color: #2196F3; color: white;'>";
echo "<th>MSSV</th><th>Họ và tên</th><th>Ngày sinh</th><th>Điểm TB</th><th>Xếp loại</th></tr>";

foreach ($students as $mssv => $info) {
    $classification = classify($info['average_score']);
    
    // Màu sắc theo xếp loại
    $rowColor = "";
    if ($classification == "Giỏi") {
        $rowColor = "background-color: #90EE90;";
    } elseif ($classification == "Khá") {
        $rowColor = "background-color: #ADD8E6;";
    } elseif ($classification == "Trung bình") {
        $rowColor = "background-color: #FFFFE0;";
    } elseif ($classification == "Yếu") {
        $rowColor = "background-color: #FFB6C1;";
    } else {
        $rowColor = "background-color: #FFB6C1;";
    }
    
    echo "<tr style='$rowColor'>";
    echo "<td>$mssv</td>";
    echo "<td>{$info['name']}</td>";
    echo "<td>{$info['dob']}</td>";
    echo "<td>{$info['average_score']}</td>";
    echo "<td><b>$classification</b></td>";
    echo "</tr>";
}
echo "</table><br>";

// Thống kê theo xếp loại
echo "<h3>THỐNG KÊ THEO XẾP LOẠI:</h3>";
$stats = array("Giỏi" => 0, "Khá" => 0, "Trung bình" => 0, "Yếu" => 0, "Kém" => 0);

foreach ($students as $info) {
    $classification = classify($info['average_score']);
    $stats[$classification]++;
}

echo "<ul>";
foreach ($stats as $rank => $count) {
    if ($count > 0) {
        echo "<li><b>$rank:</b> $count sinh viên</li>";
    }
}
echo "</ul>";
?>