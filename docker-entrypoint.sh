#!/bin/sh
set -e

cd /var/www/html

# Create .env if missing
if [ ! -f .env ]; then
  cp .env.example .env
fi

# Ensure APP_KEY exists (from Azure env)
if [ -z "$APP_KEY" ]; then
  echo "ERROR: APP_KEY not set"
  exit 1
fi

# Fix permissions
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Clear caches (DO NOT CACHE)
php artisan config:clear || true
php artisan cache:clear || true
php artisan route:clear || true
php artisan view:clear || true

exec apache2-foreground
