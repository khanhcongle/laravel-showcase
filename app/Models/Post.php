<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
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
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get category of this post
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    /**
     * Get tags of the post
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

}
