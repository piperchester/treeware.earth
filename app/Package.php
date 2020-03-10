<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use Searchable;

    protected $guarded = [];


    public function clicks()
    {
        return $this->hasMany(Click::class);
    }

    public function searchableAs()
    {
        return config('scout.prefix').'package_name';
    }
}
