<?php

namespace App\Http\Controllers\Front;

use App\Models\Safe;
use App\Models\About;
use App\Models\Announce;
use App\Models\Category;
use App\Models\Solution;
use App\Models\Magnetism;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    // 主頁
    public function index(){
        $data['datas'] = Category::orderby('id')->get();
        $data['sols'] = Solution::orderby('id')->get();
        $data['news'] = Announce::orderby('id', 'desc')->get();
        return view('front.index', $data);
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
    // 產品詳情
    public function product_detail($id){
        $data['datas'] = Magnetism::orderby('id')->get();
        $data['pro'] = Magnetism::where('id',$id)->first();
         
        return view('front.product_detail',$data);
    }

    // 產業分類
    public function solution_main(){
        $datas = Solution::orderby('id')->get();
        
        return view('front.solution_main')->with('datas', $datas);
    }
    // 產業詳情
    public function solution_detail($id){
        $data['datas'] = Solution::orderby('id')->get();
        $data['pro'] = Solution::where('id', $id)->first();

        return view('front.solution_detail', $data);
    }

    // 安全建議
    public function safety_advice(){
        $datas = Safe::orderby('id')->get();
        return view('front.safety_advice')->with('datas', $datas);
    }
    
    // 最新消息
    public function announce(){
        $datas = Announce::orderby('id', 'desc')->get();
        return view('front.announce')->with('datas', $datas);
    }
    // 最新消息詳情頁
    public function announce_detail($id){
        $data['datas'] = Announce::orderby('id')->get();
        $data['pro'] = Announce::where('id', $id)->first();

        return view('front.announce_detail', $data);
    }
    
    // 關於我們
    public function about(){
        $datas['pro'] = About::first();
        return view('front.about', $datas);
    }
}
