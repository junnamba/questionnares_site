@extends('layouts.app')
@section('content')
<div class="answer_page">
<div class="text-center">
<h2>アンケート回答ページ</h2>
{!! Form::open(['route' =>'answers.store']) !!}
{{-- アンケート名 --}}
<p>
<h3>アンケート名 : {{$question->content}}</h3>
</p>
{{-- 質問（choices）を1つずつ表示していく --}}
<ul>
@foreach ($question->choices as $choice)
<ul style="list-style: none;">
    <h4><li>{{$choice->question_text}}</li></h4>
</ul>
    {{-- セレクトボックスの作成 --}}

    <select class="form-control" name="multiple_id[]">
    @foreach ($choice->multiples as $multiple)
     <h3><option value="{{ $multiple->id }}">{{ $multiple->choice_text }}</option></h3>
    @endforeach
    </select>
</div>
    
@endforeach
</ul>
<div class="text-center">
    <span>
 <button type="submit" name="btn" value="storeanswers" class="btn_answersubmit btn-secondary btn-lg">回答を送信する</button>
    </span>
</div>
</div>
{!! Form::close() !!}
@endsection
