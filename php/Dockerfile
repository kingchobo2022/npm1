# Dockerfile
FROM php:8.4-fpm

RUN docker-php-ext-install pdo pdo_mysql

ENV COMPOSER_ALLOW_SUPERUSER=1

COPY --from=composer:2.8.8 /usr/bin/composer /usr/bin/composer