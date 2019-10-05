@extends('admin.layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        關於我們 - 添加
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{  route('about.index')  }}"><i class="fa fa-dashboard"></i> 關於我們列表</a></li>
        <li class="active">添加</li>
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
            <form method="post" action="{{route('about.store')}}" enctype="multipart/form-data">
            {{  csrf_field()  }}
              <div class="box-body">
                <div class="form-group">
                  <label for="content_tw">產品內容 - 繁體中文 <span style="color:red;">*</span></label>
                  <textarea rows="5" col="50" class="form-control" id="content_tw" name="content_tw" required></textarea>
                </div>
                <div class="form-group">
                  <label for="content_cn">產品內容 - 簡體中文 <span style="color:red;">*</span></label>
                  <textarea rows="5" col="50" class="form-control" id="content_cn" name="content_cn" required></textarea>
                </div>
                <div class="form-group">
                  <label for="content_en">產品內容 - 英文 <span style="color:red;">*</span></label>
                  <textarea rows="5" col="50" class="form-control" id="content_en" name="content_en" required></textarea>
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