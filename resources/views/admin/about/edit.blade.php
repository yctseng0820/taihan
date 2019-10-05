@extends('admin.layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @if(session()->has('success'))
    <h1 style="background:pink;color:green; text-align:center;">{{ session()->pull('success')}}</h1>
    @endif
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        關於我們 - 修改
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{  route('about.index')  }}"><i class="fa fa-dashboard"></i> 關於我們列表</a></li>
        <li class="active">修改</li>
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
            <form method="post" action="{{route('about.update', $data->id)}}" enctype="multipart/form-data">
            {{  csrf_field()  }}
            {{  method_field('put')  }}
              <div class="box-body">
                <div class="form-group">
                  <label for="content_tw">產品內容 - 繁體中文 <span style="color:red;">*</span></label>
                  <textarea rows="5" col="50" class="form-control" id="content_tw" name="content_tw" required>{{$data->content_tw}}</textarea>
                </div>
                <div class="form-group">
                  <label for="content_cn">產品內容 - 簡體中文 <span style="color:red;">*</span></label>
                  <textarea rows="5" col="50" class="form-control" id="content_cn" name="content_cn" required>{{$data->content_cn}}</textarea>
                </div>
                <div class="form-group">
                  <label for="content_en">產品內容 - 英文 <span style="color:red;">*</span></label>
                  <textarea rows="5" col="50" class="form-control" id="content_en" name="content_en" required>{{$data->content_en}}</textarea>
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