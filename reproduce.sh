#!/bin/sh
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
echo "Done! load localhost/test to reproduce the bug!"
