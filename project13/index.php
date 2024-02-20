<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ce18db8ca.js" crossorigin="anonymous"></script>
    <title>Danh sách khóa học</title>
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .courseAll {
            display: flex;
            flex-wrap: wrap;
        }

        .course {
            width: 30%;
            /*height: 400px;*/
            background-color: white;
            margin-bottom: 30px;
            margin-left: 15px;
            margin-right: 15px;
        }
        .course img{
            width: 100%;
        }
        .course h2 {
            color: gray;
            font-weight: bold;
            margin-top: 8px;
            margin-bottom: 16px;
            padding-left: 8px;

        }

        .course p {
            color: gray;
            margin-bottom: 16px;
            padding-left: 8px;
        }

        .icon {
            margin-right: 4px;
        }

        .title {
            margin-left: 5px;
            padding-left: 7px;
            border-left: 4px red solid;
            color: red;
            margin-bottom: 16px;
        }

        .course img {
            width: 100%;
        }

        h3,h2 {
            font-family: "Segoe UI Light";
        }
    </style>
</head>

<body>

<h3 class="title">
    Khóa học sắp khai giảng
</h3>
<div class="courseAll">
    <?php

    $courseAll = [
        [
            "image" =>"s1.png",
            'title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'tuition' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'time' => '2 - 2.5 năm'
        ],
        [
            "image"=>"s2.png",
            'title' => 'Lập trình viên Web Fullstack',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'tuition' => 'giảm 15% học phí',
            'start_date' => '2/2/24',
            'time' => '2 - 2.5 năm'
        ],
        [
            "image"=>"s1.png",
            'title' => 'Lập trình viên Java',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'tuition' => 'ưu đãi giảm 15% học phí',
            'start_date' => '2/2/24',
            'time' => '2 - 2.5 năm'
        ],
        [
            "image"=>"s2.png",
            'title' => 'Lập trình viên Front-end',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'tuition' => '9.000.000 VND',
            'start_date' => '2/2/24',
            'time' => '2 - 2.5 năm'
        ],
        [
            "image"=>"s1.png",
            'title' => 'Lập trình viên Back-end',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'tuition' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'time' => '2 - 2.5 năm'
        ],
        [
            "image"=>"s2.png",
            'title' => 'Data Engineer',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'tuition' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'time' => '2 - 2.5 năm'
        ],

    ];
    // Hiển thị danh sách khóa học
    foreach ($courseAll as $course) {
        echo '<div class="course">';
        echo '<img src="' . $course['image'] .'" />';
        echo '<h2>' . $course['title'] . '</h2>';
        echo '<p>' . $course['description'] . '</p>';
        echo ' <p><i class="fa-solid fa-gift icon"></i>Học phí: ' . $course['tuition'] . '</p>';
        echo '<p><i class="fa-solid fa-clock icon"></i>Khải giảng: ' . $course['start_date'] . '</p>';
        echo '<p><i class="fa-solid fa-bookmark icon"></i>Thời lượng: ' . $course['time'] . '</p>';
        echo '</div>';
    }
    ?>
</div>
</body>

</html>