<?php
// kq_quadratic.php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = isset($_POST["a"]) ? $_POST["a"] : "";
    $b = isset($_POST["b"]) ? $_POST["b"] : "";
    $c = isset($_POST["c"]) ? $_POST["c"] : "";

    if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
        echo "Vui lòng nhập số hợp lệ cho a, b, c.";
        exit;
    }

    $a = floatval($a);
    $b = floatval($b);
    $c = floatval($c);

    // Nếu a == 0 -> phương trình bậc 1
    if (abs($a) < 1e-12) {
        if (abs($b) < 1e-12) {
            if (abs($c) < 1e-12) {
                echo "Phương trình vô số nghiệm.";
            } else {
                echo "Phương trình vô nghiệm.";
            }
        } else {
            $x = -$c / $b;
            echo "Phương trình bậc 1. Nghiệm: x = " . $x;
        }
        exit;
    }

    $delta = $b*$b - 4*$a*$c;

    if ($delta > 0) {
        $sqrt = sqrt($delta);
        $x1 = (-$b + $sqrt) / (2*$a);
        $x2 = (-$b - $sqrt) / (2*$a);
        echo "Phương trình có 2 nghiệm phân biệt:<br>";
        echo "x1 = " . $x1 . "<br>";
        echo "x2 = " . $x2;
    } elseif (abs($delta) < 1e-12) {
        $x = -$b / (2*$a);
        echo "Phương trình có nghiệm kép: x = " . $x;
    } else {
        // nghiệm phức
        $sqrt = sqrt(abs($delta));
        $real = -$b / (2*$a);
        $imag = $sqrt / (2*$a);
        echo "Phương trình có 2 nghiệm phức:<br>";
        echo "x1 = " . $real . " + " . $imag . "i<br>";
        echo "x2 = " . $real . " - " . $imag . "i";
    }
} else {
    echo "Vui lòng gửi form bằng phương thức POST.";
}
?>
