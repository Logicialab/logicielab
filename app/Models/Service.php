<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'order',
        'content',
    ];

    protected $searchableFields = ['*'];
}