# FROM php:8.2-cli

# WORKDIR /var/www

# # Install system dependencies
# RUN apt-get update && apt-get install -y \
#     git \
#     unzip \
#     curl \
#     libpq-dev \
#     libzip-dev \
#     zip \
#     && docker-php-ext-install pdo pdo_mysql

# # Install Composer
# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# # Copy project files
# COPY . .

# # Install Laravel dependencies
# RUN composer install --no-dev --optimize-autoloader

# # Give permissions
# RUN chmod -R 775 storage bootstrap/cache

# # Expose port
# EXPOSE 10000

# # Start script (run migrations AFTER container starts)
# CMD sh -c "php artisan migrate --force && php artisan db:seed --force && php artisan serve --host=0.0.0.0 --port=10000"
FROM richarvey/nginx-php-fpm:latest

COPY . .

# image config
ENV SKIP_COMPOSER 1
ENV WEBROOT=/var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1


# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

#Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]
