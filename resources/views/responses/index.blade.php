@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="column col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading"><!-- スレッドタイトル --></div>
          <div class="panel-body">
            <div class="text-right">
              <a href="#" class="btn btn-default btn-block">
                レスを追加する
              </a>
            </div>
          </div>
          <table class="table">
            <tbody>
              <tr>
                <span><!-- レスナンバー --></span>
                <span><!-- name or user_id --></span>
                <span><!-- 投稿日時 --></span>
                <p><!-- 投稿内容 --></p>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
