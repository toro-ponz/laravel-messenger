FROM php:fpm

RUN apt-get update

# PHP's DB setting
RUN apt-get install -y libpq-dev
RUN docker-php-ext-install pdo_mysql

# Install Node.js
RUN apt-get install -y gnupg
RUN curl -sL https://deb.nodesource.com/setup_8.x | bash -
RUN apt-get install -y nodejs

# Install composer
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1

WORKDIR /var/www/html
