FROM php:7.4-apache as php-stage

ENV APACHE_DOCUMENT_ROOT /var/www/html/web

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN apt-get update \
    && apt-get remove -y mariadb-server mariadb-client \
    && apt-get install -y \
        git \
        ssh \
        libssl-dev \
        default-mysql-client \
        libmcrypt-dev \
        libicu-dev \
        libpq-dev \
        libjpeg62-turbo-dev \
        libjpeg-dev  \
        libpng-dev \
        zlib1g-dev \
        libonig-dev \
        libxml2-dev \
        libzip-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libicu-dev \
        zip p7zip-full libzip-dev unzip \  
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        gd \
        zip \
        intl \
		pdo_mysql \
		pcntl \
        mysqli

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# ADD env.sh .
# RUN ./env.sh
ADD .env .

# Apache
RUN a2enmod rewrite \
 && echo "ServerName docker" >> /etc/apache2/apache2.conf

COPY composer.json ./
RUN set -eux; \
	composer install --prefer-dist --no-dev --no-scripts --no-progress

COPY --chown=www-data:www-data . /var/www/html
WORKDIR /var/www/html
