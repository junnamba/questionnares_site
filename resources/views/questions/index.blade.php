@extends('layouts.app')
@section('content')
<div class="index_page">
@if (count($questions) > 0)
@if (session('success'))
<div class="success">
 {{ session('success') }}
</div>
@endif
 <ul class="list-unstyled">
     <div class="text-center">
     <h2>みんなのアンケート一覧</h2>
  @foreach ($questions as $question)
  @if (Auth::user()->checkanswers($question->id))
  <li>
 {{$question->title}}
</li>
@else
     <li>
     <a href="{{ route('questions.answer',['id' =>$question->id]) }}">
      {{$question->title}}
      </a>
      </li>
   @endif   
　@endforeach
　</div>
 </ul>
 <div class="d-flex justify-content-center">
 {{ $questions->links() }}
 </div>
@endif
<div class="text-center">
{!! link_to_route('mypage.show', 'マイページへ', [], ['class'=> 'btn btn-primary']) !!}
</div>
</div>
@endsection