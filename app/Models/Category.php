<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =[
        'main_type', 'title_tw', 'title_cn', 'title_en', 'img'
    ];

}
