FROM php:8.2-fpm

RUN apt update
RUN docker-php-ext-install -j$(nproc) pdo_mysql

COPY ./docker/php-entrypoint /usr/local/bin
RUN chmod 755 /usr/local/bin/php-entrypoint
