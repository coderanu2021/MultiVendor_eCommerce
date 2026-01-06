#!/bin/sh

set -e

cd /var/www/html

# Create .env if missing
if [ ! -f .env ]; then
  echo "Creating .env file..."
  cp .env.example .env
fi

# Ensure correct permissions   env file
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Generate Laravel key (valid cipher)
php artisan key:generate --force

# Clear caches
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

exec "$@"
