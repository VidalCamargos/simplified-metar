FROM php:8.4-fpm-alpine3.21

RUN apk add --no-cache \
    bash \
    curl \
    libpng-dev \
    libzip-dev \
    zlib-dev

RUN docker-php-ext-install gd \
    && docker-php-ext-install zip

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# RUN apk add --no-cache nodejs npm // not using now

WORKDIR /var/www

EXPOSE 9000
