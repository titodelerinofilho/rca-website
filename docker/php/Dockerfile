FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd mysqli pdo pdo_mysql zip

WORKDIR /var/www/html

RUN usermod -u 1000 www-data \
    && groupmod -g 1000 www-data

# Configuração de permissões
RUN chown -R www-data:www-data /var/www/html

USER www-data
