<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ce18db8ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <title>Danh sách khóa học</title>

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