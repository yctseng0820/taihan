@extends('front.layout.app')
@section('head')
    <link rel="stylesheet" href="{{  asset('/css/product-in.css')  }}">
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
                @include('front.trans_title')
            </h2>
        </div>


        <div class="row flex-row-reverse">

            <div class="col-lg-9">
                <!-- Content -->
                <section id="content">
                    @include('front.trans_content')
                </section>

            </div>



            <!-- 次選單 -->
            <div class="col-lg-3 nopadding">
                <!-- Sidebar -->
                <section id="sidebar">
                    <h3>
                        最新消息
                    </h3>
                    <!-- 產品選單 -->
                    <ul class="proList">
                        @foreach($datas as $pro)
                        <li>
                            <a href="{{  route('announce_detail', $pro->id)  }}" class="proItem">
                                @include('front.trans_title')
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


<style>
    div.row {
        display: -webkit-flex;
        /* Safari */
        -webkit-flex-direction: row-reverse;
        /* Safari 6.1+ */
        display: flex;
        flex-direction: row-reverse;
    }
</style>
@endsection