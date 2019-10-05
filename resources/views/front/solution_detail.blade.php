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
                    <img style="widht:100%;" src="uploads\indu_13.png" alt="Indu 13">
                    <blockquote>我們的磁選機還特別用於機械的保護，如破碎機，壓力機，錘磨機，粉碎機，輸送帶，管道，漿料，水泥設備如立式輥磨機，煤磨機，水泥磨機和糖設備如粉碎機，磨機
                        房子，藤壺，泵，管道和研磨機，進料機，螺旋輸送機，鏟斗電梯，攪拌機，攪拌機，噴口，管道，滑槽和許多其他有價值的機械/加工設備，您希望保護他們免受流氓鐵損壞。</blockquote>

                    <h4 class="highlight">&ldquo;淨化您的產品並保護機械&rdquo;</h4>


                    <div class="row pt-5">
                        <div class="col-md-4 infoImg">
                            <a href="product-11.html?id=106">
                                <div class="Txt">
                                    <p>
                                        <h4>
                                            LE03 系列 吊運厚板、鋼錠用起重電磁鐵
                                        </h4>

                                </div>
                                <div class="Img">
                                    <img style="width:100%" src="uploads\products_le_le03_03.png"
                                        alt="Products le le03 03">
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
            </div>

            <!-- 次選單 -->
            <div class="col-lg-3 nopadding">
                <!-- Sidebar -->
                <section id="sidebar">
                    <h3>Solutions </h3>
                    <!-- 產品選單 -->
                    <ul class="proList">

                        @foreach($datas as $data)
                        <li>
                            <a href="{{  route('solution_detail', $data->id)}}" class="proItem">
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