FROM php:8.1-apache

RUN apt-get update && \
    apt-get install -y \
    libzip-dev \
    unzip

RUN pecl install xdebug && \
    docker-php-ext-enable xdebug

RUN a2enmod rewrite

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html/app
COPY . .

EXPOSE 80

CMD ["apache2-foreground"]
