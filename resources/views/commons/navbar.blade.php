
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">トップページ</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}さん</a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item">{!! link_to_route('questions.index', '一覧ページへ', ['user' => Auth::id()]) !!}</li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">{!! link_to_route('logout.get', 'ログアウト') !!}</li>
                    </ul>
                </li>
                @else
                {{-- ユーザ登録ページへのリンク --}}
                <li>{!! link_to_route('signup.get', '新規登録', [], ['class' => 'nav-link']) !!}</li>
                {{-- ログインページへのリンク --}}
               <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
               @endif
            </ul>
        </div>
    </nav>
</header>