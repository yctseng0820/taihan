<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable =[
        'main_type', 'title_tw', 'title_cn', 'title_en', 'img', 'content_tw', 'content_cn', 'content_en'
    ];

    public function magnetisms(){
        return $this->hasMany('App\Models\Magnetism', 'category_id', 'id');
    
    }
}
