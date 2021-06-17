@extends('layouts.app')
@section('content')
   <div class="history_page">
   <div class="text-center">
        <h2>あなたのアンケート履歴</h2>
    </div>
    @if(count($questions)>0)
    <div class="text-center">
      @foreach ($questions as $question) 
      <a href="{{ route('answers.show',['id' =>$question->id]) }}">
          <li>{{ $question->content }}</li>
      </a>
     　@endforeach
     @else
     <a href="{{ route('questions.create') }}">
<button type="submit" class="btn btn-secondary btn-lg">アンケートを作成する</button>
     </a>
    </div>
    {{ $questions->links() }}
     @endif
     </div>
@endsection
     
        
            