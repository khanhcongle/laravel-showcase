# Windows (MS Powershell)

## Download Laravel dependencies 
```shell
docker run --rm -v ${PWD}:/app composer install
```

## Init Laravel project
```shell
docker-compose up -d
docker-compose exec app php artisan key:generate
docker-compose down
```

## Init model and controllers
```shell
docker-compose exec app php artisan make:controller IndexController
docker-compose exec app php artisan make:controller UserController

docker-compose exec app php artisan make:model Category --migration
docker-compose exec app php artisan make:model Tag --migration
docker-compose exec app php artisan make:model Post --migration

docker-compose exec app php artisan make:migration create_post_tag_table
docker-compose exec app php artisan make:migration AddForeignKeysToPostsTable

docker-compose exec app php artisan migrate
```

## Install `laravel/jetstream` for UI and Security
```shell
docker run --rm -v ${PWD}:/app composer require laravel/jetstream

# Install Jetstream with the Inertia stack...
docker-compose exec app php artisan jetstream:install inertia
docker-compose exec app php artisan migrate
docker-compose run --rm npm install

# Components files will be available under the folder resources/views/vendor/jetstream/components
docker-compose exec app php artisan vendor:publish --tag=jetstream-views

# Run in development mode (config file: package.json)
docker-compose run --rm npm run dev
# In "watch" mode the page refresh as soon as you hit save file 
docker-compose run --rm npm run watch
```

## Install `barryvdh/laravel-ide-helper` for Visual Studio Code
```shell
docker-compose run --rm composer require --dev barryvdh/laravel-ide-helper
```

## Install `nuwave/lighthouse` as GraphQL server
```shell
docker-compose run --rm composer require nuwave/lighthouse
docker-compose exec app php artisan vendor:publish --tag=lighthouse-schema

docker-compose run --rm composer require mll-lab/laravel-graphql-playground

# Ref: https://lighthouse-php.com/4.18/getting-started/installation.html
```

## Install `tcg/voyager` as free admin page
```shell
docker run --rm -v ${PWD}:/app composer require tcg/voyager
docker-compose exec app php artisan migrate:reset
docker-compose exec app php artisan voyager:install --with-dummy
```


## Seed data or testing
```shell
# Create a model factory using Faker
docker-compose exec app php artisan make:factory PostFactory

# Seed objects to our database
docker-compose exec app php artisan db:seed

# Migration down everything, and then migration up again
docker-compose exec app php artisan migrate:fresh
docker-compose exec app php artisan migrate:fresh --seed
```

## Utils

```shell
docker-compose exec app php artisan --help

docker-compose exec app php artisan migrate
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan config:cache

# Update dependencies (configuration file: composer.json) 
docker-compose run --rm composer update

```

