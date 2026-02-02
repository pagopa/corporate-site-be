FROM php:7.4-apache@sha256:c9d7e608f73832673479770d66aacc8100011ec751d1905ff63fae3fe2e0ca6d as php-stage

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

COPY --from=composer:latest@sha256:e4ff7e012505df43b4404cf73a4590e06a3f752a7f77d9079a89f770d257eb84 /usr/bin/composer /usr/bin/composer

# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Apache
RUN a2enmod rewrite
RUN { \
   echo "ServerName docker"; \
   echo 'EnableMMAP Off'; \
   echo 'EnableSendfile Off'; \
} >> /etc/apache2/apache2.conf

COPY composer.json ./
ADD .env .
ADD auth.json .
RUN set -eux; \
	composer clearcache
RUN set -eux; \
	composer install --prefer-dist --no-dev --no-scripts --no-progress
RUN rm .env auth.json

COPY --chown=www-data:www-data . /var/www/html
# RUN ln -s /home /var/www/html/web/app/uploads
WORKDIR /var/www/html