@extends('admin.layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        產品分類添加
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
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
            <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
            {{  csrf_field()  }}
              <div class="box-body">
                <div class="form-group">
                  <label for="main_type">分類:</label>
                  <select name="main_type" id="main_type">
                    <option value="1">半導體材料</option> 
                    <option value="2">磁性材料</option> 
                  </select>
                </div>
                <div class="form-group">
                  <label for="title_tw">分類標題 - 繁體中文 <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" id="title_tw" name="title_tw" required autofocus>
                </div>
                <div class="form-group">
                  <label for="title_cn">分類標題 - 簡體中文 <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" id="title_cn" name="title_cn" required>
                </div>
                <div class="form-group">
                  <label for="title_en">分類標題 - 英文 <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" id="title_en" name="title_en" required>
                </div>
                <div class="form-group">
                  <label for="content_tw">分類內容 - 繁體中文 <span style="color:red;">*</span></label>
                  <textarea rows="5" col="50" class="form-control" id="content_tw" name="content_tw" required></textarea>
                </div>
                <div class="form-group">
                  <label for="content_cn">分類內容 - 簡體中文 <span style="color:red;">*</span></label>
                  <textarea rows="5" col="50" class="form-control" id="content_cn" name="content_cn" required></textarea>
                </div>
                <div class="form-group">
                  <label for="content_en">分類內容 - 英文 <span style="color:red;">*</span></label>
                  <textarea rows="5" col="50" class="form-control" id="content_en" name="content_en" required></textarea>
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