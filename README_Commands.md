# Windows (MS Powershell)

docker run --rm -v ${PWD}:/app composer install

docker-compose up -d

docker-compose exec app php artisan key:generate

docker-compose down

docker-compose exec app php artisan make:controller IndexController

docker-compose exec app php artisan make:model Category --migration
docker-compose exec app php artisan make:model Tag --migration
docker-compose exec app php artisan make:model Post --migration

docker-compose exec app php artisan make:migration create_post_tag_table

