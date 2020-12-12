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
