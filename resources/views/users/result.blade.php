@extends('layouts.app')
@section('content')
   {!! Form::open(['route' => ['answers.show', $id]]) !!}
   <div class="result_page">
   <div class="text-center">
   <h2>あなたのアンケート結果ページ</h2>

   <h3>アンケート名 : {{$question->title}}</h3>

@foreach ($question->choices as $choice)

  <h3>{{$choice->question_text}}</h3>

@foreach ($choice->multiples as $multiple)
<h4>
<li>
   {{$multiple->choice_text}}
  @if ($choice->answers()->count() > 0)
   {{$multiple->answers()->count()}}票
   {{round($multiple->answers()->count()/$choice->answers()->count()*100).'%'}}
   @else 
   まだ回答されていません
   @endif
</li>
</h4>
@endforeach
@endforeach
  </div>
  </div>
@endsection