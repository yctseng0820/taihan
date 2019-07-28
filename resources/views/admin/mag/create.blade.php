@extends('admin.layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        磁性材料產品添加
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
            <form method="post" action="{{route('magnetism.store')}}" enctype="multipart/form-data">
            {{  csrf_field()  }}
              <div class="box-body">
                <div class="form-group">
                  <label for="category">分類:</label>
                  <select name="category" id="category">
                  @foreach($datas as $data)
                    <option value="{{$data->id}}">{{$data->title}}</option> 
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="title_tw">產品名稱 - 繁體中文</label>
                  <input type="text" class="form-control" id="title_tw" name="title_tw" placeholder="">
                </div>
                <div class="form-group">
                  <label for="title_cn">產品名稱 - 簡體中文</label>
                  <input type="text" class="form-control" id="title_cn" name="title_cn" placeholder="">
                </div>
                <div class="form-group">
                  <label for="title_en">產品名稱 - 英文</label>
                  <input type="text" class="form-control" id="title_en" name="title_en" placeholder="">
                </div>
                <div class="form-group">
                  <label for="content_tw">產品內容 - 繁體中文</label>
                  <input type="text" class="form-control" id="content_tw" name="content_tw" placeholder="">
                </div>
                <div class="form-group">
                  <label for="content_cn">產品內容 - 簡體中文</label>
                  <input type="text" class="form-control" id="content_cn" name="content_cn" placeholder="">
                </div>
                <div class="form-group">
                  <label for="content_en">產品內容 - 英文</label>
                  <input type="text" class="form-control" id="content_en" name="content_en" placeholder="">
                </div>
                <div class="form-group">
                  <label for="sort">排序:(1~99)</label>
                  <input type="text" class="form-control" id="sort" name="sort" placeholder="">
                </div>
                <div class="form-group">
                  <label for="photo">上傳圖片</label>
                  <input type="file" id="img" name="img[]" multiple>

                  <p class="help-block">Example block-level help text here.</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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
@endsection