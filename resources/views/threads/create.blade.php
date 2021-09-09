@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">New Thread</div>
          <div class="panel-body">
            <!-- エラー発生時、エラーメッセージを表示 -->
            @if($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach($errors->all() as $message)
                    <li>{{ $message }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form action="{{route('threads.create')}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="title">Thread Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}" placeholder="スレッドタイトルを入力" />
              </div>
              <div class="form-group">
                <label for="title">First Comment</label>
                <input type="text" class="form-control" name="response" id="response" placeholder="最初のレスを入力" />
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
