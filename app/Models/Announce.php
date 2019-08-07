<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    protected $fillable = [
        'titlw_tw',
        'titlw_cn',
        'titlw_en',
        'content_tw',
        'content_cn',
        'content_en',
        'sort',
        'img'
    ];
}
