FROM php:8.2-apache

# Instal ekstensi yang dibutuhkan Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Copy semua file project ke dalam server
COPY . /var/www/html

# Setup composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Berikan izin akses folder (Permission)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Aktifkan modul Apache Rewrite agar URL Laravel jalan
RUN a2enmod rewrite

# Arahkan DocumentRoot Apache ke folder /public milik Laravel
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

EXPOSE 80