<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/1ce18db8ca.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="homework2.css" />
    <title>Trang Chủ</title>

</head>

<body>
<?php
$navItems = [
    ["title"=> "GIỚI THIỆU","subitems"=>[]],
    ["title"=> "TIN TỨC & THÔNG BÁO","subitems"=>[]],
    ["title"=> "TUYỂN SINH","subitems"=>[]],
    ["title"=> "ĐÀO TẠO","subitems"=>[]],
    ["title"=> "NGHIÊN CỨU","subitems"=>[]],
    ["title"=> "ĐỐI NGOẠI","subitems"=>[]],
    ["title"=> "VĂN BẢN","subitems"=>[]],
    ["title"=> "SINH VIÊN","subitems"=>[]],
    ["title"=> "LIÊN HỆ","subitems"=>[]]
];

echo '<nav><ul>';
echo "<li class=' icon'>
    <i class='fa-solid fa-house'></i>
    </li>";
foreach ($navItems as $item) {
    echo "<li class='item'>{$item['title']} <ul class='subitems'>";
    foreach ($item['subitems'] as $subitem) {
        echo "<li class='list_small'>$subitem</li>";
    }
    echo "</ul> </li>";
}
echo '</ul></nav>';
?>

</body>
</html>