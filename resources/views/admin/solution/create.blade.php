@extends('admin.layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        磁性材料 - 產品添加
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{  route('magnetism.index')  }}"><i class="fa fa-dashboard"></i> 磁性材料產品列表</a></li>
        <li class="active">產品添加</li>
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
            <form method="post" action="{{route('magnetism.store')}}" enctype="multipart/form-data">
            {{  csrf_field()  }}
              <div class="box-body">
                <div class="form-group">
                  <label for="category_id">分類:</label>
                  <select name="category_id" id="category_id">
                  @foreach($datas as $data)
                    <option value="{{$data->id}}">{{$data->title_tw}}</option> 
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="title_tw">產品名稱 - 繁體中文 <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" id="title_tw" name="title_tw" required autofocus>
                </div>
                <div class="form-group">
                  <label for="title_cn">產品名稱 - 簡體中文 <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" id="title_cn" name="title_cn" required>
                </div>
                <div class="form-group">
                  <label for="title_en">產品名稱 - 英文 <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" id="title_en" name="title_en" required>
                </div>
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
                <div class="form-group">
                  <label for="sort">排序:(1~99)</label>
                  <input type="number" class="form-control" id="sort" name="sort" placeholder="1~99">
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