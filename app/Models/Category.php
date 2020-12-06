<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{

    use HasFactory;

    public static string $NAME = 'name';
    public static string $DESCRIPTION = 'description';
    public static string $SLUG = 'slug';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'description',
        'slug',
    ];

    /**
     * Get posts that belong to this category
     */
    public function posts(): HasMany
    {
        // Category is the owner, it owns posts
        return $this->hasMany(Post::class);
    }
}
