<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Safe extends Model
{
    
    protected $fillable =[
        'title_tw', 'title_cn', 'title_en', 
        'content_tw', 'content_cn', 'content_en', 
        'sort', 'img'
    ];
}
