@extends('layouts.app')
@section('content')
 <div class="create_page">
 <div class="text-center">
    <h2>アンケート作成ページ</h2>
 </div>
 {!! Form::open(['route' => 'questions.store']) !!}
 <div class="text-left">
    <h3>アンケートの名前</h3>
 
 </div>
 <div class="text-center">
  <div class="form-group">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
  </div> 
   <div class="text-left">
    <h3>アンケートの内容説明</h3>
   </div>
   <div class="form-group">
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
  </div> 
 
     <h3>一度入力したら戻れないのでよく注意して入力してください</h3>
    
      {!! Form::submit('次に進む', ['class' => 'btn btn-primary']) !!}
     
</div>
</div>
{!! Form::close() !!}
 @endsection