<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;


    protected $guarded = [];
    protected $fillable = ['title', 'content'];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'article_category');
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function author() {
        return $this->belongsTo(User::class);
    }

    // Model scopes -------
    public function scopePublished($query) 
    {
        return $query->whereNotNull('published_at')->where('published_at', '<=', now());
    }
    
    // Model methods ------
}
