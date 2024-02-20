<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/1ce18db8ca.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
</head>

<body>
<h2 class="title">
    KHÓA HỌC SẮP KHAI GIẢNG
    </h2>
<div class="courseAll">
    <?php
    $courseAll = [
        [
            "image" =>"picture1.png",
            'title' => 'Lập trình viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration_time' => '2 - 2.5 năm'
        ],
        [
            "image"=> "picture2.png",
            'title' => 'Lập trình viên Web Fullstack',
            'description' => 'Khóa học phù hợp với người mới bắt đầu lập trình hoặc người chuyển nghề.Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
            'fee' => 'Ưu đãi giảm 15% học phí',
            'start_date' => '2/2024',
            'duration_time' => '6 tháng'
        ],
        [
            "image"=>"picture3.png",
            'title' => 'Lập trình viên Java Web Fullstack',
            'description' => ' Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, JSP, Spring Framework, EJB,... ',
            'fee' => 'Ưu đãi giảm 15% học phí',
            'start_date' => '2/2024',
            'duration_time' => '236 giờ'
        ],
        [
            "image"=>"picture4.png",
            'title' => 'Lập trình viên Front-end',
            'description' => ' PHP là một trong các ngôn ngữ thiết kế web mạnh nhất. Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework.',
            'fee' => '9.600.000 VNĐ',
            'start_date' => '5/2/2024',
            'duration_time' => '36 giờ'
        ],
        [
            "image"=>"picture5.png",
            'title' => ' Khóa học lập trình .NET ',
            'description' => ' Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thức C# và Frontend.',
            'fee' => ' 6.000.000 VNĐ ',
            'start_date' => '2/2024',
            'duration_time' => ' 40 giờ '
        ],
        [
            "image"=>"picture6.png",
            'title' => 'Lập trình SQL SERVER ',
            'description' => ' Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu,... ',
            'fee' => ' 4.500.000 VNĐ ',
            'start_date' => '2/2024',
            'duration_time' => ' 30 giờ '
        ],

    ];

    foreach ($courseAll as $course) {
        echo '<div class="course">';
        echo '<img src="' .$course['image'].'" />';
        echo '<h3 class="title2">' . $course['title'] . '</h3>';
        echo '<p class="desc">' . $course['description'] . '</p>';
        echo '<p><i class="fa-solid fa-gift icon"></i> Học phí: ' . $course['fee'] . '</p>';
        echo '<p><i class="fa-solid fa-clock icon"></i> Khai giảng: ' . $course['start_date'] . '</p>';
        echo '<p><i class="fa-solid fa-bookmark icon"></i> Thời lượng: ' . $course['duration_time'] . '</p>';
        echo '</div>';
    }
    ?>
</div>
</body>

</html>