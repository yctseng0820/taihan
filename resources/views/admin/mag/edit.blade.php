@extends('admin.layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        產品項目修改
        <small>Preview</small>
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
            <form method="post" action="{{route('magnetism.update', $data->id)}}" enctype="multipart/form-data">
            {{  csrf_field()  }}
            {{  method_field('put')}}
              <div class="box-body">
                <div class="form-group">
                  <label for="name">產品名稱</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}">
                </div>
                <div class="form-group">
                  <label for="description">產品描述</label>
                  <input type="text" class="form-control" id="description" name="description" value="{{$data->description}}">
                </div>
                <div class="form-group">
                  <label for="pid">分類:</label>
                  <select name="pid" id="pid">
                    <option value="0">永磁除鐵器</option> 
                    <option value="0">金屬探測器</option> 
                    <option value="0">蔗層除鐵器</option> 
                    <option value="0">磁性過濾機</option> 
                    <option value="0">永磁起重器</option> 
                    <option value="0">電磁除鐵設備</option> 
                    <option value="0">電磁起重器</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="photo">上傳圖片</label>
                  <input type="file" id="photo" name="photo">

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