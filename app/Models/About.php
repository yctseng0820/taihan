<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'content_tw',
        'content_cn',
        'content_en',
    ];
}
