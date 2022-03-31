<!DOCTYPE html>
<html>

<body>

    <?php
    //PHP SYNTAX

    echo 'Hello World';
    //Note
    /*Note*/
    //Khai báo biến
    $sinhvien = '';
    $_sinh_vien = '';
    $sinh_vien90 = '';
    //Gán giá trị biến
    $hello = "Xin chao";
    echo "<br>";
    //Xuất ra màn hình
    echo $hello;
    echo "<br>";
    //Khai báo hằng
    /* Tạo một hằng số có tên là SDT và gán giá trị cho nó là 0909090909*/
    define('SDT', '0909090909');
    echo SDT; // xuất ra màn hình giá trị của hằng.
    echo "<br>";

    //PHP VARIABLES

    $a = 5; //Phạm vi local
    $b = 7;
    echo $a + $b;
    echo "<br>";

    //PHP STRINGS

    //Lấy độ dài của chuỗi "Hello World!"
    echo strlen("Hello World VN!");
    echo "<br>";
    //Đảo ngược chuỗi "Hello World!".
    echo strrev("Hello World!");
    echo "<br>";
    //Thay thế từ "World" bằng từ "Dolly".
    $oldtxt = "Hello World!";
    $newtxt = str_replace("World", "Dolly", $oldtxt);
    echo $newtxt;
    echo "<br>";

    //PHP OPERATORS

    // *   / 
    // ==  !=

    //PHP IF...ELSE

    //Đầu ra "Hello World" nếu $a lớn hơn $b.
    $a = 50;
    $b = 10;
    if ($a > $b) {
        echo "Hello World && a > b";
    }
    echo "<br>";
    //Đầu ra "Hello World" nếu $a không bằng $b.
    $a = 50;
    $b = 10;
    if ($a != $b) {
        echo "Hello World && a != b";
    }
    echo "<br>";
    //Đầu ra "Có" nếu $ a bằng $ b, ngược lại thì xuất "Không".
    $a = 50;
    $b = 10;
    if ($a == $b) {
        echo "Yes";
    } else {
        echo "No";
    }
    echo "<br>";
    //Xuất ra "1" nếu $ a bằng $ b, in ra "2" nếu $ a lớn hơn $ b, ngược lại xuất ra "3".
    $a = 50;
    $b = 10;
    if ($a == $b) {
        echo "1";
    } elseif ($a > $b) {
        echo "2";
    } else {
        echo "3";
    }
    echo "<br>";

    //PHP SWITCH

    //Tạo một câu lệnh switch sẽ xuất ra "Red" nếu $ color là "red" và "Green" nếu $ color là "green".
    $color = 'red';
    switch ($color) {
        case 'red':
            echo "Red";
            break;
        case 'green':
            echo "Green";
            break;
    }
    echo "<br>";
    //Add a section that will output "Neither" if $color is neither "red" nor "green".
    $color2 = '';
    switch ($color2) {
        case "red":
            echo "Hello";
            break;
        case "green":
            echo "Welcome";
            break;
        default:
            echo "Neither";
    }
    echo "<br>";

    //PHP LOOPS

    //Xuất ra $ i với điều kiện $ i nhỏ hơn 6. 
    //Vòng lặp while sẽ kiểm tra điều kiện trước rồi thực hiện câu lệnh bên trong vòng lặp
    $i = 1;

    while ($i < 6) {
        echo $i . ' - ';
        $i++;
    }
    echo "<br>";
    //Xuất ra $ i với điều kiện $ i nhỏ hơn 6.
    //vòng lặp do while thì ngược lại sẽ thực hiện câu lệnh bên trong vòng lặp trước rồi mới kiểm tra điều kiện.
    //Nếu điều kiện đúng thì sẽ thực hiện tiếp vòng lặp kế tiếp, nếu điều kiện sai thì sẽ dừng vòng lặp. 
    //Vòng lặp do while trong php luôn luôn thực hiện ít nhất một lần lặp vì nó thực hiện trước rồi mới kiểm tra điều kiện.
    $i = 1;

    do {
        echo $i . ' - ';
        $i++;
    } while ($i < 6);
    echo "<br>";
    //Tạo một vòng lặp chạy từ 0 đến 9.

    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }
    echo "<br>";
    //Lặp lại các mục trong mảng $ Colors.
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        echo $x . ' - ';
    }
    echo "<br>";

    //PHP FUNCTIONS

    //Tạo một hàm có tên là myFunction.

    function myFunction()
    {
        echo "Hello World!"; //phạm vi local
    }
    //Gọi execute(thực thi) một hàm có tên là myFunction.
    myFunction();
    //Bên trong một hàm có hai tham số, hãy in tham số đầu tiên.
    function myFunction2($fname, $lname)
    {
        echo $fname;
    }
    echo "<br>";
    //Để hàm trả về giá trị thứ hai.
    function myFunction3($fname, $lname)
    {

        return $lname;
    }

    //PHP ARRAYS

    //Sử dụng đúng hàm để xuất ra số lượng mục trong một mảng.
    $fruits = array("Apple", "Banana", "Orange");
    echo count($fruits);
    echo "<br>";
    //Xuất ra mục thứ hai trong mảng $ fruit.
    $fruits = array("Apple", "Banana", "Orange");
    echo $fruits[1];
    echo "<br>";
    //Tạo một mảng liên kết chứa tuổi của Peter, Ben và Joe.
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    //Ở đây bạn thấy một mảng kết hợp. Đầu ra "tuổi" của Ben.
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    echo "Ben is " . $age['Ben'] . " years old.";
    echo "<br>";
    //Lặp qua một mảng kết hợp và xuất ra khóa và giá trị.
    foreach ($age as $x => $y) {
        echo "Key = " . $x . ", Value = " . $y;
    }
    echo "<br>";
    //Sử dụng phương thức mảng đúng để sắp xếp mảng $ color theo thứ tự bảng chữ cái.
    $colors = array("red", "green", "blue", "yellow");
    sort($colors);
    foreach ($colors as $value) {
        echo $value . " - ";
    }
    echo "<br>";
    //Sử dụng phương pháp mảng đúng để sắp xếp mảng $ color giảm dần theo thứ tự bảng chữ cái.
    $colors = array("red", "green", "blue", "yellow");
    rsort($colors);
    foreach ($colors as $value) {
        echo $value . " - ";
    }
    echo "<br>";
    //Sử dụng phương thức mảng đúng để sắp xếp mảng $ age theo các giá trị.
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    asort($age);
    foreach ($age as $value) {
        echo $value . " - ";
    }
    echo "<br>";
    
    //PHP DATAS

    //Sử dụng chức năng ngày chính xác để xuất ra ngày trong tuần của ngày hôm nay (thứ hai, thứ ba, v.v.).

   


















    ?>

</body>

</html>