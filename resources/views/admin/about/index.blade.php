@extends('admin.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         
        
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>關於我們列表</b></h3>
            </div>
            @if(session()->has('msg'))
            <div class="box-header">
              <h3 class="box-title">{{session('msg')}}</h3>
            </div>
            @endif
            <!-- /.box-header -->
            <div class="box-body" style="overflow:scroll;">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>內容 - 繁中</th>
                  <th>內容 - 簡中</th>
                  <th>內容 - 英文</th>
                  <th>修改/刪除</th>
                </tr>
                </thead>
                @foreach($datas as $data)
                <tbody>
                <tr>
                  <td>{{$data->id}}</td>
                  <td>{{substr($data->content_tw, 0, 30).'...'}}</td>
                  <td>{{substr($data->content_cn, 0, 30).'...'}}</td>
                  <td>{{substr($data->content_en, 0, 30).'...'}}</td>
                  <td>
                    <button class="btn btn-warning" onclick='jacascript:location.href="{{route('about.edit', $data->id)}}"'> 
                    修改
                    </button>
                    <!-- <button class="btn btn-danger" onclick='jacascript:location.href="{{route('about.destroy', $data->id)}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?"''>刪除</button>  -->
                    <button class="btn btn-danger">
                      <a href="{{route('about.destroy', $data->id)}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="確認刪除?">刪除</a>
                    </button>
                  </td>
                </tr>
                </tbody>
                @endforeach
              </table>
              {{$datas->links()}}
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