{!! Form::open(['route' => 'questions.store']) !!}
    <div class="form-group">
        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '1']) !!}
    
        
    </div>
{!! Form::close() !!}