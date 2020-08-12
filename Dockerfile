FROM php:7.4-fpm

MAINTAINER Rifas

# add project files to the usr/src/app folder
ADD . /usr/src/app

# set directoty where CMD will execute
WORKDIR /usr/src/app

RUN cp .env.example .env

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install

RUN npm install

RUN php artisan key:generate

# Expose ports
EXPOSE 8000

CMD php artisan serve --host 0.0.0.0
