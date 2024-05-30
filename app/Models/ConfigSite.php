<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ConfigSite extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'image',
        'description',
        'active',
        'url',
        'config_key_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'config_sites';

    protected $casts = [
        'active' => 'boolean',
    ];

    public function configKey()
    {
        return $this->belongsTo(ConfigKey::class);
    }
}
