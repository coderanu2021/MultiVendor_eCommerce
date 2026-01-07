FROM php:8.2-apache

# Enable Apache rewrite
RUN a2enmod rewrite
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Install system dependencies + SSL certs
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    ca-certificates \
    wget \
    && docker-php-ext-install pdo pdo_mysql zip

# 🔐 Download Azure MySQL SSL certificate
RUN mkdir -p /etc/ssl/mysql \
    && wget https://dl.cacerts.digicert.com/DigiCertGlobalRootCA.crt.pem \
    -O /etc/ssl/mysql/DigiCertGlobalRootCA.crt.pem

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set Apache document root
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Copy project
WORKDIR /var/www/html
COPY . .

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# Copy entrypoint
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 80
ENTRYPOINT ["docker-entrypoint.sh"]
