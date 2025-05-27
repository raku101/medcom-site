FROM php:8.3-cli

# تثبيت التبعيات المطلوبة من نظام التشغيل
RUN apt-get update && apt-get install -y \
    git unzip curl zip libzip-dev libicu-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip intl

# تثبيت Composer
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# تحديد مجلد التطبيق
WORKDIR /app

# نسخ الملفات إلى داخل الحاوية
COPY . .

# إعداد مجلدات Laravel
RUN mkdir -p storage/logs bootstrap/cache && chmod -R 777 storage bootstrap/cache

# تثبيت الحزم المطلوبة عبر Composer
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# فتح المنفذ 8000 لتشغيل التطبيق
EXPOSE 8000
RUN php artisan storage:link

# تشغيل Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000
