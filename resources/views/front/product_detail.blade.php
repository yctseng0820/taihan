@extends('front.layout.app')
@section('head')
  <link rel="stylesheet" href="\css\product-in.css">
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

    <div class="mainArea">
        <div class="container">
            <div class="titleBox">
                <h2 class="title">
                @if(session()->get('locale') == 'zh-TW')
                    {{  $pro->title_tw  }}
                @elseif(session()->get('locale') == 'zh-CN')
                    {{  $pro->title_cn  }}
                @elseif(session()->get('locale') == 'en')
                    {{  $pro->title_en  }}
                @endif
                </h2>
            </div>

            <div class="row flex-row-reverse">

                <div class="col-lg-9">
                    <!-- Content -->
                    <section id="content">
                        <div class="row">
                        @if(session()->get('locale') == 'zh-TW')
                            <?php echo $pro->content_tw ;?>
                        @elseif(session()->get('locale') == 'zh-CN')
                            <?php echo $pro->content_cn ;?>
                        @elseif(session()->get('locale') == 'en')
                            <?php echo $pro->content_en ;?>
                        @endif
                            
                        
                        </div>
                    </section>

                </div>
                <!-- 次選單 -->
                <div class="col-lg-3 nopadding">
                    <!-- Sidebar -->
                    <section id="sidebar">
                        <h3>
                            永磁除鐵器
                        </h3>
                        <!-- 產品選單 -->
                        <ul class="proList">
                            @foreach($datas as $data)
                            <li>
                                <a href="{{  route('product_detail', $data->id)  }}" class="proItem">
                                @if(session()->get('locale') == 'zh-TW')
                                    {{  $data->title_tw  }}
                                @elseif(session()->get('locale') == 'zh-CN')
                                    {{  $data->title_cn  }}
                                @elseif(session()->get('locale') == 'en')
                                    {{  $data->title_en  }}
                                @endif
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <!-- 產品選單 end -->
                    </section>
                </div>
                <!-- 次選單 end -->
            </div>
        </div>
    </div>
@endsection