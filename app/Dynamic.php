<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dynamic extends Model
{
    protected $fillable = [
        'tag'
    ];

    public function code()
    {
        $this->belongsTo(Dynamic::class);
    }
}
