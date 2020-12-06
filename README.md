# Laravel Showcase

This is a simple Laravel 8 showcase.

## Class Design

Design Relationships
For our blog website project. There are six relationships we need to take care of.

- Each `user` has multiple `posts`

- Each `category` has many `posts`

- Each `tag` belongs to many `posts`

- Each `post` belongs to one `user`
- Each `post` belongs to one `category`
- Each `post` belongs to many `tags`

We need to create `Category`, `Tag`, and `Post` models. 
`User` model was created by the Laravel core itself.

docker-compose exec app php artisan make:model Category --migration
docker-compose exec app php artisan make:model Tag --migration
docker-compose exec app php artisan make:model Post --migration
  
## References

### Project 

- Project Kick starter: https://www.digitalocean.com/community/tutorials/how-to-set-up-laravel-nginx-and-mysql-with-docker-compose

- Adapt with Laravel 8: https://dev.to/tomtomdu73/setup-docker-compose-to-run-laravel-8-on-lemp-stack-for-local-development-3gh4

- Setup docker: https://dev.to/aschmelyun/crafting-a-better-local-laravel-dev-environment-with-docker-45cj

### Coding practices

- Laravel naming convention: https://webdevetc.com/blog/laravel-naming-conventions

- Laravel best practices: https://github.com/alexeymezenin/laravel-best-practices

- PHP Lighthouse performance: https://lighthouse-php.com/4.0/performance/n-plus-one.html#eager-loading-relationships

### 3rd parties integration

- Caching with Redis: https://blog.igorclauss.de/post/a-simple-in-memory-caching-system-for-blog-posts-with-redis

### Courses

- PHP fundamentals: https://code.tutsplus.com/courses/php-fundamentals

- Build a CMS with Laravel: https://code.tutsplus.com/courses/build-a-cms-with-laravel
