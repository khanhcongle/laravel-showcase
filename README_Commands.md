# Windows (MS Powershell)

## download Laravel dependencies 

docker run --rm -v ${PWD}:/app composer install

## init Laravel project

docker-compose up -d

docker-compose exec app php artisan key:generate

docker-compose down

## init model and controllers

docker-compose exec app php artisan make:controller IndexController
docker-compose exec app php artisan make:controller UserController


docker-compose exec app php artisan make:model Category --migration
docker-compose exec app php artisan make:model Tag --migration
docker-compose exec app php artisan make:model Post --migration

docker-compose exec app php artisan make:migration create_post_tag_table

docker-compose exec app php artisan migrate

## install Laravel/Jetstream for authentication

docker run --rm -v ${PWD}:/app composer require laravel/jetstream

// Install Jetstream with the Inertia stack...
docker-compose exec app php artisan jetstream:install inertia
 
docker-compose exec app php artisan migrate

docker-compose run --rm npm install

docker-compose run --rm npm run dev

## install admin page

docker run --rm -v ${PWD}:/app composer require tcg/voyager

docker-compose exec app php artisan migrate:reset

docker-compose exec app php artisan voyager:install --with-dummy

## utils

docker-compose exec app php artisan migrate

docker-compose exec app php artisan cache:clear

docker-compose exec app php artisan config:cache

