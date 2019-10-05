@extends('front.layout.app')
@section('head')
  <link rel="stylesheet" href="{{asset('\css\index.css')}}">
@endsection
@section('content')
<div class="header1 cid-r33fHMbSeh mbr-parallax-background">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-md-6 flex-center">
                <img src="images\banner_t1.png" width="80%" alt="">
            </div>
            <div class="col-md-6 text-center">
                <img src="images\banner_img.png" width="80%" alt="">
            </div>
        </div>
    </div>
</div>

<div class="mainBox">
    <!-- 產品分類區 -->
    <section class="products">
        <div class="container">
            <div class="titleBox">
                <h2 class="title">{{  trans('mySite.section1'  )}}</h2>
            </div>
            
            <div class="row ProBox">
                @foreach($datas as $data)
                    <div class="col-md-3 col-sm-6 ProItem">
                        <a href="{{  route('product_cate', $data->id)}}">
                            <div class="Txt">
                                <h3>
                                 @if(session()->get('locale') == 'zh-TW')
                                    {{$data->title_tw}}
                                 @elseif(session()->get('locale') == 'zh-CN')
                                    {{$data->title_cn}}
                                 @elseif(session()->get('locale') == 'en')
                                    {{$data->title_en}}
                                 @endif
                                </h3>
                            </div>
                            <div class="Img">
                                <img style="width:100%;" src="{{$data->img}}" alt="Pro 01">
                            </div>
                        </a>
                    </div>
                @endforeach
 
            </div>
        </div>
    </section>
    <!-- 產品分類區 ＥＮＤ-->
    <!-- 產業類別 industries -->
    <section class="industries">
        <div class="container">
            <div class="titleBox">
                <h2 class="title">{{  trans('mySite.section2'  )}}</h2>
            </div>
            <div class="row ProBox">

            @foreach($sols as $pro)
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="{{  route('solution_detail', $pro->id)  }}">
                        <div class="Img">
                            <img style="width:100%;" src="\uploads\{{  $pro->img  }}" alt="Indu 01">
                        </div>
                        <div class="Txt">
                            <h3>
                                @include('front.trans_title')
                            </h3>
                        </div>
                    </a>
                </div>
            @endforeach

            </div>
        </div>
    </section>
    <!-- 產業類別 industries end-->
    <!-- 最新消息 -->
    <section class="newsBox">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="ImgBox"
                        style="background-image: url(images/news/news_img.jpg); width: 100%; height: 100%; background-position: center;background-size: cover;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="titleBox2">
                        <h2 class="title">{{  trans('mySite.section3'  )}}</h2>
                    </div>
                    <div class="NewsList">
                    @foreach($news as $pro)
                        <div class="NewsItem">
                            <a href="anno.html?id=4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="Img" style="background-image: url(/uploads/{{  $pro->img  }});"></div>
                                    </div>
                                    <div class="Txt col-md-8">
                                        <h4>
                                            @include('front.trans_title')
                                        </h4>
                                        <p>
                                            @include('front.trans_content_list')
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 最新消息ＥＮＤ -->
    <!-- 關於我們 -->
    <section class="aboutBox">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="titleBox2">
                        <h2 class="title">{{  trans('mySite.section4_1'  )}}</h2>
                    </div>
                    <div class="Txt">
                        @php
                            echo trans('mySite.section4_1_1')
                        @endphp
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="titleBox2">
                        <h2 class="title">{{  trans('mySite.section4_2'  )}}</h2>
                    </div>
                    <div class="Img">
                        <img src="images\about\about_img.jpg" width="100%" alt="">
                    </div>
                    <div class="Txt">
                        @php
                            echo trans('mySite.section4_2_1'); 
                        @endphp
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 關於我們ＥＮＤ -->
</div>
@endsection