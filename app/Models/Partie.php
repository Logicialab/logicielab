<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partie extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = ['title', 'image', 'content', 'partie_tag_id'];

    protected $searchableFields = ['*'];

    public function partieTag()
    {
        return $this->belongsTo(PartieTag::class);
    }
}
