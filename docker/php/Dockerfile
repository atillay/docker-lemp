FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zlib1g-dev \
    libjpeg-dev\
    libpng-dev\
    libfreetype6-dev \
    libpq-dev \
    libicu-dev g++

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

# Type docker-php-ext-install to see available extensions
RUN docker-php-ext-install pdo pdo_mysql opcache zip

# OPTIONAL - gd
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install gd

RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl

# OPTIONAL - additional conf
COPY ./php.ini /usr/local/etc/php/

WORKDIR /var/www/app
