@extends('front.layout.app')
@section('head')
    <link rel="stylesheet" href={{asset('\css\products.css')}}>
@endsection
@section('content')
<div class="header1 cid-r33fHMbSeh mbr-parallax-background">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6 flex-center">
                <img src="\images\banner_t2.png" width="80%" alt="">
            </div>
            <div class="col-md-6 text-center">
            </div>
        </div>
    </div>
</div>


<!-- mainArea -->
<div class="mainArea">
    <div class="container">
        <div class="titleBox">
            <h2 class="title">{{  trans('mySite.product_main')}}</h2>
            <p> </p>
        </div>
        <!-- ProBox -->
        <div class="ProBox row">
            <!-- ProItem 1 -->
        @foreach($datas as $data)
            <div class="col-sm-6 ProItem">
                <a href="{{route('product_cate', $data->id)}}">
                    <div class="row">
                        <div class="Img col-md-4">
                            <img style="width:100%" src="{{$data->img}}" alt="Pro 01">
                        </div>
                        <div class="col-md-8">
                            <div class="Txt">
                                <h3>
                                @if(session()->get('locale') == 'zh-TW')
                                    {{strip_tags($data->title_tw)}}
                                @elseif(session()->get('locale') == 'zh-CN')
                                    {{strip_tags($data->title_cn)}}
                                @elseif(session()->get('locale') == 'en')
                                    {{strip_tags($data->title_en)}}
                                @endif
                                </h3>
                                <p class="JQellipsis" style="text-align:left;">
                                @if(session()->get('locale') == 'zh-TW')
                                    {{strip_tags($data->content_tw)}}
                                @elseif(session()->get('locale') == 'zh-CN')
                                    {{strip_tags($data->content_cn)}}
                                @elseif(session()->get('locale') == 'en')
                                    {{strip_tags($data->content_en)}}
                                @endif
                                </p>
                            </div>
                        </div>

                    </div>
                </a>
            </div>
        @endforeach

        </div>
        <!-- ProBox end-->
    </div>
</div>
<!-- mainArea ens-->
@endsection