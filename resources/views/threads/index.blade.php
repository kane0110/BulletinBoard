@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-4">
        <nav class="panel panel-default">
          <div class="panel-heading">ジャンル</div>
          <div class="panel-body">
            <div class="list-group">
              <a href="#" class="list-group-item">
                <!-- ジャンル一覧 -->
              </a>
            </div>
          </div>
        </nav>
      </div>
      <div class="column col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">スレッズ</div>
          <div class="panel-body">
            <div class="text-right">
              <a href="#" class="btn btn-default btn-block">
                スレッドを追加する
              </a>
            </div>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th>タイトル</th>
                <th>レス数</th>
                <th>作成日時</th>
              </tr>
            </thead>
            <tbody>
              @foreach($threads as $thread)
                <tr>
                  <td>
                    <a href="{{ route('responses.index', ['id' => $thread->id]) }}">
                      {{$thread->title}}
                    </a>
                  </td>
                  <td>{{$thread->num_res}}</td>
                  <td>{{$thread->created_at}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
