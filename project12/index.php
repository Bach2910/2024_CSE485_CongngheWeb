<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ce18db8ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <title>Document</title>

</head>

<body>
<?php
$navItems = [
    "GIỚI THIỆU",
    "TIN TỨC & THÔNG BÁO",
    "TUYỂN SINH",
    "ĐÀO TẠO",
    "NGHIÊN CỨU",
    "ĐỐI NGOẠI",
    "VĂN BẢN",
    "SINH VIÊN",
    "LIÊN HỆ"
];
echo '<nav><ul>';
echo "<li class='item icon'>
            <i class='fa-solid fa-house'></i>
      </li>";
foreach ($navItems as $item) {
    echo "<li>$item</li>";
}
echo '</ul></nav>';
?>

</body>

</html>