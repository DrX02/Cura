<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'author_id',
        'category',
        'image',
        'status',
        'views',
        'likes',
        'is_featured',
    ];

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
