<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ConfigKey extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'key'];

    protected $searchableFields = ['*'];

    protected $table = 'config_keys';

    public function configSites()
    {
        return $this->hasMany(ConfigSite::class);
    }
}
