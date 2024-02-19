<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/1ce18db8ca.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        nav {
            position: fixed;
            top: 30px;
            left: 0;
            right: 0;
        }

        nav>ul {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: darkblue;
            padding: 0 7px;

        }

        li {
            list-style: none;
            color: white;
            cursor: pointer;
            font-family: "Segoe UI";
        }

        .item {
            border-left: 1px solid white;
            position: relative;
            padding: 8px;
            transition: 0.4s;
        }
        .item:hover {
            background-color: deepskyblue;
        }
        .subitems {
            position: absolute;
            top: 100%;
            left: 0;
            width: 180px;
            display: none;

        }

        .subitems> .list_small {
            background-color: cornflowerblue;
            padding: 4px 7px;
            color: #fff;
            border-top: 1px solid darkslateblue;
            /*border-radius: 5px;*/
        }
        .item:hover>.subitems, .list_small {
            display: block;
            /*transition: 0.4s;*/
        }

        .icon {
            padding-right: 10px;
            border: none

        }
    </style>
</head>

<body>
<?php
$list_item = [
    "Đại học chính quy",
    "Vừa học vừa làm",
    "tiến sĩ"
];
$navItems = [
    ["title"=> "GIỚI THIỆU","subitems"=>$list_item],
    ["title"=> "TIN TỨC & THÔNG BÁO","subitems"=>$list_item],
    ["title"=> "TUYỂN SINH","subitems"=>$list_item],
    ["title"=> "ĐÀO TẠO","subitems"=>$list_item],
    ["title"=> "NGHIÊN CỨU","subitems"=>$list_item],
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