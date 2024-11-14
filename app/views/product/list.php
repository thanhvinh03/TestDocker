<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Danh sách sản phẩm</h1>
        
        <div class="text-right mb-3">
            <a href="/project1/Product/add" class="btn btn-success">Thêm sản phẩm mới</a>
        </div>

        <div class="list-group">
            <?php foreach ($products as $product): ?>
                <div class="list-group-item">
                    <h2 class="h5"><?php echo htmlspecialchars($product->getName(), ENT_QUOTES, 'UTF-8'); ?></h2>
                    <p><?php echo htmlspecialchars($product->getDescription(), ENT_QUOTES, 'UTF-8'); ?></p>
                    <p><strong>Giá:</strong> <?php echo htmlspecialchars($product->getPrice(), ENT_QUOTES, 'UTF-8'); ?> VND</p>
                    <a href="/project1/Product/edit/<?php echo $product->getID(); ?>" class="btn btn-primary btn-sm">Sửa</a>
                    <a href="/project1/Product/delete/<?php echo $product->getID(); ?>" class="btn btn-danger btn-sm"
                       onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">Xóa</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
