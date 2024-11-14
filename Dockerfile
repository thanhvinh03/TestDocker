# Sử dụng image PHP với Apache
FROM php:8.0-apache

# Cài đặt các phần mở rộng PHP cần thiết (nếu cần)
RUN docker-php-ext-install mysqli

# Copy mã nguồn của bạn vào thư mục web của Apache
COPY . /var/www/html/

# Thiết lập quyền cho thư mục web
RUN chown -R www-data:www-data /var/www/html

# Bật chế độ viết lại URL của Apache nếu bạn sử dụng URL dạng đẹp
RUN a2enmod rewrite

# Mở port 80 cho Apache
EXPOSE 80
