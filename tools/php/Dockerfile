FROM php:7.4-fpm-alpine

WORKDIR /var/www/html

RUN apk --update add --no-cache \
  libpng-dev \
  freetype-dev \
  libjpeg-turbo-dev \
  zip libzip-dev \
  && docker-php-ext-install \
  mysqli pdo pdo_mysql zip \
  && docker-php-ext-configure gd \
  --with-freetype \
  --with-jpeg \
  && docker-php-ext-install -j$(nproc) gd \
  && rm -rf /var/cache/apk/*
