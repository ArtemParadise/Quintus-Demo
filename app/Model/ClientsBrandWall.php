<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClientsBrandWall extends Model
{
    protected $fillable = [
        'title', 'img', 'active', 'priority'
    ];
}
