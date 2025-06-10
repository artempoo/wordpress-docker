FROM php:7.4-fpm

# Обновление и установка зависимостей
RUN apt-get update --fix-missing && \
    apt-get install -y \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        unzip \
        git \
        curl

# Установка расширений PHP
RUN docker-php-ext-install -j$(nproc) gd mysqli pdo pdo_mysql

# Установка WP-CLI
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar  && \
    chmod +x wp-cli.phar && \
    mv wp-cli.phar /usr/local/bin/wp

# Проверка
RUN wp --info
