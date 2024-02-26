<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel ="stylesheet" href= "index.css">
    <title>Document</title>
</head>
<body>
<div class = "products">
<?php
    $products = [
        [
            "image" => "image/tshirt.jpg",
            "id" => 1,
            "name" => "T-Shirt",
            "price" => 15.99,
            "description" => "A comfortable and stylish T-Shirt."
        ],
        [
            "image" => "image/jean.jpg",
            "id" => 2,
            "name" => "Jean",
            "price" => 23,
            "description" => "A comfortable and stylish Jean."
        ],
        [
            "image" => "image/tshirt.jpg",
            "id" => 3,
            "name" => "T-Shirt",
            "price" => 15.99,
            "description" => "A comfortable and stylish T-Shirt."
        ],
        [
            "image" => "image/jean.jpg",
            "id" => 4,
            "name" => "Jean",
            "price" => 23,
            "description" => "A comfortable and stylish Jean."
        ],
        [
            "image" => "image/tshirt.jpg",
            "id" => 5,
            "name" => "T-Shirt",
            "price" => 15.99,
            "description" => "A comfortable and stylish T-Shirt."
        ],
        [
            "image" => "image/jean.jpg",
            "id" => 6,
            "name" => "Jean",
            "price" => 23,
            "description" => "A comfortable and stylish Jean."
        ],
        [
            "image" => "image/tshirt.jpg",
            "id" => 7,
            "name" => "T-Shirt",
            "price" => 15.99,
            "description" => "A comfortable and stylish T-Shirt."
        ],
        [
            "image" => "image/jean.jpg",
            "id" => 8,
            "name" => "Jean",
            "price" => 23,
            "description" => "A comfortable and stylish Jean."
        ],
    ];

    $itemsPerPage = 4;
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $totalPages = ceil(count($products) / $itemsPerPage);//Ham tinh tong so trang hien thi
    $currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>

<div class="product-list">
    <?php foreach ($currentPageItems as $product): ?>
        <div class="product">
            <?php
            echo '<img src = "'.$product['image'].'"/>';
            //echo '<p class = "id">'.$product["id"].'</p>';
            echo '<h4><p class = "name">'.$product['name'].'</p></h4>';
            echo '<p class = "price">'."$".$product['price'].'</p>';
            echo '<p class = "description">'.$product['description'].'</p>';
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
            <a href="?page=<?php echo $currentPage + 1; ?>">Next-></a>
        <?php endif; ?>
    </div>

</body>
</html>