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
            <h2 class="title">{{  trans('mySite.safetyAdvice')}}</h2>
            <h4>{{  trans('mySite.safety_content')}}</h4>
        </div>
        <!-- ProBox -->
        <div class="ProBox row">
            <!-- ProItem 1 -->
            @foreach($datas as $data)
            <div class="col-sm-6 ProItem">
                <div class="row">
                    <div class="Img col-md-4">
                        <img style="width:100%;" src="/uploads/{{  $data->img  }}" alt="Safety advice 01">
                    </div>
                    <div class="col-md-8">
                        <div class="Txt">
                            <h3>
                                @if(session()->get('locale') == 'zh-TW')
                                    <?php echo $data->title_tw ?>
                                @elseif(session()->get('locale') == 'zh-CN')
                                    <?php echo $data->title_cn ?>
                                @elseif(session()->get('locale') == 'en')
                                    <?php echo $data->title_en ?>
                                @endif
                            </h3>
                            <p class="JQellipsis">
                                @if(session()->get('locale') == 'zh-TW')
                                    <?php echo $data->content_tw ?>
                                @elseif(session()->get('locale') == 'zh-CN')
                                    <?php echo $data->content_cn ?>
                                @elseif(session()->get('locale') == 'en')
                                    <?php echo $data->content_en ?>
                                @endif


                        </div>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
        <!-- ProBox end-->
    </div>
</div>
<!-- mainArea ens-->
@endsection