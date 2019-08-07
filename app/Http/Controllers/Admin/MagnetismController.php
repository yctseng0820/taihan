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
            'sort' => 'required',
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
                $s = $_POST['sort'];
                if(($s>99) || ($s<1)){
                    return '排序的值要在1~99之間。';
                }
                $tmp = $_file['tmp_name'][0];
                $dir = public_path().'\uploads\\'.$name;
                $push_img = ['img' => $dir];
                $res = array_merge($input , $push_img);

                move_uploaded_file($tmp, $dir);
                Magnetism::create($res);
                return redirect(route('magnetism.index'));
            }else{
                return '尚未選擇圖片!';
            }
        }else{
            return '請全部填寫!';
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
        return view('admin.mag.edit')->with('data', $data);
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
       $data = Magnetism::find($id);
       $data->update($request->all()); 
       return redirect(route('magnetism.edit', $id));
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
