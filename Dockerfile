FROM php:8.2-cli

# تثبيت Composer وبعض التبعيات
RUN apt-get update && \
    apt-get install -y unzip curl git zip libzip-dev && \
    docker-php-ext-install zip pdo pdo_mysql

# تثبيت Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# نسخ المشروع إلى داخل الحاوية
WORKDIR /app
COPY . /app

# تثبيت الحزم
RUN composer install

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=8000
