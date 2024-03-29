<?php

namespace App\Http\Controllers\Admin;

use App\Models\Announce;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnnounceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Announce::orderby('id')->paginate(5);
        return view('admin/announce/index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/announce/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('img')){
            $_file = $_FILES['img'];
            $name = time().'_'.$_file['name'][0];
            $exp = explode('.', $name);
            $ext = array_pop($exp);
            $allow_ext = ['jpg', 'png', 'jpeg', 'bmp'];
            if(!in_array($ext, $allow_ext)){
                return '非圖片格式!';
            }
            $input = $request->all();
            if($input['sort'] === null){
                $input['sort'] = 1;
            }elseif(($s>99) || ($s<1)){
                return '排序的值要在1~99之間。';
            }
            $tmp = $_file['tmp_name'][0];
            $dir = public_path().'\uploads\\'.$name;
            $img_name = $name;
            $push_img = ['img' => $img_name];
            $res = array_merge($input , $push_img);

            move_uploaded_file($tmp, $dir);
            Announce::create($res);
            return redirect(route('announce.index'));
        }else{
            $input = $request->all();
            if($input['sort'] === null){
                $input['sort'] = 1;
            }elseif(($input['sort']>99) || ($input['sort']<1)){
                return '排序的值要在1~99之間。';
            }
            $img = ['img' =>''];
            $input = array_merge($input, $img);
            Announce::create($input);
            return redirect(route('announce.index'));
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
        $data = Announce::find($id);
        return view('admin/announce/edit')->with('data', $data);
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
        if($request->hasFile('img')){
            $_file = $_FILES['img'];
            $name = time().'_'.$_file['name'][0];
            $exp = explode('.', $name);
            $ext = array_pop($exp);
            $allow_ext = ['jpg', 'png', 'jpeg', 'bmp'];
            if(!in_array($ext, $allow_ext)){
                return '非圖片格式!';
            }
            $input = $request->all();
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

            $img_ori_name = Announce::find($id)->img;
            if($img_ori_name != null){
                $img_ori_path = public_path('uploads/').$img_ori_name;
                if(file_exists($img_ori_path)){
                    unlink($img_ori_path);
                }
                move_uploaded_file($tmp, $dir);
            }
            move_uploaded_file($tmp, $dir);

            $data = Announce::find($id);
            $data->update($res); 
            return redirect(route('announce.edit', $id));
        }else{
            $input = $request->all();
            if($input['sort'] === null){
                $input['sort'] = 1;
            }elseif(($input['sort']>99) || ($input['sort']<1)){
                return '排序的值要在1~99之間。';
            }
            $data = Announce::find($id);
            $res = array_merge($input, ['img'=> $data->img]);
            $data->update($res); 
            return redirect(route('announce.edit', $id));
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
        Announce::destroy($id);
        return back();
    }
}
