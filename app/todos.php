<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todos extends Model
{
    protected $attributes = [
        'completed' => false,
    ];

}
