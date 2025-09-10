<?php
// Câu 8: Viết function giải phương trình bậc 2
// Câu 9: Viết function in ra màn hình chữ chữ nhật rỗng có kích thước 5*7 sư dụng dấu sao (dùng vòng lặp)
// Câu 10: Viết function tính trung bình cộng của mảng


// Tạo hàm giaiPhuongTrinhBac2 với ba tham số $a, $b, $c
function giaiPhuongTrinhBac2($a, $b, $c)
{
    if ($a == 0) {
        if ($b == 0) {
            if ($c == 0) {
                return "Phương trình có vô số nghiệm.";
            } else {
                return "Phương trình vô nghiệm.";
            }
        } else {
            $nghiem = -$c / $b;
            return "Phương trình có một nghiệm: x = " . $nghiem;
        }
    } else {
        $delta = $b * $b - 4 * $a * $c;
        if ($delta < 0) {
            return "Phương trình vô nghiệm.";
        } elseif ($delta == 0) {
            $nghiem = -$b / (2 * $a);
            return "Phương trình có nghiệm kép: x1 = x2 = " . $nghiem;
        } else {
            $nghiem1 = (-$b + sqrt($delta)) / (2 * $a);
            $nghiem2 = (-$b - sqrt($delta)) / (2 * $a);
            return "Phương trình có hai nghiệm phân biệt: x1 = " . $nghiem1 . ", x2 = " . $nghiem2;
        }
    }
}


// Tạo hàm inChuNhatRong với hai tham số $dong và $cot
function inChuNhatRong($dong, $cot) {
    for ($i = 1; $i <= $dong; $i++) {
        for ($j = 1; $j <= $cot; $j++) {
            if ($i == 1 || $i == $dong || $j == 1 || $j == $cot) {
                echo "* ";
            } else {
                echo "  ";
            }
        }
        echo "<br>"; 
    }
}

// Tạo hàm tinhTrungBinhCong của một mảng số
function tinhTrungBinhCong($mang) {
    $tong = array_sum($mang); 
    $soLuong = count($mang); 
    if ($soLuong == 0) {
        return 0; 
    }
    return $tong / $soLuong; 
}

// Gọi hàm và hiển thị kết quả
echo giaiPhuongTrinhBac2(1, -3, 2);
echo "<br><br>";
inChuNhatRong(5, 7);
echo "<br>";
echo "Trung bình cộng của mảng là: " . tinhTrungBinhCong([1, 2, 3, 4, 5]); 
echo "<br>";
echo "Trung bình cộng của mảng rỗng là: " . tinhTrungBinhCong([]); 
?>

