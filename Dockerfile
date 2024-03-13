FROM php:8.1-fpm

# Install MySQLi
RUN docker-php-ext-install mysqli