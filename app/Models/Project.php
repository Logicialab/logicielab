<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;


    protected $fillable = [
        'title',
        'image',
        'description',
        'order',
        'content',
        'active',
    ];

    protected $searchableFields = ['*'];

}
