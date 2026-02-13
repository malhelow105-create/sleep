FROM richarvey/nginx-php-fpm:latest

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Laravel config
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV LOG_CHANNEL=stderr

# Image config
ENV SKIP_COMPOSER=0
ENV WEBROOT=/var/www/html/public
ENV PHP_ERRORS_STDERR=1
ENV RUN_SCRIPTS=1
ENV REAL_IP_HEADER=1
ENV COMPOSER_ALLOW_SUPERUSER=1

# Tell container to run migrations automatically
ENV RUN_LARAVEL_MIGRATIONS=1
