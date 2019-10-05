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
<div class="main_Area">
    <section>
        <div class="container">
            <div class="titleBox">
                <h2 class="title">News</h2>
                <p> </p>
            </div>
            <!-- ProBox -->
            <div class="ProBox row">
                <!-- ProItem 1 -->
                @foreach($datas as $pro)
                <div class="col-sm-6 ProItem">
                    <a href="{{  route('announce_detail', $pro->id)  }}">
                        <div class="row">
                            <div class="Img col-md-4">
                                <img style="width:100%" src="\uploads\{{  $pro->img  }}" alt="News 03">
                            </div>
                            <div class="col-md-8">
                                <div class="Txt">
                                    <h3>
                                    @if(session()->get('locale') == 'zh-TW')
                                        {{  mb_substr($pro->title_tw, 0, 30)  }}
                                    @elseif(session()->get('locale') == 'zh-CN')
                                        {{  mb_substr($pro->title_cn, 0, 30)  }}
                                    @elseif(session()->get('locale') == 'en')
                                        {{  mb_substr($pro->title_en, 0, 30)  }}
                                    @endif
                                    </h3>
                                    <p class="JQellipsis">
                                        @include('front.trans_content_list')
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
    </section>

</div>
@endsection