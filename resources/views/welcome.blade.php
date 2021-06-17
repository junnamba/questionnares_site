@extends('layouts.app')

@section('content')
        <div class="bg_test">
        <div class="text-center">
            <h1 class="top1">アンケート制作・回答サイトにようこそ</h1>
            <h3>卒業論文のアンケートに困っている方へ</h3>
            <h3>〜このサイトと契約してアンケートをとろうよ！〜</h3>
@if (!Auth::check())            
            {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-lg btn-dark']) !!}
@endif
        </div>
        </div>

@endsection