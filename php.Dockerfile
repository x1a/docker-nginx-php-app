FROM php:8.2-fpm

RUN apt update
RUN docker-php-ext-install -j$(nproc) pdo_mysql
