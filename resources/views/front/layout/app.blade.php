<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{asset('\assets\images\logo-122x70.png')}}" type="image/x-icon">
  <meta name="description" content="TAI HAN ENTERPRISE CO., LTD">
  <meta name="keywords" content="泰翰,ThiHan,ENTERPRISE,磁性,磁鐵,Magnetic">
  <title> {{trans('mySite.title')}}</title>

  <link rel="stylesheet" href="{{asset('\assets\web\\assets\mobirise-icons\mobirise-icons.css')}}">
  <link rel="stylesheet" href="{{asset('\assets\tether\tether.min.css')}}">
  <link rel="stylesheet" href="{{asset('\assets\bootstrap\css\bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('\assets\bootstrap\css\bootstrap-grid.min.css')}}">
  <link rel="stylesheet" href="{{asset('\assets\bootstrap\css\bootstrap-reboot.min.css')}}">
  <link rel="stylesheet" href="{{asset('\assets\socicon\css\styles.css')}}">
  <link rel="stylesheet" href="{{asset('\assets\animatecss\animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('\assets\dropdown\css\style.css')}}">
  <link rel="stylesheet" href="{{asset('\assets\theme\css\style.css')}}">
  <link rel="stylesheet" href="{{asset('\assets\mobirise\css\mbr-additional.css')}}" type="text/css">


  <link rel="stylesheet" href="{{asset('\css\main.css')}}">
  @yield('head')
</head>

<body>
  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <div class="menu-logo">
          <!-- menu-logo -->
          <div class="navbar-brand">
            <!-- navbar-brand -->
            <span class="navbar-logo">
              <a href="{{url('/')}}">
                <img src="\images\logo.png" style="height: 2.8rem;">
              </a>
            </span>
          </div>
          <!-- navbar-brand end-->

        </div>
        <!-- menu-logo end-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mr-auto" id="navbarTogglerDemo02">
          <ul class="navbar-nav  mt-2 mt-lg-0">
            <li class="nav-item ">
              <a class="nav-link" href="{{url('/product_main')}}">{{  trans('mySite.products')  }}</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="solutions_main.html">{{  trans('mySite.solutions')  }}</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="safety_advice.html">{{  trans('mySite.safetyAdvice')  }}</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="annos.html">{{  trans('mySite.news')  }}</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="contact.html">{{  trans('mySite.contactUs')  }}</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="about.html">{{  trans('mySite.company')  }}</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">{{  trans('mySite.language')  }}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- 發送隱藏表單更改語言 -->
                <a class="dropdown-item" href="javascript:" onclick="getElementById('zh-TW').submit()">繁體中文</a>
                <form action="{{route('language-chooser')}}" method='post' id="zh-TW">
                  <input type="hidden" name="locale" value="zh-TW">
                  {{csrf_field()}}
                </form>
                <a class="dropdown-item" href="javascript:" onclick="getElementById('zh-CN').submit()">简体中文</a>
                <form action="{{route('language-chooser')}}" method='post' id="zh-CN">
                  <input type="hidden" name="locale" value="zh-CN">
                  {{csrf_field()}}
                </form>
                <a class="dropdown-item" href="javascript:" onclick="getElementById('en').submit()">English</a>
                <form action="{{route('language-chooser')}}" method='post' id="en">
                  <input type="hidden" name="locale" value="en">
                  {{csrf_field()}}
                </form>
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  @yield('content')

  <footer>
    <div class="container">
      <div class="row text-">
        <div class="col-md-4 d-flex align-items-center">
          <p> Copyright © TAI HAN EQUIPMENT ENTERPRISE CO., LTD</p>
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-12 icon-map">
              <span><i class="fas fa-map-marker-alt"></i>
                總公司：104 台北市中山區新生北路三段88巷44號
              </span>
            </div>

            <div class="col-md-12">

              <span><i class="fas fa-phone-square"></i> +886 2 2595-5983 </span>&nbsp;
              <span><i class="fas fa-fax"></i> +886 2 2595-9393 </span>&nbsp;
              <span><i class="fas fa-envelope"></i> info@thmageq.com </span>
            </div>


            <div class="col-12 icon-map">
              <span><i class="fas fa-map-marker-alt"></i>
                新竹辦事處：302 新竹縣竹北市興隆路三段61號
              </span>
            </div>

            <div class="col-md-12">
              <span><i class="fas fa-phone-square"></i> +886 3 668-5699 </span>&nbsp;
              <span><i class="fas fa-fax"></i> +886 3 668-2989 </span>&nbsp;
              <span><i class="fas fa-envelope"></i> info@thmageq.com </span>
            </div>




          </div>
        </div>

      </div>
    </div>

  </footer>


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="{{asset('\assets\web\\assets\jquery\jquery.min.js')}}"></script>
  <script src="{{asset('\assets\popper\popper.min.js')}}"></script>
  <script src="{{asset('\assets\tether\tether.min.js')}}"></script>
  <script src="{{asset('\assets\bootstrap\js\bootstrap.min.js')}}"></script>
  <script src="{{asset('\assets\smoothscroll\smooth-scroll.js')}}"></script>
  <script src="{{asset('\assets\touchswipe\jquery.touch-swipe.min.js')}}"></script>
  <script src="{{asset('\assets\viewportchecker\jquery.viewportchecker.js')}}"></script>
  <script src="{{asset('\assets\parallax\jarallax.min.js')}}"></script>
  <script src="{{asset('\assets\dropdown\js\script.min.js')}}"></script>
  <script src="{{asset('\assets\theme\js\script.js')}}"></script>

  <div id="scrollToTop" class="scrollToTop mbr-arrow-up">
    <a style="text-align: center;"><i></i></a>
  </div>
  <input name="animation" type="hidden">



</body>

</html>