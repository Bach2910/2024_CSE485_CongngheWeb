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
$listItems = [
    "Tuyển sinh đại học",
    "Tuyển sinh thạc sĩ",
    "Tuyển sinh tiến sĩ",
    "Vừa học vừa làm"
];
$navItems = [
    [
            "title"=> "GIỚI THIỆU",
            "subitems"=>[]
    ],
    [
            "title"=> "TIN TỨC & THÔNG BÁO",
            "subitems"=>$listItems
    ],
    [
            "title"=> "TUYỂN SINH",
            "subitems"=>$listItems
    ],
    [
            "title"=> "ĐÀO TẠO",
            "subitems"=>$listItems
    ],
    [
            "title"=> "NGHIÊN CỨU",
            "subitems"=>$listItems
    ],
    [
            "title"=> "ĐỐI NGOẠI",
            "subitems"=>$listItems
    ],
    [       "title"=> "VĂN BẢN",
            "subitems"=>[]
    ],
    [
            "title"=> "SINH VIÊN",
            "subitems"=>[]
    ],
    [
            "title"=> "LIÊN HỆ",
            "subitems"=>[]
    ]
];

echo '<nav><ul>';
echo "<li class='icon'>
         <i class='fa-solid fa-house'></i>
    </li>";
foreach ($navItems as $item) {
    echo "<li class='item'>{$item['title']}  <ul class='list-items'>";
    foreach ($item['subitems'] as $item_drop) {
        echo "<li class='drop-items'>$item_drop</li>";
    }
    echo "</ul> </li>";
}
echo '</ul></nav>';
?>

</body>

</html>