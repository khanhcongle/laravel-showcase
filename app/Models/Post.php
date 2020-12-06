<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    public static string $USER_ID = 'user_id';
    public static string $CATEGORY_ID = 'category_id';
    public static string $TITLE = 'title';
    public static string $SLUG = 'slug';
    public static string $CONTENT = 'content';
    public static string $FEATURED_IMAGE = 'featured_image';
    public static string $IS_FEATURED = 'is_featured';
    public static string $IS_PUBLISHED = 'is_published';

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'content',
        'featured_image',
        'is_featured',
        'is_published'
    ];
    /**
     * Get the user that own the post
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get category of this post
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get tags of the post
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

}
