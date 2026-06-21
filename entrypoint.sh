#!/bin/sh

if [ ! -d vendor ]; then
	composer install --no-interaction --prefer-dist --optimize-autoloader
fi

php artisan migrate --force

exec php artisan serve --host=0.0.0.0 --port=8081