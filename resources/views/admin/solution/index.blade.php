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
              <h3 class="box-title"><b>產業 - 產業列表</b></h3>
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
                  <th>標題 - 繁中</th>
                  <th>標題 - 簡中</th>
                  <th>標題 - 英文</th>
                  <th>內容 - 繁中</th>
                  <th>內容 - 簡中</th>
                  <th>內容 - 英文</th>
                  <th>分類ID</th>
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
                  <td>{{mb_substr($data->content_tw, 0, 30).'...'}}</td>
                  <td>{{mb_substr($data->content_cn, 0, 30).'...'}}</td>
                  <td>{{mb_substr($data->content_en, 0, 30).'...'}}</td>
                  <td>{{$data->category_id}}</td>
                  <td>{{$data->sort}}</td>
                  <td><img src="/uploads/{{$data->img}}" alt="" width="50px;"></td>
                  <td>
                    <button class="btn btn-warning" onclick='jacascript:location.href="{{route('solution.edit', $data->id)}}"'> 
                    修改
                    </button>
                    <!-- <button class="btn btn-danger" onclick='jacascript:location.href="{{route('solution.destroy', $data->id)}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?"''>刪除</button>  -->
                    <button class="btn btn-danger">
                      <a href="{{route('solution.destroy', $data->id)}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="確認刪除?">刪除</a>
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