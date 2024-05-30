<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartieTag extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = ['name', 'key'];

    protected $searchableFields = ['*'];

    protected $table = 'partie_tags';

    public function parties()
    {
        return $this->hasMany(Partie::class);
    }
}
