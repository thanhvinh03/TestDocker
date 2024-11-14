<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Sửa sản phẩm</h1>
        
        <form method="POST" action="/project1/Product/edit/<?php echo $product->getID(); ?>">
            <div class="form-group">
                <label for="name">Tên sản phẩm:</label>
                <input type="text" class="form-control" id="name" name="name" 
                       value="<?php echo htmlspecialchars($product->getName(), ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>

            <div class="form-group">
                <label for="description">Mô tả:</label>
                <textarea class="form-control" id="description" name="description" rows="3" required><?php echo htmlspecialchars($product->getDescription(), ENT_QUOTES, 'UTF-8'); ?></textarea>
            </div>

            <div class="form-group">
                <label for="price">Giá:</label>
                <input type="number" class="form-control" id="price" name="price" 
                       value="<?php echo htmlspecialchars($product->getPrice(), ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
            <a href="/project1/Product/list" class="btn btn-secondary ml-2">Quay lại danh sách sản phẩm</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
