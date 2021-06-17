@extends('layouts.app')
@section('content')
<div class="create_answer">
<div class="answer-button">
<div class="d-flex justify-content-around">
<a href="{{ route('questions.index') }}">
<button type="submit" class="btn_answer btn-outline-primary btn-lg">アンケートに回答する</button>
</a>
<a href="{{ route('questions.create') }}">
<button type="submit" class="btn_create btn-outline-primary btn-lg">アンケートを作成する</button>
</a>
</div>
</div>
<div class="history-button">
<div class="text-center">
<a href="{{ route('history',['user' => $user->id]) }}">
{!! Form::submit('履歴へ', ['class' => 'btn_history btn-outline-success btn-lg']) !!}
</a>
</div>
</div>
</div>
@endsection

