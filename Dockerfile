FROM php:8.2-apache-bullseye

# Enable Apache modules
RUN a2enmod rewrite headers

# Set Apache document root
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
# Use double quotes for sed so the env variable expands
RUN sed -ri "s!/var/www/html!${APACHE_DOCUMENT_ROOT}!g" /etc/apache2/sites-available/*.conf
RUN sed -ri "s!/var/www/!${APACHE_DOCUMENT_ROOT}!g" /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Allow .htaccess to work
RUN echo "AllowOverride All" >> /etc/apache2/apache2.conf

# Install PHP extensions
RUN apt-get update && apt-get install -y \
    ca-certificates wget git unzip zip libzip-dev default-mysql-client libssl-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Azure MySQL CA cert
RUN mkdir -p /etc/ssl/mysql \
    && wget https://dl.cacerts.digicert.com/DigiCertGlobalRootCA.crt.pem \
    -O /etc/ssl/mysql/DigiCertGlobalRootCA.crt.pem

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy Laravel app
WORKDIR /var/www/html
COPY . .

# Composer install
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# Expose port 80
EXPOSE 80

# Start Apache in foreground
CMD ["apache2-foreground"]
