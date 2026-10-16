<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $guarded = [];
    protected $casts = ['highlights' => 'array'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
