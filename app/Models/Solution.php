<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable =[
        'title_tw', 'title_cn', 'title_en', 
        'content_tw', 'content_cn', 'content_en', 
        'category_id', 'sort', 'img'
    ];
}
