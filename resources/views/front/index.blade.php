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
                        <a href="{{url('/product_main')}}">
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
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions.html?id=30">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_01.png" alt="Indu 01">
                        </div>
                        <div class="Txt">
                            <h3>
                                動物飼料
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-1.html?id=31">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_02.png" alt="Indu 02">
                        </div>
                        <div class="Txt">
                            <h3>
                                電池材料
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-2.html?id=32">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_03.png" alt="Indu 03">
                        </div>
                        <div class="Txt">
                            <h3>
                                陶瓷和瓷磚行業
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-3.html?id=33">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_04.png" alt="Indu 04">
                        </div>
                        <div class="Txt">
                            <h3>
                                水泥工業
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-4.html?id=34">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_05.png" alt="Indu 05">
                        </div>
                        <div class="Txt">
                            <h3>
                                化學工業
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-5.html?id=35">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_06.png" alt="Indu 06">
                        </div>
                        <div class="Txt">
                            <h3>
                                食品飲料行業
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-6.html?id=36">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_07.png" alt="Indu 07">
                        </div>
                        <div class="Txt">
                            <h3>
                                化肥行業
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-7.html?id=37">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_08.png" alt="Indu 08">
                        </div>
                        <div class="Txt">
                            <h3>
                                麵粉廠
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-8.html?id=38">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_09.png" alt="Indu 09">
                        </div>
                        <div class="Txt">
                            <h3>
                                玻璃工業
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-9.html?id=39">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_10.png" alt="Indu 10">
                        </div>
                        <div class="Txt">
                            <h3>
                                糧食行業
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-10.html?id=40">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_11.png" alt="Indu 11">
                        </div>
                        <div class="Txt">
                            <h3>
                                礦產礦業
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-11.html?id=41">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_12.png" alt="Indu 12">
                        </div>
                        <div class="Txt">
                            <h3>
                                水漁產
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-12.html?id=42">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_13.png" alt="Indu 13">
                        </div>
                        <div class="Txt">
                            <h3>
                                物料搬運
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-13.html?id=43">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_14.png" alt="Indu 14">
                        </div>
                        <div class="Txt">
                            <h3>
                                油廠
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-14.html?id=44">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_15.png" alt="Indu 15">
                        </div>
                        <div class="Txt">
                            <h3>
                                製藥
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-15.html?id=45">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_16.png" alt="Indu 16">
                        </div>
                        <div class="Txt">
                            <h3>
                                紙業
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-16.html?id=46">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_17.png" alt="Indu 17">
                        </div>
                        <div class="Txt">
                            <h3>
                                塑料和PVC行業
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-17.html?id=47">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_18.png" alt="Indu 18">
                        </div>
                        <div class="Txt">
                            <h3>
                                回收
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-18.html?id=48">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_19.png" alt="Indu 19">
                        </div>
                        <div class="Txt">
                            <h3>
                                糖廠
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-19.html?id=49">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_20.png" alt="Indu 20">
                        </div>
                        <div class="Txt">
                            <h3>
                                火柴行業
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-20.html?id=50">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_21.png" alt="Indu 21">
                        </div>
                        <div class="Txt">
                            <h3>
                                紡織工業
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-21.html?id=51">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_22.png" alt="Indu 22">
                        </div>
                        <div class="Txt">
                            <h3>
                                木業
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 ProItem">
                    <a href="solutions-22.html?id=52">
                        <div class="Img">
                            <img style="width:100%;" src="uploads\indu_23.png" alt="Indu 23">
                        </div>
                        <div class="Txt">
                            <h3>
                                毛紡行業
                            </h3>
                        </div>
                    </a>
                </div>

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
                        <div class="NewsItem">
                            <a href="anno.html?id=4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="Img" style="background-image: url(uploads/news-03.png);"></div>
                                    </div>
                                    <div class="Txt col-md-8">
                                        <h4>
                                            秋刀魚罐頭出現金屬片日大廠回收2700萬個...
                                        </h4>
                                        <p>
                                            秋刀魚罐頭出現金屬片日大廠回收2700萬個

                                            2016-11-04 23:58

                                            〔中央社〕日本食品大廠Maruha Nichiro今...
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="NewsItem">
                            <a href="anno-1.html?id=3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="Img" style="background-image: url(uploads/news-01.png);"></div>
                                    </div>
                                    <div class="Txt col-md-8">
                                        <h4>
                                            幼兒穀類早點懷疑含金屬線...
                                        </h4>
                                        <p>
                                            食安中心呼籲市民不要食用一款懷疑含金屬線的幼兒穀類早點.

                                            　　食物環境衞生署食物安全中心（中心）今日（十月二十五日）呼籲市民不要食用一款...
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="NewsItem">
                            <a href="anno-2.html?id=2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="Img" style="background-image: url(uploads/news-02.png);"></div>
                                    </div>
                                    <div class="Txt col-md-8">
                                        <h4>
                                            澳洲超市麵包裡發現鐵屑...
                                        </h4>
                                        <p>
                                            小心！Coles和Woolworths的麵包裡有铁屑，正在召回！

                                            根据《SMH》报道，一家常见的面包品牌召回了他们的Coles、Wool...
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

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
                        <h4>• 經驗豐富的核心技術</h4>
                        <p>雄厚的核心技術,具備創新和專業能力的專業團隊提供了持續發展實力。</p>
                        <h4>• 磁性應用技術</h4>
                        <p>在積極擴展我們的磁鐵相關產品以滿足全球客戶需求的同時,我們的研發團隊同時展限專業技術,不斷研發磁性應用技術,並成功開發出一系列高品質的金屬分離器,能供應塑料,回收,食品和飲料等各個行業的需求。
                        </p>
                        <h4>• 客製化生產</h4>
                        <p>憑藉豐富的經驗,我們的工程部門為各行業的不同生產線設計客製化的除鐵器,與客戶合作無間,讓產品達到最高效能的應用。</p>
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
                        <h4>• 20年的經驗和知識</h4>
                        <p>泰翰團隊擁有超過20年磁性材料經驗和產品管理經驗。</p>
                        <h4>• 資深顧問</h4>
                        <p>資深顧問能從學術和實務角度為全球客戶提供專業技術解決方案。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 關於我們ＥＮＤ -->
</div>
@endsection