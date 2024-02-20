<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ce18db8ca.js" crossorigin="anonymous"></script>

    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        ul {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: darkblue;
            padding: 8px;
        }

        li {
            list-style: none;
            border-left: 1px solid white;
            text-transform: uppercase;
            padding: 0 8px;
            color: white;
            cursor: pointer;
        }
    </style>
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