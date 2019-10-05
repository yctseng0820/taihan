<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = About::orderby('id')->paginate(5);
        return view('admin.about.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = Category::orderby('id')->get();
        return view('admin.about.create')->with('datas', $datas);
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
            'content_tw' => 'required',
            'content_cn' => 'required',
            'content_en' => 'required',
        ];
        $valid = Validator::make($input, $rules);

        if($valid->passes()){
                $input = $request->all();
                About::create($input);
                return redirect(route('about.index'));
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
        $data = About::find($id);
        
        $cates = Category::all();
        return view('admin.about.edit')->with('data', $data)->with('cates', $cates);
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
            'content_tw' => 'required',
            'content_cn' => 'required',
            'content_en' => 'required',
        ];
        $valid = Validator::make($input, $rules);

        if($valid->passes()){
                $data = About::find($id);
                $input = $request->all();
                $data->update($input); 
                session()->put('success', '修改成功!');
                return redirect(route('about.edit', $id));
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
        About::destroy($id);
        return back();
    }
}
