<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="homework3.css" />
    <title>Danh sách khóa học</title>
</head>
<body>
<div class="course-container">
    <?php
    // Dữ liệu khóa học lưu động trong mảng
    $courses = [
        [   "image" => "image/picture1.png",
            'title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            "image" => "image/picture2.png",
            'title' => 'Lập trình web FULLSTACK',
            'description' => 'Khóa học phù hợp với người mới bắt đầu lập trình hoặc người chuyển nghề.Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
            'fee' => 'Ưu đãi giảm 15% học phí',
            'start_date' => '2/2024',
            'duration' => '6 tháng'
        ],
        [
            "image" => "image/picture3.png",
            'title' => 'Lập trình Java FULLSTACK',
            'description' => ' Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, JSP, Spring Framework, EJB,... ',
            'fee' => 'Ưu đĩa giảm 15% học phí',
            'start_date' => '2/2024',
            'duration' => '236 giờ'
        ],
        [
            "image" => "image/picture4.png",
            'title' => 'Lập trình PHP và Laravel',
            'description' => ' PHP là một trong các ngôn ngữ thiết kế web mạnh nhất. Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework.',
            'fee' => 'Ưu đãi giảm 15% học phí',
            'start_date' => '2/2024',
            'duration' => '6 tháng'
        ],
        [
            "image" => "image/picture5.png",
            'title' => ' Khóa học lập trình .NET ',
            'description' => ' Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thức C# và Frontend.',
            'fee' => ' 6.000.000 VNĐ ',
            'start_date' => '2/2024',
            'duration' => ' 40 giờ '
        ],
        [
            "image" => "image/picture6.png",
            'title' => 'Lập trình SQL SERVER ',
            'description' => ' Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu,... ',
            'fee' => ' 4.500.000 VNĐ ',
            'start_date' => '2/2024',
            'duration' => ' 30 giờ '
        ],

    ];

    // Hiển thị danh sách khóa học
    foreach ($courses as $course) {
        echo '<div class="course">';
        echo '<img src="' . $course['image'] . '" alt="' . $course['title'] . '">'; // Chèn hình ảnh
        echo '<h2>' . $course['title'] . '</h2>';
        echo '<p>' . $course['description'] . '</p>';
        echo '<p>Học phí: ' . $course['fee'] . '</p>';
        echo '<p>Khải giảng: ' . $course['start_date'] . '</p>';
        echo '<p>Thời lượng: ' . $course['duration'] . '</p>';
        echo '</div>';
    }
    ?>
</div>
</body>
</html>