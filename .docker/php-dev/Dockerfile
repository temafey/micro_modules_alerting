FROM php:8.0-cli-alpine

RUN apk update
RUN apk add --no-cache bash
RUN apk add --no-cache build-base
RUN apk add --no-cache autoconf
RUN apk add --no-cache automake

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_MEMORY_LIMIT -1

# php extensions
# redis
RUN pecl install redis
RUN docker-php-ext-enable redis

# intl
RUN apk add --no-cache icu-dev
RUN docker-php-ext-install intl
RUN docker-php-ext-enable intl

# xdebug
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

# ast
RUN pecl install ast
RUN docker-php-ext-enable ast

RUN mkdir /.composer_cache
ENV COMPOSER_CACHE_DIR /.composer_cache

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
