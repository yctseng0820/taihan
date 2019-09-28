<?php

namespace App\Http\Controllers\Front;

use App\Models\Category;
use App\Models\Magnetism;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    // 主頁
    public function index(){
        $datas = Category::orderby('id')->get();
        return view('front.index')->with('datas', $datas);
    }
    
    // 產品分類頁
    public function product(){
        $datas = Category::orderby('id')->get();
        
        return view('front.product_main')->with('datas', $datas);
    
    }
    
    // 產品子分類
    public function product_cate($id){
        $cates = Magnetism::orderby('id')->where('category_id', $id)->get();
        return view('front.product_cate')->with('cates', $cates);
    }
    
    public function product_detail($id){

        $data['datas'] = Magnetism::orderby('id')->get();
        $data['pro'] = Magnetism::where('id',$id)->first();
         
        return view('front.product_detail',$data);
    }

}
