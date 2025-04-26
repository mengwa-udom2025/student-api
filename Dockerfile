FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git && \
    docker-php-ext-install zip pdo pdo_mysql

WORKDIR /var/www

COPY . /var/www

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install


