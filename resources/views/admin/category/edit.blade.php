@extends('admin.layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        產品分類 - 修改
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{  route('category.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{  route('category.index')}}">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="{{route('category.update', $data->id)}}" enctype="multipart/form-data">
            {{  csrf_field()  }}
            {{  method_field('put')  }}
              <div class="box-body">
                <div class="form-group">
                  <label for="main_type">分類:</label>
                  <select name="main_type" id="main_type">
                  @foreach($cates as $cate)
                    @if($data->main_type == $cate->main_type)
                      <option value="{{$cate->main_type}}" selected>{{$tname[$cate->main_type]}}</option> 
                    @else
                      <option value="{{$cate->main_type}}">{{$tname[$cate->main_type]}}</option> 
                    @endif
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="title_tw">產品分類 - 繁體中文 <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" id="title_tw" name="title_tw" required value="{{$data->title_tw}}">
                </div>
                <div class="form-group">
                  <label for="title_cn">產品分類 - 簡體中文 <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" id="title_cn" name="title_cn" required value="{{$data->title_cn}}">
                </div>
                <div class="form-group">
                  <label for="title_en">產品分類 - 英文 <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" id="title_en" name="title_en" required value="{{$data->title_en}}">
                </div>
                <div class="form-group">
                  <label for="content_tw">分類內容 - 繁體中文 <span style="color:red;">*</span></label>
                  <textarea rows="5" col="50" class="form-control" id="content_tw" name="content_tw" required>{{$data->content_tw}}</textarea>
                </div>
                <div class="form-group">
                  <label for="content_cn">分類內容 - 簡體中文 <span style="color:red;">*</span></label>
                  <textarea rows="5" col="50" class="form-control" id="content_cn" name="content_cn" required>{{$data->content_cn}}</textarea>
                </div>
                <div class="form-group">
                  <label for="content_en">分類內容 - 英文 <span style="color:red;">*</span></label>
                  <textarea rows="5" col="50" class="form-control" id="content_en" name="content_en" required>{{$data->content_en}}</textarea>
                </div>

                <div class="form-group">
                <p><b>原始圖片</b></p>
                @if($data->img)
                  <img src="{{url($data->img)}}" alt="" width="30%">
                @else
                  {{"沒有圖片"}}
                @endif
                </div>
                <div class="form-group">
                  <label for="img">上傳圖片</label>
                  <input type="file" id="img" name="img[]" multiple>
                  <p class="help-block">Example block-level help text here.</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">提交</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <script>
    CKEDITOR.replace( 'content_tw' );
    CKEDITOR.replace( 'content_cn' );
    CKEDITOR.replace( 'content_en' );
  </script>
@endsection