<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'status',
        'description',
        'content',
        'featured',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'status' => 'boolean',
        'featured' => 'boolean',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
