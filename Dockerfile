FROM php:7.2.2-apache
WORKDIR /php/
RUN composer require firebase/php-jwt