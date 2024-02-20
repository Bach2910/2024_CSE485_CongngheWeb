<!doctype html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/1ce18db8ca.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
<?php
$listItems = [
     "Tin tức",
     "Thông báo"
];

$navItems = [
    ["title"=> "GIỚI THIỆU","subitems"=>[]],
    ["title"=> "TIN TỨC & THÔNG BÁO","subitems"=>$listItems],
    ["title"=> "TUYỂN SINH","subitems"=>[]],
    ["title"=> "ĐÀO TẠO","subitems"=>[]],
    ["title"=> "NGHIÊN CỨU","subitems"=>[]],
    ["title"=> "ĐỐI NGOẠI","subitems"=>[]],
    ["title"=> "VĂN BẢN","subitems"=>[]],
    ["title"=> "SINH VIÊN","subitems"=>[]],
    ["title"=> "LIÊN HỆ","subitems"=>[]]
];
echo '<nav><ul>';
echo "<li>
    <i class='fa-solid fa-house'></i>
    </li>";
foreach ($navItems as $item) {
    echo "<li class='item'> {$item['title']} <ul class='subitems'>";
    foreach ($item['subitems'] as $subitem) {
        echo "<li class='list'>$subitem</li>";
    }
    echo "</ul> </li>";
}
echo '</ul></nav>';
?>

</body>
</html>