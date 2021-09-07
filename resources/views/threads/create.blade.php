@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">New Thread</div>
          <div class="panel-body">
            <form action="#" method="POST">
              @csrf
              <div class="form-group">
                <label for="title">Thread Title</label>
                <input type="text" class="form-control" name="title" id="title" value="スレッドタイトルを入力" />
              </div>
              <div class="form-group">
                <label for="title">First Comment</label>
                <input type="text" class="form-control" name="response" id="response" value="最初のレスを入力" />
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">作成</button>
              </div>
            </form>
          </div>
        </nav>
      </div>
    </div>
  </div>
@endsection
