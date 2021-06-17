@extends('layouts.app')
@section('content')
<div class="text-center">
<h2>{{ Auth::question()->name }}のアンケート結果</h2>
<ul>
 @foreach ($questions as $question)
 
     <li>{{ $question->content }}</li>
　@endforeach
</ul>
</div>
@endsection