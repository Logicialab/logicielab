<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'article_id',
        'name',
        'email',
        'phone',
        'raiting',
        'comment',
    ];

    protected $searchableFields = ['*'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
