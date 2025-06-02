FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd mysqli pdo pdo_mysql zip

WORKDIR /var/www/html

RUN curl -O https://wordpress.org/latest.tar.gz \
    && tar -xvf latest.tar.gz --strip-components=1 \
    && rm latest.tar.gz \
    && chown -R www-data:www-data /var/www/html

RUN chmod -R 755 /var/www/html