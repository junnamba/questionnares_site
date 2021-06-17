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


@foreach ($question->choices as $choice)
 <h4>{{$choice->question_text}}</h4>
    {{-- セレクトボックスの作成 --}}
    <select class="form-control" name="multiple_id[]">
    @foreach ($choice->multiples as $multiple)
     <option value="{{ $multiple->id }}">{{ $multiple->choice_text }}</option>
    @endforeach
    </select>
@endforeach
</div>
<div class="text-center">
    <span>
 <button type="submit" name="btn" value="storeanswers" class="btn_answersubmit btn-secondary btn-lg">回答を送信する</button>
    </span>
</div>
</div>
{!! Form::close() !!}
@endsection
