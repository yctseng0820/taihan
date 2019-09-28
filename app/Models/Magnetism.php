<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Magnetism extends Model
{
    protected $table = 'magnetisms';
    protected $fillable =[
        'title_tw', 'title_cn', 'title_en', 
        'content_tw', 'content_cn', 'content_en', 
        'category_id', 'sort', 'img'
    ];
   
    public function category(){
        return $this->belongsTo('App\Models\Category', 'id', 'category_id');
    }
}
