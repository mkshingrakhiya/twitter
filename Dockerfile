FROM php:7.4-fpm-alpine
LABEL MAINTAINER="Mayur Shingrakhiya <mk.shingrakhiya@gmail.com>"

WORKDIR /var/www/html

ENV PHP_OPCACHE_VALIDATE_TIMESTAMPS="1"
ENV PHP_OPCACHE_MAX_ACCELERATED_FILES="10000"
ENV PHP_OPCACHE_MEMORY_CONSUMPTION="192"
ENV PHP_OPCACHE_MAX_WASTED_PERCENTAGE="10"

COPY ./opcache.ini /usr/local/etc/php/conf.d/opcache.ini

RUN docker-php-ext-install pdo pdo_mysql