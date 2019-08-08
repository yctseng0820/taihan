@extends('admin.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>標題 - 繁中</th>
                  <th>標題 - 簡中</th>
                  <th>標題 - 英文</th>
                  <th>內容 - 繁中</th>
                  <th>內容 - 簡中</th>
                  <th>內容 - 英文</th>
                  <th>排序</th>
                  <th>圖片</th>
                  <th>修改/刪除</th>
                </tr>
                </thead>
                @foreach($datas as $data)
                <tbody>
                <tr>
                  <td>{{$data->id}}</td>
                  <td>{{$data->title_tw}}</td>
                  <td>{{$data->title_cn}}</td>
                  <td>{{$data->title_en}}</td>
                  <td>{{$data->content_tw}}</td>
                  <td>{{$data->content_cn}}</td>
                  <td>{{$data->content_en}}</td>
                  <td>{{$data->sort}}</td>
                  <td>{{$data->img}}</td>
                  <td>
                    <button class="btn btn-warning" onclick='jacascript:location.href="{{route('announce.edit', $data->id)}}"'> 
                    修改
                    </button>
                    <!-- <button class="btn btn-danger" onclick='jacascript:location.href="{{route('magnetism.destroy', $data->id)}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?"''>刪除</button>  -->
                    <button class="btn btn-danger">
                      <a href="{{route('announce.destroy', $data->id)}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="確認刪除?">刪除</a>
                    </button>
                  </td>
                </tr>
                </tbody>
                @endforeach
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  @endsection