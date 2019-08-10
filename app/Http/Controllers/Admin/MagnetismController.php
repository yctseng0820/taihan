<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Magnetism;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MagnetismController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Magnetism::orderby('id')->get();
        return view('admin.mag.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = Category::orderby('id')->get();
        return view('admin.mag.create')->with('datas', $datas);
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
            'title_tw' => 'required',
            'title_cn' => 'required',
            'title_en' => 'required',
            'content_tw' => 'required',
            'content_cn' => 'required',
            'content_en' => 'required',
            'category_id' => 'required',
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
                if($input['sort'] === null){
                  $input['sort'] = 1;
                }elseif(($input['sort']>99) || ($input['sort']<1)){
                    return '排序的值要在1~99之間。';
                }
                $tmp = $_file['tmp_name'][0];
                $dir = public_path().'\uploads\\'.$name;
                $img_name = $name;
                $push_img = ['img' => $img_name];
                $res = array_merge($input , $push_img);

                move_uploaded_file($tmp, $dir);
                Magnetism::create($res);
                return redirect(route('magnetism.index'));
            }else{
                $input = $request->all();
                if($input['sort'] === null){
                  $input['sort'] = 1;
                }elseif(($input['sort']>99) || ($input['sort']<1)){
                    return '排序的值要在1~99之間。';
                }
                $img = ['img' =>''];
                $input = array_merge($input, $img);
                Magnetism::create($input);
                return redirect(route('magnetism.index'));
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
        $data = Magnetism::find($id);
        // dd($data->img);
        $cates = Category::all();
        return view('admin.mag.edit')->with('data', $data)->with('cates', $cates);
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
            'category_id' => 'required',
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
                if($input['sort'] === null){
                  $input['sort'] = 1;
                }elseif(($input['sort']>99) || ($input['sort']<1)){
                    return '排序的值要在1~99之間。';
                }

                $tmp = $_file['tmp_name'][0];
                $dir = public_path().'\uploads\\'.$name;
                $img_name = $name;
                $push_img = ['img' => $img_name];
                $res = array_merge($input , $push_img);

                $img_ori_name = Magnetism::find($id)->img;
                if($img_ori_name != null){
                    $img_ori_path = public_path('uploads/').$img_ori_name;
                    if(file_exists($img_ori_path)){
                        unlink($img_ori_path);
                    }
                    move_uploaded_file($tmp, $dir);
                }
                move_uploaded_file($tmp, $dir);

                $data = Magnetism::find($id);
                $data->update($res); 
                return redirect(route('magnetism.edit', $id));
                
            }else{
                $input = $request->all();
                if($input['sort'] === null){
                  $input['sort'] = 1;
                }elseif(($input['sort']>99) || ($input['sort']<1)){
                    return '排序的值要在1~99之間。';
                }
                $data = Magnetism::find($id);
                $res = array_merge($input, ['img'=> $data->img]);
                $data->update($res); 
                return redirect(route('magnetism.edit', $id));
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
        Magnetism::destroy($id);
        return back();
    }
}
