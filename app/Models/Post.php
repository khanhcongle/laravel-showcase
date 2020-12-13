<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    public const USER_ID = 'user_id';
    public const CATEGORY_ID = 'category_id';
    public const TITLE = 'title';
    public const SLUG = 'slug';
    public const CONTENT = 'content';
    public const LEAD = 'lead';
    public const FEATURED_IMAGE = 'featured_image';
    public const IS_FEATURED = 'is_featured';
    public const IS_PUBLISHED = 'is_published';

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
        'lead',
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
