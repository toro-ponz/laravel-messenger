FROM php:7.2-fpm-stretch

RUN apt-get update

# PHP's DB setting
RUN apt-get install -y libpq-dev \
    docker-php-ext-install pdo_mysql

# Install Node.js
RUN apt-get install -y gnupg \
    curl -sL https://deb.nodesource.com/setup_8.x | bash - \
    apt-get install -y nodejs

# Install composer
RUN curl -sS https://getcomposer.org/installer | php \
    mv composer.phar /usr/local/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1

WORKDIR /var/www/html
