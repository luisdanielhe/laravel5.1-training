<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{

    protected $fillable = [
        'title',
        'description',
        'publiched_at'
    ];

}
