FROM php:8.3-cli

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /app

RUN apt-get update && apt-get install -y \
        libzip-dev \
        zip \
    && pecl install xdebug \
    && docker-php-ext-install \
        zip \
    && docker-php-ext-enable \
        xdebug

ENV COMPOSER_ALLOW_SUPERUSER=1
COPY --link composer.* ./
RUN set -eux; \
	composer install --no-cache --prefer-dist --no-dev --no-autoloader --no-scripts --no-progress
