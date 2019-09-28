<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Magnetism;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Category::orderby('id')->paginate(5);
        return view('admin.category.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $input = $request->all();
        $rules = [
            'main_type' => 'required',
            'title_tw' => 'required',
            'title_cn' => 'required',
            'title_en' => 'required',
            'content_tw' => 'required',
            'content_cn' => 'required',
            'content_en' => 'required',
        ];
        $valid = Validator::make($input, $rules);

        if($valid->passes()){
            if($request->hasFile('img')){
                $_file = $_FILES['img'];
                $name = time().'_'.$_file['name'][0];
                $exp = explode('.', $name);
                $ext = array_pop($exp);
                $allow_ext = ['jpg', 'png', 'jpeg', 'bmp'];
                if(!in_array($ext, $allow_ext)){
                    return '非圖片格式!';
                }
                $tmp = $_file['tmp_name'][0];
                $dir = public_path().'\uploads\\'.$name;
                $img_name = $name;
                $push_img = ['img' => $img_name];
                $res = array_merge($input , $push_img);

                move_uploaded_file($tmp, $dir);
                Category::create($res);
                return redirect()->route('category.index');
            }else{
                $input = $request->all();
                $img = ['img' =>''];
                $input = array_merge($input, $img);
                Category::create($input);
                return redirect(route('category.index'));
            }
        }else{
            return '請填寫必填欄位!';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::find($id);
        $cates = Category::select('main_type')->distinct()->get();
        $tname = [
            '1' => '半導體材料', 
            '2' => '磁性材料', 
        ];
        
        return view('admin.category.edit', compact('data', 'cates', 'tname'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
        $input = $request->all();
        $rules = [
            'title_tw' => 'required',
            'title_cn' => 'required',
            'title_en' => 'required',
            'content_tw' => 'required',
            'content_cn' => 'required',
            'content_en' => 'required',
        ];
        $valid = Validator::make($input, $rules);

        if($valid->passes()){
            if($request->hasFile('img')){
                $_file = $_FILES['img'];
                $name = time().'_'.$_file['name'][0];
                $exp = explode('.', $name);
                $ext = array_pop($exp);
                $allow_ext = ['jpg', 'png', 'jpeg', 'bmp'];
                if(!in_array($ext, $allow_ext)){
                    return '非圖片格式!';
                }

                $tmp = $_file['tmp_name'][0];
                $dir = public_path().'\uploads\\'.$name;
                $img_name = $name;
                $push_img = ['img' => $img_name];
                $res = array_merge($input , $push_img);

                $img_ori_name = Category::find($id)->img;
                if($img_ori_name != null){
                    $img_ori_path = public_path('uploads/').$img_ori_name;
                    if(file_exists($img_ori_path)){
                        unlink($img_ori_path);
                    }
                    move_uploaded_file($tmp, $dir);
                }
                move_uploaded_file($tmp, $dir);

                $data = Category::find($id);
                $data->update($res); 
                return redirect(route('category.edit', $id));
                
            }else{
                $input = $request->all();
                $data = Category::find($id);
                $res = array_merge($input, ['img'=> $data->img]);
                $data->update($res); 
                return redirect(route('category.edit', $id));
            }
        }else{
            return '請填寫必填欄位!';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return back();
    }
}
