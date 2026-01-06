#!/bin/sh
set -e

cd /var/www/html

# Create required directories if missing
mkdir -p storage/logs bootstrap/cache

# Fix ownership and permissions (Azure-safe)
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Create log file explicitly
touch storage/logs/laravel.log
chown www-data:www-data storage/logs/laravel.log
chmod 664 storage/logs/laravel.log

# Clear Laravel caches
php artisan config:clear || true
php artisan cache:clear || true
php artisan route:clear || true
php artisan view:clear || true

exec apache2-foreground
