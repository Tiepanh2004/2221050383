<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - Buoi 1</title>
</head>
<body>
    <?php
        // 1. Cú pháp in ra màn hình
        echo "Hello world! <br>";

        echo "PHP <br>";

        //2. Biến
        // Cú pháp : $ + tên biến = giá trị của biến
        $ten = "Tiep Anh";
        $tuoi = "21";

        echo "Xin chào " . $ten . " " .  $tuoi . " tuoi " . "<br>";

        //3. Hằng
        define("soPi", "3.14");
        echo soPi . "<br>";

        //4. Phân biệt ' ' và " " 
        echo '$ten' . "<br>";
        echo "$ten" . "<br>";

        // 5. Chuỗi
        #5.1 Kiểm tra độ dài của chuỗi
        echo strlen($ten) . "<br>";

        #5.2 Đếm số từ
        echo  str_word_count($ten) . "<br>";

        #5.3 Tìm kiếm ký tự trong chuỗi
        echo strpos($ten, "A") . "<br>"; //Nếu có chữ A nó sẽ trả ra vị trí thứ trong chuỗi

        #5.4 Thay thế kí tự trong chuỗi
        echo str_replace("Anh", "An", $ten) . "<br>";

        //6. Toán tử
        $soThuNhat = 10;
        $soThuHai = 5;

        // + - * / 
        echo $soThuNhat + $soThuHai . "<br>";

        # += -= *= /= %=
        // echo $soThuNhat %= $soThuHai;

        # So sánh == != > < >= <= ===

        //7. Câu điều kiện
        // if ("Điều kiện") {
        // logic
        //}
        // else if ("Điều kiện") {
        //logic
        // }
        // else {
        //logic
        // }

        // Ví dụ: Kiểm tra tổng của số thư nhất và số thứ hai
        // nếu < 15 thì hiển thị tổng là .... nhỏ hơn 15
        // nếu = 15 thì hiển thị tổng là 15
        // nếu > 15 thì hiển thị tổng là ... lớn hơn 15
        
        $tong = $soThuNhat + $soThuHai;
        if ($tong < 15) {
            echo "Tổng là " . $tong . " nhỏ hơn 15";
        } else if ($tong == 15) {
            echo "Tổng là " . $tong . "<br>";
        } else {
            echo "Tổng là " . $tong . " lớn hơn 15";
        }

        //8. Switch Case
        $color = "red";
        switch ($color) {
            case "red";
            echo "is red";
            break;
            case "blue";
            echo "is blue";
            break;
            default:
            echo "no color";
            break;
        }

        //9. for
        for ($i=0; $i < 100; $i++) {
            echo $i . "<br>";
        }
    ?>
</body>
</html>