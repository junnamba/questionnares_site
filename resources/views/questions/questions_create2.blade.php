@extends('layouts.app')
@section('content')
{!! Form::open(['route' => ['chioces.store', $id]]) !!}
<div class="create2_page">
<div class="text-center">
<h2>アンケート作成ページ</h2>
</div>
<div class="text-left">
<h3>アンケート内容</h3>
</div>

<div class="box-1">
<span>質問文</span>
</div>
<span>{!! Form::textarea('question_text', null, ['class' => 'form-control', 'rows' => '1']) !!}</span>


@for ($i = 1; $i<=5; $i++) 
<div>
<div class="box-2">
<span>{{$i}}</span>
</div>
<div class="text-center">
<span>{!! Form::textarea('choice_text'.$i, null, ['class' => 'form-control', 'rows' => '1']) !!}</span>
</div>
@endfor
</div>

<div class="text-center">
<span>
    <button type="submit" name="btn" value="create" class="btn btn-primary btn-lg">次に進む</button>
</span>

<span>
 <button type="submit" name="btn" value="index" class="btn btn-secondary btn-lg">投稿する</button>
</span>
</div>
</div>
 {!! Form::close() !!}
@endsection






