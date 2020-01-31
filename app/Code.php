<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $fillable = [
        'password', 'dynamic', 'passwordstart', 'passwordend'
        ];

    public function Dynamic()
    {
        return $this->hasMany(Dynamic::class);
    }
}
