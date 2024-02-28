<?php
    $products=[
    [

        'img'=>'img/k1.jpg',
        'id'=>1,
        'name'=>"T-shirt",
        'price'=>300000,
        'description'=>"A comfortable and stylish T-shirt"
    ],
    [
        'img'=>'img/k1.jpg',
        'id'=>2,
        'name'=>"Jean",
        'price'=>300000,
        'description'=>"A comfortable and stylish jean"
    ],
    [
        'img'=>'img/k2.jpg',
        'id'=>3,
        'name'=>"bomber jacket",
        'price'=>300000,
        'description'=>"A comfortable and stylish bomber jacket"
    ],
    [
        'img'=>'img/k3.jpg',
        'id'=>4,
        'name'=>"T-shirt",
        'price'=>300000,
        'description'=>"A comfortable and stylish T-shirt"
    ],
        [
            'img'=>'img/k2.jpg',
            'id'=>5,
            'name'=>"Jean",
            'price'=>300000,
            'description'=>"A comfortable and stylish Jean"
        ],
        [
            'img'=>'img/k3.jpg',
            'id'=>6,
            'name'=>"Jacket",
            'price'=>300000,
            'description'=>"A comfortable and stylish Jacket"
        ],
        [
            'img'=>'img/k1.jpg',
            'id'=>7,
            'name'=>"T-shirt",
            'price'=>300000,
            'description'=>"A comfortable and stylish T-shirt"
        ],
        [
            'img'=>'img/k2.jpg',
            'id'=>8,
            'name'=>"Jean",
            'price'=>300000,
            'description'=>"A comfortable and stylish Jean"
        ],
        [
            'img'=>'img/k3.jpg',
            'id'=>9,
            'name'=>"T-shirt",
            'price'=>300000,
            'description'=>"A comfortable and stylish T-shirt"
        ],
        [
            'img'=>'img/k3.jpg',
            'id'=>10,
            'name'=>"T-shirt",
            'price'=>300000,
            'description'=>"A comfortable and stylish T-shirt"
        ],
        [
            'img'=>'img/k1.jpg',

            'id'=>11,
            'name'=>"T-shirt",
            'price'=>300000,
            'description'=>"A comfortable and stylish T-shirt"
        ],
        [
            'img'=>'img/k2.jpg',
            'id'=>12,
            'name'=>"T-shirt",
            'price'=>300000,
            'description'=>"A comfortable and stylish T-shirt"
        ]


];

    $itemsPerPage=4;
    $totalPages = ceil(count($products) / $itemsPerPage);
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/1ce18db8ca.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="product-list">
        <?php foreach ($currentPageItems as $product): ?>

            <div class="product">
                <?php
                    echo '<img src="'.$product['img'].'" />';
                    echo "<p >".$product['id']."</p>";
                    echo "<p class='name'>".$product['name']."</p>";
                    echo "<p>".$product['price']."</p>";
                    echo "<p>".$product['description']."</p>";

                ?>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="pagination">
        <?php if ($currentPage > 1): ?>
            <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <?php if ($i == $currentPage): ?>
                <span class="active"><?php echo $i; ?></span>
            <?php else: ?>
                <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if ($currentPage < $totalPages): ?>
            <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
            <i class="fa-solid fa-arrow-right"></i>
        <?php endif; ?>

    </div>


</body>
</html>