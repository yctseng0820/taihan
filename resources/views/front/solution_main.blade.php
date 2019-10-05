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
    <!-- 產業類別 industries -->
    <section class="industries">
        <div class="container">
            <div class="titleBox">
                <h2 class="title">Application Market of Magnetic Separator</h2>
                <p>Our Magnetic Separators are also especially used for the protection of Machinery such as Crusher, Press Mill, Hammer Mill, Pulverizers, Conveyor Belts, Pipelines, Slurries, Cement Equipment like Vertical Roller Mill, Coal Mill, Cement Mill &amp; Sugar Equipment like Shredder, Mill House, Cane Cutter, Pumps, Pipelines and Grinders, Feeders, Screw Conveyors, Bucket Elevators, Blenders, Mixers, Spouts, Ducts, Chutes and many other valuable machinery / processing equipment that you want to protect them from tramp iron damaging.</p>
                <h4 class="highlight">“Purify your Products and Protect your Machinery”</h4 class="highlight">
            </div>
            <div class="row ProBox_indu">
                
                @foreach($datas as $data)
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="{{  route('solution_detail', $data->id)  }}">
                        <div class="Img">
                             <img style="width:100%" src="\uploads\{{  $data->img  }}" alt="Indu 01">                            
                        </div>
                        <div class="Txt">
                            <h3>                                
                                @if(session()->get('locale') == 'zh-TW')
                                    {{  $data->title_tw  }}
                                @elseif(session()->get('locale') == 'zh-CN')
                                    {{  $data->title_cn  }}
                                @elseif(session()->get('locale') == 'en')
                                    {{  $data->title_en  }}
                                @endif
                            </h3>
                        </div>
                    </a>
                </div>
                @endforeach
                
                 
                 
            </div>
        </div>
    </section>
    <!-- 產業類別 industries end-->
</div>
@endsection