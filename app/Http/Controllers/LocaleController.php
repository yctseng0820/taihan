<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    //  多國語言切換, 針對 html 標籤部分
    public function chooser(Request $request){
        Session::put('locale', $request->locale);
        return back();
    
    }
}
